-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 18:23:58
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `1fm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `apellido`) VALUES
(1, 'Ronny', 'Reyes'),
(2, 'Rony', 'fria'),
(3, 'Chris', 'Nuñez'),
(4, 'Ford', 'Kervens'),
(5, 'wentcherlle', 'Antoine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_correos`
--

CREATE TABLE `estudiantes_correos` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_correos`
--

INSERT INTO `estudiantes_correos` (`id`, `correo`) VALUES
(1, 'reyesronny42@gmail.com'),
(2, 'rony43Qgmail.com'),
(3, 'chris32@gmail.com'),
(4, 'ford43@gmail.com'),
(5, 'wentcherlle@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_telefono`
--

CREATE TABLE `estudiantes_telefono` (
  `id` bigint(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_telefono`
--

INSERT INTO `estudiantes_telefono` (`id`, `telefono`) VALUES
(1, '809-506-6981'),
(2, '809-526-6971'),
(3, '809-586-6951'),
(4, '809-596-6941'),
(5, '809-576-6911');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
