<html>
<head></head>
<body>
<h1>Ushtrimi 8 - Object Oriented Programming in PHP</h1>
<?php
//Detyra 1
//Te definohet nje klase ne PHP qe krijon nje objekt me metoda the pastaj ti perdore keto metoda
class Ariu{
	//Vetite
	public $emri;
	public $pesha;
	public $mosha;
	public $gjinia;
	public $ngjyra;
	//Metodat
	public function ngrenia()
	{
		echo $this->emri. " eshte duke ngrene...\n";
	}
	public function vrapimi()
	{
		echo $this->emri. " eshte duke vrapuar...\n";
	}
	public function flen()
	{
		echo $this->emri. " eshte duke fjetur...\n";
	}
}

$babai = new Ariu;
$babai->emri = "Ariu Baba";
$babai->mosha = 8;
$babai->gjinia = "Mashkull";
$babai->ngjyra = "I Bardhe";
$babai->pesha = 300;

$nena = new Ariu;
$nena->emri = "Ariu Nene";
$nena->mosha = 8;
$nena->gjinia = "Femer";
$nena->ngjyra = "I Bardhe";
$nena->pesha = 250;

$femiu = new Ariu;
$femiu->emri = "Ariu Femije";
$femiu->mosha = 3;
$femiu->gjinia = "Mashkull";
$femiu->ngjyra = "I Bardhe";
$femiu->pesha = 200;

$babai->vrapimi();
echo "<br>";

$nena->ngrenia();
echo "<br>";

$femiu->ngrenia();
echo "<br>";

$babai->flen();
echo "<br>";

$nena->flen();
echo "<br>";

$femiu->flen();
echo "<br>";

//Detyra2
//Nje klase me emrin Librat me funksionet Cmimi dhe Titulli dhe permes Get/SET me vendos vlera
class Librat
{
	public $Cmimi;
	public $Titulli;

	public function setCmimi($Cmimi) {
    $this->Cmimi = $Cmimi;
	}

	public function setTitulli($Titulli) {
    $this->Titulli = $Titulli;
	}

	public function getCmimi() {
  	return $this->Cmimi;
	}

	public function getTitulli() {
  	return $this->Titulli;
	}
}

echo "<br><br>";

$Fizika = new Librat;
$Matematika = new Librat;
$Kimia = new Librat;

$Fizika->setCmimi(2.50);
$Fizika->setTitulli("Fizika per klasen e 9-te");

$var = $Fizika->getTitulli();
echo "$var";
echo "<br><br>";
//Detyra3
class AriuV2{
	//Vetite
	public $emri;
	public $pesha;
	public $mosha;
	public $gjinia;
	public $ngjyra;

	public function __construct()
	{
		$this->mosha = 1;
		$this->pesha = 100;
		$this->ngjyra = "I zi";
	}
	public function AriuV2()
	{
		$this->mosha = 1;
		$this->pesha = 100;
		$this->ngjyra = "I zi";
		$this->gjinia = "Mashkull";
	}
}

$femiu = new AriuV2();
$femiu->emri = "Ariu Femije";

echo $femiu->emri. " eshte ".$femiu->ngjyra. " dhe ka gjinine: ".$femiu->gjinia;
//echo "<br><br>";
//Detyra4
/*class Konsumatori{
	public $name;
	public $data = array();
	public function __set($dt,$vl){
		$this->data($dt) = $vl;
	}
	public function __get($dt){
		return $this->data($dt);
	}
}

$c = new Konsumatori;
$c->name = "Artan";
$c->email = "artan@gmail.com";
echo $c->email;*/
//Ne shembullin e mesiperm kur artan@gmail.com eshte caktuar per email ne kete moment eshte thirrur metoda magjike "__set"
//keshtu vlera e variables dhe emri i variables kane kaluar ne variablen dt te kesaj metode kurse vlera te parametri i dyte value
echo "<br><br>";
//Detyra6
//Te shkruhet nje klase qe paraqet mesazhin "Pershendetje une jam Petriti", ku Petriri eshte vlera e argumentit te nje metode mbrenda klases
class Test{
	public $emri;

	public function setEmri($emri) {
    $this->emri = $emri;
	}
}
$d = new Test;
$d->setEmri("Petriti");
echo "Pershendetje une jam ".$d->emri;
echo "<br><br>";
//Detyra7
class A{
	var $atributi_A;
	function funk_A()
	{
		print "<br>".$this->atributi_A;
	}
}
class B extends A
{
	var $atributi_B;
	function funk_B()
	{
		print "<br>".$this->atributi_B;
	}
}

?>
</body>
</html>