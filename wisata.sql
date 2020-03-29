-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 03:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `nama_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `nama_cat`, `created_at`, `updated_at`) VALUES
(1, 'Reservation Agent OR Transportation Ticket Agent', '2020-03-15 19:08:56', '2020-03-15 19:08:56'),
(2, 'Tree Trimmer', '2020-03-15 19:08:56', '2020-03-15 19:08:56'),
(3, 'Lay-Out Worker', '2020-03-15 19:08:56', '2020-03-15 19:08:56'),
(4, 'Bulldozer Operator', '2020-03-15 19:08:56', '2020-03-15 19:08:56'),
(5, 'Counselor', '2020-03-15 19:08:56', '2020-03-15 19:08:56'),
(6, 'Naval Architects', '2020-03-15 19:08:57', '2020-03-15 19:08:57'),
(7, 'Precision Instrument Repairer', '2020-03-15 19:08:57', '2020-03-15 19:08:57'),
(8, 'Medical Scientists', '2020-03-15 19:08:57', '2020-03-15 19:08:57'),
(9, 'Heating and Air Conditioning Mechanic', '2020-03-15 19:08:57', '2020-03-15 19:08:57'),
(10, 'Telecommunications Line Installer', '2020-03-15 19:08:57', '2020-03-15 19:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`, `category`, `location`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mountaint', 1, 'Semarang', 'Est quia enim unde mollitia consequatur. Qui dignissimos suscipit rerum non. Sint perferendis assumenda odit laudantium quis. Rerum ad reiciendis iste enim rerum corporis perspiciatis aut.', '20200316021541.PNG', '2020-03-15 19:10:17', '2020-03-15 19:15:41'),
(2, 'Dickens PLC', 2, '234 Pfannerstill Plains\nBogisichton, PA 07155-9943', 'Iure corrupti sunt voluptatem blanditiis id tempore. Et et doloremque vero repellat esse asperiores. Voluptatibus provident dicta odit iste ad. Magni beatae qui fugiat id dolores.', '6c0e548ccbb644297c04cfb6282fb657.jpg', '2020-03-15 19:10:17', '2020-03-15 19:10:17'),
(3, 'Treutel PLC', 4, '652 Legros Walk Apt. 274\nNorth Rupertport, MA 36864', 'Soluta id accusantium error deserunt harum est libero. Sequi molestiae est quia officiis odio iusto et fuga. Eos pariatur est rerum dolorem sit enim a. Ratione qui minus alias veritatis.', 'abb66197ff587ffccf8827f90df443b7.jpg', '2020-03-15 19:10:17', '2020-03-15 19:10:17'),
(4, 'Langosh LLC', 8, '9764 Elwin Stream\nPort Eldonberg, NM 38255-9751', 'Libero praesentium repellat rerum et aut non harum. Dolorem et ducimus perferendis aut culpa voluptatibus. Officiis accusamus veniam perferendis illum. Sint non consequatur ipsam autem nemo.', '2991cdd9b19ae5877aede911599d838a.jpg', '2020-03-15 19:10:18', '2020-03-15 19:10:18'),
(5, 'Howe-Mraz', 9, '279 Nikolaus Cliff Apt. 815\nDessieshire, WA 60428', 'Aut ut laboriosam laudantium odio harum eum. Et soluta libero atque. Sit quasi provident maiores quo aspernatur. Voluptatem magnam facere non debitis ea enim. Occaecati est quos omnis.', 'c124b7ebca4f503df36b79d2f886f679.jpg', '2020-03-15 19:10:18', '2020-03-15 19:10:18'),
(6, 'Marks-Fadel', 8, '5134 Balistreri Drive\nStokesberg, IN 80657', 'Omnis laboriosam sit ipsum et id. Iusto temporibus autem dignissimos exercitationem. Ullam numquam temporibus et quaerat.', 'd3a3c2684aca87386d01bf361f0d0799.jpg', '2020-03-15 19:10:18', '2020-03-15 19:10:18'),
(7, 'Feil-Predovic', 1, '26522 Cora Rapid Suite 712\nNorth Vada, NC 59015', 'Ad accusantium sed itaque aperiam deserunt ex. Ullam voluptatibus dolores minus ullam fugit nihil. Quos voluptas recusandae hic repellat dolores.', 'cc823b37fa5be2e948883da7a493ca37.jpg', '2020-03-15 19:10:18', '2020-03-15 19:10:18'),
(8, 'King-Stiedemann', 6, '7266 Bogan Route\nFredaland, WA 39506', 'Cumque quam numquam facere eligendi. Voluptatem temporibus est quo. Rerum accusamus atque vitae sequi. Eum illum sunt vel et nemo harum suscipit.', '1dbadcceebdd45c5d5bad88b8e8d3f06.jpg', '2020-03-15 19:10:18', '2020-03-15 19:10:18'),
(9, 'Shields LLC', 9, '9363 Carter Stravenue Apt. 805\nEast Coralie, OH 69253-3660', 'Vero quasi ut corrupti ab incidunt. Rerum totam molestias iure dolores. Nesciunt consequatur voluptas dolor eveniet. Ut soluta quibusdam quaerat rerum et.', '569447e5857bee54a4de8de8148cbdde.jpg', '2020-03-15 19:10:19', '2020-03-15 19:10:19'),
(10, 'Jones-Lockman', 3, '386 Boyle Pike Suite 966\nLake Dessieport, CA 41255', 'Dolorum accusamus est minus ut culpa. Dolores reiciendis delectus reiciendis laborum. At eum incidunt sunt sit nostrum exercitationem est. Suscipit voluptatibus dolorem dolorem asperiores.', '9e842fe448fa0ab92b56bbbab9a1ce84.jpg', '2020-03-15 19:10:19', '2020-03-15 19:10:19'),
(11, 'Terry-Hayes', 8, '24244 Brekke Walk\nHillston, MA 74392-9596', 'Iure ipsam ratione natus doloribus inventore est. Unde vel est dicta voluptas quisquam. Eaque beatae dolores quia impedit architecto.', '77da95271eee8f90c2e79d89549d3e8c.jpg', '2020-03-15 19:10:19', '2020-03-15 19:10:19'),
(12, 'Swift-Hilpert', 4, '35901 Stokes Bypass Suite 477\nLake Aubree, PA 71421', 'Excepturi ab corporis numquam et. Velit non doloremque voluptas recusandae. Quae inventore perspiciatis sint voluptas libero fugiat id odit. Incidunt voluptas deserunt hic minima nesciunt quidem.', '579391d84874937b794612822419f6a8.jpg', '2020-03-15 19:10:19', '2020-03-15 19:10:19'),
(13, 'Walsh and Sons', 6, '97670 Spinka Course Suite 202\nHarveyburgh, CO 81176-6773', 'Culpa praesentium corrupti neque sint. Est laborum assumenda aut cupiditate modi dignissimos sint dicta. Et pariatur odio doloremque porro. Itaque fugiat occaecati voluptatem earum quos autem.', 'ad51fc5c868bad9c012962514e0f2f93.jpg', '2020-03-15 19:10:20', '2020-03-15 19:10:20'),
(14, 'Jaskolski LLC', 7, '6708 Ryan Stream\nKathlynmouth, HI 00910', 'Ut nostrum asperiores quo nihil qui. Autem ut omnis quo ea.', '5bd786144ff7b8a54d373e2c76bf620a.jpg', '2020-03-15 19:10:20', '2020-03-15 19:10:20'),
(15, 'Breitenberg-Brown', 9, '8749 Tremblay Island\nNew Hansville, AK 79070', 'Consequatur eius commodi fugiat sit deleniti impedit et. Vero repellendus sit eius non consequatur veniam non. Repellendus omnis iste quo ipsa rerum sit.', '815008ee007045698f7f2608f7f1c151.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21'),
(16, 'Graham, Romaguera and Rosenbaum', 3, '3987 Kub Vista\nBlockside, WA 59657-0493', 'Consequatur itaque in commodi minus. Architecto accusamus delectus quia. Neque omnis est commodi eos maxime nam.', 'dc146b15affdfb9792da615987331383.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21'),
(17, 'Mitchell-Lemke', 5, '13383 Jarret Squares Suite 698\nBergestad, WY 19853-2125', 'Et temporibus ut qui dicta. Doloremque tempore quisquam tenetur. Dolore voluptatem repudiandae quidem ut illo.', '4b9e0334a535134748233114555543c3.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21'),
(18, 'Erdman LLC', 9, '26690 Rebekah Brook Apt. 143\nTristianland, DC 77810', 'Ipsam corrupti architecto ut assumenda harum quo totam. Ut ducimus similique ex perferendis ut illo provident qui. Non atque ducimus omnis aut enim.', 'f239c6ee577bf7459f5cfb37ef76f5c0.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21'),
(19, 'Bradtke Ltd', 9, '92679 Reed Union Apt. 193\nHamillberg, NV 85391-2407', 'Inventore at dolor ullam repudiandae. Alias id deleniti dolor quae et totam qui et. At cum delectus veniam quis voluptatum magnam. Nobis autem deserunt est expedita.', 'bd2975cf4113753e0b714735a75e0627.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21'),
(20, 'Smitham-Emmerich', 8, '6908 Lind Canyon Apt. 766\nKayceemouth, AL 00899', 'Est odio corrupti accusamus eaque. Aut rem et hic qui deserunt esse. Repellendus ducimus et accusantium minus ipsum temporibus omnis.', 'b4806221405c8aab11b0d1645723656b.jpg', '2020-03-15 19:10:21', '2020-03-15 19:10:21');

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
(2, '2020_02_24_143119_create_category_table', 1),
(3, '2020_02_24_143130_create_destination_table', 1),
(4, '2020_03_10_220942_add_google_id_column', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Ettie Witting DDS', 'reva16@example.org', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VCsRkeXPZ4', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(2, 'Rickie Roob', 'hamill.arely@example.org', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8qLncft9qH', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(3, 'Wilhelm Cole', 'ima37@example.com', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KXlokzteAw', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(4, 'Summer Kshlerin', 'taya.gleichner@example.net', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PU1XKDL2UH', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(5, 'Salvador Shields', 'alindgren@example.net', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'YPZzm7G2eZ', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(6, 'Cassidy Dare', 'parker.halie@example.org', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IzwBCVz18d', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(7, 'Rosa Schoen', 'alisha93@example.org', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vQdBR89kmh', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(8, 'Darren Marvin', 'chloe.cummerata@example.net', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AXZPZB2fAo', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(9, 'Arlie Terry', 'uweber@example.org', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mA5kazO3oP', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(10, 'Anya Boyer', 'kurt12@example.net', '2020-03-15 19:08:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6soCOpj2FG', '2020-03-15 19:08:56', '2020-03-15 19:08:56', NULL),
(11, 'Kazekuri_', 'boysandy16@gmail.com', NULL, '$2y$10$6svh/gO02B0tKquunYBMNegLN0uJWO.oNXmCgM5Rc4PaG8gdd5GzO', NULL, '2020-03-15 19:11:29', '2020-03-15 19:11:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_category_foreign` (`category`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_category_foreign` FOREIGN KEY (`category`) REFERENCES `category` (`id_cat`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
