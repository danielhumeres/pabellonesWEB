-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2019 a las 17:17:56
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
-- Estructura de tabla para la tabla `cirugia`
--

CREATE TABLE `cirugia` (
  `idCirugia` int(11) NOT NULL,
  `nombrePaciente` varchar(70) NOT NULL,
  `fechaHorarioInicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `fechaHorarioTermino` timestamp NOT NULL DEFAULT current_timestamp(),
  `Pabellon_NumPabellon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cirugia`
--

INSERT INTO `cirugia` (`idCirugia`, `nombrePaciente`, `fechaHorarioInicio`, `fechaHorarioTermino`, `Pabellon_NumPabellon`) VALUES
(3, 'Raul Rojas', '2019-06-28 12:00:00', '2019-06-28 15:00:00', 1),
(4, 'Samuel Soto', '2019-06-26 15:00:00', '2019-06-26 19:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecirugia`
--

CREATE TABLE `detallecirugia` (
  `idDetalleCirguia` int(11) NOT NULL,
  `Medico_IdMedico` int(11) NOT NULL,
  `Cirugia_IdCirugia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallecirugia`
--

INSERT INTO `detallecirugia` (`idDetalleCirguia`, `Medico_IdMedico`, `Cirugia_IdCirugia`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `TipoMedico_idTipoMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idMedico`, `nombre`, `apellido`, `TipoMedico_idTipoMedico`) VALUES
(1, 'Ariel', 'Araneda', 1),
(2, 'Bastian', 'Bueno', 2),
(3, 'Cecilia', 'Cerda', 3),
(4, 'Dante', 'Diaz', 4),
(5, 'Eugenio', 'Espinoza', 5),
(6, 'Fabio', 'Fuentes', 6),
(7, 'Gabriela', 'Gonzalez', 1),
(8, 'Herbert', 'Huerta', 2),
(9, 'Irma', 'Inn', 3),
(10, 'Jaime', 'Jerez', 4),
(11, 'Kathya', 'King', 5),
(12, 'Luis', 'Lopez', 6),
(13, 'Magaly', 'Marin', 1),
(14, 'Nicolas', 'Navarro', 2),
(15, 'Oscar', 'Opazo', 3),
(16, 'Paulo', 'Poblete', 4);

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Estructura de tabla para la tabla `tipomedico`
--

CREATE TABLE `tipomedico` (
  `idTipoMedico` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipomedico`
--

INSERT INTO `tipomedico` (`idTipoMedico`, `descripcion`) VALUES
(1, 'Cirujano/a'),
(2, 'Anestesista'),
(3, 'Enfermero/a'),
(4, 'Arsenalero/a'),
(5, 'Pabellonero/a'),
(6, 'Tecnico anestesista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniel Humeres', 'd.humeres@alumnos.duoc.cl', NULL, '$2y$10$QISKZCnJJ/wlUfk2XaXW1ut4vdjay2KFIBMYUXX8GPUQNIZ7LOkuG', NULL, '2019-06-27 07:16:36', '2019-06-27 07:16:36'),
(2, 'Daniel Humeres', 'humeresdaniel@gmail.com', NULL, '$2y$10$zAOgMwfWIKHSktd2OulweeMR.EJ9vLZ03uVrKo1VSDj.aWn/IG/4i', NULL, '2019-06-27 08:52:15', '2019-06-27 08:52:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `clave` varchar(25) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `email`, `clave`, `estado`) VALUES
(1, 'Daniel ', 'Humeres', 'd.humeres@alumnos.duoc.cl', '123456', 0),
(2, 'German', 'Hernandez', 'ge.hernandezf@alumnos.duoc.cl', '1234', 0),
(3, 'Krisler ', 'Abello', 'k.abello@alumnos.duoc.cl', '1234', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  ADD PRIMARY KEY (`idCirugia`),
  ADD KEY `Pabellon_NumPabellon` (`Pabellon_NumPabellon`);

--
-- Indices de la tabla `detallecirugia`
--
ALTER TABLE `detallecirugia`
  ADD PRIMARY KEY (`idDetalleCirguia`),
  ADD KEY `Medico_IdMedico` (`Medico_IdMedico`),
  ADD KEY `Cirugia_IdCirugia` (`Cirugia_IdCirugia`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `TipoMedico_idTipoMedico` (`TipoMedico_idTipoMedico`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pabellon`
--
ALTER TABLE `pabellon`
  ADD PRIMARY KEY (`numPabellon`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tipomedico`
--
ALTER TABLE `tipomedico`
  ADD PRIMARY KEY (`idTipoMedico`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  MODIFY `idCirugia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `detallecirugia`
--
ALTER TABLE `detallecirugia`
  MODIFY `idDetalleCirguia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipomedico`
--
ALTER TABLE `tipomedico`
  MODIFY `idTipoMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cirugia`
--
ALTER TABLE `cirugia`
  ADD CONSTRAINT `cirugia_ibfk_1` FOREIGN KEY (`Pabellon_NumPabellon`) REFERENCES `pabellon` (`numPabellon`);

--
-- Filtros para la tabla `detallecirugia`
--
ALTER TABLE `detallecirugia`
  ADD CONSTRAINT `detallecirugia_ibfk_2` FOREIGN KEY (`Medico_IdMedico`) REFERENCES `medico` (`idMedico`),
  ADD CONSTRAINT `detallecirugia_ibfk_3` FOREIGN KEY (`Cirugia_IdCirugia`) REFERENCES `cirugia` (`idCirugia`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`TipoMedico_idTipoMedico`) REFERENCES `tipomedico` (`idTipoMedico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
