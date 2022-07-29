-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2022 at 05:58 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'Gérald');

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  `quand` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `mail`, `commentaire`, `id_article`, `quand`) VALUES
(9, 'z', 'test@gmail.com', ' j&#039;aime bien zerator <br />\r\n      			', 123, 1658228274),
(10, 'z', 'test@gmail.com', 'vive domingo        			', 12, 1658229096),
(18, 'gerald', 'gmerriske@gmail.com', ' je pense que domingo est un bon streamer <br />\r\n      			', 12, 1658480248),
(19, 'geraldspgeraldsp', 'test@gmail.com', '&lt;script&gt;<br />\r\nalert(&#039;test&#039;)&lt;/script&gt;						', 12, 1658481147);

-- --------------------------------------------------------

--
-- Table structure for table `g_streamer`
--

CREATE TABLE `g_streamer` (
  `id` int(6) UNSIGNED NOT NULL,
  `Nom_streamer` varchar(30) NOT NULL,
  `liens_stream` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `g_streamer`
--

INSERT INTO `g_streamer` (`id`, `Nom_streamer`, `liens_stream`, `reg_date`) VALUES
(1, 'AMINEMATUE', 'https://player.twitch.tv/?channel=AMINEMATUE&parent=localhost', '2022-07-29 17:08:35'),
(2, 'OTPLOL_', 'https://player.twitch.tv/?channel=OTPLOL_&parent=localhost', '2022-07-29 17:08:22'),
(3, 'KAMET0', 'https://player.twitch.tv/?channel=KAMET0&parent=localhost', '2022-07-13 10:08:10'),
(4, 'ZERATOR', 'https://player.twitch.tv/?channel=ZERATOR&parent=localhost', '2022-07-13 10:08:13'),
(5, 'JLTOMY', 'https://player.twitch.tv/?channel=JLTOMY&parent=localhost', '2022-07-13 10:08:15'),
(6, 'SQUEEZIE', 'https://player.twitch.tv/?channel=SQUEEZIE&parent=localhost', '2022-07-13 10:08:18'),
(7, 'SARDOCHE', 'https://player.twitch.tv/?channel=SARDOCHE&parent=localhost', '2022-07-13 10:09:06'),
(8, 'DOMINGO', 'https://player.twitch.tv/?channel=DOMINGO&parent=localhost', '2022-07-13 10:11:16'),
(9, 'PONCE', 'https://player.twitch.tv/?channel=PONCE&parent=localhost', '2022-07-13 10:11:22'),
(12, 'rivenzi', 'https://player.twitch.tv/?channel=rivenzi&parent=localhost', '2022-07-22 09:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'z', 'z', '594e519ae499312b29433b7dd8a97ff068defcba9755b6d5d00e84c524d67b06'),
(3, 'geraldsp', 'gmerriske@gmail.com', 'f3104895f3c4dc98c2afe914e117ff309b89c3aa4c56224e888d612308d52c4a'),
(4, 'gerald', 'saintpierregerald01@gmail.com', '21aafe2f10e974a8dd7c1533b954116ff776f572fda8abf523641f33bd8e42bc'),
(5, 'geraldsp', 'z@gmail.com', 'f3104895f3c4dc98c2afe914e117ff309b89c3aa4c56224e888d612308d52c4a'),
(6, 'admin', 'z@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_streamer`
--
ALTER TABLE `g_streamer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `g_streamer`
--
ALTER TABLE `g_streamer`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
