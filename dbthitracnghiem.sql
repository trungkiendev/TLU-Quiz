-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 31, 2020 lúc 06:34 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbthitracnghiem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_lam`
--

CREATE TABLE `bai_lam` (
  `ma_bai_thi` int(10) NOT NULL,
  `ma_sinh_vien` int(10) DEFAULT NULL,
  `ct` int(10) DEFAULT NULL,
  `tra_loi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem_tung_cau` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `ma_cau_hoi` int(10) NOT NULL,
  `noi_dung` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an_a` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an_b` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an_c` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an_d` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an_dung` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muc_do` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_tao_cau_hoi` date DEFAULT NULL,
  `ma_mon` int(10) DEFAULT NULL,
  `ma_gv_tao_cau_hoi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`ma_cau_hoi`, `noi_dung`, `dap_an_a`, `dap_an_b`, `dap_an_c`, `dap_an_d`, `dap_an_dung`, `hinh_anh`, `muc_do`, `ngay_tao_cau_hoi`, `ma_mon`, `ma_gv_tao_cau_hoi`) VALUES
(10, '12', '12', '12', '12', '12', '123', '', 'difficult', '2020-07-28', 3, 1),
(12, 'Hâha', 'hihi', 'hehe', 'hoho', 'haha', 'haha', '', 'difficult', '2020-07-28', 3, 1),
(16, 'Ai là người yêu em', 'Em', 'Bạn em', 'Người yêu em', 'Người em yêu', 'Người yêu em', '', 'easy', '2020-07-28', 3, 1),
(18, 'who is da best', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', '', 'difficult', '2020-07-28', 3, 1),
(19, 'Hello???', 'Go away!', 'Get out of here, bitch!', 'Hmm...', 'Hi', 'Hi', '', 'normal', '2020-07-28', 3, 1),
(21, 'ád', 'sad', 'ád', 'ád', 'ád', 'sad', '', 'difficult', '2020-07-28', 3, 1),
(22, 'Ubuntu dựa trên nền tảng hệ điều hành nào?', 'Linux', 'Window', 'Unix', 'Mac OS', 'Linux', '', 'normal', '2020-07-28', 4, 1),
(23, 'dfd', '12', '23,5', 'fe', 'si', '12', '', 'easy', '2020-07-29', 3, 1),
(24, 'thúy ', '12', 'c', '12', '12', '13', '', 'normal', '2020-07-29', 3, 1),
(27, 'test', '12', '12', '23', '346', '12', '', 'easy', '2020-07-29', 3, 1),
(28, 'sdsd', 'aá', 'á', 'ư', 'ưe', '1', '', 'normal', '2020-07-29', 3, 1),
(29, 'Nguyên lý Mac Lê-nin', 'A', 'B', 'C', 'D', 'A', '', 'easy', '2020-07-30', 3, 2),
(30, 'Linux là gì', 'Hệ điều hành', 'Ứng dụng', 'Trò chơi', 'Mô hình', 'Hệ điều hành', '', 'normal', '2020-07-30', 4, 2),
(31, 'Duy vật biện chứng là gì?', 'Thứ gì đó ăn được.', 'Thứ gì đó không ăn được.', 'Là một loại tồn tại siêu nhiên gì đó.', 'Không biết nữa...', 'Không biết nữa', '', 'normal', '2020-07-31', 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ca_thi`
--

