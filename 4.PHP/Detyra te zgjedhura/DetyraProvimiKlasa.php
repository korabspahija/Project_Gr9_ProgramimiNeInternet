<?php 
//Definoni një klasë të thjeshtë në PHP, e cila shfaq një mesazh mirëseardhje sikur në 
//vijim: "Përshëndetje, jemi në provimin nga lënda Programimi në Internet", ku 
//"Programimi në Internet" është një vlerë e argumentit të një metode (funksioni) brenda vetë klasës.
class provimi{
	
	private $teksti;
	public $teksti2;
	
	//pjesa qe duhet te shtyper brenda klases
	public function Teksti2(){
		$this->teksti2=("sot po mbahet provimi ne lenden");
		echo $this->teksti2;
	}

	//pjesa qe duhet te shtypet ne objekt
	public function setTeksti($var){
		$this->teksti=$var;
	}
	public function getTeksti(){
		return $this->teksti;
	}
}

$objprovime = new provimi();
$objprovime->Teksti2();
$objprovime->setTeksti(" Programimi ne internet");
echo $objprovime->getTeksti();

?>