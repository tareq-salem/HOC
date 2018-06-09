<?php
        // on garde la session ouverte qui était en mémoire
session_start();
// puis on détruit
session_destroy();

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Déconnexion</title>
</head>

<body>

<a href="login.php">Retourner sur la page de connexion</a>
</body>
</html>