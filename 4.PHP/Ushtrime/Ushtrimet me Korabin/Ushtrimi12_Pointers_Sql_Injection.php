<html>
<head></head>
<body>
<h1>Ushtrimi 11 - Pointers and SQL Injection</h1>
<?php
// Detyra 1 - Shoqerimi permes references
$a = &$b;
$a=10;
echo "Vlera e variables b eshte: $b";
echo "<br><hr><br>";
// Detyra 2
$a = 1;
$b = &$a;
$c = $b;
$c = 7;
echo "Vlera e variables b eshte: $b";
echo "<br>";
echo "Vlera e variables c eshte: $c";
echo "<br><hr><br>";
// Detyra 3 - Shoqerimi i variableve ne vargje
$arr = array(1);
$a = &$arr[0];
$arr2 = $arr;
$arr2[0]++;
echo "Vlera e anetarit te pare ne vektorin arr eshte: $arr[0]";
echo "<br>";
echo "Vlera e anetarit te pare ne vektorin arr2 eshte: $arr2[0]";
echo "<br><hr><br>";
// Detyra 4 - Percjellja permes references (pass by reference)
// Percjellja permes references realizoeht duke ndikuar ne variable lokale mbrenda nje funksioni 
// ku kto variabla duhet te referencohen ne te njejten permbajtje me nje variabel jashte funksionit
function foo(&$var)
{
	$var++;
	echo "Vlera e variables var eshte: $var <br>";
}
$a=5;
foo($a);
echo "Vlera e variables a eshte: $a";
echo "<br><hr><br>";
// foo(4); Vetem variablat mund te percjellen permes references jo vlerat
// Detyra 5 - Kthimi permes references (Return by reference)
// Perdoret kur deshirojm te gjejme se te cila variablet duhet te lidhet nje reference
$var = 1;
$num = NULL;
function &blah()
{
	$var = &$GLOBALS["var"];
	$var++;
	return $var;
}
$num = &blah();
echo "Vlera e variables num eshte: $num";
echo "<br>";
blah();
echo "Vlera e variables num eshte: $num";
echo "<br><hr><br>";
?>
</body>
</html>