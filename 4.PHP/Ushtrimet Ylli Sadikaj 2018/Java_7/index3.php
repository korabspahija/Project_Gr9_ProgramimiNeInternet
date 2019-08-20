<?php

    class A
    {
        public $atributiA = 'A';

        function funksioniA()
        {
            echo "<br />".$this->atributiA;
        }


    }

    class B extends A
    {
        public $atributiB = "B";
        function funksioniB()
        {
            echo "<br />".$this->atributiB;
        }
    }

    class C extends B
    {
        public $atributiC = "C";
        function funksioniC()
        {
            echo "<br />".$this->atributiC;
        }
    }

    $objA = new A();
    $objA->atributiA = "AA";
    $objA->funksioniA();

    echo "<br />";
    $objB = new B();
    $objB->funksioniA();
    $objB->funksioniB();

    echo "<br />";
    $objC = new C();
    $objC->funksioniA();
    $objC->funksioniB();
    $objC->funksioniC();


?>