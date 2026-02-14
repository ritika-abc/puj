-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2026 at 01:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puja`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `image`, `slug`) VALUES
(2, 'Pandadi Saree Black', 'WhatsApp Image 2026-02-06 at 11.06.50 PM.jpeg', 'a'),
(4, 'Desi Tussar by Tussar Silk Saree', 'WhatsApp Image 2026-02-05 at 12.16.09 PM (1).jpeg', ''),
(5, ' Tussar silk saree featuring intricate Kantha embroidery. ', 'WhatsApp Image 2026-02-05 at 12.16.10 PM (1).jpeg', ''),
(6, 'brown handloom saree ', 'WhatsApp Image 2026-02-05 at 12.16.10 PM (2).jpeg', ''),
(7, ' black party wear saree', 'WhatsApp Image 2026-02-06 at 11.06.49 PM.jpeg', ''),
(8, 'Debottama Dhakai Jamdani Saree ', 'WhatsApp Image 2026-02-05 at 12.35.52 PM.jpeg', ''),
(9, 'handwoven Dhakai Jamdani saree', 'WhatsApp Image 2026-02-05 at 12.35.51 PM.jpeg', ''),
(10, 'green-toned Dhakai Jamdani saree', 'WhatsApp Image 2026-02-05 at 12.35.51 PM (1).jpeg', ''),
(11, 'purple handloom Dhakai Jamdani saree', 'WhatsApp Image 2026-02-05 at 12.35.47 PM (1).jpeg', ''),
(12, 'white saree', 'WhatsApp Image 2026-02-05 at 12.16.55 PM.jpeg', ''),
(15, 'white saree', '1771069483-WhatsApp Image 2026-02-05 at 12.16.53 PM.jpeg', ''),
(16, ' Pink Yellow Kach Vanga Print Pure Cotton Saree', '1771069504-pro (1).jpeg', ''),
(17, ' handloom cotton saree ', '1771069509-pro (2).jpeg', ''),
(18, 'White Sky Blue Checks Pure Handloom Cotton Saree', '1771069516-pro (3).jpeg', ''),
(19, 'multicolor cotton saree ', '1771069524-pro (4).jpeg', ''),
(20, ' Taneira off-white and red striped pure cotton saree ', '1771069530-pro (5).jpeg', ''),
(21, ' handmade fabric handloom saree ', '1771069535-pro (6).jpeg', ''),
(22, ' multicolor cotton saree ', '1771069543-pro (7).jpeg', ''),
(23, 'handwoven handloom cotton saree', '1771069551-pro (8).jpeg', ''),
(24, 'white and pink handloom cotton saree', '1771069558-pro (9).jpeg', ''),
(25, 'multi-colored Itkot handloom saree ', '1771069565-pro (10).jpeg', ''),
(26, ' Itkot khadi cotton 3D saree with a blouse piece', '1771069572-pro (11).jpeg', ''),
(27, 'black cotton blend saree ', '1771069579-pro (12).jpeg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
