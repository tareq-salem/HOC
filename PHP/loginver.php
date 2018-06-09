<?php
session_start();

if(!empty($_SESSION['username'])){
    header('refresh:3 ;url=profil.php');
    exit();
}
var_dump($_SESSION);
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>

	<body>
		
		<form action="traitement.php" method="post">
			<label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" id="username" />

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" id="password" />

            <input type="submit" name="submit" />
		</form>

	</body>
</html>
