-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2025 at 07:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental-mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `url`, `created_at`, `updated_at`) VALUES
(1, '2.jpeg', '2025-01-29 00:39:18', '2025-01-29 00:39:18'),
(2, '1.webp', '2025-01-29 00:39:18', '2025-01-29 00:39:18'),
(3, '1.webp', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_23_100909_create_banner_table', 1),
(5, '2025_01_23_101419_create_profile_table', 1),
(6, '2025_01_23_101433_create_sosmed_table', 1),
(7, '2025_01_23_101505_create_mobil_table', 1),
(8, '2025_01_23_101510_create_motor_table', 1),
(9, '2025_01_23_201441_create_wisata_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_lepas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pintu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penumpang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `include` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `nama`, `harga_lepas`, `harga_driver`, `jam_mulai`, `jam_selesai`, `pintu`, `penumpang`, `wilayah`, `include`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Avanza', '300000', '500000', '07:00', '21:00', '2', '5', 'Yogyakarta', 'Mobil, BBM durasi 12 jam', '1.webp', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_selesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `helm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `include` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `nama`, `harga`, `jam_mulai`, `jam_selesai`, `helm`, `wilayah`, `include`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vario 2021', '100000', '07:00', '21:00', '2', 'Yogyakarta', ' Motor, BBM 4 Liter, Lepas Kunci', '1.jpg', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas_tittle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekilas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_mengapa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `slogan`, `banner1`, `banner2`, `banner3`, `sekilas_tittle`, `sekilas`, `tentang`, `tentang_mengapa`, `alamat`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Pralim Trans', 'Solusi Rental Mobil Motor Cepat & Aman', 'Butuh Kendaraan Di Yogyakarta?', 'Rental Mobil & Motor Terlengkap Di Yogyakarta!', 'Selamat datang di Pralim Trans, solusi terbaik untuk kebutuhan transportasi dan perjalanan wisata Anda. Kami menyediakan layanan rental mobil & motor, paket wisata lengkap dengan driver profesional, dan fasilitas terbaik untuk pengalaman perjalanan yang tak terlupakan.', 'Kami berkomitmen untuk memberikan pelayanan terbaik', 'adalah perusahaan transportasi yang berbasis di Yogyakarta, menawarkan layanan rental mobil dan motor yang lengkap serta paket wisata menarik untuk menjelajahi keindahan kota dan sekitarnya. Kami menyediakan armada kendaraan yang terawat dengan baik dan driver profesional yang siap menemani perjalanan Anda dengan aman dan nyaman.', 'Selamat datang di Pralim Trans, mitra terpercaya Anda dalam perjalanan di Yogyakarta dan sekitarnya. Kami adalah perusahaan transportasi yang berkomitmen memberikan layanan terbaik untuk kebutuhan rental mobil, motor, serta paket wisata yang dirancang khusus bagi Anda.', 'Pralim Trans menawarkan armada mobil dan motor yang lengkap, mulai dari city car hingga kendaraan keluarga, serta motor untuk perjalanan singkat maupun panjang. Kami juga menyediakan paket wisata menarik ke destinasi populer seperti Candi Borobudur, Pantai Parangtritis, dan wisata kuliner Yogyakarta. Dengan driver profesional yang berpengalaman dan berkomitmen memberikan pelayanan terbaik, perjalanan Anda dijamin nyaman dan aman. Selain itu, kami menawarkan harga yang kompetitif tanpa mengurangi kualitas layanan, serta proses pemesanan yang cepat dengan dukungan pelanggan yang selalu siap membantu kapan saja.', 'Jl. Pramuka No.5B, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161', 'logo.png', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` bigint UNSIGNED NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_wa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_ig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_tt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_x` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `wa`, `url_wa`, `fb`, `url_fb`, `ig`, `url_ig`, `tt`, `url_tt`, `x`, `url_x`, `created_at`, `updated_at`) VALUES
(1, '+6287871290696', 'https://api.whatsapp.com/send?phone=', 'ilhan manzis', 'https://google.com', 'janggarfals', 'https://google.com', 'janggarfals', 'https://google.com', 'janggarfals', 'https://google.com', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', '2025-01-29 00:39:18', '$2y$12$LtJsmicgVW8ZOYa07NjMt.g7uHV645z.cBUntawBCaVW2QCzbKUIK', 'VCpIWeqiIh', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int UNSIGNED NOT NULL,
  `id_mobil` int UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `include` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_mobil`, `nama`, `harga`, `wilayah`, `include`, `daftar_wisata`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Paket A', '300000', 'Yogyakarta', 'Mobil + Driver, Makan 3x, Tiket Wisata, Makan Siang, BBM durasi 12 jam ', 'Candi Borobudur, Pantai Indrayanti', '1.jpg', '2025-01-29 00:39:18', '2025-01-29 00:39:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `wisata_id_mobil_foreign` (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_id_mobil_foreign` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
