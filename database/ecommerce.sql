-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 02 avr. 2022 à 18:59
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_prod`
--

DROP TABLE IF EXISTS `categorie_prod`;
CREATE TABLE IF NOT EXISTS `categorie_prod` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie_prod`
--

INSERT INTO `categorie_prod` (`id_cat`, `cat_libelle`) VALUES
(1, 'chemis'),
(2, 'polos'),
(3, 'pantalons'),
(4, 'pantalons de survetement'),
(5, 'shorts'),
(6, 'jeans'),
(7, 'chaussures');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `com_libelle` varchar(20) NOT NULL,
  `com_date` date NOT NULL,
  `id_paiment` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `foreign3` (`id_paiment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `qte_commande` int(11) NOT NULL,
  KEY `foreign` (`id_produit`),
  KEY `foreign2` (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mode_paiment`
--

DROP TABLE IF EXISTS `mode_paiment`;
CREATE TABLE IF NOT EXISTS `mode_paiment` (
  `id_paiment` int(11) NOT NULL,
  `paiment_libelle` varchar(30) NOT NULL,
  `date_paiment` date NOT NULL,
  PRIMARY KEY (`id_paiment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(50) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_prix` float NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `etrangeree` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `prod_nom`, `prod_description`, `prod_prix`, `prod_img`, `id_cat`) VALUES
(1, 'chemis1', 'this is chemis 1 et un bon produit pour vous....', 199.99, 'chemis1.jpg', 1),
(2, 'chemis 2 american', 'this is chemis 2 et un bon produit pour vous....', 219.99, 'chemis2.jpg', 1),
(11, 'Chemise fleurie avec boutons', 'ce chemis est un bon chemis pour vous est bien ....', 299.99, 'chemis1.jpg', 1),
(12, 'chemis 4 american', 'chemis 4 americanchemis 4 americanchemis 4 americanchemis 4 americanchemis 4 american', 499.99, 'chemis2.jpg', 1),
(13, 'chemis 5 maroc', 'chemis 5 marocchemis 5 marocchemis 5 marocchemis 5 marocchemis 5 maroc chemis 5 maroc', 99.99, 'chemis1.jpg', 1),
(14, 'chemis 6 american', 'chemis 6 american chemis 6 american chemis 6 american chemis 6 americanchemis 6 american chemis 6 american', 149.99, 'chemis2.jpg', 1),
(15, 'chemis 7 american', ' chemis 7 american chemis 7 american chemis 7 american chemis 7 american', 199.99, 'chemis2.jpg', 1),
(16, 'chemis 8 american', 'chemis 8 american chemis 8 american chemis 8 american chemis 8 american', 129.99, 'chemis2.jpg', 1),
(17, 'chemis 9 american', 'chemis 9 american chemis 9 american chemis 9 american chemis 9 american', 99.99, 'chemis1.jpg', 1),
(18, 'chemis 10 american', 'chemis 10 american chemis 10 americanchemis 10 americanchemis 10 americanv chemis 10 americanchemis 10 american', 139.99, 'chemis1.jpg', 1),
(19, 'Polos1 produit', 'Polos1 produit Polos1 produit Polos1 produit Polos1 produit Polos1 produit Polos1 produit', 199.99, 'polos1.jpg', 2),
(20, 'Polos2 produit', 'Polos2 produit Polos2 produit Polos2 produit Polos2 produit Polos2 produit', 219.99, 'polos2.jpg', 2),
(21, 'Polos3 produit', 'Polos3 produit Polos3 produit Polos3 produit Polos3 produitPolos3 produit Polos3 produit Polos3 produit', 299.99, 'polos2.jpg', 2),
(22, 'Polos4 produit', 'Polos4 produit Polos4 produitPolos4 produit Polos4 produit Polos4 produit Polos4 produit', 899.99, 'polos1.jpg', 2),
(23, 'Polos5 produit', 'Polos5 produit Polos5 produit Polos5 produit Polos5 produit Polos5 produit Polos5 produit', 129.99, 'polos2.jpg', 2),
(24, 'Polos6 produit', 'Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit', 200, 'polos1.jpg', 2),
(25, 'Polos7 produit', 'Polos7 produit Polos7 produit Polos7 produit Polos7 produit', 299.99, 'polos2.jpg', 2),
(26, 'Polos8 produit', 'Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit', 139.99, 'polos2.jpg', 2),
(27, 'Polos9 produit', ' Polos9 produit Polos9 produit Polos9 produitPolos9 produit Polos9 produit Polos9 produit Polos9 produit Polos9 produitPolos9 produit', 159.99, 'polos2.jpg', 2),
(28, 'Polos10 produit', 'Polos10 produit Polos10 produit Polos10 produitPolos10 produit Polos10 produit Polos10 produit', 999.99, 'polos1.jpg', 2),
(29, 'Pantalons De Survêtements1', 'Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1', 399.99, 'pantalonsserv1.jpg', 4),
(30, 'Pantalons De Survêtements2', 'Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2', 499.99, 'pantalonsserv2.jpg', 4),
(31, 'Pantalons De Survêtements3', 'Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3', 499.99, 'pantalonsserv1.jpg', 4),
(32, 'Pantalons De Survêtements4', 'Pantalons De Survêtements4 Pantalons De Survêtements4 Pantalons De Survêtements4Pantalons De Survêtements4Pantalons De Survêtements4', 899.99, 'pantalonsserv2.jpg', 4),
(33, 'Pantalons De Survêtements5', 'Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5', 129.99, 'pantalonsserv2.jpg', 4),
(34, 'Pantalons De Survêtements6', 'Pantalons De Survêtements6 Pantalons De Survêtements6 Pantalons De Survêtements6 Pantalons De Survêtements6', 200, 'pantalonsserv1.jpg', 4),
(35, 'Pantalons De Survêtements7', 'Pantalons De Survêtements7 Pantalons De Survêtements7 Pantalons De Survêtements7', 299.99, 'pantalonsserv2.jpg', 4),
(36, 'Pantalons De Survêtements8', 'Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8', 139.99, 'pantalonsserv1.jpg', 4),
(37, 'Pantalons De Survêtements9', 'Pantalons De Survêtements9 Pantalons De Survêtements9 Pantalons De Survêtements9 Pantalons De Survêtements9 ', 159.99, 'pantalonsserv2.jpg', 4),
(38, 'Pantalons De Survêtements10', 'Pantalons De Survêtements10 Pantalons De Survêtements10 Pantalons De Survêtements10 Pantalons De Survêtements10', 999.99, 'pantalonsserv1.jpg', 4),
(39, 'shorts1 produit', 'shorts1 produit shorts1 produit shorts1 produitshorts1 produitshorts1 produit', 299.99, 'shorts1.jpg', 5),
(40, 'shorts2 produit', 'shorts2 produit shorts2 produitshorts2 produitshorts2 produitshorts2 produitshorts2 produit', 499.99, 'shorts2.jpg', 5),
(41, 'shorts3 produit', 'shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit', 299.99, 'shorts1.jpg', 5),
(42, 'shorts4 produit', 'shorts4 produit shorts4 produit shorts4 produitshorts4 produitshorts4 produit', 899.99, 'shorts2.jpg', 5),
(43, 'shorts5 produit', 'shorts5 produit shorts5 produit shorts5 produit shorts5 produit shorts5 produit', 129.99, 'shorts1.jpg', 5),
(44, 'shorts6 produit', 'shorts6 produit shorts6 produit shorts6 produit shorts6 produit shorts6 produit', 200, 'shorts2.jpg', 5),
(45, 'shorts7 produit', 'shorts7 produit shorts7 produit shorts7 produit shorts7 produit shorts7 produit', 299.99, 'shorts1.jpg', 5),
(46, 'shorts8 produit', 'shorts8 produit shorts8 produit shorts8 produit shorts8 produit shorts8 produit', 139.99, 'shorts2.jpg', 5),
(47, 'shorts9 produit', 'shorts9 produit shorts9 produit shorts9 produit shorts9 produit shorts9 produit shorts9 produit', 159.99, 'shorts1.jpg', 5),
(48, 'shorts10 produit', 'shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit', 999.99, 'shorts2.jpg', 5),
(59, 'Jeans1 produit', 'Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit', 199.99, 'jeans1.jpg', 6),
(60, 'Jeans2 produit', 'Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit', 219.99, 'jeans2.jpg', 6),
(61, 'Jeans3 produit', 'Jeans3 produit Jeans3 produit Jeans3 produit Jeans3 produitJeans3 produit', 299.99, 'jeans1.jpg', 6),
(62, 'Jeans4 produit', 'Jeans4 produit  Jeans4 produit Jeans4 produit Jeans4 produit Jeans4 produit', 899.99, 'jeans2.jpg', 6),
(63, 'Jeans5 produit', 'Jeans5 produit Jeans5 produit Jeans5 produit Jeans5 produitJeans5 produit', 129.99, 'jeans1.jpg', 6),
(64, 'Jeans6 produit', 'Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit', 200, 'jeans2.jpg', 6),
(65, 'Jeans7 produit', 'Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit', 299.99, 'jeans1.jpg', 6),
(66, 'Jeans8 produit', 'Jeans8 produit Jeans8 produit Jeans8 produit Jeans8 produitJeans8 produit', 139.99, 'jeans2.jpg', 6),
(67, 'Jeans9 produit', 'Jeans9 produit Jeans9 produit Jeans9 produit Jeans9 produit', 159.99, 'jeans1.jpg', 6),
(68, 'Jeans10 produit', 'Jeans10 produit Jeans10 produit Jeans10 produitJeans10 produitJeans10 produitJeans10 produit', 999.99, 'jeans2.jpg', 6),
(69, 'chausseurs1 produit', 'chausseurs1 produit chausseurs1 produitchausseurs1 produit chausseurs1 produitchausseurs1 produit', 399.99, 'chaussures1.jpg', 7),
(70, 'chausseurs2 produit', 'chausseurs2 produitchausseurs2 produitchausseurs2 produitchausseurs2 produit', 499.99, 'chaussures2.jpg', 7),
(71, 'chausseurs3 produit', 'chausseurs3 produit chausseurs3 produit chausseurs3 produit chausseurs3 produit chausseurs3 produit', 299.99, 'chaussures1.jpg', 7),
(72, 'chausseurs4 produit', 'chausseurs4 produit chausseurs4 produitchausseurs4 produit chausseurs4 produit chausseurs4 produit', 899.99, 'chaussures2.jpg', 7),
(73, 'chausseurs5 produit', 'chausseurs5 produit chausseurs5 produitchausseurs5 produitchausseurs5 produitchausseurs5 produitchausseurs5 produit', 129.99, 'chaussures1.jpg', 7),
(74, 'chausseurs6 produit', 'chausseurs6 produit chausseurs6 produitchausseurs6 produitchausseurs6 produitchausseurs6 produitchausseurs6 produit', 200, 'chaussures2.jpg', 7),
(75, 'chausseurs7 produit', 'chausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produit', 299.99, 'chaussures1.jpg', 7),
(76, 'chausseurs8 produit', 'chausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produit', 139.99, 'chaussures2.jpg', 7),
(77, 'chausseurs9 produit', 'chausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produit', 159.99, 'chaussures1.jpg', 7),
(78, 'chausseurs10 produit', 'chausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produit', 999.99, 'chaussures2.jpg', 7),
(79, 'Pantalons1 produit', 'Pantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produit', 299.99, 'pantalons1.jpg', 3),
(80, 'Pantalons2 produit', 'Pantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produit', 499.99, 'pantalons2.jpg', 3),
(81, 'Pantalons3 produit', 'Pantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produit', 499.99, 'pantalons1.jpg', 3),
(82, 'Pantalons4 produit', 'Pantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produit', 899.99, 'pantalons2.jpg', 3),
(83, 'Pantalons5 produit', 'Pantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produit', 129.99, 'pantalons1.jpg', 3),
(84, 'Pantalons6 produit', 'Pantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produit', 200, 'pantalons2.jpg', 3),
(85, 'Pantalons7 produit', 'Pantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produit', 299.99, 'pantalons1.jpg', 3),
(86, 'Pantalons8 produit', 'Pantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produit', 139.99, 'pantalons2.jpg', 3),
(87, 'Pantalons9 produit', 'Pantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produit', 159.99, 'pantalons1.jpg', 3),
(88, 'Pantalons10 produit', 'Pantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produit', 999.99, 'pantalons2.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `produit_images`
--

DROP TABLE IF EXISTS `produit_images`;
CREATE TABLE IF NOT EXISTS `produit_images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(20) NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `foreign4` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(120) NOT NULL,
  `user_nom` varchar(20) NOT NULL,
  `user_prenom` varchar(20) NOT NULL,
  `user_adresse` varchar(40) NOT NULL,
  `user_tel` varchar(12) NOT NULL,
  `id_ville` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `etrangere` (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `ville_cp` varchar(10) NOT NULL,
  `ville_nom` varchar(20) NOT NULL,
  `ville_nom_reg` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `foreign3` FOREIGN KEY (`id_paiment`) REFERENCES `mode_paiment` (`id_paiment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `etrangeree` FOREIGN KEY (`id_cat`) REFERENCES `categorie_prod` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit_images`
--
ALTER TABLE `produit_images`
  ADD CONSTRAINT `foreign4` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `etrangere` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
