<?php
	$a = 1; 		/* Shoqerim me vlere */
	$b =&$a; 		/* Shoqerim me reference */
	$c = $b; 		/* Shoqerim me vlere – me kete rast do i percillet 
					vetem vlera ne te cilen tregon b, jo edhe referenca */
	$c = 7; 		/*Pasi $c nuk eshte reference; ku shoqerim nuk do te kete 
					efekt ne $a apo $b*/
	echo "Vlera e variables b=".$b."<br>";
	echo "Vlera e variables c=".$c."<br>";
	
	/* Shoqerimi i array variablave */
	$arr = array(1);
	$a =&$arr[0]; 	/* $a dhe $arr[0] ndajne te njejten reference */ 
	$arr2 = $arr; 	/* shoqerim me vlere */
	$arr2[0]++;		/* $a == 2, $arr == array(2) */
	/* Edhe pse $arr nuk eshte reference, ne rastin e vargjeve permbajtja ndryshon! */
	echo "Vlera e anetarit te pare te vektorit arr[0]=".$arr[0]."<br>";
	echo "Vlera e anetarit te pare te vektorit arr2[0]=".$arr2[0]."<br>";
?>
