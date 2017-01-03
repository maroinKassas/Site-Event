<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/', function () {
    return 'Hello world';
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});


$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'siteevent',
        'user' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ),
));


$app->get('/participant', function () use ($app) {
  $sql = "SELECT * FROM participant";
  $participant = $app['db']->fetchAll($sql);
  
	if(empty($participant)){
		
		$app->abort(204);
		
	}else return $app->json($participant);
});

$app->get('/participant/{idParticipant}', function ($idParticipant) use ($app) {
  $sql = "SELECT idParticipant, civil, nom, prenom, adresse, codePostal, ville, jours, mois, annees, email, statut FROM participant WHERE idParticipant = ?";
  $participant = $app['db']->fetchAssoc($sql, array((int) $idParticipant));
  
    if (!$participant) {
        $error = array(' ERREUR 404, the resource was not found.');

        return $app->json($error, 404);
    }

  return $app->json($participant);
  
})->assert('id', '\d+');

// $app->post('/participant/id/{idParticipant}', function ($idParticipant) use ($app){
	// $sql= " INSERT INTO `participant`(`idParticipant`, `civil`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `jours`, `mois`, `annees`, `email`, `statut`) VALUES (4,'homme','dupont','jean','reergr','75000','hihoihoi','6','5','1889','regerg@ht',NULL) WHERE idParticipant = ?";
	// $participant = $app['db']->fetchAssoc($sql, array((int) $idParticipant));
	// return $app->json($participant);
// });


$app->get('/participant/inscription/statut/{idParticipant}', function ($idParticipant) use ($app) {
	
	
		$sql = "SELECT statut FROM participant WHERE idParticipant = ?";
		$participant = $app['db']->fetchAssoc($sql, array((int) $idParticipant));
  
    if (!$participant) {
        $error = array(' ERREUR 404, the resource was not found.');

        return $app->json($error, 404);
    }

	return $app->json($participant);
  
})->assert('id', '\d+');

// $app->put('/participant/update/statut/{idParticipant}', function ($idParticipant, Request $request) use ($app) {
	
	// $sql = "UPDATE participant SET statut FROM participant WHERE idParticipant = ?";
	// $participant = $app['db']->fetchAssoc($sql, array((int) $idParticipant));
	
// })



    
	

	

	
$app->run();



?>

