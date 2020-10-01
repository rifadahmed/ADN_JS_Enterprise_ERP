-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 12:36 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osmo-erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `code`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Barguna', 'বরগুনা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(2, 1, 'Barisal', 'বরিশাল', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(3, 1, 'Bhola', 'ভোলা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(4, 1, 'Jhalokati', 'ঝালকাঠী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(5, 1, 'Patuakhali', 'পটুয়াখালী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(6, 1, 'Pirojpur', 'পিরোজপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(7, 2, 'Bandarban', 'বান্দরবান', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(8, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(9, 2, 'Chandpur', 'চাঁদপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(10, 2, 'Chittagong', 'চট্রগ্রাম', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(11, 2, 'Comilla', 'কুমিল্লা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(12, 2, 'Cox\'s bazar', 'কক্সবাজার', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(13, 2, 'Feni', 'ফেনী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(14, 2, 'Khagrachhari', 'খাগড়াছড়ি', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(15, 2, 'Lakshmipur', 'লক্ষ্মীপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(16, 2, 'Noakhali', 'নোয়াখালী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(17, 2, 'Rangamati', 'রাঙ্গামাটি', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(18, 3, 'Dhaka', 'ঢাকা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(19, 3, 'Faridpur', 'ফরিদপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(20, 3, 'Gazipur', 'গাজীপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(21, 3, 'Gopalganj', 'গোপালগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(22, 3, 'Jamalpur', 'জামালপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(23, 3, 'Kishoregonj', 'কিশোরগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(24, 3, 'Madaripur', 'মাদারীপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(25, 3, 'Manikganj', 'মানিকগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(26, 3, 'Munshiganj', 'মুন্সীগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(27, 3, 'Mymensingh', 'ময়মনসিংহ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(28, 3, 'Narayanganj', 'নারায়নগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(29, 3, 'Narsingdi', 'নরসিংদী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(30, 3, 'Netrakona', 'নেত্রকোণা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(31, 3, 'Rajbari', 'রাজবাড়ী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(32, 3, 'Shariatpur', 'শরিয়তপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(33, 3, 'Sherpur', 'শেরপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(34, 3, 'Tangail', 'টাঙ্গাইল', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(35, 4, 'Bagerhat', 'বাগেরহাট', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(36, 4, 'Chuadanga', 'চুয়াডাঙ্গা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(37, 4, 'Jessore', 'যশোর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(38, 4, 'Jhenaidah', 'ঝিনাইদহ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(39, 4, 'Khulna', 'খুলনা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(40, 4, 'Kushtia', 'কুষ্টিয়া', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(41, 4, 'Magura', 'মাগুরা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(42, 4, 'Meherpur', 'মেহেরপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(43, 4, 'Narail', 'নড়াইল', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(44, 4, 'Satkhira', 'সাতক্ষীরা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(45, 5, 'Bogra', 'বগুড়া', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(46, 5, 'Joypurhat', 'জয়পুরহাট', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(47, 5, 'Naogaon', 'নওগাঁ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(48, 5, 'Natore', 'নাটোর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(49, 5, 'Chapai nababganj', 'চাঁপাই নবাবগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(50, 5, 'Pabna', 'পাবনা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(51, 5, 'Rajshahi', 'রাজশাহী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(52, 5, 'Sirajganj', 'সিরাজগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(53, 6, 'Dinajpur', 'দিনাজপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(54, 6, 'Gaibandha', 'গাইবান্ধা', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(55, 6, 'Kurigram', 'কুড়িগ্রাম', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(56, 6, 'Lalmonirhat', 'লালমনিরহাট', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(57, 6, 'Nilphamari', 'নীলফামারী', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(58, 6, 'Panchagarh', 'পঞ্চগড়', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(59, 6, 'Rangpur', 'রংপুর', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(60, 6, 'Thakurgaon', 'ঠাকুরগাঁও', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(61, 7, 'Habiganj', 'হবিগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(62, 7, 'Maulvibazar', 'মৌলভীবাজার', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(63, 7, 'Sunamganj', 'সুনামগঞ্জ', '00', NULL, NULL, NULL, NULL, NULL, 'Active'),
(64, 7, 'Sylhet', 'সিলেট', '00', NULL, NULL, NULL, NULL, NULL, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
