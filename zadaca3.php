<?php 

class House {
	public $name;
	public $color;
	public function __construct($name, $color) {
		$this -> name = $name;
		$this -> color = $color;
	}
	public function echoData() {
		echo "The color of the {$this -> name} is {$this -> color}";
	}
}
$blueHouse = new House("Rizaov's House", "blue");
$blueHouse -> echoData();


?>