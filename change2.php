<?php

$sn=$_POST["sn"];
$newun=$_POST["newun"];
$newpass=$_POST["newpass"];

$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("UPDATE kamdhenu.admin SET username=?,password=? WHERE sn=?");
$st->bind_param("ssi",$newun,$newpass,$sn);
$st->execute();

if($st->execute()==true)
{
    session_start();
    $_SESSION["msg"]="change successfully";
    header("location:change.php");
}


?>


