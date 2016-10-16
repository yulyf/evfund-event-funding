<!DOCTYPE html>
<html>
<head>
	<title>Daftar | Ev-Fund</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<!--header-->
<div class="nav">
      <ul>
        <li style="margin-left:20px;" class="home"><a href="index.php">Beranda</a></li>
        <?php
        session_start();
          if (!isset($_SESSION['email']))
          { 
        ?>
        
        <li style="float:right;margin-right:20px;" class="news"><a href="masuk.php">Masuk</a></li>
        <li style="float:right;margin-right:-20px;" class="news"><a href="daftar.php">Daftar</a></li>

        <?php
          } else {
          ?>

          <li style="float:right;width:400px;margin-right:20px;" class="news"><a href="phpfiles/logout.php">Logout <?php echo $_SESSION['email']; ?></a></li>
                        
        <?php 
          }
        ?>
        
        
        
      </ul>
</div>

<div class="main">
	<div class="container-6">
		<div>
		<center><h2><b>Daftar pengguna di Bhineka Electronics Marketplace</b></h2></center>
			<form method="post" action="phpfiles/daftar.php">
				<label for="nama">Nama</label>
				<input type="text" id="nama" name="nama">
				
				<label for="email">Email</label>
				<input type="email" id="email" name="email">

				<label for="password">Passwrod</label>
				<input type="password" id="password" name="password">

				<label for="nomor_hp">Nomor Telepon</label>
				<input type="text" id="no_hp" name="no_hp">

				<label for="alamat">Alamat</label>
				<input type="text" id="alamat" name="alamat">

			<input type="submit" name="submit" value="Daftar">
			</form>
		</div>
	</div>
</div>

</body>
</html>