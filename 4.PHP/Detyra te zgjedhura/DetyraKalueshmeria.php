<?php

function kaloj($piket) {
	if($piket >= 50) {
		return true;
	} else {
		return false;
	}
}

if (isset($_POST["test"])) {
	if(kaloj($_POST['piket'])) {
		echo 'Studenti e kalon provimin.<br />';
	} else {
		echo 'Studenti nuk e kalon provimin.<br />';	
	}
}
?>
<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<input type="text" name="piket"/>
			<input type="submit" name="test" value="Testo"/>
		</form>
	</body>
</html>