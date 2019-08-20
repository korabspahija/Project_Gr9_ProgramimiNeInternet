<?php
<!-- shembull per query: 
$rezultati = mysql_query("SELECT * FROM tblusers");
-->

<!-- lidhja me MySQL -->
	$myUserName = "root";
    $myPassword = "";
	$myDatabase = "test";
	$myHost = "localhost";
	$dbh = mysql_connect($myHost, $myUserName, $myPassword) or die ('I cannot connect to the database because: ' . mysql_error());
	mysql_select_db($myDatabase) or die("Unable to select database");
	$myQuery = "SELECT * FROM foo";
	<!-- Inserti -->
	$myQuery = "INSERT INTO tabela1(id, emri)" . "VALUES(1, 'alban')";
	
	$myResult = mysql_query($myQuery);
	while ($myRow = mysql_fetch_array($myResult)) {
          print "<tr><td>$myRow[id]</td><td>$myRow[phrase]</td></tr>\n";
         }
	mysql_close($dbh);

?>