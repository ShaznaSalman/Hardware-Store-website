<?php
$id=$_GET['id'];
include_once('DBConnection.php');
$query="DELETE FROM `my_cart` WHERE `my_cart`.`id` = '".$id."'";
mysqli_query($connection,$query);
header('location:cart.php');
?>