<?php
include("connection.php");

//session_start();

//$user = $_SESSION['email'];
//if($user == true){

  
//}
//else{
   // echo"Wrong Name or Password";
    
 //   header('location: login.php');
    
    
//}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- index-mp-layout102:13-->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="LearnPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, #, learning," />


    <!-- Page Title -->
    <title>Shah Abdul Latif University</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .widget img {
            width: 150px;
        }
    </style>
</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="images/preloaders/5.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-color-2 sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="widget no-border m-0">
                                <ul class="list-inline">
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">0243-9280126</a> </li>
                                    <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                                    <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">info@salu.edu.pk</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget no-border m-0">
                                <ul class="list-inline text-right sm-text-center">
                                    <li>
                                        <a href="contact.html" class="text-white">Contact Us</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a href="#" class="text-white">About Us</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a href="Media.html" class="text-white">Media</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip" href="index.html">
                                <img src="images/logo-wide.png" alt="">
                            </a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="index.html">University</a>
                                    <ul class="dropdown">
                                        <li><a href="#">VC Message</a>
                                            <!--
                                            <ul class="dropdown">
                                                <li><a href="index-mp-layout1.html">Layout1</a></li>
                                                <li><a href="index-mp-layout2.html">Layout2</a></li>
                                                <li><a href="index-mp-layout3.html">Layout3</a></li>
                                            </ul>
                                        </li>-->
                                            <li><a href="Secretary-to-Vice-Chancellor.html">Vice Chancellor's Secretariat</a>
                                                <!--
                                                <ul class="dropdown">
                                                    <li><a href="index-sp-layout1.html">Layout1</a></li>
                                                    <li><a href="index-sp-layout2.html">Layout2</a></li>
                                                    <li><a href="index-sp-layout3.html">Layout3</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            <li><a href="glance-salu.html">At a Glance</a>
                                                <!--
                                                <ul class="dropdown">
                                                    <li><a href="index-boxed-mp-layout1.html">Boxed Multi Page Layout1</a></li>
                                                    <li><a href="index-boxed-mp-layout2.html">Boxed Multi Page Layout2</a></li>
                                                    <li><a href="index-boxed-mp-layout3.html">Boxed Multi Page Layout3</a></li>
                                                    <li><a href="index-boxed-sp-layout1.html">Boxed Single Page Layout1</a></li>
                                                    <li><a href="index-boxed-sp-layout2.html">Boxed Single Page Layout2</a></li>
                                                    <li><a href="index-boxed-sp-layout3.html">Boxed Single Page Layout3</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            <li><a href="vision&mission.html">Vision & Mission</a>
                                                <!--
                                                <ul class="dropdown">
                                                    <li><a href="index-rtl-mp-layout1.html">RTL Multi Page Layout1</a></li>
                                                    <li><a href="index-rtl-mp-layout2.html">RTL Multi Page Layout2</a></li>
                                                    <li><a href="index-rtl-mp-layout3.html">RTL Multi Page Layout3</a></li>
                                                    <li><a href="index-rtl-sp-layout1.html">RTL Single Page Layout1</a></li>
                                                    <li><a href="index-rtl-sp-layout2.html">RTL Single Page Layout2</a></li>
                                                    <li><a href="index-rtl-sp-layout3.html">RTL Single Page Layout3</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            <li><a href="vision&mission.html">Aims & Objectives</a>
                                                <!--
                                                <ul class="dropdown">
                                                    <li><a href="index-dark-mp-layout1.html">Dark Multi Page Layout1</a></li>
                                                    <li><a href="index-dark-mp-layout2.html">Dark Multi Page Layout2</a></li>
                                                    <li><a href="index-dark-mp-layout3.html">Dark Multi Page Layout3</a></li>
                                                    <li><a href="index-dark-sp-layout1.html">Dark Single Page Layout1</a></li>
                                                    <li><a href="index-dark-sp-layout2.html">Dark Single Page Layout2</a></li>
                                                    <li><a href="index-dark-sp-layout3.html">Dark Single Page Layout3</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            <li><a href="Statutory-Bodies.html">Statutory Bodies <span class="label label-info"><!--New--></span></a>
                                                <!--
                                                <ul class="dropdown">
                                                    <li><a href="index-magazine-home-layout1.html">Magazine Home layout1</a></li>
                                                    <li><a href="index-magazine-home-layout2.html">Magazine Home layout1</a></li>
                                                </ul>
                                                -->
                                            </li>
                                            <li><a href="Media.html">Media Section-Salu<span class="label label-info"><!--New--></span></a>

                                                <!--<ul class="dropdown">
                                                    <li><a href="index-hot-portfolio-presentation-layout1.html">Portfolio Presentation Layout1</a></li>
                                                    <li><a href="index-hot-portfolio-presentation-layout2.html">Portfolio Presentation Layout2</a></li>
                                                    <li><a href="index-hot-portfolio-presentation-layout3.html">Portfolio Presentation Layout3</a></li>
                                                </ul>-->
                                            </li>

                                            <!--<li><a href="#">Hot Layouts <span class="label label-info">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="index-hot-split-slider-home.html">Split Slider Home Layout</a></li>
                                                    <li><a href="index-hot-vertical-slider-home.html">Vertical Slider Home Layout</a></li>
                                                    <li><a href="index-hot-fullscreen-home.html">Fullscreen Home Layout</a></li>
                                                    <li><a href="index-hot-parallax-home.html">Parallax Home Layout</a></li>
                                                    <li><a href="index-hot-personal-home.html">Personal Home Layout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index-hot-shop-home.html">Shop Home <span class="label label-info">New</span></a></li>
                                            <li><a href="#">Home Variations <span class="label label-info">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Rev Slider</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index-home-variation-revslider-style1.html">Layout1</a></li>
                                                            <li><a href="index-home-variation-revslider-style2.html">Layout2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Maximage Slider</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index-home-variation-maximageslider-style1.html">Layout1</a></li>
                                                            <li><a href="index-home-variation-maximageslider-style2.html">Layout2</a></li>
                                                            <li><a href="index-home-variation-maximageslider-style3.html">Layout3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a></li>
                                                    <li><a href="index-home-variation-typed-text.html">Typed Text Layout</a></li>
                                                    <li><a href="index-home-variation-video-background.html">Youtube Background Video</a></li>
                                                    <li><a href="index-home-variation-html5-video.html">Html5 Background Video</a></li>
                                                    <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax Layout</a></li>
                                                    <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a></li>
                                                    <li><a href="#">Home Appointment Form</a>
                                                        <ul class="dropdown">
                                                            <li><a href="index-home-variation-appointment-form-style1.html">Layout1</a></li>
                                                            <li><a href="index-home-variation-appointment-form-style2.html">Layout2</a></li>
                                                        </ul>
                                                    </ul>
                                                </li>
                                            </li>-->
                                    </ul>
                                    </li>

                                    <li><a href="#">Faculty</a>
                                        <ul class="dropdown">
                                            <li><a href="Law.html">Law</a></li>
                                            <li><a href="#">Arts & Languages</a>
                                                <ul class="dropdown">
                                                    <li><a href="English-Language.html">ENGLISH LANGUAGE & LITERATURE</a></li>
                                                    <li><a href="Sindhi.html">DEPARTMENT OF SINDHI</a></li>
                                                    <li><a href="Urdu.html">DEPARTMENT OF URDU</a></li>
                                                    <li><a href="FOREIGN-LANGUAGES.html">FOREIGN LANGUAGES</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">EDUCATION</a>
                                                <ul class="dropdown">
                                                    <li><a href="Special-Education.html">SPECIAL EDUCATION</a></li>
                                                    <li><a href="Teacher-Education.html">TEACHER EDUCATION</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PHYSICAL SCIENCES</a>
                                                <ul class="dropdown">
                                                    <li><a href="ARCHAEOLOGY-DEPARTMENT.html">ARCHAEOLOGY</a></li>
                                                    <li><a href="GEOGRAPHY-DEPARTMENT.html">GEOGRAPHY</a></li>
                                                    <li><a href="Statutory-Bodies.html">STATISTICS</a></li>
                                                    <li><a href="Computer-Science.html">COMPUTER SCIENCE</a></li>
                                                    <li><a href="math.html">MATHEMATICS</a></li>
                                                    <li><a href="physics.html">PHYSICS AND ELECTRONICS</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">MANAGEMENT SCIENCES</a>
                                                <ul class="dropdown">
                                                    <li><a href="Business-Administration.html">BUSINESS ADMINISTRATION</a>
                                                        <!--
                                                        <ul class="dropdown">
                                                            <li><a href="features-home-revslider.html">Revolution Slider</a></li>
                                                            <li><a href="features-rev-slider-premium-templates.html">Revolution Slider All In One</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="Commerce.html">COMMERCE</a></li>
                                                    <li><a href="PUBLIC-ADMINISTRATION.html">PUBLIC ADMINISTRATION</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">SOCIAL SCIENCES</a>
                                                <ul class="dropdown">
                                                    <li><a href="economics.html">ECONOMIC</a>

                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-subscribe.html">Form style 1</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="Gender-Studies.html">GENDER STUDIES</a>

                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-appointment-style1.html">Form style 1</a></li>
                                                            <li><a href="form-appointment-style2.html">Form style 2</a></li>
                                                            <li><a href="form-appointment-style3.html">Form style 3</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="Islamiat.html">ISLAMIC STUDIES</a>
                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                                                            <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                                                            <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="INTERNATIONAL-RELATIONS.html">INTERNATIONAL RELATIONS</a>

                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                                                            <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                                                            <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="Pakistan-Studies.html">PAKISTAN STUDIES</a></li>
                                                    <li><a href="SOCIOLOGY.html">SOCIOLOGY</a> </li>
                                                    <li><a href="PHYSICAL-EDUCATION.html">PHYSICAL</a> </li>
                                                    <li><a href="POLITICAL-SCIENCE.html">POLITICAL SCIENCE</a> </li>
                                                    <li><a href="MEDIA-COMMUNICATION.html">MEDIA & COMMUNICATION</a> </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">NATURAL SCIENCES <span class="label label-success"><!--New--></span></a>
                                                <ul class="dropdown">
                                                    <li><a href="ZOOLOGY.html">ZOOLOGY</a>

                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-paypal-donate-onetime-style1.html">Style1</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style2.html">Style2</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style3.html">Style3</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style4.html">Style4</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style5.html">Style5</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style6.html">Style6</a></li>
                                                            <li><a href="form-paypal-donate-onetime-style7.html">Style7</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="BOTANY.html">BOTANY</a>
                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-paypal-donate-recurring-style1.html">Style1</a></li>
                                                            <li><a href="form-paypal-donate-recurring-style2.html"> Style2</a></li>
                                                            <li><a href="form-paypal-donate-recurring-style3.html">Style3</a></li>
                                                            <li><a href="form-paypal-donate-recurring-style4.html">Style4</a></li>
                                                            <li><a href="form-paypal-donate-recurring-style5.html">Style5</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="BOTANY.html">CHEMISTRY</a>

                                                        <!--<ul class="dropdown">
                                                            <li><a href="form-paypal-donate-both-onetime-recurring-style1.html">Style1</a></li>
                                                            <li><a href="form-paypal-donate-both-onetime-recurring-style2.html">Style2</a></li>
                                                            <li><a href="form-paypal-donate-both-onetime-recurring-style3.html">Style3</a></li>
                                                            <li><a href="form-paypal-donate-both-onetime-recurring-style4.html">Style4</a></li>
                                                            <li><a href="form-paypal-donate-both-onetime-recurring-style5.html">Style5</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li><a href="BIOCHEMISTRY.html">BIOCHEMISTRY</a></li>
                                                    <li><a href="MICROBIOLOGY.html">MICROBIOLOGY</a></li>
                                                    <li><a href="PHARMACY.html">PHARMACY</a></li>
                                                </ul>
                                            </li>
                                            <!--<li><a href="#">Popup Promo Box</a>
                                                <ul class="dropdown">
                                                    <li><a href="features-popup-promo-box.html">Default</a></li>
                                                    <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Footer</a>
                                                <ul class="dropdown">
                                                    <li><a href="features-footer-style1.html#footer">Footer One</a></li>
                                                    <li><a href="features-footer-style2.html#footer">Footer Two</a></li>
                                                    <li><a href="features-footer-style3.html#footer">Footer Three</a></li>
                                                    <li><a href="features-footer-style4.html#footer">Footer Four</a></li>
                                                    <li><a href="features-footer-style5.html#footer">Footer Five</a></li>
                                                    <li><a href="features-footer-style6.html#footer">Footer Six</a></li>
                                                    <li><a href="features-footer-style7.html#footer">Footer Seven</a></li>
                                                    <li><a href="features-footer-style8.html#footer">Footer Eight</a></li>
                                                    <li><a href="features-footer-style9.html#footer">Footer Nine</a></li>
                                                </ul>
                                            </li>-->
                                        </ul>
                                    </li>
                                    <li><a href="#">Online Addmission</a>
                                        <ul class="dropdown">
                                            <li><a href="">Directorate of Admissions</a>
                                                <ul class="dropdown">
                                                    <li><a href="Addmision-Form.php">APPLY ONLINE FOR BACHELOR & MASTER</a></li>
                                                    <li><a href="#">APPLY ONLINE FOR MS/MPHIL & PHD</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="Procedure-Eligibility-Criteria.html">Procedure & Eligibility Criteria</a></li>
                                            <li><a href="Scholarships.html">Scholarships</a>
                                                <!--<ul class="dropdown">
                                                    <li><a href="page-services-style1.html">Services style 1</a></li>
                                                    <li><a href="page-services-style2.html">Services style 2</a></li>
                                                    <li><a href="page-services-details.html">Services Details</a></li>
                                                </ul>-->
                                            </li>
                                            <li><a href="SEMESTER-RULES-REGULATIONS.html">SEMESTER RULES & REGULATIONS</a>
                                                <!--<ul class="dropdown">
                                                    <li><a href="page-pricing-style1.html">Pricing Style 1</a></li>
                                                    <li><a href="page-pricing-style2.html">Pricing Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="page-timetable.html">Timetable</a></li>
                                            <li><a href="#">Calender</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-calendar1.html">Calendar Style1</a></li>
                                                    <li><a href="page-calendar2.html">Calendar Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Events</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Events Grid</a>
                                                        <ul class="dropdown">
                                                            <li><a href="events-grid-2column.html">Grid 2column</a></li>
                                                            <li><a href="events-grid-3column.html">Grid 3column</a></li>
                                                            <li><a href="events-grid-4column.html">Grid 4column</a></li>
                                                            <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                                            <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Events List</a>
                                                        <ul class="dropdown">
                                                            <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                                                            <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                                                            <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Events Details</a>
                                                        <ul class="dropdown">
                                                            <li><a href="events-details-style1.html">Details Style1</a></li>
                                                            <li><a href="events-details-style2.html">Details Style2</a></li>
                                                            <li><a href="events-details-style3.html">Details Style3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="events-table.html">Events Table</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Job <span class="label label-success">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="job-list.html">Job List</a></li>
                                                    <li><a href="job-details-style1.html">Job Details Style1</a></li>
                                                    <li><a href="job-details-style2.html">Job Details Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-category.html">Category</a></li>
                                                    <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                                                    <li><a href="shop-product-details.html">Product Details</a></li>
                                                    <li><a href="shop-cart.html">Cart</a></li>
                                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-contact-style1.html">Contact style 1</a></li>
                                                    <li><a href="page-contact-style2.html">Contact style 2</a></li>
                                                    <li><a href="page-contact-style3.html">Contact style 3</a></li>
                                                    <li><a href="page-contact-style4.html">Contact style 4</a></li>
                                                    <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                                                    <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">FAQ</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                                                    <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                                                    <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                                                    <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Page 404</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-404-style1.html">Style1</a></li>
                                                    <li><a href="page-404-style2.html">Style2</a></li>
                                                    <li><a href="page-404-style3.html">Style3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Coming Soon</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-coming-soon-style1.html">Contact style 1</a></li>
                                                    <li><a href="page-coming-soon-style2.html">Contact style 2</a></li>
                                                    <li><a href="page-coming-soon-style3.html">Contact style 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Under Construction</a>
                                                <ul class="dropdown">
                                                    <li><a href="page-under-construction-style1.html">Style1</a></li>
                                                    <li><a href="page-under-construction-style2.html">Style2</a></li>
                                                    <li><a href="page-under-construction-style3.html">Style3</a></li>
                                                </ul>
                                            </li>-->
                                        </ul>
                                        </li>
                                        <li><a href="#">Examination</a>
                                            <ul class="dropdown">
                                                <li><a href="Online-Certificate.html">Online Certificate </a></li>
                                                <li><a href="Online-Examination-Form.html">Online Examination Form</a></li>
                                                <li><a href="Semester-Online-Exam-Form.html">Semester Online Exam Form</a></li>
                                                <li><a href="Improver-failure-Semester-Form.html">Improver/failure Semester Form</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Chairs</a>
                                            <ul class="dropdown">
                                                <li><a href="Benazir-Chair.html">Benazir Chair</a></li>
                                                <li><a href="Rozay-Dhani.html">Rozay Dhani</a></li>
                                                <li><a href="Sachal-Chair.html">Sachal Chair</a></li>
                                                <li><a href="Shaikh-Ayaz-Chair.html">Shaikh Ayaz Chair</a></li>
                                                <li><a href="Tanveer-Chairs.html">Tanveer Corner​</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul class="dropdown">
                                                <li><a href="ORIC.html">ORIC</a>
                                                    <!--<ul class="dropdown">
                                                        <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                                                        <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                                                        <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                                                        <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                                                        <li><a href="blog-classic-left-thumbs.html">Blog Classic Left Thumbs</a></li>
                                                    </ul>-->
                                                </li>
                                                <li><a href="Directorate-Postgraduate-Studies.html">Directorate of Postgraduate Studies</a>
                                                    <!--<ul class="dropdown">
                                                        <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                                                        <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                                        <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                                                    </ul>-->
                                                </li>-->
                                        </li>
                                        <li><a href="DPRI.html">DPRI</a>
                                            <!--<ul class="dropdown">
                                                        <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                        <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                                                        <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                                                        <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                                                    </ul>-->
                                        </li>
                                        <li><a href="CBC.html">CBC</a>
                                            <!--<ul class="dropdown">
                                                        <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                        <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                                                        <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                                                        <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                                                    </ul>-->
                                        </li>
                                        <li><a href="Quality-Enhancement-Cell.html">Quality Enhancement Cell</a>
                                            <!--<ul class="dropdown">
                                                        <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                                        <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                                                        <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                                                        <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                                                    </ul>-->
                                        </li>
                                    </li>
                                    </ul>
                                    <li><a href="Central-Library.html">Central Library</a>
                                        <!-- <ul class="dropdown">
                                                <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                                                <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                                                <li><a href="page-teachers-details.html">Teachers Details</a></li>
                                            </ul>-->
                                    </li>
                                </li>
                                <li><a href="login.php">Join Now</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <section id="home">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 1"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-1-layer-1" data-x="['left']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-110']" data-fontsize="['100']" data-lineheight="['110']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:700;">Education
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20" id="rs-1-layer-2" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']" data-fontsize="['35']"
                                    data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600;">Education For EveryOne
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white" id="rs-1-layer-3" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['35']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our Students and always<br> try to achieve our client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme" id="rs-1-layer-4" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['100']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20" href="#">View Details</a>
                                </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg7.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 2"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg7.jpg" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30" id="rs-2-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']"
                                    data-voffset="['-90']" data-fontsize="['28']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed Your Knowledge
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30" id="rs-2-layer-2" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-20']" data-fontsize="['48']" data-lineheight="['70']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">World's Best University
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-center" id="rs-2-layer-3" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['50']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our Students and always<br> try to achieve our client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme" id="rs-2-layer-4" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['115']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply Now</a>
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide 3"
                                data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20" id="rs-3-layer-1" data-x="['right']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-90']" data-fontsize="['64']"
                                    data-lineheight="['72']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-3-layer-2" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']" data-fontsize="['32']" data-lineheight="['54']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-right" id="rs-3-layer-3" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['30']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We provides always our best services for our Students and always<br> try to achieve our client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme" id="rs-3-layer-4" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['95']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20" href="#">Apply Now</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function(e) {
                        $(".rev_slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: "metis",
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [650, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </section>

            <!-- Section: home-boxes -->
            <section class="bg-silver-light">
                <div class="container pt-0 pb-0">
                    <div class="section-content">
                        <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-user text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20"><a href="#" class="text-white">24 Hours Service</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                <div class="sm-height-auto bg-theme-colored-darker2">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-comments-o text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Help</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                <div class="sm-height-auto bg-theme-colored-darker3">
                                    <div class="text-center pt-30 pb-30">

                                        <i class="fa fa-usd text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Payment</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                <div class="sm-height-auto bg-theme-colored-darker4">
                                    <div class="text-center pt-30 pb-30">
                                        <i class="fa fa-bell text-white font-64"></i>
                                        <h4 class="text-uppercase mt-20"><a href="#blog" class="text-white">Alert News</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section: About -->
            <section id="about">
                <div class="container pb-70">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                <h2 class="text-uppercase mt-0">Welcome To <span class="text-theme-color-2"> Shah Abdul Latif University </span></h2>
                                <p class="lead"> Shah Abdul Latif University, Khairpur provides unique opportunities to the students to study in the fields of Natural Sciences, Physical Sciences, Social Sciences, Arts & Languages, Education, Management Sciences and Law.
                                    It is the only University in Upper Sindh which is catering for the academic needs in various disciplines.</p>
                                <div class="row mt-40">
                                    <div class="col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="mb-sm-30">
                                            <img class="img-fullwidth" src="images/about/7.jpg" alt="">
                                            <h4 class="letter-space-1 mt-10">Vice Chancellor's<span class="text-theme-color-2"> Message</span></h4>
                                            <p>I feel immense pleasure to congratulate you for your wise decision to select Shah Abdul Latif University Khairpur as your choice for pursuit of Higher Studies.</p>
                                            <a href="vcmessage.html" class="btn btn-sm btn-theme-colored">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                                        <div class="mb-sm-30">
                                            <img class="img-fullwidth" src="images/about/8.jpg" alt="">

                                            <h4 class=" letter-space-1 mt-10">Graduation <span class="text-theme-color-2"> Degree</span></h4>
                                            <p>general information that the admission process is hereby closed on open merit for the morning shift. Candidates are hereby advised to confirm their admission by paying the fees till 07.05.2021.</p>
                                            <a href="register.html" class="btn btn-sm btn-theme-colored">Online Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="p-30 bg-theme-colored mt-10">
                                    <h3 class="text-white mt-0 mb-10">Announcements</h3>
                                    <!-- Announcements Start-->
                                    <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="#">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <div class="styled-select">
                                                        <select id="person_select" name="person_select" class="form-control" required>
                          <option value="">Courses</option>
                          <option value="1 Person">Software Engineering</option>
                          <option value="2 Person">Computer Traning</option>
                          <option value="3 Person">Development Studies</option>
                          <option value="Family Pack">Chemical Engineering</option>
                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-20">
                                                    <input name="Date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mb-0 mt-10">
                                                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Application Form End-->

                                    <!-- Application Form Validation Start-->
                                    <script type="text/javascript">
                                        $("#reservation_form").validate({
                                            submitHandler: function(form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        if (data.status == 'true') {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function() {
                                                            $(form_result_div).fadeOut('slow')
                                                        }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                    <!-- Application Form Validation Start -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section: Mission -->
            <section id="mission">
                <div class="container-fluid pt-0 pb-0">
                    <div class="row equal-height">
                        <div class="col-sm-6 col-md-6 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
                                <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">Why Choose Us?</h2>
                                <div class="icon-box clearfix m-0 p-0 pb-10">
                                    <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                        <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                                    </a>
                                    <div class="ml-120 ml-sm-0">
                                        <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Best Lab</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                                    </div>
                                </div>
                                <div class="icon-box clearfix m-0 p-0 pb-10">
                                    <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                        <i class="fa fa-user text-theme-color-2 font-36"></i>
                                    </a>
                                    <div class="ml-120 ml-sm-0">
                                        <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Best Teachers</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                                    </div>
                                </div>
                                <div class="icon-box clearfix m-0 p-0 pb-10">
                                    <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                        <i class="fa fa-money text-theme-color-2 font-36"></i>
                                    </a>
                                    <div class="ml-120 ml-sm-0">
                                        <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Low Cost Services</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="images/photos/ab1.jpg" data-wow-duration="1s" data-wow-delay="0.3s">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: courses -->
            <section>
                <div class="container pt-70 pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Offered<span class="text-theme-color-2"> Degrees</span></h2>
                                <p>Candidate must have Intermediate / F.Sc with a minimum of 50% marks passed in annual examination with no supplement and no subject (s) condone by Board OR A level (at least an average of â€˜Câ€™ grade in three principal
                                    subjects) OR American High School Diploma (with minimum of 60%)<br>Or An international Baccalaureate (at least 28 points out of 45).</p>
                            </div>
                        </div>
                    </div>
                    <div class="row multi-row-clearfix">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col owl-nav-top" data-dots="true">
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p1.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="Computer-Science.html"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bachelors of Science </h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Computer Science</a></h4>
                                            <p>To produce graduates who can critically analyze a problem, and develop appropriate computer-based solution by identifying the computing
                                            </p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong>Jan 4</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration</strong>04 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p2.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bachelor of Business Administration</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">BBA</a></h4>
                                            <p>The mission of BBA program is to enhance intellectual and professional competencies by imparting knowledge,</p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong>Jan 4</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration:</strong>4 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p3.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="Computer-Science.html"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bachelors of Science</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Computer Science (IT)</a></h4>
                                            <p>To produce graduates who can critically analyze a problem, and develop appropriate computer-based solution by identifying </p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong> Jan 2</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration</strong>4 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p4.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bechlor of Science</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Mathematics</a></h4>
                                            <p>Limited access of poor people to quality education in Mathematics and increasing rate of un-employment has resulted </p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong> Jan 2</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration</strong>4 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p5.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bachelors of Science </h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Accounting & Finance</a></h4>
                                            <p>Interested candidates of BS Accounting and Finance program must have completed H.S.C or equivalent with at least 50% marks, </p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong> Jan 2</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration</strong>4 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/project/p6.jpg">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>View</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            <h5 class="font-14 font-weight-500 mb-5">Bachelors of Science</h5>
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html">Software Engineering</a></h4>
                                            <p>To produce graduates who possess adequate knowledge and skills to qualify to become competent applications developer </p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Time</strong> Jan 2</li>
                                                <li class="target-fund"><strong>Discount</strong>15%</li>
                                                <li class="remaining-days"><strong>Duration</strong>4 Years</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Divider: Funfact -->
            <section class="divider parallax layer-overlay" data-bg-img="images/bg/bg6.jpg" data-parallax-ratio="0.7">
                <div class="container pt-70 pb-60">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="fa fa-users mt-5 text-white"></i>
                                <h2 data-animation-duration="2000" data-value="210" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                                <h4 class="text-white text-uppercase">Teachers</h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="fa fa-book mt-5 text-white"></i>
                                <h2 data-animation-duration="2000" data-value="31 " class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                                <h4 class="text-white text-uppercase">Departments</h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="fa fa-home mt-5 text-white"></i>
                                <h2 data-animation-duration="2000" data-value="2" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                                <h4 class="text-white text-uppercase">Sub Campuses</h4>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                            <div class="funfact text-center">
                                <i class="fa  fa-graduation-cap mt-5 text-white"></i>
                                <h2 data-animation-duration="2000" data-value="14000" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                                <h4 class="text-white text-uppercase">Enrolled Students From BS to Phd</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Teachers -->
            <section id="teachers">
                <div class="container pt-70 pb-70">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Teachers</span></h2>
                                <p>Providing affordable and accessible quality Under-Graduate, Graduate and Post-Graduate degree Programs,
                                    <br>National and International in scope.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mtli-row-clearfix">
                        <div class="col-md-12">
                            <div class="owl-carousel-4col">
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg1.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Rafaquat Hussain Arain</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Associate Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg2.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Riaz Ahmed Shaikh</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Associate Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg3.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Mumtaz Hussain Mahar</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg4.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Hidayatullah Shaikh</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg5.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Javed Ahmed Mahar</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg6.jpg">
                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Noor Ahmed Shaikh</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                        <div class="team-thumb">
                                            <img class="img-fullwidth" alt="" src="images/team/lg7.jpg">

                                            <div class="team-overlay"></div>
                                        </div>
                                        <div class="team-details bg-silver-light pt-10 pb-10">
                                            <h4 class="text-uppercase font-weight-600 m-5"><a href="page-teachers-details.html">Dr. Abdullah Maitlo</a></h4>
                                            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Associate Professor Department of Computer Science</h6>
                                            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: events -->
            <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5" data-bg-img="images/bg/bg1.jpg">
                <div class="container pt-70 pb-40">
                    <div class="section-title mb-30">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <h2 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">Over Events</h2>
                                <p class="text-white">Daily NEWS and Updates of<br> Shah Abdul Latif University, Khairpur</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="images/about/as7.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a href="#" class="text-white"> Newly Appointed</a></h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"><i class="fa fa-calendar mr-5"></i> Sept 26, 2021 |</li>
                                                <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Murree</li>
                                            </ul>
                                            <p class="mb-15 mt-15 text-white">Leadership Workshop for Newly Appointed Vice Chancellors was held at Kohsar University, Murree.</p>
                                            <a class="text-white font-weight-600" href="#">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="images/about/as8.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a href="#" class="text-white">During the Meeting</a></h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"><i class="fa fa-calendar mr-5"></i> sept 29, 2021 |</li>
                                                <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Islamabad</li>
                                            </ul>
                                            <p class="mb-15 mt-15 text-white">The Director General Board of Investment Mr. M. Jamil A. Qureshi briefed the Vice Chancellor..</p>
                                            <a class="text-white font-weight-600" href="#">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="images/about/as9.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a href="#" class="text-white">APPOINTMENT ORDERS</a></h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"><i class="fa fa-calendar mr-5"></i> Setp 22, 2021 |</li>
                                                <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Khairpur</li>
                                            </ul>
                                            <p class="mb-15 mt-15 text-white">The Appointment Orders Distribution Ceremony of Deceased Quota of Teachers and..</p>
                                            <a class="text-white font-weight-600" href="#">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="pricing table-horizontal maxwidth400">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumb">
                                                <img class="img-fullwidth mb-sm-0" src="images/about/as10.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-30 pl-sm-50">
                                            <h4 class="mt-0 mb-5"><a href="#" class="text-white">PEOPLE'S ASSEMBLY </a></h4>
                                            <ul class="list-inline mb-5 text-white">
                                                <li class="pr-0"><i class="fa fa-calendar mr-5"></i> Aug 28, 2021 |</li>
                                                <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>Khairpur</li>
                                            </ul>
                                            <p class="mb-15 mt-15 text-white">People's Assembly on Sustainable Development through Green Financing held at Shah Abdul Latif..</p>
                                            <a class="text-white font-weight-600" href="#">Read More →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery Grid 3 -->
            <section id="gallery">
                <div class="container pt-70 pb-70">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our <span class="text-theme-color-2"> Gallery</span></h2>
                                <p class="mb-0 pb-0">Learning & research. Youth Empowerment is one of the main objectives of the University.<br> Shah Abdul Latif University, Khairpur</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Portfolio Filter -->
                                <div class="portfolio-filter font-alt align-center text-center mb-6 0">
                                    <a href="#" class="active" data-filter="*">All</a>
                                    <a href="#photos" class="" data-filter=".photos">Photos</a>
                                    <a href="#campus" class="" data-filter=".campus">Campus</a>
                                    <a href="#students" class="mt-10" data-filter=".students">Students</a>
                                </div>
                                <!-- End Portfolio Filter -->

                                <!-- Portfolio Gallery Grid -->
                                <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item campus">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item photos students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/2.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item campus">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/3.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item photos">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item campus students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item photos">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/8.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item photos">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item campus students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item students">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item photos">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">View</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->
                                </div>
                                <!-- End Portfolio Gallery Grid -->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Client Say -->
            <section class="divider parallax layer-overlay overlay-dark-4" data-background-ratio="0.5" data-bg-img="images/bg/bg5.jpg">
                <div class="container pt-60 pb-60">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 pb-0  text-center text-white">Our Students say</h2>
                            <div class="owl-carousel-1col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb"><img class="" alt="" src="images/testimonials/1.jpg"></div>
                                        <div class="content pt-10">
                                            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                            <h4 class="author text-white mb-0">Catherine Grace</h4>
                                            <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb"><img class="" alt="" src="images/testimonials/2.jpg"></div>
                                        <div class="content pt-10">
                                            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                            <h4 class="author text-white mb-0">Catherine Grace</h4>
                                            <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-wrapper text-center">
                                        <div class="thumb"><img class="" alt="" src="images/testimonials/3.jpg"></div>
                                        <div class="content pt-10">
                                            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.</p>
                                            <h4 class="author text-white mb-0">Catherine Grace</h4>
                                            <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Blog -->
            <section id="blog">
                <div class="container pt-70">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="mt-0 line-height-1 text-uppercase">NEWS<span class="text-theme-color-2"> Alert</span></h2>
                                <p>Re-Advertisement of Admissions for MS/MPhil /PhD Program for the Year 2021 for remaining Programs<br> ANNOUNCEMENTS</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
                                <div class="item">
                                    <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                                            <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <ul>
                                                            <li><a class="text-white" href="#"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</a></li>
                                                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content border-1px p-20">
                                            <h4 class="entry-title mt-0 pt-0"><a href="https://salu.edu.pk/wp-content/uploads/2021/10/Prospectus-2022-Final-Version.pdf">Prospectus 2022</a></h4>
                                            <span class="text-theme-colored mr-10 font-14">Admin | <i class="fa fa-calendar mr-5 text-theme-colored"></i> 26 Octuber 2022</span>
                                            <p class="text-left mb-20 mt-5 font-13">SHAH ABDUL LATIF UNIVERSITY KHAIRPUR MIR’S SINDH PAKISTAN</p>
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="https://salu.edu.pk/wp-content/uploads/2021/10/Prospectus-2022-Final-Version.pdf">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                                            <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <ul>
                                                            <li><a class="text-white" href="#"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</a></li>
                                                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content border-1px p-20">
                                            <h4 class="entry-title mt-0 pt-0"><a href="#">Result of PGS Entry Test</a></h4>
                                            <span class="text-theme-colored mr-10 font-14">Alert | <i class="fa fa-calendar mr-5 text-theme-colored"></i> 24 Novmber 2021</span>
                                            <p class="text-left mb-20 mt-5 font-13">Result of PGS Entry Test has been Announced for results or visit PGS Page for further details..</p>
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                                            <div class="entry-meta meta-absolute text-center pl-10 pr-10">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <ul>
                                                            <li><a class="text-white" href="#"><i class="fa fa-comments-o mt-0 pt-0"></i> 85 <br> comments</a></li>
                                                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up mt-20"></i> 250 <br> Likes</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content border-1px p-20">
                                            <h4 class="entry-title mt-0 pt-0"><a href="#">To Apply Online</a></h4>
                                            <span class="text-theme-colored mr-10 font-14">Last-Date | <i class="fa fa-calendar mr-5 text-theme-colored"></i> 21 December 2022</span>
                                            <p class="text-left mb-20 mt-5 font-13">The online admission applications are invited from the interested candidates for fresh admission...</p>
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="blog-single-left-sidebar.html">Read more</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divider: Clients -->
            <section class="clients bg-theme-colored">
                <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section: Clients -->
                            <div class="owl-carousel-6col transparent text-center owl-nav-top">
                                <div class="item">
                                    <a href="#"><img src="images/clients/w1.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w2.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w4.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w5.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w6.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w3.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w4.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w5.png" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/clients/w6.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
            <div class="container pt-70 pb-40">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <img class="mt-10 mb-15" alt="" src="images/logo-wide-white.png">
                            <p class="font-16 mb-10">Shah Abdul Latif University, Old National Highway, Khairpur Mir's, 66020 Sindh, Pakistan.</p>
                            <a class="font-14" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                            <ul class="styled-icons icon-dark mt-20">
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">FAVOURITES</h5>
                            <ul class="list angle-double-right list-border">
                                <li><a href="#">Directorate of Students Affairs</a></li>
                                <li><a href="#">Directorate of Evening Program</a></li>
                                <li><a href="#">Directorate of PGS</a></li>
                                <li><a href="#">Gender Equity Programs</a></li>
                                <li><a href="#">Media Section</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">RESOURCES FOR</h5>
                            <ul class="list-border">
                                <li><a href="#">Sports Complex</a></li>
                                <li><a href="#">Sports Complex</a></li>
                                <li><a href="#" class="lineheight-20">Quality Enhancement Cell </a></li>
                                <li><a href="#" class="lineheight-20"> Forms Downloads </a></li>
                                <li><a href="#" class="lineheight-20">  Tenders & RFQs</a></li>
                                <li><a href="#" class="lineheight-20">  Prospectus</a></li>
                                <li><a href="#" class="lineheight-20">Alumni</a></li>

                                <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
                                <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                                    <label class="display-block" for="mce-EMAIL"></label>
                                    <div class="input-group">
                                        <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control" data-height="37px" id="mce-EMAIL">
                                        <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
                                    </div>
                                </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black-333">
                <div class="container pt-20 pb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-11 text-black-777 m-0"><a target="_blank" href="https://www.templateshub.net">Copyright © 2021 Shah Abdul Latif University</a></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Help Desk</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- index-mp-layout108:42-->

</html>