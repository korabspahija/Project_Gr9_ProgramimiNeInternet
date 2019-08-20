<?php 
include "Mail.php"; 
$name = $_POST["emri"]; 
$email = $_POST["email"]; 
$msg = $_POST["msg"]; 
$from = "korab.rrmoku@gmail.com"; 
$to = "rrkorab@gmail.com"; 
$subject = "Feedback-u nga ueb sajti! "; 
$mailcontent = 'Emri i dërguesit: '. $name . "\n" 
.'Email-i i dërguesit: '. $email . "\n" 
."Komenti i dërguesit: \n".$msg ."\n"; 
$host = "ssl://smtp.gmail.com"; 
$port = "465"; 
$username = "korab.rrmoku@gmail.com"; 
$password = "KETU VENDOSET PASSWORDI"; 
$headers = array ('From' => $from, 
'To' => $to, 
'Subject' => $subject); 
$smtp = Mail::factory('smtp', 
array ('host' => $host, 
'port' => $port, 
'auth' => true, 
'username' => $username, 
'password' => $password)); 
$mail = $smtp->send($to, $headers, $mailcontent); 
if($mail) { 
echo 'Email-i është dërguar me sukses!'; 
} 
else { 
echo 'Dërgimi i email-it ka dështuar!'; 
} 
?> 