-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2019 at 11:30 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9163318_sisteminformasiseminar`
--
CREATE DATABASE IF NOT EXISTS `id9163318_sisteminformasiseminar` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id9163318_sisteminformasiseminar`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('visualc', 'informatika2016');

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

DROP TABLE IF EXISTS `datamhs`;
CREATE TABLE IF NOT EXISTS `datamhs` (
  `nim` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `judulseminar` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamhs`
--

INSERT INTO `datamhs` (`nim`, `nama`, `jurusan`, `fakultas`, `judulseminar`) VALUES
(6, 'vg', 'bh', 'bb', '343re');

-- --------------------------------------------------------

--
-- Table structure for table `inputnilai`
--

DROP TABLE IF EXISTS `inputnilai`;
CREATE TABLE IF NOT EXISTS `inputnilai` (
  `nim` int(11) NOT NULL,
  `nilai` int(4) DEFAULT 0,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inputnilai`
--

INSERT INTO `inputnilai` (`nim`, `nilai`) VALUES
(6, 56757);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
