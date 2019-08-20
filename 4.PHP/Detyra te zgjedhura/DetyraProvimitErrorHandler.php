<?php
function TrajtGab($errorNumber, $errorString) {
	switch ($errorNumber) {
		case E_USER_WARNING : echo "Ky gabim paraqet paralajmerim : " . $errorString;break;
		case E_USER_ERROR : echo "Ky gabim paraqet paralajmerim : " . $errorString;break;
		case E_USER_NOTICE : echo "Ky gabim paraqet paralajmerim : " . $errorString;break;
		default: echo "Ky gabim eshte i panjohur";break;
	}
	
	return true;
}

$setErrorHandler = set_error_handler('TrajtGab');

$x = 2;

if($x > 1) {
	trigger_error("x eshte me i madh se sa 1", E_USER_WARNING);
}

?>
