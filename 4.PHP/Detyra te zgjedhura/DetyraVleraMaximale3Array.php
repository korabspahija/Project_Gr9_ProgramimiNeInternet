<?php 
$x = array(360,310,310,330,313,375,456,111,256);
$y = array(350,340,356,330,321);
$z = array(630,340,570,635,434,255,298);

$maxX = $x[3];
foreach ($x as $value) {
	if($value > $maxX) {
		$maxX = $value;
	}
}

$maxY = $y[3];
foreach ($y as $value) {
	if($value > $maxY) {
		$maxY = $value;
	}
}

$maxZ = $z[1];
foreach ($z as $value) {
	if($value > $maxZ) {
		$maxZ = $value;
	}
}
$arryMAX = array();

$arryMAX[] = $maxX;
$arryMAX[] = $maxY;
$arryMAX[] = $maxZ;

$MAX = $arryMAX[0];
foreach ($arryMAX as $value) {
	if($value > $MAX) {
		$MAX = $value;
	}
}

echo 'Vlera Maksimale e te 3 vektoreve eshte : '.$MAX;

?>