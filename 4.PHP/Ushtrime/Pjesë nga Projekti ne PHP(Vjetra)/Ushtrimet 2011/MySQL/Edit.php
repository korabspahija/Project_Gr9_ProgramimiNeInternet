<?php
$nrInd = $_GET['id'];
include 'DBConfig.php';
$sql_Select = "SELECT NrIndeksit, Emri, Mbiemri, Adresa FROM Studentet where NrIndeksit='$nrInd'";
$sql_rez = mysql_query($sql_Select);
$row = mysql_fetch_array($sql_rez);

?>
<html>
    <head>
        <title>Editimi i studenteve</title>
    </head>
    <body>
       <?php
       include 'Menu.php';
       ?>
        <b>Te dhenat e studentit per editim:</b>
         <form name="frmStd" action="Update.php" method="get">
            <table>
                <tr>
                    <td>
                        NrIndeksit:
                    </td>
                    <td>
                        <input type="text" readonly name="nrIndeksit" value="<?php echo $row[NrIndeksit]; ?>"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Emri:
                    </td>
                    <td>
                        <input type="text" name="emri" value="<?php echo $row[Emri]; ?>"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Mbiemri:
                    </td>
                    <td>
                        <input type="text" name="mbiemri" value="<?php echo $row[Mbiemri]; ?>"/>
                    </td>
                </tr>
                     <tr>
                    <td>
                        Adresa:
                    </td>
                    <td>
                        <input type="text" name="adresa" value="<?php echo $row[Adresa]; ?>"/>
                    </td>
                </tr>
            </table>
            <input type="submit" name="btnSave" value="Ruaj"/>
        </form>
    </body>
</html>