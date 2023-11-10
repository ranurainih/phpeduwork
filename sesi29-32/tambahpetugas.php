<!DOCTYPE html>
<html>
<head>
	<title>Tambah Petugas</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<?php

	include "connection.php";

	$pasiens = mysqli_query($connection, "SELECT * FROM pasien");

?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h3 class="mt-4 mb-2">Tambah Data Petugas</h3>
				<form action="proses_tambahpetugas.php" method="post">
					<table>
						<tr>
							<td>
								Nama Petugas
							</td>
							<td>
								<input type="text" name="nama_petugas" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Nama Pasien
							</td>
							<td>
								<select name="id_pasien" class="form-control" required="" autocomplete="off">
									<?php foreach ($pasiens as $pasien) { ?>
										<option value="<?php echo $pasien['id_pasien']; ?>">
											<?php echo $pasien['nama']; ?>
										</option>
									<?php } ?> 
								</select>
							</td>
						</tr>
						<tr>
							<td>
								Umur Petugas
							</td>
							<td>
								<input type="number" name="umur" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin Petugas
							</td>
							<td>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="sex" value="L" checked>
								  <label class="form-check-label" for="exampleRadios1">
								    L
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="sex" value="P" checked>
								  <label class="form-check-label">
								    P
								  </label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								No Hp Petugas
							</td>
							<td>
								<input type="number" name="no_hp" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<input type="submit" name="Submit" value="Submit" class="btn btn-primary">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>		

</body>
</html>