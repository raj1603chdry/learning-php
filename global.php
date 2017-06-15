<?php
	$user_ip = $_SERVER['REMOTE_ADDR'];

	function echo_ip () {
		global $user_ip;
		/*
			here global keyword followed by the variable name, makes the variabe behave as a global variable for the given function. If we don't include this line, we won't be able to access the value of the variable.
		*/
		echo 'Your IP address is: '.$user_ip;
	}

	echo_ip();
?>
