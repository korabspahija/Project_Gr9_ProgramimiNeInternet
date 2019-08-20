<html>
<head></head>
<body>
<h1>Ushtrimi 7 - REGEX 2</h1>
<?php
//Detyra 1
$string = "192.168.0.1.4.5.6";
$true = 0;
if (preg_match("/^([0-9]{1,3}\.){3,500}[0-9]{1,3}$/", $string)) 
{
	$true = 1;
}
var_dump($true);
//Detyra 2
echo "<br>";
$string2 = "398-123-321";
$true = 0;
if (preg_match("/^[0-9]{3}[-]?[0-9]{2}[-]?[0-9]{4}$/", $string2)) 
{
	$true = 1;
}
var_dump($true);
//Detyra 3
echo "<br>";
$string3 = "-16.732";
$true = 0;
if (preg_match("/^[-+]?[0-9]*\.?[0-9]+$/", $string3)) 
{
	$true = 1;
}
var_dump($true);
//Detyra 4
echo "<br>";
$string4 = "http://www.php.net/index.html";
$true = 0;
if (preg_match("/^(http:\/\/)?[a-zA-Z0-9_\-]+\.[a-zA-Z0-9_\-]+\.[a-zA-Z0-9_\-]+\/[a-zA-Z0-9_\-]+\.[a-zA-Z]+$/", $string4, $matches)) 
{
	$true = 1;
}
echo "<br>";
var_dump($true);
//Detyra 5
echo "<br>";
$string5 = "Nje fjali e [thjeshte] per [t\'u] testuar.";
preg_match("#\[(.*)\]#", $string5, $match1);
print $match1[1];

echo "<br>";
$string6 = "Nje fjali e [thjeshte] per [t\'u] testuar.";
preg_match("#\[(.*?)\]#", $string6, $match2);
print $match2[1];
?>
</body>
</html>