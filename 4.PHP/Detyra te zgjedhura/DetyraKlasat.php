<?php
class Vetura {
	private $ngjyra;
	private $tipi;
	private $cmimi;
	
	public function getNgjyra() {
		return $this->ngjyra;
	}
	public function setNgjyra($ngjyra) {
		$this->ngjyra = $ngjyra;
	}
	
	public function __get($tipi) {
		return $this->tipi;
	}
	public function __set($tipi,$value) {
		$this->tipi = $value;
	}
	
	public function getCmimi() {
		return $this->cmimi;
	}
	public function setCmimi($cmimi) {
		$this->cmimi = $cmimi;
	}
}
class Audi extends Vetura {
	private $vitiProdhimit;
	
	public function getViti() {
		return $this->vitiProdhimit;
	}
	
	public function setViti($vitiProdhimit) {
		$this->vitiProdhimit = $vitiProdhimit;
	}
}


$objVetura = new Vetura;
$objVeturaAudi = new Audi;

/* $objVetura->setNgjyra('Kuqe');
$objVetura->tipi = '220';
$objVetura->setCmimi(550); */

$objVeturaAudi->setNgjyra('Kuqe');
$objVeturaAudi->tipi = '220';
$objVeturaAudi->setCmimi(550);
$objVeturaAudi->setViti(1992);

echo 'Ngjyra e vetures eshte : '.$objVeturaAudi->getNgjyra().'<br />';
echo 'Tipi e vetures eshte : '.$objVeturaAudi->tipi.'<br />';
echo 'Cmimi e vetures eshte : '.$objVeturaAudi->getCmimi().'<br />';
echo 'Viti prodhimit te vetures eshte : '.$objVeturaAudi->getViti().'<br />';

?>