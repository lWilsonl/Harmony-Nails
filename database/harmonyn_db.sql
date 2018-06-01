-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2018 a las 23:16:15
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
-- Base de datos: `harmonyn_db`
--
CREATE DATABASE IF NOT EXISTS harmonyn_db;
use harmonyn_db;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_aplica`
--

CREATE TABLE `citas_aplica` (
  `id_cita_aplic` int(3) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `numero` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_cursos`
--

CREATE TABLE `citas_cursos` (
  `id_cita_curso` int(3) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `numero` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_contenido`
--

CREATE TABLE `contacto_contenido` (
  `id_contacto` int(3) UNSIGNED NOT NULL,
  `ruta_contacto` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ultima_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario_FK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contacto_contenido`
--

INSERT INTO `contacto_contenido` (`id_contacto`, `ruta_contacto`, `ultima_modif`, `id_usuario_FK`) VALUES
(1, 'https://www.facebook.com/Harmony-Nails-264255900645210', '2018-05-29 23:31:52', 1),
(2, 'https://www.instagram.com/fernandasoto79251/', '2018-05-29 23:32:37', 1),
(3, '662 328 1593', '2018-05-29 23:32:55', 1);

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
(1, 'Historia', '<p><span style=\"font-size: 18px;\">Harmony Nails surge a principios de aÃ±o 2017, con el deseo de cubrir una necesidad existente en el Ã¡rea de belleza y a la par, cubrir las necesidades financieras propias. Mediante los productos y servicios busca consolidarse como una de las mejores en el mercado local.</span><br></p>', '2018-05-31 21:07:11', 1),
(2, 'Ventajas que ofrece Harmony Nails', '<p><span style=\"font-size: 18px;\">- Durabilidad de las uÃ±as </span></p><p><span style=\"font-size: 18px;\">- Menores tiempos de aplicaciÃ³n </span></p><p><span style=\"font-size: 18px;\">- Calidad en los materiales </span></p><p><span style=\"font-size: 18px;\">- FÃ¡cil localizaciÃ³n </span></p><p><span style=\"font-size: 18px;\">- Accesible</span><br></p>', '2018-05-31 21:11:55', 1),
(3, 'Servicios que ofrecemos', '<p><span style=\"font-size: 18px;\">- AplicaciÃ³n de uÃ±as acrÃ­licas en manos</span></p><p><span style=\"font-size: 18px;\">- Cursos para aplicaciÃ³n de uÃ±as&nbsp;</span></p>', '2018-05-31 21:11:55', 1),
(4, 'MisiÃ³n', '<p><span style=\"font-size: 18px;\">Harmony Nails es una microempresa dedicada al diseÃ±o y aplicaciÃ³n de uÃ±as acrÃ­licas, nuestro principal interÃ©s es satisfacer las necesidades de nuestros clientes con una amplia gama de diseÃ±os que elaboramos profesionalmente, para ofrecer un servicio de excelente calidad.</span><br></p>', '2018-05-31 21:11:55', 1),
(5, 'Vision', '<p><span style=\"font-size: 18px;\">Harmony Nails es una micro empresa&nbsp;que en un futuro desea poder expandirse y de esta manera, poder contribuir a la economÃ­a local ademÃ¡s de lograr llegar a mÃ¡s personas para que nuestro trabajo sea reconocido para convertirnos en una empresa lÃ­der en el Ã¡rea y en el mercado local.</span><br></p>', '2018-05-31 21:11:55', 1);

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
(1, 'AplicaciÃ³n', '<span style=\"font-size: 18px;\">VisÃ­tanos y luce unas hermosas uÃ±as solo como en Harmony Nails sabemos hacerlas, con nuestro caracteristico ambiente amigable y ademas a un excelente precio.</span>', '2018-05-29 03:12:36', 1),
(2, 'Cursos', '<span style=\"font-size: 18px;\">Si gustas aprender a hacer tus propios diseÃ±os, Harmony Nails ofrece cursos para que puedas aprender a realizar los mejores diseÃ±os. Contamos con personal capacitado que imparte cursos de aplicaciÃ³n de manera profesional.</span>', '2018-05-29 03:12:46', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_ubicaciones`
--

CREATE TABLE `galeria_ubicaciones` (
  `id_imagen` int(3) UNSIGNED NOT NULL,
  `nombre_imagen` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `cat_img` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta_imagen` varchar(120) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ultima_modif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario_FK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `galeria_ubicaciones`
--

INSERT INTO `galeria_ubicaciones` (`id_imagen`, `nombre_imagen`, `descrip`, `cat_img`, `ruta_imagen`, `ultima_modif`, `id_usuario_FK`) VALUES
(14, 'Imagen 1', 'Esta es la imagen numero uno', 'gallery', 'C:/practica/Harmony-Nails/images/gallery/Imagen 1.jpg', '2018-05-29 13:28:32', 0),
(15, 'Imagen 2', 'Esta es la imagen numero dos', 'gallery', 'C:/practica/Harmony-Nails/images/gallery/Imagen 2.jpg', '2018-05-29 14:17:52', 0),
(16, 'Imagen 3', 'Esta es la imagen numero 3', 'gallery', 'C:/practica/Harmony-Nails/images/gallery/Imagen 3.jpg', '2018-05-29 14:56:04', 0),
(17, '6840213-avenged-sevenfold-wallpaper.jpg', 'Hola', 'gallery', 'C:/practica/Harmony-Nails/images/gallery/6840213-avenged-sevenfold-wallpaper.jpg.jpg', '2018-05-30 00:35:36', 0),
(18, '31408272_824045357782869_2044845732195729408_n.png', 'Adios', 'gallery', 'C:/practica/Harmony-Nails/images/gallery/31408272_824045357782869_2044845732195729408_n.png.png', '2018-05-30 00:37:15', 0);

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
-- Indices de la tabla `citas_aplica`
--
ALTER TABLE `citas_aplica`
  ADD PRIMARY KEY (`id_cita_aplic`);

--
-- Indices de la tabla `citas_cursos`
--
ALTER TABLE `citas_cursos`
  ADD PRIMARY KEY (`id_cita_curso`);

--
-- Indices de la tabla `contacto_contenido`
--
ALTER TABLE `contacto_contenido`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_usuario_FK` (`id_usuario_FK`);

--
-- Indices de la tabla `contenido_inicio`
--
ALTER TABLE `contenido_inicio`
  ADD PRIMARY KEY (`id_cont_inicio`),
  ADD KEY `id_usuario_FK` (`id_usuario_FK`);

--
-- Indices de la tabla `contenido_servicio`
--
ALTER TABLE `contenido_servicio`
  ADD PRIMARY KEY (`id_cont_servicio`);

--
-- Indices de la tabla `galeria_ubicaciones`
--
ALTER TABLE `galeria_ubicaciones`
  ADD PRIMARY KEY (`id_imagen`),
  ADD UNIQUE KEY `nombre_imagen` (`nombre_imagen`),
  ADD KEY `id_usuario_FK` (`id_usuario_FK`);

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
-- AUTO_INCREMENT de la tabla `citas_aplica`
--
ALTER TABLE `citas_aplica`
  MODIFY `id_cita_aplic` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `citas_cursos`
--
ALTER TABLE `citas_cursos`
  MODIFY `id_cita_curso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto_contenido`
--
ALTER TABLE `contacto_contenido`
  MODIFY `id_contacto` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contenido_inicio`
--
ALTER TABLE `contenido_inicio`
  MODIFY `id_cont_inicio` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contenido_servicio`
--
ALTER TABLE `contenido_servicio`
  MODIFY `id_cont_servicio` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `galeria_ubicaciones`
--
ALTER TABLE `galeria_ubicaciones`
  MODIFY `id_imagen` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario_nails`
--
ALTER TABLE `usuario_nails`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
