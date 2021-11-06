-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 06:44 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `pass`) VALUES
('admin', '123456'),
('admin1', '123456'),
('admin2', '08062001'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` varchar(10) NOT NULL,
  `Hoten` varchar(30) NOT NULL,
  `IDPB` varchar(10) NOT NULL,
  `Diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES
('NV001', 'Nguyen Van A', 'PB001', 'Nui Thanh, Da Nang'),
('NV002', 'Tran Thi B', 'PB002', 'Ngu Hanh Son'),
('NV003', 'Luon Thi C', 'PB003', 'Da Nang'),
('NV004', 'Le Van F', 'PB002', 'Da Lat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `IDPB` varchar(10) NOT NULL,
  `Tenpb` varchar(20) NOT NULL,
  `Mota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`IDPB`, `Tenpb`, `Mota`) VALUES
('PB001', 'Phong Ban 0001', 'AAA'),
('PB002', 'Phong ban 002', 'DEF'),
('PB003', 'Phong ban 03', 'GHI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table1`
--

CREATE TABLE `table1` (
  `maso` int(11) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `ngaysinh` date NOT NULL,
  `nghenghiep` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table1`
--

INSERT INTO `table1` (`maso`, `hoten`, `ngaysinh`, `nghenghiep`) VALUES
(1, 'Nguyen Van A', '2011-10-10', 'Hoc sinh'),
(2, 'Tran Van B', '2011-10-13', 'Hoc sinh'),
(3, 'Ngo Van C', '2013-10-17', 'Hoc sinh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNV`),
  ADD KEY `IDPB` (`IDPB`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`IDPB`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`IDPB`) REFERENCES `phongban` (`IDPB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
