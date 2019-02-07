<?php
include_once("connection.php");
include_once("flogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY PROJECT MANAGEMENT</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1 shrink-to-fit=no"> 

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <style>
      html,
      body
      {
        height: 100%;
      }

      body
      {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
      }
    </style>
</head>

<body>
  <!-- Log in Form -->
  <form class="splash-container">
    <h2>MY PROJECT MANAGEMENT</h2>
    <div class="card">

      <div class="card-header">
        <h3 class=mb-2">Login</h3>
        <p>Please enter username and password</p>
      </div>

      <div class="card-body">
        <div class=input-group">
          <input class="form-control form-control-lg" type="text" name="username" required placeholder="Username">
        </div>

        <div class=input-group>
          <input class="form-control form-control-lg" type="password" name="password1" required placeholder="Password">
        </div>

        <div class="input-group">
          <button type="submit" class="btn btn-block btn-primary" name="login_user">Login</button>
        </div>

        <div class="card-footer bg-white">
          <p>
            Not yet a member?
            <a href="register.php">Sign Up</a>
          </p>
      </div>
    </div>
    </div>
  </form> 
</body>
</html>