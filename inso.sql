-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 17:55:55
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos_rutas`
--

CREATE TABLE `puntos_rutas` (
  `puntos_id` int(5) NOT NULL,
  `ruta_id` int(5) NOT NULL,
  `punto_latitud` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `punto_longitud` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `puntos_rutas`
--

INSERT INTO `puntos_rutas` (`puntos_id`, `ruta_id`, `punto_latitud`, `punto_longitud`, `descripcion`) VALUES
(1, 2, '-8.111843', '-79.002861', 'Ruta huanchaco Letra H corazón'),
(2, 3, '-8.102780', '-79.011198', 'Ruta California Letra A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ruta`
--

CREATE TABLE `tbl_ruta` (
  `ruta_id` int(11) NOT NULL,
  `ruta_registro` datetime NOT NULL,
  `ruta_nombre` varchar(50) NOT NULL,
  `ruta_latitud` varchar(40) NOT NULL,
  `ruta_longitud` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ruta`
--

INSERT INTO `tbl_ruta` (`ruta_id`, `ruta_registro`, `ruta_nombre`, `ruta_latitud`, `ruta_longitud`) VALUES
(1, '2018-04-25 00:00:00', 'Ruta el Cortijo  \"C1\"', '-8.087822', '-78.999259'),
(2, '2018-11-15 00:00:00', 'Huanchaco Letra \"H\"', ' -8.079493', ' -79.120267'),
(3, '2018-11-15 00:00:00', 'California Letra \"A\"', '-8.143515', '-79.056195');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `puntos_rutas`
--
ALTER TABLE `puntos_rutas`
  ADD PRIMARY KEY (`puntos_id`);

--
-- Indices de la tabla `tbl_ruta`
--
ALTER TABLE `tbl_ruta`
  ADD PRIMARY KEY (`ruta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ruta`
--
ALTER TABLE `tbl_ruta`
  MODIFY `ruta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
