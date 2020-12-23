-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2020 at 07:58 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibot`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `mathematics` int(5) NOT NULL,
  `science` int(5) NOT NULL,
  `technology` int(5) NOT NULL,
  `engineering` int(5) NOT NULL,
  `teamwork` int(5) NOT NULL,
  `eq` int(5) NOT NULL,
  `meditation` int(5) NOT NULL,
  `synthesis` int(5) NOT NULL,
  `assessment_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `BranchCode` varchar(100) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '1',
  `dateadd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `BranchCode`, `branch_name`, `del`, `dateadd`) VALUES
(1, 'GB001', 'เซบวัน', 0, '0'),
(2, 'GB002', 'เทคโน', 0, '0'),
(3, '123', 'aaaaa', 0, '2147483647'),
(4, '123', 'aaaaa', 0, '2147483647'),
(5, '123', 'aaaaa', 0, '2020-08-06 15:55:56'),
(6, '123', 'aaaaa', 0, '2020-08-06 15:56:27'),
(7, 'GB001', 'เซบวัน', 1, '2020-08-06 16:07:51'),
(8, 'ts1320', 'bbb', 0, '2020-08-06 16:08:05'),
(9, 'G0012', 'โคราช', 0, '2020-08-06 16:10:08'),
(10, '123', 'ssssssssss', 0, '2020-08-06 17:02:06'),
(11, '123', 'ssssssssss', 0, '2020-08-06 17:02:08'),
(12, '333', 'aa', 0, '2020-08-06 17:02:18'),
(13, 'qeqwe', 'qweq', 0, '2020-08-07 00:09:27'),
(14, 'GT1120', 'IEthai', 0, '2020-08-07 00:12:23'),
(15, 'GT1120', 'IEthai', 0, '2020-08-07 00:12:26'),
(16, 'GT1120', 'IEthai', 0, '2020-08-07 00:12:58'),
(17, 'GT1120', 'IEthai2', 0, '2020-08-07 00:13:05'),
(18, 'GT11202', 'IEthai', 0, '2020-08-07 00:13:19'),
(19, 'G0012', 'โคราช', 0, '2020-08-07 00:21:58'),
(20, 'GB002', 'เทคโน', 0, '2020-08-07 00:22:03'),
(21, 'aaa', 'aaa', 0, '2020-08-07 00:34:05'),
(22, 'G0012', 'โคราช', 1, '2020-08-07 09:34:22'),
(23, 'GB002', 'เทคโน', 1, '2020-08-07 09:34:27'),
(24, '213123123', '123123', 0, '2020-08-25 15:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `build_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start_time`, `end_time`, `color`, `build_time`) VALUES
(67, '', '2020-12-17', '13:35', 'pink', '12:35'),
(68, '', '2020-12-17', '16:37', 'blue', '15:37'),
(69, '', '2020-12-02', '04:49', 'blue', '16:49'),
(70, '', '2020-12-02', '04:49', 'blue', '16:49'),
(71, '', '2020-12-02', '', 'blue', ''),
(72, '', '2020-12-04', '', 'blue', ''),
(73, '', '2020-12-25', '21:53', 'black', '16:53'),
(74, '', '2020-12-14', '19:54', 'pink', '18:54'),
(75, '', '2020-12-14', '19:54', 'pink', '18:54'),
(76, '', '2020-12-05', '14:23', 'blue', '13:23');

-- --------------------------------------------------------

--
-- Table structure for table `calender_student`
--

CREATE TABLE `calender_student` (
  `cs_student_id` int(11) NOT NULL COMMENT 'รหัสนักเรียน',
  `cs_calender_id` int(11) NOT NULL COMMENT 'รหัสตาราง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calender_teacher`
--

