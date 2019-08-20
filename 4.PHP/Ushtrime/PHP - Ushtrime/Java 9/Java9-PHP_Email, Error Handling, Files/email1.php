<?php 
$name = $_POST["emri"]; 
$email = $_POST["email"]; 
$msg = $_POST["msg"]; 
$to = "feedback@example.com"; 
$subject = "Feedback-u nga ueb sajti! "; 
$mailcontent = 'Emri i dërguesit: '. $name . "\n" 
.'Email-i i dërguesit: '. $email . "\n" 
."Komenti i dërguesit: \n".$msg ."\n"; 
$headers = 'from: webserver@example.com'; 
if(mail($to, $subject, $msg, $headers)) { 
echo 'Email-i është dërguar me sukses!'; 
} 
else { 
echo 'Dërgimi i email-it ka dështuar!'; 
} 
?>