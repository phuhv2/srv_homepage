-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2025 lúc 06:33 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `srv_homepage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is', 'lorem-ipsum-is', '/storage/photos/1/Banner/banner-01.jpg', '<h2><span style=\"font-weight: bold; color: rgb(99, 99, 99);\">Up to 10%</span></h2>', 'active', '2020-08-14 01:47:38', '2020-08-14 01:48:21'),
(2, 'Lorem Ipsum', 'lorem-ipsum', '/storage/photos/1/Banner/banner-07.jpg', '<p>Up to 90%</p>', 'active', '2020-08-14 01:50:23', '2020-08-14 01:50:23'),
(4, 'Precision in Every Part', 'banner', '/storage/photos/1/Banner/banner-06.jpg', '<h2><div class=\"slider-des\" style=\"color: rgb(255, 255, 255); font-family: Roboto, sans-serif; font-size: 16px;\"><div class=\"sl-desc\" style=\"animation: 1.5s ease-in-out 0s 1 normal none running fadeInUp; line-height: 30px;\">Delivering high-quality rubber and plastic components trusted by global manufacturers.</div></div><div class=\"slider-bottom\" style=\"animation: 1.8s ease-in-out 0s 1 normal none running fadeInUp; display: inline-block; margin: 39px 0px 20px; color: rgb(255, 255, 255); font-family: Roboto, sans-serif; font-size: 16px;\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: outside none none; padding: 0px;\"><li style=\"display: inline-block; margin: 0px;\"><a href=\"http://localhost:8080/srv_homepage/contact.html\" class=\"readon banner-style\" style=\"color: rgb(34, 139, 253); background: rgb(255, 255, 255); transition: 0.3s; outline: none; padding: 15px 29px; border: none; border-radius: 3px; text-transform: uppercase; font-family: Poppins, sans-serif; display: block !important;\">Contact Us</a></li></ul></div></h2><h2><span style=\"color: rgb(156, 0, 255);\"></span></h2>', 'active', '2020-08-17 20:46:59', '2025-05-19 21:24:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `subject` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_10_021010_create_brands_table', 1),
(5, '2020_07_10_025334_create_banners_table', 1),
(6, '2020_07_10_112147_create_categories_table', 1),
(7, '2020_07_11_063857_create_products_table', 1),
(8, '2020_07_12_073132_create_post_categories_table', 1),
(9, '2020_07_12_073701_create_post_tags_table', 1),
(10, '2020_07_12_083638_create_posts_table', 1),
(11, '2020_07_13_151329_create_messages_table', 1),
(12, '2020_07_14_023748_create_shippings_table', 1),
(13, '2020_07_15_054356_create_orders_table', 1),
(14, '2020_07_15_102626_create_carts_table', 1),
(15, '2020_07_16_041623_create_notifications_table', 1),
(16, '2020_07_16_053240_create_coupons_table', 1),
(17, '2020_07_23_143757_create_wishlists_table', 1),
(18, '2020_07_24_074930_create_product_reviews_table', 1),
(19, '2020_07_24_131727_create_post_comments_table', 1),
(20, '2020_08_01_143408_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(191) NOT NULL,
  `notifiable_type` varchar(191) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2145a8e3-687d-444a-8873-b3b2fb77a342', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:31:21', '2020-08-15 07:31:21'),
('4a0afdb0-71ad-4ce6-bc70-c92ef491a525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', '2025-05-19 00:48:40', '2020-08-17 21:13:51', '2025-05-19 00:48:40'),
('540ca3e9-0ff9-4e2e-9db3-6b5abc823422', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', '2020-08-15 07:30:44', '2020-08-14 07:12:28', '2020-08-15 07:30:44'),
('5da09dd1-3ffc-43b0-aba2-a4260ba4cc76', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:51:02', '2020-08-15 07:51:02'),
('5e91e603-024e-45c5-b22f-36931fef0d90', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/white-sports-casual-t\",\"fas\":\"fa-star\"}', NULL, '2020-08-15 07:44:07', '2020-08-15 07:44:07'),
('73a3b51a-416a-4e7d-8ca2-53b216d9ad8e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
('8605db5d-1462-496e-8b5f-8b923d88912c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/1\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-14 07:20:44', '2020-08-14 07:20:44'),
('a6ec5643-748c-4128-92e2-9a9f293f53b5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/5\",\"fas\":\"fa-file-alt\"}', '2025-05-19 00:29:36', '2020-08-17 21:17:03', '2025-05-19 00:29:36'),
('b186a883-42f2-4a05-8fc5-f0d3e10309ff', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/2\",\"fas\":\"fa-file-alt\"}', '2020-08-15 04:17:24', '2020-08-14 22:14:55', '2020-08-15 04:17:24'),
('d2fd7c33-b0fe-47d6-8bc6-f377d404080d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:08:50', '2020-08-14 07:08:50'),
('dff78b90-85c8-42ee-a5b1-de8ad0b21be4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/3\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 06:40:54', '2020-08-15 06:40:54'),
('ffffa177-c54e-4dfe-ba43-27c466ff1f4b', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `summary` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `quote` text DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `tags` varchar(191) DEFAULT NULL,
  `post_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `description`, `quote`, `photo`, `tags`, `post_cat_id`, `post_tag_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Phosfluorescently engage worldwide methodologies with web-enabled technology', 'where-does-it-come-from', 'Contrary to popular belief, Lorem Ipsum is not simply random text', '<h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><p class=\"markup-text mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; padding: 40px 40px 50px 30px; color: rgb(102, 102, 102); font-weight: 400; font-style: italic; clear: both; border-left: 10px solid rgb(35, 134, 203); font-family: Roboto, sans-serif; font-size: 16px; box-shadow: rgb(238, 238, 238) 0px 0px 150px !important;\">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.</p></h3><h2 style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-weight: 700; line-height: 40px; font-size: 36px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Economy may face double recession</h2><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p><div class=\"mb-26\" style=\"margin-bottom: 26px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><img src=\"http://localhost:8080/srv_homepage_html/images/n2.jpg\" alt=\"Single Articles\" style=\"max-width: 100%; height: auto;\"></div><p class=\"desc mb-23\" style=\"margin-right: 0px; margin-bottom: 23px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p><ul class=\"listing-style2 modify ml-20 mb-28\" style=\"margin-right: 0px; margin-bottom: 28px; margin-left: 20px; list-style: outside none none; padding: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">New Construction Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Renovations Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Historic Renovations and Restorations</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Additions Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Rebuilding from fire or water damage</li></ul></h3><h3 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 32px; font-size: 28px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Experts Always Ready to Maximizing Products</h3><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p></h3><h4 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 28px; font-size: 20px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Get Start Your Next Project</h4><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-0\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p></h3>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</span><br></p>', 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/n5.jpg', 'olympic,football', 11, NULL, 1, 'active', '2020-08-14 01:55:55', '2025-05-29 02:44:51'),
(2, 'Leverage agile frameworks to provide a robust synopsis for high level overviews', 'where-can-i-get-some', 'It is a long established fact that a reader', '<h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><p class=\"markup-text mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; padding: 40px 40px 50px 30px; color: rgb(102, 102, 102); font-weight: 400; font-style: italic; clear: both; border-left: 10px solid rgb(35, 134, 203); font-family: Roboto, sans-serif; font-size: 16px; box-shadow: rgb(238, 238, 238) 0px 0px 150px !important;\">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.</p></h3><h2 style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-weight: 700; line-height: 40px; font-size: 36px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Economy may face double recession</h2><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p><div class=\"mb-26\" style=\"margin-bottom: 26px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><img src=\"http://localhost:8080/srv_homepage_html/images/n2.jpg\" alt=\"Single Articles\" style=\"max-width: 100%; height: auto;\"></div><p class=\"desc mb-23\" style=\"margin-right: 0px; margin-bottom: 23px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p><ul class=\"listing-style2 modify ml-20 mb-28\" style=\"margin-right: 0px; margin-bottom: 28px; margin-left: 20px; list-style: outside none none; padding: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">New Construction Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Renovations Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Historic Renovations and Restorations</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Additions Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Rebuilding from fire or water damage</li></ul></h3><h3 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 32px; font-size: 28px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Experts Always Ready to Maximizing Products</h3><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p></h3><h4 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 28px; font-size: 20px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Get Start Your Next Project</h4><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-0\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p></h3>', NULL, 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/n4.jpg', 'recruitment', 12, NULL, 1, 'active', '2020-08-14 01:58:52', '2025-05-29 02:44:40'),
(3, 'These cases are perfectly simple and easy to distinguish', 'the-standard-lorem-ipsum-passage-used-since-the-1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p class=\"desc mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><p class=\"markup-text mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; padding: 40px 40px 50px 30px; color: rgb(102, 102, 102); font-weight: 400; font-style: italic; clear: both; border-left: 10px solid rgb(35, 134, 203); font-family: Roboto, sans-serif; font-size: 16px; box-shadow: rgb(238, 238, 238) 0px 0px 150px !important;\">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.</p></h3><h2 style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-weight: 700; line-height: 40px; font-size: 36px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Economy may face double recession</h2><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p><div class=\"mb-26\" style=\"margin-bottom: 26px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><img src=\"http://localhost:8080/srv_homepage_html/images/n2.jpg\" alt=\"Single Articles\" style=\"max-width: 100%; height: auto;\"></div><p class=\"desc mb-23\" style=\"margin-right: 0px; margin-bottom: 23px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p><ul class=\"listing-style2 modify ml-20 mb-28\" style=\"margin-right: 0px; margin-bottom: 28px; margin-left: 20px; list-style: outside none none; padding: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">New Construction Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Renovations Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Historic Renovations and Restorations</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Additions Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Rebuilding from fire or water damage</li></ul></h3><h3 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 32px; font-size: 28px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Experts Always Ready to Maximizing Products</h3><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p></h3><h4 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 28px; font-size: 20px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Get Start Your Next Project</h4><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><p class=\"desc mb-0\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p></h3>', NULL, 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/n3.jpg', 'factory,travel', 8, NULL, 1, 'active', '2020-08-14 02:59:33', '2025-05-29 02:44:24'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'the-standard-lorem-ipsum-passage', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam', '<h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p><p class=\"markup-text mb-35\" style=\"margin-right: 0px; margin-bottom: 35px; margin-left: 0px; padding: 40px 40px 50px 30px; color: rgb(102, 102, 102); font-weight: 400; font-style: italic; clear: both; border-left: 10px solid rgb(35, 134, 203); font-family: Roboto, sans-serif; font-size: 16px; box-shadow: rgb(238, 238, 238) 0px 0px 150px !important;\">Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits.</p></h3><h2 style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-weight: 700; line-height: 40px; font-size: 36px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Economy may face double recession</h2><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p><div class=\"mb-26\" style=\"margin-bottom: 26px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><img src=\"http://localhost:8080/srv_homepage_html/images/n2.jpg\" alt=\"Single Articles\" style=\"max-width: 100%; height: auto;\"></div><p class=\"desc mb-23\" style=\"margin-right: 0px; margin-bottom: 23px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities. Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p><ul class=\"listing-style2 modify ml-20 mb-28\" style=\"margin-right: 0px; margin-bottom: 28px; margin-left: 20px; list-style: outside none none; padding: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\"><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">New Construction Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Renovations Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Historic Renovations and Restorations</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Additions Benefit of Service</li><li style=\"position: relative; padding-left: 25px; line-height: 2em; margin-bottom: 8px;\">Rebuilding from fire or water damage</li></ul></h3><h3 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 32px; font-size: 28px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Experts Always Ready to Maximizing Products</h3><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Proactively fabricate one-to-one materials via effective e-business. Completely synergize scalable e-commerce rather than high standards in e-services. Assertively iterate resource maximizing products after leading-edge intellectual capital. Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p></h3><h4 class=\"mb-17\" style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; font-weight: 700; line-height: 28px; font-size: 20px; font-family: Poppins, sans-serif; color: rgb(28, 27, 27);\">Get Start Your Next Project</h4><h3 style=\"margin: 15px 0px; font-weight: 700; line-height: 32px; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; color: rgb(28, 27, 27); padding: 0px;\"><p class=\"desc mb-0\" style=\"margin-right: 0px; margin-left: 0px; color: rgb(54, 54, 54); font-family: Roboto, sans-serif; font-size: 16px; font-weight: 400;\">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p></h3>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><br></p>', 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/n2.jpg', 'olympic,travel', 7, NULL, 1, 'active', '2020-08-15 06:58:45', '2025-05-29 02:48:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Tuyển Dụng', 'tuyen-dung', 'active', '2025-05-21 23:08:01', '2025-05-21 23:08:01'),
(8, 'Đào Tạo', 'dao-tao', 'active', '2025-05-21 23:08:08', '2025-05-21 23:08:08'),
(9, 'Thể Thao', 'the-thao', 'active', '2025-05-21 23:08:50', '2025-05-21 23:08:50'),
(10, 'Nấu Ăn', 'nau-an', 'active', '2025-05-21 23:09:27', '2025-05-21 23:09:27'),
(11, 'Trồng Cây', 'trong-cay', 'active', '2025-05-21 23:09:34', '2025-05-21 23:09:34'),
(12, 'Du Lịch', 'du-lich', 'active', '2025-05-21 23:12:07', '2025-05-21 23:12:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `replied_comment` text DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `replied_comment`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Testing comment edited', 'active', NULL, NULL, '2020-08-14 07:08:42', '2020-08-15 06:59:58'),
(2, NULL, 2, 'testing 2', 'active', NULL, 1, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
(3, NULL, 2, 'That\'s cool', 'active', NULL, 2, '2020-08-14 07:12:27', '2020-08-14 07:12:27'),
(4, 1, 2, 'nice', 'active', NULL, NULL, '2020-08-15 07:31:19', '2020-08-15 07:31:19'),
(5, NULL, 5, 'nice blog', 'active', NULL, NULL, '2020-08-15 07:51:01', '2020-08-15 07:51:01'),
(6, NULL, 3, 'nice', 'active', NULL, NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29'),
(7, NULL, 3, 'really', 'active', NULL, 6, '2020-08-17 21:13:51', '2020-08-17 21:13:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post_tags`
--

