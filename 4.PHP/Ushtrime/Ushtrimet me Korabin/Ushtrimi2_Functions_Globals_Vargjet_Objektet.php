<?php

$x =6;
$y = 8;

function Test2(){
			global $y;
			global $x;
			$y = $x + $y;
}

Test2();

echo "$y";
echo "<br>";

$x = 2589;
var_dump($x);
echo "<br>";
$x=-457;
var_dump($x);
echo "<br>";
$x= 10.25;
var_dump($x);
echo "<br>";

$x = 0x7C;
var_dump($x);
echo "<br>";

$x = 8E-5;
var_dump($x);
echo "<br>";

$veturat = array("BMW","Lamborghini","Ferrari");
print '<pre>';
var_dump($veturat);
echo "<br>";

class Vetura
{
	var $ngjyra;

	function Vetura($ngjyraEVetures = "e gjelbert")
	{
		$this->ngjyra = $ngjyraEVetures;
	}

	function Cfare_Ngjyre()
	{
		return $this->ngjyra;
	}
}

function printo_var($obj)
{
	foreach (get_object_vars($obj) as $key => $value) {
		echo "$key = $value\n";
	}
}

echo "<br>";
$minivetura = new Vetura("e bardhe");
echo "<br>";
printo_var($minivetura);

//perdorimi i funk per manipulime me stringje
echo "<br>";
echo strlen("Pershendetje, jemi ne Programimi ne Internet!");

echo "<br>";
echo strpos("Pershendetje, jemi ne Programimi ne Internet!", "ne");

echo "<br>";
$var = "Miresevini ne faqen personale!";
echo $var."<br>";

echo addcslashes($var, "A....Z")."<br>";
echo addcslashes($var, "a....z")."<br>";
echo addcslashes($var, "a....i")."<br>";
echo "<br>";

$test = "1,2,3,4,5,6";
$array = explode(",", $test,0);

foreach ($array as $key) {
	echo "$key";
}

//definimi i konstanteve ne PHP

echo "<br>";

define("Pi", 3.14,true);
define("Rrenja e 3", 1.76);
define("Rrenja e 2", 1.4);	
echo "<br>";
echo "PI = ".pi."<br>";