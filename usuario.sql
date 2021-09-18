-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2019 a las 01:18:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenamiento`
--

CREATE TABLE `entrenamiento` (
  `id` int(11) NOT NULL,
  `planta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `equipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `standardre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaalt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaes` date NOT NULL,
  `wc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `np` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `testudio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `requiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `manufactura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fentrenamiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `entrenador` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptopen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `operador` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deptop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `piezas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrenamiento`
--

INSERT INTO `entrenamiento` (`id`, `planta`, `tipo`, `equipo`, `standardre`, `fechaalt`, `fechaes`, `wc`, `np`, `estacion`, `testudio`, `requiere`, `calidad`, `manufactura`, `fentrenamiento`, `resultado`, `spc`, `entrenador`, `deptopen`, `operador`, `deptop`, `piezas`, `ruta`) VALUES
(16, 'Planta 5', '3', 'N/A', 'N/A', '2019-08-14 17:41:38', '2019-07-24', 'COAXIAL', 'N/A', 'COAXIAL', 'EXAMEN', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'EXAMEN', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '23199 Martha Leon', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/EXAMEN MSA 23199.pdf'),
(17, 'Planta 5', '3', 'N/A', 'MSA-2019-0197', '2019-08-14 17:42:52', '2019-07-24', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 1', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '23199 Martha Leon', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/MSA-2019-0197-23199-F1.pdf'),
(18, 'Planta 5', '3', 'EEMI-252', 'MSA-2019-0196', '2019-08-14 17:43:52', '2019-07-24', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 2', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '23199 Martha Leon', 'PRODUCCION', 'PFPP2', 'Entrenamiento/MSA/MSA-2019-0196-23199-PFPP2-F2.pdf'),
(19, 'Planta 5', '3', 'N/A', 'N/A', '2019-08-14 17:45:04', '2019-07-23', 'COAXIAL', 'N/A', 'COAXIAL', 'EXAMEN', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'EXAMEN', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '96853 Luis Sombras', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/EXAMEN MSA 96853.pdf'),
(20, 'Planta 5', '3', 'N/A', 'MSA-2019-0195', '2019-08-14 17:46:09', '2019-07-23', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 1', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '96853 Luis Sombras', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/MSA-2019-0195-96853-F1.pdf'),
(21, 'Planta 5', '3', 'EEMI-252', 'MSA-2019-0194', '2019-08-14 17:47:02', '2019-07-23', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 2', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '96853 Luis Sombras', 'PRODUCCION', 'PFPP2', 'Entrenamiento/MSA/MSA-2019-0194-96853-PFPP2-F2.pdf'),
(22, 'Planta 5', '3', 'N/A', 'MSA-2019-0169', '2019-08-14 18:16:53', '2019-07-16', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 1', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '83656 Adilene Meraz', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/MSA-2019-0169-86656-F1.pdf'),
(23, 'Planta 5', '3', 'EEMI-252', 'MSA-2019-0168', '2019-08-14 18:16:53', '2019-07-16', 'COAXIAL', 'N/A', 'COAXIAL', 'GRR-Variables-Replicas', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'Fase 2', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '83656 Adilene Meraz', 'PRODUCCION', 'PFPP2', 'Entrenamiento/MSA/MSA-2019-0168-86656-PFPP2-F2.pdf'),
(24, 'Planta 5', '3', 'N/A', 'N/A', '2019-08-14 18:22:06', '2019-07-16', 'COAXIAL', 'N/A', 'COAXIAL', 'EXAMEN', 'Miriam Osuna', 'Miriam Osuna', 'Darey Quiroa', 'EXAMEN', 'Aceptado', 'Coria Rubicel', 'Coria Rubicel', 'SPC', '83656 Adilene Meras', 'PRODUCCION', 'N/A', 'Entrenamiento/MSA/EXAMEN MSA 83656.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `id` int(11) NOT NULL,
  `planta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `id_esm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `srecord` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fechaalt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaes` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `wc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `np` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `estacion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `requiere` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ingmanu` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ingcal` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tecspc` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cavidades` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `comentarios` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `op1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `op2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `op3` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`id`, `planta`, `tipo`, `id_esm`, `srecord`, `fechaalt`, `fechaes`, `wc`, `np`, `estacion`, `requiere`, `ingmanu`, `ingcal`, `resultado`, `tecspc`, `cavidades`, `comentarios`, `op1`, `op2`, `op3`, `ruta`) VALUES
(19, 'Planta 5', '4', 'EEMI-252', 'MSA-2019-0220', '2019-08-14 17:56:48', '2019-08-05', 'COAXIAL', 'N/A', 'COAXIAL', 'Miriam Osuna', 'Darey Quiroa', 'Miriam Osuna', 'ACEPTADO', 'Coria Rubicel', 'N/A', 'Entrenamiento', '23199', '86656', '96853', 'MSA/GRR Variables/MSA-2019-0220-23199-86656-96853-PFPP2-EEMI-252.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `performance`
--

CREATE TABLE `performance` (
  `id` int(11) NOT NULL,
  `planta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `equipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `srecord` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaalt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fechaes` date NOT NULL,
  `wc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `np` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `requiere` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ingmanu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ingcal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` text COLLATE utf8_unicode_ci NOT NULL,
  `tecspc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cavidades` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `op1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `op2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `op3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `revte` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `npcliente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `revcliente` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `str10` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'colaborador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `username`, `password`, `rol_id`) VALUES
(11, 'Jose', 'TE363030', 'Tyco2019', 1),
(12, 'Victor', 'GT068271', 'Maryant13', 1),
(13, 'Moises', 'TE303595', 'Tyco2019', 1),
(14, 'Francisco', 'TE342618', 'Tyco2019', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibk_1` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrenamiento`
--
ALTER TABLE `entrenamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `performance`
--
ALTER TABLE `performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
