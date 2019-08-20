<?php
#Shkruani një skriptë e cila do të paraqesë tekstin në vijim:
#"Kujtimi nga ajo skenë për mua ishte sikur një pjesëz e filmit që mbetet në kujtim 
#zymtë. - R. Nixon)". Fjalët kuq, gjelbër dhe bardhë të merren nga një varg i 
#deklaruar paraprakisht. Vargu të përmbajë të paktën 5 ngjyra, duke përfshirë këto tri 
#ngjyra; pas shkrimit të fjalisë, ngjyrat që nuk përdoren të largohen nga vargu.

#zgjidhja:
	/*$vektori = array("KUQ","KALTER","GJELBER","ZEZE","BARDH");
	echo "Kujtimi nga ajo skene per mua ishte sikur nje pjesez e filmit qe mbetet ne kujtim 
		  pergjithmone: tapeti i $vektori[0], lendina e $vektori[2], shtepia e $vektori[4], qielli i 
		  zymte. - R. Nixon)";

	unset($vektori[1]);
	unset($vektori[3]);*/

	$vargu = array(1,2,3,7,6,5);

	$vlerafillestare = NULL;

	foreach ($vargu as $numri) {
		if (is_null($vlerafillestare)) {
			$numri=$vlerafillestare;
		}else if($numri > $vlerafillestare){
			echo "Numri me i madh i vargut eshte $numri";
		}
	}
?>