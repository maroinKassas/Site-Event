<?php
class ClassModule extends ModuleGenerique{
	function __construct(){
		
		$action = isset($_GET["action"]) ? $_GET["action"] : "ACTION";

		switch($action){
			case "ACTION":
				require_once("Modules/ModName/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->name();
				break;
			case 'variable':
				# code...
				break;

			default:
				break;
	
		$this->titre = "Site Event - Name";
	}
}