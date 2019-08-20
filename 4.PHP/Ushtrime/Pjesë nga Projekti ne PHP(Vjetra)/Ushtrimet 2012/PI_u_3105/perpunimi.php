<?php
if(isset($_POST["dergo"]))
{
	$emri=$_POST["emri"];
	$mbiemri=$_POST["mbiemri"];
	$gjinia=$_POST["gjinia"];
	$komuna=$_POST["Komuna"];
	$komente=$_POST["Komente"];
	
	if($gjinia == "Mashkull")
	{
		$gjinia_kodi = 2;
	}
	else
	{
		$gjinia_kodi = 1;
	}
	
	mysql_connect('localhost', 'fiek', '12345678');
	mysql_select_db('test');
	$sql="INSERT INTO formularet (Emri, Mbiemri, Gjinia, Komuna, Komente) VALUES ('$emri', '$mbiemri', $gjinia_kodi, $komuna, '$komente')";
	if(mysql_query($sql))
	{
		echo "Te dhenat u futen me sukses";
		$sql="SELECT * FROM formulatet ORDER BY Emri, Mbiemri ASC";
		$rezultatet = mysql_query($sql);
		echo "<table>";
		echo "<tr><th>Emri</th><th>Mbiemri</th><th>Gjinia</th><th>Komuna</th><th>Komente</th></tr>";
		while($row = mysql_fetch_array($rezultatet))
		{
			echo "<tr><td>$row[Emri]</td><td>$row[Mbiemri]</td><td>$row[Gjinia]</td><td>$row[Komuna]</td><td>$row[Komente]</td>";
		}
	}
	else
	{
		echo "Ka ndodhur ajo qe nuk do te duhej!";
	}
	
	echo "Ky shfrytezues ka shtypur: $emri :: $mbiemri :: $gjinia :: $komuna :: $komente";
}
else
{
	echo "Ky fajll ...";
}
?>