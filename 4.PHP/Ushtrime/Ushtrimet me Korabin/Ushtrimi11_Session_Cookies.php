<html>
<head></head>
<body>
<h1>Ushtrimi 11 - Session and cookies</h1>
<?php
// Detyra 1
/*setcookie('Genti','Value',time()+3600);
echo $_COOKIE['Genti'];*/
// Detyra 2 - Te tregohet vendosja dhe marrja e cookieve ne array
/*setcookie('cookie[nje]','cookienje',time()+3600);
setcookie('cookie[dy]','cookiedy',time()+3600);
setcookie('cookie[tre]','cookietre',time()+3600);
// print_r($_COOKIE);
if (isset ($_COOKIE['cookie'])) 
{
	foreach ($_COOKIE['cookie'] as $emri => $vlera) 
	{
		echo "Emri: $emri dhe Vlera: $vlera";
		echo "<br>";
	}
}
// unset($_COOKIE['cookie[dy]']);
// setcookie('cookie[dy]','cookiedy',time()-3600);
echo "<br>";
if (isset ($_COOKIE['cookie'])) 
{
	foreach ($_COOKIE['cookie'] as $emri => $vlera) 
	{
		echo "Emri: $emri dhe Vlera: $vlera";
		echo "<br>";
	}
}*/
?>
</body>
</html>