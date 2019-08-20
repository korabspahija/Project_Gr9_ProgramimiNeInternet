<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>

<body>
    <?php
        // ne fillim te ores shembuj me klasen Page, qe ka header dhe footer te caktuar
        // shiko ne liber shembulli me TLA Consulting Parts

        class myClass
        {
            public $a = "5";
            public $b = "7";
            public $c = "9";
            public $d = "Filan";
            public $e = [1,2,3,4];
            public $f = [2=>"Vlera"];
        }

        $x = new myClass();

        // iterojme ne atributet e klases se dhene sikur ne array
        foreach($x as $atributet)
        {
            if(is_array($atributet))
            {
                echo "{";
                foreach($atributet as $atributi)
                {
                    echo "$atributi ";
                }
                echo "}";
            }
            else 
            {
                echo $atributet;
            }
            echo "<br />";
        }





    ?>
</body>


</html>