<!DOCTYPE html>
<html>
<head>
	<title>Tambah Obat</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h3 class="mt-4 mb-2">Tambah Data Obat</h3>
				<form action="proses_tambahobat.php" method="post">
					<table>
						<tr>
							<td>
								Nama Obat
							</td>
							<td>
								<input type="text" name="nama_obat" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Tanggal Expire Obat
							</td>
							<td>
								<input type="date" name="expired_obat" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Jenis Obat
							</td>
							<td>
								<input type="text" name="jenis_obat" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
						<tr>
							<td>
								Dosis Obat
							</td>
							<td>
								<input type="text" name="dosis_obat" class="form-control" required="" autocomplete="off">
							</td>
						</tr>
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