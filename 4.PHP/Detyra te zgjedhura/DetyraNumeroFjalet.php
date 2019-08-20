<?php 
/* 
4.Shkruani nje funksion numeroFjalet() i cili merr cfardo stringu te karaktereve dhe gjeni numrin 
se sa here eshte paraqitur nje fjale.Injoroni dallimin ne mes shkronjave te vogla dhe te medha, 
dhe mos u merrni me karaktere qe nuk jan shkronja.
a)Zgjidhja e detyres(per numerimi te fjaleve) te behet permes nje vargu asociativ(associative array), 
si dhe gjithashtu duhet te perdoret nje PHP funskion qe ndan fjalit ne fjale.
b)Ne te njejtin fajll,shkruani nje form qe permban vetem nje fush text dhe nje buton submit.
Atributi "action" ne form duhet te jete ne te njejten faqe qe eshte edhe forma.
Kur te beni formen "submit" ju duhet te ridrejtoheni ne te njejten faqe,por URL-i duhet te 
permbaj stringun nga fusha e text sikur qe sillet zakonisht nje GET kerkes(request).
c)Kontrolloni per egzistimin e kerkeses GET.Nese ekziston kerkesa GET me emrin e fushes hyrese(input) 
qe eshte definuar ne pjesen nen b),ekzekutoni permbajtjen e kerkeses permes funksionit numerofjalet().
Renditja te behet ne baze te numrit me te vogel te ndodhive(decreasing). 

*/
function numeroFjalet($Fjalia) {
	$fjalt = explode(" ", $Fjalia);
	foreach ($fjalt as $key => $value) {
		if(ctype_alpha($value)) {
			$fjaltVetemShkronja[] = strtolower($value);
		}
	}
	
	for($i = 0; $i < count($fjaltVetemShkronja) - 1; $i++) {
		$a = 0;
		for($j = 0; $j < count($fjaltVetemShkronja); $j++) {
			if($fjaltVetemShkronja[$i] == $fjaltVetemShkronja[$j]) {
				$a ++;
			}
		}
		$perseritjaEFjaleve[$fjaltVetemShkronja[$i]] = $a;
	}
	asort($perseritjaEFjaleve);
	return $perseritjaEFjaleve;
}
if(isset($_GET['click'])) {
	$Fjalia = $_GET['txt'];
	echo '<pre>';
	var_export(numeroFjalet($Fjalia));
}
?>

<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
			<input type="text" name="txt"/>
			<input type="submit" name="click" value="submit"/>
		</form>
	</body>
</html>