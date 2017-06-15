<?php
	//$agent = $_SERVER['HTTP_USER_AGENT'];
	$browser = get_browser(null, true);

	/*
		in get_browser() the first argument takes the agent of the visitor and the second true or false depending upon we want
		the answer to be returned in array or not.
	*/

	print_r($browser);
	echo '<br><br><br>';

	//to print only the browser name
	
	echo $browser['browser'];
?>