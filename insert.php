<?php

$LIST = $_POST["list"];
include "config.php";
mysqli_query($con, "INSERT INTO `tabeltodo`(`List`) VALUES ('$LIST')");

//menentukan halman mana yang dituju setelah data dikirim.  
header("location:index.php")

?>