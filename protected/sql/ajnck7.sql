-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2020. Máj 11. 13:05
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ajnck7`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bugreports`
--

DROP TABLE IF EXISTS `bugreports`;
CREATE TABLE IF NOT EXISTS `bugreports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `bugreports`
--

INSERT INTO `bugreports` (`id`, `text`) VALUES
(8, 'texturahiba az adatoknál\r\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `chatmessages`
--

DROP TABLE IF EXISTS `chatmessages`;
CREATE TABLE IF NOT EXISTS `chatmessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `knév` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `message` text COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `chatmessages`
--

INSERT INTO `chatmessages` (`id`, `knév`, `message`) VALUES
(1, 'Szabolcs', 'utzuzt'),
(13, 'Anna', 'Megy'),
(64, 'Anna', 'hogy a görgetés működik e'),
(63, 'Anna', 'más felhasználóval'),
(61, 'Szabolcs', 'valamivel'),
(62, 'Anna', 'itt is'),
(60, 'Szabolcs', 'üzenet feltöltés');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE IF NOT EXISTS `search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  `keywords` varchar(1000) COLLATE utf8_hungarian_ci NOT NULL,
  `link` varchar(2000) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `search`
--

INSERT INTO `search` (`id`, `title`, `description`, `keywords`, `link`) VALUES
(1, 'Magas szintű Programozások I ', 'magprog', 'magprog magasszintűprogramozás magasszintű', 'http://localhost:8080/beadando/index.php?P=Ifelev'),
(2, 'I felev', 'első félév', 'I felev első félév', 'http://localhost:8080/beadando/index.php?P=Ifelev'),
(3, 'Magas szintű programozások 1', 'Értékadó operátorok', 'értékadó operátor értékadó értékado', 'http://localhost:8080/beadando/index.php?P=Magprogea1');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_hungarian_ci NOT NULL,
  `permission` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `permission`) VALUES
(1, 'Szabolcs', 'Nagy', 'mikimi987654@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 1),
(5, 'Anna', 'Nagyné', 'anna@indamail.hu', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(6, 'asd', 'asd', 'mikimi@vipmail.hu', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
