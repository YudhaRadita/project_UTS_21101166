<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pemesanan Tiket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 


include('koneksi.php');


$query = "SELECT * FROM pemesanantiket WHERE Id_pengguna='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Pemesanan</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>


		        <input type="hidden" name="Id_pengguna" value="<?php echo $row['Id_pengguna']; ?>">

		        <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="Nama" class="form-control" value="<?php echo $row['Nama']; ?>" placeholder="Masukan Nama" required/>
                    </div>
                    <div class="form-group">
                        <label>Studio:</label>
                            <div>
                            <select  name="Studio" class="form-select"  value="<?php echo $row['Studio']; ?>" aria-label="Default select example"  >
                            <option selected>Studio</option>
                            <option value="1">Studio 1</option>
                            <option value="2">Studio 2</option>
                            <option value="3">Studio 3</option>
                            </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Judul Film:</label>
                        <input type="text" name="Judul_film" class="form-control" value="<?php echo $row['Judul_film']; ?>" placeholder="Masukan Judul Film" required/>
                    </div>
                    <div class="form-group">
                        <label>Jam Tayang:</label>
                            <div>
                            <select  name="Jam_tayang" class="form-select" value="<?php echo $row['Jam_tayang']; ?>" aria-label="Default select example"  >
                            <option selected>Jam Penayangan</option>
                            <option value="10.00 WITA-12.00 WITA">10.00 WITA-12.00 WITA</option>
                            <option value="12.00 WITA-14.00 WITA">12.00 WITA-14.00 WITA</option>
                            <option value="14.00 WITA-16.00 WITA">14.00 WITA-16.00 WITA</option>
                            <option value="18.00 WITA-20.00 WITA">18.00 WITA-20.00 WITA</option>
                            <option value="20.00 WITA-22.00 WITA">20.00 WITA-22.00 WITA</option>
                            </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Hari:</label>
                        <input type="text" name="Hari" class="form-control" value="<?php echo $row['Hari']; ?>" placeholder="Masukan Hari" required/>
                    </div>
                    <div class="form-group">
                        <label>No Kursi:</label>
                        <input type="text" name="No_kursi" class="form-control" value="<?php echo $row['No_kursi']; ?>" placeholder="Masukan No Kursi" required/>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tiket:</label>
                        <input type="text" name="Jumlah_tiket" class="form-control" value="<?php echo $row['Jumlah_tiket']; ?>" placeholder="Masukan Jumlah Tiket" required/>
                    </div>
                    <div class="form-group">
                        <label>Harga:</label>
                        <input type="text" name="Harga" class="form-control" value="<?php echo $row['Harga']; ?>" placeholder="Masukan Harga" required/>
                    </div>
		        <button type="submit" class="btn btn-success btn-block">Update Pesanan</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 