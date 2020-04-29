-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 05.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penderita_covid_19`
--

CREATE TABLE `penderita_covid_19` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(20) NOT NULL,
  `total_cases` int(11) NOT NULL,
  `new_cases` int(11) NOT NULL,
  `total_deaths` int(11) NOT NULL,
  `new_deaths` int(11) NOT NULL,
  `total_recovered` int(11) NOT NULL,
  `active_cases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penderita_covid_19`
--

INSERT INTO `penderita_covid_19` (`country_id`, `country_name`, `total_cases`, `new_cases`, `total_deaths`, `new_deaths`, `total_recovered`, `active_cases`) VALUES
(1, 'USA', 1029878, 19522, 58640, 1843, 140138, 831100),
(2, 'Spain', 232128, 2706, 23822, 301, 123903, 84403),
(3, 'Italy', 201505, 2091, 27359, 382, 68941, 105205),
(4, 'France', 165911, 2638, 23660, 367, 46886, 95365),
(5, 'UK', 161145, 3996, 21678, 586, 0, 139123),
(6, 'Germany', 159431, 673, 6215, 89, 117400, 35816),
(7, 'Turkey', 114653, 2392, 2992, 92, 38809, 72852),
(8, 'Russia', 93558, 6411, 867, 73, 8456, 84235),
(9, 'Iran', 92584, 1112, 5877, 71, 72439, 14268),
(10, 'China', 82836, 6, 4633, 0, 77555, 648);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penderita_covid_19`
--
ALTER TABLE `penderita_covid_19`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penderita_covid_19`
--
ALTER TABLE `penderita_covid_19`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
