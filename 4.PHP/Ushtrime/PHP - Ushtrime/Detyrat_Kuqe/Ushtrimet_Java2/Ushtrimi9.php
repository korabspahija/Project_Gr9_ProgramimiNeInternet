<?php 
// Ushtrimi 9: 
// Te shkruhet nje PHP funksion, i cili kontrollon nëse nje fajle e dhene eshte POLINDROM.
$text = 'PHP';
if (strcasecmp(strrev($text),$text) == 0) {
	echo "Fjala $text eshte POLINDROM";
} else {
	echo "Fjala $text nuk eshte POLINDROM";
}
?>