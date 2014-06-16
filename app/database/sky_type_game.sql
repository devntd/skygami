-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 06:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skygami`
--

-- --------------------------------------------------------

--
-- Table structure for table `sky_type_game`
--

CREATE TABLE IF NOT EXISTS `sky_type_game` (
  `game_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `game_author` bigint(20) NOT NULL,
  `game_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `game_title` text COLLATE utf8_unicode_ci NOT NULL,
  `game_slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `game_excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `game_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open',
  `game_comment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open',
  `game_ping_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'publish',
  `game_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `game_parent` bigint(20) NOT NULL DEFAULT '0',
  `game_guid` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `game_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'game',
  `game_comment_count` bigint(20) NOT NULL DEFAULT '0',
  `game_url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
