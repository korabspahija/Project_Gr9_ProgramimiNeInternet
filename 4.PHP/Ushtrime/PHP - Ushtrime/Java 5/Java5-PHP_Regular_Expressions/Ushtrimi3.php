<?php
$var = "127.0.0.1";
if (preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/',$var))
{
print "IP adresa '$var' është valide.";
}
else
{
print "IP adresa '$var' nuk është valide.";
}?>
