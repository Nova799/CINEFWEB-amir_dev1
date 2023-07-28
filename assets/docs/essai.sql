-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 20 juil. 2023 à 11:14
-- Version du serveur :  8.0.33-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `essai`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` bigint UNSIGNED NOT NULL,
  `libelle` varchar(1024) NOT NULL,
  `code` varchar(24) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `libelle`, `code`, `descr`) VALUES
(1, 'Formation 1', 'f1', 'Description de la formation 1'),
(2, 'Formation 2', 'f1', 'Description de la formation 1');

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `nom`, `prenom`, `email`, `phone`) VALUES
(1, 'essai', 'essai', '', '12345678'),
(2, 'essai', 'essai', 'user@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `nom_table`
--

CREATE TABLE `nom_table` (
  `id` int NOT NULL,
  `formation` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `entite` varchar(255) NOT NULL,
  `missions` text NOT NULL,
  `formation_precedente` enum('oui','non') NOT NULL,
  `formation_details` varchar(255) DEFAULT NULL,
  `demande_personnelle` enum('oui','non') NOT NULL,
  `difficultes` text,
  `conseil` varchar(255) DEFAULT NULL,
  `objectifs` enum('oui','non') NOT NULL,
  `attentes` varchar(255) DEFAULT NULL,
  `autres_priorites` text,
  `objectif1` varchar(255) NOT NULL,
  `objectif2` varchar(255) NOT NULL,
  `objectif3` varchar(255) NOT NULL,
  `cas_concrets` enum('oui','non') NOT NULL,
  `remarques` text,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `nom_table`
--

INSERT INTO `nom_table` (`id`, `formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectif1`, `objectif2`, `objectif3`, `cas_concrets`, `remarques`, `telephone`, `email`) VALUES
(4, 'nom', 'nklmlml', 'cedart', ',,,,,,ccccccc', 'oui', 'vvvvvvv', 'oui', 'Bonjour', 'vvvvvv', 'oui', '', 'vvvvvvvv', 'vvvvvvvv', 'vvvvvvvvvv', 'vvvvvvvvvvv', 'oui', 'vvvvvvvv', 'vvvvvvv', 'evaketcotonou@gmail.com'),
(5, 'nom', ' ABADAGAN', 'cedart', 'n,,', 'oui', ',,;,;;;', 'oui', 'bbbb', 'bbnn,', 'oui', '', 'nkk;', 'bnn,n,', 'nn,', 'jkmll', 'oui', 'njkjkk', '+22996428718', 'cadjahoungbo@gmail.com'),
(6, 'nom', 'nklmlml', 'cedart', 'hffhgfghf', 'oui', 'vvvvvvv', 'oui', 'hvhvvb', 'vvvvvv', 'oui', '', 'htfhgfg', 'ghgfhgf', 'hfhfgfff', 'fghgfgf', 'oui', 'hgfhgfhgfhf', 'ggfhfgf', 'c1@gmail.com'),
(7, 'jkkll', 'n,;;', 'n,kll', 'N?...', 'oui', 'vvvvvvv', 'oui', 'NJ?VKLMLKL', 'N?KL', 'oui', '', '?N.?.?/..', 'PPOP', 'HKL', 'HKKK', 'oui', 'NN?.', 'N?..', 'evaketcotonou@gmail.com'),
(8, 'Booster la performance', ' ABADAGAN CÃ©dric', 'Informatique', 'DÃ©veloppement des App', 'oui', 'Gestion de Projet', 'oui', 'Pouvoir dÃ©ployer un projet', ' bn', 'oui', '', 'Des conseils informatiques', 'Maitriser les bases de la programmation', 'Maitriser le coding', 'Etre en conformitÃ© avec le cahier de charge', 'oui', 'Aucun', '+22996428718', 'cadjahoungbo@gmail.com'),
(9, 'b', 'NKKL./', 'KK.L/', 'NJKLK./', 'oui', 'Bonjour', 'oui', 'nklmlml', 'n,;', 'oui', '', 'Ok', 'Ok', 'ok', 'ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(10, 'b', 'NKKL./', 'KK.L/', 'NJKLK./', 'oui', 'Bonjour', 'oui', 'nklmlml', 'n,;', 'oui', '', 'Ok', 'Ok', 'ok', 'ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(11, 'Formation', 'hjlmpmkjnkn', 'hnklkmlkmlkml', ' ,;,k,ln;;;;;;;;;;;;', 'oui', 'CXCVBNNNNNNNN?', 'oui', 'VHBBHN?..', 'H N?N../', 'oui', '', 'KJKJLKLMLMLMLMLMLMLML?KNL?./', 'KJKJLKMLLMLMLML', 'KLKLKLKLLLMKL', 'KLKLKLKLKLKLKL', 'oui', 'BJKKJKLMLMLMLML', 'HJNK.MLMLMLM', 'HJ@gmail.com'),
(12, 'Formation', 'hjlmpmkjnkn', 'hnklkmlkmlkml', ' ,;,k,ln;;;;;;;;;;;;', 'oui', 'CXCVBNNNNNNNN?', 'oui', 'VHBBHN?..', 'H N?N../', 'oui', '', 'KJKJLKLMLMLMLMLMLMLML?KNL?./', 'KJKJLKMLLMLMLML', 'KLKLKLKLLLMKL', 'KLKLKLKLKLKLKL', 'oui', 'BJKKJKLMLMLMLML', 'HJNK.MLMLMLM', 'HJ@gmail.com'),
(13, 'gfhcgf', 'hgcfhcgfhcgc', 'fhgfhgfhcg', 'jhjhkjhk', 'oui', 'kjnjnkjn', 'oui', 'kjnknjnkj', 'nknjknkjn', 'oui', '', 'kjhjhjhbjhb', 'jhbjhbjhbj', 'bhjhbjbhjhbjbh', 'bjhbjhbhjb', 'oui', 'hjbjhbjb', 'jhbjhhjbjb', 'hhbjhb@hb.com'),
(14, 'gfhcgf', 'hgcfhcgfhcgc', 'fhgfhgfhcg', 'jhjhkjhk', 'oui', 'kjnjnkjn', 'oui', 'kjnknjnkj', 'nknjknkjn', 'oui', '', 'kjhjhjhbjhb', 'jhbjhbjhbj', 'bhjhbjbhjhbjbh', 'bjhbjhbhjb', 'oui', 'hjbjhbjb', 'jhbjhhjbjb', 'hhbjhb@hb.com'),
(15, 'gfhcgf', 'hgcfhcgfhcgc', 'fhgfhgfhcg', 'jhjhkjhk', 'oui', 'kjnjnkjn', 'oui', 'kjnknjnkj', 'nknjknkjn', 'oui', '', 'kjhjhjhbjhb', 'jhbjhbjhbj', 'bhjhbjbhjhbjbh', 'bjhbjhbhjb', 'oui', 'hjbjhbjb', 'jhbjhhjbjb', 'hhbjhb@hb.com'),
(16, 'gfhcgf', 'hgcfhcgfhcgc', 'fhgfhgfhcg', 'jhjhkjhk', 'oui', 'kjnjnkjn', 'oui', 'kjnknjnkj', 'nknjknkjn', 'oui', '', 'kjhjhjhbjhb', 'jhbjhbjhbj', 'bhjhbjbhjhbjbh', 'bjhbjhbhjb', 'oui', 'hjbjhbjb', 'jhbjhhjbjb', 'hhbjhb@hb.com'),
(17, 'n,vfl::m!v', ';k;l:mlmmÃ¹', '^jk^mp^Ã¹Ã¹', 'Administrateur des SI', 'oui', 'Bonjour', 'oui', 'Aucun', 'SupÃ©rieur', 'oui', '', 'Beaucoup', 'Ok', 'Ok', 'Ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(18, 'n,vfl::m!v', ';k;l:mlmmÃ¹', '^jk^mp^Ã¹Ã¹', 'Administrateur des SI', 'oui', 'Bonjour', 'oui', 'Aucun', 'SupÃ©rieur', 'oui', '', 'Beaucoup', 'Ok', 'Ok', 'Ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(19, 'n,vfl::m!v', ';k;l:mlmmÃ¹', '^jk^mp^Ã¹Ã¹', 'Administrateur des SI', 'oui', 'Bonjour', 'oui', 'Aucun', 'SupÃ©rieur', 'oui', '', 'Beaucoup', 'Ok', 'Ok', 'Ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(20, 'n,vfl::m!v', ';k;l:mlmmÃ¹', '^jk^mp^Ã¹Ã¹', 'Administrateur des SI', 'oui', 'Bonjour', 'oui', 'Aucun', 'SupÃ©rieur', 'oui', '', 'Beaucoup', 'Ok', 'Ok', 'Ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(21, 'n,vfl::m!v', ';k;l:mlmmÃ¹', '^jk^mp^Ã¹Ã¹', 'Administrateur des SI', 'oui', 'Bonjour', 'oui', 'Aucun', 'SupÃ©rieur', 'oui', '', 'Beaucoup', 'Ok', 'Ok', 'Ok', 'oui', 'OK', '96428718', 'c@gmail.com'),
(22, 'Elementor', 'ADJAHOUNGBO CÃ©dric', 'IT', 'Gestion de site web', 'oui', 'Il y a 3 ans ', 'oui', 'Pouvoir faire les mises Ã  jour automatique', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'PHP AvancÃ©', 'Plateforme', 'Web', 'Mobiles', 'oui', 'Aucun', '96428718', 'c@gmail.com'),
(23, 'Elementor', 'ADJAHOUNGBO CÃ©dric', 'IT', 'Gestion de site web', 'oui', 'Il y a 3 ans ', 'oui', 'Pouvoir faire les mises Ã  jour automatique', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'PHP AvancÃ©', 'Plateforme', 'Web', 'Mobiles', 'oui', 'Aucun', '96428718', 'c@gmail.com'),
(28, 'Elementor', 'Bien Cedric', 'KK.L/', 'Misiison  23E', 'oui', 'Il y a 3 ans ', 'oui', 'CEDRIC', 'BIEN', 'oui', '', 'PRIORITES 34', 'NKMPLOMPMLMLL', 'KLKLMLMLMLML', 'KMLMLML%MLML', 'oui', 'REMARQUES1', '96428718', 'c@gmail.com'),
(29, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(30, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(31, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(32, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(33, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(34, 'Formation en IT', 'CÃ©dric ADJAHOUNGBO', 'DÃ©partement Informatique', 'DÃ©veloppement', 'oui', 'Il y a 1 an', 'oui', 'IntÃ©gration des modules', 'SupÃ©rieur hiÃ©rarchique', 'oui', '', 'Concevoir des Apps', 'IntÃ©gration des modules', 'Developpement des applications mobiles', 'DÃ©veloppement des Applications web', 'oui', 'Aucun', '+22996428718', 'c@gmail.com'),
(35, 'Booster boossss', 'bgkjlompfkjbjkilodvsmbkjzkÃ¹m', 'n,kl:,lmm;,', 'hjkmlÃ¹mlklkjj ', 'oui', 'jkjklmlmmÃ¹m', 'oui', 'bnn,;kmlfobkj;, poj,m,ll,nk  pinohkl,mpl lkio k;: kl;, klll,', 'vujbhklgf iojlkgulokgjklkgjnk oihnklkgnpomlk bkilojgnlpomlglogk', 'oui', '', 'gvjbhkn, bknnlknlk jhn, ;bjjkbkjlbkl   bolkjkkjbkjkjkj', 'gvbhjklknbkj,', ' kjklkkmll bkk ', 'bkjkjlklk ', 'oui', 'ghbhjknlb k', '+22996428718', 'hhbjhb@hb.com'),
(36, 'Booster boossss', 'bgkjlompfkjbjkilodvsmbkjzkÃ¹m', 'n,kl:,lmm;,', 'hjkmlÃ¹mlklkjj ', 'oui', 'jkjklmlmmÃ¹m', 'oui', 'bnn,;kmlfobkj;, poj,m,ll,nk  pinohkl,mpl lkio k;: kl;, klll,', 'vujbhklgf iojlkgulokgjklkgjnk oihnklkgnpomlk bkilojgnlpomlglogk', 'oui', '', 'gvjbhkn, bknnlknlk jhn, ;bjjkbkjlbkl   bolkjkkjbkjkjkj', 'gvbhjklknbkj,', ' kjklkkmll bkk ', 'bkjkjlklk ', 'oui', 'ghbhjknlb k', '+22996428718', 'hhbjhb@hb.com'),
(37, 'Booster boossssÃ§Ã§Ã§', 'bgkjlompfkjbjkilodvsmbkjzkÃ¹m', 'n,kl:,lmm;,', 'hjkmlÃ¹mlklkjj ', 'oui', 'jkjklmlmmÃ¹m', 'oui', 'bnn,;kmlfobkj;, poj,m,ll,nk  pinohkl,mpl lkio k;: kl;, klll,', 'vujbhklgf iojlkgulokgjklkgjnk oihnklkgnpomlk bkilojgnlpomlglogk', 'oui', '', 'gvjbhkn, bknnlknlk jhn, ;bjjkbkjlbkl   bolkjkkjbkjkjkj', 'gvbhjklknbkj,', ' kjklkkmll bkk ', 'bkjkjlklk ', 'oui', 'ghbhjknlb k', '+22996428718', 'hhbjhb@hb.com'),
(38, 'Booster boossssÃ§Ã§Ã§', 'bgkjlompfkjbjkilodvsmbkjzkÃ¹m', 'n,kl:,lmm;,', 'hjkmlÃ¹mlklkjj ', 'oui', 'jkjklmlmmÃ¹m', 'oui', 'bnn,;kmlfobkj;, poj,m,ll,nk  pinohkl,mpl lkio k;: kl;, klll,', 'vujbhklgf iojlkgulokgjklkgjnk oihnklkgnpomlk bkilojgnlpomlglogk', 'oui', '', 'gvjbhkn, bknnlknlk jhn, ;bjjkbkjlbkl   bolkjkkjbkjkjkj', 'gvbhjklknbkj,', ' kjklkkmll bkk ', 'bkjkjlklk ', 'oui', 'ghbhjknlb k', '+22996428718', 'hhbjhb@hb.com'),
(39, 'Booster boossssÃ§Ã§Ã§', 'bgkjlompfkjbjkilodvsmbkjzkÃ¹m', 'n,kl:,lmm;,', 'hjkmlÃ¹mlklkjj ', 'oui', 'jkjklmlmmÃ¹m', 'oui', 'bnn,;kmlfobkj;, poj,m,ll,nk  pinohkl,mpl lkio k;: kl;, klll,', 'vujbhklgf iojlkgulokgjklkgjnk oihnklkgnpomlk bkilojgnlpomlglogk', 'oui', '', 'gvjbhkn, bknnlknlk jhn, ;bjjkbkjlbkl   bolkjkkjbkjkjkj', 'gvbhjklknbkj,', ' kjklkkmll bkk ', 'bkjkjlklk ', 'oui', 'ghbhjknlb k', '+22996428718', 'hhbjhb@hb.com'),
(40, 'Bonnhpo^$gonjikn,;', 'joo^pll^plkj;,l:lk', 'nokl,mplo:  loknp,mlmplo', 'vhjkn,;  joikb oik ; ibkjLNOIKL./', 'oui', 'GJJHKLL OBJNLL/', 'oui', ' HHJ N? B KI?K K? BKI.J', 'GJJB?.NK JPLLNKMOOI', 'oui', '', 'PRIORITES ', 'HJHJKKL', 'HJHJKLM IOKNL?KN', 'IBBN.KL.  KIJ.J?N. ', 'oui', 'REMARQUES', '+22996428718', 'cadjahoungbo@gmail.com'),
(41, 'Bonnhpo^$gonjikn,;', 'joo^pll^plkj;,l:lk', 'nokl,mplo:  loknp,mlmplo', 'vhjkn,;  joikb oik ; ibkjLNOIKL./', 'oui', 'GJJHKLL OBJNLL/', 'oui', ' HHJ N? B KI?K K? BKI.J', 'GJJB?.NK JPLLNKMOOI', 'oui', '', 'PRIORITES ', 'HJHJKKL', 'HJHJKLM IOKNL?KN', 'IBBN.KL.  KIJ.J?N. ', 'oui', 'REMARQUES', '+22996428718', 'cadjahoungbo@gmail.com'),
(42, 'Bonnhpo^$gonjikn,;', 'joo^pll^plkj;,l:lk', 'nokl,mplo:  loknp,mlmplo', 'vhjkn,;  joikb oik ; ibkjLNOIKL./', 'oui', 'GJJHKLL OBJNLL/', 'oui', ' HHJ N? B KI?K K? BKI.J', 'GJJB?.NK JPLLNKMOOI', 'oui', '', 'PRIORITES ', 'HJHJKKL', 'HJHJKLM IOKNL?KN', 'IBBN.KL.  KIJ.J?N. ', 'oui', 'REMARQUES', '+22996428718', 'cadjahoungbo@gmail.com'),
(43, 'kjnkjnkjn', 'GABA', 'kjnkjnkjkn', 'sdfsdfsdfdsfdfsdsfsdfsfsdfs', 'oui', 'knjnkjnk', 'oui', 'asdadasdas', 'kjnkkjnkjknj', 'oui', '', 'sfafafdadafdadfsdfasdfadsadfadfasdfa', 'njkjnkjnkjnkjn', 'kjnkkjkjnkn', 'knknkjnkjnkjn', 'oui', 'lakmlvckasmlckamclkalckmadcadc', '50388202', 'q@gmail.com'),
(47, '11111', '111', '111', '111', 'oui', '11111', 'oui', '1111', '11111', 'oui', '', '1111', '11111', '11111', '1111111', 'oui', '11111', '11111', 'q@gmail.com'),
(49, 'hjnjn', 'kjnkjnk', 'nknjkn', 'kjnkjn', 'oui', 'nknknj', 'oui', 'kjnkjnkj', 'nnjkjnkjn', 'oui', '', 'jhjhbjhjb', 'hjbjhbjh', 'bjhbjhbjh', 'bjhbjhbjhb', 'oui', 'jhbjhbjhbjh', '1312123', 'kjknjjkn@gmai.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nomP` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'admin',
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nomP`, `email`, `role`, `password`) VALUES
(1, 'nova', 'onesimeminanon12@gmail.com', 'admin', 'cnov @');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `nom_table`
--
ALTER TABLE `nom_table`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `nom_table`
--
ALTER TABLE `nom_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;