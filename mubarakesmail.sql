-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 05:57 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mubarakesmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `arabicmenus`
--

CREATE TABLE `arabicmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arabicmenus`
--

INSERT INTO `arabicmenus` (`id`, `parent_id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(2, '0', 'الصفحة الرئيسية', '/', NULL, NULL),
(3, '0', '\r\n\r\nعن المدرب\r\n\r\n', '/about-ar', NULL, NULL),
(4, '0', 'الدورات', '/', NULL, NULL),
(5, '0', 'المؤلفات', '/', NULL, NULL),
(6, '0', 'اتصل بنا', '/contact-ar', NULL, NULL),
(38, '4', 'دورة إنشاء المشاريع الصغيرة', 'services/menu/دورة إنشاء المشاريع الصغيرة', '2018-04-14 15:05:34', '2018-04-14 15:05:34'),
(39, '5', 'لا تبدأ مشروعك', 'services/menu/لا تبدأ مشروعك', NULL, NULL),
(41, '0', 'Admin', '/admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arabicservices`
--

CREATE TABLE `arabicservices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arabicservices`
--

INSERT INTO `arabicservices` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(20, 'لا تبدأ مشروعك', '<p>كتاب مخصص لكل من يريد أن يبدأ مشروعه الخاص</p>\r\n<p>يعرض الكتاب مجموعة من المعلومات الأساسية التي يجب على كل صاحب مشروع أن يكون ملم بها حتى يتفادى أي عقبات قد تكون في طريق نجاحه</p>', 'img/services/book1.jpg', '2018-04-14 14:53:07', '2018-04-14 14:53:07'),
(21, 'دورة إنشاء المشاريع الصغيرة', '<p><strong>نبذة عن الدورة</strong><br /><br /><strong>هل تخطط لإنشاء مشروعك الخاص ؟</strong><br /><br /><strong>سجل في دورة إنشاء المشاريع الصغيرة لتتعلم التالي:</strong><br /><br /><strong>اختيار المشروع المناسب:</strong><br /><br />ماهو المشروع المناسب لك كمبادر ؟ اذا كنت تحتار بين مشاريع متعددة كيف تختار أفضل خيار لتبدأ به مشروعك الخاص ؟<br /><br /><strong>توظيف فريق العمل:</strong><br /><br />تعلم كيف تبحث عن فريق العمل وتقوم بإجراء المقابلات وتختار فريق عمل مناسب لمشروعك ؟<br /><br /><strong>تسويق المشروع:</strong><br /><br />كيف تقوم بعملية تسويق ناجحه تستهدف بها الشريحة المناسبة لمشروعك ؟<br /><br /><strong>إدارة المبيعات:</strong><br /><br />كيف تقوم بالعمل على نظام مبيعات مناسب لنمو الشركة ؟<br /><br /><strong>الوقت:</strong><br /><br />كيف تدير وقتك بشكل مناسب باستخدام طرق تواصل وعقد اجتماعات فعالة.<br /><br /><strong>لمن هذه الدورة ؟</strong><br /><br />لكل شخص يخطط لإنشاء مشروعه الخاص ، سواء كان مشروع جديد أو في طور النمو.<br /><br /><strong>على ماذا يحصل المتدرب ؟</strong><br /><br />معلومات وتمارين عملية عن كيفية إنشاء مشروعه الخاص ابتداءً من اختيار اسم المشروع وطرق التسويق والمبيعات وإدارة الوقت ، وتشمل الدورة تطبيقات عملية على كل مرحلة من مراحل المشروع ، كما يحصل المتدرب على دعم خاص لإنشاء مشروعه من خدمات شركة أصحاب الأفكار<br /><br /><strong>ماذا لو لم يستفيد المتدرب من الدورة ؟</strong><br /><br />في هذه الحالة سيتم استرجاع رسوم التسجيل بالكامل حسب الشروط<br /><br /><br />@MubarakALesmail</p>', 'img/services/c1.jpeg', '2018-04-14 15:05:33', '2018-04-14 15:07:23'),
(22, 'دورة إنشاء المشاريع الصغيرة2', '<p><strong>نبذة عن الدورة</strong><br /><br /><strong>هل تخطط لإنشاء مشروعك الخاص ؟</strong><br /><br /><strong>سجل في دورة إنشاء المشاريع الصغيرة لتتعلم التالي:</strong><br /><br /><strong>اختيار المشروع المناسب:</strong><br /><br />ماهو المشروع المناسب لك كمبادر ؟ اذا كنت تحتار بين مشاريع متعددة كيف تختار أفضل خيار لتبدأ به مشروعك الخاص ؟<br /><br /><strong>توظيف فريق العمل:</strong><br /><br />تعلم كيف تبحث عن فريق العمل وتقوم بإجراء المقابلات وتختار فريق عمل مناسب لمشروعك ؟<br /><br /><strong>تسويق المشروع:</strong><br /><br />كيف تقوم بعملية تسويق ناجحه تستهدف بها الشريحة المناسبة لمشروعك ؟<br /><br /><strong>إدارة المبيعات:</strong><br /><br />كيف تقوم بالعمل على نظام مبيعات مناسب لنمو الشركة ؟<br /><br /><strong>الوقت:</strong><br /><br />كيف تدير وقتك بشكل مناسب باستخدام طرق تواصل وعقد اجتماعات فعالة.<br /><br /><strong>لمن هذه الدورة ؟</strong><br /><br />لكل شخص يخطط لإنشاء مشروعه الخاص ، سواء كان مشروع جديد أو في طور النمو.<br /><br /><strong>على ماذا يحصل المتدرب ؟</strong><br /><br />معلومات وتمارين عملية عن كيفية إنشاء مشروعه الخاص ابتداءً من اختيار اسم المشروع وطرق التسويق والمبيعات وإدارة الوقت ، وتشمل الدورة تطبيقات عملية على كل مرحلة من مراحل المشروع ، كما يحصل المتدرب على دعم خاص لإنشاء مشروعه من خدمات شركة أصحاب الأفكار<br /><br /><strong>ماذا لو لم يستفيد المتدرب من الدورة ؟</strong><br /><br />في هذه الحالة سيتم استرجاع رسوم التسجيل بالكامل حسب الشروط<br /><br /><br />@MubarakALesmail</p>', 'img/services/c1.jpeg', '2018-04-14 15:05:33', '2018-04-14 15:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, '0', 'Home', '/', NULL, NULL),
(2, '0', 'About Us', '/about', NULL, NULL),
(7, '0', 'Services', '/services', NULL, NULL),
(8, '', 'Contact', '/contact', NULL, NULL),
(9, '', 'CFO Services', '/services/cfo', NULL, NULL),
(13, '7', 'new-sub', 'menu/new-sub', '2018-03-18 09:57:49', '2018-03-18 09:57:49'),
(16, '7', 'CFO Services', 'services/menu/CFO Services', '2018-03-18 10:08:54', '2018-03-18 10:08:54'),
(17, '7', 'Financial Planning Services', 'services/menu/Financial Planning Services', '2018-03-18 10:09:46', '2018-03-18 10:09:46');

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
(3, '2018_03_17_131218_create_services_table', 1),
(4, '2018_03_17_132127_create_menus_table', 2),
(7, '2018_03_17_154158_create_sliders_table', 3),
(8, '2018_03_17_154612_create_menus_table', 4),
(9, '2018_03_31_142725_create_arabicmenus_table', 5),
(10, '2018_03_31_143023_create_arabicservices_table', 5);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'new_servic1', '<p>new description</p>', 'img/services/financial-consulting-old.jpg', '2018-03-18 09:22:06', '2018-03-18 09:41:34'),
(4, 'Bookkeeping and Accounting', '<p>Bookkeeping</p>', 'img/services/Accounting.jpg', '2018-03-18 10:07:20', '2018-03-18 10:07:20'),
(5, 'CFO Services', '<p>CFO Services</p>', 'img/services/cfo.jpg', '2018-03-18 10:08:54', '2018-03-18 10:08:54'),
(6, 'Financial Planning Services', '<p>Financial Planning Services</p>', 'img/services/FINANCIAL-PLAN.jpg', '2018-03-18 10:09:46', '2018-03-18 10:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'img/slider/3.mp4', '2018-04-01 10:43:07', '2018-04-01 10:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'taher', 'jjkkk@example.com', '$2y$10$Jg3w9tHKHA5nRuEiKiobVOwI7EGATu0QkVS1SaEv0naYyLRC9Db2K', 'gEEENv8QjBS0ZFRFIkRjyHAXqsm7bqTDKL2GsZoYEl5bsBZ4g47Xj5WOWIsh', '2018-04-15 10:46:28', '2018-04-15 10:46:28'),
(2, 'Admin', 'admin@admin.com', '$2y$10$.NVY8CDjp5Np3zTqc91k1OgkpJXi076nusKk7fKksJsqgS28/e5Ge', 'dBbg3nHdvGo1XupNTpdgX3uqNpt7fGXYK7ZryXBRcE20thmBKjGlfv7xhKkM', '2018-04-15 11:24:15', '2018-04-15 11:24:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arabicmenus`
--
ALTER TABLE `arabicmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arabicservices`
--
ALTER TABLE `arabicservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `arabicmenus`
--
ALTER TABLE `arabicmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `arabicservices`
--
ALTER TABLE `arabicservices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
