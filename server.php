<?php
	
	include 'header1.inc.php';

	if(isset($_POST['submit'])) {
		echo 'server1';
	}

	$script_name = $_SERVER['SCRIPT_NAME'];	//	to get the name of the current script.
	$host_name = $_SERVER['HTTP_HOST'];	//	to get the name of the hosting server.

	echo '<br>';
	echo $script_name;
	echo '<br>';
	echo $host_name;

	/*
		$_SERVER environmental variables are used to create configuration files so that some important data can be stored in them.
		This will enable us to transfer files easily between servers because then we will not have to update our links as they will be updated automatically provided we maintain the directories tree.
	*/
?>