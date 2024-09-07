-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 04:57 AM
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
-- Database: `masa_steel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `seen` varchar(255) DEFAULT NULL,
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
  `title` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
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
  `title` varchar(255) DEFAULT NULL,
  `f_para` varchar(255) DEFAULT NULL,
  `s_para` varchar(255) DEFAULT NULL,
  `short_text` varchar(255) DEFAULT NULL,
  `f_s_title` varchar(255) DEFAULT NULL,
  `s_short_text` varchar(255) DEFAULT NULL,
  `s_s_title` varchar(255) DEFAULT NULL,
  `s_s_short_text` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `choose_us_title` varchar(255) DEFAULT NULL,
  `choose_us_title_para` varchar(255) DEFAULT NULL,
  `choose_us_title_para_tow` varchar(255) DEFAULT NULL,
  `choose_us_text` varchar(255) DEFAULT NULL,
  `choose_us_heading_one` varchar(255) DEFAULT NULL,
  `choose_us_heading_one_para` varchar(255) DEFAULT NULL,
  `choose_us_heading_two` varchar(255) DEFAULT NULL,
  `choose_us_heading_two_para` varchar(255) DEFAULT NULL,
  `choose_us_heading_thre` varchar(255) DEFAULT NULL,
  `choose_us_heading_thre_para` varchar(255) DEFAULT NULL,
  `choose_us_heading_four` varchar(255) DEFAULT NULL,
  `choose_us_heading_four_para` varchar(255) DEFAULT NULL,
  `choose_us_video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
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
  `migration` varchar(255) NOT NULL,
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
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
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
  `short_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description1` longtext DEFAULT NULL,
  `description2` longtext DEFAULT NULL,
  `banner_photo` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
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
  `page_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `page_category` varchar(255) DEFAULT NULL,
  `position_view` varchar(255) DEFAULT NULL,
  `description_part1` longtext DEFAULT NULL,
  `description_part2` longtext DEFAULT NULL,
  `featured_photo` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user_id`, `page_name`, `title`, `slug`, `page_category`, `position_view`, `description_part1`, `description_part2`, `featured_photo`, `photo`, `video`, `pdf`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'About Us 1', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'about-us-1', 'about', '1', '<h2>We Ensure Best Service</h2>\n\n<p>Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus nunc ut quam. Curabitur quis ornare leo. Suspendisse bibendum nibh non turpis vestibulum pellentesque.</p>\n\n<ul>\n	<li>Sed ut perspiciatis unde omnis iste natus error</li>\n	<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</li>\n	<li>Accusamus et iusto odio dignissimos ducimus qui blanditiis</li>\n	<li>Nam libero tempore, cum soluta nobis est eligendi optio cumque</li>\n</ul>', NULL, 'backend/images/page/featured_photo_123052623.jpg', 'backend/images/page/photo_141471587.jpg', NULL, NULL, 'active', '2023-04-24 03:28:45', '2023-04-24 03:28:45'),
