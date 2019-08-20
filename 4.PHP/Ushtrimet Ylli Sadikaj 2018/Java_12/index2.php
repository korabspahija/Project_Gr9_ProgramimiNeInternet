<?php
    $kerkesa = $_GET['q'];

    $lendet = array("Programimi ne Internet","Komunikimi Njeri Kompjuter", "Interneti", "Bazat e te Dhenave","Rrjetet Kompjuterike","Siguria e te Dhenave");

    $hint = "";
    foreach($lendet as $lenda)
    {
        if($kerkesa!=null)
        {
            if(stristr($kerkesa,substr($lenda,0,strlen($kerkesa))))
            {
                if($hint==="")
                {
                    $hint = $lenda."<br />";
                }
            }
        }
    }
    echo $hint;

?>