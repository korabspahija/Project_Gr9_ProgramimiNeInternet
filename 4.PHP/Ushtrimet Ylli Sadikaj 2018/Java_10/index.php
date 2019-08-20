<?php

$emriCookie = "123user";
$vleraCookie = "abc";

setcookie($emriCookie, $vleraCookie, time()+60*60*24);      // provo kohen + 10 (vetem 10 sekonda)

if(isset($_COOKIE['123user']))
{
    foreach($_COOKIE as $emri=>$vlera)
    {
        echo $emri."=>".$vlera;
    }
    echo "<br />";
    echo "Cookie eshte krijuar";
}
else
{
    echo "Cookie nuk eshte krijuar";
}

unset($_COOKIE['123user']);

// setcookie($emriCookie, $vleraCookie, time()-1);

?>