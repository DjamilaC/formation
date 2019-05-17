-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:31
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
-- Base de données :  `haribo`
--

-- --------------------------------------------------------

--
-- Structure de la table `bonbons`
--

CREATE TABLE `bonbons` (
  `id_bonbon` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `saveur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bonbons`
--

INSERT INTO `bonbons` (`id_bonbon`, `nom`, `saveur`) VALUES
(1, 'dragibus', 'cola'),
(2, 'Tagada', 'fraise'),
(3, 'nounours', 'citron'),
(4, 'chamallow', 'framboise'),
(5, 'schtroumpf', 'acidulé'),
(6, 'chamallow', 'vanille');

-- --------------------------------------------------------

--
-- Structure de la table `manger`
--

CREATE TABLE `manger` (
  `id_manger` int(11) NOT NULL,
  `id_bonbon` int(11) DEFAULT NULL,
  `id_stagiaire` int(11) DEFAULT NULL,
  `date_manger` date NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manger`
--

INSERT INTO `manger` (`id_manger`, `id_bonbon`, `id_stagiaire`, `date_manger`, `quantite`) VALUES
(1, 4, 7, '2018-09-20', 5),
(2, 2, 4, '2018-09-10', 10),
(3, 3, 1, '2018-09-18', 5),
(4, 2, 2, '2018-09-05', 18),
(5, 4, 3, '2018-09-01', 18),
(6, 5, 6, '2018-08-25', 24),
(7, 4, 1, '2018-06-10', 12),
(8, 4, 5, '2018-07-24', 5),
(9, 2, 12, '2018-09-15', 5);

-- --------------------------------------------------------

--
-- Structure de la table `stagiaires`
--

CREATE TABLE `stagiaires` (
  `id_stagiaire` int(11) NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `yeux` varchar(30) NOT NULL,
  `genre` enum('h','f') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stagiaires`
--

INSERT INTO `stagiaires` (`id_stagiaire`, `prenom`, `yeux`, `genre`) VALUES
(1, 'jhordan', 'marron', 'h'),
(2, 'Layla', 'marron', 'f'),
(3, 'Luc', 'marron', 'h'),
(4, 'Sabuj', 'marron', 'h'),
(5, 'Mohamed', 'marron', 'h'),
(6, 'Johnathan', 'bleu', 'h'),
(7, 'Arnaud', 'marron', 'h'),
(11, 'Mila', 'vert', 'f'),
(12, 'patrick', 'marron', 'h'),
(14, 'Mila', 'marron', 'f');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bonbons`
--
ALTER TABLE `bonbons`
  ADD PRIMARY KEY (`id_bonbon`);

--
-- Index pour la table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id_manger`),
  ADD KEY `manger_ibfk_1` (`id_stagiaire`),
  ADD KEY `manger_ibfk_2` (`id_bonbon`);

--
-- Index pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  ADD PRIMARY KEY (`id_stagiaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bonbons`
--
ALTER TABLE `bonbons`
  MODIFY `id_bonbon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `manger`
--
ALTER TABLE `manger`
  MODIFY `id_manger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `stagiaires`
--
ALTER TABLE `stagiaires`
  MODIFY `id_stagiaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `manger_ibfk_1` FOREIGN KEY (`id_stagiaire`) REFERENCES `stagiaires` (`id_stagiaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manger_ibfk_2` FOREIGN KEY (`id_bonbon`) REFERENCES `bonbons` (`id_bonbon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
