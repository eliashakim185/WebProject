-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 08:10 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_obj` int(11) NOT NULL,
  `name_product` varchar(20) NOT NULL,
  `link_product` varchar(500) NOT NULL,
  `information_product` varchar(10000) NOT NULL,
  `sale_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_obj`, `name_product`, `link_product`, `information_product`, `sale_product`, `quantity`) VALUES
(1, 2, 'Note 23', 'note 23 Screenshot 2024-01-08 122650.png', 'Note 23;\r\ntype:LTPO AMOLED;\r\nsize:6.7 Inch(89.6% screen-to-body ratio);\r\nscreen Resolution:1440 x 3200 pixels;\r\nstorage: 256 GB;', 700, 61),
(2, 2, 'F12', 'Screenshot 2024-01-08 135010.png', 'Sunsung Galaxy F12;\r\nOS:Android 11;\r\nChipset:Exynos 850(8nm);\r\nCPU:octa-core(4x2.0 GHZ Cortex-A55);\r\nStorage: 128 GB;', 130, 100),
(3, 2, 'Iphone 15', 'Screenshot 2024-01-08 122248.png', 'Iphone 15 pro;\r\ncolor:Black Titanium, White;\r\nStorage:256 GB;\r\nSize:height x width(146,6x70.6);', 1500, 100),
(4, 2, 'Iphone 12', 'Screenshot 2024-01-08 122424.png', 'Iphone 12 pro;\r\nColor:Pacific Blue;\r\nStoage:256 Gb;\r\nHeight x Width(146.7 mm x 71.5mm)', 570, 0),
(5, 2, 'S23 ultra', '\r\ns23 Screenshot 2024-01-08 122519.png', '6.8\"*\r\n3088 x 1440 (Edge Quad HD+)\r\nPeak Brightness\r\n1750nits\r\nHDR\r\n1200nits\r\nHBM\r\n1200nits\r\nAdaptive Refresh Rate\r\n1~120Hz', 1100, 50),
(6, 1, 'TREBLAB', 'Screenshot 2024-01-08 151447.png', 'TREBLAB Z2 is a premium over-ear headphone with Bluetooth 5.0,\r\n Active Noise Cancelling (ANC) and up to 35H Battery Life that \r\ndelivers Hi-Fi stereo sound quality for an immersive listening \r\nexperience during workouts or travel.', 70, 100),
(7, 1, 'Head-mounted', 'Screenshot 2024-01-08 151741.png', 'SY830MV Head-mounted Computer Headset Wired With Microphone\r\n Low-latency Stereo Audio Gaming Headset With LED Lighting Features: \r\nThis earphone is wired computer earphone,\r\n suitable for family desktop computer,\r\n Internet cafe. ', 100, 100),
(8, 1, 'Elegantly', 'Screenshot 2024-01-08 152048.png', ' The headphones combine with an elegantly\r\n designed portable charger to provide 4 hours\r\n of uninhibited music enjoyment. \r\nErgonomically shaped,\r\n they also ensure lasting comfort. \r\n', 20, 100),
(9, 1, 'MMEF2AN/ A', 'Screenshot 2024-01-08 152442.png', 'The Apple MMEF2AM/A AirPods \r\nWireless Bluetooth Headset\r\nis a great choice for iPhone \r\nusers with iOS 10 or later.\r\n ', 23, 100),
(10, 1, '5_WATT', 'Screenshot 2024-01-08 152723.png', 'iLive 6.3-in 5-Watt Bluetooth Compatibility Indoor Portable Speaker in Black | ISB408B', 50, 100),
(11, 1, '8\'\' speaker', 'Screenshot 2024-01-08 152900.png', 'Built-in 8\" speaker . \r\nFM scan radio . \r\nLine in (3.5mm audio input) .\r\n Micro SD slot and USB port support audio fold playback .\r\n Microphone input . ', 70, 100),
(12, 1, 'KL-032BS', 'Screenshot 2024-01-08 153156.png', 'start of prefixes end of prefixes start of suffixes PowerZone KL-032BS Portable Wireless Speaker, \r\nBlack PRODUCT OVERVIEW Portable wireless speaker.\r\n Made of silicone + metal mesh material.\r\n Support: MP3. Compatible Micro SD card/USB/AUX/wireless/microphone/TWS stereo.\r\n 1200mAh battery. ', 77, 100),
(13, 1, 'earpod 2', 'Screenshot 2024-01-08 153911.png', 'Experience the ultimate music experience with Bluetooth\r\n EarPods that come equipped with touch control, \r\nHD voice and noise cancellation technology.', 15, 100),
(14, 1, 'head 2', 'Screenshot 2024-01-08 154157.png', 'With its wireless technology,\r\n it offers freedom and flexibility on\r\n any device with up to 19 hours \r\nof wireless connectivity.\r\n Its lightweight design and unique colorways.', 22, 0),
(15, 2, 'Iphone x', 'Screenshot 2024-01-12 160902.png', 'Iphone x;\r\n5.8\" super retina display;\r\nFace ID;\r\nA11 Bionic;\r\nWater and dust resistant\r\n', 250, 100),
(16, 2, 'TECNO Spark 10 Pro', 'Screenshot 2024-01-12 161611.png', 'TECNO Spark 10 Pro;\r\n8 GB Ram;\r\n256 GB;\r\nDimensions:168.4 x 76.2\r\n', 400, 100),
(17, 2, 'Nova 9', 'Screenshot 2024-01-12 162657.png', 'Nova 9;\r\n8 GB Ram;\r\n128 GB;\r\nColor:Crystal Blue\r\n', 150, 100),
(18, 2, 'Iphone 13', 'Screenshot 2024-01-12 164814.png', 'Iphone 13;\r\n6.1\";\r\n12 MP;\r\n4GB Ram;\r\n3240mAh\r\n', 700, 100),
(19, 1, 'Iphone 7 earbuds', 'Quality Sound: Apple \r\nEarPods are designed to deliver \r\nhigh-quality audio, offering \r\nclear and rich sound.\r\n', 'Screenshot 2024-01-12 170406.png', 200, 100),
(20, 3, 'Black iphone 13 ', '13Screenshot 2024-01-12 171521.png', 'Black iphone 13 \r\ncase with two way\r\nstand\r\n', 8, 100),
(21, 3, 'iphone 15 Pro Case', '15Screenshot 2024-01-12 171629.png', 'iphone 15 Pro \r\nMagSafe case\r\n', 7, 0),
(22, 3, 'F12  case', 'F12Screenshot 2024-01-12 171712.png', 'for samsung Galaxy F12 \r\ncase,Crystal Clear cases\r\n', 3, 0),
(23, 3, 'iphone x cases', 'Screenshot 2024-01-12 172552.png', 'The best waterproof \r\ncases for iphone x\r\n', 11, 100),
(24, 3, 'S23 Case', 'Screenshot 2024-01-12 172859.png', 'Samsung Galaxy S23\r\nULTRA Krystec Clear\r\nCase\r\n', 6, 0),
(25, 3, ' Case S21 ultra', 'Screenshot 2024-01-12 173308.png', 'Encased Rebel Case\r\nfor Samsung Galaxy\r\nS21 Ultra 5G-Purple\r\n', 3, 100),
(26, 3, 'Cases for iphone 11', 'Screenshot 2024-01-12 173819.png', 'Cases for iphone \r\n11-Wonderful Emgineering\r\n', 3, 0),
(27, 3, 'Ip11 pro max case', 'Screenshot 2024-01-12 174124.png', 'Iphone 11 pro max \r\ncase-shop viet\r\n', 3, 0),
(28, 3, 'Ip 14 pro Max case', 'Screenshot 2024-01-12 174404.png', 'Iphone 14 pro MAX\r\nKrystec Clear\r\nCASE With MagSafe\r\n', 6, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
