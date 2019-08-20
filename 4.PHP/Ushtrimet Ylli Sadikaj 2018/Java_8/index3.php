<?php

function validoNumrin($nr)
{
    if($nr>1)
    {
        throw new Exception("Vlera duhet te jete me e vogel ose barazi me 1!");
    }
    else
    {
        return true;
    }
}

try
{
    validoNumrin(2);

    echo "Sakte!";
}
catch(Exception $ex)
{
    echo $ex->getMessage();
    echo "<br />";
    echo $ex->getFile();
    echo "<b> on line </b>";
    echo $ex->getLine();
}

?>