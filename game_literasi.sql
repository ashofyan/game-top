-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 04:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_literasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `end`
--

CREATE TABLE `end` (
  `id_final` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `narasi_final` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `end`
--

INSERT INTO `end` (`id_final`, `judul`, `narasi_final`) VALUES
(1, '0', '0'),
(2, '0', '0'),
(3, 'Kolonel', '<p>Tas bla bla</p>\r\n\r\n<p>Buku bla bla</p>\r\n\r\n<p>Meja bla bla</p>'),
(4, 'Kolonel', '<p>Pencil</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Spidol</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Papan Tulis</p>\r\n\r\n<p>&nbsp;</p>'),
(5, 'Kolonel', '<p>Pencil</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Spidol</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Papan Tulis</p>\r\n\r\n<p>&nbsp;</p>'),
(6, 'Alat Sekolah', '<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>&nbsp;</p>'),
(7, 'Alat Sekolah', '<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>\r\n\r\n<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>'),
(8, 'Alat Sekolah', '<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>\r\n\r\n<p>&nbsp;</p>'),
(9, 'Alat Sekolah', '<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>'),
(10, 'Alat Sekolah', '<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>'),
(11, 'Alat Sekolah', '<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>'),
(12, 'Alat Sekolah', '<p>Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.</p>\r\n\r\n<p>Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.</p>\r\n\r\n<p>Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.</p>'),
(13, 'Kolonel', '<p>Pencil</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Spidol</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kursi</p>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `nama`, `kelas`, `nama_sekolah`) VALUES
(1, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(2, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(3, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(4, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(5, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(6, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(7, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(8, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(9, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(10, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS'),
(11, 'Achmad Shofyan', '3 MMB PSDKU Lamongan', 'PENS');

-- --------------------------------------------------------

--
-- Table structure for table `narasi`
--

CREATE TABLE `narasi` (
  `id_narasi` int(11) NOT NULL,
  `narasi1` text DEFAULT NULL,
  `narasi2` text DEFAULT NULL,
  `narasi3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narasi`
--

INSERT INTO `narasi` (`id_narasi`, `narasi1`, `narasi2`, `narasi3`) VALUES
(1, 'Penghapus', 'Buku', 'Papan Tulis'),
(2, 'Penghapus', 'Buku', 'Papan Tulis'),
(3, 'Penghapus', 'Buku', 'Kursi'),
(4, 'Pensil', 'Buku', 'Kursi'),
(5, 'Tas', 'Spidol', 'Kursi'),
(6, 'nnzvchnjdz', 'vjzdbvkjdz', 'hzdbvhdzv'),
(7, 'nnzvchnjdz', 'vjzdbvkjdz', 'hzdbvhdzv'),
(8, 'ljbj', 'cbkjabc.,m', 'ycavyvahhfa'),
(9, 'affefa', 'afafafeaw', 'fawfwafwfwaf'),
(10, 'fwfafwaf', 'wafawfwafwa', 'awfwafawfwafwa'),
(11, 'cysbsabvc', 'ugVCVC', 'hscbucabv'),
(12, 'Tas', 'Buku', 'Meja'),
(13, 'Tas', 'Buku', 'Meja'),
(14, 'Pencil', 'Spidol', 'Papan Tulis'),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, 'Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.', 'Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.', 'Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.'),
(21, 'Papan tulis adalah permukaan mengkilap, biasanya putih untuk membuat tanda tidak permanen. Papan tulis analog dengan papan tulis, tetapi dengan permukaan yang lebih halus memungkinkan penandaan yang cepat dan penghapusan tanda pada permukaannya.', 'Penghapus merupakan salah satu perlengkapan alat tulis yang merupakan karet lembut yang mampu menghilangkan tanda yang dihasilkan dengan pensil. Penghapus kenyal seperti karet yang biasanya berwarna putih atau hitam. Terdapat pensil yang dilengkapi dengan penghapus di ujungnya.', 'Guru adalah seorang pengajar suatu ilmu. Dalam bahasa Indonesia, guru umumnya merujuk pendidik profesional dengan tugas utama mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik.'),
(22, 'Pencil', 'Spidol', 'Kursi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `end`
--
ALTER TABLE `end`
  ADD PRIMARY KEY (`id_final`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `narasi`
--
ALTER TABLE `narasi`
  ADD PRIMARY KEY (`id_narasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `end`
--
ALTER TABLE `end`
  MODIFY `id_final` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `narasi`
--
ALTER TABLE `narasi`
  MODIFY `id_narasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
