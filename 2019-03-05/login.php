<?php

session_start();

if (isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
	
	$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");

	extract($_POST);

	$request = $pdo->query("select * from users where email='".$email."' and password='".$password."'");

	$users = $request->fetchAll();

	if (count($users) == 1) {
		echo "Connecte";
		$_SESSION["id"] = $users[0]["id"];
	} else {
		echo "Non connecte";
	}

} else {
	if (isset($_SESSION["id"])) {
		header("Location: index.php");
	} else {
?>

<html>
	
	<head>
		
	</head>

	<body>

		<form action="login.php" method="POST">
			<label>Email</label>
			<input type="text" name="email" />
			<input placeholder="Mot de passe" name="password" type="password" />

			<input type="submit" value="Se connecter" />


		</form>

	</body>

</html>

<?php
}}

?>