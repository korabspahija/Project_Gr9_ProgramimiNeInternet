<?php

$x = 5;
echo "Vlera e variables x jashte funksionit eshte $x<br />";

/*
function emriFunksionit()
{
    // echo "Vlera e variables x brenda funksionit eshte $x<br/>";
    // ERROR nese nuk e deklarojme variablen x brenda funksionit
    $x = 9;
    echo "Vlera e variables x brenda funksionit eshte $x<br/>";
    // nese duam qe te marrim vleren e variables globale jashte
    // global $x;
    // echo "Vlera e variables globale x eshte $x";
}
*/
function emriFunksionit()
{
    static $x = 9;
    echo "Vlera e variables x brenda funksionit eshte $x<br/>";
    $x++;
}

emriFunksionit();
emriFunksionit();
emriFunksionit();

// 4 funksione nga 2 argumente
function shuma($x,$y)
{
    echo "Shuma eshte ".($x+$y);
}
function diferenca($x,$y)
{
    echo "Diferenca eshte ".($x-$y);
}
function prodhimi($x,$y)
{
    echo "Prodhimi eshte ".($x*$y);
}
function heresi($x,$y)
{
    echo "Heresi eshte ".($x/$y);
}

shuma(2,3);
echo "<br/>";
diferenca(5,2);
echo "<br/>";
prodhimi(5,8);
echo "<br/>";
heresi(9,3);
echo "<br/>";

function shumaNjepasnjeshem($var)
{
    $shuma = $var + ($var+1) + ($var +2);
    return $shuma;
}

echo shumaNjepasnjeshem(51);

function prodhimiNjepasnjeshem($var)
{
    $prodh = $var * ($var+1) * ($var +2);
    return $prodh;
}
echo "<br/>";
echo prodhimiNjepasnjeshem(2);

?>