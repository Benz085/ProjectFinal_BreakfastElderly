-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 10:37 PM
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
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_detail` text COLLATE utf8_unicode_ci,
  `article_image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_creator` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_detail`, `article_image`, `article_creator`) VALUES
(1, 'การดูแลผู้สูงอายุ', 'การดูแลผู้สูงอายุ มี 4 ขั้น', '0bbjA.1_00.png', 1),
(2, 'การดูแลผู้สูงอายุ 2', 'การดูแลผู้สูงอายุ มี 4 ขั้น', '0bbjA.1_00.png', 1),
(3, 'การดูแลผู้สูงอายุ 3', 'การดูแลผู้สูงอายุ มี 4 ขั้น', '0bbjA.1_00.png', 1),
(4, 'การดูแลผู้สูงอายุ 4', 'การดูแลผู้สูงอายุ มี 4 ขั้น', '0bbjA.1_00.png', 1);

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
(1, '1 ส่วน = 2 ผลเล็ก', 'น้ำหนักส่วนที่กินได้ 50 กรัม', 1),
(2, '1 ส่วน = 1 ผลเล็ก', 'น้ำหนักส่วนที่กินได้ 40 กรัม', 2),
(3, '1 ส่วน = 1/4 ผล', 'น้ำหนักส่วนที่กินได้ 80 กรัม', 3),
(4, '1 ส่วน = 2 ยวง', 'น้ำหนักส่วนที่กินได้ 60 กรัม', 4),
(5, '1 ส่วน =  6 ชิ้นคำ(6*3*1 ซม.)', 'น้ำหนักส่วนที่กินได้ 170 กรัม', 5),
(6, '1 ส่วน = 8 ชิ้นคำ(4.5*2*1 ซม.)', 'น้ำหนักส่วนที่กินได้ 180 กรัม', 5),
(7, '1 ส่วน = 4 ผล', 'น้ำหนักส่วนที่กินได้ 72 กรัม', 6),
(8, '1 ส่วน = 1 ผลใหญ่', 'น้ำหนักส่วนที่กินได้ 126 กรัม', 7),
(9, '1 ส่วน = 20 ผลกลาง', 'น้ำหนักส่วนที่กินได้ 60 กรัม', 8),
(10, '1 ส่วน = 8 ชิ้นคำ (8*6*1.5 ซม.)', 'น้ำหนักส่วนที่กินได้ 170 กรัม', 9),
(11, '1 ส่วน = 5 ชิ้นคำ (7*6*1.5 ซม.)', 'น้ำหนักส่วนที่กินได้ 1800 กรัม', 9),
(12, '1 ส่วน = 1/2 เม็ดขนาดกลาง', 'น้ำหนักส่วนที่กินได้ 40 กรัม', 10),
(13, '1 ส่วน = 1/2 ผล', 'น้ำหนักส่วนที่กินได้ 125 กรัม', 11),
(14, '1 ส่วน = 1/2 ผล', 'น้ำหนักส่วนที่กินได้ 120 กรัม', 12),
(15, '1 ส่วน =  4 ผล', 'น้ำหนักส่วนที่กินได้ 64 กรัม', 13),
(16, '1 ส่วน = 1 ลูก', 'น้ำหนักส่วนที่กินได้ 123 กรัม', 14),
(17, '1 ส่วน = 1 ลูก', 'น้ำหนักส่วนที่กินได้ 259 กรัม', 15),
(18, '1 ส่วน = 1 ผล', 'น้ำหนักส่วนที่กินได้ 150 กรัม', 16),
(19, '1 ส่วน = 1/4 ผลกลาง', 'น้ำหนักส่วนที่กินได้ 80 กรัม', 17),
(20, '1 ส่วน = 1/4 ผลกลาง', 'น้ำหนักส่วนที่กินได้ 70 กรัม', 18),
(21, '1 ส่วน = 1/4 ผลกลาง', 'น้ำหนักส่วนที่กินได้  65 กรัม', 19),
(22, '1 ส่วน = 1/4 ผลกลาง', 'น้ำหนักส่วนที่กินได้  70 กรัม', 20),
(23, '1 ส่วน  =  3 ผล', 'น้ำหนักส่วนที่กินได้ 90 กรัม', 21),
(24, 'ข้าวสุก 1 ทัพพี', 'ุ60 กรัม', 22),
(25, 'ข้าวกล่อง  1 ทัพพี', '60 กรัม', 23),
(26, 'ข้าวสุก', '1 1/2 ถ้วย', 24),
(27, 'หมูรวน', '1/2 ถ้วย', 24),
(28, 'น้ำชุป', '3 ถ้วย', 24),
(29, 'กระเทียมเจียว', '1 ช้อนโต๊ะ', 24),
(30, 'พริกไทยป่น', '1/8 ช้อนชา', 24),
(31, 'น้ำปลา', '1 ช้อนชา', 24),
(32, 'ต้มหอมผักซีหั่นให้หยาบๆ', 'อย่างละ 1 ต้น', 24),
(33, 'คื่นฉ่ายหั่นให้หยาบ', '1/4 ถ้วย', 24),
(34, 'มะกะโรนีลวก', '1 ถ้วยตวง', 25),
(35, 'กุ้งสดลวก', '5-6 ตัว', 25),
(36, 'ไข่ไก่', '1 ฟอง', 25),
(37, 'หอมหัวใหญ่', '1 1/2 ช้อนโต๊ะ', 25),
(38, 'แครอท หั่นเต๋า', '2 ช้อนโต๊ะ', 25),
(39, 'มะเขือเทศหั่นเต๋า ไม่เอาเมล็ด', '2 ช้อนโต๊ะ', 25),
(40, 'มะเขิอเทศเชอร์รี่', '4-5 ลูก', 25),
(41, 'ผักกาดหอม', 'สำหรับตกแต่ง', 25),
(42, 'กะหล่ำปลี', '1 ถ้วยตวง', 25),
(43, 'คื่นฉ่าย', '4 ช้อนโต๊ะ', 25),
(44, 'ซีอิ๊วขาว', '2 ช้อนโต๊ะ', 25),
(45, 'ซอสมะเขือเทศ', '3 ช้อนโต๊ะ', 25),
(46, 'เนยจืด', 'เล็กน้อย', 25),
(47, 'ข้าวกล้องหอมมะลิ', '1 ถ้วย', 26),
(48, 'ไก่สับละเอียด', '2 ช้อนโต๊ะพูน', 26),
(49, 'แครอท มะเขือเทศ หอมหัวใหญ่หั่นเป็นลูกเต๋าอย่างละ', '2 ช้อนชา', 26),
(50, 'ต้มหอมซอยละเอียด', '1 ช้อนชา', 26),
(51, 'ซอสเหยาะจิ้มตราแม็กกี้', '2 ช้อนชา', 26),
(52, 'ไข่ไก่', '1 ฟอง', 26),
(53, 'เนย', '1 ช้อนชา', 26),
(54, 'สาหร่าย', 'เล็กน้อย', 26),
(55, 'เนื้อปลากระพงแร่ตามยาว', '10 ชิ้น', 27),
(56, 'ปีกไก่', '5 ปีก', 27),
(57, 'แครอท หั่นเป็นท่อนพอดีคำ', '1/2  ถ้วย', 27),
(58, 'ซูกินี่ ไม่ต้องปอกเปลือกหั่นพอดีคำ', '1/2 ถ้วย', 27),
(59, 'ฟักทองหั่นพอดีคำ', '1/2 ถ้วย', 27),
(60, 'ก้านคื่นฉ่ายลวก', 'ตกแต่ง', 27),
(61, 'กระเทียม พริกไทย รากผักชี โขลกละเอียด', '1 ช้อนโต๊ะ', 27),
(62, 'ซอสปรุงรส', '2 ช้อนโต๊ะ', 27),
(63, 'ข้าวกล้องสุก หรือข้าวสวย', '2 ถ้วย', 28),
(64, 'สันในไก่หั่นสี่เหลียมลูกเต๋า', '1 ถ้วย', 28),
(65, 'หอมใหญ่หั่นสี่เหลี่ยมลูกเต๋า', '1 ถ้วย', 28),
(66, 'สันในไก่หั่นสี่เหลียมลูกเต๋า', '1 ถ้วย', 28),
(67, 'ต้มหอยหั่นฝอย', '2 ช้อนโต๊ะ', 28),
(68, 'ซอสมะเขือเทศ', '1 ถ้วย', 28),
(69, 'ซีอิ๊วขาว', '1 ช้อนโต๊ะ', 28),
(70, 'เกลือป่น', '1 ช้อนชา', 28),
(71, 'พริกไทยป่น', '1 ช้อนชา', 28),
(72, 'น้ำมันพืช', '5 ช้อนโต๊ะ', 28),
(73, 'ไข่ไก่', '4 ฟอง', 28),
(74, 'สาหร่ายชนิดทำข้าวห่อสาหร่าย', '4 แผ่น', 28),
(75, 'ข้าวสวย', '1 ช้อนโต๊ะ', 29),
(76, 'ปลากะพงหั่นชิ้นเล็ก', '1 ช้อนโต๊ะ', 29),
(77, 'มันฝรั่งสับ', '1 ช้อนโต๊ะ', 29),
(78, 'ผักโขมสับ', '1/2 ช้อนโต๊ะ', 29),
(79, 'น้ำซุป', '1 ถ้วย', 29),
(80, 'ซีอิ้วขาว', '1 ช้อนชา', 29),
(81, 'สับปะรด', '400 กรัม', 30),
(82, 'กระดูกหมูซี่โครงอ่อน', '200 กรัม', 30),
(83, 'แครอท', '1/4 ถ้วยตวง', 30),
(84, 'กุ้งแห้ง', '2 ช้อนโต๊ะ', 30),
(85, 'ตั้งฉ่าย', '1 ช้อนโต๊ะ', 30),
(86, 'ต้นหอม', '1/4 ถ้วยตวง', 30),
(87, 'เกลือ', '1 ช้อนชา', 30),
(88, 'ซีอิ้วขาว', '2 ช้อนโต๊ะ', 30),
(89, 'ปักคี้', '1 ตำลึง', 31),
(90, 'เก๋ากี้', '1 ตำลึง', 31),
(91, 'เง็กเต็ก', '1 ตำลึง', 31),
(92, 'ซัวเซียม', '1 ตำลึง', 31),
(93, 'ไก่ดำ ( ถ้าไม่มี ใช้ไก่บ้านแทนก็ได้)', '1 ตัว', 31),
(94, 'ซีอิ้ว', '1 ช้อนชา', 31),
(95, 'เต้าหู้หลอด', '2 หลอด', 32),
(96, 'เห็ดหอมแช่น้ำให้นิ่มหั่นชิ้นเล็ก', '4 ดอก', 32),
(97, 'ต้นหอมหั่นท่อนยาว', '2-3 ต้น', 32),
(98, 'หอมใหญ่หั่นเสี้ยว', '1 หัว', 32),
(99, 'เม็ดมะม่วงหิมพานต์ทอด', '1 ถ้วย', 32),
(100, 'กระเทียมสับละเอียด', '1 ช้อนโต๊ะ', 32),
(101, 'พริกไทยป่น', '1 ช้อนชา', 32),
(102, 'แป้งมัน', '1 ช้อนโต๊ะ', 32),
(103, 'น้ำตาลทราย', '1 ช้อนชา', 32),
(104, 'ซีอิ้วขาว', '1 ช้อนโต๊ะ', 32),
(105, 'น้ำมันหอย', '2 ช้อนโต๊ะ', 32),
(106, 'น้ำชุป', '3 ช้อนโต๊ะ', 32),
(107, 'น้ำมันพืช', 'สำหรับทอด', 32),
(108, 'ถั่วเหลือง', '1 กิโลกรัม', 33),
(109, 'น้ำตาลทราย', '6 ถ้วย', 33),
(110, 'น้ำ', '16 ถ้วย', 33),
(111, 'เต้าหู้ขาวชนิดอ่อน', '2 แผ่น', 34),
(112, 'ผักชีชอย', '2  ช้อนโต๊ะ', 34),
(113, 'พริกขี้หนูเขียว แดง , สับละเอียด', '3 ช้อนโต๊ะ', 34),
(114, 'กระเทียมสับละเอียด', '3 ช้อนโต๊ะ', 34),
(115, 'น้ำตาลทราย', '1 ช้อนโต๊ะ', 34),
(116, 'ซีอิ้วขาว', '3 ช้อนโต๊ะ', 34),
(117, 'น้ำมะนาว', '1/4 ถ้วย', 34),
(118, 'กะหล่ำปลีหัวเล็ก', '1 หัว', 35),
(119, 'เต้าหู้เหลืองชนิดแข็ง', '1 แผ่น', 35),
(120, 'เห็ดฟางสับหยาบ', '8 ดอก', 35),
(121, 'ไข่ไก่', '1/2 ฟอง', 35),
(122, 'เห็ดหอมแช่น้ำให้นิ่มหั่นชิ้นเล้ก', '2 ดอก', 35),
(123, 'พริกชี้ฟ้าแดงหั่นฝอย', '1 เม็ด', 35),
(124, 'แป้งมัน', '1 ช้อนโต๊ะ', 35),
(125, 'พริกไทยป่น', '1/4 ช้อนชา', 35),
(126, 'น้ำตาลทราย ซีอิ้วขาว', 'อย่างละ 1 ช้อนชา', 35),
(127, 'เกลือป่น', '1/4 ช้อนชา', 35),
(128, 'เต้าหู้ขาวชนิดแข็ง', '2 แผ่น', 36),
(129, 'รากผักชี กระเทียม พริกไทย โขลกรวมกัน', '1 ช้อนโต๊ะ', 36),
(130, 'ตะไคร้หั่นท่อนทุบ', '1 ต้น', 36),
(131, 'ดอกโป๊ยกั๊ก', '1/2 ดอก', 36),
(132, 'งาขาวคั่ว', '1 ช้อนโต๊ะ', 36),
(133, 'ถั่วดิสงคั่วป่น', '3 ช้อนโต๊ะ', 36),
(134, 'แป้งมัน', '1 ช้อนโต๊ะ', 36),
(135, 'น้ำตาลทราย', '1/2 ช้อนโต๊ะ', 36),
(136, 'ซีอิ้วขาว', '2 ช้อนโต๊ะ', 36),
(137, 'ชอสปรุงรส', '2 ช้อนโต๊ะ', 36),
(138, 'น้ำ', '1 1/2 ถ้วย', 36),
(139, 'น้ำมันพืช', '2 ช้อนโต๊ะ', 36),
(140, 'สีผสมอาหารสีแดง', 'เล็กน้อย', 36),
(141, 'ข้าวสารข้าวกล่อง', '1 1/2 ถ้วย', 37),
(142, 'เนื้อหมูหั่นชิ้นเล็ก', '150 ถ้วย', 37),
(143, 'กุ้งแห้งหั่นเล็กๆ หรือ ปั่น', '1/4 ถ้วย', 37),
(144, 'กะปิดี', '1 1/2 ช้อนโต๊ะ', 37),
(145, 'ไข่ไก่ตีให้เข้ากัน', '1 ฟอง', 37),
(146, 'แตงกวา', '6 ลูก', 37),
(147, 'มะดันซอย', '4 ลูก', 37),
(148, 'มะนาว', '3 ลูก', 37),
(149, 'ผักชีเด็ดเป็นใบ', '1 ต้น', 37),
(150, 'หอมแดงซอย', '4 หัว', 37),
(151, 'กระเทียมสับละเอียด', '1 ช้อนโต๊ะ', 37),
(152, 'น้ำตาลทราย', '1 ช้อนชา', 37),
(153, 'น้ำมันพืช', '1/4 ถ้วย', 37),
(154, 'ฟักทองปอกเปลือกหั่นชิ้นเล็ก', '1 1/2 ถ้วย', 38),
(155, 'หอมใหญ่สับละเอียด', '1 ช้อนโต๊ะ', 38),
(156, 'เกลือป่น', '1 ช้อนชา', 38),
(157, 'พริกไทยป่น', '1 ช้อนชา', 38),
(158, 'ใบกระวาน', '3 ใบ', 38),
(159, 'นมข้มจืด', '1/2 ถ้วย', 38),
(160, 'เนย', '1 ช้อนโต๊ะ', 38),
(161, 'น้ำซุปไก่', '2 1/2 ถ้วย', 38),
(162, 'ข้าวโพดฝานเอาแต่เมล็ดบางๆ', '1 ถ้วย', 39),
(163, 'หอมใหญ่สับละเอียด', '1 ช้อนโต๊ะ', 39),
(164, 'ใบกระวาน', '2 ใบ', 39),
(165, 'เนย', '1 ช้อนโต๊ะ', 39),
(166, 'นมข้มจืด', '1/2 ถ้วย', 39),
(167, 'เกลือป่น', '1 ช้อนชา', 39),
(168, 'พริกไทยป่น', '1 ช้อนชา', 39),
(169, 'น้ำชุปไก่', '2 1/2 ถ้วย', 39),
(170, 'ข้าวกล้องหุ่งสุก', '2 ถ้วย', 40),
(171, 'เนื้อหมูหั่นบาง', '1/4 ถ้วย', 40),
(172, 'ข้าวโพดต้มแกะเมล็ด', '1/2 ถ้วย', 40),
(173, 'มะเขือเทศหั่นสี่เหลี่ยมเล็ก', '1/4 ถ้วย', 40),
(174, 'หอมใหญ่หั่นสี่เหลี่ยมเล็ก', '1/4 ถ้วย', 40),
(175, 'ถั่วแขกตัดหัวตัดท้าย หั่นท่อนสั้น', '1/4 ถ้วย', 40),
(176, 'กระเทียมสับละเอียด', '1 ช้อนชา', 40),
(177, 'พริกไทยป่น', '1/4 ช้อนชา', 40),
(178, 'เกลือป่น', '1/4 ช้อนชา', 40),
(179, 'ซีอิ้วขาว', '2 ช้อนชา', 40),
(180, 'น้ำมันพืช', '2 ช้อนชา', 40);

