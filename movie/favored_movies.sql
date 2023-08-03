-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2023 at 06:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `favored_movies`
--

CREATE TABLE `favored_movies` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favored_movies`
--

INSERT INTO `favored_movies` (`id`, `title`, `release_date`, `updated_at`, `created_at`) VALUES
(1, 'Barbie', '2023-07-19', '2023-08-03 03:22:39', '2023-08-03 03:22:39'),
(2, 'The Flash', '2023-06-13', NULL, NULL),
(3, 'Transformers: Rise of the Beasts', '2023-06-06', NULL, NULL),
(4, 'The Little Mermaid', '2023-05-18', NULL, NULL),
(5, 'Resident Evil: Death Island', '2023-06-22', NULL, NULL),
(6, 'Guardians of the Galaxy Vol. 3', '2023-05-03', NULL, NULL),
(7, 'Shin Kamen Rider', '2023-03-17', NULL, NULL),
(8, 'Justice League: Warworld', '2023-07-25', NULL, NULL),
(9, 'Ruby Gillman, Teenage Kraken', '2023-06-28', NULL, NULL),
(10, 'Fast X', '2023-05-17', NULL, NULL),
(11, 'Miraculous: Ladybug & Cat Noir, The Movie', '2023-07-05', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favored_movies`
--
ALTER TABLE `favored_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favored_movies`
--
ALTER TABLE `favored_movies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
