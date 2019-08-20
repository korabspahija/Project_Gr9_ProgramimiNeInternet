<?php
$var = "filan123";

if (preg_match('/^[a-zA-Z0-9_]{3,16}$/',$var))
{ 
  print "User-i '$var' është valid.";
}
else
{
  print "User-i '$var' nuk është valid.";
}
?>
