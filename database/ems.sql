-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 01:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `address_infos`
--

CREATE TABLE `address_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `permanent_pradesh` int(11) NOT NULL,
  `permanent_district` int(11) NOT NULL,
  `permanent_palika` int(11) NOT NULL,
  `permanent_wardno` int(11) NOT NULL,
  `permanent_tole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pradesh` int(11) NOT NULL,
  `current_district` int(11) NOT NULL,
  `current_palika` int(11) NOT NULL,
  `current_wardno` int(11) NOT NULL,
  `current_tole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `address_infos`
--

INSERT INTO `address_infos` (`id`, `employee_id`, `permanent_pradesh`, `permanent_district`, `permanent_palika`, `permanent_wardno`, `permanent_tole`, `current_pradesh`, `current_district`, `current_palika`, `current_wardno`, `current_tole`, `created_at`, `updated_at`) VALUES
(13, 16, 5, 6, 63, 6, 'नयाँँ गाउँर', 5, 9, 84, 2, 'पाखापानी', '2019-07-29 00:34:38', '2019-07-29 00:34:38'),
(14, 17, 4, 60, 371, 4, 'बराचौर', 5, 3, 28, 2, 'जानकीनगर', '2019-07-29 01:11:26', '2019-07-29 01:11:26'),
(15, 18, 5, 5, 49, 6, 'भुवनडाँडा', 5, 3, 23, 13, 'वेलवास', '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(20, 23, 4, 60, 366, 11, 'बगालथोक', 5, 3, 28, 5, 'मणिग्राम', '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(24, 27, 5, 5, 49, 12, 'सल्लिकोट', 5, 3, 23, 11, 'देविनगर', '2019-08-04 11:19:09', '2019-08-04 11:19:09'),
(25, 28, 3, 49, 567, 15, 'सातदोबाटो', 5, 3, 28, 2, 'योगिकुटी', '2019-08-06 00:55:14', '2019-08-06 00:55:14'),
(28, 31, 5, 1, 5, 5, 'तोस', 5, 3, 23, 11, 'देविनगर', '2019-08-18 09:47:45', '2019-08-18 09:47:45'),
(29, 32, 5, 1, 9, 2, 'पल्लिकोट', 5, 1, 9, 2, 'पल्लिकोट', '2019-08-18 10:26:29', '2019-08-18 10:26:29'),
(30, 33, 5, 3, 28, 2, 'जानकीनगर', 5, 3, 28, 2, 'जानकीनगर', '2019-08-18 10:42:49', '2019-08-18 10:42:49'),
(31, 34, 5, 4, 44, 6, 'लक्ष्मणघाट', 5, 3, 23, 11, 'माझगाउँ', '2019-08-18 11:00:36', '2019-08-18 11:00:36'),
(32, 35, 5, 1, 2, 14, 'पराल्नी', 5, 1, 2, 14, 'पराल्नी', '2019-08-21 21:19:58', '2019-08-21 21:19:58'),
(33, 36, 5, 2, 20, 2, 'पोखराथोक', 5, 2, 20, 2, 'पोखराथोक', '2019-08-25 21:28:30', '2019-08-25 21:28:30'),
(34, 37, 5, 10, 87, 13, 'बुलबुलिया', 5, 10, 87, 13, 'बुलबुलिया', '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(35, 38, 6, 74, 488, 1, 'आचार्य वाडा', 5, 10, 87, 18, 'उज्जल नगर', '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(36, 39, 5, 10, 87, 10, 'आदर्श नगर', 5, 10, 87, 10, 'आदर्श नगर', '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(37, 40, 5, 5, 49, 5, 'सीउडेनी', 5, 5, 49, 5, 'सीउडेनी', '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(38, 42, 5, 10, 88, 10, NULL, 5, 10, 88, 10, NULL, '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(39, 44, 5, 1, 8, 4, 'लामखर्क', 5, 3, 23, 10, 'कालिकानगर', '2019-09-19 06:02:24', '2019-09-19 06:02:24');

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
(4, 60, 'स्याङजा'),
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

-- --------------------------------------------------------

--
-- Table structure for table `education_infos`
--

CREATE TABLE `education_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stream` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_sub` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passed_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_infos`
--

INSERT INTO `education_infos` (`id`, `employee_id`, `employee_number`, `serial_no`, `edu_level`, `stream`, `major_sub`, `country`, `edu_institute`, `board`, `passed_year`, `division`, `created_at`, `updated_at`) VALUES
(7, 16, '१९५८६७', '1', 'एस.एल.सी.', NULL, NULL, 'नेपाल', 'नेपाल एस एल सी बोर्ड', NULL, '२०५१', NULL, NULL, NULL),
(8, 16, '१९५८६७', '२', 'स्नातकोत्तर', 'मानविकी', NULL, 'नेपाल', 'त्रिभुवन विश्वविद्यालय', NULL, '२०७५', '५६', NULL, NULL),
(9, 17, '१८६८५४', '१', 'स्नातकोत्तर', 'एम पि ए', NULL, 'Nepal', 'त्रिभुवन विश्वविद्यालय', NULL, '२०६५', '६६', NULL, NULL),
(10, 18, '181688', '1', 'MA', 'Poltical science', NULL, 'Nepal', 'TU', NULL, '2074', '55', NULL, NULL),
(11, 18, '181688', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 23, '१९७८१५', '1', 'MA', 'Humanities', 'English', NULL, 'T.U.', 'T.U.', '2065', 'First', NULL, NULL),
(13, 23, '१९७८१५', '2', 'MPA', 'Management', 'Public Administration', NULL, 'T.U.', 'T.U.', '2074', 'First', NULL, NULL),
(14, 27, '227257', '1', 'Intermediate', 'Education', 'Math', NULL, 'B.M.C.', 'T.U.', '2009', '42', NULL, NULL),
(15, 28, '210290', '1', 'bachelor', 'science', 'Computer', NULL, 'Patan Multiple Campus', 'T.U.', '2062', '56', NULL, NULL),
(16, 31, '184332', '१', 'स्नातक', 'मानविकी', 'कलाशास्त्री', NULL, NULL, 'त्रि.वि.वि.', '2056', 'तृतीय', NULL, NULL),
(17, 32, '219060', '1', 'SLC', NULL, NULL, NULL, NULL, 'HMG', '2057', '57%', NULL, NULL),
(18, 32, '219060', '2', 'Intermediate', 'Humanities', NULL, NULL, 'Tribhuwan Multiple Campus, Tansen, Palpa', 'T.U.', '2060', '44.5%', NULL, NULL),
(19, 32, '219060', '3', 'B.A.', 'Humanities', NULL, NULL, 'Tri-Chandra Multiple Campus, Ktm.', 'T.U.', '2064', '53.36%', NULL, NULL),
(20, 32, '219060', '4', 'B.Ed.', 'Education', NULL, NULL, 'Mahendra Ratna Campus, Tahachal', 'T.U.', '2065', '50.17%', NULL, NULL),
(21, 32, '219060', '5', 'M.A.', 'Humanities', NULL, NULL, 'Patan Multiple Campus', 'T.U.', '2014', '54.90%', NULL, NULL),
(22, 33, '181587', '1', 'SLC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 33, '181587', '2', 'प्रविणता प्रमाणपत्र तह', 'मानविकी', NULL, NULL, 'T.U.', NULL, '2056', '46%', NULL, NULL),
(24, 33, '181587', '3', 'स्नातक तह', 'मानविकी', NULL, NULL, 'T.U.', NULL, '2060', '49%', NULL, NULL),
(25, 34, '213026', '१', 'स्नातकोत्तर', 'शिक्षा', 'गणित', NULL, 'त्रिभुवन विश्वविद्यालय', 'त्रि.वि.वि.', '2066', '74.4%', NULL, NULL),
(26, 34, '213026', '2', 'स्नातकोत्तर', 'मानविकी', 'गणित', NULL, NULL, 'त्रि.वि.वि.', '2067', 'Second', NULL, NULL),
(27, 34, '213026', '3', 'स्नातक', NULL, 'गणित+अर्थशास्त्र', NULL, 'बुटवल बहुमुखी क्याम्पस', 'त्रि.वि.वि.', '2061', 'second', NULL, NULL),
(28, 34, '213026', '4', 'स्नातक', 'कानून', NULL, NULL, 'नेपाल ल क्याम्पस', 'त्रि.वि.वि.', '2075', 'second', NULL, NULL),
(29, 35, '10000000000', '1', 'SLC', NULL, NULL, NULL, 'नेपाल राष्ट्रिय मा.वि. इन्द्रगौडा', NULL, NULL, 'तृतीय', NULL, NULL),
(30, 36, '208373', '1', 'M.Ed.', 'Humanities', 'English', NULL, 'Butwal Multiple Campus', 'T.U.', '2068', '63%', NULL, NULL),
(31, 37, '189427', '1', 'SLC', NULL, 'English Math science', 'nepal', 'मंगल प्रसाद व्यवसायिक माध्यमिक बिद्यालय', 'SLC', '2040', 'प्रथम', NULL, NULL),
(32, 37, '189427', '2', 'प्रविणता प्रमाणपत्र तह', NULL, 'बिज्ञान', 'Nepal', 'सिद्धार्थ बन्सथाली  Institute', 'TU', '2046', 'प्रथम', NULL, NULL),
(33, 37, '189427', '3', 'स्नातक तह', NULL, 'सिभिल engineering', 'nepal', 'IOE pulchowk', 'TU', '2051', 'प्रथम', NULL, NULL),
(34, 37, '189427', '4', 'स्नातकोत्तर', NULL, 'Cinstruction management', 'nepal', 'Nepal Engineering college ,Balkhu', 'PU', '2075', 'प्रथम', NULL, NULL),
(35, 38, '187998', '1', 'SLC', NULL, NULL, 'nepal', 'Shree chandan nath secondary school', 'Board of Nepal', '2052', 'second', NULL, NULL),
(36, 38, '187998', '2', 'IED', NULL, 'maths,economy', 'Nepal', 'Mahendra Ratna Campus, Tahachal', 'TU', '2055', 'Second', NULL, NULL),
(37, 38, '187998', '3', 'B.Ed.', NULL, 'Math', 'Nepal', 'Mahendra Ratna Campus, Tahachal', 'T.U.', '2060', 'Third', NULL, NULL),
(38, 38, '187998', '4', 'सामुदायिक वन सहज कर्ता तह दुई', NULL, 'सर्भे तथा इनभेन्त्री', 'Nepal', NULL, 'CTEVT', '2069', 'First', NULL, NULL),
(39, 38, '187998', '5', 'MA', NULL, 'राजनीति शास्त्र', 'nepal', 'private Nepaljung', 'TU', '2074', 'Second', NULL, NULL),
(40, 39, '84485', '1', 'SLC', NULL, 'English ,Math', 'india', 'ramjanaki Inter College', 'माध्यमिक शिक्ष्या  परिसद', NULL, 'Second', NULL, NULL),
(41, 39, '84485', '2', 'Intermediate', NULL, 'English ,Math', 'india', 'ramjanaki Inter College', 'माध्यमिक शिक्ष्या  परिसद', NULL, 'Third', NULL, NULL),
(42, 40, '135701', '1', 'नि  मा  वी  तह', NULL, 'English Math science', NULL, 'shree jibanodhar higher seccondary school', 'GON', '2042', 'Second', NULL, NULL),
(43, 42, '195310', '1', 'M.A', NULL, 'economy', 'NEPAL', 'mahendra multiple campus', 'TU', '2070', '61%(FIRST)', NULL, NULL),
(44, 42, '195310', '2', 'B.ED', NULL, 'Math', 'NEPAL', 'surkhet campus', 'TU', '2061', '44.79%(THIRD)', NULL, NULL),
(45, 44, '185394', '1', 'स्नातकोत्तर', NULL, 'English', 'nepal', 'Mahendra Ratna Campus, Tahachal', 'TU', '2050', 'Second', NULL, NULL),
(46, 44, '185394', '2', 'स्नातक', NULL, 'English ,nepali', 'nepal', 'TU kritipur', 'T.U.', '2046', 'Second', NULL, NULL),
(47, 44, '185394', '3', 'प्रविणता प्रमाणपत्र तह', NULL, 'English ,nepali', 'nepal', 'Butwal Multiple Campus', 'T.U.', '2043', 'Second', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_all_records`
--

CREATE TABLE `employee_all_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(151) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sewa_id` int(11) DEFAULT NULL,
  `samuha_id` int(11) DEFAULT NULL,
  `upasamuha_id` int(11) DEFAULT NULL,
  `taha_id` int(11) DEFAULT NULL,
  `shreni_id` int(11) DEFAULT NULL,
  `ministry_id` int(11) DEFAULT NULL,
  `nirdeshanalaya_id` int(11) DEFAULT NULL,
  `karyalaya_id` int(11) DEFAULT NULL,
  `pad_id` int(11) DEFAULT NULL,
  `ministry_attendance_date` date DEFAULT NULL,
  `padasthapan_appointed_date_from_ministry` date DEFAULT NULL,
  `karyalaya_attendance_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_all_records`
--

INSERT INTO `employee_all_records` (`id`, `employee_id`, `employee_number`, `employee_type`, `employee_activity`, `operation_date`, `sewa_id`, `samuha_id`, `upasamuha_id`, `taha_id`, `shreni_id`, `ministry_id`, `nirdeshanalaya_id`, `karyalaya_id`, `pad_id`, `ministry_attendance_date`, `padasthapan_appointed_date_from_ministry`, `karyalaya_attendance_date`, `created_at`, `updated_at`) VALUES
(13, 16, '१९५८६७', 'samayojan', 'samayojan', '2075-11-21', 1, 1, NULL, 7, NULL, 2, NULL, 2, 85, NULL, NULL, NULL, '2019-07-29 00:34:38', '2019-07-29 00:34:38'),
(14, 17, '१८६८५४', 'kaam_kaaj', 'kaam_kaaj', '2074-10-17', 1, 1, NULL, NULL, 3, 2, NULL, 2, 5, NULL, NULL, '2074-10-22', '2019-07-29 01:11:26', '2019-07-29 01:11:26'),
(15, 18, '181688', 'samayojan', 'samayojan', '2075-11-04', 1, 1, NULL, 6, NULL, 2, NULL, 2, 25, NULL, NULL, NULL, '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(19, 23, '१९७८१५', 'samayojan', 'samayojan', '2076-03-07', 1, 1, NULL, 5, NULL, 2, NULL, 2, 85, NULL, NULL, '2076-03-15', '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(20, 27, '227257', 'samayojan', 'samayojan', '2076-03-01', 9, 9, 42, 8, NULL, 2, NULL, 2, 57, NULL, NULL, '2076-04-12', '2019-08-04 11:19:10', '2019-08-04 11:19:10'),
(21, 28, '210290', 'kaam_kaaj', 'kaam_kaaj', '2074-10-25', 9, 53, 42, NULL, 6, 2, NULL, 2, 57, NULL, NULL, '2074-11-06', '2019-08-06 00:55:14', '2019-08-06 00:55:14'),
(22, 28, '210290', 'kaam_kaaj', 'samayojan', '2075-11-20', 9, 9, 42, 13, 6, 2, NULL, 2, 57, NULL, NULL, NULL, '2019-08-06 00:58:58', '2019-08-06 00:58:58'),
(23, 31, '184332', 'samayojan', 'samayojan', '2075-11-21', 1, 1, NULL, 8, NULL, 2, NULL, 2, 1, NULL, NULL, '2075-12-11', '2019-08-18 09:47:45', '2019-08-18 09:47:45'),
(24, 32, '219060', 'kaam_kaaj', 'kaam_kaaj', '2075-06-14', 1, 1, NULL, NULL, 6, 2, NULL, 2, 1, NULL, NULL, '2075-07-11', '2019-08-18 10:26:29', '2019-08-18 10:26:29'),
(25, 33, '181587', 'samayojan', 'samayojan', '2075-11-21', 1, 1, NULL, 8, NULL, 2, NULL, 2, 1, NULL, NULL, '2075-12-10', '2019-08-18 10:42:49', '2019-08-18 10:42:49'),
(26, 34, '213026', 'samayojan', 'samayojan', '2075-11-06', 1, 1, NULL, 8, NULL, 2, NULL, 2, 1, NULL, NULL, '2075-12-14', '2019-08-18 11:00:36', '2019-08-18 11:00:36'),
(27, 35, '10000000000', 'karar', 'karar', '2075-05-01', 1, 1, NULL, 15, 5, 2, NULL, 2, 100, NULL, NULL, '2075-05-01', '2019-08-21 21:19:58', '2019-08-21 21:19:58'),
(28, 36, '208373', 'kaam_kaaj', 'kaam_kaaj', '2076-06-11', 9, 53, 42, NULL, 6, 2, NULL, 3, 24, NULL, NULL, NULL, '2019-08-25 21:28:30', '2019-08-25 21:28:30'),
(29, 36, '208373', 'kaam_kaaj', 'samayojan', '2076-09-11', 1, 1, 42, 13, 8, 2, NULL, 3, 57, NULL, NULL, NULL, '2019-08-25 21:33:02', '2019-08-25 21:33:02'),
(30, 37, '189427', 'samayojan', 'samayojan', '2075-11-05', 3, 3, 1, 4, NULL, 5, NULL, 18, 10, NULL, NULL, '2075-12-10', '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(31, 38, '187998', 'samayojan', 'samayojan', '2075-11-29', 2, 2, NULL, 8, NULL, 7, NULL, 98, 103, NULL, NULL, '2076-02-17', '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(32, 39, '84485', 'samayojan', 'samayojan', '1999-01-01', 1, 1, NULL, 7, NULL, 4, NULL, 5, 25, NULL, NULL, '2075-12-01', '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(33, 40, '135701', 'samayojan', 'samayojan', '2076-03-16', 1, 1, NULL, NULL, NULL, 2, NULL, 2, 100, NULL, NULL, '2076-04-10', '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(34, 42, '195310', 'samayojan', 'samayojan', '2075-11-19', 1, 1, NULL, 7, NULL, 4, NULL, 5, 25, NULL, NULL, '2075-12-06', '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(35, 44, '185394', 'samayojan', 'samayojan', '2075-11-21', 4, 4, NULL, 3, NULL, 6, NULL, 49, 5, NULL, NULL, '2075-04-03', '2019-09-19 06:02:24', '2019-09-19 06:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_current_records`
--

CREATE TABLE `employee_current_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointed_date` date NOT NULL,
  `chief_ministry_attendance_date` date DEFAULT NULL,
  `kaamkaj_chief_ministry_implement_date` date DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `samayojan_worked_at_pradesh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karar_start_date` date DEFAULT NULL,
  `karar_end_date` date DEFAULT NULL,
  `naya_sifaris_date` date DEFAULT NULL,
  `sewa_id` int(11) DEFAULT NULL,
  `samuha_id` int(11) DEFAULT NULL,
  `upasamuha_id` int(11) DEFAULT NULL,
  `shreni_id` int(11) DEFAULT NULL,
  `taha_id` int(11) DEFAULT NULL,
  `ministry_id` int(11) DEFAULT NULL,
  `nirdeshanalaya_id` int(11) DEFAULT NULL,
  `karyalaya_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pad_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_current_records`
--

INSERT INTO `employee_current_records` (`id`, `employee_id`, `employee_number`, `employee_type`, `appointed_date`, `chief_ministry_attendance_date`, `kaamkaj_chief_ministry_implement_date`, `attendance_date`, `samayojan_worked_at_pradesh`, `karar_start_date`, `karar_end_date`, `naya_sifaris_date`, `sewa_id`, `samuha_id`, `upasamuha_id`, `shreni_id`, `taha_id`, `ministry_id`, `nirdeshanalaya_id`, `karyalaya_id`, `pad_id`, `employee_status`, `created_at`, `updated_at`) VALUES
(9, 16, '१९५८६७', 'samayojan', '2075-11-21', '2075-12-14', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 7, 2, NULL, '2', '85', 1, '2019-07-29 00:34:38', '2019-09-19 00:47:21'),
(10, 17, '१८६८५४', 'kaamkaj', '2074-10-17', '2074-10-22', '2074-10-22', '2074-10-22', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 3, 2, NULL, '2', '5', 1, '2019-07-29 01:11:26', '2019-08-26 21:24:09'),
(11, 18, '181688', 'samayojan', '2075-11-04', '2075-11-26', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 6, 2, NULL, '2', '25', 1, '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(15, 23, '१९७८१५', 'samayojan', '2076-03-07', '2076-03-15', NULL, '2076-03-15', 'yes', NULL, NULL, NULL, 1, 1, NULL, NULL, 5, 2, NULL, '2', '85', 1, '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(16, 27, '227257', 'samayojan', '2076-03-01', '2076-04-12', NULL, '2076-04-12', NULL, NULL, NULL, NULL, 9, 9, 42, 8, NULL, 2, NULL, '2', '1160', 1, '2019-08-04 11:19:09', '2019-09-05 10:08:39'),
(17, 28, '210290', 'kaamkaj', '2074-10-25', '2074-11-06', '2074-11-06', '2074-11-06', NULL, NULL, NULL, NULL, 9, 9, 42, 13, 6, 2, NULL, '2', '1160', 1, '2019-08-06 00:55:14', '2019-09-05 10:14:49'),
(19, 31, '184332', 'samayojan', '2075-11-21', '2075-12-11', NULL, '2075-12-11', NULL, NULL, NULL, NULL, 1, 1, NULL, 8, NULL, 2, NULL, '2', '1159', 1, '2019-08-18 09:47:45', '2019-09-05 08:35:56'),
(20, 32, '219060', 'kaamkaj', '2075-06-14', '2075-07-11', '2075-07-11', '2075-07-11', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 6, 2, NULL, '2', '1161', 1, '2019-08-18 10:26:29', '2019-09-05 10:15:58'),
(21, 33, '181587', 'samayojan', '2075-11-21', '2075-12-10', NULL, '2075-12-10', NULL, NULL, NULL, NULL, 1, 1, NULL, 8, NULL, 2, NULL, '2', '1159', 1, '2019-08-18 10:42:49', '2019-09-05 10:16:49'),
(22, 34, '213026', 'samayojan', '2075-11-06', '2075-12-14', NULL, '2075-12-14', NULL, NULL, NULL, NULL, 1, 1, NULL, 8, NULL, 2, NULL, '2', '1159', 1, '2019-08-18 11:00:36', '2019-09-05 10:17:35'),
(23, 35, '10000000000', 'karar', '2075-05-01', NULL, NULL, '2075-05-01', NULL, '2075-05-01', '2076-03-30', NULL, 1, 1, NULL, 5, 15, 2, NULL, '2', '100', 1, '2019-08-21 21:19:58', '2019-08-21 21:19:58'),
(24, 36, '208373', 'kaam_kaaj', '2076-06-11', '2076-05-13', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 42, 8, 13, 2, NULL, '3', '57', 1, '2019-08-25 21:28:30', '2019-08-25 21:33:02'),
(25, 37, '189427', 'samayojan', '2075-11-05', '2075-12-04', NULL, '2075-12-10', NULL, NULL, NULL, NULL, 3, 3, 1, NULL, 4, 5, NULL, '18', '10', 1, '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(26, 38, '187998', 'samayojan', '2075-11-29', '2075-10-07', NULL, '2076-02-17', NULL, NULL, NULL, NULL, 2, 2, NULL, NULL, 8, 7, NULL, '98', '103', 1, '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(27, 39, '84485', 'samayojan', '1999-01-01', '2075-12-01', NULL, '2075-12-01', 'yes', NULL, NULL, NULL, 1, 1, NULL, NULL, 7, 4, NULL, '5', '25', 1, '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(28, 40, '135701', 'samayojan', '2076-03-16', '1900-01-01', NULL, '2076-04-10', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 2, NULL, '2', '100', 1, '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(29, 42, '195310', 'samayojan', '2075-11-19', '2075-11-29', NULL, '2075-12-06', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 7, 4, NULL, '5', '25', 1, '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(30, 44, '185394', 'samayojan', '2075-11-21', '2075-04-03', NULL, '2075-04-03', NULL, NULL, NULL, NULL, 4, 4, NULL, NULL, 3, 6, NULL, '49', '5', 1, '2019-09-19 06:02:24', '2019-09-19 06:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_family_infos`
--

CREATE TABLE `employee_family_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grandfather_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandmother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_province_employee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `spouse_office_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_employee_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_pradesh_employee_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_family_infos`
--

INSERT INTO `employee_family_infos` (`id`, `employee_id`, `father_name`, `mother_name`, `grandfather_name`, `grandmother_name`, `marital_status`, `spouse_name`, `spouse_province_employee`, `spouse_office_name`, `spouse_employee_number`, `spouse_pradesh_employee_number`, `created_at`, `updated_at`) VALUES
(15, 16, 'नुमाानन्द पोख्रेल', 'शोभादेवी पोख्रेल', 'प्रजापति पोख्रेल', NULL, 'm', 'मिना कुमारी जैसी', NULL, NULL, NULL, NULL, '2019-07-29 00:34:37', '2019-07-29 00:34:37'),
(16, 17, 'धनपति पाण्डेय', 'गोमता पाण्डेय', 'पदमपानी पाण्डेय', NULL, 'm', 'जानुका पाण्डेय', NULL, NULL, NULL, NULL, '2019-07-29 01:11:26', '2019-07-29 01:11:26'),
(17, 18, 'दान बहादुर गौतम', 'रुपकला गौतम', 'धनेश्वर गौतम', NULL, 'm', 'कल्पना गौतम थापा', NULL, NULL, NULL, NULL, '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(22, 23, 'शोभाकान्त अर्याल', 'जमुना अर्याल', 'इश्वरी प्रसाद अर्याल', NULL, 'm', 'कमला अर्याल', NULL, NULL, NULL, NULL, '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(26, 27, 'राजु सार्कि', 'माया सार्की', 'कृष्ण बहादुर नेपाली', NULL, 'm', 'जुएली नेपाली', NULL, NULL, NULL, NULL, '2019-08-04 11:19:09', '2019-08-04 11:19:09'),
(27, 28, 'रेशमराज भण्डारी', 'कुशा भण्डारी', 'डिल्लीराम भण्डारी', NULL, 'm', 'रिमा बस्याल', NULL, NULL, NULL, NULL, '2019-08-06 00:55:14', '2019-08-06 00:55:14'),
(30, 31, 'घनश्याम पौडेल', 'रुढ कुमारी पौडेल', 'बुद्धिनाथ पौडेल', NULL, 'm', 'लक्ष्मी पन्थी पौडेल', NULL, NULL, NULL, NULL, '2019-08-18 09:47:45', '2019-08-18 09:47:45'),
(31, 32, 'गिरीराज भण्डारी', 'टिकीसरा भण्डारी', 'हरिलाल भण्डारी', NULL, 'm', 'टोपलाल भण्डारी', NULL, NULL, NULL, NULL, '2019-08-18 10:26:29', '2019-08-18 10:26:29'),
(32, 33, 'चन्द्रकान्त घिमिरे', 'कमला घिमिरे', 'गंगाराम घिमिरे', NULL, 'm', 'सरिता घिमिरे', NULL, NULL, NULL, NULL, '2019-08-18 10:42:49', '2019-08-18 10:42:49'),
(33, 34, 'ज्योतीखर भट्टराई', 'विष्णु भट्टराई', 'विष्णुभक्त भट्टराई', NULL, 'm', 'जुना भण्डारी', NULL, NULL, NULL, NULL, '2019-08-18 11:00:36', '2019-08-18 11:00:36'),
(34, 35, 'नमनिधि पोखरेल', 'निलकुमारी पोखरेल', 'रेवतीरमण पोखरेल', NULL, 'm', 'गिता पोखरेल', NULL, NULL, NULL, NULL, '2019-08-21 21:19:58', '2019-08-21 21:19:58'),
(35, 36, 'गोपिकृष्ण न्यौपाने', 'उमादेवी न्यौपाने', 'लेखनाथ न्यौपाने', NULL, 'm', 'रिता भट्टरापाई', NULL, NULL, NULL, NULL, '2019-08-25 21:28:30', '2019-08-25 21:28:30'),
(36, 37, 'बासुदेव अर्याल', 'मंजु अर्याल', 'मधु सुदन अर्याल', NULL, 'm', 'निशा शर्मा', NULL, NULL, NULL, NULL, '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(37, 38, 'पूर्ण चन्द्र आचार्य', 'पूर्ण वती आचार्य', 'रामचन्द्रआचार्य', NULL, 'm', 'सुन्दरी उपाध्या आचार्य', NULL, NULL, NULL, NULL, '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(38, 39, 'काशी राज श्रेष्ठ', 'बिष्णु देवी श्रेष्ठ', 'गोपाल श्रेष्ठ', NULL, 'm', 'नर्मदा श्रेष्ठ', NULL, NULL, NULL, NULL, '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(39, 40, 'लिलाधर अधिकारी', 'कण्डला  अधिकारी', 'खिमानन्द अधिकारी', NULL, 'm', 'डमला  अधिकारी', NULL, NULL, NULL, NULL, '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(41, 42, 'छबिलाल शर्मा', 'हरिमाया लामिछाने', 'डेव शर्मा', NULL, 'm', 'तुलसा  लामिछाने', NULL, NULL, NULL, NULL, '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(43, 44, 'पुनाराम ज्ञवाली', 'धनकला ज्ञवाली', 'दुतानन्द ज्ञवाली', NULL, 'm', 'राधा ज्ञवाली', NULL, NULL, NULL, NULL, '2019-09-19 06:02:24', '2019-09-19 06:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_foreign_tours`
--

CREATE TABLE `employee_foreign_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftour_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftour_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftour_objective` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftour_start_date` date NOT NULL,
  `ftour_end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_foreign_tours`
--

INSERT INTO `employee_foreign_tours` (`id`, `employee_id`, `employee_number`, `ftour_info`, `ftour_country`, `ftour_objective`, `ftour_start_date`, `ftour_end_date`, `created_at`, `updated_at`) VALUES
(1, 16, '१९५८६७', 'बिदेश भ', 'दक्षिण कोरिया', 'Waste Mgmt. Seminar', '2072-09-18', '2073-10-23', '2019-08-04 10:09:29', '2019-08-04 10:09:29'),
(2, 16, '१९५८६७', 'बिदेश भ्रमण', 'दक्षिण कोरिया', 'Waste Mgmt. Seminar', '2072-09-18', '2073-10-23', '2019-08-04 10:09:39', '2019-08-04 10:09:39'),
(3, 23, '१९७८१५', 'बिदेश भ्रमण', 'दुबई', 'भ्रष्टाचार निवारण गोष्ठि', '2017-09-10', '2017-10-10', '2019-08-04 10:13:26', '2019-08-04 10:13:26'),
(4, 37, '189427', 'RUWRMP', 'Finland', 'Waste Mgmt. Seminar', '2065-02-10', '2065-02-20', '2019-09-18 09:07:14', '2019-09-18 09:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_infos`
--

CREATE TABLE `employee_leave_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_motivation_infos`
--

CREATE TABLE `employee_motivation_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation_provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivation_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_motivation_infos`
--

INSERT INTO `employee_motivation_infos` (`id`, `employee_id`, `employee_number`, `motivation_name`, `motivation_provider`, `motivation_date`, `created_at`, `updated_at`) VALUES
(1, 31, '184332', 'जिम्मेवारी वहन वापत पुरस्कार', 'जिल्ला विकास समिति काठमाण्डौं', '2065-03-13', '2019-08-18 10:07:41', '2019-08-18 10:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `employee_penalty_infos`
--

CREATE TABLE `employee_penalty_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalty_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penalty_decision_date` date NOT NULL,
  `penalty_start_date` date NOT NULL,
  `penalty_end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_details`
--

CREATE TABLE `employee_personal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eng_first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eng_middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `community` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id_issue_date` date NOT NULL,
  `national_id_issue_district_id` int(11) NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_personal_details`
--

INSERT INTO `employee_personal_details` (`id`, `employee_number`, `first_name`, `middle_name`, `last_name`, `eng_first_name`, `eng_middle_name`, `eng_last_name`, `dob`, `gender`, `caste`, `community`, `national_id`, `national_id_issue_date`, `national_id_issue_district_id`, `mobile_no`, `email`, `image`, `created_at`, `updated_at`) VALUES
(16, '१९५८६७', 'भिम', 'राज', 'पोख्रेल', 'BHIM', 'raj', 'pokhrel', '2035-12-18', 'm', 'b', 'p', '22122', '2054-10-07', 1, '९८४४७०६८२२', 'bhim@gmail.com', 'uploads/employee_photo/', '2019-07-29 00:34:37', '2019-09-19 00:47:21'),
(17, '१८६८५४', 'यम', 'कान्त', 'पाण्डेय', 'yam', 'kanta', 'pandey', '2030-01-09', 'm', 'b', 'p', '३०१८', '2047-10-17', 1, '९८५१२१६५५४', 'yamkantapandey@ymail.com', 'uploads/employee_photo/', '2019-07-29 01:11:26', '2019-08-26 21:24:09'),
(18, '181688', 'प्रेम', 'बहादुर', 'गौतम', 'Prem', 'bahadur', 'gautam', '2036-01-16', 'm', 'c', 'p', '13483-1688', '2052-04-12', 5, '9857029127', 'gautamprem555@gmail.com', 'uploads/employee_photo/', '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(23, '१९७८१५', 'रामचन्द्र', NULL, 'अर्याल', 'ramchandra', NULL, 'aryal', '2040-02-15', 'm', 'b', 'p', '५९२५०', '2057-04-02', 60, '९८५७०३६३३३', 'meramchandra03@gmail.com', 'uploads/employee_photo/', '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(27, '227257', 'बिकास', NULL, 'नेपाली', 'Bikash', NULL, 'nepali', '2046-09-10', 'm', 'd', 'p', '741/401010', '2064-04-21', 1, '9857058894', 'bikash.nepali@nepal.gov.np', 'uploads/employee_photo/', '2019-08-04 11:19:09', '2019-09-05 10:08:39'),
(28, '210290', 'महेन्द्र', NULL, 'भण्डारी', 'mahendra', NULL, 'bhandari', '2038-09-01', 'm', 'b', 'p', '6185', '2058-07-28', 1, '९८४४७०६८२२', 'hiker.mahendra@gmail.com', 'uploads/employee_photo/', '2019-08-06 00:55:14', '2019-09-05 10:14:49'),
(31, '184332', 'राजेन्द्र', 'प्रसाद', 'पौडेल', 'rajendra', 'prasad', 'poudel', '2028-02-17', 'm', 'b', 'p', '1406', '2044-10-20', 1, '10000000', 'rajendra@gmail.com', 'uploads/employee_photo/', '2019-08-18 09:47:45', '2019-09-05 08:35:56'),
(32, '219060', 'सुनिता', NULL, 'भण्डारी', 'sunita', NULL, 'bhandari', '2040-11-27', 'f', 'b', 'p', '28449', '2059-05-20', 1, '9847473910', 'sunita@gmail.com', 'uploads/employee_photo/', '2019-08-18 10:26:29', '2019-09-05 10:15:58'),
(33, '181587', 'चिरन्जीवी', NULL, 'घिमिरे', 'chirinjibi', NULL, 'ghimire', '2034-11-01', 'm', 'b', 't', '3398', '2052-11-08', 1, '9800000000', 'chiranjivi@gmail.com', 'uploads/employee_photo/', '2019-08-18 10:42:49', '2019-09-05 10:16:49'),
(34, '213026', 'दीपक', NULL, 'भट्टराई', 'deepak', NULL, 'bhattarai', '2038-08-07', 'm', 'b', 'p', '18429', '2055-04-17', 1, '9847406534', 'djd20691104@gmail.com', 'uploads/employee_photo/', '2019-08-18 11:00:36', '2019-09-05 10:17:35'),
(35, '10000000000', 'ईश्वरी', 'प्रसाद', 'पोख्रेल', 'Ishwari', 'prasdd', 'pokharel', '2036-08-02', 'm', 'b', 'p', '10947', '2056-09-15', 1, '1900-01-01', NULL, 'uploads/employee_photo/', '2019-08-21 21:19:58', '2019-08-21 21:19:58'),
(36, '208373', 'यज्ञमुर्ति', NULL, 'न्यौपाने', 'yagyamurti', NULL, 'neupane', '2042-04-04', 'm', 'b', 'p', '९७४८१', '2059-10-11', 2, '9847078203', 'neupane144@gmail.com', 'uploads/employee_photo/', '2019-08-25 21:28:30', '2019-08-25 21:28:30'),
(37, '189427', 'मनिष', 'कुमार', 'अर्याल', 'manish', 'kumar', 'aryal', '2025-08-24', 'm', 'b', 't', '40999', '2041-07-20', 10, '9851083045', 'manisharyal729@gmail.com', 'uploads/employee_photo/', '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(38, '187998', 'जय', 'चन्द्र', 'आचार्य', 'jay', 'chandra', 'acharya', '2036-11-30', 'm', 'b', 'h', '5110', '2053-01-11', 74, '9848302887', 'acharyajayachandra@gmail.com', 'uploads/employee_photo/', '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(39, '84485', 'बिष्णु', 'राज', 'श्रेष्ठ', 'vishnu', 'raj', 'shrestha', '2020-08-16', 'm', 'j', 'p', '19802', '2037-01-27', 10, '9848021183', 'bishnustha20@gmail.com', 'uploads/employee_photo/', '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(40, '135701', 'रुक्मागत', NULL, 'अधिकारी', 'rukmagat', NULL, 'adhikari', '2025-10-05', 'm', 'b', 'p', '1397/2625', '2042-12-18', 5, '9847142126', NULL, 'uploads/employee_photo/', '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(42, '195310', 'धर्मराज', NULL, 'लामिछाने', 'dharma', 'RAJ', 'LAM', '2038-04-15', 'm', 'b', 'p', '341', '2054-07-05', 69, '9858025164', 'lamichhanedr38@gmail.com', 'uploads/employee_photo/', '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(44, '185394', 'थानेश्वोर', NULL, 'ज्ञवाली', 'thaneshwar', NULL, 'gnyawali', '2023-06-23', 'm', 'b', 'p', '`195', '1900-01-01', 1, '9857015998', 'thaneshwargnyawali@yahoo.com', 'uploads/employee_photo/', '2019-09-19 06:02:24', '2019-09-19 06:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_records`
--

CREATE TABLE `employee_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ministry_id` int(11) DEFAULT NULL,
  `nirdeshanalaya_id` int(11) DEFAULT NULL,
  `karyalaya_id` int(11) DEFAULT NULL,
  `taha_id` int(11) NOT NULL,
  `shreni_id` int(11) NOT NULL,
  `pad_id` int(11) NOT NULL,
  `employee_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointed_date` date NOT NULL,
  `adjustment_placement_date` date NOT NULL,
  `attendance_date` date NOT NULL,
  `before_adjustment_placement_date` date DEFAULT NULL,
  `upgrade_date` date DEFAULT NULL,
  `depart_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_trainings`
--

CREATE TABLE `employee_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_institute` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_start_date` date NOT NULL,
  `training_end_date` date NOT NULL,
  `training_division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_trainings`
--

INSERT INTO `employee_trainings` (`id`, `employee_id`, `employee_number`, `training_type`, `training_institute`, `training_start_date`, `training_end_date`, `training_division`, `created_at`, `updated_at`) VALUES
(1, 23, '१९७८१५', 'PMCD', 'NASC', '2075-12-25', '2076-02-07', 'first', '2019-08-04 10:02:02', '2019-08-04 10:02:02'),
(2, 31, '184332', 'सेवाकालिन तालिम', 'कर्मचारी प्रशिक्षण प्रतिष्ठान', '2075-09-02', '2075-10-06', 'प्रथम', '2019-08-18 10:02:53', '2019-08-18 10:02:53'),
(3, 31, '184332', 'सेवाकालिन तालिम', 'राजश्व प्रशासन तालिम', '2070-02-08', '2070-03-14', 'प्रथम', '2019-08-18 10:04:06', '2019-08-18 10:04:06'),
(4, 31, '184332', 'कम्प्युटर सफ्टवेयर', 'जियोसफ्ट टेक्नोलोजी', '2070-01-27', '2070-03-21', 'प्रथम', '2019-08-18 10:05:07', '2019-08-18 10:05:07'),
(5, 31, '184332', 'आधारभूत सामुदायिक मेलमिलाम प्रशिक्षण', 'सेलर्ड', '2067-09-01', '2067-09-08', 'प्रथम', '2019-08-18 10:06:41', '2019-08-18 10:06:41'),
(6, 33, '181587', 'सेवाकालिन तालिम', 'कर्मचारी प्रशिक्षण प्रतिष्ठान', '2075-09-02', '2075-10-06', 'प्रथम', '2019-08-18 10:44:06', '2019-08-18 10:44:06'),
(7, 33, '181587', 'E-Governance तालिम', 'कर्मचारी प्रशिक्षण प्रतिष्ठान', '2075-07-10', '2075-07-20', 'प्रथम', '2019-08-18 10:45:16', '2019-08-18 10:45:16'),
(8, 36, '208373', 'सेवाकालिन तालिम', 'कर्मचारी प्रशिक्षण प्रतिष्ठान', '2075-09-02', '2075-10-06', 'first', '2019-08-25 21:37:31', '2019-08-25 21:37:31'),
(9, 37, '189427', 'झो पुल सम्बन्धि', 'JBSU & Pulchowk campus', '2076-06-02', '2076-06-30', 'first', '2019-09-18 09:06:07', '2019-09-18 09:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `first_job_infos`
--

CREATE TABLE `first_job_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_pad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_sewa_id` int(11) DEFAULT NULL,
  `first_samuha_id` int(11) DEFAULT NULL,
  `first_upasamuha_id` int(11) DEFAULT NULL,
  `first_shreni_id` int(11) DEFAULT NULL,
  `first_taha_id` int(11) DEFAULT NULL,
  `first_karyalaya_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_appointed_date` date NOT NULL,
  `first_attendance_date` date NOT NULL,
  `before_pradesh_pad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before_pradesh_sewa_id` int(11) DEFAULT NULL,
  `before_pradesh_samuha_id` int(11) DEFAULT NULL,
  `before_pradesh_upasamuha_id` int(11) DEFAULT NULL,
  `before_pradesh_shreni_id` int(11) DEFAULT NULL,
  `before_pradesh_taha_id` int(11) DEFAULT NULL,
  `before_pradesh_karyalaya_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before_pradesh_attendance_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `first_job_infos`
--

INSERT INTO `first_job_infos` (`id`, `employee_id`, `employee_type`, `first_pad`, `first_sewa_id`, `first_samuha_id`, `first_upasamuha_id`, `first_shreni_id`, `first_taha_id`, `first_karyalaya_name`, `first_appointed_date`, `first_attendance_date`, `before_pradesh_pad`, `before_pradesh_sewa_id`, `before_pradesh_samuha_id`, `before_pradesh_upasamuha_id`, `before_pradesh_shreni_id`, `before_pradesh_taha_id`, `before_pradesh_karyalaya_name`, `before_pradesh_attendance_date`, `created_at`, `updated_at`) VALUES
(5, 11, 'kaam_kaaj', '1', 3, 11, 9, 1, 1, 'education office ,butwal', '2075-10-01', '2075-10-05', '1', 3, 11, 9, 1, 1, 'education office ,butwal', '2075-10-10', '2019-07-24 08:23:43', '2019-07-24 08:23:43'),
(6, 12, 'samayojan', '2', 3, 10, 1, 2, NULL, 'test karyalaya', '2076-04-09', '2076-04-09', '2', 3, 10, 1, 2, NULL, 'test karyalaya', '2076-04-09', '2019-07-24 09:35:54', '2019-07-24 09:35:54'),
(9, 16, 'samayojan', '86', 1, 1, NULL, 3, NULL, 'जिल्ला हुलाक कार्यालय, ओखलढुङ्गा', '2067-12-09', '2067-12-09', '102', 1, 1, NULL, 2, NULL, 'राप्ती गाउँपालिका दाङ', '2075-04-24', '2019-07-29 00:34:38', '2019-07-29 00:34:38'),
(10, 17, 'kaam_kaaj', '25', 1, 1, NULL, 4, NULL, 'सामान्य प्रशासन मन्त्रालय', '2063-06-08', '2063-06-09', '5', 1, 1, NULL, 3, NULL, 'संघीय मामिला तथा सामान्य प्रशासन मन्त्रालय', '2074-10-15', '2019-07-29 01:11:26', '2019-07-29 01:11:26'),
(11, 18, 'samayojan', '86', 1, 1, NULL, 7, NULL, 'जिल्ला हुलाक कार्यालय, कपिलवस्तु', '2059-12-10', '2059-12-10', '25', 1, 1, NULL, 4, NULL, 'संघिय मामीला तथा सामान्य प्रशासन मन्त्रालय', '2075-07-04', '2019-07-29 04:17:30', '2019-07-29 04:17:30'),
(15, 23, 'samayojan', '25', 1, 1, NULL, 4, NULL, 'सामान्य प्रशासन मन्त्रालय', '2068-05-28', '2068-05-28', '25', 1, 1, NULL, 4, NULL, 'मुख्यमन्त्री तथा मन्त्रिपरिषद्को कार्यालय', '2075-06-12', '2019-08-04 09:53:58', '2019-08-04 09:53:58'),
(17, 27, 'samayojan', '57', 9, 53, 42, 6, NULL, 'जिल्ला निर्वाचन कार्यालय बाजुरा', '2074-11-10', '2074-11-10', '57', 9, 53, 42, 6, NULL, 'जिल्ला निर्वाचन कार्यालय अर्घाखाँची', '2075-06-26', '2019-08-04 11:19:09', '2019-08-04 11:19:09'),
(18, 28, 'kaam_kaaj', '57', 9, 53, 42, 6, NULL, 'कपिलवस्तु जिल्ला अदालत', '2071-06-08', '2071-06-08', '57', 9, 53, 42, 6, NULL, 'कपिलवस्तु जिल्ला अदालत', '2071-06-08', '2019-08-06 00:55:14', '2019-08-06 00:55:14'),
(20, 31, 'samayojan', '86', 1, 1, NULL, 6, NULL, 'जि.वि.स. अर्घाखाँची', '2060-04-07', '2060-04-07', '86', 1, 1, NULL, 6, NULL, 'ओमसतिया गाउँपालिका', '1900-01-01', '2019-08-18 09:47:45', '2019-08-18 09:47:45'),
(21, 32, 'kaam_kaaj', '102', 1, 1, NULL, 6, NULL, 'ईलाका प्रशासन कार्यालय, माडी, चितवन', '2073-08-19', '2073-08-19', '102', 1, 1, NULL, 6, NULL, 'ईलाका प्रशासन कार्यालय, माडी, चितवन', '2073-08-19', '2019-08-18 10:26:29', '2019-08-18 10:26:29'),
(22, 33, 'samayojan', '1', 8, 50, NULL, NULL, NULL, 'गुल्मी जिल्ला अदालत', '2060-06-25', '2060-06-25', '102', 1, 1, NULL, 6, NULL, 'लुम्बिनी सांस्कृतिक नगरपालिका', '1900-01-01', '2019-08-18 10:42:49', '2019-08-18 10:42:49'),
(23, 34, 'samayojan', '102', 1, 1, NULL, 6, NULL, 'विद्युत विकास विभाग, काठमाण्डौं', '2078-09-02', '2072-09-02', '102', 1, 1, NULL, 6, NULL, 'विद्युत विकास विभाग, काठमाण्डौं', '2072-09-02', '2019-08-18 11:00:36', '2019-08-18 11:00:36'),
(24, 36, 'kaam_kaaj', '57', 9, 53, 42, 6, NULL, 'खानेपानी तथा सरसफाई डिभिजन कार्यालय पाल्पा', '2071-06-07', '2071-06-07', '57', 9, 53, 42, 6, NULL, 'रिब्दिकोट गाउँपालिका', '2074-10-01', '2019-08-25 21:28:30', '2019-08-25 21:28:30'),
(25, 37, 'samayojan', '95', 3, 10, 1, 4, 7, 'स्थानीय विकास मन्त्रालय', '2060-09-28', '2060-09-28', '95', 3, 10, 1, 3, 7, 'RCIP Rukum', '2075-06-15', '2019-09-18 08:43:45', '2019-09-18 08:43:45'),
(26, 38, 'samayojan', '97', 2, 4, NULL, 4, NULL, 'जिल्ला वन कार्यालय ,जुम्ला', '2061-05-15', '2061-05-15', '103', 2, 4, NULL, 6, NULL, 'जिल्ला वन कार्यालय ,मुगु', '2063-09-11', '2019-09-19 01:00:37', '2019-09-19 01:00:37'),
(27, 39, 'samayojan', '96', 1, 2, NULL, 7, NULL, 'कोष तथा लेखा नियनत्रण  कार्यालय', '2039-02-10', '2039-02-10', '112', 1, 2, NULL, 6, NULL, 'पुर्बहार विकास कार्यालय , नेपालगंज', '1999-01-01', '2019-09-19 02:38:01', '2019-09-19 02:38:01'),
(28, 40, 'samayojan', '83', 1, 1, NULL, NULL, 8, 'दिभर्ना . आ .औ . अ . खा', '2043-03-06', '2046-03-10', '100', 1, 1, NULL, NULL, 8, 'जिल्ला आयुर्वेदिक स्वस्थ केन्द्र  ,अर्घखाँची', '2046-04-01', '2019-09-19 04:13:28', '2019-09-19 04:13:28'),
(29, 42, 'samayojan', '112', 1, 2, NULL, 2, NULL, 'को ले ति क रोल्पा', '2067-09-18', '2067-09-18', '112', 1, 2, NULL, 2, NULL, 'राजस्व अनुसन्धान कार्यालय ,कोहल्पुर ,बाँके', '2075-07-25', '2019-09-19 05:12:40', '2019-09-19 05:12:40'),
(30, 44, 'samayojan', '113', 4, 54, 43, 4, NULL, 'जि. शि. का. ,नवलपरासी', '2050-10-29', '2050-11-06', '5', 4, 54, NULL, 3, NULL, 'जि शि का ,रुपन्देही', '2066-04-01', '2019-09-19 06:02:24', '2019-09-19 06:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `karyalayas`
--

CREATE TABLE `karyalayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nirdeshanalaya_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karyalaya_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karyalaya_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_number` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyalayas`
--

INSERT INTO `karyalayas` (`id`, `ministry_id`, `nirdeshanalaya_id`, `karyalaya_code`, `kar_name`, `karyalaya_address`, `employee_number`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '1', 'प्रदेश सभा सचिवालय', 'रुपन्देही', 22, 1, NULL, NULL),
(2, '2', NULL, '10001', 'मुख्यमन्त्री तथा मन्त्रिपरिषद्को कार्यालय', 'रुपन्देही', 52, 1, NULL, NULL),
(3, '2', NULL, '1002', 'मुख्यन्यायाधिवक्ताको कार्यालय, रुपन्देही', 'रुपन्देही', 11, 1, NULL, NULL),
(4, '3', NULL, '2001', 'आन्तरिक मामिला तथा कानून मन्त्रालय', 'रुपन्देही', 38, 1, NULL, NULL),
(5, '4', NULL, '3001', 'आर्थिक मामिला तथा योजना मन्त्रालय', 'रुपन्देही', 47, 1, NULL, NULL),
(6, '4', NULL, '3002', 'प्रदेश लेखा नियन्त्रक कार्यालय, रुपन्देही', 'रुपन्देही', 20, 1, NULL, NULL),
(7, '5', NULL, '4001', 'भौतिक पूर्वाधार विकास मन्त्रालय', 'रुपन्देही', 55, 1, NULL, NULL),
(8, '5', '1', '4002', 'यातायात पूर्वाधार निर्देशनालय, रुपन्देही', 'रुपन्देही', 23, 1, NULL, NULL),
(9, '5', NULL, '4003', 'खानेपानी तथा सरसफाई डिभिजनकार्यालय, रुपन्देही', 'रुपन्देही', 21, 1, NULL, NULL),
(10, '5', NULL, '4004', 'खानेपानी तथा सरसफाई डिभिजनकार्यालय, दाङ', 'दाङ', 21, 1, NULL, NULL),
(11, '5', NULL, '4005', 'खानेपानी तथा सरसफाई डिभिजनकार्यालय, प्यूठान', 'प्यूठान', 21, 1, NULL, NULL),
(12, '5', NULL, '4006', 'खानेपानी तथा सरसफाई डिभिजनकार्यालय, पाल्पा', 'पाल्पा', 21, 1, NULL, NULL),
(13, '5', NULL, '4007', 'खानेपानी तथा सरसफाई डिभिजनकार्यालय, गुल्मी', 'गुल्मी', 13, 1, NULL, NULL),
(14, '5', NULL, '4008', 'पूर्वाधार विकास कार्यालय, गुल्मी', 'गुल्मी', 0, 1, NULL, NULL),
(15, '5', NULL, '4009', 'पूर्वाधार विकास कार्यालय, रुपन्देही', 'रुपन्देही', 18, 1, NULL, NULL),
(16, '5', NULL, '4010', 'पूर्वाधार विकास कार्यालय, दाङ', 'दाङ', 18, 1, NULL, NULL),
(17, '5', NULL, '4011', 'पूर्वाधार विकास कार्यालय, प्यूठान', 'प्यूठान', 18, 1, NULL, NULL),
(18, '5', NULL, '4012', 'पूर्वाधार विकास कार्यालय, बाँके', 'बाँके', 18, 1, NULL, NULL),
(19, '5', NULL, '4013', 'शहरी विकास तथा भवन कार्यालय, रुपन्देही', 'रुपन्देही', 14, 1, NULL, NULL),
(20, '5', NULL, '4014', 'शहरी विकास तथा भवन कार्यालय, दाङ', 'दाङ', 14, 1, NULL, NULL),
(21, '5', NULL, '4015', 'शहरी विकास तथा भवन कार्यालय, बाँके', 'बाँके', 14, 1, NULL, NULL),
(22, '5', NULL, '4016', 'शहरी विकास तथा भवन कार्यालय, पाल्पा', 'पाल्पा', 14, 1, NULL, NULL),
(23, '5', NULL, '4017', 'यातायात व्यवस्था कार्यालय, रुपन्देही सवारी, रुपन्देही', 'रुपन्देही', 28, 1, NULL, NULL),
(24, '5', NULL, '4018', 'यातायात व्यवस्था कार्यालय, रुपन्देही लाइसेन्स, रुपन्देही', 'रुपन्देही', 25, 1, NULL, NULL),
(25, '5', NULL, '4019', 'यातायात व्यवस्था कार्यालय, बाँके, वाँके', 'वाँके', 26, 1, NULL, NULL),
(26, '5', NULL, '4020', 'यातायात व्यवस्था कार्यालय, दाङ, दाङ', 'दाङ', 22, 1, NULL, NULL),
(27, '5', NULL, '4021', 'यातायात व्यवस्था सेवा कार्यालय, पाल्पा, पाल्पा', 'पाल्पा', 8, 1, NULL, NULL),
(28, '5', NULL, '4022', 'यातायात व्यवस्था सेवा कार्यालय, भैरहवा, भैरहवा', 'भैरहवा', 7, 1, NULL, NULL),
(29, '5', NULL, '4023', 'यातायात व्यवस्था सेवा कार्यालय, भालुवाङ, दाङ', 'दाङ', 7, 1, NULL, NULL),
(30, '5', NULL, '4024', 'जलस्रोत तथा सिँचाइ विकास डिभिजन कार्यालय, पाल्पा', 'पाल्पा', 11, 1, NULL, NULL),
(31, '5', NULL, '4025', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, प्यूठान', 'प्यूठान', 11, 1, NULL, NULL),
(32, '5', NULL, '4026', 'जलस्रोत तथा सिँचाइ विकास डिभिजन , गुल्मी', 'गुल्मी', 11, 1, NULL, NULL),
(33, '5', NULL, '4027', 'जलस्रोत तथा सिँचाइ विकास डिभिजन , अर्घाखाँची', 'अर्घाखाँची', 11, 1, NULL, NULL),
(34, '5', NULL, '4028', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, रोल्पा', 'रोल्पा', 11, 1, NULL, NULL),
(35, '5', NULL, '4029', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(36, '5', NULL, '4030', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, नवलपरासी', 'नवलपरासी', 14, 1, NULL, NULL),
(37, '5', NULL, '4031', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, कपिलवस्तु', 'कपिलवस्तु', 14, 1, NULL, NULL),
(38, '5', NULL, '4032', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, दाङ', 'दाङ', 14, 1, NULL, NULL),
(39, '5', NULL, '4033', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, वाँके', 'वाँके', 14, 1, NULL, NULL),
(40, '5', NULL, '4034', 'जलस्रोत तथा सिँचाइ विकास डिभिजन, बर्दिया', 'बर्दिया', 14, 1, NULL, NULL),
(41, '5', NULL, '4035', 'जलस्रोत तथा सिँचाइ विकास सव-डिभिजन, रुकुम पूर्व', 'रुकुम पूर्व', 7, 1, NULL, NULL),
(42, '5', NULL, '4036', 'भूमिगत जलस्रोत तथा सिँचाइ विकास, रुपन्देही', 'रुपन्देही', 14, 1, NULL, NULL),
(43, '5', NULL, '4037', 'भूमिगत जलस्रोत तथा सिँचाइ विकास डिभिजन कार्यालय, वाँके', 'वाँके', 0, 1, NULL, NULL),
(44, '5', NULL, '4038', 'भूमिगत जलस्रोत तथा सिँचाइ विकास डिभिजन कार्यालय, दाङ', 'दाङ', 0, 1, NULL, NULL),
(45, '5', NULL, '4039', 'बाणगंगा सिंचाइ व्यवस्थापन डिभिजन, कपिलवस्तु', 'कपिलवस्तु', 13, 1, NULL, NULL),
(46, '5', NULL, '4040', 'प्रगन्ना सिंचाइ व्यवस्थापन डिभिजन, दाङ', 'दाङ', 13, 1, NULL, NULL),
(47, '5', NULL, '4041', 'सडक डिभिजन कार्यालय, कपिलवस्तु', 'कपिलवस्तु', 0, 1, NULL, NULL),
(48, '5', NULL, '4042', 'सडक डिभिजन कार्यालय, प्यूठान', 'प्यूठान', 33, 1, NULL, NULL),
(49, '6', NULL, '5001', 'सामाजिक विकास मन्त्रालय', 'रुपन्देही', 47, 1, NULL, NULL),
(50, '6', '2', '5002', 'शिक्षा विकास निर्देशनालय, रुपन्देही', 'रुपन्देही', 35, 1, NULL, NULL),
(51, '6', '7', '5003', 'स्वास्थ्य निर्देशनालय, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(52, '6', NULL, '5004', 'शिक्षा तालिम केन्द्र, रुपन्देही', 'रुपन्देही', 17, 1, NULL, NULL),
(53, '6', NULL, '5005', 'स्वास्थ्य कार्यालय, दाङ', 'दाङ', 14, 1, NULL, NULL),
(54, '6', NULL, '5006', 'स्वास्थ्य कार्यालय , वाँके', 'वाँके', 14, 1, NULL, NULL),
(55, '6', NULL, '5007', 'स्वास्थ्य कार्यालय, बर्दिया', 'बर्दिया', 14, 1, NULL, NULL),
(56, '6', NULL, '5008', 'स्वास्थ्य कार्यालय, रुपन्देही', 'रुपन्देही', 14, 1, NULL, NULL),
(57, '6', NULL, '5009', 'स्वास्थ्य कार्यालय, पाल्पा', 'पाल्पा', 14, 1, NULL, NULL),
(58, '6', NULL, '5010', 'स्वास्थ्य कार्यालय, कपिलवस्तु', 'कपिलवस्तु', 14, 1, NULL, NULL),
(59, '6', NULL, '5011', 'स्वास्थ्य कार्यालय, गुल्मी', 'गुल्मी', 14, 1, NULL, NULL),
(60, '6', NULL, '5012', 'स्वास्थ्य कार्यालय, अर्घाखाँची', 'अर्घाखाँची', 12, 1, NULL, NULL),
(61, '6', NULL, '5013', 'स्वास्थ्य कार्यालय, प्यूठान', 'प्यूठान', 12, 1, NULL, NULL),
(62, '6', NULL, '5014', 'स्वास्थ्य कार्यालय, रोल्पा', 'रोल्पा', 12, 1, NULL, NULL),
(63, '6', NULL, '5015', 'स्वास्थ्य कार्यालय, रुकुम पूर्व', 'रुकुम पूर्व', 11, 1, NULL, NULL),
(64, '6', NULL, '5016', 'स्वास्थ्य कार्यालय, नवलपरासी', 'नवलपरासी', 11, 1, NULL, NULL),
(65, '6', NULL, '5017', 'प्रदेश स्वास्थ्य आपूर्ति व्यवस्थापन केन्द्र, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(66, '6', NULL, '5018', 'स्वास्थ्य तालिम केन्द्र, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(67, '6', NULL, '5019', 'प्रदेश जनस्वास्थ्य प्रयोगशाला, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(68, '6', NULL, '5020', 'व्यावसायिक तथा सीपविकास तालिमकेन्द्र, दाङ', 'दाङ', 0, 1, NULL, NULL),
(69, '6', NULL, '5021', 'व्यावसायिक तथा सीपविकास तालिमकेन्द्र, वाँके', 'वाँके', 0, 1, NULL, NULL),
(70, '6', NULL, '5022', 'रोजगार सूचना केन्द्र वुटवल, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(71, '6', NULL, '5023', 'लुम्बिनी प्रादेशिक अस्पताल, बुटवल, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(72, '6', NULL, '5024', 'राप्ती प्रादेशिक अस्पताल, तुल्सिपुर, दाङ', 'दाङ', 0, 1, NULL, NULL),
(73, '6', NULL, '5025', 'भीम अस्पताल, भैरहवा, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(74, '6', NULL, '5026', 'पृथ्वी चन्द्र अस्पताल, रामग्राम, नवलपरासी', 'नवलपरासी', 0, 1, NULL, NULL),
(75, '6', NULL, '5027', 'कपिलवस्तु अस्पताल, तौलिहवा, कपिलवस्तु', 'कपिलवस्तु', 0, 1, NULL, NULL),
(76, '6', NULL, '5028', 'अर्घाखाँची अस्पताल, सन्धिखर्क, अर्घाखाँची', 'अर्घाखाँची', 0, 1, NULL, NULL),
(77, '6', NULL, '5029', 'पाल्पा अस्पताल, तानसेन, पाल्पा', 'पाल्पा', 0, 1, NULL, NULL),
(78, '6', NULL, '5030', 'पाल्पा अस्पताल, रामपुर, पाल्पा', 'पाल्पा', 0, 1, NULL, NULL),
(79, '6', NULL, '5031', 'गुल्मी अस्पताल, तम्घास, गुल्मी', 'गुल्मी', 0, 1, NULL, NULL),
(80, '6', NULL, '5032', 'प्यूठान अस्पताल, बिजुवार, प्यूठान', 'प्यूठान', 0, 1, NULL, NULL),
(81, '6', NULL, '5033', 'रोल्पा अस्पताल, रेयुगा, रोल्पा', 'रोल्पा', 0, 1, NULL, NULL),
(82, '6', NULL, '5034', 'बर्दिया अस्पताल, गुलरिया, बर्दिया', 'बर्दिया', 0, 1, NULL, NULL),
(83, '6', NULL, '5035', 'रुकुम पुर्व अस्पताल, रुकुम पुर्व', 'रुकुम पुर्व', 0, 1, NULL, NULL),
(84, '6', NULL, '5036', 'राप्ती आयुर्वेद चिकित्सालय, तुल्सीपुर, दाङ्ग', 'दाङ्ग', 0, 1, NULL, NULL),
(85, '6', NULL, '5037', 'बाँके आयुर्वेद स्वास्थ्य केन्द्र, नेपालगंज, बाँके', 'बाँके', 0, 1, NULL, NULL),
(86, '6', NULL, '5038', 'बर्दिया आयुर्वेद स्वास्थ्य केन्द्र, गुलरिया, बर्दिया', 'बर्दिया', 0, 1, NULL, NULL),
(87, '6', NULL, '5039', 'प्रादेशिक आयुर्वेद चिकित्सालय, विजौरी, दाङ्ग', 'दाङ्ग', 0, 1, NULL, NULL),
(88, '6', NULL, '5040', 'रोल्पा आयुर्वेद स्वास्थ्य केन्द्र, लिवाङ, रोल्पा', 'रोल्पा', 0, 1, NULL, NULL),
(89, '6', NULL, '5041', 'प्यूठान आयुर्वेद स्वास्थ्य केन्द्र, खलंगा, प्यूठान', 'प्यूठान', 0, 1, NULL, NULL),
(90, '6', NULL, '5042', 'गुल्मी आयुर्वेद स्वास्थ्य केन्द्र, तम्घास, गुल्मी', 'गुल्मी', 0, 1, NULL, NULL),
(91, '6', NULL, '5043', 'अर्घाखाँची आयुर्वेद स्वास्थ्य केन्द्र, सन्धिखर्क, अर्घाखाँची', 'अर्घाखाँची', 0, 1, NULL, NULL),
(92, '6', NULL, '5044', 'कपिलवस्तु आयुर्वेद स्वास्थ्य केन्द्र, तौलिहवा, कपिलवस्तु', 'कपिलवस्तु', 0, 1, NULL, NULL),
(93, '6', NULL, '5045', 'पाल्पा आयुर्वेद स्वास्थ्य केन्द्र, तानसेन, पाल्पा', 'पाल्पा', 0, 1, NULL, NULL),
(94, '6', NULL, '5046', 'लुम्बिनी आयुर्वेद चिकित्सालय, बुटवल, रुपन्देही', 'रुपन्देही', 0, 1, NULL, NULL),
(95, '7', NULL, '6001', 'उद्योग, पर्यटन, वन तथा वातावरण मन्त्रालय', 'रुपन्देही', 45, 1, NULL, NULL),
(96, '7', '3', '6002', 'उद्योग, वाणिज्य तथा उपभोक्ता हीत संरक्षण निर्देशनालय, रुपन्देही', 'रुपन्देही', 14, 1, NULL, NULL),
(97, '7', '4', '6003', 'वन निर्देशनालय, रुपन्देही', 'रुपन्देही', 27, 1, NULL, NULL),
(98, '7', NULL, '6004', 'वन अनुसन्धान तथा प्रशिक्षण केन्द्र, रुपन्देही', 'रुपन्देही', 12, 1, NULL, NULL),
(99, '7', NULL, '6005', 'घरेलु तथा साना उद्योग कार्यालय, पाल्पा', 'पाल्पा', 9, 1, NULL, NULL),
(100, '7', NULL, '6006', 'घरेलु तथा साना उद्योग कार्यालय, कपिलवस्तु', 'कपिलवस्तु', 8, 1, NULL, NULL),
(101, '7', NULL, '6007', 'घरेलु तथा साना उद्योग कार्यालय, नवलपरासी', 'नवलपरासी', 9, 1, NULL, NULL),
(102, '7', NULL, '6008', 'घरेलु तथा साना उद्योग कार्यालय, रुपन्देही', 'रुपन्देही', 10, 1, NULL, NULL),
(103, '7', NULL, '6009', 'घरेलु तथा साना उद्योग कार्यालय, दाङ', 'दाङ', 10, 1, NULL, NULL),
(104, '7', NULL, '6010', 'घरेलु तथा साना उद्योग कार्यालय, बाँके', 'बाँके', 12, 1, NULL, NULL),
(105, '7', NULL, '6011', 'घरेलु तथा साना उद्योग कार्यालय, वर्दिया', 'वर्दिया', 8, 1, NULL, NULL),
(106, '7', NULL, '6012', 'डिभिजनवन कार्यालय, रुपन्देही', 'रुपन्देही', 94, 1, NULL, NULL),
(107, '7', NULL, '6013', 'डिभिजनवन कार्यालय, नवलपरासी', 'नवलपरासी', 78, 1, NULL, NULL),
(108, '7', NULL, '6014', 'डिभिजनवन कार्यालय, कपिलबस्तु', 'कपिलबस्तु', 94, 1, NULL, NULL),
(109, '7', NULL, '6015', 'डिभिजनवन कार्यालय, कपिलबस्तु गौतमवुद्ध', 'कपिलबस्तु गौतमवुद्ध', 94, 1, NULL, NULL),
(110, '7', NULL, '6016', 'डिभिजनवन कार्यालय, गुल्मी', 'गुल्मी', 45, 1, NULL, NULL),
(111, '7', NULL, '6017', 'डिभिजनवन कार्यालय, पाल्पा', 'पाल्पा', 60, 1, NULL, NULL),
(112, '7', NULL, '6018', 'डिभिजनवन कार्यालय, अर्घाखाँची', 'अर्घाखाँची', 50, 1, NULL, NULL),
(113, '7', NULL, '6019', 'डिभिजनवन कार्यालय, बर्दिया', 'बर्दिया', 78, 1, NULL, NULL),
(114, '7', NULL, '6020', 'डिभिजनवन कार्यालय, बाँके', 'बाँके', 94, 1, NULL, NULL),
(115, '7', NULL, '6021', 'डिभिजनवन कार्यालय, दाङ', 'दाङ', 110, 1, NULL, NULL),
(116, '7', NULL, '6022', 'डिभिजनवन कार्यालय, दाङ देउखुरी', 'दाङ देउखुरी', 110, 1, NULL, NULL),
(117, '7', NULL, '6023', 'डिभिजनवन कार्यालय, प्यूठान', 'प्यूठान', 45, 1, NULL, NULL),
(118, '7', NULL, '6024', 'डिभिजनवन कार्यालय, रोल्पा', 'रोल्पा', 55, 1, NULL, NULL),
(119, '7', NULL, '6025', 'डिभिजनवन कार्यालय, रुकुम', 'रुकुम', 34, 1, NULL, NULL),
(120, '7', NULL, '6026', 'भू तथा जलाधार व्यवस्थापन कार्यालय, पाल्पा', 'पाल्पा', 17, 1, NULL, NULL),
(121, '7', NULL, '6027', 'भू तथा जलाधार व्यवस्थापन कार्यालय, दाङ', 'दाङ', 17, 1, NULL, NULL),
(122, '8', NULL, '7001', 'भूमि ब्यवस्था, कृषि तथा सहकारी मन्त्रालय', 'रुपन्देही', 74, 1, NULL, NULL),
(123, '8', '5', '7002', 'कृषि विकास निर्देशनालय, रुपन्देही', 'रुपन्देही', 38, 1, NULL, NULL),
(124, '8', '6', '7003', 'पशुपंक्षि तथा मत्स्य विकास निर्देशनालय, रुपन्देही', 'रुपन्देही', 24, 1, NULL, NULL),
(125, '8', NULL, '7004', 'कृषि ज्ञानकेन्द्र, नवलपरासी', 'नवलपरासी', 17, 1, NULL, NULL),
(126, '8', NULL, '7005', 'कृषि ज्ञानकेन्द्र, अर्घाखाँची', 'अर्घाखाँची', 15, 1, NULL, NULL),
(127, '8', NULL, '7006', 'कृषि ज्ञानकेन्द्र, गुल्मी', 'गुल्मी', 15, 1, NULL, NULL),
(128, '8', NULL, '7007', 'कृषि ज्ञानकेन्द्र, पाल्पा', 'पाल्पा', 15, 1, NULL, NULL),
(129, '8', NULL, '7008', 'कृषि ज्ञानकेन्द्र, कपिलवस्तु', 'कपिलवस्तु', 16, 1, NULL, NULL),
(130, '8', NULL, '7009', 'कृषि ज्ञानकेन्द्र, बाँके', 'बाँके', 17, 1, NULL, NULL),
(131, '8', NULL, '7010', 'कृषि ज्ञानकेन्द्र, दाङ', 'दाङ', 16, 1, NULL, NULL),
(132, '8', NULL, '7011', 'कृषि ज्ञानकेन्द्र, रोल्पा', 'रोल्पा', 15, 1, NULL, NULL),
(133, '8', NULL, '7012', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, पाल्पा', 'पाल्पा', 12, 1, NULL, NULL),
(134, '8', NULL, '7013', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, रोल्पा', 'रोल्पा', 10, 1, NULL, NULL),
(135, '8', NULL, '7014', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, कपिलवस्तु', 'कपिलवस्तु', 15, 1, NULL, NULL),
(136, '8', NULL, '7015', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, रुपन्देही', 'रुपन्देही', 15, 1, NULL, NULL),
(137, '8', NULL, '7016', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, दाङ', 'दाङ', 14, 1, NULL, NULL),
(138, '8', NULL, '7017', 'भेटेरिनरी अस्पताल तथा पशु सेवा विज्ञ केन्द्र, बाँके', 'बाँके', 14, 1, NULL, NULL),
(139, '8', NULL, '7018', 'कृषि विकास प्रवर्द्धन सहयोग तथा तालिम केन्द्र, बाँके', 'बाँके', 16, 1, NULL, NULL),
(140, '8', NULL, '7019', 'पशु विकास तालिम केन्द्र, बाँके', 'बाँके', 12, 1, NULL, NULL),
(141, '8', NULL, '7020', 'सहकारी प्रशिक्षालय, बाँके', 'बाँके', 13, 1, NULL, NULL),
(142, '8', NULL, '7021', 'कुखुरा विकास फर्म, खजुरा, बाँके', 'बाँके', 10, 1, NULL, NULL),
(143, '8', NULL, '7022', 'मत्स्य विकास केन्द्र, महादेवपुरी,, बाँके', 'बाँके', 11, 1, NULL, NULL),
(144, '8', NULL, '7023', 'क्षेत्रीय बीउ विजन परिक्षण प्रयोगशाला, रुपन्देही', 'रुपन्देही', 8, 1, NULL, NULL),
(145, '8', NULL, '7024', 'क्षेत्रीय बीउ विजन परिक्षण प्रयोगशाला, खजुरा, बाँके', 'बाँके', 8, 1, NULL, NULL),
(146, '8', NULL, '7025', 'क्षेत्रीय बालीसंरक्षण प्रयोगशाला, खजुरा, बाँके', 'बाँके', 8, 1, NULL, NULL),
(147, '8', NULL, '7026', 'क्षेत्रीय माटो परिक्षण प्रयोगशाला, बाँके', 'बाँके', 9, 1, NULL, NULL),
(148, '5', NULL, '0', 'पूर्वाधार विकास कार्यालय, पाल्पा', 'पाल्पा', 18, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karyalaya_pads`
--

CREATE TABLE `karyalaya_pads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `karyalaya_id` int(11) NOT NULL,
  `pad_id` int(11) NOT NULL,
  `pad_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyalaya_pads`
--

INSERT INTO `karyalaya_pads` (`id`, `ministry_id`, `karyalaya_id`, `pad_id`, `pad_qty`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, 1, NULL, NULL),
(2, 2, 2, 2, 2, NULL, NULL),
(3, 2, 2, 3, 1, NULL, NULL),
(4, 2, 2, 5, 8, NULL, NULL),
(5, 2, 2, 24, 8, NULL, NULL),
(6, 2, 2, 25, 1, NULL, NULL),
(7, 2, 2, 27, 1, NULL, NULL),
(8, 2, 2, 54, 10, NULL, NULL),
(9, 2, 2, 57, 4, NULL, NULL),
(10, 2, 2, 85, 2, NULL, NULL),
(11, 2, 2, 96, 1, NULL, NULL),
(12, 2, 2, 99, 6, NULL, NULL),
(13, 2, 2, 100, 7, NULL, NULL),
(14, 3, 4, 2, 1, NULL, NULL),
(15, 3, 4, 5, 3, NULL, NULL),
(16, 3, 4, 24, 6, NULL, NULL),
(17, 3, 4, 25, 1, NULL, NULL),
(18, 3, 4, 23, 2, NULL, NULL),
(19, 3, 4, 54, 9, NULL, NULL),
(20, 3, 4, 57, 4, NULL, NULL),
(21, 3, 4, 85, 1, NULL, NULL),
(22, 3, 4, 96, 1, NULL, NULL),
(23, 3, 4, 99, 4, NULL, NULL),
(24, 3, 4, 100, 6, NULL, NULL),
(25, 4, 5, 2, 1, NULL, NULL),
(26, 4, 5, 5, 4, NULL, NULL),
(27, 4, 5, 24, 12, NULL, NULL),
(28, 4, 5, 25, 1, NULL, NULL),
(29, 4, 5, 23, 1, NULL, NULL),
(30, 4, 5, 26, 1, NULL, NULL),
(31, 4, 5, 27, 1, NULL, NULL),
(32, 4, 5, 28, 1, NULL, NULL),
(33, 4, 5, 29, 1, NULL, NULL),
(34, 4, 5, 54, 11, NULL, NULL),
(35, 4, 5, 56, 3, NULL, NULL),
(36, 4, 5, 96, 1, NULL, NULL),
(37, 4, 5, 99, 4, NULL, NULL),
(38, 4, 5, 100, 5, NULL, NULL),
(39, 4, 6, 5, 1, NULL, NULL),
(40, 4, 6, 25, 4, NULL, NULL),
(41, 4, 6, 54, 4, NULL, NULL),
(42, 4, 6, 57, 1, NULL, NULL),
(43, 4, 6, 96, 4, NULL, NULL),
(44, 4, 6, 99, 2, NULL, NULL),
(45, 4, 6, 100, 4, NULL, NULL),
(46, 7, 95, 3, 1, NULL, NULL),
(47, 7, 95, 5, 3, NULL, NULL),
(48, 7, 95, 8, 2, NULL, NULL),
(49, 7, 95, 24, 6, NULL, NULL),
(50, 7, 95, 25, 1, NULL, NULL),
(51, 7, 95, 23, 1, NULL, NULL),
(52, 7, 95, 28, 1, NULL, NULL),
(53, 7, 95, 30, 1, NULL, NULL),
(54, 7, 95, 31, 1, NULL, NULL),
(55, 7, 95, 32, 4, NULL, NULL),
(56, 7, 95, 54, 7, NULL, NULL),
(57, 7, 95, 57, 1, NULL, NULL),
(58, 7, 95, 101, 1, NULL, NULL),
(59, 7, 95, 102, 1, NULL, NULL),
(60, 7, 95, 103, 4, NULL, NULL),
(61, 7, 95, 96, 1, NULL, NULL),
(62, 7, 95, 99, 4, NULL, NULL),
(63, 7, 95, 100, 5, NULL, NULL),
(64, 7, 96, 5, 1, NULL, NULL),
(65, 7, 96, 24, 3, NULL, NULL),
(66, 7, 96, 33, 1, NULL, NULL),
(67, 7, 96, 54, 6, NULL, NULL),
(68, 7, 96, 54, 1, NULL, NULL),
(69, 7, 96, 57, 2, NULL, NULL),
(70, 7, 101, 24, 1, NULL, NULL),
(71, 7, 101, 54, 2, NULL, NULL),
(72, 7, 101, 54, 1, NULL, NULL),
(73, 7, 101, 61, 1, NULL, NULL),
(74, 7, 101, 89, 1, NULL, NULL),
(75, 7, 101, 100, 3, NULL, NULL),
(76, 7, 100, 24, 1, NULL, NULL),
(77, 7, 100, 54, 1, NULL, NULL),
(78, 7, 100, 54, 1, NULL, NULL),
(79, 7, 100, 61, 2, NULL, NULL),
(80, 7, 100, 100, 3, NULL, NULL),
(81, 7, 100, 24, 1, NULL, NULL),
(82, 7, 100, 54, 1, NULL, NULL),
(83, 7, 100, 54, 1, NULL, NULL),
(84, 7, 100, 61, 2, NULL, NULL),
(85, 7, 100, 100, 3, NULL, NULL),
(86, 7, 103, 5, 1, NULL, NULL),
(87, 7, 103, 24, 1, NULL, NULL),
(88, 7, 103, 54, 2, NULL, NULL),
(89, 7, 103, 61, 2, NULL, NULL),
(90, 7, 103, 96, 1, NULL, NULL),
(91, 7, 103, 100, 3, NULL, NULL),
(92, 7, 99, 24, 1, NULL, NULL),
(93, 7, 99, 54, 1, NULL, NULL),
(94, 7, 99, 61, 2, NULL, NULL),
(95, 7, 99, 85, 1, NULL, NULL),
(96, 7, 99, 89, 1, NULL, NULL),
(97, 7, 99, 100, 3, NULL, NULL),
(98, 7, 104, 5, 1, NULL, NULL),
(99, 7, 104, 24, 1, NULL, NULL),
(100, 7, 104, 25, 1, NULL, NULL),
(101, 7, 104, 36, 1, NULL, NULL),
(102, 7, 104, 54, 2, NULL, NULL),
(103, 7, 104, 60, 1, NULL, NULL),
(104, 7, 104, 61, 2, NULL, NULL),
(105, 7, 104, 100, 3, NULL, NULL),
(106, 7, 98, 5, 1, NULL, NULL),
(107, 7, 98, 24, 1, NULL, NULL),
(108, 7, 98, 36, 1, NULL, NULL),
(109, 7, 98, 54, 1, NULL, NULL),
(110, 7, 98, 60, 1, NULL, NULL),
(111, 7, 98, 61, 1, NULL, NULL),
(112, 7, 98, 99, 1, NULL, NULL),
(113, 7, 98, 100, 3, NULL, NULL),
(114, 7, 105, 24, 1, NULL, NULL),
(115, 7, 105, 54, 2, NULL, NULL),
(116, 7, 105, 54, 1, NULL, NULL),
(117, 7, 105, 89, 1, NULL, NULL),
(118, 7, 105, 100, 3, NULL, NULL),
(119, 7, 112, 8, 1, NULL, NULL),
(120, 7, 112, 32, 9, NULL, NULL),
(121, 7, 112, 54, 1, NULL, NULL),
(122, 7, 112, 54, 1, NULL, NULL),
(123, 7, 112, 103, 1, NULL, NULL),
(124, 7, 112, 85, 1, NULL, NULL),
(125, 7, 112, 93, 2, NULL, NULL),
(126, 7, 112, 94, 1, NULL, NULL),
(127, 7, 112, 97, 25, NULL, NULL),
(128, 7, 112, 98, 4, NULL, NULL),
(129, 7, 112, 99, 1, NULL, NULL),
(130, 7, 112, 100, 3, NULL, NULL),
(131, 7, 113, 8, 1, NULL, NULL),
(132, 7, 113, 24, 1, NULL, NULL),
(133, 7, 113, 25, 1, NULL, NULL),
(134, 7, 113, 32, 8, NULL, NULL),
(135, 7, 113, 54, 1, NULL, NULL),
(136, 7, 113, 54, 1, NULL, NULL),
(137, 7, 113, 103, 6, NULL, NULL),
(138, 7, 113, 85, 1, NULL, NULL),
(139, 7, 113, 86, 1, NULL, NULL),
(140, 7, 113, 87, 2, NULL, NULL),
(141, 7, 113, 92, 1, NULL, NULL),
(142, 7, 113, 93, 2, NULL, NULL),
(143, 7, 113, 94, 4, NULL, NULL),
(144, 7, 113, 97, 25, NULL, NULL),
(145, 7, 113, 98, 16, NULL, NULL),
(146, 7, 113, 99, 2, NULL, NULL),
(147, 7, 113, 100, 5, NULL, NULL),
(148, 7, 114, 8, 1, NULL, NULL),
(149, 7, 114, 24, 1, NULL, NULL),
(150, 7, 114, 25, 1, NULL, NULL),
(151, 7, 114, 32, 10, NULL, NULL),
(152, 7, 114, 54, 1, NULL, NULL),
(153, 7, 114, 54, 1, NULL, NULL),
(154, 7, 114, 103, 8, NULL, NULL),
(155, 7, 114, 85, 1, NULL, NULL),
(156, 7, 114, 86, 1, NULL, NULL),
(157, 7, 114, 87, 2, NULL, NULL),
(158, 7, 114, 92, 1, NULL, NULL),
(159, 7, 114, 93, 2, NULL, NULL),
(160, 7, 114, 94, 4, NULL, NULL),
(161, 7, 114, 97, 37, NULL, NULL),
(162, 7, 114, 98, 16, NULL, NULL),
(163, 7, 114, 99, 2, NULL, NULL),
(164, 7, 114, 100, 5, NULL, NULL),
(165, 7, 119, 8, 1, NULL, NULL),
(166, 7, 119, 32, 6, NULL, NULL),
(167, 7, 119, 54, 1, NULL, NULL),
(168, 7, 119, 54, 1, NULL, NULL),
(169, 7, 119, 103, 1, NULL, NULL),
(170, 7, 119, 85, 1, NULL, NULL),
(171, 7, 119, 93, 2, NULL, NULL),
(172, 7, 119, 97, 17, NULL, NULL),
(173, 7, 119, 99, 1, NULL, NULL),
(174, 7, 119, 100, 3, NULL, NULL),
(175, 7, 106, 8, 1, NULL, NULL),
(176, 7, 106, 24, 1, NULL, NULL),
(177, 7, 106, 25, 1, NULL, NULL),
(178, 7, 106, 32, 10, NULL, NULL),
(179, 7, 106, 54, 1, NULL, NULL),
(180, 7, 106, 54, 1, NULL, NULL),
(181, 7, 106, 103, 8, NULL, NULL),
(182, 7, 106, 85, 1, NULL, NULL),
(183, 7, 106, 86, 1, NULL, NULL),
(184, 7, 106, 87, 2, NULL, NULL),
(185, 7, 106, 92, 1, NULL, NULL),
(186, 7, 106, 93, 2, NULL, NULL),
(187, 7, 106, 94, 4, NULL, NULL),
(188, 7, 106, 97, 37, NULL, NULL),
(189, 7, 106, 98, 16, NULL, NULL),
(190, 7, 106, 99, 2, NULL, NULL),
(191, 7, 106, 100, 5, NULL, NULL),
(192, 7, 119, 8, 1, NULL, NULL),
(193, 7, 119, 32, 11, NULL, NULL),
(194, 7, 119, 54, 1, NULL, NULL),
(195, 7, 119, 54, 1, NULL, NULL),
(196, 7, 119, 103, 1, NULL, NULL),
(197, 7, 119, 85, 1, NULL, NULL),
(198, 7, 119, 93, 2, NULL, NULL),
(199, 7, 119, 97, 33, NULL, NULL),
(200, 7, 119, 99, 1, NULL, NULL),
(201, 7, 119, 100, 3, NULL, NULL),
(202, 7, 108, 8, 1, NULL, NULL),
(203, 7, 108, 24, 1, NULL, NULL),
(204, 7, 108, 25, 1, NULL, NULL),
(205, 7, 108, 32, 10, NULL, NULL),
(206, 7, 108, 54, 1, NULL, NULL),
(207, 7, 108, 54, 1, NULL, NULL),
(208, 7, 108, 103, 8, NULL, NULL),
(209, 7, 108, 85, 1, NULL, NULL),
(210, 7, 108, 86, 1, NULL, NULL),
(211, 7, 108, 87, 2, NULL, NULL),
(212, 7, 108, 92, 1, NULL, NULL),
(213, 7, 108, 93, 2, NULL, NULL),
(214, 7, 108, 94, 4, NULL, NULL),
(215, 7, 108, 97, 37, NULL, NULL),
(216, 7, 108, 98, 16, NULL, NULL),
(217, 7, 108, 99, 2, NULL, NULL),
(218, 7, 108, 100, 5, NULL, NULL),
(219, 7, 109, 8, 1, NULL, NULL),
(220, 7, 109, 24, 1, NULL, NULL),
(221, 7, 109, 25, 1, NULL, NULL),
(222, 7, 109, 32, 10, NULL, NULL),
(223, 7, 109, 54, 1, NULL, NULL),
(224, 7, 109, 54, 1, NULL, NULL),
(225, 7, 109, 103, 8, NULL, NULL),
(226, 7, 109, 85, 1, NULL, NULL),
(227, 7, 109, 86, 1, NULL, NULL),
(228, 7, 109, 87, 2, NULL, NULL),
(229, 7, 109, 92, 1, NULL, NULL),
(230, 7, 109, 93, 2, NULL, NULL),
(231, 7, 109, 94, 4, NULL, NULL),
(232, 7, 109, 97, 37, NULL, NULL),
(233, 7, 109, 98, 16, NULL, NULL),
(234, 7, 109, 99, 2, NULL, NULL),
(235, 7, 109, 100, 5, NULL, NULL),
(236, 7, 110, 8, 1, NULL, NULL),
(237, 7, 110, 32, 9, NULL, NULL),
(238, 7, 110, 54, 1, NULL, NULL),
(239, 7, 110, 54, 1, NULL, NULL),
(240, 7, 110, 103, 1, NULL, NULL),
(241, 7, 110, 85, 1, NULL, NULL),
(242, 7, 110, 93, 2, NULL, NULL),
(243, 7, 110, 97, 25, NULL, NULL),
(244, 7, 110, 99, 1, NULL, NULL),
(245, 7, 110, 100, 3, NULL, NULL),
(246, 7, 115, 8, 1, NULL, NULL),
(247, 7, 115, 24, 1, NULL, NULL),
(248, 7, 115, 25, 1, NULL, NULL),
(249, 7, 115, 32, 12, NULL, NULL),
(250, 7, 115, 54, 1, NULL, NULL),
(251, 7, 115, 54, 1, NULL, NULL),
(252, 7, 115, 103, 10, NULL, NULL),
(253, 7, 115, 85, 1, NULL, NULL),
(254, 7, 115, 86, 1, NULL, NULL),
(255, 7, 115, 87, 2, NULL, NULL),
(256, 7, 115, 92, 1, NULL, NULL),
(257, 7, 115, 93, 2, NULL, NULL),
(258, 7, 115, 94, 4, NULL, NULL),
(259, 7, 115, 97, 49, NULL, NULL),
(260, 7, 115, 98, 16, NULL, NULL),
(261, 7, 115, 99, 2, NULL, NULL),
(262, 7, 115, 100, 5, NULL, NULL),
(263, 7, 116, 8, 1, NULL, NULL),
(264, 7, 116, 24, 1, NULL, NULL),
(265, 7, 116, 25, 1, NULL, NULL),
(266, 7, 116, 32, 12, NULL, NULL),
(267, 7, 116, 54, 2, NULL, NULL),
(268, 7, 116, 103, 10, NULL, NULL),
(269, 7, 116, 85, 1, NULL, NULL),
(270, 7, 116, 86, 1, NULL, NULL),
(271, 7, 116, 87, 2, NULL, NULL),
(272, 7, 116, 92, 1, NULL, NULL),
(273, 7, 116, 93, 2, NULL, NULL),
(274, 7, 116, 94, 4, NULL, NULL),
(275, 7, 116, 97, 49, NULL, NULL),
(276, 7, 116, 98, 16, NULL, NULL),
(277, 7, 116, 99, 2, NULL, NULL),
(278, 7, 116, 100, 5, NULL, NULL),
(279, 7, 107, 8, 1, NULL, NULL),
(280, 7, 107, 24, 1, NULL, NULL),
(281, 7, 107, 25, 1, NULL, NULL),
(282, 7, 107, 32, 8, NULL, NULL),
(283, 7, 107, 54, 1, NULL, NULL),
(284, 7, 107, 54, 1, NULL, NULL),
(285, 7, 107, 103, 6, NULL, NULL),
(286, 7, 107, 85, 1, NULL, NULL),
(287, 7, 107, 86, 1, NULL, NULL),
(288, 7, 107, 87, 2, NULL, NULL),
(289, 7, 107, 92, 1, NULL, NULL),
(290, 7, 107, 93, 2, NULL, NULL),
(291, 7, 107, 94, 4, NULL, NULL),
(292, 7, 107, 97, 25, NULL, NULL),
(293, 7, 107, 98, 16, NULL, NULL),
(294, 7, 107, 99, 2, NULL, NULL),
(295, 7, 107, 100, 5, NULL, NULL),
(296, 7, 111, 8, 1, NULL, NULL),
(297, 7, 111, 32, 11, NULL, NULL),
(298, 7, 111, 54, 1, NULL, NULL),
(299, 7, 111, 54, 1, NULL, NULL),
(300, 7, 111, 103, 1, NULL, NULL),
(301, 7, 111, 85, 1, NULL, NULL),
(302, 7, 111, 93, 2, NULL, NULL),
(303, 7, 111, 94, 1, NULL, NULL),
(304, 7, 111, 97, 33, NULL, NULL),
(305, 7, 111, 98, 4, NULL, NULL),
(306, 7, 111, 99, 1, NULL, NULL),
(307, 7, 111, 100, 3, NULL, NULL),
(308, 7, 117, 8, 1, NULL, NULL),
(309, 7, 117, 32, 9, NULL, NULL),
(310, 7, 117, 54, 1, NULL, NULL),
(311, 7, 117, 54, 1, NULL, NULL),
(312, 7, 117, 103, 1, NULL, NULL),
(313, 7, 117, 85, 1, NULL, NULL),
(314, 7, 117, 93, 2, NULL, NULL),
(315, 7, 117, 97, 25, NULL, NULL),
(316, 7, 117, 99, 1, NULL, NULL),
(317, 7, 117, 100, 3, NULL, NULL),
(318, 7, 121, 6, 1, NULL, NULL),
(319, 7, 121, 34, 1, NULL, NULL),
(320, 7, 121, 95, 1, NULL, NULL),
(321, 7, 121, 31, 3, NULL, NULL),
(322, 7, 121, 54, 1, NULL, NULL),
(323, 7, 121, 54, 1, NULL, NULL),
(324, 7, 121, 55, 2, NULL, NULL),
(325, 7, 121, 101, 2, NULL, NULL),
(326, 7, 121, 99, 2, NULL, NULL),
(327, 7, 121, 100, 3, NULL, NULL),
(328, 7, 120, 6, 1, NULL, NULL),
(329, 7, 120, 34, 1, NULL, NULL),
(330, 7, 120, 95, 1, NULL, NULL),
(331, 7, 120, 31, 3, NULL, NULL),
(332, 7, 120, 54, 1, NULL, NULL),
(333, 7, 120, 54, 1, NULL, NULL),
(334, 7, 120, 55, 2, NULL, NULL),
(335, 7, 120, 101, 2, NULL, NULL),
(336, 7, 120, 99, 2, NULL, NULL),
(337, 7, 120, 100, 3, NULL, NULL),
(338, 7, 98, 8, 1, NULL, NULL),
(339, 7, 98, 17, 1, NULL, NULL),
(340, 7, 98, 35, 1, NULL, NULL),
(341, 7, 98, 32, 1, NULL, NULL),
(342, 7, 98, 54, 1, NULL, NULL),
(343, 7, 98, 54, 1, NULL, NULL),
(344, 7, 98, 101, 1, NULL, NULL),
(345, 7, 98, 103, 1, NULL, NULL),
(346, 7, 98, 103, 1, NULL, NULL),
(347, 7, 98, 99, 1, NULL, NULL),
(348, 7, 98, 100, 2, NULL, NULL),
(349, 7, 97, 3, 1, NULL, NULL),
(350, 7, 97, 8, 3, NULL, NULL),
(351, 7, 97, 24, 1, NULL, NULL),
(352, 7, 97, 34, 1, NULL, NULL),
(353, 7, 97, 31, 1, NULL, NULL),
(354, 7, 97, 32, 3, NULL, NULL),
(355, 7, 97, 54, 1, NULL, NULL),
(356, 7, 97, 54, 1, NULL, NULL),
(357, 7, 97, 57, 1, NULL, NULL),
(358, 7, 97, 103, 3, NULL, NULL),
(359, 7, 97, 85, 1, NULL, NULL),
(360, 7, 97, 93, 2, NULL, NULL),
(361, 7, 97, 97, 2, NULL, NULL),
(362, 7, 97, 99, 2, NULL, NULL),
(363, 7, 97, 100, 4, NULL, NULL),
(364, 1, 1, 5, 3, NULL, NULL),
(365, 1, 1, 24, 4, NULL, NULL),
(366, 1, 1, 25, 1, NULL, NULL),
(367, 1, 1, 23, 1, NULL, NULL),
(368, 1, 1, 27, 1, NULL, NULL),
(369, 1, 1, 54, 1, NULL, NULL),
(370, 1, 1, 56, 1, NULL, NULL),
(371, 1, 1, 58, 2, NULL, NULL),
(372, 1, 1, 59, 1, NULL, NULL),
(373, 1, 1, 96, 1, NULL, NULL),
(374, 1, 1, 99, 3, NULL, NULL),
(375, 1, 1, 100, 3, NULL, NULL),
(376, 8, 122, 3, 1, NULL, NULL),
(377, 8, 122, 5, 2, NULL, NULL),
(378, 8, 122, 9, 1, NULL, NULL),
(379, 8, 122, 12, 1, NULL, NULL),
(380, 8, 122, 13, 1, NULL, NULL),
(381, 8, 122, 21, 1, NULL, NULL),
(382, 8, 122, 24, 8, NULL, NULL),
(383, 8, 122, 25, 1, NULL, NULL),
(384, 8, 122, 23, 1, NULL, NULL),
(385, 8, 122, 28, 1, NULL, NULL),
(386, 8, 122, 104, 2, NULL, NULL),
(387, 8, 122, 37, 3, NULL, NULL),
(388, 8, 122, 38, 2, NULL, NULL),
(389, 8, 122, 39, 2, NULL, NULL),
(390, 8, 122, 34, 2, NULL, NULL),
(391, 8, 122, 44, 5, NULL, NULL),
(392, 8, 122, 45, 4, NULL, NULL),
(393, 8, 122, 54, 7, NULL, NULL),
(394, 8, 122, 56, 2, NULL, NULL),
(395, 8, 122, 122, 1, NULL, NULL),
(396, 8, 122, 64, 1, NULL, NULL),
(397, 8, 122, 65, 1, NULL, NULL),
(398, 8, 122, 66, 5, NULL, NULL),
(399, 8, 122, 68, 3, NULL, NULL),
(400, 8, 122, 67, 1, NULL, NULL),
(401, 8, 122, 66, 1, NULL, NULL),
(402, 8, 122, 85, 1, NULL, NULL),
(403, 8, 122, 96, 1, NULL, NULL),
(404, 8, 122, 99, 6, NULL, NULL),
(405, 8, 122, 100, 6, NULL, NULL),
(406, 8, 142, 44, 1, NULL, NULL),
(407, 8, 142, 68, 2, NULL, NULL),
(408, 8, 142, 85, 1, NULL, NULL),
(409, 8, 142, 96, 1, NULL, NULL),
(410, 8, 142, 104, 2, NULL, NULL),
(411, 8, 142, 99, 1, NULL, NULL),
(412, 8, 142, 100, 2, NULL, NULL),
(413, 8, 126, 20, 1, NULL, NULL),
(414, 8, 126, 37, 1, NULL, NULL),
(415, 8, 126, 39, 1, NULL, NULL),
(416, 8, 126, 40, 1, NULL, NULL),
(417, 8, 126, 41, 1, NULL, NULL),
(418, 8, 126, 54, 1, NULL, NULL),
(419, 8, 126, 66, 4, NULL, NULL),
(420, 8, 126, 85, 1, NULL, NULL),
(421, 8, 126, 99, 1, NULL, NULL),
(422, 8, 126, 100, 3, NULL, NULL),
(423, 8, 127, 20, 1, NULL, NULL),
(424, 8, 127, 37, 1, NULL, NULL),
(425, 8, 127, 39, 2, NULL, NULL),
(426, 8, 127, 40, 1, NULL, NULL),
(427, 8, 127, 41, 1, NULL, NULL),
(428, 8, 127, 54, 1, NULL, NULL),
(429, 8, 127, 66, 3, NULL, NULL),
(430, 8, 127, 85, 1, NULL, NULL),
(431, 8, 127, 99, 1, NULL, NULL),
(432, 8, 127, 100, 3, NULL, NULL),
(433, 8, 128, 20, 1, NULL, NULL),
(434, 8, 128, 37, 1, NULL, NULL),
(435, 8, 128, 39, 2, NULL, NULL),
(436, 8, 128, 40, 1, NULL, NULL),
(437, 8, 128, 41, 1, NULL, NULL),
(438, 8, 128, 54, 1, NULL, NULL),
(439, 8, 128, 66, 3, NULL, NULL),
(440, 8, 128, 85, 1, NULL, NULL),
(441, 8, 128, 99, 1, NULL, NULL),
(442, 8, 128, 100, 3, NULL, NULL),
(443, 8, 129, 20, 1, NULL, NULL),
(444, 8, 129, 37, 1, NULL, NULL),
(445, 8, 129, 39, 1, NULL, NULL),
(446, 8, 129, 34, 1, NULL, NULL),
(447, 8, 129, 40, 1, NULL, NULL),
(448, 8, 129, 41, 1, NULL, NULL),
(449, 8, 129, 54, 1, NULL, NULL),
(450, 8, 129, 66, 4, NULL, NULL),
(451, 8, 129, 85, 1, NULL, NULL),
(452, 8, 129, 99, 1, NULL, NULL),
(453, 8, 129, 100, 3, NULL, NULL),
(454, 8, 131, 20, 1, NULL, NULL),
(455, 8, 131, 37, 1, NULL, NULL),
(456, 8, 131, 39, 2, NULL, NULL),
(457, 8, 131, 34, 1, NULL, NULL),
(458, 8, 131, 40, 1, NULL, NULL),
(459, 8, 131, 41, 1, NULL, NULL),
(460, 8, 131, 54, 1, NULL, NULL),
(461, 8, 131, 66, 3, NULL, NULL),
(462, 8, 131, 85, 1, NULL, NULL),
(463, 8, 131, 99, 1, NULL, NULL),
(464, 8, 131, 100, 3, NULL, NULL),
(465, 8, 125, 20, 1, NULL, NULL),
(466, 8, 125, 37, 1, NULL, NULL),
(467, 8, 125, 39, 3, NULL, NULL),
(468, 8, 125, 34, 1, NULL, NULL),
(469, 8, 125, 40, 1, NULL, NULL),
(470, 8, 125, 41, 1, NULL, NULL),
(471, 8, 125, 54, 1, NULL, NULL),
(472, 8, 125, 66, 3, NULL, NULL),
(473, 8, 125, 85, 1, NULL, NULL),
(474, 8, 125, 99, 1, NULL, NULL),
(475, 8, 125, 100, 3, NULL, NULL),
(476, 8, 130, 20, 1, NULL, NULL),
(477, 8, 130, 37, 1, NULL, NULL),
(478, 8, 130, 39, 3, NULL, NULL),
(479, 8, 130, 34, 1, NULL, NULL),
(480, 8, 130, 40, 1, NULL, NULL),
(481, 8, 130, 41, 1, NULL, NULL),
(482, 8, 130, 54, 1, NULL, NULL),
(483, 8, 130, 66, 3, NULL, NULL),
(484, 8, 130, 85, 1, NULL, NULL),
(485, 8, 130, 99, 1, NULL, NULL),
(486, 8, 130, 100, 3, NULL, NULL),
(487, 8, 132, 20, 1, NULL, NULL),
(488, 8, 132, 37, 1, NULL, NULL),
(489, 8, 132, 39, 2, NULL, NULL),
(490, 8, 132, 40, 1, NULL, NULL),
(491, 8, 132, 41, 1, NULL, NULL),
(492, 8, 132, 54, 1, NULL, NULL),
(493, 8, 132, 66, 3, NULL, NULL),
(494, 8, 132, 85, 1, NULL, NULL),
(495, 8, 132, 99, 1, NULL, NULL),
(496, 8, 132, 100, 3, NULL, NULL),
(497, 8, 123, 3, 1, NULL, NULL),
(498, 8, 123, 13, 3, NULL, NULL),
(499, 8, 123, 15, 2, NULL, NULL),
(500, 8, 123, 16, 1, NULL, NULL),
(501, 8, 123, 17, 1, NULL, NULL),
(502, 8, 123, 18, 1, NULL, NULL),
(503, 8, 123, 24, 1, NULL, NULL),
(504, 8, 123, 25, 1, NULL, NULL),
(505, 8, 123, 37, 2, NULL, NULL),
(506, 8, 123, 39, 1, NULL, NULL),
(507, 8, 123, 34, 1, NULL, NULL),
(508, 8, 123, 40, 2, NULL, NULL),
(509, 8, 123, 41, 1, NULL, NULL),
(510, 8, 123, 42, 1, NULL, NULL),
(511, 8, 123, 54, 2, NULL, NULL),
(512, 8, 123, 56, 1, NULL, NULL),
(513, 8, 123, 66, 9, NULL, NULL),
(514, 8, 123, 69, 1, NULL, NULL),
(515, 8, 123, 99, 2, NULL, NULL),
(516, 8, 123, 100, 4, NULL, NULL),
(517, 8, 139, 3, 1, NULL, NULL),
(518, 8, 139, 13, 1, NULL, NULL),
(519, 8, 139, 15, 1, NULL, NULL),
(520, 8, 139, 16, 1, NULL, NULL),
(521, 8, 139, 39, 2, NULL, NULL),
(522, 8, 139, 54, 2, NULL, NULL),
(523, 8, 139, 66, 2, NULL, NULL),
(524, 8, 139, 85, 1, NULL, NULL),
(525, 8, 139, 99, 2, NULL, NULL),
(526, 8, 139, 100, 3, NULL, NULL),
(527, 8, 140, 22, 1, NULL, NULL),
(528, 8, 140, 44, 1, NULL, NULL),
(529, 8, 140, 45, 1, NULL, NULL),
(530, 8, 140, 47, 1, NULL, NULL),
(531, 8, 140, 68, 1, NULL, NULL),
(532, 8, 140, 67, 1, NULL, NULL),
(533, 8, 140, 66, 1, NULL, NULL),
(534, 8, 140, 85, 1, NULL, NULL),
(535, 8, 140, 96, 1, NULL, NULL),
(536, 8, 140, 99, 1, NULL, NULL),
(537, 8, 140, 100, 2, NULL, NULL),
(538, 8, 124, 4, 1, NULL, NULL),
(539, 8, 124, 21, 1, NULL, NULL),
(540, 8, 124, 14, 1, NULL, NULL),
(541, 8, 124, 19, 1, NULL, NULL),
(542, 8, 124, 24, 1, NULL, NULL),
(543, 8, 124, 37, 1, NULL, NULL),
(544, 8, 124, 44, 1, NULL, NULL),
(545, 8, 124, 45, 2, NULL, NULL),
(546, 8, 124, 47, 2, NULL, NULL),
(547, 8, 124, 54, 2, NULL, NULL),
(548, 8, 124, 68, 2, NULL, NULL),
(549, 8, 124, 67, 2, NULL, NULL),
(550, 8, 124, 66, 2, NULL, NULL),
(551, 8, 124, 99, 2, NULL, NULL),
(552, 8, 124, 100, 3, NULL, NULL),
(553, 8, 146, 18, 1, NULL, NULL),
(554, 8, 146, 41, 2, NULL, NULL),
(555, 8, 146, 54, 2, NULL, NULL),
(556, 8, 146, 85, 1, NULL, NULL),
(557, 8, 146, 100, 2, NULL, NULL),
(558, 8, 145, 17, 1, NULL, NULL),
(559, 8, 145, 34, 2, NULL, NULL),
(560, 8, 145, 54, 1, NULL, NULL),
(561, 8, 145, 66, 3, NULL, NULL),
(562, 8, 145, 96, 1, NULL, NULL),
(563, 8, 145, 105, 1, NULL, NULL),
(564, 8, 145, 100, 2, NULL, NULL),
(565, 8, 144, 17, 1, NULL, NULL),
(566, 8, 144, 34, 3, NULL, NULL),
(567, 8, 144, 54, 2, NULL, NULL),
(568, 8, 144, 66, 1, NULL, NULL),
(569, 8, 144, 96, 1, NULL, NULL),
(570, 8, 144, 105, 1, NULL, NULL),
(571, 8, 144, 100, 2, NULL, NULL),
(572, 8, 135, 22, 1, NULL, NULL),
(573, 8, 135, 44, 1, NULL, NULL),
(574, 8, 135, 45, 1, NULL, NULL),
(575, 8, 135, 47, 1, NULL, NULL),
(576, 8, 135, 54, 2, NULL, NULL),
(577, 8, 135, 68, 1, NULL, NULL),
(578, 8, 135, 67, 1, NULL, NULL),
(579, 8, 135, 66, 1, NULL, NULL),
(580, 8, 135, 91, 1, NULL, NULL),
(581, 8, 135, 104, 2, NULL, NULL),
(582, 8, 135, 99, 1, NULL, NULL),
(583, 8, 135, 100, 2, NULL, NULL),
(584, 8, 135, 22, 1, NULL, NULL),
(585, 8, 137, 44, 1, NULL, NULL),
(586, 8, 137, 45, 1, NULL, NULL),
(587, 8, 137, 47, 1, NULL, NULL),
(588, 8, 137, 54, 2, NULL, NULL),
(589, 8, 137, 68, 1, NULL, NULL),
(590, 8, 137, 67, 1, NULL, NULL),
(591, 8, 137, 66, 1, NULL, NULL),
(592, 8, 137, 91, 1, NULL, NULL),
(593, 8, 137, 104, 1, NULL, NULL),
(594, 8, 137, 99, 1, NULL, NULL),
(595, 8, 137, 100, 2, NULL, NULL),
(596, 8, 137, 21, 1, NULL, NULL),
(597, 8, 133, 44, 1, NULL, NULL),
(598, 8, 133, 45, 1, NULL, NULL),
(599, 8, 133, 54, 2, NULL, NULL),
(600, 8, 133, 68, 1, NULL, NULL),
(601, 8, 133, 67, 1, NULL, NULL),
(602, 8, 133, 91, 1, NULL, NULL),
(603, 8, 133, 104, 1, NULL, NULL),
(604, 8, 133, 99, 1, NULL, NULL),
(605, 8, 133, 100, 2, NULL, NULL),
(606, 8, 133, 22, 1, NULL, NULL),
(607, 8, 138, 44, 1, NULL, NULL),
(608, 8, 138, 45, 1, NULL, NULL),
(609, 8, 138, 47, 1, NULL, NULL),
(610, 8, 138, 54, 2, NULL, NULL),
(611, 8, 138, 68, 1, NULL, NULL),
(612, 8, 138, 67, 1, NULL, NULL),
(613, 8, 138, 66, 1, NULL, NULL),
(614, 8, 138, 91, 1, NULL, NULL),
(615, 8, 138, 104, 1, NULL, NULL),
(616, 8, 138, 99, 1, NULL, NULL),
(617, 8, 138, 100, 2, NULL, NULL),
(618, 8, 138, 22, 1, NULL, NULL),
(619, 8, 136, 44, 1, NULL, NULL),
(620, 8, 136, 45, 1, NULL, NULL),
(621, 8, 136, 47, 1, NULL, NULL),
(622, 8, 136, 54, 2, NULL, NULL),
(623, 8, 136, 68, 1, NULL, NULL),
(624, 8, 136, 67, 1, NULL, NULL),
(625, 8, 136, 66, 1, NULL, NULL),
(626, 8, 136, 91, 1, NULL, NULL),
(627, 8, 136, 104, 2, NULL, NULL),
(628, 8, 136, 99, 1, NULL, NULL),
(629, 8, 136, 100, 2, NULL, NULL),
(630, 8, 136, 21, 1, NULL, NULL),
(631, 8, 134, 54, 2, NULL, NULL),
(632, 8, 134, 68, 1, NULL, NULL),
(633, 8, 134, 67, 1, NULL, NULL),
(634, 8, 134, 91, 1, NULL, NULL),
(635, 8, 134, 104, 1, NULL, NULL),
(636, 8, 134, 99, 1, NULL, NULL),
(637, 8, 134, 100, 2, NULL, NULL),
(638, 8, 134, 19, 1, NULL, NULL),
(639, 8, 143, 47, 2, NULL, NULL),
(640, 8, 143, 66, 2, NULL, NULL),
(641, 8, 143, 85, 1, NULL, NULL),
(642, 8, 143, 96, 1, NULL, NULL),
(643, 8, 143, 104, 1, NULL, NULL),
(644, 8, 143, 99, 1, NULL, NULL),
(645, 8, 143, 100, 2, NULL, NULL),
(646, 8, 143, 45, 2, NULL, NULL),
(647, 8, 147, 54, 2, NULL, NULL),
(648, 8, 147, 85, 2, NULL, NULL),
(649, 8, 147, 105, 1, NULL, NULL),
(650, 8, 147, 100, 2, NULL, NULL),
(651, 8, 147, 5, 1, NULL, NULL),
(652, 8, 141, 24, 3, NULL, NULL),
(653, 8, 141, 54, 3, NULL, NULL),
(654, 8, 141, 56, 1, NULL, NULL),
(655, 8, 141, 85, 1, NULL, NULL),
(656, 8, 141, 99, 1, NULL, NULL),
(657, 8, 141, 100, 3, NULL, NULL),
(658, 5, 9, 10, 1, NULL, NULL),
(659, 5, 9, 95, 3, NULL, NULL),
(660, 5, 9, 54, 2, NULL, NULL),
(661, 5, 9, 56, 1, NULL, NULL),
(662, 5, 9, 55, 4, NULL, NULL),
(663, 5, 9, 70, 6, NULL, NULL),
(664, 5, 9, 71, 1, NULL, NULL),
(665, 5, 9, 99, 1, NULL, NULL),
(666, 5, 9, 100, 2, NULL, NULL),
(667, 5, 12, 10, 1, NULL, NULL),
(668, 5, 12, 95, 3, NULL, NULL),
(669, 5, 12, 54, 2, NULL, NULL),
(670, 5, 12, 56, 1, NULL, NULL),
(671, 5, 12, 55, 4, NULL, NULL),
(672, 5, 12, 70, 6, NULL, NULL),
(673, 5, 12, 71, 1, NULL, NULL),
(674, 5, 12, 99, 1, NULL, NULL),
(675, 5, 12, 100, 2, NULL, NULL),
(676, 5, 10, 10, 1, NULL, NULL),
(677, 5, 10, 95, 3, NULL, NULL),
(678, 5, 10, 54, 2, NULL, NULL),
(679, 5, 10, 56, 1, NULL, NULL),
(680, 5, 10, 55, 4, NULL, NULL),
(681, 5, 10, 70, 4, NULL, NULL),
(682, 5, 10, 71, 1, NULL, NULL),
(683, 5, 10, 70, 2, NULL, NULL),
(684, 5, 10, 99, 1, NULL, NULL),
(685, 5, 10, 100, 2, NULL, NULL),
(686, 5, 13, 10, 1, NULL, NULL),
(687, 5, 13, 95, 2, NULL, NULL),
(688, 5, 13, 54, 2, NULL, NULL),
(689, 5, 13, 56, 1, NULL, NULL),
(690, 5, 13, 55, 2, NULL, NULL),
(691, 5, 13, 70, 2, NULL, NULL),
(692, 5, 13, 99, 1, NULL, NULL),
(693, 5, 13, 100, 2, NULL, NULL),
(694, 5, 11, 10, 1, NULL, NULL),
(695, 5, 11, 95, 3, NULL, NULL),
(696, 5, 11, 54, 2, NULL, NULL),
(697, 5, 11, 56, 1, NULL, NULL),
(698, 5, 11, 55, 4, NULL, NULL),
(699, 5, 11, 70, 6, NULL, NULL),
(700, 5, 11, 71, 1, NULL, NULL),
(701, 5, 11, 99, 1, NULL, NULL),
(702, 5, 11, 100, 2, NULL, NULL),
(703, 5, 33, 10, 1, NULL, NULL),
(704, 5, 33, 95, 2, NULL, NULL),
(705, 5, 33, 54, 2, NULL, NULL),
(706, 5, 33, 55, 3, NULL, NULL),
(707, 5, 33, 88, 1, NULL, NULL),
(708, 5, 33, 100, 2, NULL, NULL),
(709, 5, 37, 10, 1, NULL, NULL),
(710, 5, 37, 95, 2, NULL, NULL),
(711, 5, 37, 54, 2, NULL, NULL),
(712, 5, 37, 56, 1, NULL, NULL),
(713, 5, 37, 55, 4, NULL, NULL),
(714, 5, 37, 72, 1, NULL, NULL),
(715, 5, 37, 99, 1, NULL, NULL),
(716, 5, 37, 100, 2, NULL, NULL),
(717, 5, 32, 10, 1, NULL, NULL),
(718, 5, 32, 95, 2, NULL, NULL),
(719, 5, 32, 54, 2, NULL, NULL),
(720, 5, 32, 55, 3, NULL, NULL),
(721, 5, 32, 88, 1, NULL, NULL),
(722, 5, 32, 100, 2, NULL, NULL),
(723, 5, 38, 10, 1, NULL, NULL),
(724, 5, 38, 95, 2, NULL, NULL),
(725, 5, 38, 54, 2, NULL, NULL),
(726, 5, 38, 56, 1, NULL, NULL),
(727, 5, 38, 55, 4, NULL, NULL),
(728, 5, 38, 72, 1, NULL, NULL),
(729, 5, 38, 99, 1, NULL, NULL),
(730, 5, 38, 100, 2, NULL, NULL),
(731, 5, 36, 10, 1, NULL, NULL),
(732, 5, 36, 95, 2, NULL, NULL),
(733, 5, 36, 54, 2, NULL, NULL),
(734, 5, 36, 56, 1, NULL, NULL),
(735, 5, 36, 55, 4, NULL, NULL),
(736, 5, 36, 72, 1, NULL, NULL),
(737, 5, 36, 99, 1, NULL, NULL),
(738, 5, 36, 100, 2, NULL, NULL),
(739, 5, 30, 10, 1, NULL, NULL),
(740, 5, 30, 95, 2, NULL, NULL),
(741, 5, 30, 54, 2, NULL, NULL),
(742, 5, 30, 55, 3, NULL, NULL),
(743, 5, 30, 88, 1, NULL, NULL),
(744, 5, 30, 100, 2, NULL, NULL),
(745, 5, 31, 10, 1, NULL, NULL),
(746, 5, 31, 95, 2, NULL, NULL),
(747, 5, 31, 54, 2, NULL, NULL),
(748, 5, 31, 55, 3, NULL, NULL),
(749, 5, 31, 88, 1, NULL, NULL),
(750, 5, 31, 100, 2, NULL, NULL),
(751, 5, 40, 10, 1, NULL, NULL),
(752, 5, 40, 95, 2, NULL, NULL),
(753, 5, 40, 54, 2, NULL, NULL),
(754, 5, 40, 56, 1, NULL, NULL),
(755, 5, 40, 55, 4, NULL, NULL),
(756, 5, 40, 72, 1, NULL, NULL),
(757, 5, 40, 99, 1, NULL, NULL),
(758, 5, 40, 100, 2, NULL, NULL),
(759, 5, 39, 10, 1, NULL, NULL),
(760, 5, 39, 95, 2, NULL, NULL),
(761, 5, 39, 54, 2, NULL, NULL),
(762, 5, 39, 56, 1, NULL, NULL),
(763, 5, 39, 55, 4, NULL, NULL),
(764, 5, 39, 72, 1, NULL, NULL),
(765, 5, 39, 99, 1, NULL, NULL),
(766, 5, 39, 100, 2, NULL, NULL),
(767, 5, 35, 10, 1, NULL, NULL),
(768, 5, 35, 95, 2, NULL, NULL),
(769, 5, 35, 54, 2, NULL, NULL),
(770, 5, 35, 56, 1, NULL, NULL),
(771, 5, 35, 55, 4, NULL, NULL),
(772, 5, 35, 72, 1, NULL, NULL),
(773, 5, 35, 99, 1, NULL, NULL),
(774, 5, 35, 100, 2, NULL, NULL),
(775, 5, 34, 10, 1, NULL, NULL),
(776, 5, 34, 95, 2, NULL, NULL),
(777, 5, 34, 54, 2, NULL, NULL),
(778, 5, 34, 55, 3, NULL, NULL),
(779, 5, 34, 88, 1, NULL, NULL),
(780, 5, 34, 100, 2, NULL, NULL),
(781, 5, 38, 10, 1, NULL, NULL),
(782, 5, 38, 95, 1, NULL, NULL),
(783, 5, 38, 49, 2, NULL, NULL),
(784, 5, 38, 54, 2, NULL, NULL),
(785, 5, 38, 55, 2, NULL, NULL),
(786, 5, 38, 73, 1, NULL, NULL),
(787, 5, 38, 90, 1, NULL, NULL),
(788, 5, 39, 10, 1, NULL, NULL),
(789, 5, 39, 95, 1, NULL, NULL),
(790, 5, 39, 49, 2, NULL, NULL),
(791, 5, 39, 54, 2, NULL, NULL),
(792, 5, 39, 55, 2, NULL, NULL),
(793, 5, 39, 73, 1, NULL, NULL),
(794, 5, 39, 90, 1, NULL, NULL),
(795, 5, 41, 95, 1, NULL, NULL),
(796, 5, 41, 54, 2, NULL, NULL),
(797, 5, 41, 55, 2, NULL, NULL),
(798, 5, 41, 72, 1, NULL, NULL),
(799, 5, 41, 100, 1, NULL, NULL),
(800, 5, 42, 10, 1, NULL, NULL),
(801, 5, 42, 95, 1, NULL, NULL),
(802, 5, 42, 49, 2, NULL, NULL),
(803, 5, 42, 54, 2, NULL, NULL),
(804, 5, 42, 55, 2, NULL, NULL),
(805, 5, 42, 73, 1, NULL, NULL),
(806, 5, 42, 90, 1, NULL, NULL),
(807, 5, 15, 10, 1, NULL, NULL),
(808, 5, 15, 95, 4, NULL, NULL),
(809, 5, 15, 54, 2, NULL, NULL),
(810, 5, 15, 55, 6, NULL, NULL),
(811, 5, 15, 74, 1, NULL, NULL),
(812, 5, 15, 99, 1, NULL, NULL),
(813, 5, 15, 100, 3, NULL, NULL),
(814, 5, 16, 10, 1, NULL, NULL),
(815, 5, 16, 95, 4, NULL, NULL),
(816, 5, 16, 54, 2, NULL, NULL),
(817, 5, 16, 55, 6, NULL, NULL),
(818, 5, 16, 74, 1, NULL, NULL),
(819, 5, 16, 99, 1, NULL, NULL),
(820, 5, 16, 100, 3, NULL, NULL),
(821, 5, 148, 10, 1, NULL, NULL),
(822, 5, 148, 95, 4, NULL, NULL),
(823, 5, 148, 54, 2, NULL, NULL),
(824, 5, 148, 55, 6, NULL, NULL),
(825, 5, 148, 74, 1, NULL, NULL),
(826, 5, 148, 99, 1, NULL, NULL),
(827, 5, 148, 100, 3, NULL, NULL),
(828, 5, 17, 10, 1, NULL, NULL),
(829, 5, 17, 95, 4, NULL, NULL),
(830, 5, 17, 54, 2, NULL, NULL),
(831, 5, 17, 55, 6, NULL, NULL),
(832, 5, 17, 74, 1, NULL, NULL),
(833, 5, 17, 99, 1, NULL, NULL),
(834, 5, 17, 100, 3, NULL, NULL),
(835, 5, 18, 10, 1, NULL, NULL),
(836, 5, 18, 95, 4, NULL, NULL),
(837, 5, 18, 54, 2, NULL, NULL),
(838, 5, 18, 55, 6, NULL, NULL),
(839, 5, 18, 74, 1, NULL, NULL),
(840, 5, 18, 99, 1, NULL, NULL),
(841, 5, 18, 100, 3, NULL, NULL),
(842, 5, 46, 11, 1, NULL, NULL),
(843, 5, 46, 95, 1, NULL, NULL),
(844, 5, 46, 43, 2, NULL, NULL),
(845, 5, 46, 54, 2, NULL, NULL),
(846, 5, 46, 56, 1, NULL, NULL),
(847, 5, 46, 55, 2, NULL, NULL),
(848, 5, 46, 72, 1, NULL, NULL),
(849, 5, 46, 99, 1, NULL, NULL),
(850, 5, 46, 100, 2, NULL, NULL),
(851, 5, 45, 11, 1, NULL, NULL),
(852, 5, 45, 95, 1, NULL, NULL),
(853, 5, 45, 43, 2, NULL, NULL),
(854, 5, 45, 54, 2, NULL, NULL),
(855, 5, 45, 56, 1, NULL, NULL),
(856, 5, 45, 55, 2, NULL, NULL),
(857, 5, 45, 72, 1, NULL, NULL),
(858, 5, 45, 99, 1, NULL, NULL),
(859, 5, 45, 100, 2, NULL, NULL),
(860, 5, 7, 3, 1, NULL, NULL),
(861, 5, 7, 5, 1, NULL, NULL),
(862, 5, 7, 10, 5, NULL, NULL),
(863, 5, 7, 24, 4, NULL, NULL),
(864, 5, 7, 25, 1, NULL, NULL),
(865, 5, 7, 23, 1, NULL, NULL),
(866, 5, 7, 95, 26, NULL, NULL),
(867, 5, 7, 54, 4, NULL, NULL),
(868, 5, 7, 56, 1, NULL, NULL),
(869, 5, 7, 85, 1, NULL, NULL),
(870, 5, 7, 96, 1, NULL, NULL),
(871, 5, 7, 99, 4, NULL, NULL),
(872, 5, 7, 100, 5, NULL, NULL),
(873, 5, 8, 106, 1, NULL, NULL),
(874, 5, 8, 10, 3, NULL, NULL),
(875, 5, 8, 24, 1, NULL, NULL),
(876, 5, 8, 95, 5, NULL, NULL),
(877, 5, 8, 54, 2, NULL, NULL),
(878, 5, 8, 55, 6, NULL, NULL),
(879, 5, 8, 74, 1, NULL, NULL),
(880, 5, 8, 99, 1, NULL, NULL),
(881, 5, 8, 100, 3, NULL, NULL),
(882, 5, 26, 5, 1, NULL, NULL),
(883, 5, 26, 24, 2, NULL, NULL),
(884, 5, 26, 95, 1, NULL, NULL),
(885, 5, 26, 54, 5, NULL, NULL),
(886, 5, 26, 56, 2, NULL, NULL),
(887, 5, 26, 75, 1, NULL, NULL),
(888, 5, 26, 85, 4, NULL, NULL),
(889, 5, 26, 96, 2, NULL, NULL),
(890, 5, 26, 100, 4, NULL, NULL),
(891, 5, 24, 5, 1, NULL, NULL),
(892, 5, 24, 24, 3, NULL, NULL),
(893, 5, 24, 95, 1, NULL, NULL),
(894, 5, 24, 54, 7, NULL, NULL),
(895, 5, 24, 56, 2, NULL, NULL),
(896, 5, 24, 75, 1, NULL, NULL),
(897, 5, 24, 85, 5, NULL, NULL),
(898, 5, 24, 96, 2, NULL, NULL),
(899, 5, 24, 100, 3, NULL, NULL),
(900, 5, 23, 5, 1, NULL, NULL),
(901, 5, 23, 24, 4, NULL, NULL),
(902, 5, 23, 25, 1, NULL, NULL),
(903, 5, 23, 95, 1, NULL, NULL),
(904, 5, 23, 54, 9, NULL, NULL),
(905, 5, 23, 56, 3, NULL, NULL),
(906, 5, 23, 75, 1, NULL, NULL),
(907, 5, 23, 85, 3, NULL, NULL),
(908, 5, 23, 100, 5, NULL, NULL),
(909, 5, 27, 24, 1, NULL, NULL),
(910, 5, 27, 54, 2, NULL, NULL),
(911, 5, 27, 75, 1, NULL, NULL),
(912, 5, 27, 85, 1, NULL, NULL),
(913, 5, 27, 96, 1, NULL, NULL),
(914, 5, 27, 100, 2, NULL, NULL),
(915, 5, 25, 5, 1, NULL, NULL),
(916, 5, 25, 24, 3, NULL, NULL),
(917, 5, 25, 25, 1, NULL, NULL),
(918, 5, 25, 95, 1, NULL, NULL),
(919, 5, 25, 54, 6, NULL, NULL),
(920, 5, 25, 56, 3, NULL, NULL),
(921, 5, 25, 75, 2, NULL, NULL),
(922, 5, 25, 85, 3, NULL, NULL),
(923, 5, 25, 96, 1, NULL, NULL),
(924, 5, 25, 100, 5, NULL, NULL),
(925, 5, 29, 24, 1, NULL, NULL),
(926, 5, 29, 54, 1, NULL, NULL),
(927, 5, 29, 75, 1, NULL, NULL),
(928, 5, 29, 85, 1, NULL, NULL),
(929, 5, 29, 96, 1, NULL, NULL),
(930, 5, 29, 100, 2, NULL, NULL),
(931, 5, 28, 24, 1, NULL, NULL),
(932, 5, 28, 54, 1, NULL, NULL),
(933, 5, 28, 75, 1, NULL, NULL),
(934, 5, 28, 85, 1, NULL, NULL),
(935, 5, 28, 96, 1, NULL, NULL),
(936, 5, 28, 100, 2, NULL, NULL),
(937, 5, 47, 10, 1, NULL, NULL),
(938, 5, 47, 25, 1, NULL, NULL),
(939, 5, 47, 95, 5, NULL, NULL),
(940, 5, 47, 54, 2, NULL, NULL),
(941, 5, 47, 56, 1, NULL, NULL),
(942, 5, 47, 55, 12, NULL, NULL),
(943, 5, 47, 85, 1, NULL, NULL),
(944, 5, 47, 107, 2, NULL, NULL),
(945, 5, 47, 99, 4, NULL, NULL),
(946, 5, 47, 100, 4, NULL, NULL),
(947, 5, 48, 10, 1, NULL, NULL),
(948, 5, 48, 25, 1, NULL, NULL),
(949, 5, 48, 95, 5, NULL, NULL),
(950, 5, 48, 54, 2, NULL, NULL),
(951, 5, 48, 56, 1, NULL, NULL),
(952, 5, 48, 55, 12, NULL, NULL),
(953, 5, 48, 85, 1, NULL, NULL),
(954, 5, 48, 107, 2, NULL, NULL),
(955, 5, 48, 99, 4, NULL, NULL),
(956, 5, 48, 100, 4, NULL, NULL),
(957, 5, 19, 10, 1, NULL, NULL),
(958, 5, 19, 95, 3, NULL, NULL),
(959, 5, 19, 54, 2, NULL, NULL),
(960, 5, 19, 56, 1, NULL, NULL),
(961, 5, 19, 55, 3, NULL, NULL),
(962, 5, 19, 85, 1, NULL, NULL),
(963, 5, 19, 99, 1, NULL, NULL),
(964, 5, 19, 100, 2, NULL, NULL),
(965, 5, 22, 10, 1, NULL, NULL),
(966, 5, 22, 95, 3, NULL, NULL),
(967, 5, 22, 54, 2, NULL, NULL),
(968, 5, 22, 56, 1, NULL, NULL),
(969, 5, 22, 55, 3, NULL, NULL),
(970, 5, 22, 85, 1, NULL, NULL),
(971, 5, 22, 99, 1, NULL, NULL),
(972, 5, 22, 100, 2, NULL, NULL),
(973, 5, 20, 10, 1, NULL, NULL),
(974, 5, 20, 95, 3, NULL, NULL),
(975, 5, 20, 54, 2, NULL, NULL),
(976, 5, 20, 56, 1, NULL, NULL),
(977, 5, 20, 55, 3, NULL, NULL),
(978, 5, 20, 85, 1, NULL, NULL),
(979, 5, 20, 99, 1, NULL, NULL),
(980, 5, 20, 100, 2, NULL, NULL),
(981, 5, 21, 10, 1, NULL, NULL),
(982, 5, 21, 95, 3, NULL, NULL),
(983, 5, 21, 54, 2, NULL, NULL),
(984, 5, 21, 56, 1, NULL, NULL),
(985, 5, 21, 55, 3, NULL, NULL),
(986, 5, 21, 85, 1, NULL, NULL),
(987, 5, 21, 99, 1, NULL, NULL),
(988, 5, 21, 100, 2, NULL, NULL),
(989, 2, 3, 5, 1, NULL, NULL),
(990, 2, 3, 24, 3, NULL, NULL),
(991, 2, 3, 54, 3, NULL, NULL),
(992, 2, 3, 56, 1, NULL, NULL),
(993, 2, 3, 99, 1, NULL, NULL),
(994, 2, 3, 100, 2, NULL, NULL),
(995, 0, 0, 0, 0, NULL, NULL),
(996, 6, 49, 2, 1, NULL, NULL),
(997, 6, 49, 5, 1, NULL, NULL),
(998, 6, 49, 108, 3, NULL, NULL),
(999, 6, 49, 109, 1, NULL, NULL),
(1000, 6, 49, 24, 3, NULL, NULL),
(1001, 6, 49, 25, 1, NULL, NULL),
(1002, 6, 49, 23, 1, NULL, NULL),
(1003, 6, 49, 50, 2, NULL, NULL),
(1004, 6, 49, 24, 5, NULL, NULL),
(1005, 6, 49, 51, 1, NULL, NULL),
(1006, 6, 49, 54, 4, NULL, NULL),
(1007, 6, 49, 56, 2, NULL, NULL),
(1008, 6, 49, 66, 6, NULL, NULL),
(1009, 6, 49, 76, 2, NULL, NULL),
(1010, 6, 49, 96, 1, NULL, NULL),
(1011, 6, 49, 99, 5, NULL, NULL),
(1012, 6, 49, 100, 8, NULL, NULL),
(1013, 6, 50, 3, 1, NULL, NULL),
(1014, 6, 50, 108, 4, NULL, NULL),
(1015, 6, 50, 24, 1, NULL, NULL),
(1016, 6, 50, 25, 1, NULL, NULL),
(1017, 6, 50, 26, 1, NULL, NULL),
(1018, 6, 50, 24, 8, NULL, NULL),
(1019, 6, 50, 54, 3, NULL, NULL),
(1020, 6, 50, 54, 1, NULL, NULL),
(1021, 6, 50, 56, 2, NULL, NULL),
(1022, 6, 50, 66, 8, NULL, NULL),
(1023, 6, 50, 99, 2, NULL, NULL),
(1024, 6, 50, 100, 3, NULL, NULL),
(1025, 6, 52, 108, 1, NULL, NULL),
(1026, 6, 52, 24, 1, NULL, NULL),
(1027, 6, 52, 52, 6, NULL, NULL),
(1028, 6, 52, 54, 1, NULL, NULL),
(1029, 6, 52, 54, 1, NULL, NULL),
(1030, 6, 52, 56, 1, NULL, NULL),
(1031, 6, 52, 66, 2, NULL, NULL),
(1032, 6, 52, 99, 1, NULL, NULL),
(1033, 6, 52, 100, 3, NULL, NULL),
(1034, 6, 58, 7, 1, NULL, NULL),
(1035, 6, 58, 53, 1, NULL, NULL),
(1036, 6, 58, 24, 1, NULL, NULL),
(1037, 6, 58, 77, 1, NULL, NULL),
(1038, 6, 58, 78, 3, NULL, NULL),
(1039, 6, 58, 74, 1, NULL, NULL),
(1040, 6, 58, 79, 1, NULL, NULL),
(1041, 6, 58, 84, 2, NULL, NULL),
(1042, 6, 58, 100, 2, NULL, NULL),
(1043, 6, 58, 99, 1, NULL, NULL),
(1044, 6, 53, 7, 1, NULL, NULL),
(1045, 6, 53, 53, 1, NULL, NULL),
(1046, 6, 53, 24, 1, NULL, NULL),
(1047, 6, 53, 77, 1, NULL, NULL),
(1048, 6, 53, 78, 3, NULL, NULL),
(1049, 6, 53, 74, 1, NULL, NULL),
(1050, 6, 53, 79, 1, NULL, NULL),
(1051, 6, 53, 84, 2, NULL, NULL),
(1052, 6, 53, 100, 2, NULL, NULL),
(1053, 6, 53, 99, 1, NULL, NULL),
(1054, 6, 55, 7, 1, NULL, NULL),
(1055, 6, 55, 53, 1, NULL, NULL),
(1056, 6, 55, 24, 1, NULL, NULL),
(1057, 6, 55, 77, 1, NULL, NULL),
(1058, 6, 55, 78, 3, NULL, NULL),
(1059, 6, 55, 74, 1, NULL, NULL),
(1060, 6, 55, 79, 1, NULL, NULL),
(1061, 6, 55, 84, 2, NULL, NULL),
(1062, 6, 55, 100, 2, NULL, NULL),
(1063, 6, 55, 99, 1, NULL, NULL),
(1064, 6, 57, 7, 1, NULL, NULL),
(1065, 6, 57, 53, 1, NULL, NULL),
(1066, 6, 57, 24, 1, NULL, NULL),
(1067, 6, 57, 77, 1, NULL, NULL),
(1068, 6, 57, 78, 3, NULL, NULL),
(1069, 6, 57, 74, 1, NULL, NULL),
(1070, 6, 57, 79, 1, NULL, NULL),
(1071, 6, 57, 84, 1, NULL, NULL),
(1072, 6, 57, 84, 1, NULL, NULL),
(1073, 6, 57, 100, 2, NULL, NULL),
(1074, 6, 57, 99, 1, NULL, NULL),
(1075, 6, 56, 7, 1, NULL, NULL),
(1076, 6, 56, 53, 1, NULL, NULL),
(1077, 6, 56, 24, 1, NULL, NULL),
(1078, 6, 56, 77, 1, NULL, NULL),
(1079, 6, 56, 78, 3, NULL, NULL),
(1080, 6, 56, 74, 1, NULL, NULL),
(1081, 6, 56, 79, 1, NULL, NULL),
(1082, 6, 56, 84, 1, NULL, NULL),
(1083, 6, 56, 84, 1, NULL, NULL),
(1084, 6, 56, 100, 2, NULL, NULL),
(1085, 6, 56, 99, 1, NULL, NULL),
(1086, 6, 54, 7, 1, NULL, NULL),
(1087, 6, 54, 53, 1, NULL, NULL),
(1088, 6, 54, 24, 1, NULL, NULL),
(1089, 6, 54, 77, 1, NULL, NULL),
(1090, 6, 54, 78, 3, NULL, NULL),
(1091, 6, 54, 74, 1, NULL, NULL),
(1092, 6, 54, 79, 1, NULL, NULL),
(1093, 6, 54, 84, 1, NULL, NULL),
(1094, 6, 54, 84, 1, NULL, NULL),
(1095, 6, 54, 100, 2, NULL, NULL),
(1096, 6, 54, 99, 1, NULL, NULL),
(1097, 6, 59, 7, 1, NULL, NULL),
(1098, 6, 59, 53, 1, NULL, NULL),
(1099, 6, 59, 24, 1, NULL, NULL),
(1100, 6, 59, 77, 1, NULL, NULL),
(1101, 6, 59, 78, 3, NULL, NULL),
(1102, 6, 59, 74, 1, NULL, NULL),
(1103, 6, 59, 79, 1, NULL, NULL),
(1104, 6, 59, 84, 1, NULL, NULL),
(1105, 6, 59, 84, 1, NULL, NULL),
(1106, 6, 59, 100, 2, NULL, NULL),
(1107, 6, 59, 99, 1, NULL, NULL),
(1108, 6, 60, 7, 1, NULL, NULL),
(1109, 6, 60, 77, 2, NULL, NULL),
(1110, 6, 60, 78, 1, NULL, NULL),
(1111, 6, 60, 74, 1, NULL, NULL),
(1112, 6, 60, 80, 1, NULL, NULL),
(1113, 6, 60, 81, 1, NULL, NULL),
(1114, 6, 60, 83, 1, NULL, NULL),
(1115, 6, 60, 63, 1, NULL, NULL),
(1116, 6, 60, 100, 2, NULL, NULL),
(1117, 6, 60, 99, 1, NULL, NULL),
(1118, 6, 61, 7, 1, NULL, NULL),
(1119, 6, 61, 77, 2, NULL, NULL),
(1120, 6, 61, 78, 1, NULL, NULL),
(1121, 6, 61, 74, 1, NULL, NULL),
(1122, 6, 61, 80, 1, NULL, NULL),
(1123, 6, 61, 81, 1, NULL, NULL),
(1124, 6, 61, 83, 1, NULL, NULL),
(1125, 6, 61, 63, 1, NULL, NULL),
(1126, 6, 61, 100, 2, NULL, NULL),
(1127, 6, 61, 99, 1, NULL, NULL),
(1128, 6, 62, 7, 1, NULL, NULL),
(1129, 6, 62, 77, 2, NULL, NULL),
(1130, 6, 62, 78, 1, NULL, NULL),
(1131, 6, 62, 74, 1, NULL, NULL),
(1132, 6, 62, 80, 1, NULL, NULL),
(1133, 6, 62, 81, 1, NULL, NULL),
(1134, 6, 62, 83, 1, NULL, NULL),
(1135, 6, 62, 63, 1, NULL, NULL),
(1136, 6, 62, 100, 2, NULL, NULL),
(1137, 6, 62, 99, 1, NULL, NULL),
(1138, 6, 63, 7, 1, NULL, NULL),
(1139, 6, 63, 77, 1, NULL, NULL),
(1140, 6, 63, 78, 1, NULL, NULL),
(1141, 6, 63, 74, 1, NULL, NULL),
(1142, 6, 63, 80, 1, NULL, NULL),
(1143, 6, 63, 81, 1, NULL, NULL),
(1144, 6, 63, 83, 1, NULL, NULL),
(1145, 6, 63, 63, 1, NULL, NULL),
(1146, 6, 63, 100, 2, NULL, NULL),
(1147, 6, 63, 99, 1, NULL, NULL),
(1148, 6, 64, 7, 1, NULL, NULL),
(1149, 6, 64, 77, 1, NULL, NULL),
(1150, 6, 64, 78, 1, NULL, NULL),
(1151, 6, 64, 74, 1, NULL, NULL),
(1152, 6, 64, 80, 1, NULL, NULL),
(1153, 6, 64, 81, 1, NULL, NULL),
(1154, 6, 64, 83, 1, NULL, NULL),
(1155, 6, 64, 63, 1, NULL, NULL),
(1156, 6, 64, 100, 2, NULL, NULL),
(1157, 6, 64, 99, 1, NULL, NULL),
(1158, 2, 2, 84, 7, '2019-09-05 03:42:59', '2019-09-05 03:56:59'),
(1159, 2, 2, 83, 3, '2019-09-05 03:43:00', '2019-09-05 03:43:00'),
(1160, 2, 2, 56, 4, '2019-09-05 10:07:47', '2019-09-05 10:07:47'),
(1161, 2, 2, 111, 4, '2019-09-05 10:13:42', '2019-09-05 10:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_17_063154_create_ministries_table', 1),
(4, '2019_04_17_063828_create_nirdeshanalayas_table', 1),
(5, '2019_04_19_011043_create_karyalayas_table', 1),
(6, '2019_04_19_030217_create_tahas_table', 1),
(7, '2019_04_19_042056_create_pads_table', 1),
(8, '2019_04_20_071925_create_shrenis_table', 1),
(9, '2019_04_20_090935_create_employees_table', 1),
(10, '2019_04_28_063812_create_employee_records_table', 1),
(11, '2019_05_07_012854_create_sewas_table', 1),
(12, '2019_05_07_053925_create_samuhas_table', 1),
(13, '2019_05_07_055548_create_upasamuhas_table', 1),
(14, '2019_06_06_062846_create_current_employee_records_table', 1),
(15, '2019_06_06_065012_create_employee_personal_details_table', 1),
(16, '2019_06_11_075356_create_employee_family_infos_table', 1),
(17, '2019_06_15_032314_create_address_infos_table', 1),
(18, '2019_06_15_064712_create_first_job_infos_table', 1),
(19, '2019_06_15_104027_create_employee_current_records_table', 1),
(20, '2019_06_18_064547_create_employee_all_records_table', 1),
(21, '2019_06_21_083408_create_education_infos_table', 1),
(22, '2019_06_22_090227_create_employee_trainings_table', 1),
(23, '2019_06_22_090826_create_employee_foreign_tours_table', 1),
(24, '2019_06_22_091120_create_employee_leave_infos_table', 1),
(25, '2019_06_22_091322_create_employee_motivation_infos_table', 1),
(26, '2019_06_22_091523_create_employee_penalty_infos_table', 1),
(27, '2019_06_25_092304_create_karyalaya_pads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `ministry_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'प्रदेश सभा सचिवालय', 1, NULL, NULL),
(2, 'मुख्यमन्त्री तथा मन्त्रिपरिषद्को कार्यालय', 1, NULL, NULL),
(3, 'आन्तरिक मामिला तथा कानून मन्त्रालय', 1, NULL, NULL),
(4, 'आर्थिक मामिला तथा योजना मन्त्रालय', 1, NULL, NULL),
(5, 'भौतिक पूर्वाधार विकास मन्त्रालय', 1, NULL, NULL),
(6, 'सामाजिक विकास मन्त्रालय', 1, NULL, NULL),
(7, 'उद्योग, पर्यटन, वन तथा वातावरण मन्त्रालय', 1, NULL, NULL),
(8, 'भूमि ब्यवस्था, कृषि तथा सहकारी मन्त्रालय', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nirdeshanalayas`
--

CREATE TABLE `nirdeshanalayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `nir_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nirdeshanalayas`
--

INSERT INTO `nirdeshanalayas` (`id`, `ministry_id`, `nir_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'यातायात पूर्वाधार निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(2, 6, 'शिक्षा विकास निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(3, 7, 'उद्योग, वाणिज्य तथा उपभोक्ता हीत संरक्षण निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(4, 7, 'वन निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(5, 8, 'कृषि विकास निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(6, 8, 'पशुपंक्षि तथा मत्स्य विकास निर्देशनालय, रुपन्देही', 1, NULL, NULL),
(7, 6, 'स्वास्थ्य निर्देशनालय, रुपन्देही', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pads`
--

CREATE TABLE `pads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pad_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pads`
--

INSERT INTO `pads` (`id`, `pad_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'प्रमुख सचिव', 0, NULL, NULL),
(2, 'सचिव', 0, NULL, NULL),
(3, 'सचिव(प्रा.)', 0, NULL, NULL),
(4, 'निर्देशक', 0, NULL, NULL),
(5, 'उप-सचिव', 0, NULL, NULL),
(6, 'वरिष्ठ जलाधार व्यवस्थापन अधिकृत', 0, NULL, NULL),
(7, 'ब/जनस्वास्थ्य प्रशासक', 0, NULL, NULL),
(8, 'वन संरक्षण/व्यवस्थापन अधिकृत', 0, NULL, NULL),
(9, 'प्रमुख नापी अधिकृत', 0, NULL, NULL),
(10, 'सि.डि.र्इ.', 0, NULL, NULL),
(11, 'सि.डि.र्इ.एगृ', 0, NULL, NULL),
(12, 'वरिष्ठ कृषि विकास अधिकृत', 0, NULL, NULL),
(13, 'वरिष्ठ कृषि प्रसार अधिकृत', 0, NULL, NULL),
(14, 'वरिष्ठ पशु चिकित्सक', 0, NULL, NULL),
(15, 'वरिष्ठ कृषि अर्थ विज्ञ', 0, NULL, NULL),
(16, 'वरिष्ठ बागवानी विकास अधिकृत', 0, NULL, NULL),
(17, 'वरिष्ठ बाली विकास अधिकृत', 0, NULL, NULL),
(18, 'वरिष्ठ बाली संरक्षण अधिकृत', 0, NULL, NULL),
(19, 'वरिष्ठ मत्स्य विकास अधिकृत', 0, NULL, NULL),
(20, 'प्रमुख', 0, NULL, NULL),
(21, 'व.पशु चिकित्सक/व.पशु विकास अधिकृत', 0, NULL, NULL),
(22, 'व.पशु चिकित्सक/व.पशु विकास अधिकृत/व.मत्स्य वि.अ.', 0, NULL, NULL),
(23, 'कानून अधिकृत', 0, NULL, NULL),
(24, 'शाखा अधिकृत', 0, NULL, NULL),
(25, 'लेखा अधिकृत', 0, NULL, NULL),
(26, 'तथ्यांक अधिकृत', 0, NULL, NULL),
(27, 'कम्प्युटर अधिकृत', 0, NULL, NULL),
(28, 'कम्प्युटर इन्जिनियर', 0, NULL, NULL),
(29, 'अर्थशास्त्री', 0, NULL, NULL),
(30, 'वातावरण निरीक्षक', 0, NULL, NULL),
(31, 'सहायक भू-संरक्षण अधिकृत', 0, NULL, NULL),
(32, 'सहायक वन अधिकृत', 0, NULL, NULL),
(33, 'खानी अधिकृत', 0, NULL, NULL),
(34, 'बाली विकास अधिकृत', 0, NULL, NULL),
(35, 'सहायक अनुसन्धान अधिकृत', 0, NULL, NULL),
(36, 'प्रशिक्षण अधिकृत', 0, NULL, NULL),
(37, 'कृषि अर्थ विज्ञ', 0, NULL, NULL),
(38, 'खाद्य अनुसन्धान अधिकृत', 0, NULL, NULL),
(39, 'कृषि प्रसार अधिकृत', 0, NULL, NULL),
(40, 'बागवानी विकास अधिकृत', 0, NULL, NULL),
(41, 'बाली संरक्षण अधिकृत', 0, NULL, NULL),
(42, 'कृषि इन्जिनियर', 0, NULL, NULL),
(43, 'इन्जिनियर एगृ', 0, NULL, NULL),
(44, 'पशु विकास अधिकृत', 0, NULL, NULL),
(45, 'पशु चिकित्सक', 0, NULL, NULL),
(46, 'माटो विज्ञ', 0, NULL, NULL),
(47, 'मत्स्य विकास अधिकृत', 0, NULL, NULL),
(48, 'पशु चिकित्सक/पशु विकास अधिकृत', 0, NULL, NULL),
(49, 'हाइड्रोजियोलोजिष्ट', 0, NULL, NULL),
(50, 'महिला विकास अधिकृत', 0, NULL, NULL),
(51, 'शाखा अधिकृत/संग्राहलय अधिकृत/पथ प्रदर्शक अधिकृत', 0, NULL, NULL),
(52, 'प्राविधिक अधिकृत (अंग्रेजी, नेपाली, गणित, सामाजिक, शारीरिक र विज्ञान हरेक उपसमूहको 1/1)', 0, NULL, NULL),
(53, 'जनस्वास्थ्य अधिकृत वा सो सरह', 0, NULL, NULL),
(54, 'सहायक/अधिकृत', 0, NULL, NULL),
(55, 'सब-इन्जिनियर', 0, NULL, NULL),
(56, 'कम्प्युटर अपरेटर', 0, NULL, NULL),
(57, 'माइनिङ सवइन्स्पेक्टर', 0, NULL, NULL),
(58, 'माइक सञ्चालक', 0, NULL, NULL),
(59, 'इलेक्ट्रेसियन', 0, NULL, NULL),
(60, 'टाइपिष्ट नायब सुब्बा', 0, NULL, NULL),
(61, 'प्रमुख शिक्षक', 0, NULL, NULL),
(62, 'माइक सञ्चालक', 0, NULL, NULL),
(63, 'तथ्यांक सहायक', 0, NULL, NULL),
(64, 'सिनियर मेकानिक्स', 0, NULL, NULL),
(65, 'सर्वेक्षक', 0, NULL, NULL),
(66, 'प्राविधिक सहायक', 0, NULL, NULL),
(67, 'पशु स्वास्थ्य प्राविधिक', 0, NULL, NULL),
(68, 'पशु सेवा प्राविधिक', 0, NULL, NULL),
(69, 'सव इन्जिनियर', 0, NULL, NULL),
(70, 'खा.पा.स.टे.', 0, NULL, NULL),
(71, 'महिला कार्यकर्ता', 0, NULL, NULL),
(72, 'सि.ए.ओ.', 0, NULL, NULL),
(73, 'असिस्टेन्ट ग्राउन्ड वाटर हा.जि.', 0, NULL, NULL),
(74, 'ल्याव टेक्निसियन', 0, NULL, NULL),
(75, 'मेकानिकल सुपरभार्इजर', 0, NULL, NULL),
(76, 'महिला विकास निरीक्षक', 0, NULL, NULL),
(77, 'हे.अ. वा सो सरह', 0, NULL, NULL),
(78, 'प.हे.न.', 0, NULL, NULL),
(79, 'कोड चेन', 0, NULL, NULL),
(80, 'कोड चेन असिष्टेन्ट', 0, NULL, NULL),
(81, 'लेखा सहायक', 0, NULL, NULL),
(82, 'तथ्यांक सहायक', 0, NULL, NULL),
(83, 'सहायक', 0, NULL, NULL),
(84, 'अधिकृत', 0, NULL, NULL),
(85, 'खरिदार', 0, NULL, NULL),
(86, 'सुवेदार', 0, NULL, NULL),
(87, 'जमदार', 0, NULL, NULL),
(88, 'असोसियट अर्गनाइजर', 0, NULL, NULL),
(89, 'शिक्षक', 0, NULL, NULL),
(90, 'सहायक कम्प्युटर अपरेटर', 0, NULL, NULL),
(91, 'नायव पशु स्वास्थ्य प्राविधिक', 0, NULL, NULL),
(92, 'अपरेटर', 0, NULL, NULL),
(93, 'फरेष्टर', 0, NULL, NULL),
(94, 'हवल्दार', 0, NULL, NULL),
(95, 'इन्जिनियर', 0, NULL, NULL),
(96, 'सह लेखापाल', 0, NULL, NULL),
(97, 'वनरक्षक', 0, NULL, NULL),
(98, 'सशस्त्र वन रक्षक', 0, NULL, NULL),
(99, 'ह.स.चा.', 0, NULL, NULL),
(100, 'का.स./स्वीपर/माली/चौकीदार', 0, NULL, NULL),
(101, 'भूसंरक्षण सहायक', 0, NULL, NULL),
(102, 'असिस्टेन्ट बोटनिष्ट', 0, NULL, NULL),
(103, 'रेन्जर', 0, NULL, NULL),
(104, 'नापी अधिकृत', 0, NULL, NULL),
(105, 'नायव पशु सेवा प्राविधिक', 0, NULL, NULL),
(106, 'नायव प्राविधिक सहायक', 0, NULL, NULL),
(107, 'सु.र्इ.', 0, NULL, NULL),
(108, 'ल्याव असिस्टेन्ट', 0, NULL, NULL),
(109, 'उप-सचिव(प्रा.)', 0, NULL, NULL),
(110, 'प्रमुख महिला विकास अधिकृत', 0, NULL, NULL),
(111, 'नायब सुब्बा', 0, '2019-09-05 10:12:09', '2019-09-05 10:12:09'),
(112, 'लेखापाल', 0, '2019-09-19 01:41:01', '2019-09-19 01:41:01'),
(113, 'बिद्यालय निरीक्षक', 0, '2019-09-19 05:36:53', '2019-09-19 05:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `palikas`
--

CREATE TABLE `palikas` (
  `district_id` int(11) NOT NULL,
  `palika_id` int(11) NOT NULL,
  `palika_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `palikas`
--

INSERT INTO `palikas` (`district_id`, `palika_id`, `palika_name`) VALUES
(1, 1, 'मुसिकोट नगरपालिका'),
(1, 2, 'रेसुङ्गा नगरपालिका'),
(1, 3, 'ईस्मा गाउँपालिका'),
(1, 4, 'कालीगण्डकी गाउँपालिका'),
(1, 5, 'गुल्मी दरबार गाउँपालिका'),
(1, 6, 'सत्यवती गाउँपालिका'),
(1, 7, 'चन्द्रकोट गाउँपालिका'),
(1, 8, 'रुरु गाउँपालिका'),
(1, 9, 'छत्रकोट गाउँपालिका'),
(1, 10, 'धुर्कोट गाउँपालिका'),
(1, 11, 'मदाने गाउँपालिका'),
(1, 12, 'मालिका गाउँपालिका'),
(2, 13, 'रामपुर नगरपालिका'),
(2, 14, 'तानसेन नगरपालिका'),
(2, 15, 'निस्दी गाउँपालिका'),
(2, 16, 'पूर्वखोला गाउँपालिका'),
(2, 17, 'रम्भा गाउँपालिका'),
(2, 18, 'माथागढी गाउँपालिका'),
(2, 19, 'तिनाउ गाउँपालिका'),
(2, 20, 'बगनासकाली गाउँपालिका'),
(2, 21, 'रिब्दिकोट गाउँपालिका'),
(2, 22, 'रैनादेवी छहरा गाउँपालिका'),
(3, 23, 'बुटवल उपमहानगरपालिका'),
(3, 24, 'देवदह नगरपालिका'),
(3, 25, 'लुम्बिनी सांस्कृतिक नगरपालिका'),
(3, 26, 'सैनामैना नगरपालिका'),
(3, 27, 'सिद्धार्थनगर नगरपालिका'),
(3, 28, 'तिलोत्तमा नगरपालिका'),
(3, 29, 'गैडहवा गाउँपालिका'),
(3, 30, 'कन्चन गाउँपालिका'),
(3, 31, 'कोटहीमाई गाउँपालिका'),
(3, 32, 'मर्चवारी गाउँपालिका'),
(3, 33, 'मायादेवी गाउँपालिका'),
(3, 34, 'ओमसतिया गाउँपालिका'),
(3, 35, 'रोहिणी गाउँपालिका'),
(3, 36, 'सम्मरीमाई गाउँपालिका'),
(3, 37, 'सियारी गाउँपालिका'),
(3, 38, 'शुद्धोधन गाउँपालिका'),
(4, 39, 'कपिलवस्तु नगरपालिका'),
(4, 40, 'बुद्धभूमी नगरपालिका'),
(4, 41, 'शिवराज नगरपालिका'),
(4, 42, 'महाराजगंज नगरपालिका'),
(4, 43, 'कृष्णनगर नगरपालिका'),
(4, 44, 'बाणगंगा नगरपालिका'),
(4, 45, 'मायादेवी गाउँपालिका'),
(4, 46, 'यसोधरा गाउँपालिका'),
(4, 47, 'सुद्धोधन गाउँपालिका'),
(4, 48, 'विजयनगर गाउँपालिका'),
(5, 49, 'सन्धिखर्क नगरपालिका'),
(5, 50, 'शितगंगा नगरपालिका'),
(5, 51, 'भूमिकास्थान नगरपालिका'),
(5, 52, 'छत्रदेव गाउँपालिका'),
(5, 53, 'पाणिनी गाउँपालिका'),
(5, 54, 'मालारानी गाउँपालिका'),
(6, 55, 'प्यूठान नगरपालिका'),
(6, 56, 'स्वर्गद्वारी नगरपालिका'),
(6, 57, 'गौमुखी गाउँपालिका'),
(6, 58, 'माण्डवी गाउँपालिका'),
(6, 59, 'सरुमारानी गाउँपालिका'),
(6, 60, 'मल्लरानी गाउँपालिका'),
(6, 61, 'नौवहिनी गाउँपालिका'),
(6, 62, 'झिमरुक गाउँपालिका'),
(6, 63, 'ऐरावती गाउँपालिका'),
(7, 64, 'रोल्पा नगरपालिका'),
(7, 65, 'त्रिवेणी गाउँपालिका'),
(7, 66, 'दुईखोली गाउँपालिका'),
(7, 67, 'माडी गाउँपालिका'),
(7, 68, 'रुन्टीगढी गाउँपालिका'),
(7, 69, 'लुङग्री गाउँपालिका'),
(7, 70, 'सुकिदह गाउँपालिका'),
(7, 71, 'सुनछहरी गाउँपालिका'),
(7, 72, 'सुवर्णावती गाउँपालिका'),
(7, 73, 'थवाङ गाउँपालिका'),
(8, 74, 'पुथा उत्तरगंगा गाउँपालिका'),
(8, 75, 'भूमे गाउँपालिका'),
(8, 76, 'सिस्ने गाउँपालिका'),
(9, 77, 'तुल्सीपुर उपमहानगरपालिका'),
(9, 78, 'घोराही उपमहानगरपालिका'),
(9, 79, 'लमही नगरपालिका'),
(9, 80, 'बंगलाचुली गाउँपालिका'),
(9, 81, 'दंगीशरण गाउँपालिका'),
(9, 82, 'गढवा गाउँपालिका'),
(9, 83, 'राजपुर गाउँपालिका'),
(9, 84, 'राप्ती गाउँपालिका'),
(9, 85, 'शान्तिनगर गाउँपालिका'),
(9, 86, 'बबई गाउँपालिका'),
(10, 87, 'नेपालगंज उपमहानगरपालिका'),
(10, 88, 'कोहलपुर नगरपालिका'),
(10, 89, 'नरैनापुर गाउँपालिका'),
(10, 90, 'राप्तीसोनारी गाउँपालिका'),
(10, 91, 'बैजनाथ गाउँपालिका'),
(10, 92, 'खजुरा गाउँपालिका'),
(10, 93, 'डुडुवा गाउँपालिका'),
(10, 94, 'जानकी गाउँपालिका'),
(11, 95, 'गुलरिया नगरपालिका'),
(11, 96, 'मधुवन नगरपालिका'),
(11, 97, 'राजापुर नगरपालिका'),
(11, 98, 'ठाकुरबाबा नगरपालिका'),
(11, 99, 'बाँसगढी नगरपालिका'),
(11, 100, 'बारबर्दिया नगरपालिका'),
(11, 101, 'बढैयाताल गाउँपालिका'),
(11, 102, 'गेरुवा गाउँपालिका'),
(12, 103, 'बर्दघाट नगरपालिका'),
(12, 104, 'रामग्राम नगरपालिका'),
(12, 105, 'सुनवल नगरपालिका'),
(12, 106, 'सुस्ता गाउँपालिका'),
(12, 107, 'पाल्हीनन्दन गाउँपालिका'),
(12, 108, 'प्रतापपुर गाउँपालिका'),
(12, 109, 'सरावल गाउँपालिका'),
(13, 110, 'बडीमालिका नगरपालिका'),
(13, 111, 'त्रिवेणी नगरपालिका'),
(13, 112, 'बुढीगंगा नगरपालिका'),
(13, 113, 'बुढीनन्दा नगरपालिका'),
(13, 114, 'गौमुल गाउँपालिका'),
(13, 115, 'पाण्डव गुफा गाउँपालिका'),
(13, 116, 'स्वामीकार्तिक गाउँपालिका'),
(13, 117, 'छेडेदह गाउँपालिका'),
(13, 118, 'हिमाली गाउँपालिका'),
(14, 119, 'जयपृथ्वी नगरपालिका'),
(14, 120, 'बुंगल नगरपालिका'),
(14, 121, 'तलकोट गाउँपालिका'),
(14, 122, 'मष्टा गाउँपालिका'),
(14, 123, 'खप्तडछान्ना गाउँपालिका'),
(14, 124, 'थलारा गाउँपालिका'),
(14, 125, 'वित्थडचिर गाउँपालिका'),
(14, 126, 'सूर्मा गाउँपालिका'),
(14, 127, 'छबिसपाथिभेरा गाउँपालिका'),
(14, 128, 'दुर्गाथली गाउँपालिका'),
(14, 129, 'केदारस्युँ गाउँपालिका'),
(14, 130, 'काँडा गाउँपालिका'),
(15, 131, 'मंगलसेन नगरपालिका'),
(15, 132, 'कमलबजार नगरपालिका'),
(15, 133, 'साँफेबगर नगरपालिका'),
(15, 134, 'पन्चदेवल विनायक नगरपालिका'),
(15, 135, 'चौरपाटी गाउँपालिका'),
(15, 136, 'मेल्लेख गाउँपालिका'),
(15, 137, 'बान्निगढी जयगढ गाउँपालिका'),
(15, 138, 'रामारोशन गाउँपालिका'),
(15, 139, 'ढकारी गाउँपालिका'),
(15, 140, 'तुर्माखाँद गाउँपालिका'),
(16, 141, 'दिपायल सिलगढी नगरपालिका'),
(16, 142, 'शिखर नगरपालिका'),
(16, 143, 'पूर्वीचौकी गाउँपालिका'),
(16, 144, 'बडीकेदार गाउँपालिका'),
(16, 145, 'जोरायल गाउँपालिका'),
(16, 146, 'सायल गाउँपालिका'),
(16, 147, 'आदर्श गाउँपालिका'),
(16, 148, 'के.आई.सिं. गाउँपालिका'),
(16, 149, 'बोगटान गाउँपालिका'),
(17, 150, 'धनगढी उपमहानगरपालिका'),
(17, 151, 'टिकापुर नगरपालिका'),
(17, 152, 'घोडाघोडी नगरपालिका'),
(17, 153, 'लम्कीचुहा नगरपालिका'),
(17, 154, 'भजनी नगरपालिका'),
(17, 155, 'गोदावरी नगरपालिका'),
(17, 156, 'गौरीगंगा नगरपालिका'),
(17, 157, 'जानकी गाउँपालिका'),
(17, 158, 'बर्दगोरिया गाउँपालिका'),
(17, 159, 'मोहन्याल गाउँपालिका'),
(17, 160, 'कैलारी गाउँपालिका'),
(17, 161, 'जोशीपुर गाउँपालिका'),
(17, 162, 'चुरे गाउँपालिका'),
(18, 163, 'भीमदत्त नगरपालिका'),
(18, 164, 'पुर्नवास नगरपालिका'),
(18, 165, 'वेदकोट नगरपालिका'),
(18, 166, 'महाकाली नगरपालिका'),
(18, 167, 'शुक्लाफाँटा नगरपालिका'),
(18, 168, 'बेलौरी नगरपालिका'),
(18, 169, 'कृष्णपुर नगरपालिका'),
(18, 170, 'बेलडाडी गाउँपालिका'),
(18, 171, 'लालझाडी गाउँपालिका'),
(19, 172, 'अमरगढी नगरपालिका'),
(19, 173, 'परशुराम नगरपालिका'),
(19, 174, 'आलिताल गाउँपालिका'),
(19, 175, 'भागेश्वर गाउँपालिका'),
(19, 176, 'नवदुर्गा गाउँपालिका'),
(19, 177, 'अजयमेरु गाउँपालिका'),
(19, 178, 'गन्यापधुरा गाउँपालिका'),
(20, 179, 'दशरथचन्द नगरपालिका'),
(20, 180, 'पाटन नगरपालिका'),
(20, 181, 'मेलौली नगरपालिका'),
(20, 182, 'पुर्चौडी नगरपालिका'),
(20, 183, 'सुर्नया गाउँपालिका'),
(20, 184, 'सिगास गाउँपालिका'),
(20, 185, 'शिवनाथ गाउँपालिका'),
(20, 186, 'पञ्चेश्वर गाउँपालिका'),
(20, 187, 'दोगडाकेदार गाउँपालिका'),
(20, 188, 'डीलासैनी गाउँपालिका'),
(21, 189, 'महाकाली नगरपालिका'),
(21, 190, 'शैल्यशिखर नगरपालिका'),
(21, 191, 'मालिकार्जुन गाउँपालिका'),
(21, 192, 'अपिहिमाल गाउँपालिका'),
(21, 193, 'दुहुँ गाउँपालिका'),
(21, 194, 'नौगाड गाउँपालिका'),
(21, 195, 'मार्मा गाउँपालिका'),
(21, 196, 'लेकम गाउँपालिका'),
(21, 197, 'ब्याँस गाउँपालिका'),
(22, 198, 'फुङलिङ नगरपालिका'),
(22, 199, 'आठराई त्रिवेणी गाउँपालिका'),
(22, 200, 'सिदिङ्वा गाउँपालिका'),
(22, 201, 'फक्ताङलुङ गाउँपालिका'),
(22, 202, 'मिक्वाखोला गाउँपालिका'),
(22, 203, 'मेरिङदेन गाउँपालिका'),
(22, 204, 'मैवाखोला गाउँपालिका'),
(22, 205, 'याङवरक गाउँपालिका'),
(22, 206, 'सिरीजङ्घा गाउँपालिका'),
(23, 207, 'फिदिम नगरपालिका'),
(23, 208, 'फालेलुंग गाउँपालिका'),
(23, 209, 'फाल्गुनन्द गाउँपालिका'),
(23, 210, 'हिलिहाङ गाउँपालिका'),
(23, 211, 'कुम्मायक गाउँपालिका'),
(23, 212, 'मिक्लाजुङ गाउँपालिका'),
(23, 213, 'तुम्बेवा गाउँपालिका'),
(23, 214, 'याङवरक गाउँपालिका'),
(24, 215, 'ईलाम नगरपालिका'),
(24, 216, 'देउमाई नगरपालिका'),
(24, 217, 'माई नगरपालिका'),
(24, 218, 'सूर्योदय नगरपालिका'),
(24, 219, 'फाकफोकथुम गाउँपालिका'),
(24, 220, 'चुलाचुली गाउँपालिका'),
(24, 221, 'माईजोगमाई गाउँपालिका'),
(24, 222, 'माङसेबुङ गाउँपालिका'),
(24, 223, 'रोङ गाउँपालिका'),
(24, 224, 'सन्दकपुर गाउँपालिका'),
(25, 225, 'मेचीनगर नगरपालिका'),
(25, 226, 'दमक नगरपालिका'),
(25, 227, 'कन्काई नगरपालिका'),
(25, 228, 'भद्रपुर नगरपालिका'),
(25, 229, 'अर्जुनधारा नगरपालिका'),
(25, 230, 'शिवशताक्षी नगरपालिका'),
(25, 231, 'गौरादह नगरपालिका'),
(25, 232, 'विर्तामोड नगरपालिका'),
(25, 233, 'कमल गाउँपालिका'),
(25, 234, 'गौरीगंज गाउँपालिका'),
(25, 235, 'बाह्रदशी गाउँपालिका'),
(25, 236, 'झापा गाउँपालिका'),
(25, 237, 'बुद्धशान्ति गाउँपालिका'),
(25, 238, 'हल्दिवारी गाउँपालिका'),
(25, 239, 'कचनकवल गाउँपालिका'),
(26, 240, 'विराटनगर महानगरपालिका'),
(26, 241, 'बेलवारी नगरपालिका'),
(26, 242, 'लेटाङ नगरपालिका'),
(26, 243, 'पथरी शनिश्चरे नगरपालिका'),
(26, 244, 'रंगेली नगरपालिका'),
(26, 245, 'रतुवामाई नगरपालिका'),
(26, 246, 'सुनवर्षि नगरपालिका'),
(26, 247, 'उर्लावारी नगरपालिका'),
(26, 248, 'सुन्दरहरैचा नगरपालिका'),
(26, 249, 'बुढीगंगा गाउँपालिका'),
(26, 250, 'धनपालथान गाउँपालिका'),
(26, 251, 'ग्रामथान गाउँपालिका'),
(26, 252, 'जहदा गाउँपालिका'),
(26, 253, 'कानेपोखरी गाउँपालिका'),
(26, 254, 'कटहरी गाउँपालिका'),
(26, 255, 'केरावारी गाउँपालिका'),
(26, 256, 'मिक्लाजुङ गाउँपालिका'),
(27, 257, 'ईटहरी उपमहानगरपालिका'),
(27, 258, 'धरान उपमहानगरपालिका'),
(27, 259, 'ईनरुवा नगरपालिका'),
(27, 260, 'दुहवी नगरपालिका'),
(27, 261, 'रामधुनी नगरपालिका'),
(27, 262, 'बराह नगरपालिका'),
(27, 263, 'देवानगञ्ज गाउँपालिका'),
(27, 264, 'कोशी गाउँपालिका'),
(27, 265, 'गढी गाउँपालिका'),
(27, 266, 'बर्जु गाउँपालिका'),
(27, 267, 'भोक्राहा गाउँपालिका'),
(27, 268, 'हरिनगरा गाउँपालिका'),
(28, 269, 'पाख्रिबास नगरपालिका'),
(28, 270, 'धनकुटा नगरपालिका'),
(28, 271, 'महालक्ष्मी नगरपालिका'),
(28, 272, 'साँगुरीगढी गाउँपालिका'),
(28, 273, 'खाल्सा छिन्ताङ सहिदभूमि गाउँपालिका'),
(28, 274, 'छथर जोरपाटी गाउँपालिका'),
(28, 275, 'चौविसे गाउँपालिका'),
(29, 276, 'म्याङलुङ नगरपालिका'),
(29, 277, 'लालीगुराँस नगरपालिका'),
(29, 278, 'आठराई गाउँपालिका'),
(29, 279, 'छथर गाउँपालिका'),
(29, 280, 'फेदाप गाउँपालिका'),
(29, 281, 'मेन्छयायेम गाउँपालिका'),
(30, 282, 'चैनपुर नगरपालिका'),
(30, 283, 'धर्मदेवी नगरपालिका'),
(30, 284, 'खाँदवारी नगरपालिका'),
(30, 285, 'मादी नगरपालिका'),
(30, 286, 'पाँचखपन नगरपालिका'),
(30, 287, 'भोटखोला गाउँपालिका'),
(30, 288, 'चिचिला गाउँपालिका'),
(30, 289, 'मकालु गाउँपालिका'),
(30, 290, 'सभापोखरी गाउँपालिका'),
(30, 291, 'सिलीचोङ गाउँपालिका'),
(31, 292, 'भोजपुर नगरपालिका'),
(31, 293, 'षडानन्द नगरपालिका'),
(31, 294, 'ट्याम्केमैयुम गाउँपालिका'),
(31, 295, 'रामप्रसाद राई गाउँपालिका'),
(31, 296, 'अरुण गाउँपालिका'),
(31, 297, 'पौवादुङमा गाउँपालिका'),
(31, 298, 'साल्पासिलिछो गाउँपालिका'),
(31, 299, 'आमचोक गाउँपालिका'),
(31, 300, 'हतुवागढी गाउँपालिका'),
(32, 301, 'सोलुदुधकुण्ड नगरपालिका'),
(32, 302, 'दुधकोसी गाउँपालिका'),
(32, 303, 'खुम्वु पासाङल्हमु गाउँपालिका'),
(32, 304, 'दुधकौशिका गाउँपालिका'),
(32, 305, 'नेचासल्यान गाउँपालिका'),
(32, 306, 'माहाकुलुङ गाउँपालिका'),
(32, 307, 'लिखु पिके गाउँपालिका'),
(32, 308, 'सोताङ गाउँपालिका'),
(33, 309, 'सिद्दिचरण नगरपालिका'),
(33, 310, 'खिजिदेम्बा गाउँपालिका'),
(33, 311, 'चम्पादेवी गाउँपालिका'),
(33, 312, 'चिशंखुगढी गाउँपालिका'),
(33, 313, 'मानेभञ्याङ गाउँपालिका'),
(33, 314, 'मोलुङ गाउँपालिका'),
(33, 315, 'लिखु गाउँपालिका'),
(33, 316, 'सुनकोशी गाउँपालिका'),
(34, 317, 'हलेसी तुवाचुङ नगरपालिका'),
(34, 318, 'रुपाकोट मझुवागढी नगरपालिका'),
(34, 319, 'ऐसेलुखर्क गाउँपालिका'),
(34, 320, 'लामीडाँडा गाउँपालिका'),
(34, 321, 'जन्तेढुंगा गाउँपालिका'),
(34, 322, 'खोटेहाङ गाउँपालिका'),
(34, 323, 'केपिलासगढी गाउँपालिका'),
(34, 324, 'दिप्रुङ गाउँपालिका'),
(34, 325, 'साकेला गाउँपालिका'),
(34, 326, 'वराहपोखरी गाउँपालिका'),
(35, 327, 'कटारी नगरपालिका'),
(35, 328, 'चौदण्डीगढी नगरपालिका'),
(35, 329, 'त्रियुगा नगरपालिका'),
(35, 330, 'वेलका नगरपालिका'),
(35, 331, 'उदयपुरगढी गाउँपालिका'),
(35, 332, 'ताप्ली गाउँपालिका'),
(35, 333, 'रौतामाई गाउँपालिका'),
(35, 334, 'सुनकोशी गाउँपालिका'),
(57, 335, 'गोरखा नगरपालिका'),
(57, 336, 'पालुङटार नगरपालिका'),
(57, 337, 'सुलीकोट गाउँपालिका'),
(57, 338, 'सिरानचोक गाउँपालिका'),
(57, 339, 'अजिरकोट गाउँपालिका'),
(57, 340, 'आरूघाट गाउँपालिका'),
(57, 341, 'गण्डकी गाउँपालिका'),
(57, 342, 'चुमनुव्री गाउँपालिका'),
(57, 343, 'धार्चे गाउँपालिका'),
(57, 344, 'भिमसेन गाउँपालिका'),
(57, 345, 'शहिद लखन गाउँपालिका'),
(58, 346, 'बेसीशहर नगरपालिका'),
(58, 347, 'मध्यनेपाल नगरपालिका'),
(58, 348, 'रार्इनास नगरपालिका'),
(58, 349, 'सुन्दरबजार नगरपालिका'),
(58, 350, 'क्व्होलासोथार गाउँपालिका'),
(58, 351, 'दूधपोखरी गाउँपालिका'),
(58, 352, 'दोर्दी गाउँपालिका'),
(58, 353, 'मर्स्याङदी गाउँपालिका'),
(59, 354, 'भानु नगरपालिका'),
(59, 355, 'भिमाद नगरपालिका'),
(59, 356, 'व्यास नगरपालिका'),
(59, 357, 'शुक्लागण्डकी नगरपालिका'),
(59, 358, 'आँबुखैरेनी गाउँपालिका'),
(59, 359, 'ऋषिङ्ग गाउँपालिका'),
(59, 360, 'घिरिङ गाउँपालिका'),
(59, 361, 'देवघाट गाउँपालिका'),
(59, 362, 'म्याग्दे गाउँपालिका'),
(59, 363, 'वन्दिपुर गाउँपालिका'),
(60, 364, 'गल्याङ नगरपालिका'),
(60, 365, 'चापाकोट नगरपालिका'),
(60, 366, 'पुतलीबजार नगरपालिका'),
(60, 367, 'भीरकोट नगरपालिका'),
(60, 368, 'वालिङ नगरपालिका'),
(60, 369, 'अर्जुनचौपारी गाउँपालिका'),
(60, 370, 'आँधिखोला गाउँपालिका'),
(60, 371, 'कालीगण्डकी गाउँपालिका'),
(60, 372, 'फेदीखोला गाउँपालिका'),
(60, 373, 'बिरुवा गाउँपालिका'),
(60, 374, 'हरिनास गाउँपालिका'),
(61, 375, 'पोखरा लेखनाथ महानगरपालिका'),
(61, 376, 'अन्नपूर्ण गाउँपालिका'),
(61, 377, 'माछापुच्छ्रे गाउँपालिका'),
(61, 378, 'मादी गाउँपालिका'),
(61, 379, 'रूपा गाउँपालिका'),
(62, 380, 'चामे गाउँपालिका'),
(62, 381, 'नार्पा भूमि गाउँपालिका'),
(62, 382, 'नाशोङ गाउँपालिका'),
(62, 383, 'नेस्याङ गाउँपालिका'),
(63, 384, 'घरपझोङ गाउँपालिका'),
(63, 385, 'थासाङ गाउँपालिका'),
(63, 386, 'दालोमे गाउँपालिका'),
(63, 387, 'लोमन्थाङ गाउँपालिका'),
(63, 388, 'वाह्रगाउँ मुक्तिक्षेत्र गाउँपालिका'),
(64, 389, 'बेनी नगरपालिका'),
(64, 390, 'अन्नपूर्ण गाउँपालिका'),
(64, 391, 'धवलागिरी गाउँपालिका'),
(64, 392, 'मंगला गाउँपालिका'),
(64, 393, 'मालिका गाउँपालिका'),
(64, 394, 'रघुगंगा गाउँपालिका'),
(65, 395, 'कुश्मा नगरपालिका'),
(65, 396, 'फलेवास नगरपालिका'),
(65, 397, 'जलजला गाउँपालिका'),
(65, 398, 'पैयूं गाउँपालिका'),
(65, 399, 'महाशिला गाउँपालिका'),
(65, 400, 'मोदी गाउँपालिका'),
(65, 401, 'विहादी गाउँपालिका'),
(66, 402, 'बागलुङ नगरपालिका'),
(66, 403, 'गल्कोट नगरपालिका'),
(66, 404, 'जैमूनी नगरपालिका'),
(66, 405, 'ढोरपाटन नगरपालिका'),
(66, 406, 'वरेङ गाउँपालिका'),
(66, 407, 'काठेखोला गाउँपालिका'),
(66, 408, 'तमानखोला गाउँपालिका'),
(66, 409, 'ताराखोला गाउँपालिका'),
(66, 410, 'निसीखोला गाउँपालिका'),
(66, 411, 'वडिगाड गाउँपालिका'),
(67, 412, 'कावासोती नगरपालिका'),
(67, 413, 'गैडाकोट नगरपालिका'),
(67, 414, 'देवचुली नगरपालिका'),
(67, 415, 'मध्यविन्दु नगरपालिका'),
(67, 416, 'बुङ्दीकाली गाउँपालिका'),
(67, 417, 'बुलिङटार गाउँपालिका'),
(67, 418, 'विनयी त्रिवेणी गाउँपालिका'),
(67, 419, 'हुप्सेकोट गाउँपालिका'),
(68, 420, 'मुसिकोट नगरपालिका'),
(68, 421, 'चौरजहारी नगरपालिका'),
(68, 422, 'आठबिसकोट नगरपालिका'),
(68, 423, 'बाँफिकोट गाउँपालिका'),
(68, 424, 'त्रिवेणी गाउँपालिका'),
(68, 425, 'सानी भेरी गाउँपालिका'),
(69, 426, 'शारदा नगरपालिका'),
(69, 427, 'बागचौर नगरपालिका'),
(69, 428, 'बनगाड कुपिण्डे नगरपालिका'),
(69, 429, 'कालिमाटी गाउँपालिका'),
(69, 430, 'त्रिवेणी गाउँपालिका'),
(69, 431, 'कपुरकोट गाउँपालिका'),
(69, 432, 'छत्रेश्वरी गाउँपालिका'),
(69, 433, 'ढोरचौर गाउँपालिका'),
(69, 434, 'कुमाखमालिका गाउँपालिका'),
(69, 435, 'दार्मा गाउँपालिका'),
(70, 436, 'बीरेन्द्रनगर नगरपालिका'),
(70, 437, 'भेरीगंगा नगरपालिका'),
(70, 438, 'गुर्भाकोट नगरपालिका'),
(70, 439, 'पञ्चपुरी नगरपालिका'),
(70, 440, 'लेकवेशी नगरपालिका'),
(70, 441, 'चौकुने गाउँपालिका'),
(70, 442, 'बराहताल गाउँपालिका'),
(70, 443, 'चिङ्गाड गाउँपालिका'),
(70, 444, 'सिम्ता गाउँपालिका'),
(71, 445, 'नारायण नगरपालिका'),
(71, 446, 'दुल्लु नगरपालिका'),
(71, 447, 'चामुण्डा विन्द्रासैनी नगरपालिका'),
(71, 448, 'आठबीस नगरपालिका'),
(71, 449, 'भगवतीमाई गाउँपालिका'),
(71, 450, 'गुराँस गाउँपालिका'),
(71, 451, 'डुंगेश्वर गाउँपालिका'),
(71, 452, 'नौमुले गाउँपालिका'),
(71, 453, 'महावु गाउँपालिका'),
(71, 454, 'भैरवी गाउँपालिका'),
(71, 455, 'ठाँटीकाँध गाउँपालिका'),
(72, 456, 'भेरी नगरपालिका'),
(72, 457, 'छेडागाड नगरपालिका'),
(72, 458, 'त्रिवेणी नलगाड नगरपालिका'),
(72, 459, 'बारेकोट गाउँपालिका'),
(72, 460, 'कुसे गाउँपालिका'),
(72, 461, 'जुनीचाँदे गाउँपालिका'),
(72, 462, 'शिवालय गाउँपालिका'),
(73, 463, 'ठुली भेरी नगरपालिका'),
(73, 464, 'त्रिपुरासुन्दरी नगरपालिका'),
(73, 465, 'डोल्पो बुद्ध गाउँपालिका'),
(73, 466, 'शे फोक्सुन्डो गाउँपालिका'),
(73, 467, 'जगदुल्ला गाउँपालिका'),
(73, 468, 'मुड्केचुला गाउँपालिका'),
(73, 469, 'काईके गाउँपालिका'),
(73, 470, 'छार्का ताङसोङ गाउँपालिका'),
(74, 488, 'चन्दननाथ नगरपालिका'),
(74, 489, 'कनकासुन्दरी गाउँपालिका'),
(74, 490, 'सिंजा गाउँपालिका'),
(74, 491, 'हिमा गाउँपालिका'),
(74, 492, 'तिला गाउँपालिका'),
(74, 493, 'गुठिचौर गाउँपालिका'),
(74, 494, 'तातोपानी गाउँपालिका'),
(74, 495, 'पातारासी गाउँपालिका'),
(75, 496, 'खाँडाचक्र नगरपालिका'),
(75, 497, 'रास्कोट नगरपालिका'),
(75, 498, 'तिलागुफा नगरपालिका'),
(75, 499, 'पचालझरना गाउँपालिका'),
(75, 500, 'सान्नी त्रिवेणी गाउँपालिका'),
(75, 501, 'नरहरिनाथ गाउँपालिका'),
(75, 502, 'कालिका गाउँपालिका'),
(75, 503, 'महावै गाउँपालिका'),
(75, 504, 'पलाता गाउँपालिका'),
(76, 505, 'छायाँनाथ रारा नगरपालिका'),
(76, 506, 'मुगुम कार्मारोंग गाउँपालिका'),
(76, 507, 'सोरु गाउँपालिका'),
(76, 508, 'खत्याड गाउँपालिका'),
(77, 509, 'सिमकोट गाउँपालिका'),
(77, 510, 'नाम्खा गाउँपालिका'),
(77, 511, 'खार्पुनाथ गाउँपालिका'),
(77, 512, 'सर्केगाड गाउँपालिका'),
(77, 513, 'चंखेली गाउँपालिका'),
(77, 514, 'अदानचुली गाउँपालिका'),
(77, 515, 'ताँजाकोट गाउँपालिका'),
(44, 516, 'कमलामाई नगरपालिका'),
(44, 517, 'दुधौली नगरपालिका'),
(44, 518, 'गोलन्जर गाउँपालिका'),
(44, 519, 'घ्याङलेख गाउँपालिका'),
(44, 520, 'तीनपाटन गाउँपालिका'),
(44, 521, 'फिक्कल गाउँपालिका'),
(44, 522, 'मरिण गाउँपालिका'),
(44, 523, 'सुनकोशी गाउँपालिका'),
(44, 524, 'हरिहरपुरगढी गाउँपालिका'),
(45, 525, 'मन्थली नगरपालिका'),
(45, 526, 'रामेछाप नगरपालिका'),
(45, 527, 'उमाकुण्ड गाउँपालिका'),
(45, 528, 'खाँडादेवी गाउँपालिका'),
(45, 529, 'गोकुलगङ्गा गाउँपालिका'),
(45, 530, 'दोरम्बा गाउँपालिका'),
(45, 531, 'लिखु गाउँपालिका'),
(45, 532, 'सुनापती गाउँपालिका'),
(46, 533, 'जिरी नगरपालिका'),
(46, 534, 'भिमेश्वर नगरपालिका'),
(46, 535, 'कालिन्चोक गाउँपालिका'),
(46, 536, 'गौरीशङ्कर गाउँपालिका'),
(46, 537, 'तामाकोशी गाउँपालिका'),
(46, 538, 'मेलुङ्ग गाउँपालिका'),
(46, 539, 'विगु गाउँपालिका'),
(46, 540, 'वैतेश्वर गाउँपालिका'),
(46, 541, 'शैलुङ्ग गाउँपालिका'),
(47, 542, 'चौतारा साँगाचोकगढी नगरपालिका'),
(47, 543, 'बाह्रविसे नगरपालिका'),
(47, 544, 'मेलम्ची नगरपालिका'),
(47, 545, 'ईन्द्रावती गाउँपालिका'),
(47, 546, 'जुगल गाउँपालिका'),
(47, 547, 'पाँचपोखरी थाङपाल गाउँपालिका'),
(47, 548, 'बलेफी गाउँपालिका'),
(47, 549, 'भोटेकोशी गाउँपालिका'),
(47, 550, 'लिसङ्खु पाखर गाउँपालिका'),
(47, 551, 'सुनकोशी गाउँपालिका'),
(47, 552, 'हेलम्बु गाउँपालिका'),
(47, 553, 'त्रिपुरासुन्दरी गाउँपालिका'),
(48, 554, 'धुलिखेल नगरपालिका'),
(48, 555, 'बनेपा नगरपालिका'),
(48, 556, 'पनौती नगरपालिका'),
(48, 557, 'पाँचखाल नगरपालिका'),
(48, 558, 'नमोबुद्ध नगरपालिका'),
(48, 559, 'मण्डनदेउपुर नगरपालिका'),
(48, 560, 'खानीखोला गाउँपालिका'),
(48, 561, 'चौंरीदेउराली गाउँपालिका'),
(48, 562, 'तेमाल गाउँपालिका'),
(48, 563, 'बेथानचोक गाउँपालिका'),
(48, 564, 'भुम्लु गाउँपालिका'),
(48, 565, 'महाभारत गाउँपालिका'),
(48, 566, 'रोशी गाउँपालिका'),
(49, 567, 'ललितपुर महानगरपालिका'),
(49, 568, 'गोदावरी नगरपालिका'),
(49, 569, 'महालक्ष्मी नगरपालिका'),
(49, 570, 'कोन्ज्योसोम गाउँपालिका'),
(49, 571, 'बागमती गाउँपालिका'),
(49, 572, 'महाङ्काल गाउँपालिका'),
(50, 573, 'चाँगुनारायण नगरपालिका'),
(50, 574, 'भक्तपुर नगरपालिका'),
(50, 575, 'मध्यपुर थिमी नगरपालिका'),
(50, 576, 'सूर्यविनायक नगरपालिका'),
(51, 577, 'काठमाण्डौं महानगरपालिका'),
(51, 578, 'कागेश्वरी मनोहरा नगरपालिका'),
(51, 579, 'कीर्तिपुर नगरपालिका'),
(50, 580, 'गोकर्णेश्वर नगरपालिका'),
(51, 581, 'चन्द्रागिरी नगरपालिका'),
(51, 582, 'टोखा नगरपालिका'),
(51, 583, 'तारकेश्वर नगरपालिका'),
(51, 584, 'दक्षिणकाली नगरपालिका'),
(51, 585, 'नागार्जुन नगरपालिका'),
(51, 586, 'बुढानिलकण्ठ नगरपालिका'),
(51, 587, 'शङ्खरापुर नगरपालिका'),
(52, 588, 'विदुर नगरपालिका'),
(52, 589, 'बेलकोटगढी नगरपालिका'),
(52, 590, 'ककनी गाउँपालिका'),
(52, 591, 'किस्पाङ गाउँपालिका'),
(52, 592, 'तादी गाउँपालिका'),
(52, 593, 'तारकेश्वर गाउँपालिका'),
(52, 594, 'दुप्चेश्वर गाउँपालिका'),
(52, 595, 'पञ्चकन्या गाउँपालिका'),
(52, 596, 'लिखु गाउँपालिका'),
(52, 597, 'मेघाङ गाउँपालिका'),
(52, 598, 'शिवपुरी गाउँपालिका'),
(52, 599, 'सुर्यगढी गाउँपालिका'),
(53, 600, 'उत्तरगया गाउँपालिका'),
(53, 601, 'कालिका गाउँपालिका'),
(53, 602, 'गोसाईकुण्ड गाउँपालिका'),
(53, 603, 'नौकुण्ड गाउँपालिका'),
(53, 604, 'पार्वतीकुण्ड गाउँपालिका'),
(54, 605, 'धुनीबेंशी नगरपालिका'),
(54, 606, 'निलकण्ठ नगरपालिका'),
(54, 607, 'खनियाबास गाउँपालिका'),
(54, 608, 'गजुरी गाउँपालिका'),
(54, 609, 'गल्छी गाउँपालिका'),
(54, 610, 'गङ्गाजमुना गाउँपालिका'),
(54, 611, 'ज्वालामूखी गाउँपालिका'),
(54, 612, 'थाक्रे गाउँपालिका'),
(54, 613, 'नेत्रावति गाउँपालिका'),
(54, 614, 'बेनीघाट रोराङ्ग गाउँपालिका'),
(54, 615, 'रुवी भ्याली गाउँपालिका'),
(54, 616, 'सिद्धलेक गाउँपालिका'),
(54, 617, 'त्रिपुरासुन्दरी गाउँपालिका'),
(55, 618, 'हेटौडा उपमहानगरपालिका'),
(55, 619, 'थाहा नगरपालिका'),
(55, 620, 'इन्द्रसरोबर गाउँपालिका'),
(55, 621, 'कैलाश गाउँपालिका'),
(55, 622, 'बकैया गाउँपालिका'),
(55, 623, 'बाग्मति गाउँपालिका'),
(55, 624, 'भिमफेदी गाउँपालिका'),
(55, 625, 'मकवानपुरगढी गाउँपालिका'),
(55, 626, 'मनहरी गाउँपालिका'),
(55, 627, 'राक्सिराङ्ग गाउँपालिका'),
(56, 628, 'भरतपुर महानगरपालिका'),
(56, 629, 'कालिका नगरपालिका'),
(56, 630, 'खैरहनी नगरपालिका'),
(56, 631, 'माडी नगरपालिका'),
(56, 632, 'रत्ननगर नगरपालिका'),
(56, 633, 'राप्ती नगरपालिका'),
(56, 634, 'इच्छाकामना गाउँपालिका'),
(36, 635, 'राजविराज नगरपालिका'),
(36, 636, 'कञ्चनरुप नगरपालिका'),
(36, 637, 'डाक्नेश्वरी नगरपालिका'),
(36, 638, 'बोदेबरसाईन नगरपालिका'),
(36, 639, 'खडक नगरपालिका'),
(36, 640, 'शम्भुनाथ नगरपालिका'),
(36, 641, 'सुरुङ्‍गा नगरपालिका'),
(36, 642, 'हनुमाननगर कङ्‌कालिनी नगरपालिका'),
(36, 643, 'सप्तकोशी नगरपालिका'),
(36, 644, 'अग्निसाइर कृष्णासवरन गाउँपालिका'),
(36, 645, 'छिन्नमस्ता गाउँपालिका'),
(36, 646, 'महादेवा गाउँपालिका'),
(36, 647, 'तिरहुत गाउँपालिका'),
(36, 648, 'तिलाठी कोईलाडी गाउँपालिका'),
(36, 649, 'रुपनी गाउँपालिका'),
(36, 650, 'बेल्ही चपेना गाउँपालिका'),
(36, 651, 'बिष्णुपुर गाउँपालिका'),
(36, 652, 'बलान-बिहुल गाउँपालिका'),
(37, 653, 'लहान नगरपालिका'),
(37, 654, 'धनगढीमाई नगरपालिका'),
(37, 655, 'सिरहा नगरपालिका'),
(37, 656, 'गोलबजार नगरपालिका'),
(37, 657, 'मिर्चैयाँ नगरपालिका'),
(37, 658, 'कल्याणपुर नगरपालिका'),
(37, 659, 'कर्जन्हा नगरपालिका'),
(37, 660, 'सुखीपुर नगरपालिका'),
(37, 661, 'भगवानपुर गाउँपालिका'),
(37, 662, 'औरही गाउँपालिका'),
(37, 663, 'विष्णुपुर गाउँपालिका'),
(37, 664, 'बरियारपट्टी गाउँपालिका'),
(37, 665, 'लक्ष्मीपुर पतारी गाउँपालिका'),
(37, 666, 'नरहा गाउँपालिका'),
(37, 667, 'सखुवानान्कारकट्टी गाउँपालिका'),
(37, 668, 'अर्नमा गाउँपालिका'),
(37, 669, 'नवराजपुर गाउँपालिका'),
(38, 670, 'जनकपुर उपमहानगरपालिका'),
(38, 671, 'क्षिरेश्वरनाथ नगरपालिका'),
(38, 672, 'गणेशमान चारनाथ नगरपालिका'),
(38, 673, 'धनुषाधाम नगरपालिका'),
(38, 674, 'नगराइन नगरपालिका'),
(38, 675, 'विदेह नगरपालिका'),
(38, 676, 'मिथिला नगरपालिका'),
(38, 677, 'शहीदनगर नगरपालिका'),
(38, 678, 'सबैला नगरपालिका'),
(38, 679, 'कमला नगरपालिका'),
(38, 680, 'मिथिला बिहारी नगरपालिका'),
(38, 681, 'हंसपुर नगरपालिका'),
(38, 682, 'जनकनन्दिनी गाउँपालिका'),
(38, 683, 'बटेश्वर गाउँपालिका'),
(38, 684, 'मुखियापट्टी मुसहरमिया गाउँपालिका'),
(38, 685, 'लक्ष्मीनिया गाउँपालिका'),
(38, 686, 'औरही गाउँपालिका'),
(38, 687, 'धनौजी गाउँपालिका'),
(39, 688, 'जलेश्वर नगरपालिका'),
(39, 689, 'बर्दिबास नगरपालिका'),
(39, 690, 'गौशाला नगरपालिका'),
(39, 691, 'लोहरपट्टी नगरपालिका'),
(39, 692, 'रामगोपालपुर नगरपालिका'),
(39, 693, 'मनरा शिसवा नगरपालिका'),
(39, 694, 'मटिहानी नगरपालिका'),
(39, 695, 'भँगाहा नगरपालिका'),
(39, 696, 'बलवा नगरपालिका'),
(39, 697, 'औरही नगरपालिका'),
(39, 698, 'एकडारा गाउँपालिका'),
(39, 699, 'सोनमा गाउँपालिका'),
(39, 700, 'साम्सी गाउँपालिका'),
(39, 701, 'महोत्तरी गाउँपालिका'),
(39, 702, 'पिपरा गाउँपालिका'),
(40, 703, 'ईश्वरपुर नगरपालिका'),
(40, 704, 'मलंगवा नगरपालिका'),
(40, 705, 'लालबन्दी नगरपालिका'),
(40, 706, 'हरिपुर नगरपालिका'),
(40, 707, 'हरिपुर्वा नगरपालिका'),
(40, 708, 'हरिवन नगरपालिका'),
(40, 709, 'बरहथवा नगरपालिका'),
(40, 710, 'बलरा नगरपालिका'),
(40, 711, 'गोडैटा नगरपालिका'),
(40, 712, 'बागमती नगरपालिका'),
(40, 713, 'कविलासी नगरपालिका'),
(40, 714, 'चक्रघट्टा गाउँपालिका'),
(40, 715, 'चन्द्रनगर गाउँपालिका'),
(40, 716, 'धनकौल गाउँपालिका'),
(40, 717, 'ब्रह्मपुरी गाउँपालिका'),
(40, 718, 'रामनगर गाउँपालिका'),
(40, 719, 'विष्णु गाउँपालिका'),
(40, 720, 'कौडेना गाउँपालिका;'),
(40, 721, 'पर्सा गाउँपालिका'),
(40, 722, 'बसबरीया गाउँपालिका'),
(41, 723, 'चन्द्रपुर नगरपालिका'),
(41, 724, 'गरुडा नगरपालिका'),
(41, 725, 'गौर नगरपालिका'),
(41, 726, 'बौधीमाई नगरपालिका'),
(41, 727, 'बृन्दावन नगरपालिका'),
(41, 728, 'देवाही गोनाही नगरपालिका'),
(41, 729, 'गढीमाई नगरपालिका'),
(41, 730, 'गुजरा नगरपालिका'),
(41, 731, 'कटहरिया नगरपालिका'),
(41, 732, 'माधव नारायण नगरपालिका'),
(41, 733, 'मौलापुर नगरपालिका'),
(41, 734, 'फतुवाबिजयपुर नगरपालिका'),
(41, 735, 'ईशनाथ नगरपालिका'),
(41, 736, 'परोहा नगरपालिका'),
(41, 737, 'राजपुर नगरपालिका'),
(41, 738, 'राजदेवी नगरपालिका'),
(41, 739, 'दुर्गा भगवती गाउँपालिका'),
(41, 740, 'यमुनामाई गाउँपालिका'),
(42, 741, 'कलैया उपमहानगरपालिका'),
(42, 742, 'जीतपुर सिमरा उपमहानगरपालिका'),
(42, 743, 'कोल्हवी नगरपालिका'),
(42, 744, 'निजगढ नगरपालिका'),
(42, 745, 'महागढीमाई नगरपालिका'),
(42, 746, 'सिम्रौनगढ नगरपालिका'),
(42, 747, 'पचरौता नगरपालिका'),
(42, 748, 'आदर्श कोटवाल गाउँपालिका'),
(42, 749, 'करैयामाई गाउँपालिका'),
(42, 750, 'देवताल गाउँपालिका'),
(42, 751, 'परवानीपुर गाउँपालिका'),
(42, 752, 'प्रसौनी गाउँपालिका'),
(42, 753, 'फेटा गाउँपालिका'),
(42, 754, 'बारागढीगाउँपालिका'),
(42, 755, 'सुवर्ण गाउँपालिका'),
(42, 756, 'विश्रामपुर गाउँपालिका'),
(43, 757, 'बिरगंज महानगरपालिका'),
(43, 758, 'पोखरिया नगरपालिका'),
(43, 759, 'बहुदरमाई नगरपालिका'),
(43, 760, 'पर्सागढी नगरपालिका'),
(43, 761, 'ठोरी गाउँपालिका'),
(43, 762, 'जगरनाथपुर गाउँपालिका'),
(43, 763, 'धोबीनी गाउँपालिका'),
(43, 764, 'छिपहरमाई गाउँपालिका'),
(43, 765, 'पकाहा मैनपुर गाउँपालिका'),
(43, 766, 'बिन्दबासिनी गाउँपालिका'),
(43, 767, 'सखुवा प्रसौनी गाउँपालिका'),
(43, 768, 'पटेर्वा सुगौली गाउँपालिका'),
(43, 769, 'कालिकामाई गाउँपालिका'),
(43, 770, 'जिरा भवानी गाउँपालिका');

-- --------------------------------------------------------

--
-- Table structure for table `pardeshes`
--

CREATE TABLE `pardeshes` (
  `pradesh_id` int(11) NOT NULL,
  `pradesh_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pardeshes`
--

INSERT INTO `pardeshes` (`pradesh_id`, `pradesh_name`) VALUES
(1, ' एक '),
(2, 'दुई'),
(3, 'तीन'),
(4, 'गण्डकी'),
(5, 'पाँच'),
(6, 'कर्णाली'),
(7, 'सुदुर \r\nपश्चिम');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `samuhas`
--

CREATE TABLE `samuhas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sewa_id` int(11) NOT NULL,
  `samuha_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `samuhas`
--

INSERT INTO `samuhas` (`id`, `sewa_id`, `samuha_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'सामान्य प्रशासन समूह', 1, NULL, NULL),
(2, 1, 'लेखा समूह', 1, NULL, NULL),
(3, 1, 'राजश्व समूह', 1, NULL, NULL),
(4, 2, 'जनरल फरेष्ट्री', 1, NULL, NULL),
(5, 2, 'फरेष्ट रिर्सच', 1, NULL, NULL),
(6, 2, 'स्वायल एण्ड वाटर कन्जरभेसन', 1, NULL, NULL),
(7, 2, 'वोटनी', 1, NULL, NULL),
(8, 2, 'हात्तीसार', 1, NULL, NULL),
(9, 2, 'नेशनल पार्कस एण्ड वाइल्ड लाइफ', 1, NULL, NULL),
(10, 3, 'सिभिल इन्जिनियरिङ', 1, NULL, NULL),
(11, 3, 'इलेक्टि्रकल इन्जिनियरिङ', 1, NULL, NULL),
(12, 3, 'इलेक्ट्रोनिक एण्ड टेलिकम्यूनिकेशन इन्जिनियरिङ', 1, NULL, NULL),
(13, 3, 'मेकानिक इन्जिनियरिङ', 1, NULL, NULL),
(14, 3, 'एरोनटिकल इन्जिनियरिङ', 1, NULL, NULL),
(15, 3, 'माइनिङ इन्जिनियरिङ', 1, NULL, NULL),
(16, 3, 'केमिकल इन्जिनियरिङ', 1, NULL, NULL),
(17, 3, 'मेटालर्जिकल इन्जिनियरिङ', 1, NULL, NULL),
(18, 3, 'मेट्रोलजी', 1, NULL, NULL),
(19, 3, 'मेटेरियोलजी', 1, NULL, NULL),
(20, 3, 'जियोलजी', 1, NULL, NULL),
(21, 3, 'सिभिल एभिएशन अपरेशन एण्ड इन्जिनियरिङ', 1, NULL, NULL),
(22, 3, 'र्सर्भे', 1, NULL, NULL),
(23, 3, 'केमिष्ट्री', 1, NULL, NULL),
(24, 3, 'एगृ इरिगेशन इन्जिनियरिङ', 1, NULL, NULL),
(25, 4, 'टिचिङ', 1, NULL, NULL),
(26, 4, 'जनरल एजुकेशन', 1, NULL, NULL),
(27, 4, 'प्रिण्टिङमुद्रण)', 1, NULL, NULL),
(28, 4, 'फिजिकल एजुकेशन', 1, NULL, NULL),
(29, 4, 'पेण्टिङ एण्ड फोटोग्राफी', 1, NULL, NULL),
(30, 4, 'आर्कियोलजी', 1, NULL, NULL),
(31, 4, 'गाइडेन्स एण्ड काउन्सेलिङ', 1, NULL, NULL),
(32, 4, 'टेष्ट एण्ड मेजरमेण्ट', 1, NULL, NULL),
(33, 4, 'लाइब्रेरी साइन्स', 1, NULL, NULL),
(34, 5, 'एगृ एक्स्टेन्सन', 1, NULL, NULL),
(35, 5, 'हर्टिकल्चर', 1, NULL, NULL),
(36, 5, 'फिसरिज', 1, NULL, NULL),
(37, 5, 'लाइभस्टक, पोल्ट्री एण्ड डेरी डेभलपमेण्ट', 1, NULL, NULL),
(38, 5, 'एग्रोनोमी', 1, NULL, NULL),
(39, 5, 'प्लाण्ट प्याथोलजी', 1, NULL, NULL),
(40, 5, 'एण्टोमोलजी', 1, NULL, NULL),
(41, 5, 'एगृ इकोनोमिकल, मार्केटिङ एण्ड स्टाटिष्टिक्स', 1, NULL, NULL),
(42, 5, 'स्वायल साइन्स', 1, NULL, NULL),
(43, 5, 'भेटरिनरी', 1, NULL, NULL),
(44, 5, 'एगृ इन्जिनियरिङ', 1, NULL, NULL),
(45, 5, 'फूड प्रोसेसिङ, एनालेसिस एण्ड न्यूट्रिशन', 1, NULL, NULL),
(46, 6, 'आर्थिक योजना समूह', 1, NULL, NULL),
(47, 6, 'तथ्याङ्क समूह', 1, NULL, NULL),
(48, 7, 'प्रशासन समूह', 1, NULL, NULL),
(49, 7, 'मर्यादा पालन समूह', 1, NULL, NULL),
(50, 8, 'न्याय समूह', 1, NULL, NULL),
(51, 8, 'कानून समूह', 1, NULL, NULL),
(52, 8, 'सरकारी वकील समूह', 1, NULL, NULL),
(53, 9, 'छैन', 1, '2019-08-04 11:07:05', '2019-08-04 11:07:05'),
(54, 4, 'शिक्षा प्रशासन', 1, '2019-09-19 05:39:29', '2019-09-19 05:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `sewas`
--

CREATE TABLE `sewas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sewa_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewas`
--

INSERT INTO `sewas` (`id`, `sewa_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'नेपाल प्रशासन सेवा', 1, NULL, NULL),
(2, 'नेपाल वन सेवा', 1, NULL, NULL),
(3, 'नेपाल इन्जिनियरिङ सेवा', 1, NULL, NULL),
(4, 'नेपाल शिक्षा सेवा', 1, NULL, NULL),
(5, 'नेपाल कृषि सेवा', 1, NULL, NULL),
(6, 'नेपाल आर्थिक योजना तथा तथ्याङ्क सेवा', 1, NULL, NULL),
(7, 'नेपाल संसद सेवा', 1, NULL, NULL),
(8, 'नेपाल न्याय सेवा', 1, NULL, NULL),
(9, 'विविध', 1, '2019-08-04 10:47:45', '2019-08-04 10:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `shrenis`
--

CREATE TABLE `shrenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shreni_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shrenis`
--

INSERT INTO `shrenis` (`id`, `shreni_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'विशिष्ट श्रेणी', 1, NULL, NULL),
(2, 'रा.प. प्रथम श्रेणी', 1, NULL, '2019-07-29 00:38:01'),
(3, 'रा.प. द्वितिय श्रेणी', 1, NULL, '2019-07-29 00:38:27'),
(4, 'रा.प. तृतिय श्रेणी', 1, NULL, '2019-07-29 00:38:48'),
(5, 'श्रेणी विहिन', 1, NULL, NULL),
(6, 'रा.प. अनं. प्रथम', 1, '2019-07-29 00:40:22', '2019-07-29 00:40:22'),
(7, 'रा.प.अनं. द्वितिय', 1, '2019-07-29 00:41:47', '2019-07-29 00:41:47'),
(8, 'रा.प.अनं. तृतिय', 1, '2019-07-29 00:42:27', '2019-07-29 00:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tahas`
--

CREATE TABLE `tahas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taha_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahas`
--

INSERT INTO `tahas` (`id`, `taha_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '12औं', 1, NULL, NULL),
(2, 'अधिकृतस्तर एघारौं', 1, NULL, NULL),
(3, 'अधिकृतस्तर दशौं', 1, NULL, NULL),
(4, 'अधिकृतस्तर नवौं', 1, NULL, NULL),
(5, 'अधिकृतस्तर आठौं', 1, NULL, NULL),
(6, 'अधिकृतस्तर सातौं', 1, NULL, NULL),
(7, 'अधिकृतस्तर छैटौं', 1, NULL, NULL),
(8, 'सहायकस्तर पाँचौं', 1, NULL, NULL),
(9, 'सहायकस्तर चौथो', 1, NULL, NULL),
(10, '९/१०औं', 1, NULL, NULL),
(11, '७/८औं', 1, NULL, NULL),
(12, '5/६औ', 1, NULL, NULL),
(13, '५औ', 1, NULL, NULL),
(14, '४/५औं', 1, NULL, NULL),
(15, 'तहविहीन', 1, NULL, NULL),
(16, 'तहविहीन', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upasamuhas`
--

CREATE TABLE `upasamuhas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sewa_id` int(11) NOT NULL,
  `samuha_id` int(11) NOT NULL,
  `upasamuha_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upasamuhas`
--

INSERT INTO `upasamuhas` (`id`, `sewa_id`, `samuha_id`, `upasamuha_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 10, 'जनरल', 1, NULL, NULL),
(2, 3, 10, 'हाइवे', 1, NULL, NULL),
(3, 3, 10, 'स्यानिटरी', 1, NULL, NULL),
(4, 3, 10, 'विल्डिङ एण्ड आर्किटेक्ट', 1, NULL, NULL),
(5, 3, 10, 'इरिगेशन', 1, NULL, NULL),
(6, 3, 10, 'हाइड्रो-पावर', 1, NULL, NULL),
(7, 3, 10, 'हाइड्रोलजी', 1, NULL, NULL),
(8, 3, 10, 'एअरपोर्ट', 1, NULL, NULL),
(9, 3, 11, 'जनरल इलेक्टि्रकल इन्जिनियरिङ', 1, NULL, NULL),
(10, 3, 11, 'एभिएशन इलेक्टि्रकल इन्जिनियरिङ', 1, NULL, NULL),
(11, 3, 13, 'जनरल मेकानिकल इन्जिनियरिङ', 1, NULL, NULL),
(12, 3, 13, 'एभिएशन मेकानिकल इन्जिनियरिङ', 1, NULL, NULL),
(13, 3, 13, 'निर्माण उपकरण सम्भार', 1, NULL, NULL),
(14, 3, 20, 'जनरल जियोलजी', 1, NULL, NULL),
(15, 3, 20, 'हाइड्रोजियोलजी', 1, NULL, NULL),
(16, 3, 20, 'इन्जिनियरिजियोलजी', 1, NULL, NULL),
(17, 3, 21, 'सिभिल एभिएशन अपरेशन', 1, NULL, NULL),
(18, 3, 21, 'फ्लाइट अपरेशन्श', 1, NULL, NULL),
(19, 3, 21, 'एभिएशन फायर र्सर्भिसेज', 1, NULL, NULL),
(20, 4, 26, 'एजुकेशन एडमिनिष्ट्रेशन', 1, NULL, NULL),
(21, 4, 26, 'साइन्स', 1, NULL, NULL),
(22, 4, 26, 'म्याथम्याटिक्स', 1, NULL, NULL),
(23, 4, 26, 'सोसियल स्टडिज', 1, NULL, NULL),
(24, 4, 26, 'एगृकल्चरकृषि शिक्षा)', 1, NULL, NULL),
(25, 4, 26, 'इण्डष्ट्रियल एजुकेशन', 1, NULL, NULL),
(26, 4, 26, 'इङलिस', 1, NULL, NULL),
(27, 4, 26, 'नेपाली', 1, NULL, NULL),
(28, 4, 26, 'होम साइन्सगृह विज्ञान)', 1, NULL, NULL),
(29, 4, 26, 'सेक्रेटेरियल साइन्स', 1, NULL, NULL),
(30, 4, 26, 'एडल्ट एजुकेशन', 1, NULL, NULL),
(31, 4, 26, 'संस्कृत', 1, NULL, NULL),
(32, 4, 27, 'प्रेस इन्जिनियरिङ', 1, NULL, NULL),
(33, 4, 27, 'प्रेस म्यानेजमेण्टमुद्रण व्यवस्थापन)', 1, NULL, NULL),
(34, 4, 29, 'पेण्टिङ', 1, NULL, NULL),
(35, 4, 29, 'फोटोग्राफी', 1, NULL, NULL),
(36, 4, 32, 'एजुकेशन टेष्ट एण्ड मेजरमेण्ट', 1, NULL, NULL),
(37, 4, 32, 'पर्र्सोनल टेष्ट एण्ड मेजरमेण्ट', 1, NULL, NULL),
(38, 6, 47, 'जनरल स्टाटिष्टिक्स', 1, NULL, NULL),
(39, 6, 47, 'बायो स्टाटिष्टिक्स', 1, NULL, NULL),
(40, 6, 47, 'एगृ-कल्चर स्टाटिष्टिक्स', 1, NULL, NULL),
(41, 6, 47, 'डेमोग्राफी', 1, NULL, NULL),
(42, 9, 53, 'छैन', 1, '2019-08-04 11:12:31', '2019-08-04 11:12:31'),
(43, 4, 54, 'निरिक्षण', 1, '2019-09-19 05:42:59', '2019-09-19 05:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shiva', 'bhattaraishiva17@gmail.com', '', NULL, '$2y$10$eCkAB/v.6jpAnCDrp2WJm.TRTuy5Dx1jf/gGopgh.2oXl9wKhF6G2', NULL, '2019-06-28 02:43:27', '2019-06-28 02:43:27'),
(2, 'admin', 'admin@gmail.com', '12345', NULL, '$2y$10$bCJ19wr5e8K58sW8BcbhO.NQ3yf0Mkl9PqG/co04m5x3S2BSbSpkm', NULL, '2019-07-21 19:47:43', '2019-07-21 19:47:43'),
(3, 'Mahendra', 'hiker.mahendra@gmail.com', '210290', NULL, '$2y$10$EFXmVyLbLEKSvl8PtVrffOHfMApJWlt6u2x85e/5.cgiTny6UYxsO', NULL, '2019-07-21 22:16:57', '2019-07-21 22:16:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_infos`
--
ALTER TABLE `address_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `education_infos`
--
ALTER TABLE `education_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_all_records`
--
ALTER TABLE `employee_all_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_current_records`
--
ALTER TABLE `employee_current_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_family_infos`
--
ALTER TABLE `employee_family_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_foreign_tours`
--
ALTER TABLE `employee_foreign_tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leave_infos`
--
ALTER TABLE `employee_leave_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_motivation_infos`
--
ALTER TABLE `employee_motivation_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_penalty_infos`
--
ALTER TABLE `employee_penalty_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_personal_details_employee_number_unique` (`employee_number`),
  ADD UNIQUE KEY `employee_personal_details_national_id_unique` (`national_id`);

--
-- Indexes for table `employee_records`
--
ALTER TABLE `employee_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_trainings`
--
ALTER TABLE `employee_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_job_infos`
--
ALTER TABLE `first_job_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyalayas`
--
ALTER TABLE `karyalayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyalaya_pads`
--
ALTER TABLE `karyalaya_pads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nirdeshanalayas`
--
ALTER TABLE `nirdeshanalayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pads`
--
ALTER TABLE `pads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palikas`
--
ALTER TABLE `palikas`
  ADD PRIMARY KEY (`palika_id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `samuhas`
--
ALTER TABLE `samuhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewas`
--
ALTER TABLE `sewas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shrenis`
--
ALTER TABLE `shrenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahas`
--
ALTER TABLE `tahas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upasamuhas`
--
ALTER TABLE `upasamuhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_infos`
--
ALTER TABLE `address_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `education_infos`
--
ALTER TABLE `education_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `employee_all_records`
--
ALTER TABLE `employee_all_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `employee_current_records`
--
ALTER TABLE `employee_current_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee_family_infos`
--
ALTER TABLE `employee_family_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `employee_foreign_tours`
--
ALTER TABLE `employee_foreign_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_leave_infos`
--
ALTER TABLE `employee_leave_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_motivation_infos`
--
ALTER TABLE `employee_motivation_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_penalty_infos`
--
ALTER TABLE `employee_penalty_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_personal_details`
--
ALTER TABLE `employee_personal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `employee_records`
--
ALTER TABLE `employee_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_trainings`
--
ALTER TABLE `employee_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `first_job_infos`
--
ALTER TABLE `first_job_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `karyalayas`
--
ALTER TABLE `karyalayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `karyalaya_pads`
--
ALTER TABLE `karyalaya_pads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1162;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nirdeshanalayas`
--
ALTER TABLE `nirdeshanalayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pads`
--
ALTER TABLE `pads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `palikas`
--
ALTER TABLE `palikas`
  MODIFY `palika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;

--
-- AUTO_INCREMENT for table `samuhas`
--
ALTER TABLE `samuhas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sewas`
--
ALTER TABLE `sewas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shrenis`
--
ALTER TABLE `shrenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tahas`
--
ALTER TABLE `tahas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `upasamuhas`
--
ALTER TABLE `upasamuhas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `palikas`
--
ALTER TABLE `palikas`
  ADD CONSTRAINT `palikas_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `districts` (`district_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
