<?php
    $kerkesa = $_GET['q'];

    $lidhja = new mysqli("localhost","root","password","UshtrimetPHP2");
    if($lidhja->connect_error)
    {
        echo("Lidhja nuk mund te krijohet!");
        exit();
    }
    else
    {        
        $query = "SELECT * FROM Studentet WHERE emri LIKE '".$kerkesa."%'";
        $rezultati = mysqli_query($lidhja,$query);
        if($rezultati)
        {
            echo "<table border='1'>
                      <tr> <th> Id </th> <th> Emri </th> <th> Mbiemri </th> <th> Mosha </th></tr>";                  
            while($rreshti = mysqli_fetch_assoc($rezultati))
            {
                echo "<tr> <td> ".$rreshti['id']."</td><td>".
                                  $rreshti['emri']."</td><td>".
                                  $rreshti['mbiemri']."</td><td>".
                                  $rreshti['mosha']."</td></tr>";
            }
            echo "</table>";
        }
    }
    $lidhja->close();
?>