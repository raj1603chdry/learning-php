<?php
	include 'header.inc.php';

	/*
		this is the syntax for including header file. "" can also be used instead of ''.
		if the specified header file doesn't exist, then also this file will be executed with an error.
		to solve this problem, we can use require 'header.inc.php', this will not lead to any change in the execution, if the file exists but it will kill the page if the file doesn't exist.

		we can also use require and include multiple times in a file, because f which it will be loaded in the file multiple times also.

		we can use require_once or include_once to ensure that if a header file has already been loaded, then it won't be loaded again.
	*/

	$string = 'Welcome to my webpage.';

	echo $string;
	echo '<br>';
	echo $string1;	//	this variable is available in the header.inc.php file and it can be accessed here.
?>
