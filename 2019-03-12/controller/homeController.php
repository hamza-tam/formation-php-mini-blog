<?php

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
	require 'views/home.php';
} else {
	require 'controller/loginController.php';
}