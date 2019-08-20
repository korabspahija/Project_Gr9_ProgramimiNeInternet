<?php
#a) Definoni një funksion që trajton gabimet (error handler funksioni) me emrin 
#TrajtGab( ), ku si parametra ka numrin e gabimit (error) dhe shpjegimin e tij. Ky 
#funksion duhet edhe të shtyp gabimin (errorin).
function TrajtGab($errori,$erroristring) {

	switch ($errori) {
		case E_USER_WARNING: echo"Paralajmrim</b>$erroristring<br>";break;
		default: echo"Gabim i Panjohur";break;
	}
  
  return true;
}

#b) Më pas edhe vendosni (set) funksionin që trajton gabimet (TrajtGab), i cili në rast se 
#paraqitet do të na gjenerojë një E_USER_WARNING.
set_error_handler("TrajtGab",E_USER_WARNING);

#c) Përfundimisht, shkrehni (trigger) një gabim, ku kontrolloni nëse variabla x është më
#e madhe se 1, ku në këtë rast të ndodh gabimi dhe të paraqite gabimi që ne e kemi definuar.
	$x=2;

	if($x > 1) {
		trigger_error(" Vlera eshte me e madhe se 1 ",E_USER_WARNING);
	}
?>