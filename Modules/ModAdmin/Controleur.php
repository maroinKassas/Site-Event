<?php
class Controleur extends ControleurGenerique {
	function administration() {
		require_once ("Modules/ModAdmin/Vue.php");
		require_once ("Modules/ModAdmin/Modele.php");
		$var = Modele::administration();
		$this->constructView("Vue", "administration", array($var));
	}
}