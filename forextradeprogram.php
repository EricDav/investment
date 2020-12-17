<?php 

$errorMessages = array();
$isSuccess = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'helper.php';
    include 'model.php';
    include 'connection.php';

    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : null;

    $isValidName = Helper::isValidName($name);
    $isValidEmail = Helper::isValidEmail($email);

    if (!$isValidEmail['isValid']) {
        $errorMessages['email'] = $isValidEmail['message'];
    }

    if (!$isValidName['isValid']) {
        $errorMessages['name'] = $isValidName['message'];
    }

    if (!is_numeric($phoneNumber) || strlen($phoneNumber) != 11) {
        $errorMessages['phoneNumber'] = 'Invalid phone number';
    }

    if (sizeof($errorMessages) == 0) {
        $pdo = (object)['pdo' => DBConnection::getDB()];
        if (Model::findOne($pdo, array('email' => $email), 'forex')) {
            $errorMessages['email'] = 'This email has been registered';
        } else if (Model::findOne($pdo, array('phone_number' => $phoneNumber), 'forex')) {
            $errorMessages['phoneNumber'] = 'This phone number has been registered';
        } else {
            if (Model::create($pdo, array('email' => $email, 'name' => $name, 'phone_number' => $phoneNumber, 'date_created' => gmdate("Y-m-d\ H:i:s")), 'forex')) {
                $isSuccess = true;
            }
        }
    }

}


?>



<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <div class="main--body">
        <!--========== Preloader ==========-->
        <div class="preloader">
            <div class="preloader-wrapper">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->


        <!--=======Header-Section Starts Here=======-->
        <?php include 'header.php'; ?>
        <?php include 'signupmodal.php';?>
        <?php include 'loginmodal.php';?>
        <?php include 'verificationmodal.php';?>
        <?php include 'successmodal.php';?>
        <!--=======Header-Section Ends Here=======-->


        <!--=======Banner-Section Starts Here=======-->
        <!-- <section class="bg_img hero-section-2 left-bottom-lg-max" data-background="<?=$subPath . '/assets/images/about/hero-bg5.png'?>">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Contact</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                        <a href="/contact">ForexTradeProgram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->
        <!--=======Banner-Section Ends Here=======-->
        <section style="margin-top: 140px;" class="affiliate-programe" id="affiliate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 padding-bottom padding-top">
                        <div class="section-header left-style">
                            <span class="cate">What You’ll Get In Our</span>
                            <h2 class="title fz-md-49">Forex Trade Program</h2>
                            <p>
                                We give you the opportunity to become a professional Forex trader within the space of 4 months. The first batch begins by January
                            </p>
                        </div>
                        <div class="affiliate-wrapper">
                        </div>
                        <div class="affiliate-bottom">
                            <h6 class="title">What you will learn</h6>
                            <p>- Basic of Forex Trading</p>
                            <p>- Trading Psychology</p>
                            <p>- Risk Management</p>
                            <p>- BTMM</p>
                            <p>- ICT</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none">
                        <div class="afiliate-thumb">
                            <img src="<?=$subPath . '/assets/images/affiliate/affiliate.png'?>" alt="affiliate">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=======Contact-Section Starts Here=======-->
        <section class="contact-section padding-bottom padding-top">
            <div class="container">
                <div class="contact-wrapper padding-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-xl-4 offset-xl-1">
                            <div class="contact-header">
                                <h4 class="title">Register for the program</h4>
                                <p>If you are ready to become a forex trader?</p>
                                <p>
                                    Training Feee <b>$100</b>
                                </p>
                            </div>
                            <div class="contact-content">
                                <h3 class="title">Have questions?</h3>
                                <a href="/faq">Read F.A.Q <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-xl-1">
                            <form action="/forex-trade-program" method="post" class="contact-form" id="contact_form_submit">
                                <?php if($isSuccess): ?>
                                    <div id="n-success" class="alert alert-success success-message" role="alert">
                                        Registered successfully
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="name">Full name</label>
                                    <input type="text" id="firstname" placeholder="name" name="name" value="<?=(isset($name) ? $name : '')?>" required>
                                    <span class="error-message"><?=(isset($errorMessages['name']) ? $errorMessages['name'] : '' )?></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" id="femail" placeholder="Enter your email" name="email" value="<?=(isset($email) ? $email : '')?>" required>
                                    <span class="error-message"><?=(isset($errorMessages['email']) ? $errorMessages['email'] : '' )?></span>
                                </div>
                                <div class="form-group">
                                    <label for="message">Phone number</label>
                                    <input type="number" id="phonenumber" placeholder="Enter your phone number" name="phoneNumber" value="<?=(isset($phoneNumber) ? $phoneNumber : '')?>" required>
                                    <span class="error-message"><?=(isset($errorMessages['phoneNumber']) ? $errorMessages['phoneNumber'] : '' )?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Contact-Section Ends Here=======-->


        <!-- ==========Footer-Section Starts Here========== -->
        <?php include 'footer.php'; ?>
        <!-- ==========Footer-Section Ends Here========== -->

    </div>

    <?php include 'script.php'; ?>
</body>

</html>
