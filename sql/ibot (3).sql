-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 11:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL COMMENT 'id',
  `admin_username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `admin_password` varchar(20) NOT NULL COMMENT 'รหัสเข้าระบบ',
  `admin_level` varchar(20) NOT NULL COMMENT 'id สถานะ',
  `admin_nlevel` varchar(20) NOT NULL COMMENT 'สถานะที่นำไปแสดง',
  `admin_name` varchar(50) NOT NULL COMMENT 'ชื่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_level`, `admin_nlevel`, `admin_name`) VALUES
(1, 'A_012345', '012345', 'admin', 'Admin', 'I BOT');

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
  `assessment_total` float NOT NULL,
  `assessment_id` int(11) NOT NULL COMMENT 'รหัสประเมิน',
  `assessment_student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `calender_id` int(11) NOT NULL COMMENT 'รหัส',
  `calender_date` varchar(100) NOT NULL COMMENT 'วันที่',
  `calender_starttime` varchar(100) NOT NULL COMMENT 'เวลาเริ่ม',
  `calender_endtime` varchar(100) NOT NULL COMMENT 'เวลาเลิก',
  `calender_color` varchar(20) NOT NULL COMMENT 'สี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` int(11) NOT NULL COMMENT 'รหัสแคมป์',
  `camp_program` varchar(100) NOT NULL COMMENT 'โปรแกรมแคมป์',
  `camp_payment_id` int(11) NOT NULL COMMENT 'รหัสใบชำระเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compititions`
--

CREATE TABLE `compititions` (
  `com_id` int(11) NOT NULL COMMENT 'รหัสแข่ง',
  `com_type` varchar(50) NOT NULL COMMENT 'ประเภทแข่ง',
  `com_program` varchar(100) NOT NULL COMMENT 'โปรแกรมแข่ง',
  `com_file` varchar(255) NOT NULL COMMENT 'ไฟล์รายละเอียด',
  `com_payment_id` int(11) NOT NULL COMMENT 'รหัสใบชำระเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL COMMENT 'รหัสคอร์ด',
  `course_category` varchar(100) NOT NULL COMMENT 'ชื่อหลักสูตร',
  `course_expension` varchar(100) NOT NULL COMMENT 'ชื่อคอร์ด',
  `course_Age` varchar(100) NOT NULL COMMENT 'ช่วงอายุ',
  `course_code` varchar(100) NOT NULL COMMENT 'รหัสคอร์ดเรียน',
  `course_lesson` varchar(100) NOT NULL COMMENT 'บทเรียน',
  `course_price` varchar(20) NOT NULL COMMENT 'ราคา',
  `course_img` varchar(500) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_category`, `course_expension`, `course_Age`, `course_code`, `course_lesson`, `course_price`, `course_img`) VALUES
(1234, '444', '555', '444', '526', '4444', '3,000', 'img_5ff518a4ac507.jpg '),
(1235, '444', 'OPOP', 'iko', 'IM02', '8 Lesson 12 Hours', '3,000', 'img_5ff518d1d0d50.jpg ');

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
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน',
  `lesson_course_id` int(11) NOT NULL COMMENT 'lesson_course_id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `parents_line` varchar(30) NOT NULL COMMENT 'ไลน์',
  `student_id` int(11) NOT NULL
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
  `payment_student_id` int(11) NOT NULL COMMENT 'รหัสนักเรียน',
  `payment_bank` varchar(20) NOT NULL COMMENT 'ธนาคาร',
  `payment_img` varchar(255) NOT NULL COMMENT 'หลักฐานการโอน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `quiz_lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน',
  `lesson` varchar(255) NOT NULL COMMENT 'บทเรียน',
  `course_name` varchar(255) NOT NULL COMMENT 'ชื่อคอร์ส'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `student_username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `student_login_id` int(11) NOT NULL COMMENT 'รหัสล็อกอิน',
  `parents_name_th` varchar(50) NOT NULL COMMENT 'ชื่อผู้ปกครอง(ไทย)',
  `parents_name_eng` varchar(50) NOT NULL COMMENT 'ชื่อผู้ปกครอง(อังกฤษ)',
  `parents_related` varchar(10) NOT NULL COMMENT 'สถานะผู้ปกครอง',
  `parents_phonnumber` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `parents_email` varchar(30) NOT NULL COMMENT 'อีเมลล์',
  `parents_line` varchar(20) NOT NULL COMMENT 'ไลน์',
  `student_password` varchar(20) NOT NULL COMMENT 'password',
  `student_level` varchar(20) NOT NULL COMMENT 'id สถานะ',
  `student_nlevel` varchar(20) NOT NULL COMMENT 'สถานะที่นำไปแสดง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name_th`, `student_name_eng`, `student_nickname_eng`, `student_brithday`, `student_school`, `student_grade`, `student_username`, `student_login_id`, `parents_name_th`, `parents_name_eng`, `parents_related`, `parents_phonnumber`, `parents_email`, `parents_line`, `student_password`, `student_level`, `student_nlevel`) VALUES
