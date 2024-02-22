-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2024 pada 15.54
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
-- Database: `sip_siswa_smk_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
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
-- Struktur dari tabel `calon_siswa`
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
  `tgl_daftar` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ijazah`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman_pendaftaran`
--

CREATE TABLE `pengumuman_pendaftaran` (
  `id_pengumuman_pendaftaran` int(1) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_tahun_ajaran` int(3) NOT NULL,
  `link_files` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Administrator', '', 'admin', '123', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(1) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`, `tgl_update`) VALUES
(1, 'Membentuk sumber daya manusia yang beriman, berpengetahuan, terampil, serta mandiri', '1. Membimbing siswa untuk menjadi tenaga kerja bertaqwa dan mandiri.\\n \r\n2. Membentuk siswa untuk menjadi tenaga kerja berdedikasi professional.\\n \r\n3. Menyiapkan siswa untuk menjadi tenaga kerja yang dibutuhkan oleh dunia usaha, baik masa sekarang maupun masa yang akan datang.\\n \r\n4. Memberikan Pendidikan, pengetahuan, dan keterampilan.\\n ', '2023-12-05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_calon_siswa`);

--
-- Indeks untuk tabel `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  ADD PRIMARY KEY (`id_nilai_ijazah`);

--
-- Indeks untuk tabel `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  ADD PRIMARY KEY (`id_pengumuman_pendaftaran`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_calon_siswa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `nilai_ijazah`
--
ALTER TABLE `nilai_ijazah`
  MODIFY `id_nilai_ijazah` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengumuman_pendaftaran`
--
ALTER TABLE `pengumuman_pendaftaran`
  MODIFY `id_pengumuman_pendaftaran` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
