<?php

include('koneksi.php');

    $Id=$_GET["Id_pengguna"];
    $Nama=$_GET["Nama"];
    $Studio=$_GET["Studio"];
    $Judul_film=$_GET["Judul_film"];
    $Jam_tayang=$_GET["Jam_tayang"];
    $Hari=$_GET["Hari"];
    $No_kursi=$_GET["No_kursi"];
    $Jumlah_tiket=$_GET["Jumlah_tiket"];
    $Harga=$_GET["Harga"];


$query = "UPDATE pemesanantiket SET Nama='$Nama' , Studio='$Studio' , Judul_film='$Judul_film' , Jam_tayang='$Jam_tayang' , Hari='$Hari' ,No_kursi='$No_kursi' ,Jumlah_tiket='$Jumlah_tiket'  WHERE Id_pengguna='$Id' ";

if (mysqli_query($conn, $query)) {
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>