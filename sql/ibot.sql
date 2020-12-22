-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 06:05 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Indexes for dumped tables
--

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
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `FK_tlogin_id` (`teacher_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสครู';

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
  ADD CONSTRAINT `FK_cs_calender_id` FOREIGN KEY (`cs_calender_id`) REFERENCES `calendar` (`calender_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_cs_student_id` FOREIGN KEY (`cs_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `calender_teacher`
--
ALTER TABLE `calender_teacher`
  ADD CONSTRAINT `FK_ct_calender_id` FOREIGN KEY (`ct_calender_id`) REFERENCES `calendar` (`calender_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ct_teacher_id` FOREIGN KEY (`ct_teacher_id`) REFERENCES `teacher` (`teacher_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `FK_file_lesson_id` FOREIGN KEY (`file_lesson_id`) REFERENCES `lesson` (`lesson_id`);

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `FK_lesson_course_id` FOREIGN KEY (`lesson_course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_pstudent_id` FOREIGN KEY (`payment_student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quize`
--
ALTER TABLE `quize`
  ADD CONSTRAINT `FK_quiz_lesson_id` FOREIGN KEY (`quiz_lesson_id`) REFERENCES `lesson` (`lesson_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_login_id` FOREIGN KEY (`student_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_parents_id` FOREIGN KEY (`student_parents_id`) REFERENCES `parents` (`parents_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_tlogin_id` FOREIGN KEY (`teacher_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
