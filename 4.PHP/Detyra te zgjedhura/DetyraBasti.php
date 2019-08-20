<?php
/* Artani ka gjasa te fitoj nje bast saktesisht ne 50% te tentimeve.
a)Shkruani nje funksjon me emrin fitoj() i cili kthen SAKT me propabilitet 50% perndryshe kthe EPASAKT 
b) pasi te keni definuar funksjonin, shkruani kodin qe gjeneron web faqja "artani e fitoj bastin" 
ose "artani nuk e fitoj bastin" duke e perdoruf funksjonin e me par fitoj()
*/

function fitoj() {
	$basti = rand(0, 1);
	if($basti == 1) {
		return true;
	} else {
		return false;
	}
}

if (isset($_POST["test"])) {
	if(fitoj()) {
		echo 'Artani e Fitoj Bastin.<br />';
	} else {
		echo 'Artani Nuk e Fitoj Bastin.<br />';
	}
}
?>
<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type='text' name='test' id='test'/><br/>
			<input type="submit" name="test" value="Testo"/>
		</form>
	</body>
</html>