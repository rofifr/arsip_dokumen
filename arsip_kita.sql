-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2024 at 02:43 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u619444614_arsip_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', '1119038949_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int(11) NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int(11) NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`) VALUES
(2, '2019-10-10 15:09:59', 4, 'ARSIP-MN-0002', 'File keberngkatan', 'png', 4, 'tes ttead', '1162363338_Screen Shot 2019-10-10 at 13.22.15.png'),
(3, '2019-10-10 16:02:44', 4, 'asd', 'asdasd 2x', 'pdf', 3, 'asdasd', '432536246_mamunur.pdf'),
(4, '2019-10-12 17:02:16', 5, 'MN-002', 'Contoh Surat Izin Pelaksanaan', 'pdf', 4, 'Ini Contoh Surat Izin Pelaksanaan', '1352467019_c4611_sample_explain.pdf'),
(5, '2019-10-12 17:03:01', 5, 'MN-003', 'Contoh Keputusan Kerja', 'pdf', 3, 'Contoh Keputusan Kerja pegawai', '1765932248_Contoh-surat-lamaran-kerja-pdf (1).pdf'),
(6, '2019-10-12 17:03:37', 5, 'MN-004', 'Contoh Surat Izin Pegawai', 'pdf', 7, 'berikut Contoh Surat Izin Pegawai untuk pelaksana kerja', '1651167980_instructions-for-adding-your-logo.pdf'),
(7, '2019-10-12 17:04:30', 5, 'MN-005', 'Contoh SPK Proyek Kontraktor', 'pdf', 5, 'Contoh SPK Proyek Kontraktor adalah contoh surat SPK KONTRAK', '142845393_OoPdfFormExample.pdf'),
(8, '2019-10-12 17:05:22', 5, 'MN-006', 'SPK Kontrak Jembatan', 'pdf', 6, 'Surat SPK Kontrak Jembatan Layang', '106615077_sample-link_1.pdf'),
(9, '2019-10-12 17:06:55', 6, 'MN-008', 'Contoh Curiculum Vitae Untuk Lamaran Kerja', 'pdf', 10, 'Contoh Curiculum Vitae Untuk Lamaran Kerja untuk pegawai baru', '927990343_pdf-sample(1).pdf'),
(10, '2019-10-12 17:07:30', 6, 'MN-009', 'Surat Cuti Sakit Pegawai', 'pdf', 7, 'Contoh Surat Cuti Sakit Pegawai baru', '2071946811_PEMBUATAN FILE PDF_FNH_tamim (1).pdf'),
(11, '2024-06-24 09:33:14', 7, 'SIP-012', 'Surat Keterangan', 'pdf', 4, 'Pelaksanaan Acara 17 agustus', '263759007_Get_Started_With_Smallpdf.pdf'),
(12, '2024-06-24 09:33:49', 7, 'SK-002', 'Keputusan Lurah', 'pdf', 3, 'Keputusan Baru', '1403231974_Get_Started_With_Smallpdf.pdf'),
(13, '2024-06-24 09:35:02', 7, 'SKP-005', 'SKP Bulanan', 'pdf', 7, 'SKP Bulan maret 2024', '871919879_Get_Started_With_Smallpdf.pdf'),
(14, '2024-06-24 09:35:52', 7, 'SIP-013', 'Izin Pameran', 'pdf', 4, 'Surat Izin Pameran ', '1279724218_Get_Started_With_Smallpdf.pdf'),
(15, '2024-06-24 09:37:05', 7, 'BS-006', 'Bantuan Sosial', 'pdf', 1, 'List Nama yang mendapatkan Bansos Juni 2024', '135248079_Get_Started_With_Smallpdf.pdf'),
(16, '2024-06-24 09:53:15', 7, 'SPKJ-001', 'Surat perintah', 'pdf', 5, 'Juni 2024', '400980515_Get_Started_With_Smallpdf.pdf'),
(17, '2024-06-24 09:53:59', 7, 'XAIO111', 'Map Denah', 'pdf', 1, 'Denah', '2076610875_432536246_mamunur.pdf'),
(18, '2024-06-24 09:54:42', 7, 'SK-004', 'Keputusan', 'pdf', 3, 'Februari 2024', '1109683535_927990343_pdf-sample(1).pdf'),
(19, '2024-06-24 09:55:13', 7, 'BS-008', 'Bantuan Sosial', 'pdf', 1, 'Januari 2024', '843475070_871919879_Get_Started_With_Smallpdf.pdf'),
(20, '2024-06-24 09:56:01', 7, 'SIP-012', 'Surat ijin pelaksanaan gotong royong', 'pdf', 4, 'April 2024', '823701013_1403231974_Get_Started_With_Smallpdf (1).pdf'),
(42, '2024-07-02 10:29:33', 7, 'SIP-012', 'Bantuan Sosial', 'pdf', 1, 'daw', '854802989_Get_Started_With_Smallpdf.pdf'),
(43, '2024-07-02 11:09:27', 7, 'SK-002', 'Surat Keputusan Lurah', 'pdf', 3, 'dadadadad', '1476091736_document (1).pdf'),
(44, '2024-07-02 11:09:58', 7, 'SIP-013', 'Pelaksanaan acara 17 Agustus', 'pdf', 4, 'Lapangan desa Cintaraja', '648203996_400980515_Get_Started_With_Smallpdf.pdf'),
(45, '2024-07-02 14:34:17', 4, 'SKP-005', 'SKP Juni', 'pdf', 7, 'kakajnas', '21577541_400980515_Get_Started_With_Smallpdf.pdf'),
(46, '2024-07-05 10:46:36', 4, 'SK-0012', 'Surat Keputusan Kepala Desa', 'pdf', 1, 'Surat keterangan Kepala Desa', '2119741439_1663146146Proposal Dina Islamia.pdf'),
(47, '2024-07-09 08:19:38', 4, 'BS-009', 'Template Surat Izin', 'pdf', 12, 'Template Surat Izin yang bisa diunduh warga', '1558910490_Get_Started_With_Smallpdf.pdf'),
(48, '2024-07-11 16:52:44', 6, 'SK-0013', 'Arsip Surat Keputusan (SK) Kepala Desa', 'pdf', 12, 'Arsip yang berisi salinan keputusan-keputusan yang dibuat oleh kepala desa', '1859604354_Contoh_Arsip_SK_Kepala_Desa.pdf'),
(49, '2024-07-13 22:47:11', 7, 'SK-005', 'Surat Keputusan Kuwu', 'pdf', 3, 'Surat Keputusan Rapat 5 Juli 2024', '1738875533_Get_Started_With_Smallpdf.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(1, 'Tidak berkategori', 'Semua yang tidak memiliki kategori'),
(3, 'Surat Keputusan', 'Format arsip untuk surat keputusan\r\n'),
(4, 'Surat Izin Pelaksanaan', 'Contoh format surat izin pelaksaan pekerjaan'),
(5, 'Surat Perintah Kerja Proyek jalan', 'Contoh format surat perintah untuk pekerjaan proyek jalan'),
(6, 'Surat Perintah Kerja Proyek Jembatan', 'Contoh format untuk surat perintah kerja proyek jembatan'),
(7, 'Surat Kesehatan Pegawai', 'Surat kesehatan untuk pegawai'),
(10, 'Curiculum Vitae', 'Contoh format surat curiculum vitae untuk kenaikan jabatan'),
(11, 'Surat Permohonan', 'Permohonan resmi kepada pihak desa'),
(12, 'Public', 'Dokumen arsip yang boleh dilihat oleh publik');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `laporan_id` int(11) NOT NULL,
  `laporan_waktu` datetime NOT NULL,
  `laporan_petugas` int(11) NOT NULL,
  `laporan_arsip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`laporan_id`, `laporan_waktu`, `laporan_petugas`, `laporan_arsip`) VALUES
