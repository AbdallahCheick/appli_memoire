-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 déc. 2023 à 07:29
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
-- Base de données : `data_app`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img`, `blog_by`, `blog_date`, `blog_votes`, `blog_content`) VALUES
(3, 'L\'Intelligence Artificielle au Service de l\'Excellence Professionnelle : Un Aperçu des Applications ', '6571a2553234f0.31525433.jpg', 1, '2023-12-07', 0, 'L\'évolution rapide de la technologie a engendré une révolution silencieuse dans le monde professionnel. L\'Intelligence Artificielle (IA), une force motrice de cette transformation, a radicalement changé la manière dont les entreprises opèrent. Dans ce blog, plongeons dans l\'univers captivant de l\'IA et explorons comment elle redéfinit les normes de l\'excellence professionnelle.\r\n\r\nIntroduction :\r\n\r\nL\'IA, une fusion de science informatique et d\'intelligence humaine, n\'est plus une notion futuriste. Elle est devenue une réalité quotidienne, révolutionnant la manière dont les entreprises gèrent, analysent et utilisent l\'information. Voyons comment elle façonne l\'avenir du monde professionnel.\r\n\r\nIA dans la Prise de Décision :\r\n\r\nAnalyse de Données Avancée : Les entreprises utilisent l\'IA pour analyser des volumes massifs de données et extraire des insights significatifs, facilitant ainsi des prises de décision éclairées.\r\n\r\nSystèmes de Recommandation : Dans le secteur du commerce électronique et des services, l\'IA alimente les systèmes de recommandation qui s\'adaptent dynamiquement aux préférences individuelles des clients.\r\n\r\nIA et Automatisation des Tâches :\r\n\r\nProcessus Métiers Optimisés : Les tâches répétitives et chronophages sont automatisées, libérant ainsi le personnel pour des activités à plus forte valeur ajoutée.\r\n\r\nChatbots et Service Client : Les entreprises intègrent des chatbots alimentés par l\'IA pour fournir un support client 24/7, améliorant ainsi l\'expérience client.\r\n\r\nIA et Personnalisation :\r\n\r\nMarketing Personnalisé : Les campagnes marketing s\'appuient sur l\'IA pour créer des messages ciblés, adaptés aux besoins spécifiques de chaque client.\r\n\r\nFormation et Développement Professionnel : Les systèmes d\'apprentissage automatique permettent de personnaliser les programmes de formation pour répondre aux besoins individuels des employés.\r\n\r\nDéfis et Éthique :\r\n\r\nSécurité des Données : Avec l\'utilisation croissante de l\'IA, la sécurité des données devient un enjeu crucial. Les entreprises doivent garantir la confidentialité et la protection des informations sensibles.\r\n\r\nTransparence et Responsabilité : Les entreprises doivent être transparentes dans leur utilisation de l\'IA, et les professionnels doivent être conscients des implications éthiques liées à son déploiement.\r\n\r\nConclusion :\r\n\r\nL\'IA n\'est pas simplement une technologie, c\'est une révolution. Les entreprises qui embrassent cette révolution voient une transformation positive de leurs opérations, de leur productivité et de leur compétitivité. Cependant, avec le pouvoir de l\'IA vient la responsabilité de son utilisation éthique. En naviguant avec prudence, les professionnels peuvent exploiter pleinement le potentiel de l\'IA pour atteindre de nouveaux sommets dans le monde professionnel moderne. L\'avenir est ici, et il est intelligent.'),
(4, 'Au-Delà du Volant : L\'Écosystème du Covoiturage et Son Impact Positif', '6571a8f2497956.24949303.jpg', 1, '2023-12-07', 0, 'Introduction :\r\n\r\nLe covoiturage, bien plus qu\'un simple partage de trajet, est devenu un phénomène mondial qui redéfinit la manière dont nous abordons les déplacements. Dans ce blog, plongeons dans l\'univers du covoiturage, explorons ses multiples facettes et mettons en lumière l\'impact positif qu\'il peut avoir sur l\'environnement, la communauté et nos modes de vie.\r\n\r\nLe Covoiturage au Quotidien :\r\n\r\nÉconomie Collaborative : Le covoiturage incarne l\'esprit de l\'économie collaborative, offrant une alternative économique aux modes de transport traditionnels tout en réduisant l\'empreinte carbone.\r\n\r\nRéduction des Embouteillages : En partageant des trajets, le covoiturage contribue à réduire le nombre de véhicules sur les routes, atténuant ainsi les problèmes d\'embouteillages urbains.\r\n\r\nLes Avantages Environnementaux :\r\n\r\nRéduction des Émissions de CO2 : Moins de voitures signifient moins d\'émissions de gaz à effet de serre. Le covoiturage est un moyen concret de lutter contre le changement climatique.\r\n\r\nOptimisation des Ressources : Plutôt que d\'avoir plusieurs véhicules sur la route, le covoiturage optimise l\'utilisation des ressources en maximisant la capacité des voitures.\r\n\r\nL\'Évolution des Plateformes de Covoiturage :\r\n\r\nInnovation Technologique : Des applications conviviales facilitent la mise en relation des conducteurs et des passagers, rendant le processus de covoiturage plus accessible que jamais.\r\n\r\nCovoiturage Dynamique : Des fonctionnalités avancées telles que le covoiturage dynamique permettent aux utilisateurs de partager des trajets spontanés, favorisant une flexibilité accrue.\r\n\r\nLa Communauté du Covoiturage :\r\n\r\nRencontres et Connectivité : Le covoiturage va au-delà des trajets. Il crée des opportunités pour rencontrer de nouvelles personnes, élargir les réseaux sociaux et renforcer le tissu communautaire.\r\n\r\nPartage d\'Expériences : Les histoires de covoiturage ne sont pas seulement des trajets partagés, mais aussi des expériences partagées. Des amitiés naissent souvent de ces voyages.\r\n\r\nDéfis et Solutions :\r\n\r\nConfiance et Sécurité : Le covoiturage soulève des préoccupations en matière de sécurité. Des pratiques telles que la vérification des antécédents et les avis mutuels contribuent à établir la confiance.\r\n\r\nSensibilisation : Malgré les avantages, le covoiturage n\'est pas encore adopté universellement. L\'éducation et la sensibilisation peuvent jouer un rôle crucial dans son expansion.\r\n\r\nConclusion :\r\n\r\nLe covoiturage n\'est pas simplement un moyen de se déplacer d\'un point A à un point B, c\'est une évolution vers une mobilité plus intelligente et plus durable. En embrassant cette pratique, nous contribuons à la construction d\'un avenir où les déplacements sont efficaces, communautaires et respectueux de l\'environnement. Ensemble, passagers et conducteurs, nous façonnons un nouveau chapitre dans l\'histoire des déplacements, un trajet partagé vers un avenir plus vert et plus connecté.');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(18, 'ECommerce', 'Commerce electronique'),
(19, 'Informatique', 'C\'est une categories pour les contenus informatiques'),
(20, 'Marketing', 'Pour le contenu qui est en rapport avec le marketing '),
(21, 'Financement', 'Pour le contenu qui est en rapport avec le financement');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`, `post_votes`) VALUES
(11, 'contenus', '2023-12-09 17:51:26', 8, 2, 0),
(13, 'comment rédigé un mémoire ', '2023-12-10 17:03:52', 8, 15, 0),
(14, 'comment obtenir un financement  ', '2023-12-10 17:06:06', 10, 15, 0);

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
  `projet_statut` int NOT NULL,
  `projet_ass` int DEFAULT NULL,
  `projet_descr` varchar(4000) DEFAULT NULL,
  `projet_file` varchar(500) DEFAULT 'default.png',
  PRIMARY KEY (`projet_id`),
  KEY `projet_cat` (`projet_cat`),
  KEY `projet_by` (`projet_by`),
  KEY `projet_ass` (`projet_ass`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`projet_id`, `projet_theme`, `projet_date`, `projet_cat`, `projet_by`, `projet_statut`, `projet_ass`, `projet_descr`, `projet_file`) VALUES