CREATE TABLE `calender_teacher` (
  `ct_teacher_id` int(11) NOT NULL COMMENT 'รหัสครู',
  `ct_calender_id` int(11) NOT NULL COMMENT 'รหัสตาราง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `head`, `article`) VALUES
(1, 'PHP fundamental', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diamnonummy nibh euismod urt laoreet dolore mayna.'),
(2, 'Html fundamental', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diamnonummy nibh euismod urt laoreet dolore mayna.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL COMMENT 'รหัสคอร์ด',
  `course_category` varchar(100) NOT NULL COMMENT 'ชื่อหลักสูตร',
  `course_expension` varchar(100) NOT NULL COMMENT 'ชื่อคอร์ด',
  `course_Age` varchar(100) NOT NULL COMMENT 'ช่วงอายุ',
  `course_code` varchar(100) NOT NULL COMMENT 'จำนวนคอร์ดเรียน',
  `course_lesson` varchar(100) NOT NULL COMMENT 'บทเรียน',
  `course_price` varchar(20) NOT NULL COMMENT 'ราคา',
  `course_img` varchar(500) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_category`, `course_expension`, `course_Age`, `course_code`, `course_lesson`, `course_price`, `course_img`) VALUES
(1, 'DUPLO', 'imagination coure ', '3 years old and older', 'IM01', '8 Lesson  12 Hours', '฿ 3,100 per course', ''),
(2, 'DUPLO', 'imagination coure ', '3 years old and older', 'IM02', '8 Lesson  12 Hours', '฿ 3,100 per course', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `cs_course_id` int(11) NOT NULL COMMENT 'รหัสคอร์ส',
  `cs_student_id` int(11) NOT NULL COMMENT 'รหัสนักเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `ct_teacher_id` int(11) NOT NULL COMMENT 'รหัสครู',
  `ct_course_id` int(11) NOT NULL COMMENT 'รหัสคอร์ส'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL COMMENT 'รหัส',
  `document_lesson` varchar(100) NOT NULL COMMENT 'เอกสารประกอบบทเรียน',
  `document_qiuz` varchar(100) NOT NULL COMMENT 'แบบทดสอบ/1 บท',
  `document_course_id` int(11) NOT NULL COMMENT 'รหัสคอร์ส'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL COMMENT 'รหัสไฟล์',
  `file_address` varchar(100) NOT NULL COMMENT 'ที่อยู่ไฟล์',
  `file_lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน',
  `lesson_course_id` int(11) NOT NULL COMMENT 'lesson_course_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL COMMENT 'รหัส',
  `login_pass` varchar(20) NOT NULL COMMENT 'รหัสผ่าน',
  `login_status` varchar(20) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mycourse_quiz`
--

CREATE TABLE `mycourse_quiz` (
  `id` int(11) NOT NULL,
  `quest` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `select_a` varchar(255) NOT NULL,
  `select_b` varchar(255) NOT NULL,
  `select_c` varchar(255) NOT NULL,
  `select_d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycourse_quiz`
--

INSERT INTO `mycourse_quiz` (`id`, `quest`, `select_a`, `select_b`, `select_c`, `select_d`) VALUES
(1, 'Why are you running', 'Hungry', 'Angry', 'Happy', 'Crazy'),
(2, 'How many people', '30', '10', '20', '40'),
(3, 'Color?', 'Red', 'Pink', 'Black', 'Green'),
(4, 'How old are you?', '10 years old', '9 years old', '8 years old', '5 years old');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `haed` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `haed`, `article`) VALUES
(1, 'Mission Impossible', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diam nonummy nibh euismod urt laoreet dolore mayna.'),
(2, 'Dr.Nara', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diam nonummy nibh euismod urt laoreet dolore mayna.');

-- --------------------------------------------------------

--
-- Table structure for table `news2`
--

CREATE TABLE `news2` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news2`
--

INSERT INTO `news2` (`id`, `topic`, `content`) VALUES
(1, 'Hyper robot', 'It\'s a new challenge for human'),
(2, 'the mini-challenge for a kids', 'this is a mini-challenge for kids to make a robot'),
(3, 'ASDFASDASDAS', 'QWEQWSDSDFSDFDSSDDF');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `country` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal` int(10) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `surname`, `email`, `country`, `city`, `address`, `postal`, `cardnumber`, `month`, `year`) VALUES
(1, 'Art', 'Luksana', 'zero_1477@hotmail.co.th', 'Thai', 'Nakhon', '168 m.9', 30000, 2147483647, 'August', 1969),
(2, 'Artsds', 'Luksanadssd', 'zero_1477@hotmail.co.th', 'Thai', 'Nakhon', '168 m.9', 30000, 2147483647, 'August', 2011),
(3, 'Art', 'asdasd', 'zero_1477@hotmail.co.th', 'asdasdas', 'Nakhon', '168 m.9', 30000, 5000, 'April', 2006);

-- --------------------------------------------------------

--
-- Table structure for table `our course`
--

CREATE TABLE `our course` (
  `Course_Expension` varchar(100) NOT NULL,
  `Age_For_class` varchar(100) NOT NULL,
  `Total_course` varchar(100) NOT NULL,
  `Lesson` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our course`
--

INSERT INTO `our course` (`Course_Expension`, `Age_For_class`, `Total_course`, `Lesson`, `Price`, `category`, `ID`) VALUES
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 2),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 5),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 6),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 7),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 8),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 9);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parents_id` int(10) NOT NULL COMMENT 'รหัสผู้ปกครอง',
  `parents_name_th` varchar(30) NOT NULL COMMENT 'ชื่อผู้ปกครอง(ไทย)',
  `parents_name_eng` varchar(30) NOT NULL COMMENT 'ชื่อผู้ปกครอง(อังกฤษ)',
  `parents_related` varchar(10) NOT NULL COMMENT 'สถานะผู้ปกครอง',
  `parents_phonnumber` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `parents_email` varchar(30) NOT NULL COMMENT 'อีเมลล์',
  `parents_line` varchar(30) NOT NULL COMMENT 'ไลน์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL COMMENT 'รหัส',
  `payment_no` int(20) NOT NULL COMMENT 'เลขที่การโอน',
  `payment_amount` int(20) NOT NULL COMMENT 'จำนวนเงิน',
  `payment_date` varchar(100) NOT NULL COMMENT 'วัน เวลาที่โอน',
  `payment_student_id` int(11) NOT NULL COMMENT 'รหัสนักเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pdf_insert`
