<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>
    <!-- duhet te ruhet si .php -->
    <style>
        table, tr,th, td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1> H1 </h1>
    <h2> H2 </h2>

    <table>
        <caption> Tabela e fuqise se numrave 1-10 </caption>
        <tr>
            <th> Nr </th>
            <th> Rrenja katrore </th>
            <th> Fuqia 2 </th>
            <th> Fuqia 3 </th>
            <th> Fuqia 4 </th>
        </tr>
    
    <?php
        for($i=0;$i<=10;$i++)
        {
            $rrenjaKatrore = sqrt($i);
            $fuqia2 = pow($i,2);
            $fuqia3 = pow($i,3);
            $fuqia4 = pow($i,4);
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$rrenjaKatrore."</td>";
            echo "<td>".$fuqia2."</td>";
            echo "<td>".$fuqia3."</td>";
            echo "<td>".$fuqia4."</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";


        echo "Java 1";
        $favFilma = array("Dear John","Shape of Water","Interstellar");
        echo "<br/>";
        for($r=0;$r<3;$r++)  // pse spo ben length
        {
            echo $favFilma[$r].'---';
        }
        echo "<br/>";
        echo "Filmi i preferuar i asistentit eshte ".$favFilma[2];
        // metoda 2 
        echo "<br/>";
        echo "Filmi i preferuar i asistentit eshte {$favFilma[2]}";

        $EmriMbiemri = "Eric Schimdt Ronaldo";  // fshin whitespaces
        echo "<br/>";
        echo $EmriMbiemri;
        echo "<br/>";
        echo str_word_count($EmriMbiemri);
        echo "<br/>";
        echo strlen($EmriMbiemri); // i numeron te gjitha hapesirat edhe pse nuk shfaqen
                                   // kur i printojme
        echo "<br/>";
        echo strpos($EmriMbiemri,"ic");
        echo "<br/>";
        echo strrev($EmriMbiemri);
        echo "<br/>";
        echo str_replace("Eric","Shaban",$EmriMbiemri);



    ?>

</body>

</html>