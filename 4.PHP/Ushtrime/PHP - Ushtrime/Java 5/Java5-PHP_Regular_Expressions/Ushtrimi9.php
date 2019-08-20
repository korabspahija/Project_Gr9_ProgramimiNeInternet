<?php
$string = 'XYZ';
if (eregi('z', $string)) 
{
    echo "Stringu '$string' permban ndonje 'z' or 'Z'!";
}
else
{
    echo "Stringu '$string' nuk permban ndonje 'z' or 'Z'!";
}
?>
