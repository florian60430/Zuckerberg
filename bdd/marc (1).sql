-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 déc. 2020 à 20:01
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

--
-- Déchargement des données de la table `assoc`
--

INSERT INTO `assoc` (`id_assoc`, `id_user`, `id_manga`, `etat`) VALUES
(74, 1, 24, 1),
(73, 1, 20, 1),
(72, 1, 3, 1),
(71, 1, 35, 1),
(70, 1, 2, 1),
(69, 1, 19, 1),
(68, 1, 15, 1),
(67, 1, 13, 1),
(66, 1, 28, 1),
(65, 1, 22, 1),
(64, 1, 11, 1),
(63, 1, 33, 1),
(62, 1, 23, 1),
(61, 1, 5, 1),
(60, 1, 16, 1),
(59, 1, 25, 1),
(58, 1, 3, 1),
(57, 1, 7, 1),
(56, 1, 5, 1),
(55, 1, 4, 1),
(54, 1, 2, 1),
(53, 1, 6, 1),
(75, 1, 12, 1),
(76, 1, 8, 1),
(77, 1, 9, 1),
(78, 1, 27, 1),
(79, 1, 17, 1),
(80, 1, 37, 1),
(81, 1, 21, 1),
(82, 1, 34, 1),
(83, 1, 26, 1),
(84, 1, 6, 1),
(85, 1, 4, 1),
(86, 1, 36, 1),
(87, 1, 32, 1),
(88, 1, 18, 1),
(89, 1, 30, 1),
(90, 1, 14, 1),
(91, 1, 10, 1),
(92, 1, 29, 1),
(93, 1, 31, 1),
(94, 1, 7, 1),
(95, 1, 3, 1),
(96, 1, 37, 1),
(97, 1, 36, 1),
(98, 1, 26, 1),
(99, 1, 5, 1),
(100, 1, 34, 1),
(101, 1, 25, 1),
(102, 1, 33, 1),
(103, 1, 29, 1),
(104, 1, 21, 1),
(105, 1, 18, 1),
(106, 1, 24, 1),
(107, 1, 13, 1),
(108, 1, 4, 1),
(109, 1, 30, 1),
(110, 1, 23, 1),
(111, 1, 11, 1),
(112, 1, 22, 1),
(113, 1, 20, 1),
(114, 1, 27, 1),
(115, 1, 14, 1),
(116, 1, 28, 1),
(117, 1, 16, 1),
(118, 1, 19, 1),
(119, 1, 12, 1),
(120, 1, 6, 1),
(121, 1, 2, 1),
(122, 1, 9, 1),
(123, 1, 17, 1),
(124, 1, 31, 1),
(125, 1, 8, 1),
(126, 1, 15, 1),
(127, 1, 10, 1),
(128, 1, 32, 1),
(129, 1, 35, 1),
(130, 1, 7, 1),
(131, 1, 21, 1),
(132, 1, 29, 1),
(133, 1, 23, 1),
(134, 1, 11, 1),
(135, 1, 18, 1),
(136, 1, 34, 1),
(137, 1, 31, 1),
(138, 1, 36, 1),
(139, 1, 25, 1),
(140, 1, 20, 1),
(141, 1, 13, 1),
(142, 1, 8, 1),
(143, 1, 33, 1),
(144, 1, 12, 1),
(145, 1, 26, 1),
(146, 1, 30, 1),
(147, 1, 24, 1),
(148, 1, 16, 1),
(149, 1, 5, 1),
(150, 1, 9, 1),
(151, 1, 17, 1),
(152, 1, 19, 1),
(153, 1, 22, 1),
(154, 1, 14, 1),
(155, 1, 37, 1),
(156, 1, 2, 1),
(157, 1, 27, 1),
(158, 1, 32, 1),
(159, 1, 15, 1),
(160, 1, 10, 1),
(161, 1, 4, 1),
(162, 1, 3, 1),
(163, 1, 28, 1),
(164, 1, 35, 1),
(165, 1, 7, 1),
(166, 1, 6, 1),
(167, 1, 33, 1),
(168, 1, 12, 1),
(169, 1, 3, 1),
(170, 1, 11, 1),
(171, 1, 16, 1),
(172, 1, 35, 1),
(173, 1, 23, 1),
(174, 1, 25, 1),
(175, 1, 14, 1),
(176, 1, 17, 1),
(177, 1, 2, 1);

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
