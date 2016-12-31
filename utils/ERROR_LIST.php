<?php
class Error {
	function AlreadyConnected() {
		echo "Vous êtes déjà connecté !<br/>";
	}
	
	function postError($nom){
		echo "Veuillez renseignez le ".$nom;
	}
	
	function connexion() {
		echo "Erreur lors de la connexion<br/>";
	}
	function noPermission($action = "éffectuer cette action", $grade="none"){
		
		if($grade==="none")
			echo "Vous n'avez pas la permission pour ".$action.".";
		else
			echo "Vous devez être ".$grade." pour ".$action.".";
			
	}
	function noGet($val){
		echo "ERREUR: ".$val;
	}
}