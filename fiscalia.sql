-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 05:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiscalia`
--

-- --------------------------------------------------------

--
-- Table structure for table `casetype`
--

CREATE TABLE `casetype` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(10) UNSIGNED NOT NULL,
  `court_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filerecords`
--

CREATE TABLE `filerecords` (
  `id` int(10) UNSIGNED NOT NULL,
  `court_id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `casetype_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `involucrados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) UNSIGNED NOT NULL,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corregimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2016_01_15_105324_create_roles_table', 1),
(12, '2016_01_15_114412_create_role_user_table', 1),
(13, '2016_01_26_115212_create_permissions_table', 1),
(14, '2016_01_26_115523_create_permission_role_table', 1),
(15, '2016_02_09_132439_create_permission_user_table', 1),
(16, '2017_07_16_190455_create_location_table', 1),
(17, '2017_07_16_190812_create_court_table', 1),
(18, '2017_07_16_191557_create_casetype_table', 1),
(19, '2017_07_16_194715_create_filerecords_table', 1);

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
(5, 'Control Total', 'ver.todo', 'Control Total', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(6, 'Registrar Expendientes', 'registrar.expendientes', 'Registrar Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(7, 'Ver Expendientes', 'ver.expendientes', 'Ver Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(8, 'Editar Expendientes', 'editar.expendientes', 'Editar Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(9, 'Asignar Casos', 'asignar.casos', 'Asignar Casos', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 5, 6, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(6, 6, 6, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(7, 7, 6, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(8, 8, 6, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(9, 9, 6, '2017-07-20 08:43:00', '2017-07-20 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 7, 6, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(2, 5, 7, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(3, 6, 7, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(4, 7, 7, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(5, 8, 7, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(6, 9, 7, '2017-07-20 08:54:51', '2017-07-20 08:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'admin', 'Perfil administrativo con control total', 5, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(7, 'Juez', 'juez', 'Acceso a sus casos pendientes de resolucion, biblioteca de consulta de casos, opcion de seguimiento de caso, cierre de caso o cambio de estado', 4, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(8, 'Abogado', 'abogado', 'Acceso a sus casos asignaddos, biblioteca de consulta de casos, opcion de seguimiento de caso', 3, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(9, 'Usuario', 'usuario', 'Se encarga de regisrar los expendientes, asignar los casos a los abogados o juez', 1, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
(10, 'Pendiente', 'pendiente', 'Perfil pendiente o sin verificar', 0, '2017-07-20 08:43:00', '2017-07-20 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 7, 5, '2017-07-20 08:45:26', '2017-07-20 08:45:26'),
(4, 8, 6, '2017-07-20 08:54:51', '2017-07-20 08:54:51');

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
(1, 'Admin', 'admin@admin.com', '$2y$10$9qeBFuiZDHQezQi6gLsCseLHKmLuQwBQ79Y3G0tufL91JrnY8qeqC', NULL, '2017-07-20 05:53:59', '2017-07-20 05:53:59'),
(4, 'dabrego', 'dabrego@gmail.com', '$2y$10$NG5sfpWv2SVSO8sDzYf.recsLkVwuaM.dTCYHVrvsCX1A1.IMAmg.', '5YltNHJwd0RB0ARCzoiYQItnDjIcRHedvHv2SGGbzxyEfLdhr3XeFZmfod3l', '2017-07-20 05:56:06', '2017-07-20 05:56:06'),
(5, 'juez', 'juez@gmail.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', NULL, '2017-07-20 08:45:26', '2017-07-20 08:45:26'),
(6, 'abogado', 'abogado@gmail.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', NULL, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
(7, 'user', 'user@gmail.com', '$2y$10$MR7LMOlv9R.7tqMncTLPQuTFAHcdh1AQn9l7zBq.Tgt6V.KwZw5/.', NULL, '2017-07-20 08:54:51', '2017-07-20 08:54:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casetype`
--
ALTER TABLE `casetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filerecords`
--
ALTER TABLE `filerecords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filerecords_court_id_foreign` (`court_id`),
  ADD KEY `filerecords_location_id_foreign` (`location_id`),
  ADD KEY `filerecords_casetype_id_foreign` (`casetype_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `casetype`
--
ALTER TABLE `casetype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `filerecords`
--
ALTER TABLE `filerecords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `filerecords`
--
ALTER TABLE `filerecords`
  ADD CONSTRAINT `filerecords_casetype_id_foreign` FOREIGN KEY (`casetype_id`) REFERENCES `casetype` (`id`),
  ADD CONSTRAINT `filerecords_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `court` (`id`),
  ADD CONSTRAINT `filerecords_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
