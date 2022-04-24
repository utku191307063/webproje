-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Nis 2022, 18:07:39
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `sifre` text NOT NULL,
  `email` text NOT NULL,
  `telefon` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ad`, `soyad`, `sifre`, `email`, `telefon`, `id`) VALUES
('nur', 'saymaz', '$2y$10$tGL79FGxrznGGW7DqviuFursYzN.gh5/WBlMrWaI2sCcBqytThqu.', 'nur@gmail.com', '05336366613', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `hakkımızda` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`id`, `hakkımızda`, `adres`, `telefon`, `mail`) VALUES
(1, 'Kuruluşumuzdan buyana süre gelen kaliteli ürünlerimiz ve güler yüzlü çalışanlarımız sunduğu hizmet ile siz sevgili müşterilerimiz memnuniyeti için var gücümüzle çalışıyoruz.', 'Petrol-iş Mh., Üsküdar Cd. No:98, 34862 Kartal/İstanbul', '(0216) 517 12 93', 'sanoptikkartal@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkımızda`
--

CREATE TABLE `hakkımızda` (
  `id` int(11) NOT NULL,
  `bir` text DEFAULT NULL,
  `iki` text DEFAULT NULL,
  `üc` text DEFAULT NULL,
  `baslık` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkımızda`
--

INSERT INTO `hakkımızda` (`id`, `bir`, `iki`, `üc`, `baslık`) VALUES
(6, '10 yılı aşkın süredir süre gelen tecrübeimiz ve bünyemizde bulunan onlarca marka çeşitliliği ile siz sevgili müşterilerimize hizmet vermekteyiz', 'Mağazamız ilk olarak 2004 tarihinde kurucumuz olan Tamer Özdemir tarafından pendik ilçeşinde kuruldu. Kuruluşumuzdan ardından geçen yıllarda tecrübemize tecrübe kalitemize kalite kattık .', 'Bu yılların ardından mağazamızı 2010 yılında Kartal semtine taşıdık ve burada müşterlirimize var gücümüzle hizmet vermeye devam ettik. 2010 yılından günümüze kadar burada siz sevgili müşterilerimiz ile birlikteyiz.', 'Hayatı Güzel Görmeniz İçin ....');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `numara` text NOT NULL,
  `faks` text NOT NULL,
  `adres` text NOT NULL,
  `email` text NOT NULL,
  `harita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `numara`, `faks`, `adres`, `email`, `harita`) VALUES
(1, 'San Optik', '(0216) 517 12 93', '(0216) 517 12 93', 'Petrol-iş Mh., Üsküdar Cd. No:98, 34862 Kartal/İstanbul', 'sanoptikkartal@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12063.420489770295!2d29.1724245!3d40.8969928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x639eda535585b942!2sSan%20Optik!5e0!3m2!1str!2str!4v1637688200767!5m2!1str!2str');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanıcılar`
--

CREATE TABLE `kullanıcılar` (
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `sifre` text NOT NULL,
  `email` text NOT NULL,
  `telefon` text NOT NULL,
  `id` int(11) NOT NULL,
  `hesap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanıcılar`
--

INSERT INTO `kullanıcılar` (`ad`, `soyad`, `sifre`, `email`, `telefon`, `id`, `hesap`) VALUES
('tolga', 'şengül', '$2y$10$A0tU2YsnuUQVTZFFk3g21eGpQxxSSjNCbDGNit56SfWZ0vqleNDmO', 'tolga_44_mavi@hotmail.com', '05332975411', 1, 'aktif'),
('mehmet', 'aslan', '$2y$10$dIWbaZSl8lKtPrslIkFjuewvdYf7i/Dg4hOtl7ON1d1QWbcnvQFf.', 'mehmet@gmail.com', '05346331244', 3, 'inaktif'),
('Ahmet', 'ışık', '$2y$10$nMbqM73pNiGlNMyMDNxssuytu70BmhwAT3HvN3GCkf0FYSLn4HYVi', 'ahmet@gmail.com', '05346331244', 4, 'aktif'),
('Tolga', 'Şengül', '$2y$10$t2PNlvgWe/Mo6dxmulJ0v.2A5lXfFJhO7YwACSzY6WPA6S7ocwKvS', 'sengulalitolga@gmail.com', '05358765656', 5, 'aktif'),
('Utku Oğulcan', 'Erdoğan', '$2y$10$G7/AaaUZPJbnNJ0jJaANvOuBY5gZiE9rnxicrC.gsbja8IKqxbD/i', 'utkuoglcn.7@gmail.com', '05358765656', 6, 'aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(11) NOT NULL,
  `ürünid` text NOT NULL,
  `kullanıcıid` int(11) NOT NULL,
  `ürünadı` text NOT NULL,
  `fiyat` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `ürünid`, `kullanıcıid`, `ürünadı`, `fiyat`, `resim`) VALUES
(25, '11', 3, 'Ray-ban', '1150', '1650484951.png'),
(26, '11', 3, 'Ray-ban', '1150', '1650484951.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `ürünid` text NOT NULL,
  `kullanıcıid` int(11) NOT NULL,
  `durum` text NOT NULL,
  `kullanıcıadı` text NOT NULL,
  `tutar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `ürünid`, `kullanıcıid`, `durum`, `kullanıcıadı`, `tutar`) VALUES
