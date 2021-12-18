
<?php

session_start();

include("connection.php");


if(isset($_SESSION['email'])){

    header('location: index.php');
  
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- form-login-style322:31-->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="LearnPress | Education & Courses HTML Template" />
    <meta name="keywords" content="academy, course, education, education html theme, #, learning," />


    <!-- Page Title -->
    <title>login-Salu</title>

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
        
        button {
            background-color: rgb(3, 3, 75);
            color: #fff;
        }
        
        button:hover {
            background-color: rgb(1, 1, 49);
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
                                        <a href="index.html" class="logo"><img alt="" src="images/logo-wide.png"></a><br>
                                        <span>Shah Abdul Latif University</span>
                                    </div>
                                    <h4 class="text-theme-colored mt-0 pt-5 text-center"> Login</h4>
                                    <hr>
                                    <p>Don't have an account?</p>
                                    <p class="text-gray">For any queries or help please email at admissions@salu.edu.pk <br> call 0243-9280126 - 0307-3861900 (Hours 9:00am to 5:00pm)</p>
                                    <form class="clearfix" method="POST" action="">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="form_username_email">Email</label>
                                                <input name="email" class="form-control" type="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="form_password">Password</label>
                                                <input name="password" class="form-control" type="password" required>
                                            </div>
                                        </div>
                                        <div class="checkbox pull-left mt-15">
                                            <label for="form_checkbox">
                                             <input id="form_checkbox" name="form_checkbox" type="checkbox">
                                             Remember me </label>
                                        </div>

                                            
                                        <br>
                                        <br>
                                        <div class="clear text-center pt-10">
                                            <a class="text-theme-colored font-weight-600 font-12" href="Forgot-password.html">Forgot Your Password?</a>
                                        </div>
                                        <div class="clear text-center pt-10">Don't have an account?
                                            <a class="text-theme-colored font-weight-600 font-12" href="register.php">Sigup now?</a>
                                        </div>
                                        <div class="clear text-center pt-10">
                                            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" data-bg-color="#3b5998"> Login </button>

                                        </div>
                            
                                    </form>
                            
         <?php
    if(isset($_POST['submit']))
       {    
      $email = $_POST["email"];
      $pwd = $_POST["password"];
      error_reporting();
      
     $qurry = "SELECT * FROM register WHERE  email ='$email' && password ='$pwd'";
     $data = mysqli_query($conn, $qurry);
    
     $total = mysqli_num_rows($data);
    
     //echo $total;
     if($total == 1)
     {
       //echo"Login Ok";
       $_SESSION['email'] = $email;
      
       header('location: index.php');
        
    
    }    
    
    else{
        echo '<script language="javascript">';
        echo 'alert(" OPPS! Insert Wrong Email/Password ")';
        echo '</script>';
        
        header('location: login.php');
        
    
        }
    
    }
    
    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->
        

        <!-- Footer -->
        <footer id="footer" class="footer text-center bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0">Copyright © 2021 Shah Abdul Latif University. All Rights Reserved</p>
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

<!-- form-login-style322:31-->

</html>