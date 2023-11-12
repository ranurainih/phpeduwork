<?php

	include "connection.php";

	$id_petugas = $_GET['id_petugas'];

	mysqli_query($connection, "DELETE FROM petugas WHERE id_petugas = '$id_petugas' ");

	header("Location:petugas.php")

?>