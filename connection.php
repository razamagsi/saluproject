<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "salu";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){

    //echo"Conntection Succesfully ";
}
else{
    
    //echo"Conntection Failed! ";
}


?>