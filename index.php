<?php
    ini_set("display_errors",1);
    require_once ("./include_generique.php");
 
    require_once 'utils/include.php';
	try {  
			
			$strConnection = 'mysql:host=localhost;dbname=siteevent';
			$pdo = new PDO($strConnection, 'root', '');
			
	}catch(PDOException $e) {
		echo "La connexion à la base de donnée à échoué<br/>".$e->getMessage();
	}

	// try{
	    // $db = new PDO ($dns, $user, $password);
	    // DBMapper::init($db);
	// }
	// catch(Exception $e){
	    // echo "La connexion à la base de donnée à échoué<br/>".$e->getMessage();
	// }
     
    session_start();
     
    $module = isset($_GET["module"]) ? $_GET["module"] : "Accueil";
    $login = isset($_SESSION["identifiant"]) ? $_SESSION["identifiant"] : NULL;

    switch($module){
		case "Accueil" :
			require_once("Modules/ModAccueil/ModAccueil.php");
			break;
		case 'Admin':
			if($login == "9532687741184dzeffezzfa"){
				require_once("Modules/ModAdmin/ModAdmin.php");	
			}else{
				require_once("Modules/ModConnexion/ModConnexion.php");
			}
			break;
		default :
			require_once("Modules/Mod".$module."/Mod".$module.".php");
			break;
	}

	$moduleObjet = new ClassModule();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>
			<?php
				echo $moduleObjet->getTitre();
			?>
		</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="CSS/style.css">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAi3RaACpglQDrtEgAube0AIuQmwDCgTgAspBTAPn5+QC2kU0Ar3AzADis5wBkgXkA6+vrACY4VQBzc3MA46pGAOStRgAtPFgAtLS1AHh4eQC1tLUA9PT0AKKPdQB4gJEAu5I/ABsbGwCPmJkAvL2+AObm5gCqqqoAs5VaAC0xQQD9/f0AwcHBAERvhAAkJCQAs7OzADY/UADh4eEAaWlpAPj4+ACgdUQAvby8APz8+wCee1YAtJdhAK6urgA/cIgAM5nMANCRPQBNTU0AJmCPANzc3ABkZGQAjo6PAPPz8wDqs0gAX3NkALu5tAAcL08Azs7OAElAOQCkqqwAvLy9AL28vQC0cjMA6urrANjX1wAlOVsALlt4AO7u7gCysrIAm203AKGgoQCNjY0AgIJbAF1LPwDg4OAAe3t8AKSkpAAoZpkA9/f3AFBYZgAyKi8AbW9iALmljADS0tIAoJWBAJCZqADfpUQA1tbVAHJ1awDExMQAl2c4ADNadgA3XW0AyZxFALWbeACkoJkAysnKAPLy8gCibDUAwLiqAEl9lgBROywAvLu8AMO8rQDS0dAAl5aXAGGAewDX1tYAxsTFANra2QB0gGkAysbCACldkgC9tKgApKGdALa2twA1otgAqqGUAKOjowDCfzgAwYI4APb29gB/ZzoAqaemAMO8rgDap0MAv7/AAHp5VQCcmZgA////AIeHhwCMbEkAxJlHACg7WwChnJgARFBjAPHx8QDJyMkA1JY+AJqNdQDttUkAn3g3AEp7kgD6+voAvr6+AMS+tQDV1dUA3qpEAMyMPAAhISEA7OzsAChWiAA9NS8ArIpAAMfHxwDnrkcAfYJfAKinqAAoL0IAq6urADouLQD+/v4AhoaGAChVhgAtXHcA2dnZAJ2dnQB7f2AA8PDwAJNwRQB4eHgAV0xHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKVOU6mlpaWlhYWlpaUhAAB9N0UFmpoNDZqalhiJWQAAJTivDqRNdy9pVDwmHFAAACuCnoSii6YUEiBKZHpwAAClZYpmCpyuNj5CXn8WpQAApX0qBgEdHl1vh3stpaUAAKV1mK0omUGhGk9JfHOlAAClYo55JACqDwAzFzJWpQAAjFUMP41LUkOGNRtuXCwAAKWPcqhGMGiSI19gq1ilAAClZxB+UXSnmwI0kVqVpQAApX0JETp4Cwsxg58Hk6UAAKUIY2EDnaBMGTmIdiGlAAAiQD07H5eQkIEuBFejRwAAFRaUhaVsa4BbpaVqJ20AACkTcYWlpaWlhYWlREisAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAAA=" rel="icon" type="image/x-icon" />
		
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class=""><a href="?module=Accueil">Accueil</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="?module=Inscription"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
						<?php
							if(isset($_SESSION["login"])){
						?>
								<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</nav>

		<section>
			<div class="container">
				<?php
					$moduleObjet->display();
				?>
			</div>
		</section>

		<footer class="navbar navbar-inverse navbar-fixed-bottom">
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class=""><a href="?module=">Coordonnée</a></li>
						<li class=""><a href="?module=">Contact</a></li>
						<li class=""><a href="?module=">Facebook</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>

