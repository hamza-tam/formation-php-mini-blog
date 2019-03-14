<?php

include 'models/user.php';

if (isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {

	extract($_POST);

	$user = new User();
	$output = $user->exists($email, $password);
	
	if ($output != false) {
		$_SESSION['id'] = $output;
		require 'controller/homeController.php';

	} else {
		require 'views/login.php';		
	}

} else {
	require 'views/login.php';
}