-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 06:56 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `registration_date`) VALUES
(1, 'Thomas Asare Appiah', 'thomas@yahoo.com', '$2y$10$Hsr9dIdCFPXJLvL2PeXlpuv3iU0sf9jbVliNX9B93qVIQjN/wKGWe', '2023-11-26 17:54:23'),
(3, 'John Doe', 'tho@yahoo.com', '$2y$10$Cm2ugtGdXtIZjHSBQm6WXOeLx.wbgZdUkIhUWct5xzPd7h3zWrD5a', '2023-11-26 17:59:27'),
(4, 'Josephine Tsorhey', 'jtsorhey@gmail.com', '$2y$10$4gV4oN1HFza.BQmGezzrUO7ZvVePwFVICfh3vn51WFCSZBKkpyG5a', '2023-11-26 18:38:26'),
(6, 'Josephine Tsorhey', 'jsorhey@gmail.com', '$2y$10$3dRyXu6tI1V.wVsebec0leuKzQ7f87s4Ok8xlMnUXsWy2Xhdq6ZFe', '2023-11-26 18:40:19'),
(7, 'Frank Attitsogbui', 'frank@yahoo.com', '$2y$10$2w6LehSalMtulP3mQh5lvuD2iYXp0RVmkB0h4Sza9XkU8eeyqaAUO', '2023-11-26 22:18:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
