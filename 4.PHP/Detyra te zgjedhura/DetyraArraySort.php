<?php 

$array = array(1, 5, 'z', 'a',15,'h', 9);
echo"<pre>";
var_export(preg_grep("/[2-35a-z]/",$array,PREG_GREP_INVERT));
echo"</pre>";

echo"<pre>";
var_export(preg_grep("/[0-14]/",$array,PREG_GREP_INVERT));
echo"</pre>";

/*
$numrat = array();
$shkronjat = array();
foreach ($array as $key => $value) {
	if(is_numeric($value)) {
		$numrat[] = $value;
	} else {
		$shkronjat[] = $value;
	}
}

sort($numrat);
sort($shkronjat);

echo '<pre>';
var_export($numrat);
echo '</pre>';

echo '<br /><br />';

echo '<pre>';
var_export($shkronjat);
echo '</pre>';
*/
?>