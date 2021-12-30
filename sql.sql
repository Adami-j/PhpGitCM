-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 21 Décembre 2021 à 00:14
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cabinet_medical1`
--

-- --------------------------------------------------------

--
-- Structure de la table `consulter`
--

CREATE TABLE `consulter` (
  `Id_Medecin` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `dateRdv` date DEFAULT NULL,
  `heureRdv` time DEFAULT NULL,
  `duree` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `Id_Medecin` int(11) NOT NULL,
  `civilite` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`Id_Medecin`, `civilite`, `nom`, `prenom`) VALUES
(9, 'Monsieur', 'mpop', 'opsl');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `NumeroSecu` varchar(11) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(50) DEFAULT NULL,
  `civilite` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id_patient`, `NumeroSecu`, `nom`, `prenom`, `telephone`, `adresse`, `ville`, `codePostal`, `dateNaissance`, `lieuNaissance`, `civilite`) VALUES
(5, 'ed45dc5', 'dxsokid', 'JIJIJIOJJj', 5965959, 'jiijijio', 'jiojiojio', 65987, '2000-05-02', 'eddj', 'Monsieur'),
(6, '5555', 'l', 'l', 5555, 'l', 'l', 88888, '2000-08-08', 'dds', 'Monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `referent`
--

CREATE TABLE `referent` (
  `id_patient` int(11) NOT NULL,
  `O_N` int(11) DEFAULT NULL,
  `Id_Medecin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurc`
--

CREATE TABLE `utilisateurc` (
  `id` int(11) NOT NULL,
  `login` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurc`
--

INSERT INTO `utilisateurc` (`id`, `login`, `password`) VALUES
(1, 'root', 'root');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD PRIMARY KEY (`Id_Medecin`,`id_patient`),
  ADD KEY `consulter_ibfk_2` (`id_patient`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`Id_Medecin`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `referent`
--
ALTER TABLE `referent`
  ADD PRIMARY KEY (`id_patient`),
  ADD KEY `Id_Medecin` (`Id_Medecin`);

--
-- Index pour la table `utilisateurc`
--
ALTER TABLE `utilisateurc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `Id_Medecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `utilisateurc`
--
ALTER TABLE `utilisateurc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `consulter`
--
ALTER TABLE `consulter`
  ADD CONSTRAINT `consulter_ibfk_1` FOREIGN KEY (`Id_Medecin`) REFERENCES `medecin` (`Id_Medecin`),
  ADD CONSTRAINT `consulter_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `consulter_ibfk_3` FOREIGN KEY (`Id_Medecin`) REFERENCES `medecin` (`Id_Medecin`);

--
-- Contraintes pour la table `referent`
--
ALTER TABLE `referent`
  ADD CONSTRAINT `referent_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `referent_ibfk_2` FOREIGN KEY (`Id_Medecin`) REFERENCES `medecin` (`Id_Medecin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
