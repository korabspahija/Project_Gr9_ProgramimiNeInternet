<?php
// Ushtrimi 10:
// Të shkruhet funksioni në PHP i cili i largon të gjitha karakteret përveç: a-z A-Z 0-9 or " "
$text = "A mun^^dem me ba ket fun$@~!ksion ne PHP  a@#%bcdef";
$textArr = str_split($text);
$textOutput = "";
foreach ($textArr as $key => $value) {
	if(ctype_alnum($value) || $value == " ") {
		$textOutput .= $value; 
	}
}
echo "Text ne dalje eshte ne rregull : $textOutput";
?>


<?php
// $str = "A mun^^dem me ba ket fun$@~!ksion ne PHP  a@#%bcdef";
// echo $str . "<br />";
// echo preg_replace("/[^A-Za-z0-9 ]/", '', $str) . '<br />';
?>