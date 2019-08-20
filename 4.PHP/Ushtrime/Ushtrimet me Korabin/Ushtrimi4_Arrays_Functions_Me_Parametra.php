<?php

function myfunc($param = NULL)
{
	print $param;
}

myfunc();

$numrat = array(1,2,3,4,5);

//menyra e pare
foreach ($numrat as $key) {
	echo "Vlera eshte $key ";
	echo "<br>";
}

//menyra e dite

echo "<br>";

$numrat[0]="nje";
$numrat[1]="dy";
$numrat[2]="tre";
$numrat[3]="kater";
$numrat[4]="pese";

foreach ($numrat as $key) {
	echo "Vlera eshte $key ";
	echo "<br>";
}

	echo "<br>";

//menyra e trete: associative array

$paga = array("Janar" => 1200,"Shkurt" => 1300,"Mars" => 1100);

echo "Paga per muajin Janar eshte: ".$paga['Janar']."<br>";
echo "Paga per muajin Shkurt eshte: ".$paga['Shkurt']."<br>";
echo "Paga per muajin Mars eshte: ".$paga['Mars']."<br>";


	echo "<br>";

$notat = array(
	array("Janar","Kimi" => 3,"Fizike" => 4,"Matematike" => 5),
	array("Shkurt","Kimi" => 5,"Fizike" => 4,"Matematike" => 3),
	array("Mars","Kimi" => 5,"Fizike" => 5,"Matematike" => 5));

echo "Genti ne muajin Janar ne kimi ka noten: ".$notat[0]["Kimi"]."<br>";
echo "Genti ne muajin Shkurt ne Fizike ka noten: ".$notat[1]["Fizike"]."<br>";
echo "Genti ne muajin Mars ne Matematike ka noten: ".$notat[2]["Matematike"]."<br>";

	echo "<br>";

$numrat = array(3,4,2,1,5);

echo "Vlera ne array: {";
foreach ($numrat as $key) {
	echo " $key ,";
}
echo " }"."<br>";

sort($numrat);

echo "Vlera ne array: {";
foreach ($numrat as $key) {
	echo " $key ,";
}
echo " }"."<br>";

	echo "<br>";

/*$gjatesia = count($numrat);
for ($i=0; $i < $gjatesia; $i++) { 
	echo "Vlera e numrat eshte: ".numrat[$i];
	echo "<br>";
}*/

$mosha = array("Petriti"=>25,"Kaltrina"=>35,"Arta"=>45);
asort($mosha);//rendit ne baze te value, nuk merr parasysh keys
ksort($mosha);//rendit ne baze te celesit, nuk merr parasysh vleren
arsort($mosha);//reversed ne baze te value
krsort($mosha);//reversed ne baze te celesit

foreach ($mosha as $key => $value) {
	echo "Celesi eshte $key, ndersa vlera eshte $value";
	echo "<br>";
}

	echo "<br>";
