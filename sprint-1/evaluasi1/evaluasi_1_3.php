<?php 
	for ($i=1; $i <= 9 ; $i++) { 
		for ($j=1; $j <= 9 ; $j++) { 
			if ($j >= 10-$i && $j >= $i || $j <= 10-$i && $j <= $i) {
				echo "+ ";
			} else {
				echo "  ";
			}
		}
		echo "\n";
	}
 ?>