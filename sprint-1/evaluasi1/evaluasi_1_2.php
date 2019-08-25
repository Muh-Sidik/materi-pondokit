<?php 
	for ($j=1; $j < 10 ; $j++) { 
		for ($i=1; $i < 10 ; $i++) { 
			if ($i % 2 == 0 && $j % 2 == 1 || $i % 2 == 1 && $j % 2 == 0) {
				echo "  ";
			} else {
				echo "+ ";
			}
		}
		echo "\n";
	}
 ?>