-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.2.3-MariaDB-log - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para fiscalia
CREATE DATABASE IF NOT EXISTS `fiscalia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fiscalia`;

-- Volcando estructura para tabla fiscalia.casetype
CREATE TABLE IF NOT EXISTS `casetype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.casetype: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `casetype` DISABLE KEYS */;
INSERT INTO `casetype` (`id`, `case_type`, `created_at`, `updated_at`) VALUES
	(1, 'Robo', '2017-07-20 15:00:11', '2017-07-20 15:01:47'),
	(2, 'Homicidio', '2017-07-20 15:01:44', '2017-07-20 15:01:47'),
	(3, 'Extorción', '2017-07-20 15:01:50', '2017-07-20 15:01:51');
/*!40000 ALTER TABLE `casetype` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.court
CREATE TABLE IF NOT EXISTS `court` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `court_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.court: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `court` DISABLE KEYS */;
INSERT INTO `court` (`id`, `court_name`, `created_at`, `updated_at`) VALUES
	(1, 'JUZGADO 1° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 05:27:09', '2017-07-17 05:27:09'),
	(2, 'JUZGADO 2° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 05:27:46', '2017-07-17 05:27:46'),
	(3, 'JUZGADO 3° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 05:27:56', '2017-07-17 05:27:56'),
	(4, 'JUZGADO 4° DE CIRCUITO CIVIL, PANAMÁ', '2017-07-17 05:28:07', '2017-07-17 05:28:07'),
	(5, 'JUZGADO 1° DE CIRCUITO CIVIL, SAN MIGUELITO', '2017-07-17 05:28:55', '2017-07-17 05:28:55'),
	(6, 'JUZGADO 2° DE CIRCUITO CIVIL, SAN MIGUELITO', '2017-07-17 05:29:10', '2017-07-17 05:29:10'),
	(7, 'JUZGADO 1° DE CIRCUITO CIVIL, LA CHORRERA', '2017-07-17 05:30:39', '2017-07-17 05:30:39'),
	(8, 'JUZGADO 2° DE CIRCUITO CIVIL, LA CHORRERA', '2017-07-17 05:30:55', '2017-07-17 05:30:55'),
	(9, 'JUZGADO 1° DE CIRCUITO PENAL, LA CHORRERA', '2017-07-17 05:31:05', '2017-07-17 05:31:05');
/*!40000 ALTER TABLE `court` ENABLE KEYS */;

-- Volcando estructura para vista fiscalia.estadistica
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `estadistica` (
	`court_name` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`status` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`cantidad` BIGINT(21) NOT NULL,
	`case_type` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci'
) ENGINE=MyISAM;

