-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 jan. 2021 à 11:35
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
-- Base de données : `e-adresse`
--

-- --------------------------------------------------------

--
-- Structure de la table `residence`
--

DROP TABLE IF EXISTS `residence`;
CREATE TABLE IF NOT EXISTS `residence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `prix` int(10) NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `commodite` varchar(100) NOT NULL,
  `reglement` text NOT NULL,
  `condition_annulation` text NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `residence`
--

INSERT INTO `residence` (`id`, `code`, `type`, `prix`, `localisation`, `commodite`, `reglement`, `condition_annulation`, `details`) VALUES
(1, 'RC71', '3 pièces', 50000, 'Cocody Angré 7<sup>e</sup> Tranche Pont Soro', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Cocody 3pièces RC71 50000 Cocody3pièces'),
(2, 'RC7T', '2 pièces', 35000, 'Cocody Angré 7<sup>e</sup> Tranche Pont Soro', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Cocody Angré 7<sup>e</sup> Tranche Pont Soro 2pièces RC7T 35000 Cocody2pièces'),
(3, 'RC82', '2 pièces', 35000, 'Cocody Angré 8<sup>e</sup> Tranche Pont Soro', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Cocody 2 Angré 8<sup>e</sup> Tranche Pont Soro 2pièces RC82 35000 Cocody2pièces'),
(4, 'RKR1', 'Studio', 20000, 'Koumassi', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Koumassi Studio RKR1 20000 KoumassiStudio'),
(5, 'RYPP', 'Studio', 20000, 'Yopougon cité verte', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Yopougon cité verte RYPP Studio 20000 YopougonStudio'),
(6, 'RYTR', 'Studio', 20000, 'Yopougon Toit rouge', 'Climatisation / Micro-onde / Canal / Réfrigérateur / etc…', 'Arrivée 12H / Sortir 12H ( Rendre les clés avant départ ) \r\nInterdiction : Pas d’animaux ,  Pas de soirée , ni de fête dans l’appartement \r\nCaution en cas de dommage  meubles :  Vous pouvez avoir à payer jusqu’à 200.000 Cfa\r\n', '-Si l’annulation se fait avant  la date d’entrée 15% vous seront prélevés sur votre facture totale<br>-Si l’annulation se fait Le jour d’entrée le prix pour  24H vous seront prélevés sur la facture totale<br>-Si l’annulation se fait pendant le séjour seulement le cout de votre séjour restant sera restitué.', 'Yopougon Toit rouge RYTR Studio 20000 YopougonStudio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
