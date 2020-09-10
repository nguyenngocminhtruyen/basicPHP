<?php

class Circle{
	//properties
	private $r;
	
	//constructor function
	function __construct($temp){
		$this->r=$temp;
	}	

	//method
	function Area(){
		return round($this->r*$this->r*3.14, 2);
	}
	function Perimeter(){
		return round($this->r*2*3.14,2);	
	}
	
	//destructor
	
	function __destruct(){
		//echo "Destructor";	
	}
}


if(isset($argv[1]) and is_numeric($argv[1])){
	$test = new Circle($argv[1]);
	
	echo "\n Area is ";
	echo  $test->Area();
	echo "\n Perimeter is ";
	echo  $test->Perimeter();
	echo "\n";
}else{
	echo "\n Syntax: php file_name num_radius \n";
}


?>
