-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2021, 13:30:08
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `freecodetube`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiralama`
--

CREATE TABLE `kiralama` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonNo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `markaModel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gecerlilikTarihi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kiralama`
--
ALTER TABLE `kiralama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `markaModel` (`markaModel`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kiralama`
--
ALTER TABLE `kiralama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kiralama`
--
ALTER TABLE `kiralama`
  ADD CONSTRAINT `kiralama_ibfk_1` FOREIGN KEY (`markaModel`) REFERENCES `arabamarka` (`markaModel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
