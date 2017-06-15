<?php
	$string = 'This is an example string.';
	$string_word_count = str_word_count($string);	//	here the second argument is 0 which is the default value.
	$string_word_count1 = str_word_count($string, 1);	//	1 display the key as the index position and the work as the value.
	$string_word_count2 = str_word_count($string, 2);	//	2 display the starting position of the word as the key and the word as the value.
	/*
		even a third argument can be passed after the numberic argument to specify any element of the sentance that should be counted as a word.
		As in the given case the '.' or any special character after the last word 'string'.
		If more than one character are to be included that write it as the third argument within '' as a single word without any separator.
	*/

	echo $string_word_count;
	echo '<br>';
	print_r($string_word_count1);	//	print_r is used to display the elements of the array.
	echo '<br>';
	print_r($string_word_count2);

	$string_shuffled = str_shuffle($string);	//	this function is used to randomly shuffle the characters in the string.

	echo '<br>';
	echo $string_shuffled;
	echo '<br>';

	$number = '0123456789';
	$otp = substr(str_shuffle($number), 0, 6);

	echo $otp;
	/*
		here str_shuffle is used to randomly shuffle the string from $number.
		substr is used to extract a part of the passed string where the second argument is the starting position
		from where the extraction should start and the third argument is the total number of characters to be extracted.
	*/

	$reverse = strrev($string);	//	strrev reverses the passed string.

	echo '<br>';
	echo $reverse;

	$string1 = 'This is my code on php which is a server side language';
	$string2 = 'This is my code on php which i\'m making for my dbms project';

	similar_text($string1, $string2, $result);	//	the similar_text is used for checking the percentage of similarity between two strings. Here the first two arguments are matched and the result is stored in the third argument.

	echo '<br>';
	echo $result;

	$string_length = strlen($string);	//	strlen is used to count the number of characters in a given string.

	echo '<br>';
	echo $string_length;

	/*
		we also have
		trim() for removing any whitespace from the rightside and leftside of the string.
		rtrim() for removing any whitespace from the rightside of the string.
		ltrim() for removing any whitespace from the leftside of the string.

	*/

	$string3 = 'This is a <img src="image.jpg"> string.';
	$string_slashes = htmlentities(addslashes($string3));
	/*
		htmlentities() is a function to stop the html code from within the string from executing.
		addslashes() is used to add slashes in the string to escape various characters for security purposes.
		stripslashes() is used to remove the added slashes.
	*/

	echo '<br>';
	echo $string_slashes;
	echo '<br>';

	$string4 = 'This Is An Example String.';
	$string_lower = strtolower($string4);
	$string_upper = strtoupper($string4);

	echo $string_lower;
	echo '<br>';
	echo $string_upper;
?>
