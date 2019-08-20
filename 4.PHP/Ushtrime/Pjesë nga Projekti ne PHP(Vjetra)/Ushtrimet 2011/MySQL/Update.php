<?php
include 'Menu.php';
$nrIndeksit = $_POST["nrIndeksit"];
$emri = $_POST["emri"];
$mbiemri = $_POST["mbiemri"];
$adresa = $_POST["adresa"];

include 'DBConfig.php';

if(isset($nrIndeksit))
{
      $sql_UPDATE = "UPDATE studentet
                                 SET
                                  Emri ='$emri',
                                  Mbiemri ='$mbiemri',
                                  Adresa ='$adresa'
                                 WHERE NrIndeksit = '$nrIndeksit'";

$res_Insert = mysql_query($sql_UPDATE);
mysql_close();
echo "Studenti eshte edituar me sukese...";
}
?>
