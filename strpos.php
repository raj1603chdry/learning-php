<?php
	$string = 'This is an example, which is a string.';
	$find = 'is';
	$find_length = strlen($find);
	$offset = 0;

	echo strpos($string, $find);	//	strpos return the starting position of the first instance of the occurence of the substring.
	//	a third argument can also be passed that specifies the starting position of the search.
	echo '<br>';

	while($string_position = strpos($string, $find, $offset)) {
		echo '<b>'.$find.'</b> found at '.$string_position.'<br>';
		$offset = $string_position + $find_length;
	}

	//	substr_replace(string, word, start, numberOfCharacters) can be used to replace the the words from start till noOfCharacters with the given word.
	//	str_replace(word looking for, word to replace with, string)

	$find_array = array('is', 'an', 'example');
	$replace_array = array('IS', 'AN', 'EXAMPLE');

	echo '<br>';
	echo str_replace('is', '', $string);
	echo '<br>';
	echo str_replace($find_array, $replace_array, $string);
?>