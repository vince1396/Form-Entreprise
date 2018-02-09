-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Février 2018 à 10:49
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allburotic`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureautique`
--

CREATE TABLE `bureautique` (
  `id_b` smallint(5) UNSIGNED NOT NULL,
  `fournisseur` varchar(255) DEFAULT NULL,
  `leaser` varchar(255) DEFAULT NULL,
  `date_deb` date DEFAULT NULL,
  `achat` tinyint(1) DEFAULT NULL,
  `prix_b` float DEFAULT NULL,
  `prelevement` tinyint(1) DEFAULT NULL,
  `duree_contrat` int(11) DEFAULT NULL,
  `materiel` text,
  `noir` int(11) DEFAULT NULL,
  `couleur` int(11) DEFAULT NULL,
  `cout_noir` float DEFAULT NULL,
  `cout_couleur` float DEFAULT NULL,
  `volume_noir` int(11) DEFAULT NULL,
  `volume_couleur` int(11) DEFAULT NULL,
  `supp_noir` float DEFAULT NULL,
  `supp_couleur` float DEFAULT NULL,
  `amelioration` text,
  `orientation` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bureautique`
--

INSERT INTO `bureautique` (`id_b`, `fournisseur`, `leaser`, `date_deb`, `achat`, `prix_b`, `prelevement`, `duree_contrat`, `materiel`, `noir`, `couleur`, `cout_noir`, `cout_couleur`, `volume_noir`, `volume_couleur`, `supp_noir`, `supp_couleur`, `amelioration`, `orientation`) VALUES
(17, 'Franck', 'Lesaur', '2018-01-26', 2, 10000, 2, 200, 'Plein de choses', 10000, 200000, 0.2, 0.5, 300, 500, 3, 20, 'Plus de choses', 'Il est riche'),
(98, 'jghkhjkh', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(100, 'jghkhjkh', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(75, 'allah', '', NULL, 1, 100000, NULL, NULL, '', 12, 121, 231, 21, 21, 2, 21, 12, '12', '1'),
(87, 'allah', '', NULL, 1, 100000, NULL, NULL, '', 12, 121, 231, 21, 21, 2, 21, 12, '12', '1'),
(69, 'hello', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(73, 'allah', '', NULL, 1, 100000, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(74, 'allah', '', NULL, 1, 100000, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(101, 'jghkhjkh', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(102, 'jghkhjkh', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(103, 'jghkhjkh', 'b,', NULL, 2, 20000, 1, 221, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(104, 'jghkhjkh', 'b,', NULL, 2, 20000, 1, 221, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(105, 'jghkhjkh', 'b,', NULL, 2, 20000, 1, 221, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(106, 'jghkhjkh', 'b,', NULL, 2, 20000, 1, 221, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(107, 'Test ultime', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(115, 'lmklkjlhl', '', NULL, 1, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(122, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(123, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(127, 'sqdqsd', 'qsdqsd', NULL, 1, 100000, NULL, NULL, 'qsd,bqsldj', 10000, 200000, 0.2, 0.5, 300, 2, 3, 20, 'qsdnlsqkdn', 'mknsdlkbl'),
(128, 'N/A', 'N/A', NULL, 2, 0, 1, 0, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(129, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(130, 'N/A', 'N/A', NULL, 2, 0, 1, 0, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(131, 'N/A', 'N/A', NULL, 2, 0, 1, 0, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(134, 'Franck', 'Lesaur', NULL, 1, 12000000, NULL, NULL, 'qslcjblkwbcmowhx^cnqemkhcpwojxc', 10000, 200000, 0.2, 21, 300, 500, 3, 20, 'dlqsdmhpauqzdpnqsdh&agrave;&ccedil;yuazpodhahsdiyq&agrave;&ccedil;yzd&ccedil;', 'hzpihdpadqsdjbqzdohgazod'),
(136, 'Franck', 'Lesaur', NULL, 1, 12000000, NULL, NULL, 'qslcjblkwbcmowhx^cnqemkhcpwojxc', 10000, 200000, 0.2, 21, 300, 500, 3, 20, 'dlqsdmhpauqzdpnqsdh&agrave;&ccedil;yuazpodhahsdiyq&agrave;&ccedil;yzd&ccedil;', 'hzpihdpadqsdjbqzdohgazod'),
(138, 'Franck', 'Lesaur', NULL, 1, 12000000, NULL, NULL, 'qslcjblkwbcmowhx^cnqemkhcpwojxc', 10000, 200000, 0.2, 21, 300, 500, 3, 20, 'dlqsdmhpauqzdpnqsdh&agrave;&ccedil;yuazpodhahsdiyq&agrave;&ccedil;yzd&ccedil;', 'hzpihdpadqsdjbqzdohgazod'),
(142, 'N/A', 'N/A', '2018-01-28', 2, 0, 1, 0, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(147, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(151, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(154, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(157, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(161, 'DJ MADAFACKA', 'qmlnsmqnc', '2018-02-04', 2, 520005, 2, 50, 'fqscqcwxcwc', 6523323, 3230, 0.2, 0.2, 262, 785, 2623, 0.4, 'mchmwxncmwncm', 'MQXNCMWXCM'),
(163, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', 0, 0, 0, 0, 0, 0, 0, 0, 'N/A', 'N/A'),
(166, 'owsicbwlkbc', 'WLKXNCLK', '2018-02-16', 2, 500000, 2, 20, 'Hsmldhfmkshdflk', 20, 20, 0.4, 0.7, 20, 25, 0.8, 0.8, 'qsihdpqshdil', 'qlksnmqknclk'),
(167, 'lskdlksbdflksndlk', 'qksfkmlsndlk', NULL, 1, 53000, NULL, NULL, 'qlkdnfklsdnfknsdkf', 50, 10, 0.8, 0.8, 20, 20, 0.9, 0.7, 'sdfojspodjfpsdjf', 'qsdlqksndlkqnsd');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_c` smallint(5) UNSIGNED NOT NULL,
  `raison` text NOT NULL,
  `prospect` tinyint(1) DEFAULT NULL,
  `nom_c` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `mail_c` varchar(255) DEFAULT NULL,
  `secteur_activite` varchar(255) DEFAULT NULL,
  `nb_site` int(11) DEFAULT NULL,
  `nb_salarie` int(11) DEFAULT NULL,
  `prescripteur` varchar(255) DEFAULT NULL,
  `decideur` varchar(255) DEFAULT NULL,
  `signataire` varchar(255) DEFAULT NULL,
  `id_f` smallint(5) UNSIGNED DEFAULT NULL,
  `interet` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_c`, `raison`, `prospect`, `nom_c`, `fonction`, `adresse`, `cp`, `ville`, `tel`, `fax`, `mail_c`, `secteur_activite`, `nb_site`, `nb_salarie`, `prescripteur`, `decideur`, `signataire`, `id_f`, `interet`) VALUES
(125, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 127, 1),
(124, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 126, 2),
(123, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 125, 2),
(122, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 124, 2),
(121, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 123, 2),
(120, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 122, 1),
(119, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 121, 1),
(118, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 120, 1),
(117, '', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 119, 1),
(116, '', 1, 'Jean Charles', 'N/A', 'N/A', '75000', 'Paris', '0102030405', NULL, '', '', NULL, NULL, '', '', '', 118, 2),
(115, '', NULL, 'jean mi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, '', 1, 'Jean Seb', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', '', NULL, NULL, '', '', '', 116, 3),
(126, 'qsfdqsf', 1, 'fqsdqs', 'qsd', 'qsdqsd', '74574', 'Paris', '0102030405', '0121222324', 'test@gmail.com', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 132, 1),
(127, 'qsfdqsf', 1, 'fqsdqs', 'qsd', 'qsdqsd', '74574', 'Paris', '0102030405', '0121222324', 'test@gmail.com', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 133, 1),
(128, 'dqlsdlmkn', 1, 'lknsmwcnml', 'nlnqsmlc,', 'skqmndcln', '91230', 'Montgeron', '0102030405', '0121222324', 'dqksjbd@gmail.com', 'Agricole', 3, 22, 'N/A', 'N/A', 'N/A', 134, 1),
(129, 'dqlsdlmkn', 1, 'lknsmwcnml', 'nlnqsmlc,', 'skqmndcln', '91230', 'Montgeron', '0102030405', '0121222324', 'dqksjbd@gmail.com', 'Agricole', 3, 22, 'fqsdf', 'qsdqsd', 'qdssqd', 135, 1),
(130, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 136, 1),
(131, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 137, 1),
(132, 'hello', 1, 'Franck', 'D&eacute;veloppeur', '10 rue du test', '91230', 'Montgeron', '0102030405', '0121222324', 'dqksjbd@gmail.com', 'tertiaire', 25, 22, 'Apple', 'Windows', 'Allburotic', 138, 1),
(133, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 139, 1),
(134, 'jhdfgdfg', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 140, 1),
(135, 'jhdfgdfg', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 141, 1),
(136, 'hello', 1, 'Franck', 'Bug inserter', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 3, 15, 'Apple', 'Print Platinium', 'Hulk Hogan', 143, 1),
(137, 'hello', 1, 'Franck', 'Bug inserter', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 3, 15, 'Apple', 'Print Platinium', 'Hulk Hogan', 144, 1),
(138, 'hello', 1, 'Franck', 'Bug inserter', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 3, 15, 'Apple', 'Print Platinium', 'Hulk Hogan', 145, 1),
(139, 'hello', 1, 'Franck', 'Bug inserter', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 3, 15, 'Apple', 'Print Platinium', 'Hulk Hogan', 146, 1),
(140, 'hello', 1, 'Franck', 'D&eacute;veloppeur', '6 sentier des roches', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'tertiaire', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 154, 1),
(141, 'hello', 1, 'Franck', 'D&eacute;veloppeur', '6 sentier des roches', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'tertiaire', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 155, 1),
(142, 'hello', 1, 'Franck', 'D&eacute;veloppeur', '6 sentier des roches', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'tertiaire', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 156, 1),
(143, 'hello', 1, 'Franck', 'D&eacute;veloppeur', '6 sentier des roches', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'tertiaire', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 157, 1),
(144, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 162, 1),
(145, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 163, 1),
(146, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 164, 1),
(147, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 165, 1),
(148, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 166, 1),
(149, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 167, 1),
(150, 'hello', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 168, 1),
(151, 'Raison sociale test', 1, 'Harry Potter', 'Sorcier', '10 rue du test', '75000', 'Paris', '0102030405', '0102030405', 'email@gmail.com', 'Agricole', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 170, 1),
(152, 'Raison sociale test', 1, 'Harry Potter', 'Sorcier', '10 rue du test', '75000', 'Paris', '0102030405', '0102030405', 'email@gmail.com', 'Agricole', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 171, 1),
(153, 'Raison sociale test', 1, 'Harry Potter', 'Sorcier', '10 rue du test', '75000', 'Paris', '0102030405', '0102030405', 'email@gmail.com', 'Agricole', 1, 15, 'Prescripteur test', 'Print Platinium', 'HP', 172, 1),
(154, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 174, 1),
(155, 'phpstorm', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 175, 1),
(159, 'EDF ', 2, 'Andrew Jackson', 'Prime Ministah', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'psodjc@gmail.com', 'Informatique', 25, 500, 'The Rock', 'Print Platinium', 'Allburotic', 179, 2),
(157, 'Raison sociale test', 1, 'Responsable', 'Developpeur', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 20, 500, 'Apple', 'Print Platinium', 'Allburotic', 177, 3),
(158, 'Raison sociale test', 1, 'Responsable', 'Developpeur', '10 rue du test', '75000', 'Paris', '0102030405', '0121222324', 'email@test.com', 'Informatique', 20, 500, 'Apple', 'Print Platinium', 'Allburotic', 178, 3),
(160, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 180, 1),
(161, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 181, 1),
(162, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 182, 1),
(163, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 183, 1),
(164, 'hello', 1, 'Franck', 'Developpeur', '10 rue des tests', '75000', 'Paris', '0102030405', '0121222324', 'email@gmail.com', 'Agricole', 20, 22, 'The Rock', 'Print Platinium', 'HP', 184, 3),
(165, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 185, 1),
(166, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 186, 1),
(167, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 187, 1),
(168, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 188, 1),
(169, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 189, 1),
(170, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 190, 1),
(171, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 191, 1),
(172, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 192, 1),
(173, 'N/A', 1, 'N/A', 'N/A', 'N/A', NULL, 'N/A', NULL, NULL, '', 'N/A', 0, 0, 'N/A', 'N/A', 'N/A', 193, 3),
(174, 'Raison sociale test', 2, 'oioib', 'okb', 'kbl', '75000', 'kb', '0102030405', '0121222324', 'bl@kspk.fr', 'kb', 45, 20, 'Apple', 'Print Platinium', 'Allburotic', 194, 3),
(175, 'hello', 2, 'Nom resp', 'D&eacute;veloppeur', '10 rue du test', '75000', 'Paris', '0601020304', '0121222324', 'email@test.com', 'tertiaire', 20, 22, 'Allburotic', 'Print Platinium', 'HP', 195, 3),
(176, 'Beetlejuice', 1, 'Gremlins', 'Manager', '10 rue du test', '75000', 'Paris', '0601020304', '0121222324', 'gremlins@gmail.com', 'Agricole', 20, 500, 'Johnny ', 'Martin', 'Arthur', 196, 2),
(177, 'Magnificia', 1, 'Gerard', 'PDG', '7 rue des pissenlits', '75000', 'Paris', '0102030405', '0121222324', 'gerard@gmail.com', 'tertiaire', 3, 22, 'The Rock', 'Windows', 'Jean', 197, 3),
(178, 'hello', 1, 'gerard', 'PDG', '7 rue des test', '75000', 'Paris', '0102030405', '0121222324', 'gege@hotmail.fr', 'tertiaire', 20, 500, 'Allburotic', 'Print Platinium', 'HP', 198, 3),
(179, 'hello', 1, 'gerard', 'PDG', '7 rue des test', '75000', 'Paris', '0102030405', '0121222324', 'gege@hotmail.fr', 'tertiaire', 20, 500, 'Allburotic', 'Print Platinium', 'HP', 199, 3),
(180, 'hello', 1, 'gerard', 'PDG', '7 rue des test', '75000', 'Paris', '0102030405', '0121222324', 'gege@hotmail.fr', 'tertiaire', 20, 500, 'Allburotic', 'Print Platinium', 'HP', 200, 3),
(181, 'hello', 1, 'gerard', 'PDG', '7 rue des test', '75000', 'Paris', '0102030405', '0121222324', 'gege@hotmail.fr', 'tertiaire', 20, 500, 'Allburotic', 'Print Platinium', 'HP', 201, 3),
(182, 'hello', 1, 'gerard', 'PDG', '7 rue des test', '75000', 'Paris', '0102030405', '0121222324', 'gege@hotmail.fr', 'tertiaire', 20, 500, 'Allburotic', 'Print Platinium', 'HP', 202, 3);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_fact` smallint(5) UNSIGNED NOT NULL,
  `description` text,
  `id_t` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`id_fact`, `description`, `id_t`) VALUES
