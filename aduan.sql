-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2015 at 07:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id_aduan` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(500) NOT NULL,
  `majlis_name` varchar(500) NOT NULL,
  `tajuk_aduan` varchar(5000) NOT NULL,
  `tempat_aduan` varchar(5000) NOT NULL,
  `mak_tambahan` varchar(5000) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `nama_pengadu` varchar(5000) NOT NULL,
  `tel_no` varchar(500) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `timestamp_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(500) NOT NULL,
  `email_PIC` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_aduan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id_aduan`, `state`, `majlis_name`, `tajuk_aduan`, `tempat_aduan`, `mak_tambahan`, `image_name`, `nama_pengadu`, `tel_no`, `email`, `timestamp_created`, `ip_address`, `email_PIC`) VALUES
(1, 'Selangor', 'Majlis Perbandaran Ampang Jaya', 'test 1', 'test 1', 'test 1', 'images/blouse_f3vx3.jpeg', 'test 1', '01233333', 'test1@gmail.com', '2015-02-10 03:15:30', '::1', 'iifasazuani@gmail.com'),
(2, 'Johor', 'Majlis Perbandaran Batu Pahat', 'test 2', 'test 2', 'test 2', 'images/95777blouse_f3vx3.jpeg', 'test 2', '012222222', 'test2@yahoo.com', '2015-02-10 03:17:49', '::1', 'iifasazuani@gmail.com'),
(3, 'Kelantan', 'Majlis Daerah Dabong', 'test 4', 'test 4', 'test 4', 'images/13120blouse_f3vx3_2.jpeg', 'test 4', '0111111111111', 'test4@test.com.my', '2015-02-10 03:20:05', '::1', 'iifasazuani@gmail.com'),
(4, 'Johor', 'Majlis Bandaraya Johor Bahru', 'xcdfv', 'cvb', 'cvbn', '', 'zxc', '01345678', 'testing@gmail.com', '2015-02-10 05:15:23', '::1', 'iifasazuani@gmail.com'),
(5, 'Selangor', 'Majlis Perbandaran Ampang Jaya', 'zxcv', 'xcdfvgxv ', 'zxc', '', 'zxc', '01345678', 'test4@test.com.my', '2015-02-10 06:16:53', '::1', 'iifasazuani@gmail.com'),
(6, 'Perak', 'Majlis Perbandaran Kuala Kangsar', 'axscdf', 'sxdfvg', 'xcd', '', 'azsdf', '01345678', 'test4@test.com.my', '2015-02-10 08:15:28', '::1', 'iifasazuani@gmail.com'),
(7, 'Selangor', 'Majlis Perbandaran Kajang', 'axsdfg', 'dfd', 'df', '', 'azsdfe', '01345678', 'test4@test.com.my', '2015-02-10 09:03:06', '::1', 'iifasazuani@gmail.com'),
(8, 'Selangor', 'Majlis Bandaraya Petaling Jaya', 'Xc', 'asdf', 'D', 'images/cute_love-normal.jpg', 'ADF', '0111111111111', 'test4@test.com.my', '2015-02-10 09:56:32', '::1', 'ifasazuaniishak@yahoo.com'),
(9, 'Johor', 'Majlis Bandaraya Johor Bahru', 'test', 'test', 'test', 'images/15955cute_love-normal.jpg', 'azxsd', '0111111111111', 'test4@test.com.my', '2015-02-10 10:07:04', '::1', 'iifasazuani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `majlis_name`
--

CREATE TABLE IF NOT EXISTS `majlis_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maj` int(11) NOT NULL,
  `name_maj` varchar(500) NOT NULL,
  `PIC` varchar(500) NOT NULL,
  `PIC_email` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_maj` (`id_maj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `majlis_name`
--

INSERT INTO `majlis_name` (`id`, `id_maj`, `name_maj`, `PIC`, `PIC_email`) VALUES
(1, 1, 'Majlis Bandaraya Shah Alam', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(2, 1, 'Majlis Bandaraya Petaling Jaya', 'Ifa Sazuani binti Ishak', 'ifasazuaniishak@yahoo.com'),
(3, 1, 'Majlis Perbandaran Ampang Jaya', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(4, 1, 'Majlis Perbandaran Kajang', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(5, 1, 'Majlis Perbandaran Klang', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(6, 2, 'Majlis Bandaraya Ipoh', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(7, 2, 'Majlis Perbandaran Manjung', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(8, 2, 'Majlis Perbandaran Kuala Kangsar', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(9, 2, 'Majlis Perbandaran Taiping', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(10, 3, 'Majlis Perbandaran Kangar', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(11, 4, 'Majlis Bandaraya Johor Bahru', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(12, 4, 'Majlis Perbandaran Batu Pahat', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(13, 4, 'Majlis Perbandaran Kluang', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(14, 5, 'Majlis Daerah Bachok', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(15, 5, 'Majlis Daerah Gua Musang', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(16, 5, 'Majlis Daerah Ketereh', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com'),
(17, 5, 'Majlis Daerah Dabong', 'Ifa Sazuani binti Ishak', 'iifasazuani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `select_majlis`
--

CREATE TABLE IF NOT EXISTS `select_majlis` (
  `id_maj` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(200) NOT NULL,
  PRIMARY KEY (`id_maj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `select_majlis`
--

INSERT INTO `select_majlis` (`id_maj`, `state`) VALUES
(1, 'Selangor'),
(2, 'Perak'),
(3, 'Perlis'),
(4, 'Johor'),
(5, 'Kelantan');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `majlis_name`
--
ALTER TABLE `majlis_name`
  ADD CONSTRAINT `majlis_name_ibfk_1` FOREIGN KEY (`id_maj`) REFERENCES `select_majlis` (`id_maj`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
