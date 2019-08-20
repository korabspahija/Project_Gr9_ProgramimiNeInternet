<?php
$email1 = "test@hotmial.com";
print "Email-i testues: '$email1'";
print "<br>";
if (preg_match('/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email1))
{
    echo "Email adresa1 është valide.";
	echo "<br>";
	echo "<br>";
} 
else 
{
    echo "Email adresa1 nuk është valide.";
	echo "<br>";
	echo "<br>";
}
?>

<?php
$email2 = "emri.mbiemri@aaa.bbb.com";
print "Email-i testues: '$email2'";
echo "<br>";

$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

if (preg_match($regexp, $email2)) {
    echo "Email adresa2 eshte valide.";
	echo "<br>";
	echo "<br>";
} else {
    echo "Email adresa2 <u>nuk</u> eshte valide.";
	echo "<br>";
	echo "<br>";
}
?>
