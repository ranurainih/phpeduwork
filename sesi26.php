<?php
	// Nomor 1
	for ($bilangan=1; $bilangan <= 10 ; $bilangan++) { 
		if ($bilangan % 2 == 0) {
			echo "Angka $bilangan adalah bilangan Genap <br>";
		}
		else {
			echo "Angka $bilangan adalah bilangan Ganjil <br>";
		}
	}
	// Nomor 2
	for ($tahun=2000; $tahun <= 2023 ; $tahun++) { 
		if ($tahun % 4 == 0) {
			echo "Tahun $tahun adalah Tahun Kabisat <br>";
		}
		else {
			echo "Tahun $tahun bukan Tahun Kabisat <br>";
		}	
	}
	// Nomor 3
	for ($i = 9; $i >= 1; $i--) {
 		for ($j = 1; $j <= $i; $j++) {
 			echo "$j";
 		}
 		echo "<br>";
	}
?>