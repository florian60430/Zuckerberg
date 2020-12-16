-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 déc. 2020 à 20:03
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marc`
--

-- --------------------------------------------------------

--
-- Structure de la table `assoc`
--

DROP TABLE IF EXISTS `assoc`;
CREATE TABLE IF NOT EXISTS `assoc` (
  `id_assoc` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id_assoc`)
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id_manga` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `note` int(10) NOT NULL,
  PRIMARY KEY (`id_manga`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `adresse`, `nom`, `note`) VALUES
(2, 'img/dbz.jpg', 'dragon ball Z', 20),
(3, 'img/one.jpg', 'One Piece', 20),
(4, 'img/conan.jpg', 'Detective Conan', 30),
(5, 'img/death.jpg', 'Death Note', 40),
(6, 'img/fairy.jpg', 'Fairy Tail', 10),
(7, 'img/Naruto.jpg', 'Naruto', 20),
(9, 'img/attaquedestitans.jpg', 'L\'Attaque des Titan', 10),
(8, 'img/Akira.jpg', 'Akira', 10),
(10, 'img/bleach.jpg', 'Bleach', 30),
(11, 'img/chevalier.jpg', 'Les Chevalier du Zod', 10),
(12, 'img/fullmetal.jpg', 'Fullmetal Alchemist', 20),
(13, 'img/gto.jpg\r\n', 'GTO', 30),
(14, 'img/hunter.jpg', 'Hunter X Hunter', 20),
(15, 'img/monster.jpg', 'Monster', 10),
(16, 'img/onepuchman.jpg', 'One Punch Man', 20),
(17, 'img/pluto.jpg', 'Pluto (je connais pas non plus tqt)', 30),
(18, 'img/quartier.jpeg', 'Quartier Lointain', 30),
(19, 'img/soul.jpg', 'Dark Soul', 10),
(20, 'img/yugi.jpg', ' Yu-Gi-Oh!', 20),
(21, 'img/yugigx.jpg', ' Yu-Gi-Oh GX', 30),
(22, 'img/pokemon.jpg', 'Pokemon', 20),
(23, 'img/Akira.jpg', 'Akira', 20),
(24, 'img/attaquedestitans.jpg', 'L\'Attaque des Titan', 10),
(25, 'img/bleach.jpg', 'Bleach', 30),
(26, 'img/chevalier.jpg', 'Les Chevalier du Zod', 20),
(27, 'img/fullmetal.jpg', 'Fullmetal Alchemist', 10),
(28, 'img/gto.jpg\r\n', 'GTO', 20),
(29, 'img/hunter.jpg', 'Hunter X Hunter', 10),
(30, 'img/monster.jpg', 'Monster', 30),
(31, 'img/onepuchman.jpg', 'One Punch Man', 30),
(32, 'img/pluto.jpg', 'Pluto', 10),
(33, 'img/quartier.jpeg', 'Quartier Lointain', 30),
(34, 'img/soul.jpg', 'Dark Soul', 10),
(35, 'img/yugi.jpg', ' Yu-Gi-Oh!', 20),
(36, 'img/yugigx.jpg', ' Yu-Gi-Oh GX', 10),
(37, 'img/pokemon.jpg', 'Pokemon', 20);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`) VALUES
(1, 'florian', '60430');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
