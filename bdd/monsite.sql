-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 03:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `article_categorie` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `slug` varchar(40) NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `article_categorie`, `titre`, `contenu`, `slug`) VALUES
(1, 2, 'Les statistiques sur les plus gros mensonges des programmeurs viennent de tomber', '1) Le site devrait fonctionner maintenant.<br/>\r\n2) ça ne prendra qu\'un instant.<br/>\r\n3) Je le ferai plus tard.<br/>\r\n4) C\'est un bug facile à corriger.<br/>', 'dev_web_et_mensonges'),
(2, 1, 'Jeanne d\'arc a la fibre', 'Et oui, elle a Free !', 'jeanne_d_arc'),
(3, 1, 'Quel IDE choisir ?', 'Visual Studio Code ? Non aucun challenge.<br/>\r\nAtom ? Encore trop simple !<br/>\r\nWord ? Voilà, ça c\'est un défi.<br/>', 'quel_ide');

-- --------------------------------------------------------

--
-- Structure de la table `bousers`
--

DROP TABLE IF EXISTS `bousers`;
CREATE TABLE IF NOT EXISTS `bousers` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `MDP` varchar(255) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bousers`
--

INSERT INTO `bousers` (`id_users`, `login`, `MDP`) VALUES
(13, 'admin', '$2y$10$XQiRznW5wB4C9Hg9hyYic..fhxDhi82/n7Yk/u4Lby81GVRLZEzKW');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `titre`, `slug`) VALUES
(1, 'Paul Itique', 'paul_itique'),
(2, 'Aime Otion', 'aime_otion');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(2000) NOT NULL DEFAULT '/media/',
  `alt` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `chemin`, `alt`) VALUES
(2, '/media/bug.jpg', 'Meme avec un chien'),
(3, '/media/code.jpg\r\n', 'Meme de Jack Sparrow\r\n'),
(4, '/media/gravity.jpg\r\n', 'Meme avec un chat\r\n'),
(5, '/media/hibou.jpg\r\n', 'Meme d\'un hibou avec une planche\r\n'),
(6, '/media/programmer.jpg\r\n', 'Meme avec plein de petit bonhommes\r\n'),
(7, '/media/sort.jpg\r\n', 'Meme latino\r\n'),
(1, '/media/android.png\r\n', 'Un meme drôle avec trois personne\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
