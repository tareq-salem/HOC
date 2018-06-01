<?php
 session_start();
/*
 *
 */
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mon profil</title>
	</head>

	<body>
    Je suis connecté sous le nom : <strong><?= $_SESSION["username"];?></strong>
		J'ai XX ans.
		<a href="logout.php">Me déconnecter</a>
    <a href="login.php">retour au login</a>
	</body>

</html>