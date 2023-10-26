<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
</head>
<body>
	<table border="1">
	<tr>
		<td bgcolor="skyblue">No</td>
		<td bgcolor="skyblue">Nama</td>
		<td bgcolor="skyblue">Kelas</td>
	</tr>
	<?php for ($i = 1; $i <= 10; $i++) { ?>	
		<tr>
			<td><?php echo $i ?></td>
			<td>Nama ke <?php echo $i ?></td>
			<td>Kelas <?php echo (11 - $i) ?></td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>