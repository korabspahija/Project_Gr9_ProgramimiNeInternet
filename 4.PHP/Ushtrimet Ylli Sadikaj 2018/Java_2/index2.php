<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>

<body>

<?php
    

    $afate = array("Janar" => array("BET"=> 6,"Qarqe Digjitale" => 10,"Fizika"=>8),
                   "Prill" => array("Sinjale"=>6),
                   "Qershor" => array("Matematika 3K"=>9,"Programimi ne Internet"=>7));

    echo "Nota ne lenden e Matematikes 3K eshte: ".$afate["Qershor"]["Matematika 3K"];

    foreach($afate as $afati=>$lenda)
    {
        foreach($lenda as $emrilendes => $nota)
        {
            echo "Me afatin e $afati ne lenden $emrilendes kam marre noten $nota<br />";
        }
    }

    $numra = array(1,5,2,12,14);

    sort($numra);

    foreach($numra as $nr)   
    {
        echo $nr." ";
    }

    echo "<br />";
    rsort($numra);

    foreach($numra as $nr)
    {
        echo $nr." ";
    }   

    echo "<br />";
    $emrat = array("Bella"=>19, "Gigi"=>13 , "Edi"=>21);
    
    asort($emrat);                  // provo edhe me ksort!

    foreach($emrat as $emri=>$nr)
    {
        echo $emri." ".$nr."<br />";
    }

    arsort($emrat);                

    foreach($emrat as $emri=>$nr)
    {
        echo $emri." ".$nr."<br />";
    }

    // provo nese kane celesat e njejte!

    

    
?>


</body>


</html>