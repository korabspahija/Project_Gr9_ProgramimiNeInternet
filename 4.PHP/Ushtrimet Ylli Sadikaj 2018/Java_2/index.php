<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>

<body>

<?php
    $ora = date("H");           // me h te vogel e tregon me AM PM
    echo "Ora eshte: ".$ora;

    $muaji = date("M");         // ose me F / me m te vogel e merr muajin si numer
    echo "<br />Muaji eshte: ".$muaji;

    $viti = date("Y");          // me y te vogel e shfaq vetem 18
    echo "<br />Viti eshte: ".$viti;

    $ora = date("h:i");          
    echo "<br />Ora eshte: ".$ora;
    
    if($ora<12)
    {
        echo "<br />Miremengjes!";
    }
    else if($ora<18)
    {
        echo "<br />Miredita zotniee!";
    }
    else if($ora <=23)
    {
        echo "<br />Mirembrema!";
    }
    
    $funday = 'Friday';

    echo "<br />";

    switch($funday)
    {
        case 'Monday':
            echo "Ohhh no!";
            break;
        case 'Thursday':
            echo "So close!";
            break;
        case 'Friday':
            echo "Yep!";
            break;
        default:
            echo "Provoni perseri!";
    }
    


    $ora = date("h:i a");       // shfaqe a eshte AM apo PM
    echo "<br />Ora eshte: ".$ora;

    
    $i = 0;
    $a = 0;
    $b = 0;
    while($i<5)
    {
        $a += 10;
        $b += 5;
        $i++;
    }
    echo "<br />";
    echo "Vlera e a = ".$a;
    echo "<br />";
    echo "Vlera e b = ".$b;
    echo "<br />";
    echo "Vlera e i = ".$i;

    do
    {
        $a += 10;
        $b += 5;
        $i++;
    }
    while($i<10);

    echo "<br />";
    echo "Vlera e a = ".$a;
    echo "<br />";
    echo "Vlera e b = ".$b;
    echo "<br />";
    echo "Vlera e i = ".$i;

    // array te thjeshte
    $favSinger = array('Bella','Edi','Justin','Selena','Gigi');

    $emrat = ['Ron','David','Lucas','Zhade'];

    $ngjyrat[0] = 'Kuqe';
    $ngjyrat[1] = 'Blue';
    $ngjyrat[2] = 'Zeze';

    $gjatesia = count($favSinger);
    echo "<br />";
    echo "Gjatesia e vargut eshte: ",$gjatesia;

    echo "<br />";
    for($i=0;$i<sizeof($favSinger);$i++)
    {
        echo "Anetari ".$i." eshte ".$favSinger[$i]."<br />";
    }
    echo "<br />";
    foreach($favSinger as $singer)
    {
        echo $singer,"<br />";
    }

    // array i asocuar
    $notimi = array("Interneti"=>9,"Programimi ne Internet"=>8,"Bazat e te Dhenave"=>8);

    foreach($notimi as $lenda=>$nota)
    {
        echo "Ne lenden $lenda kam noten $nota<br />";
    }


?>


</body>


</html>