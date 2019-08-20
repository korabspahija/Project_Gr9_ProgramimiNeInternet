<?php
$a="ARTON";
$b="KrasNIQI";
$c="kosove";
echo $a."  ".$b."  ".$c."</br></br>";
alfa($a,$b,$c);
echo $a."  ".$b."  ".$c;
// referencat:$a=&$n1 d.m.th variabla $a vendoset ne vendin qe e ka 
// variabla $n1 qe kete e tregon simboli & dhe i merr vlerat qe i ka variabla $n1.
function alfa(&$n1,&$n2,&$n3){
  $n1=ucfirst(strtoupper($n1));
  $n2=ucfirst(strtolower($n2));
  $n3=ucfirst(strtolower($n3));
}

echo "</br>";
//Detyr provimi me referenca janar 2015.
$number=2;
function square1($number){
return $number * $number;
}
$val=square1($number);
echo $val;// rrezulltati 4

function square2(&$number){
  return $number * $number;  
}
square2($val);
echo $val;// rrezulltati 4 qe krejt detyra e ka rrezulltati 44

echo "</br>";

#qyky funksjon nuk ekzekutohet!!!
#function &square1($number)
#{
#return $number * $number;}
#$val=& square1(&10);
#echo $val;
 

?>
