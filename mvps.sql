-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2016 a las 18:01:57
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvps`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mvp`
--

CREATE TABLE `mvp` (
  `id_mvp` int(5) UNSIGNED NOT NULL,
  `nombre_mvp` varchar(30) NOT NULL,
  `mapa_mvp` varchar(30) NOT NULL,
  `matado` time DEFAULT NULL,
  `respawn` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mvp`
--

INSERT INTO `mvp` (`id_mvp`, `nombre_mvp`, `mapa_mvp`, `matado`, `respawn`) VALUES
(1, 'Mistress', 'mjolnir_04', '00:00:00', '00:00:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mvp`
--
ALTER TABLE `mvp`
  ADD PRIMARY KEY (`id_mvp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mvp`
--
ALTER TABLE `mvp`
  MODIFY `id_mvp` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