(1, '', 'kanokorn ', 'faiy', '', '', '', 'S_212345', 0, '', '', '', '', '', '', '56789', 'student', 'Student');

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
(0, 26, 0, 0, 0, 0, 0, 0, 0, 0),
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
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL COMMENT 'รหัสครู',
  `teacher_fname` varchar(30) NOT NULL COMMENT 'ชื่อจริง',
  `teacher_lname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `teacher_email` varchar(30) NOT NULL COMMENT 'อีเมลล์',
  `teacher_phone` varchar(10) NOT NULL COMMENT 'เบอร์โทร',
  `teacher_worktime` varchar(100) NOT NULL COMMENT 'เวลาทำงาน',
  `teacher_password` varchar(10) NOT NULL COMMENT 'รหัสผ่าน',
  `teacher_img` varchar(500) NOT NULL COMMENT 'รูปภาพ',
  `teacher_level` varchar(20) NOT NULL COMMENT 'id สถานะ',
  `teacher_nlevel` varchar(20) NOT NULL COMMENT 'สถนะที่นำไปแสดง',
  `teacher_username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_fname`, `teacher_lname`, `teacher_email`, `teacher_phone`, `teacher_worktime`, `teacher_password`, `teacher_img`, `teacher_level`, `teacher_nlevel`, `teacher_username`) VALUES
(1, 'Peggy', 'Bryan', '', '', '', '12345', '', 'teacher', 'Teacher', 'T_112345');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`),
  ADD KEY `FK_astudent_id` (`assessment_student_id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`calender_id`);

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
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `FK_camp_payment_id` (`camp_payment_id`);

--
-- Indexes for table `compititions`
--
ALTER TABLE `compititions`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `FK_com_payment_id` (`com_payment_id`);

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
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `FK_lesson_course_id` (`lesson_course_id`);

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
  ADD KEY `fk_payment_student_id` (`payment_student_id`);

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
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเมิน';

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `calender_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแคมป์';

--
-- AUTO_INCREMENT for table `compititions`
--
ALTER TABLE `compititions`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแข่ง';

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคอร์ด', AUTO_INCREMENT=1236;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสบทเรียน';

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parents_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ปกครอง', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคำถาม';

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสนักเรียน', AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสครู', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `FK_astudent_id` FOREIGN KEY (`assessment_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `calender_student`
--
ALTER TABLE `calender_student`
  ADD CONSTRAINT `FK_cs_calender_id` FOREIGN KEY (`cs_calender_id`) REFERENCES `calendar` (`calender_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cs_student_id` FOREIGN KEY (`cs_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calender_teacher`
--
ALTER TABLE `calender_teacher`
  ADD CONSTRAINT `FK_ct_calender_id` FOREIGN KEY (`ct_calender_id`) REFERENCES `calendar` (`calender_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ct_teacher_id` FOREIGN KEY (`ct_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `camp`
--
ALTER TABLE `camp`
  ADD CONSTRAINT `FK_camp_payment_id` FOREIGN KEY (`camp_payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `compititions`
--
ALTER TABLE `compititions`
  ADD CONSTRAINT `FK_com_payment_id` FOREIGN KEY (`com_payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `FK_course_id` FOREIGN KEY (`cs_course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_student_id` FOREIGN KEY (`cs_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `FK_ct_course_id` FOREIGN KEY (`ct_course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ctt_teacher_id` FOREIGN KEY (`ct_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_dcourse_id` FOREIGN KEY (`document_course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `FK_lesson_course_id` FOREIGN KEY (`lesson_course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_student_id` FOREIGN KEY (`payment_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quize`
--
ALTER TABLE `quize`
  ADD CONSTRAINT `FK_quiz_lesson_id` FOREIGN KEY (`quiz_lesson_id`) REFERENCES `lesson` (`lesson_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
