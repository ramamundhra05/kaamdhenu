<?php

session_start();


$server="localhost";
$username="root";
$password="";

$con=new mysqli($server,$username,$password);
$result=mysqli_query($con, "SELECT * from kamdhenu.admin WHERE username='".$_POST["user"]."' and password = '".$_POST["pass"]."'");

$row=mysqli_fetch_array($result);

if(is_array($row))
{

    $_SESSION["user"]=$row['username'];
    $_SESSION["pass"]=$row['password'];
    header("location:admin.php");
}
else
{
    header("location:adminlogin.php");
 
}



?>