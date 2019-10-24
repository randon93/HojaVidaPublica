-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 19:58:43
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hojadevidaa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basica`
--

CREATE TABLE `basica` (
  `id` int(3) NOT NULL,
  `fechaGrado` date DEFAULT NULL,
  `curso` varchar(20) DEFAULT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `persona` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `basica`
--

INSERT INTO `basica` (`id`, `fechaGrado`, `curso`, `titulo`, `persona`) VALUES
(14, '2019-10-15', 'Educacion Inicial', 'INICIO', '1090464770');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `municipio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `nombre`, `municipio`) VALUES
(1, 'qwe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleoactual`
--

CREATE TABLE `empleoactual` (
  `id` int(3) NOT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `publica` int(1) DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL,
  `fechaRetiro` date DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `dependencia` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `persona` varchar(10) DEFAULT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleoactual`
--

INSERT INTO `empleoactual` (`id`, `empresa`, `publica`, `fechaIngreso`, `fechaRetiro`, `cargo`, `dependencia`, `direccion`, `persona`, `pais`) VALUES
(5, 'UFPS', 1, '2019-10-06', '2019-10-23', 'JEFE', 'SISTEMAS', 'NO ME LA SE 1234', '1090464770', 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habla`
--

CREATE TABLE `habla` (
  `id` int(3) NOT NULL,
  `persona` varchar(10) DEFAULT NULL,
  `idioma` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id` int(3) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`) VALUES
(1, 'qwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `departamento` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `departamento`) VALUES
(0, 'colombia', 0),
(2, 'venezuela', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nombre` varchar(15) DEFAULT NULL,
  `apellidoUno` varchar(20) DEFAULT NULL,
  `apellidoDos` varchar(20) DEFAULT NULL,
  `tipoDoc` int(11) DEFAULT NULL,
  `documento` varchar(10) NOT NULL,
  `sexo` int(1) DEFAULT NULL,
  `nacionalidad` int(3) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `apellidoUno`, `apellidoDos`, `tipoDoc`, `documento`, `sexo`, `nacionalidad`, `correo`, `telefono`) VALUES
('javier', 'garcia', 'maldonado', 0, '1090464770', 1, 0, 'jbgm93@gmail.com', '3105789665');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(1) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`) VALUES
(0, 'cedula'),
(1, 'pasaporte');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `basica`
--
ALTER TABLE `basica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_basica_persona` (`persona`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipio` (`municipio`);

--
-- Indices de la tabla `empleoactual`
--
ALTER TABLE `empleoactual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona` (`persona`);

--
-- Indices de la tabla `habla`
--
ALTER TABLE `habla`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idioma` (`idioma`),
  ADD KEY `persona` (`persona`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `tipoDoc` (`tipoDoc`),
  ADD KEY `nacionalidad` (`nacionalidad`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `basica`
--
ALTER TABLE `basica`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleoactual`
--
ALTER TABLE `empleoactual`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `habla`
--
ALTER TABLE `habla`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `basica`
--
ALTER TABLE `basica`
  ADD CONSTRAINT `fk_basica_persona` FOREIGN KEY (`persona`) REFERENCES `persona` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_dep_municipio` FOREIGN KEY (`municipio`) REFERENCES `municipio` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleoactual`
--
ALTER TABLE `empleoactual`
  ADD CONSTRAINT `empleoactual_ibfk_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `habla`
--
ALTER TABLE `habla`
  ADD CONSTRAINT `habla_ibfk_1` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `habla_ibfk_2` FOREIGN KEY (`persona`) REFERENCES `persona` (`documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`tipoDoc`) REFERENCES `tipo_documento` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`nacionalidad`) REFERENCES `pais` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
