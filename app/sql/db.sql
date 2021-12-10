-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 10 déc. 2021 à 15:14
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

CREATE DATABASE IF NOT EXISTS db;
USE db;
-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` varchar(400) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `datetime`) VALUES
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
  `currentDate` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `currentDate`, `image`) VALUES
(2, 2, 'Bonjour c&#39;est le test', 'c&#39;est le test ouais !', '2021-12-10 14:47:02', '887a993dd61111a68f05381679e88b3d.jpg'),
(3, 2, 'Game Awards : triomphe de « It Takes Two » et « Deathloop », nouveau jeu', 'Cette soirée animée par le Canadien Geoff Keighley, ex-journaliste devenu Monsieur Loyal de l’industrie du jeu vidéo, a aussi honoré un studio français puisque Arkane Lyon s’est imposé dans deux catégories phares avec Deathloop : le prix de la meilleure réalisation est revenu au réalisateur du jeu, le Français Dinga Bakaba, accompagné de l’Américaine Dana Nightingale, tandis que la direction artistique de Sébastien Mitton et Michel Trémsdfsdouiller a été distinguée pour l’univers foisonnant de ce jeu de tir qui se déroule dans des années 1960 dystopiques.', '2021-12-10 14:55:14', 'LBHC_110.jpg'),
(4, 2, 'Le post de test', 'dqfdsfsdwf', '2021-12-10 15:03:47', 'LBHC_106.jpg');

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
(1, 'admin', 'admin', 'admin@admin.com', 'admin89', 1),
(2, 'test', 'test', 'test@test.com', 'test1234', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
