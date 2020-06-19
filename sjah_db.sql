-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mei 2020 pada 10.47
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjah_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` varchar(18) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `username` varchar(7) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `nama_admin`, `jabatan`, `username`, `password`, `foto`, `kode`) VALUES
('1234567890987689', 'Evie Ermawati', 'Kasi Distribusi', 'admin1', '321', 'default.jpg', 'Evie1123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `pengirim` varchar(45) NOT NULL,
  `asal_hotel` varchar(45) NOT NULL,
  `file` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `tahun`, `bulan`, `pengirim`, `asal_hotel`, `file`) VALUES
(32, '2019', '7', 'Ashoka', 'Ashoka Hotel', 'Entry_Koperasi_1871_2019_(REVISI).xlsx'),
(33, '2019', '8', 'Ashoka', 'Ashoka Hotel', 'VHTS_(30).XLSX'),
(35, '2019', '8', 'Sikampai Hotel', 'Sikampai Hotel', 'VHTS_(29).xlsx'),
(36, '2019', '8', 'Ashoka', 'Ashoka Hotel', 'VHTS_(29)1.xlsx'),
(40, '2020', '4', 'Ashoka', 'Ashoka Hotel', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `jumhari` enum('28','29','30','31') NOT NULL,
  `file` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id_form`, `jumhari`, `file`) VALUES
(9, '29', 'VHTS_(29).xlsx'),
(10, '30', 'VHTS_(30).xlsx'),
(11, '31', 'VHTS_(31).xlsx'),
(12, '28', 'VHTS_(28).xlsx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `nama_responden` varchar(40) NOT NULL,
  `nama_hotel` varchar(40) NOT NULL,
  `user` varchar(7) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`nama_responden`, `nama_hotel`, `user`, `password`, `foto`, `kode`) VALUES
