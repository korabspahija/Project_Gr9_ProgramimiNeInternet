<?php 
// Ushtrimi 7: 
// Te krijohet nje PHP skripte duke përdorur unazën FOR e cila ne dalje na paraqet pamjen ne vijim:
/*											*
											**
											***
											****
											*****
											*****
											****
											***
											**
											*
*/
$height = 18;
$width = 18;
for ($i = 0; $i < $height; $i++) {
echo '<br />'; 
	for ($j=0; $j < $width; $j++) { 
		if ($i <= $j && $i >= $width - $j - 1) {
			echo '*';
		} 
	}
}
?>