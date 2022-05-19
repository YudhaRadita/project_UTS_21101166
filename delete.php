<?php 

$id = $_GET['Id_pengguna'];


include('koneksi.php');


$query = "DELETE FROM pemesanantiket WHERE Id_pengguna = '$id' ";

if (mysqli_query($conn , $query)) {
	
	header("location:home.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>