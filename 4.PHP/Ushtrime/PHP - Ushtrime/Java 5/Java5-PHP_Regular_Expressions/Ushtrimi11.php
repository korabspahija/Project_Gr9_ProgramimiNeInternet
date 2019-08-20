<?php
$string = '123';
if (eregi("[[:alnum:]]", $string)) 
{
    echo "Stringu '$string' permban ndonje numer ose shkronje!";
}
else
{
    echo "Stringu '$string' nuk permban ndonje numer ose shkronje!";
}
?>
