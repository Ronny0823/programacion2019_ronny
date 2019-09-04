-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2019 a las 18:14:12
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
-- Base de datos: `infotep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,3) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `decimales_2`
--

INSERT INTO `decimales_2` (`_float`, `_double`, `_decimal`) VALUES
(2.3, 3.600, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) DEFAULT NULL,
  `nomnbre` text,
  `pais` text,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nomnbre`, `pais`, `fecha_nacimiento`) VALUES
(NULL, 'Ronny Reyes', 'DR', NULL),
(NULL, 'Wentchelle Antoine', 'HT', NULL),
(NULL, 'Chris Nuñes', 'JP', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `_date` date DEFAULT NULL,
  `_datetime` datetime DEFAULT NULL,
  `_time` time DEFAULT NULL,
  `_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `_year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`_date`, `_datetime`, `_time`, `_timestamp`, `_year`) VALUES
('1996-01-15', '1996-01-15 08:10:30', '11:58:30', '2019-01-01 05:01:01', 2019),
('2019-09-03', '2019-09-03 12:06:18', '12:06:18', '2019-09-03 16:06:18', 2019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros_decimales`
--

CREATE TABLE `numeros_decimales` (
  `_float` float DEFAULT NULL,
  `_double` double DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numeros_decimales`
--

INSERT INTO `numeros_decimales` (`_float`, `_double`, `_decimal`) VALUES
(852.54, 58856.54, '6588766');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros_enteros`
--

CREATE TABLE `numeros_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numeros_enteros`
--

INSERT INTO `numeros_enteros` (`_tinyint`, `_smallint`, `_mediumint`, `_int`, `_bigint`) VALUES
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 5654, 55749, 65746552, 9223372036854775807);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('Ronny', 'Ronny', 'Ronny'),
('Ronny Leonar', 'Ronny Leonar', 'Ronny Leonardo Ramos Reyes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
