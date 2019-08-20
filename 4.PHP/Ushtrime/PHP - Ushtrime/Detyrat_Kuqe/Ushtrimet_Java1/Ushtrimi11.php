<?php 
// Ushtrimi 11: 
// Të shkruhet PHP skripta e cila e gjen karakterin e parë 
// dhe pozitën e tij që është ndryshe në mes të dy stringjeve me gjatësi të barabartë.
// strcasecmp — Vergleich von Zeichenketten 
// ohne Unterscheidung der Groß- und Kleinschreibung (Binary safe)

$text1 = "Ardiani";
$text2 = "arDiana";
$text1Arr = str_split($text1);
$text2Arr = str_split($text2);

foreach($text1Arr as $key => $value) {
	if (strcasecmp($text1Arr[$key], $text2Arr[$key])  != 0) {
		echo "Keto dy stringe dallojn ne karakterin e : " . ($key + 1) . "<br />";
		echo "Karakteri " . $key . " i stringut pare eshte : $text1Arr[$key]<br />";
		echo "Karakteri " . $key . " i stringut dyte eshte : $text2Arr[$key]<br />";
		break;
	}
}
?>