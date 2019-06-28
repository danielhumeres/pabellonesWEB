-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2019 a las 04:58:39
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pabellones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pabellon`
--

CREATE TABLE `pabellon` (
  `numPabellon` int(2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pabellon`
--

INSERT INTO `pabellon` (`numPabellon`, `estado`) VALUES
(1, 'libre'),
(2, 'libre'),
(3, 'libre'),
(4, 'libre'),
(5, 'libre'),
(6, 'libre'),
(7, 'libre'),
(8, 'libre'),
(9, 'libre'),
(10, 'libre'),
(11, 'libre'),
(12, 'libre'),
(13, 'libre'),
(14, 'libre'),
(15, 'libre'),
(16, 'libre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pabellon`
--
ALTER TABLE `pabellon`
  ADD PRIMARY KEY (`numPabellon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