(1, NULL, 35),
(2, NULL, 36),
(3, NULL, 37),
(4, NULL, 42),
(5, 'C\'est cher', 43),
(6, 'C\'est cher', 44),
(7, 'C\'est cher', 45),
(8, 'C\'est cher', 47),
(9, 'C\'est cher', 48),
(10, 'C\'est cher', 49),
(11, 'C\'est cher', 53),
(12, 'C\'est cher', 54),
(13, 'C\'est cher', 55),
(14, 'C\'est cher', 56),
(15, 'C\'est cher', 60),
(16, '', 61),
(17, '', 62),
(18, 'houlala', 63),
(19, '', 71),
(20, '', 72),
(21, '', 89),
(22, '', 95),
(23, '', 96),
(24, '', 97),
(25, '', 109),
(26, 'vsfbd', 110),
(27, 'vsfbd', 111),
(28, 'vsfbd', 112),
(29, '', 113),
(30, '', 114),
(31, '', 117),
(32, 'qlknsdpqnsdkqns', 146),
(33, '', 150),
(34, '', 156),
(35, '', 160),
(36, 'sdbflskdnfksndfksndlkf', 168),
(37, 'qskdnklqnsdkonqsdl', 169),
(38, 'qskdnklqnsdkonqsdl', 173);

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE `fiche` (
  `id_f` smallint(5) UNSIGNED NOT NULL,
  `date_contact` date DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `prise_rdv` varchar(255) DEFAULT NULL,
  `id_u` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fiche`
--

INSERT INTO `fiche` (`id_f`, `date_contact`, `date_rdv`, `prise_rdv`, `id_u`) VALUES
(1, '2018-01-02', '2018-01-07', 'YouKnowWho', 1),
(2, '2018-01-02', '2018-01-07', 'YouKnowWho', 1),
(3, '2018-01-02', '2018-01-07', 'YouKnowWho', 1),
(4, '2018-02-01', '2018-01-31', 'Marko', 1),
(5, '2018-02-01', '2018-01-31', 'Marko', 1),
(6, '2018-02-01', '2018-01-31', 'Marko', 1),
(7, '2018-02-01', '2018-01-31', 'Marko', 1),
(8, '2018-02-01', '2018-01-31', 'Marko', 1),
(9, '2018-02-01', '2018-01-31', 'Marko', 1),
(10, '2018-02-01', '2018-01-31', 'Marko', 1),
(11, '2018-02-01', '2018-01-31', 'Marko', 1),
(12, '2018-02-01', '2018-01-31', 'Marko', 1),
(13, '2018-01-25', '2018-02-22', 'Moni', 1),
(14, '2018-01-25', '2018-02-22', 'Moni', 1),
(15, '2018-01-25', '2018-02-22', 'Moni', 1),
(16, '2018-01-25', '2018-02-22', 'Moni', 1),
(17, '2018-01-25', '2018-02-22', 'Moni', 1),
(18, '2018-01-25', '2018-02-22', 'Moni', 1),
(19, '2018-01-25', '2018-02-22', 'Moni', 1),
(20, '2018-01-25', '2018-02-22', 'Moni', 1),
(21, '2018-01-25', '2018-02-22', 'Moni', 1),
(22, '2018-01-25', '2018-02-22', 'Moni', 1),
(23, '2018-01-25', '2018-02-22', 'Moni', 1),
(24, '2018-01-25', '2018-02-22', 'Moni', 1),
(25, '2018-01-25', '2018-02-22', 'Moni', 1),
(26, '2018-01-25', '2018-02-22', 'Moni', 1),
(27, '2018-01-25', '2018-02-22', 'Moni', 1),
(28, '2018-01-25', '2018-02-22', 'Moni', 1),
(29, '2018-01-25', '2018-02-22', 'Moni', 1),
(30, '2018-01-25', '2018-02-22', 'Moni', 1),
(31, '2018-01-25', '2018-02-22', 'Moni', 1),
(32, '2018-01-25', '2018-02-22', 'Moni', 1),
(33, '2018-01-25', '2018-02-22', 'Moni', 1),
(34, '2018-01-25', '2018-02-22', 'Moni', 1),
(35, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(36, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(37, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(38, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(39, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(40, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(41, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(42, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(43, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(44, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(45, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(46, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(47, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(48, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(49, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(50, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(51, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(52, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(53, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(54, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(55, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(56, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(57, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(58, '2018-01-31', '2018-02-23', 'Rapha&euml;l', 1),
(59, NULL, NULL, 'N/A', 1),
(60, '2018-01-01', '2018-01-31', 'Vincent', 2),
(61, NULL, NULL, 'N/A', 2),
(62, NULL, NULL, 'N/A', 2),
(63, '2018-01-26', '2018-01-28', 'Santa Claus', 2),
(64, NULL, NULL, 'N/A', 2),
(65, NULL, NULL, 'N/A', 2),
(66, NULL, NULL, 'N/A', 2),
(67, NULL, NULL, 'N/A', 2),
(68, NULL, NULL, 'N/A', 2),
(69, NULL, NULL, 'N/A', 2),
(70, NULL, NULL, 'Zelda', 2),
(71, NULL, NULL, 'Zelda', 2),
(72, NULL, NULL, 'Zelda', 2),
(73, NULL, NULL, 'Link', 2),
(74, NULL, NULL, 'Link', 2),
(75, NULL, NULL, 'Link', 2),
(76, NULL, NULL, 'Link', 2),
(77, NULL, NULL, 'Test info', 2),
(78, NULL, NULL, 'Test info', 2),
(79, NULL, NULL, 'Test info', 2),
(80, NULL, NULL, 'Test info', 2),
(81, NULL, NULL, 'Test info', 2),
(82, NULL, NULL, 'Test info', 2),
(83, NULL, NULL, 'Test info', 2),
(84, NULL, NULL, 'Test info', 2),
(85, NULL, NULL, 'Test info', 2),
(86, NULL, NULL, 'Test info', 2),
(87, NULL, NULL, 'Test info', 2),
(88, NULL, NULL, 'Test info', 2),
(89, NULL, NULL, 'hello', 2),
(90, '2018-01-31', '2018-01-19', 'JC', 2),
(91, '2018-01-31', '2018-01-19', 'JC', 2),
(92, NULL, NULL, 'N/A', 2),
(93, NULL, NULL, 'N/A', 2),
(94, NULL, NULL, 'N/A', 2),
(95, NULL, NULL, 'N/A', 2),
(96, NULL, NULL, 'N/A', 1),
(97, NULL, NULL, 'N/A', 1),
(98, NULL, NULL, 'N/A', 1),
(99, NULL, NULL, 'N/A', 1),
(100, NULL, NULL, 'N/A', 1),
(101, NULL, NULL, 'N/A', 1),
(102, NULL, NULL, 'N/A', 1),
(103, NULL, NULL, 'N/A', 1),
(104, NULL, NULL, 'N/A', 1),
(105, NULL, NULL, 'N/A', 1),
(106, NULL, NULL, 'N/A', 1),
(107, NULL, NULL, 'N/A', 1),
(108, NULL, NULL, 'N/A', 1),
(109, NULL, NULL, 'N/A', 1),
(110, NULL, NULL, 'N/A', 1),
(111, NULL, NULL, 'N/A', 1),
(112, NULL, NULL, 'N/A', 1),
(113, NULL, NULL, 'N/A', 1),
(114, NULL, NULL, 'N/A', 1),
(115, NULL, NULL, 'N/A', 1),
(116, NULL, '2018-01-03', 'N/A', 1),
(117, NULL, NULL, 'N/A', 1),
(118, NULL, NULL, 'N/A', 2),
(119, '2018-01-17', '2018-01-21', 'jason statham', 1),
(120, '2018-01-27', '2018-01-27', 'Marko', 1),
(121, NULL, NULL, 'N/A', 1),
(122, NULL, NULL, 'N/A', 1),
(123, NULL, NULL, 'N/A', 1),
(124, NULL, NULL, 'N/A', 1),
(125, NULL, NULL, 'N/A', 1),
(126, NULL, NULL, 'N/A', 1),
(127, NULL, NULL, 'N/A', 1),
(128, NULL, NULL, 'N/A', 1),
(129, NULL, NULL, 'N/A', 1),
(130, NULL, NULL, 'N/A', 1),
(131, NULL, NULL, 'N/A', 1),
(132, NULL, NULL, 'N/A', 1),
(133, NULL, NULL, 'N/A', 1),
(134, NULL, NULL, 'N/A', 1),
(135, NULL, NULL, 'N/A', 1),
(136, NULL, NULL, 'N/A', 1),
(137, NULL, NULL, 'N/A', 1),
(138, '2018-01-04', '2018-01-19', 'Marko', 1),
(139, NULL, NULL, 'N/A', 1),
(140, NULL, NULL, 'N/A', 1),
(141, NULL, NULL, 'N/A', 1),
(142, NULL, '2018-01-20', 'jason statham', 1),
(143, NULL, '2018-01-20', 'jason statham', 1),
(144, '2018-01-13', '2018-01-20', 'jason statham', 1),
(145, '2018-01-13', '2018-01-20', 'jason statham', 1),
(146, '2018-01-13', '2018-01-20', 'jason statham', 1),
(147, '2018-01-13', '2018-01-20', 'jason statham', 1),
(148, '2018-01-13', '2018-01-20', 'jason statham', 1),
(149, '2018-01-06', '2018-01-18', 'Marko', 1),
(150, '2018-01-06', '2018-01-18', 'Marko', 1),
(151, '2018-01-06', '2018-01-18', 'Marko', 1),
(152, '2018-01-06', '2018-01-18', 'Marko', 1),
(153, '2018-01-06', '2018-01-18', 'Zorro', 1),
(154, '2018-01-06', '2018-01-18', 'Zorro', 1),
(155, '2018-01-06', '2018-01-18', 'Zorro', 1),
(156, '2018-01-06', '2018-01-18', 'qskdboqisbdpoqsdpoqjsdpojqs^dojqpsodjpqosd', 1),
(157, '2018-01-06', '2018-01-18', 'qskdboqisbdpoqsdpoqjsdpojqs^dojqpsodjpqosd', 1),
(158, '2018-01-14', '2018-01-13', 'qsdqsdqsdqsddebdfgsdgdfbdfbcvb', 1),
(159, '2018-01-14', '2018-01-13', 'qsdqsdqsdqsddebdfgsdgdfbdfbcvb', 1),
(160, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(161, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(162, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(163, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(164, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(165, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(166, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(167, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(168, '2018-01-20', '2018-01-31', 'Sylvester Stallone', 1),
(169, '2018-01-20', '2018-01-31', 'Sylvester Stallone schwarzi', 1),
(170, '2018-01-20', '2018-01-31', 'Sylvester Stallone schwarzi', 1),
(171, '2018-01-20', '2018-01-31', 'Sylvester Stallone schwarzi', 1),
(172, '2018-01-20', '2018-01-31', 'Sylvester Stallone schwarzi', 1),
(173, '2018-01-20', '2018-01-31', 'Sylvester Stallone schwarzi', 1),
(174, '2018-01-27', '2018-01-18', 'Komar', 1),
(175, '2018-01-27', '2018-01-18', 'Komar', 1),
(180, NULL, NULL, 'MC Hammer', 1),
(179, '2018-01-21', '2018-02-01', 'Tammer', 1),
(178, '2018-01-13', '2018-01-13', 'Randy Couture', 1),
(181, '2018-01-28', '2018-02-17', 'N/A', 1),
(182, '2018-01-28', '2018-02-17', 'N/A', 1),
(183, '2018-01-28', '2018-02-17', 'N/A', 1),
(184, '2018-01-26', '2018-01-19', 'jason statham', 2),
(185, NULL, NULL, 'N/A', 1),
(186, NULL, NULL, 'N/A', 1),
(187, NULL, NULL, 'N/A', 1),
(188, NULL, NULL, 'N/A', 1),
(189, NULL, NULL, 'N/A', 1),
(190, NULL, NULL, 'N/A', 1),
(191, NULL, NULL, 'N/A', 1),
(192, NULL, NULL, 'N/A', 1),
(193, NULL, NULL, 'N/A', 1),
(194, '2018-02-23', '2018-02-16', 'Test Chef de vente', 2),
(195, '2018-02-16', '2018-02-24', 'Marko', 3),
(196, '2018-02-10', '2018-02-24', 'Mewtwo', 1),
(197, '2018-02-11', '2018-02-24', 'Evian', 1),
(198, '2018-02-17', '2018-02-17', 'Moni', 1),
(199, '2018-02-17', '2018-02-17', 'Moni', 1),
(200, '2018-02-17', '2018-02-17', 'Moni', 1),
(201, '2018-02-17', '2018-02-17', 'Moni', 1),
(202, '2018-02-17', '2018-02-17', 'Moni', 1);

-- --------------------------------------------------------

--
-- Structure de la table `informatique`
--

CREATE TABLE `informatique` (
  `id_i` smallint(5) UNSIGNED NOT NULL,
  `nom_resp` varchar(255) DEFAULT NULL,
  `materiel_actuel` text,
  `materiel_propose` text,
  `poste_travail` text,
  `pc_portable` text,
  `serveur` text,
  `nas` text,
  `reseau` text,
  `sauvegarde` text,
  `logiciel_actuel` text,
  `logiciel_propose` text,
  `note_i` text,
  `travaux` text,
  `intervention` text,
  `maintenance` text,
  `dispositif` text,
  `panne_serveur` text,
  `doc_vital` text,
  `cout_contrat` float DEFAULT NULL,
  `echeance` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `informatique`
--

INSERT INTO `informatique` (`id_i`, `nom_resp`, `materiel_actuel`, `materiel_propose`, `poste_travail`, `pc_portable`, `serveur`, `nas`, `reseau`, `sauvegarde`, `logiciel_actuel`, `logiciel_propose`, `note_i`, `travaux`, `intervention`, `maintenance`, `dispositif`, `panne_serveur`, `doc_vital`, `cout_contrat`, `echeance`) VALUES
(144, 'N/A', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, '2018-01-27'),
(145, 'Prenom', 'qdsdqsd', 'k ', 'g ', 'lkb ', 'lkb ', 'mkb ', 'kmb ', 'lkb ', 'ljb ', 'ljkb ', 'lk ', 'blk ', 'blk ', 'bl ', 'kb ', 'fciu ', 'hy ', 75000, '2018-01-13'),
(153, 'N/A', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, '2018-02-09'),
(155, 'N/A', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, '2018-02-09'),
(158, 'N/A', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 0, '2018-02-09');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_p` smallint(5) UNSIGNED NOT NULL,
  `date_projet` date DEFAULT NULL,
  `id_c` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id_p`, `date_projet`, `id_c`) VALUES
(1, '2018-01-31', 1),
(2, '2018-01-31', 2),
(3, '2018-01-31', 3),
(4, '2018-01-26', 4),
(5, '2018-01-26', 5),
(6, '2018-01-26', 6),
(7, '2018-01-26', 7),
(8, '2018-01-26', 8),
(9, '2018-01-26', 9),
(10, '2018-01-26', 10),
(11, '2018-01-26', 11),
(12, '2018-01-26', 12),
(13, '2018-02-28', 13),
(14, '2018-02-28', 14),
(15, '2018-02-28', 15),
(16, '2018-02-28', 16),
(17, '2018-02-28', 17),
(18, '2018-02-28', 18),
(19, '2018-02-28', 19),
(20, '2018-02-28', 20),
(21, '2018-02-28', 21),
(22, '2018-02-28', 22),
(23, '2018-02-28', 23),
(24, '2018-02-28', 24),
(25, '2018-02-28', 25),
(26, '2018-02-28', 26),
(27, '2018-02-28', 27),
(28, '2018-02-28', 28),
(29, '2018-02-28', 29),
(30, '2018-02-28', 30),
(31, '2018-02-28', 31),
(32, '2018-02-28', 32),
(33, '2018-02-28', 33),
(34, '2018-02-28', 34),
(35, '2018-05-25', 35),
(36, '2018-05-25', 36),
(37, '2018-05-25', 37),
(38, '2018-05-25', 38),
(39, '2018-05-25', 39),
(40, '2018-05-25', 40),
(41, '2018-05-25', 41),
(42, '2018-05-25', 42),
(43, '2018-05-25', 43),
(44, '2018-05-25', 44),
(45, '2018-05-25', 45),
(46, '2018-05-25', 46),
(47, '2018-05-25', 47),
(48, '2018-05-25', 48),
(49, '2018-05-25', 49),
(50, '2018-05-25', 50),
(51, '2018-05-25', 51),
(52, '2018-05-25', 52),
(53, '2018-05-25', 53),
(54, '2018-05-25', 54),
(55, '2018-05-25', 55),
(56, '2018-05-25', 56),
(57, '2018-05-25', 57),
(58, '2018-05-25', 58),
(59, NULL, 59),
(60, '2018-02-01', 60),
(61, NULL, 61),
(62, NULL, 62),
(63, '2018-01-31', 63),
(64, NULL, 63),
(65, NULL, 64),
(66, NULL, 65),
(67, NULL, 66),
(68, NULL, 67),
(69, NULL, 68),
(70, NULL, 69),
(71, NULL, 70),
(72, NULL, 71),
(73, NULL, 72),
(74, NULL, 73),
(75, NULL, 74),
(76, NULL, 75),
(77, NULL, 76),
(78, NULL, 77),
(79, NULL, 78),
(80, NULL, 79),
(81, NULL, 80),
(82, NULL, 81),
(83, NULL, 82),
(84, NULL, 83),
(85, NULL, 84),
(86, NULL, 85),
(87, NULL, 86),
(88, NULL, 87),
(89, NULL, 88),
(90, '2018-01-31', 90),
(91, '2018-01-31', 91),
(92, NULL, 89),
(93, NULL, 90),
(94, NULL, 91),
(95, NULL, 92),
(96, NULL, 93),
(97, NULL, 94),
(98, NULL, 95),
(99, NULL, 96),
(100, NULL, 97),
(101, NULL, 98),
(102, NULL, 99),
(103, NULL, 100),
(104, NULL, 101),
(105, NULL, 102),
(106, NULL, 103),
(107, NULL, 104),
(108, NULL, 105),
(109, NULL, 106),
(110, NULL, 107),
(111, NULL, 108),
(112, NULL, 109),
(113, NULL, 110),
(114, NULL, 111),
(115, NULL, 112),
(116, NULL, 113),
(117, NULL, 114),
(118, NULL, 116),
(119, NULL, 117),
(120, NULL, 118),
(121, NULL, 119),
(122, NULL, 120),
(123, NULL, 121),
(124, NULL, 121),
(125, NULL, 122),
(126, NULL, 123),
(127, NULL, 124),
(128, NULL, 125),
(129, '2018-01-27', 132),
(130, NULL, 134),
(131, NULL, 135),
(132, NULL, 154),
(133, NULL, 155),
(134, '2018-01-31', 156),
(135, '2018-01-31', 156),
(136, '2018-01-31', 157),
(137, '2018-01-31', 157),
(138, '2018-01-31', 158),
(139, '2018-01-31', 158),
(140, '2018-02-01', 159),
(141, NULL, 160),
(142, '2018-01-21', 161),
(143, '2018-01-21', 162),
(144, '2018-01-21', 163),
(145, '2018-01-06', 164),
(146, NULL, 165),
(147, NULL, 166),
(148, NULL, 166),
(149, NULL, 166),
(150, NULL, 166),
(151, NULL, 167),
(152, NULL, 167),
(153, NULL, 168),
(154, NULL, 169),
(155, NULL, 169),
(156, NULL, 170),
(157, NULL, 171),
(158, NULL, 171),
(159, NULL, 171),
(160, NULL, 171),
(161, NULL, 172),
(162, NULL, 172),
(163, NULL, 173),
(164, '2018-02-16', 174),
(165, '2018-02-15', 175),
(166, '2018-02-16', 176),
(167, '2018-02-16', 176),
(168, '2018-02-16', 177),
(169, '2018-02-10', 178),
(170, '2018-02-10', 179),
(171, '2018-02-10', 180),
(172, '2018-02-10', 181),
(173, '2018-02-10', 182);

-- --------------------------------------------------------

--
-- Structure de la table `solution`
--

CREATE TABLE `solution` (
  `id_s` smallint(5) UNSIGNED NOT NULL,
  `doc_classe` text,
  `doc_archive` text,
  `doc_ordi` text,
  `collab_absent` text,
  `proc_valid` text,
  `vol_impression` text,
  `refacturer` text,
  `doc_conf` text,
  `doc_compta` text,
  `vol_coul_imp` text,
  `doc_papier` text,
  `doc_app` text,
  `scanner` text,
  `fonct_scanner` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `solution`
--

INSERT INTO `solution` (`id_s`, `doc_classe`, `doc_archive`, `doc_ordi`, `collab_absent`, `proc_valid`, `vol_impression`, `refacturer`, `doc_conf`, `doc_compta`, `vol_coul_imp`, `doc_papier`, `doc_app`, `scanner`, `fonct_scanner`) VALUES
(34, 'Je ne sais pas', '10 minutes', '15 minutes', 'Je ne fais pas', 'Notes de frais, autorisations de d&eacute;penses', '22L au 100', 'Des impressions', 'Oui, plein', 'Nan jamais', 'Oui je le souhaite', 'Oui beaucoup', 'Oui c\'est le cas', 'Il est obsol&egrave;te', 'T&eacute;l&eacute;portation'),
(88, 'fsdf', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'v', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello'),
(91, 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'v', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello'),
(92, 'qlksbdkb', 'kb', 'lkb', 'lb', 'lb', 'lkb', 'lkb', 'lkb', 'lkb', 'lk', 'bm', 'hpif', 'iug', 'yid'),
(93, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(116, 'fskndl', 'nml', 'nmk', 'nm', 'nm', 'ln', 'mln', 'mln', 'mln', 'mln', 'mln', 'm', '', ''),
(124, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(135, 'qsdqsdgqsldkbcmlqhscixhlg', 'lglbskxncvphqspdhc', 'pqhsdcmjqsmchjmxc', 'sdbqmxkcnwmxcmnxc', 'mxlcnmlwcmlwjxcmn', 'mqsncmlwnxcmnwxmcn', 'wcknlwkxnclkwxclkwxc', 'wqsdcpbwxlkcbwlxbc', 'hlkb', 'lk', 'blkb', 'l', 'blk', 'blkb'),
(137, 'qsdqsdgqsldkbcmlqhscixhlg', 'lglbskxncvphqspdhc', 'pqhsdcmjqsmchjmxc', 'sdbqmxkcnwmxcmnxc', 'mxlcnmlwcmlwjxcmn', 'mqsncmlwnxcmnwxmcn', 'wcknlwkxnclkwxclkwxc', 'wqsdcpbwxlkcbwlxbc', 'hlkb', 'lk', 'blkb', 'l', 'blk', 'blkb'),
(139, 'qsdqsdgqsldkbcmlqhscixhlg', 'lglbskxncvphqspdhc', 'pqhsdcmjqsmchjmxc', 'sdbqmxkcnwmxcmnxc', 'mxlcnmlwcmlwjxcmn', 'mqsncmlwnxcmnwxmcn', 'wcknlwkxnclkwxclkwxc', 'wqsdcpbwxlkcbwlxbc', 'hlkb', 'lk', 'blkb', 'l', 'blk', 'blkb'),
(149, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(159, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(164, 'g', 'N/A', 'lkjb', 'jkb', 'jkb', 'kj', 'bkj', 'bkj', 'bkj', 'bkj', 'bkj', 'bk', 'jb', 'kjb'),
(165, 'qksndpqksnd', 'nmlndmlqnfmqlsn', 'ml,ml,msld,ml,', 'l,ml,', 'ml,', 'ml,m', 'nu', 'iug', 'mif', 'iug', 'ilydiu', 'gliyud', 'fiuglutdf', 'og');

-- --------------------------------------------------------

--
-- Structure de la table `telephonie`
--

CREATE TABLE `telephonie` (
  `id_t` smallint(5) UNSIGNED NOT NULL,
  `fournisseur_t` varchar(255) DEFAULT NULL,
  `leaser_t` varchar(255) DEFAULT NULL,
  `date_deb_t` date DEFAULT NULL,
  `achat_t` tinyint(1) DEFAULT NULL,
  `prix_t` float DEFAULT NULL,
  `prelevement_t` tinyint(1) DEFAULT NULL,
  `duree_contrat_t` text,
  `materiel_t` text,
  `num_ligne` varchar(255) DEFAULT NULL,
  `nb_poste` int(11) DEFAULT NULL,
  `nb_rj45` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `telephonie`
--

INSERT INTO `telephonie` (`id_t`, `fournisseur_t`, `leaser_t`, `date_deb_t`, `achat_t`, `prix_t`, `prelevement_t`, `duree_contrat_t`, `materiel_t`, `num_ligne`, `nb_poste`, `nb_rj45`) VALUES
(1, 'a', '', NULL, 1, NULL, NULL, NULL, 'a', NULL, NULL, NULL),
(71, 'a', '', NULL, 1, NULL, NULL, NULL, 'a', NULL, NULL, NULL),
(63, 'Orange', '', NULL, 2, NULL, 1, NULL, '', '0102030405--', 25, 50),
(89, 'a', '', NULL, 1, NULL, NULL, NULL, 'a', NULL, NULL, NULL),
(95, 'jlkbljkblkjmou', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'sdfsdfsdfsdf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'sdfsdfsdfsdf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'sfdfghf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'sfdfghf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'sfdfghf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'sfdfghf', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, '', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'hfkiojhdfxc', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, '', '', NULL, 2, NULL, 1, NULL, '', NULL, NULL, NULL),
(146, 'Bouygues', 'SFR', NULL, 1, 1000000, NULL, NULL, 'fhdgdfgdgdfgdfg', '0102030405', 102030405, 50),
(150, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', NULL, NULL, 0),
(156, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', NULL, NULL, 0),
(160, 'N/A', 'N/A', NULL, 1, 0, NULL, NULL, 'N/A', NULL, NULL, 0),
(169, 'Bouygues', 'SFR', NULL, 1, 1000000, NULL, NULL, 'qskdoqsndkjqbsdjb', '0102030405', 102030405, 26),
(172, 'Bouygues', 'SFR', NULL, 1, 1000000, NULL, NULL, 'qskdoqsndkjqbsdjb', '0102030405', 102030405, 26),
(173, 'Bouygues', 'SFR', '2018-02-17', 2, 500000, 2, '20', 'qkjdblkqnsdlknqslkdn', '0102030405', 58, 26);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_u` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `lvl` int(11) DEFAULT NULL,
  `id_chef` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `nom`, `prenom`, `email`, `mdp`, `lvl`, `id_chef`) VALUES
