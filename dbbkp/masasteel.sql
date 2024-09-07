-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 04:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masasteel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `company_name`, `subject`, `message`, `type`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'miraz', 'miraz@gmail.com', '01913653656', 'Mirpur', NULL, 'Testing', 'Testing Testing Testing', 'user_contact', NULL, '2023-04-30 15:27:08', '2023-04-30 15:27:08'),
(2, 'dfdf', 'dfdf@dfdf.com', '4454', 'ljhkl', NULL, 'ffg', 'gfdgdgdgfd', 'user_contact', NULL, '2023-04-30 15:33:00', '2023-04-30 15:33:00'),
(3, 'dfdf', 'dfdf@gmail.com', 'dfdf', 'dfdf', NULL, 'dfdf', 'dfdf', 'user_contact', NULL, '2023-04-30 15:39:29', '2023-04-30 15:39:29'),
(4, 'dfdf', 'mdfdf@g.com', '01913653656', 'dfdf', NULL, 'dfdf', 'dfdfdf', 'user_contact', NULL, '2023-04-30 15:42:09', '2023-04-30 15:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `c_r_m_s`
--

CREATE TABLE `c_r_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'One', NULL, 'backend/images/gallery/photo_238315222.jpg', 'active', '2023-04-24 10:37:39', '2023-04-24 10:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_short_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_short_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_title_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_title_para_tow` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_one_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_two_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_thre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_thre_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_heading_four_para` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `choose_us_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `slug`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'gggggg', 'gggggg', 'backend/images/media/media_gggggg_728468205.jpg', 'active', '2023-04-24 03:26:29', '2023-04-24 03:26:29');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_29_152556_create_sessions_table', 1),
(7, '2022_03_29_154359_create_permission_tables', 1),
(8, '2022_03_29_161331_create_settings_table', 1),
(9, '2022_04_13_223505_create_categories_table', 1),
(10, '2022_05_15_101041_create_post_categories_table', 1),
(11, '2022_09_13_185828_create_sliders_table', 1),
(12, '2022_09_13_190237_create_services_table', 1),
(13, '2022_09_13_200633_create_c_r_m_s_table', 1),
(14, '2022_09_13_230121_create_posts_table', 1),
(15, '2022_09_14_001514_create_galleries_table', 1),
(16, '2022_09_14_001613_create_contacts_table', 1),
(17, '2022_09_14_005639_create_testimonials_table', 1),
(18, '2022_09_14_215625_create_products_table', 1),
(19, '2022_09_21_235815_create_homes_table', 1),
(20, '2023_04_01_114738_create_projects_table', 1),
(21, '2023_04_01_115004_create_pages_table', 1),
(22, '2023_04_09_011330_create_media_table', 1),
(23, '2023_04_15_155848_create_m_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_projects`
--

CREATE TABLE `m_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user_id`, `page_name`, `title`, `slug`, `page_category`, `position_view`, `description_part1`, `description_part2`, `featured_photo`, `photo`, `video`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'DESIGN SECTION', NULL, 'service-1', 'service', '1', 'We have our own Architectural and Engineering team, which provides us to be flexible and readily make adjustment to any design as per clients demand. We maintain all the standard codes and specifications for the design, fabrication and erection of structural steel for buildings. Our design team comprises of highly qualified and experienced architects & engineers, who possess comprehencive experience of apartment building projects, using AutoCad. This helps us with the best suited design for the valuable plots and gives th best output.', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(2, 1, 'RESEARCHING AND CONSTRUCTION', NULL, 'service-2', 'service', '1', 'Work process starts with your MSBL project manager. It begins, for us, when we understand your needs and goals. Whether you provide a service, sell products or just need a place to store your goods. After knowing about you, now time to create your perfect building.', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(3, 1, 'DETAILING & ENGINEERING:', NULL, 'service-3', 'service', '1', 'Our Detailing and engineering department has distinguised itself as an expert in\nthe industry by providing timely and quality design and detail engineering \nservice.\n', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(4, 1, 'Company Overview', 'We Have Completed 50+ Projects Successfully In Bangladesh.', 'company-overview', 'about', '1', '<p><strong>Masa Steel &amp; Builders Ltd. (MSBL) </strong>Started Its Journey In The Year 2013, With A Group Of Most Experienced And Self Recognized Professionals With Many Years Of Shared History In The Relevant Field. For Most Effective Production, Optimizing All Resources, The Involvement Of Latest Technology And Modern Equipment Is Highly Important. MSBL Is Capable To Undertake And Supply Steel Buildings From Small Warehouse To Big Industries Like Spinning Mills, Denim Mills, Power Plant, Sugar Mills, Sports Stadium, Oil Station Shed, Ceramic Industries, Every Kind Of Steel Bridge.</p>\r\n\r\n<h3>MISSION</h3>\r\n\r\n<p>By Maintaining All The Standard Codes Of Steel Structure, Our Mission Is To Become One Of The Major Trusted,reliable And Expert Pre-fabricated Steel Builder Company In Bangladesh.</p>\r\n\r\n<h3>VISSION</h3>\r\n\r\n<p>To Be The Most Trusted Source Of Commercial, So Our Customers Decide With Confidence. MSBL Was Borned With The Vision</p>', NULL, 'backend/images/page/featured_photo_123052623.jpg', 'backend/images/page/photo_141471587.jpg', NULL, NULL, 'active', '2023-04-24 03:28:45', '2023-04-24 03:28:45'),
(5, 1, 'Company Profile', 'We Have Completed 50+ Projects Successfully In Bangladesh.', 'company-profile', 'about', '2', '<p>Name Of Company&nbsp;&nbsp; : Masa Steel &amp; Builders Ltd.</p>\r\n\r\n<p>Year Of Incorporation:2013</p>\r\n\r\n<p>Corporate Office : Dhaka,Bangladesh</p>\r\n\r\n<p>Contact Number : 01912-195778</p>\r\n\r\n<p>Email Address : Masasteelbl@gmail.com</p>\r\n\r\n<p>Website Address : Www.masagroupbd.com</p>\r\n\r\n<p>Principal Bank : Union Bank, UCB Bank</p>\r\n\r\n<p>Trade Licence Number : 05/00485</p>\r\n\r\n<p>05/00485 : 556091773564</p>\r\n\r\n<p>Business Identification No. : 004235696-0306</p>\r\n\r\n<p>Factory Address : Nowpara, Madhabdi, Narsingdi 1604</p>\r\n\r\n<p>Sister Concern : Masa Corporation, Masa Plaza,</p>\r\n\r\n<p>Masa Mart</p>\r\n\r\n<p>We Have Completed 50+ Projects Successfully In Bangladesh.</p>', NULL, 'backend/images/page/featured_photo_435141916.jpg', 'backend/images/page/photo_524855510.png', NULL, NULL, 'active', '2023-04-30 16:59:37', '2023-04-30 16:59:37'),
(12, 1, 'Company Brochure', NULL, 'company-brochure', 'about', '3', NULL, NULL, 'backend/images/page/featured_photo_822532546.jpg', NULL, NULL, NULL, 'active', '2023-05-04 12:44:59', '2023-05-04 12:44:59'),
(13, 1, 'Mission And Vision', NULL, 'mission-and-vision', 'about', '4', '<p><strong>MISSION</strong></p>\r\n\r\n<p>By Maintaining All The Standard Codes Of Steel Structure, Our Mission Is To Become One Of The Major Trusted,reliable And Expert Pre-fabricated Steel Builder Company In Bangladesh.</p>', '<p><strong>VISSION:</strong></p>\r\n\r\n<p>To Be The Most Trusted Source Of Commercial, So Our Customers Decide With Confidence. MSBL Was Borned With The Vision To Make MSBL The Most Prominent Steel Brand In Bangladesh.</p>', 'backend/images/page/featured_photo_25577244.jpg', NULL, NULL, NULL, 'active', '2023-05-04 12:46:37', '2023-05-04 12:46:37'),
(14, 1, 'Message From Managing Director', NULL, 'message-from-managing-director', 'about', '5', '<p>AssalamuAlaikum,</p>\r\n\r\n<p>By The Grace Of Almighty Allah, It Is A Great Pleasure For Us To Represent Masa Steel &amp; Builders Ltd. As A Well Qualified, Reliable And Trusted&nbsp; Steel Structure Manufacturer And Builder To The People Of Bangladesh. We Really Would Like Thank Our Valued Clients Who Trusts And Relies On Us With Our Products And Services To Inspire Us And To Motivate Us For The Improvment Of Services.</p>', '<p>We Are Commited To Provide Best Quality Steel Structure Manufacturing And Building Services.We Ensure Attractive,durable And Energy Efficient Buildings.&nbsp;&nbsp;</p>\r\n\r\n<p>Having A Highly Experienced Team Of Engineers And Technical Experts Masa Steel &amp; Builders Ltd. Has Established A State Of The Art Steel Fabrication Factory In Madhabdi, Narsingdi,Dhaka,Bangladesh.Our Service Facility Is Equiped With Metal Cutting, Forming And Welding Equipment, Which Provides Us With The Most Updated Fabrication Capabilities.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our Designs And Specifications Always Meets The International Standards And We Use Updated Software In Structural Design.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Finally, I Would Like To Thank You Again For Your Interest To Us And We Belive With The Blessings Of Almighty Allah We Will Be Succeed To Achieve Our Mission And Vision In Sha Allah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MD Saidur Rahman Bhuiyan (Shabbir)</p>\r\n\r\n<p>Managing Director</p>\r\n\r\n<p>Masa Steel &amp; Builders Ltd.</p>', 'backend/images/page/featured_photo_524062832.jpg', 'backend/images/page/photo_658255047.png', NULL, NULL, 'active', '2023-05-04 12:51:04', '2023-05-04 12:51:04');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'slider.all', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(2, 'slider.create', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(3, 'slider.show', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(4, 'slider.update', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(5, 'slider.delete', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(6, 'slider.approved', 'web', 'slider', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(7, 'testimonial.all', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(8, 'testimonial.create', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(9, 'testimonial.show', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(10, 'testimonial.update', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(11, 'testimonial.delete', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(12, 'testimonial.approved', 'web', 'testimonial', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(13, 'product.all', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(14, 'product.create', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(15, 'product.show', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(16, 'product.update', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(17, 'product.delete', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(18, 'product.approved', 'web', 'product', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(19, 'crm.all', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(20, 'crm.create', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(21, 'crm.show', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(22, 'crm.update', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(23, 'crm.delete', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(24, 'crm.approved', 'web', 'crm', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(25, 'sms.all', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(26, 'sms.create', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(27, 'sms.show', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(28, 'sms.update', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(29, 'sms.delete', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(30, 'sms.approved', 'web', 'sms', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(31, 'messages.all', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(32, 'messages.create', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(33, 'messages.show', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(34, 'messages.update', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(35, 'messages.delete', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(36, 'messages.approved', 'web', 'messages', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(37, 'print.all', 'web', 'print', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(38, 'print.show', 'web', 'print', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(39, 'post.all', 'web', 'post', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(40, 'post.create', 'web', 'post', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(41, 'post.show', 'web', 'post', '2023-04-23 14:13:53', '2023-04-23 14:13:53'),
(42, 'post.update', 'web', 'post', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(43, 'post.delete', 'web', 'post', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(44, 'post.approved', 'web', 'post', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(45, 'category.all', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(46, 'category.create', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(47, 'category.show', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(48, 'category.update', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(49, 'category.delete', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(50, 'category.approved', 'web', 'category', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(51, 'gallery.all', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(52, 'gallery.create', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(53, 'gallery.show', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(54, 'gallery.update', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(55, 'gallery.delete', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(56, 'gallery.approved', 'web', 'gallery', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(57, 'user.all', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(58, 'user.create', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(59, 'user.show', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(60, 'user.update', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(61, 'user.delete', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(62, 'user.approved', 'web', 'user', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(63, 'role.all', 'web', 'role', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(64, 'role.create', 'web', 'role', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(65, 'role.show', 'web', 'role', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(66, 'role.update', 'web', 'role', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(67, 'role.delete', 'web', 'role', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(68, 'settings.all', 'web', 'settings', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(69, 'settings.show', 'web', 'settings', '2023-04-23 14:13:54', '2023-04-23 14:13:54'),
(70, 'settings.update', 'web', 'settings', '2023-04-23 14:13:54', '2023-04-23 14:13:54');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description_part1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `category_id`, `description_part1`, `description_part2`, `featured_photo`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'সারাবিশ্বে বহুল ব্যবহৃত ম্যাটেরিয়ালের মধ্যে শীর্ষস্থানে রয়েছে স্টিল', 'সারাবিশ্বে-বহুল-ব্যবহৃত-ম্যাটেরিয়ালের-মধ্যে-শীর্ষস্থানে-রয়েছে-স্টিল', 2, '<p>ইন্ডাস্ট্রি/ফ্যাক্টরি স্থাপনা নির্মানে সারাবিশ্বে বহুল ব্যবহৃত ম্যাটেরিয়ালের মধ্যে শীর্ষস্থানে রয়েছে স্টিল। নিরাপদ, অর্থ সাশ্রয়ী এবং স্বল্পতম সময়ে মজবুত স্থাপনা নির্মানে আট বছরের অধিক সময় ধরে আস্থার সাথে সার্বিক সেবা প্রদান করে আসছে Masa Steel &amp; Builders Ltd.</p>\r\n\r\n<p>সর্বোচ্চ গুনগত মানসম্পন্ন কাঁচামালে তৈরী, নিখুঁত স্টিল ওয়ার্কস। অত্যাধুনিক প্রযুক্তির দীর্ঘস্থায়ী ফিটিংস, সুনিপুন নির্মানকৌশলের সমন্বিত প্রচেষ্টায় আপনার স্থাপনার সর্বোচ্চ স্থায়িত্ব নিশ্চিতে Masa steel &amp; builders ltd অঙ্গীকারাবদ্ধ।</p>', '<p>আলোচনা করুন আপনার প্রজেক্ট নিয়ে ।</p>\r\n\r\n<p>ফ্রি কনসালটেন্সি</p>\r\n\r\n<p>অফিস:</p>\r\n\r\n<p>নওপাড়া,মাধবদী, নরসিংদী</p>\r\n\r\n<p>HOTLINE : 01711186383</p>', 'backend/images/post/featured_photo999400382.jpg', 'backend/images/post/photo_130560938.jpg', 'active', '2023-04-24 07:00:50', '2023-04-24 07:00:50'),
(2, 1, 'কল-কারখানা/গোডাউন/টাওয়ার বা অন্য কোনও প্রয়োজনের জন্য ইস্পাত কাঠামো', 'কল-কারখানাগোডাউনটাওয়ার-বা-অন্য-কোনও-প্রয়োজনের-জন্য-ইস্পাত-কাঠামো', 1, '<p>আপনি কি আপনার কল-কারখানা/গোডাউন/টাওয়ার বা অন্য কোনও প্রয়োজনের জন্য ইস্পাত কাঠামো তৈরির বিষয়ে ভাবছেন?</p>\r\n\r\n<p>এসকেএস স্টিল স্ট্রাকচার লিমিটেড উচ্চমানের প্রাক-ইঞ্জিনিয়ারড ইস্পাত বিল্ডিং নির্মাণ এবং ইস্পাত কাঠামোগত পণ্যের পরামর্শ, নকশা সহ অন্যান্য সম্পূর্ণ সার্ভিস সরবরাহে বিশেষজ্ঞ।</p>\r\n\r\n<p>আপনার প্রকল্প বাস্তবায়নের জন্য আমাদের কাছে পাবেন ASTM মানের সকল ম্যটেরিয়াল এবং সুদক্ষ ইঞ্জিয়ার দ্বারা ডিজাইন। আমরা সর্বাধুনিক প্রযুক্তি এবং মানের নিশ্চয়তা দিয়ে ইস্পাত কাঠামো নির্মান করে থাকি।</p>\r\n\r\n<p>আমাদের সার্ভিস সমূহঃ</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9e/1/16/27a1.png\" style=\"height:16px; width:16px\" /> নকশা ডিজাইন।</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9e/1/16/27a1.png\" style=\"height:16px; width:16px\" /> 3D ডিজাইন।</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9e/1/16/27a1.png\" style=\"height:16px; width:16px\" /> স্টিল বিল্ডিং সংশ্লিষ্ট সকল মেটেরিয়াল সাপ্লাই</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9e/1/16/27a1.png\" style=\"height:16px; width:16px\" /> ইরেকশন, ইনস্টলেশন এবং কমিশনিং।</p>\r\n\r\n<p><img alt=\"➡️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t9e/1/16/27a1.png\" style=\"height:16px; width:16px\" /> মেইনটেনেন্স এবং ট্রাভলসুটিং</p>\r\n\r\n<p>আমাদের স্টিল স্ট্রাকচার প্রডাক্ট সমুহ :</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> ফ্যাক্টরি বিল্ডিং / শেড</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> মেশিন টাওয়ার / মিলিং রুম</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> ওয়ার হাউস / গোডাউন</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> ফুট ওভার ব্রিজ</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> বেইলি ব্রিজ</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> রেসিডেনসিয়াল বা মাল্টি স্টোরেজ বিল্ডিং</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> পাওয়ার প্লান্ট স্ট্রাকচার / মেরিন স্ট্রাকচার</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> রেলওয়ে স্টেশন / এয়ারপোর্ট</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> ক্যানোপি</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> হ্যাংগার / আর্মি স্ট্রাকচার</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> যেকোন টেম্পোরারি স্ট্রাকচার</p>', '<p>আমাদের সম্পর্কে বিস্তারিত জানতে সরাসরি</p>\r\n\r\n<p>যোগাযোগ করুন:</p>\r\n\r\n<p>Masa steel &amp; builders ltd</p>\r\n\r\n<p>মোবাইল ঃ 01912195778</p>\r\n\r\n<p>01711186383</p>', 'backend/images/post/featured_photo13505008.jpg', 'backend/images/post/photo_270514269.jpg', 'active', '2023-04-24 07:02:43', '2023-04-24 07:02:43'),
(3, 1, 'যে গুরুত্বপূর্ণ সুবিধাসমূহের জন্য স্টিল স্ট্রাকচার নির্মাণ করবেন ?', 'for-which-important-facilities-to-build-steel-structure', 1, '<p>স্টিল স্ট্রাকচার নির্মাণ- এর কিছু সুবিধাসমূহ</p>\r\n\r\n<p>* শক্তিশালী,মজবুত এবং দীর্ঘস্থায়ী</p>\r\n\r\n<p>* সহজে এবং কম সময়ে নির্মাণ করা যায়</p>\r\n\r\n<p>* যেকোনো সাইজ এবং শেপ দেওয়া যায়</p>\r\n\r\n<p>* আগুন নির্বাপক</p>\r\n\r\n<p>* কিটপতঙ্গ/পেস্ট রেসিস্ট্যান্স</p>\r\n\r\n<p>* যেকোনো আবহাওয়ায় মানানসই</p>\r\n\r\n<p>* প্রয়োজনে স্থানান্তরযোগ্য</p>\r\n\r\n<p>* ইন্ডাস্ট্রি/ফ্যাক্টরি/টেক্সটাইল শেড বা গুদাম ঘর তৈরির জন্য আদর্শ ।</p>\r\n\r\n<p>ইন্ডাস্ট্রি/ফ্যাক্টরি স্থাপনা নির্মানে সারাবিশ্বে বহুল ব্যবহৃত ম্যাটেরিয়ালের মধ্যে শীর্ষস্থানে রয়েছে স্টিল। নিরাপদ, অর্থ সাশ্রয়ী এবং স্বল্পতম সময়ে মজবুত স্থাপনা নির্মানে আট বছরের অধিক সময় ধরে আস্থার সাথে সার্বিক সেবা প্রদান করে আসছে Masa Steel &amp; Builders Ltd.</p>\r\n\r\n<p>সর্বোচ্চ গুনগত মানসম্পন্ন কাঁচামালে তৈরী, নিখুঁত স্টিল ওয়ার্কস। অত্যাধুনিক প্রযুক্তির দীর্ঘস্থায়ী ফিটিংস, সুনিপুন নির্মানকৌশলের সমন্বিত প্রচেষ্টায় আপনার স্থাপনার সর্বোচ্চ স্থায়িত্ব নিশ্চিতে <a href=\"https://www.facebook.com/hashtag/masa_steel?__eep__=6&amp;__cft__[0]=AZXhVicia9Zi_UAUyCiP1xPqxYtyn4_z3LVYWeqxaMVIayAYDCHDeoNvDwHcbzyBBHMzA-VGhn-DSUsC9AeCkF9BZIlJgOEv8WQCahmd8YUOqLKnQ0KmD5lMvNXNA2f37nxe13___Hj7IUkxGFPWVP0R_0S8TSSE5dG4IjMH3BfiU3-yc5vOvXtukr-0xbLCgKY&amp;__tn__=*NK-R\">#Masa_steel</a> &amp; builders ltd অঙ্গীকারাবদ্ধ।</p>\r\n\r\n<p>আলোচনা করুন আপনার প্রজেক্ট নিয়ে ।</p>\r\n\r\n<p>ফ্রি কনসালটেন্সি</p>\r\n\r\n<p>অফিস:</p>\r\n\r\n<p>নওপাড়া,মাধবদী, নরসিংদী</p>\r\n\r\n<p>HOTLINE : 01711186383</p>', NULL, 'backend/images/post/featured_photo54961184.jpg', 'backend/images/post/photo_331105829.jpg', 'active', '2023-05-04 09:38:41', '2023-05-04 09:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `category_name`, `slug`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'blog', NULL, 'active', '2023-04-24 06:55:33', '2023-04-24 06:55:33'),
(2, 'News', 'news', NULL, 'active', '2023-04-24 06:55:55', '2023-04-24 06:55:55'),
(3, 'Notice', 'notice', NULL, 'active', '2023-04-24 06:56:47', '2023-04-24 06:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description_part1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `short_title`, `title`, `slug`, `description1`, `description2`, `banner_photo`, `photo`, `icon`, `project_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A world class project', 'Bangladesh Malitary Academy Chittagong', 'bangladesh-malitary-academy-chittagong', '<h2>We Ensure Best Service</h2>\r\n\r\n<p>Cras Enim Urna, Interdum Nec Porttitor Vitae, Sollicitudin Eu Eros. Praesent Eget Mollis Nulla, Non Lacinia Urna. Donec Sit Amet Neque Auctor, Ornare Dui Rutrum, Condimentum Justo. Duis Dictum, Ex Accumsan Eleifend Eleifend, Ex Justo Aliquam Nunc, In Ultrices Ante Quam Eget Massa. Sed Scelerisque, Odio Eu Tempor Pulvinar, Magna Tortor Finibus Lorem, Ut Mattis Tellus Nunc Ut Quam. Curabitur Quis Ornare Leo. Suspendisse Bibendum Nibh Non Turpis Vestibulum Pellentesque.</p>\r\n\r\n<ul>\r\n	<li>Sed Ut Perspiciatis Unde Omnis Iste Natus Error</li>\r\n	<li>Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur</li>\r\n	<li>Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis</li>\r\n	<li>Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque</li>\r\n</ul>', '<p>Hi</p>', 'backend/images/project/banner_photo_639822643.jpg', 'backend/images/project/photo_608672863.jpg', 'backend/images/project/icon_579300418.png', 'completed', 'active', '2023-04-23 16:05:21', '2023-04-23 16:05:21'),
(2, NULL, 'Mahid Expo Int. Tex Ltd Madhabdi, Narsingdi', 'mahid-expo-int-tex-ltd-madhabdi-narsingdi', '<p>Felis Donec Et Odio Pellentesque Diam Volutpat Commodo Sed Egestas. Orci Porta Non Pulvinar Neque Laoreet. Lacus Laoreet Non Curabitur Gravida Arcu Ac Tortor. Convallis Posuere Morbi Leo Urna Molestie At Elementum Eu Facilisis. Cursus Vitae Congue Mauris Rhoncus Aenean Vel. Feugiat Scelerisque Varius Morbi Enim Nunc Faucibus A Pellentesque. Placerat Vestibulum Lectus Mauris Ultrices. Massa Tincidunt Dui Ut Ornare Lectus Sit Amet Est. Vitae Nunc Sed Velit Dignissim Sodales Ut. Vitae Auctor Eu Augue Ut.</p>', '<p>Scelerisque Eu Ultrices Vitae Auctor. Quis Vel Eros Donec Ac Odio Tempor Orci. Lectus Nulla At Volutpat Diam Ut Venenatis. Amet Risus Nullam Eget Felis Eget Nunc Lobortis. Scelerisque Purus Semper Eget Duis At Tellus. Sagittis Orci A Scelerisque Purus Semper Eget Duis At Tellus. Ultrices Mi Tempus Imperdiet Nulla Malesuada Pellentesque Elit. Tempus Urna Et Pharetra Pharetra Massa Massa Ultricies Mi Quis. Tristique Senectus Et Netus Et. Mattis Ullamcorper Velit Sed Ullamcorper Morbi Tincidunt Ornare. Faucibus Nisl Tincidunt Eget Nullam Non. Quam Viverra Orci Sagittis Eu Volutpat Odio Facilisis Mauris Sit. Fermentum Et Sollicitudin Ac Orci Phasellus Egestas Tellus Rutrum Tellus. Est Ante In Nibh Mauris Cursus Mattis. Pellentesque Adipiscing Commodo Elit At Imperdiet Dui Accumsan Sit. Non Quam Lacus Suspendisse Faucibus Interdum Posuere. Sem Viverra Aliquet Eget Sit. Aenean Sed Adipiscing Diam Donec Adipiscing Tristique.</p>', 'backend/images/project/banner_photo_81986818.jpg', 'backend/images/project/photo_627389943.png', 'backend/images/project/icon_616486236.png', 'running', 'active', '2023-04-30 16:42:23', '2023-04-30 16:42:23'),
(3, NULL, 'Madhabdi Press Club Madhabdi, Narsingdi', 'madhabdi-press-club-madhabdi-narsingdi', '<p>Scelerisque eu ultrices vitae auctor. Quis vel eros donec ac odio tempor orci. Lectus nulla at volutpat diam ut venenatis. Amet risus nullam eget felis eget nunc lobortis. Scelerisque purus semper eget duis at tellus. Sagittis orci a scelerisque purus semper eget duis at tellus. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Tempus urna et pharetra pharetra massa massa ultricies mi quis. Tristique senectus et netus et. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Faucibus nisl tincidunt eget nullam non. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Est ante in nibh mauris cursus mattis. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Non quam lacus suspendisse faucibus interdum posuere. Sem viverra aliquet eget sit. Aenean sed adipiscing diam donec adipiscing tristique.</p>', NULL, 'backend/images/project/banner_photo_301694698.jpg', 'backend/images/project/photo_592606527.jpg', 'backend/images/project/icon_783840426.png', 'completed', 'active', '2023-04-30 16:46:44', '2023-04-30 16:46:44'),
(4, NULL, 'J.S Link Limited Madhabdi, Narsingdi', 'j-s-link-limited-madhabdi-narsingdi', '<h2>We Ensure Best Service</h2>\r\n\r\n<p>Cras Enim Urna, Interdum Nec Porttitor Vitae, Sollicitudin Eu Eros. Praesent Eget Mollis Nulla, Non Lacinia Urna. Donec Sit Amet Neque Auctor, Ornare Dui Rutrum, Condimentum Justo. Duis Dictum, Ex Accumsan Eleifend Eleifend, Ex Justo Aliquam Nunc, In Ultrices Ante Quam Eget Massa. Sed Scelerisque, Odio Eu Tempor Pulvinar, Magna Tortor Finibus Lorem, Ut Mattis Tellus Nunc Ut Quam. Curabitur Quis Ornare Leo. Suspendisse Bibendum Nibh Non Turpis Vestibulum Pellentesque.</p>\r\n\r\n<ul>\r\n	<li>Sed Ut Perspiciatis Unde Omnis Iste Natus Error</li>\r\n	<li>Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur</li>\r\n	<li>Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis</li>\r\n	<li>Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque</li>\r\n</ul>', NULL, 'backend/images/project/banner_photo_55473398.jpg', 'backend/images/project/photo_79940509.jpg', NULL, 'completed', 'active', '2023-05-03 07:55:39', '2023-05-03 07:55:39'),
(5, NULL, 'Madhabdi Press Club Madhabdi, Narsingdi', 'madhabdi-press-club-madhabdi-narsingdi', '<h2>We Ensure Best Service</h2>\r\n\r\n<p>Cras Enim Urna, Interdum Nec Porttitor Vitae, Sollicitudin Eu Eros. Praesent Eget Mollis Nulla, Non Lacinia Urna. Donec Sit Amet Neque Auctor, Ornare Dui Rutrum, Condimentum Justo. Duis Dictum, Ex Accumsan Eleifend Eleifend, Ex Justo Aliquam Nunc, In Ultrices Ante Quam Eget Massa. Sed Scelerisque, Odio Eu Tempor Pulvinar, Magna Tortor Finibus Lorem, Ut Mattis Tellus Nunc Ut Quam. Curabitur Quis Ornare Leo. Suspendisse Bibendum Nibh Non Turpis Vestibulum Pellentesque.</p>\r\n\r\n<ul>\r\n	<li>Sed Ut Perspiciatis Unde Omnis Iste Natus Error</li>\r\n	<li>Nemo Enim Ipsam Voluptatem Quia Voluptas Sit Aspernatur</li>\r\n	<li>Accusamus Et Iusto Odio Dignissimos Ducimus Qui Blanditiis</li>\r\n	<li>Nam Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque</li>\r\n</ul>', '<p>Hi</p>', 'backend/images/project/banner_photo_542261075.jpg', 'backend/images/project/photo_696650610.jpg', NULL, 'running', 'active', '2023-05-03 07:56:38', '2023-05-03 07:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'web', '2023-04-23 14:13:53', '2023-04-23 14:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isFeatured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DWZQ80NtUg4Ci8MfaKNumwgbHjbDgUZgyuRgVasF', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM3VxNEFyZ0UxdDVmNlJ1eVV4MEZBMlVEeDlTeDJSd0lWYXZ4N2dvOSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vbG9jYWxob3N0L21hc2Etc3RlZWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1683211735),
('XFaO2YUDquJ18kO9PmVxMeMUD5BDr87Dj3KdlL1X', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYXZHTGtFbGVmVXBSZ09LZ2tZc2ZSeXVXZW9lYkgzWllNbDFaMkFQMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3QvbWFzYS1zdGVlbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1683207886);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Billing Application',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Technical Supported by Apol',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_linkedIn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engineer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `logo`, `favicon`, `footer`, `email`, `phone`, `address`, `social_facebook`, `social_linkedIn`, `social_twitter`, `social_instagram`, `social_youtube`, `c_project`, `client`, `engineer`, `experience`, `t_banner`, `google_map_code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Masa Steel & Builders Ltd', 'backend/settings/logo_194807907.png', 'backend/settings/favicon_991525867.png', 'Technical Supported by Zariq Ltd', 'masasteelbl@gmail.com', '01912195778', 'Nowpara, Madhabdi, Narsingdi 1604', 'https://www.facebook.com/masasteelbuildersltd', 'https://www.linkin.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', NULL, '60', '70', '35', '11', 'backend/settings/t_banner_624493526.jpg', NULL, 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_part2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` double DEFAULT NULL,
  `slider_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `description_part1`, `description_part2`, `button_name`, `button_url`, `position`, `slider_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Masa Steel & Builders Ltd', NULL, 'We Build Your Dream', 'A Complete Solution Of STEEL BUILDING', NULL, NULL, 3, 'backend/images/slider/slider_photo_616935866.jpg', 'active', '2023-05-04 14:28:09', '2023-05-04 14:28:09'),
(2, 'Masa Steel & Builders Ltd', NULL, 'We Build Your Dream', 'A Complete Solution Of STEEL BUILDING', NULL, NULL, 2, 'frontend/images/slider/slider_photo_446178735.jpg', 'active', '2023-05-04 14:38:41', '2023-05-04 14:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `description`, `photo`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Zariq Ltd', 'Managing Director', 'It Is Very Great Company In Bangladesh, We Hope To Have Long Term Cooperation With This Company.', 'frontend/images/testimonial/photo_426694007.png', '10', 'active', '2023-05-04 09:14:25', '2023-05-04 09:14:25'),
(2, 'Discount Service 24', 'Managing Director', 'We ware working with them at 5 years ago. They are very \r\nintelligent and honest. I hope to have long term cooperation with this company.', 'backend/images/testimonial/photo_91021830.png', NULL, 'active', '2023-05-04 09:23:15', '2023-05-04 09:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_adddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_quantification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `text_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `name`, `email`, `phone`, `present_adddress`, `permanent_address`, `gender`, `date_of_birth`, `occupation`, `educational_quantification`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `text_password`, `remember_token`, `profile_photo_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '64453d20e5a51', 'Apol', 'miraz@gmail.com', '01644394107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$/ztfr1GT26wCnZHBR8b2gOeT9v/1qbOZvCYd1oDmLYN95umMgPFfe', NULL, NULL, NULL, 'miraz@gmail.com', NULL, NULL, 'active', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_r_m_s`
--
ALTER TABLE `c_r_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `m_projects`
--
ALTER TABLE `m_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_category_name_unique` (`category_name`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_uid_unique` (`uid`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c_r_m_s`
--
ALTER TABLE `c_r_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `m_projects`
--
ALTER TABLE `m_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `post_categories` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
