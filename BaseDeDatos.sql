-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2018 a las 17:09:47
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simple_stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `descripcion_categoria` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `date_added`) VALUES
(46, 'BATERIAS', '', '2018-04-16 19:43:23'),
(44, 'PEGAMENTOS', '', '2018-04-16 19:42:59'),
(45, 'CARCASAS', '', '2018-04-16 19:43:13'),
(42, 'REFACCIONES PEQUEÃ‘AS', '', '2018-04-16 19:41:13'),
(43, 'CAMARA', '', '2018-04-16 19:42:50'),
(47, 'ETIQUETAS', '', '2018-04-16 19:43:31'),
(48, 'PROTECTORES', '', '2018-04-16 19:43:43'),
(49, 'ACCESORIOS GENERALES', '', '2018-04-16 19:43:54'),
(50, 'TOUCH', '', '2018-04-16 19:44:17'),
(51, 'CAJAS', '', '2018-04-16 19:44:36'),
(52, 'ANTENAS', '', '2018-04-16 19:45:11'),
(53, 'PCBA', '', '2018-04-16 19:45:22'),
(54, 'PAPELERIA', '', '2018-04-16 19:45:40'),
(55, 'BOTONES', '', '2018-04-16 19:46:39'),
(56, 'PCBA SECUNDARIO', '', '2018-04-16 19:47:03'),
(57, '#N/A', '', '2018-04-16 19:47:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_historial` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nota` varchar(255) NOT NULL,
  `referencia` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id_historial`, `id_producto`, `user_id`, `fecha`, `nota`, `referencia`, `cantidad`) VALUES
(30, 13, 1, '2018-04-16 19:42:15', 'admin agregÃ³ 3 producto(s) al inventario', '21042', 3),
(31, 15, 1, '2018-04-16 19:49:37', 'admin agregÃ³ 1 producto(s) al inventario', '21043', 1),
(32, 16, 1, '2018-04-16 19:51:02', 'admin agregÃ³ 1 producto(s) al inventario', '21044', 1),
(33, 17, 1, '2018-04-16 19:53:36', 'admin agregÃ³ 1 producto(s) al inventario', '21047', 1),
(34, 18, 1, '2018-04-16 19:54:54', 'admin agregÃ³ 1 producto(s) al inventario', '21049', 1),
(35, 19, 1, '2018-04-16 19:56:38', 'admin agregÃ³ 1 producto(s) al inventario', '21052', 1),
(36, 20, 1, '2018-04-16 19:57:53', 'admin agregÃ³ 1 producto(s) al inventario', '21056', 1),
(37, 21, 1, '2018-04-16 19:59:31', 'admin agregÃ³ 1 producto(s) al inventario', '21058', 1),
(38, 22, 1, '2018-04-16 20:00:49', 'admin agregÃ³ 1 producto(s) al inventario', '21066', 1),
(39, 23, 1, '2018-04-16 20:01:55', 'admin agregÃ³ 1 producto(s) al inventario', '21067', 1),
(40, 24, 1, '2018-04-16 20:03:12', 'admin agregÃ³ 1 producto(s) al inventario', '21073', 1),
(41, 25, 1, '2018-04-16 20:04:07', 'admin agregÃ³ 1 producto(s) al inventario', '21077', 1),
(42, 26, 1, '2018-04-16 20:04:52', 'admin agregÃ³ 1 producto(s) al inventario', '21078', 1),
(43, 27, 1, '2018-04-16 20:06:12', 'admin agregÃ³ 1 producto(s) al inventario', '21084', 1),
(44, 28, 1, '2018-04-16 20:07:03', 'admin agregÃ³ 1 producto(s) al inventario', '21092', 1),
(45, 29, 1, '2018-04-16 20:08:26', 'admin agregÃ³ 1 producto(s) al inventario', '22399', 1),
(46, 21, 1, '2018-04-16 20:18:10', 'admin agregÃ³ 5 producto(s) al inventario', '', 5),
(47, 21, 1, '2018-04-16 20:18:34', 'admin eliminÃ³ 5 producto(s) del inventario', '', 5),
(51, 28, 1, '2018-04-19 19:31:01', 'admin agregÃ³ 10 producto(s) al inventario', 'Se compraron nuevas cajas', 10),
(52, 28, 1, '2018-04-19 21:05:14', 'admin eliminÃ³ 10 producto(s) del inventario', '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `numero_proveedor` char(20) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `color_producto` varchar(35) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `numero_proveedor`, `codigo_producto`, `nombre_producto`, `color_producto`, `date_added`, `precio_producto`, `stock`, `id_categoria`) VALUES
(13, 'M709-V26000-008', '21042', 'ANTENNA PCB ADHESIVE FOAM', 'COMÃšN', '2018-04-16 19:42:15', 0.01, 3, 42),
(15, 'N706-U82000-000', '21043', 'BACK CAMERA \r\n', 'COMÃšN\r\n', '2018-04-16 19:49:37', 3.47, 1, 43),
(16, 'M717-S94000-004', '21044', 'BACK CAMERA CONDUCTIVE GLUE\r\n', 'COMÃšN\r\n', '2018-04-16 19:51:02', 0.01, 1, 44),
(17, 'M111-V98131-000', '21047', 'BACK COVER GOLD\r\n', 'DORADO\r\n', '2018-04-16 19:53:36', 0.5, 1, 45),
(18, 'S104-T19000-016', '21049', 'BATTERY\r\n', 'COMÃšN\r\n', '2018-04-16 19:54:54', 2.47, 1, 46),
(19, 'P316-V26130-000', '21052', 'BATTERY COVER STICKER\r\n', 'COMÃšN\r\n', '2018-04-16 19:56:38', 0.02, 1, 47),
(20, 'P237-V26000-001', '21056', 'CAMERA LENS PROTECTIVE FILM\r\n', 'COMÃšN\r\n', '2018-04-16 19:57:53', 0.01, 1, 48),
(21, 'P101-P98130-300', '21058', 'CHARGER\r\n', 'COMÃšN\r\n', '2018-04-16 19:59:31', 0.9, 1, 49),
(22, 'M121-W14130-000', '21066', 'FRONT HOSING TP ASSEMBLY BLACK\r\n', 'COMÃšN\r\n', '2018-04-16 20:00:49', 16.6, 1, 50),
(23, 'P216-Y76000-000', '21067', 'GIFT BOX\r\n', 'COMÃšN\r\n', '2018-04-16 20:01:55', 0.11, 1, 51),
(24, 'N302-V26131-010', '21073', 'MAIN FPC ANTENNA BLACK\r\n', 'COMÃšN\r\n', '2018-04-16 20:03:12', 0.12, 1, 52),
(25, 'F00W143-000-100', '21077', 'PCBA ASSEMBLED PARTS\r\n', 'COMÃš', '2018-04-16 20:04:07', 22.8, 1, 53),
(26, 'P231-L23000-000', '21078', 'PROMOTION CARD\r\n', 'COMÃšN\r\n', '2018-04-16 20:04:52', 0.1, 1, 54),
(27, 'N105-V26B02-001', '21084', 'SIDEKEY FPC\r\n', 'COMÃšN\r\n', '2018-04-16 20:06:12', 0.22, 1, 55),
(28, 'N603-V26000-000', '21092', 'SUB PCBA\r\n', 'COMÃšN\r\n', '2018-04-16 20:07:03', 0.83, 1, 56),
(29, 'M111-V98132-000', '22399', 'BACK COVER PINK GOLD\r\n', 'ROSA DORADO\r\n', '2018-04-16 20:08:26', 0.5, 1, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', 'admin@admin.com', '2018-03-10 15:06:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `products` (`id_producto`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
