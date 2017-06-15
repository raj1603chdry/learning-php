<?php
	$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];	//	this is used to get the actual ip address of the user than that of their hub or router.
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];	//	this is used to check if the user is using any proxy.
	$remote_addr = $_SERVER['REMOTE_ADDR'];	//	this is used to get the ip address of the visitor.
	$ip_block = '::1';


	if(!empty($http_client_ip)) {
		$ip_address = $http_client_ip;
	} else if(!empty($http_x_forwarded_for)) {
		$ip_address = $http_x_forwarded_for;
	} else {
		$ip_address = $remote_addr;
	}
?>