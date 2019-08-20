<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	$sql = "DELETE FROM studentet WHERE data_regjistrimit=DATE_FORMAT(NOW(),'%Y-%m-%d')";
	echo $sql;
	mysql_select_db('Ushtrime');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
		die('E pamundur të fshihen të dhënat: ' . mysql_error());
	}
	echo "Fshirja e te dhenave u realizua me sukses\n";
	mysql_close($conn);
?>
