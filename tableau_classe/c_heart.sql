-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 jan. 2023 à 11:56
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `c_heart`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `ID_CAPTEUR` int(11) NOT NULL,
  `TYPE` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `ID` int(11) NOT NULL,
  `nom` varchar(128) DEFAULT NULL,
  `prenom` varchar(128) DEFAULT NULL,
  `mail` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`ID`, `nom`, `prenom`, `mail`) VALUES
(1, 'tABLEAU', 'Clément', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `ID` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `titre` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `lien` varchar(128) NOT NULL,
  `numero_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`ID`, `nom`, `prenom`, `date`, `titre`, `message`, `lien`, `numero_article`) VALUES
(5, '', '', '2023-01-17 09:33:29', 'test', 'testest', '', 1),
(5, '', '', '2023-01-17 10:34:58', 'test2', 'testest2', '', 2),
(5, 'Tableau', 'Clement', '2023-01-17 10:36:12', 'test3', 'testest3', '', 3),
(5, 'Tableau', 'Clement', '2023-01-17 10:45:37', 'test4', 'test44', '', 4),
(5, 'Tableau', 'Clement', '2023-01-17 10:51:07', 'test 6', 'j&#39;aime les frites', '', 5),
(5, 'Tableau', 'Clement', '2023-01-17 10:52:54', 'test 7', 'j&#39;aime les frites', '', 6),
(5, 'Tableau', 'Clement', '2023-01-17 11:25:59', 'test10', 'test10000', '36893d79f72c913e2325466592541fa0efbe4fa26ff1d894de7fd02a8be6105a', 7),
(5, 'Tableau', 'Clement', '2023-01-17 11:39:31', 'test11', 'test1111', '', 8);

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
  `ID` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `numero_article` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `info_enfant`
--

CREATE TABLE `info_enfant` (
  `NUMERO_ENFANT` int(11) NOT NULL,
  `NOM_ENFANT` varchar(128) DEFAULT NULL,
  `PRENOM_ENFANT` varchar(128) DEFAULT NULL,
  `TAILLE_ENFANT` int(11) DEFAULT NULL,
  `POIDS_ENFANT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `info_parent`
--

CREATE TABLE `info_parent` (
  `ID_PARENT` int(11) NOT NULL,
  `NOM_PARENT` varchar(128) DEFAULT NULL,
  `PRENOM_PARENT` varchar(128) DEFAULT NULL,
  `EMAIL_PARENT` varchar(128) DEFAULT NULL,
  `NUMERO_TELEPHONE_PARENT` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `info_professeur`
--

CREATE TABLE `info_professeur` (
  `ID_PROFESSEUR` int(11) NOT NULL,
  `NOM_PROFESSEUR` varchar(128) DEFAULT NULL,
  `PRENOM_PROFESSEUR` varchar(128) DEFAULT NULL,
  `EMAIL_PROFESSEUR` varchar(128) DEFAULT NULL,
  `NUMERO_TELEPHONE_PROFESSEUR` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

CREATE TABLE `mesure` (
  `ID_MESURE` int(11) NOT NULL,
  `VALEUR` varchar(128) DEFAULT NULL,
  `JOUR` date DEFAULT NULL,
  `HEURE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `telephone` varchar(128) NOT NULL,
  `nom_enfant` varchar(128) NOT NULL,
  `prenom_enfant` varchar(128) NOT NULL,
  `taille` decimal(10,2) NOT NULL,
  `poids` decimal(10,2) NOT NULL,
  `reset_password_token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `mail`, `password`, `nom`, `prenom`, `telephone`, `nom_enfant`, `prenom_enfant`, `taille`, `poids`, `reset_password_token`) VALUES
(1, 'test@gmail.com', 'ogaeogeALKMZKL', 'tABLEAU', 'Clément', '209219050821', '', '', '0.00', '0.00', ''),
(2, 'test2@gmail.com', '', 'FIFI', 'LOULOU', '', '', '', '0.00', '0.00', ''),
(3, 'test2@gmail.com', '', 'FIFI', 'LOULOU', '', '', '', '0.00', '0.00', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`ID_CAPTEUR`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`numero_article`);

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
  ADD PRIMARY KEY (`numero_article`);

--
-- Index pour la table `info_enfant`
--
ALTER TABLE `info_enfant`
  ADD PRIMARY KEY (`NUMERO_ENFANT`);

--
-- Index pour la table `info_parent`
--
ALTER TABLE `info_parent`
  ADD PRIMARY KEY (`ID_PARENT`);

--
-- Index pour la table `info_professeur`
--
ALTER TABLE `info_professeur`
  ADD PRIMARY KEY (`ID_PROFESSEUR`);

--
-- Index pour la table `mesure`
--
ALTER TABLE `mesure`
  ADD PRIMARY KEY (`ID_MESURE`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `numero_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
  MODIFY `numero_article` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `info_parent`
--
ALTER TABLE `info_parent`
  ADD CONSTRAINT `info_parent_ibfk_1` FOREIGN KEY (`ID_PARENT`) REFERENCES `info_enfant` (`NUMERO_ENFANT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
