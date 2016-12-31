<?php
class Modele extends DBMapper{
	static function administration() {

		if(isset($_POST["valider"])){
			$requeteUpdate = self::$database->prepare("UPDATE Participant SET statut = ? WHERE idParticipant = ?");
			$requeteUpdate->execute(array("true",$_POST["idParticipant"]));
		}elseif(isset($_POST["refuser"])){
			$requeteUpdate = self::$database->prepare("UPDATE Participant SET statut = ? WHERE idParticipant = ?");
			$requeteUpdate->execute(array("false",$_POST["idParticipant"]));
		}elseif(isset($_POST["supprimer"])){
			$requeteDelete = self::$database->prepare("DELETE FROM Participant WHERE idParticipant = ?");
			$requeteDelete->execute(array($_POST["idParticipant"]));
		}else{
			if(isset($_POST["modifier"])){
		
				$civil = htmlentities(strip_tags($_POST["civil"]), ENT_QUOTES);

				$nom =  htmlentities(strip_tags($_POST["nom"]), ENT_QUOTES);
				$prenom =  htmlentities(strip_tags($_POST["prenom"]), ENT_QUOTES);

				$adresse  = htmlentities(strip_tags($_POST["adresse"]), ENT_QUOTES);
				$codePostal	 =  htmlentities(strip_tags($_POST["codePostal"]), ENT_QUOTES);
				$ville =  htmlentities(strip_tags($_POST["ville"]), ENT_QUOTES);

				$jours =  htmlentities(strip_tags($_POST["jours"]), ENT_QUOTES);
				$mois =  htmlentities(strip_tags($_POST["mois"]), ENT_QUOTES);
				$annees =  htmlentities(strip_tags($_POST["annees"]), ENT_QUOTES);

				$email = htmlentities(strip_tags($_POST["email"]), ENT_QUOTES);

				$requeteUpdate = self::$database->prepare("UPDATE Participant SET civil = ?,nom = ?,prenom = ?,adresse = ?,codePostal = ?,ville = ?,jours = ?,mois = ?,annees = ?,email = ? WHERE idParticipant = ?");
				$requeteUpdate->execute(array($civil,$nom,$prenom,$adresse,$codePostal,$ville,$jours,$mois,$annees,$email,$_POST["idParticipant"]));
			}		
		}

		$requeteSelect = self::$database->prepare("SELECT * FROM Participant");
		$requeteSelect->execute(array());
		$row = $requeteSelect->fetchAll();

		return $row;
	}
}
?>