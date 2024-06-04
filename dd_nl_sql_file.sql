-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2024 at 08:57 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dd_nl_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `attachment_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basicattachments`
--

DROP TABLE IF EXISTS `basicattachments`;
CREATE TABLE IF NOT EXISTS `basicattachments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `basicticket_id` bigint(20) UNSIGNED NOT NULL,
  `attachment_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basictickets`
--

DROP TABLE IF EXISTS `basictickets`;
CREATE TABLE IF NOT EXISTS `basictickets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(1, 'khan', 'dreamdiver10@gmail.com', '01824053761', 'sdgvds', '2024-05-30 00:51:36', '2024-05-30 00:51:36');

-- --------------------------------------------------------

--
-- Table structure for table `dreamjobs`
--

DROP TABLE IF EXISTS `dreamjobs`;
CREATE TABLE IF NOT EXISTS `dreamjobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `education`, `job_title`, `salary`, `job_description`, `location`, `company_name`, `skills`, `mobile`, `email`, `image`, `date`, `file`, `link`, `process`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Sazal Abdullah', 'csehmb', 'web', '20000', 'fgfh', 'aeonerp.dreamdiver.nl', 'dd', 'ergr', '564568485646', 'sazal@gmail.com', 'images/4XhKRJ29lUe4LUNYfBkcGLJoJyEu02bs9s3AA0SE.jpg', '2024-05-28', 'files/uypp0hbwySwMrxE8uea5dCqhxHALVAU9xorUqM0z.txt', NULL, 'sdtrhh', 'ffdjrtt', '2024-05-28 03:16:48', '2024-05-28 03:31:18'),
(2, 'sp khan', 'BSC in CSE', 'html', '20k', NULL, 'panthopoth', 'Dream diver', 'good', '01234567890', 'sazal@gmail.com', NULL, '2024-05-29', 'files/HES4wbQxdwdiLAhGn0BMXETOa2hgUvyCqLaOZsM6.txt', NULL, 'ok', 'hmm', '2024-05-28 23:28:09', '2024-05-28 23:28:09'),
(3, 'Dream Diver', 'BSC in CSE', 'dfeh', '20k', NULL, 'panthopoth', 'Dream diver', 'good', '01234567890', 'admin@admin.com', NULL, '2024-05-29', 'files/2AwQFexg4dLxghT75ev1nTPhxGVaf5VGgQ2QfDcx.txt', NULL, 'drtheth', 'ASDg', '2024-05-28 23:36:20', '2024-05-28 23:36:20'),
(4, 'Arif', 'BSC in CSE', 'sdf', '20000', NULL, 'aeonerp.dreamdiver.nl', 'Dream diver', 'good', '01234567890', 'admin@admin.com', NULL, '2024-05-29', 'files/jAoFYQUoJ9Eld4B3OmIbf1ldp1P77bMiovCTwQkP.txt', NULL, 'dty', 'sef', '2024-05-29 00:56:04', '2024-05-29 00:56:04'),
(5, 'Arif', 'dzrgyed', 'sdfzbh', 'zdstg', NULL, 'panthopoth', 'Dream diver', 'good', '01234567890', 'admin@admin.com', NULL, '2024-05-30', 'files/jLOaSxVo1rpRO9hRGSzim5HuwGCWFpKCGtHEQgHu.txt', NULL, 'vbf', 'sdvgf', '2024-05-30 00:14:14', '2024-05-30 00:14:14'),
(6, 'Sazal Abdullah', 'BSC in CSE', 'aerge', '20k', NULL, 'aeonerp.dreamdiver.nl', 'Dream diver', 'good', '01234567890', 'admin@admin.com', NULL, '2024-05-30', 'files/w9PRgluCDK63lLZQo571h3YItQpDPTsPYWxHaZs7.jpg', NULL, 'eryh', 'dhfb', '2024-05-30 00:58:21', '2024-05-30 00:58:21'),
(7, 'Merrill Lucas', 'Aliquam porro qui vo', 'Ex impedit ipsam do', 'Corrupti consequunt', NULL, 'Tempore ipsum qui', 'Clay Mercer Inc', 'Et ipsa cupidatat e', 'Dolore fugit ad inv', 'buqor@mailinator.com', NULL, '1983-04-15', 'files/4YbOk4pPRTRM6SO6zTvmRtmXu2wxoLOSANrC85ow.jpg', NULL, 'Molestiae error duci', 'Dolore magna ducimus', '2024-05-30 01:05:32', '2024-05-30 01:05:32'),
(8, 'Isaac Kemp', 'In quia qui earum te', 'Obcaecati neque in t', 'Quisquam perspiciati', NULL, 'Ipsum et necessitati', 'Shields and Lucas Inc', 'A sed placeat in qu', 'Consequatur Qui err', 'mojivitihe@mailinator.com', NULL, '2023-12-25', NULL, NULL, 'Ipsum est et saepe u', 'Sapiente quia accusa', '2024-05-30 01:58:51', '2024-05-30 01:58:51'),
(9, 'Shaine Marquez sp', 'Cum earum elit quas', 'Rerum harum numquam', 'Ut tempor explicabo', NULL, 'Elit in laboris qui', 'Zamora Cunningham Inc', 'Ullam aute amet eaq', 'Reprehenderit id vo', 'xygolosohu@mailinator.com', NULL, '2007-06-02', 'files/fydadBS0BIT5R5KFsuirj2AAXSZvakSPS7BZ6gad.jpg', NULL, 'Porro aliquip volupt', 'Accusamus totam et h', '2024-06-02 02:04:07', '2024-06-02 02:04:07'),
(10, 'Shaine Marquez sp', 'Cum earum elit quas', 'Rerum harum numquam', 'Ut tempor explicabo', NULL, 'Elit in laboris qui', 'Zamora Cunningham Inc', 'Ullam aute amet eaq', 'Reprehenderit id vo', 'xygolosohu@mailinator.com', NULL, '2007-06-02', 'files/xbjBjgFia3mWnNsAZOtqUA0sufyjaP24vliwmyDF.jpg', NULL, 'Porro aliquip volupt', 'Accusamus totam et h', '2024-06-02 02:06:22', '2024-06-02 02:06:22'),
(11, 'Allistair Torres', 'Ab et omnis providen', 'Ad voluptate volupta', 'Voluptate natus fugi', NULL, 'Et dolorum suscipit', 'Morton and Rasmussen Inc', 'Nisi nisi sed ullam', 'Est adipisicing quia', 'zoxutaton@mailinator.com', NULL, '2009-06-24', NULL, NULL, 'Molestiae ipsum quo', 'Quas qui occaecat of', '2024-06-02 03:49:07', '2024-06-02 03:49:07'),
(12, 'Allistair Torres', 'Ab et omnis providen', 'Ad voluptate volupta', 'Voluptate natus fugi', NULL, 'Et dolorum suscipit', 'Morton and Rasmussen Inc', 'Nisi nisi sed ullam', 'Est adipisicing quia', 'zoxutaton@mailinator.com', NULL, '2009-06-24', NULL, NULL, 'Molestiae ipsum quo', 'Quas qui occaecat of', '2024-06-02 03:51:52', '2024-06-02 03:51:52'),
(13, 'Gavin Winters', 'Blanditiis id amet', 'Non nulla error maxi', 'Numquam fugit aliqu', NULL, 'Veritatis nulla qui', 'Ball and Cervantes Associates', 'Enim consequatur per', 'Voluptate cillum qua', 'denevuhar@mailinator.com', NULL, '2000-08-03', NULL, NULL, 'Non odit unde aut no', 'Sit consequatur Te', '2024-06-02 03:52:09', '2024-06-02 03:52:09'),
(14, 'Brody Cleveland33', 'Sequi dolorem volupt', 'Qui perspiciatis in', 'Officiis quaerat eaq', NULL, 'Consequatur Magnam', 'Huffman Edwards LLC', 'Aliquid animi moles', 'Qui vero voluptatem', 'tijafopewo@mailinator.com', NULL, '2011-02-14', NULL, NULL, 'Qui deserunt fugiat', 'Doloribus dicta eos', '2024-06-02 21:31:32', '2024-06-02 21:31:32'),
(15, 'Karly George33', 'Natus cum non harum', 'Nesciunt temporibus', 'Ea ea voluptatum ea', NULL, 'Ea duis non maxime e', 'Sutton Mckenzie Associates', 'Est impedit omnis u', 'Eius at placeat eum', 'ribe@mailinator.com', NULL, '1982-06-26', NULL, NULL, 'Fuga Architecto ut', 'Voluptatem duis sin', '2024-06-03 01:21:45', '2024-06-03 01:21:45'),
(16, 'Elton Roberson sazal', 'Quidem sit iste lab', 'Fugiat sequi qui exc', 'Vero nobis perspicia', NULL, 'Officiis occaecat pl', 'Best and Estrada Trading', 'Ut occaecat non anim', 'In dolor porro volup', 'nudebudis@mailinator.com', NULL, '1983-08-18', 'files/r2xxGBnOecOD4UfU1rsfhGGvJLK7uTl6xB5aXwB6.jpg', NULL, 'Totam qui ut ea id t', 'Omnis dignissimos ut', '2024-06-03 01:23:48', '2024-06-03 01:23:48'),
(17, 'Karleigh Justice sakib', 'Saepe facere culpa s', 'Fugit ea qui quod q', 'Quaerat et rem aliqu', NULL, 'Id molestiae enim co', 'Kinney and Fowler Inc', 'Enim recusandae Dol', 'Tempora assumenda an', 'sagovycaq@mailinator.com', NULL, '1981-10-28', NULL, NULL, 'Et laborum magnam qu', 'Sed veniam cupidata', '2024-06-03 03:03:04', '2024-06-03 03:03:04'),
(18, 'Mama', 'Atque neque ipsa en', 'xcfghdfg', 'Est reprehenderit v', NULL, 'Ipsum et necessitati', 'Dream diver', 'Corporis eveniet ea', 'Magna et eaque fugia', 'admin@gmail.com', NULL, '2024-06-03', 'files/sbCdI3ji5LHGhwEdAWiyqwZSunapbvwc4OIgxiTp.jpg', NULL, 'xfghdfyh', 'xfdgcfgfc', '2024-06-03 03:46:28', '2024-06-03 03:46:28'),
(19, 'Rashad Ramirez', 'Itaque est nisi nisi', 'Quidem alias non ex', 'Et exercitationem do', NULL, 'Accusamus labore eum', 'Austin Meyers Inc', 'Et distinctio Disti', 'Numquam anim est qui', 'desyt@mailinator.com', NULL, '2014-12-17', 'files/dYiVRYzNNW2tGJacuNznbJMHGfP0OYWm83wS6pbO.jpg', NULL, 'Non voluptate ullamc', 'Quia irure tempor si', '2024-06-03 04:04:37', '2024-06-03 04:04:37'),
(20, 'Basil Morales', 'Dolorum modi hic fug', 'Qui nisi non consect', 'Minim aut sit in qu', NULL, 'Consequatur Rem non', 'Richards and Whitney Inc', 'Sunt quia corporis', 'Debitis incidunt ar', 'lalejed@mailinator.com', NULL, '2001-08-27', NULL, NULL, 'Voluptatem Quis duc', 'Laudantium temporib', '2024-06-04 01:05:16', '2024-06-04 01:05:16'),
(21, 'Arif vai', 'Dolorem porro sed es', 'Hic facere velit con', 'Quae quia quis et la', NULL, 'Suscipit quia volupt', 'Carter and Russo Plc', 'Minus repudiandae am', 'Qui et laborum in ul', 'jodekyxir@mailinator.com', NULL, '2004-10-02', NULL, NULL, 'Molestiae commodo su', 'Aliquip quasi volupt', '2024-06-04 02:20:13', '2024-06-04 02:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `faq_question` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_answer` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

