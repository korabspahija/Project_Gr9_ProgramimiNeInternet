<?php
// Ushtrimi 8: 
// Të ipen dy data të caktuara dhe pastaj të gjindet diferenca në mes të atyre datave në vite,
// muaj dhe dite, duke shfrytëzuar funksione dhe parametra të PHP-së.

$date1 = new DateTime('1912-11-28 12:30:30');
$date2 = new DateTime('2015-11-28 12:30:30');
$difference = $date1->diff($date2);
// echo '<pre>';
// var_export($difference);
// echo '</pre>';
// die();
echo $difference->format('%y Vjet, %m muaj, %d dite, %h ore, %i minuta , %s sekonda.');
?>