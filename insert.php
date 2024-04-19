<?php
/*

//Read Inputs form te user
include_once('DBConnection.php');
$name=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

$duplicate="SELECT * FROM login_details WHERE Mobile_Number='".$number."' || Username='".$name."'";
$result=mysqli_query($connection,$duplicate);
$count=mysqli_num_rows($result);

if($count>0){
       
   
        echo '<script>alert("username or mobile number have been used");</script>';
        echo '<script>window.location.href="register.php";</script>';
       // header('Content-Type:application/json');
       // echo json_encode($count);
        die();
}elseif($pass==$cpass){
    
        $query="insert into users(Username,Email,Mobile_Number,Password) values('".$name."','".$email."','".$number."','".$pass."')";
        mysqli_query($connection,$query);
        echo '<script>alert("insert successfully");</script>';
        echo '<script>window.location.href="login.php";</script>';
        die();
    }




//DB Query

//Executing Query


*/

if(empty($_POST["username"])){
        die("Username is required");
}

if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Valid email is required");
}

//validating mobile number

if(strlen($_POST["number"])!=10){
        die("Invalid Mobile number");
}
if(! preg_match('/^[0-9]{10}+$/', $_POST["number"])){
        die("Invalid Mobile number");

}


//password validation with php
if(strlen($_POST["password"])<8){
        die("password must be at least 8 characters");
}

if(! preg_match("/[!@#$%]/",$_POST["password"])){
        die("Password must contain at least one @!#$%");
}

if(! preg_match("/[a-z]/i",$_POST["password"])){
        die("Password must contain at least one Lowercase letter");
}
if(! preg_match("/[0-9]/",$_POST["password"])){
        die("Password must contain at least one number");
}
if(! preg_match("/[A-Z]/",$_POST["password"])){
        die("Password must contain at least one Uppercase letter");
}


if($_POST["password"] !== $_POST["cpassword"]){
        die("Password must match");
}

//hidding password 
$password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);

var_dump($password_hash);

//this is global post method to see where the values are passing from the register.php file one soucre code with the brownser in insert.php to see what happen
print_r($_POST);


//Adding the connection
include_once('DBConnection.php');
$name=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

$duplicate="SELECT * FROM login_details WHERE Email='".$email."' || Mobile_Number='".$number."'";
$result=mysqli_query($connection,$duplicate);
$count=mysqli_num_rows($result);

if($count>0){
        echo '<script>alert("Email or Mobile Number have been used");</script>';
        echo '<script>window.location.href="register.php";</script>';
        die();

}
else{

$query="insert into login_details(Username,Email,Mobile_Number,Password) values('".$name."','".$email."','".$number."','".$password_hash."')";
mysqli_query($connection,$query);
echo '<script>alert("insert successfully");</script>';
echo '<script>window.location.href="login.php";</script>';
exit;

}

?>