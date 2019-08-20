<?php

    include("dbConfig.php");

    $lidhja = new mysqli(DBhost,DBuser,DBpassword,DBname);

    if($lidhja->connect_error)
    {
        die("Lidhja nuk mund te krijohet!");
    }
    else
    {
        echo "Lidhja u krijua me sukses!<br />";
    }

    $id = $_POST['id'];
    $emri = trim($_POST['emri']);
    $mbiemri = $_POST['mbiemri'];
    $mosha = $_POST['mosha'];

    $query = "INSERT INTO Studentet VALUES (".$id.",'".$emri."','".$mbiemri."',".$mosha.")";

    $rez = $lidhja->query($query);

    // Mesoje mysql_prepare(...)

    // tek tjeter skripte ANALIZO
    // mysqli_stmt_bind_param($rezultati,"i",$id) // ku $query = select * from studentet where id=?
    // mysqli_stmt_execute($rezultati)
    // mysqli_stmt_bind_result($rezultati,$id,$emri,$mbiemri,$mosha)

    // if(mysqli_stmt_fetch($rezultati)){
    // echo "Emri i studentit eshte ".$emri."<br />";
    // echo "Mbiemri i studentit eshte ".$mbiemri."<br />";
    // echo "Id e studentit eshte ".$id."<br />";
    // echo "Mosha e studentit eshte ".$mosha."<br />";}



    // mysqli_close();

    $lidhja->close();




?>