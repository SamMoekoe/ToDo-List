-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 14 apr 2021 om 10:09
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `lists`
--

INSERT INTO `lists` (`id`, `title`, `description`, `start`, `end`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt, magna quis efficitur interdum, lectus risus faucibus eros, quis ultrices nulla lectus sit amet eros. Quisque pellentesque pulvinar ullamcorper. Nulla nec tincidunt tortor, sit amet convallis metus. Proin iaculis purus at nibh consequat, non gravida erat porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nulla erat, convallis at lorem in, fermentum molestie libero. Aenean dignissim sollicitudin enim, a efficitur metus ultricies ac. Fusce erat eros, gravida sit amet libero vitae, fermentum tempus neque. Ut nec nibh nec justo vulputate pharetra quis a tellus. Proin porta sed nisi eu.', 1200, 1300);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
