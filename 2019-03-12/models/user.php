<?php

class User {

	function exists($email, $password) {

		$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");

		$request = $pdo->prepare("SELECT * FROM users WHERE email=:email and password=:password");
		$request->execute(array(
			"email" => $email,
			"password" => $password
		));

		$users = $request->fetchAll();

		if (count($users) == 1) {
			return $users[0]['id'];
		} else {
			return false;
		}
	}

}