<?php


include('koneksi.php');

        $Id=$_POST["Id_pengguna"];
        $Nama=$_POST["Nama"];
        $Studio=$_POST["Studio"];
        $Judul_film=$_POST["Judul_film"];
        $Jam_tayang=$_POST["Jam_tayang"];
        $Hari=$_POST["Hari"];
        $No_kursi=$_POST["No_kursi"];
        $Jumlah_tiket=$_POST["Jumlah_tiket"];
        $Harga=$_POST["Harga"];
//query

$query =  "INSERT INTO pemesanantiket(Id_pengguna, Nama, Studio, Judul_film, Jam_tayang, Hari, No_kursi, Jumlah_tiket, Harga) 
VALUES('$Id' , '$Nama' , '$Studio' , ' $Judul_film' , '$Jam_tayang' , '$Hari' , '$No_kursi' , '$Jumlah_tiket' , '$Harga')";

if (mysqli_query($conn , $query)) {
	
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>