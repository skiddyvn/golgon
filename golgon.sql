-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2019 lúc 02:12 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `golgon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `ccomment` text NOT NULL,
  `ctime` datetime NOT NULL,
  `cuser` int(11) NOT NULL,
  `cproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `ouser` varchar(45) NOT NULL,
  `oaddress` varchar(256) NOT NULL,
  `ophone` varchar(15) NOT NULL,
  `ototalprice` int(11) NOT NULL,
  `ototalquantity` int(11) NOT NULL,
  `otime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_products`
--

CREATE TABLE `orders_products` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(512) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pquantity` int(11) NOT NULL,
  `pbrand` varchar(45) NOT NULL,
  `pcategory` varchar(45) NOT NULL,
  `pdescription` text NOT NULL,
  `pimage` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pquantity`, `pbrand`, `pcategory`, `pdescription`, `pimage`) VALUES
(1, 'Laptop Gaming Acer Aspire 7 A715-72G-50NA', 18490000, 2, 'Acer', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/1111111111111_large.png'),
(2, 'Laptop ASUS TUF Gaming FX505GD-BQ088T', 20990000, 2, 'Asus', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/fx505_088t_gearvn_ba560a3d664c4249a55f85cc534d3a57_large.jpg'),
(3, 'Laptop Gaming HP Pavilion 15 - CX0177TX (5EF40PA)', 23890000, 2, 'HP', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/gearvn_laptophp_cx0177tx_large.png'),
(4, 'Laptop Lenovo Legion Y530 81FV00STVN', 23000000, 2, 'Lenovo', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/gearvn_lenovo_stvn_large.png'),
(5, 'Laptop ASUS TUF Gaming FX505GD-BQ012T', 21990000, 2, 'Asus', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/fx505gd-bq012t-gearvn_large.jpg'),
(6, 'Laptop Gaming Acer Nitro 5 AN515-52-51GF', 21990000, 2, 'Acer', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/nitro_5_an515-52-51gf_large.jpg'),
(7, 'Laptop ASUS TUF Gaming FX505GD-BQ325T', 22690000, 2, 'Asus', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/tufgaming_fx505_bq325t_gearvn_b15b7d43a15b4f1aa3e5758d3ee55241_large.jpg'),
(8, 'Laptop ASUS TUF Gaming FX505GE-BQ052T', 23390000, 2, 'Asus', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/fx505ge-bq052t-gearvn-1_large.jpg'),
(9, 'Dell Inspiron G7 15 N7588G', 23990000, 2, 'Dell', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/inspiron_g7_15_n7588g_large.jpg'),
(10, 'Laptop ASUS TUF Gaming FX505GE-BQ049T', 24290000, 2, 'Asus', 'Laptop gaming', '', 'https://product.hstatic.net/1000026716/product/fx505ge-bq049t-gearvn_large.jpg'),
(11, 'Keyboard Asus ROG Strix Flare Pink Edition', 1000000, 2, 'Asus', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn_large.jpg'),
(12, 'Keyboard DareU EK169', 690000, 2, 'DareU', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn_dareuek169_3_e1505fd2307a492e9c2a15c460b90dd9_large.jpg'),
(13, 'Keyboard Dare-U EK880 RGB 2019 - Black', 780000, 2, 'DareU', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/ek880_1_3495448427dc4b64b943d53f5cb72fe1_large.jpg'),
(14, 'Keyboard Fuhlen M87S RGB', 890000, 2, 'Fuhlen', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn-fuhlen-m87s-1_large.jpg'),
(15, 'Keyboard Gaming DareU DK1280 RGB', 990000, 2, 'DareU', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn_dareu1280_avatar_large.png'),
(16, 'Keyboard Fuhlen D (Destroyer)', 990000, 2, 'Fuhlen', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/test_03731e4f82234eb4ad12d953fc4f183c_large.jpg'),
(17, 'Keyboard Gaming DareU EK1280 RGB 2019', 1080000, 2, 'DareU', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/1280_1_8a65342e507f4785ab3e71a3bda62921_large.png'),
(18, 'Keyboard Rapoo V720 RGB', 1090000, 2, 'Rapoo', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/rapoo-v720s-gearvn_large.jpg'),
(19, 'Keyboard Fuhlen Subverter RGB', 1140000, 2, 'Fuhlen', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn_fuhlen_subverter_2gearvn_fuhlen_subverter_3_b54cd3be57eb4a05ad7979769afe9f22_large.jpg'),
(20, 'Keyboard Fuhlen G87 (Cherry Switches)', 1390000, 2, 'Fuhlen', 'Keyboard', '', 'https://product.hstatic.net/1000026716/product/gearvn-g87_large.jpg'),
(21, 'AMD Athlon™ 200GE 3.2GHz / 2 nhân 4 luồng / Radeon™ Vega 3 Graphics', 1460000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/gearvn_cpu_amd_large.jpg'),
(22, 'AMD Ryzen 3 2200G 3.5 GHz tích hợp VGA Radeon Vega 8/6MB/4 cores 4 threads', 2590000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/gearvn_amd_ryzen_3_2200g_3.5__2__large.jpg'),
(23, 'AMD Ryzen 5 2400G 3.6 GHz tích hợp VGA Radeon Vega 11/6MB /4 nhân 8 luồng', 4090000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/gearvn_amd_ryzen_5_2400g_3.6_ghz_a6c966b66cc743bb9f96e7559c0d99a8_large.jpg'),
(24, 'AMD Threadripper™ 2920X Socket TR4', 16800000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/threadripper_2970wx_gearvn_ac511b4f80524b1e9c0d75383fd5a8ba_large.jpg'),
(25, 'AMD Threadripper™ 2970WX Socket TR4', 34300000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/threadripper_2970wx_gearvn_large.jpg'),
(26, 'Core i5 9400F / 9M / 2.9GHz / 6 nhân 6 luồng', 4590000, 2, 'Intel', 'CPU', '', 'https://product.hstatic.net/1000026716/product/i5_9400_gearvn12_large.jpg'),
(27, 'CPU AMD Ryzen 5 2600/ 6 nhân 12 luồng/ SK AM4', 5050000, 3, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/ryzen_5_large.jpg'),
(28, 'CPU AMD Ryzen 5 2600X / 6 nhân 12 luồng/ SK AM4', 5690000, 3, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/ryzen_5_3763d84dca9f4585b255d0b4956d5ff5_large.jpg'),
(29, 'CPU AMD Ryzen 7 2700/ 8 nhân 16 luồng/ SK AM4', 7900000, 2, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/ryzen_7_large.png'),
(30, 'CPU AMD Ryzen 7 2700X / 8 nhân 16 luồng/ SK AM4', 8650000, 3, 'AMD', 'CPU', '', 'https://product.hstatic.net/1000026716/product/ryzen_2700x_best_overall_gaming_cpu_2018_1000x1000pixels_large.png'),
(31, 'MSI GeForce® GTX 1050 Ti AERO ITX OC 4GD5', 4190000, 3, 'MSI', 'VGA', '', 'https://product.hstatic.net/1000026716/product/gtx1050ti_aero_gearvn_90551edd91594b749b8a556b80a23387_large.png'),
(32, 'GIGABYTE GTX 1050 Ti WindForce OC 4GB GDDR5 128bit', 4690000, 5, 'Gigabyte', 'VGA', '', 'https://product.hstatic.net/1000026716/product/gigabyte_1050_ti_winforce_gearvn_0_large.jpg'),
(33, 'Asus ROG Strix GeForce® GTX 1050 Ti OC 4GD5 Gaming 128bit', 4890000, 4, 'Asus', 'VGA', '', 'https://product.hstatic.net/1000026716/product/814ny-jo8fl._sl1500__large.jpg'),
(34, 'ASUS Phoenix GTX 1660 OC edition 6GB GDDR5', 6240000, 3, 'Asus', 'VGA', '', 'https://product.hstatic.net/1000026716/product/ph1660_gearvn_53f9516998f44b71860d40d4a219f4e6_large.png'),
(35, 'GIGABYTE GeForce GTX™ 1660 OC 6G', 6500000, 7, 'Gigabyte', 'VGA', '', 'https://product.hstatic.net/1000026716/product/giga_1660_oc_gearvn_77930f3e488b49b68a18c4f874d78892_large.png'),
(36, 'MSI GTX 1660 Ventus XS 6G OC GDDR5', 6790000, 4, 'MSI', 'VGA', '', 'https://product.hstatic.net/1000026716/product/gtx_1660_ventus_xs_gearvn_8cbfd7128b934389b9175487724a51ed_large.png'),
(37, 'ASUS TUF GTX 1660 OC edition 6G Gaming GDDR5', 6840000, 3, 'Asus', 'VGA', '', 'https://product.hstatic.net/1000026716/product/tuf_gtx1660_o6g_gaming_box_vga_acc_ff055808694744ddb9ab095d5647d83e_large.png'),
(38, 'GIGABYTE GeForce GTX™ 1660 Gaming OC 6G', 6990000, 7, 'Gigabyte', 'VGA', '', 'https://product.hstatic.net/1000026716/product/gv_n1660gaming_oc_6gd_candb_3f58ec338f574b569d6fbdd70e07cb3c_large.png'),
(39, 'MSI GTX 1660 GAMING X 6G GDDR5', 7150000, 5, 'MSI', 'VGA', '', 'https://product.hstatic.net/1000026716/product/msi_gtx_1660_gaming_x_gearvn_d18ffac8bfa948e497fa8f84335d218c_large.png'),
(40, 'INNO3D GTX 1660 Ti TWIN X2 GDDR6', 7500000, 6, 'Twin', 'VGA', '', 'https://product.hstatic.net/1000026716/product/1660ti_invo_gearvn_3c66f62eb1ac43b39f27dde8400ff9f9_large.png'),
(41, 'H310CM DVS LGA 1151v2', 1290000, 4, 'Asrock', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/h310cm-dvs_gearvn_large.png'),
(42, 'Asrock H310CM HDV LGA 1151v2', 1390000, 5, 'Asrock', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/asrock_h310cm-hdv_gearvn_large.jpg'),
(43, 'Asus Prime H310M-E LGA1151v2', 1500000, 5, 'Asus', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/prime_h310m-e__with_box_large.png'),
(44, 'GIGABYTE B360M AORUS PRO LGA1151v2', 2090000, 5, 'Gigabyte', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/b360m_aorus_pro_gearvn_large.jpg'),
(45, 'GIGABYTE B360M AORUS GAMING 3 LGA1151v2', 2090000, 5, 'Gigabyte', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/b360m_aorus_gaming_3_gearvn_0_large.jpg'),
(46, 'Asrock B360M Pro4 LGA 1151v2', 2090000, 7, 'Asrock', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/b360m_pro4_gearvn_large.jpg'),
(47, 'Asus B360G ROG STRIX Gaming LGA 1151v2', 2290000, 5, 'Asus', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/asus_b360g_gearvn00_large.jpg'),
(48, 'MSI B360M Mortar LGA1151v2', 2290000, 6, 'MSI', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/msi_b360m_mortar_gearvn1_large.jpg'),
(49, 'MSI B360M Mortar Titanium LGA1151v2', 2890000, 6, 'MSI', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/b360m_mortar_titanium_gearvn1_large.jpg'),
(50, 'GIGABYTE B360 AORUS GAMING 3 LGA1151V2', 2890000, 5, 'Gigabyte', 'Mainboard', '', 'https://product.hstatic.net/1000026716/product/b360_aorus_gaming_3_22_large.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `ufirstname` varchar(100) NOT NULL,
  `ulastname` varchar(100) NOT NULL,
  `uusername` varchar(45) NOT NULL,
  `upassword` varchar(45) NOT NULL,
  `uavatar` varchar(1024) NOT NULL,
  `umail` varchar(45) NOT NULL,
  `urole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`uid`, `ufirstname`, `ulastname`, `uusername`, `upassword`, `uavatar`, `umail`, `urole`) VALUES
(1, '', '', 'admin', '1', '', '0', 'user'),
(2, 'Ss', 's', 's', 's', 's@gmail.com', 'assets/images/default-avatar.png', 'user'),
(14, 'abc', 'abc', 'abc', 'a', 'abc@gmail.com', 'assets/images/default-avatar.png', 'user'),
(15, 'abc', 'asdsad', 'a', 'b', 'asd@s.c', 'assets/images/default-avatar.png', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `fk_comments_users` (`cuser`),
  ADD KEY `fk_comments_products` (`cproduct`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Chỉ mục cho bảng `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`oid`,`pid`),
  ADD KEY `fk_ou_products` (`pid`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uusername` (`uusername`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_products` FOREIGN KEY (`cproduct`) REFERENCES `products` (`pid`),
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`cuser`) REFERENCES `users` (`uid`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`oid`) REFERENCES `users` (`uid`);

--
-- Các ràng buộc cho bảng `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `fk_ou_orders` FOREIGN KEY (`oid`) REFERENCES `orders` (`oid`),
  ADD CONSTRAINT `fk_ou_products` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
