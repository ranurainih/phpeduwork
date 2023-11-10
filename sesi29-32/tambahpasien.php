<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pasien</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h3 class="mt-4 mb-2">Tambah Data Pasien</h3>
				<form action="proses_tambahpasien.php" method="post">
					<table>
						<tr>
							<td>
								Nama Pasien
							</td>
							<td>
								<input type="text" name="nama" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Jenis Kelamin
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
								Umur
							</td>
							<td>
								<input type="number" name="umur" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Alamat
							</td>
							<td>
								<textarea class="form-control" name="alamat" rows="6" required="" autocomplete="off"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								No Hp
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