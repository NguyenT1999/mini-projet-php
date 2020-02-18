<?php
	$time = time() + 86400;

	$couleur = 'clair';

	if (isset($_COOKIE['theme'])) {
		$couleur = $_COOKIE['theme'];
	}

	if (isset($_POST['theme'])) {
		if ($_POST['theme'] === 'sombre') {
			$couleur = 'sombre';
		} else {
			$couleur = 'clair';
		}

		setcookie("theme", $couleur, $time);
	}

?>