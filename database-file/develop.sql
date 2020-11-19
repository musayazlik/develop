-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Kas 2020, 12:38:11
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `develop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildiklerim_ayar`
--

CREATE TABLE `bildiklerim_ayar` (
  `bildiklerimAyar_id` int(11) NOT NULL,
  `bildiklerim_arkaPlanRenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `bildiklerim_yaziRenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `bildiklerim_yaziBorderRenk` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bildiklerim_ayar`
--

INSERT INTO `bildiklerim_ayar` (`bildiklerimAyar_id`, `bildiklerim_arkaPlanRenk`, `bildiklerim_yaziRenk`, `bildiklerim_yaziBorderRenk`) VALUES
(1, '#e9e9e9', '#34495e', 'rgba(255, 224, 0, 0.94)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildiklerim_ayar_öge`
--

CREATE TABLE `bildiklerim_ayar_öge` (
  `bildiklerim_id` int(11) NOT NULL,
  `bildiklerim_adi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `bildiklerim_renk` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `bildiklerim_deger` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bildiklerim_ayar_öge`
--

INSERT INTO `bildiklerim_ayar_öge` (`bildiklerim_id`, `bildiklerim_adi`, `bildiklerim_renk`, `bildiklerim_deger`) VALUES
(1, 'HTML', '#f1c40f', 80),
(2, 'CSS', '#3498db', 50),
(3, 'JAVA SCRİPT', '#e67e22', 20),
(4, 'PHP', '#8e44ad', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmalar`
--

CREATE TABLE `firmalar` (
  `firmalar_id` tinyint(2) NOT NULL,
  `firmalar_isim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `firmalar_logo` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `firmalar_url` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `firmalar_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `firmalar`
--

INSERT INTO `firmalar` (`firmalar_id`, `firmalar_isim`, `firmalar_logo`, `firmalar_url`, `firmalar_durum`) VALUES
(1, 'Samsung', 'http://logok.org/wp-content/uploads/2014/07/Samsung-logo-2015-Nobg.png', 'http://www.samsung.com/tr/', '1'),
(2, 'Apple', 'http://pngimg.com/uploads/apple_logo/apple_logo_PNG19679.png', 'https://www.apple.com/tr/', '1'),
(3, 'LG', 'https://www.phone.cam.ac.uk/images/lg-logo.png/image', 'http://www.lg.com/tr', '1'),
(4, 'Gns Solar', 'http://www.gnssolar.com/home/logoforhomepage', 'http://www.gnssolar.com', '1'),
(5, 'Hayat Su', 'http://www.firmasec.com/resim/7/hayat-su-damacana-8ad3bdf8642-bdtbbm.png', 'http://www.hayatsu.com.tr/', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda_ayar`
--

CREATE TABLE `hakkimda_ayar` (
  `hakkimda_id` int(11) NOT NULL,
  `hakkimda_metin` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan1_resim` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan2_resim` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan1_renk1` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan1_renk2` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan2_renk1` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_arkaplan2_renk2` varchar(70) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimda_ayar`
--

INSERT INTO `hakkimda_ayar` (`hakkimda_id`, `hakkimda_metin`, `hakkimda_arkaplan1_resim`, `hakkimda_arkaplan2_resim`, `hakkimda_arkaplan1_renk1`, `hakkimda_arkaplan1_renk2`, `hakkimda_arkaplan2_renk1`, `hakkimda_arkaplan2_renk2`) VALUES
(1, '<blockquote>dvbcgb<br></blockquote><div>\r\n\r\n<b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b> Praesent ut \r\nurna ut turpis pellentesque ullamcorper. Integer varius pulvinar leo at \r\nsagittis. Donec lobortis, nisi vitae malesuada vulputate, nunc massa \r\nsemper nisl, quis finibus massa leo ut enim. Aliquam vehicula magna vel \r\nlaoreet mollis. Sed nisl dui, condimentum vitae tempus eu, auctor id \r\nligula. Etiam interdum, arcu eget porta convallis, mi sapien egestas \r\nnisi, eu eleifend mauris orci ac tortor. Donec orci nunc, sodales nec \r\naugue sed, rutrum lacinia magna.<br><br>&nbsp;Phasellus pretium malesuada mi nec \r\nrutrum. Maecenas vitae tincidunt mi. Cras efficitur sapien sed nibh \r\nrutrum ullamcorper. Duis maximus consequat tellus, sed tincidunt orci \r\nviverra at. Maecenas vulputate a nibh venenatis dapibus. Mauris egestas \r\nhendrerit felis quis ultricies.\r\n\r\n\r\nEtiam vitae ligula efficitur leo dignissim tincidunt. Pellentesque \r\npharetra feugiat felis. Nunc luctus pharetra sem sit amet efficitur. \r\nProin id varius lacus. Donec laoreet urna eu ligula semper, ut \r\npellentesque arcu egestas. Sed efficitur varius lacus quis molestie. \r\nProin cursus et est volutpat vulputate.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque \r\nquis mauris eros. Curabitur dapibus leo at imperdiet dapibus. Phasellus \r\negestas id nibh id congue. Ut vestibulum finibus orci vel semper. \r\nPellentesque eget dui orci.<br><br>&nbsp;Sed dignissim urna ut urna consectetur, \r\nvitae ornare velit aliquam. Ut eget nulla at orci efficitur varius \r\nporttitor nec metus. Curabitur efficitur lorem ac enim hendrerit \r\ncommodo.\r\n\r\n\r\nProin ullamcorper aliquet sem, at ultricies nulla egestas tincidunt. \r\nCras est sem, efficitur ac tortor sed, mollis hendrerit quam. Phasellus \r\negestas ex ex, eget luctus erat sagittis vel.<br><br>&nbsp;Vivamus ultricies purus ut\r\n ligula mattis elementum. Aenean in vehicula turpis, placerat pharetra \r\nnunc. Sed in lacus nulla. Praesent congue consectetur laoreet. Ut \r\ndapibus, mi id sodales lacinia, sem augue aliquet metus, at tempor \r\nmauris magna id erat. Vivamus aliquet, lectus sed dignissim lacinia, \r\npurus risus porttitor nunc, eget placerat metus urna vitae lacus.\r\n\r\n<span>\r\n<br><br>Fusce luctus porttitor justo a rutrum. Donec sodales semper fringilla. \r\nMorbi mattis porttitor nisi, nec condimentum enim finibus vitae. Etiam \r\nut turpis ac eros convallis rhoncus. Maecenas sed augue sem. Suspendisse\r\n imperdiet rhoncus neque, sit amet finibus dolor ultrices nec. \r\nSuspendisse hendrerit lectus vitae lacinia feugiat. In hac habitasse \r\nplatea dictumst.\r\n</span></div><br>', 'images/hakkımda-arkaplan1-resim/26884index.jpg', 'images/hakkımda-arkaplan2-resim/29599573632.jpg', 'rgba(46, 204, 113, 0.63)', 'rgba(234, 0, 0, 0.48)', '#e74c3c', 'rgba(246, 246, 0, 0.65)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetlerim_ayar`
--

CREATE TABLE `hizmetlerim_ayar` (
  `hizmetlerim_id` int(11) NOT NULL,
  `hizmetlerim_renk` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_baslik_renk` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_baslik_border_renk` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetlerim_ayar`
--

INSERT INTO `hizmetlerim_ayar` (`hizmetlerim_id`, `hizmetlerim_renk`, `hizmetlerim_resim`, `hizmetlerim_baslik_renk`, `hizmetlerim_baslik_border_renk`) VALUES
(1, 'linear-gradient(to right, rgba(0, 255, 24, 0.49) 0%, rgba(255, 0, 0, 0.68) 100%)', 'vendors/images//24174283822023825953573632.jpg', '#e9e9e9', 'rgba(255, 224, 0, 0.94)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetlerim_ayar_öge`
--

CREATE TABLE `hizmetlerim_ayar_öge` (
  `hizmetlerim_oge_id` int(11) NOT NULL,
  `hizmetlerim_oge_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_oge_metin` text COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_oge_resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `hizmetlerim_oge_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetlerim_ayar_öge`
--

INSERT INTO `hizmetlerim_ayar_öge` (`hizmetlerim_oge_id`, `hizmetlerim_oge_baslik`, `hizmetlerim_oge_metin`, `hizmetlerim_oge_resim`, `hizmetlerim_oge_durum`) VALUES
(5, 'Html Tema Tasarımı', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. ', 'images/27652319313122130999HTML-Boşluk-Bırakma-Kodu.jpg', '0'),
(6, 'Php Script Yapımı', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'images/22779228172726628059lOt1IaYs93KKDe0TsWU6.png', '0'),
(7, 'Wordpress Tema Yapımı', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'images/22032222212632722654wordpress.png', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `instagram_ayar`
--

CREATE TABLE `instagram_ayar` (
  `instagram_id` int(11) NOT NULL,
  `instagram_access` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `instagram_kul` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `instagram_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `instagram_ayar`
--

INSERT INTO `instagram_ayar` (`instagram_id`, `instagram_access`, `instagram_kul`, `instagram_durum`) VALUES
(1, '1429287761.1677ed0.fc77b418d2264c8da7f9bc8a09fe7d91', '1429287761', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adiSoyad` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` enum('Admin','Müşteri') COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Müşteri',
  `kullanici_yetki` enum('1','2','3') COLLATE utf8_turkish_ci NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adiSoyad`, `kullanici_mail`, `kullanici_resim`, `kullanici_password`, `kullanici_unvan`, `kullanici_yetki`) VALUES
(3, 'Admin admin', '123@123.com', 'http://www.designskilz.com/random-users/images/imageM33.jpg', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Admin', '1'),
(9, 'Audrey K. Carter', '1234@1234.com', 'http://via.placeholder.com/150', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'Müşteri', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajlar_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `mesajlar_adi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_soyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_konu` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_tel` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_metin` text COLLATE utf8_turkish_ci NOT NULL,
  `mesajlar_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesajlar_id`, `kullanici_id`, `mesajlar_adi`, `mesajlar_soyad`, `mesajlar_mail`, `mesajlar_konu`, `mesajlar_tel`, `mesajlar_metin`, `mesajlar_durum`) VALUES
(6, 0, 'Musa', 'Yazlık', 'musayazlik1997@gmail.com', 'Merhaba İlk İletişim', '05316245214', 'awefsrgthryjtkuuyjtrterawe', '0'),
(8, 0, 'Mustafa', 'Korkmaz', 'mustafakorkmaz@gmail.com', 'Şikayet', '05317245124', 'Benim bir şikayetim var.', '0'),
(9, 0, 'Emrah', 'Güngör', 'emrahgungor@gmail.com', 'Fiyat sorma', '05342153252', 'Php scripti hizmetiniz hakkında bilgi almak istemekteyim. En yakın zamanda benimle iletişime geçerseniz sevinirim.', '0'),
(14, 0, 'Esat ', 'Gülen', 'esatgulen@gmail.com', 'Okumak', '05315342514', 'Merhaba Bu bir deneme mesajıdır', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE `sosyal` (
  `sosyal_id` int(11) NOT NULL,
  `facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `codepen` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `github` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`sosyal_id`, `facebook`, `instagram`, `twitter`, `linkedin`, `codepen`, `github`) VALUES
(1, 'https://www.facebook.com/    ', 'https://www.instagram.com/    ', 'https://twitter.com/    ', 'https://www.linkedin.com/      ', 'https://codepen.io/        ', 'https://github.com/        ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorumlar_id` int(11) NOT NULL,
  `kullanici_id` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `yorumlar_metin` text COLLATE utf8_turkish_ci NOT NULL,
  `yorumlar_onay` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorumlar_id`, `kullanici_id`, `yorumlar_metin`, `yorumlar_onay`) VALUES
(8, '9', 'luşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hamp', '1'),
(9, '9', 'Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır.', '1'),
(10, '1', 'Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır.', '1'),
(11, '5', 'Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır.', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildiklerim_ayar`
--
ALTER TABLE `bildiklerim_ayar`
  ADD PRIMARY KEY (`bildiklerimAyar_id`);

--
-- Tablo için indeksler `bildiklerim_ayar_öge`
--
ALTER TABLE `bildiklerim_ayar_öge`
  ADD PRIMARY KEY (`bildiklerim_id`);

--
-- Tablo için indeksler `firmalar`
--
ALTER TABLE `firmalar`
  ADD PRIMARY KEY (`firmalar_id`);

--
-- Tablo için indeksler `hakkimda_ayar`
--
ALTER TABLE `hakkimda_ayar`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Tablo için indeksler `hizmetlerim_ayar`
--
ALTER TABLE `hizmetlerim_ayar`
  ADD PRIMARY KEY (`hizmetlerim_id`);

--
-- Tablo için indeksler `hizmetlerim_ayar_öge`
--
ALTER TABLE `hizmetlerim_ayar_öge`
  ADD PRIMARY KEY (`hizmetlerim_oge_id`);

--
-- Tablo için indeksler `instagram_ayar`
--
ALTER TABLE `instagram_ayar`
  ADD PRIMARY KEY (`instagram_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajlar_id`);

--
-- Tablo için indeksler `sosyal`
--
ALTER TABLE `sosyal`
  ADD PRIMARY KEY (`sosyal_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorumlar_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildiklerim_ayar`
--
ALTER TABLE `bildiklerim_ayar`
  MODIFY `bildiklerimAyar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bildiklerim_ayar_öge`
--
ALTER TABLE `bildiklerim_ayar_öge`
  MODIFY `bildiklerim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `firmalar`
--
ALTER TABLE `firmalar`
  MODIFY `firmalar_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda_ayar`
--
ALTER TABLE `hakkimda_ayar`
  MODIFY `hakkimda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetlerim_ayar`
--
ALTER TABLE `hizmetlerim_ayar`
  MODIFY `hizmetlerim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetlerim_ayar_öge`
--
ALTER TABLE `hizmetlerim_ayar_öge`
  MODIFY `hizmetlerim_oge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `instagram_ayar`
--
ALTER TABLE `instagram_ayar`
  MODIFY `instagram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesajlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `sosyal`
--
ALTER TABLE `sosyal`
  MODIFY `sosyal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorumlar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
