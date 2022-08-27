<?php

session_start();
session_destroy(); //unset session 
header("location:adminlogin.php");

?>