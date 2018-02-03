<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>LivEver - Tinding Galing Home Page</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<!--    <link rel="stylesheet" href="css/themify-icons.css">-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/livever.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/animations.css">

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body data-spy="scroll" data-target="#primary-menu">

<div class="preloader">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!--Mainmenu-area-->
<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo">
                <img src="assets/images/logo.png" class="img-responsive">
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home-page">Home</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#ingredients">Components</a></li>
                <li><a href="#contactus">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--Mainmenu-area/-->


<!--Header-area-->
<header class="header-area overlay section-padding" id="home-page">

    <div class="container">
        <div class="row v-center">
            <?php
            $path = './assets/carousel';
            $files = scandir($path);
            $files = array_diff(scandir($path), array('.', '..'));

            ?>
            <?php if (count($files) > 1) {
                ?>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="max-height:600px; overflow: hidden">
                    <div class="testimonials">
                        <?php
                        foreach ($files as $picture) {
                            ?>
                            <div class="testimonial">
                                <div class="testimonial-photo">
                                    <img src="assets/carousel/<?php echo $picture; ?>"
                                         alt="" class="img-responsive center-block">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                </div>
                <?php
            } else {
                ?>
                <div class="col-xs-12 col-md-12 text-center slideUp" id="tinding_galing">
                    <img src="assets/images/tinding_galing_page1.png"
                         class="img-responsive center-block">
                </div>
                <?php
            } ?>

        </div>
</header>

<!--Spacer-->
<section class="spacer-padding">
</section>
<!--Spacer/-->


<section class="benefits-bg overlay section-padding" id="benefits">

    <div class="main-cover">
        <div id="dp">
            <img class="img-responsive center-block" src="assets/images/9_health_benefits_page2.png">
        </div>
        <div id="benefits_icons">
            <div class="row text-center">
                <!--First column first 3-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-blue">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/healthyliver.png"
                                     class="img-responsive img-circle center-block" alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-sm-8 box-description">

                            <p class="benefits_label blue">HEALTHY LIVER</p>
                            <p class="benefits_description blue ">

                            LivEver works as an anti-oxidant and boosts detoxification process, helping to remove
                            toxins and free radicals through Turmeric Extract, Alpha Lipoic Acid, Milk Thistle
                            Extract and Phospatidylcholine.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/goodsleep.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label blue">GOOD SLEEP</p>
                            <p class="benefits_description blue ">
                                LivEver works in the detoxification process through Turmeric Extract, Alpha Lipoic Acid,
                                Milk Thistle Extract and Phosphatidylcholine. It also helps in the production and
                                metabolism of sleep boosters through Zinc, Thiamin, Pyridoxine and Cyanocobalamin.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-blue">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/digestion.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label blue">GOOD DIGESTION</p>
                            <p class="benefits_description blue ">
                                LivEver works as an anti-inflammatory improving intestinal permeability and treat
                                inflammatory Bowel Diseases through Turmeric Extract, Alpha Lipoic Acid, Calcium
                                Pantothenate and Zinc.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/highenergy.png"
                                     class="img-responsive img-circle center-block img-" alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label blue">HIGH ENERGY</p>
                            <p class="benefits_description blue ">
                                LivEver helps in the metabolism of protein, fat and sugars through its 9 potent and
                                natural components.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-blue">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/mentalalertness.png"
                                     class="img-responsive img-circle center-block" alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label blue">MENTAL ALERTNESS</p>
                            <p class="benefits_description blue ">
                                LivEver increases the production of neurotransmitters that boost cognitive function
                                through its 9 potent and natural components.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon">
                            <div class="box-icon content">
                                <img src="assets/benefits/bloodcirculation.png"
                                     class="img-responsive img-circle center-block" alt="">
                            </div>
                            <div class="arrow-right-blue"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label blue">GOOD BLOOD CIRCULATION</p>
                            <p class="benefits_description blue ">LivEver improves oxygen flow and prevents blood
                                platelet clots through Turmeric Extract and Phosphatidylcholine. It also prevents
                                occurrence of strokes and heart diseases.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
</section>

<!--Spacer-->
<section class="spacer-padding">
</section>
<!--Spacer/-->

<section class="benefits-bg overlay section-padding" id="ingredients">

    <div class="main-cover">
        <div id="dp_ingredients">
            <img class="img-responsive center-block" src="assets/images/9_ingredients_page3.png">
        </div>
        <div id="ingredients_icons">

            <div class="row text-center">
                <!--First column first 3-->
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/milk_thistle.png"
                                     class="img-responsive img-circle center-block" alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">MILK THISTLE EXTRACT</p>
                            <p class="benefits_description olive">
                                LivEver works as an anti-oxidant and boosts detoxification process, helping to remove
                                toxins and free radicals through Turmeric Extract, Alpha Lipoic Acid, Milk Thistle
                                Extract and Phospatidylcholine.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/brocolli.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label_long olive">PHOSPHATIDYLCHOLINE</p>
                            <p class="benefits_description olive">
                                It is made up of phosphates, fatty acids, and Choline. All of these substances have
                                great health effects on the brain and body. Phosphatidylcholine slows down brain aging,
                                increases neuroplasticity, and boosts brainpower, memory and cognition.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/turmeric.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">TURMERIC EXTRACT (CURCUMA LONGA)</p>
                            <p class="benefits_description olive">
                                Turmeric is known for its potent antioxidative and a powerful anti-inflammatory effect
                                for all parts of the body.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/beans.png"
                                     class="img-responsive img-circle center-block img-" alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">ALPHA LIPOIC ACID</p>
                            <p class="benefits_description olive">
                                Alpha Lipoic Acid considered as the "super antioxidant" that recycles Vitamin C and E,
                                Glutathione and CoQ10, which are used up by the body to fight against diseases for aging
                                people such as strokes, heart diseases, cataracts and memory loss.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive  content">
                                <img src="assets/components/groundmeat.png"
                                     class="img-responsive img-circle center-block" alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">CALCIUM PANTOTHENATE</p>
                            <p class="benefits_description olive">
                                It is also known as Vitamin B5, which regulates energy metabolism and mental stamina.
                                Deficiency of Vitamin B5 can lead to fatigue and mood disorders, such as depression and
                                irritability.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/tomato.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">THIAMIN (VITAMIN B1)</p>
                            <p class="benefits_description olive">
                                It is used to produce ATP (adenosie triphosphate) that fuel the body to perform
                                essential functions. Vitamin B1 is also required for the healthy regulation of sleep
                                cycles, brain circulation, and cellular metabolism.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/b6.png" class="img-responsive img-circle center-block img-"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">PYRIDOXINE (VITAMIN B6)</p>
                            <p class="benefits_description olive">
                                Utilized in energy metabolism processes in your cells as well as in the production of
                                neurotransmitters. Low levels of Vitamin B6 can lead to decreased cognitive ability,
                                lack of focus or energy, brain tissue shrinkage and Alzheimer's.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/zinc.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>

                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label olive">ZINC</p>
                            <p class="benefits_description olive">
                                Serves as a cofactor for many enzymatic reactions. Required for normal growth and tissue
                                repair and wound healing.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 padding-0">
                    <div class="box box-olive">
                        <div class="col-xs-4 col-sm-4 col-md-4 box-icon-olive">
                            <div class="box-icon-olive content">
                                <img src="assets/components/egg.png" class="img-responsive img-circle center-block"
                                     alt="">
                            </div>
                            <div class="arrow-right-olive"></div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 box-description">
                            <p class="benefits_label_long olive">CYANOCOBALAMIN (VITAMIN B12)</p>
                            <p class="benefits_description olive">
                                It is a water soluble vitamin which has a key role in the normal functioning of the
                                brain, nervous system, and the formulation of blood.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>

</section>

<!--Spacer-->
<section class="spacer-padding">
</section>
<!--Spacer/-->

<footer class="footer-area relative" id="contactus">
    <div class="absolute"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Contact Us</h2>
                    <p> We strive to deliver the highest quality and value possible to make our customers happy and
                        satisfied. <br> How can we help you?</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <address class="side-icon-boxes">
                    <div class="side-icon-box">
                        <div class="side-icon">
                            <img src="images/location-arrow.png" alt="">
                        </div>
                        <p>Unit 202 MGT Guerra Building,<br> 1170 Don Chino Roces Avenue,<br>
                            Brgy. San Antonio, Makati City, <br>Philippines</p>
                    </div>
                    <div class="side-icon-box">
                        <div class="side-icon">
                            <img src="images/phone-arrow.png" alt="">
                        </div>
                        <p><strong>Telephone: </strong>
                            <a style="color:#6C6C6C" href="callto:02-668-9305">(02) 668-9305</a> <br/>
                            <a style="color:#6C6C6C" href="callto:+63-917-596-4521">(+63) 917-596-4521</a>
                        </p>
                    </div>
                    <div class="side-icon-box">
                        <div class="side-icon">
                            <img src="images/mail-arrow.png" alt="">
                        </div>
                        <p><strong>E-mail: </strong>
                            <a style="color:#6C6C6C"
                               href="mailto:livever@mergfilpharma.com">livever@mergfilpharma.com</a>
                        </p>
                    </div>
                </address>
            </div>
            <div class="col-xs-12 col-md-8">
                <form action="process.php" id="contact-form" method="post" class="contact-form">
                    <div class="form-double">
                        <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control"
                               required="required">
                        <input type="email" id="form-email" name="form-email" class="form-control"
                               placeholder="E-mail address" required="required">
                    </div>
                    <input type="text" id="form-subject" name="form-subject" class="form-control"
                           placeholder="Message topic">
                    <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control"
                              placeholder="Your message" required="required"></textarea>
                    <button type="sibmit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>&copy; LivEver Copyright 2018 All right reserved.</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Lightbox -->


<!--Vendor-JS-->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<!--Plugin-JS-->
<script src="js/owl.carousel.min.js"></script>
<!--<script src="js/contact-form.js"></script>-->
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/scrollUp.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/wow.min.js"></script>
<!--Main-active-JS-->
<script src="js/main.js"></script>

<script>
    $(window).scroll(function () {

        $('#dp').each(function () {
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 400) {
                $(this).addClass("hatch");
            }
        });

        $('#dp_ingredients').each(function () {
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 800) {
                $(this).addClass("hatch");
            }
        });

    });
</script>
</body>

</html>
