<?php 

	$nama_obat = $_POST['nama_obat'];
	$expired_obat = $_POST['expired_obat'];
	$jenis_obat = $_POST['jenis_obat'];
	$dosis_obat = $_POST['dosis_obat'];

	include "connection.php"; 

	mysqli_query($connection, "INSERT INTO `obat` (`nama_obat`, `expired_obat`, `jenis_obat`, `dosis_obat`) VALUES ('$nama_obat', '$expired_obat', '$jenis_obat', '$dosis_obat'); ");

	header("Location:obat.php");


 ?>