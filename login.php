<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>VENDX</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
<form method="post" action="login.php">
	<?php echo display_error(); ?>
	<div class = "fb-header-base" ></div>
		<div class = "fb-header">
			<div id="form1" class="fb-header">
				<label>Username</label><br>
				<input type="text" name="username"><br>
			</div>
			<div id="form2" class="fb-header">
				<label>Password</label><br>
				<input type="password" name="password"><br>
			</div>
			<div class="submit1">
				<button type="submit" name="login_btn">Login</button>
			</div>
			<div id="img1" class="fb-header">
			<h2>VENDX</h2></div>
		</div>
	</div>
</form>
	
<form method="post" action="login.php">
	<div class="fb-body">
		<div class="fb-body" id="img2">
		<img src="x.jpg"/>
		</div>
		<div class="fb-body" id="form3">
			<label>Username</label>
			<input type="text" name="username" id ="mailbox" value="<?php echo $username; ?>">
			<label>Email</label>
			<input type="email" name="email" id ="mailbox" value="<?php echo $email; ?>">
			<label>password</label>
			<input type="password" name="password_1" id ="mailbox" >
			<label>Confirm password</label>
			<input type="password" name="password_2" id ="mailbox" >
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
	</div>
</form>
</body>
</html>