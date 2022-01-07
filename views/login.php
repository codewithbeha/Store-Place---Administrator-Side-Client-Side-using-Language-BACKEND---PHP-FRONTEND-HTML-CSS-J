<?php include('../logic/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTER/LOGIN</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="header">
  	<h6>Login ★</h6>
  </div>
	 
  <form method="post" action="../rights/loginVerify.php" onsubmit="return validate()">
  	<?php include('../logic/errors.php'); ?>
  	<div class="input-group">
  		<label>Username ★</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password ★</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <br>
  <script scr="../js/main.js"></script>
</body>
</html>