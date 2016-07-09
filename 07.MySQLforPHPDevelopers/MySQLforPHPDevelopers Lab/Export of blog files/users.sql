-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2016 at 01:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`) VALUES
(1, 'peter', '$2a$06$6hGkR4M363V5cWLqXpUsYO3PvRSuLjxjlZPM9hNgMD1kj5Oub.90S', 'Peter Marinov'),
(2, 'maria', '$2a$06$6hGkR4M363V5cWLqXpUsYO3PvRSuLjxjlZPM9hNgMD1kj5Oub.90S', 'Maria Ivanova'),
(3, 'admin', '$2a$06$6hGkR4M363V5cWLqXpUsYO3PvRSuLjxjlZPM9hNgMD1kj5Oub.90S', NULL),
(4, 'guest', NULL, NULL),
(5, 'ani', '$2a$06$6hGkR4M363V5cWLqXpUsYO3PvRSuLjxjlZPM9hNgMD1kj5Oub.90S', 'Ani Kirova'),
(6, 'teo', '$2a$06$6hGkR4M363V5cWLqXpUsYO3PvRSuLjxjlZPM9hNgMD1kj5Oub.90S', 'Teodor Rusev');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
