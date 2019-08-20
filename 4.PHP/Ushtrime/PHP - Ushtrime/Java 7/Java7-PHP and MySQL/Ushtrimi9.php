<?php
	require_once "db_conn_Ushtrimi.php";
	
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	
	$sql = 'SELECT ID, Emri, Mbiemri, Data_regjistrimit FROM studentet';

	$retval = mysql_query( $sql, $conn );

	if(! $retval )
	{
	  die('Could not get data: ' . mysql_error());
	}
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		echo "Student ID :{$row['ID']}  <br> ".
			 "Emri : {$row['Emri']} <br> ".
			 "Mbiemri : {$row['Mbiemri']} <br> ".
			 "Data e Regjistrimit : {$row['Data_regjistrimit']} <br> ".
			 "--------------------------------<br>";
	} 
	echo "Fetched data successfully\n";
	mysql_close($conn);
?>