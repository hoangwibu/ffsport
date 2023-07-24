-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 12:43 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_kh`, `ma_hh`, `ngay_bl`) VALUES
(1, 'binh luan dau tien', 2, 3, '2022-09-22 02:16:06'),
(6, 'hello would', 10, 1, '2022-12-13 03:18:34'),
(9, 'hihi', 10, 13, '2022-12-13 03:42:50'),
(15, 'hahahah', 10, 1, '2022-12-13 03:46:42'),
(16, 'wtf', 10, 1, '2022-12-13 03:47:33'),
(17, 'giay gi day?', 10, 19, '2022-12-13 03:52:11'),
(18, 'test lan thu n', 10, 19, '2022-12-13 03:53:20'),
(19, 'helloo', 2, 20, '2022-12-13 04:00:26'),
(21, 'ok', 2, 19, '2022-12-13 05:16:40'),
(22, 'hello', 2, 19, '2022-12-13 05:40:44'),
(23, 'heheheheheh', 10, 1, '2022-12-13 13:27:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `tong_tien` float NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `trang_thai` varchar(20) NOT NULL DEFAULT 'Chưa xác nhận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ma_kh`, `sdt`, `dia_chi`, `tong_tien`, `ngay_tao`, `trang_thai`) VALUES
(1, 2, '0922022525', 'da nang', 9999, '2022-12-13 09:36:52', 'Đang giao'),
(2, 11, '0999999', 'hoang', 523520, '2022-12-14 13:04:19', 'Đã giao'),
(4, 11, '08888888', 'rich88', 6847040, '2022-12-14 13:22:07', 'Đã giao'),
(5, 11, '077777773', 'tét', 2323440, '2022-12-14 13:32:05', 'Đang lấy hàng'),
(6, 10, '0999999', 'hhh', 100000, '2022-12-15 06:05:14', 'Chưa xác nhận'),
(7, 10, '0922022858', 'Hoa Khuong, Hoa Vang, Da Nang', 375280, '2022-12-15 06:12:19', 'Chưa xác nhận'),
(8, 10, 'dat hang la', 'nhà tui', 2596600, '2022-12-15 11:37:28', 'Đang lấy hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(150) NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL DEFAULT 0,
  `hinh` varchar(200) NOT NULL,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `mo_ta` varchar(1000) NOT NULL,
  `dac_biet` varchar(100) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(1, 'ADIDAS X SPEEDPORTAL .3 FG AL RIHLA - CLEAR AQUA/POWER BLUE/SOLAR YELLOW', 100000, 0, '1-01-3-02-02-02-01-01-01-2-02-2-01-01-01-02-02-01-01-01-02-02-02-02-02_bfde532d9d6d49f3ad9872a60c40ac7a_1024x1024.webp', '2022-11-17', 'abc', 'Tiền đạo', 51, 6),
(3, 'Giay B', 127000, 0, '1-01-3-02-02-02-01-01-01-2-02-2-01-01-01-02-02-01-01-01-02-02-02-02-01_3c37836e11fb43da94f7b28e269633d7_1024x1024.webp', '2022-11-20', 'abccc xyz\"\"', '', 2, 1),
(13, 'Giay A', 252000, 20, '02-01-02-4-01-01-01-3-02-02-02-01-01-01-2-02-2-01-01-01-02-02-01-01-01_cfa857a02f2248b3b51c6265a196faae_1024x1024.webp', '2022-11-04', '5252\"\"\"', 'Hậu vệ', 8, 1),
(16, 'giay 5', 20000, 0, '3c93cd64e0ab40fab8e78658eb0a4348_1e371b94368c42ea9046c0d192217ec9_1024x1024.jpeg', '2022-11-04', 'mo ta\"', 'Hậu vệ', 1, 8),
(19, 'MIZUNO MORELIA NEO III PRO TF PASSION RED - HIGH RISK RED/WHITE', 2700000, 15, '5ef2a877e15b463488ab9b8a5813e7b4_fb3cb8713a85408e8396a55089b5160c_1024x1024.webp', '2022-11-19', 'Chưa có mô tả\"', '', 48, 1),
(20, 'MIZUNO MORELIA NEO III PRO AG TIGER COLOR - RACING YELLOW/BLACK', 3000000, 0, '02-01-02-4-01-01-01-3-02-02-02-01-01-01-2-02-2-01-01-01-02-02-02-02-01_f43b239a94bb4fd789ebc9961f16b7cb_1024x1024.webp', '2022-11-12', 'Sáng tạo thiết kế là không bao giờ ngừng nghỉ trong thời trang thể thao. Những hấp dẫn đến từ những thiết kế độc đáo và bắt mắt luôn lôi kéo được nhiều sự chú ý. Đặc biệt, năm nay với biểu tượng là loài hổ dũng mãnh, Mizuno mới đây trình làng giày đá bóng Mizuno Morelia Neo III PRO Tiger Color với hai phiên bản màu sắc WHITE/BLACK/YELLOW và YELLOW/BLACK.', 'Tiền vệ', 14, 1),
(21, 'MIZUNO MORELIA NEO III PRO AG TIGER COLOR - RACING YELLOW/BLACK', 127000, 12, 'bd0272db4c844fe9b168baef1a5c5dd7_e7911b98016c49b596aa71dc8c5ecb29_1024x1024.webp', '2022-11-04', 'abc\"\"\"\"', 'Tiền vệ cánh', 12, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_dh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_dh`, `ma_hh`, `so_luong`) VALUES
(1, 19, 5),
(1, 1, 2),
(4, 1, 4),
(4, 21, 4),
(4, 20, 2),
(5, 1, 2),
(5, 21, 19),
(6, 1, 1),
(7, 21, 3),
(7, 16, 2),
(8, 1, 1),
(8, 19, 1),
(8, 13, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(20) NOT NULL,
  `hinh` varchar(200) NOT NULL DEFAULT 'user.jpg',
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email`, `mat_khau`, `hinh`, `vai_tro`, `kich_hoat`) VALUES
(2, 'Đinh Ngọc Hoàng', 'ngochoang27810@gmail.com', '222', 'simple-sunset-wallpaper.jpg', 1, 1),
(7, 'hoang admin 2', 'ngochoang2@gmail.com', '123', 'user.jpg', 1, 1),
(10, 'admin', 'admin@gmail.com', '1', 'wallpaper-4k.png', 1, 1),
(11, 'hoang user', 'hoang@gmail.com', '123', 'user.jpg', 0, 1),
(12, 'Long', 'long@gmail.com', '123', 'MeoKhoc.jpg', 0, 1),
(13, 'Le van quan', 'quanle@gmail.com', '23233', '119994758_113472000505788_6773150532900031920_n.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Giày đá banh NIKE'),
(3, 'Giày đá banh ADIDAS'),
(6, 'Giày đá banh PUMA'),
(8, 'Giày cỏ tự nhiên'),
(9, 'Giày cỏ nhân tạo'),
(10, 'Giày FUTSAL'),
(11, 'Giày đá banh ASICS'),
(12, 'Giày đá banh trẻ em');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD KEY `ma_dh` (`ma_dh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `ma_loai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
