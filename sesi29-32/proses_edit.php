<?php 

	$id_petugas = $_GET['id_petugas'];
	$nama_petugas = $_POST['nama_petugas'];
	$umur = $_POST['umur'];
	$sex = $_POST['sex'];
	$no_hp = $_POST['no_hp'];

	include "connection.php";

	mysqli_query($connection, "UPDATE petugas SET nama_petugas = '$nama_petugas', umur = '$umur', sex = '$sex', no_hp = '$no_hp' WHERE id_petugas = '$id_petugas' ");

	header("Location:petugas.php")


 ?>