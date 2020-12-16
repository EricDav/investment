<?php
session_start();
include_once 'sendmail.php';
$subPath = $_SERVER['HTTP_HOST'] == 'localhost:8888' ? '/investment' : '';
$url = explode('?', $_SERVER['REQUEST_URI'])[0];
if ($url == '/about') {
  include 'about.php';
  exit;
} else if ($url == '/contact') {
  include 'contact.php';
  exit;
} else if ($url == '/signup') {
    include 'controller.php';
    handleSignupRequest();
} else if ($url == '/login') {
    include 'controller.php';
    handleSigninRequest();
} else if ($url == 'verify-account') {
    include 'controller.php';
    handleVerification();
} else if ($url == '/') {
  // pass
} else if ($url == '/faq') {
    include 'faq.php';
    exit;
} else {
  header("Location: /");
}


?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<?php include 'investmodal.php'; ?>

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

        <?php include 'header.php';?>
        <?php include 'signupmodal.php';?>
        <?php include 'loginmodal.php';?>
        <?php include 'verificationmodal.php';?>

        <!--=======Banner-Section Starts Here=======-->
        <section class="banner-section" id="home">
            <div class="banner-bg d-lg-none">
                <img src= "<?=$subPath .'/assets/images/banner/banner-bg2.jpg'?>" alt="banner">
            </div>
            <div class="banner-bg d-none d-lg-block bg_img" data-background="<?=$subPath . '/assets/images/banner/banner.jpg'?>">
                <div class="chart-1 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
                    <img src="<?=$subPath . '/assets/images/banner/chart1.png'?>" alt="banner">
                </div>
                <div class="chart-2 wow fadeInDown" data-wow-delay="1s" data-wow-duration=".7s">
                    <img src="<?=$subPath . '/assets/images/banner/chart2.png'?>" alt="banner">
                </div>
                <div class="chart-3 wow fadeInRight" data-wow-delay="1.5s" data-wow-duration=".7s">
                    <img src="<?=$subPath . '/assets/images/banner/chart3.png'?>" alt="banner">
                </div>
                <div class="chart-4 wow fadeInUp" data-wow-delay="2s" data-wow-duration=".7s">
                    <img src="<?=$subPath . '/assets/images/banner/clock.png'?>" alt="banner">
                </div>
            </div>
            <div class="animation-area d-none d-lg-block">
                <div class="plot">
                    <img src="<?=$subPath . '/assets/images/banner/plot.png'?>" alt="banner">
                </div>
                <div class="element-1 wow fadeIn" data-wow-delay="1s">
                    <img src="<?= $subPath . '/assets/images/banner/light.png'?>" alt="banner">
                </div>
                <div class="element-2 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin1.png'?>" alt="banner">
                </div>
                <div class="element-3 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin2.png'?>" alt="banner">
                </div>
                <div class="element-4 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin3.png'?>" alt="banner">
                </div>
                <div class="element-5 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin4.png'?>" alt="banner">
                </div>
                <div class="element-6 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin5.png'?>" alt="banner">
                </div>
                <div class="element-7 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin6.png'?>" alt="banner">
                </div>
                <div class="element-8 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/sheild.png'?>" alt="banner">
                </div>
                <div class="element-9 wow fadeIn" data-wow-delay="1s">
                    <img src="<?=$subPath . '/assets/images/banner/coin7.png'?>" alt="banner">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                        <div class="banner-content">
                            <h1 class="title">Simply <span>Profitably </span> Conveniently</h1>
                            <p>
                                A Profitable platform for high-margin investment
                            </p>
                            <div class="button-group">
                                <a data-toggle="modal" data-target="#loginModal" href="#0" class="custom-button">Get Started Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Counter-Section Starts Here=======-->
        <div class="counter-section">
            <div class="container">
                <div class="row align-items-center mb-30-none justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="<?=$subPath . '/assets/images/counter/counter01.png'?>" alt="counter">
                            </div>
                            <div class="counter-content">
                                <div class="counter-header">
                                    <h3 class="title odometer" data-odometer-final="36.9">0</h3>
                                    <h3 class="title">M</h3>
                                </div>
                                <p>Registered users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">

                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="<?=$subPath . '/assets/images/counter/counter03.png'?>" alt="counter">
                            </div>
                            <div class="counter-content">
                                <div class="counter-header">
                                    <h3 class="title">$</h3>
                                    <h3 class="odometer title" data-odometer-final="10.8">0</h3>
                                    <h3 class="title">M</h3>
                                </div>
                                <p>Average Investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======Counter-Section Ends Here=======-->


        <!--=======About-Section Starts Here=======-->
        <section class="about-section padding-top padding-bottom" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block rtl">
                        <img src="<?=$subPath . '/assets/images/about/about.png'?>" alt="about">
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header left-style">
                            <span class="cate">WELCOME TO WISEINVESTMENT</span>
                            <h2 class="title">about wiseinvestment</h2>
                            <p>
                                We are an hedge fund that pools funds from our investors while we trade and invest the money together for them in the financial markets..
                            </p>
                        </div>
                        <div class="about--content">
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="<?=$subPath . '/assets/images/about/about01.png'?>" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">Secure & Reliable</h5>
                                    <p>
                                        Secure assets fund for users
                                    </p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="<?=$subPath . '/assets/images/about/about02.png'?>" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">Fast Withdrawals</h5>
                                    <p>
                                        Quick money withdrawals for users
                                    </p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="<?=$subPath . '/assets/images/about/about03.png'?>" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">Guaranteed</h5>
                                    <p>
                                        Your return on investment is guaranteed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======About-Section Ends Here=======-->


        <!--=======Feature-Section Starts Here=======-->
        <section class="feature-section padding-top padding-bottom bg_img" data-background="<?=$subPath . '/assets/images/feature/feature-bg.png'?>" id="feature">
            <div class="ball-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball1.png'?>" alt="balls">
            </div>
            <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball2.png'?>" alt="balls">
            </div>
            <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball3.png'?>" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-header">
                            <span class="cate">Our Amazing Features</span>
                            <h2 class="title">
                                why should you invest
                            </h2>
                            <p class="mw-100">
                            We have an highly diversified portfolio and well calculated risk management measures and strategies to ensure our investors money is secured, properly managed, grown and periodic returns delivered to all our investors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center feature-wrapper">
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="<?=$subPath . '/assets/images/feature/feature01.png'?>" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">Profitable Investment</h5>
                                <!-- <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="<?=$subPath . '/assets/images/feature/feature02.png'?>" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">Secured Payment</h5>
                                <!-- <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="<?=$subPath . '/assets/images/feature/feature03.png'?>" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">24/7 Support Center</h5>
                                <!-- <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Feature-Section Ends Here=======-->


        <!--=======How-Section Starts Here=======-->
        <section class="get-section padding-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-header">
                            <span class="cate">get to know</span>
                            <h2 class="title">how we work?</h2>
                            <p>
                                Follow these simple steps and make profit!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hover-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-lg-block d-none">
                            <div class="hover-tab-area">
                                <div class="tab-area">
                                    <div class="tab-item active first">
                                        <img src="<?=$subPath . '/assets/images/how/how01.png'?>" alt="how">
                                    </div>
                                    <div class="tab-item second">
                                        <img src="<?=$subPath . '/assets/images/how/how02.png'?>" alt="how">
                                    </div>
                                    <div class="tab-item third">
                                        <img src="<?=$subPath . '/assets/images/how/how03.png'?>" alt="how">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-9">
                            <div class="hover-tab-menu">
                                <ul class="tab-menu">
                                    <li class="active">
                                        <div class="menu-thumb">
                                            <span>
                                                01
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">Instant registration</h5>
                                            <p>
                                                Click <a href="#0" data-toggle="modal" data-target="#signupModal">Sign Up</a> to fill the blank, our 256 SSL will Protect your privacy.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu-thumb">
                                            <span>
                                                02
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">MAKE AN INVEST</h5>
                                            <p>
                                                <a href="#0" data-toggle="modal" data-target="#loginModal">Login</a> your account to click invest to start to earn the profit.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu-thumb">
                                            <span>
                                                03
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">get profit</h5>
                                            <p>
                                                You will get your profit on your profile, also you will get Instant Payment
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======How-Section Ends Here=======-->

        <!--=======Check-Section Starts Here=======-->
        <section class="call-section call-overlay bg_img" data-background="<?=$subPath . '/assets/images/call/call-bg.jpg'?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="call--item">
                            <span class="cate">Why We are always ready</span>
                            <h3 class="title">Request a call back</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="call-button">
                            <a href="Tel:0939303" class="call">
                                <img src="<?=$subPath . '/assets/images/call/icon02.png'?>" alt="call">
                            </a>
                            <a href="#0" class="custom-button"> Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->


        <!--=======Offer-Section Stars Here=======-->
        <section class="offer-section padding-top padding-bottom pb-max-md-0" id="plan">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball-group1.png'?>" alt="balls">
            </div>
            <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball-group2.png'?>" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">INVESTMENT OFFER</span>
                            <h2 class="title">OUR INVESTMENT PLANS</h2>
                            <p>
                                Wiseinvestment provides a straightforward and transparent mechanism to attract investments and make more profits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offer-wrapper">
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">10%</h3>
                            <span><b>Regular</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer1.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">₦20K</span><span class="to">to</span><span class="max">₦50K</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer2.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">Monthly</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a data-toggle="modal" data-target="#investModal" href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">15%</h3>
                            <span><b>Bronze</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer1.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">₦60K</span><span class="to">to</span><span class="max">₦500K</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer2.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">3 months</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a data-toggle="modal" data-target="#investModal" href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">20%</h3>
                            <span><b>Silver</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer1.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">₦600K</span><span class="to">to</span><span class="max">₦1M</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer2.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">6 months</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a data-toggle="modal" data-target="#investModal" href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">30%</h3>
                            <span><b>Golden</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer1.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">₦1.5M</span><span class="to">to</span><span class="max">₦10M</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="<?=$subPath . '/assets/images/offer/offer2.png'?>" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">12 months</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a data-toggle="modal" data-target="#investModal" href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Offer-Section Ends Here=======-->


        <!--=======Proit-Section Starts Here=======-->
        <section class="profit-section padding-top" id="profit">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">Calculate the amazing profits</span>
                            <h2 class="title">You Can Earn</h2>
                            <p>Calculate your profit before making an investment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="profit-bg bg_img" data-background="<?=$subPath . '/assets/images/profit/profit-bg.png'?>">
                    <div class="animation-group">
                        <div class="platform">
                            <img src="<?=$subPath . '/assets/images/profit/platform.png'?>" alt="profit">
                        </div>
                        <div class="light">
                            <img src="<?=$subPath . '/assets/images/profit/light.png'?>" alt="profit">
                        </div>
                        <div class="coin-1 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin6.png'?>" alt="profit">
                        </div>
                        <div class="coin-2 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin2.png'?>" alt="profit">
                        </div>
                        <div class="coin-3 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin3.png'?>" alt="profit">
                        </div>
                        <div class="coin-4 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin4.png'?>" alt="profit">
                        </div>
                        <div class="coin-5 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin5.png'?>" alt="profit">
                        </div>
                        <div class="coin-6 wow fadeOutDown" data-wow-delay="1s">
                            <img src="<?=$subPath . '/assets/images/profit/coin1.png'?>" alt="profit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="calculate-wrapper tab">
                    <div class="calculate--area">
                        <div class="calculate-area">
                            <div class="calculate-item">
                                <h5 class="title" data-serial="01">Select the plan</h5>
                                <select class="select-bar">
                                    <option value="1">10% for 1 month (Regular)</option>
                                    <option value="2">15% for 3 months (Bronze)</option>
                                    <option value="3">20% for 6 months (Silver)</option>
                                    <option value="4">30% for 12 months (Golden)</option>
                                </select>
                            </div>
                            <div class="calculate-item">
                                <!-- <h5 class="title" data-serial="02">Select the currency</h5>
                                <ul class="tab-menu">
                                    <li>usd</li>
                                    <li class="active">btc</li>
                                    <li>eth</li>
                                    <li>rub</li>
                                </ul> -->
                            </div>
                            <div class="calculate-item">
                                <h5 class="title" data-serial="03">Enter the amount</h5>
                                <input type="number" value="100">
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 USD</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 USD</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item active">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">₦0.026400</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">₦1.320000</h2>
                                    </div>
                                </div>
                                <!-- <div class="invest-range-area">
                                    <button type="submit" class="custom-button">join now</button>
                                </div> -->
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 ETH</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 ETH</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="eth-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 ETH" data-max="1000 ETH">
                                        <div id="eth-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 RUB</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 RUB</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="rub-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 RUB" data-max="1000 RUB">
                                        <div id="rub-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="affiliate-programe" id="affiliate">
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
                            <h6 class="title">Become a forex trader</h6>
                            <a href="#0" class="custom-button">
                                learn more <i class="flaticon-right"></i>
                            </a>
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
        <!--=======Check-Section Starts Here=======-->
        <section class="call-section call-overlay bg_img" data-background="<?=$subPath . '/assets/images/call/call-bg.jpg'?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-xl-6">
                        <div class="call-item text-center text-sm-left">
                            <div class="call-icon">
                                <img src="<?=$subPath.'/assets/images/call/icon01.png'?>" alt="call">
                            </div>
                            <div class="call-content">
                                <h5 class="title">You already have an account with us login to view you progress</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                        <a data-toggle="modal" data-target="#loginModal" href="#0" class="custom-button">Login <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->

        <?php include 'testimonial.php'; ?>


       <?php include 'footer.php'; ?>


    </div>

    <?php include 'script.php'; ?>

    <?php 
       echo  "<scropt>
                $('#loginModal').modal('toggle');
            </script>";
    ?>
</body>

</html>