<?php
class Modele extends DBMapper {
	static function inscription() {
		if(isset($_POST["button"])){
		
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


			
			$prenom =strtoupper($prenom[0]).strtolower(substr($prenom,1));
			$nom = strtoupper($nom[0]).strtolower(substr($nom,1));
			$ville  =  strtoupper($ville[0]).strtolower(substr($ville,1));

			$requeteAjout = self::$database->prepare("INSERT INTO Participant(civil,nom,prenom,adresse,codePostal,ville,jours,mois,annees,email) values(?,?,?,?,?,?,?,?,?,?)");
			$requeteAjout->execute(array($civil,$nom,$prenom,$adresse,$codePostal,$ville,$jours,$mois,$annees,$email));

			return array($nom,$prenom);
		}
	}
}
?>