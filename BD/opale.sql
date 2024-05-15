-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 avr. 2024 à 10:34
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `opale`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `numachat` int(11) NOT NULL,
  `dateachat` date DEFAULT NULL,
  `id_panier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `mail_clt` varchar(50) NOT NULL,
  `passeword` varchar(50) NOT NULL,
  `nom_clt` varchar(50) NOT NULL,
  `prenom_clt` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `tel_clt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`mail_clt`, `passeword`, `nom_clt`, `prenom_clt`, `sexe`, `tel_clt`) VALUES
('Rabahtoubouache@gmail.com', '1234', 'TOUBOUACHE', 'Rabah', '', '0752045621');

-- --------------------------------------------------------

--
-- Structure de la table `collection`
--

CREATE TABLE `collection` (
  `id_collection` int(11) NOT NULL,
  `nom_collection` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `collection`
--

INSERT INTO `collection` (`id_collection`, `nom_collection`) VALUES
(1, 'Cameleon'),
(2, 'piere noir'),
(3, 'green'),
(4, 'lettre_damour'),
(5, 'collier'),
(6, 'anneaux'),
(7, 'boucles'),
(8, 'bracelets');

-- --------------------------------------------------------

--
-- Structure de la table `favori`
--

CREATE TABLE `favori` (
  `id_produit` int(11) NOT NULL,
  `mail_clt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `date_selection` date DEFAULT NULL,
  `mail_clt` varchar(50) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) DEFAULT NULL,
  `prix_produit` smallint(6) NOT NULL,
  `discription` varchar(375) DEFAULT NULL,
  `id_collection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `prix_produit`, `discription`, `id_collection`) VALUES
(1, 'cameleon_collier ', 250, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 1),
(2, 'cameleon_bague', 220, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 1),
(3, 'cameleon_bracelet', 200, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 1),
(4, 'cameleon_boucle', 200, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 1),
(5, 'piere_collier', 350, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 2),
(6, 'piere_bague', 330, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 2),
(7, 'piere_brecelet', 310, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 2),
(8, 'piere_boucle', 220, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 2),
(9, 'green_collier', 300, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 3),
(10, 'green_bague', 240, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 3),
(11, 'green_bracelet', 220, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 3),
(12, 'green_boucle', 200, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 3),
(13, 'lettre_collier', 170, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 4),
(14, 'lettre_bague', 160, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 4),
(15, 'lettre_bracelet', 140, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 4),
(16, 'green_boucle', 120, 'Celui que vous ne saviez pas que vous cherchiez. Ce collier a été créé dans un souci de polyvalence, avec un mélange de deux chaînes lui donnant une touche contemporaine.', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`numachat`),
  ADD UNIQUE KEY `id_panier` (`id_panier`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`mail_clt`);

--
-- Index pour la table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id_collection`);

--
-- Index pour la table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`id_produit`,`mail_clt`),
  ADD KEY `mail_clt` (`mail_clt`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `mail_clt` (`mail_clt`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_collection` (`id_collection`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `numachat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `collection`
--
ALTER TABLE `collection`
  MODIFY `id_collection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `favori`
--
ALTER TABLE `favori`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_panier`) REFERENCES `panier` (`id_panier`);

--
-- Contraintes pour la table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`),
  ADD CONSTRAINT `favori_ibfk_2` FOREIGN KEY (`mail_clt`) REFERENCES `client` (`mail_clt`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`mail_clt`) REFERENCES `client` (`mail_clt`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_collection`) REFERENCES `collection` (`id_collection`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
