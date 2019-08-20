<?php
$string = 'test';
if (eregi("[[:alpha:]]", $string)) 
{
    echo "Stringu '$string' permban ndonje shkronje!";
}
else
{
    echo "Stringu '$string' nuk permban ndonje shkronje!";
}
?>
