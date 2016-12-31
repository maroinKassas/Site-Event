-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 31 Décembre 2016 à 12:41
-- Version du serveur: 5.5.50-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `siteEvent`
--

-- --------------------------------------------------------

--
-- Structure de la table `Administrateur`
--

CREATE TABLE IF NOT EXISTS `Administrateur` (
  `identifiant` varchar(16) NOT NULL,
  `mdp` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Administrateur`
--

INSERT INTO `Administrateur` (`identifiant`, `mdp`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Structure de la table `Participant`
--

CREATE TABLE IF NOT EXISTS `Participant` (
  `idParticipant` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `civil` varchar(16) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `adresse` varchar(128) NOT NULL,
  `codePostal` varchar(5) NOT NULL,
  `ville` varchar(32) NOT NULL,
  `jours` int(11) NOT NULL,
  `mois` int(11) NOT NULL,
  `annees` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `statut` varchar(16) DEFAULT NULL,
  UNIQUE KEY `idParticipant` (`idParticipant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `Participant`
--

INSERT INTO `Participant` (`idParticipant`, `civil`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `jours`, `mois`, `annees`, `email`, `statut`) VALUES
(5, 'Femme', 'Chaudhry', 'Moaz', '9 rue de la teube', '00000', 'Zbeube', 31, 12, 2015, 'moaz@chaudhry.keutar', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
