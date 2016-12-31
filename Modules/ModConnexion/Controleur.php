<?php

class Controleur extends ControleurGenerique {
	function connexion() {
		require_once ("Modules/ModConnexion/Vue.php");
		require_once ("Modules/ModConnexion/Modele.php");
		$message = Modele::connexion();
		$this->constructView("Vue", "connexion", array($message));
	}
	function deconnexion() {
		require_once ("Modules/ModConnexion/Vue.php");
		require_once ("Modules/ModConnexion/Modele.php");
		$message = Modele::deconnexion();
		$this->constructView("Vue", "connexion", array($message));
	}
}