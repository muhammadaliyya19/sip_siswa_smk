-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 08:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_siswa_smk_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `penulis` varchar(64) NOT NULL DEFAULT 'Administrator',
  `konten` text NOT NULL,
  `foto_utama` text NOT NULL,
  `tag` varchar(128) NOT NULL,
  `slug` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_calon_siswa` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `no_hp_siswa` varchar(12) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `asal_sekolah` text NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `no_hp_orang_tua` varchar(12) NOT NULL,
  `id_tahun_ajaran` int(4) NOT NULL,
  `id_user` int(6) NOT NULL,
  `status_lolos` int(2) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `berkas` text NOT NULL,
  `scan_ijazah` text NOT NULL,
  `scan_skhun` text NOT NULL,
  `pasfoto` text NOT NULL,
  `tgl_daftar` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id_calon_siswa`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `jumlah_saudara`, `no_hp_siswa`, `alamat_siswa`, `asal_sekolah`, `alamat_sekolah`, `nama_ayah`, `nama_ibu`, `alamat_orang_tua`, `no_hp_orang_tua`, `id_tahun_ajaran`, `id_user`, `status_lolos`, `nisn`, `berkas`, `scan_ijazah`, `scan_skhun`, `pasfoto`, `tgl_daftar`) VALUES
(26, 'Ilmi', 'Kediri', '2024-07-17', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'a', 'a', 'a', 'a', 'KANDANGAN - KEDIRI', '8976543', 6, 28, 1, '1321321', '', '', '', '', '2024-07-17'),
(29, 'Ngetest Again', 'Kediri', '2024-07-29', 'L', 'Islam', 1, 1, '085784114468', 'a', 'a', 'a', 'MY', 'LM', 'a', '05784114468', 6, 32, 1, '187768', '1722266492-2024-07-29-052132.zip', '1722266492-2024-07-29-052132.jpg', '1722266492-2024-07-29-052132.jpg', '1722266492-2024-07-29-052132.jpg', '2024-07-29'),
(30, 'Ngetest Again', 'Kediri', '2024-07-29', 'L', 'Islam', 1, 1, '085784114468', 'a', 'a', 'a', 'MY', 'LM', 'a', '05784114468', 6, 33, 1, '187768', '1722268478-2024-07-29-055438.zip', '1722268478-2024-07-29-055438.pdf', '1722268478-2024-07-29-055438.pdf', '1722268478-2024-07-29-055438.pdf', '2024-07-29'),
(31, 'Salsa', 'Kediri', '2024-07-29', 'L', 'Islam', 1, 1, '05784114468', 'JL. Imam Faqih', 'A', 'A', 'MB', 'PF', 'JL. Imam Faqih', '05784114468', 6, 29, 1, '187768', '1722269178-2024-07-29-060618.zip', '1722269178-2024-07-29-060618.pdf', '1722269178-2024-07-29-060618.pdf', '1722269178-2024-07-29-060618.pdf', '2024-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ijazah`
--

CREATE TABLE `nilai_ijazah` (
  `id_nilai_ijazah` int(4) NOT NULL,
  `id_user` int(6) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nilai_bhs_indo` decimal(5,0) NOT NULL,
  `nilai_bhs_inggris` decimal(5,0) NOT NULL,
  `nilai_ipa` decimal(5,0) NOT NULL,
  `nilai_ips` decimal(5,0) NOT NULL,
  `nilai_mtk` decimal(5,0) NOT NULL,
  `nilai_akhir` decimal(5,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_ijazah`
--

INSERT INTO `nilai_ijazah` (`id_nilai_ijazah`, `id_user`, `id_calon_siswa`, `nisn`, `nilai_bhs_indo`, `nilai_bhs_inggris`, `nilai_ipa`, `nilai_ips`, `nilai_mtk`, `nilai_akhir`, `keterangan`) VALUES
(22, 28, 26, '1321321', '85', '87', '85', '85', '85', '85', 'a'),
(25, 32, 29, '187768', '44', '87', '5', '9', '9', '44', 'A'),
(26, 33, 30, '187768', '44', '87', '5', '9', '9', '44', 'A'),
(27, 29, 31, '187768', '44', '87', '5', '9', '9', '44', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman_pendaftaran`
--

CREATE TABLE `pengumuman_pendaftaran` (
  `id_pengumuman_pendaftaran` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `notes` text NOT NULL,
  `id_tahun_ajaran` int(3) NOT NULL,
  `link_files` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman_pendaftaran`
--

INSERT INTO `pengumuman_pendaftaran` (`id_pengumuman_pendaftaran`, `judul`, `deskripsi`, `notes`, `id_tahun_ajaran`, `link_files`, `is_active`, `tgl_update`) VALUES
(8, 'AA', '<p>a</p>', 'Oke', 6, '1721572992-2024-07-21-044312.xlsx', 1, '2024-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(6, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', '', 'admin', '123', 0),
(28, 'Ilmi', '', '1321321', '1321321', 1),
(32, 'Ngetest Again', '', '187768', '187768', 1),
(33, 'Ngetest Again', '', '187768', '187768', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(1) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`, `tgl_update`) VALUES
(1, 'Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri', '1. Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.\\n \r\n2. Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.\\n \r\n3. Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan datang.\\n \r\n4. Memberikan Pendidikan, pengetahuan, dan keterampilan.\\n ', '2023-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_calon_siswa`);

--
-- Indexes for table `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  ADD PRIMARY KEY (`id_nilai_ijazah`);

--
-- Indexes for table `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  ADD PRIMARY KEY (`id_pengumuman_pendaftaran`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_calon_siswa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  MODIFY `id_nilai_ijazah` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  MODIFY `id_pengumuman_pendaftaran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
