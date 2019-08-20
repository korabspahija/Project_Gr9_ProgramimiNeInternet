<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8"/>
    <title> Title </title>

</head>


<body>
    <?php
        class emriKlases
        {
            public $publike;
            private $privatee;                  // ka rendesi te objekti->private
            protected $protectedd;
            const PIJA = 3.14;

            public function __set($emri, $vlera)
            {
                $this->$emri = $vlera;          // shiko dallimin te shenja e dollarit
                                                // $this->$emri per dallim nga $this->emri
            }

            public function __get($emri)
            {
                return $this->$emri;
            }

            public function __construct($arg1, $arg2, $arg3)
            {
                $this->publike = $arg1;
                $this->protectedd = $arg2;
                $this->privatee = $arg3;
            }

            public static function paraqit()
            {
                echo "<br />Pershendetje<br />";
            }

            // destruktori thirret vet ne menyre implicite

            public function __destruct()
            {
                echo "<br />Destruktori eshte thirrur";
            }

        }

        $objekti = new emriKlases("Var publike ne klase","Var protected ne klase", "Var private ne klase");

        // $objekti = new emriKlases();
        $objekti->publike = "Var publike";
        // $objekti->private = "Var private";
        $objekti->__set("privatee","Var private");
        // $objekti->protected = "Var protected";
        $objekti->__set("protectedd","Var protected");

        echo $objekti->publike;
        echo "<br />";
        echo $objekti->privatee;
        echo "<br />";
        echo $objekti->protectedd ;
        echo "<br />";

        $varPrivate = $objekti->__get("privatee");
        $varProtected = $objekti->__get("protectedd");

        echo "---------------------------------------------------------------<br />";
        echo $objekti->publike;
        echo "<br />";
        echo $objekti->privatee;
        echo "<br />";
        echo $objekti->protectedd ;
        echo "<br />";

        $objekti2 = new emriKlases("Var publike ne klase","Var protected ne klase", "Var private ne klase");
        echo "---------------------------------------------------------------<br />";
        // funksionet get dhe set automatikisht i marrin parametrat nga komandat ne vijim
        echo $objekti2->publike;
        echo "<br />";
        echo $objekti2->privatee;
        echo "<br />";
        echo $objekti2->protectedd ;
        echo "<br />";

        $objekti3 = new emriKlases("Var3 publike ne klase","Var3 protected ne klase", "Var3 private ne klase");
        echo "---------------------------------------------------------------<br />";
        echo $objekti3->publike;
        echo "<br />";
        echo $objekti3->privatee;
        echo "<br />";
        echo $objekti3->protectedd ;
        echo "<br />";

        echo "---------------------------------------------------------------<br />";
        echo emriKlases::PIJA;
        echo "<br />";
        echo emriKlases::paraqit();
        echo "<br />";
        echo $objekti3->paraqit();          // shiko dallimin -> dhe ::


    ?>

</body>


</html>