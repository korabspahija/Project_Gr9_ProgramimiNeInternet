<?php
$vektori = array("Kosova"=>"Prishtina",
                 "Suedia"=>"Stokholmi",
                 "Anglia"=>"Londra",
                 "Cekia"=>"Praga",
                 "Estonia"=>"Talini",
                 "Holanda"=>"Amsterdami");

                 #Kryeqyteti i X eshte Y
			   
        
  asort($vektori);
  foreach ($vektori as $vektori1=>$vektori2) {
    echo "Kryeqyteti i $vektori1 eshte $vektori2</br>";
  }
		   
  echo "</br></br>";  

  #renditja ne baz te shteteve
  ksort($vektori);
  foreach ($vektori as $vektori1=>$vektori2) {
    echo "$vektori2 eshte kryeqytet i: $vektori1"."</br> ";
  }

  echo "</br></br>";  
	  
  #verzioni me shteti me indeks perkates
  $vekt1 = array("Prishtina","Stokholmi","Londra","Praga","Talini","Amsterdami");
  $x = count($vekt1);
  for($i=0;$i<$x;$i++){
    echo "$i:eshte shtet i: $vekt1[$i]"."</br> "; 
  }
		 
	
         
?>

