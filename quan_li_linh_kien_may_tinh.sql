-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2024 lúc 02:45 AM
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
CREATE DATABASE IF NOT EXISTS `quan li linh kien may tinh` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quan li linh kien may tinh`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhkien`
--

CREATE TABLE `linhkien` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `NgayNhap` date NOT NULL,
  `NgayXuat` date NOT NULL,
  `GiaSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linhkien`
--

INSERT INTO `linhkien` (`MaSP`, `TenSP`, `NgayNhap`, `NgayXuat`, `GiaSP`) VALUES
('A1', 'RTX 3080 Ti', '2022-10-31', '2024-10-14', 36000000),
('A2', 'logitech g915', '2023-10-09', '2023-10-28', 3250000),
('B1', 'RTX', '2023-10-21', '2024-06-03', 4000000),
('C2', 'abc', '2024-01-14', '2024-05-14', 42000000),
('D1', 'abc', '0000-00-00', '2024-12-05', 42000000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `linhkien`
--
ALTER TABLE `linhkien`
  ADD PRIMARY KEY (`MaSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
