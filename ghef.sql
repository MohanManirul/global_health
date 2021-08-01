-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 11:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghef`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Non-Profit Component', '<p>Global Health Education Foundation, Inc. will provide financial support</p>\r\n\r\n<p>through its fund raising efforts to several non-profit organizations. These include:</p>', '2021-07-11 17:49:27', '2021-07-11 23:14:53'),
(3, 'No Kids Hungry', '<p><strong>“No Kids Hungry”</strong> initiative whose mission is to ensure that children across the       world have adequate food supply to grow and develop which allows them to reach     their maximum potential.</p>', '2021-07-11 20:23:33', '2021-07-12 01:35:36'),
(4, 'Global Fund for Women', '<p><strong>&ldquo;Global Fund for Women&rdquo;</strong>a grantmaking foundation supporting women&rsquo;s human rights organizations around the worled working to address critical issues such as gaining economic independence, increasing girls&rsquo; access to education and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; stopping violence against women.</p>', '2021-07-11 23:15:43', '2021-07-11 23:15:43'),
(5, 'TASH', '<p><strong>“TASH” </strong>is an international leader in disability advocacy. Founded in 1975, TASH advocates for human rights and inclusion for people with significant disabilities       and support needs – those most vulnerable to segregation, abuse, neglect and institutionalization. TASH works to advance inclusive communities through advocacy, research, professional development, policy, and information and resources for parents, families and self-advocates. The inclusive practices TASH validates through research have been shown to improve outcomes for all people.</p>\r\n\r\n<p>         </p>', '2021-07-11 23:16:04', '2021-07-12 01:35:26'),
(6, 'The Peace Corps', '<p><strong>&ldquo;The Peace Corps&rdquo;</strong> promotes friendship and peace between the United States and partnering nations across the globe. To achieve this goal, they match skilled volunteers to international communities in need of trained individuals in areas &nbsp;&nbsp;&nbsp;&nbsp; such as education and health care. Volunteers work alongside local leaders to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; address local needs and cultivate mutual cultural understanding.</p>', '2021-07-11 23:16:27', '2021-07-11 23:16:27'),
(7, 'Teach for America', '<p><strong>“Teach for America” </strong>cultivates education leaders who work to make systemic changes that help eliminate educational inequities. The Teach for America model          recruits “promising leaders” who agree to teach in a low-income community for   two years. It provides educational resources to the communities and a support        network to the recruits. Following their service, recruits either continue teaching,   assume leadership roles in education, or serve in other capacities as advocates for      educational equity.</p>', '2021-07-11 23:16:47', '2021-07-12 01:35:11'),
(8, 'Who We Serve', '<p>The Global Health Education Foundation serves the community of healthcare providers as well as aspiring healthcare professionals with the willingness and compassion to improve the lives of people across the world.</p>', '2021-07-11 23:17:04', '2021-07-11 23:17:04'),
(9, 'What We Offer', '<p>The Global Health Education Foundation offers opportunities to enhance the skills of current healthcare providers as well as provide opportunities to aspiring members of the community with the willingness and compassion to pursue healthcare careers. Our foundation seeks to provide these opportunities to address the lack of access to healthcare services and the lack of diverse populations working within the healthcare field. Through these opportunities, the foundation believes we can assist in the creation of a more equitable society beginning with the true measure of wealth, which is health.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The opportunities provided by the foundation align with four (4) major pillars. The pillars and examples of opportunities we provide are identified below.&nbsp;</p>', '2021-07-11 23:17:27', '2021-07-11 23:17:27'),
(10, 'Products', '<p>The initial commitment of time in the development of the foundation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; is in developing courses on a variety of health topics, additional skills for &nbsp;&nbsp;&nbsp;&nbsp; healthcare providers, knowledge and education needed to pursue healthcare careers, etc. This courses will be developed as live sessions as well as virtual learning opportunities so they can be accessed by global populations.</p>', '2021-07-11 23:17:52', '2021-07-11 23:17:52'),
(11, 'Community Service', '<p>This opportunity is meant to provide education across the populations on the concept of health maintenance and disease prevention.&nbsp; By hosting either live or virtual &ldquo;community cafe&rdquo; programs we will feature healthcare providers talking about a variety of diseases and symptoms&nbsp; as well as taking question/answers from the community. We will also include presenters focusing on good health practices like nutrition, oral health, exercising, stress which directly impact the quality of life.</p>', '2021-07-11 23:18:09', '2021-07-11 23:18:09'),
(12, 'Research', '<p>The need currently exists for more people to consider research opportunities through a collaboration across the globe. We will provide a service        for collaboration with colleges and universities and their students to participate in      study scientist exchange and faculty scientist exchange opportunities. This will          provide a more global approach to research which addresses key healthcare        diseases and disorders impacting populations. Examples could include nutrition, diabetes, care of the elderly.</p>', '2021-07-11 23:18:24', '2021-07-12 01:34:59'),
(13, 'Healthcare Training Opportunities', '<p>We believe there is a need to create a “Health Career Connection” initiative which provides a one-stop shop for people  wanting to learn more about the various careers available in the healthcare field.Additionally, this will include providing preparation for the career, locations to receive training, costs and potential income from the career and linking with an advisor/mentor who can guide them during the process.</p>', '2021-07-11 23:19:41', '2021-07-12 01:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `email`, `mobile_no`, `created_at`, `updated_at`) VALUES
(3, 'Global Health Education Foundation, Inc,', 'ghefoundation1@gmail.com', '85-4349514', '2021-07-12 03:41:49', '2021-07-11 23:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'fiforeg@gmail.com', 'superadmin', NULL, '$2y$10$XTW6Ipf53MXnJzqiaGzwBe/HHFk7OrziYXbATOqB2dIuJf4AmGdA6', NULL, '2020-10-08 11:14:41', '2020-10-10 03:53:09'),
(2, 'sobuj', 'sobuj@gmail.com', 'abc', NULL, '$2y$10$Q6VoO6cxBQgLAVW0zXZ4EOPYdEwN0tdf4EeqFqtGiV2MGhUl6L7AK', NULL, '2020-10-10 03:22:05', '2020-10-10 04:08:08'),
(4, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$JvlMVBcJTAESx2PJY2pBHunLuOGGA6I6C1YKeiAyBXou3yANVp3Zq', NULL, '2020-10-10 05:04:09', '2020-10-10 05:04:09'),
(5, 'Ariful Islam', 'ariful@gmail.com', 'Ariful', NULL, '$2y$10$ONr/mqt7vHIuKqzd/QKMqO9awX1nEPwoUTdXVZR7vnwzSEUlV5BCK', NULL, '2020-10-24 02:37:49', '2020-10-24 02:37:49'),
(7, 'alamin', 'alamin@gmail.com', 'alamin', NULL, '$2y$10$zAAyV325b/PLgNJlbSRl3uGzF.trn2WZ2BMRxHRSvUKoaM4llyKz.', NULL, '2021-04-02 08:27:17', '2021-04-02 08:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `boas`
--

CREATE TABLE `boas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ints` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boas`
--

