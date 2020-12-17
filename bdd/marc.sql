-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 17 Décembre 2020 à 02:26
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `assoc` (
  `id_assoc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_manga` int(11) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

CREATE TABLE `manga` (
  `id_manga` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `note` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `manga`
--

INSERT INTO `manga` (`id_manga`, `adresse`, `nom`, `note`) VALUES
(2, 'img/dbz.jpg', 'Dragon Ball Z', 0),
(3, 'img/one.jpg', 'One Piece', 0),
(4, 'img/conan.jpg', 'Detective Conan', 0),
(5, 'img/death.jpg', 'Death Note', 0),
(6, 'img/fairy.jpg', 'Fairy Tail', 0),
(7, 'img/Naruto.jpg', 'Naruto', 0),
(9, 'img/attaquedestitans.jpg', 'L\'Attaque des Titan', 0),
(8, 'img/akira.jpg', 'Akira', 0),
(10, 'img/bleach.jpg', 'Bleach', 0),
(17, 'img/pluto.jpg', 'Pluto (je connais pas non plus tqt)', 0),
(26, 'img/chevalier.jpg', 'Les Chevalier du Zod', 0),
(27, 'img/fullmetal.jpg', 'Fullmetal Alchemist', 0),
(28, 'img/gto.jpg\r\n', 'GTO', 0),
(29, 'img/hunter.jpg', 'Hunter X Hunter', 0),
(30, 'img/monster.jpg', 'Monster', 0),
(31, 'img/onepuchman.jpg', 'One Punch Man', 0),
(33, 'img/quartier.jpeg', 'Quartier Lointain', 0),
(34, 'img/soul.jpg', 'Dark Soul', 0),
(35, 'img/yugi.jpg', ' Yu-Gi-Oh!', 0),
(36, 'img/yugigx.jpg', ' Yu-Gi-Oh GX', 0),
(37, 'img/pokemon.jpg', 'Pokemon', 0),
(38, 'img/olive.jpg', 'Olive Et Tom', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `assoc`
--
ALTER TABLE `assoc`
  ADD PRIMARY KEY (`id_assoc`);

--
-- Index pour la table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id_manga`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `assoc`
--
ALTER TABLE `assoc`
  MODIFY `id_assoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1260;
--
-- AUTO_INCREMENT pour la table `manga`
--
ALTER TABLE `manga`
  MODIFY `id_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
