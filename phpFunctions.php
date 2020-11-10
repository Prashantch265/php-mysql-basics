<?php 

	// functions

	function sayHello($name = 'shaun', $time = 'morning'){
        //shaun and morning are default value when there is no args passed it will be displayed
		echo "Good $time, $name";
	}

	//sayHello();
	//sayHello('mario');
	sayHello('yoshi', 'night');

	function formatProduct($product){
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";
		return "The {$product['name']} costs £{$product['price']} to buy <br />";
	}
	
	// formatProduct(['name' => 'gold star', 'price' => 20]);

	$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	echo $formatted;

?>