--

CREATE TABLE `pdf_insert` (
  `id` int(11) NOT NULL,
  `address_scr` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdf_insert`
--

INSERT INTO `pdf_insert` (`id`, `address_scr`, `name`) VALUES
(1, 'pdf/oil.pdf', 'Unit 1'),
(2, 'pdf/slip.pdf', 'Unit 2'),
(4, 'pdf/unit.pdf', 'Unit 3'),
(6, 'iframe/question.php', 'Quiz'),
(9, '', 'Unit 4'),
(10, '', 'Unit 5'),
(11, '', 'Unit 6'),
(12, '', 'Unit 7'),
(13, '', 'Unit 8'),
(14, '', 'Unit 9'),
(15, '', 'Unit 10'),
(16, '', 'Unit 11'),
(17, '', 'Unit 12'),
(18, '', 'Unit 13'),
(19, '', 'Unit 14'),
(20, '', 'Unit 15'),
(21, '', 'Unit 16'),
(22, '', 'Unit 17');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`id`, `head`, `article`) VALUES
(1, 'Front-End', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diamnonummy nibh euismod urt laoreet dolore mayna.'),
(2, 'Back-End', 'Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diamnonummy nibh euismod urt laoreet dolore mayna.');

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `quiz_id` int(11) NOT NULL COMMENT 'รหัสคำถาม',
  `question` varchar(20) NOT NULL COMMENT 'คำถาม',
  `ans_1` varchar(20) NOT NULL COMMENT 'คำตอบ1',
  `ans_2` varchar(20) NOT NULL COMMENT 'คำตอบ2',
  `ans_3` varchar(20) NOT NULL COMMENT 'คำตอบ3',
  `ans_4` varchar(20) NOT NULL COMMENT 'คำตอบ4',
  `check_ans` int(5) NOT NULL COMMENT 'เฉลย',
  `quiz_lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `content`, `username`) VALUES
