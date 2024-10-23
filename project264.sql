-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 11:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project264`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Email` varchar(20) NOT NULL,
  `Admin_Phone` int(11) NOT NULL,
  `Admin_Username` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Name`, `Admin_Email`, `Admin_Phone`, `Admin_Username`, `Admin_Password`, `created_at`) VALUES
('NUR AFINA BINTI ZAMZ', 'afinasushi257@gmail.', 1159390334, '1101Afina', '12345678', '2024-06-30 14:52:41'),
('NUR AINA NATASHA BIN', 'ainatasha04@gmail.co', 11345876, '1102Aina', '98765432', '2024-06-30 14:59:52'),
('NURUL IZZAH ATIRAH B', 'ierasaidin04@gmail.c', 13245678, '1103Izzah', '00000000', '2024-06-30 15:00:39'),
('SARAH ALI', 'sarahali03@gmail.com', 192789364, '1104Sarah', '123456789', '2024-06-30 19:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `VEND_ID` int(4) NOT NULL,
  `VEND_NAME` varchar(255) DEFAULT NULL,
  `VEND_TYPE` varchar(255) DEFAULT NULL,
  `VEND_ADDRESS` varchar(255) DEFAULT NULL,
  `VEND_CITY` varchar(255) DEFAULT NULL,
  `VEND_ZIP` varchar(255) DEFAULT NULL,
  `VEND_CONTACTNAME` varchar(255) DEFAULT NULL,
  `VEND_MOBILE` varchar(255) DEFAULT NULL,
  `VEND_EMAIL` varchar(255) DEFAULT NULL,
  `VEND_BUSINESSLICE` varchar(255) DEFAULT NULL,
  `VEND_HEALTHCERTIF` varchar(255) DEFAULT NULL,
  `VEND_PROFIT` decimal(60,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`VEND_ID`, `VEND_NAME`, `VEND_TYPE`, `VEND_ADDRESS`, `VEND_CITY`, `VEND_ZIP`, `VEND_CONTACTNAME`, `VEND_MOBILE`, `VEND_EMAIL`, `VEND_BUSINESSLICE`, `VEND_HEALTHCERTIF`, `VEND_PROFIT`) VALUES
(1101, 'Suka Dessert', 'Beverage vendor', 'G-08, Residensi 280, 1KM, Lebuhraya Selayang - Kepong, Taman Selayang Jaya,', 'Batu Caves, Selangor', '68100', 'SITI FARISYA BINTI IZOODIN', '6013-847 5589', 'sukadessert@gmail.com', '892837485BB', '9102991283HC', 200.00),
(1102, 'Nasi Arab Pak Mat', 'Food Vendor', 'Jalan Putera, Lot 19,', 'Batu Caves, Selangor', '8799', 'AHMAD FARIS BIN HARUN', '6011-847 4444', 'nasiarabpakmat@gmail.com', '892832222BB', '8767991283HC', NULL),
(1103, 'Formula 1 Merch Store', 'Merchandise Vendor', 'Jalan Mohd Ali, Lot 56, ', 'Johor Bahru, Johor', '8900', 'DINI ARIF BIN JAMAL', '6013-333 9087', 'formula1@gmail.com', '908835555BB', '9000991283HC', 75.00),
(1104, 'Bundle Fruzi', 'Other', 'G-10, Residensi 345, 1KM, Lebuhraya Selayang - Kepong, Taman Selayang Jaya,', 'Batu Caves, Selangor', '8900', 'AHMAD BIDIN BIN TUFI', '6012-456 2889', 'bundlefruzi@gmail.com', '892834382BB', '9090991773HC', NULL),
(1105, 'Bundle Hamilton', 'Other', 'Jalan Putera, Lot 29,', 'Johor Bahru, Johor', '8900', 'SITI AMINAH LAHIM BINTI YUNUH', '6010-078 9087', 'bundlehami@gmail.com', '892837485BB', '9102991283HC', 75.00),
(1106, 'haus boom!!', 'Beverage vendor', 'Jalan Putera Puteri, Lot 34,', 'Johor Bahru, Johor', '81300', 'JAMAL HAKIM BIN HARIZ', '6011-222 9087', 'haus@gmail.com', '667891111BB', '1233991283HC', NULL),
(1107, 'Nasi Kerabu Abe Manjo', 'Food Vendor', 'Jalan Panglima Hare, Lot67', 'Kadok, Kelantan', '8766', 'NIK FAIZURA BINTI NIK ALI', '6011-111 9088', 'nasikabu@gmmail.com', '895554382BB', '9898991283HC', NULL),
(1108, 'Kpop Goodies', 'Merchandise Vendor', 'Taman Weng, 5/9 Jalan Nusantara', 'Kuala Lumour', '6700', 'NURIN AUFA BINTI FARIZAL', '6010-567 5435', 'kpopgoodies@gmail.com', '997834382BB', '9111991283HC', NULL),
(1109, 'Carssport', 'Merchandise Vendor', 'Jalan melod, Tun Haris 8/9', 'Johor Bahru, Johor', '80350', 'AHMAD BIN FAIZAL', '6010-078011', 'carsport04@gmail.com', '90335555BB', '2225991283HC', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendorsowner`
--

CREATE TABLE `vendorsowner` (
  `CUST_IC` varchar(20) NOT NULL,
  `CUST_NAME` varchar(255) DEFAULT NULL,
  `CUST_USERNAME` varchar(255) DEFAULT NULL,
  `CUST_PASS` varchar(255) DEFAULT NULL,
  `CUST_EMAIL` varchar(100) DEFAULT NULL,
  `CUST_PNUM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendorsowner`
--

INSERT INTO `vendorsowner` (`CUST_IC`, `CUST_NAME`, `CUST_USERNAME`, `CUST_PASS`, `CUST_EMAIL`, `CUST_PNUM`) VALUES
('030922010162', 'AHMAD IDHAM', 'idham25', 'am123@', 'ahmdAm@gmail.com', '019-3264828'),
('040726098848', 'Aisyah Natasha', 'Aisyah00', '123321', 'Aisyah99@gmail.com', '0173011848'),
('041114011148', 'iera', 'iera769', '1234', 'nurizatira6@gmail.com', '017-2341234'),
('11111111111', 'Sally Melly', 'sallMerr', 'sal234', 'sal@gmail.com', '012-434 8890'),
('198898784756', 'NUR DINI HARUN BINTI RAFID', 'diniHarun', 'dini789', 'dini@gmail.com', '010-7678890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`VEND_ID`);

--
-- Indexes for table `vendorsowner`
--
ALTER TABLE `vendorsowner`
  ADD PRIMARY KEY (`CUST_IC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `VEND_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
