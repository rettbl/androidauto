<?php
	// permet de spécifier l'en-tête HTTP
	// indique que le type du contenu renvoyé sera du JSON
	header('Content-Type: application/json; charset=UTF_8');
	
	//inclut les fichiers indiqués
	include('Pdo_Connexion.php');
	include('pdoRadio.php');
	
	try {
		//appel de la methode getStationSuivante
		$jeuEnregistrements = PdoRadio::getStationSuivante($_REQUEST['id']);
		
		// stocke la présentation JSON du jeu d'enregistrement
		$donneesJSON = json_encode($jeuEnregistrements);
		//retourne les données au format JSON
		echo $donneesJSON;
		
		// mettre la station en selected
		PdoRadio::metenSelected($_REQUEST['id']);
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}

?>