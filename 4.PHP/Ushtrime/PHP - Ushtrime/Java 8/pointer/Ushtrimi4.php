<?php
	function foo(&$var){
		$var++;
	}
	$a=5;
	foo($a);
	echo "Vlera e variables a:".$a;
?>
