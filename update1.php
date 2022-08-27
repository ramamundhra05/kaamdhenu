<?php
session_start();
if($_SESSION["user"])
{
?>

<?php
$sn=$_POST["sn"];
$name=$_POST["name"];
$des=$_POST["des"];
$material=$_POST["material"];
$price=$_POST["price"];
$colour=$_POST["colour"];
$size=$_POST["size"];
$weight=$_POST["weight"];
// $image=$_FILES['img']['name'];

// $uploadpath="IMAGE/".$image; 
// $upload=move_uploaded_file($_FILES["img"]["tmp_name"],$uploadpath);


$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("UPDATE kamdhenu.products SET name=?,description=?,material=?,price=?,colour=?,size=?,weight=? WHERE sn=?");
$st->bind_param("sssssssi",$name,$des,$material,$price,$colour,$size,$weight,$sn);
$st->execute();

?>

<?php
}
else

{
	header("location:adminlogin.php");
}
?>