-- --------------------------------------------------------

--
-- Table structure for table `cooking`
--

CREATE TABLE `cooking` (
  `cooking_id` int(3) NOT NULL,
  `cooking_recipe` text COLLATE utf8_unicode_ci NOT NULL,
  `ID_Menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cooking`
--

INSERT INTO `cooking` (`cooking_id`, `cooking_recipe`, `ID_Menu`) VALUES
(1, '1.เตรียมหม้อหุงข้าวไฟฟ้า สำหรับหุงข้าว เตรียมไว้\r\n2.เลือกข้าวหอมมะลิที่เมล็ดสวยๆ แล้วนำข้าวหอมมะลิ มาเตรียมไว้\r\n3.จากนั้นตักข้าวหอมมะลิ ใส่ในถ้วยตวง ที่เตรียมไว้\r\n4.จากนั้นเทข้าวหอมมะลิ ใส่ในหม้อหุงข้าว \r\nจากนั้นเทน้ำใส่ลงไป ในหม้อหุงข้าว ให้ท่วมข้าวหอมมะลิ \r\nจากนั้นใช้มือคนๆ ซาวข้าวหอมมะลิ ล้างน้ำให้สะอาด \r\nจากนั้นเทน้ำซาวข้าวออก ค่อยๆเทน้ำออก\r\n5.จากนั้นเทน้ำซาวข้าว เทออกทิ้งไปให้หมด\r\n6.จากนั้นซาวน้ำล้างข้าวหอมมะลิ ให้สะอาดอีกครั้ง จะได้ข้าวหอมมะลิ ที่ซาวน้ำล้างให้สะอาดดีแล้ว\r\n7.จากนั้นเติมน้ำเปล่า ใส่ลงไปในหม้อ ใส่ให้ท่วมข้าวหอมมะลิ\r\n8.จากนั้นปิดฝา หม้อหุงข้าวไฟฟ้า ให้สนิท\r\n9.จากนั้นกดปุ่มเริ่มหุงข้าว จะมีไฟสีแดงโชว์ แสดงว่าเริ่มหุงข้าวแล้ว\r\n10.เมื่อได้เวลาประมาณ 15 นาทีแล้ว ข้าวหอมมะลิจะหุงสุก ปุ่มจะเด้งอัตโนมัติ ไฟสีแดงจะเปลี่ยนเป็นไฟสีส้ม\r\n11.จากนั้นเปิดฝาหม้อหุงข้าว แล้วจะได้ข้าวหอมมะลิหุงสุกร้อนๆ\r\n12.ข้าวหอมมะลิหุงสุก เมล็ดสวยๆไม่แฉะ มีกลิ่นหอมอร่อยมาก พร้อมจัดเสิร์ฟ', 22);

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
(1, 24, 1, '2017-12-03 21:00:19', '2017-12-03 21:00:19'),
(2, 36, 1, '2017-12-03 21:00:19', '2017-12-03 21:00:19'),
(3, 1, 1, '2017-12-03 21:00:19', '2017-12-03 21:00:19'),
(4, 22, 2, '2017-12-03 21:12:26', '2017-12-03 21:12:26'),
(5, 35, 2, '2017-12-03 21:12:26', '2017-12-03 21:12:26'),
(6, 9, 2, '2017-12-03 21:12:26', '2017-12-03 21:12:26'),
(7, 23, 3, '2017-12-03 21:13:38', '2017-12-03 21:13:38'),
(8, 31, 3, '2017-12-03 21:13:38', '2017-12-03 21:13:38'),
(9, 2, 3, '2017-12-03 21:13:38', '2017-12-03 21:13:38'),
(10, 22, 4, '2017-12-03 21:26:52', '2017-12-03 21:26:52'),
(11, 30, 4, '2017-12-03 21:26:52', '2017-12-03 21:26:52'),
(12, 14, 4, '2017-12-03 21:26:52', '2017-12-03 21:26:52'),
(13, 15, 4, '2017-12-03 21:26:52', '2017-12-03 21:26:52'),
(14, 40, 5, '2017-12-03 21:27:20', '2017-12-03 21:27:20'),
(15, 5, 5, '2017-12-03 21:27:20', '2017-12-03 21:27:20'),
(16, 29, 6, '2017-12-03 21:27:45', '2017-12-03 21:27:45'),
(17, 13, 6, '2017-12-03 21:27:45', '2017-12-03 21:27:45'),
(18, 40, 7, '2017-12-03 21:30:18', '2017-12-03 21:30:18'),
(19, 9, 7, '2017-12-03 21:30:18', '2017-12-03 21:30:18'),
(20, 32, 7, '2017-12-03 21:30:18', '2017-12-03 21:30:18'),
(21, 28, 8, '2017-12-03 21:31:48', '2017-12-03 21:31:48'),
(22, 31, 8, '2017-12-03 21:31:48', '2017-12-03 21:31:48'),
(23, 20, 8, '2017-12-03 21:31:48', '2017-12-03 21:31:48'),
(24, 26, 9, '2017-12-03 21:32:35', '2017-12-03 21:32:35'),
(25, 3, 9, '2017-12-03 21:32:35', '2017-12-03 21:32:35'),
(26, 36, 9, '2017-12-03 21:32:35', '2017-12-03 21:32:35');

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
(8, 'ผลไม้', '2017-08-14 19:37:26', '2017-08-14 19:37:26'),
(9, 'นม', '2017-12-03 20:22:00', '2017-12-03 20:22:00');

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
(1, 'กล้วยไข่ / Banana', 'biXW7.No_Image_Available.jpg', 8),
(2, 'กล้วยน้ำว้า', 'pztp6.No_Image_Available.jpg', 8),
(3, 'แก้วมังกร', 'iCZJ5.No_Image_Available.jpg', 8),
(4, 'ขนุนหนัง', 'lO7bg.No_Image_Available.jpg', 8),
(5, 'แคนตาลูป', 'lO7bg.No_Image_Available.jpg', 8),
(6, 'เงาะโรงเรียน', 'vOpdp.No_Image_Available.jpg', 8),
(7, 'ชมพูทับทิมจันทน์', 'rm3RC.No_Image_Available.jpg', 8),
(8, 'ตะขบ', 'TIWdn.No_Image_Available.jpg', 8),
(9, 'แตงโม', 'TMsK4.No_Image_Available.jpg', 8),
(10, 'ทุเรียนหมอนทอง', 'BuBQV.No_Image_Available.jpg', 8),
(11, 'ฝรั่งกลมสาลี่', 'BuBQV.No_Image_Available.jpg', 8),
(12, 'ฝรั่งกิมจู', 'BuBQV.No_Image_Available.jpg', 8),
(13, 'มังคุด', 'GJSC5.No_Image_Available.jpg', 8),
(14, 'มะพร้าวอ่อน (เนื้อ)', 'JgEYO.No_Image_Available.jpg', 8),
(15, 'มะพร้าวอ่อน (น้ำ)', 'XwOiK.No_Image_Available.jpg', 8),
(16, 'มะเฟืองมาเลเซีย', 'H6IPo.No_Image_Available.jpg', 8),
(17, 'มะม่วงแรดดิบ', 'VDSix.No_Image_Available.jpg', 8),
(18, 'มะม่วงเขียวเสวยดิบ', 'VpRZM.No_Image_Available.jpg', 8),
(19, 'มะม่วงผลสุก น้ำดอกไม้', 'YTUlN.No_Image_Available.jpg', 8),
(20, 'มะม่วงผลสุก อกร่วง', '', 8),
(21, 'มะยงชิด', 'AidEj.No_Image_Available.jpg', 8),
(22, 'ข้าวสุก', '', 1),
(23, 'ข้าวกล่อง', 'pzTuF.No_Image_Available.jpg', 1),
(24, 'ข้าวต้มหมู', 'QXBCh.No_Image_Available.jpg', 2),
(25, 'ผัดมักโรนีกุ้ง', 'gMXcX.No_Image_Available.jpg', 2),
(26, 'ข้าวกล่องแฟนซี', 'tfsoH.No_Image_Available.jpg', 2),
(27, 'ต้มจืดสีรุ้ง', 'cWrnV.No_Image_Available.jpg', 4),
(28, 'ข้าวผัดม้วนไข่', 'A2R12.No_Image_Available.jpg', 2),
(29, 'ข้าวต้มปลาสับกับผักโขม', 'x2wPU.No_Image_Available.jpg', 2),
(30, 'ต้มจืดสับปะรดซี่โครงหมูอ่อน', 'F0VEH.No_Image_Available.jpg', 2),
(31, 'ไก่ดำตุ๋นยาจีน', 'bWQkd.No_Image_Available.jpg', 4),
(32, 'เต๋าหู้ทรงเครื่อง', 'zfqXM.No_Image_Available.jpg', 4),
(33, 'น้ำนมถั่วเหลือง', 'UvEz6.No_Image_Available.jpg', 9),
(34, 'เต้าหู้นึ่งมะนาว', 'xDSuM.No_Image_Available.jpg', 4),
(35, 'กะหล่ำปลีอบเต้าหู้', 'sZBLM.No_Image_Available.jpg', 4),
(36, 'เต้าหู้ปรุงรส', 'vN4mT.No_Image_Available.jpg', 6),
(37, 'ข้าวผัดสีม่วง', 'RNF3X.No_Image_Available.jpg', 2),
(38, 'ชุปฟักทอง', '', 4),
(39, 'ชุปข้าวโพด', 'ElW9J.No_Image_Available.jpg', 4),
(40, 'ข้าวผัดหมูข้าวโพด', 'AtznY.No_Image_Available.jpg', 2);

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
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `nutrition_id` int(3) NOT NULL,
  `nutrition_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`nutrition_id`, `nutrition_category`) VALUES
(1, 'พลังงาน'),
(2, 'โปรตีน'),
(3, 'ไขมัน'),
(4, 'คาร์โบไฮเดรต'),
(5, 'โคเลสรอล'),
(6, 'ใยอาหาร'),
(7, 'วิตามิน เอ'),
(8, 'วิตามิน บี1'),
(9, 'วิตามิน บี2'),
(10, 'วิตามิน ซี'),
(11, 'เหล็ก'),
(12, 'แคลเซียม'),
(13, 'น้ำ'),
(14, 'น้ำตาล'),
(15, 'เบต้าแคโรทีน'),
(16, 'โปแตสเซียม');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_detail`
--

CREATE TABLE `nutrition_detail` (
  `nutrition_detail_id` int(3) NOT NULL,
  `ID_Composition` int(3) NOT NULL,
  `nutrition_id` int(3) NOT NULL,
  `nutrition_detail_ratio` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Menu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nutrition_detail`
--

INSERT INTO `nutrition_detail` (`nutrition_detail_id`, `ID_Composition`, `nutrition_id`, `nutrition_detail_ratio`, `ID_Menu`) VALUES
(1, 1, 2, '56 กิโลแคลอรี', 1),
(2, 1, 13, '36 กรัม', 1),
(3, 1, 14, '11 กรัม', 1),
(4, 1, 6, '1.0 กรัม', 1),
(5, 1, 15, '136 ไมโครกรัม', 1),
(6, 1, 10, '5 มิลลิกรัม', 1),
(7, 1, 16, '135 มิลลิกรัม', 1);

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
  `quiz_Sulfur_oxide` int(1) NOT NULL,
  `isActive` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz_rule`
--

INSERT INTO `quiz_rule` (`ID_Deck`, `quiz_Celery`, `quiz_Gluten`, `quiz_Sea_animals`, `quiz_Egg`, `quiz_fish`, `quiz_Lupine`, `quiz_Mike`, `quiz_Shellfish_squid`, `quiz_Mustard`, `quiz_Nuts_with_hard_shell`, `quiz_Peanut`, `quiz_Sesame_seeds`, `quiz_Soybean`, `quiz_Sulfur_oxide`, `isActive`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1),
(2, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

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
(1, 'benz', 'admin@gmail.com', '$2y$10$DshKAeS0FT7eQ3BDMg1QVu2zp3UZ9vRpZOzIBDFPbUhSEY2RkPwEy', 'gPeh32XxwdVNyuZJzVpLdNsVn1ChCpYuz1mIHFUxEyCUCVZPsUE8pwP2Yajl', '2017-08-02 02:28:50', '2017-08-02 02:28:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`ID_Composition`),
  ADD KEY `ID_Menu` (`ID_Menu`);

--
-- Indexes for table `cooking`
--
ALTER TABLE `cooking`
  ADD PRIMARY KEY (`cooking_id`);

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
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`nutrition_id`);

--
-- Indexes for table `nutrition_detail`
--
ALTER TABLE `nutrition_detail`
  ADD PRIMARY KEY (`nutrition_detail_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `composition`
--
ALTER TABLE `composition`
  MODIFY `ID_Composition` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `cooking`
--
ALTER TABLE `cooking`
  MODIFY `cooking_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `decks`
--
ALTER TABLE `decks`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `groupfoods`
--
ALTER TABLE `groupfoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_Menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `nutrition_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `nutrition_detail`
--
ALTER TABLE `nutrition_detail`
  MODIFY `nutrition_detail_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
