	<footer>Copyright 2019 - Tous droits réservés, création par Jeff.

		<form method="POST" action="#">
			<div style="margin-top: 20px;">
				<label for="theme">Thème du site</label>

				<select name="theme">
					<option value="clair" <?php if ($couleur === 'clair') { echo 'selected'; } ?>>Clair</option>
					<option value="sombre" <?php if ($couleur === 'sombre') { echo 'selected'; } ?>>Sombre</option>
				</select>

				<button type="submit">
					Changer
				</button>
			</div>
		</form>
	</footer>
</body>
</html>