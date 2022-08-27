<?php

$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$review=$_POST["review"];

$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$st=$conn->prepare("INSERT INTO kamdhenu.review(name,email,contact,review)VALUES(?,?,?,?)");
$st->bind_param("ssss",$name,$email,$contact,$review);
$st->execute();

?>