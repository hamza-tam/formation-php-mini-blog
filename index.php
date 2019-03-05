<html>
	
	<head>
		
	</head>

	<body>

		<a href="login.php">Se connecter</a>
		<a href="logout.php">Se deconnecter</a>
		
		<h1>Liste des articles</h1>

<?php

	$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");

	$request = $pdo->query("SELECT * FROM posts");

	$posts = $request->fetchAll();

	foreach ($posts as $post) {
		echo '<h2>'.$post['title'].'</h2>';
		echo  '<p>'.$post['content'].'</p>';
	}

?>

	</body>

</html>