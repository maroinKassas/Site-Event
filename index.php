<?php
    ini_set("display_errors",1);
    require_once ("./include_generique.php");
 
    require_once 'utils/include.php';
	try{
	    $db = new PDO ($dns, $user, $password);
	    DBMapper::init($db);
	}
	catch(Exception $e){
	    echo "La connexion à la base de donnée à échoué<br/>".$e->getMessage();
	}
     
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
		<link rel="stylesheet" href="CSS/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="?module=Accueil">Site Event</a>
				</div>

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

