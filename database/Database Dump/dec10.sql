-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_breakthrough`
--
CREATE DATABASE IF NOT EXISTS `db_breakthrough` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_breakthrough`;

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessmentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `badge`
--

CREATE TABLE `badge` (
  `badgeID` int(11) NOT NULL,
  `imageURL` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `sectionSubjectID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `userID`, `sectionSubjectID`, `postID`, `content`, `created_at`, `updated_at`, `status`) VALUES
(8, 19, 120, 21, 'comment', '2022-12-10 04:40:07', '2022-12-10 04:40:07', 'active'),
(9, 19, 120, 21, 'new comment', '2022-12-10 04:42:42', '2022-12-10 04:42:42', 'active'),
(10, 19, 120, 21, 'thanks!', '2022-12-10 04:43:44', '2022-12-10 04:43:44', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `conferenceID` int(11) NOT NULL,
  `subjectID` int(11) NOT NULL,
  `roomMaster` int(11) NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 100,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `conference_session`
--

CREATE TABLE `conference_session` (
  `conferenceSessionID` int(11) NOT NULL,
  `conferenceID` int(11) NOT NULL,
  `startDateTime` datetime NOT NULL,
  `endDateTime` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `conference_session_attendance`
--

CREATE TABLE `conference_session_attendance` (
  `conferenceSessionAttendanceID` int(11) NOT NULL,
  `conferenceSessionID` int(11) NOT NULL,
  `participantID` bigint(11) UNSIGNED NOT NULL,
  `joinedDateTime` datetime NOT NULL,
  `leaveDateTime` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contents_events`
--

CREATE TABLE `contents_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents_events`
--

INSERT INTO `contents_events` (`id`, `name`, `date`, `time`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'School Foundation', '2022-12-14', '08:00', 'Celebrating founding anniversary', '2022-12-05 23:51:36', '2022-12-05 23:51:36'),
(2, 'Christmas Presentation', '2022-12-17', '07:00', 'Christmas in Town', '2022-12-05 23:53:17', '2022-12-05 23:53:17'),
(3, 'Year End Party', '2022-12-31', '12:00', 'New Year Party', '2022-12-09 19:35:23', '2022-12-09 19:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `curriculumID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gradeLevel` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curriculumID`, `name`, `gradeLevel`, `created_at`, `updated_at`, `status`) VALUES
(5, '2022-2023 Grade 7 Curriculum', 7, '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(6, '2022-2023 Grade 8 Curriculum', 8, '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(7, '2022-2023 Grade 9 Curriculum', 9, '2022-12-02 11:44:26', '2022-12-02 11:44:26', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum_subject`
--

CREATE TABLE `curriculum_subject` (
  `curriculumSubjectID` int(11) NOT NULL,
  `curriculumID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subjectShorthand` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculum_subject`
--

INSERT INTO `curriculum_subject` (`curriculumSubjectID`, `curriculumID`, `name`, `subjectShorthand`, `description`, `created_at`, `updated_at`, `status`) VALUES
(17, 5, 'Science 7', 'SCI7', 'Science Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(18, 5, 'Mathematics 7', 'MAT7', 'Math Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(19, 5, 'English 7', 'ENG7', 'English Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(20, 5, 'Filipino 7', 'FIL7', 'Filipino Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(21, 5, 'Music, Arts, PE & Health 7', 'MAPEH7', 'MAPEH Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(22, 5, 'Araling Panlipunan 7', 'AP7', 'History Subject', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(23, 5, 'Edukasyong Pagpapakatao 7', 'EP7', 'Values Education', '2022-12-02 06:34:23', '2022-12-02 06:34:23', 'active'),
(24, 6, 'Science 8', 'SCI8', 'Science Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(25, 6, 'Mathematics 8', 'MAT8', 'Math Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(26, 6, 'English 8', 'ENG8', 'English Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(27, 6, 'Filipino 8', 'FIL8', 'Filipino Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(28, 6, 'Music, Arts, PE & Health 8', 'MAPEH8', 'MAPEH Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(29, 6, 'Araling Panlipunan 8', 'AP8', 'History Subject', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(30, 6, 'Edukasyong Pagpapakatao 8', 'EP8', 'Values Education', '2022-12-02 06:35:26', '2022-12-02 06:35:26', 'active'),
(31, 7, 'Science 9', 'SCI9', 'Science Subject', '2022-12-02 11:44:26', '2022-12-02 11:44:26', 'active'),
(32, 7, 'Mathematics 9', 'MAT9', 'Math Subject', '2022-12-02 11:44:26', '2022-12-02 11:44:26', 'active'),
(33, 7, 'English 9', 'ENG9', 'English Subject', '2022-12-02 11:44:26', '2022-12-02 11:44:26', 'active'),
(34, 7, 'Filipino 9', 'FIL9', 'Filipino Subject', '2022-12-02 11:44:26', '2022-12-02 11:44:26', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learning_material`
--

CREATE TABLE `learning_material` (
  `materialID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fileURL` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_04_080755_create_contents_events_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(11) NOT NULL,
  `userID` bigint(11) UNSIGNED NOT NULL,
  `notificationType` int(11) NOT NULL,
  `isRead` tinyint(1) NOT NULL DEFAULT 0,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posted_assessment`
--

CREATE TABLE `posted_assessment` (
  `postedAssessmentID` int(11) NOT NULL,
  `assessmentID` int(11) NOT NULL,
  `subjectID` int(11) NOT NULL,
  `startDateTime` datetime DEFAULT NULL,
  `durationInSecond` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posted_material`
--

CREATE TABLE `posted_material` (
  `postedMaterialID` int(11) NOT NULL,
  `materialID` int(11) NOT NULL,
  `subjectID` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_thread`
--

CREATE TABLE `post_thread` (
  `postID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `sectionSubjectID` int(11) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `file_url` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_thread`
--

INSERT INTO `post_thread` (`postID`, `userID`, `sectionSubjectID`, `content`, `file_url`, `created_at`, `updated_at`, `status`) VALUES
(19, 19, NULL, 'cxxcxcx', NULL, '2022-12-06 03:04:23', '2022-12-06 03:04:23', 'active'),
(20, 19, NULL, 'Affection', NULL, '2022-12-06 03:05:03', '2022-12-06 03:05:03', 'active'),
(21, 19, 120, 'asdsad', NULL, '2022-12-01 03:35:34', '2022-12-06 03:35:34', 'active'),
(22, 19, 120, 'sadsadsad', NULL, '2022-12-06 03:42:31', '2022-12-06 03:42:31', 'active'),
(23, 19, 120, 'sadasdadsa', NULL, '2022-12-06 05:25:11', '2022-12-06 05:25:11', 'active'),
(24, 19, 120, 'zxcxzcxzcxzczxc', NULL, '2022-12-06 05:27:00', '2022-12-06 05:27:00', 'active'),
(25, 19, 120, 'Test something new', NULL, '2022-12-06 05:56:03', '2022-12-06 05:56:03', 'active'),
(26, 19, 120, 'stress', NULL, '2022-12-06 05:56:50', '2022-12-06 05:56:50', 'active'),
(27, 19, 120, 'This is me', NULL, '2022-12-06 08:28:27', '2022-12-06 08:28:27', 'active'),
(28, 19, 120, 'Prepare for your quiz.', NULL, '2022-12-10 04:44:30', '2022-12-10 04:44:30', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `sampleID` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE `schooladmin` (
  `schooladminID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `schoolYearID` int(11) NOT NULL,
  `curriculumID` int(11) DEFAULT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`schoolYearID`, `curriculumID`, `start`, `end`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, '2022-08', '2023-05', '2022-12-01 06:30:32', '2022-12-01 06:30:32', 'active'),
(2, NULL, '2023-08', '2024-05', '2022-12-02 11:42:07', '2022-12-02 11:42:07', 'active'),
(3, NULL, '2023-01', '2023-12', '2022-12-09 15:38:09', '2022-12-09 15:38:09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gradeLevel` varchar(255) NOT NULL,
  `schoolYearID` int(11) NOT NULL,
  `teacherID` int(11) DEFAULT NULL,
  `curriculumID` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `name`, `gradeLevel`, `schoolYearID`, `teacherID`, `curriculumID`, `created_at`, `updated_at`, `status`) VALUES
(19, 'Affection', '7', 1, 3, NULL, '2022-12-02 06:37:14', '2022-12-02 07:29:28', 'active'),
(20, 'Charity', '7', 1, 4, NULL, '2022-12-02 06:37:14', '2022-12-02 07:29:44', 'active'),
(21, NULL, '8', 1, NULL, NULL, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'active'),
(22, NULL, '8', 1, NULL, NULL, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'active'),
(23, NULL, '8', 1, NULL, NULL, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'active'),
(24, NULL, '9', 1, NULL, NULL, '2022-12-02 11:47:08', '2022-12-02 11:47:08', 'active'),
(25, NULL, '9', 1, NULL, NULL, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'active'),
(26, NULL, '9', 1, NULL, NULL, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'active'),
(27, 'Benevolence', '7', 1, 5, NULL, '2022-12-02 11:47:42', '2022-12-02 11:48:07', 'active'),
(28, 'Cheerful', '7', 1, 8, NULL, '2022-12-06 00:01:13', '2022-12-10 03:14:25', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `section_student`
--

CREATE TABLE `section_student` (
  `id` int(11) NOT NULL,
  `sectionID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_student`
--

INSERT INTO `section_student` (`id`, `sectionID`, `studentID`, `created_at`, `updated_at`, `status`) VALUES
(4, 19, 3, '2022-12-02 06:40:26', '2022-12-02 06:40:26', 'active'),
(5, 19, 4, '2022-12-02 06:40:26', '2022-12-02 06:40:26', 'active'),
(6, 20, 5, '2022-12-02 07:30:06', '2022-12-02 07:30:06', 'active'),
(7, 27, 4, '2022-12-02 11:50:11', '2022-12-02 11:50:11', 'active'),
(8, 27, 5, '2022-12-02 11:50:11', '2022-12-02 11:50:11', 'active'),
(9, 28, 5, '2022-12-10 03:15:07', '2022-12-10 03:15:07', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `section_subject`
--

CREATE TABLE `section_subject` (
  `sectionSubjectID` int(11) NOT NULL,
  `teacherID` int(11) DEFAULT NULL,
  `sectionID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gradeLevel` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_subject`
--

INSERT INTO `section_subject` (`sectionSubjectID`, `teacherID`, `sectionID`, `name`, `gradeLevel`, `created_at`, `updated_at`, `status`) VALUES
(120, 3, 19, 'SCI7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(121, 4, 19, 'MAT7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(122, 5, 19, 'ENG7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(123, 6, 19, 'FIL7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(124, 7, 19, 'MAPEH7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(125, 8, 19, 'AP7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(126, 9, 19, 'EP7', 7, '2022-12-02 06:37:14', '2022-12-02 07:26:57', 'status'),
(127, 3, 20, 'SCI7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(128, 4, 20, 'MAT7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(129, 5, 20, 'ENG7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(130, 6, 20, 'FIL7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(131, 7, 20, 'MAPEH7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(132, 8, 20, 'AP7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(133, 9, 20, 'EP7', 7, '2022-12-02 06:37:14', '2022-12-02 07:29:59', 'status'),
(134, NULL, 21, 'SCI8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(135, NULL, 21, 'MAT8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(136, NULL, 21, 'ENG8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(137, NULL, 21, 'FIL8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(138, NULL, 21, 'MAPEH8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(139, NULL, 21, 'AP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(140, NULL, 21, 'EP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(141, NULL, 22, 'SCI8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(142, NULL, 22, 'MAT8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(143, NULL, 22, 'ENG8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(144, NULL, 22, 'FIL8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(145, NULL, 22, 'MAPEH8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(146, NULL, 22, 'AP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(147, NULL, 22, 'EP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(148, NULL, 23, 'SCI8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(149, NULL, 23, 'MAT8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(150, NULL, 23, 'ENG8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(151, NULL, 23, 'FIL8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(152, NULL, 23, 'MAPEH8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(153, NULL, 23, 'AP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(154, NULL, 23, 'EP8', 8, '2022-12-02 06:37:25', '2022-12-02 06:37:25', 'status'),
(155, NULL, 24, 'SCI9', 9, '2022-12-02 11:47:08', '2022-12-02 11:47:08', 'status'),
(156, NULL, 24, 'MAT9', 9, '2022-12-02 11:47:08', '2022-12-02 11:47:08', 'status'),
(157, NULL, 24, 'ENG9', 9, '2022-12-02 11:47:08', '2022-12-02 11:47:08', 'status'),
(158, NULL, 24, 'FIL9', 9, '2022-12-02 11:47:08', '2022-12-02 11:47:08', 'status'),
(159, NULL, 25, 'SCI9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(160, NULL, 25, 'MAT9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(161, NULL, 25, 'ENG9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(162, NULL, 25, 'FIL9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(163, NULL, 26, 'SCI9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(164, NULL, 26, 'MAT9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(165, NULL, 26, 'ENG9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(166, NULL, 26, 'FIL9', 9, '2022-12-02 11:47:09', '2022-12-02 11:47:09', 'status'),
(167, 3, 27, 'SCI7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(168, 4, 27, 'MAT7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(169, 5, 27, 'ENG7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(170, 6, 27, 'FIL7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(171, 7, 27, 'MAPEH7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(172, 8, 27, 'AP7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(173, 9, 27, 'EP7', 7, '2022-12-02 11:47:42', '2022-12-02 11:49:21', 'status'),
(174, 3, 28, 'SCI7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(175, 4, 28, 'MAT7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(176, 5, 28, 'ENG7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(177, 6, 28, 'FIL7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(178, 7, 28, 'MAPEH7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(179, 8, 28, 'AP7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status'),
(180, 9, 28, 'EP7', 7, '2022-12-06 00:01:13', '2022-12-10 03:14:56', 'status');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `gradeLevel` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `userID`, `firstName`, `middleName`, `lastName`, `gradeLevel`, `gender`, `imageURL`, `created_at`, `updated_at`, `status`) VALUES
(3, 20, 'James Matthew', 'De Leon', 'Jimenez', 7, 'Male', '', '2022-11-30 10:57:13', '2022-11-30 10:57:13', 'active'),
(4, 21, 'Bianca Lou', 'Cabaluna', 'Mendoza', 7, 'Female', '', '2022-12-01 01:51:51', '2022-12-01 01:51:51', 'active'),
(5, 23, 'Angilica', NULL, 'Asia', 7, 'Female', '', '2022-12-02 01:59:51', '2022-12-02 01:59:51', 'active'),
(6, 31, 'Lougen', 'De Saliza', 'Morales', 8, 'Male', '', '2022-12-02 11:39:09', '2022-12-02 11:39:09', 'active'),
(7, 32, 'Vincent Charles', 'Olalo', 'Nobo', 8, 'Male', '', '2022-12-08 01:11:37', '2022-12-08 01:11:37', 'active'),
(8, 34, 'Edmary', NULL, 'Pambid', 8, 'Female', '', '2022-12-10 03:25:32', '2022-12-10 03:25:32', 'active'),
(9, 36, 'Elven', NULL, 'Sajorda', 9, 'Male', 'Images/students/1670645121.png', '2022-12-10 04:05:21', '2022-12-10 04:05:21', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student_badge`
--

CREATE TABLE `student_badge` (
  `studentBadgeID` int(11) NOT NULL,
  `badgeID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `submissionID` int(11) NOT NULL,
  `postedAssessmentID` int(11) NOT NULL,
  `submittedBy` int(11) NOT NULL,
  `submissionDateTime` datetime DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sysadmin`
--

CREATE TABLE `sysadmin` (
  `sysadminID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(5) DEFAULT NULL,
  `isRootAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sysadmin`
--

INSERT INTO `sysadmin` (`sysadminID`, `userID`, `firstName`, `middleName`, `lastName`, `suffix`, `isRootAdmin`, `created_at`, `updated_at`, `status`) VALUES
(11, 18, 'Jovi', 'Briones', 'Isorena', NULL, 0, '2022-11-30 09:33:08', '2022-11-30 09:33:08', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `employmentStatus` varchar(255) NOT NULL,
  `imageURL` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `userID`, `firstName`, `middleName`, `lastName`, `suffix`, `position`, `employmentStatus`, `imageURL`, `created_at`, `updated_at`, `status`) VALUES
(3, 19, 'Luis Branden', 'Petargue', 'Garo', NULL, 'Master Teacher 1', 'Regular', 'Images/teachers/garo.png', '2022-11-30 10:53:07', '2022-11-30 10:53:07', 'active'),
(4, 22, 'Aira', 'Estalilla', 'Alvarez', NULL, 'Teacher 2', 'Regular', 'Images/teachers/alvarez.png', '2022-12-02 01:27:29', '2022-12-02 01:27:29', 'active'),
(5, 24, 'Gabriel', 'Brome', 'Boctoy', 'Jr', 'Master Teacher 1', 'Regular', 'Images/teachers/boctoy.png', '2022-12-02 06:17:53', '2022-12-02 06:17:53', 'active'),
(6, 25, 'Jhonel', 'Dimamay', 'Camarillo', NULL, 'Teacher 3', 'Regular', 'Images/teachers/camarillo.png', '2022-12-02 06:18:30', '2022-12-02 06:18:30', 'active'),
(7, 26, 'Carl Vincent', 'Paciente', 'Chua', NULL, 'Teacher 3', 'Regular', 'Images/teachers/chua.png', '2022-12-02 06:19:16', '2022-12-02 06:19:16', 'active'),
(8, 27, 'Blekxsy Jean', 'Ancheta', 'Daloso', NULL, 'Teacher 3', 'Regular', 'Images/teachers/daloso.png', '2022-12-02 06:21:13', '2022-12-02 06:21:13', 'active'),
(9, 28, 'Aldrin', 'De Asas', 'Estanislao', NULL, 'Master Teacher 1', 'Regular', 'Images/teachers/estanislao.png', '2022-12-02 06:22:00', '2022-12-02 06:22:00', 'active'),
(10, 29, 'Anna', 'Aquino', 'Manansala', NULL, 'Master Teacher 2', 'Regular', 'Images/teachers/manansala.png', '2022-12-02 06:22:36', '2022-12-02 06:22:36', 'active'),
(14, 39, 'Rochelle', 'Dacoco', 'Songalia', NULL, 'Master Teacher 1', 'Regular', 'Images/teachers/1670646909.png', '2022-12-10 04:35:09', '2022-12-10 04:35:09', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mandatoryChangePassword` tinyint(1) NOT NULL DEFAULT 1,
  `lastLoginAttempt` datetime DEFAULT NULL,
  `loginAttempCount` int(11) DEFAULT NULL,
  `lockedUntil` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mandatoryChangePassword`, `lastLoginAttempt`, `loginAttempCount`, `lockedUntil`, `remember_token`, `role`, `created_at`, `updated_at`, `status`) VALUES
(1, 'test', 'test@gmail.com', NULL, '$2y$10$42OQwM7ojd8tCkXP76HjYeOl7venZjXaD39PVHT9RaNL64R4yB1Aq', 0, NULL, NULL, NULL, NULL, 'sysadmin', '2022-11-22 05:50:47', '2022-11-30 02:47:01', 'active'),
(18, 'Jovi Isorena', 'jovito.isorena.jr1@gmail.com', NULL, '$2y$10$Ag9MF.Klto6o14/XeeTyE.RIpZbnxvkFlmIAGFs8uqhPrR1FBwBEm', 0, NULL, NULL, NULL, NULL, 'sysadmin', '2022-11-30 01:33:08', '2022-12-09 19:20:01', 'active'),
(19, 'Luis Branden Garo', 'luis.branden.petargue.garo@gmail.com', NULL, '$2y$10$pXNjjSNsVRkUaOYHivFEVu3O68CM/N5oVGOsSB3Q1nnbNd3zb2cTK', 0, NULL, NULL, NULL, NULL, 'teacher', '2022-11-30 02:53:07', '2022-11-30 02:54:19', 'active'),
(20, 'James Matthew Jimenez', 'james.matthew.jimenez@gmail.com', NULL, '$2y$10$XUDykgvMiVPUZLFYpJNrbesX6Kz8DuRIouTHc5xWPF9ZjAxicu7Ki', 0, NULL, NULL, NULL, NULL, 'student', '2022-11-30 02:57:13', '2022-11-30 02:58:27', 'active'),
(21, 'Bianca Lou Mendoza', 'bianca.lou.mendoza08152000@gmail.com', NULL, '$2y$10$K/g1VDSnkwqPG0MSc6g6o.vlQWtbTXHz2jDJYi9pN/iJwINYpS9le', 1, NULL, NULL, NULL, NULL, 'student', '2022-11-30 17:51:51', '2022-11-30 17:51:51', 'active'),
(22, 'Aira Alvarez', 'aira.estalilla.alvarez@gmail.com', NULL, '$2y$10$WqO7D4MAHHOXOKpzWzLKwOstDI.3lpB7hIOdXCFEjRjbyfb8MOIQ2', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 17:27:29', '2022-12-01 17:27:29', 'active'),
(23, 'Angilica Asia', 'angilica.asia@gmail.com', NULL, '$2y$10$V4aaOJGE8E0sCbFsLW7zCu9XkbdLu7dR6z.5lkE4vONkW1Wy0T8MC', 1, NULL, NULL, NULL, NULL, 'student', '2022-12-01 17:59:51', '2022-12-01 17:59:51', 'active'),
(24, 'Gabriel Boctoy', 'gabriel.boctoy.jr@gmail.com', NULL, '$2y$10$JwbdJoBE/FTqH6Fd1V4oSuZW718hFTttPt.vgMnveV3RhO33gyVoW', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:17:53', '2022-12-01 22:17:53', 'active'),
(25, 'Jhonel Camarillo', 'jhonel.dimamay.camarillo@gmail.com', NULL, '$2y$10$rQL2IcCaaFVf/4SOjUBBOeQ7JDrb12hZe/ZkW7f1q6zRn8mM6fzZ6', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:18:30', '2022-12-01 22:18:30', 'active'),
(26, 'Carl Vincent Chua', 'carl.vincent.paciente.chua@gmail.com', NULL, '$2y$10$23EDK.Ctpc/dEfK7kxRviO2eLG8c5cVrgsPzPXkBEkh6kt5UJu2t.', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:19:16', '2022-12-01 22:19:16', 'active'),
(27, 'Blekxsy Jean Daloso', 'blekxsy.jean.ancheta.daloso@gmail.com', NULL, '$2y$10$FJRwHO.B3L9GWstkaux8f.DbhigTMSuZGuO6C7bTbSZmz/4f9AIV2', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:21:13', '2022-12-01 22:21:13', 'active'),
(28, 'Aldrin Estanislao', 'aldrin.deasas.estanislao@gmail.com', NULL, '$2y$10$IssbmQc01474t1T3FQ760u0GPSTXfJXyLRxLVx9XWd3wJKI7sHw6u', 0, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:22:00', '2022-12-02 03:35:39', 'active'),
(29, 'Anna Manansala', 'anna.aquino.manansala@gmail.com', NULL, '$2y$10$c5ABJDCbLWO3rRWde8W40OCUZLf9jno3PcG35fwN4BVKu8Ih2YwN2', 0, NULL, NULL, NULL, NULL, 'teacher', '2022-12-01 22:22:36', '2022-12-02 03:34:33', 'active'),
(31, 'Lougen Morales', 'lougen.desaliza.morales@gmail.com', NULL, '$2y$10$NtrCsOYfs7GBIPALq4wvRuuAOvEBYC9b5.qclZM16kccjL4M1Upam', 1, NULL, NULL, NULL, NULL, 'student', '2022-12-02 03:39:09', '2022-12-02 03:39:09', 'active'),
(32, 'Vincent Charles Nobo', 'vincent.charles.nobo@gmail.com', NULL, '$2y$10$DwxQ83u2bVrABnWVfX58x.ww4S2NELZBwBNuRGh0nbLsdGG87Gcpy', 1, NULL, NULL, NULL, NULL, 'student', '2022-12-07 17:11:37', '2022-12-07 18:43:33', 'inactive'),
(34, 'Edmary Pambid', 'edmary.pambid@gmail.com', NULL, '$2y$10$U.BtD2Mosicq7LIKVyeQwOC7TsXPCbdDEhF4lR1zbNBDyZjzGE7FK', 1, NULL, NULL, NULL, NULL, 'student', '2022-12-09 19:25:32', '2022-12-09 19:25:32', 'active'),
(36, 'Elven Sajorda', 'elven.a.sajorda@gmail.com', NULL, '$2y$10$xOzB7/TSFBN7NXcI1CJs2OKutiW3tI/WllXxV6tAXnyO3jA34nLBS', 1, NULL, NULL, NULL, NULL, 'student', '2022-12-09 20:05:21', '2022-12-09 20:05:21', 'active'),
(39, 'Rochelle Songalia', 'rochelle.dacoco.songalia@gmail.com', NULL, '$2y$10$387eq3NN85S4e8JqpMXQy.cBEbcaFUDqbriUoBmpaXh0MSyycILYW', 1, NULL, NULL, NULL, NULL, 'teacher', '2022-12-09 20:35:09', '2022-12-09 20:35:09', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessmentID`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `badge`
--
ALTER TABLE `badge`
  ADD PRIMARY KEY (`badgeID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `ssubjectIID` (`sectionSubjectID`),
  ADD KEY `pID` (`postID`),
  ADD KEY `all_user` (`userID`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`conferenceID`),
  ADD KEY `subjectID` (`subjectID`),
  ADD KEY `roomMaster` (`roomMaster`);

--
-- Indexes for table `conference_session`
--
ALTER TABLE `conference_session`
  ADD PRIMARY KEY (`conferenceSessionID`),
  ADD KEY `conferenceID` (`conferenceID`);

--
-- Indexes for table `conference_session_attendance`
--
ALTER TABLE `conference_session_attendance`
  ADD PRIMARY KEY (`conferenceSessionAttendanceID`),
  ADD KEY `conferenceSessionID` (`conferenceSessionID`),
  ADD KEY `participantID` (`participantID`);

--
-- Indexes for table `contents_events`
--
ALTER TABLE `contents_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`curriculumID`);

--
-- Indexes for table `curriculum_subject`
--
ALTER TABLE `curriculum_subject`
  ADD PRIMARY KEY (`curriculumSubjectID`),
  ADD KEY `curriculumID` (`curriculumID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `learning_material`
--
ALTER TABLE `learning_material`
  ADD PRIMARY KEY (`materialID`),
  ADD KEY `postedBy` (`postedBy`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posted_assessment`
--
ALTER TABLE `posted_assessment`
  ADD PRIMARY KEY (`postedAssessmentID`),
  ADD KEY `assessmentID` (`assessmentID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `posted_material`
--
ALTER TABLE `posted_material`
  ADD PRIMARY KEY (`postedMaterialID`),
  ADD KEY `materialID` (`materialID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `post_thread`
--
ALTER TABLE `post_thread`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `sectionSubjectID_tbl1` (`sectionSubjectID`),
  ADD KEY `userID_tbl1` (`userID`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`sampleID`);

--
-- Indexes for table `schooladmin`
--
ALTER TABLE `schooladmin`
  ADD PRIMARY KEY (`schooladminID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`schoolYearID`),
  ADD KEY `curriculumID` (`curriculumID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionID`),
  ADD KEY `schoolYearID` (`schoolYearID`),
  ADD KEY `teacherID` (`teacherID`);

--
-- Indexes for table `section_student`
--
ALTER TABLE `section_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classID` (`sectionID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `section_subject`
--
ALTER TABLE `section_subject`
  ADD PRIMARY KEY (`sectionSubjectID`),
  ADD KEY `teacherID` (`teacherID`),
  ADD KEY `classID` (`sectionID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `student_badge`
--
ALTER TABLE `student_badge`
  ADD PRIMARY KEY (`studentBadgeID`),
  ADD KEY `badgeID` (`badgeID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`submissionID`),
  ADD KEY `postedAssessmentID` (`postedAssessmentID`),
  ADD KEY `submittedBy` (`submittedBy`);

--
-- Indexes for table `sysadmin`
--
ALTER TABLE `sysadmin`
  ADD PRIMARY KEY (`sysadminID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`),
  ADD KEY `userID` (`userID`);

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
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badge`
--
ALTER TABLE `badge`
  MODIFY `badgeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `conferenceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conference_session`
--
ALTER TABLE `conference_session`
  MODIFY `conferenceSessionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conference_session_attendance`
--
ALTER TABLE `conference_session_attendance`
  MODIFY `conferenceSessionAttendanceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents_events`
--
ALTER TABLE `contents_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `curriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `curriculum_subject`
--
ALTER TABLE `curriculum_subject`
  MODIFY `curriculumSubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_material`
--
ALTER TABLE `learning_material`
  MODIFY `materialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posted_assessment`
--
ALTER TABLE `posted_assessment`
  MODIFY `postedAssessmentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posted_material`
--
ALTER TABLE `posted_material`
  MODIFY `postedMaterialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_thread`
--
ALTER TABLE `post_thread`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `sampleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schooladmin`
--
ALTER TABLE `schooladmin`
  MODIFY `schooladminID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `schoolYearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `section_student`
--
ALTER TABLE `section_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_subject`
--
ALTER TABLE `section_subject`
  MODIFY `sectionSubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_badge`
--
ALTER TABLE `student_badge`
  MODIFY `studentBadgeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `submissionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sysadmin`
--
ALTER TABLE `sysadmin`
  MODIFY `sysadminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `assessment_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post_thread` (`postID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`sectionSubjectID`) REFERENCES `section_subject` (`sectionSubjectID`);

--
-- Constraints for table `conference`
--
ALTER TABLE `conference`
  ADD CONSTRAINT `conference_ibfk_1` FOREIGN KEY (`subjectID`) REFERENCES `section_subject` (`sectionSubjectID`),
  ADD CONSTRAINT `conference_ibfk_2` FOREIGN KEY (`roomMaster`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `conference_session`
--
ALTER TABLE `conference_session`
  ADD CONSTRAINT `conference_session_ibfk_1` FOREIGN KEY (`conferenceID`) REFERENCES `conference` (`conferenceID`);

--
-- Constraints for table `conference_session_attendance`
--
ALTER TABLE `conference_session_attendance`
  ADD CONSTRAINT `conference_session_attendance_ibfk_1` FOREIGN KEY (`conferenceSessionID`) REFERENCES `conference_session` (`conferenceSessionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conference_session_attendance_ibfk_2` FOREIGN KEY (`participantID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `curriculum_subject`
--
ALTER TABLE `curriculum_subject`
  ADD CONSTRAINT `curriculum_subject_ibfk_1` FOREIGN KEY (`curriculumID`) REFERENCES `curriculum` (`curriculumID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learning_material`
--
ALTER TABLE `learning_material`
  ADD CONSTRAINT `learning_material_ibfk_1` FOREIGN KEY (`postedBy`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posted_assessment`
--
ALTER TABLE `posted_assessment`
  ADD CONSTRAINT `posted_assessment_ibfk_1` FOREIGN KEY (`assessmentID`) REFERENCES `assessment` (`assessmentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posted_assessment_ibfk_2` FOREIGN KEY (`subjectID`) REFERENCES `section_subject` (`sectionSubjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posted_material`
--
ALTER TABLE `posted_material`
  ADD CONSTRAINT `posted_material_ibfk_1` FOREIGN KEY (`materialID`) REFERENCES `learning_material` (`materialID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posted_material_ibfk_2` FOREIGN KEY (`subjectID`) REFERENCES `section_subject` (`sectionSubjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_thread`
--
ALTER TABLE `post_thread`
  ADD CONSTRAINT `sectionSubjectID_tbl1` FOREIGN KEY (`sectionSubjectID`) REFERENCES `section_subject` (`sectionSubjectID`),
  ADD CONSTRAINT `userID_tbl1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `schooladmin`
--
ALTER TABLE `schooladmin`
  ADD CONSTRAINT `schooladmin_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD CONSTRAINT `schoolyear_ibfk_1` FOREIGN KEY (`curriculumID`) REFERENCES `curriculum` (`curriculumID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`schoolYearID`) REFERENCES `schoolyear` (`schoolYearID`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`);

--
-- Constraints for table `section_student`
--
ALTER TABLE `section_student`
  ADD CONSTRAINT `section_student_ibfk_1` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`),
  ADD CONSTRAINT `section_student_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `section_subject`
--
ALTER TABLE `section_subject`
  ADD CONSTRAINT `section_subject_ibfk_1` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_subject_ibfk_2` FOREIGN KEY (`teacherID`) REFERENCES `teacher` (`teacherID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_badge`
--
ALTER TABLE `student_badge`
  ADD CONSTRAINT `student_badge_ibfk_1` FOREIGN KEY (`badgeID`) REFERENCES `badge` (`badgeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_badge_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`postedAssessmentID`) REFERENCES `posted_assessment` (`postedAssessmentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submission_ibfk_2` FOREIGN KEY (`submittedBy`) REFERENCES `student` (`studentID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sysadmin`
--
ALTER TABLE `sysadmin`
  ADD CONSTRAINT `sysadmin_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
