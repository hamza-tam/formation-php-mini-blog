<?php

session_start();

if (isset($_GET['page']) && !empty($_GET['page'])) {

	extract($_GET);

	if ($page == 'index') {
		require 'controller/homeController.php';
	} else if ($page == 'login') {
		require 'controller/loginController.php';
	} else {
		echo 'error 404';
	}

} else {
	echo 'error 404';
}