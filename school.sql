/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : school

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 04/08/2022 03:19:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bz_activities
-- ----------------------------
DROP TABLE IF EXISTS `bz_activities`;
CREATE TABLE `bz_activities`  (
  `act_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `act_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `act_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `act_start_date` date NOT NULL,
  `act_end_date` date NOT NULL,
  `act_publish_date` date NOT NULL,
  `act_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`act_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_admins
-- ----------------------------
DROP TABLE IF EXISTS `bz_admins`;
CREATE TABLE `bz_admins`  (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  PRIMARY KEY (`adm_id`) USING BTREE,
  UNIQUE INDEX `use_id`(`use_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_admins
-- ----------------------------
INSERT INTO `bz_admins` VALUES (1, 1, 1);
INSERT INTO `bz_admins` VALUES (2, 3, 14);
INSERT INTO `bz_admins` VALUES (3, 4, 15);
INSERT INTO `bz_admins` VALUES (4, 5, 17);
INSERT INTO `bz_admins` VALUES (5, 6, 23);
INSERT INTO `bz_admins` VALUES (6, 10, 25);
INSERT INTO `bz_admins` VALUES (7, 12, 27);
INSERT INTO `bz_admins` VALUES (8, 13, 28);
INSERT INTO `bz_admins` VALUES (9, 14, 29);
INSERT INTO `bz_admins` VALUES (10, 16, 31);
INSERT INTO `bz_admins` VALUES (11, 18, 32);
INSERT INTO `bz_admins` VALUES (12, 19, 33);
INSERT INTO `bz_admins` VALUES (13, 20, 34);

-- ----------------------------
-- Table structure for bz_attendance
-- ----------------------------
DROP TABLE IF EXISTS `bz_attendance`;
CREATE TABLE `bz_attendance`  (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_id` int(11) NOT NULL,
  `att_date` date NOT NULL,
  `att_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`att_id`) USING BTREE,
  UNIQUE INDEX `use_id`(`use_id`, `att_date`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_attendance
-- ----------------------------
INSERT INTO `bz_attendance` VALUES (1, 8, '2022-06-07', 'half_leave');

-- ----------------------------
-- Table structure for bz_classes
-- ----------------------------
DROP TABLE IF EXISTS `bz_classes`;
CREATE TABLE `bz_classes`  (
  `cla_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `cla_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cla_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`cla_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_classes
-- ----------------------------
INSERT INTO `bz_classes` VALUES (1, 1, 'Primary Class', '2022-03-13 02:17:47');
INSERT INTO `bz_classes` VALUES (2, 1, '1st Class', '2022-03-13 02:17:47');
INSERT INTO `bz_classes` VALUES (3, 1, '2nd Class', '2022-03-13 02:17:47');
INSERT INTO `bz_classes` VALUES (5, 1, 'new cla', '2022-04-10 03:04:17');
INSERT INTO `bz_classes` VALUES (6, 1, 'asdfas', '2022-04-10 03:05:43');
INSERT INTO `bz_classes` VALUES (7, 1, 'Hello World', '2022-04-10 03:05:53');
INSERT INTO `bz_classes` VALUES (8, 1, 'mmmm', '2022-04-11 05:04:52');
INSERT INTO `bz_classes` VALUES (9, 1, '10 th', '2022-04-14 04:00:33');
INSERT INTO `bz_classes` VALUES (10, 1, 'testtest', '2022-05-23 02:31:51');
INSERT INTO `bz_classes` VALUES (11, 5, '1st Class', '2022-05-23 03:47:52');
INSERT INTO `bz_classes` VALUES (12, 5, 'Class 12', '2022-06-01 22:05:05');

-- ----------------------------
-- Table structure for bz_exams
-- ----------------------------
DROP TABLE IF EXISTS `bz_exams`;
CREATE TABLE `bz_exams`  (
  `exa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `exa_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `exa_start_date` date NOT NULL,
  `exa_date` date NOT NULL,
  `exa_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`exa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_fee
-- ----------------------------
DROP TABLE IF EXISTS `bz_fee`;
CREATE TABLE `bz_fee`  (
  `fee_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `fee_amount` int(11) NOT NULL,
  `fee_status` int(11) NOT NULL,
  `fee_from` date NOT NULL,
  `fee_to` date NOT NULL,
  `fee_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fee_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`fee_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_gallery
-- ----------------------------
DROP TABLE IF EXISTS `bz_gallery`;
CREATE TABLE `bz_gallery`  (
  `gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `gal_file` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gal_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gal_datetime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`gal_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_inventory
-- ----------------------------
DROP TABLE IF EXISTS `bz_inventory`;
CREATE TABLE `bz_inventory`  (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `int_id` int(11) NOT NULL,
  `inv_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inv_qty` int(11) NOT NULL,
  `inv_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`inv_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_inventory_types
-- ----------------------------
DROP TABLE IF EXISTS `bz_inventory_types`;
CREATE TABLE `bz_inventory_types`  (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`int_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_notifications
-- ----------------------------
DROP TABLE IF EXISTS `bz_notifications`;
CREATE TABLE `bz_notifications`  (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `not_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `not_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `not_date` date NOT NULL,
  `not_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`not_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_notifications
-- ----------------------------
INSERT INTO `bz_notifications` VALUES (1, 1, 'Send Due Invoice Alert', 'Send Due Invoice Alert', '0000-00-00', '2022-06-07 13:24:08');

-- ----------------------------
-- Table structure for bz_salaries
-- ----------------------------
DROP TABLE IF EXISTS `bz_salaries`;
CREATE TABLE `bz_salaries`  (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `sal_amount` int(11) NOT NULL,
  `sal_status` int(11) NOT NULL,
  `sal_date` date NOT NULL,
  `sal_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sal_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`sal_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_schools
-- ----------------------------
DROP TABLE IF EXISTS `bz_schools`;
CREATE TABLE `bz_schools`  (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_address` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_logo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `sch_contactno` int(30) NOT NULL,
  `sch_priciname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sch_status` int(255) NOT NULL,
  `sch_website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sch_pay_actual` float(255, 0) NOT NULL,
  `sch_pay_paid` float(255, 0) NOT NULL,
  `sch_pay_pending` float(255, 0) NOT NULL,
  `sch_enrollyear` date NULL DEFAULT NULL,
  PRIMARY KEY (`sch_id`) USING BTREE,
  UNIQUE INDEX `sch_token`(`sch_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_schools
-- ----------------------------
INSERT INTO `bz_schools` VALUES (1, 'Baj Public School', 'NEW DELHI', 'North', '', '10579425', '2022-08-04 02:36:38', 12345, 'Principal', 0, NULL, 1004, 150, 0, '2022-08-10');
INSERT INTO `bz_schools` VALUES (2, 'Bal', 'NEW', 'North', '', '48671466', '2022-08-04 03:15:40', 123456789, 'principal1', 0, NULL, 5465, 546, 10, '2022-08-01');
INSERT INTO `bz_schools` VALUES (3, 'Bal', 'NEW', 'East', '', '67093335', '2022-08-04 03:15:46', 25, 'teest3', 1, NULL, 522, 456, 0, '2022-08-03');
INSERT INTO `bz_schools` VALUES (5, 'Bal Bharti Public School', 'NEW DELHI', 'West', '', '', '2022-08-04 02:17:15', 0, '', 1, NULL, 0, 0, 0, NULL);
INSERT INTO `bz_schools` VALUES (20, 'Bal Bharti Public School', 'NEW DELHI', 'West', '', '38944514', '2022-08-04 01:26:29', 145235, 'qwe', 0, NULL, 0, 0, 0, '2022-08-02');

-- ----------------------------
-- Table structure for bz_sections
-- ----------------------------
DROP TABLE IF EXISTS `bz_sections`;
CREATE TABLE `bz_sections`  (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `cla_id` int(11) NOT NULL,
  `sec_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sec_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_sections
-- ----------------------------
INSERT INTO `bz_sections` VALUES (1, 1, 'Sec A');
INSERT INTO `bz_sections` VALUES (2, 1, 'Sec B');
INSERT INTO `bz_sections` VALUES (3, 2, 'Sec A');
INSERT INTO `bz_sections` VALUES (4, 2, 'Sec B');
INSERT INTO `bz_sections` VALUES (5, 1, 'Sec C');
INSERT INTO `bz_sections` VALUES (6, 1, 'Sec D');
INSERT INTO `bz_sections` VALUES (7, 1, 'Sec E');
INSERT INTO `bz_sections` VALUES (8, 1, 'Sec F');
INSERT INTO `bz_sections` VALUES (9, 3, 'A One');
INSERT INTO `bz_sections` VALUES (10, 3, 'A Two');
INSERT INTO `bz_sections` VALUES (11, 3, 'A Three');
INSERT INTO `bz_sections` VALUES (12, 7, 'New A');
INSERT INTO `bz_sections` VALUES (13, 8, 'A');
INSERT INTO `bz_sections` VALUES (14, 9, 'A');
INSERT INTO `bz_sections` VALUES (15, 9, 'B');
INSERT INTO `bz_sections` VALUES (16, 5, 'A Three');
INSERT INTO `bz_sections` VALUES (17, 10, 'testtesttest');
INSERT INTO `bz_sections` VALUES (18, 11, 'A');
INSERT INTO `bz_sections` VALUES (19, 12, 'A');
INSERT INTO `bz_sections` VALUES (20, 12, 'B');

-- ----------------------------
-- Table structure for bz_students
-- ----------------------------
DROP TABLE IF EXISTS `bz_students`;
CREATE TABLE `bz_students`  (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `cla_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  PRIMARY KEY (`stu_id`) USING BTREE,
  UNIQUE INDEX `use_id`(`use_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_students
-- ----------------------------
INSERT INTO `bz_students` VALUES (5, 1, 9, 3, 11);
INSERT INTO `bz_students` VALUES (6, 1, 13, 9, 14);
INSERT INTO `bz_students` VALUES (7, 1, 16, 3, 11);
INSERT INTO `bz_students` VALUES (8, 5, 18, 11, 18);
INSERT INTO `bz_students` VALUES (9, 5, 19, 12, 20);

-- ----------------------------
-- Table structure for bz_syllabus
-- ----------------------------
DROP TABLE IF EXISTS `bz_syllabus`;
CREATE TABLE `bz_syllabus`  (
  `syl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cla_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `syl_course` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `syl_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`syl_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_teachers
-- ----------------------------
DROP TABLE IF EXISTS `bz_teachers`;
CREATE TABLE `bz_teachers`  (
  `tea_id` int(11) NOT NULL AUTO_INCREMENT,
  `sch_id` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `cla_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  PRIMARY KEY (`tea_id`) USING BTREE,
  UNIQUE INDEX `use_id`(`use_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_teachers
-- ----------------------------
INSERT INTO `bz_teachers` VALUES (1, 1, 8, 3, 11);
INSERT INTO `bz_teachers` VALUES (2, 5, 22, 12, 20);

-- ----------------------------
-- Table structure for bz_ticket_chat
-- ----------------------------
DROP TABLE IF EXISTS `bz_ticket_chat`;
CREATE TABLE `bz_ticket_chat`  (
  `chat_id` int(10) NOT NULL,
  `tick_id` int(10) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `chat_txt` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chat_datetime` datetime(0) NOT NULL,
  PRIMARY KEY (`chat_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_ticket_chat
-- ----------------------------
INSERT INTO `bz_ticket_chat` VALUES (1, 1, 0, 'I have a problem', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (2, 1, 1, 'I can solve it.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (3, 1, 0, 'I have a problem.', '2022-08-03 12:39:56');
INSERT INTO `bz_ticket_chat` VALUES (4, 1, 1, 'I\'ve solved it.', '2022-08-03 12:40:20');
INSERT INTO `bz_ticket_chat` VALUES (5, 2, 0, 'I have a problem.', '2022-08-03 12:41:57');
INSERT INTO `bz_ticket_chat` VALUES (6, 2, 1, 'I can solve it.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (7, 2, 0, 'I have a problem.', '2022-08-03 12:39:56');
INSERT INTO `bz_ticket_chat` VALUES (8, 2, 1, 'I can solve it.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (9, 3, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (10, 4, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (11, 5, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (12, 6, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (13, 7, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (14, 8, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (15, 9, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (16, 11, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (17, 12, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (18, 13, 0, 'I have a question.', '2022-08-03 12:39:06');
INSERT INTO `bz_ticket_chat` VALUES (21, 3, 1, 'Try again.', '2022-08-03 16:31:45');
INSERT INTO `bz_ticket_chat` VALUES (22, 5, 1, 'Try again.', '2022-08-03 16:34:12');
INSERT INTO `bz_ticket_chat` VALUES (23, 6, 1, 'Try it again.', '2022-08-03 16:38:06');
INSERT INTO `bz_ticket_chat` VALUES (24, 7, 1, 'Try yourself.', '2022-08-03 16:38:54');
INSERT INTO `bz_ticket_chat` VALUES (25, 8, 1, 'Try yourself.', '2022-08-03 16:43:22');

-- ----------------------------
-- Table structure for bz_tickets
-- ----------------------------
DROP TABLE IF EXISTS `bz_tickets`;
CREATE TABLE `bz_tickets`  (
  `tick_id` int(10) NOT NULL,
  `use_id` int(10) NOT NULL,
  `tick_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tick_begin` datetime(0) NOT NULL,
  `tick_end` date NOT NULL,
  `tick_update` datetime(0) NULL DEFAULT NULL,
  `tick_state` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`tick_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_tickets
-- ----------------------------
INSERT INTO `bz_tickets` VALUES (1, 1, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (2, 8, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (3, 13, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (4, 14, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (5, 15, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (6, 16, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (7, 17, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (8, 18, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (9, 19, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);
INSERT INTO `bz_tickets` VALUES (10, 22, 'I have a question.', '2022-08-01 06:59:16', '2022-08-18', '2022-08-01 06:59:16', 0);

-- ----------------------------
-- Table structure for bz_users
-- ----------------------------
DROP TABLE IF EXISTS `bz_users`;
CREATE TABLE `bz_users`  (
  `use_id` int(11) NOT NULL AUTO_INCREMENT,
  `ust_id` int(11) NOT NULL,
  `use_fname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_mname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `use_lname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_father_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `use_mother_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `use_birthday` date NOT NULL,
  `use_gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `use_status` int(11) NOT NULL,
  `use_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`use_id`) USING BTREE,
  UNIQUE INDEX `use_username`(`use_username`) USING BTREE,
  UNIQUE INDEX `use_email`(`use_email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_users
-- ----------------------------
INSERT INTO `bz_users` VALUES (1, 2, 'Ranjan', '', 'Techwer', 'admin@admin.com', 'admin', 'admin123', 'Ranjan', 'Ranjan', '1990-03-31', 'male', '1.jpg', 'Ranjan', 0, '2022-08-04 02:35:43');
INSERT INTO `bz_users` VALUES (8, 3, 'Saira', ' ', 'Khan', 'wali@gmail.com', '814', '40919839', 'Wali Khan', 'Tahmeena Khan', '2022-04-28', 'female', '2.jpg', 'Islamabad Pakistan', 0, '2022-08-03 20:02:20');
INSERT INTO `bz_users` VALUES (9, 4, 'Sheriyar', 'Ahmad', 'Khan', 'kashif@gmail.com', '420', '24093450', 'Kashif Khan', 'Saira Khan', '2022-04-27', 'male', '3.jpg', 'Multan Pakistan', 0, '2022-08-03 20:02:24');
INSERT INTO `bz_users` VALUES (11, 1, 'Admin', '', 'Admin', 'superadmin@admin.com', 'superadmin', 'admin123', 'Ranjan', 'Ranjan', '1996-03-31', 'male', '4.jpg', 'Ranjan House', 0, '2022-08-03 20:02:26');
INSERT INTO `bz_users` VALUES (13, 4, 'Arisha', ' ', 'Kashif', 'kashif2@gmail.com', '673', '48560691', 'Kashif Abas', 'Humaira Farooq', '2022-04-13', 'female', '5.jpg', 'Multan Pakistan', 0, '2022-08-03 20:02:29');
INSERT INTO `bz_users` VALUES (14, 2, 'Naem', 'Khanrty', 'Abdali', 'naeem@admin.com', '721', '46466129', 'Naeem Khan', 'Mrs. Naeem ', '2022-05-20', 'male', '6.jpg', 'Bahria', 0, '2022-08-04 02:28:08');
INSERT INTO `bz_users` VALUES (16, 4, 'Bunny', 'rt', '7', 'testtesttest@test.com', '611', '23104966', 'test', 'test', '2022-12-31', 'female', '7.jpg', 'test', 0, '2022-08-03 23:59:19');
INSERT INTO `bz_users` VALUES (17, 2, 'Tahir', 'Abas', 'khan', 'ABC@AB.COM', '671', '32900910', 'ABC', 'xyzAB', '2022-12-31', 'male', '8.jpg', 'address here', 0, '2022-08-03 23:59:23');
INSERT INTO `bz_users` VALUES (18, 4, 'ABHINEET', 'A', 'RANJAN', 'ABHINEET@GMAIL.COM', '409', '95220382', 'hd', 'ma', '2022-12-22', 'male', '9.jpg', '8C, TOWER 2, POCKET A, HIG FLATS, EXPRESS VIEW APARTMENT, SECTOR-105, NOIDA', 0, '2022-08-03 23:59:28');
INSERT INTO `bz_users` VALUES (19, 4, 'Danish', 's', 'Khan', 'abc@gmail.com', '154', '47464216', 'Mr. Khan', 'Mrs. Khan', '2021-12-27', 'male', '10.jpg', 'Ankleshwar', 0, '2022-08-03 23:59:32');
INSERT INTO `bz_users` VALUES (22, 3, 'Monika', 'm', 'Singh', 'Abc1@gmail.com', '803', '65433903', 'TT', 'SS', '2014-12-29', 'female', '11.jpg', 'Ankleshwar', 0, '2022-08-03 23:59:48');
INSERT INTO `bz_users` VALUES (34, 2, 'rty', 'rty', 'rty', '123@adsf.com', 'school2022081720', '44826516', NULL, NULL, '2022-08-08', 'male', '12.jpg', '123', 0, '2022-08-03 23:59:44');

-- ----------------------------
-- Table structure for bz_users_docs
-- ----------------------------
DROP TABLE IF EXISTS `bz_users_docs`;
CREATE TABLE `bz_users_docs`  (
  `udo_id` int(11) NOT NULL AUTO_INCREMENT,
  `use_id` int(11) NOT NULL,
  `udo_file` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `udo_filename` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `udo_entrytime` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`udo_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bz_users_types
-- ----------------------------
DROP TABLE IF EXISTS `bz_users_types`;
CREATE TABLE `bz_users_types`  (
  `ust_id` int(11) NOT NULL AUTO_INCREMENT,
  `ust_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ust_base` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ust_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bz_users_types
-- ----------------------------
INSERT INTO `bz_users_types` VALUES (1, 'Super Admin', '');
INSERT INTO `bz_users_types` VALUES (2, 'Admin', 'bz_admins');
INSERT INTO `bz_users_types` VALUES (3, 'Teacher', 'bz_teachers');
INSERT INTO `bz_users_types` VALUES (4, 'Student', 'bz_students');

SET FOREIGN_KEY_CHECKS = 1;
