-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Oca 2021, 13:31:00
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
-- Tablo için tablo yapısı `arabamarka`
--

CREATE TABLE `arabamarka` (
  `markaModel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `arabamarka`
--

INSERT INTO `arabamarka` (`markaModel`) VALUES
('Audi R8'),
('BMW 3.20'),
('BMW 3.30'),
('BMW i8'),
('Bugatti Veyron'),
('Chevrolet Camaro'),
('Chevrolet Cruz'),
('Ford Fiesta'),
('Ford Mustang'),
('Lamborghini Aventador'),
('Renault Megane'),
('Wolksvagen Golf'),
('Wolksvagen Scirocco'),
('Wolkvagen Passat');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arabamarka`
--
ALTER TABLE `arabamarka`
  ADD PRIMARY KEY (`markaModel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
