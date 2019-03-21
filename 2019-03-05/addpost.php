<?php

session_start();

if (isset($_SESSION["id"])) {

	if (isset($_POST['title'])) {

		$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");

		extract($_POST);

		$request = $pdo->prepare("insert into posts (title, content) values (:title, :content)");
		$request->execute(array(
			'title' => $title,
			'content' => $content
		));

	} else {

?>

<html>
	
	<head>
		
	</head>

	<body>

		<form action="addpost.php" method="POST">
			<label>Email</label>
			<input type="text" name="title" />

			<textarea name="content"></textarea>

			<input type="submit" value="Se connecter" />


		</form>

	</body>

</html>

<?php


	}

} else header("Location: login.php");