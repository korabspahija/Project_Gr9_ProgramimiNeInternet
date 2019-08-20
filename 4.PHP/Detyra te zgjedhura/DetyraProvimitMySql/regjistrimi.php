
<?php
/* 
Krijoni nje fajll te vecante qe duhet te shtohet(perfshihet) ne secilin fajll tjeter qe krijoni.
Ky fajll te quhet konektimi.php dhe duhet te:
-Krijoje nje koneksion me baze te dhenave test,e cila ka ne permbajtje tabelen Perdoruesit, 
e cila tabel ne permbajtje ka fushat : PERDORUESI varchar(50), Password char(40),
dhe TEL VARCHAR(10).Shenim:Fsha Perdoruesi duhet te jete unike.
a)Fillimisht perfshini fajllin konektimi.php ne nje fajll tjeter punues, me emrin regjistrimi.php.
b)Shkruani ne kete fajll(regjistrimi.php) nje forme e cila ne dalje do te permbaje 3 fusha: 
Perdoruesi,Password, dhe telefoni.Keto fsuha duhet te dergohen me metoden post ne te njejtin fajll, 
e cila duhet te kujdeset qe te fus(insert) keto te dhena ne bazen Baza respektevisht tabelen perdoruseit.
c)Nese Perdoruesi egziston,INSERT pyetesori duhet te deshtoj sepse fusha perdoruesi eshte unike.
d)Para se te provoni te fusni te dhenat  ju duhet te pyesni bazen e te dhenave dhe nese perdoruesi 
egziston te shfaqet mesazhi qe ka ndodhur gabim dhe fushat te jen te zbrazeta
e)Si hap i fundit realizoni edhe futjen te te dhenave ne bazen e te dhenave permes PHP. 
*/

include('konektimi.php');
session_start();
if(isset($_POST['add'])) {
	$insert = true;
	$perdorusi = $_POST['Perdoruesi'];
	$passwordi = $_POST['Password'];
	$tel = $_POST['Telefoni'];


	$select="SELECT * FROM Perdoruesit";

//Me ane te kesaj pjese ne e bejm "perdorusi" unike
	$rez=mysql_query($select, $conn);
	
	if(mysql_num_rows($rez) > 0){
			while($row=mysql_fetch_row($rez)){
				if($row[0] == $perdorusi){
				$insert = false;
			}
		}
	}

	if($insert){
		$sql ="INSERT INTO Perdoruesit(PERDORUSI,Password,TELEFONI)VALUES('$perdorusi','$passwordi','$tel')";
		$retval = mysql_query( $sql, $conn );
		$_SESSSION['perdoruesi'] = $perdorusi;
		
		if(isset($_POST['check'])) {
			setcookie("username",$perdorusi,time()+3600);
		}

		echo"Perdorusi u regjistrua me sukses";
	} else {
		echo 'Ky perdorues ekziston';
		session_destroy();
	}
}

if(isset($_COOKIE['username'])){
	$username=$_COOKIE["username"];
	echo"Jeni i lloguar si $username";
} else if(isset($_SESSSION['perdoruesi'])){
	$username=$_SESSION["perdoruesi"];
	echo"Jeni i lloguar si $username";
} else {
?>


<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr><td>Perdoruesi:</td><td><input name="Perdoruesi" type="text" id="Perdoruesi"><br></td></tr>
		<tr><td>Password:</td><td><input name="Password" type="password" id="Password"><br></td></tr>
		<tr><td>Telefoni:</td><td><input name="Telefoni" type="text" id="Telefoni"><br></td></tr>
		<tr><td>Remember:<input type='checkbox' name='check'><br></td></tr>
		<tr><td><input name="add" type="submit" id="add" value="Shto Studentin"></td></tr>
	</table>
</form>
<?php
}
?>
