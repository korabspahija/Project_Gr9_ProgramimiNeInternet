<?php
include 'Menu.php';
$nrInd  = $_GET['nrIndeksit'];
$emri = $_GET['emri'];
$mbiemri  = $_GET['mbiemri'];
$adresa  = $_GET['adresa'];

if(isset($nrInd))
    {
     $sql_Insert = "INSERT INTO Studentet
                    (NrIndeksit,
                     Emri,
                     Mbiemri,
                     Adresa)
                     VALUES
                     (
                       '$nrInd',
                       '$emri',
                       '$mbiemri',
                       '$adresa'
                     )";

     include 'DBConfig.php';
     $res_insert = mysql_query($sql_Insert);
     mysql_close();
     print 'Studenti eshte regjistruar me sukses...';
    }
    else
        {
        print 'Jepni numrin e indeksit...';
        }

?>
