-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 02:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pejaten_residence`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id_amenity` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id_amenity`, `nama`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'minus', 'Amenity/jpUlszcl7nRWW77Fc56VdmP5yXCLyG5O2QEvuoid.png', '2020-11-16 03:17:36', '2020-11-16 23:42:30'),
(2, 'in', 'Amenity/TVJBSFXuaP1gK8vhXLAaIjk80fhTjMa8iHvCh8hQ.png', '2020-11-16 03:17:36', '2020-11-16 23:42:43'),
(3, 'aut', 'Amenity/gWAitytl3jSmneXSn7sCsWTT7OCu04YgXCCU3f1l.png', '2020-11-16 03:17:36', '2020-11-16 23:42:55'),
(4, 'et', 'Amenity/Df3LDiq3crXuOqwYb7DeAdijo98EFKMfYtTl2bg0.png', '2020-11-16 03:17:36', '2020-11-16 23:43:25'),
(5, 'unde', 'Amenity/1NIVC4Bh0jvWYao5J6odFQe9YwMgIHPtOwtz4oQM.png', '2020-11-16 03:17:36', '2020-11-16 23:43:46'),
(6, 'libero', 'Amenity/qTg0DikWIpTPRQHqKdyCnqxliFSe9TDGWHlQQfvz.png', '2020-11-16 03:17:36', '2020-11-16 23:44:12'),
(7, 'nostrum', 'Amenity/Ssz1f3LUayojN2ga7S9T2FPkACnHubVKCV9qhPHJ.png', '2020-11-16 03:17:36', '2020-11-16 23:44:28'),
(8, 'nihil', 'Amenity/xbsElbCjP3rYcCnszsgkcScEGVVCvi8tJ57tH4E8.png', '2020-11-16 03:17:36', '2020-11-16 23:44:51'),
(9, 'labore', 'Amenity/DjQmpPEDTBbUFwetqSRVkhjuyDuls39JDRC85MNN.png', '2020-11-16 03:17:36', '2020-11-16 23:45:07'),
(10, 'et', 'Amenity/4dYAsj8M7MbtG32SDqDYB2MUWnx8rT6C03ylIVqs.png', '2020-11-16 03:17:37', '2020-11-16 23:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `amenity_rules`
--

CREATE TABLE `amenity_rules` (
  `id_rules` bigint(20) UNSIGNED NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_amenity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenity_rules`
--

