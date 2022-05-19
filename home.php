<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>
	
	<?php

	include('koneksi.php');


	$query = "SELECT * FROM pemesanantiket";

	$result = mysqli_query($conn, $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		
		<h1>Aplikasi Pemesanan Tiket</h1>
		
		<div class="row">
			<div class="col-sm-4">
				<h3>Tambah Pesanan Tiket</h3>
				<form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <label>ID Pengguna</label>
                        <input type="text" name="Id_pengguna" class="form-control" placeholder="Masukan ID" required />
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="Nama" class="form-control" placeholder="Masukan Nama" required/>
                    </div>
                    <div class="form-group">
                        <label>Studio:</label>
                            <div>
                            <select  name="Studio" class="form-select" aria-label="Default select example"  >
                            <option selected>Studio</option>
                            <option value="1">Studio 1</option>
                            <option value="2">Studio 2</option>
                            <option value="3">Studio 3</option>
                            </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Judul Film:</label>
                        <input type="text" name="Judul_film" class="form-control" placeholder="Masukan Judul Film" required/>
                    </div>
                    <div class="form-group">
                        <label>Jam Tayang:</label>
                            <div>
                            <select  name="Jam_tayang" class="form-select" aria-label="Default select example"  >
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
                        <input type="text" name="Hari" class="form-control" placeholder="Masukan Hari" required/>
                    </div>
                    <div class="form-group">
                        <label>No Kursi:</label>
                        <input type="text" name="No_kursi" class="form-control" placeholder="Masukan No Kursi" required/>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tiket:</label>
                        <input type="text" name="Jumlah_tiket" class="form-control" placeholder="Masukan Jumlah Tiket" required/>
                    </div>
                    <div class="form-group">
                        <label>Harga:</label>
                        <input type="text" name="Harga" class="form-control" placeholder="Masukan Harga" required/>
                    </div>
					<button type="submit" class="btn btn-info btn-block">Kirim</button>					
				</form>
				
			</div>
			<div class="col-sm-8">
				<h3>Tabel Pemesanan Tiket</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
                        <th>ID Pengguna</th>
                        <th>Nama</th>
                        <th>Studio</th>
                        <th>Judul Film</th>
                        <th>Jam Tayang</th>
                        <th>Hari</th>
                        <th>No Kursi</th>
                        <th>Jumlah Tiket</th>
                        <th>Harga</th>
                        <th colspan='2'>Aksi</th>

						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
                            <td><?php echo $row["Id_pengguna"]; ?></td>
                            <td><?php echo $row["Nama"];   ?></td>
                            <td><?php echo $row["Studio"];   ?></td>
                            <td><?php echo $row["Judul_film"];   ?></td>
                            <td><?php echo $row["Jam_tayang"];   ?></td>
                            <td><?php echo $row["Hari"];   ?></td>
                            <td><?php echo $row["No_kursi"];   ?></td>
                            <td><?php echo $row["Jumlah_tiket"];   ?></td>
                            <td><?php echo $row["Harga"];   ?></td>
                            <td>
							<a href="editform.php?id=<?php echo $row['Id_pengguna'];?>" class="btn btn-success" role="button">Edit</a>
							<a href="delete.php?id=<?php echo $row['Id_pengguna']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>

	
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 