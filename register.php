<?php
include_once("connection.php");
include_once("fregister.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY PROJECT MANAGEMENT</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
 <!-- sign up form -->
 	<form class="splash-container" method="POST">
 		<div class="card">
 			<div class="card-header">
 			<h3 class="mb-1">Register Form</h3>
 			<p>Please enter user information.</p>
 		</div>

 		<div class="card-body">
 			<div class="form-group">
 				<input class="form-control form-control-lg" type="text" name="username"  placeholder="Username">
 			</div>

 			<div class="form-group">
 				<input class="form-control form-control-lg" type="email" name="email"  placeholder="E-mail">
 			</div>

 			<div class="form-group">
 				<input class="form-control form-control-lg" type="password" name="password1"  placeholder="Password">
 			</div>

 			<div class="form-group">
 				<input class="form-control form-control-lg" type="password" name="password2" placeholder="Confirm Password">
 			</div>

 			<div class="form-group pt-2">
 				<button class="btn btn-block btn-primary" type="submit" name="reg_user">Register User</button>
 			</div>
    </form>
 			<div class="card-footer bg-white">
 				<p>
 					Already Member?
 					<a href="login.php" class="text-secondary">Login Here</a>
 				</p>
 			</div>
 		</div>
 		</div>
 	
</body>
</html>