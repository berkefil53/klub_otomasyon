-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Haz 2020, 13:30:27
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `u505175880_futbol_klubu`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `astakim`
--

CREATE TABLE `astakim` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` int(11) DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `astakim`
--

INSERT INTO `astakim` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(10, 'MİKAİL', 'ŞENTOP', 1995, '58973214678', '05387895454', 'DUDULLU MAH ŞİRİN SOKAK NO 11 DAİRE 4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullaniciler`
--

CREATE TABLE `kullaniciler` (
  `kulid` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kuladi` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kulsifre` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullaniciler`
--

INSERT INTO `kullaniciler` (`kulid`, `email`, `kuladi`, `kulsifre`, `admin_yetki`) VALUES
(1, '', 'admin', '12345', 0),
(3, 'aa@a.com', 'ogrenci', 'aa', 1),
(4, '', '', '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resim`
--

CREATE TABLE `resim` (
  `resim_id` int(11) NOT NULL,
  `resim_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `resim`
--

INSERT INTO `resim` (`resim_id`, `resim_ad`) VALUES
(98, '3328929774.JPG'),
(99, '3107930192.jpg'),
(100, '1283412777.jpg'),
(101, '2089832999.jpg'),
(102, '2136535077.jpg'),
(103, '2169243236.jpg'),
(104, '2592846193.jpg'),
(105, '2444135380.jpg'),
(106, '1207548766.jpg'),
(107, '4742533070.jpg'),
(108, '4283233761.jpg'),
(109, '3439225057.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u14`
--

CREATE TABLE `u14` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u14`
--

INSERT INTO `u14` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(78, 'MEHMET', 'YAVAŞ', 2004, '15489798978', '05346879878', 'HAMDİTAMPINAR CADDESİ NO 24 DAİRE 3 NİLÜFER BURSA.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u15`
--

CREATE TABLE `u15` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u16`
--

CREATE TABLE `u16` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u16`
--

INSERT INTO `u16` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(11, 'ŞEHMUZ', 'GİRT', 2003, '55555555555', '05340625398', 'ŞANLITURK SOKAK NO 43 DAİRE 3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u17`
--

CREATE TABLE `u17` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u17`
--

INSERT INTO `u17` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(8, 'TURAN', 'KILIÇ', 2002, '23112334576', '52369874123', 'TAHİR CADDESİ NO 33 DAİRE 8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u18`
--

CREATE TABLE `u18` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u18`
--

INSERT INTO `u18` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(5, 'SALİH', 'SENTURK', 2001, '24322111999', '05348975321', 'ULUBATLI HASAN CADDESİ GÜLHATMİ SOKAK NO 1 DAİRE 11 .');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u19`
--

CREATE TABLE `u19` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double DEFAULT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u19`
--

INSERT INTO `u19` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(9, 'UTKU', 'TUR', 2000, '34266657856', '53455555445', 'SALİH TAR SOKAK NO 33 DAİRE 1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `u21`
--

CREATE TABLE `u21` (
  `oyuncuid` int(11) NOT NULL,
  `oyuncuadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `oyuncusoyadi` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dogumtarihi` double NOT NULL,
  `tckimlik` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `u21`
--

INSERT INTO `u21` (`oyuncuid`, `oyuncuadi`, `oyuncusoyadi`, `dogumtarihi`, `tckimlik`, `telefon`, `adres`) VALUES
(5, 'BERKE', 'YILMAZ', 1999, '45333234645', '05342223343', 'MAHMUT ARDINÇ CADDESİ ÇİLEK SOKAK NO 33 DAİRE 3 .');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `astakim`
--
ALTER TABLE `astakim`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `kullaniciler`
--
ALTER TABLE `kullaniciler`
  ADD PRIMARY KEY (`kulid`);

--
-- Tablo için indeksler `resim`
--
ALTER TABLE `resim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `u14`
--
ALTER TABLE `u14`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u15`
--
ALTER TABLE `u15`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u16`
--
ALTER TABLE `u16`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u17`
--
ALTER TABLE `u17`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u18`
--
ALTER TABLE `u18`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u19`
--
ALTER TABLE `u19`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Tablo için indeksler `u21`
--
ALTER TABLE `u21`
  ADD PRIMARY KEY (`oyuncuid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `astakim`
--
ALTER TABLE `astakim`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kullaniciler`
--
ALTER TABLE `kullaniciler`
  MODIFY `kulid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `resim`
--
ALTER TABLE `resim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- Tablo için AUTO_INCREMENT değeri `u14`
--
ALTER TABLE `u14`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Tablo için AUTO_INCREMENT değeri `u15`
--
ALTER TABLE `u15`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `u16`
--
ALTER TABLE `u16`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `u17`
--
ALTER TABLE `u17`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `u18`
--
ALTER TABLE `u18`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `u19`
--
ALTER TABLE `u19`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `u21`
--
ALTER TABLE `u21`
  MODIFY `oyuncuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
