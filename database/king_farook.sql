-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2021 at 07:57 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `king_farook`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int UNSIGNED NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `description_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `history_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `plan_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `values_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `video_url`, `description_img_path`, `history_img_path`, `vision_img_path`, `mission_img_path`, `plan_img_path`, `values_img_path`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/embed/cQU9g8ZokO8', 'dashboardImages/images/1600219351about-1.jpg', 'dashboardImages/images/1600219351about-2.jpg', 'dashboardImages/images/1600219351about-3.jpg', 'dashboardImages/images/1600219351about-4.jpg', 'dashboardImages/images/1600219351about-5.jpg', 'dashboardImages/images/1600220804serv15.jpg', '2020-09-11 23:22:36', '2020-09-16 01:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `about_lang`
--

CREATE TABLE `about_lang` (
  `id` int UNSIGNED NOT NULL,
  `about_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `history_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `plan_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `values_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_lang`
--

INSERT INTO `about_lang` (`id`, `about_id`, `lang`, `description_text`, `history_text`, `vision_text`, `mission_text`, `plan_text`, `values_text`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', '<p>Website Description</p>', '<p>Our History</p>', '<p>Our Vision</p>', '<p>Our Mission</p>', '<p>Our Plan</p>', '<p>Our Values</p>', '2020-09-11 23:26:44', '2020-09-15 23:15:38'),
(2, 1, 'ar', '<p>الملك فاروق مكان يتمتع بطابع خاص لمحبي أكل المشويات ويقدم أسلوب جديد للطعام الكلاسيكي والحديث .. و كذلك العديد من الخدمات المقدمة للعملاء بجودة عالية وبمذاق فريد لا ينسي وبالإضافة الطابع المعمارى الملكى للمكان يجعلك تعيش الحياه الملكية اثناء تواجدك داخل ارجاء فروعنا.</p>', '<p>بدأنا مشوارنا في محافظة المنوفية وبالأخص بعاصمتها شبين الكوم حيث تم افتتاح أول مطعم للملك فاروق في يوليو 2014 , وبعد فترة قصيرة حققنا نجاح مرضي واستطاع اسم الملك فاروق الأنتشار في محيط المحافظة, وهذا يرجع الي مذاق الطعام الأصيل و الخدمة المتميزة .... واستطعنا إكمال رحلتنا بأفتتاح فرعين آخريين في محافظة القليوبية وبالاخص بعاصمتها مدينة بنها وذلك لاستكمال تحقيق التوسع داخل الدلتا وذلك بمايو 2016 و من ثم الانتقال لافتتاح فرع &nbsp;جولف بورتو مارينا احدى مشاريع عامر جروب وذلك بــيوليو 2017.. ولسه رحلتنا مكملة .</p>', '<p>&nbsp;</p>\r\n\r\n<p>نسعى دائما للتطوير في هذا المجال .. وأن يصل المذاق الأصيل الذي يغلب عليه الطابع الملكى لعقول الناس كما نسعى ايضا للتوسع في منطقة الدلتا أولا .. ثم في جميع أنحاء مصر</p>', '<p>هدفنا هو تقديم افضل طعم واعلى جودة لمنتجاتنا مع اضافة طابع الراحة والرفاهية الملكية فى خدمة العميل &nbsp; الألتزام تجاه العميل بتوفير جميع احتياجاته بشكل جديد و حديث بجميع فروعنا مع الأحتفاظ بالطابع والهوية الخاصة بالمكان &nbsp; مما ينتج عنه تكوين قاعدة كبيرة من العملاء والعمل علي ارضائهم وزيادتها بشكل دائم &nbsp;</p>', '<p>السعى دائما للتميز عن غيرنا وذلك لأكتساب ثقة عملائنا &nbsp; امتلاك كوادرتتسم بالكفاءة والمرونة والأبداع بألاضافة الى تدريبها لأمتلاك خبرة كبير لتحقيق اهداف المنظومة</p>', '<p>الجودة , الامانة ,&nbsp; الابتكار. &nbsp; سعادتنا في خدمة العميل والعمل علي أرضاءه. &nbsp; الأحترام والتقدير لكل أفراد العمل &nbsp; &nbsp; &nbsp; هناك تحديات كبري للتأكد من صحة الموارد المطلوبة و الحفاظ علي جودتها وإبعاد ايه شبهات أو شائعات عن وجود اي خلل عن طريق الألتزام الصارم بمعايير قابلة للقياس و قابلة للتحقق للحصول علي نتائج ترضي متطلبات العملاء ولتحقيق ذلك لابد من ضمان عدة عوامل 1-&nbsp; الإدارة 2-&nbsp; الموارد الحيوانية ( الجزارة ) 3-&nbsp; المصنع 4-&nbsp; اليد العاملة &nbsp; .</p>', '2020-09-11 23:26:44', '2020-09-15 23:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `image_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `slug`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'main-album', 'dashboardImages/images/test.png', '2020-09-15 22:00:02', '2020-09-15 22:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `albums_lang`
--

CREATE TABLE `albums_lang` (
  `id` int UNSIGNED NOT NULL,
  `album_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums_lang`
--

INSERT INTO `albums_lang` (`id`, `album_id`, `lang`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Main Album', 'Main Album description', '2020-09-15 22:00:49', '2020-09-15 22:00:49'),
(2, 1, 'ar', 'album ar', 'album ar description ', '2020-09-15 22:01:28', '2020-09-15 22:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `alt_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `landline` text COLLATE utf8mb4_unicode_ci,
  `first_image` text COLLATE utf8mb4_unicode_ci,
  `second_image` text COLLATE utf8mb4_unicode_ci,
  `menu_name` text COLLATE utf8mb4_unicode_ci,
  `menu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `slug`, `map`, `phone`, `alt_phone`, `landline`, `first_image`, `second_image`, `menu_name`, `menu`, `created_at`, `updated_at`) VALUES
(11, 'hello-branch', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1490042.146159564!2d30.4075465390815!3d29.838988981496243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5bccb8d11eafc61!2z2YXYtNmI2YrYp9iqINin2YTZhdmE2YMg2YHYp9ix2YjZgg!5e0!3m2!1sen!2seg!4v1597052966287!5m2!1sen!2seg', '01010101187', '01245887789', '0224458789', 'dashboardImages/images/160020365758376138_1502849843179929_6721818423208181760_n.jpg', 'dashboardImages/images/1600203657118882136_382276946506748_673199211871041932_n.jpg', '1600203657Abdelrahman _Mohammed_Resume.pdf', 'dashboardFiles/pdf/1600203657Abdelrahman _Mohammed_Resume.pdf', '2020-09-15 19:00:57', '2020-09-16 01:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `branches_lang`
--

CREATE TABLE `branches_lang` (
  `id` int UNSIGNED NOT NULL,
  `branch_id` int UNSIGNED DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches_lang`
--

INSERT INTO `branches_lang` (`id`, `branch_id`, `lang`, `address`, `title`, `description`, `created_at`, `updated_at`) VALUES
(19, 11, 'en', 'mokattam street 9', 'Hello branch', '<p>description en</p>', '2020-09-15 19:00:57', '2020-09-15 19:00:57'),
(20, 11, 'ar', 'شبين الكوم, شارع سعد زغلول, البر الشرقي', 'اهلا الفرع', '<p>description ar</p>', '2020-09-15 19:00:57', '2020-09-16 01:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `email_alt` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `phone_alt` varchar(191) DEFAULT NULL,
  `address_ar` text,
  `alt_address_ar` text,
  `address_en` text,
  `alt_address_en` text,
  `location` text,
  `facebook` text,
  `twitter` text,
  `instagram` text,
  `youtube` text,
  `linked_in` text,
  `snapchat` text,
  `whatsapp` text,
  `google_plus` text,
  `pintrest` text,
  `behance` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `email_alt`, `phone`, `phone_alt`, `address_ar`, `alt_address_ar`, `address_en`, `alt_address_en`, `location`, `facebook`, `twitter`, `instagram`, `youtube`, `linked_in`, `snapchat`, `whatsapp`, `google_plus`, `pintrest`, `behance`, `created_at`, `updated_at`) VALUES
(1, 'info@kingfarook.com', NULL, '01125446689', NULL, 'الدقي - ٩٨شارع التحرير - برج الدقي الاداري (البرج الخلفي) الدور الثالث', '8 شارع الرحاب ، القاهرة، 11771', '227 El Narges Bldgs., 5th Compound', NULL, 'https://www.google.com/maps/d/embed?mid=1PNZnyaErwFJt2JPJCbD5c1Y6EwdBgNP1&hl=en', 'https://business.facebook.com/almalkfarouk', 'https://www.exampel.com', 'https://www.exampel.com', 'https://www.exampel.com', 'https://www.exampel.com', 'https://www.exampel.com', 'https://wa.me/201010101187', 'https://www.exampel.com', 'https://www.exampel.com', 'https://www.exampel.com', '2020-03-15 15:33:54', '2020-09-16 01:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int UNSIGNED NOT NULL,
  `meal_id` int UNSIGNED DEFAULT NULL,
  `album_id` int UNSIGNED DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `meal_id`, `album_id`, `title`, `name`, `path`, `alt`, `created_at`, `updated_at`) VALUES
(19, NULL, 1, 'King Farouk Restaurant', '1600222590serv2.jpg', 'dashboardImages/images/1600222590serv2.jpg', 'image is not available!!', '2020-09-16 00:16:30', '2020-09-16 00:16:30'),
(20, NULL, 1, 'King Farouk Restaurant', '1600222590serv3.jpg', 'dashboardImages/images/1600222590serv3.jpg', 'image is not available!!', '2020-09-16 00:16:30', '2020-09-16 00:16:30'),
(21, 9, NULL, 'King Farouk Restaurant', '1600229050serv5.jpg', 'dashboardImages/images/1600229050serv5.jpg', 'image is not available!!', '2020-09-16 02:04:10', '2020-09-16 02:04:10'),
(22, 9, NULL, 'King Farouk Restaurant', '1600229050serv6.jpg', 'dashboardImages/images/1600229050serv6.jpg', 'image is not available!!', '2020-09-16 02:04:10', '2020-09-16 02:04:10'),
(23, 9, NULL, 'King Farouk Restaurant', '1600229050serv7.jpg', 'dashboardImages/images/1600229050serv7.jpg', 'image is not available!!', '2020-09-16 02:04:10', '2020-09-16 02:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang`, `alias`, `created_at`, `updated_at`) VALUES
('ar', 'Arabic', '2020-09-11 23:17:40', '2020-09-11 23:17:40'),
('en', 'English', '2020-09-11 23:17:40', '2020-09-11 23:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int UNSIGNED NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` float DEFAULT NULL,
  `meal_img_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meal_img_alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `slug`, `price`, `meal_img_path`, `meal_img_alt`, `seo_id`, `created_at`, `updated_at`) VALUES
(9, 'pizza', 200, 'dashboardImages/images/1600226698serv3.jpg', NULL, NULL, '2020-09-16 01:24:58', '2020-09-16 01:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `meal_lang`
--

CREATE TABLE `meal_lang` (
  `id` int UNSIGNED NOT NULL,
  `meal_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_lang`
--

INSERT INTO `meal_lang` (`id`, `meal_id`, `lang`, `title`, `description`, `created_at`, `updated_at`) VALUES
(13, 9, 'en', 'pizza', NULL, '2020-09-16 01:24:58', '2020-09-16 01:24:58'),
(14, 9, 'ar', 'اهلا', '<p>arabic meal</p>', '2020-09-16 01:24:58', '2020-09-16 01:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'hassan', 'hassan@google.com', '01168995545', 'sub', 'message', '2020-09-15 22:37:19', '2020-09-15 22:37:19'),
(3, 'Abdelrahman', 'catch.code2015@gmail.com', '01121226689', NULL, 'a message', '2020-09-16 01:17:45', '2020-09-16 01:17:45'),
(4, 'Abdelrahman', 'catch.code2015@gmail.com', '01121226689', NULL, 'last test', '2020-09-16 08:29:05', '2020-09-16 08:29:05'),
(5, 'Abdelrahman', 'catch.code2015@gmail.com', '01121226689', NULL, 'stop test', '2020-09-16 10:09:32', '2020-09-16 10:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `h_logo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `f_logo_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `main_menu` text COLLATE utf8mb4_unicode_ci,
  `lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `h_logo_path`, `f_logo_path`, `main_menu`, `lang`, `state`, `created_at`, `updated_at`) VALUES
(1, 'dashboardImages/images/1599935969logo.png', 'dashboardImages/images/1599935969logo.png', 'dashboardImages/images/1600204418menu.jpg', 'ar', 1, '2020-09-12 13:30:55', '2020-09-15 19:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `settings_lang`
--

CREATE TABLE `settings_lang` (
  `id` int UNSIGNED NOT NULL,
  `setting_id` int UNSIGNED NOT NULL,
  `lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website_h_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website_f_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_lang`
--

INSERT INTO `settings_lang` (`id`, `setting_id`, `lang`, `website_title`, `website_h_description`, `website_f_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'King Farouk Website', '<p>hello header</p>', '<p>hello footer description</p>', '2020-09-12 13:40:54', '2020-09-12 15:59:37'),
(2, 1, 'ar', 'الملك فاروق', '<p>لملك فاروق مكان يتمتع بطابع خاص لمحبي أكل المشويات ويقدم أسلوب جديد للطعام الكلاسيكي والحديث .. و كذلك العديد من الخدمات المقدمة للعملاء بجودة عالية وبمذاق فريد لا ينسي وبالإضافة الطابع المعمارى الملكى للمكان يجعلك تعيش الحياه الملكية اثناء تواجدك داخل ارجاء فروعنا.</p>\r\n\r\n<p>الملك فاروق مكان يتمتع بطابع خاص لمحبي أكل المشويات ويقدم أسلوب جديد للطعام الكلاسيكي والحديث .. و كذلك العديد من الخدمات المقدمة للعملاء بجودة عالية وبمذاق فريد لا ينسي وبالإضافة الطابع المعمارى الملكى للمكان يجعلك تعيش الحياه الملكية اثناء تواجدك داخل ارجاء فروعنا.</p>', '<p>الملك فاروق مكان يتمتع بطابع خاص لمحبي أكل المشويات ويقدم أسلوب جديد للطعام الكلاسيكي والحديث .. و كذلك العديد من الخدمات المقدمة للعملاء بجودة عالية وبمذاق فريد لا ينسي وبالإضافة الطابع المعمارى الملكى للمكان يجعلك تعيش الحياه الملكية اثناء تواجدك داخل ارجاء فروعنا</p>', '2020-09-12 13:40:54', '2020-09-14 07:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slug`, `parent_id`, `image_path`, `url`, `created_at`, `updated_at`) VALUES
(1, 'main-slider', NULL, 'dashboardImages/images/test.png', 'https://www.youtube.com/', '2020-09-14 19:43:55', '2020-09-14 19:43:55'),
(8, NULL, 1, 'dashboardImages/images/1600223407serv2.jpg', NULL, '2020-09-16 00:30:07', '2020-09-16 00:30:07'),
(9, NULL, 1, 'dashboardImages/images/1600223433serv10.jpg', NULL, '2020-09-16 00:30:33', '2020-09-16 00:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `slider_lang`
--

CREATE TABLE `slider_lang` (
  `id` int UNSIGNED NOT NULL,
  `slider_id` int UNSIGNED DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `sub_title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `btn` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_lang`
--

INSERT INTO `slider_lang` (`id`, `slider_id`, `lang`, `title`, `sub_title`, `description`, `btn`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Main Slider', NULL, 'the websites main slider don\'t delete', NULL, '2020-09-14 19:44:46', '2020-09-14 19:44:46'),
(14, 8, 'en', NULL, NULL, NULL, NULL, '2020-09-16 00:30:07', '2020-09-16 00:30:07'),
(15, 8, 'ar', 'الملك فاروق', NULL, '<p>مشويات علي طريقة الملوك</p>', NULL, '2020-09-16 00:30:07', '2020-09-16 00:38:49'),
(16, 9, 'en', NULL, NULL, NULL, NULL, '2020-09-16 00:30:33', '2020-09-16 00:30:33'),
(17, 9, 'ar', 'الملك فاروق', NULL, '<p>مشويات علي طريقة الملوك</p>', NULL, '2020-09-16 00:30:33', '2020-09-16 00:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@farook.com', NULL, '$2y$10$zqJj67vYFsTKb.rH7J737u.HytBkUwIRM4C7Y93pnyPDsPMnvxj.O', NULL, '2020-09-14 18:58:30', '2020-09-14 18:58:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_lang`
--
ALTER TABLE `about_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_lang_fk_about_id` (`about_id`),
  ADD KEY `about_lang_fk_lang_id` (`lang`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums_lang`
--
ALTER TABLE `albums_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches_lang`
--
ALTER TABLE `branches_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meal_id` (`meal_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal_lang`
--
ALTER TABLE `meal_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meal_lang_fk_meal_id` (`meal_id`),
  ADD KEY `meal_lang_fk_language_lang` (`lang`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `settings_lang`
--
ALTER TABLE `settings_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_id` (`setting_id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_ibfk_1` (`parent_id`);

--
-- Indexes for table `slider_lang`
--
ALTER TABLE `slider_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_id` (`slider_id`),
  ADD KEY `lang` (`lang`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_lang`
--
ALTER TABLE `about_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `albums_lang`
--
ALTER TABLE `albums_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `branches_lang`
--
ALTER TABLE `branches_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meal_lang`
--
ALTER TABLE `meal_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_lang`
--
ALTER TABLE `settings_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_lang`
--
ALTER TABLE `slider_lang`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_lang`
--
ALTER TABLE `about_lang`
  ADD CONSTRAINT `about_lang_fk_about_id` FOREIGN KEY (`about_id`) REFERENCES `about` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `about_lang_fk_lang_id` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;

--
-- Constraints for table `albums_lang`
--
ALTER TABLE `albums_lang`
  ADD CONSTRAINT `albums_lang_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `albums_lang_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;

--
-- Constraints for table `branches_lang`
--
ALTER TABLE `branches_lang`
  ADD CONSTRAINT `branches_lang_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branches_lang_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`meal_id`) REFERENCES `meal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meal_lang`
--
ALTER TABLE `meal_lang`
  ADD CONSTRAINT `meal_lang_fk_language_lang` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `meal_lang_fk_meal_id` FOREIGN KEY (`meal_id`) REFERENCES `meal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_ibfk_1` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;

--
-- Constraints for table `settings_lang`
--
ALTER TABLE `settings_lang`
  ADD CONSTRAINT `settings_lang_ibfk_1` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `settings_lang_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;

--
-- Constraints for table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `slider_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `slider` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `slider_lang`
--
ALTER TABLE `slider_lang`
  ADD CONSTRAINT `slider_lang_ibfk_1` FOREIGN KEY (`slider_id`) REFERENCES `slider` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `slider_lang_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `languages` (`lang`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
