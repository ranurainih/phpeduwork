<?php 

	$nama = $_POST['nama'];
	$sex = $_POST['sex'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	include "connection.php"; 

	mysqli_query($connection, "INSERT INTO `pasien` (`nama`, `sex`, `umur`, `alamat`, `no_hp`) VALUES ('$nama', '$sex', '$umur', '$alamat', '$no_hp'); ");

	header("Location:index.php");


 ?>