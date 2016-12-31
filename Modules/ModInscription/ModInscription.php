<?php
class ClassModule extends ModuleGenerique{
	function __construct(){

		$action = isset($_GET["action"]) ? $_GET["action"] : "ViewInscription";

		switch($action){
			case "ViewInscription":
				require_once("Modules/ModInscription/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->viewInscription();
				break;

			case "Inscription":
				require_once("Modules/ModInscription/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->inscription();
				break;

			default:
				break;
		}
	
		$this->titre = "Site Event - Inscription";
	}
}