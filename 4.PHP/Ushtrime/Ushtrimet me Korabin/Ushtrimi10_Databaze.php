<html>
<head></head>
<body>
<h1>Ushtrimi 10 - Bazat e te dhenave</h1>
<?php
// Detyra 1
$dbhost = 'localhost:3307';
$dbuser = 'root';
$dbpass = '';
$db = 'studenti';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) 
{
	die('Lidhja me databazen nuk mund te realizohet'.mysqli_connect_error());
}
echo "Lidhja me databazen u realizua me sukses!";
echo "<br>";

$sql = "CREATE Database studenti2";
$retval = mysqli_query($conn , $sql);
if (!$retval) 
{
	die('Databaza nuk mund te krijohet'.mysqli_connect_error());
}
echo "Databaza u krijua me sukses";
mysqli_close($conn);
?>
</body>
</html>