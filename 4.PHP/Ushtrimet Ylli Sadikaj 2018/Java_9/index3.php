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

$query = "SELECT * FROM Studentet";

$rez = $lidhja->query($query);

if($rez)
{
    while($rreshti = $rez->fetch_array())
    {
        echo "Emri eshte ".$rreshti['emri']."<br />";
    }
}


$lidhja->close();


?>