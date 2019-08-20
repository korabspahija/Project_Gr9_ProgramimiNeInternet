<?php
	function foo(&$var){
		$var++;
		echo "Vlera e variables var:".$var;
	}
	function &bar(){
		$a = 5;
		return $a;
	}
	foo(bar());
?>
