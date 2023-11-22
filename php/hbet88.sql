-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 04:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbet88`
--

-- --------------------------------------------------------

--
-- Table structure for table `baivietadmin`
--

CREATE TABLE `baivietadmin` (
  `id` bigint(20) NOT NULL,
  `baiviet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baivietadmin`
--

INSERT INTO `baivietadmin` (`id`, `baiviet`) VALUES
(2, 'hello mn');

-- --------------------------------------------------------

--
-- Table structure for table `baivietuser`
--

CREATE TABLE `baivietuser` (
  `id` int(11) NOT NULL,
  `baiviet` text NOT NULL,
  `idnguoidung` bigint(20) NOT NULL,
  `trangthai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baivietuser`
--

INSERT INTO `baivietuser` (`id`, `baiviet`, `idnguoidung`, `trangthai`) VALUES
(2, 'Chia sẻ kinh nghiệm quản lý chi tiêu', 2, 'Đã phê duyệt'),
(3, 'Bước đầu trong cách tiết kiệm chi tiêu cá nhân là bạn nên lập ra ngân sách chi tiêu chi tiết. Việc lập ngân sách sẽ hướng bạn chi tiêu theo đúng kế hoạch và hạn mức mà bạn đã đặt ra. Ngoài ra còn tránh phải tình trạng chi quá mức cho phép dẫn đến thâm hụt, vay mượn bên ngoài để đáp ứng nhu cầu tiêu dùng.', 3, 'Chưa phê duyệt'),
(4, 'Quản lý chi tiêu cá nhân chắc hẳn là một vấn đề căng não đối với rất nhiều người. Hiện nay, chúng ta hầu như mua sắm, ăn uống khá phóng khoáng mà ít khi quản lý chặt chẽ túi tiền của mình. Vậy làm thế nào để có cách tiết kiệm chi tiêu cá nhân hợp lý? Mời bạn tham khảo 10 phương pháp sau đây để có thể áp dụng ngay từ bây giờ.', 1, 'Đã phê duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucgiaodich`
--

CREATE TABLE `danhmucgiaodich` (
  `id` bigint(20) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucgiaodich`
--

INSERT INTO `danhmucgiaodich` (`id`, `tendanhmuc`) VALUES
(1, 'Tiền học'),
(2, 'Tiền nhà'),
(3, 'Tiền ăn');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` bigint(20) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `idquyentruycap` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `ngaysinh`, `sdt`, `email`, `matkhau`, `trangthai`, `idquyentruycap`) VALUES
(1, 'Kiều Phương Thảo', '2023-11-10', '0111111111', 'thao.kp205128@gmail.com', '1234', 0, 2),
(2, 'Nguyễn Văn A', '2023-11-03', '0147852369', 'aaaa@gmail.com', '123', 0, 2),
(3, 'Trần Văn Khách B', '2023-11-11', '0214563987', 'tha@gmail.com', '123', 0, 1),
(6, 'Trần Văn B', '2023-11-11', '01478524639', 'thao.kp205128@gmail.com', '123', 0, 1),
(9, '', '0000-00-00', '0123456789', '', '1', 1, 0),
(10, 'Nguyễn Thị Khách A', '2023-11-14', '0111111112', 'thao.kp205128@gmail.com', '741369', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nhomquyen`
--

CREATE TABLE `nhomquyen` (
  `id` bigint(20) NOT NULL,
  `tennhomquyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhomquyen`
--

INSERT INTO `nhomquyen` (`id`, `tennhomquyen`) VALUES
(1, 'Người dùng'),
(2, 'Hỗ trợ quản lý bài viết'),
(4, 'Hỗ trợ báo cáo');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` bigint(20) NOT NULL,
  `idnhomquyen` bigint(20) NOT NULL,
  `idquyentruycap` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `idnhomquyen`, `idquyentruycap`) VALUES
(1, 1, 5),
(15, 2, 2),
(16, 2, 5),
(17, 4, 4),
(18, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quyentruycap`
--

CREATE TABLE `quyentruycap` (
  `id` bigint(20) NOT NULL,
  `tenquyentruycap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quyentruycap`
--

INSERT INTO `quyentruycap` (`id`, `tenquyentruycap`) VALUES
(1, 'Quản lý tài khoản'),
(2, 'Quản lý bài viết'),
(3, 'Quản lý danh mục giao dịch'),
(4, 'Báo cáo thống kê'),
(5, 'Chỉ gồm các chức năng của người dùng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baivietadmin`
--
ALTER TABLE `baivietadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baivietuser`
--
ALTER TABLE `baivietuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnguoidung` (`idnguoidung`);

--
-- Indexes for table `danhmucgiaodich`
--
ALTER TABLE `danhmucgiaodich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhomquyen`
--
ALTER TABLE `nhomquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idnhomquyen` (`idnhomquyen`),
  ADD KEY `idquyentruycap` (`idquyentruycap`);

--
-- Indexes for table `quyentruycap`
--
ALTER TABLE `quyentruycap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baivietadmin`
--
ALTER TABLE `baivietadmin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baivietuser`
--
ALTER TABLE `baivietuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhmucgiaodich`
--
ALTER TABLE `danhmucgiaodich`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nhomquyen`
--
ALTER TABLE `nhomquyen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quyentruycap`
--
ALTER TABLE `quyentruycap`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baivietuser`
--
ALTER TABLE `baivietuser`
  ADD CONSTRAINT `baivietuser_ibfk_1` FOREIGN KEY (`idnguoidung`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD CONSTRAINT `phanquyen_ibfk_1` FOREIGN KEY (`idnhomquyen`) REFERENCES `nhomquyen` (`id`),
  ADD CONSTRAINT `phanquyen_ibfk_2` FOREIGN KEY (`idquyentruycap`) REFERENCES `quyentruycap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
