-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2024 a las 20:35:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debts`
--

CREATE TABLE `debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lote` varchar(255) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `clientID` bigint(20) UNSIGNED NOT NULL,
  `vencimiento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `debts`
--

INSERT INTO `debts` (`id`, `lote`, `precio`, `clientID`, `vencimiento`, `created_at`, `updated_at`) VALUES
(1, '00145', 150000, 123456, '2022-09-01', '2024-07-22 18:31:41', '2024-07-22 18:31:45'),
(2, '00146', 110000, 135486, '0000-00-00', '2024-07-22 18:31:50', '2024-07-22 18:31:53'),
(4, '00148', 130000, 123456, '2022-10-01', '2024-07-22 18:31:56', '2024-07-22 18:31:58'),
(5, '00148', 145000, 123456, '0000-00-00', '2024-07-22 18:32:01', '2024-07-22 18:32:04'),
(6, '00148', 190000, 123456, '2022-12-01', '2024-07-22 18:32:06', '2024-07-22 18:32:09'),
(7, '00148', 190000, 123456, '2023-01-01', '2024-07-22 18:32:12', '2024-07-22 18:32:17'),
(8, '00148', 190000, 123456, '2023-02-01', '2024-07-22 18:32:21', '2024-07-22 18:32:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `debts`
--
ALTER TABLE `debts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `debts`
--
ALTER TABLE `debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
