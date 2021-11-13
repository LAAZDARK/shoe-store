-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2021 a las 02:25:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jess Gulgowski', 'adam64@example.net', '$2y$10$CScQxkeha7yTlDks9OxrPOdQvLpKM0xdlRZpW388UM6MBgC.gcp4W', '2021-11-13 06:52:50', '2021-11-13 06:52:50'),
(2, 'Hermina Hansen', 'xkoepp@example.com', '$2y$10$KHu3k5UG2fM982U8MjK/h.8CCnp5PLot4wUbWKP0sxCDTOucG4Lnu', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(3, 'Dr. Kale Schuppe', 'edmond17@example.org', '$2y$10$XopXVwAcdMrovg4ncHS8JObJq0jTf26gbSRCQ3eknsveCPkHcqp9G', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(4, 'Ms. Enola Windler', 'lila.schneider@example.org', '$2y$10$StMYWjVjfIhy/k5JmQybZuqgvFGq3vOStH/gVZP8sDOERZYqVBuuu', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(5, 'Kelli Mann', 'tmurray@example.com', '$2y$10$yklFQDtKOTKoo4BpnsWpUuxA8uPxBSzDcLhGzTljR3AL4qHuBr8mK', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(6, 'Prof. Kelley Stoltenberg MD', 'devon44@example.net', '$2y$10$j2gyRjsN3E/545JQ6/mK2eRC18FPS5XcLVjv/ECIRX78q1fZdkJgm', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(7, 'Jules Reilly', 'christa.marks@example.com', '$2y$10$Rng8OV3Wrh2Db3XtiJ6vP.NcE0e1zk6f6F1bOJaztPy9AiiMA5SnW', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(8, 'Retta Wilderman V', 'jazlyn91@example.com', '$2y$10$hczzYFzbUN9axB8EmeZEZOJL8NouUCwatG57IT.JXhj1vVPUQvgB.', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(9, 'Aylin O\'Keefe', 'beulah.rempel@example.org', '$2y$10$.FVMYljOJWOhSSwP9feMwOJn7YuGPhoQ9k0UXvjKcJiD4y4sZqqD.', '2021-11-13 06:52:51', '2021-11-13 06:52:51'),
(10, 'Lamont Schulist', 'prosacco.herman@example.com', '$2y$10$fjmmKEC6FUdJYFQ7OeksA.fmXoX4E0/rwhlWkotR2.PedUNmFemg2', '2021-11-13 06:52:52', '2021-11-13 06:52:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `billings`
--

CREATE TABLE `billings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_04_15_214259_create_admins_table', 1),
(6, '2021_06_11_011233_create_contacts_table', 1),
(7, '2021_09_26_155556_create_billings_table', 1),
(8, '2021_09_26_155920_create_products_table', 1),
(9, '2021_11_04_022907_create_size_table', 1),
(10, '2021_11_04_023017_create_purchase_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `category`, `brand`, `model`, `image`, `status`, `type`, `admin_id`, `created_at`, `updated_at`) VALUES
(21, 'Bota Larga De Tacón Flexi para Mujer Estilo 109211 Tan', 'Te presentamos nuestro estilo 109211, una bota larga de tacón elaborada en piel color tan que cuenta con el sello de comodidad y estilo de zapatos Flexi. Este producto forma parte de nuestra línea de dama semivestir con una propuesta de diseños en tendencia que no te pueden faltar esta temporada. Ofrece gran estilo por sus diseños y comodidad por su tacón robusto. Este calzado cuenta con una suela de tr, una plantilla de cerdo y forro textil. Además viene con un tacón de 60 mm para tu mayor comodidad.\r\n\r\nCómo limpiar\r\n\r\nRemover el polvo con un paño seco. Si hubiera manchas humedecer el trapo ligeramente sólo con agua, a continuación aplicar Crema Líquida Flexi o Crema Sólida Auto brillante Flexi del color de la piel y en su defecto, crema color neutro.', 1439.20, 'Dama', 'Flexi', '109211', 'assets/img/product/1.jpg', 1, 'Bota', NULL, '2021-11-13 06:53:37', '2021-11-13 06:53:37'),
(22, 'Bota Estilo Combate Flexi para Mujer con Cierre Interno Estilo 109609 Oxford', 'Te presentamos nuestro estilo 109609, una bota estilo combate elaborada en charol color oxford que cuenta con el sello de comodidad y estilo de zapatos Flexi. Este producto forma parte de nuestra línea de dama casual que se convertirá en el nuevo básico de la temporada. Inspirada en la tendencia de las botas de combate, cuenta con diseños actuales que te darán estilo a cada paso. Este calzado cuenta con una suela de tr, una plantilla de cerdo y forro textil. Además viene con un tacón de 19 mm para tu mayor comodidad.\r\n\r\nCómo limpiar\r\n\r\nRemover el polvo con un paño seco. Si hubiera manchas humedecer el trapo ligeramente sólo con agua y dejar secar, no aplicar ningún producto.', 1439.20, 'Caballero', 'Flexi', '109609', 'assets/img/product/2.jpg', 1, 'Bota', NULL, '2021-11-13 07:09:30', '2021-11-13 07:09:30'),
(23, 'Zapato Flexi Country Para Outdoor Flexi Country Con Sistema De Mejor Agarre Para Hombre - Estilo 401001 Negro', 'Zapato Flexi Country de estilo outdoor de piel waxi negra de maravilloso tacto en combinación con textil a tono en tobillo y lengüeta. Perfecto ajuste mediante agujetas con ganchos de elástico y metálicos. Plantilla de suave piel natural de cerdo. Suela muy original tricolor en tonos gris y negro con marca Flexi Country en lateral. Suela dentada de Mejor Agarre.\r\n\r\nCómo limpiar\r\n\r\nPara la parte de piel: Remover el polvo con una Toallita Húmeda Flexi, a continuación aplicar Grasa de caballo Flexi en presentación sólida o la Esponja de Grasa de caballo. Es importante aplicar poco producto para no generar capa de exceso de material. Para la parte textil (Bullón del tobillo y lengüeta): Limpiar con una Toallita Húmeda Flexi y aplicar el Limpiador Textil.', 1039.20, 'Caballero', 'Flexi', '1390017569', 'assets/img/product/3.jpg', 1, 'Zapato', NULL, '2021-11-13 07:12:20', '2021-11-13 07:12:20'),
(24, 'Sneaker Urbano Clásico Flexi para Hombre Estilo 407602 Blanco', 'Disfruta de nuestro estilo 407602, un sneaker urbano clásico elaborado en piel color blanco que cuenta con el sello de comodidad y estilo de zapatos Flexi. Este producto forma pare de nuestra nueva línea Korpo, pensada en un mercado jóven que busca crear el balance perfecto entre un calzado duradero con un diseño clásico pero novedoso. Se busca sorprender al usuario, con las diversas propuestas de cortes en trazos simples. Ideal para una salida de fin de semana, un paseo tranquilo o para estar cómodo en casa. Este calzado cuenta con una suela de flowtec, una plantilla de textil y forro carnaza con folia.\r\n\r\nCómo limpiar\r\n\r\nRemover el polvo con un paño seco. Si hubiera manchas humedecer el trapo ligeramente sólo con agua, a continuación aplicar Crema Líquida Flexi o Crema Sólida Auto brillante Flexi del color de la piel y en su defecto, crema color neutro.', 799.20, 'Caballero', 'Flexi', '1390019463', 'assets/img/product/4.jpg', 1, 'Tenis', NULL, '2021-11-13 07:15:16', '2021-11-13 07:15:16'),
(25, 'Sneaker Urbano Flexi Con Suela Creeper Para Mujer - Estilo 101001 Azul', 'Sneaker casual de sintético satinado color azul con blanco con efecto seda. Ajuste con agujetas con brillo. Plantilla Recovery Form forrada en piel natural de cerdo. Suela alta bicolor con patín azul.\r\n\r\nCómo limpiar\r\n\r\nLimpiar con un lienzo húmedo y dejar secar.', 764.15, 'Dama', 'Flexi', '1390017720', 'assets/img/product/5.jpg', 1, 'Tenis', NULL, '2021-11-13 07:17:43', '2021-11-13 07:17:43'),
(26, 'Zapato Casual Escolar Flexi De Punta Cuadrada Para Niño - Estilo 93520 Negro', 'Zapato escolar de piel lisa negra de punta cuadrada y amarre mediante agujetas. Detalle textil en bullón del tobillo. Adorno de pespuntes decorativos. Forro y plantilla de suave piel natural de cerdo. Suela negra. Un zapato escolar clásico que no pasa de moda.\r\n\r\nCómo limpiar\r\n\r\nPara la parte de piel: Remover el polvo con un paño seco. Si hubiera manchas humedecer el trapo ligeramente sólo con agua, a continuación aplicar Crema Líquida Flexi o Crema Sólida Auto brillante Flexi del color de la piel y en su defecto, crema color neutro. Para la parte textil (Bullón del tobillo): Limpiar con una Toallita Húmeda Flexi y aplicar el Limpiador Textil.', 559.20, 'Niño', 'Flexi', '1390017059', 'assets/img/product/6.jpg', 1, 'Zapato', NULL, '2021-11-13 07:19:14', '2021-11-13 07:19:14'),
(27, 'Flat Escolar Flexi Con Pulsera Con Velcro Para Niña - Estilo 35902 Negro', 'Maryjane de piso en piel de vacuno negra lisa. Pespuntes decorativos visibles a tono con el color del zapato. Ancho Ajustable mediante velcro. Forro y Media Plantilla Recovery Form forrada en piel natural de cerdo. Suela negra.\r\n\r\nCómo limpiar\r\n\r\nRemover el polvo con un paño seco. Si hubiera manchas humedecer el trapo ligeramente sólo con agua, a continuación aplicar Crema Líquida Flexi o Crema Sólida Auto brillante Flexi del color de la piel y en su defecto, crema color neutro.', 479.20, 'Niña', 'Flexi', '1390016067', 'assets/img/product/7.jpg', 1, 'Zapato', NULL, '2021-11-13 07:21:02', '2021-11-13 07:21:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `billing_id` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `size`
--

CREATE TABLE `size` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `rfc`, `address`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ernie Kerluke V', 'rau.adah@example.com', '1-941-224-7762', 'MaddW659V1', '6317 Winifred Port Apt. 604\nBereniceberg, WY 48048', 'Otro', '2021-11-13 06:52:55', '$2y$10$RCnQZbU52nRZfikEtyVhvuV4ELjRrol4dRGV3xAvSwnqs5qlXX6XG', 'gRGBJ4AEyK', '2021-11-13 06:52:56', '2021-11-13 06:52:56'),
(2, 'Merle Schamberger PhD', 'marc.jast@example.com', '1-636-986-5709', 'JjfbubYnuv', '5994 Miracle Well Suite 002\nAliport, OH 94427', 'Mujer', '2021-11-13 06:52:55', '$2y$10$/j50Da6n6nMcJMzItT12buy0tTFModUIQudU/YG42Ehlj4fPQThEG', 'UiAQtjd1Me', '2021-11-13 06:52:56', '2021-11-13 06:52:56'),
(3, 'Kevon Mertz', 'sschinner@example.org', '(940) 769-4753', '06dqfsMTkR', '1693 Jedediah Street Suite 366\nAdelbertbury, HI 87393-3837', 'Otro', '2021-11-13 06:52:55', '$2y$10$OEFklqw9lYRrr3BjmW8pFetckyxRPNiFHz82LSrI.HOagUzGt2J8G', 'DDh303KStB', '2021-11-13 06:52:56', '2021-11-13 06:52:56'),
(4, 'Prof. Adolf Keebler DVM', 'saige27@example.net', '1-220-973-1994', 'CHvkjlROad', '7961 Glover Mews\nPort Tania, WA 86142', 'Otro', '2021-11-13 06:52:55', '$2y$10$LJTbkaxEgf5SbbUAhi249e5Dh38sdBcWIrthPK0iqlL.Gf7ES3daK', 'QlAVHH4FN7', '2021-11-13 06:52:56', '2021-11-13 06:52:56'),
(5, 'Elinore Jast', 'eleonore07@example.org', '(785) 913-0562', 'jTs0ViAw4t', '40858 Tatyana Key\nPort Janice, MT 99572', 'Hombre', '2021-11-13 06:52:55', '$2y$10$9TpybeqAygCRYJtU6boT1u88UqDRlWNlx41uZMsHCIkRz6FDyrHE6', '6QMpDwiCFp', '2021-11-13 06:52:56', '2021-11-13 06:52:56'),
(6, 'Noe Collins', 'demario.wiegand@example.com', '225-750-5509', 'NsxdymrngW', '108 Philip Vista Suite 979\nMurielberg, WI 29886', 'Mujer', '2021-11-13 06:52:55', '$2y$10$YRJTww/NgpwwwV0Us.vg0OnpntfvmTqbecaoCy.CQgQejFBGUXlKq', 'slM6xxs55W', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(7, 'Zoe Kunze', 'valentin.marquardt@example.com', '(551) 403-5494', 'yYxJFPP9Dy', '6666 Anderson Fall\nLeannonhaven, AZ 99342-0827', 'Otro', '2021-11-13 06:52:55', '$2y$10$FE8nkhthfiqgaW47e808W.GBtacfm2VXRjXvHf0wXdDGElnJ1JPRK', 'ttBCti7XYu', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(8, 'Tatyana McDermott', 'emilia89@example.org', '1-660-718-6938', 'lVnMb3eWZn', '488 Makayla Streets Suite 895\nNew Thelma, NE 32383', 'Otro', '2021-11-13 06:52:55', '$2y$10$/lWNhuiT5d49AA3SqV4gAOCYRg6xQxAZY4kSn6pfxMswCx4my4GAO', 'wBEJiGo7Q7', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(9, 'Cleve Turcotte', 'annabel17@example.com', '+1-727-318-6612', 'FRAXyRuMBc', '80093 DuBuque Ford Suite 775\nHauckfort, CO 52016', 'Otro', '2021-11-13 06:52:55', '$2y$10$.AB7iMUjD1V6PKYaNKRvguJzLwEyO7PI5.lsppTds99MAeU0eWNnW', 'M9joNC0pvf', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(10, 'Brigitte Crona', 'roosevelt.simonis@example.net', '321-459-0741', '5bnQsws77u', '4287 Blake Well\nOswaldomouth, MT 54230-2483', 'Otro', '2021-11-13 06:52:55', '$2y$10$LVrj0nObyS4JjztmbA7yUuP9PfvXE54OBaylpcnfDjt5MjPlRBWLW', 'V2YC12BhGb', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(11, 'Julia Runte', 'veum.cielo@example.org', '+1-863-562-7927', 'Fwmnbo2byW', '4730 Cynthia Rapids\nEast Dinochester, MI 00763', 'Otro', '2021-11-13 06:52:55', '$2y$10$yC71bbNgxn7VgmNojSmrGOZWkacY6mYjh5slLkpSjnWanPeLHTvRS', 'TByMUMvGeb', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(12, 'Theo Lemke', 'afeil@example.com', '+1-252-657-3179', 'rif8Q3Di8f', '57034 Darius Motorway Suite 494\nDaviston, OR 51772-2021', 'Mujer', '2021-11-13 06:52:55', '$2y$10$4rzkL7PFDITTsAeyu34g8.OoblwFR/sFPSxtwL6tYHPkj0j8hK0bm', 'ZS7rB9kekp', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(13, 'Santa Frami', 'wolff.kole@example.org', '+1 (270) 821-7128', 'PjTB0LJcq3', '63512 Altenwerth Knolls Suite 745\nNorth Marachester, WI 91216-3575', 'Mujer', '2021-11-13 06:52:55', '$2y$10$bNJaylQJNUBoXOg7m0qeCOpDm20nXLVZQmfqp/OVmB.0THGsA9pvq', 'PCc85dbvZh', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(14, 'Mallie Auer I', 'alfreda.oberbrunner@example.org', '(272) 808-5180', 'N3iNlAr2nA', '348 Derrick Fords Suite 000\nNorth Brooke, KY 64777', 'Hombre', '2021-11-13 06:52:56', '$2y$10$/Q0i62XMObkKfGqQg3w7EuKuTYmwE/FQt1NgZN331XDnaWaD3NkeG', 't5ppU0p44s', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(15, 'Dr. Helmer Marks', 'cwisoky@example.org', '+1-402-506-9489', 't6ynhqcxwh', '846 Bobby Heights\nMalvinashire, MT 23304-4004', 'Otro', '2021-11-13 06:52:56', '$2y$10$aGvGTzytNgb/pzHL796OieeS3tMRMWUksLKRewCLfT5yygFgEJy4W', 'WgFpmznBIy', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(16, 'Branson Zemlak', 'angelina.quitzon@example.com', '(732) 617-3657', 'oYz1p7ueIO', '916 Eldora Row\nSouth Davonville, MO 70309-9166', 'Hombre', '2021-11-13 06:52:56', '$2y$10$B2RE5u8aVTY77nQHrkRFCOnKp/VZUNcCaTm2hEAs8n91sYQ1DdbYm', 'y0OkSkNyAE', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(17, 'Mr. Brando Hoeger V', 'eveline.kohler@example.com', '725.918.5192', 'u92VoIhnYI', '99933 Littel Port\nSouth Bonnieview, OK 79036-9336', 'Hombre', '2021-11-13 06:52:56', '$2y$10$QWKDr0PdJkgyvvkUUPF/5O5ps2VR5zxdsMsOuDZmyOK/wLdq7yVsG', 'miGqvJ9rTR', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(18, 'Zack Conroy V', 'pcollier@example.net', '+1.641.720.8559', 'qjbl01Cm9P', '79569 Hoeger Spurs\nWest Savionview, AR 19206-8791', 'Hombre', '2021-11-13 06:52:56', '$2y$10$wVshqloes2vezoSMkjGIYO375Q63zRSL7il9/LdRwDFNrPcH7TJge', 'sQejYYTgCK', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(19, 'Price Rippin Jr.', 'hschumm@example.org', '848.787.5662', 'dfFDh9jUi7', '17918 Abernathy Alley Apt. 872\nWebermouth, IN 41339-4037', 'Hombre', '2021-11-13 06:52:56', '$2y$10$wSrryoTM42l2RSxEwDUhJOmflS9lYu6PoZygZlaayhNd7r9/c50l.', 'GwJPvrt41i', '2021-11-13 06:52:57', '2021-11-13 06:52:57'),
(20, 'Monroe Johns V', 'aosinski@example.org', '534.648.6010', '63p4aVWtoi', '2065 Nitzsche Shoal Suite 581\nPort Erwin, AL 15392', 'Hombre', '2021-11-13 06:52:56', '$2y$10$ePTnV6HsJQYJdq7f/ztMj.mcoGSVAgrQoR1wxaj3dWDpcoR2J8.tS', 'KJxtsKuWIE', '2021-11-13 06:52:57', '2021-11-13 06:52:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `size`
--
ALTER TABLE `size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
