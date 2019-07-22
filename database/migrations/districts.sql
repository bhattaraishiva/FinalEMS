-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 05:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `pradesh_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`pradesh_id`, `district_id`, `district_name`) VALUES
(5, 1, ' गुल्मी '),
(5, 2, 'पाल्पा'),
(5, 3, 'रुपन्देही'),
(5, 4, 'कपिलबस्तु'),
(5, 5, 'अर्घाखाँची'),
(5, 6, 'प्यूठान'),
(5, 7, 'रोल्पा'),
(5, 8, 'रुकुम (पूर्वी भाग)'),
(5, 9, 'दाङ'),
(5, 10, 'बाँके'),
(5, 11, 'बर्दिया'),
(5, 12, 'नवलपरासी (बर्दघाट सुस्ता पश्चिम)'),
(7, 13, 'बाजुरा '),
(7, 14, 'बझाङ'),
(7, 15, 'अछाम'),
(7, 16, 'डोटी '),
(7, 17, 'कैलाली '),
(7, 18, 'कञ्चनपुर'),
(7, 19, 'डडेलधुरा'),
(7, 20, 'बैतडी'),
(7, 21, 'दार्चुला'),
(1, 22, 'ताप्लेजुङ'),
(1, 23, 'पाँचथर'),
(1, 24, 'ईलाम'),
(1, 25, 'झापा'),
(1, 26, 'मोरंग'),
(1, 27, 'सुनसरी'),
(1, 28, 'धनकुटा'),
(1, 29, 'तेहथुम'),
(1, 30, 'संखुवासभा'),
(1, 31, 'भोजपुर'),
(1, 32, 'सोलुखुम्बु'),
(1, 33, 'ओखलढुंगा'),
(1, 34, 'खोटाङ'),
(1, 35, 'उदयपुर'),
(2, 36, 'सप्तरी'),
(2, 37, 'सिराहा'),
(2, 38, 'धनुषा'),
(2, 39, 'महोत्तरी'),
(2, 40, 'सर्लाही'),
(2, 41, 'रौतहट'),
(2, 42, 'वारा'),
(2, 43, 'पर्सा'),
(3, 44, 'सिन्धुली'),
(3, 45, 'रामेछाप'),
(3, 46, 'दोलखा'),
(3, 47, 'सिन्धुपाल्चोक'),
(3, 48, 'काभ्रेपलान्चोक'),
(3, 49, 'ललितपुर'),
(3, 50, 'भक्तपुर'),
(3, 51, 'काठमाण्डौ'),
(3, 52, 'नुवाकोट'),
(3, 53, 'रसुवा'),
(3, 54, 'धादिङु'),
(3, 55, 'मकवानपुर'),
(3, 56, 'चितवन'),
(4, 57, 'गोरखा'),
(4, 58, 'लमजङ'),
(4, 59, 'तनह'),
(4, 60, 'सयाङजा'),
(4, 61, 'कासकी'),
(4, 62, 'मनाङ'),
(4, 63, 'मसताङ'),
(4, 64, 'मयागदी'),
(4, 65, 'परवत'),
(4, 66, 'वागलङ'),
(4, 67, 'नवलपरासी (बरदघाट ससता परव)'),
(6, 68, 'रुकुम (पश्चिम भाग)'),
(6, 69, 'सल्यान'),
(6, 70, 'सुर्खेत'),
(6, 71, 'दैलेख'),
(6, 72, 'जाजरकोट'),
(6, 73, 'डोल्पा'),
(6, 74, 'जुम्ला'),
(6, 75, 'कालिकोट'),
(6, 76, 'मुगु'),
(6, 77, 'हुम्ला');
COMMIT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