INSERT INTO `boas` (`id`, `name`, `designation`, `image`, `fb`, `tw`, `in`, `ints`, `created_at`, `updated_at`) VALUES
(7, 'Dummy Man', 'Advisors', '202107121451man-dummy.jpg', NULL, NULL, NULL, NULL, '2021-07-12 04:41:52', '2021-07-12 08:51:46'),
(8, 'Dummy Man', 'Advisors', '202107121452man-dummy.jpg', NULL, NULL, NULL, NULL, '2021-07-12 08:52:02', '2021-07-12 08:52:02'),
(9, 'Dummy Man', 'Advisors', '202107121452man-dummy.jpg', NULL, NULL, NULL, NULL, '2021-07-12 08:52:16', '2021-07-12 08:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `bods`
--

CREATE TABLE `bods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ints` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bods`
--

INSERT INTO `bods` (`id`, `name`, `designation`, `image`, `fb`, `tw`, `in`, `ints`, `created_at`, `updated_at`) VALUES
(3, 'Manirul Islam', 'Director', '202107121041atique_president.jpg', NULL, NULL, NULL, NULL, '2021-07-12 04:41:38', '2021-07-12 04:41:38'),
(4, 'Dr. Sultan Salahuddin Ahmed , MD', 'Director', '202107140925202107121448aa.jpeg', NULL, NULL, NULL, NULL, '2021-07-12 08:48:51', '2021-07-14 03:25:06'),
(5, 'Dr. Marti Echols', 'Director', '202107121449cc.jpeg', NULL, NULL, NULL, NULL, '2021-07-12 08:49:17', '2021-07-12 08:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(14, '202107121801footerlogo.jpg', '2021-07-12 12:01:19', '2021-07-12 12:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`id`, `name`, `email`, `subject`, `messege`, `created_at`, `updated_at`) VALUES
(1, 'Manirul Islam', 'fiforeg@gmail.com', 'saasdasdasdasdas', 'asdas', '2021-07-12 04:03:09', '2021-07-12 04:03:09'),
(2, 'Manirul Islam', 'fiforeg@gmail.com', 'rereerererer', 'erererer', '2021-07-12 04:04:16', '2021-07-12 04:04:16'),
(3, 'sdds', 'dsds@gmail.com', 'sdfsdfsdfsdfsd', 'fsdfsdfsdfsdf', '2021-07-12 04:05:20', '2021-07-12 04:05:20'),
(4, 'Manirul Islam', 'fiforeg@gmail.com', 'bbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbb', '2021-07-12 04:06:08', '2021-07-12 04:06:08');

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
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_09_20_101516_create_permission_tables', 1),
(14, '2020_10_08_171154_create_admins_table', 2),
(34, '2014_10_12_000000_create_users_table', 12),
(60, '2021_07_11_111340_create_logos_table', 21),
(61, '2021_07_11_124330_create_sliders_table', 22),
(62, '2021_07_11_143908_create_non_profts_table', 23),
(64, '2021_07_11_173547_create_bods_table', 24),
(65, '2021_07_12_090931_create_boas_table', 25),
(66, '2021_07_12_091834_create_addresses_table', 26),
(67, '2021_07_12_094359_create_messeges_table', 27),
(68, '2021_07_11_213214_create_subscribes_table', 28),
(72, '2021_07_11_233828_create_about_us_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 2),
(1, 'App\\User', 2),
(1, 'App\\User', 3),
(1, 'App\\Models\\Admin', 4),
(2, 'App\\Models\\Admin', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(14, 'App\\Models\\Admin', 5),
(16, 'App\\Models\\Admin', 7);

-- --------------------------------------------------------

--
-- Table structure for table `non_profts`
--

CREATE TABLE `non_profts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `non_profts`
--

INSERT INTO `non_profts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Vision', '<p>Create a more equitable society by addressing disparities in healthcare access    by providing broader access to healthcare knowledge and opportunities in          healthcare education.</p>', '2021-07-11 11:27:29', '2021-07-12 01:33:14'),
(5, 'Mission', '<p>To improve and create a more equitable society through access to healthcare services by &nbsp;&nbsp;&nbsp; providing access to healthcare knowledge and education.</p>', '2021-07-11 11:27:40', '2021-07-11 23:20:31'),
(7, 'Teach for America', '<p><strong>“Teach for America” </strong>cultivates education leaders who work to make systemic changes that help eliminate educational inequities. The Teach for America model          recruits “promising leaders” who agree to teach in a low-income community for   two years. It provides educational resources to the communities and a support        network to the recruits. Following their service, recruits either continue teaching,   assume leadership roles in education, or serve in other capacities as advocates for      educational equity.</p>', '2021-07-12 01:21:25', '2021-07-12 01:33:04'),
(8, 'Teach for America', '<p><strong>“Teach for America” </strong>cultivates education leaders who work to make systemic changes that help eliminate educational inequities. The Teach for America model          recruits “promising leaders” who agree to teach in a low-income community for   two years. It provides educational resources to the communities and a support        network to the recruits. Following their service, recruits either continue teaching,   assume leadership roles in education, or serve in other capacities as advocates for      educational equity.</p>', '2021-07-12 01:31:33', '2021-07-12 01:31:33');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2020-10-03 04:28:54', '2020-10-03 04:28:54'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2020-10-03 04:28:54', '2020-10-03 04:28:54'),
(3, 'blog.create', 'admin', 'blog', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(4, 'blog.view', 'admin', 'blog', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(5, 'blog.edit', 'admin', 'blog', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(6, 'blog.delete', 'admin', 'blog', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(7, 'blog.approve', 'admin', 'blog', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(8, 'admin.create', 'admin', 'admin', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(9, 'admin.view', 'admin', 'admin', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(10, 'admin.edit', 'admin', 'admin', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(11, 'admin.delete', 'admin', 'admin', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(12, 'admin.approve', 'admin', 'admin', '2020-10-03 04:28:55', '2020-10-03 04:28:55'),
(13, 'role.create', 'admin', 'role', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(14, 'role.view', 'admin', 'role', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(15, 'role.edit', 'admin', 'role', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(16, 'role.delete', 'admin', 'role', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(17, 'role.approve', 'admin', 'role', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(18, 'profile.view', 'admin', 'profile', '2020-10-03 04:28:56', '2020-10-03 04:28:56'),
(19, 'profile.edit', 'admin', 'profile', '2020-10-03 04:28:56', '2020-10-03 04:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2020-10-03 04:28:54', '2020-10-03 04:28:54'),
(2, 'Super Admin', 'admin', '2020-10-03 04:28:54', '2020-10-04 10:01:58'),
(13, 'Client', 'admin', '2020-10-10 03:57:00', '2020-10-10 03:57:00'),
(14, 'Student', 'admin', '2020-10-24 02:36:06', '2020-10-24 02:36:06'),
(15, 'accantant', 'admin', '2021-03-17 10:08:21', '2021-03-17 10:08:21'),
(16, 'Executive', 'admin', '2021-04-02 08:22:47', '2021-04-02 08:22:47');

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
(1, 2),
(1, 13),
(2, 2),
(2, 13),
(3, 1),
(3, 2),
(3, 13),
(3, 16),
(4, 1),
(4, 2),
(4, 13),
(4, 16),
(5, 1),
(5, 2),
(5, 13),
(5, 16),
(6, 1),
(6, 2),
(6, 13),
(6, 16),
(7, 1),
(7, 2),
(7, 13),
(7, 16),
(8, 2),
(9, 1),
(9, 2),
(9, 13),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 1),
(14, 2),
(14, 13),
(15, 2),
(16, 2),
(17, 2),
(18, 1),
(18, 2),
(18, 13),
(18, 14),
(18, 15),
(18, 16),
(19, 1),
(19, 2),
(19, 13),
(19, 14),
(19, 15),
(19, 16);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider`, `slider_text`, `created_at`, `updated_at`) VALUES
(12, '202107121116s1.jpg', 'No Kids Hungry', '2021-07-12 04:40:47', '2021-07-12 05:16:15'),
(13, '202107121040s2.jpg', 'No Kids Hungry', '2021-07-12 04:40:57', '2021-07-12 04:40:57'),
(14, '202107121041s3.jpeg', 'Global Fund for Women', '2021-07-12 04:41:08', '2021-07-12 04:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'fiforeg@gmail.com', '2021-07-11 16:08:52', '2021-07-11 16:08:52'),
(2, 'fifaoreg@gmail.com', '2021-07-11 16:09:09', '2021-07-11 16:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'student,employee,admin',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user=employe',
  `join_date` date DEFAULT NULL,
  `designation_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=Active|0=Inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'student', 'Md. Manirul Islam', NULL, NULL, NULL, '01712339046', NULL, 'Male', NULL, 'Azizul Haque', 'Safura Khatun', 'Muslim', '20200001', '2020-10-26', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 15:48:44', '2020-10-24 15:48:44'),
(17, 'student', 'asas', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'asas', 'asas', 'Khristan', '20200017', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 15:49:46', '2020-10-24 15:49:46'),
(18, 'student', 'One', NULL, NULL, NULL, '+8801717514286', NULL, 'Female', NULL, 'Azizul Haque', 'Safura Khatun', 'Hindu', '20200018', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 15:56:52', '2020-10-24 15:56:52'),
(19, 'student', 'sasa', NULL, NULL, NULL, '+8801717514286', NULL, 'Female', NULL, 'Azizul Haque', 'Safura Khatun', 'Hindu', '20200019', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 15:58:45', '2020-10-24 15:58:45'),
(20, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'Azizul Haque', 'Safura Khatun', 'Muslim', '20200020', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:01:45', '2020-10-24 16:01:45'),
(21, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'Azizul Haque', 'Safura Khatun', 'Muslim', '20200021', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:04:19', '2020-10-24 16:04:19'),
(22, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'Azizul Haque', 'Safura Khatun', 'Hindu', '20200022', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:06:57', '2020-10-24 16:06:57'),
(23, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'Abdus Salam', 'Safura Khatun', 'Hindu', '20200023', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:08:41', '2020-10-24 16:08:41'),
(24, 'student', 'Md.Ataur Rahman', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', '202010280713i14.jpg', 'Abdus Salam', 'Safura Khatun', 'Muslim', '20200024', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:10:51', '2020-10-28 01:13:47'),
(25, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', NULL, 'Azizul Haque', 'Safura Khatun', 'Muslim', '20200025', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-24 16:13:37', '2020-10-24 16:13:37'),
(26, 'student', 'Vaggoraz', NULL, NULL, NULL, '+8801717514286', NULL, 'Male', '202010251433fest_2.jpg', 'Azizul Haque', 'Safura Khatun', 'Muslim', '20200026', '2020-10-25', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-10-25 08:33:07', '2020-10-25 08:33:07'),
(27, 'student', 'Vaggoraz', NULL, NULL, '$2y$10$QNxFuRbhYf3D/fwvYNZT.uIYrjcrmQkc3cPKGaoczqB1vzeJ0xNYm', '+8801717514286', NULL, 'Male', '202010251449fest_18.jpg', 'Azizul Haque', 'Safura Khatun', 'Hindu', '20200027', '2020-10-25', '9772', NULL, NULL, NULL, NULL, 1, NULL, '2020-10-25 08:49:49', '2020-10-25 08:49:49'),
(28, 'student', 'Md.Ataur Rahma', NULL, NULL, '$2y$10$sShnCNMX1gOcmn6DUmvS0e4prQgCXV5sIKK5B0Cm3C3qAeuJxUCkG', '+8801717514286', NULL, 'Male', '202010281607cosmos3.jpg', 'Abdus Salam', 'Safura Khatun', 'Muslim', '20230028', '2020-10-25', '6383', NULL, NULL, NULL, NULL, 1, NULL, '2020-10-25 11:08:31', '2020-11-01 12:00:42'),
(29, 'student', 'Md. Samuzzoha', NULL, NULL, '$2y$10$wieOUvFLnVI4t1TxeI456Ob5TqOkrSC3rszVKzGz/qelL.1EvXHCm', '+8801717514286', NULL, 'Male', '202010281607h9.jpg', 'Azizul Haque', 'Safura Khatun', 'Muslim', '20230029', '2020-10-25', '9530', NULL, NULL, NULL, NULL, 1, NULL, '2020-10-25 11:09:40', '2020-10-28 10:07:26'),
(30, 'student', 'Md. Sayem Khan', NULL, NULL, '$2y$10$KGv/eqoySqE1Q.1lCBj.gOTvAmJqjcskKPy3twXngM1uuZFdh0akC', '+8801717514286', NULL, 'Male', '202010281605cosmos1.jpg', 'Abdus Salam', 'Safura Khatun', 'Hindu', '20230030', '2020-10-28', '471', NULL, NULL, NULL, NULL, 1, NULL, '2020-10-28 08:29:42', '2020-10-28 10:05:20'),
(32, 'student', NULL, NULL, NULL, '$2y$10$NK8f6tnSnfxsXDAah1aw/.ndGJhNO9ndUTCYzXaBf/Lwk2iPJz7Py', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20230031', '1970-01-01', '6301', NULL, NULL, NULL, NULL, 1, NULL, '2020-11-02 04:32:46', '2020-11-02 04:32:46'),
(33, 'employee', 'Md.Faizur Rahman', 'asdf@gmail.com', NULL, '$2y$10$kRnp99.22tVFhZaftgb.k.IUHPjKhVfMWHmMQy13OirILF2LrYoli', '+8801717514286', 'Dhaka', 'Male', '202011201429h4.jpg', 'Azizul Haque', 'Safura Khatun', 'Muslim', '2020110001', '2020-11-16', '3354', NULL, '2020-11-16', '1', 9000, 1, NULL, '2020-11-15 12:34:29', '2020-11-20 12:14:20'),
(34, 'employee', 'Manirul Islam', 'fiforeg@gmail.com', NULL, '$2y$10$688WjnzhjKVXcMWaWuAYxe9PhWOGbY5kHghms2JwZAVo4Hvfb7Ige', '+8801717514286', 'Dhaka', 'Male', '202011151844fest_6.jpg', 'Azizul Haque', 'Safura Khatun', 'Muslim', '2020110034', '2020-11-16', '3714', NULL, '2020-11-16', '1', 5000, 1, NULL, '2020-11-15 12:44:46', '2020-11-15 12:44:46'),
(35, 'employee', 'Md.Jamil Reza', 'asa@gmail.com', NULL, '$2y$10$Ms6vqD7sNhgaWA2orDEcnubciyBd2pjFbQZbow8.Edy984QA6qugy', '+8801717514286', 'Dhaka', 'Male', '202011201530fest_3.jpg', 'Meshbaul Haque', 'Mahfuza', 'Muslim', '2020110035', '2020-11-20', '8970', NULL, '2020-11-12', '3', 5000, 1, NULL, '2020-11-20 09:30:36', '2020-11-20 09:30:36'),
(36, 'employee', NULL, NULL, NULL, '$2y$10$YjvSfDD2KXtSZGWYWPBG5ebfvZhWPqhDmq9dNdTwK2B0uoRyDT10G', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970010036', '1970-01-01', '2177', NULL, '1970-01-01', NULL, NULL, 1, NULL, '2020-11-20 11:24:26', '2020-11-20 11:24:26'),
(37, 'employee', NULL, NULL, NULL, '$2y$10$ti208a/KSfZvhjiEKltM4OayZfc4P2fjNPTO66YiS7m6.YG4lk.8e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970010037', '1970-01-01', '2217', NULL, '1970-01-01', NULL, NULL, 1, NULL, '2020-11-20 11:27:04', '2020-11-20 11:27:04'),
(38, 'employee', NULL, NULL, NULL, '$2y$10$0I9eQsfGluWABxTBvLjwEOJgtJiJtZaWHs298kOooB6GpRo7pVS76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970010038', '1970-01-01', '9574', NULL, '1970-01-01', NULL, NULL, 1, NULL, '2020-11-20 11:28:05', '2020-11-20 11:28:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `boas`
--
ALTER TABLE `boas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bods`
--
ALTER TABLE `bods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
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
-- Indexes for table `non_profts`
--
ALTER TABLE `non_profts`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `boas`
--
ALTER TABLE `boas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bods`
--
ALTER TABLE `bods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `non_profts`
--
ALTER TABLE `non_profts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
