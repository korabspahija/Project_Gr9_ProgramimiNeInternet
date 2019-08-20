<html>
<head></head>
<body>
<h1>Ushtrimi 9 - Puna me fajlla ne PHP</h1>
<?php
// Detyra 1
include ("menu.php");
echo "Ky eshte shembull i perfshirjes se fajllave!";
echo "<br><br>";
// Detyra 2 - Te ipet nje shembull i shoqerimit te permbajtjes se nje text fajlli dhe 
// pastaj te shfaqet permbajtja ne uebfaqe
$filename = "C://xamppe/htdocs/temp.txt";
$file = fopen("$filename", "r");
if ($file == false) 
{
	echo "Gabim ne hapjen e fajllit!";
	exit();
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);
echo "Madhesia e fajllit eshte $filesize byte.";
echo "<pre>$filetext</pre>";
echo "<br>";
// Detyra 3 - Shkruarja ne file
$filename2 = "C://xamppe/htdocs/temp2.txt";
$file2 = fopen("$filename2", "w");
if ($file2 == false) 
{
	echo "Gabim ne hapjen e fajllit!";
	exit();
}
fwrite($file2, "Graniti nuk eshte presnjak!");
fclose($file2);
$filesize2 = filesize($filename2);
echo "Fajlli u krijua me emrin $filename2 dhe me madhesi $filesize2 byte.";
echo "<br><br>";
// Detyra 4 - Error Handling
// Te perdoret nje funksion te krijuar ne menyre eksplicite nga ne i cili trajton
// Gabimet e mundshme qe ndodhin gjate ekzekutimit!

// Deklarimi i error handler funksionit tone

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
	if (!(error_reporting() && $errno)) 
	{
		// Ky error code nuk eshte i perfshire ne trajtimin e gabimeve!
		return;
	}
	switch ($errno) 
	{
		case E_USER_ERROR:
			echo "<b>Gabimi (ERRORI) IM</b> [$errno] $errstr <br>";
			echo "Gabim fatal ne rreshtin $errline ne file-n $errfile <br>";
			echo " . PHP . ".PHP_VERSION."(".PHP_OS. ")<br>";
			echo "Deshtim...";
		exit(1);
			break;
		case E_USER_WARNING:
			echo "<b>Paralajmrimi (WARNING) IM</b> [$errno] $errstr <br>";
			break;
		case E_USER_NOTICE:
			echo "<b>NJOFTIMI (NOTICE) IM</b> [$errno] $errstr <br>";
			break;
		default:
			break;
	}
	// Mos ekzekuto PHP internal error handler
}
// Funksioni per testimin e error handler
function scale_by_log($vect,$scale)
{
	if (!is_numeric($scale) || $scale<=0) 
	{
		trigger_error("log(x) per x<=0 eshte i padefinuar, ju keni perdorur nje shkalle"
		. " me vlere $scale", E_USER_ERROR);
	}
	if (!is_array($vect)) 
	{
		trigger_error("Vlere hyrese jo korrekte, pritet varg i vlerave", E_USER_WARNING);
	}
	$temp = array();
	foreach ($vect as $pos =>$value) 
	{
		if (!is_numeric($value)) 
		{
			trigger_error("Vlera ne poziten $pos nuk eshte numer.", E_USER_NOTICE);
		}
		$temp[$pos] = log ($scale) * value;
	}
	return $temp;
}
// vendost te perdoruesi per te definuar error handler
$old_error_handler = set_error_handler("myErrorHandler");
echo "<br>";
echo "<br>";

// Nxit (trigger) disa error-a, se pari defino nje mixed varg (array) me disa prej anetareve vlera jo numerike
echo "vector a\n";
echo "<br>";
echo "<br>";
$a = array(2, 3, "foo", 5.5, 43.3, 21.11);
print_r($a);
echo "<br>";
echo "<br>";

// tani gjenero vargun e dyte
echo "----\nvector b - a notice (b = log(PI) * a)\n";
echo "<br>";
echo "<br>";
/* Vlera ne poziten $pos nuk eshte numer, duke perdorur 0 (zero)*/
$b = scale_by_log($a, M_PI);
print_r($b);
echo "<br>";
echo "<br>";


// kjo tani eshte problem, ne i kaluam nje string ne vend te vargut
echo "----\nvector c - a warning\n";
echo "<br>";
echo "<br>";
/* Vlere hyrese jokorrekte, pritet varg i vlerave */
$c = scale_by_log("not array", 2.3);
var_dump($c); // NULL
echo "<br>";
echo "<br>";

// Ky eshte critical error, log i zero-s per nr. negativ eshte i padefinuar
echo "----\nvector d - fatal error\n";
echo "<br>";
echo "<br>";
/* log(x) per x <= 0 eshte i padefinuar, ju keni perdorur: scale = $scale*/
$d = scale_by_log($a, -2.5);
var_dump($d); // Nuk arrihet asnjehere
echo "<br>";
echo "<br>";
?>

<form action="email_script.php" method="Post">
<p>From: <input type="text" name="from" size="30"></p>
<p>From: <input type="text" name="from" size="30"></p>
<p>From: <input type="text" name="from" size="30"></p>
<p>Message: </p>
<p><textarea rows="10" cols="20" name="message"></textarea></p>
<input type="submit" name="submit" value="Submit">

</body>
</html>