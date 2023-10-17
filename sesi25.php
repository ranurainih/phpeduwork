<?php
	// Nomor 1
	$bilangan = 20;

	if ($bilangan % 2 == 0) {
		echo "Bilangan Genap <br>";
	}
	else {
		echo "Bilangan Ganjil <br>";
	}
	// Nomor 2
	$tahun = 2023;

	if ($tahun % 4 == 0) {
		echo "Tahun Kabisat <br>";
	}
	else {
		echo "Bukan Tahun Kabisat <br>";
	}
	// Nomor 3
	$nilai = 84;

	if ($nilai >= 90 && $nilai <= 100) {
		echo "Grade A <br>";
	}
	elseif ($nilai >= 80 && $nilai <= 89) {
		echo "Grade B <br>";
	}
	elseif ($nilai >= 70 && $nilai <= 79) {
		echo "Grade C <br>";
	}
	elseif ($nilai >= 60 && $nilai <= 69) {
		echo "Grade D <br>";
	}
	elseif ($nilai < 60) {
		echo "Grade E <br>";
	}

?>