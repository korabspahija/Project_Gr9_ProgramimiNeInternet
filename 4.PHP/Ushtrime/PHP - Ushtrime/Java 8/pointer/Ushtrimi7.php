<?php
	$a = 1;
	$b =& $a;
	unset($a); 	//kjo komande nuk do te beje unset b vetem a
	echo $b;
	echo $a;		//do të ktheje error, pasi emri i variables a nuk ekziston më
?>
