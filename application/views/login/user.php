<!DOCTYPE html>
<html lang="">
	<head>
	<title>Login</title>
	</head>
	<body>
	<div class="container">
		<h3>Dasboard</h3>
		<hr>
			<?php  
			if (count($login)>0) 
			{
			?>
				<p>Anda Login sebagai <?php echo $login->username;?></p>
				
			<?php
			}
			else
			{
				echo '<p>username/password yang anda masukkan salah.</p>';
			}
			?>

	</div>
</body>
</html>