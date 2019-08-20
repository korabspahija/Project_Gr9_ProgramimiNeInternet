<?php
	$ref = 0;
	$row =&$ref;
	echo "Vlerat e anetareve te vektorit<br>";
	//Vlerat e anetareve te vargut
	foreach (array(1, 2, 3) as $row) {
		echo $row."<br>";
	}
	echo "---------------------<br>";
	echo "Vlera e variables ref:".$ref; // elementi I fundit nga iterimi i vargut
?>
