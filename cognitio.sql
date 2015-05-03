-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Mars 2015 à 00:24
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cognitio`
--

-- --------------------------------------------------------

--
-- Structure de la table `annoncereftheme`
--

CREATE TABLE IF NOT EXISTS `annoncereftheme` (
  `codePostAnnonce` int(11) NOT NULL,
  `codeTheme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `envoimessage`
--

CREATE TABLE IF NOT EXISTS `envoimessage` (
  `codeUtilisateur` int(11) NOT NULL,
  `codeGroupe` int(11) NOT NULL,
  `dateHeure` datetime NOT NULL,
  `texte` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `estparentde`
--

CREATE TABLE IF NOT EXISTS `estparentde` (
  `codeThemeParent` int(11) NOT NULL,
  `codeThemeEnfant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
`codeGroupe` int(11) NOT NULL,
  `nomGroupe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`codeGroupe`, `nomGroupe`) VALUES
(1, 'Gentils'),
(2, 'Méchants');

-- --------------------------------------------------------

--
-- Structure de la table `groupeutilisateur`
--

CREATE TABLE IF NOT EXISTS `groupeutilisateur` (
  `codeGroupe` int(11) NOT NULL,
  `codeUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `groupeutilisateur`
--

INSERT INTO `groupeutilisateur` (`codeGroupe`, `codeUtilisateur`) VALUES
(1, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `niveausecurite`
--

CREATE TABLE IF NOT EXISTS `niveausecurite` (
  `codeNiveauSecurite` int(11) NOT NULL,
  `nomNiveauSecurite` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `niveausecurite`
--

INSERT INTO `niveausecurite` (`codeNiveauSecurite`, `nomNiveauSecurite`) VALUES
(1, 'utilisateur'),
(2, 'modérateur'),
(3, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `postannonce`
--

CREATE TABLE IF NOT EXISTS `postannonce` (
`codePostAnnonce` int(11) NOT NULL,
  `texte` text,
  `codeUtilisateur` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `postannonce`
--

INSERT INTO `postannonce` (`codePostAnnonce`, `texte`, `codeUtilisateur`, `titre`) VALUES
(1, 'Je cherche une femme svp', 1, 'Cherche Femme'),
(2, 'SPAMMMMMMMMMMMMMMMMMMMMMMMM', 2, 'USeless'),
(3, 'SPAMMMMMMMMMMMMMMMMMMMM (numéro 2, pas de plagiat)', 1, 'Useless2'),
(4, 'Nan mais stop les spam sérieux.', 3, 'Yanamarre');

-- --------------------------------------------------------

--
-- Structure de la table `postconnaissance`
--

CREATE TABLE IF NOT EXISTS `postconnaissance` (
`codePostConnaissance` int(11) NOT NULL,
  `texte` text,
  `accepte` tinyint(1) DEFAULT NULL,
  `codeUtilisateur` int(11) NOT NULL,
  `codeTheme` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `postconnaissance`
--

INSERT INTO `postconnaissance` (`codePostConnaissance`, `texte`, `accepte`, `codeUtilisateur`, `codeTheme`, `titre`) VALUES
(1, 'Les pommes c''est vraiment bon, tralala...', 1, 1, 1, 'Pommes'),
(2, 'Nan mais vraiment, c''est super bon...', 1, 1, 2, 'Confirmation'),
(3, 'Hahaha hoho hihi\r\nJ''ai fais pipi, ca rime\r\nC''est donc de la litairraturre', 1, 2, 2, 'Poesie'),
(4, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique sapien non neque porttitor suscipit. Proin molestie fringilla est vel faucibus. Integer ac accumsan neque, ultrices dignissim lectus. Aenean tempus nibh fermentum malesuada tincidunt. Aenean eget dui ut mi feugiat fermentum. Quisque gravida luctus enim, venenatis consectetur neque eleifend nec. Praesent congue elit dictum fringilla rutrum. Maecenas ullamcorper neque feugiat, tempus lorem sit amet, aliquet metus. Donec sit amet cursus augue. Nullam sed nibh quis odio porttitor imperdiet. Cras maximus vitae risus vitae fermentum.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis ut augue efficitur, lacinia erat vel, congue diam. Fusce nec urna vel erat ultricies tincidunt a eu elit. Duis sagittis risus ipsum, non imperdiet leo elementum cursus. Nulla eros nunc, ornare sed pretium et, consectetur sed arcu. Pellentesque a elementum sapien, et vulputate tellus. Suspendisse maximus pharetra elit dictum fringilla. Duis id lorem scelerisque, posuere lorem vitae, pulvinar turpis. Suspendisse elementum tincidunt bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris finibus faucibus libero, vitae elementum quam lobortis imperdiet.\r\n\r\nDuis id vehicula orci, ut auctor arcu. Cras condimentum nec metus fermentum auctor. Suspendisse et lorem lacinia, ultricies dolor a, sodales dui. Mauris suscipit dui pharetra, condimentum libero id, pharetra quam. Nam nec interdum sapien. Integer quis metus et lacus ultricies faucibus eu et augue. Nunc nec erat vitae metus luctus accumsan id ut mi. Curabitur feugiat aliquam mauris, eget imperdiet massa egestas vel. Curabitur auctor fermentum vestibulum. Nunc ullamcorper, enim id dapibus ornare, neque tortor ornare ante, quis gravida ligula risus in magna. Aenean auctor, metus consectetur malesuada mollis, odio nulla iaculis mi, vitae finibus enim massa ut felis.\r\n\r\nQuisque non ligula tincidunt, viverra quam nec, ornare odio. Curabitur ultricies efficitur diam, sit amet ultricies ante. Praesent finibus lectus a erat posuere dignissim eget eget diam. Sed consectetur lacus vel justo pretium mattis. Proin ullamcorper vulputate elit, vel feugiat nisi elementum a. Curabitur pretium dui ac eros posuere fermentum. Quisque tempor vel dui dignissim tempus. Nam tempor vulputate nunc tempus faucibus. Etiam sit amet sapien nisl. Vestibulum ut tincidunt urna. Suspendisse consectetur magna nec turpis pretium, eu eleifend dui vulputate. Aenean eget enim metus. Pellentesque vitae lacinia est.\r\n\r\nPellentesque eget viverra diam. Quisque venenatis eu erat non aliquet. Integer convallis felis ut tellus elementum, vel pharetra ante iaculis. Sed venenatis nibh luctus, laoreet diam a, accumsan quam. Nunc in arcu eget ante lacinia fermentum quis ac enim. Sed vestibulum fringilla nulla, et cursus felis aliquam eu. Vestibulum at placerat tortor, sed rutrum ipsum. Vivamus non quam magna. Curabitur ipsum diam, tempus ut ante vel, lobortis iaculis ligula. Morbi fringilla dolor non quam lobortis, sit amet pretium ante molestie. Nunc quam eros, fermentum at ante ut, sodales auctor velit. ', 1, 11, 2, 'Premier article serieux'),
(13, 'coucou', 1, 1, 1, 'test'),
(14, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat, dui quis dictum condimentum, dolor mauris mollis risus, porttitor sodales mi nisl vitae libero. Maecenas mattis, mi eu volutpat porttitor, mauris massa pharetra mi, vel ultricies tortor nisi et metus. Mauris tempor laoreet sodales. Quisque fringilla rutrum risus, non ullamcorper risus consequat ac. Nullam a eros mi. In id lectus sit amet augue sagittis venenatis ac a lectus. Proin et turpis a ipsum pellentesque sagittis sit amet in ligula. Integer risus velit, aliquam in hendrerit eu, sodales ut nunc. Etiam hendrerit purus at augue sagittis placerat.\r\n\r\nNullam consectetur a nisl vitae congue. Maecenas efficitur feugiat ligula, eu consectetur nisl. Cras nec vestibulum nunc. Cras elit lacus, pellentesque a lectus at, scelerisque fermentum diam. Quisque id aliquet libero. Donec consectetur quam in neque porta hendrerit sit amet vel neque. Ut eleifend bibendum mauris et elementum. Curabitur id tortor quis diam sagittis blandit. Proin sit amet rutrum neque. Donec accumsan bibendum ligula eget venenatis. Donec nec dolor id justo tempor interdum. Fusce vel nibh vitae dui dapibus convallis nec at justo. Fusce egestas ac massa non varius. Phasellus lacinia libero vel mauris dignissim, in aliquet augue commodo. ', 1, 14, 2, 'Les serpents'),
(26, 'dsqdqsdq<br>', 0, 11, 1, 'dsq'),
(27, 'azazz', 0, 11, 1, 'zz'),
(28, 'Et ouais, je fais des tests de ouf batard', 0, 11, 1, 'Test de ouf geudin'),
(29, 'OUI', 0, 13, 1, 'Bijour'),
(30, 'fgnkmeklteahiletgahibaegihbÃ¹aegmikbamiggmnmgamnkbkmag', 0, 15, 1, 'hjdskqdqs');

-- --------------------------------------------------------

--
-- Structure de la table `revocation`
--

CREATE TABLE IF NOT EXISTS `revocation` (
`codeUtilisateur` int(11) NOT NULL,
  `dateFinRevocation` datetime DEFAULT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `revocation`
--

INSERT INTO `revocation` (`codeUtilisateur`, `dateFinRevocation`, `libelle`) VALUES
(1, '2100-06-17 00:00:00', 'Banni pour spam jusqu''en 2100');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
`codeTheme` int(11) NOT NULL,
  `libelleTheme` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accepté` tinyint(1) DEFAULT NULL,
  `codeUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`codeTheme`, `libelleTheme`, `accepté`, `codeUtilisateur`) VALUES
(1, 'Litterature', 1, 2),
(2, 'Informatique', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`codeUtilisateur` int(11) NOT NULL,
  `pseudo` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `login` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `codeNiveauSecurite` int(11) NOT NULL,
  `avatar` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`codeUtilisateur`, `pseudo`, `login`, `password`, `mail`, `codeNiveauSecurite`, `avatar`) VALUES
(1, 'Anatole', 'Anatole', '123', NULL, 1, 'https://s-media-cache-ak0.pinimg.com/originals/b2/6d/7b/b26d7b7f380a5e6c7ad66c1eea634055.jpg'),
(2, 'Anselm', 'Anselm', '123', NULL, 2, 'https://s-media-cache-ak0.pinimg.com/736x/f4/56/6d/f4566dfded2bb9abeacbe42feb8a7c2d.jpg'),
(3, 'Robert', 'Robert', '123', NULL, 1, 'http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif'),
(11, 'caca', 'caca', 'd2104a400c7f629a197f33bb33fe80c0', 'caca', 1, 'http://www.canailleblog.com/photos/blogs/sitemanga-969971.png'),
(12, 'coucou', 'coucou', '721a9b52bfceacc503c056e3b9b93cfa', 'coucou', 1, 'http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif'),
(13, 'yassin', 'yassin', '1f41be88a50af4c6eae8f09c20004843', 'yassin', 1, 'http://vignette2.wikia.nocookie.net/desencyclopedie/images/3/32/Gazelle2.png/revision/latest?cb=20100824162058'),
(14, 'Pomme', 'pomme', 'pomme', 'pomme', 3, 'http://www.septeuill78.fr/wp-content/uploads/2012/08/serpent_bite.jpg'),
(15, 'bonjour', 'bonjour', 'f02368945726d5fc2a14eb576f7276c0', 'bonjour', 1, 'http://image.noelshack.com/fichiers/2015/13/1427481769-dot100.gif');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annoncereftheme`
--
ALTER TABLE `annoncereftheme`
 ADD PRIMARY KEY (`codePostAnnonce`,`codeTheme`);

--
-- Index pour la table `envoimessage`
--
ALTER TABLE `envoimessage`
 ADD PRIMARY KEY (`codeUtilisateur`,`codeGroupe`,`dateHeure`), ADD KEY `fk_destinataire` (`codeGroupe`);

--
-- Index pour la table `estparentde`
--
ALTER TABLE `estparentde`
 ADD PRIMARY KEY (`codeThemeParent`,`codeThemeEnfant`), ADD KEY `fk_enfant` (`codeThemeEnfant`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
 ADD PRIMARY KEY (`codeGroupe`);

--
-- Index pour la table `groupeutilisateur`
--
ALTER TABLE `groupeutilisateur`
 ADD PRIMARY KEY (`codeUtilisateur`,`codeGroupe`), ADD KEY `fk_groupeutilisateur` (`codeGroupe`);

--
-- Index pour la table `niveausecurite`
--
ALTER TABLE `niveausecurite`
 ADD PRIMARY KEY (`codeNiveauSecurite`);

--
-- Index pour la table `postannonce`
--
ALTER TABLE `postannonce`
 ADD PRIMARY KEY (`codePostAnnonce`,`codeUtilisateur`), ADD KEY `fk_createurAnnonce` (`codeUtilisateur`);

--
-- Index pour la table `postconnaissance`
--
ALTER TABLE `postconnaissance`
 ADD PRIMARY KEY (`codePostConnaissance`,`codeTheme`,`codeUtilisateur`), ADD KEY `fk_createurConnaissance` (`codeUtilisateur`), ADD KEY `fk_postConnaissanceTheme` (`codeTheme`);

--
-- Index pour la table `revocation`
--
ALTER TABLE `revocation`
 ADD PRIMARY KEY (`codeUtilisateur`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
 ADD PRIMARY KEY (`codeTheme`,`codeUtilisateur`), ADD KEY `fk_moderateur` (`codeUtilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`codeUtilisateur`), ADD KEY `fk_utilisateursecurite` (`codeNiveauSecurite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
MODIFY `codeGroupe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `postannonce`
--
ALTER TABLE `postannonce`
MODIFY `codePostAnnonce` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `postconnaissance`
--
ALTER TABLE `postconnaissance`
MODIFY `codePostConnaissance` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `revocation`
--
ALTER TABLE `revocation`
MODIFY `codeUtilisateur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
MODIFY `codeTheme` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `codeUtilisateur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annoncereftheme`
--
ALTER TABLE `annoncereftheme`
ADD CONSTRAINT `fk_themePostAnnonce` FOREIGN KEY (`codePostAnnonce`) REFERENCES `postannonce` (`codePostAnnonce`);

--
-- Contraintes pour la table `envoimessage`
--
ALTER TABLE `envoimessage`
ADD CONSTRAINT `fk_destinataire` FOREIGN KEY (`codeGroupe`) REFERENCES `groupe` (`codeGroupe`),
ADD CONSTRAINT `fk_expediteur` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`);

--
-- Contraintes pour la table `estparentde`
--
ALTER TABLE `estparentde`
ADD CONSTRAINT `fk_enfant` FOREIGN KEY (`codeThemeEnfant`) REFERENCES `theme` (`codeTheme`),
ADD CONSTRAINT `fk_parent` FOREIGN KEY (`codeThemeParent`) REFERENCES `theme` (`codeTheme`);

--
-- Contraintes pour la table `groupeutilisateur`
--
ALTER TABLE `groupeutilisateur`
ADD CONSTRAINT `fk_groupeutilisateur` FOREIGN KEY (`codeGroupe`) REFERENCES `groupe` (`codeGroupe`),
ADD CONSTRAINT `fk_utilisateurgroupe` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`);

--
-- Contraintes pour la table `postannonce`
--
ALTER TABLE `postannonce`
ADD CONSTRAINT `fk_createurAnnonce` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`);

--
-- Contraintes pour la table `postconnaissance`
--
ALTER TABLE `postconnaissance`
ADD CONSTRAINT `fk_createurConnaissance` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`),
ADD CONSTRAINT `fk_postConnaissanceTheme` FOREIGN KEY (`codeTheme`) REFERENCES `theme` (`codeTheme`);

--
-- Contraintes pour la table `revocation`
--
ALTER TABLE `revocation`
ADD CONSTRAINT `fk_revocationUtilisateur` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`);

--
-- Contraintes pour la table `theme`
--
ALTER TABLE `theme`
ADD CONSTRAINT `fk_moderateur` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`codeUtilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
ADD CONSTRAINT `fk_utilisateursecurite` FOREIGN KEY (`codeNiveauSecurite`) REFERENCES `niveausecurite` (`codeNiveauSecurite`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
