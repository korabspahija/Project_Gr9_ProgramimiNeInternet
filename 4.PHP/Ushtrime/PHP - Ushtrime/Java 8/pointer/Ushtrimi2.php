<?php
	$a = 1;
	$b = array(2, 3);
	//lidhja e anetareve te vektorit me reference
	$arr = array(&$a, &$b[0], &$b[1]);
	$arr[0]++; 
	$arr[1]++; 
	$arr[2]++;
	/* $a == 2, $b == array(3, 4); */
	echo "Vlera e variables a:".$a."<br>";
	echo "Vlera e aneterit te pare te vaktorit b:".$b[0] ."<br>";
	echo "Vlera e aneterit te dyte te vaktorit b:".$b[1] ."<br>";
?>

