
<?php
session_start();
if($_SESSION["user"])
{
?>

 <?php

    $category=$_POST["category"];

    $server="localhost";
    $username="root";
    $password="";
  
    $conn=new mysqli($server,$username,$password);
    $st=$conn->prepare("INSERT INTO kamdhenu.category(category_name)values(?)");
    $st->bind_param("s",$category);

    if($st->execute()==true)
    {
        $_SESSION['msg']="category add successfully";
        header("Location:category.php");
    }
    ?>

<?php
}
else

{
	header("location:adminlogin.php");
}
?>