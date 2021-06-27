-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 01:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owlhack2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `title` text NOT NULL,
  `description` text NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `requirements` text NOT NULL,
  `rewards` text NOT NULL,
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`title`, `description`, `first`, `last`, `date`, `time`, `requirements`, `rewards`, `id`, `image`, `email`, `address`) VALUES
('Lawn Mowing', 'Hi!\n\nThe grass in my front yard has grown too long. I need someone who can cut the grass down to a more managable height. unfortunately, I do not have any gardening equipment, so you will have to bring some of your own.\n\nThanks!', 'Riley', 'Johnson', 'June 26, 2021', '10:00 am', 'gardening', '20 dollars', 0, 'grass.jpg', 'rj@gmail.com', '8962 Blackburn St. Waterloo'),
('Homework Help', 'My son, Nick Tjoa, needs help with his chemistry homework. He is learning about hydrogen bonding and is very confused. Any help would be very much appreciated.', 'Karen', 'Yeager', 'June 28, 2021', '3:00 pm', 'chemistry, math, tutoring', '$100', 1, 'chem.jpg', 'yeagerist@gmail.com', '8984 Blackburn St. Waterloo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
