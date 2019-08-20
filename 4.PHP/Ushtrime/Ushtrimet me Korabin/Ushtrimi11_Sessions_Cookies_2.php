<?php
// Kontrollojme neser forma eshte bere submit
if (isset($_POST['submitted'])) 
{
	// Nese po -> vendosni vlerat nga post array ne variable
	$newbgColor = $_POST['bgColor'];
	$newtxtColor = $_POST['txtColor'];
	// Vendosim cookie-t
	setcookie('bgColor',$newbgColor, time()+3600);
	setcookie('txtColor',$newtxtColor, time()+3600);
}
// Ne rastin kur shfrytzuesi kyqet per here te pare
if ((!isset($_COOKIE['bgColor']))&&(!isset($_COOKIE['txtColor']))) 
{
	$bgColor = "Black";
	$txtColor = "White";
}
else // Nese cookiet vesa jane vendosur
{
	$bgColor = $_COOKIE['bgColor'];
	$txtColor = $_COOKIE['txtColor'];
}
?>

<!-- HTML Faqja-->
<html>
<body bgcolor="<?php echo $bgColor ?>" text="<?php echo $txtColor ?>"> 
<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
<p>Ngjyra e prapavise:</p>
<select name=bgColor>
<option value ="Red">E kuqe</option>
<option value ="Green" selected>E gjelber</option>
<option value ="Blue">E kalter</option>
<option value ="Yellow">E verdhe</option>
<option value ="Black">E zeze</option>
<option value ="Brown">Kafe</option>
<option value ="White">E bardhe</option>
</select>
<p>Ngjyra e tekstit:</p>
<select name=txtColor>
<option value ="Red" selected>E kuqe</option>
<option value ="Green">E gjelber</option>
<option value ="Blue">E kalter</option>
<option value ="Yellow">E verdhe</option>
<option value ="Black">E zeze</option>
<option value ="Brown">Kafe</option>
<option value ="White">E bardhe</option>
</select>
<input type ="hidden" name="submitted" value="true"></br>
<input type="submit" value="Kujto vlerat">
</form>
</body>
</html>
