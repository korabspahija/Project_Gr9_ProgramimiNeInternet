<?php

    /* 
        - Kapitulli 12 Cookiet Sessionet
        - Per injektime te skriptave 
            htmlspecialchars
            nl2br
            htmlentities    // NEHARI
    */

    // PREPARED STATEMENTS

    include("dbConfig.php");

    $lidhja = new mysqli(DBhost,DBuser,DBpassword,DBname);

    if($lidhja->connect_error)
    {
        echo("Lidhja nuk mund te krijohet!");
        exit();
    }
    else
    {
        $id = 6;
        $name = "Tom";
        $surname = "Hiddleston";
        $age = 32;
        $rez = $lidhja->prepare("INSERT INTO Studentet VALUES(?,?,?,?)");
        $rez->bind_param('issi',$id,$name,$surname,$age);          // 'i' nenkupton integer, 's' - string, 'b' - booleane, 'd' - double

        $rez->execute();

        if($rez)
        {
            echo "Te dhenat u insertuan!";
        }
        else
        {
            echo "Te dhenat nuk mund te insertohen!";   
        }        
    }

    $lidhja->close();


?>