<?php

$sn=$_POST["sn"];  

$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("DELETE FROM kamdhenu.products WHERE sn=?");
$st->bind_param("i",$sn);


if($st->execute()==true)
{
    header("Location:view-all-product.php");
}

?>

