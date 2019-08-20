<?php

trait trajt1
{
    function paraqit()
    {
        echo "Pershendetje perdorues!";
    }
}

trait trajt2
{
    function paraqit()
    {
        echo "Hello user!";
    }
}

/*
class A 
{
    use trajt1
    {
        trajt1::paraqit as shfaq;   
    }
}
*/

class A 
{
    use trajt1,trajt2
    {
        trajt1::paraqit insteadOf trajt2;   
    }
}

$objektiA = new A();
// $objektiA->shfaq();
$objektiA->paraqit();

?>