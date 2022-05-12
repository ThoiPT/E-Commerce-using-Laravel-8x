-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2021 lúc 01:49 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_phutungxe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_sanpham` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong_mua` int(11) DEFAULT NULL,
  `gia_ban` int(11) DEFAULT NULL,
  `time_life` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_sanpham`, `soluong_mua`, `gia_ban`, `time_life`, `created_at`) VALUES
(75, 'NX-002', 1, 800000, '2022-01-11 17:01:35', '2021-12-13 00:46:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `mshh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `id_donhang` int(11) DEFAULT NULL,
  `soluong_mua` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`mshh`, `id_donhang`, `soluong_mua`, `thanhtien`) VALUES
('PT-001', 7, 2, 500000),
('PT-002', 13, 3, 750000),
('PT-002', 14, 6, 1500000),
('PT-001', 14, 6, 1500000),
('NX-004', 14, 2, 1200000),
('VX-002', 14, 1, 300000),
('NX-001', 14, 1, 600000),
('NX-002', 14, 1, 800000),
('NX-002', 15, 9, 7200000),
('PT-002', 15, 2, 500000),
('VX-001', 16, 5, 1250000),
('NX-002', 16, 3, 2400000),
('PT-002', 17, 2, 500000),
('NX-004', 17, 2, 1200000),
('NX-001', 17, 1, 600000),
('PT-001', 18, 2, 500000),
('NX-002', 18, 3, 2400000),
('NX-001', 22, 3, 1800000),
('PT-002', 23, 5, 1250000),
('VX-002', 23, 8, 2400000),
('NX-002', 24, 1, 800000),
('NX-001', 24, 7, 4199993),
('NX-001', 25, 3, 1800000),
('VX-001', 25, 2, 500000),
('NX-002', 26, 1, 800000),
('NX-003', 26, 7, 4900000),
('PT-001', 26, 7, 1750000),
('VX-002', 26, 4, 1200000),
('PT-002', 26, 2, 500000),
('NX-003', 27, 8, 5600000),
('NX-002', 28, 1, 800000),
('NX-001', 29, 7, 4200000),
(NULL, 30, 8, 0),
('VX-001', 30, 2, 500000),
('NX-001', 30, 4, 2400000),
('PT-001', 30, 4, 1000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucs`
--

CREATE TABLE `danhmucs` (
  `ma_danhmuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `ten_danhmuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `trangthai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucs`
--

INSERT INTO `danhmucs` (`ma_danhmuc`, `ten_danhmuc`, `trangthai`, `created_at`, `updated_at`) VALUES
('MenuA', 'Danh Mục A', 1, '2021-12-08 08:56:00', '2021-12-08 08:56:00'),
('NX', 'NHỚT XE', 1, '2021-10-06 20:21:38', '2021-10-06 20:21:38'),
('PK', 'ĐÈN XE', 1, '2021-10-07 00:23:39', '2021-10-07 00:23:39'),
('PT', 'PHỤ TÙNG THAY THẾ', 1, '2021-10-06 20:21:06', '2021-10-06 20:21:06'),
('TX', 'Danh muc test', 0, '2021-10-28 03:01:33', '2021-10-28 03:01:33'),
('VX', 'VỎ XE MÁY', 1, '2021-10-06 20:21:55', '2021-10-06 20:21:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `ten_kh` varchar(50) DEFAULT NULL,
  `diachi` varchar(250) DEFAULT NULL,
  `sdt` varchar(250) DEFAULT NULL,
  `tong_tien` int(11) DEFAULT NULL,
  `NgayDH` timestamp NULL DEFAULT current_timestamp(),
  `NgayGH` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `ten_kh`, `diachi`, `sdt`, `tong_tien`, `NgayDH`, `NgayGH`, `trangthai`) VALUES
(7, 'Nguyễn Văn A', 'Can Tho', '0999666555', 500000, '2021-10-05 15:10:52', '2021-10-24', 3),
(13, 'Le Phuoc', 'Can Tho - Dis', '0222666555', 750000, '2021-10-25 15:09:58', '2021-11-03', 3),
(14, 'Phạm Lê', 'ĐHCT khu II, Q. Ninh Kiều, TPCT', '0941649826', 5900000, '2021-10-26 17:08:32', '2021-10-30', 3),
(15, 'Thanh Toàn', 'Cà Mau', '0996445225', 7700000, '2021-10-26 17:38:55', '2021-10-30', 3),
(16, 'Khanh Le', 'Ha Noi', '0555 999 666', 3650000, '2021-10-27 15:40:05', '2021-10-30', 3),
(17, 'Thanh Giang', 'Ninh Kiều - Cần Thơ', '0222 555 111', 2300000, '2021-10-27 16:06:36', '2021-10-30', 3),
(18, 'Bui Ngoc Thao', 'Can Tho - Cai Rang', '0555 111 999', 2900000, '2021-10-27 16:52:13', '2021-10-31', 3),
(22, 'Nguyen Thanh T', 'Nhà hàng Hoa Sứ, phường Cái Khế, quận Ninh Kiều, TPCT', '0666999666', 1800000, '2021-10-28 07:39:01', '2021-10-30', 3),
(23, 'Nguyen Thanh AA', 'Nhà hàng Hoa Sứ, phường Cái Khế, quận Ninh Kiều, TPCT', '0399666444', 3650000, '2021-10-28 09:59:37', '2021-10-30', 3),
(24, 'Lê Phước Thiện', 'Cần Thơ - Ninh Kiểu', '0666555444', 4999993, '2021-10-30 04:39:17', '2021-10-31', 3),
(25, 'Lê Phát Thời ii', 'Tầng 3 toà nhà Toyota Ninh Kiều, 57-59 Cách Mạng Tháng 8- Cần Thơ.', '0222 444 565', 2300000, '2021-11-01 17:41:24', '2021-11-05', 3),
(26, 'Trân Mèo', 'Can Tho', '0155666333', 9150000, '2021-11-06 14:12:10', NULL, 2),
(27, 'Tran Van Toan', 'Hồ Chí Minh', '0333666555', 5600000, '2021-11-11 02:16:14', '2021-11-15', 3),
(28, 'Thoi2222', 'Nhà hàng Hoa Sứ, phường Cái Khế, quận Ninh Kiều, TPCT', '0941649826', 800000, '2021-11-14 09:19:40', '2021-11-14', 1),
(29, 'Tuan Anh Tran', 'Đường Sông Hậu, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ', '0366999555', 4200000, '2021-12-08 15:50:02', '2021-12-15', 3),
(30, 'Tuan Anh Tran 1', 'Can Tho', '0366444555', 3900000, '2021-12-09 02:12:05', '2021-12-12', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_12_164729_create_danhmucs_table', 2),
(6, '2021_09_19_231733_create_nhacungcaps_table', 3),
(7, '2021_09_20_032702_create_sanphams_table', 4),
(8, '2021_09_20_033818_create_sanphams_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcaps`
--

CREATE TABLE `nhacungcaps` (
  `ma_ncc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_ncc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi_ncc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ncc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ncc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcaps`
--

INSERT INTO `nhacungcaps` (`ma_ncc`, `ten_ncc`, `diachi_ncc`, `sdt_ncc`, `email_ncc`, `created_at`, `updated_at`) VALUES
('asd', 'asd', 'Sài Gòn', '12123123', 'admin@phutungxe.com', '2021-12-08 08:58:55', '2021-12-08 08:58:55'),
('NCC01', 'Nha cung cap 1', 'Can Tho', '0399699777', 'ncc1@gmail.com', '2021-09-20 00:13:12', '2021-09-20 00:13:12'),
('NCC02', 'Nhà cung cấp 02', 'Sài Gòn', '2131231231', 'admin@phutungxe.com', '2021-09-19 18:38:17', '2021-09-19 18:38:17'),
('NCC02222', 'Nhà cung cấp 02222', 'Sài Gòn', '2131231231', 'lephatloc2016@gmail.com', '2021-09-23 09:58:40', '2021-09-23 09:58:40'),
('NCC03', 'aD', 'SdASdDDDDDDDD', '2131231231', 'info@raovatcantho.net', '2021-09-19 18:38:39', '2021-09-19 18:38:39'),
('NCC034', 'Nhà cung cấp 022', 'Sài Gòn2', '21312312312', 'ncc03@gmail.com2', '2021-09-20 03:36:11', '2021-09-20 03:36:11'),
('NCCTEST', 'Nhà cung cấp test', '4555 Can26n Thơ', '0325465489', 'ncctest@gmail.com', '2021-09-21 07:33:00', '2021-09-21 07:33:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphams`
--

CREATE TABLE `sanphams` (
  `mshh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ma_danhmuc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_ncc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_nhap` double(8,2) DEFAULT NULL,
  `gia_ban` double(8,2) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `hinhanh_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota_sp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphams`
--

INSERT INTO `sanphams` (`mshh`, `ma_danhmuc`, `ma_ncc`, `ten_sp`, `gia_nhap`, `gia_ban`, `so_luong`, `hinhanh_sp`, `mota_sp`, `created_at`, `updated_at`) VALUES
('NX-001', 'NX', 'NCC01', 'Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 (100ml)', 500000.00, 600000.00, 12, 'public/img_sp/NX-001_1633577038_nhot-liqui-moly-scooter-race-10w40-100ml-1422-slide-products-5fe95830d4ec9.jpeg', 'Nhớt chiết lẻ Liqui Moly Scooter Race 10W40 là sản phẩm nhớt cao cấp nhất của Liqui chuyên dụng dành cho các dòng xe tay ga hiện đại mới nhất hiện nay.\r\nNhớt Liqui Moly Scooter Race 10W40 thích hơp với các dòng xe tay ga đời mới hiện nay tại Việt Nam như: Lead, Vision, SH, AB, NVX...\r\nThời gian thay nhớt Liqui Moly Scooter Race 10W40 sẽ từ 2500-3000km\r\nThông số kĩ thuật:\r\n- Nhớt tổng hợp hoàn toàn cho xe tay ga. Độ nhớt SAE 10W40 - API SN - Jaso MA2\r\n- Dung tích nhớt: 100ml dùng mua thêm cho các dòng xe tay ga máy lớn như: SH300i, Forza, Vespa...', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('NX-002', 'NX', 'NCC01', 'Nhớt chiết lẻ Liqui Moly Molygen 5W40 (100ml)', 500000.00, 800000.00, 50, 'public/img_sp/NX-002_1633577127_nhot-liqui-moly-molygen-5w40-100ml-1421-slide-products-5fe9555c0d196.jpg', 'Nhớt chiết lẻ Liqui Moly Molygen 5W40 chính hãng chất lượng cao dành cho xe oto cao cấp có thể thay cho các dòng tay ga cao cấp. Bảo vệ động cơ trong điều kiện vận hành cao, tiết kiệm nhiên liệu, vận hành êm ái, kéo dài thời gian thay nhớt tốt nhất.\r\nNhớt Liqui Moly Molygen 5w40 là nhớt tổng hợp cao cấp với cấp nhớt API SP tốt nhất hiện nay.\r\nNhớt Liqui Moly Molygen 5W40 100ml dùng để mua thêm thay vào các dòng xe tay ga máy lớn như: SH300i, Vespa...', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('NX-003', 'NX', 'NCC01', 'Nhớt Motul Scooter LE 10W40 0.8L', 500000.00, 700000.00, 12, 'public/img_sp/PT-001_1633577232_nhot-motul-scoote-le-10w40-08l-1370-slide-products-5f9bdb03d5815.jpeg', 'Nhớt Motul Scooter LE 10W40 0.8L nhớt chất lượng cho xe tay ga 4 thì, kiểm soát cặn piston, chống mài mòn hiệu quả giúp tăng tuổi thọ động cơ. Khả năng chống quá nhiệt hoàn hảo phù hợp với chế độ dừng chạy liên tục khi giao thông ở thành phố.\r\nNhớt Motul Scooter LE 10W40 được sản xuất bới chính hãng Motul VN.', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('NX-004', 'NX', 'NCC01', 'Nhớt Repsol MXR Platium 10W40 0,8L', 500000.00, 600000.00, 12, 'public/img_sp/NX-004_1633577384_nhot-repsol-mxr-platium-10w40-08l-1297-slide-products-5ffb198a76e9e.jpg', 'Nhớt Repsol MXR Platium 10W40 - sản phẩm dành riêng cho các dòng xe số ở thị trường Châu Á, là loại nhớt tổng hợp mạnh mẽ và vượt trội cho động cơ đạt công xuất tối đa. Với công nghệ hiện đại, sản phẩm sẽ mang lại sự bảo vệ và vận hành tối ưu, giúp kéo dài tuổi thọ động cơ.\r\nNhớt Repsol MXR Platium 10W40 có độ nhớt với chỉ số 160, chỉ số khá cao, gần như ngang ngửa với các dòng cao cấp như Repsol Racing.', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('PT-001', 'PT', 'NCC01', 'Cần số X1R chính hãng cho Winner X', 200000.00, 250000.00, 12, 'public/img_sp/PT-001_1633577395_can-so-x1r-chinh-hang-cho-winner-x-1543-slide-products-6142034a045ed.jpg', 'Cần số X1R chính hãng cho Winner X, thiết kế 2 chiều tiện lợi cho việc không bị hư giày trong lúc đạp số, giúp lên số trả số nhanh hơn. Cần số X1R chính hãng cho Winner X được làm bằng chất liệu nhôm CNC nên cho ra mẫu mã rất đẹp.\r\nCần số X1R chính hãng cho Winner X là hàng chính hãng X1R có 2 màu: đen và trắng.', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('PT-002', 'PT', 'NCC01', 'Lọc gió lưới thép độ dành cho Honda ADV, PCX mới', 150000.00, 250000.00, 12, 'public/img_sp/PT-002_1633577402_loc-gio-luoi-thep-do-danh-cho-honda-adv-pcx-moi-1499-slide-products-60654fc47e759.jpg', 'Lọc gió lưới thép độ dành riêng cho Honda ADV, PCX mới , với chất liệu bằng lưới kim loại lọc có thể vệ sinh tái sử dụng được nhiều lần (5000km mỗi lần vệ sinh), cho thời gian sử dụng bền bỉ gần như trọn đời xe. Bên cạnh đó với thiết kế plug and play, người dùng chỉ cần thay thế cho lưới lọc zin của xe mà ko cần phải chế hay thay đổi kết cấu nguyên bản của xe.', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('SP1', 'NX', 'NCC01', 'Dàn Áo Xe SH Update', 250000.00, 256000.00, 20, 'public/img_sp/SP1_1639009449_kinh-inox-kieu-dang-yamaha-1534-slide-products-60c08d3d8b751.jpg', 'Sản phẩm nhớt xe', '2021-12-08 17:24:09', '2021-12-08 17:24:09'),
('VX-001', 'VX', 'NCC01', 'Vỏ Dunlop 80/90-16 D307', 150000.00, 250000.00, 12, 'public/img_sp/VX-001_1633577516_vo-dunlop-8090-16-d307-1530-slide-products-60b76540a3719.jpg', 'Vỏ Dunlop 80/90-16 D307 dành cho lốp sau các loại xe như Nouvo, Hayate, SH Mode, Vision 2021, Impluse, Hayate...', '2021-10-06 20:23:58', '2021-10-06 20:23:58'),
('VX-002', 'VX', 'NCC01', 'Vỏ Michelin City Grip 2 110/70-12', 250000.00, 300000.00, 12, 'public/img_sp/VX-002_1638979963_kinh-motogadget-2-in-1-1394-slide-products-5fc5b79f08ba9.jpg', 'Vỏ Michelin City Grip 2 rất phù hợp với điều kiện ở Việt Nam bởi thiết kế nhiều rảnh gai sâu, ở phiên bản City Grip 2 này được cải tiển thêm nhiều chấm gai nhỏ, dài giúp thoáng nước cực tốt mà độ bền vẫn giữ được lâu.', '2021-10-06 20:23:58', '2021-10-06 20:23:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai_dh`
--

CREATE TABLE `trangthai_dh` (
  `id_sttdh` int(11) NOT NULL,
  `trangthai` varchar(100) DEFAULT NULL,
  `mota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trangthai_dh`
--

INSERT INTO `trangthai_dh` (`id_sttdh`, `trangthai`, `mota`) VALUES
(1, 'Đang giao', 'Đon hàng đang được giao'),
(2, 'Chưa duyệt', 'Đơn hàng đang chờ duyệt'),
(3, 'Đã hoàn thành', 'Đơn hàng đã giao thành công'),
(4, 'Thất bại', 'Đơn hàng giao không thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ThoiB1812307', 'admin@phutungxe.com', NULL, '$2a$12$aqV7juPld4bQXa1j5hXSr.APIMjhmP5AE6qNS1MDnC9YswePHMnIa', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cart_sanphams` (`id_sanpham`);

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD KEY `FK_chitiet_hoadon_donhang` (`id_donhang`),
  ADD KEY `FK_chitiet_hoadon_sanphams` (`mshh`);

--
-- Chỉ mục cho bảng `danhmucs`
--
ALTER TABLE `danhmucs`
  ADD PRIMARY KEY (`ma_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `FK_donhang_trangthai_dh` (`trangthai`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcaps`
--
ALTER TABLE `nhacungcaps`
  ADD PRIMARY KEY (`ma_ncc`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`mshh`),
  ADD KEY `ma_danhmuc` (`ma_danhmuc`),
  ADD KEY `FK_sanphams_nhacungcaps` (`ma_ncc`);

--
-- Chỉ mục cho bảng `trangthai_dh`
--
ALTER TABLE `trangthai_dh`
  ADD PRIMARY KEY (`id_sttdh`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthai_dh`
--
ALTER TABLE `trangthai_dh`
  MODIFY `id_sttdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_sanphams` FOREIGN KEY (`id_sanpham`) REFERENCES `sanphams` (`mshh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD CONSTRAINT `FK_chitiet_hoadon_donhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_chitiet_hoadon_sanphams` FOREIGN KEY (`mshh`) REFERENCES `sanphams` (`mshh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_donhang_trangthai_dh` FOREIGN KEY (`trangthai`) REFERENCES `trangthai_dh` (`id_sttdh`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanphams`
--
ALTER TABLE `sanphams`
  ADD CONSTRAINT `FK_sanphams_danhmucs` FOREIGN KEY (`ma_danhmuc`) REFERENCES `danhmucs` (`ma_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_sanphams_nhacungcaps` FOREIGN KEY (`ma_ncc`) REFERENCES `nhacungcaps` (`ma_ncc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
