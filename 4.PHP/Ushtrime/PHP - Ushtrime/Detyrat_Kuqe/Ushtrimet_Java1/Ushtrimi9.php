<?php 
// Ushtrimi 9: 
// Të shkruhet funksioni në PHP i cili bën shkrimin e të gjitha shkronjave prej a deri ne zh.
// range kthen nje array prej first => end
// range(start, end)
$shkronjaShqip = array(
		'3' => 'Ç', 	
		'5' => 'Dh',
		'7' => 'Ë', 
		'10' => 'Gj', 
		'16' => 'Ll', 
		'19' => 'Nj', 
		'24' => 'Rr', 
		'26' => 'Sh', 
		'28' => 'Th', 
		'32' => 'Xh', 
		'35' => 'Zh'
);

$alfabetiAn = range('A', 'Z');
$j = 0;
for ($i = 0; $i < 36; $i++) {
	if (array_key_exists($i, $shkronjaShqip)) {
		$alfabetiSh[] = $shkronjaShqip[$i];
	} else {
		if($alfabetiAn[$j] != 'W') {
			$alfabetiSh[] = $alfabetiAn[$j];
		} else {
			$i--;
		}
		$j++;
	}
}
echo '<pre>';
var_export($alfabetiSh);
echo '</pre>';

// foreach (range('A', 'Z') as $char) {
//     echo $char . "\n";
// }
// echo '<br /><br />';
// foreach (range('a', 'z') as $char) {
// 	echo $char . "\n";
// }
//Shfaq nurat nga 0 - 50
// foreach (range('0', '50') as $char) {
// 	echo $char . "\n";
// }
?>