-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 30 juin 2023 à 12:32
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `asseca`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `id` int NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naissance` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NumRue` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `NomRue` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Ville` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fixe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cotisation` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id`, `nom`, `prenom`, `naissance`, `NumRue`, `NomRue`, `Ville`, `tel`, `fixe`, `mail`, `cotisation`) VALUES
(1, 'Balcerowiak', 'Antoine', '7/8/1909', '10', 'rue', 'combs la ville', '07854554', '0123456789', 'mail@mail.com', 'non'),
(2, 'Balcerowiak', 'Antoine', '7/8/1909', '25', 'rue', 'lieusaint', '06547810', '0927822', 'mail@mail.com', 'non'),
(3, 'balce', 'antoine', '19/12/1918', '23', 'rue', 'moissy', '06045001', '092214620', 'tatat@popopo.fr', 'non');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
