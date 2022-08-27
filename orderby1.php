
<?php

session_start();            
// $product=$_SESSION["cart"];
$name=$_POST["name"];
$address=$_POST["address"];
$contact=$_POST["contact"];
$mail=$_POST["mail"];
// $product=$_POST["product"];
$Quantity=$_POST["Quantity"];
$upload=$_POST["upload"];
$sn=$_POST["sn"];


//$product=$_POST["product"];


$server="localhost";
$username="root";
$password="";

$con=new mysqli($server,$username,$password);

$st=$con->prepare("INSERT INTO kamdhenu.order(name,address,contact,email,Quantity,product,list) VALUES (?,?,?,?,?,?,?)");
$st->bind_param("sssssss",$name,$address,$contact,$mail,$Quantity,$sn,$upload);
$st->execute();

if($st->execute()==true)
{
    session_start();
    $_SESSION["msg"]="Order Placed successfully";
    header("location:orderby.php");
}
?>

