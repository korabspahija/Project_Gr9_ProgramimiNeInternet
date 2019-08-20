<?php
include 'Menu.php';
include 'DBConfig.php';
$nrInd = $_GET['id'];
if(isset ($nrInd))
    {
     $sql = "DELETE FROM Studentet where NrIndeksit='$nrInd'";
     $rez = mysql_query($sql);
     echo "Studenti eshte fshij me sukses...";
    }

?>
