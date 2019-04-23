-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 23 avr. 2019 à 15:47
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id_logement` int(3) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `cp` int(5) NOT NULL,
  `surface` int(5) NOT NULL,
  `prix` int(10) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `type` enum('location','vente','','') NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(1, 'appartement', '27 avenue gambetta', 'choisy le roi', 94600, 27, 700, '', 'location', 'test'),
(2, 'appartement', '4 avenue 25 août 1944', 'thiais', 94320, 45, 1100, '', 'location', 'disponible tout de suite'),
(3, 'apprtement', '5 rue savignat', 'creteil', 94000, 35, 800, '', 'location', 'rez de chaussée'),
(4, 'appartement', '20 avenue gambetta', 'choisy le roi', 94600, 45, 1200, '\r\nNotice:  Undefined variable: photo in C:\\xampp\\htdocs\\formation\\Back\\PHPWEBFORCE3\\DJAMILA_CHABANE_EVALUATION\\djamila.php on line 140', 'location', 'ererezrer'),
(5, 'appartement', '20 avenue gambetta', 'choisy le roi', 94600, 65, 3000, '\r\nNotice:  Undefined variable: photo in C:\\xampp\\htdocs\\formation\\Back\\PHPWEBFORCE3\\DJAMILA_CHABANE_EVALUATION\\djamila.php on line 140', 'location', 'ytytyytyt');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id_logement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id_logement` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
