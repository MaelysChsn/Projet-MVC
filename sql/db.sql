-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 09 déc. 2021 à 22:50
-- Version du serveur : 10.6.5-MariaDB-1:10.6.5+maria~focal
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `datetime`) VALUES
(1, 1, 1, 'bonjour c\'est le commentaire ', '2021-12-08 11:06:24'),
(2, 2, 1, 'hello c\'est un autre commentaires', '2021-12-08 11:06:24');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `currentDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `currentDate`) VALUES
(1, 1, 'Regulation is messy, takes time, and has unintended consequences', 'Goodness much incapably following loosely strategically bald insincere gosh casual because discarded well far exited apologetic far rethought vehement much especially however and close reasonably shot impulsive dear armadillo urgently crud much as some warthog starkly yet instead chuckled the far so echidna hopeful on disbanded much allegedly far yikes far much one whispered this that naughty yikes like dear tortoise while stank lethargic some along far against far the hey fussily strategically foresaw yet dear rattlesnake ragingly mocking some as some possessively slept guinea unselfish preparatory knowing and oversold before trout aside wound remarkably cringed this bald much radiant.Disagreed prior strewed bluebird one following more effortless gregariously jeez reran since experimentally muttered', '2021-12-06 21:27:43'),
(5, 1, 'Mondial de handball : les Bleues peuvent toujours compter sur du sang neuf dans leurs rangs', 'Du sang neuf chez Bleues. Encore et toujours. Quel que soit le contexte – c’est l’une de ses habitudes – le sélectionneur de l’équipe de France féminine de handball, Olivier Krumbholz, n’hésite pas à lancer de jeunes joueuses dans le grand bain. C’est à nouveau le cas à l’occasion du Mondial qui a lieu actuellement en Espagne.\r\n\r\nA respectivement 25 et 22 ans, Alicia Toublanc et Lucie Granier vivent ainsi leur premier grand rendez-vous international. Sans complexe, les deux ailières de poche (1,68 m et 1,67 m) réalisent un début de compétition prometteur, apportant de la fraîcheur aux Bleues dans un secteur de jeu où celles-ci manquaient quelque peu d’impact.', '2021-12-09 15:42:15'),
(6, 1, 'WESHHHHHH', 'PATRIMOINE - Les experts ont émis deux réserves sur les projets présentés par le diocèse concernant les bancs et la place des statues.\r\n\r\nAprès trois heures et demie de discussions nourries, la Commission nationale de l&#39;architecture du Patrimoine a validé, avec des réserves, le programme d&#39;aménagement intérieur de la cathédrale de Paris. «Nous avons affirmé des grands principes, sans clore le dossier », explique le sénateur Albéric de Montgolfier, son président, qui prévoit une nouvelle réunion, une fois le projet du diocèse affiné.', '2021-12-09 15:44:00'),
(9, 3, 'dqf;jvskwbfkczbsdk', 'qdw,fbksdbwflbzesdljfbdazqdsceqsfdczeqsdfqczeqsdx``\r\n\r\nqsfdc\r\nsd\r\nwxx\r\nfcsd\r\nwxd\r\nceqs\r\ndwx\r\nd', '2021-12-09 22:14:51');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `is_admin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 1),
(2, 'test', 'test', 'test@test.com', 'test', 0),
(4, 'gravier', 'chassin', 'gravier@gmail.com', 'gravier', 1),
(7, 'abc', 'abc', 'abc@gmail.com', 'abcdabcd', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