INSERT INTO `amenity_rules` (`id_rules`, `id_unit`, `id_amenity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-11-17 01:50:15', '2020-11-17 01:50:15'),
(2, 1, 2, '2020-11-17 01:50:16', '2020-11-17 01:50:16'),
(3, 1, 3, '2020-11-17 01:50:16', '2020-11-17 01:50:16'),
(4, 1, 4, '2020-11-17 01:50:18', '2020-11-17 01:50:18'),
(5, 1, 5, '2020-11-17 01:50:19', '2020-11-17 01:50:19'),
(6, 1, 6, '2020-11-17 01:50:20', '2020-11-17 01:50:20'),
(7, 11, 1, '2020-11-17 02:45:04', '2020-11-17 02:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id_building` bigint(20) UNSIGNED NOT NULL,
  `id_project` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id_building`, `id_project`, `nama`, `lantai`, `luas`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 4, 'Lawson Hamill', '3', '52296.592954', 'Dolor dolor recusandae velit delectus. Ex expedita quia aliquam qui quia debitis. Sunt hic accusamus et quia. Earum ea voluptas dolores aut et sed ipsa. Voluptatibus fugit voluptate sequi.', '2020-11-16 03:09:42', '2020-11-16 03:09:42'),
(2, 4, 'Monica Abshire', '8', '2062.6750407', 'Accusantium harum deleniti sapiente laboriosam optio natus aut. Ipsam est perferendis praesentium eaque repellat aliquam aut totam. Est id fuga culpa nam.', '2020-11-16 03:09:42', '2020-11-16 03:09:42'),
(3, 4, 'Christ Thiel', '2', '451411301.64509', 'Corrupti tempora et et aut delectus. Neque ullam et est dolor dolore. Vel provident dolorum excepturi et et. Laborum distinctio temporibus rerum nesciunt vel quo.', '2020-11-16 03:09:42', '2020-11-16 03:09:42'),
(4, 1, 'Dr. Gwendolyn Brekke', '7', '698197696.1311', 'Incidunt itaque facere doloremque et. Asperiores et in eum eius rerum. Saepe maxime quam delectus laudantium debitis.', '2020-11-16 03:14:24', '2020-11-16 03:14:24'),
(5, 1, 'Miss Kathryne Kling MD', '1', '10.745', 'Dolor qui ut ut sunt. Qui enim ducimus sit eligendi velit aut. Et aliquid quos incidunt officia consequatur qui. Dignissimos necessitatibus doloremque accusamus suscipit earum saepe quam.', '2020-11-16 03:14:24', '2020-11-16 03:14:24'),
(6, 1, 'Wilma Greenfelder DDS', '0', '78.530258', 'Alias reiciendis vel incidunt ipsum porro quasi minus. Non et autem exercitationem et et. Consequuntur ea voluptas ut natus velit assumenda impedit. In voluptatem provident id temporibus.', '2020-11-16 03:14:24', '2020-11-16 03:14:24'),
(7, 2, 'Gustave Gutkowski', '1', '459999560', 'Ipsa voluptas consectetur sed rerum. Omnis facilis quam fugit ea. Pariatur impedit sint sapiente aspernatur minus. Et deserunt tempore sunt qui.', '2020-11-16 03:14:41', '2020-11-16 03:14:41'),
(8, 2, 'Archibald O\'Hara', '9', '3.422653', 'Dolorum magni vel itaque. Vel sequi totam illum ut laboriosam. Ea dolorem non qui in.', '2020-11-16 03:14:41', '2020-11-16 03:14:41'),
(9, 2, 'Della Donnelly', '6', '0.4012373', 'Sit a placeat qui. Tenetur incidunt ex non in eius excepturi. Quidem iste ut consequatur tempora natus. Asperiores laborum aut sit.', '2020-11-16 03:14:41', '2020-11-16 03:14:41'),
(10, 3, 'Iva Sauer', '1', '46.33', 'Et sed delectus magni. Similique distinctio aperiam temporibus quia eum error et reprehenderit. Maiores expedita sunt quia. Corrupti pariatur rerum a.', '2020-11-16 03:14:55', '2020-11-16 03:14:55'),
(11, 3, 'Libbie Hoppe', '0', '102.8539', 'Quo itaque dolor adipisci. Molestiae eveniet aperiam expedita dolores voluptas consectetur qui. Repellendus et veniam aliquid et quibusdam aut.', '2020-11-16 03:14:55', '2020-11-16 03:14:55'),
(12, 3, 'Mr. Torey Padberg III', '3', '236625956.88047', 'Eum et animi velit facilis. Culpa nam fugiat veritatis et facilis hic earum enim. Illum quos ratione ad voluptatem deserunt illo in.', '2020-11-16 03:14:55', '2020-11-16 03:14:55'),
(13, 5, 'Odie Hettinger PhD', '8', '5887377.10671', 'Dolores repellat molestiae qui quia eum ratione sed. Molestiae et quia iste quod debitis a. Nobis hic laboriosam dolor voluptatum qui alias in.', '2020-11-16 03:15:26', '2020-11-16 03:15:26'),
(14, 5, 'Dr. Dejon Hoeger DVM', '7', '19090', 'Quo rem eum iure sed. Et dolorem eaque sit et est.', '2020-11-16 03:15:26', '2020-11-16 03:15:26'),
(15, 5, 'Ms. Marquise Upton', '9', '22028.2091', 'Illum exercitationem similique sint ullam dicta culpa. Aut quo dignissimos qui inventore. Quae cupiditate debitis quam quia nisi.', '2020-11-16 03:15:26', '2020-11-16 03:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id_facility` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id_facility`, `nama`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'accusamus', 'Facility/tX4lcgtPZeXijL2JpBZ5Rag8wvjhmhDqggdKVeQP.png', '2020-11-16 03:16:45', '2020-11-16 23:38:39'),
(2, 'corrupti', 'Facility/zk5mB3tlmVH8wj2RhGr0F9QeyirXOj7LYyhfv7nQ.png', '2020-11-16 03:16:45', '2020-11-16 23:38:57'),
(3, 'nulla', 'Facility/zQYIeWsBgR0FVm8YowYzj7ScB8zZtKVOpl3BFYUy.png', '2020-11-16 03:16:45', '2020-11-16 23:39:20'),
(4, 'delectus', 'Facility/qNaq07JKnhTL6I5aFY9YbMaFmDm6qbnWIAnkOghK.png', '2020-11-16 03:16:45', '2020-11-16 23:39:35'),
(5, 'possimus', 'Facility/VtJ5mtaTqDOGcEimgLnrO8GvpoW3cr8YM3QhxYm6.png', '2020-11-16 03:16:45', '2020-11-16 23:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `facility_rules`
--

CREATE TABLE `facility_rules` (
  `id_rules` bigint(20) UNSIGNED NOT NULL,
  `id_building` int(11) NOT NULL,
  `id_facility` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_rules`
--

INSERT INTO `facility_rules` (`id_rules`, `id_building`, `id_facility`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-11-17 00:38:04', '2020-11-17 00:38:04'),
(3, 1, 3, '2020-11-17 00:38:11', '2020-11-17 00:38:11'),
(5, 1, 2, '2020-11-17 00:38:34', '2020-11-17 00:38:34'),
(6, 16, 1, '2020-11-17 00:40:49', '2020-11-17 00:40:49'),
(7, 16, 2, '2020-11-17 00:40:49', '2020-11-17 00:40:49'),
(8, 16, 3, '2020-11-17 00:40:49', '2020-11-17 00:40:49'),
(9, 16, 4, '2020-11-17 01:29:22', '2020-11-17 01:29:22'),
(10, 16, 5, '2020-11-17 01:29:23', '2020-11-17 01:29:23');

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
(4, '2020_11_03_184612_create_facilities_table', 2),
(5, '2020_11_03_184729_create_amenities_table', 2),
(6, '2020_11_03_191132_create_amenity_rules_table', 2),
(7, '2020_11_03_191229_create_facility_rules_table', 2),
(8, '2020_11_07_032722_create_projects_table', 2),
(9, '2020_11_07_033100_create_buildings_table', 2),
(10, '2020_11_07_033215_create_units_table', 2),
(11, '2020_11_07_051810_create_unit_images_table', 2);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `nama_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_project`, `nama_pt`, `nama_project`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Erdman, Fisher and Morar', 'Private Detective and Investigator', '94746 Orrin Circles\nReyesland, WV 03763', '2020-11-16 02:55:23', '2020-11-16 02:55:23'),
(2, 'Kris and Sons', 'Real Estate Broker', '9436 Schmeler Walk Suite 827\nNew Arianna, ME 59032', '2020-11-16 02:55:24', '2020-11-16 02:55:24'),
(3, 'Turner-Beahan', 'Optometrist', '64817 Joyce Greens\nSpinkabury, VT 76074', '2020-11-16 02:55:24', '2020-11-16 02:55:24'),
(4, 'Schuster, Murray and Heaney', 'Clinical Laboratory Technician', '3146 Barrows Mountains Suite 766\nWest Savion, ND 70611', '2020-11-16 02:55:24', '2020-11-16 02:55:24'),
(5, 'Mayer, Hoppe and Welch', 'Teller', '1614 Kunde Rest Suite 509\nPort Dorothyberg, NH 75867-2632', '2020-11-16 02:55:24', '2020-11-16 02:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_building` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_sewa` int(11) DEFAULT NULL,
  `harga_cicil` int(11) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `vr_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id_unit`, `id_building`, `nama`, `deskripsi`, `harga_jual`, `harga_sewa`, `harga_cicil`, `diskon`, `vr_link`, `created_at`, `updated_at`) VALUES
(1, 7, 'Mr. Raven Langosh', 'Veniam corrupti quos rerum accusamus qui et dolorem harum. Harum qui nisi fugiat eligendi corrupti aut. Fugit non iure recusandae esse porro. Doloremque aut iure nihil officia est explicabo.', 158761, 72212, 73727, 10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RrVLWtNiSXU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2020-11-17 01:45:15', '2020-11-17 02:58:06'),
(2, 5, 'Maymie Hodkiewicz', 'Magnam velit molestias nostrum cumque quibusdam aliquid. In non quos sapiente quia. Beatae quisquam ut blanditiis voluptas quia. Nesciunt non aut consectetur voluptas sint in molestias.', 988458, 71620, 89631, 61, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(3, 6, 'Prof. Faustino Bogisich', 'At minima quam quo et consequuntur omnis. Doloremque recusandae voluptatem qui tenetur. Voluptate dolore odio corrupti est officia et.', 586030, 9537, 50975, 23, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(4, 8, 'Linwood Windler III', 'At excepturi consequuntur eveniet. Itaque rerum autem qui velit qui ducimus tempora. Aut et quis optio explicabo.', 285694, 65856, 91686, 77, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(5, 1, 'Kennedi Konopelski', 'Quisquam quo molestias aspernatur atque praesentium qui dolor. Minima id qui qui suscipit. Rerum in corporis voluptas optio. Earum aut quam sit et quia nisi voluptatum.', 579078, 84773, 43446, 28, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(6, 4, 'Andre Cruickshank IV', 'Necessitatibus autem qui distinctio consequatur. Eos et veritatis voluptatem repellendus itaque porro deserunt eaque. Consequuntur blanditiis consequatur ut.', 228518, 68894, 31426, 23, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(7, 2, 'Marion Kunde', 'Consequatur voluptatum ratione sint repudiandae est. Dignissimos ut iste similique accusamus eius. Quaerat et laudantium sed. Aut consequatur et itaque soluta nostrum corrupti tempora.', 689828, 65499, 55890, 45, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(8, 4, 'Lupe Wisozk', 'Est dolor dolorem sint beatae ut temporibus molestiae. Enim alias ea iste delectus deserunt laborum laudantium dolore. Maxime aut omnis sint et.', 995581, 43713, 35090, 64, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(9, 7, 'Adrianna Gutkowski', 'Ullam reprehenderit qui perferendis possimus numquam rerum ducimus. Mollitia ratione saepe incidunt atque aut aut. Hic laudantium nostrum quia quia. Quis at omnis voluptatem voluptas aut.', 136918, 67774, 61633, 44, NULL, '2020-11-17 01:45:15', '2020-11-17 01:45:15'),
(10, 3, 'Fatima Kihn', 'Officia explicabo est corporis quis sed suscipit. Placeat veniam iste et fugiat enim. Dolores occaecati et voluptatum architecto quod. Reprehenderit doloremque unde labore.', 568293, 77014, 75594, 83, NULL, '2020-11-17 01:45:16', '2020-11-17 01:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `unit_images`
--

CREATE TABLE `unit_images` (
  `id_image` bigint(20) UNSIGNED NOT NULL,
  `id_unit` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_images`
--

INSERT INTO `unit_images` (`id_image`, `id_unit`, `path`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 'Unit/b.jpg', 3, '2020-11-17 01:53:48', '2020-11-17 01:53:48'),
(2, 1, 'Unit/c.jpg', 3, '2020-11-17 01:53:48', '2020-11-17 01:53:48'),
(3, 1, 'Unit/index.png', 3, '2020-11-17 01:53:48', '2020-11-17 01:53:48'),
(4, 1, 'Unit/b.jpg', 1, '2020-11-17 02:38:44', '2020-11-17 02:58:39'),
(5, 1, 'Unit/360_5e61f10e7846d.JPG', 2, '2020-11-17 02:38:45', '2020-11-17 02:58:39'),
(6, 1, 'Unit/b.jpg', 4, '2020-11-17 02:38:45', '2020-11-17 02:58:39'),
(7, 11, 'Unit/b.jpg', 1, '2020-11-17 02:45:05', '2020-11-17 02:45:05'),
(8, 11, 'Unit/b.jpg', 2, '2020-11-17 02:45:05', '2020-11-17 02:45:05'),
(9, 11, 'Unit/b.jpg', 4, '2020-11-17 02:45:05', '2020-11-17 02:45:05'),
(10, 11, 'Unit/b.jpg', 3, '2020-11-17 02:45:05', '2020-11-17 02:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, 'superadmin@gmail.com', NULL, '$2y$10$rdnA4IEQiMdwFOXX/125l.VSXHBEh0rMmz/ahSSEAYVShvcOXkQfG', NULL, '2020-11-16 00:59:16', '2020-11-16 00:59:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id_amenity`);

--
-- Indexes for table `amenity_rules`
--
ALTER TABLE `amenity_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id_building`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id_facility`);

--
-- Indexes for table `facility_rules`
--
ALTER TABLE `facility_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `unit_images`
--
ALTER TABLE `unit_images`
  ADD PRIMARY KEY (`id_image`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id_amenity` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `amenity_rules`
--
ALTER TABLE `amenity_rules`
  MODIFY `id_rules` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id_building` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id_facility` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facility_rules`
--
ALTER TABLE `facility_rules`
  MODIFY `id_rules` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unit_images`
--
ALTER TABLE `unit_images`
  MODIFY `id_image` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
