<?php
	//mysqli_connect('localhost','roos','') or die('could not connect to the database');
	@mysqli_connect('localhost','roos','') or die('could not connect to the database');	//	here we can also use || instead of or.
	echo 'Connected';	//	this line will be executed when successfull connection has been established with the database.

	//	to make the code correct, enter root as username.

	/*
		from php7 onwards mysql_* functions are deprecated therefore, use mysqli_* as they are now used.
		to remove the system error when the mysqli_connect fails, use @mysqli_connect instead to override the default error.
	*/
?>
