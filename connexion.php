<?php
	include('./traitement/changement_couleur.php');
	session_start();
?>


<form action='#' method="POST"> <!-- action sert a recuperer les infos du formulaire, GET= info qui transite dans l'url, POST= donnée passe dans un serveur-->
	<label for="prenom">identifiant :</label>
	<input type="text" id="prenom" name="prenom" value="<?php if(isset($_POST['prenom'])){ echo $_POST['prenom'];} ?>"> <!-- name="" est très important utile pour recuperer la donnée plus tard, contrairement à id="" qui est un selecteur css-->

<?php
	if(!empty($_POST['sub' ]) && empty($_POST['prenom'])){
		echo "<span style='color: red;'> Veuillez remplir l'identifiant.</span>";
	}
?>

	<label for="motdepasse">Mot de passe: </label>
	<input type="password" id="motdepasse" name="motdepasse" value="<?php if(isset($_POST['motdepasse'])){ echo $_POST['motdepasse'];} ?>">

<?php
	if(!empty($_POST['sub' ]) && empty($_POST['motdepasse'])){
		echo "<p style='color: blue;'> Veuillez remplir votre mot de passe.</p>";
	}
?>

	<input type="submit" id="sub" name="sub" value="Envoyer">
</form>

<?php

	if (!empty($_POST['sub'])) {
		if(!empty($_POST['prenom']) && !empty($_POST['motdepasse'])){
			$_SESSION['prenom'] = $utilisateur;
			header('Location: ./index.php');
		}else{
			echo 'Veuillez remplir tout le formulaire.';
		}
	}
?>