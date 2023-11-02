-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 05:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huminivexhrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refers to requier id',
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `primary_contact_no` varchar(20) NOT NULL,
  `p_is_whatsapp` enum('y','n') NOT NULL DEFAULT 'n',
  `s_contact_no` varchar(20) NOT NULL,
  `s_is_whatsapp` enum('y','n') NOT NULL DEFAULT 'n',
  `address` text NOT NULL,
  `e_status` enum('fresher','experience') NOT NULL DEFAULT 'fresher',
  `current_job_title` varchar(255) NOT NULL,
  `w_field_experience` varchar(255) NOT NULL,
  `total_experience` varchar(11) NOT NULL,
  `relevent_experience` int(11) NOT NULL,
  `c_salary` varchar(10) NOT NULL,
  `notice_period` int(11) NOT NULL,
  `skills` text NOT NULL,
  `c_references` varchar(255) NOT NULL,
  `post_applied_for` varchar(255) NOT NULL,
  `joining_period` varchar(255) NOT NULL,
  `shortlisted_for` int(11) NOT NULL,
  `salary_expectations` varchar(15) NOT NULL,
  `work_location` varchar(100) NOT NULL,
  `additionalcomments` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `certifications` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `admin_id`, `fname`, `lname`, `email`, `location`, `primary_contact_no`, `p_is_whatsapp`, `s_contact_no`, `s_is_whatsapp`, `address`, `e_status`, `current_job_title`, `w_field_experience`, `total_experience`, `relevent_experience`, `c_salary`, `notice_period`, `skills`, `c_references`, `post_applied_for`, `joining_period`, `shortlisted_for`, `salary_expectations`, `work_location`, `additionalcomments`, `resume`, `certifications`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(33, 1, 'harsh', 'mourya', 'harsh1424@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'fresher', '', '', '', 0, '', 0, '[\"1\",\"2\",\"3\",\"9\",\"12\"]', 'Linkedin', 'developer', 'Select joining period', 25, '20000', 'WFH', '<p>We are testing.</p>', '1698392922.pdf', '1698392922.pdf', 1, 0, '2023-10-27 09:48:41', '2023-10-27 09:48:41'),
(34, 1, 'harsh', 'mourya', 'harsh@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'fresher', '', '', '', 0, '', 0, '[\"1\",\"2\",\"3\"]', 'Linkedin', 'web developer', '15 days', 24, '20000', 'WFH', 'good work', '', '', 1, 0, '2023-10-30 06:44:22', '2023-10-30 06:44:22'),
(35, 1, 'harsh', 'mourya', 'harsh1@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'fresher', '', '', '', 0, '', 0, '[\"11\", \"12\"]', 'Linkedin', 'Nodejs developer', '1 Month', 24, '30000', 'WFH', 'good work', '', '', 1, 0, '2023-10-30 08:04:59', '2023-10-30 08:04:59'),
(36, 1, 'harsh', 'mourya', 'harsh3@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'fresher', '', '', '', 0, '', 0, '[\"8\"]', 'Linkedin', 'angular developer', '15 days', 24, '20000', 'WFH', 'good developer', '', '', 1, 0, '2023-10-30 11:51:15', '2023-10-30 11:51:15'),
(37, 1, 'harsh', 'mourya', 'harsh4@elinsys.com', 'ahmedabad', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'fresher', '', '', '', 0, '', 0, '[\"11\"]', 'Linkedin', 'viewjs developer', '15 days', 25, '30000', 'WFH', 'good developer', '', '', 1, 0, '2023-10-30 11:56:05', '2023-10-30 11:56:05'),
(38, 1, 'harsh', 'mourya', 'harsh5@elinsys.com', 'ahmedabad', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'web developer', 'web development', '4', 4, '20000', 60, '[\"11\"]', 'Linkedin', 'viewjs developer', '2 Month', 28, '20000', 'WFH', 'web development', '', '', 1, 0, '2023-10-30 13:35:28', '2023-10-30 13:35:28'),
(39, 1, 'john', 'singh', 'john@gmail.com', 'mumbai', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'java developer', 'web development', '2', 2, '10000', 60, '[\"7\"]', 'Linkedin', 'java developer', '1 Month', 28, '20000', 'WFH', 'good deeveloper', '', '', 1, 0, '2023-10-30 13:40:45', '2023-10-30 13:40:45'),
(40, 1, 'harsh1', 'mourya', 'harsh6@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'php developer', 'web development', '1', 1, '10000', 60, '[\"1\"]', 'Linkedin', 'php developer', '1 Month', 24, '20000', 'WFH', 'good work', '', '', 1, 0, '2023-10-31 06:13:46', '2023-10-31 06:13:46'),
(41, 1, 'harsh2', 'mourya', 'harsh7@elinsys.com', 'mumbai', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'java developer', 'web development', '2', 2, '10000', 60, '[\"7\"]', 'Linkedin', 'java developer', '15 days', 25, '20000', 'WFH', 'need a good developer', '', '', 1, 0, '2023-10-31 07:49:16', '2023-10-31 07:49:16'),
(42, 1, 'harsh3', 'mourya', 'harsh8@elinsys.com', 'delhi', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'PHP Developer', 'web development', '3', 3, '20000', 60, '[\"1\"]', 'Linkedin', 'php developer', '1 Month', 28, '20000', 'WFH', 'good developer', '', '', 1, 0, '2023-10-31 07:53:04', '2023-10-31 07:53:04'),
(43, 1, 'harsh', 'mourya', 'harsh9@elinsys.com', 'mumbai', '344345325234', 'y', '34434532523', 'y', 'TT Nagar', 'experience', 'java Developer', 'web development', '2', 2, '10000', 50, '[\"7\"]', 'Linkedin', 'java developer', '2 Month', 28, '20000', 'WFH', 'good developer', '', '', 1, 0, '2023-10-31 12:40:11', '2023-10-31 12:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to require id',
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `comapny_size` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_person_name` varchar(255) NOT NULL,
  `website_url` varchar(150) NOT NULL,
  `company_over_view` text NOT NULL,
  `mission_value` varchar(255) NOT NULL,
  `current_job_openings` varchar(255) NOT NULL,
  `working_days` int(11) NOT NULL,
  `e_benifits` text NOT NULL,
  `company_culture` text NOT NULL,
  `social_responsibility` text NOT NULL,
  `diversity_inclusion` text NOT NULL,
  `testimonials` text NOT NULL,
  `additional_comments` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_delete` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `admin_id`, `user_id`, `company_name`, `email`, `password`, `mobile_no`, `industry_id`, `comapny_size`, `location`, `contact_person_name`, `website_url`, `company_over_view`, `mission_value`, `current_job_openings`, `working_days`, `e_benifits`, `company_culture`, `social_responsibility`, `diversity_inclusion`, `testimonials`, `additional_comments`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'harsh', 'harsh11@elinsys.com', '', '232342342242', 3, '10-20 employees', 'delhi', '34534535243', 'https://www.w3schools.com/php/func_filesystem_file_exists.asp', '<p>ITs a good company</p>', 'ITs a good company', '5', 5, '<p>ITs a good company</p>', '<p>ITs a good company</p>', '<p>ITs a good company</p>', '<p>cITs a good companyITs a good company</p>', '<p>ITs a good company</p>', '<p>ITs a good company</p>', 1, 0, '2023-10-23 06:56:31', '2023-10-25 10:13:20'),
(23, 1, 29, 'new world', 'harsh1@elinsys.com', '#1a2h2r33$5', '232342342242', 2, '10-20 employees', 'delhi', '923094020439', 'https://www.w3schools.com/php/func_filesystem_file_exists.asp', '<p>good work</p>', 'good work and life balance', '5', 5, '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', 1, 0, '2023-10-23 15:54:08', '2023-10-23 15:54:08'),
(24, 1, 30, 'facebook', 'facebook@elinsys.com', '96203fac$2#', '232342342242', 3, '10-20 employees', 'New Delhi', '34534535243', 'https://www.w3schools.com/php/func_filesystem_file_exists.asp', '<p>good work</p>', 'good work and life balance', '5', 5, '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', 1, 0, '2023-10-23 15:59:20', '2023-10-25 07:01:39'),
(25, 1, 31, 'new world', 'harsh@elinsys.com', '23ah#$2r882', '232342342242', 1, '50-100 employees', 'delhi', '923094020439', 'https://www.w3schools.com/php/func_filesystem_file_exists.asp', '<p>good campus</p>', 'good work and life balance', '5', 5, '<p>good campus</p>', '<p>good campus</p>', '<p>good campus</p>', '<p>good campus</p>', '<p>good campus</p>', '<p>good campus</p>', 1, 0, '2023-10-25 07:37:37', '2023-10-25 10:39:44'),
(27, 1, 34, 'new world', 'harsh2@elinsys.com', '28ah26r3$#7', '232342342242', 3, '10-20 employees', 'delhi', '34534535243', 'https://www.w3schools.com/php/php_sessions.asp', '<p>work is good</p>', 'good work and life balance', '5', 5, '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', 1, 0, '2023-10-25 10:45:32', '2023-10-25 10:45:32'),
(28, 1, 36, 'new world', 'harsh12@elinsys.com', 'h2$r3552a#3', '232342342242', 1, '50-100 employees', 'delhi', '34534535243', 'https://www.w3schools.com/php/func_filesystem_file_exists.asp', '<p>good work place</p>', 'good work and life balance', '5', 5, '<p>good work place</p>', '<p>good work place</p>', '<p>good work place</p>', '<p>good work place</p>', '<p>good work place</p>', '<p>good work place</p>', 1, 0, '2023-10-25 11:29:05', '2023-10-25 11:33:02'),
(29, 1, 38, '', 'harsh@elinsys.com', 'a$0#6r4h', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 1, 0, '2023-11-01 11:24:14', '2023-11-01 11:24:14'),
(30, 1, 39, '27', '', '1$34#', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 1, 0, '2023-11-01 13:18:56', '2023-11-01 13:18:56'),
(31, 1, 40, '28', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 1, 0, '2023-11-01 13:35:49', '2023-11-01 13:35:49'),
(32, 1, 43, '28', '', '87$#4', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', 1, 0, '2023-11-01 13:52:07', '2023-11-01 13:52:07'),
(33, 1, 46, 'new world2', 'harsh21@elinsys.com', '$r12#7h3a25', '232342342242', 1, '100-500 employees', 'delhi', '34534535243', 'https://www.w3schools.com/php/php_sessions.asp', '<p>good work</p>', 'good work and life balance', '10', 5, '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', '<p>good work</p>', 1, 0, '2023-11-02 05:44:29', '2023-11-02 05:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `company_shifts`
--

CREATE TABLE `company_shifts` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to require id',
  `company_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `stime` varchar(50) NOT NULL,
  `etime` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_shifts`
--

INSERT INTO `company_shifts` (`id`, `admin_id`, `company_id`, `title`, `stime`, `etime`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'day', '10:00', '07:00', '2023-10-23 07:47:08', '2023-10-23 07:47:08'),
(3, 1, 4, 'day', '10:00', '07:00', '2023-10-23 08:06:10', '2023-10-23 08:06:10'),
(4, 1, 5, 'day', '10:00', '07:00', '2023-10-23 09:03:58', '2023-10-23 09:03:58'),
(5, 1, 6, 'day', '10:00', '07:00', '2023-10-23 10:09:23', '2023-10-23 10:09:23'),
(6, 1, 7, 'day', '10:00', '07:00', '2023-10-23 10:09:29', '2023-10-23 10:09:29'),
(7, 1, 8, 'day', '10:00', '07:00', '2023-10-23 10:11:01', '2023-10-23 10:11:01'),
(8, 1, 9, 'day', '10:00', '07:00', '2023-10-23 10:11:33', '2023-10-23 10:11:33'),
(9, 1, 10, 'day', '10:00', '07:00', '2023-10-23 10:12:16', '2023-10-23 10:12:16'),
(10, 1, 11, 'day', '10:00', '07:00', '2023-10-23 10:17:43', '2023-10-23 10:17:43'),
(11, 1, 12, 'day', '10:00', '07:10', '2023-10-23 10:34:27', '2023-10-23 10:34:27'),
(12, 1, 13, 'day', '10:00', '07:10', '2023-10-23 10:34:53', '2023-10-23 10:34:53'),
(13, 1, 14, 'day', '10:00', '07:00', '2023-10-23 10:36:44', '2023-10-23 10:36:44'),
(14, 1, 15, 'day', '10:00', '07:00', '2023-10-23 10:37:28', '2023-10-23 10:37:28'),
(15, 1, 16, 'day', '10:00', '07:00', '2023-10-23 11:17:05', '2023-10-23 11:17:05'),
(16, 1, 17, 'day', '10:00', '07:00', '2023-10-23 11:17:30', '2023-10-23 11:17:30'),
(17, 1, 18, 'day', '10:00', '07:00', '2023-10-23 11:26:32', '2023-10-23 11:26:32'),
(18, 1, 19, 'day', '10:00', '07:00', '2023-10-23 11:29:29', '2023-10-23 11:29:29'),
(19, 1, 20, 'day', '10:00', '07:00', '2023-10-23 11:29:51', '2023-10-23 11:29:51'),
(20, 1, 21, 'day', '10:00', '07:00', '2023-10-23 11:49:43', '2023-10-23 11:49:43'),
(21, 1, 22, 'day', '10:00', '07:00', '2023-10-23 11:51:37', '2023-10-23 11:51:37'),
(22, 1, 23, 'day', '10:00', '07:00', '2023-10-23 15:54:08', '2023-10-23 15:54:08'),
(26, 0, 24, 'day', '10:00', '07:00', '2023-10-25 07:01:39', '2023-10-25 07:01:39'),
(29, 0, 1, 'day', '10:00', '07:00', '2023-10-25 10:13:20', '2023-10-25 10:13:20'),
(30, 0, 26, 'day', '10:00', '07:00', '2023-10-25 10:28:00', '2023-10-25 10:28:00'),
(35, 0, 25, 'day', '10:00', '07:00', '2023-10-25 10:39:44', '2023-10-25 10:39:44'),
(36, 1, 27, 'day', '10:00', '07:00', '2023-10-25 10:45:32', '2023-10-25 10:45:32'),
(39, 0, 28, 'day', '10:00', '07:00', '2023-10-25 11:33:02', '2023-10-25 11:33:02'),
(40, 1, 33, 'day', '10:00', '07:00', '2023-11-02 05:44:29', '2023-11-02 05:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to reuire id',
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_contact_no` varchar(15) NOT NULL,
  `s_contact_no` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(150) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `admin_id`, `user_id`, `fname`, `lname`, `email`, `p_contact_no`, `s_contact_no`, `dob`, `password`, `designation`, `role_id`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Ronit', 'singh', 'ronit@gmail.com', '6767676754', '34434532523', '2023-10-09', '202cb962ac59075b964b07152d234b70', 'php developer', 1, 1, 0, '2023-10-23 07:09:07', '2023-10-23 07:09:07'),
(3, 1, 5, 'john', 'singh', 'john@gmail.com', '6767676754', '34434532523', '2023-10-03', '202cb962ac59075b964b07152d234b70', 'php developer', 1, 1, 0, '2023-10-23 07:21:26', '2023-10-23 07:21:26'),
(4, 1, 6, 'harshit', 'mourya', 'harshit@gmail.com', '6767676754', '34434532523', '2023-10-16', '123', 'php developer', 1, 1, 0, '2023-10-23 07:31:33', '2023-10-25 09:20:34'),
(5, 1, 28, 'harsh', 'mourya', 'harsh@gmail.com', '6767676754', '34434532523', '2023-10-12', '123', 'php developer', 1, 1, 0, '2023-10-23 13:18:35', '2023-10-25 11:15:15'),
(8, 1, 37, 'harsh', 'mourya', 'harsh12@gmail.com', '6767676754', '34434532523', '2023-10-14', '123', 'php developer', 1, 1, 0, '2023-10-25 11:34:24', '2023-10-25 11:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `candidate_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `start_d` date NOT NULL,
  `end_d` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `admin_id`, `candidate_id`, `company_name`, `job_title`, `start_d`, `end_d`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', '', '0000-00-00', '0000-00-00', '2023-10-23 07:00:06', '2023-10-23 07:00:06'),
(2, 1, 2, 'Amazon', 'web development', '2022-01-23', '2023-10-29', '2023-10-23 07:06:07', '2023-10-23 07:06:07'),
(3, 1, 2, 'facebook', 'web development', '2021-01-23', '2022-01-23', '2023-10-23 07:06:07', '2023-10-23 07:06:07'),
(4, 1, 3, '', '', '0000-00-00', '0000-00-00', '2023-10-23 09:15:47', '2023-10-23 09:15:47'),
(5, 1, 4, '', '', '0000-00-00', '0000-00-00', '2023-10-23 16:02:34', '2023-10-23 16:02:34'),
(6, 1, 5, '', '', '0000-00-00', '0000-00-00', '2023-10-23 16:03:30', '2023-10-23 16:03:30'),
(7, 1, 6, '', '', '0000-00-00', '0000-00-00', '2023-10-25 06:56:17', '2023-10-25 06:56:17'),
(8, 1, 7, '', '', '0000-00-00', '0000-00-00', '2023-10-25 06:56:40', '2023-10-25 06:56:40'),
(9, 1, 8, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:04:23', '2023-10-25 07:04:23'),
(10, 1, 9, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:05:14', '2023-10-25 07:05:14'),
(11, 1, 10, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:06:55', '2023-10-25 07:06:55'),
(12, 1, 11, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:08:10', '2023-10-25 07:08:10'),
(13, 1, 12, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:09:41', '2023-10-25 07:09:41'),
(14, 1, 13, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:44:39', '2023-10-25 07:44:39'),
(15, 1, 14, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:46:18', '2023-10-25 07:46:18'),
(16, 1, 15, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:52:55', '2023-10-25 07:52:55'),
(17, 1, 16, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:57:41', '2023-10-25 07:57:41'),
(18, 1, 17, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:59:09', '2023-10-25 07:59:09'),
(19, 1, 18, '', '', '0000-00-00', '0000-00-00', '2023-10-25 07:59:31', '2023-10-25 07:59:31'),
(21, 0, 19, '', '', '0000-00-00', '0000-00-00', '2023-10-25 08:21:43', '2023-10-25 08:21:43'),
(22, 1, 20, '', '', '0000-00-00', '0000-00-00', '2023-10-25 09:29:12', '2023-10-25 09:29:12'),
(23, 1, 21, '', '', '0000-00-00', '0000-00-00', '2023-10-25 09:31:28', '2023-10-25 09:31:28'),
(28, 1, 23, 'Amazon', 'web development', '2022-02-12', '2023-01-11', '2023-10-25 12:57:44', '2023-10-25 12:57:44'),
(33, 0, 24, 'Amazon', 'web development', '2022-02-12', '2023-01-11', '2023-10-25 13:07:54', '2023-10-25 13:07:54'),
(34, 0, 22, '', '', '0000-00-00', '0000-00-00', '2023-10-25 13:08:56', '2023-10-25 13:08:56'),
(35, 1, 25, 'Amazon', 'web development', '2022-01-29', '2023-10-11', '2023-10-25 13:11:42', '2023-10-25 13:11:42'),
(36, 1, 26, 'Amazon', 'web development', '2022-01-29', '2023-10-11', '2023-10-25 13:12:20', '2023-10-25 13:12:20'),
(37, 1, 27, 'Amazon', 'web development', '2022-01-29', '2023-10-11', '2023-10-25 13:12:53', '2023-10-25 13:12:53'),
(39, 0, 28, 'Amazon', 'web development', '2022-01-29', '2023-10-11', '2023-10-25 13:19:46', '2023-10-25 13:19:46'),
(40, 1, 29, 'Amazon', 'web development', '2022-02-19', '2023-10-26', '2023-10-26 09:29:20', '2023-10-26 09:29:20'),
(42, 0, 30, 'Amazon', 'web development', '2022-02-26', '2023-10-26', '2023-10-26 09:58:52', '2023-10-26 09:58:52'),
(43, 1, 31, '', '', '0000-00-00', '0000-00-00', '2023-10-26 15:35:00', '2023-10-26 15:35:00'),
(45, 0, 32, 'elinsys', 'php', '2023-09-25', '2023-10-29', '2023-10-27 09:16:57', '2023-10-27 09:16:57'),
(48, 0, 33, '', '', '0000-00-00', '0000-00-00', '2023-10-27 09:51:17', '2023-10-27 09:51:17'),
(49, 1, 34, '', '', '0000-00-00', '0000-00-00', '2023-10-30 06:44:22', '2023-10-30 06:44:22'),
(50, 1, 35, '', '', '0000-00-00', '0000-00-00', '2023-10-30 08:04:59', '2023-10-30 08:04:59'),
(51, 1, 36, '', '', '0000-00-00', '0000-00-00', '2023-10-30 11:51:15', '2023-10-30 11:51:15'),
(52, 1, 37, '', '', '0000-00-00', '0000-00-00', '2023-10-30 11:56:05', '2023-10-30 11:56:05'),
(53, 1, 38, 'Amazon', 'web development', '2022-02-01', '2023-10-11', '2023-10-30 13:35:28', '2023-10-30 13:35:28'),
(54, 1, 39, 'Amazon', 'web development', '2022-01-27', '2023-10-04', '2023-10-30 13:40:45', '2023-10-30 13:40:45'),
(55, 1, 40, '', '', '0000-00-00', '0000-00-00', '2023-10-31 06:13:46', '2023-10-31 06:13:46'),
(56, 1, 41, '', '', '0000-00-00', '0000-00-00', '2023-10-31 07:49:16', '2023-10-31 07:49:16'),
(57, 1, 42, 'facebook', 'web development', '2021-01-02', '2023-10-17', '2023-10-31 07:53:04', '2023-10-31 07:53:04'),
(58, 1, 43, 'Amazon', 'web development', '2021-01-31', '2023-10-04', '2023-10-31 12:40:11', '2023-10-31 12:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Agro Based Industry', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(2, 'Archi/Enggr/Construction', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(3, 'Automobile/Industrial Machine', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(4, 'Bank/Mon-Bank Fin. Institute', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(5, 'Electronics/Consumer Durables', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(6, 'Energy/Power/Fuel', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(7, 'Garments/Textile', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(8, 'Govt./Semi-Govt./Autonomous', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(9, 'Pharmaceuticals', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(10, 'Hospital/Diagnostic Center', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(11, 'Airline/Travel/Tourism', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(12, 'Manufacturing (Light Industry)', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(13, 'Manufacturing (Heavy Industry)', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(14, 'Hotel/Restaurant', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(15, 'Information Technology', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(16, 'Logistics/Transportation', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(17, 'Entertainment/Recreation', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(18, 'Media/Advertising/Event Mgt.', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(19, 'NGO/Development', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(20, 'Real Estate/Development', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(21, 'Wholesale/Retail/Export-Import', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(22, 'Telecommunication', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(23, 'Food &amp; Beverage Industry', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(24, 'Security Service', '2023-08-21 11:57:51', '2023-08-21 11:57:51'),
(25, 'Fire, Safety &amp; Protection', '2023-08-21 11:57:51', '2023-08-21 11:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `candidate_name` int(11) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `company_name` int(11) NOT NULL,
  `Interviewer_name` varchar(50) NOT NULL,
  `Interviewer_email` varchar(50) NOT NULL,
  `Interviewer_mobile_number` int(15) NOT NULL,
  `job_post` int(11) NOT NULL,
  `interview_type` int(11) NOT NULL,
  `Interview_round` int(11) NOT NULL,
  `scheduled_date` date NOT NULL,
  `scheduled_time` time NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `admin_id`, `user_id`, `candidate_name`, `candidate_email`, `company_name`, `Interviewer_name`, `Interviewer_email`, `Interviewer_mobile_number`, `job_post`, `interview_type`, `Interview_round`, `scheduled_date`, `scheduled_time`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 43, 'harsh@gmail.com', 28, 'john', 'john@gmail.com', 2147483647, 20, 1, 3, '2023-11-30', '00:00:00', 1, 0, '2023-11-01 13:44:17', '2023-11-01 13:44:17'),
(3, 1, 0, 43, 'harsh@gmail.com', 27, 'john', 'john@gmail.com', 987876658, 20, 2, 3, '2023-11-30', '10:00:00', 1, 0, '2023-11-01 13:49:36', '2023-11-01 13:49:36'),
(4, 1, 0, 43, 'harsh@gmail.com', 28, 'james', 'john@gmail.com', 2147483647, 24, 1, 3, '2023-11-30', '10:00:00', 1, 0, '2023-11-01 13:52:51', '2023-11-01 13:52:51'),
(5, 1, 0, 43, 'harsh@gmail.com', 28, 'john', 'john@gmail.com', 2147483647, 24, 1, 3, '2023-11-30', '10:00:00', 1, 0, '2023-11-01 13:53:23', '2023-11-01 13:53:23'),
(7, 1, 0, 43, 'harsh@gmail.com', 28, 'john', 'john@gmail.com', 2147483647, 19, 1, 3, '2023-11-21', '10:00:00', 1, 0, '2023-11-01 14:48:04', '2023-11-01 14:48:04'),
(8, 1, 0, 40, 'harsh@gmail.com', 27, 'john', 'john@gmail.com', 2147483647, 20, 1, 3, '2023-11-21', '10:00:00', 1, 0, '2023-11-01 14:49:52', '2023-11-01 14:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `interview_round`
--

CREATE TABLE `interview_round` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `round` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interview_round`
--

INSERT INTO `interview_round` (`id`, `admin_id`, `round`) VALUES
(1, 1, 'First round'),
(2, 1, 'Second Round'),
(3, 1, 'Third round'),
(4, 1, 'Final round');

-- --------------------------------------------------------

--
-- Table structure for table `interview_type`
--

CREATE TABLE `interview_type` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interview_type`
--

INSERT INTO `interview_type` (`id`, `admin_id`, `type`) VALUES
(1, 1, 'Virtual'),
(2, 1, 'In person');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_no` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `title` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_description` text NOT NULL,
  `responsibilities` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `opening` int(11) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `minimum_salary` varchar(50) NOT NULL,
  `maximum_salary` varchar(50) NOT NULL,
  `benifits_perks` varchar(255) NOT NULL,
  `remote_work` enum('n','y') NOT NULL DEFAULT 'n',
  `location` varchar(255) NOT NULL,
  `application_instructions` text NOT NULL,
  `posted_at` date NOT NULL,
  `application_deadline` date NOT NULL,
  `job_overview` text NOT NULL,
  `diversity_inclusion` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_no`, `admin_id`, `title`, `company_id`, `job_description`, `responsibilities`, `skills`, `qualifications`, `experience`, `opening`, `job_type`, `minimum_salary`, `maximum_salary`, `benifits_perks`, `remote_work`, `location`, `application_instructions`, `posted_at`, `application_deadline`, `job_overview`, `diversity_inclusion`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(17, '', 1, 'new a good developer', 24, '<p>need a good developer who can develop good applications.</p>', '<p>need a good developer who can develop good applications.</p>', '[\"1\",\"2\",\"4\"]', 'MCA', '4', 5, 'Full Time', '20000', '30000', 'you will get wifi rembersment ', 'y', 'delhi', '<p>need a good developer who can develop good applications.</p>', '2023-10-01', '2023-10-31', '<p>need a good developer who can develop good applications.</p>', '<p>need a good developer who can develop good applications.</p>', 1, 0, '2023-10-27 07:22:54', '2023-10-27 07:22:54'),
(19, '', 1, 'development 1', 28, '<p>need a good developer</p>', '<p>need a good developer</p>', '[\"1\",\"2\",\"3\",\"9\",\"11\"]', 'MCA', '1', 5, 'Full Time', '20000', '50000', 'you will get wifi rembersment ', 'y', 'delhi', '<p>need a good developer.</p>', '2023-10-01', '2023-10-31', '<p>need a good developer</p>', '<p>need a good developer</p>', 1, 0, '2023-10-27 09:38:02', '2023-10-27 09:53:25'),
(20, '', 1, 'view js', 27, '<p>view js developer</p>', '<p>view js developer</p>', '[\"11\"]', 'be', '1', 5, 'Full Time', '20000', '30000', 'you will get wifi rembersment ', 'y', 'delhi', '<p>view js developer</p>', '2023-10-01', '2023-10-24', '<p>view js developer</p>', '<p>view js developer</p>', 1, 0, '2023-10-30 10:20:37', '2023-10-30 10:20:37'),
(21, '', 1, 'angular developer', 25, '<p>good developer</p>', '<p>good developer</p>', '[\"6\",\"8\"]', 'be', '1', 5, 'Full Time', '20000', '50000', 'you will get wifi rembersment ', 'y', 'delhi', '<p>good developer</p>', '2023-10-01', '2023-10-27', '<p>salary-groups</p>', '<p>salary-groups</p>', 1, 0, '2023-10-30 11:53:01', '2023-10-30 11:53:01'),
(22, '', 1, 'view developer', 28, '<p>need a view developer</p>', '<p>need a view developer</p>', '[\"11\"]', 'MCA', '1', 5, 'Full Time', '20000', '30000', 'you will get wifi rembersment ', 'y', 'ahmedabad', '<p>need a good developer</p>', '2023-10-01', '2023-10-12', '<p>need a good developer</p>', '<p>need a good developer</p>', 1, 1, '2023-10-30 12:41:40', '2023-10-30 13:08:21'),
(23, '', 1, 'need a view js developer', 27, '<p>need a good developer</p>', '<p>need a good developer</p>', '[\"11\"]', 'MCA', '4', 5, 'Full Time', '20000', '30000', 'you will get wifi rembersment ', 'y', 'ahmedabad', '<p>need a good developer</p>', '2023-10-01', '2023-10-27', '<p>need a good developer</p>', '<p>need a good developer</p>', 1, 0, '2023-10-30 13:12:33', '2023-10-30 13:36:22'),
(24, '', 1, 'java developer', 28, '<p>need a good javadeveloper</p>', '<p>need a good javadeveloper</p>', '[\"7\"]', 'MCA', '2', 5, 'Full Time', '20000', '50000', 'you will get wifi rembersment ', 'y', 'mumbai', '<p>need a good java developer</p>', '2023-10-01', '2023-10-27', '<p>need a good java developer</p>', '<p>need a good java developer</p>', 1, 0, '2023-10-30 13:46:04', '2023-10-30 13:46:04'),
(25, '', 1, 'php developer', 27, '<p>good php developer</p>', '<p>good php developer</p>', '[\"1\"]', 'be', '1', 5, 'Full Time', '20000', '30000', 'you will get wifi rembersment ', 'y', 'delhi', '<p>good php developer</p>', '2023-10-01', '2023-10-31', '<p>good php developer</p>', '<p>good php developer</p>', 1, 0, '2023-10-31 06:16:03', '2023-10-31 06:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_assign`
--

CREATE TABLE `job_assign` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_logo_images`
--

CREATE TABLE `job_logo_images` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_logo_images`
--

INSERT INTO `job_logo_images` (`id`, `admin_id`, `job_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1698038656.pdf', '2023-10-23 07:24:16', '2023-10-23 07:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `is_delete`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Candidate', 0, 1, '2023-08-25 06:52:48', '0000-00-00 00:00:00'),
(2, 'Company', 0, 1, '2023-08-25 10:24:10', '2023-08-25 10:24:10'),
(3, 'Employee', 0, 1, '2023-08-25 10:24:37', '2023-08-25 10:24:37'),
(4, 'Role Management', 0, 1, '2023-08-25 10:24:55', '2023-08-25 10:24:55'),
(5, 'Job Posting', 0, 1, '2023-08-25 10:25:09', '2023-08-25 10:25:09'),
(6, 'Interview', 0, 1, '2023-08-25 10:25:22', '2023-08-25 10:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `professional_accomlishments`
--

CREATE TABLE `professional_accomlishments` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `candidate_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional_accomlishments`
--

INSERT INTO `professional_accomlishments` (`id`, `admin_id`, `candidate_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PHP developer', '2023-10-23 07:00:06', '2023-10-23 07:00:06'),
(2, 1, 2, 'PHP developer', '2023-10-23 07:06:07', '2023-10-23 07:06:07'),
(3, 1, 3, '', '2023-10-23 09:15:47', '2023-10-23 09:15:47'),
(4, 1, 4, 'PHP', '2023-10-23 16:02:34', '2023-10-23 16:02:34'),
(5, 1, 5, 'PHP', '2023-10-23 16:03:30', '2023-10-23 16:03:30'),
(6, 1, 6, 'PHP developer', '2023-10-25 06:56:17', '2023-10-25 06:56:17'),
(7, 1, 7, 'PHP developer', '2023-10-25 06:56:40', '2023-10-25 06:56:40'),
(8, 1, 8, '', '2023-10-25 07:04:23', '2023-10-25 07:04:23'),
(9, 1, 9, '', '2023-10-25 07:05:14', '2023-10-25 07:05:14'),
(10, 1, 10, '', '2023-10-25 07:06:55', '2023-10-25 07:06:55'),
(11, 1, 11, '', '2023-10-25 07:08:10', '2023-10-25 07:08:10'),
(12, 1, 12, '', '2023-10-25 07:09:41', '2023-10-25 07:09:41'),
(13, 1, 13, '', '2023-10-25 07:44:39', '2023-10-25 07:44:39'),
(14, 1, 14, 'PHP developer', '2023-10-25 07:46:18', '2023-10-25 07:46:18'),
(15, 1, 15, 'PHP developer', '2023-10-25 07:52:55', '2023-10-25 07:52:55'),
(16, 1, 16, 'PHP developer', '2023-10-25 07:57:41', '2023-10-25 07:57:41'),
(17, 1, 17, 'PHP developer', '2023-10-25 07:59:09', '2023-10-25 07:59:09'),
(18, 1, 18, 'PHP developer', '2023-10-25 07:59:31', '2023-10-25 07:59:31'),
(20, 0, 19, 'PHP developer', '2023-10-25 08:21:43', '2023-10-25 08:21:43'),
(21, 1, 20, 'PHP developer', '2023-10-25 09:29:12', '2023-10-25 09:29:12'),
(22, 1, 21, 'PHP', '2023-10-25 09:31:28', '2023-10-25 09:31:28'),
(27, 1, 23, 'PHP developer', '2023-10-25 12:57:44', '2023-10-25 12:57:44'),
(32, 0, 24, 'PHP developer', '2023-10-25 13:07:54', '2023-10-25 13:07:54'),
(33, 0, 22, 'PHP developer', '2023-10-25 13:08:56', '2023-10-25 13:08:56'),
(34, 1, 25, 'PHP developer', '2023-10-25 13:11:42', '2023-10-25 13:11:42'),
(35, 1, 26, 'PHP developer', '2023-10-25 13:12:20', '2023-10-25 13:12:20'),
(36, 1, 27, 'PHP developer', '2023-10-25 13:12:53', '2023-10-25 13:12:53'),
(38, 0, 28, 'PHP developer', '2023-10-25 13:19:46', '2023-10-25 13:19:46'),
(39, 1, 29, '', '2023-10-26 09:29:20', '2023-10-26 09:29:20'),
(41, 0, 30, '', '2023-10-26 09:58:52', '2023-10-26 09:58:52'),
(42, 1, 31, 'PHP', '2023-10-26 15:35:00', '2023-10-26 15:35:00'),
(44, 0, 32, 'kkdkkfbew', '2023-10-27 09:16:57', '2023-10-27 09:16:57'),
(47, 0, 33, '', '2023-10-27 09:51:17', '2023-10-27 09:51:17'),
(48, 1, 34, 'PHP developer', '2023-10-30 06:44:22', '2023-10-30 06:44:22'),
(49, 1, 35, 'web developer', '2023-10-30 08:04:59', '2023-10-30 08:04:59'),
(50, 1, 36, 'angular developer', '2023-10-30 11:51:15', '2023-10-30 11:51:15'),
(51, 1, 37, 'PHP developer', '2023-10-30 11:56:05', '2023-10-30 11:56:05'),
(52, 1, 38, 'web development', '2023-10-30 13:35:28', '2023-10-30 13:35:28'),
(53, 1, 39, 'web developer', '2023-10-30 13:40:45', '2023-10-30 13:40:45'),
(54, 1, 40, '', '2023-10-31 06:13:46', '2023-10-31 06:13:46'),
(55, 1, 41, '', '2023-10-31 07:49:16', '2023-10-31 07:49:16'),
(56, 1, 42, '', '2023-10-31 07:53:04', '2023-10-31 07:53:04'),
(57, 1, 43, '', '2023-10-31 12:40:11', '2023-10-31 12:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `candidate_id` int(11) NOT NULL,
  `degree_name` varchar(255) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `univesity` varchar(255) NOT NULL,
  `passing_y` year(4) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `is_delete` enum('0','1') DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `admin_id`, `candidate_id`, `degree_name`, `percentage`, `univesity`, `passing_y`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'be', '85', 'delhi', '2018', '1', '0', '2023-10-23 07:00:06', '2023-10-23 07:00:06'),
(2, 1, 2, 'be', '85', 'delhi', '2023', '1', '0', '2023-10-23 07:06:07', '2023-10-23 07:06:07'),
(3, 1, 2, 'cse', '70', 'delhi', '2019', '1', '0', '2023-10-23 07:06:07', '2023-10-23 07:06:07'),
(4, 1, 3, '', '', '', '2023', '1', '0', '2023-10-23 09:15:47', '2023-10-23 09:15:47'),
(5, 1, 4, 'be', '85', '', '2020', '1', '0', '2023-10-23 16:02:34', '2023-10-23 16:02:34'),
(6, 1, 5, 'be', '85', '', '2020', '1', '0', '2023-10-23 16:03:30', '2023-10-23 16:03:30'),
(7, 1, 6, 'be', '85', 'delhi', '2023', '1', '0', '2023-10-25 06:56:17', '2023-10-25 06:56:17'),
(8, 1, 7, 'be', '85', 'delhi', '2023', '1', '0', '2023-10-25 06:56:40', '2023-10-25 06:56:40'),
(9, 1, 8, 'be', '85', 'delhi', '2008', '1', '0', '2023-10-25 07:04:23', '2023-10-25 07:04:23'),
(10, 1, 9, 'be', '85', 'delhi', '2008', '1', '0', '2023-10-25 07:05:14', '2023-10-25 07:05:14'),
(11, 1, 10, 'be', '85', 'delhi', '2008', '1', '0', '2023-10-25 07:06:55', '2023-10-25 07:06:55'),
(12, 1, 11, 'be', '85', 'delhi', '2008', '1', '0', '2023-10-25 07:08:10', '2023-10-25 07:08:10'),
(13, 1, 12, 'be', '85', 'delhi', '2018', '1', '0', '2023-10-25 07:09:41', '2023-10-25 07:09:41'),
(14, 1, 13, 'be', '85', 'delhi', '2017', '1', '0', '2023-10-25 07:44:39', '2023-10-25 07:44:39'),
(15, 1, 14, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 07:46:18', '2023-10-25 07:46:18'),
(16, 1, 15, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 07:52:55', '2023-10-25 07:52:55'),
(17, 1, 16, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 07:57:41', '2023-10-25 07:57:41'),
(18, 1, 17, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 07:59:09', '2023-10-25 07:59:09'),
(19, 1, 18, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 07:59:31', '2023-10-25 07:59:31'),
(21, 0, 19, 'be', '85', 'delhi', '2019', '1', '0', '2023-10-25 08:21:43', '2023-10-25 08:21:43'),
(22, 1, 20, 'be', '85', 'delhi', '2017', '1', '0', '2023-10-25 09:29:12', '2023-10-25 09:29:12'),
(23, 1, 21, 'be', '85', 'delhi', '2016', '1', '0', '2023-10-25 09:31:28', '2023-10-25 09:31:28'),
(28, 1, 23, '', '', '', '2023', '1', '0', '2023-10-25 12:57:44', '2023-10-25 12:57:44'),
(33, 0, 24, '', '', '', '2023', '1', '0', '2023-10-25 13:07:54', '2023-10-25 13:07:54'),
(34, 0, 22, 'be', '85', 'delhi', '2023', '1', '0', '2023-10-25 13:08:56', '2023-10-25 13:08:56'),
(35, 1, 25, '', '', '', '2023', '1', '0', '2023-10-25 13:11:42', '2023-10-25 13:11:42'),
(36, 1, 26, '', '', '', '2023', '1', '0', '2023-10-25 13:12:20', '2023-10-25 13:12:20'),
(37, 1, 27, '', '', '', '2023', '1', '0', '2023-10-25 13:12:53', '2023-10-25 13:12:53'),
(39, 0, 28, 'MCA', '', '', '2023', '1', '0', '2023-10-25 13:19:46', '2023-10-25 13:19:46'),
(40, 1, 29, 'be', '85', 'delhi', '2018', '1', '0', '2023-10-26 09:29:20', '2023-10-26 09:29:20'),
(42, 0, 30, 'be', '85', 'delhi', '2022', '1', '0', '2023-10-26 09:58:52', '2023-10-26 09:58:52'),
(43, 1, 31, 'be', '70', 'delhi', '2018', '1', '0', '2023-10-26 15:35:00', '2023-10-26 15:35:00'),
(45, 0, 32, 'be', '7.5', 'GTU', '2018', '1', '0', '2023-10-27 09:16:57', '2023-10-27 09:16:57'),
(48, 0, 33, 'be', '85', 'delhi', '2014', '1', '0', '2023-10-27 09:51:17', '2023-10-27 09:51:17'),
(49, 1, 34, 'be', '85', 'delhi', '2020', '1', '0', '2023-10-30 06:44:22', '2023-10-30 06:44:22'),
(50, 1, 35, 'be', '85', 'delhi', '2017', '1', '0', '2023-10-30 08:04:59', '2023-10-30 08:04:59'),
(51, 1, 36, 'be', '85', 'delhi', '2022', '1', '0', '2023-10-30 11:51:15', '2023-10-30 11:51:15'),
(52, 1, 37, 'MCA', '85', 'delhi', '2022', '1', '0', '2023-10-30 11:56:05', '2023-10-30 11:56:05'),
(53, 1, 38, 'MCA', '85', 'delhi', '2020', '1', '0', '2023-10-30 13:35:28', '2023-10-30 13:35:28'),
(54, 1, 39, 'MCA', '85', 'delhi', '2021', '1', '0', '2023-10-30 13:40:45', '2023-10-30 13:40:45'),
(55, 1, 40, 'be', '70', 'delhi', '2021', '1', '0', '2023-10-31 06:13:46', '2023-10-31 06:13:46'),
(56, 1, 41, 'be', '85', 'delhi', '2014', '1', '0', '2023-10-31 07:49:16', '2023-10-31 07:49:16'),
(57, 1, 42, 'be', '85', 'delhi', '2020', '1', '0', '2023-10-31 07:53:04', '2023-10-31 07:53:04'),
(58, 1, 43, 'MCA', '70', 'delhi', '2019', '1', '0', '2023-10-31 12:40:11', '2023-10-31 12:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE `recruiters` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `name`, `email`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@gmail.com', '1697781768.webp', '2023-10-20 07:20:33', '2023-10-20 07:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `title` varchar(255) NOT NULL,
  `role` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`role`)),
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `admin_id`, `title`, `role`, `is_active`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hr ', '[\"1\",\"2\",\"3\",\"5\",\"6\"]', 1, 0, '2023-10-23 07:07:47', '2023-10-23 07:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `admin_id`) VALUES
(1, 'php', 1),
(2, 'javascript', 1),
(3, 'html', 1),
(4, 'mysql', 1),
(5, 'css', 1),
(6, 'node', 1),
(7, 'java', 1),
(8, 'angular', 1),
(9, 'react js', 1),
(10, 'next js', 1),
(11, 'view js', 1),
(12, 'jquery', 1),
(13, 'bootstrap', 1),
(14, 'figma', 1),
(15, 'testing', 1),
(16, 'ruby', 1),
(17, 'team handling', 1),
(18, 'zoomla', 1),
(19, 'wordpress', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'refer to required id',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin1@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-23 06:52:34', '2023-10-23 06:52:34'),
(2, 1, 'harsh@elinsys.com', '96f715dafe2d68bc03767a73b20f5805', '2023-10-23 06:56:31', '2023-10-23 06:56:31'),
(5, 1, 'john@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-23 07:21:26', '2023-10-23 07:21:26'),
(6, 1, 'harshit@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-23 07:31:33', '2023-10-23 07:31:33'),
(7, 1, 'facebook@gmail.com', '924bf992c82e3ba4c1afc4b9fa37b86d', '2023-10-23 07:46:29', '2023-10-23 07:46:29'),
(8, 1, 'facebook@gmail.com', '418dbf2b843f773ad6fd7f4905b9feb9', '2023-10-23 07:47:08', '2023-10-23 07:47:08'),
(9, 1, 'new@gmail.com', '94553c0164cdcffe027b439f88f8dea3', '2023-10-23 08:06:10', '2023-10-23 08:06:10'),
(10, 1, 'new1@gmail.com', '92f27d8e90e0f94445d3a1d39289d18d', '2023-10-23 09:03:58', '2023-10-23 09:03:58'),
(11, 1, 'new@gmail.com', '923548d682f2482e0aee3bdc0a73eb19', '2023-10-23 10:09:23', '2023-10-23 10:09:23'),
(12, 1, 'new@gmail.com', '2e4be8856a0989fb1c0f16d2c6e7010b', '2023-10-23 10:09:29', '2023-10-23 10:09:29'),
(13, 1, 'new@gmail.com', '6e72c03dc7a6e747f2fa9d6d47588d46', '2023-10-23 10:11:01', '2023-10-23 10:11:01'),
(14, 1, 'new@gmail.com', '73f1de8f3e40c915e20f0ff379b5a0aa', '2023-10-23 10:11:33', '2023-10-23 10:11:33'),
(15, 1, 'new1@gmail.com', '11eb145e047c17dffc8a1e0f56acfead', '2023-10-23 10:12:16', '2023-10-23 10:12:16'),
(16, 1, 'new@gmail.com', '1f15241f1247725bca8faeda7347a9ab', '2023-10-23 10:17:43', '2023-10-23 10:17:43'),
(17, 1, 'harsh@elinsys.com', '9126cfea5522150a9e5bc204b8a9333f', '2023-10-23 10:34:27', '2023-10-23 10:34:27'),
(18, 1, 'new@elinsys.com', '74923cdc4b410b5f5317ff49c58aa509', '2023-10-23 10:34:53', '2023-10-23 10:34:53'),
(19, 1, 'harsh@elinsys.com', '43bca7f336015a72aaa3cfc6ad2e1e0d', '2023-10-23 10:36:44', '2023-10-23 10:36:44'),
(20, 1, 'harsh@elinsys.com', '278d57d5d2cd34707f39bd712c1db93b', '2023-10-23 10:37:28', '2023-10-23 10:37:28'),
(21, 1, 'harsh@elinsys.com', '9796810ba42742b6ff129fc640a0e5a4', '2023-10-23 11:17:05', '2023-10-23 11:17:05'),
(22, 1, 'harsh@elinsys.com', 'fcd667197e60bbdc1d9ed031ef6c28e0', '2023-10-23 11:17:30', '2023-10-23 11:17:30'),
(23, 1, 'harsh@elinsys.com', '09b21cacc23e67c5ae829e5cbff6b417', '2023-10-23 11:26:32', '2023-10-23 11:26:32'),
(24, 1, 'harsh@elinsys.com', 'e266bca4fee46224b93919e22c7fcb16', '2023-10-23 11:29:29', '2023-10-23 11:29:29'),
(25, 1, 'harsh@elinsys.com', 'd61fe00929d0e250ec0fc88689e9e18d', '2023-10-23 11:29:51', '2023-10-23 11:29:51'),
(26, 1, 'harsh@elinsys.com', 'd5002120476c2d66dd65168fb8b8ae7b', '2023-10-23 11:49:43', '2023-10-23 11:49:43'),
(27, 1, 'harsh@elinsys.com', 'b089f09469884e1a4b6850aade3d1caa', '2023-10-23 11:51:37', '2023-10-23 11:51:37'),
(28, 1, 'harsh@elinsys.com', '202cb962ac59075b964b07152d234b70', '2023-10-23 13:18:35', '2023-10-23 13:18:35'),
(29, 1, 'harsh1@elinsys.com', '8d2b2683aff3aab813e63409ba3dac43', '2023-10-23 15:54:08', '2023-10-23 15:54:08'),
(30, 1, 'facebook@elinsys.com', '784c7d0ae4a6cea7d0681451059e472d', '2023-10-23 15:59:20', '2023-10-23 15:59:20'),
(31, 1, 'harsh4@elinsys.com', '1cd4b38bcc14844234fddc71feebf02a', '2023-10-25 07:37:37', '2023-10-25 07:37:37'),
(32, 1, 'harsh11@elinsys.com', 'bf1fafc34e68d4010978ec1ea320ebcd', '2023-10-25 08:27:23', '2023-10-25 08:27:23'),
(33, 1, 'harsh12@elinsys.com', '202cb962ac59075b964b07152d234b70', '2023-10-25 08:39:24', '2023-10-25 08:39:24'),
(34, 1, 'harsh2@elinsys.com', 'a4df77390f204be96f5bec7316c6f61b', '2023-10-25 10:45:32', '2023-10-25 10:45:32'),
(35, 1, 'harsh1@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-25 10:53:18', '2023-10-25 10:53:18'),
(36, 1, 'harsh12@elinsys.com', 'd33cb112720e811f96b55915081b1c85', '2023-10-25 11:29:05', '2023-10-25 11:29:05'),
(37, 1, 'harsh1@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-10-25 11:34:24', '2023-10-25 11:34:24'),
(38, 1, 'harsh@elinsys.com', '578cf40a706bede442fd0ec1380073a0', '2023-11-01 11:24:14', '2023-11-01 11:24:14'),
(39, 1, '', 'af55c28e4e2572aa2b6f4fda72963d31', '2023-11-01 13:18:56', '2023-11-01 13:18:56'),
(40, 1, '', '', '2023-11-01 13:35:49', '2023-11-01 13:35:49'),
(41, 1, '', '', '2023-11-01 13:44:17', '2023-11-01 13:44:17'),
(42, 1, '', '', '2023-11-01 13:49:36', '2023-11-01 13:49:36'),
(43, 1, '', '7af0fcc8d690b53ea7e56b6770fce72f', '2023-11-01 13:52:07', '2023-11-01 13:52:07'),
(44, 1, '', '9f20b4571452127387f0dea34e6a65fb', '2023-11-01 13:52:51', '2023-11-01 13:52:51'),
(45, 1, '', '90d508f7188074fed5dc586a3853200c', '2023-11-01 13:53:23', '2023-11-01 13:53:23'),
(46, 1, 'harsh21@elinsys.com', '5d43233a756297bf27a1c8f4faa532fe', '2023-11-02 05:44:29', '2023-11-02 05:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `admin_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '2023-08-21 09:02:34', '2023-08-21 09:02:34'),
(2, 1, 'client', '2023-08-21 09:02:34', '2023-08-21 09:02:34'),
(3, 1, 'employee', '2023-08-21 09:02:51', '2023-08-21 09:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_map`
--

CREATE TABLE `user_map` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_map`
--

INSERT INTO `user_map` (`id`, `user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-10-23 06:54:10', '2023-10-23 06:54:10'),
(2, 1, 2, '2023-10-23 06:56:31', '2023-10-23 06:56:31'),
(5, 5, 3, '2023-10-23 07:21:26', '2023-10-23 07:21:26'),
(6, 6, 3, '2023-10-23 07:31:33', '2023-10-23 07:31:33'),
(7, 7, 2, '2023-10-23 07:46:29', '2023-10-23 07:46:29'),
(8, 8, 2, '2023-10-23 07:47:08', '2023-10-23 07:47:08'),
(9, 9, 2, '2023-10-23 08:06:10', '2023-10-23 08:06:10'),
(10, 10, 2, '2023-10-23 09:03:58', '2023-10-23 09:03:58'),
(11, 11, 2, '2023-10-23 10:09:23', '2023-10-23 10:09:23'),
(12, 12, 2, '2023-10-23 10:09:29', '2023-10-23 10:09:29'),
(13, 13, 2, '2023-10-23 10:11:01', '2023-10-23 10:11:01'),
(14, 14, 2, '2023-10-23 10:11:33', '2023-10-23 10:11:33'),
(15, 15, 2, '2023-10-23 10:12:16', '2023-10-23 10:12:16'),
(16, 16, 2, '2023-10-23 10:17:43', '2023-10-23 10:17:43'),
(17, 17, 2, '2023-10-23 10:34:27', '2023-10-23 10:34:27'),
(18, 18, 2, '2023-10-23 10:34:53', '2023-10-23 10:34:53'),
(19, 19, 2, '2023-10-23 10:36:44', '2023-10-23 10:36:44'),
(20, 20, 2, '2023-10-23 10:37:28', '2023-10-23 10:37:28'),
(21, 21, 2, '2023-10-23 11:17:05', '2023-10-23 11:17:05'),
(22, 22, 2, '2023-10-23 11:17:30', '2023-10-23 11:17:30'),
(23, 23, 2, '2023-10-23 11:26:32', '2023-10-23 11:26:32'),
(24, 24, 2, '2023-10-23 11:29:29', '2023-10-23 11:29:29'),
(25, 25, 2, '2023-10-23 11:29:51', '2023-10-23 11:29:51'),
(26, 26, 2, '2023-10-23 11:49:43', '2023-10-23 11:49:43'),
(27, 27, 2, '2023-10-23 11:51:37', '2023-10-23 11:51:37'),
(28, 28, 3, '2023-10-23 13:18:35', '2023-10-23 13:18:35'),
(29, 29, 2, '2023-10-23 15:54:08', '2023-10-23 15:54:08'),
(30, 30, 2, '2023-10-23 15:59:20', '2023-10-23 15:59:20'),
(31, 31, 2, '2023-10-25 07:37:37', '2023-10-25 07:37:37'),
(32, 32, 2, '2023-10-25 08:27:23', '2023-10-25 08:27:23'),
(33, 33, 3, '2023-10-25 08:39:24', '2023-10-25 08:39:24'),
(34, 34, 2, '2023-10-25 10:45:32', '2023-10-25 10:45:32'),
(35, 35, 3, '2023-10-25 10:53:18', '2023-10-25 10:53:18'),
(36, 36, 2, '2023-10-25 11:29:05', '2023-10-25 11:29:05'),
(37, 37, 3, '2023-10-25 11:34:24', '2023-10-25 11:34:24'),
(38, 38, 2, '2023-11-01 11:24:14', '2023-11-01 11:24:14'),
(39, 39, 2, '2023-11-01 13:18:56', '2023-11-01 13:18:56'),
(40, 40, 2, '2023-11-01 13:35:49', '2023-11-01 13:35:49'),
(41, 41, 2, '2023-11-01 13:44:17', '2023-11-01 13:44:17'),
(42, 42, 2, '2023-11-01 13:49:36', '2023-11-01 13:49:36'),
(43, 43, 2, '2023-11-01 13:52:07', '2023-11-01 13:52:07'),
(44, 44, 2, '2023-11-01 13:52:51', '2023-11-01 13:52:51'),
(45, 45, 2, '2023-11-01 13:53:23', '2023-11-01 13:53:23'),
(46, 46, 2, '2023-11-02 05:44:29', '2023-11-02 05:44:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_shifts`
--
ALTER TABLE `company_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_round`
--
ALTER TABLE `interview_round`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_type`
--
ALTER TABLE `interview_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_assign`
--
ALTER TABLE `job_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_logo_images`
--
ALTER TABLE `job_logo_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_accomlishments`
--
ALTER TABLE `professional_accomlishments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_map`
--
ALTER TABLE `user_map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `company_shifts`
--
ALTER TABLE `company_shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `interview_round`
--
ALTER TABLE `interview_round`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interview_type`
--
ALTER TABLE `interview_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `job_assign`
--
ALTER TABLE `job_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_logo_images`
--
ALTER TABLE `job_logo_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professional_accomlishments`
--
ALTER TABLE `professional_accomlishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_map`
--
ALTER TABLE `user_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