(1, 'Great Challenge for making a robot from a kids', 'Ratchanat Luksana(Art)'),
(2, 'Non-stop god brain from a kids', 'XDXDXDXD');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL COMMENT 'รหัสนักเรียน',
  `student_name_th` varchar(30) NOT NULL COMMENT 'ชื่อไทย',
  `student_name_eng` varchar(30) NOT NULL COMMENT 'ชื่ออังกฤษ',
  `student_nickname_eng` varchar(20) NOT NULL COMMENT 'ชื่อเล่นอังกฤษ',
  `student_brithday` varchar(100) NOT NULL COMMENT 'วันเกิด',
  `student_school` varchar(100) NOT NULL COMMENT 'โรงเรียน',
  `student_grade` varchar(5) NOT NULL COMMENT 'เกรด',
  `student_parents_id` int(11) NOT NULL COMMENT 'รหัสผู้ปกครอง',
  `student_user` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `student_login_id` int(11) NOT NULL COMMENT 'รหัสล็อกอิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment`
--

CREATE TABLE `student_assessment` (
  `Total` float NOT NULL,
  `id_student` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Technology` int(11) NOT NULL,
  `Engineering` int(11) NOT NULL,
  `Teamwork` int(11) NOT NULL,
  `EQ` int(11) NOT NULL,
  `Meditation` int(11) NOT NULL,
  `Synthesis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_assessment`
--

INSERT INTO `student_assessment` (`Total`, `id_student`, `Mathematics`, `Science`, `Technology`, `Engineering`, `Teamwork`, `EQ`, `Meditation`, `Synthesis`) VALUES
(2.625, 1, 4, 1, 3, 1, 4, 1, 2, 5),
(0, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 5, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 7, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 8, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 9, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 10, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 11, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 12, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 13, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 14, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 15, 1, 1, 1, 1, 1, 1, 1, 1),
(0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 17, 1, 1, 1, 1, 1, 1, 1, 1),
(0, 18, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 19, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 20, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 21, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 22, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 23, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 24, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 25, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 26, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerId` int(11) NOT NULL,
  `CustIdCardNumber` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CustFirstName` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CustLanstName` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CustTelNumber` int(11) NOT NULL,
  `Created` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerId`, `CustIdCardNumber`, `CustFirstName`, `CustLanstName`, `CustTelNumber`, `Created`) VALUES
