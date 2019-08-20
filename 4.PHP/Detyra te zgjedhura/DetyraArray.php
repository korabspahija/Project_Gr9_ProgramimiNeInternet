<?php 
$x = array(36, 6, 5, 2,48);
$y = array(12, 35, 1, 18);
$z = array(21, 8, 4);

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