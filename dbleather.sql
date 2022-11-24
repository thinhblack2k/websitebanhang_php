-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th10 12, 2022 lúc 09:24 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietdd`
--

CREATE TABLE `tblchitietdd` (
  `IdCTDD` int(11) NOT NULL,
  `IdSP` int(11) DEFAULT NULL,
  `IdDD` int(11) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblchitietdd`
--

INSERT INTO `tblchitietdd` (`IdCTDD`, `IdSP`, `IdDD`, `SoLuong`) VALUES
(1, 1, 3, 3),
(2, 2, 1, 5),
(3, 3, 2, 5),
(4, 4, 3, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietpnk`
--

CREATE TABLE `tblchitietpnk` (
  `IdCTPNK` int(11) NOT NULL,
  `IdSP` int(11) DEFAULT NULL,
  `IdPNK` int(11) DEFAULT NULL,
  `SoLuongNhap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblchitietpnk`
--

INSERT INTO `tblchitietpnk` (`IdCTPNK`, `IdSP`, `IdPNK`, `SoLuongNhap`) VALUES
(1, 1, 2, 10),
(2, 2, 1, 15),
(3, 2, 3, 9),
(6, 3, 4, 15),
(7, 4, 4, 9),
(8, 5, 3, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldondat`
--

CREATE TABLE `tbldondat` (
  `IdDD` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL,
  `LoaiDonDat` varchar(50) DEFAULT NULL,
  `GmailKH` varchar(50) DEFAULT NULL,
  `GmailNV` varchar(50) DEFAULT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbldondat`
--

INSERT INTO `tbldondat` (`IdDD`, `ThoiGian`, `LoaiDonDat`, `GmailKH`, `GmailNV`, `TongTien`) VALUES
(1, '2022-03-01', 'Vận đơn', 'dhquan@gmail.com', 'lvnhat@gmail.com', 500000),
(2, '2022-01-02', 'Đơn đặt', 'dhthinh@gmail.com', 'nbnam@gmail.com', 500000),
(3, '2022-03-03', 'Vận đơn', 'dmduc@gmail.com', 'nbtien@gmail.com', 500000),
(4, '2022-09-01', 'Đơn đặt', 'dvhiep@gmail.com', 'ntkhanh@gmail.com', 500000),
(5, '2022-03-04', 'Vận đơn', 'hvthang@gmail.com', 'ntphuong@gmail.com', 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaisp`
--

CREATE TABLE `tblloaisp` (
  `IdLoaiSP` int(11) NOT NULL,
  `TenLoai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblloaisp`
--

INSERT INTO `tblloaisp` (`IdLoaiSP`, `TenLoai`) VALUES
(1, 'túi'),
(2, 'balo'),
(3, 'ví');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblphieunk`
--

CREATE TABLE `tblphieunk` (
  `IdPNK` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL,
  `GmailNCC` varchar(50) DEFAULT NULL,
  `GmailNV` varchar(50) DEFAULT NULL,
  `TongTien` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblphieunk`
--

INSERT INTO `tblphieunk` (`IdPNK`, `ThoiGian`, `GmailNCC`, `GmailNV`, `TongTien`) VALUES
(1, '2022-01-01', 'hathangtt@gmail.com', 'lvnhat@gmail.com', 1230000),
(2, '2022-02-02', 'danghuuthinh@gmail.com', 'nbtien@gmail.com', 2230000),
(3, '2022-03-03', 'danghuuthinh@gmail.com', 'ntphuong@gmail.com', 1230000),
(4, '2022-01-01', 'hathangtt@gmail.com', 'lvnhat@gmail.com', 1200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `IdSP` int(11) NOT NULL,
  `TenSP` varchar(50) DEFAULT NULL,
  `IdTH` int(11) DEFAULT NULL,
  `IdLoaiSP` int(11) DEFAULT NULL,
  `Mau` varchar(30) DEFAULT NULL,
  `GiaNhap` float DEFAULT NULL,
  `GiaBan` float DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `HinhAnh` varchar(50) DEFAULT NULL,
  `MoTa` varchar(50) DEFAULT NULL,
  `KichThuoc` varchar(50) DEFAULT NULL,
  `KhuyenMai` varchar(20) DEFAULT NULL,
  `SLBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`IdSP`, `TenSP`, `IdTH`, `IdLoaiSP`, `Mau`, `GiaNhap`, `GiaBan`, `SoLuong`, `HinhAnh`, `MoTa`, `KichThuoc`, `KhuyenMai`, `SLBan`) VALUES
(1, 'Túi đeo chéo cao cấp', 1, 1, 'đen', 320000, 400000, 9, 'tui1.jpg', 'túi chắc chắn , tốt , bền , đẹp và giá cả hợp lý', '15*25', '20', 7),
(2, 'Túi da đeo trước ngực', 2, 1, 'đen', 220000, 300000, 9, 'tui2.jpg', 'túi chắc chắn , tốt , bền , đẹp , giá cả hợp lý', '25*35', '25', 7),
(3, 'Túi da đeo chéo dáng nhỏ gọn', 3, 1, 'nâu đỏ', 320000, 400000, 9, 'tui3.jpg', 'túi chắc chắn , tốt , bền và đẹp', '25*35', '20', 5),
(4, 'balo da cao cấp', 4, 2, 'xanh', 350000, 450000, 10, 'balo1.jpg', 'balo đẹp , bền và giá cả phải chăng', '15*25', '10', 5),
(5, 'balo da thường', 6, 2, 'đen', 320000, 400000, 5, 'balo2.jpg', 'balo đẹp , bền và giá cả phải chăng', '25*25', '15', 7),
(6, 'balo thời trang', 4, 2, 'xám , nâu , trắng', 350000, 450000, 15, 'balo3.jpg', 'balo bền , đẹp , giá cả hợp lý', '25*25', '5', 10),
(7, 'balo da thời trang cao cấp', 3, 2, 'vàng', 350000, 450000, 10, 'balo4.jpg', 'balo bền , đẹp , giá cả hợp lý', '25*25', '15', 6),
(8, 'balo da thời trang cao cấp mẫu 2018', 3, 2, 'đen', 450000, 550000, 5, 'balo5.jpg', 'balo bền , đẹp , giá cả hợp lý', '20*25', '5', 10),
(9, 'balo da 100% từ da bò', 5, 2, 'vàng', 350000, 450000, 10, 'balo6.jpg', 'balo bền , đẹp , giá cả hợp lý', '25*25', '15', 10),
(10, 'ví nam mini', 3, 3, 'đen', 250000, 350000, 10, 'vi1.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '5', 10),
(11, 'ví da cá sấu', 3, 3, 'đen', 350000, 450000, 10, 'vi2.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '8', 8),
(12, 'ví da khâu tay', 3, 3, 'vàng xạm', 550000, 650000, 10, 'vi3.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '8', 8),
(13, 'ví da dáng đứng', 3, 3, 'đen', 250000, 350000, 10, 'vi4.jpg', 'ví bền , đẹp , giá cả hợp lý', '15*15', '15', 10),
(14, 'ví cầm tay', 3, 3, 'xám', 250000, 350000, 10, 'vi5.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '15', 10),
(15, 'túi đeo chéo', 1, 1, 'đen', 350000, 450000, 10, 'tui4.jpg', 'túi bền , đẹp , giá cả hợp lý', '15*25', '10', 6),
(16, 'túi cầm tay', 3, 1, 'vàng xám', 550000, 650000, 10, 'tui5.jpg', 'túi bền , đẹp , giá cả hợp lý', '15*20', '13', 7),
(17, 'túi cầm tay cao cấp', 3, 1, 'caro nhiều màu', 250000, 350000, 10, 'tui6.jpg', 'túi bền , đẹp , giá cả hợp lý', '15*25', '10', 8),
(18, 'ví da handmade', 5, 3, 'xám nâu', 250000, 300000, 8, 'vi6.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '10', 5),
(19, 'ví da cá sấu cao cấp', 2, 3, 'xám nâu', 350000, 450000, 10, 'vi7.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '10', 7),
(20, 'ví da dáng ngang nhập khẩu', 5, 3, 'xanh', 550000, 650000, 15, 'vi8.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '8', 8),
(21, 'ví da kéo khóa dáng ngang', 4, 3, 'đen', 200000, 300000, 7, 'vi9.jpg', 'ví bền , đẹp , giá cả hợp lý', '15*20', '13', 6),
(22, 'ví da dáng đứng', 3, 3, 'vàng', 300000, 350000, 5, 'vi10.jpg', 'ví bền , đẹp , giá cả hợp lý', '10*15', '13', 6),
(23, 'túi đeo chéo da thật', 2, 1, 'trắng , xám , nâu', 350000, 450000, 15, 'vi7.jpg', 'túi bền , đẹp , giá cả hợp lý', '10*15', '10', 10),
(24, 'túi da công sở', 1, 1, 'vàng xạm', 250000, 350000, 27, 'vi8.jpg', 'túi bền , đẹp , giá cả hợp lý', '15*25', '8', 15),
(25, 'balo công sở', 1, 2, 'nhiều màu kết hợp', 450000, 500000, 20, 'balo7.jpg', 'balo bền , nhỏ gọn , giá cả hợp lý', '25*25', '10', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltaikhoan`
--

CREATE TABLE `tbltaikhoan` (
  `Gmail` varchar(50) NOT NULL,
  `TenTK` varchar(50) DEFAULT NULL,
  `MatKhau` varchar(50) DEFAULT NULL,
  `LoaiTK` varchar(50) DEFAULT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbltaikhoan`
--

INSERT INTO `tbltaikhoan` (`Gmail`, `TenTK`, `MatKhau`, `LoaiTK`, `DiaChi`, `SDT`) VALUES
('anhkhanh184@gmail.com', 'Ankhanh', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'Hà Tây', '09232321321'),
('danghuuthinh@gmail.com', 'hathang', '12345', 'ncc', 'ninh binh', '0394236754'),
('dhquan@gmail.com', 'ha nam', '12345', 'khach hang', 'ha nam', '0394106754'),
('dhthinh@gmail.com', 'binh dinh', '12345', 'khach hang', 'ha nam', '0394106754'),
('dmduc@gmail.com', 'hai duong', '12345', 'khach hang', 'ha nam', '0394106754'),
('dvhiep@gmail.com', 'thai binh', '12345', 'khach hang', 'ha nam', '0394106754'),
('hanam2401@gmail.com', 'ha nam', '12345', 'khach hang', 'ha nam', '0394106754'),
('hathang2401@gmail.com', 'hathang', '12345', 'khach hang', 'hai duong', '0394106754'),
('hathang2k1@gmail.com', 'hathang', '12345', 'admin', 'nghe an', '0394106754'),
('hathangtt@gmail.com', 'hathang', '12345', 'ncc', 'nghe an', '0394106755'),
('huuthinh0609@gmail.com', 'huuthinh', '12345', 'admin', 'ninh binh', '0394106754'),
('hvthang@gmail.com', 'ha nam', '12345', 'khach hang', 'ha nam', '0394106754'),
('lvnhat@gmail.com', 'ha noi', '12345', 'nhan vien', 'ha nam', '0394106754'),
('nbnam@gmail.com', 'da nang', '12345', 'nhan vien', 'ha nam', '0394106754'),
('nbtien@gmail.com', 'ha nam', '12345', 'nhan vien', 'ha nam', '0394106754'),
('ntkhanh@gmail.com', 'ha nam', '12345', 'nhan vien', 'ha nam', '0394106754'),
('ntphuong@gmail.com', 'ha nam', '12345', 'nhan vien', 'ha nam', '0394106754'),
('thinh191204033@gmail.com', 'Thinh Đặng', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'NinhBinh', '0979359018'),
('thinhblack@gmail.com', 'Thinh Đặng', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'NinhBinh', '0979359018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblthuonghieu`
--

CREATE TABLE `tblthuonghieu` (
  `IdTH` int(11) NOT NULL,
  `TenTH` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblthuonghieu`
--

INSERT INTO `tblthuonghieu` (`IdTH`, `TenTH`) VALUES
(1, 'Gucci'),
(2, 'Adidas'),
(3, 'Nike'),
(4, 'Dr. Martens'),
(5, 'ECCO'),
(6, 'Laforce');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  ADD PRIMARY KEY (`IdCTDD`),
  ADD KEY `FK_tblChiTietDD_tblSanPham_IdSP` (`IdSP`),
  ADD KEY `FK_tblChiTietDD_tblDonDat_IdDD` (`IdDD`);

--
-- Chỉ mục cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  ADD PRIMARY KEY (`IdCTPNK`),
  ADD KEY `FK_tblChiTietPNK_tblPhieuNK_IdPNK` (`IdPNK`),
  ADD KEY `FK_tblChiTietPNK_tblSanPham_IdSP` (`IdSP`);

--
-- Chỉ mục cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  ADD PRIMARY KEY (`IdDD`),
  ADD KEY `FK_tblDonDat_tblTaiKhoan_GmailKH` (`GmailKH`);

--
-- Chỉ mục cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  ADD PRIMARY KEY (`IdLoaiSP`);

--
-- Chỉ mục cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  ADD PRIMARY KEY (`IdPNK`),
  ADD KEY `FK_tblPhieuNK_tblTaiKhoan_GmailNV` (`GmailNV`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`IdSP`),
  ADD KEY `FK_tblSanPham_tblLoaiSP_IdLoaiSP` (`IdLoaiSP`),
  ADD KEY `FK_tblSanPham_tblThuongHieu_IdTH` (`IdTH`);

--
-- Chỉ mục cho bảng `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  ADD PRIMARY KEY (`Gmail`);

--
-- Chỉ mục cho bảng `tblthuonghieu`
--
ALTER TABLE `tblthuonghieu`
  ADD PRIMARY KEY (`IdTH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  MODIFY `IdCTDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  MODIFY `IdCTPNK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  MODIFY `IdDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tblloaisp`
--
ALTER TABLE `tblloaisp`
  MODIFY `IdLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  MODIFY `IdPNK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `IdSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tblthuonghieu`
--
ALTER TABLE `tblthuonghieu`
  MODIFY `IdTH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblchitietdd`
--
ALTER TABLE `tblchitietdd`
  ADD CONSTRAINT `FK_tblChiTietDD_tblDonDat_IdDD` FOREIGN KEY (`IdDD`) REFERENCES `tbldondat` (`IdDD`),
  ADD CONSTRAINT `FK_tblChiTietDD_tblSanPham_IdSP` FOREIGN KEY (`IdSP`) REFERENCES `tblsanpham` (`IdSP`);

--
-- Các ràng buộc cho bảng `tblchitietpnk`
--
ALTER TABLE `tblchitietpnk`
  ADD CONSTRAINT `FK_tblChiTietPNK_tblPhieuNK_IdPNK` FOREIGN KEY (`IdPNK`) REFERENCES `tblphieunk` (`IdPNK`),
  ADD CONSTRAINT `FK_tblChiTietPNK_tblSanPham_IdSP` FOREIGN KEY (`IdSP`) REFERENCES `tblsanpham` (`IdSP`);

--
-- Các ràng buộc cho bảng `tbldondat`
--
ALTER TABLE `tbldondat`
  ADD CONSTRAINT `FK_tblDonDat_tblTaiKhoan_GmailKH` FOREIGN KEY (`GmailKH`) REFERENCES `tbltaikhoan` (`Gmail`);

--
-- Các ràng buộc cho bảng `tblphieunk`
--
ALTER TABLE `tblphieunk`
  ADD CONSTRAINT `FK_tblPhieuNK_tblTaiKhoan_GmailNV` FOREIGN KEY (`GmailNV`) REFERENCES `tbltaikhoan` (`Gmail`);

--
-- Các ràng buộc cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD CONSTRAINT `FK_tblSanPham_tblLoaiSP_IdLoaiSP` FOREIGN KEY (`IdLoaiSP`) REFERENCES `tblloaisp` (`IdLoaiSP`),
  ADD CONSTRAINT `FK_tblSanPham_tblThuongHieu_IdTH` FOREIGN KEY (`IdTH`) REFERENCES `tblthuonghieu` (`IdTH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
