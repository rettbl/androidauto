-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 mars 2020 à 18:52
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `androidauto`
--
CREATE DATABASE IF NOT EXISTS `androidauto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `androidauto`;

-- --------------------------------------------------------

--
-- Structure de la table `radio`
--

CREATE TABLE `radio` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `frequence` double NOT NULL,
  `selected` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `radio`
--

INSERT INTO `radio` (`id`, `name`, `frequence`, `selected`) VALUES
(1, 'Fun Radio', 102.8, 0),
(2, 'Vibration', 101.7, 0),
(3, 'NRJ', 87.7, 1),
(4, 'Skyrock', 90.5, 0),
(5, 'Nostalgie', 106.3, 0),
(6, '107.7', 107.7, 0),
(7, 'France Bleu', 105, 0),
(8, 'RTL', 104, 0),
(9, 'Cherie FM', 91.6, 0),
(10, 'Le Mouv', 94.1, 0),
(11, 'Radio Classique', 102.3, 0),
(12, 'Virgin Radio', 96.1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
