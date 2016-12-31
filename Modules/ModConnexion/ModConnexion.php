<?php
class ClassModule extends ModuleGenerique{
	function __construct(){
		
		$action = isset($_GET["action"]) ? $_GET["action"] : "Connexion";

		switch($action){
			case "Connexion":
				require_once("Modules/ModConnexion/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->connexion();
				break;
			case 'Deconnexion':
				require_once("Modules/ModConnexion/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->deconnexion();
				break;
			default:
				break;
		}
		$this->titre = "Site Event - Connexion";
	}
}