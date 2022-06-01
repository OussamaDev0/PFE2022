-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 juin 2022 à 09:57
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
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Administrator1', 'admin@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_prod`
--

DROP TABLE IF EXISTS `categorie_prod`;
CREATE TABLE IF NOT EXISTS `categorie_prod` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `cat_libelle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'chaussures'),
(8, 'SrawelLLL');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_prenom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cli_adresse` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cli_tel` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `id_ville` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `foreign5` (`id_user`),
  KEY `foreign6` (`id_ville`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `facteur_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `com_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `com_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_produit` int(11) NOT NULL,
  `id_paiment` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `foreign3` (`id_paiment`),
  KEY `user_id` (`user_id`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `facteur_no`, `qty`, `prix_total`, `size`, `com_status`, `com_date`, `id_produit`, `id_paiment`, `user_id`, `id_client`) VALUES
(1, '12312143', 3, 499.99, '42', 'Complete', '2022-05-08 23:00:00', 70, 1, 2, 0),
(9, '85333110', 2, 225.98, 'M', 'pending', '2022-05-27 18:57:26', 98, 2, 2, 4),
(10, '70993791', 1, 121.99, 'XXL', 'Complete', '2022-05-28 12:33:45', 102, 2, 2, 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id_user`, `id_produit`, `date_vi`) VALUES
(2, 18, '2022-04-24 12:04:21'),
(2, 14, '2022-04-24 12:04:50'),
(2, 67, '2022-04-24 12:04:53'),
(2, 75, '2022-04-24 12:05:17'),
(2, 75, '2022-04-24 12:24:42'),
(3, 71, '2022-04-24 12:30:36'),
(2, 75, '2022-04-24 13:34:06'),
(2, 67, '2022-04-24 14:31:35'),
(2, 77, '2022-04-24 23:55:32'),
(2, 77, '2022-04-24 23:55:34'),
(2, 69, '2022-04-25 00:58:40'),
(2, 69, '2022-04-25 00:58:44'),
(2, 69, '2022-04-25 01:01:25'),
(2, 69, '2022-04-25 01:01:28'),
(2, 68, '2022-04-25 16:22:17'),
(2, 67, '2022-04-25 16:22:57'),
(2, 67, '2022-04-25 16:23:02'),
(2, 69, '2022-04-25 17:55:31'),
(2, 69, '2022-04-25 17:55:36'),
(2, 69, '2022-04-26 14:09:50'),
(2, 67, '2022-04-26 14:55:18'),
(2, 18, '2022-04-26 14:58:59'),
(2, 78, '2022-04-26 15:09:10'),
(2, 69, '2022-04-26 15:09:21'),
(2, 69, '2022-04-26 15:09:24'),
(2, 15, '2022-04-26 15:09:27'),
(2, 15, '2022-04-26 15:09:29'),
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
(2, 67, '2022-05-04 15:33:15'),
(2, 67, '2022-05-04 18:30:22'),
(2, 67, '2022-05-04 18:32:09'),
(2, 67, '2022-05-04 18:32:27'),
(2, 67, '2022-05-04 18:37:09'),
(2, 67, '2022-05-04 18:37:25'),
(2, 67, '2022-05-04 18:38:11'),
(2, 67, '2022-05-04 18:39:50'),
(2, 67, '2022-05-04 18:42:05'),
(2, 67, '2022-05-04 18:42:17'),
(2, 67, '2022-05-04 18:43:32'),
(2, 67, '2022-05-04 18:45:00'),
(2, 67, '2022-05-04 18:46:14'),
(2, 69, '2022-05-04 18:49:13'),
(2, 67, '2022-05-09 19:03:59'),
(2, 67, '2022-05-11 09:34:34'),
(2, 67, '2022-05-11 09:37:22'),
(2, 67, '2022-05-11 09:37:51'),
(2, 67, '2022-05-11 09:38:14'),
(2, 76, '2022-05-11 11:34:43'),
(2, 67, '2022-05-11 11:36:27'),
(2, 67, '2022-05-11 11:37:09'),
(2, 67, '2022-05-11 11:37:31'),
(2, 18, '2022-05-14 12:52:44'),
(2, 18, '2022-05-14 13:46:05'),
(2, 76, '2022-05-17 10:39:23'),
(2, 89, '2022-05-17 10:48:10'),
(2, 89, '2022-05-17 10:50:24'),
(2, 89, '2022-05-17 10:51:13'),
(2, 89, '2022-05-17 10:51:35'),
(2, 89, '2022-05-17 10:53:19'),
(2, 89, '2022-05-17 10:54:26'),
(2, 89, '2022-05-17 10:54:59'),
(2, 89, '2022-05-17 10:55:59'),
(2, 89, '2022-05-17 10:57:43'),
(2, 89, '2022-05-17 10:58:03'),
(2, 89, '2022-05-17 11:00:51'),
(2, 89, '2022-05-17 11:04:38'),
(2, 89, '2022-05-17 11:07:16'),
(2, 74, '2022-05-17 11:07:21'),
(2, 74, '2022-05-17 11:08:23'),
(2, 74, '2022-05-17 11:12:37'),
(2, 74, '2022-05-17 11:15:39'),
(2, 74, '2022-05-17 11:15:50'),
(2, 67, '2022-05-17 11:16:15'),
(2, 67, '2022-05-17 11:16:21'),
(2, 67, '2022-05-17 11:40:10'),
(2, 67, '2022-05-17 11:40:41'),
(2, 67, '2022-05-17 12:27:46'),
(2, 67, '2022-05-17 12:31:14'),
(2, 67, '2022-05-17 12:31:26'),
(2, 69, '2022-05-18 11:00:50'),
(2, 97, '2022-05-22 20:51:20'),
(2, 97, '2022-05-22 20:57:46'),
(2, 97, '2022-05-22 20:59:32'),
(2, 97, '2022-05-22 20:59:55'),
(2, 97, '2022-05-22 21:01:03'),
(2, 97, '2022-05-22 21:03:20'),
(2, 97, '2022-05-22 21:12:04'),
(2, 97, '2022-05-22 21:12:41'),
(2, 97, '2022-05-22 21:13:08'),
(2, 97, '2022-05-22 21:13:33'),
(2, 97, '2022-05-22 21:13:54'),
(2, 97, '2022-05-22 21:14:20'),
(2, 97, '2022-05-22 21:16:15'),
(2, 97, '2022-05-22 21:19:38'),
(2, 97, '2022-05-22 21:33:39'),
(2, 97, '2022-05-22 21:40:41'),
(2, 97, '2022-05-22 21:42:36'),
(2, 97, '2022-05-22 21:54:04'),
(2, 97, '2022-05-22 21:55:24'),
(2, 97, '2022-05-22 21:58:24'),
(2, 97, '2022-05-22 22:00:19'),
(2, 98, '2022-05-22 22:05:16'),
(2, 99, '2022-05-22 22:12:32'),
(2, 98, '2022-05-27 18:52:10'),
(2, 98, '2022-05-27 18:52:36'),
(2, 99, '2022-05-27 23:02:13'),
(2, 102, '2022-05-27 23:02:19'),
(2, 102, '2022-05-27 23:21:26'),
(2, 97, '2022-05-27 23:22:00'),
(2, 103, '2022-05-27 23:24:23'),
(2, 99, '2022-05-27 23:24:42'),
(2, 103, '2022-05-27 23:26:42'),
(2, 102, '2022-05-28 12:32:02'),
(2, 102, '2022-05-28 12:33:04'),
(2, 102, '2022-05-30 11:19:13'),
(2, 102, '2022-05-30 11:20:53'),
(2, 102, '2022-05-30 11:21:36'),
(2, 102, '2022-05-30 11:21:44'),
(2, 104, '2022-05-30 11:26:55'),
(2, 105, '2022-05-30 11:35:18'),
(2, 105, '2022-05-30 11:40:31'),
(2, 105, '2022-05-30 11:40:48'),
(2, 98, '2022-05-30 11:41:03'),
(2, 106, '2022-05-30 11:48:23'),
(2, 106, '2022-05-30 11:52:19'),
(2, 106, '2022-05-30 11:52:26'),
(2, 106, '2022-05-30 11:52:36'),
(2, 106, '2022-05-30 11:52:52'),
(2, 106, '2022-05-30 11:55:49'),
(2, 106, '2022-05-30 11:57:02'),
(2, 106, '2022-05-30 11:58:51'),
(2, 106, '2022-05-30 12:00:45'),
(2, 106, '2022-05-30 12:00:52'),
(2, 106, '2022-05-30 12:03:11'),
(2, 106, '2022-05-30 12:04:11'),
(2, 106, '2022-05-30 12:05:27'),
(2, 106, '2022-05-30 12:05:44'),
(2, 106, '2022-05-30 12:06:23'),
(2, 106, '2022-05-30 12:07:02'),
(2, 106, '2022-05-30 12:07:20'),
(2, 108, '2022-05-30 15:06:36'),
(2, 108, '2022-05-30 15:33:26'),
(2, 118, '2022-05-30 17:02:37'),
(2, 120, '2022-05-30 17:46:56');

-- --------------------------------------------------------

--
-- Structure de la table `mode_paiment`
--

DROP TABLE IF EXISTS `mode_paiment`;
CREATE TABLE IF NOT EXISTS `mode_paiment` (
  `id_paiment` int(11) NOT NULL,
  `paiment_libelle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_paiment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `mode_paiment`
--

INSERT INTO `mode_paiment` (`id_paiment`, `paiment_libelle`) VALUES
(1, 'PayPal'),
(2, 'paiement a la livraison'),
(3, 'Carte bancaire');

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
  `user_review` text COLLATE utf8_unicode_ci NOT NULL,
  `date_time` int(11) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `id_user` (`id_user`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `product_review`
--

INSERT INTO `product_review` (`review_id`, `id_user`, `id_produit`, `user_rating`, `user_review`, `date_time`) VALUES
(1, 2, 67, 3, 'This is very good product and very nice product', 1651584667),
(3, 3, 67, 5, 'WAlllahilla waaa3er kannse7 bih NAss li mêhtemin', 1651584667),
(5, 2, 2, 2, 'WAlllahilla waaa3er kannse7 bih NAss li mêhtemin', 1651584667),
(6, 2, 67, 2, 'this is very goood product mise a jour', 1651670370),
(7, 3, 67, 2, 'tres bon produit', 1651689812),
(8, 2, 67, 5, 'bestt', 1652269029),
(9, 2, 67, 5, 'aa', 1652269051),
(10, 2, 18, 2, 'YTTYYYTYTYT', 1652535965),
(11, 2, 67, 2, 'Bon prix', 1652787641);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` text COLLATE utf8_unicode_ci NOT NULL,
  `prod_description` text COLLATE utf8_unicode_ci NOT NULL,
  `prod_prix` float NOT NULL,
  `prod_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date_Ajoute` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nb_ventes` int(20) NOT NULL DEFAULT '0',
  `id_cat` int(11) NOT NULL,
  `prod_img1` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prod_img2` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prod_img3` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prod_img4` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_produit`),
  KEY `etrangeree` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `prod_nom`, `prod_description`, `prod_prix`, `prod_img`, `date_Ajoute`, `nb_ventes`, `id_cat`, `prod_img1`, `prod_img2`, `prod_img3`, `prod_img4`) VALUES
(97, 'Homme Chemise graphique Ã  bouton (sans t-shirt)', '\r\nCouleur:	Blanc<br />\r\nStyle:	Casual<br />\r\nType de motif:	ImprimÃ©s alÃ©atoires, graphique<br />\r\nType:	Chemise<br />\r\nType du col:	Col chemise<br />\r\ndÃ©tails:	Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 117, 'p9Dh1o8JhiQHKBdzSLr94Fof6LYyHL.jpg', '2022-05-30 11:29:42', 0, 1, '8gZLeAZhJDhPV2Ro9bdoJn4RQhmgvz.jpg', 'vrwiGXE9P7bvGeZ1hliKca8SI2faMl.jpg', '', ''),
(98, 'ROMWE Homme Chemise Ã  rayures (sans t-shirt)', '\r\nCouleur:	Noir et Blanc<br />\r\nStyle:	Casual<br />\r\nType de motif:	RayÃ©<br />\r\nType:	Chemise<br />\r\nType du col:	Col chemise<br />\r\ndÃ©tails:	Poche, Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique\r\n', 112.99, 'LCQuBdBKYt4po14XGsZdOJ9WEzWKPs.jpg', '2022-05-30 11:29:22', 0, 1, '0rgDL5pROAU6Mf3D0S8u7L9V9ELWL1.jpg', 'c6B3vxCworJihkRp2NBALCF06g7wIG.jpg', 'ovIUOmmYT0FTqyUxfyIubKklggmetK.jpg', 'oJPzBSyyYwBqCb2f35RoGporNFJxmh.jpg'),
(99, 'Chemise avec broderie et piÃ¨ce', '\r\nCouleur:	Noir<br />\r\nStyle:	BCBG<br />\r\nType de motif:	Lettres, Drapeau<br />\r\nType:	Chemise<br />\r\nType du col:	Col base-ball<br />\r\ndÃ©tails:	Broderie, Ã‰cussons, Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique\r\n', 139.99, 'txWL3evIyfqHKpCBe5gEb5loJI3bdI.jpg', '2022-05-30 11:28:57', 0, 1, 'MBvF6iky8OzpCq9v5YUy9bqm6XaKzx.jpg', 'wsgyX6vCfs056ZcqDaUf3KJqbX056R.jpg', 'nEQLO0kCynSkzvjke6KXGRcwVr87L5.jpg', 'sSORl8RksWxkkx1I3Tr2OZUSKmXIP9.jpg'),
(102, 'Homme Chemise avec imprimÃ©', 'Couleur:	Multicolore<br />\nStyle:	Vacances<br />\nType de motif:	Tout ImprimÃ©<br />\nType:	Chemise<br />\nType du col:	Col chemise<br />\ndÃ©tails:	Boutons<br />\nLongueur des manches:	Manches courtes<br />\nType de manches:	Classiques<br />\nLongueur:	Classique<br />\n', 121.99, 'JTBulXtVOGk65Su5plERS5enf3kzCb.jpg', '2022-05-30 11:17:22', 0, 1, 'HzLug0SjOxSJiPWHw4m6qc7m5Clyvk.jpg', 'sUyiiTgleyetkMa04z1c4Kldc7S3eQ.jpg', '2sY2klOQeQkkimeA5u3Asgi5QJmNYk.jpg', 'gFr9ZBQzNhkPTWMnedhIaVAPHe2X7u.jpg'),
(103, 'Extended Sizes Homme Chemise Ã  imprimÃ© floral et tropicalÃª', '\r\nCouleur:	Multicolore<br />\r\nStyle:	Vacances<br />\r\nType de motif:	Tropical<br />\r\nType:	Chemise<br />\r\nType du col:	Revers<br />\r\ndÃ©tails:	Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique\r\n', 125.99, 'C9IjZunU4mhMEWrshsEZ5RSik9mPY6.jpg', '2022-05-30 11:28:27', 0, 1, 'W556vnwUHV0xBiMY7qRGPYSjwPeAOM.jpg', 'H3uubwmxgUqUDO7R3JjQl3HzBsPbwT.jpg', 'FtBSwNBiZT3LA85rUTR3CS4mODkylO.jpg', 'GrSXdJV1xcXSJOIU9I7Ldft6zpMycy.jpg'),
(104, 'Chemise moulante avec imprimÃ©', 'Couleur:	Blanc<br />\r\nStyle:	Vacances<br />\r\nType de motif:	Tribal<br />\r\nType:	Chemise<br />\r\nType du col:	Col chemise<br />\r\nLongueur des manches:	Manches longues<br />\r\nLongueur:	Classique', 152, 'SXXyPZzoAsjMOFumGHa9Uolzg3TlT6.jpg', '2022-05-30 11:26:43', 0, 1, 'HcrrT0jdB6SxL8PEUcU9jyLe57uaeH.jpg', '1MIVY5lpgepXdc2AGKwU5fLRbfM4hB.jpg', 'vAx3OeRfjuNqcoH7boGTewgTjKd9hH.jpg', ''),
(105, 'Chemise avec liserÃ© contrastant', '<br />\r\nCouleur:	Blanc<br />\r\nStyle:	Travail<br />\r\nType de motif:	Blocs de couleur<br />\r\nType:	Chemise<br />\r\nType du col:	Col chemise<br />\r\ndÃ©tails:	LiserÃ© contrastant<br />\r\nLongueur des manches:	Manches longues<br />\r\nLongueur:	Classique<br />\r\n', 152, 'vywmoqtnEcMTR5H227MRhCwRjA8YF5.jpg', '2022-05-30 11:35:02', 0, 1, 'cmTpV12rFp0VJvuRx7z13ZXRm2xnmE.jpg', '5zTISSubN9WDdmDMu4fNchpciYdIZO.jpg', '', ''),
(106, 'Extended Sizes Homme Chemise Ã  imprimÃ© tropical', 'Couleur:	Multicolore<br />\r\nStyle:	Vacances<br />\r\nType de motif:	Tropical<br />\r\nType:	Chemise<br />\r\nType du col:	Revers, Ã‰paules dÃ©nudÃ©es<br />\r\ndÃ©tails:	Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 139.99, 'kxLKkuDphuQ9ixQyasRbtjfLzqdELA.jpg', '2022-05-30 11:46:24', 0, 1, 'm8dWADINU20v7lvW5UMOgKAlvCJmwc.jpg', '6rJvMdNv8Creir9T6NvGoOj4l2Ym1N.jpg', 'yXQwOurzYzwxRbNUr5uCmBpA5TR2n3.jpg', 'vkV0pvJ9PKROsE29BU9l9fbqfPCTTJ.jpg'),
(107, 'Extended Sizes Homme Chemise Ã  imprimÃ© tropical avec poche', 'Couleur:	Multicolore<br />\r\nStyle:	Vacances<br />\r\nType de motif:	Tropical<br />\r\nType:	Chemise<br />\r\nType du col:	Col chemise<br />\r\ndÃ©tails:	Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques', 130, 'JSsR38r8maCQd8QjnMVEDJFH00L5lC.jpg', '2022-05-30 14:59:29', 0, 1, 's7H8UYTWjILbdNITh5ty6ZxmrwLyGA.jpg', 'jqlczuUgVdLliOSB8H5ITXuZZZSYeN.jpg', 'XaWiKGescbQzY8FVdAocna10HhyZgQ.jpg', 'lQgeoTwsoQkmHNaGKrGwTyu11UxkNN.jpg'),
(108, 'Chemises homme Poche Avec boutons devant Casual Unicolore', 'Couleur:	Blanc<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Top<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Boutons, Poche<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 141, 'QL0XxUjoxvIXvFdiZUe7437CGE4mdv.jpg', '2022-05-30 15:03:41', 0, 1, 'jgiDDJBLZQ1HCyNB3m1V7bso5Oe4Uj.jpg', '4rD4QtFtrB3XtDdYNrcPSWlxpPGWhS.jpg', 'X11HzzFVebxdXGMBRKfgul9kzw5t1a.jpg', 'cXijPc2fNuKmLw1Sw6Svdp0wJJdzHY.jpg'),
(109, 'Extended Sizes Homme Polo Ã  lettres Ã  rayures', 'Couleur:	Vert<br />\r\nStyle:	BCBG<br />\r\nType de motif:	Lettres, RayÃ©<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Col en contraste, Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 185, 'OuhP1zbkQHSEvFV3oenC5DOxsJ0oJ7.jpg', '2022-05-30 15:24:10', 0, 2, 'HIbLR3g1Uy3Bmu8UYHmMtHrayL8hg2.jpg', 'MLm0r9yE617PyE8TiijWasgfUht8kZ.jpg', 'TF4o03aHbgCBGPBP0lYnvSxcju7S9x.jpg', '45OttB4AWulA6XA294iUSifJr28sF0.jpg'),
(110, 'Extended Sizes Homme Polo Ã  imprimÃ© gÃ©omÃ©trique Ã  col contrastant', 'Couleur:	Bleu ciel<br />\r\nStyle:	Travail<br />\r\nType de motif:	GÃ©omÃ©trique<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Boutons, Col en contraste<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique<br />\r\n<br />\r\n', 157, 'sIHsNUsws7Zf5ssHwjHphb9pgzLN47.jpg', '2022-05-30 15:28:01', 0, 2, 'PeyiTr4gVmpn6jnd9O8QBpi6MaUlhV.jpg', 'u2J0WcWTGhoRIs8dwQfoZrW4Snj3XP.jpg', '6Koa54Lvr1b3N0w47gj6c1M9a86jtd.jpg', 'PDforED0ErovtqzfKa3jiRdPo2fbJ0.jpg'),
(111, 'Extended Sizes Homme Polo Ã  blocs de couleurs Ã  lettres manches raglan', 'Couleur:	Noir et Blanc<br />\r\nStyle:	Casual<br />\r\nType de motif:	Lettres, Blocs de couleur<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Col en contraste, Fermeture Ã©clair, Rayures latÃ©rales<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Manches raglan<br />\r\nLongueur:	Classique', 168, '3bkT8FG0GpoqJjSsljjwFn1Qr00y2t.jpg', '2022-05-30 15:32:30', 0, 2, 'zzUJk5bLN3JksyM7S73mKkLvPnpNdi.jpg', 'eDIp10IgawQOJnnymuoSZ701WlLdOa.jpg', 'tb509b7BNZviTkByQSRMLm2BUGYEXl.jpg', 'cMdd0NdatcHL0coRZ7Z53kiYpc3NTS.jpg'),
(112, 'Homme Polo lettre & Ã  imprimÃ© couronne', 'Couleur:	Blanc<br />\r\nStyle:	BCBG<br />\r\nType de motif:	Lettres<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Boutons, LiserÃ© contrastant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 139.99, 'DuLfXr9k23NO2NmPG9WQeMg8rhyf4c.jpg', '2022-05-30 15:37:18', 0, 2, 'wzoh8Jrr2oTjhfSYRbsVAA8apSOEjK.jpg', '7lZkn6uYtivuJ3JZOn4N2SdcHMA3sV.jpg', '', ''),
(113, 'Homme Polo Ã  pois Ã  col montant', 'Couleur:	Noir<br />\r\nStyle:	Travail<br />\r\nType de motif:	Pois<br />\r\nType du col:	Col montant<br />\r\ndÃ©tails:	Boutons<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 135.99, 'T9lrrw9Tv3E8K2sFQ1OFJ4rUiSj8mo.jpg', '2022-05-30 15:39:55', 0, 2, 'qPxaZvVVkQNUETY3eHAaeV8scxVDbD.jpg', 'o6DMWkWnO7osKS6V2ti9NbrH5shQul.jpg', 'lSrDN9PVgEZu1wXhcNBLmIJn4m3Obi.jpg', ''),
(114, 'Homme Polo Ã  motif slogan Ã  bouton', 'Couleur:	Jaune moutarde<br />\r\nStyle:	Casual<br />\r\nType de motif:	Slogan<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 126.99, 'aB7W9Rx3RaR7szq81v4FrM5gySXxaX.jpg', '2022-05-30 15:45:47', 0, 2, 'pVRVEQ6qBS2S2yQmsbpX612vaUZm1i.jpg', 'TWLLGHJX5xKVMzh4wZSVJRne8YsIiG.jpg', 'NPnCQtfY1vpE8IcmKoDCzHhdRrJ4d7.jpg', 'ghmh0NyWsi8YrnSH3ibFrKKQZM1QQp.jpg'),
(115, 'Extended Sizes Homme Polo Ã  bordure contrastante', 'Couleur:	Bleu lagon<br />\r\nStyle:	Casual<br />\r\nType de motif:	Blocs de couleur<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	LiserÃ© contrastant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 152.99, 'I70R2OsP1udl649JiWtlQkCFKyRosf.jpg', '2022-05-30 15:48:56', 0, 2, 'ts485Ic7nMYUaG2mFPB3xFI1FNtail.jpg', '1yXSyFybYutN1Zb0sKzaeYlKbJr9nf.jpg', 'ghQyNB717cEy9VoQa3NHIu7edc6lgM.jpg', 'YMiq9lqj6JD6rgCYsL0zFAaj1XxHIw.jpg'),
(116, 'Extended Sizes Homme Polo Ã  bordure contrastante', 'Couleur:	Rouge<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType du col:	Col montant<br />\r\ndÃ©tails:	Boutons, LiserÃ© contrastant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 156.99, 'u8UUHfqN87Tg3q0mjtmBKwmwMrItjM.jpg', '2022-05-30 15:51:58', 0, 2, '7k4y8iDXl46BzAlrQJCRSC5Tyzepwo.jpg', 'uFer9MdoCoLpwnqID8hoToH5Nq1cuS.jpg', 'xcDsvIP46pJMaMoliHmLoaUpWVu3Ax.jpg', 'cCNr2A87p3hRGk87GBRGFZkPaT3AaV.jpg'),
(117, 'ROMWE Homme Polo Ã  blocs de couleurs ajourÃ©', 'Couleur:	Multicolore<br />\r\nStyle:	Casual<br />\r\nType de motif:	Blocs de couleur<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Transparent<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 119.99, 'imiWMurIEZEh4nCQJ81njaTV6QIIgJ.jpg', '2022-05-30 15:55:51', 0, 2, 'KoNnaOc0NEAp5QjSKvB35Ul3ewsEbi.jpg', 'w8NdkKcPAfbhVf4ZiZkclyeqqard8e.jpg', 'zbaZyeoD5pQ6lpAQtWRYCv5IY8mn9U.jpg', 'NtBLn0lcEvthSTzRiLHzUmCQILGbql.jpg'),
(118, 'Homme Polo Ã  rayures', 'Couleur:	Tabac<br />\r\nStyle:	Casual<br />\r\nType de motif:	RayÃ©<br />\r\nType du col:	Polo<br />\r\ndÃ©tails:	Col en contraste, Avec boutons devant<br />\r\nLongueur des manches:	Manches courtes<br />\r\nType de manches:	Classiques<br />\r\nLongueur:	Classique', 133.99, 'syOGHyLFNhX4bKt5PWrNkBqm17evdE.jpg', '2022-05-30 17:00:11', 0, 2, 'FeAOo9Lo311SDIqQARSt8kdrXz1ntx.jpg', '4VCLofuCtyzIsu3EydbFsBbo1xM47f.jpg', 'PTlEXzTlhdhiL6UkuL1sfHugM8B1hN.jpg', 'McH4JVofsfQaveeLGfXbRk2CgNMmuL.jpg'),
(119, 'Extended Sizes Homme Pantalon Ã  carreaux', 'Couleur:	Gris<br />\r\nStyle:	Casual<br />\r\nType de motif:	Carreau<br />\r\nType:	Carotte<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 173.99, '8ticcWKtDqG7eWkADR2XWIM302dc72.jpg', '2022-05-30 17:09:56', 0, 3, 'KyFmUf9jnbkudKAmqM8M3wjQTgUuZB.jpg', 'CrsCIamHbq2rvCSCPsO6ZlzuEkC5ZP.jpg', '2PGQmQ08wqOSYMX9ciNVfxetPVDQxR.jpg', 'sREmMNYTwaMq5o9h7Nyx5Z5Nzb9RUk.jpg'),
(120, 'Homme Pantalon Ã  poche Ã  cordon', 'Couleur:	Noir<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Carotte<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 159.99, 'ATXhTPO3dyagUc7zTUoFAgulJ1e3Ph.jpg', '2022-05-30 17:13:30', 0, 3, 'V8SR1JOmMHOPfV67g7TD3tLiD7PlWY.jpg', 'oR9LPZvK8018x0tJISR6RrBvu0zAlp.jpg', 'PRttsSaKkEZlVzsCNjc0KJYA006ZBM.jpg', ''),
(121, 'Homme Pantalon cargo Ã  applique lettre poche Ã  rabat Ã  cordon', 'Couleur:	Kaki<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Lettres<br />\r\nType:	Pantalons cargo<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Ã‰cussons, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 172.99, 'GeC8yCVyEGOnoSGpjGblZ7On4DonHx.jpg', '2022-05-30 17:16:27', 0, 3, 'BKVu83d0VO8znLaaXzl21GLX5swfu4.jpg', 'pzls73v7rVguLxuWwzaPkpxdVBnMdG.jpg', 'cNdb4qiQBWiVKvfvt18YnhPDTyUq8v.jpg', 'c1g6TTYiz0OWBGxzaAJ8FXPYtZFJjM.jpg'),
(122, 'Homme Pantalon floral alÃ©atoire & Ã  imprimÃ© Ã  cordon', 'Couleur:	Noir<br />\r\nStyle:	Casual<br />\r\nType de motif:	Floral, Motif Paisley<br />\r\nType:	Carotte<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 177.99, 'mYlnLzHlrOxdiBCq5oaKD7Engpr391.jpg', '2022-05-30 17:24:16', 0, 3, 'b3YRhJzzlVScsQVXDK3vlGjoAOTDn8.jpg', 'GTf96zulnGxvuD9wkhzfWyre3cZSce.jpg', 'e4eZU7Xq8Y7FZ7pUZXBsb9pF41pvBq.jpg', 'VUsxbi1Nw66UUcDEljEYVloPj0wq8o.jpg'),
(123, 'Homme Pantalon Ã  dÃ©tail pliÃ© en velours cÃ´telÃ©', 'Couleur:	Marron fonÃ§Ã©<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Carotte<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Boutons, Poche, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Pantacourt', 129.99, 'EzfKKvB2JbZzMGLfUJxFd32Poy3PKC.jpg', '2022-05-30 17:27:39', 0, 3, 'qEr7HQbhaKQo0LnMvJgutlULxF9xNR.jpg', 'jZX6zkDSyS1h4BYz8czn4vIdDrPtBd.jpg', 'lueNedlA6ewKIsMerNYA8FJKgu9rSO.jpg', 'yw4iE3vo6ixS2uvxWfsKm4UVmhu1qa.jpg'),
(124, 'Homme Pantalon cargo Ã  cordon', 'Couleur:	Noir<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Unicolore<br />\r\nType:	Pantalons cargo<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 219.99, 'ApecAcv7mQHTGpcZo0pyiXSeB7SYBB.jpg', '2022-05-30 17:30:20', 0, 3, 'VirciC8o5wi8vIAGQLMqPn9lEcDR34.jpg', 'aeQC9mE1fILO888lfsd7P8nmMcO0Dl.jpg', 'S345dZCG73pl8Qa50b8RJm7kstDNDD.jpg', ''),
(125, 'Homme Pantalon cargo Ã  applique poche Ã  rabat boucle', 'Couleur:	Militaire verte<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Unicolore<br />\r\nType:	Pantalons cargo<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Ã‰cussons, Poche, Ruban<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 224.99, 'IIWWiXNc8ct48GNsPhIz08wxrNsn0f.jpg', '2022-05-30 17:32:41', 0, 3, 'W1mIEa5FFKrnhjz3xQ0yApJoaQgxEF.jpg', 'cigimyJcGhxHqySRFiUVwhQjuNsGGr.jpg', '', ''),
(126, 'Homme Pantalon Ã  imprimÃ© camouflage Ã  cordon', 'Couleur:	Multicolore<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Militaire<br />\r\nType:	Carotte<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Pantacourt', 199.99, 'INEx0DQxvLZGg2FpGjd4YLgjQ9fkhQ.jpg', '2022-05-30 17:35:17', 0, 3, 'Jxwohw2pCSwGNUoL0oxunEde4teTzy.jpg', 'JZwxlvSKh5MwrF3Xv30wfu7nomZW26.jpg', '', ''),
(127, 'Pantalon de survÃªtement zippÃ© avec cordon Ã  la taille', 'Couleur:	Noir<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Unicolore<br />\r\nType:	Pantalons cargo<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 224.99, 'pZ4jDQ94WnGF5K7PEk96uke11apJYR.jpg', '2022-05-30 17:39:06', 0, 3, 'cUKmPRXF25ccVH0nZSYorzeoJ9asKP.jpg', 'GZQN706LAwpj3dESgNHCnfhT9LldUB.jpg', '3tkRuqdvSpX14wUZmhJobeMXcpPyzT.jpg', ''),
(128, 'Homme Pantalon unicolore Ã  dÃ©tail pliÃ© Ã  anneau', 'Couleur:	Noir<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Boutons, Poche, Anneau, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 174.99, '4cJHGJRiN8KuZliArI7ei0YYEh69wy.jpg', '2022-05-30 17:44:28', 0, 3, 'FrGVqyRbbSvug3acbdPcc4sOTS8J4Y.jpg', 'VNbP11f03o7BqmEzJfyBy7K1a3zwVO.jpg', 'KUcvcvVxf7F6yJo3Ot6M8wV3iJtCDS.jpg', '955YEfiFUCATZIGYpbZUocDIuk1yTn.jpg'),
(129, 'Homme Pantalon de survÃªtement unicolore Ã  poche', 'Couleur:	Gris pÃ¢le<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 129.99, 'xqTpbytWfRVh3KuTvAq5dAASUwrvK0.jpg', '2022-05-30 17:59:27', 0, 4, 'AwBbBAtqNI7HlNSWgOWg6l37anwByt.jpg', 'XwwASHcUJUDTB3qAjFTzbqr7e7W6hD.jpg', 'U9cxiWD4YHInTfh3xLIFb4VPrTSESq.jpg', ''),
(130, 'Homme Pantalon de survÃªtement en relief de lettre', 'Couleur:	Noir<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 224.99, 'txODaCozZ0C2OgHETONE8C4WR7KBUF.jpg', '2022-05-30 18:07:14', 0, 4, 'rZz24nGy3XL8RTxaEZBz2jaq8rwJZR.jpg', '4ANAmX3v3buJCWqOuYYWAFsdrcak2h.jpg', 'dbOvqCS6VJyLiZkY1AXdoksGfjNdsA.jpg', ''),
(131, 'Extended Sizes Homme Pantalon de survÃªtement fleuri & lettre japonaise Ã  cordon', 'Couleur:	Noir<br />\r\nType de motif:	Lettres, Floral<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long<br />\r\n<br />\r\n', 184.99, 'ah38RKy9WuUroHL7PFwLZ8ppPOeeNL.jpg', '2022-05-30 18:11:13', 0, 4, 'bTj9e4aHuJouLVVWFMnY4rTrPVbGMA.jpg', 'o38F73rkylRpEgLaN6iL4ILJryzUBO.jpg', 'daSuaG8Dxg3yxoeY718xn2tQAsxs6j.jpg', '6ozZ6qVbCaqihrHjrKqIlRwNiRRaRt.jpg'),
(132, 'Homme Pantalon de survÃªtement Ã  poche Ã  cordon', 'Couleur:	bleu indigo<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 174.99, 'btWNA8m0jwVDVF0iCnI7RhCjGCfZm1.jpg', '2022-05-30 18:15:03', 0, 4, 'psrRcqOOFkouyXJUaIw5zsoa4gfgvM.jpg', 'K9kxvpX2CvBM3nlXOtv84Omks5jvxv.jpg', '6aB51Tq6Rfat2y2GtZrkAZnpiKqFpk.jpg', 'xyvdRVUyd05HRY8gIrIVkcm6ACvItB.jpg'),
(133, 'Homme Pantalon de survÃªtement Ã  cordon', 'Couleur:	Gris pÃ¢le<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 249.99, 'MTeA2qeXu50qJrAFbGmJoySxu6R4Yt.jpg', '2022-05-30 18:20:26', 0, 4, 'Mc9jKoGDqPYMup20GkRf7xno2ZQw7m.jpg', 'EsZBjmUGXnoqXoYtrI7TRBth8Ew9vh.jpg', 'U4QzgWvP57yn3OX1eM0bB2b4lSf2to.jpg', 'W9cXMUI7bU8kiunlW4vCCjdJ1XxIdb.jpg'),
(134, 'Homme Pantalon de survÃªtement unicolore Ã  poche', 'Couleur:	Gris pÃ¢le<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Pantacourt', 359.99, 'z4qLWSghNRk1hHRUqDa2kaWqaCXZ4B.jpg', '2022-05-30 18:23:32', 0, 4, 'Ux67YPgVPFguTyzepPrJ3eFyoerYsL.jpg', 'xh4OzQBDgXeXqWOJ9OKe0RLVGCDBpG.jpg', 'OXhz8x97czhqyP51wKfm9FOiKSVFDG.jpg', ''),
(135, 'Homme Pantalon de survÃªtement Ã  applique lettre Ã  cordon', 'Couleur:	Vert<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Ã‰cussons, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 169.99, 'uos8Koqh1tsiLgQRzqPQZ5g70ZXIxt.jpg', '2022-05-30 18:26:57', 0, 4, 'ZzWEGJSpnKPyQmcvc0DXtY0QuA9fI9.jpg', 'YWJSiNwNTtq0OKUh6ynPv1XdxDyIrV.jpg', 'rAuZ1S9mbmMf18y7AvPUK8sLtDl5Rh.jpg', '495K8knC3XBceogLHkLAnnzYTtVO7m.jpg'),
(136, 'Homme Pantalon de survÃªtement Ã  imprimÃ© planÃ¨te Ã  cordon', 'Couleur:	Noir<br />\r\nType de motif:	Blocs de couleur<br />\r\ndÃ©tails:	Rayures latÃ©rales<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 189.99, 'ZeMc4zwqTkdVIOZLn9hnslWXdwiFUd.jpg', '2022-05-30 18:31:40', 0, 4, '2HTE9bvsAYgNw52jYmwIwCgK1E9nMF.jpg', 'ABTnhjpvH1L5q8PsVF13Gtkb259jhb.jpg', 'TBws9l37Snr3Ri4BWZaY5qCNqbelLO.jpg', 'qCqUS9VcJYAo1B6FKd2SIgYN9Bac4a.jpg'),
(137, 'Homme Pantalon de survÃªtement Ã  bouton Ã  poches Ã  cordon', 'Couleur:	Kaki<br />\r\nType de motif:	Unicolore<br />\r\ndÃ©tails:	Poche, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 219.99, 'fthKpe4sSIKQlnQeAojtyosvMn2laS.jpg', '2022-05-30 18:34:28', 0, 4, '6BSKFO4MSRbFGOaN6ZEsX5yXxQojm9.jpg', 'ySj2mK8CIk9Eg1KViPpnDQWyGrZhSU.jpg', 'ZQu6tXvDxzF3Jrzs057ik0sCYRMXwq.jpg', 'ERWHGGG3gKFP5J2Vxb77SwzM6UGspq.jpg'),
(138, 'Homme Pantalon de survÃªtement Ã  cordon avec bande latÃ©rale', 'Couleur:	Noir<br />\r\nType de motif:	Blocs de couleur<br />\r\ndÃ©tails:	Poche, Boutons, Cordon<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 269.99, 'Ay0lwxSSo4i1a0qJYgH50eqVne1nX7.jpg', '2022-05-30 18:36:59', 0, 4, 'B60X76riGWnufLc3zUfod9e7VNVgR2.jpg', 'velV7rbFSGYhbgBQMparoNdZrvS70G.jpg', 'tHfdI9vCouD5yCm4wMi0F8VL1HHVzJ.jpg', 'a3QPX0jxQaoE126Ig8pAfm03ayZmGJ.jpg'),
(139, 'Homme Bermuda Ã  poche', 'Couleur:	Militaire verte<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Poche<br />\r\nTour de taille:	Naturel', 139.99, 'Zck2Sc3VRyrTQWb2gt4Vg7un1jmagy.jpg', '2022-05-30 21:41:09', 0, 5, 'NxrQY54T4quillMhUbN182pUTvbF8L.jpg', 'JBtpcXTMaG18B2zBZGOiu3jnOFDVDN.jpg', 'zg1heuX29I5F1zmPZj567WlMutay7t.jpg', 'MatmBx89LWjeQMRnkQCLnLTwYvusuM.jpg'),
(140, 'Homme Short Ã  carreaux', 'Couleur:	Gris<br />\r\nStyle:	BCBG<br />\r\nType de motif:	Carreau<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Boutons, Poche, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel', 149.99, 'U0EEFxpp7dsdySkz9TpN1Sq4KMe8rm.jpg', '2022-05-30 21:44:32', 0, 5, 'R4CpYJInCz8dbref8IE8voM85rcGtX.jpg', 'yHDpLflgOQh4752nglPFRiXIZs0gGP.jpg', 'hlvUYlLgaE34FNHneF75ZVnETATSOU.jpg', 'ganVVDWDopShX5l7TGzFTlzbA70o0x.jpg'),
(141, 'Homme Short Ã  applique Ã  poche', 'Couleur:	Orange brÃ»lÃ©<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	ZippÃ©<br />\r\nTour de taille:	Naturel', 189.99, 'KPRjZNIGre2f3mpGIT6GMLOIQNtrfV.jpg', '2022-05-30 21:47:43', 0, 5, 'N4TuSmUUI5uUgXQkmMHmJXP0g87fDj.jpg', 'yomdIC3z8h6KVaD2ZEMqKG6l8nlqc7.jpg', 'QGVgzbQSBTPeYviAHr3mptiPE0JqUf.jpg', 'Q3n3yY5y56DOUDUbPNYETfEKmVmwrc.jpg'),
(142, 'Homme Short unicolore Ã  poche', 'Couleur:	Bleu gris<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Poche<br />\r\nTour de taille:	Naturel', 154.99, 'NB2x4r1BWAYSNmBGmEvriYTsfnEXKl.jpg', '2022-05-30 21:50:49', 0, 5, 'DQ4CRpmydDrW5Ar0MyY6wKzO1RBUkq.jpg', 'c5Z66KYiOqH5dXILrGO52hI9vtaAc2.jpg', 'Fl0kRqFXuF95uPtpXIoJ231gkWeRJQ.jpg', ''),
(143, 'Short avec poches et cordon', 'Couleur:	Kaki<br />\r\nStyle:	Casual<br />\r\nType de motif:	Blocs de couleur<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel', 194.99, 'zI5RN8CvKRwSSTiC6zCAXF6ZZzwZkk.jpg', '2022-05-30 21:54:05', 0, 5, 'oQcKgJuV5WiA0Vhmoyf08ere8Djmvh.jpg', 'lG14R65JjVpdn9yJcnbuF4xUhLb51d.jpg', '', ''),
(144, 'Short avec cordon', 'Couleur:	Bleu marine<br />\r\nStyle:	Casual<br />\r\nType de motif:	RayÃ©<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Ã‰cussons, Poche<br />\r\nTour de taille:	Naturel', 166.99, 'J4dVZkIgyM5fMPLFj2yt425thkPNOF.jpg', '2022-05-30 21:56:30', 0, 5, 'FPO5xClcBYABb8uHz9cpfY5IgzQgzi.jpg', 'QbvpRhMEysNwYxvTiNIP1rp5cD9RXT.jpg', '', ''),
(145, 'Homme Short poche Ã  rabat Ã  cordon', 'Couleur:	Kaki<br />\r\nStyle:	Casual<br />\r\nType de motif:	Unicolore<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel', 149.99, 'XUQXP4lB50se36R1aP0dEU3WUpafEJ.jpg', '2022-05-30 21:59:20', 0, 5, '6ubK0y5utiiEYZoUvqTl0Q8ubLLS6j.jpg', '7bv6IFrHZTGccLiF7XhiIcGzNbvNXm.jpg', 'KQsx8rMvecHJZ22WMbhoDLJJZkYYkc.jpg', ''),
(146, 'Bermuda avec poches', 'Couleur:	Gris<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Lettres<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	Taille Ã©lastique<br />\r\ndÃ©tails:	Poche, Ruban<br />\r\nTour de taille:	Naturel', 174.99, 'HuRKov9ysmOpFR0FXtZrEOitGHSyhZ.jpg', '2022-05-30 22:02:27', 0, 5, 'ptEQ05ixKsXksTObwidtt9NCofCFhf.jpg', '3xl9VXxSLZMhpcwtZ9pq7s7ma8Pn0b.jpg', 'fbLGT4qf6bMclbigWvDkCKVbcO6YYe.jpg', ''),
(147, 'Short avec cordon', 'Couleur:	Kaki<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Unicolore<br />\r\nType:	Bermuda, ample<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel', 164.99, 'rqjgtVOgvEYeVWMmTVAi6yf1eDS2E8.jpg', '2022-05-30 22:05:27', 0, 5, '5DlQ4bIZhlCrvfJNapBFJkt5gofS06.jpg', 'QEMO0jRgGb6gydtPrMM3T08dD89Qsw.jpg', '7oN5HAaYIpDWCLTFB5feLIbeBvnHnP.jpg', ''),
(148, 'Homme Short Ã  applique poche Ã  rabat cargo', 'Couleur:	Noir<br />\r\nStyle:	Style de rue<br />\r\nType de motif:	Unicolore<br />\r\nType:	Bermuda<br />\r\nType de fermeture:	Cordon Ã  la taille<br />\r\ndÃ©tails:	Cordon, Poche<br />\r\nTour de taille:	Naturel', 114.99, 'XqMMLW8kBDhYUVZX72hPSCaAIIAVUM.jpg', '2022-05-30 22:07:42', 0, 5, '8KfR7ma09z79o9ZFLM5fH8NqrnkMQz.jpg', 'qe3GG8O2Q1A9cRMqQ5nvLD5sfd3ZZA.jpg', 'rXhQwPn84LdGSvGGFVBdVhUwxqYBeE.jpg', ''),
(149, 'ROMWE Homme Jean dÃ©chirÃ©', 'Couleur:	Noir<br />\r\nType de motif:	graphique<br />\r\nType:	Skinny<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 189.99, 'SYqGWoWnCMqxHThOAEQEkz2GGfcjHG.jpg', '2022-05-31 22:24:44', 0, 6, 'qg4Ih2Fi7E5KkokFuVZgoHC4yiEVI8.jpg', '7QvsYdAG9MOLlHRpndQyUd7IwafXiN.jpg', 'WKDqKnIa8OdmwdTQ8zdo8iyrWgGpN7.jpg', 'Ug1uFeurrlcLXZ1sGLcZESM2B45f5U.jpg'),
(150, 'Homme Jean carotte dÃ©chirÃ© effilochÃ©', 'Couleur:	Jean clair<br />\r\nType de motif:	Unicolore<br />\r\nType:	Skinny<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Pantacourt', 229.99, 'rmfkWasMp2xR6rSTt8GBgjYZ6DCWn6.jpg', '2022-05-31 22:28:13', 0, 6, 'knEC8SwN1fX3ItzVWqQxSzyjI4vQJR.jpg', 'wqSfPeX2645VKW0I6JHeMpIBAre6rV.jpg', 'F3Mk8rvXbBefjafleVR7V2bHh32Nex.jpg', 'vi9CXukj5OxFemLW7OlLylxWBDdmX6.jpg'),
(151, 'Homme Jean droit Ã  poche', 'Couleur:	Blanc<br />\r\nType de motif:	Unicolore<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Boutons, Poche, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 184.99, 'FEucamDE82B5oKiGjbXZWhL8OgLBz8.jpg', '2022-05-31 22:32:02', 0, 6, 'k7D1uQOStTwSBbEvZflGo72xpQ7Lrk.jpg', 'zKqzzf9sUBPOUs3rQ3prM6WaDyzKCL.jpg', 'hT0SZ3nIxcRjrSZzdMBFvvmQGrZzCl.jpg', 'a6eT3Af5TSwJ5f5b3NYs3g3x7liGgb.jpg'),
(152, 'ROMWE Homme Jean dÃ©chirÃ©', 'Couleur:	Jean clair<br />\r\nType de motif:	Carreau<br />\r\nType:	Skinny<br />\r\nType de fermeture:	Bouton<br />\r\ndÃ©tails:	DÃ©chirÃ©, DÃ©lavÃ©<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 199.99, 'qkopbuusqMugOBLWqw3l2691Otkehl.jpg', '2022-05-31 22:38:31', 0, 6, 'Y6zOglI58rx49jPHFrTmE5VuPgIaGi.jpg', '0MNAlxUNay3yRarVjfKlYl1MqheLlK.jpg', 'SWrHrNMTOEKpA0eZdTTukW6kaLgRtu.jpg', 'LltvLL0SuQmaThf9w3TJNsFn16JwPc.jpg'),
(153, 'Homme Jean Ã  motif slogan dÃ©chirÃ© effilochÃ©', 'Couleur:	Noir<br />\r\nType de motif:	Slogan<br />\r\nType:	Skinny<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 224.99, '637Yun2demI4PeIw1x5OVmOmBPMjzA.jpg', '2022-05-31 22:48:41', 0, 6, 'lYQ5qVD8DzK2t8xovr4SHX3cHzJxOj.jpg', '1eVB40EnvoJNEXbl9i3jgn2PNcoMc5.jpg', 'MSqh3WDXV480ia1gfWdVQuHd5YjR2M.jpg', 'QCmswY9YHRghlJmMww3IuYznu8Z9sV.jpg'),
(154, 'Jeans homme Poche DÃ©chirÃ© Unicolore', 'Couleur:	Jean bleu<br />\r\nType de motif:	Unicolore<br />\r\nType:	Coupe droite<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 190, 'll47D3Qiv5l7BCWj5N9gxruC7b1eZL.jpg', '2022-05-31 22:55:51', 0, 6, 'Uv2aGsa3cyDLynrCFya3ts6iGlmz3H.jpg', 'y0599n0WPJOoXK2gmLYywmHTCjlIPN.jpg', 'zGJ7NyIr3MpcyjxUsCfTdBf1gDUjYo.jpg', 'GEpvHVj2o4v1fCrwN71OI8nlZwcD3m.jpg'),
(155, 'Homme Jean de jogging Ã  patch', 'Couleur:	Jean bleu<br />\r\nType de motif:	Unicolore<br />\r\nType:	Coupe jogger<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	Boutons, Poche, Fermeture Ã©clair<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 226, 'B3XwYzhTFJCAuLDM58CmF3j2g3HhMI.jpg', '2022-05-31 23:02:03', 0, 6, 'Tumm233snh2FWqg4U4mFP5bWApKUgl.jpg', '7a9OE6nRA4wMrnHREwb4RcBLczdx7J.jpg', 'EpKFhq4Ft9L3dnIC4fSMeh6mJwbz8v.jpg', 'x9E7HKtF2mNASBMCAyjL410D5Ba0AF.jpg'),
(156, 'Jean dÃ©chirÃ© avec motif slogan', 'Couleur:	Noir<br />\r\nType de motif:	Slogan<br />\r\nType:	AjustÃ©<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©, Poche<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 234.99, 'cIujROHEsRrwskPcjSX8xSxMyYueP9.jpg', '2022-05-31 23:07:21', 0, 6, 'vwdialwcfpwMQ9sYNvCqviBmdxZSkQ.jpg', 'pnKXj6d9S7KSbM03hfqXvPiVrZufGc.jpg', 'YMteIaNWtHLMbZm31rtAOxCdH7VHPX.jpg', 'Hd8zTw4IIJ8NWp2SeUZRbTnwrUK5lq.jpg'),
(157, 'Homme Jean skinny patch Ã  ruchÃ©', 'Couleur:	Jean clair<br />\r\nType de motif:	Lettres<br />\r\nType:	AjustÃ©<br />\r\nType de fermeture:	ZippÃ©<br />\r\ndÃ©tails:	DÃ©chirÃ©, DÃ©lavÃ©<br />\r\nTour de taille:	Naturel<br />\r\nLongueur:	Long', 224.99, '6wZEmiiIUaIpq6UblWKVIF5cHHWMoI.jpg', '2022-05-31 23:12:08', 0, 6, 'nDkSbt687ISmkgnyZhFecE9WWRgOj1.jpg', 'QNEfxYDY9PpuUrXeaJEBEhDUqPOgF3.jpg', 'HxJaQop2yEmUJORepCdKSA2SvBz0hC.jpg', 'KqWWlPfUwyoSKr9CIGjKVOlYc3jvJG.jpg'),
(158, 'Homme Chaussures skateboard Ã  broderie Ã  lacets', 'Couleur:	Gris<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Lettres<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Coton<br />\r\nMatiÃ¨re extÃ©rieure:	Polyester<br />\r\nMatiÃ¨re semelle extÃ©rieure:	PVC<br />\r\nType:	Chaussures de skate-board', 1149.99, 'jStjgXBzvmrFxkqBWGw2AvxCN5xulL.jpg', '2022-06-01 09:30:22', 0, 7, '6sJRvm7TtuRDm59PWJdIRBHAtg8Rbx.jpg', '7UeQWzf13fRrZhb7OBCOGgWMheWJAz.jpg', '', ''),
(159, 'Homme Chaussures de course en tricot Ã  lacets', 'Couleur:	Noir<br />\r\nQuantitÃ©:	1 paire<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Tulle<br />\r\nMatiÃ¨re extÃ©rieure:	Ã‰toffe<br />\r\nMatiÃ¨re semelle extÃ©rieure:	EVA<br />\r\nType:	Chaussures de course', 1529.99, '9oggF78C0UfmtRiQKXQ9c4MbKOzlrz.jpg', '2022-06-01 09:32:17', 0, 7, 'QnTX41Ul3XpIlpSYgY0aglM4KK1po3.jpg', 'hbSuSjIHTmZ3ftsogf785UJjJXqm5l.jpg', '', ''),
(160, 'Homme Chaussures skateboard Ã  lettres Ã  lacets', 'Couleur:	Kaki<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Lettres<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	EVA<br />\r\nMatiÃ¨re extÃ©rieure:	Tulle<br />\r\nMatiÃ¨re semelle extÃ©rieure:	EVA<br />\r\nType:	Chaussures de skate-board', 289.99, '3or7GH9qRX5HDLexMLaCZfFacribBF.jpg', '2022-06-01 09:34:40', 0, 7, '9PqIomkwyL5d3basTdc2motHDJW5nU.jpg', 'cSGBTVJHZ60g0OlnINMbBO39BSZajc.jpg', '', ''),
(161, 'Homme Chaussures de course Ã  cordon Ã  lacets', 'Couleur:	Gris<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Blocs de couleur<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	EVA<br />\r\nMatiÃ¨re extÃ©rieure:	Ã‰toffe<br />\r\nMatiÃ¨re semelle extÃ©rieure:	PVC<br />\r\nType:	Chaussures de course', 349.99, 'Tlwyqjcinl5NXxSdRYz7Q2BcPQIwD0.jpg', '2022-06-01 09:36:46', 0, 7, 'MaUFh7Qo9VLcrxqZS4YpAarg7HFzYx.jpg', 'AvN3Q7hASTdQTon2EeZSVWqT35Mme2.jpg', '', ''),
(162, 'Homme Chaussures de course Ã  imprimÃ© gÃ©omÃ©trique Ã  lacets', 'Couleur:	Multicolore<br />\r\nTaille appropriÃ©e:	FidÃ¨le Ã  la pointure<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	GÃ©omÃ©trique<br />\r\nBout:	Bout rond<br />\r\ndÃ©tails:	Lacets<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	EVA<br />\r\nMatiÃ¨re extÃ©rieure:	Crochet<br />\r\nMatiÃ¨re semelle extÃ©rieure:	EVA<br />\r\nType:	Chaussures de course', 249.99, 'aJnJu89Jh2D3pjOBWXCVZFX19983kw.jpg', '2022-06-01 09:40:14', 0, 7, 'WCK60fsw6Ek0NUj3ISmYLq5gSIxeQX.jpg', 'yFZbCsZuP5tvhmIIEBGHlUGtWoguMR.jpg', '6dae7FCTuFDrX90g8b1f39UoZz2Wmh.jpg', '2kcL4AMfR8uCkKxkFbcMRAOEyCyqGa.jpg'),
(163, 'Homme Chaussures skateboard minimaliste Ã  lacets', 'Couleur:	Noir<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Unicolore<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Tulle<br />\r\nMatiÃ¨re extÃ©rieure:	Cuir PU<br />\r\nMatiÃ¨re semelle extÃ©rieure:	PVC', 1169.99, '0yavw76HrQuHExmZVj0W7USVjopmin.jpg', '2022-06-01 09:42:10', 0, 7, 'VpMAgp0hCWkPCPdXVKuQidGmUKJdIL.jpg', 'v9nag9Mqaad2grVrpTM0fV4S8hIYwV.jpg', '', ''),
(164, 'Homme Chaussures skateboard Ã  lettres', 'Couleur:	Blanc<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Lettres<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Tulle<br />\r\nMatiÃ¨re extÃ©rieure:	Cuir PU<br />\r\nMatiÃ¨re semelle extÃ©rieure:	Caoutchouc<br />\r\nType:	Chaussures de skate-board', 1799.99, 'cOpOZvu6Qy0QV5DLtspOtoqYgkT9am.jpg', '2022-06-01 09:45:47', 0, 7, 'qz0wZ6yjdq29L40P4RhqMMvATtbfAG.jpg', 'fuagrCVb2QbsEZlv2JnFVteImE9g3T.jpg', 'HHuxm8tSPh7MXlrYeUtdbHrIkQHTyI.jpg', ''),
(165, 'Homme Baskets Ã  semelles Ã©paisses rÃ©flÃ©chissant Ã  lacets', 'Couleur:	Blanc<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Blocs de couleur<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Polyester<br />\r\nMatiÃ¨re extÃ©rieure:	Ã‰toffe<br />\r\nMatiÃ¨re semelle extÃ©rieure:	EVA<br />\r\nType:	Baskets Ã©paisses', 1659.99, 'R3QSthVgB6RYbi6Btr7FNoiWpAi6iQ.jpg', '2022-06-01 09:48:34', 0, 7, 'mbIqx2tT6NLjV0eCHwHZjV4uJCrfwx.jpg', 'W1rDiTra0u1H9JCFr8wml5xAwAzKBx.jpg', 'AT1XkG2g2syptEC3qaaNpTMaPnB1hp.jpg', 'ZgoPCaTwIBMo66DcJARVGOdCNgjwqh.jpg'),
(166, 'Homme Chaussures skateboard Ã  blocs de couleurs Ã  lacets', 'Couleur:	Blanc<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Blocs de couleur<br />\r\nBout:	Bout rond<br />\r\ndÃ©tails:	Lacets<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Tulle<br />\r\nMatiÃ¨re extÃ©rieure:	Cuir PU<br />\r\nMatiÃ¨re semelle extÃ©rieure:	Caoutchouc<br />\r\nType:	Chaussures de skate-board', 1449.99, 'dHXFnWTN50yvVvtjiTxebxMlGLf4LC.jpg', '2022-06-01 09:51:26', 0, 7, '8SACyaf1Mo83HQZH7rBXYTwkxUfMEX.jpg', 'J17k8wC9rj7NKQa43cgdNR0FHCpboN.jpg', 'ohOPXYThCQJOKwq92ymFo6zZtdaZft.jpg', ''),
(167, 'Homme Chaussures de course Ã  applique lettre Ã  lacets', 'Couleur:	Blanc<br />\r\nQuantitÃ©:	1 paire<br />\r\nType de brides (cm):	Lacets<br />\r\nType de motif:	Blocs de couleur<br />\r\nBout:	Bout rond<br />\r\nMatiÃ¨re Semelle IntÃ©rieure:	Tulle<br />\r\nMatiÃ¨re extÃ©rieure:	Cuir PU<br />\r\nMatiÃ¨re semelle extÃ©rieure:	Caoutchouc<br />\r\nType:	Chaussures de course', 1299.99, 'JmHKKgKjQWhCGnFJJBr9mFYfurxJqx.jpg', '2022-06-01 09:54:05', 0, 7, 'pQtMRBna9HNGdkqkoiZLx9GmRcEDZu.jpg', 'LwsswAoiLP8INSGNQ1ZennfOz3kqlM.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit_images`
--

DROP TABLE IF EXISTS `produit_images`;
CREATE TABLE IF NOT EXISTS `produit_images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `produit_id` int(11) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `foreign4` (`produit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `user_nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_prenom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `ville_cp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ville_nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ville_nom_reg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign3` FOREIGN KEY (`id_paiment`) REFERENCES `mode_paiment` (`id_paiment`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `foreign7` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
