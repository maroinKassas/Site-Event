<?php
class Controleur extends ControleurGenerique {
	function accueil() {
		require_once ("Modules/ModAccueil/Vue.php");
		$this->constructView("Vue", "accueil", array());
	}
}