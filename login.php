<?php
     include_once("DBConnection.php");
      if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $stmt=$connection->prepare("SELECT * FROM login_details WHERE Email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
          $data =$stmt_result->fetch_assoc();

          if(password_verify( $password ,$data['Password'])){
            header("Location:Homepage.php");
            exit;
          }else{
            echo '<script>alert("invalid Email or password");</script>';
          }
            

          }else{
            echo '<script>alert("invalid Email or password");</script>';
          }
        }


       

      
      

       /* $count=mysqli_num_rows($result);
        if($count==1){
          header("Location:Homepage.php");
        }else{
        echo '<script>alert("invalid Email or password");</script>';
          
        }*/

      
      /*if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST['email'];
        $mysqli=include_once("DBConnection.php");

        $sql=sprintf("SELECT * FROM login_details WHERE Email='.$email.'");
      

      $result=$mysqli->query($sql);

      $user=$result->fetch_assoc();

      var_dump($user);
      exit;

      }*/
      
?>




<!DOCTYPE html>
<html>

<head>
  <title>WPL Trading</title>
  <!-- Icon -->
  <link href="assets/img/Logo.png" rel="icon">
   <link rel="stylesheet" href="login.css">





</head>

<body>

    <!--Header-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <button type="button" class="btn btn-primary"><a href="index.php">Back</a></button>
          
        </div>
      </nav>
    </header>

  <!--Login-->

  <section id="login" class="d-flex align-items-center">
    <div class="container">
      <div class="box form-box">
          <header>Login</header>
          <form action="" method="post">
              <div class="field input">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" required>
              </div>

              <div class="field input">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" required>
              </div>

              <div class="field">
                  <input type="submit" class="btn" name="submit" value="Login" required>
              </div>

              <div class="links">
                  Don't have account <a href="register.php">Sign up Now</a>
              </div>

          </form>
      </div>
  </div>
  </section>



</body>

</html>