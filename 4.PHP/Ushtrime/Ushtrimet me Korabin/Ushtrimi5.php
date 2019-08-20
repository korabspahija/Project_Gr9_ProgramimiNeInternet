<html>
<head></head>
<body>
<?php


echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";
echo $_SERVER['HTTP_REFERER']."<br>";
echo $_SERVER['HTTP_USER_AGENT']."<br>";
echo $_SERVER['HTTP_CONNECTION']."<br>";
echo "<br>";?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> //te get shihet ne url transferi
Emri: <input type="text" name="fname">
	<input type ="submit">
	</form>

	<?php 
	$emri = $_REQUEST['fname'];
	echo $emri;
	?>

</body>
</html>