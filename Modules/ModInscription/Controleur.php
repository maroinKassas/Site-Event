<?php
class Controleur extends ControleurGenerique {
	function viewInscription() {
		require_once ("Modules/ModInscription/Vue.php");
		$this->constructView("Vue", "viewInscription", array());
	}

	function inscription() {
		require_once ("Modules/ModInscription/Vue.php");
		require_once ("Modules/ModInscription/Modele.php");
		$var = Modele::inscription();
		$this->constructView("Vue", "viewInscriptionEffectue", array($var));
	}
}