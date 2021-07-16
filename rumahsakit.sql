-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 16.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kd_dokter` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gaji` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `nama`, `gender`, `alamat`, `gaji`) VALUES
('001', 'dr. Andi', 'L', 'Tapon', '10000000'),
('002', 'dr. Wardi', 'L', 'Menyer', '1000000'),
('003', 'dr. Akmal', 'L', 'Lebui', '10000000'),
('004', 'dr. Aini', 'P', 'Praya', '10000000'),
('005', 'dr. Agis', 'L', 'Tanggor', '10000000'),
('006', 'dr. Adinda', 'P', 'Butak', '10000000'),
('007', 'dr. Tria', 'P', 'Mataram', '10000000'),
('008', 'dr. Samiah', 'P', 'Lebui', '10000000'),
('009', 'dr. Khaela', 'P', 'Butak', '10000000'),
('010', 'dr. Keisha', 'P', 'Lebui', '10000000'),
('011', 'dr. Zahra Cantik', 'P', 'Lebui', '10000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `kd_jadwal` char(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `kd_dokter` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`kd_jadwal`, `hari`, `shift`, `kd_dokter`) VALUES
('001', 'Selasa', 'Pagi', '004'),
('002', 'Senin', 'Siang', '002'),
('003', 'Rabu', 'Pagi Hari', '003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kd_obat` char(5) NOT NULL,
  `obat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kd_obat`, `obat`) VALUES
('001', 'Acarbose'),
('002', 'ACE Inhibitor'),
('003', 'Paracetamol'),
('004', 'Acetazolamide'),
('005', 'Acetylcysteine'),
('006', 'Acitretin'),
('007', 'Actifed'),
('008', 'Albendazole'),
('009', 'Bacitracin'),
('010', 'Baclofen'),
('011', 'Benazepril'),
('012', 'Caladine Lotion'),
('013', 'Ciclopirox'),
('014', 'Dapsone'),
('015', 'Enalapril'),
('016', 'Entecapir'),
('017', 'Esmolol'),
('018', 'Famotidine'),
('019', 'Feminax'),
('020', 'Fibrinogen'),
('021', 'Fungiderm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `kd_pasien` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `periksa` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`kd_pasien`, `nama`, `gender`, `alamat`, `periksa`) VALUES
('001', 'Senang Rifai yasin', 'L', 'Puyung', '1'),
('002', 'Sri Wahyuni Putri', 'P', 'Waker', '2'),
('003', 'Muhammad Khairi Pafian', 'L', 'Praya', '2'),
('004', 'Agus', 'L', 'Praya', '1'),
('005', 'Indah', 'P', 'Mapong', '3'),
('006', 'Deni', 'L', 'Janapria', '5'),
('007', 'Gilang', 'L', 'Bakan', '3'),
('008', 'Gugun', 'L', 'Lebui', '6'),
('009', 'Gunawan', 'L', 'Tengari', '10'),
('010', 'DEDY HARDIANSYAH', 'L', 'Bolor', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Petugas','Administrator','Dokter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'akmal', 'akmaludin', 'Petugas'),
(2, 'akmal', 'akmaludin', 'Petugas'),
(3, 'Jihad', 'jihad', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` varchar(5) NOT NULL,
  `penyakit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kd_penyakit`, `penyakit`) VALUES
('001', 'Leukimia'),
('002', 'Kanker Rahim'),
('003', 'Asam Urat'),
('004', 'Corona 19'),
('005', 'Kanker Rahim'),
('006', 'Asam Lambung'),
('007', 'Asbes Gigi'),
('008', 'Covid 19'),
('009', 'Demam Berdarah'),
('010', 'Rabies'),
('011', 'Chikunguya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `kd_resep` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kd_pasien` char(5) NOT NULL,
  `kd_penyakit` char(5) NOT NULL,
  `kd_obat` char(5) NOT NULL,
  `kd_dokter` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`kd_resep`, `hari`, `tanggal`, `kd_pasien`, `kd_penyakit`, `kd_obat`, `kd_dokter`) VALUES
(1, 'Selasa', '2021-07-08 19:59:56', '001', '002', '021', '001'),
(2, 'Selasa', '2021-07-13 20:43:13', '002', '003', '018', '008'),
(3, 'kamis', '2021-07-16 00:00:00', '005', '006', '005', '010');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kd_dokter`);

--
-- Indeks untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`kd_jadwal`),
  ADD UNIQUE KEY `kd_dokter` (`kd_dokter`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kd_pasien`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`kd_resep`),
  ADD UNIQUE KEY `kd_pasien` (`kd_pasien`),
  ADD UNIQUE KEY `kd_penyakit` (`kd_penyakit`),
  ADD UNIQUE KEY `kd_obat` (`kd_obat`),
  ADD UNIQUE KEY `kd_dokter` (`kd_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD CONSTRAINT `jadwal_dokter_ibfk_1` FOREIGN KEY (`kd_dokter`) REFERENCES `dokter` (`kd_dokter`);

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `fk.kd_penyakit` FOREIGN KEY (`kd_penyakit`) REFERENCES `penyakit` (`kd_penyakit`),
  ADD CONSTRAINT `fk_kd_obat` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`),
  ADD CONSTRAINT `fk_kd_pasien` FOREIGN KEY (`kd_pasien`) REFERENCES `pasien` (`kd_pasien`),
  ADD CONSTRAINT `resep_ibfk_4` FOREIGN KEY (`kd_dokter`) REFERENCES `dokter` (`kd_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
