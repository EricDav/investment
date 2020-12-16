<?php
    include 'helper.php';
    include 'model.php';
    include 'connection.php';

    // var_dump($pdo); exit;
    function handleSignupRequest() {
        $errorMessages = array();
        $pdo = (object)['pdo' => DBConnection::getDB()];
        // var_dump($pdo->pdo); exit;

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $isValidFirstName = Helper::isValidName($firstName);
        $isValidLastName = Helper::isValidName($lastName);
        $isValidEmail = Helper::isValidEmail($email);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        if (!$isValidEmail['isValid']) {
            $errorMessages['email'] = $isValidEmail['message'];
        }

        if (!$isValidFirstName['isValid']) {
            $errorMessages['firstName'] = $isValidFirstName['message'];
        }

        if (!$isValidLastName['isValid']) {
            $errorMessages['lastName'] = $isValidLastName['message'];
        }

        if (!trim($password)) {
            $errorMessages['password'] = 'Password is required';
        }

        if (sizeof($errorMessages) != 0) {
            Helper::jsonResponse(array('success' => false, 'message' => $errorMessages));
        } else {
            if (Model::findOne($pdo, array('email' => $email), 'users')) {
                Helper::jsonResponse(array('success' => false, 'message' => array('email' => 'Email already exists')));
            }

            $yourCode = Helper::generatePin();
            $userData = array(
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'password' => $passwordHash,
                'role' => 1,
                'date_created' => gmdate("Y-m-d\ H:i:s"),
                'code_token' => $yourCode,
                'code_time' => gmdate("Y-m-d\ H:i:s"),
                'email_verified' => 0
            );
            
            // Model::update($pdo, array('code_token' => $yourCode), array('id'=> $userId), 'users')

            $message = "<h3>Your verification code: " . $yourCode . "</div>";
            $mail = new SendMail($email, "Account Verification", $message, true);
            $mail->send();
            $userId = Model::create($pdo, $userData, 'users');
            $userData['id'] = $userId;
            $_SESSION['userInfo'] = $userData;
            Helper::jsonResponse(array('success' => true, 'message' => 'User created successfully', 'userId' => $userId));
        }
    }

    function handleSigninRequest() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $isValidEmail = Helper::isValidEmail($email);
        $pdo = (object)['pdo' => DBConnection::getDB()];

        if (!trim($password)) {
            Helper::jsonResponse(array('success' => false, 'message' => 'Password is required'));
        }

        if (!$isValidEmail['isValid']) {
            Helper::jsonResponse(array('success' => false, 'message' => $isValidEmail['message']));
        }

        $user = Model::findOne($pdo, array('email' => $email), 'users');
        if ($user === 'Server error') {
            Helper::jsonResponse(array('success' => false, 'message' => 'Server error'));
        }

        if (!$user) {
            Helper::jsonResponse(array('success' => false, 'message' => 'Invalid email address or password'));
        }

        if (is_array($user) && password_verify($password, $user['password'])) {
         //   $user['password'] = '';
         //   $_SESSION['userInfo'] = $user;
            Helper::jsonResponse(array('success' => true, 'message' => 'logged in successfully'));
        }

        Helper::jsonResponse(array('success' => false, 'message' => 'Invalid email address or password'));

    }

    function handleVerification() {
        $pdo = (object)['pdo' => DBConnection::getDB()];
        $verificationCode = $_POST['code'];
        $id = $_POST['id'];

        if (!is_numeric($id) || !is_numeric($verificationCode)) {
            Helper::jsonResponse(array('success' => false, 'message' => 'Invalid request'));
        }

        $user = Model::findOne($pdo, array('id' => $id), 'users');

        if ($user['code_token'] == $verificationCode) {
            if (Model::update($pdo, array('email_verified' => 1), array('id'=> $id), 'users')) {
                Helper::jsonResponse(array('success' => true, 'message' => 'Account verified'));
            }
            Helper::jsonResponse(array('success' => false, 'message' => 'Server error'));
        } else {
            Helper::jsonResponse(array('success' => false, 'message' => 'Invalid verification code'));
        }
    }
?>