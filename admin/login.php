<?php
session_start();
include "loginquery.php";

$mail=$_POST['mail'];
$pass=$_POST['password'];
echo $cap1=$_POST['cap1'];
echo $cap=$_POST['cap'];

if($cap1==$cap){

    $sql="select * from admincheck where email='$mail' and password='$pass'";
    $q=mysqli_query($con, $sql);
    
    $count=mysqli_num_rows($q);
    
    if($count>0)
    {
      
        $_SESSION['mail']=$mail;
    
        header("location:dashboard1.php");
    
    }
    else{
        echo("Incorrect Username and Password");
    }
}
else{
    echo"Incorrect Captcha";
}
?>