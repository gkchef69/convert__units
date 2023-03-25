-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 25 Μαρ 2023 στις 16:19:09
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `convert_units`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item` varchar(50) DEFAULT NULL,
  `kg` float DEFAULT NULL,
  `grams` float DEFAULT NULL,
  `oz` float DEFAULT NULL,
  `liter` float DEFAULT NULL,
  `milliliters` float DEFAULT NULL,
  `tablespoons` float DEFAULT NULL,
  `teaspoons` float DEFAULT NULL,
  `cups` float DEFAULT NULL,
  `glasses` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `items`
--

INSERT INTO `items` (`id`, `item`, `kg`, `grams`, `oz`, `liter`, `milliliters`, `tablespoons`, `teaspoons`, `cups`, `glasses`) VALUES
(6, 'Milk', 1, 1000, 35.274, 0.970874, 970874000000000, 67.628, 196.975, 4.10364, 4.10364),
(15, 'Milk with Chocolate', 1, 1000, 35.274, 48, 46, 40, 73, 28, 72),
(16, 'Brown Sugar', 1, 1000, 35.274, 1.0754, 1075.4, 72.7271, 218.181, 4.54545, 4.54545);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item` (`item`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
