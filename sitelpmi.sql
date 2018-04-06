-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 06 avr. 2018 à 10:47
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
(1, 'Systemes', 'Enterdum et malesuada fames ac ante ipsum primis in faucibus. Quisque convallis est et est gravida fermentum. Nullam porttitor ipsum ac dolor porttitor, vitae venenatis eros maximus. Etiam urna nisl, dapibus ut pharetra vel, varius ut tortor. Quisque gravida velit vel lorem finibus, id tincidunt dui rutrum. Quisque commodo risus mattis, mollis enim nec, ultricies nisl.', 1, 4),
(2, 'Reseau', 'Sed fringilla eu tortor pretium lobortis. Suspendisse sollicitudin lorem a nibh viverra consequat. Pellentesque nisl leo, condimentum et arcu id, euismod finibus ante. Vivamus eget ornare elit. Aenean ac mollis ex.', 1, 3),
(3, 'Anglais', 'In iaculis, quam ac vestibulum vulputate, elit metus pulvinar nunc, sed ultrices massa enim id tortor. Morbi sollicitudin sodales lacus, lobortis aliquam nibh gravida egestas. Sed sit amet purus tortor. Sed nec quam mauris. Suspendisse pellentesque erat sit amet arcu dignissim semper.', 8, 8),
(4, 'Connaissance de l\'entreprise', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque convallis est et est gravida fermentum. Nullam porttitor ipsum ac dolor porttitor, vitae venenatis eros maximus. Etiam urna nisl, dapibus ut pharetra vel, varius ut tortor. Quisque gravida velit vel lorem finibus, id tincidunt dui rutrum. Quisque commodo risus mattis, mollis enim nec, ultricies nisl.', 8, 9),
(5, 'Developpement Web Mobile', 'Donec laoreet pretium libero, eu eleifend risus ullamcorper ac. Nam ut tempus enim. Pellentesque aliquam nisl nec dui euismod dapibus eget ac quam. Aenean pharetra, neque eget luctus venenatis, urna turpis feugiat neque, in euismod turpis quam a lectus.', 6, 5),
(6, 'Stockage des Données', 'Sed fringilla eu tortor pretium lobortis. Suspendisse sollicitudin lorem a nibh viverra consequat. Pellentesque nisl leo, condimentum et arcu id, euismod finibus ante. Vivamus eget ornare elit. Aenean ac mollis ex.', 5, 6),
(7, 'Génie Logiciel', 'In iaculis, quam ac vestibulum vulputate, elit metus pulvinar nunc, sed ultrices massa enim id tortor. Morbi sollicitudin sodales lacus, lobortis aliquam nibh gravida egestas. Sed sit amet purus tortor. Sed nec quam mauris. Suspendisse pellentesque erat sit amet arcu dignissim semper.', 7, 4),
(8, 'Génie Logiciel', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque convallis est et est gravida fermentum. Nullam porttitor ipsum ac dolor porttitor, vitae venenatis eros maximus. Etiam urna nisl, dapibus ut pharetra vel, varius ut tortor. Quisque gravida velit vel lorem finibus, id tincidunt dui rutrum. Quisque commodo risus mattis, mollis enim nec, ultricies nisl.', 7, 1),
(9, 'Projets Tutoré', 'Donec laoreet pretium libero, eu eleifend risus ullamcorper ac. Nam ut tempus enim. Pellentesque aliquam nisl nec dui euismod dapibus eget ac quam. Aenean pharetra, neque eget luctus venenatis, urna turpis feugiat neque, in euismod turpis quam a lectus.', 9, 0),
(10, 'Algorithmie et Programmation Orientée Objet', 'Sed fringilla eu tortor pretium lobortis. Suspendisse sollicitudin lorem a nibh viverra consequat. Pellentesque nisl leo, condimentum et arcu id, euismod finibus ante. Vivamus eget ornare elit. Aenean ac mollis ex.', 2, 2),
(11, 'Interfaces Graphiques Environnement Java', 'In iaculis, quam ac vestibulum vulputate, elit metus pulvinar nunc, sed ultrices massa enim id tortor. Morbi sollicitudin sodales lacus, lobortis aliquam nibh gravida egestas. Sed sit amet purus tortor. Sed nec quam mauris. Suspendisse pellentesque erat sit amet arcu dignissim semper.', 2, 4),
(12, 'Technologies pour le Web - Reponsive', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque convallis est et est gravida fermentum. Nullam porttitor ipsum ac dolor porttitor, vitae venenatis eros maximus. Etiam urna nisl, dapibus ut pharetra vel, varius ut tortor. Quisque gravida velit vel lorem finibus, id tincidunt dui rutrum. Quisque commodo risus mattis, mollis enim nec, ultricies nisl.', 3, 5),
(13, 'Technologies pour le Web - XML', 'Donec laoreet pretium libero, eu eleifend risus ullamcorper ac. Nam ut tempus enim. Pellentesque aliquam nisl nec dui euismod dapibus eget ac quam. Aenean pharetra, neque eget luctus venenatis, urna turpis feugiat neque, in euismod turpis quam a lectus.', 3, 11),
(14, 'Methodes et Outils de Programmation pour le Web', 'Sed fringilla eu tortor pretium lobortis. Suspendisse sollicitudin lorem a nibh viverra consequat. Pellentesque nisl leo, condimentum et arcu id, euismod finibus ante. Vivamus eget ornare elit. Aenean ac mollis ex.', 4, 12),
(15, 'Genie Logiciel', 'In iaculis, quam ac vestibulum vulputate, elit metus pulvinar nunc, sed ultrices massa enim id tortor. Morbi sollicitudin sodales lacus, lobortis aliquam nibh gravida egestas. Sed sit amet purus tortor. Sed nec quam mauris. Suspendisse pellentesque erat sit amet arcu dignissim semper.', 7, 12),
(16, 'Methodes et Outils de Programmation pour le Web - CMS', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque convallis est et est gravida fermentum. Nullam porttitor ipsum ac dolor porttitor, vitae venenatis eros maximus. Etiam urna nisl, dapibus ut pharetra vel, varius ut tortor. Quisque gravida velit vel lorem finibus, id tincidunt dui rutrum. Quisque commodo risus mattis, mollis enim nec, ultricies nisl.', 4, 10),
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
(7, 'admin', 'bonjour vous avez fini lannée', '2018-01-01'),
(19, 'admin', 'c\'est l\'heure d\'aller manger', '2018-04-04'),
(20, 'admin', 'bonjour vous êtes encore en cours', '2018-04-04'),
(21, 'admin', 'je suis l\'admin écouter moi', '2018-04-04'),
(22, 'admin', 'j’espère avoir une bonne note', '2018-04-04');

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
(1, 'Marinette Savonnet', 'Mauris bibendum mollis euismod. Maecenas lacus dolor, aliquam at erat in, fermentum fringilla justo. Morbi blandit massa et convallis fringilla. Etiam consequat placerat pretium. Aliquam vitae venenatis est. Ut eget odio nibh. Duis semper vitae felis in scelerisque. Maecenas ultrices dui ut feugiat dictum. Nullam maximus ut tortor eu viverra.'),
(2, 'Olivier Bailleux', 'Integer nibh magna, mattis vel dui id, viverra rhoncus augue. Mauris elementum posuere nibh vel scelerisque. Nam a ullamcorper justo. Fusce ultrices justo turpis, ac dapibus nulla hendrerit tristique. Praesent at sapien ex. Sed dignissim vestibulum magna, nec varius turpis ornare lacinia. Suspendisse sollicitudin ex et erat aliquam cursus vitae in neque. Aliquam ac commodo ante. Morbi non elit eget nulla vehicula ornare. Etiam lacinia maximus lacinia.'),
(3, 'Olivier Togni', 'Aenean interdum, ante eget pulvinar sodales, sapien orci faucibus justo, ut egestas erat leo ac elit. Vestibulum pharetra ligula nibh, sed lobortis neque volutpat at. Duis tincidunt tincidunt purus, at blandit lectus volutpat sit amet. Pellentesque vitae sem tristique, interdum purus vitae, luctus felis. Sed vel nisi cursus, facilisis mauris ac, accumsan turpis. In pulvinar ultrices sodales.'),
(4, 'Dominique Micollet', 'Vivamus sollicitudin tempus eros. Aliquam risus lectus, dictum ac dignissim eu, finibus vitae nisl. Sed aliquam mattis est, nec suscipit nibh ullamcorper at. Curabitur at gravida ante, eget pretium lectus. Etiam vehicula sem non lobortis blandit. Aenean cursus ante nec est scelerisque, nec varius ligula fermentum. Sed tristique, turpis et dictum suscipit, tortor nisi tincidunt risus, a vulputate lacus odio id mi. Proin rutrum vestibulum eros at volutpat.'),
(5, 'Ana-Maria Roxin', 'Maecenas in accumsan mi. Vestibulum id leo porttitor, dignissim dui ornare, vehicula elit. Donec et turpis odio. Curabitur tempus ante id lectus rhoncus ornare. Morbi dui tellus, iaculis sed porttitor et, eleifend at ipsum. Pellentesque ut nibh at velit pulvinar suscipit. Vestibulum finibus at leo quis blandit. Sed pharetra, mauris sed aliquam scelerisque, dolor dui accumsan leo, non scelerisque orci mauris quis mauris. Donec viverra est erat.'),
(6, 'Thierry Grison', 'In fringilla fermentum mi, ac cursus ante maximus quis. Donec risus neque, dictum et magna at, varius mattis neque. In ex neque, fermentum sit amet accumsan convallis, dictum non lectus. In non imperdiet tellus, et condimentum orci. Praesent dapibus cursus elementum. Maecenas vitae ipsum imperdiet odio egestas ultricies.'),
(7, 'Sandrine Lanquetin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida tincidunt auctor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer mattis nunc et libero pellentesque auctor. Ut semper finibus nisi, non feugiat nisi. Cras lacinia mi mi, sed gravida erat mattis eget. Integer mattis eu elit vel tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus luctus blandit molestie.'),
(8, 'Nathalie Vassileff', 'Fusce tempor nunc eget suscipit efficitur. Quisque id turpis non eros iaculis fringilla et quis erat. Quisque vitae neque nec tortor cursus varius. Quisque finibus, felis in sodales pretium, nisl lorem blandit diam, ut efficitur ex elit vitae dolor. Phasellus convallis interdum placerat. Cras a nisl a eros condimentum blandit. '),
(0, 'Autonomie', 'Broin tristique risus sed augue condimentum, ut tempus risus vestibulum. Sed dictum vulputate metus. Vestibulum dapibus risus sit amet hendrerit condimentum. Maecenas fringilla mi vitae nulla consequat viverra. Donec iaculis facilisis auctor. Nullam congue ex vulputate ante imperdiet fringilla. Mauris finibus felis non sodales tincidunt. Nam sodales, lorem vel dictum faucibus, nulla est consectetur lectus, eu facilisis odio elit nec mi. Vestibulum bibendum blandit ipsum vitae semper. Cras pretium risus quis ex accumsan convallis. Etiam semper nisi at elit venenatis suscipit.'),
(12, 'Pierre Laforet', 'Duis libero dui, dapibus vulputate sem at, suscipit lobortis dui. Suspendisse vulputate erat ut lectus ullamcorper, at egestas mi placerat. Curabitur eros erat, facilisis quis ornare et, laoreet in lorem. Cras sit amet dignissim nisi.'),
(10, 'Marc Mebtouche', 'ed efficitur nibh tortor, non pharetra tortor posuere quis. Phasellus eget ullamcorper velit, sit amet vestibulum felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id velit blandit, rhoncus nisl id, rutrum ante. Etiam quis urna id nibh pretium iaculis. Suspendisse aliquet tortor vitae justo gravida dapibus.'),
(11, 'Emeline Dorey', 'Nam lorem turpis, mattis quis venenatis sit amet, ornare a arcu. Nunc ut imperdiet justo. Vivamus mollis mi purus, in semper mi accumsan eget. Sed quis ligula orci. Nam sollicitudin risus a orci tincidunt congue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
(9, 'Franck Hendel', 'Integer condimentum vestibulum viverra. Ut eget lacus nec mauris cursus scelerisque. Praesent mattis fermentum sapien, eget posuere odio semper euismod. Praesent id lectus nec sapien tristique rutrum. Aliquam nec eros tempor, aliquam augue a, auctor ante. Vestibulum sit amet ante sit amet arcu accumsan rutrum. In faucibus magna at nibh tempor, vel placerat orci varius. Donec bibendum fermentum nisi. Proin et scelerisque eros, in facilisis elit. Phasellus libero erat, porttitor ac elit at, eleifend pretium tortor.');

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
(1, 'project cars', 'un projet avec pleins de voitures trop geniales');

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
(1, 'UE1', 'Unité d\'enseignement 1, elle regroupe 2 matières :<br><br>\'Systèmes\'<br><br>\'Réseaux\'.'),
(2, 'UE2', 'Unité d\'enseignement 2, elle regroupe 2 matières :<br><br>\"Algorithmie et Programmation Orientée Objet\"<br><br>\"Interfaces Graphiques Environnement Java\"'),
(3, 'UE3', 'Unité d\'enseignement 3, elle regroupe 3 matières, toutes sous le nom de :<br><br>\"Technologies pour le Web\"'),
(4, 'UE4', 'Unité d\'enseignement 4, elle regroupe 2 matières toutes sous le nom de :<br><br>\"Methodes et Outils de Programmation pour le Web\"'),
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
(11, 'admin', 'admin', NULL, 'admin'),
(10, 'etudiant', 'etudiant', NULL, 'etudiant'),
(12, 'visiteur', 'visiteur', NULL, 'visiteur');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
