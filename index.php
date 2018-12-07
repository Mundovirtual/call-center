<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V16</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons/icon-font.min.css">
<!--===============================================================================================--> 
  <link rel="stylesheet" type="text/css" href="css/login/util.css">
  <link rel="stylesheet" type="text/css" href="css/login/main.css">
<!--===============================================================================================-->
  <!-- Alertyfy js-->
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">


</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">

        <span class="login100-form-title p-b-41">
           
          <span class="lnr lnr-phone"></span>
           SMS CENTER
          <span class="lnr lnr-phone-handset"></span>

        </span>
        <form class="login100-form validate-form p-b-33 p-t-5 form"  method="POST" id="login">

          <div class="wrap-input100" data-validate = "Enter username">
            <input class="input100" type="text" name="username" id="username" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100" data-validate="Enter password">
            <input class="input100" type="password" name="pass" id="pass" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn" type="submit">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="js/jquery/jquery.min.js"></script>
<!--===============================================================================================--> 
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
<!--===============================================================================================-->   
  <script src="js/mainlogin.js"></script>
  
  <script src="model/login/login.js"></script>

  <script src="js/alertifyjs/alertify.js"></script> 
</body>
</html>