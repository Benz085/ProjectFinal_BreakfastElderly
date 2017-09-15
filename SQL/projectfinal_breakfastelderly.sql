-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 05:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectfinal_breakfastelderly`
--

-- --------------------------------------------------------

--
-- Table structure for table `composition`
--

CREATE TABLE `composition` (
  `ID_Composition` int(3) NOT NULL,
  `composition_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `composition_ratio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `composition`
--

INSERT INTO `composition` (`ID_Composition`, `composition_Name`, `composition_ratio`, `ID_Menu`) VALUES
(1, 'ข้าวหอมมะลิ', '150 กรัม', 1),
(2, 'ข้าวหอมมะลิ', '150 กรัม', 2),
(3, 'เนื้อไก่', '1 ตัว', 2),
(4, 'ตับ', '100 กรัม', 3),
(5, 'หมู', '150 กรัม', 4),
(6, 'เลือดหมู', '150 กรัม', 4),
(7, 'หมูสับ', '50 กรัม', 5),
(8, 'เนื้อไก่', '20 กรัม', 6),
(9, 'ผัก', '5 กรัม', 7),
(10, 'ส้ม', '2 ลูก', 8),
(11, 'ไก่', '1 ตัว', 9);

-- --------------------------------------------------------

--
-- Table structure for table `decks`
--

CREATE TABLE `decks` (
  `ID` int(5) NOT NULL,
  `ID_Menu` int(11) NOT NULL,
  `ID_Deck` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `decks`
--

INSERT INTO `decks` (`ID`, `ID_Menu`, `ID_Deck`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-08-25 18:58:21', '2017-08-25 18:58:21'),
(2, 2, 1, '2017-08-25 18:58:21', '2017-08-25 18:58:21'),
(3, 1, 2, '2017-08-25 18:58:56', '2017-08-25 18:58:56'),
(4, 3, 2, '2017-08-25 18:58:56', '2017-08-25 18:58:56'),
(5, 6, 3, '2017-08-25 18:59:01', '2017-08-25 18:59:01'),
(6, 2, 3, '2017-08-25 18:59:01', '2017-08-25 18:59:01'),
(7, 1, 4, '2017-08-25 19:06:40', '2017-08-25 19:06:40'),
(8, 2, 4, '2017-08-25 19:06:40', '2017-08-25 19:06:40'),
(9, 6, 5, '2017-08-25 19:06:50', '2017-08-25 19:06:50'),
(10, 2, 5, '2017-08-25 19:06:50', '2017-08-25 19:06:50'),
(11, 5, 6, '2017-08-26 14:16:08', '2017-08-26 14:16:08'),
(12, 1, 6, '2017-08-26 14:16:08', '2017-08-26 14:16:08'),
(13, 8, 6, '2017-08-26 14:16:08', '2017-08-26 14:16:08'),
(14, 9, 7, '2017-08-26 14:16:57', '2017-08-26 14:16:57'),
(15, 4, 7, '2017-08-26 14:16:57', '2017-08-26 14:16:57'),
(16, 9, 8, '2017-08-27 14:37:19', '2017-08-27 14:37:19'),
(17, 8, 8, '2017-08-27 14:37:19', '2017-08-27 14:37:19'),
(18, 9, 9, '2017-08-27 14:37:38', '2017-08-27 14:37:38'),
(19, 5, 9, '2017-08-27 14:37:38', '2017-08-27 14:37:38'),
(20, 7, 9, '2017-08-27 14:37:38', '2017-08-27 14:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `groupfoods`
--

CREATE TABLE `groupfoods` (
  `id` int(10) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groupfoods`
--

