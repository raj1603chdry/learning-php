<?php
	function myName () {
		echo 'My name is Raj Choudhary';
	}

	function add ($number1, $number2) {
		echo $number1 + $number2;
	}

	function displayDate ($day, $date, $year){
		echo $day.' '.$date.' '.$year;
	}

	function multiply ($number1, $number2) {
		return $number1 * $number2;
	}

	function divide ($number1, $number2) {
		return $number1 / $number2;
	}

	$num1 = 10;
	$num2 = 20;

	$dy = 'Monday';
	$dt = 16;
	$yr = 1998;

	echo divide(multiply(10, 10), multiply(2, 2));
	echo '<br>'; 
	myName();
	echo '<br>';
	add($num1, $num2);
	echo '<br>';
	displayDate($dy,$dt,$yr);
?>