<?php
    $qty=$_POST['itemqty'];
    $id=$_POST['id'];

    include_once('DBConnection.php');

    $query="update my_cart set qty='".$qty."' where id=".$id;
    mysqli_query($connection,$query);
    header('location:cart.php');
?>