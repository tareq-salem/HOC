<?php
// Je dois utiliser session_start() pour pouvoir interagir avec
session_start();

// Et maintenant je détruis complètement la session
session_destroy();
include("includes/header.php");
?>

		<a href="login.php">Retourner sur la page de connexion</a>

	<?php include("includes/footer.php"); ?>
