-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 avr. 2022 à 14:02
-- Version du serveur :  5.7.36
-- Version de PHP : 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
