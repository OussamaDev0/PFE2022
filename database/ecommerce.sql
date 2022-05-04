-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 mai 2022 à 15:35
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
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nom` varchar(20) NOT NULL,
  `cli_prenom` varchar(20) NOT NULL,
  `cli_adresse` varchar(50) NOT NULL,
  `cli_tel` varchar(12) NOT NULL,
  `id_ville` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `foreign5` (`id_user`),
  KEY `foreign6` (`id_ville`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `cli_nom`, `cli_prenom`, `cli_adresse`, `cli_tel`, `id_ville`, `id_user`) VALUES
(3, 'KHARKHACH', 'KARIM', 'Rue mohammed 6 N 133', '0632542515', 7, 2),
(4, 'Karimi', 'Ahmed', 'BOITE POSTALE AKLIM', '0655524284', 8, 2);

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
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id_user` int(10) NOT NULL,
  `id_produit` int(10) NOT NULL,
  `date_vi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `foreign7` (`id_produit`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id_user`, `id_produit`, `date_vi`) VALUES
(2, 63, '2022-04-24 12:04:01'),
(2, 18, '2022-04-24 12:04:21'),
(2, 84, '2022-04-24 12:04:39'),
(2, 14, '2022-04-24 12:04:50'),
(2, 67, '2022-04-24 12:04:53'),
(2, 84, '2022-04-24 12:04:57'),
(2, 25, '2022-04-24 12:05:00'),
(2, 75, '2022-04-24 12:05:17'),
(2, 39, '2022-04-24 12:24:28'),
(2, 75, '2022-04-24 12:24:42'),
(2, 39, '2022-04-24 12:27:00'),
(3, 84, '2022-04-24 12:30:27'),
(3, 71, '2022-04-24 12:30:36'),
(3, 79, '2022-04-24 12:30:47'),
(2, 75, '2022-04-24 13:34:06'),
(2, 67, '2022-04-24 14:31:35'),
(2, 25, '2022-04-24 16:19:59'),
(2, 25, '2022-04-24 16:22:23'),
(2, 25, '2022-04-24 16:22:26'),
(2, 1, '2022-04-24 16:24:04'),
(2, 1, '2022-04-24 16:24:06'),
(2, 33, '2022-04-24 16:38:40'),
(2, 25, '2022-04-24 17:57:04'),
(2, 45, '2022-04-24 17:57:12'),
(2, 45, '2022-04-24 17:57:27'),
(2, 33, '2022-04-24 17:57:47'),
(2, 33, '2022-04-24 17:58:59'),
(2, 25, '2022-04-24 23:48:43'),
(2, 25, '2022-04-24 23:48:48'),
(2, 25, '2022-04-24 23:54:48'),
(2, 48, '2022-04-24 23:54:55'),
(2, 48, '2022-04-24 23:54:58'),
(2, 22, '2022-04-24 23:55:12'),
(2, 22, '2022-04-24 23:55:18'),
(2, 77, '2022-04-24 23:55:32'),
(2, 77, '2022-04-24 23:55:34'),
(2, 80, '2022-04-24 23:55:43'),
(2, 80, '2022-04-24 23:55:46'),
(2, 80, '2022-04-25 00:03:32'),
(2, 80, '2022-04-25 00:05:00'),
(2, 69, '2022-04-25 00:58:40'),
(2, 69, '2022-04-25 00:58:44'),
(2, 64, '2022-04-25 00:58:56'),
(2, 64, '2022-04-25 00:59:00'),
(2, 62, '2022-04-25 01:00:19'),
(2, 69, '2022-04-25 01:01:25'),
(2, 69, '2022-04-25 01:01:28'),
(2, 25, '2022-04-25 16:21:55'),
(2, 25, '2022-04-25 16:21:58'),
(2, 68, '2022-04-25 16:22:17'),
(2, 25, '2022-04-25 16:22:22'),
(2, 25, '2022-04-25 16:22:27'),
(2, 67, '2022-04-25 16:22:57'),
(2, 67, '2022-04-25 16:23:02'),
(2, 69, '2022-04-25 17:55:31'),
(2, 69, '2022-04-25 17:55:36'),
(2, 25, '2022-04-26 13:18:14'),
(2, 25, '2022-04-26 13:18:20'),
(2, 25, '2022-04-26 14:08:48'),
(2, 69, '2022-04-26 14:09:50'),
(2, 84, '2022-04-26 14:10:03'),
(2, 28, '2022-04-26 14:11:02'),
(2, 67, '2022-04-26 14:55:18'),
(2, 18, '2022-04-26 14:58:59'),
(2, 62, '2022-04-26 15:03:51'),
(2, 62, '2022-04-26 15:03:59'),
(2, 46, '2022-04-26 15:05:28'),
(2, 46, '2022-04-26 15:05:36'),
(2, 37, '2022-04-26 15:08:56'),
(2, 37, '2022-04-26 15:08:59'),
(2, 78, '2022-04-26 15:09:10'),
(2, 35, '2022-04-26 15:09:14'),
(2, 69, '2022-04-26 15:09:21'),
(2, 69, '2022-04-26 15:09:24'),
(2, 15, '2022-04-26 15:09:27'),
(2, 15, '2022-04-26 15:09:29'),
(2, 81, '2022-04-26 15:09:33'),
(2, 81, '2022-04-26 15:09:36'),
(2, 25, '2022-05-01 00:56:02'),
(2, 25, '2022-05-01 00:56:57'),
(2, 62, '2022-05-03 12:02:59'),
(2, 62, '2022-05-03 12:08:55'),
(2, 62, '2022-05-03 12:09:43'),
(2, 62, '2022-05-03 12:09:46'),
(2, 62, '2022-05-03 12:09:58'),
(2, 62, '2022-05-03 12:10:28'),
(2, 62, '2022-05-03 12:13:05'),
(2, 62, '2022-05-03 12:13:23'),
(2, 62, '2022-05-03 12:16:04'),
(2, 62, '2022-05-03 12:17:32'),
(2, 62, '2022-05-03 12:19:18'),
(2, 62, '2022-05-03 12:20:24'),
(2, 62, '2022-05-03 12:21:08'),
(2, 62, '2022-05-03 12:23:43'),
(2, 62, '2022-05-03 12:23:56'),
(2, 62, '2022-05-03 12:25:06'),
(2, 62, '2022-05-03 12:26:35'),
(2, 62, '2022-05-03 12:56:54'),
(2, 62, '2022-05-03 13:02:21'),
(2, 62, '2022-05-03 13:04:20'),
(2, 62, '2022-05-03 13:06:47'),
(2, 62, '2022-05-03 13:12:05'),
(2, 62, '2022-05-03 13:12:11'),
(2, 62, '2022-05-03 13:17:47'),
(2, 62, '2022-05-03 13:22:19'),
(2, 62, '2022-05-03 13:22:31'),
(2, 62, '2022-05-03 13:23:32'),
(2, 62, '2022-05-03 13:23:50'),
(2, 62, '2022-05-03 13:24:16'),
(2, 62, '2022-05-03 13:24:55'),
(2, 62, '2022-05-03 13:26:29'),
(2, 62, '2022-05-03 13:34:44'),
(2, 62, '2022-05-03 13:36:40'),
(2, 62, '2022-05-03 13:40:45'),
(2, 62, '2022-05-03 13:40:49'),
(2, 67, '2022-05-04 10:32:53'),
(2, 67, '2022-05-04 10:35:43'),
(2, 67, '2022-05-04 10:50:08'),
(2, 67, '2022-05-04 10:50:31'),
(2, 67, '2022-05-04 10:53:03'),
(2, 67, '2022-05-04 10:54:10'),
(2, 67, '2022-05-04 11:12:25'),
(2, 67, '2022-05-04 11:21:52'),
(2, 67, '2022-05-04 11:24:46'),
(2, 67, '2022-05-04 11:25:50'),
(2, 67, '2022-05-04 11:27:05'),
(2, 25, '2022-05-04 11:27:38'),
(2, 2, '2022-05-04 11:27:40'),
(2, 2, '2022-05-04 11:31:21'),
(2, 67, '2022-05-04 11:31:28'),
(2, 67, '2022-05-04 11:32:45'),
(2, 67, '2022-05-04 11:38:52'),
(2, 67, '2022-05-04 11:38:59'),
(2, 67, '2022-05-04 11:40:58'),
(2, 67, '2022-05-04 11:43:14'),
(2, 67, '2022-05-04 11:43:17'),
(2, 67, '2022-05-04 11:43:52'),
(2, 67, '2022-05-04 11:44:16'),
(2, 67, '2022-05-04 11:45:22'),
(2, 67, '2022-05-04 11:48:28'),
(2, 67, '2022-05-04 11:48:30'),
(2, 67, '2022-05-04 11:49:03'),
(2, 67, '2022-05-04 11:49:07'),
(2, 67, '2022-05-04 11:52:04'),
(2, 67, '2022-05-04 11:54:18'),
(2, 67, '2022-05-04 12:05:36'),
(2, 67, '2022-05-04 12:07:34'),
(2, 67, '2022-05-04 12:08:05'),
(2, 67, '2022-05-04 12:08:08'),
(2, 67, '2022-05-04 12:08:10'),
(2, 67, '2022-05-04 12:10:00'),
(2, 67, '2022-05-04 12:40:53'),
(2, 67, '2022-05-04 12:44:15'),
(2, 67, '2022-05-04 12:51:19'),
(2, 67, '2022-05-04 12:51:44'),
(2, 67, '2022-05-04 12:53:32'),
(2, 67, '2022-05-04 12:54:00'),
(2, 67, '2022-05-04 12:55:26'),
(2, 67, '2022-05-04 13:07:27'),
(2, 67, '2022-05-04 13:17:40'),
(2, 67, '2022-05-04 13:17:55'),
(2, 67, '2022-05-04 13:17:57'),
(2, 67, '2022-05-04 13:18:05'),
(2, 67, '2022-05-04 13:19:09'),
(2, 67, '2022-05-04 13:19:30'),
(2, 67, '2022-05-04 14:22:52'),
(2, 67, '2022-05-04 14:23:14'),
(2, 67, '2022-05-04 14:25:48'),
(2, 67, '2022-05-04 14:32:54'),
(2, 67, '2022-05-04 14:33:01'),
(2, 67, '2022-05-04 14:36:13'),
(2, 67, '2022-05-04 14:36:22'),
(2, 67, '2022-05-04 15:00:20'),
(2, 67, '2022-05-04 15:04:48'),
(2, 67, '2022-05-04 15:08:34'),
(2, 67, '2022-05-04 15:16:40'),
(2, 67, '2022-05-04 15:16:43'),
(2, 67, '2022-05-04 15:17:47'),
(2, 67, '2022-05-04 15:21:06'),
(2, 67, '2022-05-04 15:21:34'),
(2, 67, '2022-05-04 15:33:15');

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
-- Structure de la table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_produit` int(10) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET utf8 NOT NULL,
  `date_time` int(11) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `id_user` (`id_user`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product_review`
