<?php
	$name = 'Alex';	//$name is used to declare any variable in php.
	$age = 21;
	if(strtolower($name) === 'alex') {	// strtolower is a function to convert a whole text to lower case.
		if($age >= 21) {
			echo '<b><i>you are over 21 years.</i></b><br>';	// html tags can be directly embedded inside the echo construct.
			if(1 === 1) {	// === is used to check for equality.
				echo '<b><i>yes 1 is equal to 1.</i></b><br>';
			}
		} else {
			echo 'you are not over 21 years.<br>';
		}
	} else {
		echo 'you are not Alex.<br>';
	}

	/*
		=== checks for value of the variables as well as their data types.
		== checks for only the value and not the data type.
	*/
?>