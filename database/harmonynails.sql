-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-05-2018 a las 03:37:40
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `harmonynails`
CREATE DATABASE IF NOT EXISTS harmonyn_db;
use harmonyn_db;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_inicio`
--

CREATE TABLE `contenido_inicio` (
  `id_cont_inicio` int(3) UNSIGNED NOT NULL,
  `titulo_inicio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `contenido_inicio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ultima_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario_FK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contenido_inicio`
--

INSERT INTO `contenido_inicio` (`id_cont_inicio`, `titulo_inicio`, `contenido_inicio`, `ultima_modif`, `id_usuario_FK`) VALUES
(1, 'gege', 'Harmony Nails surge a principios de aÃ±o 2017, con el deseo de cubrir una necesidad existente en el Ã¡rea de belleza y a la par, cubrir las necesidades financieras propias. Mediante los productos y servicios busca consolidarse como una de las mejores en el mercado local.            ', '2018-05-09 02:10:47', 1),
(2, 'Ventajas que ofrece Harmony Nails', '- Durabilidad de las uÃ±as\r\n<br>\r\n- Menores tiempos de aplicaciÃ³n\r\n<br>\r\n- Calidad en los materiales\r\n<br>\r\n- FÃ¡cil localizaciÃ³n\r\n<br>\r\n- Accesible ', '2018-05-04 02:26:50', 1),
(3, 'Servicios que ofrecemos', '- AplicaciÃ³n de uÃ±as acrÃ­licas en manos\r\n<br>\r\n- Cursos para aplicaciÃ³n de uÃ±as     ', '2018-05-04 02:29:19', 1),
(4, 'MisiÃ³n', 'Harmony Nails es una microempresa dedicada al diseÃ±o y aplicaciÃ³n de uÃ±as acrÃ­licas, nuestro principal interÃ©s es satisfacer las necesidades de nuestros clientes con una amplia gama de diseÃ±os que elaboramos profesionalmente, para ofrecer un servicio  de excelente calidad.', '2018-05-04 02:30:00', 1),
(5, 'Vision', 'Harmony Nails surge a principios de aÃ±o 2017, con el deseo de cubrir una necesidad existente en el Ã¡rea de belleza y a la par, cubrir las necesidades financieras propias. Mediante los productos y servicios busca consolidarse como una de las mejores en el mercado local.', '2018-05-04 05:18:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido_servicio`
--

CREATE TABLE `contenido_servicio` (
  `id_cont_servicio` int(3) NOT NULL,
  `titulo_servicio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `contenido_servicio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ultima_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario_FK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contenido_servicio`
--

INSERT INTO `contenido_servicio` (`id_cont_servicio`, `titulo_servicio`, `contenido_servicio`, `ultima_modif`, `id_usuario_FK`) VALUES
(1, 'Adamop', 'Adamopa12', '2018-05-04 00:33:46', 1),
(2, 'Adamop', 'Adamopa12', '2018-05-04 00:33:46', 1),
(3, 'Adamop', 'Adamopa12', '2018-05-04 00:33:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_nails`
--

CREATE TABLE `usuario_nails` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(8) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_nails`
--

INSERT INTO `usuario_nails` (`id_usuario`, `user`, `password`) VALUES
(1, 'Luis', '1234567');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido_inicio`
--
ALTER TABLE `contenido_inicio`
  ADD PRIMARY KEY (`id_cont_inicio`),
  ADD UNIQUE KEY `id_cont_inicio` (`id_cont_inicio`),
  ADD KEY `id_usuario_FK` (`id_usuario_FK`);

--
-- Indices de la tabla `contenido_servicio`
--
ALTER TABLE `contenido_servicio`
  ADD PRIMARY KEY (`id_cont_servicio`);

--
-- Indices de la tabla `usuario_nails`
--
ALTER TABLE `usuario_nails`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD UNIQUE KEY `id_usuario_2` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido_inicio`
--
ALTER TABLE `contenido_inicio`
  MODIFY `id_cont_inicio` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contenido_servicio`
--
ALTER TABLE `contenido_servicio`
  MODIFY `id_cont_servicio` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_nails`
--
ALTER TABLE `usuario_nails`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
