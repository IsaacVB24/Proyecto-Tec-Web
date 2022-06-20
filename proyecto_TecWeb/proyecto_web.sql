-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2022 a las 20:37:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `boletaA` int(10) NOT NULL,
  `nombreA` varchar(30) NOT NULL,
  `apellidosA` varchar(30) NOT NULL,
  `telefonoA` int(10) NOT NULL,
  `correoA` varchar(30) NOT NULL,
  `passwordA` varchar(30) NOT NULL,
  `semestreA` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catt`
--

CREATE TABLE `catt` (
  `correo` varchar(30) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `idCatt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `nombreEquipo` varchar(30) NOT NULL,
  `apellidoEquipo` varchar(45) NOT NULL,
  `boletaEquipo` int(10) NOT NULL,
  `correoEquipo` int(45) NOT NULL,
  `fotoEquipo` longblob NOT NULL,
  `BoletaA` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `nombreP` varchar(45) NOT NULL,
  `matricula` int(10) NOT NULL,
  `cv` longblob DEFAULT NULL,
  `correoP` varchar(45) NOT NULL,
  `passwordP` varchar(30) NOT NULL,
  `apellidosP` varchar(30) NOT NULL,
  `telefonoP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor-tt`
--

CREATE TABLE `profesor-tt` (
  `idTT` int(10) NOT NULL,
  `matricula` int(10) NOT NULL,
  `puesto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajoterminal`
--

CREATE TABLE `trabajoterminal` (
  `idTT` int(10) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `resumen` longblob NOT NULL,
  `boleta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`boletaA`);

--
-- Indices de la tabla `catt`
--
ALTER TABLE `catt`
  ADD PRIMARY KEY (`idCatt`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD KEY `fk_equipo` (`BoletaA`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `profesor-tt`
--
ALTER TABLE `profesor-tt`
  ADD KEY `fk_profesor` (`matricula`),
  ADD KEY `fk_tt` (`idTT`);

--
-- Indices de la tabla `trabajoterminal`
--
ALTER TABLE `trabajoterminal`
  ADD PRIMARY KEY (`idTT`),
  ADD KEY `fk_alumno` (`boleta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catt`
--
ALTER TABLE `catt`
  MODIFY `idCatt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajoterminal`
--
ALTER TABLE `trabajoterminal`
  MODIFY `idTT` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo` FOREIGN KEY (`BoletaA`) REFERENCES `alumno` (`boletaA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor-tt`
--
ALTER TABLE `profesor-tt`
  ADD CONSTRAINT `fk_profesor` FOREIGN KEY (`matricula`) REFERENCES `profesor` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tt` FOREIGN KEY (`idTT`) REFERENCES `trabajoterminal` (`idTT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajoterminal`
--
ALTER TABLE `trabajoterminal`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`boleta`) REFERENCES `alumno` (`boletaA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
