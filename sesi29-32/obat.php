
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center mt-5 mb-5">
					<a href="index.php">Pasien</a> |
					<a href="obat.php">Obat</a> |
					<a href="petugas.php">Petugas</a> 
			</div>
			<div class="col-md-12">
				<h3>Data Obat</h3>
				<a href="tambahobat.php"> Tambah data </a>
				<table class="table table-dark">
						<tr>
							<td width="100px"><b>Nama Obat</b></td>
							<td width="100px"><b>Tanggal Expire Obat</b></td>
							<td width="100px"><b>Jenis Obat</b></td>
							<td width="100px"><b>Dosis Obat</b></td>
						</tr>
						<?php

							include "connection.php";

							$query = mysqli_query($connection, "SELECT * FROM obat");

							while ($data = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $data['nama_obat']; ?></td>
								<td><?php echo $data['expired_obat']; ?></td>
								<td><?php echo $data['jenis_obat']; ?></td>
								<td><?php echo $data['dosis_obat']; ?></td>
							</tr>
						<?php } ?>
				</table>
			</div>				
			</div>
		</div>
	</div>
</body>
</html>