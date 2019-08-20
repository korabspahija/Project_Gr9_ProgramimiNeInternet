<?php 
// Ushtrimi 8: 
// Eshte dhene vargu ne vijim: $x = array(1, 2, 3, 4, 5); 
// Te largohet nje element (cilido) nga vargu i dhene. 
// Pasi te largohet elementi, vargu te paraqitet ne forme normale.
$x = array(1, 2, 3, 4, 5);
unset($x[3]);

echo '<pre>';
var_export($x);
echo '</pre>';
?>