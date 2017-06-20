<?php
	$string = 'This is a string.';

	if(preg_match('/is a/', $string)) {
		echo 'Match found.';
	} else {
		echo 'Match not found.';
	}

	/*
		preg_match() is used to implement the same logic of regexes as done in python.
	*/
?>
