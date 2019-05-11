-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 02:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts_us`
--

CREATE TABLE `abouts_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts_us`
--

INSERT INTO `abouts_us` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 'كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.', 'I am using JQuery & JQuery UI and I tried using JQuery.', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>\r\n\r\n<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1555580717.png', 'active', '2019-04-15 06:39:58', '2019-04-15 06:39:58'),
(14, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '1555317735.jpg', 'active', '2019-04-15 06:42:15', '2019-04-15 06:42:15'),
(15, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '1555317790.jpg', 'active', '2019-04-15 06:43:10', '2019-04-15 06:43:10'),
(16, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '1555317826.jpg', 'active', '2019-04-15 06:43:46', '2019-04-15 06:43:46'),
(17, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '1555317883.jpg', 'active', '2019-04-15 06:44:43', '2019-04-15 06:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'df.jpg',
  `user_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `name`, `phone`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'farid negm', 1117903055, '1555411873.jpg', 6, '2019-04-16 08:51:14', '2019-04-16 08:51:14'),
(6, 'farid negm', 1117903055, 'df_image', 7, '2019-04-21 13:32:09', '2019-04-21 13:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `job_name`, `name`, `email`, `phone`, `nationality`, `birthday`, `university`, `graduation_year`, `city`, `last_salary`, `expected_salary`, `file`, `created_at`, `updated_at`) VALUES
(1, 'web developer', 'farid negm', 'faridnegm44@gmail.com', '01117903055', 'Egyptian', '27/71991', 'mansoura', '2013', 'cairo', '40000', '50000', '123.txt', '2019-04-17 00:11:17', NULL),
(2, 'Graphic Designer', 'Aya negm', 'faridnegm44@gmail.com', '01117903055', 'Egyptian', '27/71991', 'mansoura', '2013', 'cairo', '40000', '50000', '123.txt', '2019-04-17 00:11:17', NULL),
(3, NULL, 'farid negm', 'faridnegm44@gmail.com', '01117903055', 'Egypt', NULL, 'mm', '99999', 'cairo', '10000', '3000', 'E:\\xampp\\tmp\\phpC602.tmp', '2019-04-21 07:26:49', '2019-04-21 07:26:49'),
(4, 'WEB Designer', 'Ass negm', 'faridnegm44@gmail.com', '33333333', 'EGYPTIAN', '2019-04-19', 'ff', '1111', 'cairo', '10000', '4444', 'E:\\xampp\\tmp\\php117B.tmp', '2019-04-21 07:32:36', '2019-04-21 07:32:36'),
(5, 'WEB Designer', 'sherief', 'sh@gmail.com', '01117903055', 'Egypt', NULL, 'ss', '1122', 'cairo', '3333333', '4444444', 'E:\\xampp\\tmp\\phpCF78.tmp', '2019-04-21 07:45:26', '2019-04-21 07:45:26'),
(6, 'WEB Designer', 'farid negm', 'faridnegm44@gmail.com', '01117903055', 'Egypt', NULL, 'mm', NULL, 'cairo', NULL, NULL, 'E:\\xampp\\tmp\\phpEE18.tmp', '2019-04-21 07:57:34', '2019-04-21 07:57:34'),
(7, 'WEB Designer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2019-04-21 08:04:04', '2019-04-21 08:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555337238.jpg', 'active', '2019-04-15 12:07:18', '2019-04-15 12:07:18'),
(3, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581200.jpg', 'active', '2019-04-18 07:53:21', '2019-04-18 07:53:21'),
(4, 'كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581409.jpg', 'active', '2019-04-18 07:56:49', '2019-04-18 07:56:49'),
(5, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555337238.jpg', 'active', '2019-04-15 12:07:18', '2019-04-15 12:07:18'),
(6, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581200.jpg', 'active', '2019-04-18 07:53:21', '2019-04-18 07:53:21'),
(7, 'كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581409.jpg', 'active', '2019-04-18 07:56:49', '2019-04-18 07:56:49'),
(8, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555337238.jpg', 'active', '2019-04-15 12:07:18', '2019-04-15 12:07:18'),
(9, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581200.jpg', 'active', '2019-04-18 07:53:21', '2019-04-18 07:53:21'),
(10, 'كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581409.jpg', 'active', '2019-04-18 07:56:49', '2019-04-18 07:56:49'),
(11, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555337238.jpg', 'active', '2019-04-15 12:07:18', '2019-04-15 12:07:18'),
(12, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581200.jpg', 'active', '2019-04-18 07:53:21', '2019-04-18 07:53:21'),
(13, 'كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581409.jpg', 'active', '2019-04-18 07:56:49', '2019-04-18 07:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `address`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Farid Negm', 'faridnegm44@gmail.com', 'Cairo', '01117903055', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.\r\n\r\n\r\n', '2019-02-28 22:00:00', NULL),
(2, 'Asmaa', 'Asmaa@gmail.com', 'Cairo', '01117903055', 'ssThis is a demo of email template, please do not use it as a fully functional template. Sunt in culpa qui officia deserunt mollit anim id est laborum.	', '2019-04-17 06:00:00', NULL),
(3, 'Negm', 'ss@gmail.com', 'Cairo', '01117903055', 'ssThis is a demo of email template, please do not use it as a fully functional template. Sunt in culpa qui officia deserunt mollit anim id est laborum.	', '2019-04-08 22:00:00', NULL),
(4, 'farid negm', 'faridnegm44@gmail.com', 'cairo el mokatem', '01117903055', 'message', '2019-04-21 09:35:31', '2019-04-21 09:35:31'),
(5, 'farid negm', 'faridnegm44@gmail.com', 'cairo el mokatem', '01117903055', 'Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum', '2019-04-21 09:40:37', '2019-04-21 09:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `estimates_apps`
--

CREATE TABLE `estimates_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer1_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer1_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer2_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer3_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer4_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer4_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer5_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer5_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer6_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer6_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer7_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer7_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer8_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer8_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer9_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer9_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer10_dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer10_des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estimates_apps`
--

INSERT INTO `estimates_apps` (`id`, `name`, `question`, `image`, `answer1`, `answer1_dev_cost`, `answer1_des_cost`, `answer2`, `answer2_dev_cost`, `answer2_des_cost`, `answer3`, `answer3_dev_cost`, `answer3_des_cost`, `answer4`, `answer4_dev_cost`, `answer4_des_cost`, `answer5`, `answer5_dev_cost`, `answer5_des_cost`, `answer6`, `answer6_dev_cost`, `answer6_des_cost`, `answer7`, `answer7_dev_cost`, `answer7_des_cost`, `answer8`, `answer8_dev_cost`, `answer8_des_cost`, `answer9`, `answer9_dev_cost`, `answer9_des_cost`, `answer10`, `answer10_dev_cost`, `answer10_des_cost`, `created_at`, `updated_at`, `type`) VALUES
(2, 'big_app', 'How Big Is Your App?', '1555954518.jpg', 'Small', '777', '888', 'Mediuum', '999', '959', 'Large', '1000', '1200', NULL, '123', '432', NULL, '345', '555', NULL, '444', '555', NULL, '123', '3333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-22 13:11:42', '2019-04-22 13:11:42', 'mobile'),
(3, 'level', 'What Level Of UI Would You Like?', '1556013041.jpg', 'Mvb', '1000', '200', 'Basic', '444', '120', 'Polished', '2000', '111', NULL, '444', '432', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-22 15:59:54', '2019-04-22 15:59:54', 'Web');

-- --------------------------------------------------------

--
-- Table structure for table `form_estimates`
--

CREATE TABLE `form_estimates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dev_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_estimates`
--

INSERT INTO `form_estimates` (`id`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`, `question`, `answer`, `type`, `dev_cost`, `des_cost`) VALUES
(1, 'farid negm', 'f@gmail.com', '01828888833', 'Cairo/Egypt', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto fugiat nemo harum molestias officia placeat veniam magnam totam pariatur blanditiis velit similique unde exercitationem doloremque, error atque, laborum esse obcaecati!', '2019-04-03 22:00:00', '2019-04-08 22:00:00', 'Favourite Language', 'Html', 'web', '1000', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_preference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `date`, `location`, `type`, `experience`, `job_title`, `gender_preference`, `nationality`, `start_date`, `description_ar`, `description_en`, `required`, `status`, `created_at`, `updated_at`) VALUES
(1, '2019-04-16', 'CAIRO, EGYPT', 'FULL-TIME', '+2 YEARS', 'WEB DEVELOPER', 'NO PREFERENCE', 'Egypt', 'IMMEDIATLY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</p>', '<ul>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n</ul>', 'active', '2019-04-16 13:16:23', '2019-04-16 13:16:23'),
(2, '2019-04-16', 'CAIRO, EGYPT', 'FULL-TIME', '+2 YEARS', 'WEB Designer', 'NO PREFERENCE', 'Egypt', 'IMMEDIATLY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</p>', '<ul>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n	<li>\r\n	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n	</li>\r\n</ul>', 'active', '2019-04-16 13:16:23', '2019-04-16 13:16:23'),
(3, '2019-04-16', 'CAIRO, EGYPT', 'FULL-TIME', '+2 YEARS', 'Ios', 'NO PREFERENCE', 'Egypt', 'IMMEDIATLY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</p>', '<p><strong>1-&nbsp;</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2-&nbsp;</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3-</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>4-</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>', 'active', '2019-04-16 13:16:23', '2019-04-16 13:16:23'),
(4, '2019-04-16', 'CAIRO', 'FULL-TIME', '+2 YEARS', 'Andriod', 'NO PREFERENCE', 'Egypt', 'IMMEDIATLY', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>', '<ul>\r\n	<li>&nbsp;dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n	<li>&nbsp;consectetur adipisicing elit. Architecto laborum itaque totam, a</li>\r\n</ul>', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laborum itaque totam, aliquam dolorum consequuntur earum ullam, vitae, sit adipisci non laboriosam aliquid quas porro sint maiores iusto exercitationem rerum!</p>', 'active', '2019-04-16 13:16:23', '2019-04-16 13:16:23');

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
(3, '2019_03_06_124526_create_allusers_table', 1),
(4, '2019_03_07_142551_create_settings_table', 1),
(5, '2019_03_07_142739_create_services_table', 1),
(6, '2019_03_07_142840_create_teams_table', 1),
(7, '2019_03_07_142919_create_works_table', 1),
(8, '2019_03_07_143121_create_reserves_table', 1),
(9, '2019_04_14_125931_create_abouts_table', 2),
(10, '2019_04_15_090521_create_services_table', 3),
(11, '2019_04_15_103217_create_teams_table', 4),
(12, '2019_04_15_112148_create_partners_table', 5),
(13, '2019_04_15_132523_create_blogs_table', 6),
(14, '2019_04_15_142219_creat_user2_table', 7),
(15, '2019_04_15_143847_creat_user22_table', 8),
(16, '2019_04_15_144302_create_all__users_table', 9),
(17, '2019_04_15_144302_create_all_users_table', 10),
(18, '2019_04_16_083347_create_permission_tables', 11),
(19, '2019_04_16_111040_create_sliders_table', 12),
(20, '2019_04_16_120833_create_settings_table', 13),
(21, '2019_04_16_140312_create_jobs_table', 14),
(22, '2019_04_17_085501_create_portfolios_table', 15),
(23, '2019_04_17_105437_create_contact_forms_table', 16),
(24, '2019_04_17_155731_create_apply_jobs_table', 17),
(25, '2019_04_22_113429_create_estimates_table', 18),
(26, '2019_04_22_113429_create_estimatess_table', 19),
(27, '2019_04_22_113429_create_estimats_table', 20),
(28, '2019_04_22_115908_create_newestimate_table', 21),
(29, '2019_04_22_133407_create_form_estimates_table', 22),
(30, '2019_04_22_133703_create_estimate_apps_table', 22),
(31, '2019_04_22_133703_create_estimates_apps_table', 23),
(32, '2019_04_22_174042_create_new_estimate_app_table', 24),
(33, '2019_04_22_181254_create_new_form_estimate_table', 25),
(34, '2019_04_22_183847_create_new_form_estimate2_table', 26),
(35, '2019_04_24_090228_create_news_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title_ar`, `title_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'فكره', 'Fekra', '1555593661.jpg', 'active', '2019-04-15 09:53:09', '2019-04-15 09:53:09'),
(3, 'Company2', 'Company2', '1555593536.jpg', 'active', '2019-04-18 11:18:56', '2019-04-18 11:18:56'),
(4, 'فكره', 'Fekra', '1555593684.jpg', 'active', '2019-04-18 11:21:24', '2019-04-18 11:21:24'),
(5, 'فكره', 'Fekra', '1555593661.jpg', 'active', '2019-04-15 09:53:09', '2019-04-15 09:53:09'),
(6, 'Company2', 'Company2', '1555593536.jpg', 'active', '2019-04-18 11:18:56', '2019-04-18 11:18:56'),
(7, 'فكره', 'Fekra', '1555593684.jpg', 'active', '2019-04-18 11:21:24', '2019-04-18 11:21:24');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `type`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581656.jpg', '1', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-17 07:24:46', '2019-04-17 07:24:46'),
(3, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '1555581707.jpg', '2', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:01:47', '2019-04-18 08:01:47'),
(4, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581741.jpg', '3', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:02:21', '2019-04-18 08:02:21'),
(5, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', NULL, '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555581768.jpg', '4', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:02:48', '2019-04-18 08:02:48'),
(6, NULL, NULL, NULL, NULL, '1555581788.jpg', '1', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:03:08', '2019-04-18 08:03:08'),
(7, NULL, NULL, NULL, NULL, '1555581814.jpg', '1', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:03:34', '2019-04-18 08:03:34'),
(8, NULL, NULL, NULL, NULL, '1555581832.jpg', '3', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:03:52', '2019-04-18 08:03:52'),
(9, NULL, NULL, NULL, NULL, '1555581858.jpg', '4', 'https://www.youtube.com/watch?v=7b6i0XJ-ypk', 'active', '2019-04-18 08:04:18', '2019-04-18 08:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'توثيق زواج الاجانب', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580591.png', 'active', '2019-04-15 07:39:49', '2019-04-15 07:39:49'),
(3, 'توثيق زواج الاجانب والإقامة', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dof the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580603.png', 'active', '2019-04-16 09:50:00', '2019-04-16 09:50:00'),
(4, 'كما تتضمن هذه الخدمات', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLo printing</p>', '1555580577.png', 'active', '2019-04-18 07:42:57', '2019-04-18 07:42:57'),
(5, 'مراجعة عقود العمل مع الموظفين', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580637.png', 'active', '2019-04-18 07:43:57', '2019-04-18 07:43:57'),
(6, 'توثيق زواج الاجانب', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي&nbsp;</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580591.png', 'active', '2019-04-15 07:39:49', '2019-04-15 07:39:49'),
(7, 'توثيق زواج الاجانب والإقامة', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dof the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580603.png', 'active', '2019-04-16 09:50:00', '2019-04-16 09:50:00'),
(8, 'كما تتضمن هذه الخدمات', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLo printing</p>', '1555580577.png', 'active', '2019-04-18 07:42:57', '2019-04-18 07:42:57'),
(9, 'مراجعة عقود العمل مع الموظفين', 'Lorem Ipsum is simply dummy text of the printing', '<p>كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.كما تتضمن هذه الخدمات مراجعة عقود العمل مع الموظفين وابرامها وفقا للقوانين المصرية.</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555580637.png', 'active', '2019-04-18 07:43:57', '2019-04-18 07:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `contact_description_ar` text COLLATE utf8mb4_unicode_ci,
  `contact_description_en` text COLLATE utf8mb4_unicode_ci,
  `contact_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_map` text COLLATE utf8mb4_unicode_ci,
  `location_map2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `contact_description_ar`, `contact_description_en`, `contact_image`, `facebook`, `whatsapp`, `twitter`, `address2`, `linkedin`, `gmail`, `email`, `location_map`, `location_map2`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy<em><strong> text of the printingLorem Ipsum</strong></em> is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum</p>', '1555845537.jpg', 'https://www.facebook.com/', 'whats', 'twitter', 'Saudia Arabia', 'linkedin', 'faridnegm44@gmail.com', 'farid@yahoo.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6909.985915260408!2d31.3280336!3d30.008358599999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1554625858484!5m2!1sen!2sus\" width=\"100%\" height=\"200px\" frameborder=\"0\" style=\"border:0\" allowfullscreen>\r\n							</iframe>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6909.985915260408!2d31.3280336!3d30.008358599999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1554625858484!5m2!1sen!2sus\" width=\"100%\" height=\"200px\" frameborder=\"0\" style=\"border:0\" allowfullscreen>\r\n							</iframe>', 'cairo el mokatem', '1117748055 - 01012775704', '2019-04-16 11:21:58', '2019-04-16 11:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي', 'Lorem Ipsum is simply dummy text of the printing', '<p>توثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدوليتوثيق زواج الاجانب والإقامة والجنسية والتقاضي الدولي</p>', '<p>Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing</p>', '1555415573.jpg', 'active', '2019-04-16 09:51:35', '2019-04-16 09:51:35'),
(2, 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنصهناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص</p>', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>', '1555572527.jpg', 'active', '2019-04-18 05:28:48', '2019-04-18 05:28:48'),
(3, 'وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص', 'is simply dummy text of the printing', '<p>&nbsp;وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص&nbsp;وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص&nbsp;وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص</p>', '<p>&nbsp;is simply dummy text of the printing&nbsp;is simply dummy text of the printing&nbsp;is simply dummy text of the printing&nbsp;is simply dummy text of the printing&nbsp;is simply dummy text of the printing</p>', '1555572571.jpg', 'active', '2019-04-18 05:29:31', '2019-04-18 05:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title_ar`, `title_en`, `job_ar`, `job_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'فريد نجم', 'Aya Negm', 'webdeveloper', 'Web developer', '1555593062.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(3, 'فريد نجم', 'Mohamed Negm', 'graphic designer', 'graphic designer', '1555593076.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(4, 'فريد نجم', 'Farid Negm', 'webde veloper', 'Web developer', '1555593087.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(5, 'فريد نجم', 'Mohamed Negm', 'graphic designer', 'graphic designer', '1555593098.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(6, 'فريد نجم', 'Aya Negm', 'webdeveloper', 'Web developer', '1555593109.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(7, 'فريد نجم', 'Mohamed Negm', 'graphic designer', 'graphic designer', '1555593131.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(8, 'فريد نجم', 'Farid Negm', 'webde veloper', 'Web developer', '1555593142.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02'),
(9, 'فريد نجم', 'Mohamed Negm', 'graphic designer', 'graphic designer', '1555593154.jpg', 'active', '2019-04-15 09:06:02', '2019-04-15 09:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `status`) VALUES
(6, 'farid negm', 'faridnegm44@gmail.com', NULL, '$2y$10$qnNculvvow3gKGheGHvriOEdm2X6MaukTLSDEt0pnZP3AG71fFpJa', NULL, '2019-04-16 08:51:14', '2019-04-16 09:07:43', 2, 1),
(7, 'farid negm', 'faridnegm@gmail.com', NULL, '$2y$10$dSDUrPRQmNRcp.zliKNA7OB8frL/CiV/k/q0yWYjtaw1nySaBFKnm', NULL, '2019-04-21 13:32:09', '2019-04-21 13:32:09', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts_us`
--
ALTER TABLE `abouts_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimates_apps`
--
ALTER TABLE `estimates_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_estimates`
--
ALTER TABLE `form_estimates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts_us`
--
ALTER TABLE `abouts_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estimates_apps`
--
ALTER TABLE `estimates_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form_estimates`
--
ALTER TABLE `form_estimates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
