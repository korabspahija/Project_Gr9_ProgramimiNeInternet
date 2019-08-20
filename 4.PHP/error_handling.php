<?php
// error handler funksioni
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        // Ky error code nuk eshte i perfshire ne error_reporting
        return;
    }

    switch ($errno) {
    case E_USER_ERROR:
        echo "<b>GABIMI (ERROR) IM</b> [$errno] $errstr<br />\n";
        echo "  Gabim fatal ne rreshtin $errline ne file-n $errfile";
        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
        echo "Deshtim...<br />\n";
        exit(1);
        break;

    case E_USER_WARNING:
        echo "<b>PARALAJMERIMI (WARNING) IM</b> [$errno] $errstr<br />\n";
        break;

    case E_USER_NOTICE:
        echo "<b>NJOFTIMI (NOTICE) IM</b> [$errno] $errstr<br />\n";
        break;

    default:
        echo "Tip i gabimit i panjoftur: [$errno] $errstr<br />\n";
        break;
    }

    /* Mos ekzekuto PHP internal error handler */
    return true;
}

// funksioni per testimin e error handling
function scale_by_log($vect, $scale)
{
    if (!is_numeric($scale) || $scale <= 0) {
        trigger_error("log(x) per x <= 0 eshte i padefinuar, ju keni perdorur: scale = $scale", E_USER_ERROR);
    }

    if (!is_array($vect)) {
        trigger_error("Vlere hyrese jokorrekte, pritet varg i vlerave", E_USER_WARNING);
        return null;
    }

    $temp = array();
    foreach($vect as $pos => $value) {
        if (!is_numeric($value)) {
            trigger_error("Vlera ne poziten $pos nuk eshte numer, duke perdorur 0 (zero)", E_USER_NOTICE);
            $value = 0;
        }
        $temp[$pos] = log($scale) * $value;
    }

    return $temp;
}

// vendost te perdoruesi per te definuar error handler
$old_error_handler = set_error_handler("myErrorHandler");
echo "<br>";
echo "<br>";

// Nxit (trigger) disa error-a, se pari defino nje mixed varg (array) me disa prej anetareve vlera jo numerike
echo "vector a\n";
echo "<br>";
echo "<br>";
$a = array(2, 3, "foo", 5.5, 43.3, 21.11);
print_r($a);
echo "<br>";
echo "<br>";

// tani gjenero vargun e dyte
echo "----\nvector b - a notice (b = log(PI) * a)\n";
echo "<br>";
echo "<br>";
/* Vlera ne poziten $pos nuk eshte numer, duke perdorur 0 (zero)*/
$b = scale_by_log($a, M_PI);
print_r($b);
echo "<br>";
echo "<br>";


// kjo tani eshte problem, ne i kaluam nje string ne vend te vargut
echo "----\nvector c - a warning\n";
echo "<br>";
echo "<br>";
/* Vlere hyrese jokorrekte, pritet varg i vlerave */
$c = scale_by_log("not array", 2.3);
var_dump($c); // NULL
echo "<br>";
echo "<br>";

// Ky eshte critical error, log i zero-s per nr. negativ eshte i padefinuar
echo "----\nvector d - fatal error\n";
echo "<br>";
echo "<br>";
/* log(x) per x <= 0 eshte i padefinuar, ju keni perdorur: scale = $scale*/
$d = scale_by_log($a, -2.5);
var_dump($d); // Nuk arrihet asnjehere
echo "<br>";
echo "<br>";
?>