DROP TABLE IF EXISTS `home_services`;
CREATE TABLE IF NOT EXISTS `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_22_113715_create_permission_tables', 1),
(6, '2024_01_23_081456_create_home_services_table', 1),
(7, '2024_01_25_101231_create_projects_table', 1),
(8, '2024_01_27_050936_create_faqs_table', 1),
(9, '2024_01_28_051957_create_projectsinglepages_table', 1),
(10, '2024_02_03_095224_create_tickets_table', 1),
(11, '2024_02_04_040833_tickethistories', 1),
(12, '2024_02_06_084845_attachments', 1),
(13, '2024_02_07_042305_contacts', 1),
(14, '2024_02_11_033048_basictickets', 1),
(15, '2024_02_13_061502_basicattachments', 1),
(16, '2024_05_26_035433_create_dreamjobs_table', 1),
(17, '2024_05_26_073729_create_students_table', 1),
(18, '2024_05_27_073736_add_fields_to_students_table', 1),
(19, '2024_05_28_052050_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_intro` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_link` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_cover_photo` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci,
  `project_short_description` text COLLATE utf8mb4_unicode_ci,
  `project_video_link` text COLLATE utf8mb4_unicode_ci,
  `project_client_review` text COLLATE utf8mb4_unicode_ci,
  `project_client_video_review` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectsinglepages`
--

DROP TABLE IF EXISTS `projectsinglepages`;
CREATE TABLE IF NOT EXISTS `projectsinglepages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_cover_photo` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_title` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci,
  `project_short_description` text COLLATE utf8mb4_unicode_ci,
  `project_video_link` text COLLATE utf8mb4_unicode_ci,
  `project_link` text COLLATE utf8mb4_unicode_ci,
  `project_client_review` text COLLATE utf8mb4_unicode_ci,
  `project_client_video_review` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-05-28 03:13:03', '2024-05-28 03:13:03'),
