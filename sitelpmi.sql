-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 29 mars 2018 à 14:36
-- Version du serveur :  5.7.17
-- Version de PHP :  7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitelpmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(2) NOT NULL,
  `nomM` varchar(100) NOT NULL,
  `descriptionM` text NOT NULL,
  `id_ue` int(2) NOT NULL,
  `id_prof` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nomM`, `descriptionM`, `id_ue`, `id_prof`) VALUES
(1, 'Systemes', '', 1, 4),
(2, 'Reseau', '', 1, 3),
(3, 'Anglais', '', 8, 8),
(4, 'Connaissance de l\'entreprise', '', 8, 9),
(5, 'Developpement Web Mobile', '', 6, 5),
(6, 'Stockage des Données', '', 5, 6),
(7, 'Génie Logiciel', '', 7, 4),
(8, 'Génie Logiciel', '', 7, 1),
(9, 'Projets Tutoré', '', 9, 0),
(10, 'Algorithmie et Programmation Orientée Objet', '', 2, 2),
(11, 'Interfaces Graphiques Environnement Java', '', 2, 4),
(12, 'Technologies pour le Web - Reponsive', '', 3, 5),
(13, 'Technologies pour le Web - XML', '', 3, 11),
(14, 'Methodes et Outils de Programmation pour le Web', '', 4, 12),
(15, 'Genie Logiciel', '', 7, 12),
(16, 'Methodes et Outils de Programmation pour le Web - CMS', '', 4, 10),
(17, 'Technologies pour le Web ', '', 3, 7);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `auteur` varchar(30) NOT NULL DEFAULT 'admin',
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `auteur`, `message`, `date`) VALUES
(1, 'admin', 'coucou', '2018-03-29'),
(2, 'admin', 'coucou', '2018-03-15'),
(3, 'micou', 'kshkshkshkjhskjhskh', '2018-03-13'),
(4, 'admin', 'qzdqzdqdqzdqzdq', '2017-09-26'),
(5, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra rhoncus enim non iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lobortis urna sit amet lectus varius, ut facilisis risus tristique. Sed a blandit ex, ut interdum lorem. Donec a orci nec neque euismod interdum. Nam posuere finibus erat, eget fringilla libero tincidunt auctor. Quisque luctus risus sit amet arcu iaculis posuere. In nulla nulla, malesuada ut feugiat sed, imperdiet ut tellus. Aenean vehicula, urna nec sollicitudin vehicula, est felis cursus quam, in venenatis turpis neque id erat. Suspendisse est ante, ultricies sed interdum ac, blandit a magna. Phasellus et fringilla dolor. Phasellus eget convallis tortor. Donec quis aliquet nulla. Nulla facilisi. Sed nec fringilla arcu.\r\n\r\n1 paragraphes, 118 mots, 793 caractères de Lorem Ipsum généré', '2018-09-14'),
(6, 'dernier', 'dqzddddddddddddddddddd', '2018-03-07');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nomP` varchar(20) NOT NULL,
  `descriptionP` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nomP`, `descriptionP`) VALUES
(1, 'Marinette Savonnet', ''),
(2, 'Olivier Bailleux', ''),
(3, 'Olivier Togni', ''),
(4, 'Dominique Micollet', ''),
(5, 'Ana-Maria Roxin', ''),
(6, 'Thierry Grison', ''),
(7, 'Sandrine Lanquetin', ''),
(8, 'Nathalie Vassileff', ''),
(0, 'Autonomie', ''),
(12, 'Pierre Laforet', 'Intervenant Exterieur'),
(10, 'Marc Mebtouche', 'Intervenant Exterieur'),
(11, 'Emeline Dorey', 'Intervenante Exterieur'),
(9, 'Franck Hendel', '');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `description`) VALUES
(6, 'halo', 'le projet qui consiste a aimer halo sous toute ses formes'),
(3, 'cars', 'le projet des voiture qui roulent beaucoup');

-- --------------------------------------------------------

--
-- Structure de la table `unite_enseignement`
--

CREATE TABLE `unite_enseignement` (
  `id` int(11) NOT NULL,
  `nomUE` varchar(100) NOT NULL,
  `descriptionUE` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `unite_enseignement`
--

INSERT INTO `unite_enseignement` (`id`, `nomUE`, `descriptionUE`) VALUES
(1, 'UE1', 'Unité d\'enseignement 1, elle regroupe 2 matières :\r\n <br/><br/> \"Systèmes\" <br/><br/> \"Réseaux\"'),
(2, 'UE2', 'Unité d\'enseignement 2, elle regroupe 2 matières : <br/><br/>\"Algorithmie et Programmation Orientée Objet\" <br/><br/> \"Interfaces Graphiques Environnement Java\"'),
(3, 'UE3', 'Unité d\'enseignement 3, elle regroupe 3 matières, toutes sous le nom de : <br/><br/> \"Technologies pour le Web\"'),
(4, 'UE4', 'Unité d\'enseignement 4, elle regroupe 2 matières toutes sous le nom de : <br/><br/> \"Methodes et Outils de Programmation pour le Web\"'),
(5, 'UE5', 'Unité d\'enseignement 5, elle est composée d\'une matière nommée <br/><br/> \"Stockage des Données\"'),
(6, 'UE6', 'Unité d\'enseignement 6, elle est composée d\'une matière nommée <br/><br/> \"Developpement Web Mobile\"'),
(7, 'UE7', 'Unité d\'enseignement 7, elle regroupe 3 matières, toutes sous le nom de : <br/><br/> \"Génie Logiciel\"'),
(8, 'UE9', 'Unité d\'enseignement 9, elle regroupe 2 matières: <br/><br/> \"Anglais\" <br/><br/> \"Connaissance de l\'entreprise\"'),
(9, 'UE10', 'Unité d\'enseignement 10, elle est composée d\'une matière nommée <br/><br/> \"Projets Tutorés\"');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'visiteur'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `pass`, `email`, `type`) VALUES
(3, 'michou', '123456', '', 'etudiant'),
(5, 'mb759225', 'jd80uq85', NULL, 'etudiant');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `unite_enseignement`
--
ALTER TABLE `unite_enseignement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `unite_enseignement`
--
ALTER TABLE `unite_enseignement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
