<?php

$image=$_FILES['img']['name'];


echo $image;

$uploadpath="galleryimage/".$image; 
$upload=move_uploaded_file($_FILES["img"]["tmp_name"],$uploadpath);

$server="localhost";
$username="root";
$password="";
  
$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("INSERT INTO kamdhenu.gallery(image)values(?)");
$st->bind_param("s",$image);
$st->execute();
?>