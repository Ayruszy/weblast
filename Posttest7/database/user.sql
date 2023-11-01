-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 11:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post5`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `cpassword`) VALUES
(1, '', 's', '$2y$10$Yjm/1hLq9U/FZiMkKNGoNu3eT6scEsPGDYtR0PqsmkaNYwkVykg2S'),
(2, '', 'Surya', '$2y$10$BSWRMk7TBJXvfkCmQ7INs.ivap4kNTepj517J2KfylzNur.uiERf6'),
(3, '', 's', '$2y$10$b4Kfi.jY6xvFQSO/zReFHupl//RW7LXDnAJRcjl9s0yEBV7fA9W.u'),
(4, 'as', '$2y$10$Ftmb1XRn4lkNeaN4NKzEN.lU6jY/qp42L1RE4oZeSvMEt0Y0CvvmO', '$2y$10$Ftmb1XRn4lkNeaN4NKzEN.lU6jY/qp42L1RE4oZeSvMEt0Y0CvvmO'),
(5, 'sur', '$2y$10$sHQ38SbaKwmC5qONJZTSc.8tD1K.QWqmhglMcK8NpnZTE81Yn3k7K', '$2y$10$sHQ38SbaKwmC5qONJZTSc.8tD1K.QWqmhglMcK8NpnZTE81Yn3k7K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
