<?php
	//using requiremind's PHP MVC format - http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/
	require_once('connection.php');
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action 	= $_GET['action'];
	}
	else {
		$controller = 'account';
		$action		= 'login';
	}
	
	require_once('views/layout.php');
?>