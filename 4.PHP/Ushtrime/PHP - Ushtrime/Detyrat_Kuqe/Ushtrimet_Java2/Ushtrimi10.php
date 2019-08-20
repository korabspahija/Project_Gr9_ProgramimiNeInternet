<?php 
// Ushtrimi 10: 
// Te shkruhet nje PHP skripte e cila përmes preg_grep kërkon per nje fjale te caktuar, 
// dhe pastaj kthen si rezultat ate qe eshte bazuar filtrimi. Te perdoret PREG_GREP_INVERT.
// Ky eshte vargu i dhene: array(0, 1, 2, 'tre', 4, 5, 'gjashte', 7, 8, 'nente', 10); 
// Ne dalje pritet:
// a) Array ( [4] => 4 [5] => 5 ) 
// b) Array ( [3] => tre [6] => gjashte [9] => nente ).
$x = array(0, 1, 2, 'tre', 4, 5, 'gjashte', 7, 8, 'nente', 10);

// a)
echo "<pre>";
var_export(preg_grep('/[45]/', $x));
echo "</pre>";
// b)
echo "<pre>";
var_export(preg_grep('/[a-zA-Z]/', $x));
echo "</pre>";
?>