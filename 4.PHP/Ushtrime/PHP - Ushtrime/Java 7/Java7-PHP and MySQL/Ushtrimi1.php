<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '12345678';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($conn);
?>
