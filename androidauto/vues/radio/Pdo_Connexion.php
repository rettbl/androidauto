<?php

/**
 * Classe d'accès aux donnèes. 
 * Utilise les services de la classe PDO
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $objPdo de type PDO 
 * $objPdoConnexion qui contiendra l'unique instance de la classe
 * @author 
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
class Pdo_Connexion {

    private static $strServeur = 'mysql:host=localhost';
    private static $strBdd = 'dbname=androidauto';
    private static $strUser = 'googlecar';
    private static $strMdp = 'googlecarMDP';
    private static $objPdo;
    private static $objPdoConnexion = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        try {
            Pdo_Connexion::$objPdo = new PDO(Pdo_Connexion::$strServeur . ';' . Pdo_Connexion::$strBdd, Pdo_Connexion::$strUser, Pdo_Connexion::$strMdp);
            Pdo_Connexion::$objPdo->query("SET CHARACTER SET utf8");
            Pdo_Connexion::$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo 'Echec lors de la connexion ! ' . $e->getMessage();
            die();
        }
    }

    /**
     * destructeur de la classe
     * 
     */
    public function __destruct() {
       Pdo_Connexion::$objPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * @return l'objet objPdo de la classe PdoConnexion
     */
    public static function getPdoConnexion() {
        if (Pdo_Connexion::$objPdoConnexion == null) {
            Pdo_Connexion::$objPdoConnexion = new Pdo_Connexion();
        }
        return Pdo_Connexion::$objPdo;
    }

}
