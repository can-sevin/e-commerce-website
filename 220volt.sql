-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 27 Oca 2018, 04:53:13
-- Sunucu sürümü: 5.6.36-cll-lve
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `220volt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` text NOT NULL,
  `email` text NOT NULL,
  `sifre` int(11) DEFAULT '0',
  `yetki` text,
  `durum` text,
  `resim` blob,
  `sehir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `resim`, `sehir`) VALUES
(1, 'Can Sevin', 'mcancaglak@hotmail.com', 123, 'admin', 'aktif', '', 'Antalya'),
(3, 'dsdsaas', 'asdsaasd@gmail.com', 0, 'admin', 'aktif', '', 'Istanbul'),
(4, 'Kübra Aktürk', 'kubra@gmail.com', 123456789, NULL, NULL, NULL, 'Istanbul'),
(5, 'bü?ranur', 'dursun@gmail.com', 789, NULL, NULL, NULL, 'Istanbul'),
(6, 'kkk', 'kkk@mynet.com', 345, NULL, NULL, NULL, 'Istanbul'),
(26, 'Özge Cengiz', 'ozge@mynet.com', 123, 'admin', 'aktif', '', 'Antalya'),
(38, 'sdfdfs', 'mcancaglak@gmail.com', 123, NULL, NULL, NULL, 'Istanbul'),
(39, 'Batuhan Karaaslan', 'batuhankaraaslan@windowslive.com', 0, NULL, NULL, NULL, 'Antalya'),
(40, 'Gamze  ERSOY', 'gamze_busenaz@hotmail.com', 0, NULL, NULL, NULL, 'Izmir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stmpserver` varchar(11) DEFAULT NULL,
  `stmpport` int(11) DEFAULT '0',
  `stmpmail` varchar(50) DEFAULT NULL,
  `password` text,
  `adres` varchar(255) DEFAULT NULL,
  `sehir` varchar(20) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `iletisim` text,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `pinterest` varchar(50) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `ad`, `keywords`, `description`, `name`, `stmpserver`, `stmpport`, `stmpmail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `iletisim`, `facebook`, `twitter`, `instagram`, `pinterest`, `telefon`) VALUES
(1, '220VoltMarkt', 'ucuz,teknoloji,elektronik', 'En ucuza satan teknoloji magaza zinciri', '220 volt markt', '', 3535, 'mcancaglak@gmail.com', '15031994fb', 'Genel Mudurluk\nBarbaros Mahallesi, Mor Sümbül Sok No 7 Nida Kule Atasehir Güney Posta Kodu 34746 Atasehir  Istanbul \n\nMüsteri Hizmetleri\n0850 222 55 99', 'Istanbul', NULL, NULL, NULL, 'Genel Mudurluk\nBarbaros Mahallesi, Mor Sümbül Sok No 7 Nida Kule Atasehir Güney Posta Kodu 34746 Atasehir  Istanbul \n\nMüsteri Hizmetleri\n0850 222 55 99', '220 volt markt', 'can_sevin', '220 volt markt', 'dfsfsdfsd', 'dfsaadfadsf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(255) DEFAULT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `parent_id`, `ad`, `description`, `keywords`, `resim`) VALUES
(1, '0', 'Bilgisayar', NULL, NULL, NULL),
(2, '0', 'Telefon', NULL, NULL, NULL),
(3, '0', 'Ev', NULL, NULL, NULL),
(4, '0', 'Kozmetik', NULL, NULL, NULL),
(5, '1', 'Masaüstü', NULL, NULL, NULL),
(6, '1', 'Dizüstü', NULL, NULL, NULL),
(7, '2', 'Android', NULL, NULL, NULL),
(8, '2', 'Ios', NULL, NULL, NULL),
(9, '4', 'Kadin', NULL, NULL, NULL),
(10, '4', 'Erkek', NULL, NULL, NULL),
(11, '1', 'Aksesuar', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  `durum` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`Id`, `adsoy`, `email`, `tel`, `mesaj`, `durum`, `tarih`, `IP`) VALUES
(1, 'Mahmut can ', 'mcancaglak@gmail.com', NULL, 'helloo', NULL, NULL, NULL),
(2, 'Mahmut can ', 'mcancaglak@gmail.com', NULL, 'heloo', NULL, NULL, NULL),
(3, 'Mahmut can ', 'mcancaglak@hotmail.com', NULL, 'erwwreewrrwe', NULL, NULL, '::1'),
(4, 'ghjkl', 'hj', NULL, 'hg', NULL, NULL, '95.9.197.107'),
(5, 'afsdn', 'mcancaglak@hotmail.com', NULL, 'Hellooo', NULL, NULL, '178.246.199.246');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE IF NOT EXISTS `sepet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `adet` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`Id`, `musteri_id`, `urun_id`, `adet`, `tarih`) VALUES
(10, '26', '11', '1', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE IF NOT EXISTS `siparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  `odemesekli` varchar(255) DEFAULT NULL,
  `odemedurumu` varchar(255) DEFAULT NULL,
  `siparisdurumu` varchar(255) NOT NULL DEFAULT 'Yeni',
  `adres` varchar(255) DEFAULT NULL,
  `ilce` varchar(255) DEFAULT NULL,
  `sehir` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL,
  `kargo` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`Id`, `musteri_id`, `tarih`, `IP`, `tutar`, `odemesekli`, `odemedurumu`, `siparisdurumu`, `adres`, `ilce`, `sehir`, `tel`, `adsoy`, `kargo`, `aciklama`) VALUES
(1, '1', '2017', '::1', '690', 'Kredi Kart?', 'Ödendi', 'Yeni', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(2, '1', '2017', '::1', '690', 'Kredi Kart?', 'Ödendi', 'Onayland?', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(3, '1', '2018', '::1', '690', NULL, NULL, 'Haz?rlan?yor', NULL, NULL, '?stanbul', NULL, 'Can Sevin', NULL, NULL),
(4, '1', '2005', '::1', '350', NULL, NULL, 'Kargoda', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1', NULL, '::1', '880', NULL, NULL, '', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(6, '1', NULL, '::1', '190', NULL, NULL, '', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(7, '1', NULL, '::1', '190', NULL, NULL, '', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(8, '1', NULL, '::1', '190', NULL, NULL, '', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(9, '1', NULL, '::1', '190', NULL, NULL, '', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(10, '1', NULL, '::1', '380', NULL, NULL, 'Yeni', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(11, '1', NULL, '178.246.199.246', '190', NULL, NULL, 'Yeni', NULL, NULL, 'Antalya', NULL, 'Can Sevin', NULL, NULL),
(12, '6', NULL, '95.12.254.117', '15', NULL, NULL, 'Yeni', NULL, NULL, 'Istanbul', NULL, 'kkk', NULL, NULL),
(13, '40', NULL, '193.140.8.21', '1000', NULL, NULL, 'Yeni', NULL, NULL, 'Izmir', NULL, 'Gamze  ERSOY', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE IF NOT EXISTS `siparis_urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` varchar(255) DEFAULT NULL,
  `siparis_id` varchar(255) DEFAULT NULL,
  `urun_id` varchar(255) DEFAULT NULL,
  `adet` varchar(255) DEFAULT NULL,
  `fiyat` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `tutar` varchar(255) DEFAULT NULL,
  `siparis_durumu` varchar(255) NOT NULL DEFAULT 'Yeni',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `musteri_id`, `siparis_id`, `urun_id`, `adet`, `fiyat`, `tarih`, `ad`, `tutar`, `siparis_durumu`) VALUES
(1, '1', '1', '6', '1', '190', '2015', 'tras', '190', ''),
(2, '1', '1', '7', '1', '500', '2015', 'camasir', '500', ''),
(3, '1', '2', '6', '1', '190', '2016', 'tras', '190', ''),
(4, '1', '2', '7', '1', '500', '2016', 'camasir', '500', ''),
(5, '1', '3', '6', '1', '190', '2016', 'tras', '190', ''),
(6, '1', '3', '7', '1', '500', '2016', 'camasir', '500', ''),
(7, '1', '5', '6', '1', '190', NULL, 'tras', '190', ''),
(8, '1', '5', '7', '1', '500', NULL, 'camasir', '500', ''),
(9, '1', '5', '6', '1', '190', NULL, 'tras', '190', ''),
(10, '1', '6', '6', '1', '190', NULL, 'tras', '190', ''),
(11, '1', '9', '6', '1', '190', NULL, 'tras', '190', 'Yeni'),
(12, '1', '10', '6', '1', '190', NULL, 'tras', '190', 'Yeni'),
(13, '1', '10', '6', '1', '190', NULL, 'tras', '190', 'Yeni'),
(14, '1', '11', '6', '1', '190', NULL, 'tras', '190', 'Yeni'),
(15, '6', '12', '12', '1', '15', NULL, 'mouse', '15', 'Yeni'),
(16, '40', '13', '7', '1', '500', NULL, 'camasir makinesi', '500', 'Yeni'),
(17, '40', '13', '7', '1', '500', NULL, 'camasir makinesi', '500', 'Yeni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ulke`
--

CREATE TABLE IF NOT EXISTS `ulke` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) DEFAULT NULL,
  `kodu` varchar(255) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `afiyat` varchar(255) DEFAULT NULL,
  `sfiyat` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT '',
  `galeri` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `aciklama` varchar(255) DEFAULT NULL,
  `grubu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `ad`, `kodu`, `stok`, `kategori`, `afiyat`, `sfiyat`, `resim`, `galeri`, `description`, `keywords`, `aciklama`, `grubu`) VALUES
(1, 'iphone X', '111', NULL, '8', '6500', '6300', 'iphone.jpg', 'galeri', '<p>telefon</p>\r\n', NULL, NULL, 'indirim'),
(2, 'Samsung S8', '222', '50', '7', '4500', '4000', 's8.jpg', 'galeri', 'telefon', 'telefon,samsung', NULL, 'indirim'),
(3, 'Samsung S7', '333', '20', '7', '3000', '2800', 's7.jpg', 'galeri', 'telefon', 'telefon,samsung', NULL, 'firsat'),
(4, 'iphone 6', '1215', '20', '8', '2500', '2200', '6.jpg', 'galeri', 'telefon', 'telefon,apple', NULL, 'firsat'),
(5, 'kulaklik', '545', NULL, '11', '100', '90', 'akg.jpg', 'galeri', '<p>kulaklik</p>\r\n', NULL, NULL, 'firsat'),
(6, 'tras', '46546', '500', '10', '200', '190', 'braun.jpg', 'galeri', 'tras', 'tra?,braun', NULL, 'kampanya'),
(7, 'camasir makinesi', '864684', NULL, '3', '544', '500', 'camasir2.jpg', 'galeri', '<p>ev</p>\r\n', NULL, NULL, 'kampanya'),
(9, 'fon', '97', '100', '9', '98', '95', 'fon.jpg', 'galeri', 'fon', 'fon', NULL, 'kampanya'),
(10, 'hp', '454554', '30', '5', '5000', '4500', 'hp.jpg', 'galeri', 'bilgisayar masaüstü', 'hp,bilgisayar', NULL, 'indirim'),
(11, 'mac', '4848', '45', '6', '3000', '4500', 'mac.jpg', 'galeri', '<p>bilgisayar diz&uuml;st&uuml;</p>\r\n', 'mac,bilgisayar', NULL, 'indirim'),
(12, 'mouse', '44845', '50', '11', '20', '15', 'mouse.jpg', 'galeri', 'mouse', 'mouse', NULL, 'indirim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resim`
--

CREATE TABLE IF NOT EXISTS `urunler_resim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` varchar(255) DEFAULT NULL,
  `resim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `urunler_resim`
--

INSERT INTO `urunler_resim` (`Id`, `urun_id`, `resim`) VALUES
(1, '1', 'iphone.jpg'),
(2, '2', 's8.jpg'),
(3, '2', 's7.jpg'),
(4, '1', 's72.jpg'),
(5, '1', 's81.jpg'),
(6, '1', '5c.jpg'),
(7, '1', '5s.jpg'),
(8, '1', '6.jpg'),
(9, '1', '5c1.jpg'),
(10, '3', '61.jpg'),
(11, '3', 'iphone1.jpg'),
(12, '11', 'macbook_air-100538062-large1.jpg'),
(13, '11', 'banner_mac1.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
