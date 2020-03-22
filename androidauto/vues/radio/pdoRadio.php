<?php
	/**
	* Classe de récupération des données de la bdd
	* @Author: Benjamin Fourmaux Beruet
	* @Project: Android auto
	* @version: 1
	**/
	
class PdoRadio {
	
	/**
	* Fonction qui permet de récuperer les infos sur la station choisi (précedent, avant)
	* @param $id id de la station
	* @return un tableau associatif des info de la station choisi
	*/
	public static function getStationSuivante ($id) {
		try {
			$objPdo = Pdo_Connexion::getPdoConnexion();
			$req = "SELECT * FROM radio WHERE id = $id";
			$resultat = $objPdo->query($req);
			$lesLignes =$resultat->fetchAll(PDO::FETCH_ASSOC);
			//return le tableau
			return $lesLignes;
		} catch (Exception $ex) {
			echo $ex->getMessage();
		}
	}
	
	
	/**
	* Fonction qui permet de mettre en selected la station skipé en enlevant le selected prècédent 
	* @param $id id de la station de radio
	**/
	public static function metenSelected ($id) {
		$objPdo = Pdo_Connexion::getPdoConnexion();
		
		// Add secure for disable selected
		if ($id != null) {
			$reqRaz = "UPDATE radio SET selected = 0 WHERE selected = 1";
			$objPdo->exec($reqRaz);
			$req = "UPDATE radio SET selected = 1 WHERE id = $id";
			$objPdo->exec($req);
		}
	}
}

?>