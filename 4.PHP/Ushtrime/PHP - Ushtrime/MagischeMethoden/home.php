<?php
	include_once 'Person.php';
	$studenti = new Person();
	$studenti->emri = 'Fatlum';
	$studenti->mbiemri = 'Berisha';
	$studenti->nrIndeksit = '070362011';
	
	$profesori = new Person();
	$profesori->setEmri('Jetullah');
	$profesori->setMbiemri('Pepaj');
	$profesori->setNrIdentifikues('123789456');
?>	

<html>
<head>
<link href="css/global.css" type="text/css" media="all" rel="stylesheet" />
</head>
<body>
<div id="my-site">
	<div id="my-header">
		<div id="header">
			<nav id="nav">
				<ul id="navi">
					<li><a href="home.php">Home</a></li>
					<li><a href="home.php">About as</a></li>
					<li><a href="home.php">Services</a></li>
					<li><a href="home.php">Forums</a></li>
					<li><a href="home.php">Login</a></li>
				</ul>
			</nav>
			
			<div id="image">
				<h1 id="log">My WebSite</h1>
				<img id="foto-size" src="img/laptop.png"/>
			</div>
		</div>
	</div>
	
	<div id="my-content">
		<div id="content">
			<h1>Studenti</h1>
			<p>Emri i studentit eshte : <?php echo $studenti->emri ?></p>
			<p>Mbiemri i studentit eshte : <?php echo $studenti->mbiemri ?></p>
			<p>Numri i index-it te studentit eshte : <?php echo $studenti->nrIndeksit ?></p>
			<h1>Profesori</h1>
			<p>Emri i profesorit eshte :  <?php echo $profesori->getEmri() ?></p>
			<p>Mbiemri i profesorit eshte : <?php echo $profesori->getMbiemri() ?></p>
			<p>Numri identifikues i profesorit eshte : <?php echo $profesori->getNrIdentifikues() ?></p>
		</div>
	</div>
	
	<div id="my-footer">
		<div id="footer"></div>
	</div>
</div>

</body>
</html>