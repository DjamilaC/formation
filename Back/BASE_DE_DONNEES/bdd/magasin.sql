-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:35
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
-- Base de données :  `magasin`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `nom_produit` varchar(20) DEFAULT NULL,
  `categorie_produit` varchar(20) DEFAULT NULL,
  `reference_produit` int(6) DEFAULT NULL,
  `prix_produit` float DEFAULT NULL,
  `stock_produit` varchar(20) DEFAULT NULL,
  `date_ajout` date DEFAULT NULL,
  `date_vente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `categorie_produit`, `reference_produit`, `prix_produit`, `stock_produit`, `date_ajout`, `date_vente`) VALUES
(1, 'Televiseur', 'electromenager', 1, 300, 'disponible', '2018-01-20', '2019-01-20'),
(2, 'Aspirateur', 'electromenager', 2, 200, 'disponible', '2018-02-20', '2019-01-10'),
(3, 'Lave_linge', 'electromenager', 3, 500, 'disponible', '2018-03-20', '2019-02-10'),
(4, 'Lave_vaisselle', 'electromenager', 4, 450, 'disponible', '2018-04-20', '2019-03-10'),
(5, 'Micro_ondes', 'electromenager', 5, 150, 'disponible', '2018-05-20', '2019-03-01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
