-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4app`
--

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `pages` int(3) NOT NULL,
  `volumes` int(3) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`id`, `name`, `slug`, `author`, `publisher`, `pages`, `volumes`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'Masashi Khisimoto', 'Shounen Jump', 100, 1, 'naruto.jpg', NULL, '2022-11-22 23:54:27'),
(2, 'One Piece', 'one-piece', 'Eichiro Oda', 'Gramedia', 81, 2, '1669105243_c7c07caeb3e63957cede.jpg', NULL, '2022-11-22 02:20:43'),
(22, 'Doraemon', 'doraemon', 'Fujiko F Fujio', 'Superindo', 111, 2, '1669105437_c2becda387681f8d5fc5.jpg', '2022-11-22 02:23:57', '2022-11-22 23:47:41'),
(23, 'My Hero Academia', 'my-hero-academia', 'Sakaki Khisimoto', 'Shounen Mouthly', 98, 1, '1669182428_ffaa28c63e3a63b434ac.jpg', '2022-11-22 23:47:08', '2022-11-23 02:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-11-23-061652', 'App\\Database\\Migrations\\People', 'default', 'App', 1669184674, 1);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sakee', 'Jl. 43 Bandung', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(2, 'Lori', 'Jl. 43 Semarang', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(3, 'Mona', 'Jl. 23 ta', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(4, 'Sukma', 'Jl. 21 Bandung', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(5, 'Loris', 'Jl. 43 gg', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(6, 'Luki', 'Jl. 41 Jakarta', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(7, 'Rokka', 'Jl. 411 Bandung', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(8, 'Sapi', 'Jl. 5 Semarang', '2022-11-23 02:59:40', '2022-11-23 15:59:40'),
(9, 'Gold', 'Jl. 01 Jember', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(10, 'Fikki', 'Jl. 12 Bandung', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(11, 'Lola', 'Jl. 11 Lo', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(12, 'Ahmad', 'Jl. 44 Jakarta', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(13, 'Yusuf', 'Jl. 4123 Bandung', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(14, 'Inem', 'Jl. 12 Semarang', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(15, 'Tukima', 'Jl. 21 Jakarta', '2022-11-23 15:59:40', '2022-11-23 15:59:40'),
(16, 'Sakee', 'Jl. 43 Bandung', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(17, 'Lori', 'Jl. 43 Semarang', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(18, 'Mona', 'Jl. 23 ta', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(19, 'Sukma', 'Jl. 21 Bandung', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(20, 'Loris', 'Jl. 43 gg', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(21, 'Luki', 'Jl. 41 Jakarta', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(22, 'Rokka', 'Jl. 411 Bandung', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(23, 'Sapi', 'Jl. 5 Semarang', '2022-11-23 03:00:37', '2022-11-23 16:00:37'),
(24, 'Gold', 'Jl. 01 Jember', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(25, 'Fikki', 'Jl. 12 Bandung', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(26, 'Lola', 'Jl. 11 Lo', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(27, 'Ahmad', 'Jl. 44 Jakarta', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(28, 'Yusuf', 'Jl. 4123 Bandung', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(29, 'Inem', 'Jl. 12 Semarang', '2022-11-23 16:00:37', '2022-11-23 16:00:37'),
(30, 'Tukima', 'Jl. 21 Jakarta', '2022-11-23 16:00:37', '2022-11-23 16:00:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
