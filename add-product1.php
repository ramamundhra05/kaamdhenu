<?php
session_start();
if($_SESSION["user"])
{
?>

<?php

$name=$_POST["name"];
$category=$_POST["category"];
$des=$_POST["des"];
$fragrance=$_POST["fragrance"];
$material=$_POST["material"];
$op=$_POST["op"];
$sp=$_POST["sp"];
$colour=$_POST["colour"];
$size=$_POST["size"];
$weight=$_POST["weight"];
$image=$_FILES['img']['name'];

// echo $image;

$uploadpath="IMAGE/".$image; 
$upload=move_uploaded_file($_FILES["img"]["tmp_name"],$uploadpath);

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("INSERT INTO kamdhenu.products(name,original_price,selling_price,category,description,fragrance,material,colour,size,weight,image)values(?,?,?,?,?,?,?,?,?,?,?)");
$st->bind_param("sssssssssss",$name,$op,$sp,$category,$des,$fragrance,$material,$colour,$size,$weight,$image);
$st->execute();
?>

<?php
}
else

{
	header("location:adminlogin.php");
}
?>
