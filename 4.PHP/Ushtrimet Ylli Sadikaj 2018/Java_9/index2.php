<?php

$zgjedhja = $_POST['zgjedhja'];
$input = $_POST['input'];

define("DBhost","localhost");
define("DBname","UshtrimetPHP2");
define("DBuser","root");
define("DBpassword","password");

$lidhja = mysqli_connect(DBhost, DBuser, DBpassword, DBname);

if(!$lidhja)
{
    echo "Lidhja ne bazen e shenimeve nuk mund te realizohet";
}
else
{
    echo "U krijua lidhja me bazen e shenimeve!";
}

// $query = "SELECT * FROM Studentet WHERE ".$zgjedhja."='".$input."'";
$query = "SELECT * FROM Studentet WHERE ".$zgjedhja." LIKE '".$input."%'";

$rezultati = mysqli_query($lidhja, $query);

if(!$rezultati)
{
    die("Invalid!<br />");
}

if($rezultati)
{
    while($rreshti = mysqli_fetch_array($rezultati))
    {
        echo "<br />---------------------------------------<br />";
        echo "ID e studentit eshte ".$rreshti['id']."<br />";
        echo "Emri i studentit eshte ".$rreshti['emri']."<br />";
        echo "Mbiemri i studentit eshte ".$rreshti['mbiemri']."<br />";
        echo "Mosha e studentit eshte ".$rreshti['mosha']."<br />";
    }
}

mysqli_close($lidhja);




?>