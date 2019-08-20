<?php
class klasa
{
	public $vlera1 = 42;
	public $vlera2 = 24;
	
	public function &getValue() {
		return $this->vlera1;
	}
}
$obj = new klasa();
$myValue1 = $obj->getValue();
echo $myValue1

?>