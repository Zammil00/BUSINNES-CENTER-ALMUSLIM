-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 31. Mei 2014 jam 03:19
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `percetakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `no_pemesan` int(10) NOT NULL,
  `kd_barang` int(10) NOT NULL,
  `nm_barang` varchar(20) NOT NULL,
  `jml_barang` int(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  PRIMARY KEY (`no_pemesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`no_pemesan`, `kd_barang`, `nm_barang`, `jml_barang`, `total_harga`, `tgl_pemesanan`, `nm_pelanggan`) VALUES
(101, 101, 'Blangko Diagnosa	', 20, 194000, '2012-03-03', 'ulfa'),
(102, 102, 'Undangan KL	', 100, 200000, '2012-04-03', 'ulfa'),
(103, 103, 'Gantungan Kartu	', 150, 240000, '2012-04-05', 'ulfa'),
(104, 104, 'Kartu Nama	', 100, 70000, '2012-04-08', 'ulfa'),
(105, 105, 'Kartu Pembayaran	', 610, 183000, '2012-02-09', 'ulfa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `no_permintaan` int(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kd_barang` int(10) NOT NULL,
  `nm_barang` varchar(20) NOT NULL,
  `jml_Barang` int(20) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `nama_pemasok` varchar(25) NOT NULL,
  PRIMARY KEY (`no_permintaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`no_permintaan`, `tgl_masuk`, `kd_barang`, `nm_barang`, `jml_Barang`, `total_harga`, `nama_pemasok`) VALUES
(201, '2013-03-03', 101, 'a	', 50, 250, 'Zakaria'),
(202, '2011-01-01', 102, 'Pulpen	', 20, 200, 'Mahyudi'),
(203, '2011-01-01', 212, 'Buku AA	', 30, 300, 'Muhammad'),
(204, '2011-01-01', 102, 'Pulpen	', 40, 400, 'Rizki'),
(205, '2013-01-01', 102, 'Pulpen	', 50, 500, 'Rudiansyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favplayer`
--

CREATE TABLE IF NOT EXISTS `favplayer` (
  `nama` varchar(30) NOT NULL,
  `suara` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `favplayer`
--

INSERT INTO `favplayer` (`nama`, `suara`) VALUES
('Bagus', 8),
('Cukup', 3),
('Kurang', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iphits`
--

CREATE TABLE IF NOT EXISTS `iphits` (
  `ip` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iphits`
--

INSERT INTO `iphits` (`ip`, `tanggal`) VALUES
('127.0.0.1', '2012-05-22'),
('127.0.0.1', '2012-05-23'),
('127.0.0.1', '2012-05-25'),
('127.0.0.1', '2012-05-26'),
('127.0.0.1', '2012-05-29'),
('127.0.0.1', '2012-06-01'),
('127.0.0.1', '2012-06-02'),
('127.0.0.1', '2012-06-09'),
('127.0.0.1', '2012-06-12'),
('127.0.0.1', '2012-06-22'),
('127.0.0.1', '2012-07-04'),
('::1', '2012-10-22'),
('127.0.0.1', '2012-10-22'),
('::1', '2013-11-25'),
('::1', '2014-01-07'),
('::1', '2014-01-22'),
('::1', '2014-02-04'),
('::1', '2014-03-08'),
('::1', '2014-04-11'),
('::1', '2014-04-14'),
('::1', '2014-04-15'),
('::1', '2014-04-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oc_calendar`
--

CREATE TABLE IF NOT EXISTS `oc_calendar` (
  `id` mediumint(9) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_plg` int(10) NOT NULL,
  `username_plg` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp_plg` varchar(15) NOT NULL,
  PRIMARY KEY (`id_plg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_plg`, `username_plg`, `password`, `nm_pelanggan`, `alamat`, `email`, `notelp_plg`) VALUES
(101, 'fitriani', '12345', 'ulfa', 'bireuen', 'fitriani@yahoo.com', '085213558'),
(102, 'zuki', '12345', 'Zuki', 'Bireuen', 'zuki@gmail.com', '085213559'),
(103, 'rudi', '12345', 'Rudiansyah', 'Matangglumpangdua', 'rudi_ansyah@yahoo.com', '085213505');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_bayar` int(10) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(25) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `nama_bank` varchar(10) NOT NULL,
  `nominal_pembayaran` int(20) NOT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `no_pemesan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pemesan` varchar(25) NOT NULL,
  `nm_barang` varchar(20) NOT NULL,
  `jml_Barang` int(4) NOT NULL,
  `hrg_barang` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  PRIMARY KEY (`no_pemesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`no_pemesan`, `nama_pemesan`, `nm_barang`, `jml_Barang`, `hrg_barang`, `total`) VALUES
(101, 'Rinaldi', 'Blangko Diagnosa', 5, '13400', '67000'),
(102, 'Azis', 'Undangan KL', 100, '1700', '170000'),
(103, 'Hamdani', 'Undangan C-01', 100, '1500', '150000'),
(104, 'Nuraina', 'Cetak Timbul', 11, '14000', '154000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE IF NOT EXISTS `permintaan` (
  `no_permintaan` int(10) NOT NULL,
  `tgl_permintaan` varchar(25) NOT NULL,
  `id_pemasok` varchar(20) NOT NULL,
  `nama_pemasok` varchar(20) NOT NULL,
  PRIMARY KEY (`no_permintaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`no_permintaan`, `tgl_permintaan`, `id_pemasok`, `nama_pemasok`) VALUES
(201, '2012-04-03', '101', 'Zakaria	'),
(202, '2012-01-12', '102', 'Mahyudi	'),
(203, '2012-03-02', '103', 'Muhammad	'),
(204, '2012-04-15', '104', 'Rizki	'),
(205, '2012-03-09', '105', 'Rudiansyah	'),
(206, '2012-01-01', '', 'andi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kd_barang` int(10) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `jlh_brg` int(8) NOT NULL,
  `hrg_barang` int(10) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`kd_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kd_barang`, `nm_barang`, `jlh_brg`, `hrg_barang`, `foto`) VALUES
(101, 'a', 4, 4, 'Desert.jpg'),
(102, 'Pulpen', 5, 15000, 'IMG0072A.jpg'),
(212, 'Buku AA', 2, 2500, '3e7733701a591b888e08363e97c65c6c.jpg'),
(251, 'Spidol', 9, 67000, 'fhg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `IDUser` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `NamaUser` varchar(35) NOT NULL,
  `Level` varchar(10) NOT NULL,
  PRIMARY KEY (`IDUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbluser`
--

INSERT INTO `tbluser` (`IDUser`, `Password`, `NamaUser`, `Level`) VALUES
('divmanager', '123', 'mahyu', 'manager'),
('divuser', '123', 'fitriani', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
