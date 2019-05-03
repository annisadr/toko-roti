-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 16. Juni 2017 jam 14:49
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abebakers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `eaddress` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `title` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `name`, `eaddress`, `phonenumber`, `title`, `message`, `level`) VALUES
(1, 'taeyang', 'taeyang@gmail.com', '089653039005', 'apa itu abe bakers?', 'abe bakers apaan sih?', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `namapembeli` varchar(50) NOT NULL,
  `nomortelepon` int(20) NOT NULL,
  `apengiriman` varchar(100) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `jamdelivery` varchar(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `username`, `namapembeli`, `nomortelepon`, `apengiriman`, `kota`, `jamdelivery`, `qty`) VALUES
(1, 'user', 'annisa', 2147483647, 'danamon', 'Bekasi', 'jamdeliver', 0),
(2, 'user', 'youngbae', 291038, 'seol', 'Jakarta', 'jamdeliver', 0),
(3, 'user', 'annisa', 2147483647, 'danamon', 'Bekasi', 'jamdeliver', 0),
(4, '', '', 0, '', '--pilih kota--', 'jamdeliver', 0),
(5, '', '', 0, '', '--pilih kota--', 'jamdeliver', 0),
(6, 'user', 'annisa', 2147483647, 'cibubur', 'Bekasi', 'jamdeliver', 0),
(7, 'user', 'ema', 91128491, 'babelan', 'Bekasi', 'jamdeliver', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `breadname` varchar(30) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `breadname`, `harga`, `gambar`) VALUES
(1, 'choco bread', '3000', ''),
(2, 'vanila bread', '5000', 'vb.jpg'),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `address`, `email`, `phonenumber`, `level`) VALUES
(11, 'Annisa Dwi Rosalina', 'admin', 'admin', 'danamon', 'annisadwirosalina@yahoo.com', '087802340567', 'admin'),
(13, 'kwon ji young', 'user', 'user', 'seol', 'jiyong23@gmail.com', '0283912831', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
