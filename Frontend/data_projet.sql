-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 nov. 2023 à 07:47
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `data_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_img` varchar(1000) NOT NULL DEFAULT 'default.png',
  `blog_by` int NOT NULL,
  `blog_date` date NOT NULL,
  `blog_votes` int NOT NULL DEFAULT '0',
  `blog_content` longtext NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `blog_by` (`blog_by`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img`, `blog_by`, `blog_date`, `blog_votes`, `blog_content`) VALUES
(1, 'SMED-CI', '6553826cbc1168.26043423.jpg', 42, '2023-11-14', 0, 'Soutien aux mères et enfants en detresse de côte d\'ivoire'),
(2, 'ONG Arc en ciel du bonheur', '655383314b2e94.05618637.jpg', 42, '2023-11-14', 0, 'lutte pour la veuve et la sante de dl\'orphelin'),
(3, 'ARC', '655388868c7c71.05611641.jpg', 42, '2023-11-14', 0, 'Cours de renforcement a domicile'),
(4, 'Cote d\'ivoire', '6553a4d248d196.20116116.jpg', 40, '2023-11-14', 0, 'La republique de la cote d\'ivoire');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(17, 'Maketing', 'Maketing digital'),
(18, 'ECommerce', 'Commerce electronique');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int NOT NULL,
  `post_by` int NOT NULL,
  `post_votes` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `post_topic` (`post_topic`),
  KEY `post_by` (`post_by`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`, `post_votes`) VALUES
(124, 'Comment creer un bussiness plan', '2023-11-14 09:58:22', 46, 40, 0),
(125, 'Comment creer ton un logiciel informatique avec php', '2023-11-14 11:02:43', 47, 42, 0),
(126, 'fais des recherche sur le canvas', '2023-11-14 11:17:27', 46, 42, 0),
(129, 'BIen recu', '2023-11-14 12:12:59', 47, 42, 0),
(130, 'Boutique en ligne', '2023-11-14 12:32:37', 48, 42, 0);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `projet_id` int NOT NULL AUTO_INCREMENT,
  `projet_theme` varchar(255) NOT NULL,
  `projet_date` date NOT NULL,
  `projet_cat` int NOT NULL,
  `projet_by` int NOT NULL,
  `projet_descr` varchar(4000) DEFAULT NULL,
  `projet_file` varchar(500) DEFAULT 'default.png',
  PRIMARY KEY (`projet_id`),
  KEY `projet_cat` (`projet_cat`),
  KEY `projet_by` (`projet_by`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`projet_id`, `projet_theme`, `projet_date`, `projet_cat`, `projet_by`, `projet_descr`, `projet_file`) VALUES
(45, 'Volaille', '2023-11-14', 18, 40, 'test', '6553b73d069e89.83639662.pdf'),
(46, 'Volaille', '2023-11-14', 18, 40, 'ssss', '6553f0ad1875a5.53624493.docx'),
(47, 'Volaille', '2023-11-14', 17, 41, 'ssszzzz', '6553faf683a380.03310296.docx');

-- --------------------------------------------------------

--
-- Structure de la table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `pwdResetId` int NOT NULL AUTO_INCREMENT,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL,
  PRIMARY KEY (`pwdResetId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int NOT NULL,
  `topic_by` int NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_cat` (`topic_cat`),
  KEY `topic_by` (`topic_by`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(46, 'Creation d\'un bussiness plan', '2023-11-14 09:58:22', 17, 40),
(47, 'Creer un logiciel', '2023-11-14 11:02:43', 17, 42),
(48, 'Creer un logiciel', '2023-11-14 12:32:37', 18, 42);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int NOT NULL AUTO_INCREMENT,
  `userLevel` int NOT NULL DEFAULT '0',
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  `gender` char(1) NOT NULL,
  `headline` varchar(500) DEFAULT NULL,
  `bio` varchar(4000) DEFAULT NULL,
  `userImg` varchar(500) DEFAULT 'default.png',
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `userLevel`, `f_name`, `l_name`, `uidUsers`, `emailUsers`, `pwdUsers`, `gender`, `headline`, `bio`, `userImg`) VALUES
(40, 1, 'Abdallah', 'TANAGUEDA', 'Cheick', 'cheickabdallahtanagueda@gmail.com', '$2y$10$6iPT7lm94sS/IfADmLi.teXEg9elIUGITP6U/vc8TuJ9FkbyDIB0W', 'M', NULL, 'Bien', '6552683d6dcc61.67549706.jpg'),
(41, 1, 'Abdallah', 'TANAGUEDA', 'Abdallah', 'cheickabdallahtanagueda@gmail.com', '$2y$10$n3Lc81agkEuh/aW3JEY3ReK3BTz2qn8/CRIsXXxcxKjsu4f2di5wG', 'M', NULL, 'Bien', '65529dc8e7a790.18748983.jpg'),
(42, 1, 'Dibi', 'Ahou Georgina', 'gina', 'dibiahou@gmail.com', '$2y$10$XcPh5fq1Bb2npHMtfS.JPe6nkVwIMqBf0dPCVVcJZ1xvV3m0GgCUG', 'F', NULL, 'Je suis Gina Girl', '65534709f08f45.86054935.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`blog_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`projet_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projet_ibfk_2` FOREIGN KEY (`projet_by`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
