<?php
$from=$_POST['from'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($email, $subject, $message, "From".$from);

print "Your message hast been sent:<br>";
?>