(1, 'Creation de site web', '2023-12-07', 19, 2, 2, 3, 'projet de creation de site web\r\n', '657245c1b78087.01468955.pdf'),
(2, 'Volaille', '2023-12-07', 18, 2, 2, 4, 'Projet de vente de vollaile', '6572548d71cc69.65005202.pdf'),
(3, 'Pigier', '2023-12-07', 21, 1, 2, 4, 'projet', '657258ddb36986.01559677.pdf'),
(4, 'transformation de matière première ', '2023-12-10', 18, 15, 1, 10, 'le projet constera a transformé le manioc en attiéké dans un premier temps puis en second lieu le transforme en placali ', '6575f1442d0f73.31817066.pdf');

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
-- Structure de la table `soumission`
--

DROP TABLE IF EXISTS `soumission`;
CREATE TABLE IF NOT EXISTS `soumission` (
  `soum_id` int NOT NULL AUTO_INCREMENT,
  `soum_pro` int NOT NULL,
  `soum_uid` int NOT NULL,
  PRIMARY KEY (`soum_id`),
  KEY `soum_pro` (`soum_pro`),
  KEY `soum_uid` (`soum_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(8, 'Redaction de memoire marketing', '2023-12-09 17:51:26', 18, 2),
(10, 'financement ', '2023-12-10 17:06:06', 21, 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUsers`, `userLevel`, `f_name`, `l_name`, `uidUsers`, `emailUsers`, `pwdUsers`, `gender`, `headline`, `bio`, `userImg`) VALUES
(1, 1, 'Tanagueda', 'Cheick Abdallah', 'Cheick', 'cheickabdallahtanagueda@gmail.com', '$2y$10$fAiXvU3nH0kS5Iu58SYH6.lQvou0XwucP7XHbBeZ6BiAP31JvGMU6', 'M', NULL, 'Je suis Cheick Abdallah Tanagueda informaticien et etudiant en 3 eme année de Licence professionnelle Reseau Genie Logiciel (RGL). Je suis aussi un entrepreneur qui investis dans l\'innovation et la bourse ', '65719e05460e87.45845262.jpg'),
(2, 3, 'Dibi', 'Ahou Georgina', 'Gina', 'ginagirl@gmail.com', '$2y$10$sN1r840UKQGZ7WvL1vk1muCMgBukP.He/WAWS1cGAQ/ICJjr5xyZO', 'F', NULL, 'Je suis administrateur réseau', '6571d8f4abe254.20584482.jpg'),
(3, 2, 'Kassi', 'Bassa', 'Kassi', 'kanga@gmail.com', '$2y$10$FcLrAYqq1ixNd7qhrXw5BeBm9ZyxwzFBirOwIvBkz.EgZ6ztd8sau', 'M', NULL, 'C\'est Kassi bassa blaise', '657248fe94ea89.93404429.jpg'),
(4, 2, 'Bama', 'Bama', 'Bama', 'benierbi@gmail.com', '$2y$10$Tqt0l0pkJ7mov3Rwu9EpSOxwNozBez0kw2xtaMX.oK0LJfnvqDZxG', 'F', NULL, 'C\'est Bama', '65725df0c7aaf1.44945493.jpg'),
(10, 2, 'Coco', 'Corine', 'Coco', 'coco@gmail.com', '$2y$10$s7LAXiykz0gsE.9oIR1bGe/SOCoODRuMKQq1X1q9NN5jhpB8aO9wi', 'F', NULL, '', '657437e23237e9.25164127.jpg'),
(13, 1, 'tanagueda', 'ilyas cherif ', 'iltana', 'tanagueda2@gmail.com', '$2y$10$ceoBCzcDwjDSRnrXqPq1punchVVv6sAT8l6MQw9L8sDjBDPAabY36', 'M', NULL, 'juste quelqun de bien', '6574fe21bcb0d5.61428580.jpg'),
(14, 3, 'Kiki', 'Koko', 'Koko', 'koko@gmail.com', '$2y$10$dnH1feQ9..P9Q8jkK9LzMuOcS1mWdfKToR5lQWUbpAkomh0c.udXW', 'M', NULL, NULL, 'default.png'),
(15, 1, 'coulibaly', 'inza', 'inzacoulibaly', 'inzacoulibaly531@gmail.com', '$2y$10$i5bTkzdOcZ1Y3PyQzTKHKOglXUU.SJHCjeUeZ2ES.DmMKXNlNLgNe', 'M', NULL, '', '6575ee3dc4bd63.83750506.jpg');

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
  ADD CONSTRAINT `projet_ibfk_2` FOREIGN KEY (`projet_by`) REFERENCES `users` (`idUsers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projet_ibfk_3` FOREIGN KEY (`projet_ass`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `soumission`
--
ALTER TABLE `soumission`
  ADD CONSTRAINT `soumission_ibfk_1` FOREIGN KEY (`soum_pro`) REFERENCES `projet` (`projet_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soumission_ibfk_2` FOREIGN KEY (`soum_uid`) REFERENCES `users` (`idUsers`) ON UPDATE CASCADE;

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