-- Volcando estructura para tabla fiscalia.filerecords
CREATE TABLE IF NOT EXISTS `filerecords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `court_id` int(10) unsigned NOT NULL,
  `casetype_id` int(10) unsigned NOT NULL,
  `provinciafk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distritofk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corregimientofk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `involucrados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `filerecords_court_id_foreign` (`court_id`),
  KEY `filerecords_casetype_id_foreign` (`casetype_id`),
  CONSTRAINT `filerecords_casetype_id_foreign` FOREIGN KEY (`casetype_id`) REFERENCES `casetype` (`id`),
  CONSTRAINT `filerecords_court_id_foreign` FOREIGN KEY (`court_id`) REFERENCES `court` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.filerecords: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `filerecords` DISABLE KEYS */;
INSERT INTO `filerecords` (`id`, `court_id`, `casetype_id`, `provinciafk`, `distritofk`, `corregimientofk`, `titulo`, `descripcion`, `involucrados`, `fecha_inicio`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Panama', 'Panama', 'San Francisco', 'Robo de Casa', 'Se robaron las televisiones y la lavadora', 'Juancito "alimaña" Perez', '2017-07-22', 'Pendiente', '2017-07-22 21:01:57', '2017-07-22 21:01:57'),
	(2, 1, 1, 'Panama', 'Panama', 'San Francisco', 'Estafa de compañia', 'Estafo la compañia por 3 años', 'Mauricio Gonzalez', '2017-07-22', 'Pendiente', '2017-07-24 02:01:57', '2017-07-24 02:01:57'),
	(3, 2, 2, 'Panama Oeste', 'La Chorrera', 'Guadalupe', 'Estafa de compañia', 'Estafo la compañia por 3 años', 'Mauricio Gonzalez', '2017-07-24', 'Pendiente', '2017-07-24 02:01:57', '2017-07-24 02:01:57'),
	(4, 2, 2, 'Panama Oeste', 'Arraijan', 'Burunga', 'Homicidio', 'Homicidio premeditado a su vecino', 'Pericarpio Serberio', '2017-07-24', 'Abierto', '2017-07-24 05:01:57', '2017-07-24 05:01:57'),
	(5, 3, 3, 'Panama Oeste', 'Arraijan', 'Burunga', 'Robo', 'Robo de wallet', 'Juan Perez', '2017-07-24', 'Abierto', '2017-07-24 05:20:57', '2017-07-24 05:20:57'),
	(6, 2, 2, 'Panama Oeste', 'Arraijan', 'Burunga', 'Robo', 'Robo de dinero', 'Jose Moreno', '2017-07-24', 'Pendiente', '2017-07-24 06:01:57', '2017-07-24 06:01:57');
/*!40000 ALTER TABLE `filerecords` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.location
CREATE TABLE IF NOT EXISTS `location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `provincia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distrito` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corregimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.location: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` (`id`, `provincia`, `distrito`, `corregimiento`, `created_at`, `updated_at`) VALUES
	(1, 'Los Santos', 'Las Tablas', 'La Palma', '2017-07-17 03:48:59', '2017-07-17 03:48:59'),
	(2, 'Panama', 'Panama', 'Betania', '2017-07-17 04:30:42', '2017-07-17 04:30:42'),
	(3, 'Panama', 'Panama', 'San Francisco', '2017-07-17 04:41:37', '2017-07-17 04:41:37'),
	(4, 'Panama', 'San Miguelito', 'Rufina Alfaro', '2017-07-17 04:42:27', '2017-07-17 04:42:27'),
	(5, 'Panama', 'San Miguelito', 'Arnulfo Arias', '2017-07-17 04:42:56', '2017-07-17 04:42:56'),
	(6, 'Panama Oeste', 'Arraijan', 'Burunga', '2017-07-17 04:44:22', '2017-07-17 04:44:22'),
	(7, 'Panama Oeste', 'La Chorrera', 'Guadalupe', '2017-07-17 04:45:11', '2017-07-17 04:45:11'),
	(8, 'Chiriqui', 'David', 'Las Lomas', '2017-07-17 04:46:03', '2017-07-17 04:46:03'),
	(9, 'Chiriqui', 'Bugaba', 'La Concepción', '2017-07-17 04:46:23', '2017-07-17 04:46:23');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.migrations: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
	(12, '2017_07_23_125720_create_role_user_filerecord_table', 1),
	(13, '2017_07_23_014235_create_filerecords_table', 2),
	(14, '2017_07_23_014453_create_estadistica_view', 2),
	(15, '2017_07_25_003110_create_reporteprovincia_view', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.permissions: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `model`, `created_at`, `updated_at`) VALUES
	(5, 'Control Total', 'ver.todo', 'Control Total', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(6, 'Registrar Expendientes', 'registrar.expendientes', 'Registrar Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(7, 'Ver Expendientes', 'ver.expendientes', 'Ver Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(8, 'Editar Expendientes', 'editar.expendientes', 'Editar Expendientes', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(9, 'Asignar Casos', 'asignar.casos', 'Asignar Casos', 'Permission', '2017-07-20 08:43:00', '2017-07-20 08:43:00');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.permission_role: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.permission_user
CREATE TABLE IF NOT EXISTS `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.permission_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.pivot
CREATE TABLE IF NOT EXISTS `pivot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `filerecord_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pivot_role_id_index` (`role_id`),
  KEY `pivot_user_id_index` (`user_id`),
  KEY `pivot_filerecord_id_index` (`filerecord_id`),
  CONSTRAINT `pivot_filerecord_id_foreign` FOREIGN KEY (`filerecord_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pivot_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pivot_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.pivot: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pivot` DISABLE KEYS */;
/*!40000 ALTER TABLE `pivot` ENABLE KEYS */;

-- Volcando estructura para vista fiscalia.reporteprovincia
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `reporteprovincia` (
	`provinciafk` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`distritofk` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`corregimientofk` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`status` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`cantidad` BIGINT(21) NOT NULL,
	`case_type` VARCHAR(191) NOT NULL COLLATE 'utf8mb4_unicode_ci'
) ENGINE=MyISAM;

-- Volcando estructura para tabla fiscalia.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.roles: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
	(6, 'Admin', 'admin', 'Perfil administrativo con control total', 5, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(7, 'Juez', 'juez', 'Acceso a sus casos pendientes de resolucion, biblioteca de consulta de casos, opcion de seguimiento de caso, cierre de caso o cambio de estado', 4, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(8, 'Abogado', 'abogado', 'Acceso a sus casos asignaddos, biblioteca de consulta de casos, opcion de seguimiento de caso', 3, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(9, 'Usuario', 'usuario', 'Se encarga de regisrar los expendientes, asignar los casos a los abogados o juez', 1, '2017-07-20 08:43:00', '2017-07-20 08:43:00'),
	(10, 'Pendiente', 'pendiente', 'Perfil pendiente o sin verificar', 0, '2017-07-20 08:43:00', '2017-07-20 08:43:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.role_user: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 7, 5, '2017-07-20 08:45:26', '2017-07-20 08:45:26'),
	(4, 8, 6, '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
	(5, 6, 1, '2017-07-21 02:09:46', '2017-07-21 02:09:46'),
	(6, 6, 4, '2017-07-21 02:09:46', '2017-07-21 02:09:46'),
	(7, 9, 7, '2017-07-21 02:09:46', '2017-07-21 02:09:46'),
	(8, 10, 8, '2017-07-22 22:58:53', '2017-07-22 22:58:53'),
	(9, 7, 9, '2017-07-23 14:06:32', '2017-07-23 14:06:32');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Volcando estructura para tabla fiscalia.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `filerecords_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla fiscalia.users: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', '$2y$10$9qeBFuiZDHQezQi6gLsCseLHKmLuQwBQ79Y3G0tufL91JrnY8qeqC', 6, 'ytHDQ52s5p9wVeSzVuslZGx6aCFMCsOVm867emN5kIr5Euh7kf07HzIvL5F7', '2017-07-20 05:53:59', '2017-07-20 05:53:59'),
	(4, 'dabrego', 'dabrego@gmail.com', '$2y$10$NG5sfpWv2SVSO8sDzYf.recsLkVwuaM.dTCYHVrvsCX1A1.IMAmg.', 6, 'i6JD8kG2BBqAGVOsYlKF1qBWGxSUFZ1L5O3AXfHXYug2UDGP4USM4mG3T1gY', '2017-07-20 05:56:06', '2017-07-20 05:56:06'),
	(5, 'juez', 'juez@gmail.com', '$2y$10$ruXxfNvXCLYzGWTL5b0X1OClg0D7ucfb7NqlEISkWbk8GWcu/KqqO', 7, 'dJzYdwefM81O2PSYRkHk7rGxYk9gwYNrEePhBqgoYFUDo1tSPZ1TfdcC0ESb', '2017-07-20 08:45:26', '2017-07-20 08:45:26'),
	(6, 'abogado', 'abogado@gmail.com', '$2y$10$RI1dMOZtQLI84Pv92SFMcuEPV6bzqfJ57jCOogOrc7IGTtwopR3kG', 8, 'jkyFPwD0U0rTmzr4YR8pRdT0rnoTVEvq0Lu70ayeRsmUNmyz0YCsWeBVg1oP', '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
	(7, 'user', 'user@gmail.com', '$2y$10$MR7LMOlv9R.7tqMncTLPQuTFAHcdh1AQn9l7zBq.Tgt6V.KwZw5/.', 9, 'P0GcjIKNikGfTcOvrsoIHd3fdCbrpEeT9DASc679KtoELhOHX2TmPIadeVYb', '2017-07-20 08:54:51', '2017-07-20 08:54:51'),
	(8, 'Venito Varsallo', 'userme@gmail.com', '$2y$10$hp/EQwAkazxNYmJumm1JBOJp2BI9xrr04yUcEK/v7fGHK49kENFNm', 10, 'rAUW1so9rc6IM3nhxdelGZ7CVS4KUFaMCvzwlQuWWDJFyd89eqJqf7JNmZw2', '2017-07-22 22:58:53', '2017-07-22 22:58:53'),
	(9, 'Gutierrez Alfredo', 'gutierrez@juez.com', '$2y$10$MaSHnAYnLlx4K6tDk2Gf3.4eNzHMrAI8g/IXIpnI5EUm7tWv7S5IO', 7, NULL, '2017-07-23 14:06:32', '2017-07-23 14:06:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para vista fiscalia.estadistica
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `estadistica`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `estadistica` AS (
                           SELECT C.court_name, A.status, count(A.status) as cantidad, B.case_type
                            from filerecords A
                            inner join casetype B
                            on A.casetype_id = B.id
                            inner join court C
                            on A.court_id = C.id
                            group by  C.court_name, A.status, B.case_type
                            order by  C.court_name, A.status, B.case_type
                        ) ;

-- Volcando estructura para vista fiscalia.reporteprovincia
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `reporteprovincia`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `reporteprovincia` AS (
        SELECT A.provinciafk, A.distritofk ,A.corregimientofk, A.status, count(A.status) as cantidad, B.case_type
                            from filerecords A
                            inner join casetype B
                            on A.casetype_id = B.id
                            group by  A.provinciafk, A.distritofk ,A.corregimientofk,A.status, B.case_type
                            order by  A.provinciafk, A.distritofk ,A.corregimientofk,A.status, B.case_type
                        ) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
