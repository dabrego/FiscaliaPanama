-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2017 at 01:21 AM
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
-- Table structure for table `bk_users`
--

CREATE TABLE `bk_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bk_users`
--

INSERT INTO `bk_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$9qeBFuiZDHQezQi6gLsCseLHKmLuQwBQ79Y3G0tufL91JrnY8qeqC', 'GruvJ95Sd5I4YrUcXduV6qu7WVgbdgNMxmHgBPBQJ4zZilyf5gurMAaIYeAO', '2017-07-20 10:53:59', '2017-07-20 10:53:59'),
(4, 'dabrego', 'dabrego@gmail.com', '$2y$10$NG5sfpWv2SVSO8sDzYf.recsLkVwuaM.dTCYHVrvsCX1A1.IMAmg.', 'i6JD8kG2BBqAGVOsYlKF1qBWGxSUFZ1L5O3AXfHXYug2UDGP4USM4mG3T1gY', '2017-07-20 10:56:06', '2017-07-20 10:56:06'),
(5, 'juez', 'juez@gmail.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', 'YgqstfIYQsgiaBy2IOoSqwDgTDa8YJwxNW4WZVs0B80do8wgxqcVk2jVfLdn', '2017-07-20 13:45:26', '2017-07-20 13:45:26'),
(6, 'Eudafio Fuentes', 'abogado@gmail.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', 'MekuU1OZoeKLhlQ0h4jLKBjQG7j5UZMEcUDbrfECDDzmuAm8WkpZajIkMvzL', '2017-07-20 13:54:51', '2017-07-20 13:54:51'),
(7, 'user', 'user@gmail.com', '$2y$10$MR7LMOlv9R.7tqMncTLPQuTFAHcdh1AQn9l7zBq.Tgt6V.KwZw5/.', 'tfM5LiO3911CiedmmC8SmjVS8LhIU7ot2XpcubIHXMKLIt0lSo6WOYCypVja', '2017-07-20 13:54:51', '2017-07-20 13:54:51'),
(8, 'Venito Varsallo', 'userme@gmail.com', '$2y$10$hp/EQwAkazxNYmJumm1JBOJp2BI9xrr04yUcEK/v7fGHK49kENFNm', 'rAUW1so9rc6IM3nhxdelGZ7CVS4KUFaMCvzwlQuWWDJFyd89eqJqf7JNmZw2', '2017-07-23 03:58:53', '2017-07-23 03:58:53'),
(9, 'Gutierrez Alfredo', 'gutierrez@juez.com', '$2y$10$MaSHnAYnLlx4K6tDk2Gf3.4eNzHMrAI8g/IXIpnI5EUm7tWv7S5IO', NULL, '2017-07-23 19:06:32', '2017-07-23 19:06:32'),
(12, 'Ricardo Haynes', 'rhayness@juez.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', 'dJzYdwefM81O2PSYRkHk7rGxYk9gwYNrEePhBqgoYFUDo1tSPZ1TfdcC0ESb', '2017-07-20 18:45:26', '2017-07-20 18:45:26'),
(13, 'Eufrates Donicio', 'eudoni@abogado.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', 'Z1yNqUgOjghhwQrVey7kfn5ybvAUy0DsVvRrl6q14iqSXQkjlA9A4xMDSQaY', '2017-07-20 18:54:51', '2017-07-20 18:54:51');

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

--
-- Dumping data for table `casetype`
--

INSERT INTO `casetype` (`id`, `case_type`, `created_at`, `updated_at`) VALUES
(1, 'Robo', '2017-07-20 20:00:11', '2017-07-20 20:01:47'),
(2, 'Homicidio', '2017-07-20 20:01:44', '2017-07-20 20:01:47'),
(3, 'Extorción', '2017-07-20 20:01:50', '2017-07-20 20:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios_registros`
--

