-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 17.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nida_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `penulis` varchar(64) NOT NULL DEFAULT 'Administrator',
  `konten` text NOT NULL,
  `foto_utama` text NOT NULL,
  `tag` varchar(128) NOT NULL,
  `slug` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `penulis`, `konten`, `foto_utama`, `tag`, `slug`, `tanggal`) VALUES
(1, 'Berita', 'Aku', '<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Berikut adalah visi dan misi dari SMK Al-Hamidiyah Jakarta</span></span></span></p>\r\n\r\n<ol xss=removed>\r\n <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Visi</span></span></span></li>\r\n</ol>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri”.</span></span></span></p>\r\n\r\n<ol start=\"2\" xss=removed>\r\n <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Misi</span></span></span>\r\n\r\n <ol>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan dating.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Memberikan Pendidikan, pengetahuan, dan keterampilan.</span></span></span></li>\r\n </ol>\r\n </li>\r\n</ol>', '1701790160-2023-12-05-042920.jpg', 'Tes, Ngetes, Berita, Pertama', 'berita', '2023-12-05'),
(2, 'Berita Kedua', 'Aku Lagi', '<p>Berikut adalah visi dan misi dari SMK Al-Hamidiyah Jakarta</p>\r\n\r\n<ol>\r\n <li>Visi</li>\r\n</ol>\r\n\r\n<p>“Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri”.</p>\r\n\r\n<ol start=\"2\">\r\n <li>Misi\r\n <ol>\r\n  <li>Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.</li>\r\n  <li>Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.</li>\r\n  <li>Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan dating.</li>\r\n  <li>Memberikan Pendidikan, pengetahuan, dan keterampilan.</li>\r\n </ol>\r\n </li>\r\n</ol>', '1701793814-2023-12-05-053014.jpg', 'Tes, Ngetes, Berita, Kedua', 'berita-kedua', '2023-12-05'),
(3, 'Berita Ketiga', 'Aku Lagi', '<p>Ketiga juga diubah! target=\"_blank\" enctype=\"multipart/form-data\"</p>', '1701793762-2023-12-05-052922.jpg', 'Tes, Ngetes, Berita, Ketiga, Diubah', 'berita-ketiga', '2023-12-05'),
(4, 'Berita Keempat', 'Aku Lagi Lhoo', '<p>target=\"_blank\" enctype=\"multipart/form-data\"</p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Berikut adalah visi dan misi dari SMK Al-Hamidiyah Jakarta</span></span></span></p>\r\n\r\n<ol xss=removed>\r\n <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Visi</span></span></span></li>\r\n</ol>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri”.</span></span></span></p>\r\n\r\n<ol start=\"2\" xss=removed>\r\n <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Misi</span></span></span>\r\n\r\n <ol>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan dating.</span></span></span></li>\r\n  <li xss=removed><span xss=removed><span xss=removed><span xss=removed>Memberikan Pendidikan, pengetahuan, dan keterampilan.</span></span></span></li>\r\n </ol>\r\n </li>\r\n</ol>', '1701793665-2023-12-05-052745.jpg', 'Tes, Ngetes, Berita, Keempat, Lho?', 'berita-keempat', '2023-12-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `no_hp_siswa` varchar(12) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_orang_tua` text NOT NULL,
  `no_hp_orang_tua` varchar(12) NOT NULL,
  `penghasilan_orang_tua` int(10) NOT NULL,
  `tanggungan_anak` int(2) NOT NULL,
  `id_tahun_ajaran` int(4) NOT NULL,
  `id_user` int(6) NOT NULL,
  `status_lolos` int(2) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `jumlah_saudara`, `no_hp_siswa`, `alamat_siswa`, `berat_badan`, `tinggi_badan`, `gol_darah`, `asal_sekolah`, `alamat_sekolah`, `nama_ayah`, `nama_ibu`, `alamat_orang_tua`, `no_hp_orang_tua`, `penghasilan_orang_tua`, `tanggungan_anak`, `id_tahun_ajaran`, `id_user`, `status_lolos`, `nisn`) VALUES
(1, 'a', 'a', '0000-00-00', 'a', 'a', 1, 2, '21', '1', 2, 2, 'a', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ijazah`
--

CREATE TABLE `nilai_ijazah` (
  `id` int(4) NOT NULL,
  `id_user` int(6) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nilai_bhs_indo` decimal(5,0) NOT NULL,
  `nilai_bhs_inggris` decimal(5,0) NOT NULL,
  `nilai_ipa` decimal(5,0) NOT NULL,
  `nilai_ips` decimal(5,0) NOT NULL,
  `nilai_mtk` decimal(5,0) NOT NULL,
  `nilai_akhir` decimal(5,0) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_pendaftaran`
--

CREATE TABLE `pengumuman_pendaftaran` (
  `id` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_tahun_ajaran` int(3) NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '123', 0),
(2, 'Calon Siswa', 'cs', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(1) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `tgl_update`) VALUES
(1, 'Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri', '1. Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.\\n \r\n2. Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.\\n \r\n3. Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan datang.\\n \r\n4. Memberikan Pendidikan, pengetahuan, dan keterampilan.\\n ', '2023-12-05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
