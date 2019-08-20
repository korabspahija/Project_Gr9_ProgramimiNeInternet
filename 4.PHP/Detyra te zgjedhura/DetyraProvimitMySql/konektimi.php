<?php
$hostname='localhost';
$user='albion';
$password='';
$Baze_dhenave='test';

$conn=mysql_connect($hostname,$user,$password);
mysql_select_db($Baze_dhenave,$conn);
if(!$conn) die ("Nuk eshte bere qasja ne MySql". mysql_error());
/*
krijimi i tabeles Perdoruesit
$query="CREATE TABLE Perdoruesit(
					 id INTEGER,
					 PERDORUSI VARCHAR(50),
					 Password CHAR(40),
					 TELEFONI VARCHAR(10))";
mysql_select_db($Baze_dhenave,$conn);
$a=mysql_query($query,$conn);
if(!$a){
die("Nuk u kriju tabela".mysql_error());
}
else
{
echo'tabela u kriju me sukses';
}
mysql_query($query);
if(!$query){
echo mysql_error();
}
*/
?>