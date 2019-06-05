<?php


if (isset($_POST['send'])) {



    $to = "korabspahiu123@hotmail.com";


    $name = $_POST['name'];

    $phone = $_POST['phone'];

    $email = $_POST['email'];

    $header = array("From: ", $email ,"/r/n ","MIME-Version: 1.0","/r/n ","Content-Type: text/html; charset=utf-8");

    $headers = implode("",$header);

    $message = $_POST['message'];

    mail($to, "Hello", $message, $headers);
}
