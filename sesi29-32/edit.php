<!DOCTYPE html>
<html>
<head>
	<title>Edit Petugas</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<?php

	include "connection.php";

	$id_petugas = $_GET['id_petugas'];

	$petugass = mysqli_query($connection, "SELECT * FROM petugas WHERE id_petugas = '$id_petugas' ");

	foreach ($petugass as $petugas) {
		$nama_petugas = $petugas['nama_petugas'];
		$umur = $petugas['umur'];
		$sex = $petugas['sex'];
		$no_hp = $petugas['no_hp'];
	}

?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h3 class="mt-4 mb-2">Edit Data Petugas</h3>
				<form action="proses_edit.php?id_petugas=<?php echo $id_petugas; ?>" method="post">
					<table>
						<tr>
							<td>
								Nama Petugas
							</td>
							<td>
								<input type="text" name="nama_petugas" class="form-control" required="" autocomplete="off" value="<?php echo $nama_petugas; ?>">
							</td>
						</tr>
						<tr>
							<td>
								Umur Petugas
							</td>
							<td>
								<input type="number" name="umur" class="form-control" required="" autocomplete="off" value="<?php echo $umur; ?>">
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin Petugas
							</td>
							<td>
								<div class="form-check">
									<?php
									if ($sex == 'L') {
										echo '<input class="form-check-input" type="radio" name="sex" value="L" checked="">';
									} else {
										echo  '<input class="form-check-input" type="radio" name="sex" value="L">';
									}
									?>
								  <label class="form-check-label" for="exampleRadios1">
								    L
								  </label>
								</div>
								
								<div class="form-check">
									<?php
									if ($sex == 'P') {
										echo '<input class="form-check-input" type="radio" name="sex" value="P" checked="">';
									} else {
										echo  '<input class="form-check-input" type="radio" name="sex" value="P">';
									}
									?>
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
								<input type="number" name="no_hp" class="form-control" required="" autocomplete="off" value="<?php echo $no_hp; ?>">
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