<?php
	$food = array('pizza','pasta','bread');	//	here array() is a function, which is used to create an array of comma-separated values within it.

	echo $food[1];
	echo '<br>';
	print_r($food);

	$food[3] = 'bruchetta';

	echo '<br>';
	print_r($food);
	echo '<br>';

	$food1 = array('pizza'=>200, 'pasta'=>250, 'salad'=>50);	//	here we have created something like a map of java (or c++) or set of python which is of the form key=>value. Now instead of the traditional index, the new key is used to find the associated value. This tyoe of array is known as an associative array.

	print_r($food1);
	echo '<br>';

	$food2 = array(
					'healthy'=>array('salad','vegetable','seeds'),
					'unhealthy'=>array('pizza','fried chicked','icecream')
					);
	//	this is the technique to form multi-dimensional arrays in PHP and accessing the individual elements is the same as that in other programming languages.

	print_r($food2);
	echo '<br>';
	echo $food2['healthy'][1];
	echo '<br>';
	echo $food2['unhealthy'][2];
	echo '<br>';
	echo '<br>';

	foreach ($food2 as $element => $inner_array) {
		echo '<strong>'.$element.'</strong><br>';
		foreach ($inner_array as $item) {
			echo $item.'<br>';
		}
	}
?>
