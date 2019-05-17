-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:41
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
-- Base de données :  `eleve`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE `fiche` (
  `id_eleve` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `classe` varchar(30) NOT NULL,
  `parents` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fiche`
--

INSERT INTO `fiche` (`id_eleve`, `nom`, `prenom`, `classe`, `parents`, `telephone`) VALUES
(1, 'chabane', 'djamila', 'formation web', 'parents', 753268576),
(2, 'amara', 'nassim', 'formation web', 'parents', 615919616),
(3, 'Tobbal', 'Aziz', 'formation web', 'parents', 143395848),
(4, 'colussi', 'iulia', 'formation web', 'parents', 125565958),
(5, 'Piot', 'aurelia', 'formation web', 'parents', 945474585),
(6, 'chabane', 'djamila', 'formatin web', 'parents', 753268576),
(7, 'chabane', 'djamila', 'ccccc', 'parents', 753268576),
(8, 'chabane', 'djamila', 'vvvvvvv', 'parents', 753268576),
(9, 'chabane', 'djamila', 'bbbbbb', 'parents', 753268576),
(10, 'chabane', 'djamila', 'aaaaaa', 'parents', 753268576),
(11, 'chabane', 'djamila', 'pppppppp', 'parents', 753268576),
(12, 'chabane', 'djamila', 'nnnnnnnn', 'parents', 753268576),
(13, 'lemboub', 'emma', 'creche', 'parents', 753268576),
(14, 'chabane', 'mohamed', 'universite', 'parents', 753268576),
(15, 'chabane', 'meziane', 'rrrrrrrr', 'parents', 753268576),
(16, 'chabane', 'nouara', 'kkkkkkk', 'parents', 753268576),
(17, 'chabane', 'nadir', 'universite', 'parents', 75326857),
(18, 'chabane', 'nadir', 'universite', 'parents', 75326857),
(19, 'chabane', 'nadir', 'universite', 'frere', 615564564),
(20, 'chabane', 'farid', 'universite', 'frere', 956665232);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`id_eleve`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `id_eleve` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
