<?php


    // menyra tjeter nga shprehjet e rregullta
    function validateUsername($user)
    {
        if(strlen($user)<=8)
        {
            throw new Exception("Username duhet te kete me shume se 8 karaktere");
        }
    }
    function validoEmailin($arg)
    {
        if(filter_var($arg,FILTER_VALIDATE_EMAIL)==FALSE)
        {
            throw new Exception("Ju lutem shenoni nje email valid");
        }
        else
        {
            return true;
        }
    }

    $email = "ylli.sadikajuni-pr.edu";
    try
    {
        validoEmailin($email);

        echo "Email eshte valid";
    }
    catch(Exception $ex)
    {
        echo $ex->getMessage();
        echo "<br /><b> Code: </b>".$ex->getCode();
        echo "<br /><b> File: </b>".$ex->getFile();
        echo "<br /><b> Line: </b>".$ex->getLine();
    }


    // Provo "extend Exception class"   

    // klonimi i objekteve

    // instanceof dhe kontrollimi i tipeve 

    // cookies

?>