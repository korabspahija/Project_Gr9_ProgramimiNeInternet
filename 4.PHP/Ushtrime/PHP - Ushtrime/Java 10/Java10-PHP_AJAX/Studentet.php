<?php 
$con = mysql_connect("localhost","root",""); 
mysql_select_db("ushtrime",$con); 
$sql_Select = "select NrIndeksit, Emri, Mbiemri, Adresa from studentet where NrIndeksit like '$_GET[q]%'"; 
print $sql_Select; 
$res_Select = mysql_query($sql_Select); 
$nrStd = mysql_num_rows($res_Select); 
 
if($nrStd) 
    { 
     echo "<table>"; 
     echo "<tr style='color:white; background‐color:#7AC234;'> 
            <th color='white'>NrIndeksit</th> 
            <th>Emri</th> 
            <th>Mbiemri</th> 
            <th>Adresa</th> 
         </tr>"; 
       while($row = mysql_fetch_array($res_Select)) 
        { 
         echo "<tr> 
                     <td>$row[NrIndeksit]</td> 
                     <td>$row[Emri]</td> 
                     <td>$row[Mbiemri]</td> 
                     <td>$row[Adresa]</td> 
                </tr>"; 
         } 
       echo "</table>"; 
    } 
echo '<br/>'; 
mysql_close(); 
 
?>