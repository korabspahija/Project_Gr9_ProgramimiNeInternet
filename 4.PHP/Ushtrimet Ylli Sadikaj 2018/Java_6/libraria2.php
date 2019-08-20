<?php

    function meParametra()
    {
        $nrP = func_num_args();

        echo "Numri i parametrave te ketij funksioni eshte: $nrP";

        echo "<br />Argumentet:<br />";
        $args = func_get_args();

        foreach($args as $arg)
        {
            echo $arg."<br />";
        }
    }
    
    function inkremento(&$a)
    {
        $a = $a + 5;
        echo "<br />Vlera e variables a eshte: $a";
    }

    function krijoTabelen($teDhenat, $caption=null, $header=null, $border=2, $cellspacing=5, $cellpadding=6)
    {
        echo "<table border='$border' cellspacing='$cellspacing' cellpadding='$cellpadding'>";

        if($caption)
        {
            echo "<caption>$caption</caption>";
        }

        

        reset($teDhenat);

        $vlera = current($teDhenat);        // SHIKO!

        if($header)
        {
            echo "<tr><th>$header</th></tr>";
        }

        while($vlera)
        {
            echo "<tr><td>$vlera</td></tr>";
            $vlera = next($teDhenat);       // SHIKO!
        }

        echo "</table>";

    }





?>