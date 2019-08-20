<?php
// set your folder
// give write rights on that folder
$uploaddir="newsimg/";
$uploadfile =basename($_FILES['nimage1']['name']);
$filename = basename($_FILES['nimage1']['name']);
	if (move_uploaded_file($_FILES['nimage1']['tmp_name'], "$uploaddir/$uploadfile")) 
	{
		//that mean upload is completed with success;
		$msg = "success";
	}else{
		//that mean upload faild;
		$msg = "faild";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ENYSOFWTARE.OCM - PHP Upload</title>
</head>
<body style="font-family:Arial; font-size:10px;">
<form name="addnews" enctype="multipart/form-data"  method="post" action="phpupload.php">
<table border=0 cellspacing=1 cellpadding=4 align=center width=100% bgcolor="#000000">
<tr bgcolor="#FFFFFF">
	<td width=121 valign="top" class="btext" height="28" align=right><div align="left"> Image:</div></td>
	<td valign="top" width=443><input type="hidden" name="MAX_FILE_SIZE2" value="500000"/>
	<input name="nimage1" type="file" size="60"  style="font-family:Arial; font-size:12px;"></td>
</tr>
<tr bgcolor="#FFFFFF">
	<td valign="top" align="center" colspan="2">
    <input type="submit" name="submit" value=" Submit " class="button">
    </td>
</tr>				  					  
</table>
</form>
</body>
</html>
