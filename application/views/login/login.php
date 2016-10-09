<!DOCTYPE html>
<html lang="">
	<head>
		<title>Login</title>
</head>
<body>
	<div class="container">
		<h3>Login</h3>
		<hr>
		<form action="<?php echo base_url('index.php/login/user') ?>" method="POST">
			<div class="form-group">
				<label for="cari">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="cari">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<input class="btn btn-primary" type="submit" value="Login">
			<input class="btn btn-primary" type="reset" value="Reset">
		</form>
		</div>
		</body>
		</html>


