-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2022 lúc 05:44 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlysanpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `thumbnail`, `price`, `percent`) VALUES
(1, 'RX-0 UNICORN GUNDAM 02 BANSHEE (SD/BB)', '/doan/images/hinh10.png', 549000, 20),
(2, 'XXXG-00W0 WING GUNDAM ZERO EW (RG-1/144)', '/doan/images/hinh11.png', 680000, 20),
(3, 'AILE STRIKE GUNDAM VER.RM (MG - 1/100)', '/doan/images/hinh12.png', 1150000, 50),
(4, 'UNICORN GUNDAM (PG - 1/60)', '/doan/images/hinh13.png', 6080000, 70),
(5, 'UNICORN GUNDAM 02 BANSHEE NORN (PG - 1/60)', '/doan/images/hinh14.png', 6880000, 70),
(6, 'WING GUNDAM ZERO EW VER. KA (MG - 1/100)', '/doan/images/hinh15.png', 1480000, 50),
(7, 'GNT-0000 00 QAN[T] - RG - 1/144', '/doan/images/hinh16.png', 680000, 20),
(8, 'GUNDAM KYRIOS (HG - 1/144)', '/doan/images/hinh17.png', 440000, 20),
(9, 'BEGUIR-BEU - HG 1/144 - GUNDAM THE WITCH FROM MERCURY', '/doan/images/hinh18.png', 420000, 20),
(10, 'MG 1/100 Eclipse Gundam-Gundam', '/doan/images/hinh37.jpg', 1450000, 50),
(11, 'PG GUNDAM STRIKE FREEDOM-Gundam ', '/doan/images/hinh38.jpg', 6900000, 70);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
