<?php 
include("connection.php");

if(isset($_POST['submit']))
    {
       if(empty($_POST['email']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from register where email='".$_POST['email']."' and Password='".$_POST['Password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['email'];
                header("location:index.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Something Wrong';
    }

?>