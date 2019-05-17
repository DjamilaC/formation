-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:37
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
-- Base de données :  `repertoire`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

CREATE TABLE `annuaire` (
  `id_annuaire` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `telephone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `profession` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `codepostal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` enum('m','f','','') NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`id_annuaire`, `nom`, `prenom`, `telephone`, `profession`, `ville`, `codepostal`, `adresse`, `date_de_naissance`, `sexe`, `description`) VALUES
(1, 'chabane', 'djamila', 0753268576, 'en formation', 'choisy le roi', 94600, '27 avenue gambetta', '1980-12-09', 'f', 'en recherche de stage'),
(2, 'chabane', 'farid', 0753268576, 'independant', 'thiais', 94320, '4 avenue 250aput', '1978-07-19', 'm', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annuaire`
--
ALTER TABLE `annuaire`
  ADD PRIMARY KEY (`id_annuaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annuaire`
--
ALTER TABLE `annuaire`
  MODIFY `id_annuaire` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
