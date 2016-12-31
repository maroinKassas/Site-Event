<?php

class Controleur extends ControleurGenerique {
	function name() {
		require_once ("Modules/ModName/Vue.php");
		require_once ("Modules/ModName/Modele.php");
		$var = Modele::name();
		$this->constructView("Vue", "name", array($var));
	}
}