(7, '2024-07-02 10:29:33', 7, 'Bantuan Sosial'),
(8, '2024-07-02 11:09:27', 7, 'Surat Keputusan Lurah'),
(9, '2024-07-02 11:09:58', 7, 'Pelaksanaan acara 17 Agustus'),
(10, '2024-07-02 14:34:17', 4, 'SKP Juni'),
(11, '2024-07-05 10:46:36', 4, 'Surat Keputusan Kepala Desa'),
(12, '2024-07-09 08:19:38', 4, 'Template Surat Izin'),
(13, '2024-07-11 16:52:44', 6, 'Arsip Surat Keputusan (SK) Kepala Desa'),
(14, '2024-07-13 22:47:11', 7, 'Surat Keputusan Kuwu');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
(4, 'Jhony Andrean', 'petugas1', '570c396b3fc856eceb8aa7357f32af1a', ''),
(6, 'Jamilah Suanda', 'petugas3', '6f7dc121bccfd778744109cac9593474', ''),
(7, 'Dzulqa', 'aqluzd', '570c396b3fc856eceb8aa7357f32af1a', '');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_user` int(11) NOT NULL,
  `riwayat_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `riwayat_waktu`, `riwayat_user`, `riwayat_arsip`) VALUES
(1, '2019-10-11 15:32:29', 8, 3),
(2, '2019-10-12 17:09:31', 8, 10),
(3, '2019-10-12 17:09:45', 8, 9),
(4, '2019-10-12 17:09:50', 8, 8),
(5, '2019-10-12 17:09:53', 8, 3),
(6, '2019-10-12 17:10:07', 9, 10),
(7, '2019-10-12 17:10:16', 9, 9),
(8, '2019-10-12 17:10:19', 9, 8),
(9, '2019-10-12 17:10:22', 9, 6),
(10, '2019-10-12 17:10:26', 9, 2),
(11, '2024-06-24 09:40:08', 9, 15),
(12, '2024-06-24 09:40:14', 9, 14),
(13, '2024-06-24 09:40:30', 9, 12),
(14, '2024-06-24 09:40:39', 9, 14),
(15, '2024-06-24 09:40:54', 9, 10),
(16, '2024-06-24 09:40:58', 9, 3),
(17, '2024-06-24 09:51:10', 8, 2),
(18, '2024-06-24 09:51:16', 8, 3),
(19, '2024-06-24 09:51:30', 8, 10),
(20, '2024-06-24 09:51:33', 8, 13),
(21, '2024-06-24 09:51:40', 8, 15),
(22, '2024-06-24 09:51:48', 8, 12),
(23, '2024-06-24 09:51:56', 8, 9),
(24, '2024-07-03 11:08:11', 8, 45),
(25, '2024-07-04 11:21:31', 8, 17),
(26, '2024-07-04 11:21:43', 8, 20),
(27, '2024-07-11 14:03:43', 1, 47),
(28, '2024-07-11 14:04:43', 8, 47),
(29, '2024-07-11 14:05:32', 1, 47),
(30, '2024-07-11 16:56:14', 8, 48),
(31, '2024-07-13 22:48:46', 8, 47),
(32, '2024-07-15 21:04:02', 8, 48),
(33, '2024-07-15 21:04:04', 8, 47),
(34, '2024-07-16 21:42:47', 8, 47),
(35, '2024-07-16 21:42:50', 8, 48),
(36, '2024-07-16 21:42:52', 8, 48);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(8, 'Rofi Faturohman', 'user1', '6ad14ba9986e3615423dfca256d04e3f', ''),
(9, 'Dzulqa Fauzan Abdillah', 'user2', '7e58d63b60197ceb55a1c487989a3720', ''),
(10, 'Ajir Muhajier', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', ''),
(11, 'Cut Nanda Somay', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`),
  ADD KEY `arsip_kategori` (`arsip_kategori`),
  ADD KEY `arsip_petugas` (`arsip_petugas`),
  ADD KEY `arsip_jenis` (`arsip_jenis`),
  ADD KEY `arsip_jenis_2` (`arsip_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`laporan_id`),
  ADD KEY `petugas_id` (`laporan_petugas`),
  ADD KEY `laporan_petugas` (`laporan_petugas`),
  ADD KEY `arsip_id` (`laporan_arsip`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
  ADD CONSTRAINT `arsip_ibfk_1` FOREIGN KEY (`arsip_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
