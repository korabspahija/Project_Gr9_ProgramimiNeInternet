<?php

session_start();

$host = 'localhost';
$user = "root";
$password = "password";
$db = "UshtrimetPHP2";


$lidhja = new mysqli($host, $user, $password, $db);

if($lidhja->connect_error)
{
    die("Lidhja nuk mund te krijohet!");
}
else
{
    echo "Lidhja u krijua me sukses!<br />";

    $query = "SELECT * FROM perdoruesit WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";

    $rez = $lidhja->query($query);

    if($rez->num_rows)
    {
        $_SESSION['validUser'] = $_POST['username'];
    }   

}

$lidhja->close();

if(isset($_SESSION['validUser']))
{
    echo "Jeni kycur!";

    echo "<br /><a href='logout.php'>Log Out</a>"
}
else
{
    echo "Nuk jeni kycur!";
}


?>