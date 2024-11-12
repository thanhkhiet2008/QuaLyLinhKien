-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2024 lúc 03:36 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan li linh kien may tinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `TenDN` varchar(50) NOT NULL,
  `MK` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `Phai` int(11) NOT NULL,
  `NgayDK` date NOT NULL,
  `IDgroup` varchar(100) NOT NULL,
  `randomKey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`TenDN`, `MK`, `HoTen`, `email`, `NgaySinh`, `Phai`, `NgayDK`, `IDgroup`, `randomKey`) VALUES
('alex', '214', 'King', 'k@gmail.com', '2014-11-12', 1, '2024-11-22', '123', '32'),
('a', '123', '', '', '0000-00-00', 0, '0000-00-00', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
