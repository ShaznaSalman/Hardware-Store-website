<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- Icon -->
  <link href="images/Logo.png" rel="icon">


  <link rel="stylesheet" href="login.css">

    <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

    <script src="assets/js/jQuery.js"></script>

    <!--javascript validation -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    
    

    <style>
        span{
            color: red;
        }
        span i{
            color: seagreen;
        }
    </style>
    

</head>
<body>

    <!--Header-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <button type="button" class="btn btn-primary"><a href="login.php">Back</a></button>
        
      </div>
    </nav>
  </header>


    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="insert.php" method="post" id="#singup">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" onkeyup="validateName()" required><span id="name-erro"></span>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off"  onkeyup="validateEmail()" required><span id="email-erro"></span>
                </div>

                <div class="field input">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" name="number" id="number" autocomplete="off" required onkeyup="validatePhone()"><span id="phone-erro"></span>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" onkeyup="validatePass()" required><span id="pass-erro"></span>
                </div>

                <div class="field input">
                    <label for="cpassword">Confrim Password</label>
                    <input type="password" name="cpassword" id="cpassword" autocomplete="off"  onkeyup="validateCpass()" required><span id="cpass-erro"></span>
                </div>


                <div class="field">
                <span id="submit-erro"></span><input type="submit" class="btn" name="submit" value="Create Account" onclick="return validate()" required>
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Login</a>
                </div>

            </form>
        </div>
    </div>

   <!-- <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="insert.php" method="post" id="signup">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off">
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off">
                </div>

                <div class="field input">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" name="number" id="number" autocomplete="off">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="cpassword">Confrim Password</label>
                    <input type="password" name="cpassword" id="cpassword" autocomplete="off">
                </div>


                <div class="field">
                <input type="submit" class="btn" name="submit" value="Create Account">
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Login</a>
                </div>

            </form>
        </div>
    </div>-->


    <script src="assets/js/formvalidation.js" ></script>



     
     
    
</body>
</html>
