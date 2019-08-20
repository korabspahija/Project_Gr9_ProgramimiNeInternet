<?php
$foo = 5;
$bar = &$foo;
for($i = 0; $i < 5; $i++) {
	echo"Vlera e foo: $foo"." Dhe vlera e bar: $bar <br>";
	$foo = $foo + $bar;

	//$foo++;
	//$bar--;
}

	echo "<br>";

	$b="Hello";
	$c="Hello";

function callByValue($a) {
	$a="Hi";
}

function callByReferenc(&$a) {
	$a = "Pershendetje ";
}

	echo"Para callByValue b eshte: ".$b."<br>";
	callByValue($b);
	echo"Pas callByValue b eshte: ".$b."<br>";

	echo"Para callByReferent c eshte: ".$c."<br>";
	callByReferenc($c);
	echo"Pas callByReferent c eshte: ".$c."<br>";
	
?>