-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 26. Sep 2016 um 16:27
-- Server Version: 10.1.17-MariaDB-1~jessie
-- PHP-Version: 5.6.24-0+deb8u1

--
-- ALPIX
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `public_apply`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `config`
--
-- Erstellt am: 04. Sep 2016 um 15:20
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `value` varchar(500) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `config`
--

INSERT INTO `config` (`name`, `value`) VALUES
('description', 'Bewerbe dich hier. Diese Seite nutzt Apply von Alpix'),
('first', 'grey'),
('footerbutton_link_text', ''),
('footerbutton_on', 'true'),
('footerbutton_on_link', 'https://example.com'),
('ga', 'true'),
('ga_id', 'UA-70359044-2'),
('icon', 'logo.jpg'),
('second', 'orange'),
('test', 'test'),
('title', 'Apply by Alpix'),
('twitter', 'AlpixTM'),
('twitter_on', 'true'),
('urlparam', 'site_app');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `log`
--
-- Erstellt am: 04. Sep 2016 um 15:20
--

CREATE TABLE IF NOT EXISTS `log` (
  `date` date NOT NULL,
  `ip` varchar(45) COLLATE utf8_bin NOT NULL,
  `site` varchar(9) COLLATE utf8_bin NOT NULL,
  `script` varchar(25) COLLATE utf8_bin NOT NULL,
  `action` int(11) NOT NULL,
  `error` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `route`
--
-- Erstellt am: 04. Sep 2016 um 15:20
--

CREATE TABLE IF NOT EXISTS `route` (
  `site` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `topic` text COLLATE utf8_bin,
  `description` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `showinlist` varchar(5) COLLATE utf8_bin DEFAULT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `route`
--

INSERT INTO `route` (`site`, `topic`, `description`, `title`, `image`, `status`, `showinlist`, `id`) VALUES
('dummie', 'dummie', 'this is a dummie', 'dummie', '/dummie.png', '1', '1', 1),
('dev', 'dev', 'Werde hier Dev!', 'Developer', 'dev.jpg', '1', '1', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `config`
--
ALTER TABLE `config`
 ADD PRIMARY KEY (`name`);

--
-- Indizes für die Tabelle `route`
--
ALTER TABLE `route`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `route`
--
ALTER TABLE `route`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
