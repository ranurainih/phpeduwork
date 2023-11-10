<?php 

	$nama_petugas = $_POST['nama_petugas'];
	$id_pasien = $_POST['id_pasien'];
	$umur = $_POST['umur'];
	$sex = $_POST['sex'];
	$no_hp = $_POST['no_hp'];

	include "connection.php"; 

	mysqli_query($connection, "INSERT INTO `petugas` (`nama_petugas`, `id_pasien`, `umur`, `sex`, `no_hp`) VALUES ('$nama_petugas', '$id_pasien', '$umur', '$sex', '$no_hp'); ");

	header("Location:petugas.php");


 ?>