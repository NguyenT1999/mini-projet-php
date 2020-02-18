<?php
	$titre = 'Liste des contacts';
	require_once('./includes/header.php');

	// On inclue le fichier qui concerne les requêtes liées à la table contact.
	require_once('./db/req_contact.php');

	$contacts = recupererTout();
?>
	<main>
		<h1>Liste des demandes de contact</h1>
		
		<table>
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
					<th>N° téléphone</th>
					<th>Société</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($contacts as $contact) {
				?>
				<tr>
					<td><?php echo $contact['nom']; ?></td>
					<td><?php echo $contact['prenom']; ?></td>
					<td>
						<?php
							if (!empty($contact['email'])) {
								echo $contact['email'];
							} else {
								echo '/';
							}
						?>
					</td>
					<td>
						<?php
							if (!empty($contact['telephone'])) {
								echo $contact['telephone'];
							} else {
								echo '/';
							}
						?>
					</td>
					<td>
						<?php
							if (!empty($contact['societe'])) {
								echo $contact['societe'];
							} else {
								echo '/';
							}
						?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</main>

<?php require_once('./includes/footer.php'); ?>