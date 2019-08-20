<?php

    // include("libraria.php");

    // require("libraria3.php");
    // dallimi: kur require nuk e gjen filen ka fatal error, ndersa kur include nuk e gjen
    // shfaq vetem nje verejtje

    include_once("libraria.php");
    require_once("libraria.php");
    include_once("libraria2.php");

    echo "<br />";
    echo "Emri eshte: ".$emri;
    echo "<br />";
    echo "Mbiemri eshte: ".$mbiemri;
    echo "<br />";
    echo "Mosha eshte: ".$mosha;


    $x = 5;
    $y = 3;
    $z = null;
    vleraMadhe($x,$y);

    echo "<br />";
    meParametra(1,2,3,"Hello"); // edhe pse atje nuk ka argumente funksioni SHIKO!

    
    inkremento($x);
    echo "<br />Vlera e variables x eshte: $x";

    inkremento($x);
    echo "<br />Vlera e variables x eshte: $x";

    echo "<br />--------------------------------------------------------------------------------------------------------<br />";

    $tabela = [1,2,3];
    $header = "ID";
    $caption = "Tabela 1. Te dhenat per studentet";
    krijoTabelen($tabela,$caption,$header, 5, 12, 12);

    // nese nuk duam caption
    // krijoTabelen($tabela,null,$header);

    echo "<br />--------------------------------------------------------------------------------------------------------<br />";

    


    echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";

    






    





    

?>