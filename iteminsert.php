<?php
include_once('DBConnection.php');
$id=$_POST['itemcode'];
$name=$_POST['itemname'];
$price=$_POST['itemprice'];
$qty=$_POST['itemqty'];



$query="insert into my_cart(id,name,price,qty) values('".$id."','".$name."','".$price."','".$qty."')";
mysqli_query($connection,$query);
echo '<script>alert("insert successfully");</script>';
echo '<script>window.location.href="Homepage.php";</script>';
exit;


?>