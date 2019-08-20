<?php

    class Njeriu
    {
        public $emri;
        public $mbiemri;
        public $mosha;
        public function pershendetje()
        {
            echo "<br />Pershendetje $this->emri!";
            // nuk ben vetem $emri, besoj ka lidhje me variablat globale
        }
        public function __construct($a, $b, $c)
        {
            $this->emri = $a;
            $this->mbiemri = $b;
            $this->mosha = $c;
        }

    }

    class Student extends Njeriu
    {
        public $id;
        public $vitiStudimeve;
        public $notaMesatare;
    }





    $mesuesi = new Njeriu("David","Smith",18);
    $studenti = new Student("Ron","Baraliu",20);

    // $mesuesi->emri = "David";
    echo $mesuesi->emri;
    echo "<br />";
    echo $mesuesi->mbiemri;
    echo "<br />";
    echo $mesuesi->mosha;
    echo "<br />";
    // $mesuesi->mbiemri = "Kabashi";
    // $mesuesi->mosha = 18;
    echo $mesuesi->pershendetje();
    echo "<br />";echo "<br />";echo "<br />";
    echo "<br />";
    echo $studenti->emri;
    echo "<br />";
    echo $studenti->mbiemri;
    echo "<br />";
    echo $studenti->mosha;
    echo "<br />";

    echo $studenti->pershendetje();






?>