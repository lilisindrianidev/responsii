-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 05:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `3008_3361`
--
CREATE DATABASE IF NOT EXISTS `3008_3361` DEFAULT CHARACTER SET greek COLLATE greek_general_ci;
USE `3008_3361`;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `reservation_id` int(10) unsigned NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`reservation_id`, `id`, `name`, `surname`, `email`, `country`, `phone`) VALUES
(139063, 'AZ765466', 'Νικος', 'Αβραμηδης', 'teriyaki@iatneh.com', 'Ελλάδα', '6966576543'),
(194341, 'AH173353', 'Αρίστος', 'Χατζίδης', 'aristospaok@hotmail.com', 'Ελλάδα', '6984908778'),
(196709, 'AZ987678', 'Βασίλης', 'Παπαδοπουλος', 'papadopoulos@mail.com', 'Ελλάδα', '69874877632'),
(228535, 'AX8347', 'Δημήτριος', 'Κιζιρίδης', 'dimikizi@outlook.com', 'Ελλάδα', '6970688733'),
(287283, 'AZ871163', 'Aristos', 'Chatzidis', 'aristos@mail.ru', 'Ελλάδα', '6977653425');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `breakfast` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `room_id`, `check_in`, `check_out`, `total`, `price`, `breakfast`) VALUES
(139063, 203, '2015-05-01', '2015-05-05', 4, '160', 0),
(196709, 202, '2015-05-06', '2015-05-09', 3, '120', 0),
(287283, 103, '2015-05-01', '2015-05-05', 4, '160', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(10) unsigned NOT NULL,
  `floor` tinyint(4) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `room_view` varchar(3) NOT NULL,
  `room_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `floor`, `room_type`, `room_view`, `room_price`) VALUES
(101, 1, 'Δίκλινο', 'ΝΑΙ', '25'),
(102, 1, 'Δίκλινο', 'ΝΑΙ', '25'),
(103, 1, 'Τετράκλινο', 'ΟΧΙ', '40'),
(201, 2, 'Τρίκλινο', 'ΟΧΙ', '30'),
(202, 2, 'Τρίκλινο', 'ΝΑΙ', '40'),
(203, 2, 'Τετράκλινο', 'ΝΑΙ', '40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`reservation_id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`reservation_id`), ADD UNIQUE KEY `reservation_id_UNIQUE` (`reservation_id`), ADD KEY `fk_reservations_rooms1_idx` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
ADD CONSTRAINT `fk_reservations__clients` FOREIGN KEY (`reservation_id`) REFERENCES `clients` (`reservation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_reservations_rooms1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
