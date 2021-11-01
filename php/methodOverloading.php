<?php
ini_set("display_errors", 1);
class GFG {
	
	
	public function __call($name, $arguments) {print_r($arguments);exit;
		
		echo "Calling object method .$name.\n" .$arguments[0]+$arguments[1];
			
	}

	
	public static function __callStatic($name, $arguments) {
		
		echo "Calling static method '$name' "
			. implode(', ', $arguments). "\n";
	}
}

// Create new object
$obj = new GFG;

$obj->runTest(10,5);

// GFG::runTest('in static context');

?>