('Ashoka', 'Ashoka Hotel', 'user1', '123', 'default.jpg', 'Ashoka1123'),
('Emersia Hotel', 'Emersia Hotel', 'user10', '123', 'default.jpg', 'Emersia10123'),
('Risdian Penginapan', 'Risdian Penginapan', 'user11', '123', 'default.jpg', 'Risdian11123'),
('Aini Wisma', 'Aini Wisma', 'user12', '123', 'default.jpg', 'Aini12123'),
('Grande Hotel', 'Grande Hotel', 'user13', '123', 'default.jpg', 'Grande13123'),
('Kurnia Dua Hotel', 'Kurnia Dua Hotel', 'user14', '123', 'default.jpg', 'Kurnia14123'),
('Andalas Hotel', 'Andalas Hotel', 'user15', '123', 'default.jpg', 'Andalas15123'),
('Grand Praba Hotel', 'Grand Praba Hotel', 'user16', '123', 'default.jpg', 'Grand16123'),
('Nuwo Tasya', 'Nuwo Tasya', 'user17', '123', 'default.jpg', 'Nuwo17123'),
('Nusantara Hotel Syariah', 'Nusantara Hotel Syariah', 'user18', '123', 'default.jpg', 'Nusantara18123'),
('Kosotel', 'Kosotel', 'user19', '123', 'default.jpg', 'Kosotel19123'),
('Sikampai Hotel', 'Sikampai Hotel', 'user2', '123', 'default.jpg', 'Sikampai2123'),
('24 Guest House Hotel', '24 Guest House Hotel', 'user20', '123', 'default.jpg', '24Guest20123'),
('Ratu Ayu Hotel', 'Ratu Ayu Hotel', 'user21', '123', 'default.jpg', 'Ratu21123'),
('Amalia Hotel', 'Amalia Hotel', 'user22', '123', 'default.jpg', 'Amalia22123'),
('Pelangi Resident', 'Pelangi Resident', 'user23', '123', 'default.jpg', 'Pelangi23123'),
('Palapa Guest House', 'Palapa Guest House', 'user24', '123', 'default.jpg', 'Palapa24123'),
('Yunna Hotel', 'Yunna Hotel', 'user25', '123', 'default.jpg', 'Yunna25123'),
('Aston Hotel', 'Aston Hotel', 'user26', '123', 'default.jpg', 'Aston26123'),
('Pacific Hotel', 'Pacific Hotel', 'user27', '123', 'default.jpg', 'Pacific27123'),
('Pop Hotel', 'Pop Hotel', 'user28', '123', 'default.jpg', 'Pop28123'),
('Whiz Prime Lampung', 'Whiz Prime Lampung', 'user29', '123', 'default.jpg', 'Whiz29123'),
('Krida Wisata Hotel', 'Krida Wisata Hotel', 'user3', '123', 'default.jpg', 'Krida3123'),
('Batiqa', 'Batiqa', 'user30', '123', 'default.jpg', 'Batiqa30123'),
('Horison Hotel', 'Horison Hotel', 'user31', '123', 'default.jpg', 'Horison31123'),
('Sari Damai', 'Sari Damai', 'user32', '123', 'default.jpg', 'Sari32123'),
('Sriwijaya Hotel', 'Sriwijaya Hotel', 'user33', '123', 'default.jpg', 'Sriwijaya33123'),
('Gatam Wisma', 'Gatam Wisma', 'user34', '123', 'default.jpg', 'Gatam34123'),
('Narita Wisma', 'Narita Wisma', 'user35', '123', 'default.jpg', 'Narita35123'),
('Rimbawan Pondok Guest House', 'Rimbawan Pondok Guest House', 'user36', '123', 'default.jpg', 'Rimbawan36123'),
('Palapa Pondok Penginapan', 'Palapa Pondok Penginapan', 'user37', '123', 'default.jpg', 'Palapa37123'),
('Sahid Hotel', 'Sahid Hotel', 'user38', '123', 'default.jpg', 'Sahid38123'),
('Rahmat Hotel', 'Rahmat Hotel', 'user39', '123', 'default.jpg', 'Rahmat39123'),
('Herline Hotel', 'Herline Hotel', 'user4', '123', 'default.jpg', 'Herlina4123'),
('Angkasa Penginapan', 'Angkasa Penginapan', 'user40', '123', 'default.jpg', 'Angkasa40123'),
('Andalas Asri Wisma', 'Andalas Asri Wisma', 'user41', '123', 'default.jpg', 'Andalas41123'),
('Novotel Hotel', 'Novotel Hotel', 'user42', '123', 'default.jpg', 'Novotel42123'),
('Marcopolo Hotel', 'Marcopolo Hotel', 'user43', '123', 'default.jpg', 'Marcopolo43123'),
('Anugrah Express Hotel', 'Anugrah Express Hotel', 'user44', '123', 'default.jpg', 'Anugrah44123'),
('Arnes Central Hotel', 'Arnes Central Hotel', 'user45', '123', 'default.jpg', 'Arnes45123'),
('Arinas Hotel', 'Arinas Hotel', 'user46', '123', 'default.jpg', 'Arinas46123'),
('Grand Anugerah', 'Grand Anugerah', 'user47', '123', 'default.jpg', 'Grand47123'),
('Sheraton Hotel', 'Sheraton Hotel', 'user48', '123', 'default.jpg', 'Sheraton48123'),
('Bukit Randu Hotel', 'Bukit Randu Hotel', 'user49', '123', 'default.jpg', 'Bukit49123'),
('Omah Akas', 'Omah Akas', 'user5', '123', 'default.jpg', 'Omah5123'),
('Mini Tanjung Karang', 'Mini Tanjung Karang', 'user50', '123', 'default.jpg', 'Mini50123'),
('Mulia Indah', 'Mulia Indah', 'user51', '123', 'default.jpg', 'Mulia51123'),
('Tirtayasa Hotel', 'Tirtayasa Hotel', 'user52', '123', 'default.jpg', 'Tirtayasa52123'),
('Guest House Kutilang Syariah', 'Guest House Kutilang Syariah', 'user7', '123', 'default.jpg', 'GuestHouse7123'),
('Swiss BelHotel', 'Swiss BelHotel', 'user8', '123', 'default.jpg', 'Swiss8123'),
('Gunung Sari Penginapan Losmen', 'Gunung Sari Penginapan Losmen', 'user9', '123', 'default.jpg', 'Gunung9123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