INSERT INTO `groupfoods` (`id`, `food_name`, `created_at`, `updated_at`) VALUES
(1, 'ข้าว ขนมปัง', '2017-08-14 19:36:02', '2017-08-14 19:36:02'),
(2, 'อาหารจานเดียว', '2017-08-14 19:36:21', '2017-08-14 19:36:21'),
(3, 'แหล่งอาหารสูง', '2017-08-14 19:36:32', '2017-08-14 19:36:32'),
(4, 'ต้นจืด / แกงรสชาติไม่เผ็ด', '2017-08-14 19:36:41', '2017-08-14 19:36:41'),
(5, 'อาหารผัด', '2017-08-14 19:36:51', '2017-08-14 19:36:51'),
(6, 'อาหารทอด', '2017-08-14 19:37:03', '2017-08-14 19:37:03'),
(7, 'อาหารมังสวิรัส', '2017-08-14 19:37:15', '2017-08-14 19:37:15'),
(8, 'ผลไม้', '2017-08-14 19:37:26', '2017-08-14 19:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `ID_hashtag` int(3) NOT NULL,
  `Text_hashtag` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(5) NOT NULL,
  `ID_Menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`ID_hashtag`, `Text_hashtag`, `total`, `ID_Menu`) VALUES
(1, '# ข้าวผัด', 2, 2),
(2, '# ไก่ทอด', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID_Menu` int(3) NOT NULL,
  `Menu_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Menu_Image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Food_Group` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID_Menu`, `Menu_Name`, `Menu_Image`, `ID_Food_Group`) VALUES
(1, 'ข้าวสวย', 'V3oSQ.1_00.png', 1),
(2, 'ข้าวผัด', 'qP8TB.1_00.png', 2),
(3, 'ตับทอด', 'fZsFx.1_00.png', 3),
(4, 'ต้มจืดหมู', '2dggF.1_00.png', 4),
(5, 'กระเพราหมูสับ', 'WgQXz.1_00.png', 5),
(6, 'ไก่ทอด', 'PZU1W.1_00.png', 6),
(7, 'ผัดผัก', 'PZU1W.1_00.png', 7),
(8, 'สัม', '4jz1F.1_00.png', 8),
(9, 'ข้าวมันไก่', '0bbjA.1_00.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_11_171040_create_groupfoods_table', 2),
(5, '2017_08_25_223305_create_decks_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_rule`
--

CREATE TABLE `quiz_rule` (
  `ID_Deck` int(3) NOT NULL,
  `quiz_Celery` int(1) NOT NULL,
  `quiz_Gluten` int(1) NOT NULL,
  `quiz_Sea_animals` int(1) NOT NULL,
  `quiz_Egg` int(1) NOT NULL,
  `quiz_fish` int(1) NOT NULL,
  `quiz_Lupine` int(1) NOT NULL,
  `quiz_Mike` int(1) NOT NULL,
  `quiz_Shellfish_squid` int(1) NOT NULL,
  `quiz_Mustard` int(1) NOT NULL,
  `quiz_Nuts_with_hard_shell` int(1) NOT NULL,
  `quiz_Peanut` int(1) NOT NULL,
  `quiz_Sesame_seeds` int(1) NOT NULL,
  `quiz_Soybean` int(1) NOT NULL,
  `quiz_Sulfur_oxide` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz_rule`
--

INSERT INTO `quiz_rule` (`ID_Deck`, `quiz_Celery`, `quiz_Gluten`, `quiz_Sea_animals`, `quiz_Egg`, `quiz_fish`, `quiz_Lupine`, `quiz_Mike`, `quiz_Shellfish_squid`, `quiz_Mustard`, `quiz_Nuts_with_hard_shell`, `quiz_Peanut`, `quiz_Sesame_seeds`, `quiz_Soybean`, `quiz_Sulfur_oxide`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `text_twitter`
--

CREATE TABLE `text_twitter` (
  `ID` int(3) NOT NULL,
  `IdText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ID_hashtag` int(3) NOT NULL,
  `isActive` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `text_twitter`
--

INSERT INTO `text_twitter` (`ID`, `IdText`, `text`, `year`, `ID_hashtag`, `isActive`) VALUES
(1, '899639736892915713', 'งัดฝีมือโชว์ความแซ่บกับเมนู #ข้าวผัด รสเจ็บ จานเด็ดสีจัดจ้าน เครื่องแน่นสะใจ หอมอร่อยทุกคำ อร่อยเผ็ดซ่านไม่จำเจ', '2017', 1, 0),
(2, '902091160113393665', 'RT @CommunistKo: EP2แว้วววความร้ายความน่าร๊ากเพิ่มตามด้วยอ่ะ/ร๊ากกกก.#ข้าวผัด \r\n#พรอยมน #manasaproyy \r\n#ทีมรีรัน #แพ้คําว่ารัก ', '2017', 1, 0),
(3, '900595488851869696', 'RT @kapookdotcom: ใกล้เที่ยงแล้ว ชวนเพื่อน ๆ มาทำเมนู ปีก #ไก่ทอด พริกแกง กลิ่นพริกแกงหอม ๆ ทอดแป้งกรอบ ๆ กินอร่อยกินเพลิน #สูตรอาหาร\r\nhttps…', '2017', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'benz', 'admin@gmail.com', '$2y$10$DshKAeS0FT7eQ3BDMg1QVu2zp3UZ9vRpZOzIBDFPbUhSEY2RkPwEy', '0YoTWVGVpcJ5Uea2024FR5vDfTiwZPWXseAqlK2rnLixpEpTATG8hNnfkxb7', '2017-08-02 02:28:50', '2017-08-02 02:28:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`ID_Composition`),
  ADD KEY `ID_Menu` (`ID_Menu`);

--
-- Indexes for table `decks`
--
ALTER TABLE `decks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `groupfoods`
--
ALTER TABLE `groupfoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`ID_hashtag`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_Menu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quiz_rule`
--
ALTER TABLE `quiz_rule`
  ADD PRIMARY KEY (`ID_Deck`);

--
-- Indexes for table `text_twitter`
--
ALTER TABLE `text_twitter`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `composition`
--
ALTER TABLE `composition`
  MODIFY `ID_Composition` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `decks`
--
ALTER TABLE `decks`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `groupfoods`
--
ALTER TABLE `groupfoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `ID_hashtag` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_Menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `text_twitter`
--
ALTER TABLE `text_twitter`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
