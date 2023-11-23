-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2020 at 12:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(15, 'Sergei Terekhov', '83 Fieldstone Court\r\nDes Plaines, IL 60016', 1000000),
(16, 'Brianna Hartman', '89 Albany Lane\r\nJamaica Plain, MA 02130', 4900),
(17, 'Grover Maldonado', '74 S. Wintergreen Street\r\nAshtabula, OH 44004', 3500),
(18, 'Callum Wiley', '8286 Alton St.\r\nRoseville, MI 48066', 99000),
(19, 'Helena Harper', '834 4th St.\r\nEast Stroudsburg, PA 18301', 15000),
(20, 'Brennan Mason', '405 Front Ave.\r\nPasadena, MD 21122', 34000),
(21, 'Cheyenne Mackay', '39 Miller Drive\r\nFullerton, CA 92831', 23400),
(22, 'Cloe Cortez', '7363 George Street\r\nCrystal Lake, IL 60014', 12450),
(23, 'Charmaine Parry', '67 Maiden Court\r\nValdosta, GA 31601', 12300),
(24, 'Phoebe Acosta', '7116 Harvey Street\r\nDowners Grove, IL 60515', 130000),
(25, 'Thea Hamilton', '755 Greenrose Street\r\nGrand Haven, MI 49417', 4500),
(26, 'Inaayah Parrish', '16 E. Country Club Street\r\nMadison Heights, MI 48071', 23000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