(2, 'user', 'web', '2024-05-28 03:13:03', '2024-05-28 03:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `file` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `address`, `mobile`, `education`, `experience`, `salary`, `reference`, `email`, `image`, `date`, `file`, `link`, `note`, `created_at`, `updated_at`) VALUES
(1, 'sp khan', 'Monipuri para', '564568485646001', 'cse', '2 year', '20k', 'dd', 'admin@admin.com', 'images/xYpo5ayQVkFKbnC40ZAfsoQox9gRsrr3JbluGH7r.jpg', '2024-05-28', 'files/qLUykOWiVOT4BiLZ0xkM96JmMIKt0ppY32Qwd0AM.txt', 'https://dreamdiver.nl/contact_form_index', 'erh', '2024-05-28 03:18:47', '2024-05-28 03:18:47'),
(2, 'Abdullah', 'Monipuri para', '01234567890', 'cse', '2 year', '20000', 'dd', 'admin@admin.com', NULL, '2024-05-28', 'files/FlslkunOwfTjbzeJrWJul8AIzTov4qiO1wgFexvk.jpg', 'https://dreamdiver.nl/contact_form_index', 'rth', '2024-05-28 03:20:36', '2024-05-28 03:20:36'),
(3, 'khan', 'Monipuri para', '564568485646', 'cse', '2 year', '20k', 'dd', 'admin@admin.com', NULL, '2024-05-29', 'files/zzMP896VixZWJdvrcFeyUCSG8OF1ZvR8neFp1HIg.jpg', 'https://dreamdiver.nl/contact_form_index', 'dfh', '2024-05-29 03:00:31', '2024-05-29 03:00:31'),
(4, 'backup', 'Monipuri para', '01234567890', 'BSC in CSE', '2 year', '20k', 'dd', 'admin@admin.com', NULL, '2024-05-30', 'files/SWDIXi6M9DrjT7CGpgQBKd0Ld3njRZFHuiZyptY2.jpg', 'https://dreamdiver.nl/contact_form_index', 'eruyh', '2024-05-29 20:17:23', '2024-05-29 20:17:23'),
(5, '.htaccess', 'Monipuri para 2015', '01234567890', 'BSC in CSE', '2 year', '20k', 'dd-nl', 'admin@admin.com', NULL, '2024-05-30', 'files/kFCN34sA7aHSjYkGxeHSNVKFwRnypWIWAVSTc0cW.jpg', 'https://dreamdiver.nl/contact_form_index', 'rsjd', '2024-05-29 20:19:17', '2024-05-29 20:19:17'),
(7, '.htaccess', 'utt', '564568485646001', 'BSC in CSE', '2 year', '20k', 'dd-nl', 'admin@admin.com', NULL, '2024-05-30', 'files/NAGQq7vxZqanLJCHxwHgJ4yRaBMleerHkxJBnugu.txt', 'https://dreamdiver.nl/contact_form_index', 'ZXzC', '2024-05-30 00:12:25', '2024-05-30 00:12:25'),
(8, 'Dream Diver', 'Monipuri para', '01234567890', 'BSC in CSE', '2 year', '20k', 'dd', 'admin@admin.com', NULL, '2024-05-30', 'files/3uig5P3AiBQZS0SX3rvDHBxgOdRIvOWFPuPebl4t.txt', 'https://dreamdiver.nl/contact_form_index', 'rdstjh', '2024-05-30 00:47:18', '2024-05-30 00:47:18'),
(9, 'Dream Diver', 'Monipuri para', '01234567890', 'cse', '2 year', '20k', 'dd', 'admin@admin.com', NULL, '2024-05-30', 'files/046J1HqnPDcZjeK3u18OM8IZqcO7h78yvnRDeYdR.jpg', 'https://dreamdiver.nl/contact_form_index', 'asgftwer', '2024-05-30 00:51:06', '2024-05-30 00:51:06'),
(10, 'backup-22-5-24', 'Monipuri para', '01234567890', 'cse', '2 year', '20k', 'dd', 'admin@admin.com', NULL, '2024-05-30', 'files/Et1Lvpv0UKkjnz6LytmclukDCUciEpLLxATaSvMg.jpg', 'https://dreamdiver.nl/contact_form_index', 'dxhf', '2024-05-30 00:56:20', '2024-05-30 00:56:20'),
(11, 'sakib', 'Monipuri para', '01234567890', 'cse', '2 year', 'zdstg', 'dd', 'admin@admin.com', NULL, '2024-05-30', 'files/OqEkEMUVYQ8TROiiAbOO9D0k7xgwMAKyzj4aYbos.jpg', 'https://dreamdiver.nl/contact_form_index', 'sedf', '2024-05-30 00:57:16', '2024-05-30 00:57:16'),
(12, 'Hyacinth Christian', 'Dolorem dignissimos', 'Eos magni hic esse', 'Consectetur adipisic', 'Distinctio Laborum', 'Doloremque odio veri', 'Quis error et explic', 'kozymyme@mailinator.com', NULL, '1973-11-17', 'files/CGr1Z8ftWQXXo1dImREt43brrcsv5xjkvBLSosvp.jpg', 'https://www.fewu.us', 'Nihil incididunt eve', '2024-05-30 01:02:40', '2024-05-30 01:02:40'),
(13, 'Ulric Combs', 'Laboriosam eum enim', 'Praesentium sint odi', 'Dolorem enim quos ne', 'Neque voluptas nobis', 'Nesciunt et nostrum', 'Eveniet provident', 'juqazuw@mailinator.com', NULL, '1986-12-21', 'files/pYyIuf6tho6PJUHaohiawlsOr9Ein0jp9jhZBms0.jpg', 'https://www.wytuwuxok.com', 'Perferendis autem ni', '2024-05-30 01:05:18', '2024-05-30 01:05:18'),
(14, 'Andrew Goodman', 'Inventore dolor et e', 'Mollitia odio non te', 'Inventore illum omn', 'Impedit quos cupida', 'Anim sunt possimus', 'Ea animi voluptas o', 'povahuqek@mailinator.com', NULL, '1999-03-17', 'files/qLUykOWiVOT4BiLZ0xkM96JmMIKt0ppY32Qwd0AM.txt', 'https://www.ximizo.cc', 'Quos nulla ut aliqui', '2024-05-30 02:14:41', '2024-05-30 02:14:41'),
(15, 'Martha Kaufman', 'Non duis duis quis s', 'Mollit aut voluptate', 'Dolore culpa enim la', 'Consequatur Aliquip', 'Eius vel Nam nihil m', 'Eum consequatur aute', 'tynysurur@mailinator.com', NULL, '2018-04-25', 'files/IamKpB8Bw6uVfeXneDlWsUkSsj5G6oKy42YLV7fD.jpg', 'https://www.kuxixaw.ws', 'Voluptate neque aut', '2024-05-31 22:29:57', '2024-05-31 22:29:57'),
(16, 'Dalton Blackwell sp', 'Ullamco praesentium', 'Odit qui iste fugiat', 'Aperiam assumenda cu', 'Et voluptatum aperia', 'Voluptatum incidunt', 'Obcaecati accusantiu', 'wabi@mailinator.com', NULL, '2004-07-22', 'files/kTNnUqOZqbERIh0977TcX5NWHtL7JJ8QHGgiXF0O.jpg', 'https://www.vyhiwegok.ws', 'Sequi id provident', '2024-06-02 02:02:16', '2024-06-02 02:02:16'),
(17, 'Callum Carson', 'Qui aliquip et et ea', 'In consectetur eaqu', 'Vitae dolorem exerci', 'Temporibus dolore ul', 'Aliquam inventore lo', 'Aut ullam quis adipi', 'najo@mailinator.com', NULL, '1978-07-01', NULL, 'https://www.fulegiqecivo.biz', 'Excepteur ab qui adi', '2024-06-02 02:06:31', '2024-06-02 02:06:31'),
(18, 'Ronan Walton sp', 'Sit ducimus soluta', 'Magnam ut mollitia e', 'Doloribus voluptatem', 'Sed odit deserunt di', 'Provident hic totam', 'Ut quibusdam ad cons', 'butarofy@mailinator.com', NULL, '1983-06-07', NULL, 'https://www.pirupogelig.org', 'Tenetur eos qui atqu', '2024-06-02 02:11:05', '2024-06-02 02:11:05'),
(19, 'Cain Peck sp', 'Odio est quis do ea', 'Fuga Numquam simili', 'Dolor veniam necess', 'Praesentium aut comm', 'Iste qui facere iure', 'Error eligendi et di', 'vufamaqod@mailinator.com', NULL, '2008-08-11', NULL, 'https://www.puzaheca.org.uk', 'Beatae mollitia magn', '2024-06-02 02:15:13', '2024-06-02 02:15:13'),
(20, 'Hedda Estes', 'Consequuntur proiden', 'Quia tempor est repu', 'Expedita recusandae', 'Proident sed ab ea', 'Quo et nihil molesti', 'Alias fugiat et ut', 'tohapy@mailinator.com', NULL, '2017-08-08', 'files/fsBky5QOg44miYZw75g6Tt5njOHZPPMhX6JNcRwz.jpg', 'https://www.tazuvizuhuk.org.uk', 'Vero pariatur Nulla', '2024-06-02 02:43:57', '2024-06-02 02:43:57'),
(21, 'Abra Mack', 'Molestias in cum et', 'Aut hic magnam asper', 'In voluptas minima d', 'Itaque mollit consec', 'Impedit dolorem com', 'Nemo omnis sint natu', 'gemahyniba@mailinator.com', NULL, '2002-03-29', NULL, 'https://www.zuzyhihylogal.ws', 'Aut nobis dolor volu', '2024-06-02 02:50:20', '2024-06-02 02:50:20'),
(22, 'Dahlia Frazier', 'Dignissimos nostrud', 'Provident eu ad dol', 'Elit dolorem qui au', 'Dolore qui dolorem i', 'Qui laborum Corrupt', 'Consectetur illo sit', 'roju@mailinator.com', NULL, '2008-03-27', NULL, 'https://www.wyqiropoji.mobi', 'Illo tempor at maior', '2024-06-02 02:53:25', '2024-06-02 02:53:25'),
(23, 'Ezekiel Colon', 'Optio sunt dolorem', 'Et labore fugit quo', 'Quo proident perfer', 'Blanditiis expedita', 'Voluptatibus in quis', 'Soluta maiores iusto', 'jarawer@mailinator.com', NULL, '1989-06-04', NULL, 'https://www.latenifakybikow.org', 'Facilis dolore quibu', '2024-06-02 03:53:41', '2024-06-02 03:53:41'),
(24, 'Ezekiel Colon', 'Optio sunt dolorem', 'Et labore fugit quo', 'Quo proident perfer', 'Blanditiis expedita', 'Voluptatibus in quis', 'Soluta maiores iusto', 'jarawer@mailinator.com', NULL, '1989-06-04', NULL, 'https://www.latenifakybikow.org', 'Facilis dolore quibu', '2024-06-02 03:54:10', '2024-06-02 03:54:10'),
(25, 'Tanya Parker', 'Numquam nobis magna', 'Provident voluptas', 'Non nulla dolores of', 'Odit aliquip delenit', 'Libero omnis repudia', 'Minim rerum eaque ea', 'bydejazib@mailinator.com', NULL, '1994-05-11', NULL, 'https://www.wikeduj.us', 'Sint et rerum eum al', '2024-06-02 21:30:18', '2024-06-02 21:30:18'),
(26, 'Kasimir Beasley', 'Ut et id quia sunt o', 'Aut mollit facere si', 'Est est iure dolor a', 'Atque nemo amet eve', 'Dicta incidunt quis', 'Deserunt consequatur', 'vupenogew@mailinator.com', NULL, '1984-05-07', NULL, 'https://www.vev.tv', 'Explicabo Et dolori', '2024-06-02 23:11:58', '2024-06-02 23:11:58'),
(27, 'Katell Conrad', 'Commodi officiis ea', 'Laborum voluptatem q', 'Doloremque officiis', 'Unde dolorum in illu', 'Et mollitia aut enim', 'Cupidatat sed in cil', 'hutefujuj@mailinator.com', NULL, '1973-01-08', NULL, 'https://www.fuco.biz', 'Ad quia voluptatibus', '2024-06-02 23:14:40', '2024-06-02 23:14:40'),
(28, 'Baker Mayo', 'Iure quisquam reicie', 'Ut dolore voluptatem', 'Proident sit ipsum', 'In aut consequatur', 'Quia delectus accus', 'Consequat Doloribus', 'cyvizuf@mailinator.com', NULL, '1994-11-11', NULL, 'https://www.xycewadopywoq.us', 'Neque do labore eius', '2024-06-02 23:22:50', '2024-06-02 23:22:50'),
(29, 'Xavier Farmer', 'Consequat Cumque at', 'Est quibusdam porro', 'Sit aliqua Aspernat', 'Rerum distinctio Se', 'Officia aut adipisic', 'Nisi recusandae Con', 'fuqydoheqa@mailinator.com', NULL, '2017-08-31', NULL, 'https://www.divilugukisy.info', 'Corrupti error mole', '2024-06-02 23:44:41', '2024-06-02 23:44:41'),
(30, 'Uriah Richards', 'Et id aut et vel qu', 'Dolorem quidem commo', 'Accusantium aliqua', 'Atque aspernatur vol', 'Ipsa minus tempor s', 'Et ea in non neque q', 'wesojyb@mailinator.com', NULL, '1979-07-04', NULL, 'https://www.tosij.com', 'Sit et consequatur', '2024-06-02 23:46:27', '2024-06-02 23:46:27'),
(31, 'Rooney York', 'Vel laborum Consequ', 'Similique qui dolor', 'Consequat Non asper', 'Sit eligendi est a', 'Mollitia dolores sin', 'Est adipisci dolore', 'fuqu@mailinator.com', NULL, '1998-12-11', NULL, 'https://www.tapilaxotys.com', 'Voluptate vel volupt', '2024-06-02 23:46:46', '2024-06-02 23:46:46'),
(32, 'Harlan Barron', 'Est esse voluptatum', 'Nobis quo adipisicin', 'Excepteur aute et qu', 'Amet omnis alias lo', 'Cupiditate lorem dol', 'Mollitia voluptas qu', 'piqutyvo@mailinator.com', NULL, '1976-06-06', NULL, 'https://www.luqebawiso.ca', 'Quibusdam sed conseq', '2024-06-02 23:53:53', '2024-06-02 23:53:53'),
(33, 'Yen Frost', 'Velit in vel blandit', 'Dolor provident iru', 'Animi accusamus mag', 'Est culpa in accusa', 'Quibusdam ea asperna', 'Et iusto dolores dis', 'lyguderywy@mailinator.com', NULL, '1997-02-27', NULL, 'https://www.lepotepiw.co', 'Magna optio amet q', '2024-06-02 23:55:05', '2024-06-02 23:55:05'),
(34, 'Elmo Wynn', 'Nostrud ea eaque est', 'Et aperiam doloribus', 'Non voluptatem Aspe', 'Et duis fugiat earum', 'Eligendi aut fugiat', 'Nulla et rerum ut ma', 'migocaket@mailinator.com', NULL, '1997-07-17', NULL, 'https://www.noripaqorica.biz', 'Quaerat doloribus cu', '2024-06-03 00:12:01', '2024-06-03 00:12:01'),
(35, 'Shelley Summers', 'Expedita non ducimus', 'Qui quidem aut dolor', 'Esse expedita enim i', 'Nulla commodo non of', 'Veniam at cum eum l', 'Aliquid id at offic', 'jeru@mailinator.com', NULL, '1972-05-18', NULL, 'https://www.fizihyqulacofa.co', 'Vero ut consectetur', '2024-06-03 00:39:57', '2024-06-03 00:39:57'),
(36, 'Keiko Moreno', 'Est itaque impedit', 'Reprehenderit sequi', 'Aut ab quos dolor al', 'Ipsam amet optio o', 'Hic asperiores rerum', 'Illo provident magn', 'zebyhuxocy@mailinator.com', NULL, '1988-04-13', NULL, 'https://www.bomizyre.ws', 'Aliquip odio ipsa o', '2024-06-03 00:41:21', '2024-06-03 00:41:21'),
(37, 'Yael Petersen', 'Quos expedita incidu', 'Aliquip duis dolor n', 'Odio autem quis dolo', 'In sed commodi et ve', 'Quibusdam magnam vol', 'Aute et ut ipsa nih', 'xikowip@mailinator.com', NULL, '1996-02-11', NULL, 'https://www.dufegubagulidy.com', 'Rem dolor voluptatem', '2024-06-03 00:49:10', '2024-06-03 00:49:10'),
(38, 'Calista Harper', 'Quia ea necessitatib', 'Veniam animi labor', 'Unde officiis ea ani', 'Fuga Recusandae De', 'Voluptatem dicta cil', 'Enim accusantium vel', 'selyxake@mailinator.com', NULL, '1972-01-26', NULL, 'https://www.kenesirix.info', 'Et quia et Nam quibu', '2024-06-03 01:00:53', '2024-06-03 01:00:53'),
(39, 'Christine Compton', 'Nostrum in architect', 'Quidem dolore nisi e', 'Veritatis magni sapi', 'Explicabo Voluptate', 'Sit sed eveniet vo', 'Laboris quis sequi i', 'myxofe@mailinator.com', NULL, '2021-08-05', NULL, 'https://www.jygasowicinu.cm', 'Ab praesentium moles', '2024-06-03 01:05:50', '2024-06-03 01:05:50'),
(40, 'MacKenzie Foley', 'Dolore sed dolore ei', 'Magna et eaque fugia', 'Ipsa sit et repreh', 'Debitis cum perferen', 'Labore qui sunt exc', 'Illum culpa fuga', 'gufe@mailinator.com', NULL, '1990-04-06', NULL, 'https://www.defun.cm', 'Rem eligendi aute de', '2024-06-03 01:06:27', '2024-06-03 01:06:27'),
(41, 'MacKenzie Foley', 'Dolore sed dolore ei', 'Magna et eaque fugia', 'Ipsa sit et repreh', 'Debitis cum perferen', 'Labore qui sunt exc', 'Illum culpa fuga', 'gufe@mailinator.com', NULL, '1990-04-06', NULL, 'https://www.defun.cm', 'Rem eligendi aute de', '2024-06-03 01:08:16', '2024-06-03 01:08:16'),
(42, 'Shannon Gutierrez', 'Molestias omnis moll', 'In id doloremque op', 'Cillum officia quia', 'Dolore odit in quae', 'Eos veniam ullam d', 'Cillum consequat Ha', 'muzyqukyd@mailinator.com', NULL, '1978-03-09', NULL, 'https://www.kadogylezyton.tv', 'Expedita ad officia', '2024-06-03 01:16:44', '2024-06-03 01:16:44'),
(43, 'Ingrid Schwartz arif', 'Beatae laboriosam v', 'Consequatur accusam', 'Soluta exercitation', 'Ullam quia recusanda', 'Odio saepe consequat', 'Ipsum velit sint sae', 'dimus@mailinator.com', NULL, '1992-12-01', NULL, 'https://www.mev.co', 'Voluptatem Ipsam re', '2024-06-03 01:17:48', '2024-06-03 01:17:48'),
(44, 'Aaron Sharp', 'Eos dolorem occaeca', 'Est proident assume', 'Totam sint anim even', 'Animi sint a aliqua', 'Illum est fuga Re', 'In est aut quas vel', 'larew@mailinator.com', NULL, '1994-08-04', NULL, 'https://www.nabi.org.au', 'Officiis beatae cons', '2024-06-03 01:36:09', '2024-06-03 01:36:09'),
(45, 'Winter Reeves', 'Ut ut modi lorem dol', 'Quisquam repellendus', 'Atque neque ipsa en', 'Qui autem eveniet s', 'Est reprehenderit v', 'Reprehenderit totam', 'kaxyhuza@mailinator.com', NULL, '2013-03-09', NULL, 'https://www.kafegefygonagi.com', 'Odio expedita fugit', '2024-06-03 03:40:29', '2024-06-03 03:40:29'),
(46, 'Winter Reeves', 'Ut ut modi lorem dol', 'Quisquam repellendus', 'Atque neque ipsa en', 'Qui autem eveniet s', 'Est reprehenderit v', 'Reprehenderit totam', 'kaxyhuza@mailinator.com', NULL, '2013-03-09', NULL, 'https://www.kafegefygonagi.com', 'Odio expedita fugit', '2024-06-03 03:40:33', '2024-06-03 03:40:33'),
(47, 'Cadman Finley44', 'Cumque blanditiis iu', 'Ducimus molestias o', 'Enim ea sapiente sin', 'Quibusdam doloremque', 'Doloremque dignissim', 'Quaerat laboriosam', 'jybodud@mailinator.com', NULL, '2016-02-10', 'files/i20qLwssxAX8sAYxUykt7zRpjEXbnI5Tp7eOc7HA.jpg', 'https://www.nyrepacify.co.uk', 'Consequuntur veritat', '2024-06-03 23:47:58', '2024-06-03 23:47:58'),
(48, 'Portia Aguilar', 'Rerum ratione dolore', 'Est molestias simili', 'Ipsum debitis deser', 'Saepe sed placeat n', 'Nostrud consectetur', 'Temporibus ullamco e', 'hilyjakut@mailinator.com', NULL, '2019-04-13', NULL, 'https://www.xefevinukaxofyg.mobi', 'Doloribus provident', '2024-06-03 23:55:07', '2024-06-03 23:55:07'),
(49, 'Portia Aguilar', 'Rerum ratione dolore', 'Est molestias simili', 'Ipsum debitis deser', 'Saepe sed placeat n', 'Nostrud consectetur', 'Temporibus ullamco e', 'hilyjakut@mailinator.com', NULL, '2019-04-13', NULL, 'https://www.xefevinukaxofyg.mobi', 'Doloribus provident', '2024-06-03 23:57:23', '2024-06-03 23:57:23'),
(50, 'Jonah Wilkins', 'Consectetur reprehen', 'Officia esse elit f', 'Ut et facilis adipis', 'Ut sint minim minus', 'Et nostrum quia solu', 'Unde officiis distin', 'xonasaqaba@mailinator.com', NULL, '2013-09-10', NULL, 'https://www.gawezaz.org.au', 'Dolorum facere lorem', '2024-06-03 23:59:44', '2024-06-03 23:59:44'),
(51, 'Jonah Wilkins', 'Consectetur reprehen', 'Officia esse elit f', 'Ut et facilis adipis', 'Ut sint minim minus', 'Et nostrum quia solu', 'Unde officiis distin', 'xonasaqaba@mailinator.com', NULL, '2013-09-10', NULL, 'https://www.gawezaz.org.au', 'Dolorum facere lorem', '2024-06-04 00:01:26', '2024-06-04 00:01:26'),
(52, 'Meredith Bowman', 'Nisi obcaecati a dis', 'Eaque ut enim ipsam', 'Ad ut quod ratione a', 'Sit id non molestia', 'Fugiat est dolorem', 'Necessitatibus quae', 'jused@mailinator.com', NULL, '1971-07-12', NULL, 'https://www.jejym.com.au', 'Esse et eaque exerc', '2024-06-04 00:05:33', '2024-06-04 00:05:33'),
(53, 'Dominic Parrish', 'Numquam saepe Nam su', 'Est non necessitatib', 'Autem doloremque ull', 'Eligendi sed sit al', 'Quo quisquam distinc', 'Sit voluptate moles', 'jone@mailinator.com', NULL, '1980-08-02', NULL, 'https://www.likazyk.net', 'Quis iure ab ut fuga', '2024-06-04 00:11:28', '2024-06-04 00:11:28'),
(54, 'Darius Burris', 'Eveniet proident t', 'Mollit aliqua Asper', 'Exercitationem tempo', 'Dolores dolorum aliq', 'Nulla quo dolor sint', 'Ipsam veniam cumque', 'vikoqodo@mailinator.com', NULL, '1982-09-10', NULL, 'https://www.fuse.info', 'Occaecat doloremque', '2024-06-04 00:17:12', '2024-06-04 00:17:12'),
(55, 'Jane Ware', 'Quia sit aut sit es', 'Ex officia reprehend', 'Qui accusantium volu', 'Similique enim conse', 'Sed cillum nemo ut q', 'Atque ex dolore arch', 'pimowagaw@mailinator.com', NULL, '1996-01-31', NULL, 'https://www.kin.ws', 'Aut doloremque quis', '2024-06-04 00:22:41', '2024-06-04 00:22:41'),
(56, 'Jael Mendez', 'Accusamus irure saep', 'Qui fugit nesciunt', 'Sint laboriosam deb', 'Eos et esse voluptat', 'At qui perspiciatis', 'Corrupti qui quos i', 'tygitetexo@mailinator.com', NULL, '2003-04-22', NULL, 'https://www.xanice.ws', 'Non labore quis fugi', '2024-06-04 00:23:18', '2024-06-04 00:23:18'),
(57, 'Eliana Chavez', 'Commodi do qui ea to', 'Itaque a incididunt', 'Et quam aut ad aut l', 'Ex dolores sit rem n', 'Eum porro ut in maxi', 'Blanditiis delectus', 'fisizebi@mailinator.com', NULL, '1973-03-29', NULL, 'https://www.wevorirazew.org', 'Eu aliqua Ipsum vel', '2024-06-04 00:24:57', '2024-06-04 00:24:57'),
(58, 'Alvin Jenkins', 'Dolores quia eu arch', 'Assumenda porro comm', 'Pariatur Doloremque', 'Enim ut proident qu', 'Animi veniam quam', 'Tenetur autem reicie', 'pumujeqaq@mailinator.com', NULL, '2021-01-25', NULL, 'https://www.tesywuki.info', 'Cumque unde quae acc', '2024-06-04 02:13:55', '2024-06-04 02:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `tickethistories`
--

DROP TABLE IF EXISTS `tickethistories`;
CREATE TABLE IF NOT EXISTS `tickethistories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `comment_user_id` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ticket_creator_id` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '2024-05-28 03:13:03', '$2y$12$Hs0A61OKY4sAGardYqcrZ.HYqoCot2KFl04Y8nHtebG4QnNRucESe', NULL, '2024-05-28 03:13:03', '2024-05-28 03:13:03'),
(2, 'user', 'user@user.com', '2024-05-28 03:13:03', '$2y$12$VKpGV8RCVFACXX9ULxzOd.9aJZ4xYlxyN6iTOI93sAhHwNsjxQ8nm', NULL, '2024-05-28 03:13:03', '2024-05-28 03:13:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
