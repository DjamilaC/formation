-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:40
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
-- Base de données :  `phoenix`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(3) NOT NULL,
  `id_voyage` int(3) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `semaines` int(4) NOT NULL,
  `participants` int(4) NOT NULL,
  `date_reservation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id_voyage` int(3) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `presentation` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id_voyage`, `destination`, `presentation`, `photo`, `prix`) VALUES
(1, 'Les Boucaniers', 'Après les eaux\ncalmes, partez à la découverte des spectaculaires cascades des gorges de la Falaise, à Trinité.', 'img\n/caraibes_martinique_boucaniers.jpg', 750),
(2, 'Kamarina', 'Bienvenue au pays\nde l\'Etna où ruelles escarpées et places en fleurs s\'ouvrent sur la Méditerranée !', 'img\n/sicile_kamarina.jpg', 510),
(3, 'Finohlu', 'Instants inoubliables sur\nune île privative où luxe et charme naturel des Maldives s\'équilibrent à merveille.', 'img\n/maldives_fino.jpg', 805),
(4, 'Albion sauvage', 'Au cœur de\nl’Ile, un swing au golf, l’adrénaline du trapèze volant ou la beauté des fonds marins ... que choisir ?', 'img\n/maurice_albion.jpg', 630),
(5, 'Kani', 'Ile\n-jardin posée sur des eaux turquoises, découvrez le paradis au cœur de l\'archipel des Maldives.', 'img\n/maldives_kani.jpg', 798),
(6, 'Gregolimano', 'L’île d’Eubée est un oasis entre mer et oliviers ... plongez dans les eaux azures de la mer Egée ... en ski nautique', 'img\n/grece_gregolimano.jpg', 535);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id_voyage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id_voyage` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
