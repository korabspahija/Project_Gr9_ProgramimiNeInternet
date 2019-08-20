<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	$sql = 'DROP Database Ushtrime';
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not drop database: ' . mysql_error());
	}
	echo "Database Ushtrime droped successfully\n";
	mysql_close($conn);
?>