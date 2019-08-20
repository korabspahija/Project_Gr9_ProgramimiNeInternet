<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully</br>';
	$sql = 'CREATE Database Ushtrime';
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not create database: ' . mysql_error());
	}
	echo "Database Ushtrime created successfully\n";
	mysql_close($conn);
?>
