<?php
class Modele extends DBMapper{
	static function connexion() {
		$message = "";
		if(isset($_POST["connexion"])){
			
			$id = htmlentities(strip_tags($_POST["id"]), ENT_QUOTES);
			$pwd = htmlentities(strip_tags($_POST["pwd"]), ENT_QUOTES);

			$requeteSelect = self::$database->prepare("SELECT * FROM Administrateur WHERE identifiant = ?");
			$requeteSelect->execute(array($id));
			$data = $requeteSelect->fetch();

			if($data["identifiant"] == null  ){
				$message = "<p>Identifiant ou mot de passe incorrect !</p>";
			}elseif ($data["mdp"] != sha1($pwd)) {
				$message = "<p>Identifiant ou mot de passe incorrect !</p>";
			}else{
				var_dump($data);
				die();
				$_SESSION["identifiant"] = "95rzTRHRTHg86ertt32687741YUKYR4dzeffezzfa";
				Modele::redirige();
			}
		}
		return $message;
	}
	static function deconnexion(){
        $message = "";
        session_destroy();
        ConnexionModele::redirige();
         
        return $message;
    }

    static function redirige(){
        ?>
            <SCRIPT LANGUAGE="JavaScript">
                document.location.href="?module=Admin"; 
            </SCRIPT>
        <?php
    }
}
?>