INSERT INTO `post_tags` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(5, 'olympic', 'olympic', 'active', '2025-05-21 23:10:29', '2025-05-21 23:10:29'),
(6, 'football', 'football', 'active', '2025-05-21 23:10:38', '2025-05-21 23:10:38'),
(7, 'factory', 'factory', 'active', '2025-05-21 23:10:49', '2025-05-21 23:10:49'),
(8, 'travel', 'travel', 'active', '2025-05-21 23:10:55', '2025-05-21 23:10:55'),
(9, 'recruitment', 'recruitment', 'active', '2025-05-21 23:11:23', '2025-05-21 23:11:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `short_des` text NOT NULL,
  `logo` varchar(191) NOT NULL,
  `photo` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `description`, `short_des`, `logo`, `photo`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu\r\n\r\n                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.', 'Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.', 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/logo-dark.png', 'http://192.168.195.107:8080/srv_homepage/storage/photos/1/left-bg.jpg', 'Lô A-11, A-12, KCN Nhật Bản, Tân Tiến, An Dương, Hải Phòng, Việt Nam', '02253743571', 'info@sumirubber-vn.com', NULL, '2025-05-25 21:15:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `provider` varchar(191) DEFAULT NULL,
  `provider_id` varchar(191) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'srv@sumirubber-vn.com', NULL, '$2y$10$GOGIJdzJydYJ5nAZ42iZNO3IL1fdvXoSPdUOH3Ajy5hRmi0xBmTzm', NULL, 'admin', NULL, NULL, 'active', 'QCdVKp7ZxKeSJQUppe8LWoqoQg3nKNmyEEu2tOntXCagjl7A54gXzx6r7hyg', NULL, '2025-05-29 02:40:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  ADD KEY `posts_post_tag_id_foreign` (`post_tag_id`),
  ADD KEY `posts_added_by_foreign` (`added_by`);

--
-- Chỉ mục cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`);

--
-- Chỉ mục cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_tags_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_tag_id_foreign` FOREIGN KEY (`post_tag_id`) REFERENCES `post_tags` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
