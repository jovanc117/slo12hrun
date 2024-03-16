-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Gostitelj: localhost:3306
-- Čas nastanka: 30. maj 2020 ob 18.05
-- Različica strežnika: 10.3.22-MariaDB-log-cll-lve
-- Različica PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `pariza57_slo12run`
--
CREATE DATABASE IF NOT EXISTS `pariza57_slo12run` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pariza57_slo12run`;

-- --------------------------------------------------------

--
-- Struktura tabele `tekmovalci`
--

DROP TABLE IF EXISTS `tekmovalci`;
CREATE TABLE IF NOT EXISTS `tekmovalci` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8_bin NOT NULL,
  `priimek` varchar(255) COLLATE utf8_bin NOT NULL,
  `spol` varchar(8) COLLATE utf8_bin NOT NULL,
  `starost` int(5) NOT NULL,
  `kraj` varchar(255) COLLATE utf8_bin NOT NULL,
  `naslov` varchar(255) COLLATE utf8_bin NOT NULL,
  `posta` varchar(100) COLLATE utf8_bin NOT NULL,
  `drzava` varchar(25) COLLATE utf8_bin NOT NULL,
  `klub` varchar(255) COLLATE utf8_bin NOT NULL,
  `majica` varchar(2) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `tek` varchar(6) COLLATE utf8_bin NOT NULL,
  `dolzina` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Odloži podatke za tabelo `tekmovalci`
--

INSERT INTO `tekmovalci` (`tid`, `ime`, `priimek`, `spol`, `starost`, `kraj`, `naslov`, `posta`, `drzava`, `klub`, `majica`, `email`, `tek`, `dolzina`) VALUES
(39, 'Janez', 'Novak', 'MoÅ¡ki', 30, 'Ljublana', 'ulica 5', '1000', 'Slovenija', '', 'M', 'janez.novak@gmail.com', '12 ur', '5482 m'),
(40, 'Micka', 'Nartnik', 'Å½enska', 26, 'Maribor', 'Ulica 7', '2000', 'Slovenija', '', 'S', 'micika.nartnik@gmail.com', '12 ur', '7981 m'),
(41, 'Lojze', 'BuÄa', 'MoÅ¡ki', 19, 'Celje', 'ulica 9', '3000', 'Slovenija', '', 'L', 'jure.buÄa@gmail.com', '6 ur', ''),
(42, 'Anika', 'TavÄar', 'Å½enska', 45, 'Kranj', 'Ulica 1', '4000', 'Slovenija', '', 'M', 'anika.tavcar@gmail.com', '6 ur', '');

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$qiG2YWIXCfXCbUk0cTb/ieztYyXvzYFEgKok67AJXmXFGTdLBb0p6', '2020-05-11 14:50:47'),
(2, 'urednik', '$2y$10$m4/k/B3KGnXKevyAjBogC.1FvophUYWbwggXMFDwf27GKAL1eCOSa', '2020-05-25 12:59:59'),
(3, 'uporabnik', '$2y$10$BPpb3k97WnfLc1/qKrC4F.56TeG080ekBZxJLCS128lQsYjNypKJG', '2020-05-25 13:02:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
