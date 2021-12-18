<?php 

include("connection.php");

if(isset($_POST['submit'])){

    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $number = $_POST['snumber'];
    $cnic = $_POST['scnic'];
    $password = $_POST['spassword'];
    $gender = $_POST['sgender'];


    $qurry = "INSERT INTO register (name, email, number, cnic, password, gender) VALUES ('$name', '$email', '$number', '$cnic', '$password', '$gender')";

    if(mysqli_query($conn, $qurry)){

        echo '<script language="javascript">';
        echo 'alert(" successfully Registerd ")';
        echo '</script>';
                                            
    }
    else{
        
        echo '<script language="javascript">';
        echo 'alert(" OPPS! Connection Problem (TRY AGAIN LATER)")';
        echo '</script>';
    }

}


?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- form-register-style322:31-->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="LearnPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, #, learning," />


    <!-- Page Title -->
    <title>Register-Salu</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .logo img {
            width: 150px;
        }
        
        input {
            width: 100%;
            height: 44px;
        }
        
        button {
            background-color: rgb(3, 3, 75);
            color: #fff;
        }
        
        button:hover {
            background-color: rgb(3, 3, 49);
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

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <section id="home" class="divider bg-lighter">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-push-3">
                                    <div class="text-center mb-60">

                                        <a href="index.html" class="logo"><img alt="" src="images/logo-wide.png"></a>
                                        <br>
                                        <span> Shah Abdul Latif University </span>
                                    </div>
                                    <form name="reg-form" class="register-form form-transparent" method="POST" >
                                        <div class="icon-box mb-0 p-0">
                                            <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                                <i class="pe-7s-users"></i>
                                            </a>
                                            <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                                        </div>
                                        <hr>
                                        <p class="text-gray">For any queries or help please email at admissions@salu.edu.pk <br> call 0243-9280126 - 0307-3861900 (Hours 9:00am to 5:00pm)/p>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Name<sub></sub></label>
                                                    <input class="" type="text" placeholder="Candidate Name" name="sname" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email Address<sub></sub></label>
                                                    <input class="" type="email" name="semail" placeholder="Candidate Email" title="abc12@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>CNIC or B-Form<sub></sub></label>
                                                    <input class="" type="text" placeholder="Candidate CNIC" name="scnic" title="45xxxxxxxxxxx" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Mobile Number<sub></sub></label>
                                                    <input class="" type="text" placeholder="Candidate Phone-no" name="snumber" title="031xxxxxxxx" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="form_choose_password">Gender <sub></sub></label>
                                                    <input id="form_choose_password" class="" type="text" name="sgender" placeholder="Male/Female" title="Male/Female" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="form_choose_password">Choose Password <sub></sub></label>
                                                    <input id="form_choose_password" class="" type="password" name="spassword" placeholder="Stroing Password" title="jaksdjk@jd" required>
                                                </div>

                                            </div>
                                            <div class="clear text-center pt-10">
                                                <span>Already have an account?</span>
                                                <a class="text-theme-colored font-weight-600 font-12" href="login.php">Login</a>
                                            </div>
                                            <div class="clear text-center pt-10">

                                                <input type="submit" name="submit" value="Register Now" class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" data-bg-color="#3b5998">

                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->

        <!-- Footer -->
        <footer id="footer" class="footer bg-black-222">
            <div class="container p-20">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0"><a target="_blank" href="https://www.templateshub.net">Copyright © 2021 Shah Abdul Latif University</a></p>
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

</body>

<!-- form-register-style322:31-->

</html>