<?php
    function handleSignupRequest() {
        $firstName = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $isValidFirstName = Helper::isValidName($firstName);
        $isValidLastName = Helper::isValidName($lastName);
        $isValidEmail = Helper::isValidEmail($email);

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

        if (sizeof($errorMessages) == 0) {
            Helper::jsonResponse(array('success' => false, 'message' => $errorMessages));
        } else {

        }
    }







?>