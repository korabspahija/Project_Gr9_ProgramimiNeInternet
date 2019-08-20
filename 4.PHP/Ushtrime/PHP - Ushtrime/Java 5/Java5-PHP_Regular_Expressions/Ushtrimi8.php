<?php
$var = "-15.405";
if (preg_match("/^[+-]?[0-9]*\.?[0-9]+$/",$var))
{ 
  print "Numri i dhënë '$var' është valid.";
}
else
{
  print "Numri i dhënë '$var' nuk është valid.";
}
?>
