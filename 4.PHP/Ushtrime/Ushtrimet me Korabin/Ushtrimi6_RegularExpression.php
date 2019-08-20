<html>
<head></head>
<body>
<h1>Ushtrimi 6 - REGEX</h1>
<?php
//Detyra 1
/*
for ($i=1; $i <= 10 ; $i++) { 
	for ($j=1; $j <= $i ; $j++) { 
		if ($i<=5) {
		echo " * ";
		}
		else
		{
			echo str_repeat(" * ", 10-$i);
			break;
		}

	}
	echo "<br>";
}*/
//Detyra 2
/*
$vargu = array(1,2,3,4,5);
var_dump($vargu);
unset($vargu[2]);
echo "<br>";
var_dump($vargu);
*/
//Detyra 3
/*
$palindrome = array('K','I','M','I','K');
function kontrollo_palindrom($palindroma)
{
	$n = 0;
	$gjatesia = count($palindroma);
	for ($i=0; $i < $gjatesia; $i++) 
	{
		if ($i<$gjatesia) 
		{
		if ($palindroma[$i]==$palindroma[$gjatesia-$i]) 
		{
			$n++;
			if ($n==floor($gjatesia/2)) 
			{
				echo "Fjala eshte palindrom!";
			}
		}
		}
	}
	if ($n!=floor($gjatesia/2)) 
	{
		echo "Nuk eshte palindrom!";
	}
}
*/
//Detyra 4
/*$vargu = array(0,1,2,'tre',4,5,'gjashte',7,8,'nente',10);
$x = preg_grep("/4|5|6/", $vargu);
$y = preg_grep("/[0-9]/", $vargu, PREG_GREP_INVERT);
var_dump($x);
echo "<br>";
var_dump($y);*/
//Detyra 5
$string = "Fjhth1h837FasdXXX";
if (preg_match("//", $string)) 
{

}
else
{

}
?>
</body>
</html>