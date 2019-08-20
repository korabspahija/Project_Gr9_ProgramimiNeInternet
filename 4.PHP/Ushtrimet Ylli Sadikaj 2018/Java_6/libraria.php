<?php

    echo "Pershendetje";

    $emri = "David";
    $mbiemri = "Billclinton";
    $mosha = 34;

    function vleraMadhe($a, $b)
    {
        if(!isset($a) || !isset($b))
        {
            echo "<br />Ju lutem jepni vlerat per te dy argumentet!";
        }
        else
        {
            echo "<br />Vlera me e madhe mes $a dhe $b eshte: ";
            if($a>$b)
            {
                echo $a;
            }
            else
            {
                echo $b;
            }
        }
    }



?>