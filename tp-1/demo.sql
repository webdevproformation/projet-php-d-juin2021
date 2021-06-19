-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 juin 2021 à 19:07
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(120) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`) VALUES
(2, 'Modification du titre', 'Mauris non tincidunt libero. Vestibulum justo elit, blandit ac nisl nec, mollis convallis lorem. Integer a nunc velit. Suspendisse malesuada tellus risus, nec elementum nibh scelerisque a. In imperdiet, elit porta semper tincidunt, nunc magna finibus quam, et commodo nisl nunc sed diam. Phasellus purus nisi, finibus ut mattis at, eleifend ut magna. Etiam interdum fermentum ligula nec pharetra. Ut porta efficitur quam, eget pellentesque nisl convallis id. Maecenas sed elit at urna scelerisque dapibus ac tincidunt felis. Mauris vestibulum ac enim sed convallis. Donec dolor dolor, commodo vel rhoncus eget, congue interdum felis. Suspendisse potenti. '),
(4, 'Article 4', 'Nulla pellentesque ac ante at egestas. Sed a nibh eu magna lobortis rhoncus. Proin nunc lorem, pharetra vel semper in, tempus sit amet ipsum. In pellentesque nibh ac neque blandit eleifend. Nunc volutpat gravida sem eu mollis. Proin sed sapien non metus pellentesque gravida. In congue, tellus ac eleifend mattis, purus lectus luctus turpis, sit amet ultrices metus sem vitae erat. Aenean dictum congue ipsum eget fringilla. Etiam gravida tortor eget congue dapibus. Fusce bibendum nisl risus, eu fringilla risus sagittis eget. Nulla vel vehicula nulla. Ut a aliquam nisi. Phasellus a sem porta sem accumsan ullamcorper pellentesque sit amet lorem. Duis eu sem lacinia felis lobortis mollis. '),
(5, 'nouvel article ', 'créé depuis le formulaire\r\navec un saut de ligne'),
(9, 'Modification du titre', 'Modification du contenu\r\nde l\'article'),
(10, 'je suis une attaque XSS', '<script>alert(\"vous avez un virus !!\")</script>'),
(11, 'script pour écouter ce que vous écrivez', '<script>document.addEventListener(\"keydown\", function(e){\r\n    console.log(e.key)\r\n})</script>');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(2, 'utilisateur1', '9cf95dacd226dcf43da376cdb6cbba7035218921');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
