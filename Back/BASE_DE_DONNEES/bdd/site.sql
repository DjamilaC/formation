-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 17 mai 2019 à 11:38
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
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `membre_id` int(3) NOT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours de traitement','envoyé','livré','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(3) NOT NULL,
  `commande_id` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('f','m','','') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(1, 'emma2', 'Emma626620', 'lemboub', 'emma', 'lemboubdjamila@gmail.com', 'f', 'choisy le roi', 94600, '27 avenue gambetta', 1),
(2, 'ddddddd', 'emma', 'chabane', 'djamila', 'djamila.chabane@lepoles.com', 'f', 'choisy le roi', 94600, '27 avenue gambetta', 0),
(3, 'djamilachabane', 'emma', 'chabane', 'djamila', 'djamila.chabane@lepoles.com', 'f', 'choisy le roi', 94600, '27 avenue gambetta', 0),
(4, 'emmalemboub', 'djamila', 'lemboub', 'emma', 'lemboubdjamila@gmail.com', 'f', 'choisy le roi', 94600, '27 avenue gambetta', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` enum('s','m','l','xl') NOT NULL,
  `public` enum('m','f','mixte','') NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(7, '50', 'robe', 'robe', 'longue', 'rouge', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/45-robe1.jpg', 100, 10),
(8, '50', 'robe', 'robe noire', 'courte', 'noire', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/50-robe2.jpg', 120, 20),
(9, '60', 'chemise', 'super chemise', 'manche longue', 'bleu claire', 'xl', 'm', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/60-75-chemise.jpg', 120, 30),
(10, '65', 'pull', 'gros pull', 'col roulé', 'gris', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/65-pull1.jpg', 50, 15),
(11, '70', 'jupe', 'jupe jeans', 'courte', 'bleu', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/70-70-jupe1.jpg', 120, 20),
(13, '80', 'jupe', 'jupe cuir', 'courte', 'noire', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/80-jupe1.jpg', 100, 20),
(14, '95', 'tee-shirt', 'super tee-shirt', 'manche courte', 'blanc', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/95-tee-shirt2.jpg', 45, 23),
(15, '100', 'tee-shirt', 'teeshirt', 'manche courte', 'blanc', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/100-t-shirt1.jpg', 45, 30),
(16, '45', 'robe', 'robe noire', 'courte', 'noire', 'xl', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/45-robe1.jpg', 120, 30),
(17, '45', 'robe', 'robe noire', 'longue', 'rouge', 's', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/45-robe1.jpg', 0, 20),
(18, '45', 'robe', 'robe noire', 'longue', 'noire', 'm', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/45-robe2.jpg', 120, 20),
(19, '20', 'tee-shirt', 'tshirt', 'manche courte', 'gris', 'l', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/20-t-shirt1.jpg', 120, 30),
(20, '120', 'jupe', 'jupe jeans', 'courte', 'bleu', 's', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/120-jupe2I.jpg', 100, 20),
(21, '01', 'jupe', 'teeshirt', 'courte', 'bleu', 'm', 'mixte', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/01-100-t-shirt1.jpg', 120, 30),
(22, '71', 'tee-shirt', 'teeshirt', 'manche courte', 'blanc', 'm', 'f', 'http://localhost/formation/Back/PHPWEBFORCE3/10-site/photo/71-tee-shirt2.jpg', 0, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
