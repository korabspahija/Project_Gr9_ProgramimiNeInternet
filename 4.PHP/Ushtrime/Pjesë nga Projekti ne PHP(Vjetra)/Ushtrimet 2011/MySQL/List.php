<?php
include 'Menu.php';
include 'DBConfig.php';
$sql_Select = "SELECT NrIndeksit, Emri, Mbiemri, Adresa FROM Studentet";
$res_Select = mysql_query($sql_Select);
$nrStd =  mysql_num_rows($res_Select);
print '<b>Numri totali i studenteve:'.$nrStd.'</b><br><br>';
if($nrStd)
    {
    echo "<table>";
    echo "<tr style='color:white; background-color:#8BCD3E'>
          <th>NrIndeksit</th>
          <th>Emri</th>
          <th>Mbiemri</th>
          <th>Adresa</th>
          </tr>";
     while ($row = mysql_fetch_array($res_Select))
         {
           echo
                "
                <tr>
                <td>$row[NrIndeksit]</td>
                <td>$row[Emri]</td>
                <td>$row[Mbiemri]</td>
                <td>$row[Adresa]</td>
                <td><a href='Delete.php?id=$row[NrIndeksit]'>Delete</a></td>
                <td><a href='Edit.php?id=$row[NrIndeksit]'>Edit</a></td>
                </tr>
                ";
         }
         echo '</table>';
    }
mysql_close();


?>