CREATE TABLE `comentarios_registros` (
  `id` int(10) UNSIGNED NOT NULL,
  `comentarios` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filerecord_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentarios_registros`
--

INSERT INTO `comentarios_registros` (`id`, `comentarios`, `filerecord_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Un comentario cualquiera', 4, 6, '2017-07-29 04:20:38', '2017-07-29 04:20:38');

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

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `court_name`, `created_at`, `updated_at`) VALUES
(1, 'JUZGADO 1° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 10:27:09', '2017-07-17 10:27:09'),
(2, 'JUZGADO 2° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 10:27:46', '2017-07-17 10:27:46'),
(3, 'JUZGADO 3° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 10:27:56', '2017-07-17 10:27:56'),
(4, 'JUZGADO 4° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 10:28:07', '2017-07-17 10:28:07'),
(5, 'JUZGADO 1° DE CIRCUITO CIVIL, SAN MIGUELITO', '2017-07-17 10:28:55', '2017-07-17 10:28:55'),
(6, 'JUZGADO 2° DE CIRCUITO CIVIL, SAN MIGUELITO', '2017-07-17 10:29:10', '2017-07-17 10:29:10'),
(7, 'JUZGADO 1° DE CIRCUITO CIVIL, LA CHORRERA', '2017-07-17 10:30:39', '2017-07-17 10:30:39'),
(8, 'JUZGADO 2° DE CIRCUITO CIVIL, LA CHORRERA', '2017-07-17 10:30:55', '2017-07-17 10:30:55'),
(9, 'JUZGADO 1° DE CIRCUITO PENAL, LA CHORRERA', '2017-07-17 10:31:05', '2017-07-17 10:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `filerecords`
--

CREATE TABLE `filerecords` (
  `id` int(10) UNSIGNED NOT NULL,
  `court_id` int(10) UNSIGNED NOT NULL,
  `casetype_id` int(10) UNSIGNED NOT NULL,
  `provinciafk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distritofk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corregimientofk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `involucrados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filerecords`
--

INSERT INTO `filerecords` (`id`, `court_id`, `casetype_id`, `provinciafk`, `distritofk`, `corregimientofk`, `titulo`, `descripcion`, `involucrados`, `fecha_inicio`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Panama', 'Panama', 'Las Lomas', 'Robo', 'Robo a mano armada por Luis Muñoz.', 'Tiendita de Chino', '2017-07-20', 'Abierto', '2017-07-21 06:45:18', '2017-07-21 06:45:18'),
(3, 2, 2, '2', '3', '2', 'asdfsadf', 'asdfsadf', 'asdfsaf', '2017-01-01', 'Abierto', '2017-07-25 06:18:16', '2017-07-25 06:18:16'),
(4, 3, 2, '3', '2', '3', 'fssdgdsg', 'sdgdsgs', 'sdgsdfg', '2017-01-01', 'Pendiente', '2017-07-25 06:36:59', '2017-07-25 06:36:59'),
(5, 1, 1, '3', '3', '3', 'sasdasfsa', 'asfsadf', 'asfsaf', '2017-01-01', 'Abierto', '2017-07-25 06:38:59', '2017-07-25 06:38:59'),
(6, 3, 2, 'Panama', 'Panama', 'San Francisco', 'asdfasfd', 'asfsadf', 'asfsf', '2017-01-01', 'Pendiente', '2017-07-25 06:52:04', '2017-07-25 06:52:04'),
(7, 3, 1, 'Panama', 'Panama', 'Rufina Alfaro', 'Robo de Casa', 'Robo de Television', 'Pedro ''lagartija'' Moreno', '2017-07-24', 'Pendiente', '2017-07-25 06:59:04', '2017-07-25 06:59:04');

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

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `provincia`, `distrito`, `corregimiento`, `created_at`, `updated_at`) VALUES
(1, 'Los Santos', 'Las Tablas', 'La Palma', '2017-07-17 08:48:59', '2017-07-17 08:48:59'),
(2, 'Panama', 'Panama', 'Betania', '2017-07-17 09:30:42', '2017-07-17 09:30:42'),
(3, 'Panama', 'Panama', 'San Francisco', '2017-07-17 09:41:37', '2017-07-17 09:41:37'),
(4, 'Panama', 'San Miguelito', 'Rufina Alfaro', '2017-07-17 09:42:27', '2017-07-17 09:42:27'),
(5, 'Panama', 'San Miguelito', 'Arnulfo Arias', '2017-07-17 09:42:56', '2017-07-17 09:42:56'),
(6, 'Panama Oeste', 'Arraijan', 'Burunga', '2017-07-17 09:44:22', '2017-07-17 09:44:22'),
(7, 'Panama Oeste', 'La Chorrera', 'Guadalupe', '2017-07-17 09:45:11', '2017-07-17 09:45:11'),
(8, 'Chiriqui', 'David', 'Las Lomas', '2017-07-17 09:46:03', '2017-07-17 09:46:03'),
(9, 'Chiriqui', 'Bugaba', 'La Concepción', '2017-07-17 09:46:23', '2017-07-17 09:46:23');

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
(3, '2016_01_15_105324_create_roles_table', 1),
(4, '2016_01_15_114412_create_role_user_table', 1),
(5, '2016_01_26_115212_create_permissions_table', 1),
(6, '2016_01_26_115523_create_permission_role_table', 1),
(7, '2016_02_09_132439_create_permission_user_table', 1),
(8, '2017_07_16_190455_create_location_table', 1),
(9, '2017_07_16_190812_create_court_table', 1),
(10, '2017_07_16_191557_create_casetype_table', 1),
(11, '2017_07_20_235150_create_filerecords_table', 1),
(12, '2017_07_23_125720_create_role_user_filerecord_table', 1);

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
(5, 'Control Total', 'ver.todo', 'Control Total', 'Permission', '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(6, 'Registrar Expendientes', 'registrar.expendientes', 'Registrar Expendientes', 'Permission', '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(7, 'Ver Expendientes', 'ver.expendientes', 'Ver Expendientes', 'Permission', '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(8, 'Editar Expendientes', 'editar.expendientes', 'Editar Expendientes', 'Permission', '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(9, 'Asignar Casos', 'asignar.casos', 'Asignar Casos', 'Permission', '2017-07-20 13:43:00', '2017-07-20 13:43:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `pivot`
--

CREATE TABLE `pivot` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `filerecord_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot`
--

INSERT INTO `pivot` (`id`, `created_at`, `updated_at`, `role_id`, `user_id`, `filerecord_id`) VALUES
(1, NULL, NULL, 8, 6, 2),
(2, NULL, NULL, 8, 13, 2),
(3, NULL, NULL, 8, 6, 3),
(4, NULL, NULL, 8, 13, 3),
(5, NULL, NULL, 7, 12, 3),
(6, NULL, NULL, 8, 6, 4),
(7, NULL, NULL, 8, 13, 4),
(8, NULL, NULL, 7, 12, 4),
(9, NULL, NULL, 8, 6, 5),
(10, NULL, NULL, 8, 13, 5),
(11, NULL, NULL, 7, 9, 5),
(12, NULL, NULL, 8, 6, 6),
(13, NULL, NULL, 8, 13, 6),
(14, NULL, NULL, 7, 9, 6),
(15, NULL, NULL, 8, 6, 7),
(16, NULL, NULL, 8, 13, 7),
(17, NULL, NULL, 7, 9, 7);

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
(6, 'Admin', 'admin', 'Perfil administrativo con control total', 5, '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(7, 'Juez', 'juez', 'Acceso a sus casos pendientes de resolucion, biblioteca de consulta de casos, opcion de seguimiento de caso, cierre de caso o cambio de estado', 4, '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(8, 'Abogado', 'abogado', 'Acceso a sus casos asignaddos, biblioteca de consulta de casos, opcion de seguimiento de caso', 3, '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(9, 'Usuario', 'usuario', 'Se encarga de regisrar los expendientes, asignar los casos a los abogados o juez', 1, '2017-07-20 13:43:00', '2017-07-20 13:43:00'),
(10, 'Pendiente', 'pendiente', 'Perfil pendiente o sin verificar', 0, '2017-07-20 13:43:00', '2017-07-20 13:43:00');

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
(3, 7, 5, '2017-07-20 13:45:26', '2017-07-20 13:45:26'),
(4, 8, 6, '2017-07-20 13:54:51', '2017-07-20 13:54:51'),
(5, 6, 1, '2017-07-21 07:09:46', '2017-07-21 07:09:46'),
(6, 6, 4, '2017-07-21 07:09:46', '2017-07-21 07:09:46'),
(7, 9, 7, '2017-07-21 07:09:46', '2017-07-21 07:09:46'),
(8, 10, 8, '2017-07-23 03:58:53', '2017-07-23 03:58:53'),
(9, 7, 9, '2017-07-23 19:06:32', '2017-07-23 19:06:32'),
(10, 7, 12, '2017-07-20 18:45:26', '2017-07-20 18:45:26'),
(11, 8, 13, '2017-07-20 18:54:51', '2017-07-20 18:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$9qeBFuiZDHQezQi6gLsCseLHKmLuQwBQ79Y3G0tufL91JrnY8qeqC', 6, 'GruvJ95Sd5I4YrUcXduV6qu7WVgbdgNMxmHgBPBQJ4zZilyf5gurMAaIYeAO', '2017-07-20 15:53:59', '2017-07-20 15:53:59'),
(4, 'dabrego', 'dabrego@gmail.com', '$2y$10$NG5sfpWv2SVSO8sDzYf.recsLkVwuaM.dTCYHVrvsCX1A1.IMAmg.', 6, 'i6JD8kG2BBqAGVOsYlKF1qBWGxSUFZ1L5O3AXfHXYug2UDGP4USM4mG3T1gY', '2017-07-20 15:56:06', '2017-07-20 15:56:06'),
(5, 'juez', 'juez@gmail.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', 7, 'YgqstfIYQsgiaBy2IOoSqwDgTDa8YJwxNW4WZVs0B80do8wgxqcVk2jVfLdn', '2017-07-20 18:45:26', '2017-07-20 18:45:26'),
(6, 'Eudafio Fuentes', 'abogado@gmail.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', 8, 'xZqVFJX3seQycqis0yrPHALprXFRgVra9mbR0tPq2UXBrREn6n1dVPcWJDvm', '2017-07-20 18:54:51', '2017-07-20 18:54:51'),
(7, 'user', 'user@gmail.com', '$2y$10$MR7LMOlv9R.7tqMncTLPQuTFAHcdh1AQn9l7zBq.Tgt6V.KwZw5/.', 9, 'tfM5LiO3911CiedmmC8SmjVS8LhIU7ot2XpcubIHXMKLIt0lSo6WOYCypVja', '2017-07-20 18:54:51', '2017-07-20 18:54:51'),
(8, 'Venito Varsallo', 'userme@gmail.com', '$2y$10$hp/EQwAkazxNYmJumm1JBOJp2BI9xrr04yUcEK/v7fGHK49kENFNm', 9, 'rAUW1so9rc6IM3nhxdelGZ7CVS4KUFaMCvzwlQuWWDJFyd89eqJqf7JNmZw2', '2017-07-23 08:58:53', '2017-07-23 08:58:53'),
(9, 'Gutierrez Alfredo', 'gutierrez@juez.com', '$2y$10$MaSHnAYnLlx4K6tDk2Gf3.4eNzHMrAI8g/IXIpnI5EUm7tWv7S5IO', 7, NULL, '2017-07-24 00:06:32', '2017-07-24 00:06:32'),
(12, 'Ricardo Haynes', 'rhayness@juez.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', 7, 'dJzYdwefM81O2PSYRkHk7rGxYk9gwYNrEePhBqgoYFUDo1tSPZ1TfdcC0ESb', '2017-07-20 23:45:26', '2017-07-20 23:45:26'),
(13, 'Eufrates Donicio', 'eudoni@abogado.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', 8, 'Z1yNqUgOjghhwQrVey7kfn5ybvAUy0DsVvRrl6q14iqSXQkjlA9A4xMDSQaY', '2017-07-20 23:54:51', '2017-07-20 23:54:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bk_users`
--
ALTER TABLE `bk_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `casetype`
--
ALTER TABLE `casetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentarios_registros`
--
ALTER TABLE `comentarios_registros`
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
-- Indexes for table `pivot`
--
ALTER TABLE `pivot`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bk_users`
--
ALTER TABLE `bk_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `casetype`
--
ALTER TABLE `casetype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comentarios_registros`
--
ALTER TABLE `comentarios_registros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `filerecords`
--
ALTER TABLE `filerecords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pivot`
--
ALTER TABLE `pivot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `filerecords`
--
ALTER TABLE `filerecords`
  ADD CONSTRAINT `filerecords_casetype_id_foreign` FOREIGN KEY (`casetype_id`) REFERENCES `casetype` (`id`),
  ADD CONSTRAINT `filerecords_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `court` (`id`);

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
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bk_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bk_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `filerecords_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
