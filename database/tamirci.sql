-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Ağu 2021, 15:53:17
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
(0, 'images/logo.png', '0850 800 80 80 ', 'Site 12', 'Eğitim PHP', 'tamirci sitesi, php , hüseyin dayanır', 'https://facebook.com', 'https://twitter.com', 'https://www.linkedin.com', 'Copyright © Bu sitenin tüm hakları Hüseyin DAYANIRa aittir. :)', 'KONYA/ TÜRKİYE', 'hsyndayanir@gmail.com', '0850 800 80 80 ', '');

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
(30, 'Menu', 'admin/ayarlar.php', ''),
(33, 'İletişim', 'iletisim', ''),
(34, 'a', 'https://www.', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_tarih` datetime NOT NULL,
  `sayfa_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_sira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `sayfa_anasayfa` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_tarih`, `sayfa_ad`, `sayfa_icerik`, `sayfa_sira`, `sayfa_anasayfa`) VALUES
(8, '2021-08-12 11:42:00', 'Modül 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex ligula, viverra et ante nec, varius dapibus odio. In mattis lacus et diam congue, at aliquet nunc sagittis. Cras sed ultrices neque. In ut odio nibh. Vestibulum sagittis ullamcorper diam, vitae malesuada turpis fermentum vel. Vestibulum ac varius ex. Quisque ultrices pretium orci, ac sollicitudin quam suscipit eu. Maecenas sem nunc, laoreet ut tristique vitae, pulvinar et diam.</p>\r\n\r\n<p>Praesent non ipsum ac felis pretium facilisis sed vitae ex. Etiam ac tincidunt diam, eget suscipit mi. Morbi cursus nisl non lectus porttitor tempus. Nam sodales molestie magna, eu feugiat diam maximus non. Aliquam ligula dolor, ultrices vitae venenatis eu, elementum vitae dolor. Curabitur aliquet, tellus sit amet vulputate luctus, ex dui gravida lectus, sed egestas nibh nisi nec eros. Quisque convallis euismod pulvinar. Vivamus porta lacus eu est dapibus, eu semper mauris eleifend. Nam sollicitudin turpis sed consectetur pellentesque. Duis aliquam fringilla libero. Quisque vulputate mauris eu quam rutrum bibendum. Nullam vel ex at mi iaculis mattis. Nullam lacinia turpis vel nisl sollicitudin eleifend. Morbi laoreet leo non lorem aliquam, at tempor mauris pretium. Donec at lacinia magna, non lacinia magna. Nunc tristique imperdiet lectus non fringilla.</p>\r\n\r\n<p>Donec in lacus sem. Nunc a mi ut felis ultrices tincidunt. Vivamus pretium sit amet nisl ut tempor. Quisque ac metus a diam dictum lobortis imperdiet at lectus. Vivamus id odio ut justo rhoncus pulvinar. Nullam iaculis viverra velit, in tempus augue efficitur ac. Curabitur interdum tortor nec velit malesuada, et vestibulum orci pellentesque. Aenean at ligula metus. In in congue tortor. Aliquam ligula lorem, aliquet at risus vitae, placerat molestie nibh.</p>\r\n\r\n<p>Morbi mattis nunc ut finibus mattis. Vivamus nulla dolor, gravida vitae dolor mattis, faucibus euismod orci. Aenean eget maximus risus. Sed rhoncus vulputate leo a pulvinar. Aenean feugiat hendrerit erat. Suspendisse tortor tortor, bibendum eu dictum a, gravida ac libero. Aliquam quis cursus est. Sed condimentum ipsum sit amet est mattis posuere. In vel sem massa. Vestibulum commodo in erat id vehicula. Nam iaculis sollicitudin purus molestie tincidunt. Donec sed sollicitudin enim.</p>\r\n\r\n<p>Morbi sodales justo vitae ante bibendum imperdiet. Nulla accumsan ac odio vel vulputate. Aenean quis diam libero. Nulla rhoncus congue risus, a imperdiet ex pharetra in. Quisque tincidunt blandit augue, in vestibulum massa tincidunt at. Suspendisse consectetur magna nisl, vel ornare libero pharetra id. Vivamus eget lorem eu nunc pulvinar posuere id eu nisi. Nulla dictum rhoncus ligula, sit amet feugiat quam convallis a. Vivamus a lacinia sapien. Phasellus ac neque felis. Sed consequat magna dolor, ut egestas nisi vehicula at. Suspendisse finibus nulla leo, et porta sem porttitor in. Cras fringilla pharetra malesuada. Integer eget hendrerit metus. Donec dapibus condimentum est non porta. Etiam non tellus a dui gravida condimentum at at leo.</p>\r\n', '3', '0'),
(9, '2021-08-12 11:42:00', 'Modül 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex ligula, viverra et ante nec, varius dapibus odio. In mattis lacus et diam congue, at aliquet nunc sagittis. Cras sed ultrices neque. In ut odio nibh. Vestibulum sagittis ullamcorper diam, vitae malesuada turpis fermentum vel. Vestibulum ac varius ex. Quisque ultrices pretium orci, ac sollicitudin quam suscipit eu. Maecenas sem nunc, laoreet ut tristique vitae, pulvinar et diam.</p>\r\n\r\n<p>Praesent non ipsum ac felis pretium facilisis sed vitae ex. Etiam ac tincidunt diam, eget suscipit mi. Morbi cursus nisl non lectus porttitor tempus. Nam sodales molestie magna, eu feugiat diam maximus non. Aliquam ligula dolor, ultrices vitae venenatis eu, elementum vitae dolor. Curabitur aliquet, tellus sit amet vulputate luctus, ex dui gravida lectus, sed egestas nibh nisi nec eros. Quisque convallis euismod pulvinar. Vivamus porta lacus eu est dapibus, eu semper mauris eleifend. Nam sollicitudin turpis sed consectetur pellentesque. Duis aliquam fringilla libero. Quisque vulputate mauris eu quam rutrum bibendum. Nullam vel ex at mi iaculis mattis. Nullam lacinia turpis vel nisl sollicitudin eleifend. Morbi laoreet leo non lorem aliquam, at tempor mauris pretium. Donec at lacinia magna, non lacinia magna. Nunc tristique imperdiet lectus non fringilla.</p>\r\n\r\n<p>Donec in lacus sem. Nunc a mi ut felis ultrices tincidunt. Vivamus pretium sit amet nisl ut tempor. Quisque ac metus a diam dictum lobortis imperdiet at lectus. Vivamus id odio ut justo rhoncus pulvinar. Nullam iaculis viverra velit, in tempus augue efficitur ac. Curabitur interdum tortor nec velit malesuada, et vestibulum orci pellentesque. Aenean at ligula metus. In in congue tortor. Aliquam ligula lorem, aliquet at risus vitae, placerat molestie nibh.</p>\r\n\r\n<p>Morbi mattis nunc ut finibus mattis. Vivamus nulla dolor, gravida vitae dolor mattis, faucibus euismod orci. Aenean eget maximus risus. Sed rhoncus vulputate leo a pulvinar. Aenean feugiat hendrerit erat. Suspendisse tortor tortor, bibendum eu dictum a, gravida ac libero. Aliquam quis cursus est. Sed condimentum ipsum sit amet est mattis posuere. In vel sem massa. Vestibulum commodo in erat id vehicula. Nam iaculis sollicitudin purus molestie tincidunt. Donec sed sollicitudin enim.</p>\r\n\r\n<p>Morbi sodales justo vitae ante bibendum imperdiet. Nulla accumsan ac odio vel vulputate. Aenean quis diam libero. Nulla rhoncus congue risus, a imperdiet ex pharetra in. Quisque tincidunt blandit augue, in vestibulum massa tincidunt at. Suspendisse consectetur magna nisl, vel ornare libero pharetra id. Vivamus eget lorem eu nunc pulvinar posuere id eu nisi. Nulla dictum rhoncus ligula, sit amet feugiat quam convallis a. Vivamus a lacinia sapien. Phasellus ac neque felis. Sed consequat magna dolor, ut egestas nisi vehicula at. Suspendisse finibus nulla leo, et porta sem porttitor in. Cras fringilla pharetra malesuada. Integer eget hendrerit metus. Donec dapibus condimentum est non porta. Etiam non tellus a dui gravida condimentum at at leo.</p>\r\n', '1', '1'),
(10, '2021-08-12 11:42:00', 'Modül 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex ligula, viverra et ante nec, varius dapibus odio. In mattis lacus et diam congue, at aliquet nunc sagittis. Cras sed ultrices neque. In ut odio nibh. Vestibulum sagittis ullamcorper diam, vitae malesuada turpis fermentum vel. Vestibulum ac varius ex. Quisque ultrices pretium orci, ac sollicitudin quam suscipit eu. Maecenas sem nunc, laoreet ut tristique vitae, pulvinar et diam.</p>\r\n\r\n<p>Praesent non ipsum ac felis pretium facilisis sed vitae ex. Etiam ac tincidunt diam, eget suscipit mi. Morbi cursus nisl non lectus porttitor tempus. Nam sodales molestie magna, eu feugiat diam maximus non. Aliquam ligula dolor, ultrices vitae venenatis eu, elementum vitae dolor. Curabitur aliquet, tellus sit amet vulputate luctus, ex dui gravida lectus, sed egestas nibh nisi nec eros. Quisque convallis euismod pulvinar. Vivamus porta lacus eu est dapibus, eu semper mauris eleifend. Nam sollicitudin turpis sed consectetur pellentesque. Duis aliquam fringilla libero. Quisque vulputate mauris eu quam rutrum bibendum. Nullam vel ex at mi iaculis mattis. Nullam lacinia turpis vel nisl sollicitudin eleifend. Morbi laoreet leo non lorem aliquam, at tempor mauris pretium. Donec at lacinia magna, non lacinia magna. Nunc tristique imperdiet lectus non fringilla.</p>\r\n\r\n<p>Donec in lacus sem. Nunc a mi ut felis ultrices tincidunt. Vivamus pretium sit amet nisl ut tempor. Quisque ac metus a diam dictum lobortis imperdiet at lectus. Vivamus id odio ut justo rhoncus pulvinar. Nullam iaculis viverra velit, in tempus augue efficitur ac. Curabitur interdum tortor nec velit malesuada, et vestibulum orci pellentesque. Aenean at ligula metus. In in congue tortor. Aliquam ligula lorem, aliquet at risus vitae, placerat molestie nibh.</p>\r\n\r\n<p>Morbi mattis nunc ut finibus mattis. Vivamus nulla dolor, gravida vitae dolor mattis, faucibus euismod orci. Aenean eget maximus risus. Sed rhoncus vulputate leo a pulvinar. Aenean feugiat hendrerit erat. Suspendisse tortor tortor, bibendum eu dictum a, gravida ac libero. Aliquam quis cursus est. Sed condimentum ipsum sit amet est mattis posuere. In vel sem massa. Vestibulum commodo in erat id vehicula. Nam iaculis sollicitudin purus molestie tincidunt. Donec sed sollicitudin enim.</p>\r\n\r\n<p>Morbi sodales justo vitae ante bibendum imperdiet. Nulla accumsan ac odio vel vulputate. Aenean quis diam libero. Nulla rhoncus congue risus, a imperdiet ex pharetra in. Quisque tincidunt blandit augue, in vestibulum massa tincidunt at. Suspendisse consectetur magna nisl, vel ornare libero pharetra id. Vivamus eget lorem eu nunc pulvinar posuere id eu nisi. Nulla dictum rhoncus ligula, sit amet feugiat quam convallis a. Vivamus a lacinia sapien. Phasellus ac neque felis. Sed consequat magna dolor, ut egestas nisi vehicula at. Suspendisse finibus nulla leo, et porta sem porttitor in. Cras fringilla pharetra malesuada. Integer eget hendrerit metus. Donec dapibus condimentum est non porta. Etiam non tellus a dui gravida condimentum at at leo.</p>\r\n', '2', '1'),
(11, '2021-08-12 15:09:00', 'Modül 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex ligula, viverra et ante nec, varius dapibus odio. In mattis lacus et diam congue, at aliquet nunc sagittis. Cras sed ultrices neque. In ut odio nibh. Vestibulum sagittis ullamcorper diam, vitae malesuada turpis fermentum vel. Vestibulum ac varius ex. Quisque ultrices pretium orci, ac sollicitudin quam suscipit eu. Maecenas sem nunc, laoreet ut tristique vitae, pulvinar et diam.</p>\r\n\r\n<p>Praesent non ipsum ac felis pretium facilisis sed vitae ex. Etiam ac tincidunt diam, eget suscipit mi. Morbi cursus nisl non lectus porttitor tempus. Nam sodales molestie magna, eu feugiat diam maximus non. Aliquam ligula dolor, ultrices vitae venenatis eu, elementum vitae dolor. Curabitur aliquet, tellus sit amet vulputate luctus, ex dui gravida lectus, sed egestas nibh nisi nec eros. Quisque convallis euismod pulvinar. Vivamus porta lacus eu est dapibus, eu semper mauris eleifend. Nam sollicitudin turpis sed consectetur pellentesque. Duis aliquam fringilla libero. Quisque vulputate mauris eu quam rutrum bibendum. Nullam vel ex at mi iaculis mattis. Nullam lacinia turpis vel nisl sollicitudin eleifend. Morbi laoreet leo non lorem aliquam, at tempor mauris pretium. Donec at lacinia magna, non lacinia magna. Nunc tristique imperdiet lectus non fringilla.</p>\r\n\r\n<p>Donec in lacus sem. Nunc a mi ut felis ultrices tincidunt. Vivamus pretium sit amet nisl ut tempor. Quisque ac metus a diam dictum lobortis imperdiet at lectus. Vivamus id odio ut justo rhoncus pulvinar. Nullam iaculis viverra velit, in tempus augue efficitur ac. Curabitur interdum tortor nec velit malesuada, et vestibulum orci pellentesque. Aenean at ligula metus. In in congue tortor. Aliquam ligula lorem, aliquet at risus vitae, placerat molestie nibh.</p>\r\n\r\n<p>Morbi mattis nunc ut finibus mattis. Vivamus nulla dolor, gravida vitae dolor mattis, faucibus euismod orci. Aenean eget maximus risus. Sed rhoncus vulputate leo a pulvinar. Aenean feugiat hendrerit erat. Suspendisse tortor tortor, bibendum eu dictum a, gravida ac libero. Aliquam quis cursus est. Sed condimentum ipsum sit amet est mattis posuere. In vel sem massa. Vestibulum commodo in erat id vehicula. Nam iaculis sollicitudin purus molestie tincidunt. Donec sed sollicitudin enim.</p>\r\n\r\n<p>Morbi sodales justo vitae ante bibendum imperdiet. Nulla accumsan ac odio vel vulputate. Aenean quis diam libero. Nulla rhoncus congue risus, a imperdiet ex pharetra in. Quisque tincidunt blandit augue, in vestibulum massa tincidunt at. Suspendisse consectetur magna nisl, vel ornare libero pharetra id. Vivamus eget lorem eu nunc pulvinar posuere id eu nisi. Nulla dictum rhoncus ligula, sit amet feugiat quam convallis a. Vivamus a lacinia sapien. Phasellus ac neque felis. Sed consequat magna dolor, ut egestas nisi vehicula at. Suspendisse finibus nulla leo, et porta sem porttitor in. Cras fringilla pharetra malesuada. Integer eget hendrerit metus. Donec dapibus condimentum est non porta. Etiam non tellus a dui gravida condimentum at at leo.</p>\r\n', '4', '1');

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
(3, 'Slider1', 'uploads/22713203842420222923slider1.jpg', '', '1'),
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
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

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
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