(1, 'Chaks  ', 'Franck   ', 'test@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3, NULL),
(2, 'Stefanovic                                ', 'Marko               ', 'marko@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1),
(3, 'Chhuon          ', 'Moni   ', 'moni@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 2),
(4, 'Cotini', 'Vincent', 'vincent@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 2),
(5, 'Truong', 'Jonathan', 'jo@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 2),
(6, 'Potter', 'Harry', 'harry@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bureautique`
--
ALTER TABLE `bureautique`
  ADD PRIMARY KEY (`id_b`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id_f` (`id_f`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_fact`),
  ADD KEY `id_t` (`id_t`);

--
-- Index pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`id_f`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `informatique`
--
ALTER TABLE `informatique`
  ADD PRIMARY KEY (`id_i`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id_s`);

--
-- Index pour la table `telephonie`
--
ALTER TABLE `telephonie`
  ADD PRIMARY KEY (`id_t`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bureautique`
--
ALTER TABLE `bureautique`
  MODIFY `id_b` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_c` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_fact` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `id_f` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT pour la table `informatique`
--
ALTER TABLE `informatique`
  MODIFY `id_i` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_p` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT pour la table `solution`
--
ALTER TABLE `solution`
  MODIFY `id_s` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT pour la table `telephonie`
--
ALTER TABLE `telephonie`
  MODIFY `id_t` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
