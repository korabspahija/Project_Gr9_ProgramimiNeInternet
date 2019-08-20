<?php 
$t = date("h i s");
echo $t;die();
if($t < "16 30 00") {
	echo 'Koha per pune';
} else {
	echo 'Koha per gjume';
}
?>