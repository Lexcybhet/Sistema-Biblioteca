-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2019 a las 05:18:41
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_acceso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `Cedula_Beneficiario` int(10) NOT NULL,
  `Nombre_Beneficiario` varchar(15) NOT NULL,
  `Apellido_Beneficiario` varchar(15) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Tipo_Beneficiario` varchar(20) NOT NULL,
  `Carrera` varchar(30) NOT NULL,
  `Correo_Beneficiario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`Cedula_Beneficiario`, `Nombre_Beneficiario`, `Apellido_Beneficiario`, `Genero`, `Tipo_Beneficiario`, `Carrera`, `Correo_Beneficiario`) VALUES
(1465849, 'Angel', 'Ramirez', 'MASCULINO', 'docente', 'turismo', 'asgh@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `Codigo` varchar(8) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  `Marca` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`Codigo`, `Estado`, `Marca`) VALUES
('0', 'FUERASERVICIO', 'Lenovo'),
('12', 'FUNCIONAL', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `Hora_Entrada` datetime NOT NULL,
  `Hora_Salida` datetime NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `idEstacion` varchar(11) NOT NULL,
  `IdBeneficiario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Cedula_Usuario` int(10) NOT NULL,
  `Nombre_Usuario` varchar(15) NOT NULL,
  `Apellido_Usuario` varchar(15) NOT NULL,
  `Tipo_Usuario` varchar(15) NOT NULL,
  `Correo_Usuario` varchar(30) NOT NULL,
  `Contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Cedula_Usuario`, `Nombre_Usuario`, `Apellido_Usuario`, `Tipo_Usuario`, `Correo_Usuario`, `Contrasena`) VALUES
(123456, 'Angel', 'Ramirez', 'ENCARGADO', 'angel@gmail.com', '123445'),
(1593022, 'Maria', 'Romero', 'ENCARGADO', 'maria@gmail.com', '1234'),
(14400416, 'Marilexci', 'Carrillo', 'ENCARGADO', 'lexcim@gmail.com', '123456'),
(15930224, 'Maria', 'Romero', 'ENCARGADO', 'maria@gmail.com', '1234'),
(26931185, 'Lexcybhet', 'Rangel', 'ADMINISTRADOR', 'lexcybhetnr@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`Cedula_Beneficiario`);

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_registros_usuarios` (`IdUsuario`),
  ADD KEY `fk_registros_beneficiarios` (`IdBeneficiario`),
  ADD KEY `fk_registros_estaciones` (`idEstacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Cedula_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `fk_registros_beneficiarios` FOREIGN KEY (`IdBeneficiario`) REFERENCES `beneficiario` (`Cedula_Beneficiario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_registros_estaciones` FOREIGN KEY (`idEstacion`) REFERENCES `estaciones` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_registros_usuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Cedula_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
