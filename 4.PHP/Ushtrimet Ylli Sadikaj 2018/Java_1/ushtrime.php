<?php 

echo '<h1 style="color: brown;">Pershendetje Eric</h1><br />'; 
print "Pershendetje Eric 2!";

// njesoj si me apostrof si me thonjeza

// case in-sensitive
ECHO "<br />Pershendetje Eric 3";

// print "Pershendetje Eric 2!" + "Si jeni?"; 
// nuk mund te perdoren, operatoret vlejne vetem per numra. Mundemi me ane te presjes
// ose pikes

// print "Pershendetje Eric 2!","Si jeni?"; NUK FUNKSIONON
echo '<br />Pershendetje Filan!','Si jeni?<br/>';

$EmriVar = 2;
$varNr = 3.3;
$pi = 3.14;
$Emri = 'Eric';
$Mbiemri = 'Schmidt';
$varboolean = true;
$arrayNr = array(1,9,'true');
$nr = 20.5;
var_dump($nr); // tregon tipin e te dhenave dhe vleren
echo "<br/>";
$nrCast = (int)20.42;
var_dump($nrCast);
$varr = 'Filani';
var_dump($varr);
echo "<br/>";
var_dump($arrayNr);
echo "<br/>";
var_dump($varboolean);
echo "<br/>";
echo $varNr;
echo "<br/>";
echo $varboolean;
# komenti arrihet edhe me ane te #

echo "<br/>";
echo $arrayNr[2];
echo "<br/>";
echo $Emri.' '.$Mbiemri;  // variablat jane case sensitive
echo "<br/>";
echo $varNr + $pi;
echo "<br/>";
echo $varNr * $pi;
echo "<br/>";
$emri = 'David';
echo $Emri.' '.$emri;
define("Lenda","Programimi ne Internet");  // definimi i konstantes
echo "<br/>";
echo "Emri i lendes eshte ".Lenda; // siq shihet nuk ka nevoje per shenjen e dollarit
echo "<br/>";
echo "Emri i perdoruesit eshte $Emri";  // metode tjeter
$Salla = 621;
$salla = 625;
$SALLA = 616;
echo "<br />";
ECHO $salla,'-',$SALLA,'-',$Salla;
$x = 9;
$y = 10;
echo "<br />";
$shuma = $x + $y;
echo "Shuma eshte $shuma";
echo "<br />";
$diferenca = $x - $y;
echo "Diferenca eshte $diferenca";

$fuqia = pow($x,2);
echo "<br />";
echo "x ne katror eshte $fuqia";
echo "<br />";
$prodhimi = $x * $y;
echo "Prodhimi eshte $prodhimi";
$heresi = $x / $y;
echo "<br />";
echo "Heresi eshte $heresi";
echo "<br />";
$rrenja = sqrt($x);
echo "Rrenja e x eshte $rrenja";
echo "<br />";


?>