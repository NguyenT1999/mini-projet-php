<?php
	$titre = 'Contactez-moi !';
	require_once('./includes/header.php');
	require_once('./traitement/traitement_contact.php');

	// Si formulaire envoyé : le traiter
	if (!empty($_POST)) {
		// On récupère le tableau renvoyé par notre fonction traitementFormulaire dans la variable $traitement.
		$traitement = traitementFormulaire($_POST);

		var_dump($traitement);
	}

?>

	<main>
		<h1>Contactez-moi !</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint vitae sit adipisci quos possimus, eveniet odit quisquam? Porro molestias modi impedit nesciunt similique dolorum, deleniti atque quas temporibus ut accusantium!</p>

		<form action="#" method="POST">
			<div>
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" />
				
				<span class="erreur">
<?php
if (isset($traitement) && !$traitement['succes'] 
	&& isset($traitement['erreurs']['nom'])) {
	echo $traitement['erreurs']['nom'];
}
?>
				</span>

			</div>

			<div>
				<label for="prenom">Prénom :</label>
				<input type="text" name="prenom" id="prenom" />

								<span class="erreur">
<?php
if (isset($traitement) && !$traitement['succes'] 
	&& isset($traitement['erreurs']['prenom'])) {
	echo $traitement['erreurs']['prenom'];
}
?>
				</span>
			</div>

			<div>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" />
			</div>

			<div>
				<label for="telephone">Téléphone :</label>
				<input type="text" name="telephone" id="telephone" />

								<span class="erreur">
<?php
if (isset($traitement) && !$traitement['succes'] 
	&& isset($traitement['erreurs']['telephone'])) {
	echo $traitement['erreurs']['telephone'];
}
?>
				</span>
			</div>

			<div>
				<label for="societe">Société :</label>
				<input type="text" name="societe" id="societe" />
			</div>

			<div>
				<button>Me contacter !</button>
			</div>
		</form>
	</main>

<?php require_once('./includes/footer.php'); ?>