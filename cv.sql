-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 04:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu`
--

CREATE TABLE `tb_edu` (
  `edu_id` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL,
  `edu_in` date NOT NULL,
  `edu_out` date NOT NULL,
  `edu_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu`
--

INSERT INTO `tb_edu` (`edu_id`, `edu_name`, `edu_in`, `edu_out`, `edu_detail`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', '2019-09-01', '2023-07-01', 'S1 Teknik Informatika'),
(2, 'SMA Negeri 1 Belitang', '2016-06-09', '2019-05-23', 'Ilmu Pengetahuan Sosial'),
(3, 'SMP Negeri 2 Belitang', '2013-07-02', '2016-07-26', 'Sekolah Menengah Pertama'),
(4, 'SD Negeri 2 Belitang', '2007-07-14', '2013-05-05', 'Sekolah Dasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_exp`
--

CREATE TABLE `tb_exp` (
  `exp_id` int(11) NOT NULL,
  `exp_name` varchar(255) NOT NULL,
  `exp_in` char(10) NOT NULL,
  `exp_out` char(10) NOT NULL,
  `exp_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_exp`
--

INSERT INTO `tb_exp` (`exp_id`, `exp_name`, `exp_in`, `exp_out`, `exp_detail`) VALUES
(1, 'PT. Toko AA', '2020', '2020', 'Pegawai Toko AA'),
(2, 'IMAJI PHOTO', '2019', '2020', 'STUDIO PHOTOGRAFER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `tb_exp`
--
ALTER TABLE `tb_exp`
  ADD PRIMARY KEY (`exp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_edu`
--
ALTER TABLE `tb_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_exp`
--
ALTER TABLE `tb_exp`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
