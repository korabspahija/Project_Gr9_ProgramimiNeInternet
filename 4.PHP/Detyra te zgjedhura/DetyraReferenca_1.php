<?php
$number = 50;

function tenTimes( &$n ) {
	$n = $n * 10;
}

tenTimes( $number );
echo $number;

//Rrezultati= 500

?>