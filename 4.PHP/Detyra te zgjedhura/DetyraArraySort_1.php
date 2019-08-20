<?php
//echo nuk e shtyop arrayn por vetem me var_dump ose var_ecport
$x = array('10', '9', 'z', '8', 'h');
echo '<pre>';
var_dump($x);
echo '<pre>';

foreach ($x as $key => $value) {
	 if(is_numeric($value)) {
	 	$numrat [] = $value;
	 } else {
	 	$shkronjat [] = $value;
	 }
}
sort($numrat);
sort($shkronjat);

echo '<pre>';
var_dump($numrat);
echo '<pre>';

echo '<br />';
echo '<br />';

echo '<pre>';
var_dump($shkronjat);
echo '<pre>';
?>