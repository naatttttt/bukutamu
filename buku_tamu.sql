-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 01:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `ID_BT` int(10) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`ID_BT`, `Nama`, `Email`, `Isi`) VALUES
(1, 'Fransiskus', 'fransiskus10@gmail.com', 'selamat ulang tahun, semoga  panjang umur amin'),
(2, 'Nabila', 'nabila8@gmail.com', 'habedeeeeeeeeee'),
(3, 'Riska', 'riska66@gmail.com', 'happy birthdayyyy'),
(4, 'Ghibran', 'ghibran7@gmail.com', 'hbd cok'),
(5, 'Dyta', 'dyta54@gmail.com', 'selamat ultah cinta q'),
(6, 'olis', 'olis2@gmail.com', 'habedee brrok'),
(8, 'Ghofur', 'ghofur43@gmail.com', 'selamat tambah umurr cokk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