(2, 1, 'About Us 2', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'about-us-2', 'about', '2', '<p>WHO WE ARE</p>\n\n<h2>Construction solutions focused future ready</h2>\n\n<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.</p>\n\n<p><img alt=\"About\" src=\"http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg\" /></p>\n\n<ul>\n	<li>&nbsp;Pre-construction services</li>\n	<li>&nbsp;Industrial manufacturing</li>\n	<li>&nbsp;Building and construction</li>\n</ul>', NULL, 'backend/images/page/featured_photo_322095678.jpg', 'backend/images/page/photo_760928493.jpg', NULL, NULL, 'active', '2023-04-24 03:39:48', '2023-04-24 03:39:48'),
(5, 1, 'Service 1', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-1', 'service', '1', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(6, 1, 'Service 2', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-2', 'service', '1', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(7, 1, 'Service 3', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-3', 'service', '1', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_371969401.jpg', 'backend/images/page/photo_25726546.jpg', NULL, NULL, 'active', '2023-04-24 03:48:12', '2023-04-24 03:48:12'),
(8, 1, 'Service 4', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-4', 'service', '2', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_722641288.jpg', 'backend/images/page/photo_257507619.jpg', NULL, NULL, 'active', '2023-04-24 03:49:26', '2023-04-24 03:49:26'),
(9, 1, 'Service 5', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-5', 'service', '2', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_722641288.jpg', 'backend/images/page/photo_257507619.jpg', NULL, NULL, 'active', '2023-04-24 03:49:26', '2023-04-24 03:49:26'),
(10, 1, 'Service 6', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'service-6', 'service', '2', '<p>&lt;p&gt;WHO WE ARE&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Construction solutions focused future ready&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy data foster to collaborative thinking to empowerment.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;img alt=&quot;About&quot; src=&quot;http://localhost/masa-steel/backend/images/media/media_gggggg_728468205.jpg&quot; /&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Pre-construction services&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Industrial manufacturing&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;&amp;nbsp;Building and construction&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>', NULL, 'backend/images/page/featured_photo_722641288.jpg', 'backend/images/page/photo_257507619.jpg', NULL, NULL, 'active', '2023-04-24 03:49:26', '2023-04-24 03:49:26'),
(11, 1, 'Company Overview', 'We have Completed 50+ Projects Successfully in Bangladesh.', 'company-overview', 'about', '1', '<p>Name of Company&nbsp;&nbsp; : Masa Steel &amp; Builders Ltd.</p>\r\n\r\n<p>Year of Incorporation:2013</p>\r\n\r\n<p>Corporate Office : Dhaka,Bangladesh</p>\r\n\r\n<p>Contact Number : 01912-195778</p>\r\n\r\n<p>Email Address : masasteelbl@gmail.com</p>\r\n\r\n<p>Website Address : www.masagroupbd.com</p>\r\n\r\n<p>Principal Bank : Union Bank, UCB Bank</p>\r\n\r\n<p>Trade Licence Number : 05/00485</p>\r\n\r\n<p>05/00485 : 556091773564</p>\r\n\r\n<p>Business Identification No. : 004235696-0306</p>\r\n\r\n<p>Factory Address : Nowpara, Madhabdi, Narsingdi 1604</p>\r\n\r\n<p>Sister Concern : Masa Corporation, Masa Plaza,</p>\r\n\r\n<p>Masa Mart</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We have Completed 50+ Projects Successfully in Bangladesh.</p>', NULL, 'backend/images/page/featured_photo_526390272.jpg', 'backend/images/page/photo_524855510.png', NULL, NULL, 'active', '2023-04-30 16:59:37', '2023-04-30 16:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
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
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description_part1` longtext DEFAULT NULL,
  `description_part2` longtext DEFAULT NULL,
  `featured_photo` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `category_id`, `description_part1`, `description_part2`, `featured_photo`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'We really appreciate content about the construction', 'we-really-appreciate-content-about-the-construction', 3, '<p>The brand has responded by partnering with skincare experts on social and web content, providing ingredient deep-dives and re-sharing followers&rsquo; tips and tricks on social media. The trand has responded by partnering with skincare experts on social and web content, providing ingredient deep-dives and...</p>', NULL, 'backend/images/post/featured_photo999400382.jpg', 'backend/images/post/photo_238422631.jpg', 'active', '2023-04-24 07:00:50', '2023-04-24 07:00:50'),
(2, 1, 'Best practices construction law on construction', 'best-practices-construction-law-on-construction', 5, '<p>The brand has responded by partnering with skincare experts on social and web content, providing ingredient deep-dives and re-sharing followers&rsquo; tips and tricks on social media. The trand has responded by partnering with skincare experts on social and web content, providing ingredient deep-dives and...</p>', NULL, 'backend/images/post/featured_photo13505008.jpg', 'backend/images/post/photo_790648226.jpg', 'active', '2023-04-24 07:02:43', '2023-04-24 07:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `category_name`, `slug`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Desktop', 'desktop', NULL, 'active', '2023-04-24 06:55:33', '2023-04-24 06:55:33'),
(2, 'Mouse', 'mouse', 1, 'active', '2023-04-24 06:55:55', '2023-04-24 06:55:55'),
(3, 'Commercial', 'commercial', NULL, 'active', '2023-04-24 06:56:47', '2023-04-24 06:56:47'),
(4, 'Educational', 'educational', NULL, 'active', '2023-04-24 06:57:14', '2023-04-24 06:57:14'),
(5, 'Residential', 'residential', NULL, 'active', '2023-04-24 06:57:37', '2023-04-24 06:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `description_part1` longtext DEFAULT NULL,
  `description_part2` longtext DEFAULT NULL,
  `featured_photo` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description1` longtext DEFAULT NULL,
  `description2` longtext DEFAULT NULL,
  `banner_photo` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `short_title`, `title`, `slug`, `description1`, `description2`, `banner_photo`, `photo`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'General Construction', 'Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Coulpa Qui Official Modeserunt Mollit Anim Id Est 20 Years Experience.', 'general-construction', '<h2>We Ensure Best Service</h2>\n\n<p>Cras enim urna, interdum nec porttitor vitae, sollicitudin eu eros. Praesent eget mollis nulla, non lacinia urna. Donec sit amet neque auctor, ornare dui rutrum, condimentum justo. Duis dictum, ex accumsan eleifend eleifend, ex justo aliquam nunc, in ultrices ante quam eget massa. Sed scelerisque, odio eu tempor pulvinar, magna tortor finibus lorem, ut mattis tellus nunc ut quam. Curabitur quis ornare leo. Suspendisse bibendum nibh non turpis vestibulum pellentesque.</p>\n\n<ul>\n	<li>Sed ut perspiciatis unde omnis iste natus error</li>\n	<li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur</li>\n	<li>Accusamus et iusto odio dignissimos ducimus qui blanditiis</li>\n	<li>Nam libero tempore, cum soluta nobis est eligendi optio cumque</li>\n</ul>', NULL, 'backend/images/project/banner_photo_639822643.jpg', 'backend/images/project/photo_909414010.jpg', 'backend/images/project/icon_579300418.png', 'active', '2023-04-23 16:05:21', '2023-04-23 16:05:21'),
(2, 'Malitary Academy', 'Bangladesh Malitary Academy Chittagong', 'malitary-academy', '<p>Bangladesh Malitary Academy ChittagongBangladesh Malitary Academy Chittagong&nbsp;Bangladesh Malitary Academy Chittagong</p>\r\n\r\n<p>Bangladesh Malitary Academy Chittagong</p>', NULL, 'backend/images/project/banner_photo_81986818.jpg', 'backend/images/project/photo_627389943.png', 'backend/images/project/icon_616486236.png', 'active', '2023-04-30 16:42:23', '2023-04-30 16:42:23'),
(3, 'Bangladesh', 'Bangladesh Malitary Academy Chittagong', 'bangladesh', '<p>Bangladesh Malitary Academy Chittagong</p>\r\n\r\n<p>Bangladesh Malitary Academy Chittagong</p>', NULL, 'backend/images/project/banner_photo_301694698.jpg', 'backend/images/project/photo_592606527.jpg', 'backend/images/project/icon_783840426.png', 'active', '2023-04-30 16:46:44', '2023-04-30 16:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
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
  `service_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_text` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `long_text` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `isFeatured` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DvNT1bH64s4ZRg7xTwnsZD3VWRyYjmNSKiETN8hn', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGhjYk5QTG41bWtVWEdKTUdDRURDbWd4RVZmTTFaUURoY0t0TTk4MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3QvbWFzYS1zdGVlbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1682908622),
('hW3dCfHeo1dTMbuoKqRH6aL8yZx7Nhj7RAN8zuBc', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidlN3MXFzSkc3akFVSUx4R3RQSHNUZlVTM2FpblNONEdMdE9aUFZHOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3QvbWFzYS1zdGVlbC9zZXR0aW5ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1682920032),
('JKG0MYiKqEZOHzT62vEEonMxrDl8zICAKFOPRVfU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkZCYzRKN3hZTXBQNkVpQTVnS1JrN2pFdTM0aVo3Y05ObWVjZTAwMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3QvbWFzYS1zdGVlbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1682996228);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(255) NOT NULL DEFAULT 'Billing Application',
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT 'Technical Supported by Apol',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `social_facebook` text DEFAULT NULL,
  `social_linkedIn` text DEFAULT NULL,
  `social_twitter` text DEFAULT NULL,
  `social_instagram` text DEFAULT NULL,
  `social_youtube` text DEFAULT NULL,
  `c_project` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `engineer` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `t_banner` varchar(255) DEFAULT NULL,
  `google_map_code` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `app_name`, `logo`, `favicon`, `footer`, `email`, `phone`, `address`, `social_facebook`, `social_linkedIn`, `social_twitter`, `social_instagram`, `social_youtube`, `c_project`, `client`, `engineer`, `experience`, `t_banner`, `google_map_code`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Masa Steel & Builders Ltd', 'backend/settings/logo_194807907.png', 'backend/settings/favicon_169754663.png', 'Technical Supported by Apol', 'miraz@gmail.com', '01912-195778', 'Nowpara, Madhabdi, Narsingdi 1604', 'https://www.facebook.com/', 'https://www.linkin.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', NULL, '30', '40', '50', '5', 'backend/settings/t_banner_624493526.jpg', NULL, 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description_part1` varchar(255) DEFAULT NULL,
  `description_part2` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `position` double DEFAULT NULL,
  `slider_photo` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `description_part1`, `description_part2`, `button_name`, `button_url`, `position`, `slider_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CONSTRUCTION BUSINESS', NULL, 'We build something<br>\r\nnew and consistent.', 'We build something We build something<br>\r\nnew and consistent We build something.', 'consistent', '#', 1, 'backend/images/slider/slider_photo_21588390.jpg', 'active', '2023-04-23 15:51:20', '2023-04-23 15:51:20'),
(2, 'CONSTRUCTION BUSINESS', NULL, 'We build something<br>\r\nnew and consistent.', 'We build something We build something<br>\r\nnew and consistent We build something.', 'consistent', '#', 2, 'backend/images/slider/slider_photo_155713537.jpg', 'active', '2023-04-23 15:51:26', '2023-04-23 15:51:26'),
(3, 'CONSTRUCTION BUSINESS', NULL, 'A Complete Solution of<br>\r\nSTEEL BUILDING', 'We Build Your Dream', 'More', '#', 3, 'backend/images/slider/slider_photo_763305637.jpg', 'active', '2023-04-30 16:35:07', '2023-04-30 16:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `present_adddress` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `educational_quantification` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `text_password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
