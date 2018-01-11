-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 05 Mai 2017 à 11:06
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `THOLDI`
--

-- --------------------------------------------------------

--
-- Structure de la table `DEVIS`
--

CREATE TABLE `DEVIS` (
  `codeDevis` int(11) NOT NULL,
  `dateDevis` date NOT NULL,
  `montantDevis` decimal(6,2) NOT NULL,
  `volume` decimal(4,0) NOT NULL,
  `nbContainers` decimal(2,0) NOT NULL,
  `valider` char(1) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `DEVIS`
--

INSERT INTO `DEVIS` (`codeDevis`, `dateDevis`, `montantDevis`, `volume`, `nbContainers`, `valider`) VALUES
(1, '2017-01-01', '500.00', '2500', '2', 'N'),
(2, '2017-02-05', '500.00', '2500', '2', 'N');

-- --------------------------------------------------------

--
-- Structure de la table `PAYS`
--

CREATE TABLE `PAYS` (
  `codePays` char(4) COLLATE latin1_general_ci NOT NULL,
  `nomPays` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `PAYS`
--

INSERT INTO `PAYS` (`codePays`, `nomPays`) VALUES
('1', 'France'),
('2', 'Allemagne'),
('3', 'Espagne');

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNE`
--

CREATE TABLE `PERSONNE` (
  `CodePersonne` int(11) NOT NULL,
  `raisonSociale` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `adresse` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `cp` char(5) COLLATE latin1_general_ci NOT NULL,
  `ville` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `adrMel` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `telephone` char(10) COLLATE latin1_general_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `login` char(10) COLLATE latin1_general_ci NOT NULL,
  `mdp` char(10) COLLATE latin1_general_ci NOT NULL,
  `codePays` char(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `PERSONNE`
--

INSERT INTO `PERSONNE` (`CodePersonne`, `raisonSociale`, `adresse`, `cp`, `ville`, `adrMel`, `telephone`, `contact`, `login`, `mdp`, `codePays`) VALUES
(1, 'Apple', '96 rue du Chemin', '75011', 'Paris', 'tholdi1@gmail.fr', '0145250236', 'Thauvin', 'Ftha', 'azerty', '1'),
(2, 'Samsung', '63 rue du Chemin bleu', '95011', 'Paris', 'tholdi_2@gmail.com', '0125480236', 'GUIK', 'Mlop', 'azerty', '2'),
(3, 'Sony', '45 rue du Chemin rouge', '85011', 'Paris', 'tholdi_3@gmail.com', '0145254502', 'laguerre', 'Slag', 'azerty', '3'),
(6, 'PINEL SARL', '1 poiuytr', '95800', 'Cergy', 'adrien@gmail.com', '0130303030', 'PINEL', 'apin', '123', '1'),
(7, 'van', '1 van', '78570', 'van', 'van@gmail.com', '0112121212', 'VAN-HORDE', 'van', 'incorrect', '1'),
(8, 'aaa', 'aaa', '95800', 'aaa', 'aaa@gmail.Com', '0130303030', 'aaa', 'aaa', 'aaa', '1');

-- --------------------------------------------------------

--
-- Structure de la table `RESERVATION`
--

CREATE TABLE `RESERVATION` (
  `codeReservation` int(11) NOT NULL,
  `dateDebutReservation` date DEFAULT NULL,
  `dateFinReservation` date DEFAULT NULL,
  `dateReservation` date DEFAULT NULL,
  `volumeEstime` decimal(6,2) DEFAULT NULL,
  `codeDevis` int(11) DEFAULT NULL,
  `codeVilleRendre` char(3) COLLATE latin1_general_ci DEFAULT NULL,
  `codeVilleReservation` char(3) COLLATE latin1_general_ci DEFAULT NULL,
  `codePersonne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `RESERVATION`
--

INSERT INTO `RESERVATION` (`codeReservation`, `dateDebutReservation`, `dateFinReservation`, `dateReservation`, `volumeEstime`, `codeDevis`, `codeVilleRendre`, `codeVilleReservation`, `codePersonne`) VALUES
(3, '2017-10-02', '2017-09-02', '2017-08-02', '1000.00', 1, '1', '1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `RESERVER`
--

CREATE TABLE `RESERVER` (
  `codeReservation` int(11) NOT NULL,
  `typeContainer` char(7) COLLATE latin1_general_ci NOT NULL,
  `qteReserver` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `RESERVER`
--

INSERT INTO `RESERVER` (`codeReservation`, `typeContainer`, `qteReserver`) VALUES
(3, '1', '5');

-- --------------------------------------------------------

--
-- Structure de la table `TYPECONTAINER`
--

CREATE TABLE `TYPECONTAINER` (
  `typeContainer` char(7) COLLATE latin1_general_ci NOT NULL,
  `libelleTypeContainer` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `longueurCont` decimal(6,2) NOT NULL,
  `largeurCont` decimal(6,2) NOT NULL,
  `hauteurCont` decimal(6,2) NOT NULL,
  `poidsCont` decimal(6,2) NOT NULL,
  `tare` decimal(7,2) NOT NULL,
  `capaciteDeCharge` decimal(5,2) NOT NULL,
  `tarifJour` decimal(4,2) NOT NULL,
  `tarifTrim` decimal(6,2) NOT NULL,
  `tarifAnn` decimal(6,2) NOT NULL,
  `image` varchar(20) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `TYPECONTAINER`
--

INSERT INTO `TYPECONTAINER` (`typeContainer`, `libelleTypeContainer`, `longueurCont`, `largeurCont`, `hauteurCont`, `poidsCont`, `tare`, `capaciteDeCharge`, `tarifJour`, `tarifTrim`, `tarifAnn`, `image`) VALUES
('1', 'Reefer', '600.00', '200.00', '250.00', '50.00', '540.00', '500.00', '10.00', '500.00', '1500.00', 'img/produit1.gif'),
('2', 'Tanker', '650.00', '200.00', '225.00', '50.00', '540.00', '500.00', '10.00', '500.00', '1500.00', 'img/produit2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `VILLE`
--

CREATE TABLE `VILLE` (
  `codeVille` char(3) COLLATE latin1_general_ci NOT NULL,
  `nomVille` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `codePays` char(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `VILLE`
--

INSERT INTO `VILLE` (`codeVille`, `nomVille`, `codePays`) VALUES
('1', 'Cergy', '1'),
('2', 'Paris', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `DEVIS`
--
ALTER TABLE `DEVIS`
  ADD PRIMARY KEY (`codeDevis`);

--
-- Index pour la table `PAYS`
--
ALTER TABLE `PAYS`
  ADD PRIMARY KEY (`codePays`);

--
-- Index pour la table `PERSONNE`
--
ALTER TABLE `PERSONNE`
  ADD PRIMARY KEY (`CodePersonne`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `fk_PERSONNE` (`codePays`);

--
-- Index pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD PRIMARY KEY (`codeReservation`),
  ADD KEY `fk_RESERVATIONA` (`codeDevis`),
  ADD KEY `fk_RESERVATIONB` (`codeVilleRendre`),
  ADD KEY `fk_RESERVATIONC` (`codeVilleReservation`),
  ADD KEY `fk_RESERVATIOND` (`codePersonne`);

--
-- Index pour la table `RESERVER`
--
ALTER TABLE `RESERVER`
  ADD PRIMARY KEY (`codeReservation`,`typeContainer`),
  ADD KEY `fk_codtyp` (`typeContainer`);

--
-- Index pour la table `TYPECONTAINER`
--
ALTER TABLE `TYPECONTAINER`
  ADD PRIMARY KEY (`typeContainer`);

--
-- Index pour la table `VILLE`
--
ALTER TABLE `VILLE`
  ADD PRIMARY KEY (`codeVille`),
  ADD KEY `fk_codePays` (`codePays`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `DEVIS`
--
ALTER TABLE `DEVIS`
  MODIFY `codeDevis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `PERSONNE`
--
ALTER TABLE `PERSONNE`
  MODIFY `CodePersonne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  MODIFY `codeReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `RESERVER`
--
ALTER TABLE `RESERVER`
  MODIFY `codeReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `PERSONNE`
--
ALTER TABLE `PERSONNE`
  ADD CONSTRAINT `fk_PERSONNE` FOREIGN KEY (`codePays`) REFERENCES `PAYS` (`codePays`);

--
-- Contraintes pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD CONSTRAINT `fk_RESERVATIONA` FOREIGN KEY (`codeDevis`) REFERENCES `DEVIS` (`codeDevis`),
  ADD CONSTRAINT `fk_RESERVATIONB` FOREIGN KEY (`codeVilleRendre`) REFERENCES `VILLE` (`codeVille`),
  ADD CONSTRAINT `fk_RESERVATIONC` FOREIGN KEY (`codeVilleReservation`) REFERENCES `VILLE` (`codeVille`),
  ADD CONSTRAINT `fk_RESERVATIOND` FOREIGN KEY (`codePersonne`) REFERENCES `PERSONNE` (`CodePersonne`);

--
-- Contraintes pour la table `RESERVER`
--
ALTER TABLE `RESERVER`
  ADD CONSTRAINT `fk_codeReservation` FOREIGN KEY (`codeReservation`) REFERENCES `RESERVATION` (`codeReservation`),
  ADD CONSTRAINT `fk_codtyp` FOREIGN KEY (`typeContainer`) REFERENCES `TYPECONTAINER` (`typeContainer`);

--
-- Contraintes pour la table `VILLE`
--
ALTER TABLE `VILLE`
  ADD CONSTRAINT `fk_codePays` FOREIGN KEY (`codePays`) REFERENCES `PAYS` (`codePays`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
