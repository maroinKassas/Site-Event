<?php
class ClassModule extends ModuleGenerique{
	function __construct(){
		
		$action = isset($_GET["action"]) ? $_GET["action"] : "Administration";

		switch($action){
			case "Administration":
				require_once("Modules/ModAdmin/Controleur.php");
				$this->controleur = new Controleur();
				$this->controleur->administration();
				break;	

			default:
				break;
		}
		
		$this->titre = "Site Event - Administration";
	}
}

