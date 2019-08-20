<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	$sql = 'CREATE TABLE studentet ('.
		   ' id integer,'.
		   ' emri varchar(20),'.
		   ' mbiemri varchar(20),'.
		   ' data_regjistrimit date) ';

	mysql_select_db('Ushtrime');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not create table: ' . mysql_error());
	}
	echo "Table studentet was created successfully\n";
	mysql_close($conn);
?>