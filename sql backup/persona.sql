-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2020 a las 16:39:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `main`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `dni` int(11) NOT NULL CHECK (`dni` > 0),
  `apellido` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fechaNac` date DEFAULT NULL,
  `codArea` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `fechaEmi` date DEFAULT NULL,
  `domicilio` varchar(30) DEFAULT NULL,
  `cp` smallint(6) DEFAULT NULL CHECK (`cp` > 999 and `cp` < 9999)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`dni`, `apellido`, `nombre`, `sexo`, `fechaNac`, `codArea`, `telefono`, `correo`, `fechaEmi`, `domicilio`, `cp`) VALUES
(43516284, 'Gomez', 'Nicolas', 'M', '2006-02-12', '11', '23324343', 'nicogomez@gmail.com', '2020-11-01', 'Francia 1234', 1617),
(43516295, 'Felipe', 'Juan', 'M', '2005-12-01', '11', '62625915', 'felipejuan@gmail.com', '2020-11-01', 'Las Heras 9958', 1617),
(43516298, 'Rodriguez', 'Monica', 'M', '2006-02-01', '11', '21513659', 'moniro@gmail.com', '2020-11-01', 'Las Heras 5189', 1617),
(43849658, 'Gonzales', 'Agustin', 'M', '2006-02-12', '11', '21515968', 'agugonz@gmail.com', '2020-11-01', 'Francia 6125', 1619);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `cp` (`cp`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`cp`) REFERENCES `localidad` (`cp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
