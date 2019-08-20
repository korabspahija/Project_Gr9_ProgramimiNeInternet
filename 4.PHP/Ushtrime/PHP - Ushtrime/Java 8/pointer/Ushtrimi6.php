<?php
	$var = 1;
	$num = NULL;

	function &blah(){
		$var =$GLOBALS["var"]; # i qasemi variables globale $var;
		$var++;
		return $var;
	}

	$num = &blah();
	echo "vlera e variables globale var".$var."<br>"; # 2
	echo "vlera e variables globale num".$num."<br>"; # 2

	blah();
	echo "vlera e variables globale var".$var."<br>"; # 2
	echo "vlera e variables globale num".$num."<br>"; # 2

?>
