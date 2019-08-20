<?php
class Personi {
	//vetit e nje njeriu
	private $emri; //var eshte njesoj si public
	private $mbiemri;// mundet vetem brenda klase mu perdsor
	protected $mosha;//mundet mu perdor brenda klases si dhe ne nkalsat femi
	public $nrLeternjoftimi;//eshte publice mund te perdoret kudo

	public function setEmri($name) {
		$this->emri = $name;
	}
	public function setMbiemri($lastname) {
		$this->mbiemri = $lastname;
	}
	public function setMosha($age) {
		$this->mosha = $age;
	}
	public function setNrLeternjoftimit($nr) {//shkruhet kur thirret jasht klase
		$this->nrLeternjoftimi = $nr;
	}

	public function getEmri() {
		return $this->emri;
	}
	public function getMbiemri() {
		return $this->mbiemri;
	}
	public function getMosha() {
		return $this->mosha;
	}
	public function getNrLeternjoftimit() {
		return $this->nrLeternjoftimi;
	}
}

/*$objPr = new Personi();
$objPr->setEmri('Faton');//kur kemi te deklaruar si privat dhe protected
echo $objPr->getEmri();*/
/*$objPr->emri = 'Fatlumi';//kur esht publik i qasemi ne ket menyr
echo $objPr->emri;*///kur jan publice ose var mund ti qasem ne kete menyr

?>


<?php 
class Studenti extends Personi {
	//funksionet magjike te php
	/*public function __get($name){
		return $this->name;
	}
	public function __set($name, $value){
		$this->name = $value;
	}*/
}

$objPr = new Studenti();
$objPr->setEmri('Fatlumi');
echo $objPr->getEmri();

?>