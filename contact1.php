

<?php
$name=$_POST["name"];
$contact=$_POST["contact"];
$mail=$_POST["mail"];
$message=$_POST["message"];

// echo $messages;
// echo $email;
// echo $names;

$server="localhost";
$username="root";
$password="";

$con=new mysqli($server,$username,$password);

$st=$con->prepare("INSERT INTO kamdhenu.contact(name,contact,email,message) VALUES (?,?,?,?)");
$st->bind_param("ssss",$name,$contact,$mail,$message);
$st->execute();

if($st->execute()==true)
{
    session_start();
    $_SESSION["msg"]="Message Sent successfully";
    header("location:contact.php");
}



?>

