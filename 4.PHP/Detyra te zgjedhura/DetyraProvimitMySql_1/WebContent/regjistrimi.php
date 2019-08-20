<?php 
include 'konektimi.php';
if (isset($_POST['submit'])) {
	$_SESSION['PERDORUESI'] = $_POST['perdoruesi'];
	if(!hyrja()) {
		echo 'Ky Perdorues nuk egziston';
	} else {
		echo 'Mirsevjen Perdoruesi : ' . $_SESSION['PERDORUESI'];
	}
	
// 	dalja();
// 	echo $_SERVER['REQUEST_SCHEME'];
}


function hyrja() {
	$egziston = false;
	$perdoruesi = $_SESSION['PERDORUESI'];
	$sqlQuery = "SELECT * FROM perdoruesi";
	$query = mysql_query($sqlQuery) or die(mysql_error());
	while($object = mysql_fetch_object($query)) {
		if($perdoruesi == $object->PERDORUESI) {
			$egziston = true;
			break;
		}
	}
	
	return $egziston;
}

function dalja() {
	session_start();
	setcookie('PERDORUESI', $_SESSION['PERDORUESI'], time()+3600);
	session_destroy();
}

?>

<html>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<table>
				<tr>
					<td>Perdoruesi : </td>
					<td><input type="text" name="perdoruesi"></input></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="password" name="password"></input></td>
				</tr>
				<tr>
					<td>Tel : </td>
					<td><input type="tel" name="tel"></input></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>