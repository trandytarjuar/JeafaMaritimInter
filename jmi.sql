-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2023 at 07:02 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` text,
  `created_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `created_at`, `created_date`, `update_at`, `update_date`) VALUES
(2, 'sejarah1', 'asdfghjkl', 'admin', '2023-09-25', 'admin', '2023-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

DROP TABLE IF EXISTS `akses`;
CREATE TABLE IF NOT EXISTS `akses` (
  `id_hak` int NOT NULL AUTO_INCREMENT,
  `role` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id_hak`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_home` varchar(250) DEFAULT NULL,
  `image_about` varchar(250) DEFAULT NULL,
  `image_service` varchar(250) DEFAULT NULL,
  `image_blog` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `judul` text,
  `deskripsi` text,
  `create_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `judul`, `deskripsi`, `create_at`, `created_date`, `update_at`, `update_date`) VALUES
(2, NULL, NULL, NULL, 'admin', '2023-09-17', NULL, NULL),
(3, NULL, 'tes', 'tes', 'admin', '2023-09-17', NULL, NULL),
(6, '1695632202.png', 'bri membuka lowongan', 'lowongan di antara ny nya adalah abac adc', 'admin', '2023-09-25', NULL, NULL),
(7, NULL, 'qwdasdfd', 'asdsfvcxzertgfvdsdcxsdcxzs\r\nzxcvdsdasxzcv sacxxcvbnmk,jhgfdcdxc, asdfghjkmnbvcxcvbnm\r\ndcfvgbhnjkiuytfdcvbnm,mnbvfghn', 'admin', '2023-09-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_loker` varchar(250) DEFAULT NULL,
  `nama_lengkap` varchar(250) DEFAULT NULL,
  `tgl_lahir` varchar(250) DEFAULT NULL,
  `alamat` text,
  `email` varchar(250) DEFAULT NULL,
  `no_telp` varchar(250) DEFAULT NULL,
  `jenis_kelamin` varchar(250) DEFAULT NULL,
  `pendidikan` varchar(250) DEFAULT NULL,
  `status_pernikahan` varchar(250) DEFAULT NULL,
  `document` varchar(250) DEFAULT NULL,
  `created_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `nama_loker`, `nama_lengkap`, `tgl_lahir`, `alamat`, `email`, `no_telp`, `jenis_kelamin`, `pendidikan`, `status_pernikahan`, `document`, `created_at`, `created_date`) VALUES
(1, 'web', 'tes', '2023-09-30', 'jalan', 'asd@gmail.com', '098765123', 'Male', 'High School', 'Single', '1696079588_4d634c606a67e76c8686.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `gmaps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `alamat` varchar(250) DEFAULT NULL,
  `no_telp` varchar(250) DEFAULT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_by` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `gmaps`, `alamat`, `no_telp`, `email`, `created_by`, `created_date`, `update_at`, `updated_date`) VALUES
(1, '!1m18!1m12!1m3!1d7932.311306777526!2d106.79391539064983!3d-6.243207809737164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1154bd2136f%3A0x7e77a1cc528bf204!2sRumah%20Sakit%20Pusat%20Pertamina!5e0!3m2!1sid!2sid!4v1695786309044!5m2!1sid!2sid', 'jalan percetakan 4 no 34, kramat pela, kebayoran baru, jakarta selatan, DKI JAKARTA', '0811993903', 'tes@ptdika.com', 'admin', '2023-09-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `tagline` varchar(250) DEFAULT NULL,
  `banner1` varchar(250) DEFAULT NULL,
  `banner2` varchar(250) DEFAULT NULL,
  `created_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `tagline`, `banner1`, `banner2`, `created_at`, `created_date`, `update_at`, `update_date`) VALUES
(2, 'tes123', 'tes12', '1696095519.png', '1696095485.png', NULL, '2023-09-30', 'admin', '2023-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

DROP TABLE IF EXISTS `loker`;
CREATE TABLE IF NOT EXISTS `loker` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `gaji` varchar(250) DEFAULT NULL,
  `benefit` text,
  `kualifikasi` text,
  `deskripsi` text,
  `create_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id`, `title`, `gaji`, `benefit`, `kualifikasi`, `deskripsi`, `create_at`, `created_date`, `update_at`, `update_date`) VALUES
(3, 'web', '1200000-2400000', 'tes234', 'tes123. tes12', 'fulltime. blaa.blaa.', 'admin', '2023-09-18', NULL, NULL),
(4, 'tes', '1234678-123457345', 'aferw', 'retds', NULL, 'admin', '2023-09-18', NULL, NULL),
(5, 'tes', NULL, 'tesqw1234', 'tes12345', NULL, 'admin', '2023-09-18', 'admin', '2023-09-18'),
(6, '12345', NULL, 'tesss', 'tess', NULL, 'admin', '2023-09-18', NULL, NULL),
(7, 'tes', NULL, 'tes', 'tes', NULL, 'admin', '2023-09-18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manfaat_kerja_sama`
--

DROP TABLE IF EXISTS `manfaat_kerja_sama`;
CREATE TABLE IF NOT EXISTS `manfaat_kerja_sama` (
  `id` int NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `create_at` varchar(250) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manfaat_kerja_sama`
--

INSERT INTO `manfaat_kerja_sama` (`id`, `deskripsi`, `create_at`, `create_date`, `update_at`, `update_date`) VALUES
(2, 'tes 1', 'admin', '2023-09-25', 'admin', '2023-09-26'),
(3, 'tes123', 'admin', '2023-09-25', NULL, NULL),
(4, 'asd123', 'admin', '2023-09-25', NULL, NULL),
(5, '123', 'admin', '2023-09-25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

DROP TABLE IF EXISTS `misi`;
CREATE TABLE IF NOT EXISTS `misi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `create_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `deskripsi`, `create_at`, `created_date`, `update_at`, `update_date`) VALUES
(2, 'tes123', 'admin', '2023-09-22', 'admin', '2023-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `create_at`, `create_date`, `update_at`, `update_date`) VALUES
(1, 'tes', '123456trasdfnbvsdf', NULL, NULL, NULL, NULL),
(2, 'asd', '123456trasdfnbvsdf', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
  `jabatan` varchar(250) DEFAULT NULL,
  `pesan` text,
  `created_at` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `pesan`, `created_at`, `created_date`, `foto`, `update_at`, `update_date`) VALUES
(4, 'wahyu', 'frontend', 'tessss', NULL, NULL, NULL, NULL, NULL),
(3, 'trandy1', 'web developer', 'tess', 'admin', '2023-09-21', '1695313413.png', 'admin', '2023-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `hak`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$jGe0.11iYzLqMpmtyx/AvOGJUMNgu1JT8qVuhrL1NeGYT.DMhzi0K', 1, NULL, '2023-09-13 12:35:49', '2023-09-18 02:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

DROP TABLE IF EXISTS `visi`;
CREATE TABLE IF NOT EXISTS `visi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `deskripsi` text,
  `created_by` varchar(250) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `update_at` varchar(250) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `deskripsi`, `created_by`, `created_date`, `update_at`, `update_date`) VALUES
(2, 'tesss1', 'admin', '2023-09-22', 'admin', '2023-09-22'),
(3, 'tessss', NULL, '2023-09-22', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
