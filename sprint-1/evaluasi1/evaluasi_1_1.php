<?php 
	for ($i=1; $i <= 9 ; $i++) { 
		for ($j=1; $j <= 9 ; $j++) { 
			if ($j == 10-$i || $j == $i || $j == 5 || $i == 5 ) {
				echo "+ ";
			} else {
				echo "  ";
			}
		}
		echo "\n";
	}
 ?>