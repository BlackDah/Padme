-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le : Mer 17 Août 2016 à 20:35
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `padme`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE IF NOT EXISTS `abonnes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `abonnes`
--

INSERT INTO `abonnes` (`id`, `nom`, `mail`, `pass`, `dat`, `heure`) VALUES
(2, 'Koudjenoume loic', 'loicsidney@gmail.com', '123456', '2016-07-27', '16:49:00');

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `image`, `titre`, `description`) VALUES
(1, 'trap.jpg', 'Une nouvelle interface', 'Le retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfs'),
(2, '13690857_1237828489574867_2517754669621558199_n.jpg', 'L''avenir est devant', 'Le retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfs'),
(3, 'alapini_ok_2.jpg', 'Material Admin', 'Le retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfs'),
(4, 'Affiche-2.jpg', 'EDB Challenge', 'Le retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfsLe retour de trap queen dans la street c''est les nerfs');

-- --------------------------------------------------------

--
-- Structure de la table `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `adminuser`
--

INSERT INTO `adminuser` (`id`, `pseudo`, `pass`, `dat`, `heure`) VALUES
(1, 'loic', 'loic', '2016-07-27', '15:25:00');

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE IF NOT EXISTS `candidature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `agedate` varchar(255) NOT NULL,
  `disponibilite` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `experience1` int(11) NOT NULL,
  `experience2` int(11) NOT NULL,
  `langue` varchar(255) NOT NULL,
  `cv` text NOT NULL,
  `lettre` text NOT NULL,
  `message` text NOT NULL,
  `dat` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `candidature`
--

INSERT INTO `candidature` (`id`, `civilite`, `nom`, `prenom`, `mail`, `contact`, `agedate`, `disponibilite`, `diplome`, `filiere`, `poste`, `experience1`, `experience2`, `langue`, `cv`, `lettre`, `message`, `dat`, `heure`) VALUES
(2, 'Mr', 'sidney', 'loic', 'loicsidney@gmail.com', '67423840', '2016-08-03', 'Disponible', 'BAC', 'Marketing', 'Adminstrateur RÃ©seaux', 0, 0, 'Fon', '6a01a5115e12fc970c01a51162eb8e970c.jpg', '6a01a5115e12fc970c01a51162eb8e970c.jpg', 'lol', '2016-08-17', '18:22:00'),
(3, 'Mme', 'sidney', 'loic', 'loicsidney@gmail.com', '67423840', '2016-08-01', 'Disponible', 'BAC+3', 'ComptabilitÃ©', 'ChargÃ© Communication', 0, 0, 'Yoruba', '6a01a5115e12fc970c01a51162eb8e970c.jpg', '6a01a5115e12fc970c01a51162eb8e970c.jpg', 'lol', '2016-08-17', '18:23:00');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dat` date NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE IF NOT EXISTS `offres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `dat` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `offres`
--

INSERT INTO `offres` (`id`, `type`, `localisation`, `titre`, `qualification`, `dat`) VALUES
(1, 'Stage rÃ©munÃ©rant', 'SiÃ¨ge national jÃ©richo', 'Stagiaire chargÃ© de communication', 'DiplomÃ©', '2016-07-27'),
(2, 'Stage payant', 'Padme SavÃ¨', 'Gestionnaire de base de donnÃ©e', 'IngÃ©nieur web', '2016-07-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
