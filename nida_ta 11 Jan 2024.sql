-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 12.22
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
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `jumlah_saudara`, `no_hp_siswa`, `alamat_siswa`, `asal_sekolah`, `alamat_sekolah`, `nama_ayah`, `nama_ibu`, `alamat_orang_tua`, `no_hp_orang_tua`, `id_tahun_ajaran`, `id_user`, `status_lolos`, `nisn`, `berkas`) VALUES
(1, 'a', 'a', '0000-00-00', 'a', 'a', 1, 2, '21', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, '1', '1703563998-2023-12-26-051318.zip'),
(2, 'Ilmi', 'Kediri', '0000-00-00', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'Kdn', 'Kdn', 'A', 'B', 'A', '8976543', 1, 1, 0, '1651502001', '1703563998-2023-12-26-051318.zip'),
(3, 'Nida', 'Kediri', '0000-00-00', 'L', 'Islam', 1, 1, '8976543', 'Bogor', 'SMK', 'Bogor', 'A', 'B', 'Bogor', '8976543', 1, 1, 0, '1651502001', '1703563998-2023-12-26-051318.zip'),
(4, 'Muh Aliyya Ilmi', '', '0000-00-00', '', '', 0, 0, '', '', '', '', '', '', '', '', 0, 4, 0, '1651502001', '1703563998-2023-12-26-051318.zip'),
(5, 'Dustin Jack', 'Kediri', '1998-07-20', 'L', 'Islam', 1, 2, '085864273099', 'Malang', 'SMPN 2 Pare', 'Jl. Pk Bangsa Pare', 'MY', 'LM', 'Kandangan', '085864273099', 3, 5, 0, '1651502001', '1703007060-2023-12-19-063100.'),
(6, 'Dustin Jack', 'Kediri', '2023-12-20', 'L', 'Islam', 1, 2, '085864273099', 'Malang', 'Mlg', 'Mlg', 'MY', 'LM', 'Kandangan', '085864273099', 2, 5, 0, '1651502001', '1703087146-2023-12-20-044546.zip'),
(7, 'Abdul Tk.', 'Kediri', '2001-06-27', 'L', 'Islam', 1, 2, '085864273099', 'Malang', 'SMPN 1 Kediri', 'Kediri', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 6, 1, '1651502001', '1703563998-2023-12-26-051318.zip'),
(9, 'MUHAMMAD ALIYYA ILMI', 'Kediri', '2024-01-09', 'L', 'Islam', 1, 1, '085864273099', 'Malang', 'Malang', 'Malang', 'MY', 'LM', 'Malang', '085864273099', 3, 8, 0, '1651502001', '1703563998-2023-12-26-051318.zip'),
(10, 'Test Produk LCD', 'Kediri', '2024-01-03', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'A', 'B', 'KANDANGAN - KEDIRI', '8976543', 3, 9, 0, '3216548979', '1704818713-2024-01-09-054513.zip'),
(11, 'Will Smith', 'Kediri', '2024-01-03', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'A', 'B', 'KANDANGAN - KEDIRI', '8976543', 3, 10, 0, '3216548979', '1704819156-2024-01-09-055236.zip'),
(12, 'Test Produk LCD Kedua', 'Kediri', '2024-01-04', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 11, 0, '1234563215', '1704819301-2024-01-09-055501.zip'),
(13, 'Test Produk LCD Ketiga', 'Kediri', '2024-01-13', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 12, 0, '3334563215', '1704819413-2024-01-09-055653.zip'),
(14, 'Test Produk LCD Keempat', 'Kediri', '2024-01-18', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 13, 0, '5554563215', '1704819566-2024-01-09-055926.zip'),
(15, 'Test Produk LCD Kelima', 'Kediri', '2024-01-26', 'L', 'Islam', 1, 1, '8976543', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'KANDANGAN - KEDIRI', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 14, 0, '6664563215', '1704819845-2024-01-09-060405.zip'),
(16, 'Ilmi Aku', 'Kediri', '2024-01-11', 'L', 'Islam', 1, 2, '8976543', 'KANDANGAN - KEDIRI', 'SMP 2 Pare', 'Pare Kediri', 'MY', 'LM', 'KANDANGAN - KEDIRI', '8976543', 3, 15, 1, '6664563215', '1704970697-2024-01-11-115817.zip'),
(17, 'Ilmi Aku', 'Kediri', '2024-01-10', 'L', 'Islam', 1, 1, '085864273099', 'Malang', 'Malang', 'Malang', 'MY', 'LM', 'Malang', '085864273099', 3, 15, 0, '3216548900', '1704971475-2024-01-11-121115.zip'),
(18, 'Muhammad A Ilmi', 'Kediri', '2024-01-09', 'L', 'Islam', 1, 1, '085864273099', 'Malang', 'SMP', 'Malang', 'MY', 'LM', 'Malang', '085864273099', 3, 16, 0, '3216548966', '1704971938-2024-01-11-121858.zip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ijazah`
--

CREATE TABLE `nilai_ijazah` (
  `id` int(4) NOT NULL,
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
-- Dumping data untuk tabel `nilai_ijazah`
--

INSERT INTO `nilai_ijazah` (`id`, `id_user`, `id_calon_siswa`, `nisn`, `nilai_bhs_indo`, `nilai_bhs_inggris`, `nilai_ipa`, `nilai_ips`, `nilai_mtk`, `nilai_akhir`, `keterangan`) VALUES
(1, 5, 5, '1651502001', '85', '85', '85', '85', '85', '85', 'Ok'),
(2, 5, 6, '1651502001', '85', '85', '85', '85', '85', '85', 'ok'),
(3, 6, 7, '1651502001', '85', '85', '85', '85', '85', '85', 'Isi oke'),
(4, 7, 0, '1651502001', '85', '85', '85', '85', '85', '85', 'Ok'),
(5, 8, 0, '1651502001', '85', '85', '85', '85', '85', '85', 'Ok'),
(6, 9, 10, '3216548979', '85', '85', '85', '85', '85', '85', 'Oce'),
(7, 10, 11, '3216548979', '85', '85', '85', '85', '85', '85', 'Oke'),
(8, 11, 12, '1234563215', '85', '85', '85', '85', '85', '85', 'Tes'),
(9, 12, 13, '3334563215', '85', '85', '85', '85', '85', '85', 'aaaa'),
(10, 13, 14, '5554563215', '85', '85', '85', '85', '85', '85', 'aaabbbb'),
(11, 14, 15, '6664563215', '85', '85', '85', '85', '85', '85', 'aaavvasda'),
(12, 15, 16, '6664563215', '9', '9', '9', '9', '9', '9', 'Okay'),
(13, 15, 17, '3216548900', '85', '85', '85', '85', '85', '85', 'OK'),
(14, 16, 18, '3216548966', '85', '85', '85', '85', '85', '85', 'ABC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_pendaftaran`
--

CREATE TABLE `pengumuman_pendaftaran` (
  `id` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_tahun_ajaran` int(3) NOT NULL,
  `link_files` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman_pendaftaran`
--

INSERT INTO `pengumuman_pendaftaran` (`id`, `judul`, `deskripsi`, `id_tahun_ajaran`, `link_files`, `is_active`, `tgl_update`) VALUES
(1, 'Tambah Pengumuman PPDB', 'Oke ngetest pengumuman', 3, '', 1, '2023-12-14'),
(2, 'Tambah Pengumuman PPDB 2023', 'Ngetes lagi', 2, '', 1, '2023-12-14'),
(3, 'Title test - change property', 'Ok', 3, '', 1, '2023-12-26'),
(4, 'Ngetes ZIP Pendukung', '<p>Ini adalah konten deskripsi, ubah berkasnya, ubah lagi bro</p>', 3, '1703560269-2023-12-26-041109.zip', 0, '0000-00-00'),
(5, 'Nambah anyar', '<p>Create dengan berkas</p>', 3, '1703560432-2023-12-26-041352.zip', 1, '0000-00-00'),
(6, 'Create Lagi - Berberkas', '<p>Ngetes format</p>', 3, '1703560471-2023-12-26-041431.rar', 1, '2023-12-26'),
(7, 'PPDB 2024 - 2025 SMK Al-Hamidiyah Kedoya', '<p>Berkas kelengkapan adalah : <br>\r\n1. Ijazah - scan berwarna</p>\r\n\r\n<p>2. Rapor - salinan/ copy</p>\r\n\r\n<p>3. SKHUN SMP</p>\r\n\r\n<p>4. Akta </p>\r\n\r\n<p>5. Dst</p>\r\n\r\n<p>6. Lengkapi semua.</p>\r\n\r\n<p>Silakan disatukan dalam file zip / rar dan diupload.</p>', 3, '', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `tahun_ajaran`) VALUES
(2, 2023),
(3, 2024),
(5, 2025);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', '', 'admin', '123', 0),
(5, 'Dustin Jack', 'dustinjack21@yahoo.co.id', 'dustinjack21', '123', 1),
(6, 'Abdul Tk.', 'aku@abdul.com', 'abdul', '123', 1),
(8, 'MUHAMMAD ALIYYA ILMI', '', '165150200111055', '165150200111055', 1),
(9, 'Test Produk LCD', '', '3216548979', '3216548979', 1),
(10, 'Will Smith', '', '3216548979', '3216548979', 1),
(11, 'Test Produk LCD Kedua', '', '123456321543', '123456321543', 1),
(12, 'Test Produk LCD Ketiga', '', '333456321543', '333456321543', 1),
(13, 'Test Produk LCD Keempat', '', '555456321543', '555456321543', 1),
(14, 'Test Produk LCD Kelima', '', '666456321543', '666456321543', 1),
(15, 'Ilmi Aku', '', '6664563215', '6664563215', 1),
(16, 'Muhammad A Ilmi', 'ilmi@gmail.com', 'ilmi12345', 'ilmi12345', 1);

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
