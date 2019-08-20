<?php
//detyra 1
$dt1 =date_create("1996-06-02");
$dt2 =date_create();

$diff=date_diff($dt1,$dt2);
$ditet = $diff->format("%R%a days");
$vitet = floor($ditet / 365);
$ditet = $ditet % 365;
$muajt = floor($ditet / 30);
$ditet = $ditet % 30;

echo "$vitet Vite, $muajt Muaj, $ditet Dite"."<br>";

//detyra2

for ($i=65; $i < 91; $i++) { 
	echo chr($i)." ";
}

//detyra3

$var = strspn("428 is the answer to the 128th question.", "1234567");

echo "<br>"."$var";

/*detyra4

$str1 = "Ne kete fjali do te gjenden ndryshimi i kerkuar.";
$str2 = "Ne kete fjali do te gjenden ndryshiMi i kerkUar.";
echo "String1-".$str1."<br>String2-".str2."<br>";
$spos = strspn($str1 ^ str2, "\1");
printf("Dallimi i pare eshte ne pozicionin %d: %s vs %s ",$spos,$str1[$spos],$str2[$spos]);

*/
/*
echo "<br><br><br>";
$koha = date('H');
if ($koha<12) {
	echo "Mirmengjesi";
}
elseif ($koha>20) {
	echo "Miredita";
}
echo "Mirmbrema";
*/

//detyra5
/*
$i = 0
$num = 50;

while ($i < 10) {
	$num--;
	$i++;
}
*/

/*echo "<br>"."<br>";
$array = array(1,2,3,4,5);

foreach ($array as $key) {
	if ($key == 3) {
		continue;
	}
	echo "Vlera eshte $key"."<br>";
}

function shtoPese($num)
{
	$num += 5;
}

function shtoGjashte($num)
{
	$num += 6;
}

$nrorigjinal = 10;

shtoPese($nrorigjinal);
echo "Vlera e numrit origjinal eshte: $nrorigjinal";."<br>";
shtoGjashte($nrorigjinal);
echo "Vlera e numrit origjinal eshte: $nrorigjinal";."<br>";*/