<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php include 'util/title.txt' ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'css/css.php' ?>
  <style type="text/css">
    .login-page{
          background-image: url(../backoffice/images/key.jpg);
          background-size: cover;
          background-repeat: no-repeat;
    }
    .login-card-body, .register-card-body{
          background: #ffffffba!important;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>KAPEBOMA   </b>ADMIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register Admin</p>

      <form action="php/controllers/registerAdmin.php" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Enter Username"  
          required  
          oninvalid="this.setCustomValidity('Enter Your Username.')" 
          onchange="this.setCustomValidity('')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="fname" placeholder="Enter Firstname"  
          required  
          oninvalid="this.setCustomValidity('Enter Your Lastname.')" 
          onchange="this.setCustomValidity('')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="lname" placeholder="Enter Lastname"  
          required  
          oninvalid="this.setCustomValidity('Enter Your Lastname.')" 
          onchange="this.setCustomValidity('')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password"
          required  
          oninvalid="this.setCustomValidity('Enter Your Password.')" 
          onchange="this.setCustomValidity('')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password2" class="form-control" placeholder="Repeat Password"
          required  
          oninvalid="this.setCustomValidity('Enter Your Repeat Password.')" 
          onchange="this.setCustomValidity('')">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     <!--  <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- standard scripts -->
<?php include 'script/script.php' ?>
<!-- link below all custom scripts -->  

</body>
</html>
