-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060553_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` varchar(20) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `namsinh` varchar(10) NOT NULL,
  `nghenghiep` varchar(20) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
('1', 'Douglas', 'Fem', '1999', 'Student', '0000-00-00', '0000-00-00', '190.129.222.166'),
('10', 'Gabriele', 'Mal', '1989', 'Doctor', '0000-00-00', '0000-00-00', '215.36.122.53'),
('11', 'Elsa', 'Fem', '1995', 'Student', '0000-00-00', '0000-00-00', '178.157.172.221'),
('12', 'Nikita', 'Mal', '1999', 'NV', '0000-00-00', '0000-00-00', '111.11.84.142'),
('13', 'Dori', 'Mal', '1977', 'Doctor', '0000-00-00', '0000-00-00', '120.172.138.1'),
('14', 'Karita', 'Fem', '2000', 'Bigender', '0000-00-00', '0000-00-00', '90.198.86.231'),
('15', 'Cybil', 'Fem', '1998', 'S', '0000-00-00', '0000-00-00', '79.25.238.92'),
('2', 'Kelley', 'Fem', '1997', 'NV', '0000-00-00', '0000-00-00', '137.143.194.174'),
('3', 'Otho', 'Mal', '1988', 'Genderfluid', '0000-00-00', '0000-00-00', '229.202.9.147'),
('4', 'Mirabella', 'Fem', '1976', 'Doctor', '0000-00-00', '0000-00-00', '141.45.79.84'),
('5', 'Vevay', 'Nam', '1978', 'teacher', '0000-00-00', '0000-00-00', '44.59.252.178'),
('6', 'Archie', 'Mal', '1999', 'Student', '0000-00-00', '0000-00-00', '94.144.42.128'),
('7', 'Farlie', 'Fem', '2000', 'Student', '0000-00-00', '0000-00-00', '65.197.230.208'),
('8', 'Neilla', 'Mal', '1997', 'NV', '0000-00-00', '0000-00-00', '183.61.142.131'),
('9', 'Allyn', 'Fem', '1998', 'NV', '0000-00-00', '0000-00-00', '166.193.134.74');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