CREATE TABLE `ca_thi` (
  `ma_ca_thi` int(10) NOT NULL,
  `ten_ca_thi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dot_thi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_ky_thi` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ca_thi`
--

INSERT INTO `ca_thi` (`ma_ca_thi`, `ten_ca_thi`, `dot_thi`, `ma_ky_thi`) VALUES
(3, 'Ca 2', '2', 4),
(5, 'Ca 1', '1', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_de_thi_cau_hoi`
--

CREATE TABLE `chi_tiet_de_thi_cau_hoi` (
  `ct` int(10) NOT NULL,
  `ma_de_thi` int(10) DEFAULT NULL,
  `ma_cau_hoi` int(10) DEFAULT NULL,
  `diem_tung_cau` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_sinh_vien_mot_phong`
--

CREATE TABLE `danh_sinh_vien_mot_phong` (
  `stt` int(10) NOT NULL,
  `ma_sinh_vien` int(10) DEFAULT NULL,
  `ma_ca_thi` int(10) DEFAULT NULL,
  `ma_phong_thi` int(10) DEFAULT NULL,
  `ma_giang_vien_coi_thi` int(10) DEFAULT NULL,
  `ma_giang_vien_tao_phong` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de_thi`
--

CREATE TABLE `de_thi` (
  `ma_de_thi` int(10) NOT NULL,
  `ten_de_thi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_ca_thi` int(10) DEFAULT NULL,
  `ma_mon` int(10) DEFAULT NULL,
  `ngay_ra_de` date DEFAULT NULL,
  `so_cau_hoi` int(3) DEFAULT NULL,
  `thoi_gian_lam_bai` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_nguoi_tao_ma_de` int(10) DEFAULT NULL,
  `trang_thai` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `de_thi`
--

INSERT INTO `de_thi` (`ma_de_thi`, `ten_de_thi`, `ma_ca_thi`, `ma_mon`, `ngay_ra_de`, `so_cau_hoi`, `thoi_gian_lam_bai`, `ma_nguoi_tao_ma_de`, `trang_thai`) VALUES
(15, 'Cơ sở dữ liệu 1', 3, 3, '2020-07-28', 20, '20', 1, 'public'),
(16, 'Linux 1', 3, 4, '2020-07-29', 20, '30', 1, 'public'),
(17, 'Cơ sở dữ liệu', 3, 3, '2020-07-29', 10, '60', 1, 'public'),
(18, 'Cơ sở dữ liệu', 3, 3, '2020-07-29', 20, '10', 1, 'public'),
(24, 'Cơ sở dữ liệu', 3, 3, '2020-07-29', 20, '20', 2, 'public'),
(27, 'Cơ sở dữ liệu', 3, 3, '2020-07-31', 20, '20', 2, 'private'),
(29, 'Cơ sở dữ liệu', 3, 3, '2020-07-31', 20, '20', 2, 'private');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giang_vien`
--

CREATE TABLE `giang_vien` (
  `ma_giang_vien` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `mat_khau` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_quyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_khoa` int(10) DEFAULT NULL,
  `ma_nguoi_tao_tk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giang_vien`
--

INSERT INTO `giang_vien` (`ma_giang_vien`, `email`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `chuc_vu`, `sdt`, `mat_khau`, `ten_quyen`, `ma_khoa`, `ma_nguoi_tao_tk`) VALUES
(1, 'ad@gmail.com', 'Pham Tuan', '2014-05-07', 'nam', 'hanoi', 'Giang vien', '2343345643', '123', 'admin', 1, 1),
(2, 'gv@gmail.com', 'Tên', '2020-06-02', 'nu', 'Ha Noi', 'GV', '03454362', '123', 'teacher', 3, 2),
(14, 'gv1@gmail.com', 'Trung Kiên', '2019-11-01', 'nam', 'Ninh Bình', 'GV', '0374286634', '123', '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `ma_Khoa` int(10) NOT NULL,
  `ten_Khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_bat_dau` date DEFAULT NULL,
  `ngay_ket_thuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`ma_Khoa`, `ten_Khoa`, `ngay_bat_dau`, `ngay_ket_thuc`) VALUES
(1, 'K59', '2017-09-05', '2021-09-05'),
(2, 'a', '0020-07-09', '0020-07-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_lv`
--

CREATE TABLE `khoa_lv` (
  `ma_khoa` int(10) NOT NULL,
  `ten_khoa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_lv`
--

INSERT INTO `khoa_lv` (`ma_khoa`, `ten_khoa`) VALUES
(1, 'Khoa CNTT'),
(3, 'Khoa Công Trình'),
(2, 'Khoa Kinh Tế'),
(4, 'Khoa Kỹ Thuật Ô Tô');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ky_thi`
--

CREATE TABLE `ky_thi` (
  `ma_ky_thi` int(10) NOT NULL,
  `ten_ky_thi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_bat_dau` date DEFAULT NULL,
  `ngay_ket_thuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ky_thi`
--

INSERT INTO `ky_thi` (`ma_ky_thi`, `ten_ky_thi`, `ngay_bat_dau`, `ngay_ket_thuc`) VALUES
(4, 'HK1', '2020-07-31', '2020-08-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `ma_lop` int(10) NOT NULL,
  `ten_lop` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_khoa` int(10) DEFAULT NULL,
  `ma_khoa_lv` int(10) DEFAULT NULL,
  `ma_giang_vien` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`ma_lop`, `ten_lop`, `ma_khoa`, `ma_khoa_lv`, `ma_giang_vien`) VALUES
(1, '59PM2', 1, 1, 1),
(3, '59PM1', 1, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `ma_mon` int(10) NOT NULL,
  `ten_mon` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_tin_chi` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`ma_mon`, `ten_mon`, `so_tin_chi`) VALUES
(3, 'Cơ sở dữ liệu', 8),
(4, 'Linux', 3),
(9, 'Tư tưởng Mac - Lênin', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_thi`
--

CREATE TABLE `phong_thi` (
  `ma_phong_thi` int(10) NOT NULL,
  `ten_phong_thi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_sinh_vien` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinh_vien`
--

CREATE TABLE `sinh_vien` (
  `ma_sinh_vien` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `mat_khau` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_quyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_lop` int(10) DEFAULT NULL,
  `ma_nguoi_tao_tk` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinh_vien`
--

INSERT INTO `sinh_vien` (`ma_sinh_vien`, `email`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `chuc_vu`, `sdt`, `mat_khau`, `ten_quyen`, `ma_lop`, `ma_nguoi_tao_tk`) VALUES
(1, 'sv@gmail.com', 'Kien', '2020-02-04', 'nam', 'Ha Noi', 'sinh viên', '0129433', '123', '', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_lam`
--
ALTER TABLE `bai_lam`
  ADD PRIMARY KEY (`ma_bai_thi`),
  ADD KEY `ct` (`ct`),
  ADD KEY `ma_sinh_vien` (`ma_sinh_vien`);

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`ma_cau_hoi`),
  ADD UNIQUE KEY `noi_dung` (`noi_dung`),
  ADD KEY `ma_mon` (`ma_mon`),
  ADD KEY `ma_gv_tao_cau_hoi` (`ma_gv_tao_cau_hoi`);

--
-- Chỉ mục cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD PRIMARY KEY (`ma_ca_thi`),
  ADD KEY `ma_ky_thi` (`ma_ky_thi`);

--
-- Chỉ mục cho bảng `chi_tiet_de_thi_cau_hoi`
--
ALTER TABLE `chi_tiet_de_thi_cau_hoi`
  ADD PRIMARY KEY (`ct`),
  ADD KEY `ma_de_thi` (`ma_de_thi`),
  ADD KEY `ma_cau_hoi` (`ma_cau_hoi`);

--
-- Chỉ mục cho bảng `danh_sinh_vien_mot_phong`
--
ALTER TABLE `danh_sinh_vien_mot_phong`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `ma_sinh_vien` (`ma_sinh_vien`),
  ADD KEY `ma_ca_thi` (`ma_ca_thi`),
  ADD KEY `ma_phong_thi` (`ma_phong_thi`),
  ADD KEY `ma_giang_vien_coi_thi` (`ma_giang_vien_coi_thi`),
  ADD KEY `ma_giang_vien_tao_phong` (`ma_giang_vien_tao_phong`);

--
-- Chỉ mục cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`ma_de_thi`),
  ADD KEY `ma_ca_thi` (`ma_ca_thi`),
  ADD KEY `ma_mon` (`ma_mon`),
  ADD KEY `ma_nguoi_tao_ma_de` (`ma_nguoi_tao_ma_de`);

--
-- Chỉ mục cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`ma_giang_vien`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ten_quyen` (`ten_quyen`),
  ADD KEY `ma_khoa` (`ma_khoa`),
  ADD KEY `ma_nguoi_tao_tk` (`ma_nguoi_tao_tk`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`ma_Khoa`),
  ADD UNIQUE KEY `ten_Khoa` (`ten_Khoa`);

--
-- Chỉ mục cho bảng `khoa_lv`
--
ALTER TABLE `khoa_lv`
  ADD PRIMARY KEY (`ma_khoa`),
  ADD UNIQUE KEY `ten_khoa` (`ten_khoa`);

--
-- Chỉ mục cho bảng `ky_thi`
--
ALTER TABLE `ky_thi`
  ADD PRIMARY KEY (`ma_ky_thi`),
  ADD UNIQUE KEY `ten_ky_thi` (`ten_ky_thi`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`ma_lop`),
  ADD KEY `ma_khoa` (`ma_khoa`),
  ADD KEY `ma_khoa_lv` (`ma_khoa_lv`),
  ADD KEY `ma_giang_vien` (`ma_giang_vien`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`ma_mon`),
  ADD UNIQUE KEY `ten_mon` (`ten_mon`);

--
-- Chỉ mục cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  ADD PRIMARY KEY (`ma_phong_thi`),
  ADD UNIQUE KEY `ten_phong_thi` (`ten_phong_thi`);

--
-- Chỉ mục cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD PRIMARY KEY (`ma_sinh_vien`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ten_quyen` (`ten_quyen`),
  ADD KEY `ma_lop` (`ma_lop`),
  ADD KEY `ma_nguoi_tao_tk` (`ma_nguoi_tao_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_lam`
--
ALTER TABLE `bai_lam`
  MODIFY `ma_bai_thi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `ma_cau_hoi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  MODIFY `ma_ca_thi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_de_thi_cau_hoi`
--
ALTER TABLE `chi_tiet_de_thi_cau_hoi`
  MODIFY `ct` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_sinh_vien_mot_phong`
--
ALTER TABLE `danh_sinh_vien_mot_phong`
  MODIFY `stt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  MODIFY `ma_de_thi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `ma_giang_vien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `ma_Khoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khoa_lv`
--
ALTER TABLE `khoa_lv`
  MODIFY `ma_khoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ky_thi`
--
ALTER TABLE `ky_thi`
  MODIFY `ma_ky_thi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `lop`
--
ALTER TABLE `lop`
  MODIFY `ma_lop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `mon`
--
ALTER TABLE `mon`
  MODIFY `ma_mon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phong_thi`
--
ALTER TABLE `phong_thi`
  MODIFY `ma_phong_thi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  MODIFY `ma_sinh_vien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_lam`
--
ALTER TABLE `bai_lam`
  ADD CONSTRAINT `bai_lam_ibfk_1` FOREIGN KEY (`ct`) REFERENCES `chi_tiet_de_thi_cau_hoi` (`ct`) ON DELETE CASCADE,
  ADD CONSTRAINT `bai_lam_ibfk_2` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `cau_hoi_ibfk_1` FOREIGN KEY (`ma_mon`) REFERENCES `mon` (`ma_mon`) ON DELETE CASCADE,
  ADD CONSTRAINT `cau_hoi_ibfk_2` FOREIGN KEY (`ma_gv_tao_cau_hoi`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ca_thi`
--
ALTER TABLE `ca_thi`
  ADD CONSTRAINT `ca_thi_ibfk_1` FOREIGN KEY (`ma_ky_thi`) REFERENCES `ky_thi` (`ma_ky_thi`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chi_tiet_de_thi_cau_hoi`
--
ALTER TABLE `chi_tiet_de_thi_cau_hoi`
  ADD CONSTRAINT `chi_tiet_de_thi_cau_hoi_ibfk_1` FOREIGN KEY (`ma_de_thi`) REFERENCES `de_thi` (`ma_de_thi`) ON DELETE CASCADE,
  ADD CONSTRAINT `chi_tiet_de_thi_cau_hoi_ibfk_2` FOREIGN KEY (`ma_cau_hoi`) REFERENCES `cau_hoi` (`ma_cau_hoi`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `danh_sinh_vien_mot_phong`
--
ALTER TABLE `danh_sinh_vien_mot_phong`
  ADD CONSTRAINT `danh_sinh_vien_mot_phong_ibfk_1` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_sinh_vien_mot_phong_ibfk_2` FOREIGN KEY (`ma_ca_thi`) REFERENCES `ca_thi` (`ma_ca_thi`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_sinh_vien_mot_phong_ibfk_3` FOREIGN KEY (`ma_phong_thi`) REFERENCES `phong_thi` (`ma_phong_thi`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_sinh_vien_mot_phong_ibfk_4` FOREIGN KEY (`ma_giang_vien_coi_thi`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_sinh_vien_mot_phong_ibfk_5` FOREIGN KEY (`ma_giang_vien_tao_phong`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `de_thi`
--
ALTER TABLE `de_thi`
  ADD CONSTRAINT `de_thi_ibfk_1` FOREIGN KEY (`ma_ca_thi`) REFERENCES `ca_thi` (`ma_ca_thi`) ON DELETE CASCADE,
  ADD CONSTRAINT `de_thi_ibfk_2` FOREIGN KEY (`ma_mon`) REFERENCES `mon` (`ma_mon`) ON DELETE CASCADE,
  ADD CONSTRAINT `de_thi_ibfk_3` FOREIGN KEY (`ma_nguoi_tao_ma_de`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD CONSTRAINT `giang_vien_ibfk_1` FOREIGN KEY (`ma_khoa`) REFERENCES `khoa_lv` (`ma_khoa`) ON DELETE CASCADE,
  ADD CONSTRAINT `giang_vien_ibfk_2` FOREIGN KEY (`ma_nguoi_tao_tk`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`ma_khoa`) REFERENCES `khoa` (`ma_Khoa`) ON DELETE CASCADE,
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`ma_khoa_lv`) REFERENCES `khoa_lv` (`ma_khoa`) ON DELETE CASCADE,
  ADD CONSTRAINT `lop_ibfk_3` FOREIGN KEY (`ma_giang_vien`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD CONSTRAINT `sinh_vien_ibfk_1` FOREIGN KEY (`ma_lop`) REFERENCES `lop` (`ma_lop`) ON DELETE CASCADE,
  ADD CONSTRAINT `sinh_vien_ibfk_2` FOREIGN KEY (`ma_nguoi_tao_tk`) REFERENCES `giang_vien` (`ma_giang_vien`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
