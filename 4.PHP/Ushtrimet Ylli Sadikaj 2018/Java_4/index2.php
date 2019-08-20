<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>
    <style>
        table,tr,td,th
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1> Bob's Auto Parts </h1>
    <h2> Customer Orders </h2>
    <table>
    <?php
        $file = fopen("orderAuto.txt",'r') or die("The file could not be opened");
        while(!feof($file))
        {
            // if(fgets($file)=="")
            //    continue;
            echo "<tr>";
            echo "<td>";
            echo fgets($file);
            echo "</td>";
            echo "</tr>";
        }
    ?>
    </table>

</body>




</html>