(9, ' Ray-ban Ray-ban', 3, 'iptal edildi', '', ''),
(10, 'Ürün Adı: Ray-banÜrün id: 11Ürün Adı: Ray-banÜrün id: 11', 3, 'onaylandı', '', ''),
(11, ' Ürün Adı: Ray-ban Ürün id: 11 Ürün Adı: Ray-ban Ürün id: 11', 3, 'onaylandı', 'mehmet', ''),
(12, ' Ürün Adı: Ray-ban Ürün id: 11', 3, 'onaylandı', 'mehmet+aslan', ''),
(13, ' Ürün Adı: Ray-ban Ürün id: 11', 3, 'beklemede', 'mehmet aslan', '1150'),
(14, ' Ürün Adı: Ray-ban Ürün id: 11', 3, 'beklemede', 'mehmet aslan', '1150'),
(15, ' Ürün Adı: Ray-ban Ürün id: 11 Ürün Adı: Ray-ban Ürün id: 11', 4, 'beklemede', 'Ahmet ışık', '2300'),
(17, ' Ürün Adı: Ray-ban Ürün id: 11', 4, 'beklemede', 'Ahmet ışık', '1150'),
(38, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(39, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(40, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(41, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(42, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(43, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(44, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(45, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'onaylandı', 'Tolga Şengül', '1150'),
(46, ' Ürün Adı: Ray-ban Ürün id: 11 Ürün Adı: Air Optix COLORS Ürün id: 15 Ürün Adı: Hawk Ürün id: 19', 5, 'beklemede', 'Tolga Şengül', '3299'),
(47, '', 5, 'onaylandı', 'Tolga Şengül', '3299'),
(48, ' Ürün Adı: Ray-ban Ürün id: 11', 5, 'beklemede', 'Tolga Şengül', '1150');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslık` text NOT NULL,
  `baslık2` text NOT NULL,
  `yazı` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `baslık`, `baslık2`, `yazı`, `resim`) VALUES
(4, 'Hayatı Güzel Görmeniz İçin ....', 'Yeni Moda Güneş Gözlükleri', 'Saint Laurent Koleksiyonu', '1650380778.jpg'),
(8, 'Hayatınıza Renk Katın', 'Yeni Moda Güneş Gözlükleri', 'HAWK koleksiyonu stoklarımıza gelmiştir.', '1650381919.jpg'),
(9, 'Renk renk Güneş Gözlüklerinin Adresi', 'Aradığınız dünya Markaları burada', 'Saint Laurent Koleksiyonu', '1650381989.jpeg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vizyon`
--

CREATE TABLE `vizyon` (
  `id` int(11) NOT NULL,
  `vizyon` text NOT NULL,
  `misyon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `vizyon`
--

INSERT INTO `vizyon` (`id`, `vizyon`, `misyon`) VALUES
(1, 'Vizyonumuz ürünlerimizin kalitemizden aldığımız güven ve her zaman müşterilerimize iyi hizmet verme arzusu ile sadece belirrli bölgelerde değilde tüm İstanbulda ve Türkiyede tercih edilen bir optik mağazası olmak. ', 'Misyonumuz Sevgili müşterilerimize sağladığımız kaliteli ve güvenilir ürünler ile güler yüzlü çalışanlarımızın hizmeti doğrultusunda mağazamıza gelen her bir kişinin yüzünde gülümseme ve seçtiği kaliteli ürünler ile ayrılmasıdır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ürünlers`
--

CREATE TABLE `ürünlers` (
  `ürünadı` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiyat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tür` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `malzeme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adet` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `açıklama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `durum` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ürünlers`
--

INSERT INTO `ürünlers` (`ürünadı`, `fiyat`, `tür`, `cinsiyet`, `malzeme`, `resim`, `adet`, `created_at`, `updated_at`, `id`, `açıklama`, `durum`) VALUES
('Ray-ban', '1150', 'numaralı', 'Unisex', 'Metal', '1650753649.png', 45, '2022-04-20 17:02:31', '2022-04-20 17:02:31', 11, 'Ray-Ban model gözlüğümüz %100 UV korumalı ve 1 yıl garantilidir. Ürünlerimiz orjinal kılıfları ile gönderilmektedir.Ek olarak yedek temizleme spreyi ve silme bezi ücretsiz olarak siparişinize eklenmektedir. Ürünlerimizde kredi kartına 8 taksit uygulanmaktadır.', 'aktif'),
('Lacoste', '3400', 'güneş gözlüğü', 'Unisex', 'Metal', '1650748607.png', 22, '2022-04-23 18:16:47', '2022-04-23 18:16:47', 12, 'Lacoste Güneş Gözlüğü modeli, %100 UV korumalı ve 2 yıl garantili güneş gözlüğü orijinal kutusu , silme bezi ve garanti belgesi ile birlikte gönderilmektedir.  Ek olarak yedek temizleme spreyi ve silme bezi ücretsiz olarak siparişinize eklenmektedir. Lacoste güneş gözlüğü sadece 3.400,00 TL ücret ve peşin fiyatına 6 taksit seçeneği ile satın alabilirsiniz.', 'aktif'),
('Lacoste', '2450', 'numaralı', 'Unisex', 'Plastik', '1650748723.png', 9, '2022-04-23 18:18:43', '2022-04-23 18:18:43', 13, 'Lacoste Numaralı Gözlük modeli, %100 UV korumalı ve 2 yıl garantili  orijinal kutusu , silme bezi ve garanti belgesi ile birlikte gönderilmektedir.  Ek olarak yedek temizleme spreyi ve silme bezi ücretsiz olarak siparişinize eklenmektedir. Lacoste numaralı gözlüğü sadece 3.400,00 TL ücret ve peşin fiyatına 6 taksit seçeneği ile satın alabilirsiniz.', 'aktif'),
('Acuvue OASYS', '170', 'lens', 'Unisex', 'Lotrafilcon B', '1650748833.png', 14, '2022-04-23 18:20:33', '2022-04-23 18:20:33', 14, 'Saydam Kontakt Lens Bilgisayar karşısında ve klimalı ortamlarda benzersiz üstün konfor sağlayan Oasys kontakt lensleri, Lens yokmuş hissiyle tanışın!', 'aktif'),
('Air Optix COLORS', '169', 'lens', 'Unisex', 'Lotrafilcon B', '1650751157.png', 16, '2022-04-23 18:59:17', '2022-04-23 18:59:17', 15, 'Air Optix Colors dünyanın İLK ve TEK silikon hidrojel renkli lensi. 12 farklı renk seçeneği ile gözlerinize renk katın', 'aktif'),
('Inesta Classic', '269', 'güneş gözlüğü', 'Unisex', 'Plastik', '1650751394.png', 9, '2022-04-23 19:03:14', '2022-04-23 19:03:14', 16, 'Inesta Classic INC VM202 C02 4921135 modeli, %100 UV korumalı ve 2 yıl garantili güneş gözlüğü orijinal kutusu , silme bezi ve garanti belgesi ile birlikte gönderilmektedir. Fotoğraftaki güneş gözlüğü kutusu gösterim amaçlı olup; markanın orijinal alternatiflerinden gönderim gerçekleştirilebilmektedir. Ek olarak yedek temizleme spreyi ve silme bezi ücretsiz olarak siparişinize eklenmektedir. Inesta Classic INC VM202 C02 4921135 güneş gözlüğünü sadece 269,00 TL ücret ve peşin fiyatına 6 taksit seçeneği ile satın alabilirsiniz.', 'aktif'),
('Ray-Ban', '1410', 'güneş gözlüğü', 'Unisex', 'Metal', '1650751581.png', 41, '2022-04-23 19:05:01', '2022-04-23 19:05:01', 17, 'Ray-Ban RB 1970 91493F 5419145 modeli, %100 UV korumalı ve 2 yıl garantili güneş gözlüğü orijinal kutusu , silme bezi ve garanti belgesi ile birlikte gönderilmektedir. Fotoğraftaki güneş gözlüğü kutusu gösterim amaçlı olup; markanın orijinal alternatiflerinden gönderim gerçekleştirilebilmektedir. Ek olarak yedek temizleme spreyi ve silme bezi ücretsiz olarak siparişinize eklenmektedir. Ray-Ban RB 1970 91493F 5419145 güneş gözlüğünü sadece 1.410,00 TL ücret ve peşin fiyatına 6 taksit seçeneği ile satın alabilirsiniz.', 'aktif'),
('Emporio Armani', '3300', 'numaralı', 'Unisex', 'Metal', '1650751758.jpg', 17, '2022-04-23 19:08:14', '2022-04-23 19:08:14', 18, 'Ürün %100 orijinal ve 2 yıl garantilidir. Orijinal aksesuar ve garanti kartı ile birlikte gönderilmektedir. Garanti kapsamı dışında oluşan sorunlarda (kırılma-çizilme) ücretli yedek parça temin edilebilir.', 'aktif'),
('Hawk', '1980', 'numaralı', 'Unisex', 'Metal', '1650751829.jpg', 29, '2022-04-23 19:10:29', '2022-04-23 19:10:29', 19, 'HW7334 Hawk Gözlük Çerçevesi, Gözlük çerçevesi kategorisinde yer alan bu ürünümüz tam size göre. Göznur Optik farkıyla bu kaliteli gözlük çerçevesine isterseniz taksit seçenekleri ile sahip olabilirsiniz. Hızlı ve ücretsiz kargo avantajından yararlanın.', 'aktif'),
('DOLCE & GABBANA', '2455', 'güneş gözlüğü', 'Erkek', 'Asetat', '1650751979.png', 5, '2022-04-23 19:12:59', '2022-04-23 19:12:59', 20, 'Online mağazamızdan alacağınız DOLCE GABBANADG 6125 35 501/M 35   güneş gözlüğünüzün garanti süresi 24 aydır.', 'aktif'),
('CHRISTIAN DIOR', '3811', 'güneş gözlüğü', 'Kadın', 'Plastik', '1650752141.png', 7, '2022-04-23 19:15:41', '2022-04-23 19:15:41', 21, 'DIORCOLORQUAKE2 MU1 99 Ekartman Kadın Güneş Gözlüğü. 12 Ay Garanti. Kılıf ve Bez ile Birlikte.', 'aktif'),
('Prada', '2038', 'güneş gözlüğü', 'Erkek', 'Metal', '1650752352.png', 23, '2022-04-23 19:18:27', '2022-04-23 19:18:27', 22, 'Ürün %100 orijinal ve 2 yıl garantilidir. Orijinal aksesuar ve garanti kartı ile birlikte gönderilmektedir. Garanti kapsamı dışında oluşan sorunlarda (kırılma-çizilme) ücretli yedek parça temin edilebilir.', 'aktif'),
('Tommy Hilfiger', '1660', 'numaralı', 'Erkek', 'Metal', '1650752471.png', 9, '2022-04-23 19:21:11', '2022-04-23 19:21:11', 23, 'Online alışveriş sitemizden alacağınız Tommy Hilfiger 4109 50426G 57*17*145 güneş gözlüğü için plaket, sap, vida ayarı ve vida değişimi tüm Atasun Optik noktalarında ömür boyu ücretsiz olarak yapılmaktadır.', 'aktif'),
('Purevision 2 HD for Astigmatism', '270', 'lens', 'Unisex', 'Balafilcon A. 64%', '1650752571.png', 57, '2022-04-23 19:22:51', '2022-04-23 19:22:51', 24, 'PureVision®2 HD for Astigmatism, düşük ışık koşullarında bile net, canlı ve keskin görüş sağlıyor. Comfort Moist teknolojisi ile lenslerin nemli kalmasını sağlayarak seçkin bir konfor sunuyor. Auto Align teknolojisi ile ani hareketlerden kaynaklanan bulanık görme ve halelenme sorunlarını azaltırken mükemmel stabilite sağlıyor. Ayrıca parlak, sağlıklı gözler için yüksek oksijen iletme özelliğine sahip yapısıyla da daima kesintisiz görüş sağlıyor.', 'aktif'),
('Burberry', '3140', 'numaralı', 'Kadın', 'Plastik', '1650752703.png', 14, '2022-04-23 19:25:03', '2022-04-23 19:25:03', 25, 'Distribütör firma tarafından fabrikasyon hatalara karşı 2 yıl garantilidir. Almış olduğunuz ürün kutusu, garanti belgesi, faturası, silme bezi ve temizleme spreyi ile gönderilecektir.', 'aktif'),
('Gio Ferrari', '592', 'güneş gözlüğü', 'Erkek', 'Metal', '1650752844.png', 41, '2022-04-23 19:27:24', '2022-04-23 19:27:24', 26, 'Gioferrari Güneş Gözlük Modeli 5431 01 55-18 %100 UV korumalı ve 2 Yıl Garantili Gioferrari Güneş Gözlüğü Orijinal Kutusu, Silme Bezi ve Garanti Belgesi ile Birlikte Gönderilmektedir.', 'aktif'),
('Escada', '2277', 'numaralı', 'Kadın', 'Plastik', '1650753003.png', 25, '2022-04-23 19:30:03', '2022-04-23 19:30:03', 27, 'Tüm Ürünlerimiz Güvenlik Bandı ile gönderilir.  İadelerin Orijinal Kılıfı, Silme Bezi ve Garanti Belgesi İle Birlikte Yapılması Rica Olunur. Orijinal Kılıfı, Silme Bezi ve Garanti Belgesi ile Birlikte Gönderilecektir.  % 100 Orijinal Üründür', 'aktif'),
('Aston Martin', '1760', 'numaralı', 'Unisex', 'Metal', '1650753179.png', 25, '2022-04-23 19:32:59', '2022-04-23 19:32:59', 28, 'Etkileyici, yenilikçi ve ilerici olan aston martin, modaya tamamen modern bir yaklaşımı yeniden keşfediyor.  Alessandro Michele\'in yeni vizyonu altında, 21. yüzyıl için lüksü yeniden tanımladı ve dünyanın en çok arzu edilen moda markalarından biri olarak konumunu daha da güçlendirdi. seçen, çağdaş, romantik - Aston Martin ürünleri İtalyan işçiliğinin zirvesini temsil eder ve kalitesiyle detaylara gösterilen ilgisi ile eşsizdir.', 'aktif'),
('Air Optix AQUA', '170', 'lens', 'Unisex', 'Lotrafilcon B', '1650753281.png', 41, '2022-04-23 19:34:41', '2022-04-23 19:34:41', 29, 'Aylık Lens , Air Optix Aqua kontakt lens ile nem ve oksijenin eşsiz kombinasyonunu keşfedin ! Air Optix Aqua gün boyu sağlıklı ve doğal lens kullanımı için bu ideal kombinasyonu eşsiz AQUA MOISTURE SYSTEM sayesinde sunmaktadır.', 'aktif'),
('Gucci', '5274', 'güneş gözlüğü', 'Kadın', 'Metal', '1650753378.png', 3, '2022-04-23 19:36:18', '2022-04-23 19:36:18', 30, 'Gucci Gözlük kampanyasında bulunan Gucci Gözlük Square Kırmızı ürünü Maslak Outlet %50 sezon indirimi fırsatıyla sizlerle!', 'aktif');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkımızda`
--
ALTER TABLE `hakkımızda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kid` (`kullanıcıid`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `üid` (`ürünid`(768)) USING BTREE;

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vizyon`
--
ALTER TABLE `vizyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ürünlers`
--
ALTER TABLE `ürünlers`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hakkımızda`
--
ALTER TABLE `hakkımızda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanıcılar`
--
ALTER TABLE `kullanıcılar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `vizyon`
--
ALTER TABLE `vizyon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ürünlers`
--
ALTER TABLE `ürünlers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `sepet`
--
ALTER TABLE `sepet`
  ADD CONSTRAINT `sepet_ibfk_1` FOREIGN KEY (`kullanıcıid`) REFERENCES `kullanıcılar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