--

INSERT INTO `product_review` (`review_id`, `id_user`, `id_produit`, `user_rating`, `user_review`, `date_time`) VALUES
(1, 2, 67, 3, 'This is very good product and very nice product', 1651584667),
(3, 3, 67, 5, 'WAlllahilla waaa3er kannse7 bih NAss li mêhtemin', 1651584667),
(5, 2, 2, 2, 'WAlllahilla waaa3er kannse7 bih NAss li mêhtemin', 1651584667),
(6, 2, 67, 2, 'this is very goood product mise a jour', 1651670370);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(50) NOT NULL,
  `prod_description` mediumtext NOT NULL,
  `prod_prix` float NOT NULL,
  `prod_img` varchar(20) NOT NULL,
  `date_Ajoute` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nb_ventes` int(20) NOT NULL DEFAULT '0',
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `etrangeree` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `prod_nom`, `prod_description`, `prod_prix`, `prod_img`, `date_Ajoute`, `nb_ventes`, `id_cat`) VALUES
(1, 'chemis1', 'this is chemis 1 et un bon produit pour vous....', 199.99, 'chemis1.jpg', '2022-04-24 13:12:34', 55, 1),
(2, 'chemis 2 american', 'this is chemis 2 et un bon produit pour vous....', 219.99, 'chemis2.jpg', '2022-04-24 13:04:39', 0, 1),
(11, 'Chemise fleurie avec boutons', 'ce chemis est un bon chemis pour vous est bien ....', 299.99, 'chemis1.jpg', '2022-04-24 13:04:39', 0, 1),
(12, 'chemis 4 american', 'chemis 4 americanchemis 4 americanchemis 4 americanchemis 4 americanchemis 4 american', 499.99, 'chemis2.jpg', '2022-04-24 13:04:39', 0, 1),
(13, 'chemis 5 maroc', 'chemis 5 marocchemis 5 marocchemis 5 marocchemis 5 marocchemis 5 maroc chemis 5 maroc', 99.99, 'chemis1.jpg', '2022-04-24 13:04:39', 0, 1),
(14, 'chemis 6 american', 'chemis 6 american chemis 6 american chemis 6 american chemis 6 americanchemis 6 american chemis 6 american', 149.99, 'chemis2.jpg', '2022-04-24 13:04:39', 0, 1),
(15, 'chemis 7 american', ' chemis 7 american chemis 7 american chemis 7 american chemis 7 american', 199.99, 'chemis2.jpg', '2022-04-24 13:04:39', 0, 1),
(16, 'chemis 8 american', 'chemis 8 american chemis 8 american chemis 8 american chemis 8 american', 129.99, 'chemis2.jpg', '2022-04-24 13:04:39', 0, 1),
(17, 'chemis 9 american', 'chemis 9 american chemis 9 american chemis 9 american chemis 9 american', 99.99, 'chemis1.jpg', '2022-04-24 13:04:39', 0, 1),
(18, 'chemis 10 american', 'chemis 10 american chemis 10 americanchemis 10 americanchemis 10 americanv chemis 10 americanchemis 10 american', 139.99, 'chemis1.jpg', '2022-04-24 13:12:50', 44, 1),
(19, 'Polos1 produit', 'Polos1 produit Polos1 produit Polos1 produit Polos1 produit Polos1 produit Polos1 produit', 199.99, 'polos1.jpg', '2022-04-24 13:04:39', 0, 2),
(20, 'Polos2 produit', 'Polos2 produit Polos2 produit Polos2 produit Polos2 produit Polos2 produit', 219.99, 'polos2.jpg', '2022-04-24 13:04:39', 0, 2),
(21, 'Polos3 produit', 'Polos3 produit Polos3 produit Polos3 produit Polos3 produitPolos3 produit Polos3 produit Polos3 produit', 299.99, 'polos2.jpg', '2022-04-24 13:04:39', 0, 2),
(22, 'Polos4 produit', 'Polos4 produit Polos4 produitPolos4 produit Polos4 produit Polos4 produit Polos4 produit', 899.99, 'polos1.jpg', '2022-04-24 13:04:39', 0, 2),
(23, 'Polos5 produit', 'Polos5 produit Polos5 produit Polos5 produit Polos5 produit Polos5 produit Polos5 produit', 129.99, 'polos2.jpg', '2022-04-24 13:09:38', 0, 2),
(24, 'Polos6 produit', 'Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit Polos6 produit', 200, 'polos1.jpg', '2022-04-24 13:04:39', 0, 2),
(25, 'Polos7 produit', 'Polos7 produit Polos7 produit Polos7 produit Polos7 produit', 299.99, 'polos2.jpg', '2022-04-24 13:12:59', 45, 2),
(26, 'Polos8 produit', 'Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit Polos8 produit', 139.99, 'polos2.jpg', '2022-04-24 13:04:39', 0, 2),
(27, 'Polos9 produit', ' Polos9 produit Polos9 produit Polos9 produitPolos9 produit Polos9 produit Polos9 produit Polos9 produit Polos9 produitPolos9 produit', 159.99, 'polos2.jpg', '2022-04-24 13:04:39', 0, 2),
(28, 'Polos10 produit', 'Polos10 produit Polos10 produit Polos10 produitPolos10 produit Polos10 produit Polos10 produit', 999.99, 'polos1.jpg', '2022-04-24 13:25:39', 0, 2),
(29, 'Pantalons De Survêtements1', 'Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1 Pantalons De Survêtements1', 399.99, 'pantalonsserv1.jpg', '2022-04-24 13:04:39', 0, 4),
(30, 'Pantalons De Survêtements2', 'Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2 Pantalons De Survêtements2', 499.99, 'pantalonsserv2.jpg', '2022-04-24 13:04:39', 0, 4),
(31, 'Pantalons De Survêtements3', 'Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3 Pantalons De Survêtements3', 499.99, 'pantalonsserv1.jpg', '2022-04-24 13:04:39', 0, 4),
(32, 'Pantalons De Survêtements4', 'Pantalons De Survêtements4 Pantalons De Survêtements4 Pantalons De Survêtements4Pantalons De Survêtements4Pantalons De Survêtements4', 899.99, 'pantalonsserv2.jpg', '2022-04-24 13:09:57', 0, 4),
(33, 'Pantalons De Survêtements5', 'Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5 Pantalons De Survêtements5', 129.99, 'pantalonsserv2.jpg', '2022-04-24 13:13:39', 45, 4),
(34, 'Pantalons De Survêtements6', 'Pantalons De Survêtements6 Pantalons De Survêtements6 Pantalons De Survêtements6 Pantalons De Survêtements6', 200, 'pantalonsserv1.jpg', '2022-04-24 13:14:39', 60, 4),
(35, 'Pantalons De Survêtements7', 'Pantalons De Survêtements7 Pantalons De Survêtements7 Pantalons De Survêtements7', 299.99, 'pantalonsserv2.jpg', '2022-04-24 13:04:39', 0, 4),
(36, 'Pantalons De Survêtements8', 'Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8 Pantalons De Survêtements8', 139.99, 'pantalonsserv1.jpg', '2022-04-24 13:04:39', 0, 4),
(37, 'Pantalons De Survêtements9', 'Pantalons De Survêtements9 Pantalons De Survêtements9 Pantalons De Survêtements9 Pantalons De Survêtements9 ', 159.99, 'pantalonsserv2.jpg', '2022-04-24 13:10:36', 0, 4),
(38, 'Pantalons De Survêtements10', 'Pantalons De Survêtements10 Pantalons De Survêtements10 Pantalons De Survêtements10 Pantalons De Survêtements10', 999.99, 'pantalonsserv1.jpg', '2022-04-24 13:04:39', 0, 4),
(39, 'shorts1 produit', 'shorts1 produit shorts1 produit shorts1 produitshorts1 produitshorts1 produit', 299.99, 'shorts1.jpg', '2022-04-24 13:04:39', 0, 5),
(40, 'shorts2 produit', 'shorts2 produit shorts2 produitshorts2 produitshorts2 produitshorts2 produitshorts2 produit', 499.99, 'shorts2.jpg', '2022-04-24 13:04:39', 0, 5),
(41, 'shorts3 produit', 'shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit shorts3 produit', 299.99, 'shorts1.jpg', '2022-04-24 13:04:39', 0, 5),
(42, 'shorts4 produit', 'shorts4 produit shorts4 produit shorts4 produitshorts4 produitshorts4 produit', 899.99, 'shorts2.jpg', '2022-04-24 13:04:39', 0, 5),
(43, 'shorts5 produit', 'shorts5 produit shorts5 produit shorts5 produit shorts5 produit shorts5 produit', 129.99, 'shorts1.jpg', '2022-04-24 13:04:39', 0, 5),
(44, 'shorts6 produit', 'shorts6 produit shorts6 produit shorts6 produit shorts6 produit shorts6 produit', 200, 'shorts2.jpg', '2022-04-24 13:04:39', 0, 5),
(45, 'shorts7 produit', 'shorts7 produit shorts7 produit shorts7 produit shorts7 produit shorts7 produit', 299.99, 'shorts1.jpg', '2022-04-24 13:04:39', 0, 5),
(46, 'shorts8 produit', 'shorts8 produit shorts8 produit shorts8 produit shorts8 produit shorts8 produit', 139.99, 'shorts2.jpg', '2022-04-24 13:04:39', 0, 5),
(47, 'shorts9 produit', 'shorts9 produit shorts9 produit shorts9 produit shorts9 produit shorts9 produit shorts9 produit', 159.99, 'shorts1.jpg', '2022-04-24 13:04:39', 0, 5),
(48, 'shorts10 produit', 'shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit shorts10 produit', 999.99, 'shorts2.jpg', '2022-04-24 13:04:39', 0, 5),
(59, 'Jeans1 produit', 'Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit Jeans1 produit', 199.99, 'jeans1.jpg', '2022-04-24 13:04:39', 0, 6),
(60, 'Jeans2 produit', 'Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit Jeans2 produit', 219.99, 'jeans2.jpg', '2022-04-24 13:04:39', 0, 6),
(61, 'Jeans3 produit', 'Jeans3 produit Jeans3 produit Jeans3 produit Jeans3 produitJeans3 produit', 299.99, 'jeans1.jpg', '2022-04-24 13:04:39', 0, 6),
(62, 'Jeans4 produit', 'Jeans4 produit  Jeans4 produit Jeans4 produit Jeans4 produit Jeans4 produit', 899.99, 'jeans2.jpg', '2022-04-24 13:15:00', 32, 6),
(63, 'Jeans5 produit', 'Jeans5 produit Jeans5 produit Jeans5 produit Jeans5 produitJeans5 produit', 129.99, 'jeans1.jpg', '2022-04-24 13:04:39', 0, 6),
(64, 'Jeans6 produit', 'Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit Jeans6 produit', 200, 'jeans2.jpg', '2022-04-24 13:04:39', 0, 6),
(65, 'Jeans7 produit', 'Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit Jeans7 produit', 299.99, 'jeans1.jpg', '2022-04-24 13:04:39', 0, 6),
(66, 'Jeans8 produit', 'Jeans8 produit Jeans8 produit Jeans8 produit Jeans8 produitJeans8 produit', 139.99, 'jeans2.jpg', '2022-04-24 13:15:39', 5, 6),
(67, 'Jeans9 produit', 'Jeans9 produit Jeans9 produit Jeans9 produit Jeans9 produit', 159.99, 'jeans1.jpg', '2022-04-24 13:16:39', 19, 6),
(68, 'Jeans10 produit', 'Jeans10 produit Jeans10 produit Jeans10 produitJeans10 produitJeans10 produitJeans10 produit', 999.99, 'jeans2.jpg', '2022-04-24 13:04:39', 0, 6),
(69, 'chausseurs1 produit', 'chausseurs1 produit chausseurs1 produitchausseurs1 produit chausseurs1 produitchausseurs1 produit', 399.99, 'chaussures1.jpg', '2022-04-24 13:17:39', 22, 7),
(70, 'chausseurs2 produit', 'chausseurs2 produitchausseurs2 produitchausseurs2 produitchausseurs2 produit', 499.99, 'chaussures2.jpg', '2022-04-24 13:04:39', 0, 7),
(71, 'chausseurs3 produit', 'chausseurs3 produit chausseurs3 produit chausseurs3 produit chausseurs3 produit chausseurs3 produit', 299.99, 'chaussures1.jpg', '2022-04-24 13:04:39', 0, 7),
(72, 'chausseurs4 produit', 'chausseurs4 produit chausseurs4 produitchausseurs4 produit chausseurs4 produit chausseurs4 produit', 899.99, 'chaussures2.jpg', '2022-04-24 13:04:39', 0, 7),
(73, 'chausseurs5 produit', 'chausseurs5 produit chausseurs5 produitchausseurs5 produitchausseurs5 produitchausseurs5 produitchausseurs5 produit', 129.99, 'chaussures1.jpg', '2022-04-24 13:04:39', 0, 7),
(74, 'chausseurs6 produit', 'chausseurs6 produit chausseurs6 produitchausseurs6 produitchausseurs6 produitchausseurs6 produitchausseurs6 produit', 200, 'chaussures2.jpg', '2022-04-24 13:04:39', 0, 7),
(75, 'chausseurs7 produit', 'chausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produitchausseurs7 produit', 299.99, 'chaussures1.jpg', '2022-04-24 13:04:39', 0, 7),
(76, 'chausseurs8 produit', 'chausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produitchausseurs8 produit', 139.99, 'chaussures2.jpg', '2022-04-24 13:18:10', 14, 7),
(77, 'chausseurs9 produit', 'chausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produitchausseurs9 produit', 159.99, 'chaussures1.jpg', '2022-04-24 13:04:39', 0, 7),
(78, 'chausseurs10 produit', 'chausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produitchausseurs10 produit', 999.99, 'chaussures2.jpg', '2022-04-24 13:04:39', 0, 7),
(79, 'Pantalons1 produit', 'Pantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produitPantalons1 produit', 299.99, 'pantalons1.jpg', '2022-04-24 13:04:39', 0, 3),
(80, 'Pantalons2 produit', 'Pantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produitPantalons2 produit', 499.99, 'pantalons2.jpg', '2022-04-24 13:04:39', 0, 3),
(81, 'Pantalons3 produit', 'Pantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produitPantalons3 produit', 499.99, 'pantalons1.jpg', '2022-04-24 13:04:39', 0, 3),
(82, 'Pantalons4 produit', 'Pantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produitPantalons4 produit', 899.99, 'pantalons2.jpg', '2022-04-24 13:04:39', 0, 3),
(83, 'Pantalons5 produit', 'Pantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produitPantalons5 produit', 129.99, 'pantalons1.jpg', '2022-04-24 13:04:39', 0, 3),
(84, 'Pantalons6 produit', 'Pantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produitPantalons6 produit', 200, 'pantalons2.jpg', '2022-04-24 13:04:39', 0, 3),
(85, 'Pantalons7 produit', 'Pantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produitPantalons7 produit', 299.99, 'pantalons1.jpg', '2022-04-24 13:04:39', 0, 3),
(86, 'Pantalons8 produit', 'Pantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produitPantalons8 produit', 139.99, 'pantalons2.jpg', '2022-04-24 13:04:39', 0, 3),
(87, 'Pantalons9 produit', 'Pantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produitPantalons9 produit', 159.99, 'pantalons1.jpg', '2022-04-24 13:04:39', 0, 3),
(88, 'Pantalons10 produit', 'Pantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produitPantalons10 produit', 999.99, 'pantalons2.jpg', '2022-04-24 13:04:39', 0, 3);

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
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `user_email`, `user_password`, `user_nom`, `user_prenom`) VALUES
(2, 'ossamakharkhach@gmail.com', 'fe4cb805df9e9664e795c28e9841c0f3', 'KHARKHACH', 'OSSAMA'),
(3, 'karimkasmi@gmail.com', '2167a6ac80340b69f3b05b800417d6c7', 'kasmi', 'karim');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `ville_cp`, `ville_nom`, `ville_nom_reg`) VALUES
(5, '63254', 'BERKANE', 'Oriental'),
(6, '20092', 'Oujda', 'Oriental'),
(7, '23874', 'BERKANE', 'Oriental'),
(8, '63252', 'AKLIM BERKANE', 'AKLIM BERKANE');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `foreign5` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign6` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `foreign3` FOREIGN KEY (`id_paiment`) REFERENCES `mode_paiment` (`id_paiment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `foreign7` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `foreign` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign2` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`),
  ADD CONSTRAINT `product_review_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
