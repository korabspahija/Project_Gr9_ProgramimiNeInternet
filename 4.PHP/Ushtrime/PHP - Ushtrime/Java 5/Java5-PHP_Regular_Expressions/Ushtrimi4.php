<?php

$var = "213-25-5674";

if (preg_match('/^([0-9]{3}\-[0-9]{2}\-[0-9]{4})$|(^[0-9]{9}$)/',$var))
{
print "SSN '$var' është valid.";
}
else
{
print "SSN '$var' nuk është valid.";
}
?>
