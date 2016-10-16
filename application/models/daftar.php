<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['submit'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama		= $_POST['nama'];	//membuat variabel $nis dan datanya dari inputan NIS
	$email		= $_POST['email'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$password	= $_POST['password'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$no_hp	= $_POST['no_hp'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$alamat	= $_POST['alamat'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$enkrippass = md5($password);
	$input = mysql_query("INSERT INTO user VALUES(NULL, '$nama', '$email', '$enkrippass', '$no_hp', '$alamat')") or die(mysql_error());
	
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
	echo '<script>window.history.back()</script>';

}
?>