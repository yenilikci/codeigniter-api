# codeigniter-api w/ vue.js

## client 

### path "/" (no record)
![giris](https://user-images.githubusercontent.com/57464067/127707137-4ed8b02f-9076-4baa-9130-c099c7acb767.png)

### path "/new"
![kaydet](https://user-images.githubusercontent.com/57464067/127707212-daaf0672-15e3-46bf-b05a-9884deea3c1c.png)

### path "/" (records added)
![liste](https://user-images.githubusercontent.com/57464067/127707385-f36fc2ec-c823-48dc-9e59-cc49c223ad73.png)

### path "/update"
![düzenle](https://user-images.githubusercontent.com/57464067/127707294-49cb557e-5aff-4c08-8f98-589b3de7bf5c.png)

## api

### endpoint "/api/get_all_data"
![endpoint](https://user-images.githubusercontent.com/57464067/127707539-8d4034b5-8c23-4d97-8777-54f47aa5f020.png)

## sql

```sql
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Tem 2021, 22:20:08
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
-- Veritabanı: `course_coupons`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `couponCode` varchar(10) NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `courses`
--

INSERT INTO `courses` (`id`, `title`, `couponCode`, `price`) VALUES
(1, 'Codeigniter Kursu', 'CI3CPN', 50.00),
(2, 'Vue.js Kursu', 'VUEJSCPN', 35.00),
(3, 'Node.js Kursu', 'NODECPN', 75.00),
(4, 'Nuxt.js Kursu', 'NUXTCPN', 45.00),
(5, 'Go Echo Framework Kursu', 'GOECHOCPN', 80.00),
(6, 'Laravel 8 Kursu', 'LRVL8CPN', 45.00),
(7, 'Flutter Kursu', 'FLUTTERCPN', 50.00),
(8, 'React Native Kursu', 'RNCRSCPN', 60.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```
