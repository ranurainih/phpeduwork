<?php
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
	elseif ($nilai < 70) {
		echo "Grade D <br>";
	}
?>