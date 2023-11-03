<?php

	//Nomor 1
	$angka = array("satu", "dua", "tiga", "empat", "lima");

	for ($i=4; $i >= 0 ; $i--) { 
		echo $angka[$i] . "<br>";
	}

	//Nomor 2
	echo "<br>";

	$buah = array("apel", "nanas", "mangga", "jeruk");

	$jumlah_data = count($buah);

	echo "Terdapat $jumlah_data buah <br>";

	//Nomor 3
	echo "<br>";

	$nomor = array(7, 3, 4, 9);

	$jumlah_nomor = $nomor[0] + $nomor[1] + $nomor[2] + $nomor[3];

	echo "Totalnya adalah $jumlah_nomor <br>";

	//Nomor 4

	echo "<br>";

	$x = 1;
	$r = 10;

	$i = 1;
	while ($i <= $r) {
	    echo "\t", $x, " x ", $i, " = ", $x * $i, "\n";
	    $i++;
	    echo "<br>";
	}


?>
