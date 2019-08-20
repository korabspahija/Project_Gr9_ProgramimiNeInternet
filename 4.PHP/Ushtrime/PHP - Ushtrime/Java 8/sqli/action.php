<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '12345678';
	$db_name='Ushtrime';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass)
		or die("cannot connect"); 

	mysql_select_db($db_name)
		or die("cannot select DB");
	
	$sid = addslashes($_POST['sid']);
	$pid = addslashes($_POST['passid']);

//	$sid = $_POST['sid'];
//	$pid = $_POST['passid'];


	$sql = "select * from studentet where ID = $sid and password = '$pid' ";

	echo $sql;
	
	$result = mysql_query( $sql, $conn );
	
	if(mysql_num_rows($result)>0)
	{
		while ($row=mysql_fetch_row($result)){
			echo "<h4>"."-- Informatat e studentit me ID: ".$row[0]."</h4>";	
			echo "<p>"."Emri:  ".$row[1]."</p>";
			echo "<p>"."Mbiemri:  ".$row[2]."</p>";
			echo "<p>"."Password:  ".$row[3]."</p>";
			echo "<p>"."Data e regjistrimit: ".$row[4]."</p>";
			echo "--------------------------------------------";
		}
	} else echo "Invalid user id or password";
?>
