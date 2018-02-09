-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 09 Février 2018 à 16:23
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

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_fact` smallint(5) UNSIGNED NOT NULL,
  `description` text,
  `id_t` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_p` smallint(5) UNSIGNED NOT NULL,
  `date_projet` date DEFAULT NULL,
  `id_c` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `id_chef` int(11) DEFAULT NULL,
  `ban` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_u`, `nom`, `prenom`, `email`, `mdp`, `lvl`, `id_chef`, `ban`) VALUES
(1, 'Herszkorn', 'Jacques-Laurent', 'jacques-laurent@allburotic.fr', 'af279b84d4309624ad0958fda7defe019a074462', 3, NULL, 0),
(2, 'Herszkorn', 'Hervé', 'herve@allburotic.fr', '6c2755e4a702b75394ded2c8eb42b27273170258', 2, NULL, 0),
(3, 'Ghnassia', 'Benjamin', 'benjamin@allburotic.fr', 'f49131f3c9b10643ef42cdb8b3ad9bd63d085a2a', 2, NULL, 0),
(4, 'Laghla', 'Ibtissam', 'ibtissam@print-platinium.fr', 'ad9c85a026e820dd08d11cc31fdbc06c51ba52b4', 1, 3, 0),
(5, 'Da Costa', 'Franck', 'f.costa@print-platinium.fr', 'a0bff2a0b9f6137651d1116b6ff0fcb3b2a9232f', 1, 3, 0),
(6, 'Hazan', 'Steven', 'steven@print-platinium.fr', '76ef1d22d39c68e03d037984907cf69d0b839c77', 1, 2, 0),
(7, 'El Harti', 'Ismail', 'ismail@print-platinium.fr', 'd6a5727dd6fddce54dacd38ecadbd39576c67992', 1, 2, 0);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
