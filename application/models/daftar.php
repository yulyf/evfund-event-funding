<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['username'];
	$email		= $_POST['email'];	
	$password	= $_POST['password'];	
	$no_hp	= $_POST['no_hp'];	
	$alamat	= $_POST['alamat'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$enkrippass = md5($password);
	$input = mysql_query("INSERT INTO users (id_user, username, password, email, groups, alamat, no_hp) VALUES(NULL, '$nama', '$enkrippass', '$email', '1', '$alamat', '$no_hp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Pendaftaran berhasil! ';		//Pesan jika proses tambah sukses
		echo '<a href="../masuk.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal mendaftar!';		//Pesan jika proses tambah gagal
		echo '<a href="../daftar.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<"daftar gagal">';
	echo '<script>window.history.back()</script>';

}
?>