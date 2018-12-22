-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 08:30 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `userId`) VALUES
(4, 'Apple', '5', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `image`) VALUES
(1, 'shakil khan', 'shakilkhan@gmail.com', '$2y$10$5LZqg.1JxdJpCfcMZY7sbOp6jMrNAX4eZQZs6MuYDUDgbLmZ3VHFe', 'profile.PNG'),
(2, 'imran khan', 'imrankhan@gmail.com', '$2y$10$H56/jZFBRqs0KgMyCdi1r.lffThSf/GVOjWRfauQvnTOz633fCzyq', 'profile.PNG'),
(3, 'muhammad', 'muhammad@gmail.com', '$2y$10$SMVDQzABZZiyts0yBxIlDeVUHsGKWA2leh.4gfrkPCgYEi8YCrs2m', 'profile.PNG'),
(4, 'usama ali', 'usama@gmail.com', '$2y$10$RDemmRe.TCECqAJ8/xIDUuEgrTEBnFFCHjNAsJJmPAv3b3Z7VztE2', '154400247015.jpg'),
(9, 'usman khan', 'usman@gmail.com', '$2y$10$xxjHgVBmHP93J5xkTgnqNuBNcfpLeEJbvk5jvadSdHFiVVyT/MFXG', '154434960311.jpg'),
(10, 'rahimullah', 'rahimullah@gmail.com', '$2y$10$mfR3QfABnGKqMwTOooTk9ewjJztledVbDh4CQ6LqPSkZdRGFoAArK', '15451288806.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
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
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
