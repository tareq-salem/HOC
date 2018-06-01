<?php
// Je dois faire session_start() pour avoir accès à la variable $_SESSION
session_start();
include("includes/header.php");
?>

		Je suis connecté sous le nom : <?php echo $_SESSION['username']; ?>
		J'ai <?php echo $_SESSION['age'] ?> ans.

		<a href="logout.php">Me déconnecter</a>

	<?php include("includes/footer.php"); ?>
