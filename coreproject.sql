-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2014 at 09:34 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coreproject`
--
CREATE DATABASE IF NOT EXISTS `coreproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coreproject`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_adminweb`
--

CREATE TABLE IF NOT EXISTS `tbl_data_adminweb` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `decrypt` varchar(35) NOT NULL,
  `level` enum('Administrator','Staff') NOT NULL DEFAULT 'Administrator',
  `Nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Last_Login` datetime NOT NULL,
  `Aktif` tinyint(1) NOT NULL,
  `note` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_data_adminweb`
--

INSERT INTO `tbl_data_adminweb` (`id`, `username`, `password`, `decrypt`, `level`, `Nama`, `email`, `Last_Login`, `Aktif`, `note`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', 'admin', 'admin@localhost', '2014-07-11 00:00:00', 1, 'adminweb portal'),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'Staff', 'xxx', 'xxx@admin.com', '2014-07-14 00:00:00', 1, 'aktif  test\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_data_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_berita` date DEFAULT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `kategori` varchar(255) NOT NULL,
  `tag` varchar(25) NOT NULL,
  `Penulis` text NOT NULL,
  `id_komentar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_data_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `id_usersite` int(11) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_data_komentar`
--

INSERT INTO `tbl_data_komentar` (`id_komentar`, `nama`, `url`, `email`, `pesan`, `id_usersite`) VALUES
(4, 'cd', 'cd.com', 'xxx@yahoo.co.id', 'mantap gan', 1),
(5, 'xd', 'xx', 'xxxxxxx', 'xxxxxxxx', 2),
(9, 'ws', 'wsss', 'xdd@yahoo.co.id', 'xcvgg', 0),
(10, 'ayu', 'ayu.com', 'ayu@yahoo.co.id', 'cantik designnya', 0),
(11, 'x', 's', 'x', 'x', 0),
(12, 'v', 'bh', 'nhj', 'muikooooo', 0),
(14, 'we', 'wes.yyy.com', 'yy@yahoo.co.id', 'josuiei\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_users`
--

CREATE TABLE IF NOT EXISTS `tbl_data_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(128) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pangkat` enum('superadmin','user') NOT NULL DEFAULT 'user',
  `user_nama` varchar(128) DEFAULT NULL,
  `user_tanggal` date DEFAULT NULL,
  `user_keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UNIQUE` (`user_username`,`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
