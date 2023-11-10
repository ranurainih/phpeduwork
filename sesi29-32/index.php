
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
				<h3>Data Pasien</h3>
				<a href="tambahpasien.php"> Tambah data </a>
				<table class="table table-dark">
						<tr>
							<td width="250px"><b>Nama</b></td>
							<td width="100px"><b>Jenis Kelamin</b></td>
							<td width="100px"><b>Umur</b></td>
							<td width="250px"><b>Alamat</b></td>
							<td width="100px"><b>No Hp</b></td>
						</tr>
						<?php

							include "connection.php";

							$query = mysqli_query($connection, "SELECT * FROM pasien");

							while ($data = mysqli_fetch_array($query)) {
						?>
							<tr>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['sex']; ?></td>
								<td><?php echo $data['umur']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td><?php echo $data['no_hp']; ?></td>
							</tr>
						<?php } ?>
				</table>				
			</div>
			</div>
		</div>
	</div>
</body>
</html>