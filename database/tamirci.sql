-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Ağu 2021, 13:18:13
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tamirci`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedin` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_yedek` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_telefon`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_facebook`, `ayar_twitter`, `ayar_linkedin`, `ayar_footer`, `ayar_adres`, `ayar_mail`, `ayar_fax`, `ayar_yedek`) VALUES
(0, 'images/logo.png', '0850 800 80 80 ', 'Site 1', 'Eğitim PHP', 'tamirci sitesi, php , hüseyin dayanır', 'https://facebook.com', 'https://twitter.com', 'https://www.linkedin.com', 'Copyright © Bu sitenin tüm hakları Hüseyin DAYANIRa aittir. :)', 'KONYA/ TÜRKİYE', 'hsyndayanir@gmail.com', '0850 800 80 80 ', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ek` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `menu_ad`, `menu_link`, `menu_ek`) VALUES
(1, 'Hakkımızda', 'https://www.huseyindayanir.me', ''),
(16, 'Youtube', 'https://www.youtube.com/', ''),
(17, 'GitHub', 'https://www.github.com', ''),
(30, 'Menu', 'https://www.google.com', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_url`, `slider_sira`) VALUES
(3, 'Slider1', 'uploads/22713203842420222923slider1.jpg', '', '5'),
(4, 'Slider2', 'uploads/29137249792946426105slider2.jpg', '', '3'),
(6, 'Slider3', 'uploads/26023264702639628056slider3.jpg', '', '2'),
(9, 'Slider5', 'uploads/31973315362911124651slider3.jpg', '', '4');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
