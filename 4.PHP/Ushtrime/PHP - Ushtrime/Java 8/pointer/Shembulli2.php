<?php
	function foo(&$var){
	$var++;
	}
	function bar() 	// Vereni mungesen e &
	{
	$a = 5;
	return $a;
	}
	foo(bar()); 	// Paraqet fatal error qysh prejPHP 5.0.5
	foo($a = 5); 	// Shprehje, jo variable
	foo(5); 		// Paraqet fatal error
?>
