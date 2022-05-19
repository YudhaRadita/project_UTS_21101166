<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bioskop";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("Koneksi gagal");
}

?>