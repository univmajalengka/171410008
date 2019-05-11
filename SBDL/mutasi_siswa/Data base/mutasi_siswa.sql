-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2019 pada 16.28
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mutasi_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kompetensi`
--

CREATE TABLE IF NOT EXISTS `data_kompetensi` (
  `id_kompetensi` int(11) NOT NULL,
  `nama_kompetensi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kompetensi`
--

INSERT INTO `data_kompetensi` (`id_kompetensi`, `nama_kompetensi`) VALUES
(11798842, 'Bahasa Indonesia'),
(11798843, 'Psikologi'),
(11798849, 'Antropologi'),
(11798851, 'Bahasa Inggris'),
(11798853, 'Fisika'),
(11798854, 'Kimia'),
(11798855, 'Biologi'),
(11798856, 'Geografi'),
(11798857, 'Ekonomi'),
(11798858, 'Sosiologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mutasi_keluar`
--

CREATE TABLE IF NOT EXISTS `data_mutasi_keluar` (
  `id_mutkel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `sekolah_tujuan` varchar(25) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `alasan` varchar(25) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mutasi_keluar`
--

INSERT INTO `data_mutasi_keluar` (`id_mutkel`, `id_siswa`, `id_sekolah`, `no_surat`, `tgl_surat`, `sekolah_tujuan`, `alamat`, `alasan`, `tgl_input`) VALUES
(2147483345, 11798703, 2147483511, '0002', '2018-07-12', 'SMA Kertajati', 'Majalengka', 'Sering Bolos', '2018-07-17'),
(2147483547, 11790705, 2147483642, '0091', '2018-08-17', 'MAN Talaga', 'Talaga', 'SPP Lebih murah', '2018-08-23'),
(2147483603, 11798703, 2147483644, '0079', '2018-03-09', 'SMKN Jatiwangi', 'Jatiwangi', 'Sering bolos', '2018-03-15'),
(2147483617, 11798707, 2147483619, '0077', '2018-08-27', 'SMA Kertajati', 'Kertajati', 'Pindah Rumah', '2018-09-02'),
(2147483632, 11798709, 2147483640, '0091', '2018-10-12', 'SMKN Talaga', 'Talaga', 'Dikeluarkan', '2018-10-17'),
(2147483647, 11798710, 2147483603, '0018', '2017-01-23', 'MA PUI Banjaran', 'Banjaran', 'Pindah Rumah', '2017-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mutasi_masuk`
--

CREATE TABLE IF NOT EXISTS `data_mutasi_masuk` (
  `id_mutmas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `sekolah_asal` varchar(25) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `tgl_surat` date NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `alasan` varchar(25) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mutasi_masuk`
--

INSERT INTO `data_mutasi_masuk` (`id_mutmas`, `id_siswa`, `sekolah_asal`, `alamat`, `no_surat`, `tgl_surat`, `id_sekolah`, `alasan`, `tanggal_input`) VALUES
(1197854705, 11797416, 'SMK Talaga', 'Talaga', '0095', '2016-02-17', 2147483413, 'SPP lebih murah', '2016-02-19'),
(1197854716, 11797401, 'SMK Kertajati', 'Kertajati', '0065', '2019-05-13', 2147483409, 'Pindah Rumah', '2019-05-14'),
(1197854721, 11790705, 'SMKN Talaga', 'Majalengka', '0001', '2017-02-11', 2147483647, 'Lebih dekat dari rumah', '2017-02-17'),
(1197854722, 11797418, 'MA PUI Maja', 'Maja', '0075', '2017-06-21', 2147483452, 'Dikeluarkan', '2017-06-26'),
(1197854736, 11797402, 'SMA Talaga', 'Talaga', '0092', '2018-05-22', 2147483475, 'Pindah Rumah', '2018-06-30'),
(1197854764, 11797422, 'MA DU Talaga', 'Talaga', '0021', '2017-09-11', 2147483407, 'SPP lebih murah', '2017-09-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `user` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama`, `user`, `password`) VALUES
(11798001, 'Bambang Perkasa', 'BambangPerkasa', '1234'),
(11798002, 'Asep Subagja', 'AsepSubagja', '9876'),
(11798003, 'Yudi Supriadi', 'YudiSupriadi', '003'),
(11798004, 'Atin Prihatin', 'AtinPrihatin', '004'),
(11798005, 'Sintia Lamusung', 'SintiaLamusung', 'fwr3536'),
(11798006, 'Aluna Lestari', 'AlunaLestari', 'r3r3t33'),
(11798007, 'Alex Sinaga', 'AlexSinaga', 'jihihu3'),
(11798008, 'Juan Christian', 'JuanChristian', '243364g'),
(11798009, 'Fauji Firmansyah', 'FaujiFirmansyah', '54321'),
(11798010, 'Alan Sentani', 'AlanSentani', 'dadada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE IF NOT EXISTS `data_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`) VALUES
(2147483407, 'SMK Majalengka', 'Majalengka'),
(2147483409, 'SMA Maja', 'Maja'),
(2147483413, 'MA DU Talaga', 'Talaga'),
(2147483452, 'SMA Cikijing', 'Cikijing'),
(2147483457, 'MA PUI Banjaran', 'Banjaran'),
(2147483475, 'SMKN Talaga', 'Talaga'),
(2147483540, 'MA PUI Maja', 'Maja'),
(2147483647, 'SMAN 1 Majalengka', 'Majalengka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL COMMENT 'laki-laki,perempuan',
  `kelas` int(1) NOT NULL,
  `id_kompetensi` int(11) NOT NULL,
  `orang_tua` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `kelas`, `id_kompetensi`, `orang_tua`) VALUES
(11790704, 'Rahma Anjani', 'Bandung', '2001-08-10', 'P', 2, 11798853, 'Adam Samudra'),
(11790705, 'Gio Maulana Yusuf', 'Majalengka', '2001-12-16', 'L', 2, 11798857, 'Ade Ruli'),
(11790706, 'Fikri Zulfikar', 'Majalengka', '2002-11-21', 'L', 1, 11798855, 'Ahmad Susanto'),
(11798701, 'Revan Anggara', 'Majalengka', '2000-09-17', 'L', 1, 11798853, 'Hendrianto'),
(11798702, 'Haikal Adiyasa', 'Bandung', '2000-11-22', 'L', 3, 11798858, 'Santoso'),
(11798703, 'Rahmat Maulana', 'Majalengka', '2002-03-06', 'L', 1, 11798856, 'Baharudin Yusup'),
(11798707, 'Putri Sofia', 'Majalengka', '2000-09-17', 'P', 3, 11798855, 'Ahmad Sanusi'),
(11798708, 'Yasmin Angelina', 'Bandung', '2001-12-04', 'P', 2, 11798854, 'Budi Pratama'),
(11798709, 'Yurika Restanti', 'Jakarta', '2000-07-09', 'P', 3, 11798854, 'Yahya Sumargo'),
(11798710, 'Sinta Lestari', 'Bandung', '2001-05-17', 'P', 2, 11798853, 'Jajang Amrullah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kompetensi`
--
ALTER TABLE `data_kompetensi`
 ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `data_mutasi_keluar`
--
ALTER TABLE `data_mutasi_keluar`
 ADD PRIMARY KEY (`id_mutkel`), ADD KEY `id_sekolah` (`id_sekolah`), ADD KEY `id_siswa` (`id_siswa`), ADD KEY `id_sekolah_2` (`id_sekolah`), ADD KEY `id_siswa_2` (`id_siswa`), ADD KEY `id_siswa_3` (`id_siswa`), ADD KEY `id_sekolah_3` (`id_sekolah`), ADD KEY `id_siswa_4` (`id_siswa`), ADD KEY `id_siswa_5` (`id_siswa`), ADD KEY `id_siswa_6` (`id_siswa`), ADD KEY `id_siswa_7` (`id_siswa`);

--
-- Indexes for table `data_mutasi_masuk`
--
ALTER TABLE `data_mutasi_masuk`
 ADD PRIMARY KEY (`id_mutmas`), ADD KEY `id_sekolah` (`id_sekolah`), ADD KEY `sekolah_asal` (`sekolah_asal`), ADD KEY `id_sekolah_2` (`id_sekolah`), ADD KEY `id_sekolah_3` (`id_sekolah`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
 ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
 ADD PRIMARY KEY (`id_siswa`), ADD KEY `id_kompetensi` (`id_kompetensi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_mutasi_keluar`
--
ALTER TABLE `data_mutasi_keluar`
ADD CONSTRAINT `data_mutasi_keluar_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `data_siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `data_mutasi_masuk`
--
ALTER TABLE `data_mutasi_masuk`
ADD CONSTRAINT `data_mutasi_masuk_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `data_sekolah` (`id_sekolah`);

--
-- Ketidakleluasaan untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`id_kompetensi`) REFERENCES `data_kompetensi` (`id_kompetensi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
