-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:33
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
-- Base de données :  `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id_chambre` int(3) NOT NULL,
  `num_chambre` int(3) NOT NULL,
  `prix` float NOT NULL,
  `nb_lit` int(3) NOT NULL,
  `nb_pers` int(3) NOT NULL,
  `confort` varchar(255) NOT NULL,
  `equipement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id_chambre`, `num_chambre`, `prix`, `nb_lit`, `nb_pers`, `confort`, `equipement`) VALUES
(1, 111, 150, 1, 1, 'jacuzzi, wifi, ', 'televiseur, pc portable, frigo'),
(2, 112, 100, 1, 2, 'wifi', 'televiseur, frigo, '),
(3, 113, 90, 1, 1, 'wifi', 'televiseur'),
(4, 114, 110, 2, 1, 'wifi', 'televiseur'),
(5, 115, 250, 2, 1, 'spa, vue sur mer, balcon', 'televiseur, frigo, '),
(6, 116, 120, 1, 2, 'wifi', 'frigo'),
(7, 117, 100, 2, 1, 'wifi', 'frigo, televiseur'),
(8, 118, 300, 1, 2, 'air conditionne, spa, balcon, vue sur mer', 'televiseur, frigopc portable'),
(9, 119, 250, 2, 1, 'jacuzzi, balcon', 'frigo, televiseur, '),
(10, 200, 100, 1, 1, 'wifi', 'televiseur, frigo');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(3) NOT NULL,
  `num_client` int(3) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `num_client`, `nom`, `prenom`, `adresse`) VALUES
(1, 10, 'chabane', 'djamila', 'choisy le roi'),
(2, 11, 'ba', 'auguste', 'sucy en brie'),
(3, 12, 'amara', 'nassim', 'vitry'),
(4, 13, 'baillet', 'sylvain', 'champigny'),
(5, 14, 'colussi', 'iulia', 'vitry'),
(6, 15, 'piot', 'aurelia', 'vitry'),
(7, 16, 'tobbal', 'aziz', 'creteil'),
(8, 17, 'rabhi', 'bahaeddine', 'choisy le roi'),
(9, 18, 'aribot', 'yannis', 'creteil'),
(10, 19, 'vanicatte', 'nelson', 'vitry');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id_resa` int(3) NOT NULL,
  `num_client` int(3) NOT NULL,
  `num_chambre` int(3) NOT NULL,
  `date_arrive` date NOT NULL,
  `date_depart` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id_resa`, `num_client`, `num_chambre`, `date_arrive`, `date_depart`) VALUES
(1, 10, 111, '2019-03-03', '2019-03-05'),
(2, 11, 112, '2019-03-03', '2019-03-05'),
(4, 12, 116, '2019-03-07', '2019-03-09'),
(5, 13, 113, '2019-03-12', '2019-03-13'),
(6, 14, 114, '2019-03-12', '2019-03-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_resa`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id_chambre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_resa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
