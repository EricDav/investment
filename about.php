<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>
    <div class="main--body section-bg">
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
        <!--=======Header-Section Ends Here=======-->


        <!--=======Banner-Section Starts Here=======-->
        <section class="hero-section bg_img" data-background="<?=$subPath . '/assets/images/about/hero-bg.png'?>">
            <div class="container">
                <div class="hero-content">
                    <h1 class="title">About US</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======About-Section Starts Here=======-->
        <section class="about-section padding-top padding-bottom section-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block rtl">
                        <img src="<?=$subPath . '/assets/images/about/about.png'?>" alt="about">
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header left-style">
                            <span class="cate">WELCOME TO WISEINVESTMENT</span>
                            <h3 class="title">about wiseinvestment</h3>
                            <p>
                            We are an hedge fund that pools funds from our investors while we trade and invest the money together for them in the financial markets.<br><br>

                            We have an highly diversified portfolio and well calculated risk management measures and strategies to ensure our investors money is secured, properly managed, grown and periodic returns delivered to all our investors<br><br>

                            We have a wide target audience as we accept clients (investors) from all socioeconomic classes; the wealthy (upper class), middle class and the lower class.<br><br>

                            We are committed to saving,managing and growing the wealth of our investors and also help them in achieving their financial goals in record time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======About-Section Ends Here=======-->


        <!--=======CEO-Section Starts Here=======-->
        <section class="ceo-section padding-bottom padding-top bg_img" data-background="<?=$subPath . '/assets/images/about/ceo-bg.jpg'?>">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-7 col-xl-6">
                        <div class="ceo-content">
                            <h3 class="title">Our vision is to genuinely promoting and propagating kingdom wealth on this terrestrial ball.</h3>
                            <div class="author">
                                <h6 class="subtitle"><a href="#0">Adewale Love Joshua</a></h6>
                                <span class="info">CEO of wiseinvestment</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="ceo-thumb">
                            <img src="<?=$subPath . '/assets/images/about/certificate-ceo.png'?>" alt="about">
                        </div>
                        <a href="#0" class="custom-button">Open Certificate</a>
                    </div>
                </div>
            </div>
        </section>
        <!--=======CEO-Section Ends Here=======-->

        <!--=======Check-Section Starts Here=======-->
        <section class="call-section call-overlay bg_img" data-background="<?=$subPath . '/assets/images/call/call-bg.jpg'?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-xl-6">
                        <div class="call-item text-center text-sm-left">
                            <div class="call-icon">
                                <img src="<?=$subPath . '/assets/images/call/icon01.png'?>" alt="call">
                            </div>
                            <div class="call-content">
                                <h5 class="title">Ready To Start Your Earnings Through Crypto Currency</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                        <a href="#0" class="custom-button">learn more <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->


        <!--=======Check-Section Starts Here=======-->
       <?php include 'testimonial.php'; ?>
        <!--=======Check-Section Ends Here=======-->


        <!-- ==========Footer-Section Starts Here========== -->
        <?php include 'footer.php'; ?>
        <!-- ==========Footer-Section Ends Here========== -->


    </div>

    <?php include 'script.php'; ?>
</body>

</html>