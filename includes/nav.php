<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a></li>
	<?php
	
		if(isset($_SESSION['utilisateur'])){
		$utilisateur = $_SESSION['utilisateur'];	
		echo 'Bienvenue '.$utilisateur['prenom'];
	} else {
		echo '<a href="./connexion.php"> Se connecter</a>';
	}

	?>
</ul>