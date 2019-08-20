<?php
$var = "1-608-234-1234";

if( !preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $var) ) { 
    echo 'Ju lutem shkruani numrin e telefonit ne forme valide.';
}
else
{ echo 'Numri '. $var .' eshte shkruar ne forme valide!';}
?>
