<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'?>

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
        <!--=======Header-Section Ends Here=======-->


        <!--=======Banner-Section Starts Here=======-->
        <section class="hero-section-2" data-background="<?=$subPath . '/assets/images/about/hero-bg3.jpg'?>">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">faq</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#0">pages</a>
                        </li>
                        <li>
                            faq
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hero-shape">
                <img class="wow slideInUp" src="<?=$subPath . '/assets/images/about/hero-shape1.png'?>" alt="about" data-wow-duration="1s">
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Feature-Section Starts Here=======-->
        <section class="faq-section padding-top padding-bottom mb-xl-5">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath . '/assets/images/balls/ball-group7.png" alt="balls'?>">
            </div>
            <div class="ball-group-2 rtl" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="<?=$subPath .'/assets/images/balls/ball-group8.png'?>" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-header">
                            <span class="cate">You have questions</span>
                            <h2 class="title">
                                we have answers
                            </h2>
                            <p class="mw-100">
                                Do not hesitate to send us an email if you can't find what you're looking for.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab faq-tab">
                    <div class="tab-area">
                        <div class="tab-item active">
                            <div class="faq-wrapper">
                                <div class="faq-item">
                                    <div class="faq-title">
                                        <h5 class="title">What is wise investment? </h5>
                                        <span class="right-icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                        This is an hedge fund investment company that pulls funds from investors and invest in the financial markets. Providing monthly interest for both investors and organizations.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item active open">
                                    <div class="faq-title">
                                        <h5 class="title">Who can invest? </h5>
                                        <span class="right-icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                        Individuals, students, corp members, organizations and religious organizations can invest with us.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-title">
                                        <h5 class="title">What's the minimum amount that can be invested?</h5>
                                        <span class="right-icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                        The minimum amount is 20,000\ $25.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="faq-title">
                                        <h5 class="title">How safe is my capital?</h5>
                                        <span class="right-icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                        Your capital is guaranteed with wise investment.
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="faq-item">
                                    <div class="faq-title">
                                        <h5 class="title">What payment system can i use to withdraw?</h5>
                                        <span class="right-icon"></span>
                                    </div>
                                    <div class="faq-content">
                                        <p>
                                            Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                                        </p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Feature-Section Ends Here=======-->

        <!-- ==========Footer-Section Starts Here========== -->
        <?php include 'footer.php' ?>
        <!-- ==========Footer-Section Ends Here========== -->


    </div>

    <?php include 'script.php' ?>
</body>

</html>
