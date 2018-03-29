-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2018 a las 12:58:29
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(10) NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `user`, `pass`) VALUES
(1, 'kamina', '123456'),
(2, 'mafias', '123123'),
(3, 'DELETEFROM', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE `formularios` (
  `user_id` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `emprea_cargo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `empresa_empresa` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `empresa_email` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `empresa_telefono` int(15) NOT NULL,
  `empresa_obs` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `chk_servicio` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `chk_metodo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `chk_motivo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `formularios`
--

INSERT INTO `formularios` (`user_id`, `empresa_nombre`, `emprea_cargo`, `empresa_empresa`, `empresa_email`, `empresa_telefono`, `empresa_obs`, `chk_servicio`, `chk_metodo`, `chk_motivo`, `fecha`) VALUES
('3', 'Federico De cara', 'DEV', 'OIXXIO', 'Kamina1233@gmail.com', 2147483647, 'NO TE OLVIDES DE PONER EL WHERE EN EL DELETE FROM .-( https://www.youtube.com/watch?v=jsuerKRsEyA )', 'Sist. de Gestio', 'SAAS', 'Demo', '2018-03-28'),
('1', 'asd', 'asd', 'asd', 'asd', 0, 'asd', 'Consultoria', 'SAAS', 'Presupuesto', '2018-03-28'),
('1', 'test', 'cargotxt', 'Hola SA', 'lolimaker5000@gmail.com', 116356513, 'piratas!!!!!!!', 'tipotxt', 'SAAS', 'motivTXT', '2018-03-28'),
('1', 'Federico De cara', 'pirata', 'Hola SA', 'Kamina1233@gmail.com', 2147483647, 'OBS', 'Consultoria', 'SAAS', 'Presupuesto', '2018-03-28'),
('3', 'Federico Dede', 'MAFIA', 'Guild SA', 'Guild@Dungeon.com.ar', 2147483647, 'QUE BUENO QUE ES IR A CAZAR', 'Consultoria', 'SAAS', 'Presupuesto', '2018-03-29'),
('3', 'Dragon', 'Guardia', 'CaveSA', 'Dont-Take-My-Stuff@AncientCast', 123456789, 'ES MI TESORO!!!!', 'Consultoria', 'SAAS', 'Presupuesto', '2018-03-29'),
('3', 'test', 'test', 'test', 'test', 0, 'test', 'Consultoria', 'SAAS', 'Presupuesto', '2018-03-29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
