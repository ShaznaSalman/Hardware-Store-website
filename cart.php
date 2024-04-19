<?php
include_once('DBConnection.php');

$query="select id,name,price,qty from my_cart";

$categories=mysqli_query($connection,$query);
?>

<?php
if(isset($_POST['btnedit'])){
$id=$_GET['id'];
include_once('DBConnection.php');


$query="select qty from my_cart where id=".$id;

$categories=mysqli_query($connection,$query);

$qty="";
$id=0;

while($category=mysqli_fetch_assoc($categories)){
    $id=$category['id'];
    $qty=$category['itemqty'];

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-primary" style="background-color: blue;"><a href="Homepage.php">Back</a></button>
    <h1>Cart</h1>
    

    <table border="1" cellspacing="0" cellpadding="10" width="80%" align="center">
        <tr>
            <th>item_id</th>
            <th>item_name</th>
            <th>item_price</th>
            <th>Quantity</th>
            <th>action</th>
        </tr>

        <?php while($category=mysqli_fetch_assoc($categories)){?>
             
           <tr>
            <td><?php echo $category['id'];?></td>
            <td><?php echo $category['name'];?></td>
            <td><?php echo $category['price'];?></td>
            <td><?php echo $category['qty'];?>
            <form action="update.php" method="post">
            <h6>Qty  <input type="number" id="itemqty" name="itemqty" min="1" max="20" value="<?php echo $qty; ?>"></h6>
            <button type="submit" name="btndone" id="btndone">done</button>
            </form></td>

            <td>
                <a href="cart.php?id=<?php echo $category['id'];?>"><button id="btnedit" name="btnedit" style="background-color: green;">Edit</button></a>&nbsp;
            
                <a href="delete.php?id=<?php echo $category['id'];?>"><button  style="background-color: red;">Delete</button></a>

           </td>
           </tr>



        <?php }?>

    </table>
    
</body>
</html>