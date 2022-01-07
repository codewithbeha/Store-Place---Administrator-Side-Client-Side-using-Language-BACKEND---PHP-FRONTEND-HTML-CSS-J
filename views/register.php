<?php include('../logic/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register NOW</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="header">
  	<h6>Register ★</h6>
  </div>
	
  <form  method="post" action="register.php">
  	<?php include('../logic/errors.php'); ?>
  	<div class="input-group">
  	  <label>Username ★</label>
  	  <input id="username" type="text" name="username" onclick="return myfun2()" value="<?php echo $username; ?>">
		<span id="err"></span> <br> </br>
  	</div>
	  <div class="input-group">
  	  <label>Full Name ★</label>
  	  <input id="fullname" type="text" name="fullname" onclick="return myfun2()" value="<?php echo $email; ?>">
		<span id="msg"></span> <br> </br>
  	</div>
  	<div class="input-group">
  	  <label>Email ★</label>
  	  <input id="email" type="email" name="email" onclick="return myfun1()" value="<?php echo $email; ?>">
		<span id="msg"></span> <br> </br>
  	</div>
  	<div class="input-group">
  	  <label>Password ★</label>
  	  <input id="password" type="password" name="password_1">
		<span id="messages"></span> <br> </br>
  	</div>
  	<div class="input-group">
  	  <label>Confirm Password ★</label>
  	  <input id="password" type="password" onclick="return myfun()" name="password_2">
		<span id="messagess"></span> <br> </br>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" onclick="return myfun()" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <br>
  <script src="../js/main.js"></script>
</body>
</html>