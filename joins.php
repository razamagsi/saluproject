<?php
session_start();

include("connection.php");

if(isset($_SESSION['email'])){
    
    header('location: index.php');   
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .form-container {
            background-color: #1b1b1b;
            width: 600px;
            height: 500px;
            border-radius: 3px;
            box-shadow: 0px 0px 10px;
            top: 50%;
            left: 50%;
            transform: translate(-25%, 10%);
        }
        
       
        @media only screen and ( max-width: 678px) {
            .bg {
                background-size: 300%;
            }
        }
        
        label {
            color: #fff;
        }
        
        .btn {
            width: 100%;
            background-color: #3a3939;
            border: none;
        }
        
        .logo img {
            width: 100%;
        }
        
        .btn:hover {
            background-color: #ff5d00;
        }
        
        .input:hover {
            border: 2px solid #ff5d00;
        }
        
        a {
            text-decoration: none;
            color: #fff;
        }
        
        a:hover {
            color: #ff5d00;
        }
    </style>
    <script>
       // function myFunction() {
         //   alert("Sussesfully login");
        //}
    </script>
</head>

<body>
    <div class="container-fluid bg row justify-content-center">

        <div class="col-xl-3 col-lg-4 col-12 col-md-8 col-sm-8">
            <form  class="form-container" method="POST" action="">
                <div class="logo">
                    <img src="./imges/alpaca-logo-white.png"> </div><br><br>
                <div class="mb-3 res">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control input" name="email" title="Please Insert username" required>

                </div>
                <div class="mb-3 res">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control input" name="password" title="Please Insert Strong Password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" onclick="myFunction()"  name="submit">Login</button><br> <br>
                <a href="sign.php"> Sign in</a><br>
                <a href="#"> Forgot Password?</a>
            </form>
        </div>


    </div>
    <?php
    
        
    if(isset($_POST['submit']))
     {    
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    
   $qurry = "SELECT * FROM  register WHERE  email ='$email' && password ='$pwd'";
   $data = mysqli_query($conn ,$qurry);

   $total = mysqli_num_rows($data);

   //echo $total;
   if($total == 1)
   {
     //echo"Login Ok";
     $_SESSION['email'] = $email;
    
    header('location: index.php');

    }    
        
   else{
       header('location: login.php');

      
       
       
    }

    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>