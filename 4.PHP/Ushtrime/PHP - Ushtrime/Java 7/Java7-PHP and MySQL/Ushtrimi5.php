<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	$sql = 'INSERT INTO studentet '.
		   '(id,emri, mbiemri, data_regjistrimit) '.
		   'VALUES ( 15243, "Filan", "Fisteku", NOW() )';

	mysql_select_db('Ushtrime');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	echo "Entered data successfully\n";
	mysql_close($conn);
?>
