<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>


<body>

    <?php

        // 1. Funksioni trim
        $fjala = "Pershendetje zoteri";
        echo trim($fjala, "Per");
        echo "<br />";
        echo $fjala;
        echo "<br />";
        echo ltrim($fjala, "Per");
        echo "<br />";
        echo rtrim($fjala, "Per");
        // -------------------------------------------------------
        echo "<br />";
        echo chop($fjala);
        // -------------------------------------------------------
        
        // funksioni nl2br

        // funksionet per upper, lower, per slashes
        // shiko si duhet te shfaqur <br>======== me htmlspecialchars

        echo "<br />";
        echo htmlspecialchars("This is a break <br />This is a test");

        // -------------------------------------------------------


        // funksionet printf

        // sprintf e ruan ne nje variabel, dmth kthen string

        echo "<br />";
        $email = "fiek@uni-pr.edu";
        $array = explode("@",$email);
        echo $array[0]."<br />";
        echo $array[1]."<br />";


        echo "<br />";echo "<br />";echo "<br />";

        // pa ngjites
        $emaila = implode($array);
        echo $emaila;
        // me ngjites
        $emaila2 = implode($array,"@");
        echo "<br />";
        echo $emaila2;



        echo "<br />";echo "<br />";echo "<br />";

        $tokens = "<br />"."Total amount of order is";
        $token = strtok($tokens," ");
        while($token==true)
        {
            echo $token."@";
            $token = strtok(" ");
        }

        echo "<br />";
        $ekipi = "Manchester United";
        echo substr($ekipi,0,3)." ".substr($ekipi,strlen($ekipi)-6,strlen($ekipi));

        // --------------------------------------------------
        $str1 = "a";
        $str2 = "a";

        echo "<br />";
        echo strcmp($str1,$str2);

        // provo strncmp GJITHSESI!!
        
        // gjetja e stringjeve

        // gjetja e karakterit brenda stringut strchar, strrchar

        // gjetja e stringut brenda nje stringu strpos, strrpos


        // shiko zevendesimin me array SHIKO GJITHSESI!

        $fjaletperzv = array("Une","kam");
        $fjaletzv = array("Ne","kemi");


        // ------------------------------------------------------------------

        // zevendesimi me substr_replace

        // preg_match   ,   preg_replace    ,   preg_split

        


    ?>


</body>




</html>