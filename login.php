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
       
       .logo img {
            width: 100px;
        }
    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }
    a{
        text-decoration: none;
    }


    </style>
    <script>
       // function myFunction() {
         //   alert("Sussesfully login");
        //}
    </script>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto ">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
          <div class="text-center mb-60">
                <a href="index.html" class="logo"><img alt="" src="images/logo-wide.png"></a><br>
                <span>Shah Abdul Latif University</span>
                <br><br>
                
                <p class="text-gray">For any queries or help please email at admissions@salu.edu.pk <br> call 0243-9280126 - 0307-3861900 (Hours 9:00am to 5:00pm)</p>
            </div> 
            <hr>
            <h5 class="card-title text-center mb-3 fw-light fs-5">Login Form</h5>
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
     ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Opps!</strong> Insert Wrong Email/Password.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
<?php
       header('location: login.php');

      
       
       
    }

    }
    ?>
            <form method="POST" action="" >   
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button name="submit" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Login    
                  </button>
              </div>
              
              <hr class="my-4">
              <div class="d-grid mb-2">
              <div class="clear text-center pt-10">
                <a class="text-theme-colored font-weight-600 font-12" href="Forgot-password.html">Forgot Your Password?</a>
                </div>
                <div class="clear text-center pt-10">Don't have an account?
                    <a class="text-theme-colored font-weight-600 font-12" href="register.php">Sigup now?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>