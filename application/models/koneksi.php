<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "codeigniter";	//nama database

$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
?>
