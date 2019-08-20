<?php

session_start();

if(isset($_SESSION['validUser']))
{
    echo "Ju jeni nje member dhe mund te shikoni permbajtjen";
    echo "Ju mund te beni <a href='logout.php'>Log out</a>";
}
else
{
    echo "Ju nuk jeni nje member";
}



?>