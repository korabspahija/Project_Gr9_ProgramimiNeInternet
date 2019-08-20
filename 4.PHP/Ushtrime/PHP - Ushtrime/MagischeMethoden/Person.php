<?php
class Person {
	private $method = array();
	
	public function __call($name, $args) {
		if(stripos($name, 'set') !== false) {
			$methodSetName = substr($name, 3);
			$this->method['get' . $methodSetName] = $args[0];
		} else if(stripos($name, 'get') !== false) {
			$methodGetName = substr($name, 3);
			$name = 'get' . $methodGetName;
			if(array_key_exists($name , $this->method) &&  empty($args)) {
				return $this->method[$name];
			} else {
				echo "Nuk eshte ber set kjo metode <br />";
			}
		} else {
			echo "Te gjitha metodat duhet te kene parashtesen set ose get! <br />";
		}
	}
}
?>