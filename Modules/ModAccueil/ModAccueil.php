<?php
class ClassModule extends ModuleGenerique{
	function __construct(){
		require_once("Modules/ModAccueil/Controleur.php");
		$this->controleur = new Controleur();
		$this->controleur->accueil();
		$this->titre = "Accueil";
	}
}