(1, '123', 'christ', 'smart', 215632015, '2020-08-07 11:31:37'),
(3, '124', 'jame', 'delux', 2147483647, '2020-08-07 17:34:25'),
(4, '125', 'marry', 'job', 5555, '2020-08-07 17:44:07'),
(5, '126', 'hhhh', 'hhhh', 555555, '2020-08-07 18:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goldpledge`
--

CREATE TABLE `tbl_goldpledge` (
  `GoldPledgeId` int(11) NOT NULL,
  `PledgeCode` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GPCustomerId` int(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `GoldPriceId` int(11) NOT NULL,
  `GoldWeighPledge` float NOT NULL,
  `CostValue` float NOT NULL,
  `CreatedDateTime` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `BranchId` int(11) NOT NULL,
  `InterestRate` float NOT NULL,
  `DeptAmount` float DEFAULT NULL,
  `DateTimeToCon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `del` int(11) NOT NULL DEFAULT '1',
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `main_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_goldpledge`
--

INSERT INTO `tbl_goldpledge` (`GoldPledgeId`, `PledgeCode`, `GPCustomerId`, `userId`, `GoldPriceId`, `GoldWeighPledge`, `CostValue`, `CreatedDateTime`, `BranchId`, `InterestRate`, `DeptAmount`, `DateTimeToCon`, `del`, `max`, `min`, `type`, `main_code`) VALUES
(31, '190820200', 1, 1, 20, 1, 19318, '2020-06-19 10:16:14', 0, 2, 19318, '2020-09-19 10:16:14', 1, 123000, 100, 1, ''),
(45, '200820200', 1, 1, 20, 1, 19559, '2020-08-20 00:18:30', 0, 2, 19559, '2020-09-20 00:18:30', 1, 103682, 0, 1, '190820200'),
(46, '200820201', 1, 1, 20, 1, 6577, '2020-08-20 01:21:36', 0, 2, 6577, '2020-09-20 01:21:36', 1, 84123, 0, 1, '190820200'),
(47, '200820202', 1, 1, 35, 1, 671, '2020-08-20 01:24:38', 0, 2, 671, '2020-09-20 01:24:38', 1, 3455, 123, 0, ''),
(48, '240820203', 1, 1, 21, 1, 677, '2020-08-24 16:27:55', 0, 2, 677, '2020-09-24 16:27:55', 1, 2000, 200, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interest`
--

CREATE TABLE `tbl_interest` (
  `interestId` int(11) NOT NULL,
  `intValue` float NOT NULL,
  `empId` int(11) NOT NULL,
  `created` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `del` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_interest`
--

INSERT INTO `tbl_interest` (`interestId`, `intValue`, `empId`, `created`, `del`) VALUES
(1, 3, 8, '2020-08-18 12:17:34', 1),
(2, 0, 8, '2020-08-18 12:59:32', 1),
(3, 5, 8, '2020-08-18 13:03:03', 1),
(4, 6, 8, '2020-08-18 13:56:09', 1),
(5, 2, 1, '2020-08-18 16:42:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE `tbl_month` (
  `mId` int(11) NOT NULL,
  `MonthName` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_month`
--

INSERT INTO `tbl_month` (`mId`, `MonthName`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slut`
--

CREATE TABLE `tbl_slut` (
  `slut_id` int(11) NOT NULL,
  `PledgeCode` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `money` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `amount` varchar(11) NOT NULL,
  `dateadd` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `del` int(11) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slut`
--

INSERT INTO `tbl_slut` (`slut_id`, `PledgeCode`, `money`, `amount`, `dateadd`, `del`, `type`) VALUES
(54, '190820200', '386.36', '1159.08', '2020-08-21 09:38:44', 1, 2),
(55, '190820200', '386.36', '1159.08', '2020-08-21 09:38:47', 1, 2),
(56, '190820200', '772.72', '772.72', '2020-08-25 18:15:43', 1, 2),
(57, '190820200', '45454', '45454', '2020-08-25 18:15:47', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gold_price`
--

CREATE TABLE `tb_gold_price` (
  `gold_code` int(11) NOT NULL,
  `gold_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gold_weight` int(11) NOT NULL DEFAULT '1',
  `gold_max` int(11) NOT NULL,
  `gold_min` int(11) NOT NULL,
  `dateadd` varchar(50) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_gold_price`
--

INSERT INTO `tb_gold_price` (`gold_code`, `gold_name`, `gold_weight`, `gold_max`, `gold_min`, `dateadd`, `del`) VALUES
(20, 'ทองหยอด', 1, 123000, 100, '2020-08-06 15:21:27', 0),
(21, 'ฝอยทอง', 1, 2000, 200, '2020-08-06 15:21:56', 0),
(22, 'ฝอยทอง', 1, 20000, 2000, '2020-08-06 15:22:10', 1),
(23, 'aa', 1, 20000, 2000, '2020-08-06 15:23:18', 0),
(24, 'aa', 1, 20000, 2000, '2020-08-06 15:23:21', 0),
(25, 'aaa', 1, 20000, 2000, '2020-08-06 15:23:30', 0),
(26, 'aaaaaaaaaaaaaaaaaaaa', 1, 2345, 123, '2020-08-06 17:01:20', 0),
(27, 'aaaa', 1, 3455, 123, '2020-08-07 00:40:23', 0),
(28, 'aaaa', 1, 3455, 123, '2020-08-07 00:40:36', 0),
(29, 'aaa', 1, 20000, 2000, '2020-08-07 00:43:23', 0),
(30, 'ิิิิbbbbb', 1, 20000, 2000, '2020-08-07 00:43:33', 0),
(31, 'ิิิิbbbbb', 1, 20000, 2000, '2020-08-07 00:43:40', 0),
(32, '123', 1, 12345, 1234, '2020-08-07 00:46:35', 0),
(33, '123', 1, 12345, 1234, '2020-08-07 00:46:50', 0),
(34, 'aaaa', 1, 3455, 123, '2020-08-07 09:34:03', 1),
(35, 'aaaa', 1, 3455, 123, '2020-08-07 10:09:28', 1),
(36, 'ทองหยิบ', 1, 20, 10, '2020-08-11 17:52:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL COMMENT 'รหัสครู',
  `teacher_fname` varchar(30) NOT NULL COMMENT 'ชื่อจริง',
  `teacher_lname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `teacher_position` varchar(30) NOT NULL COMMENT 'ตำแหน่ง',
  `teacher_email` varchar(30) NOT NULL COMMENT 'อีเมลล์',
  `teacher_phone` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `teacher_worktime` varchar(100) NOT NULL COMMENT 'เวลาทำงาน',
  `teacher_password` varchar(10) NOT NULL COMMENT 'รหัสผ่าน',
  `teacher_img` varchar(500) NOT NULL COMMENT 'รูปภาพ',
  `teacher_login_id` int(11) NOT NULL COMMENT 'รหัสล็อกอิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, '123', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nlevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `level`, `nlevel`) VALUES
(2, '111', '111', 'ART', 'admin', 'Admin'),
(6, '333', '333', 'FAII', 'superadmin', 'Master User'),
(7, '444', '444', 'young', 'teacher', 'Teacher Assistance'),
(8, '222', '222', 'JED', 'student', 'Student User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender_student`
--
ALTER TABLE `calender_student`
  ADD KEY `FK_cs_calender_id` (`cs_calender_id`) USING BTREE,
  ADD KEY `FK_cs_student_id` (`cs_student_id`);

--
-- Indexes for table `calender_teacher`
--
ALTER TABLE `calender_teacher`
  ADD KEY `FK_ct_teacher_id` (`ct_teacher_id`),
  ADD KEY `FK_ct_calender_id` (`ct_calender_id`) USING BTREE;

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD KEY `FK_course_id` (`cs_course_id`),
  ADD KEY `FK_student_id` (`cs_student_id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD KEY `FK_ctt_teacher_id` (`ct_teacher_id`),
  ADD KEY `FK_ct_course_id` (`ct_course_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `FK_dcourse_id` (`document_course_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `FK_file_lesson_id` (`file_lesson_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `FK_lesson_course_id` (`lesson_course_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `mycourse_quiz`
--
ALTER TABLE `mycourse_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news2`
--
ALTER TABLE `news2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our course`
--
ALTER TABLE `our course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parents_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `FK_pstudent_id` (`payment_student_id`);

--
-- Indexes for table `pdf_insert`
--
ALTER TABLE `pdf_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `FK_quiz_lesson_id` (`quiz_lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `FK_parents_id` (`student_parents_id`),
  ADD KEY `FK_login_id` (`student_login_id`);

--
-- Indexes for table `student_assessment`
--
ALTER TABLE `student_assessment`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `FK_tlogin_id` (`teacher_login_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคอร์ด', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสไฟล์';

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสบทเรียน';

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `mycourse_quiz`
--
ALTER TABLE `mycourse_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `our course`
--
ALTER TABLE `our course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parents_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ปกครอง';

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `pdf_insert`
--
ALTER TABLE `pdf_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคำถาม';

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสนักเรียน';

--
-- AUTO_INCREMENT for table `student_assessment`
--
ALTER TABLE `student_assessment`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
