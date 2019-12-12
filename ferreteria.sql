-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2019 a las 02:22:34
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `tamano` varchar(6) NOT NULL,
  `fardos` int(12) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha_de_ingreso` date NOT NULL,
  `costo` double NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `marca`, `tamano`, `fardos`, `descripcion`, `fecha_de_ingreso`, `costo`, `precio`) VALUES
(1, 'PELICANO', '5X10', 100, 'contiene 100 unidades', '2019-11-26', 14.5, 15.6),
(2, 'CHALAN', '5X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(3, 'TALON', '5X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(4, 'PELICANO', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(5, 'PAISANA', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(6, 'MISTI', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(7, 'NORTEÑA', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(8, 'TALON', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(9, 'INKA', '7X10', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(10, 'TALON INCA', '7X10', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(11, 'CHALAN', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(12, 'SAN CARLOS', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(13, 'PELICANO', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(14, 'INKA', '8X12', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(15, 'ESTRELLITA BELEN', '8X12', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(16, 'PAISANA', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(17, 'INKA', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(18, 'PATITO', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(19, 'NORTEÑA', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(20, 'ATLAS', '8X12', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(21, 'MISTI', '8X12', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(22, 'INKA VERDE (100)', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(23, 'INKA AZUL (90)', '8X12', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(24, 'GORRIONCITO', '8X12', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(25, 'CHALAN', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(26, 'SAN CARLOS', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(27, 'PELICANO', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(28, 'PAISANA', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(29, 'INKA', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(30, 'PATITO', '10X15', 100, 'contiene 100 unidades', '0000-00-00', 0, 0),
(31, 'NORTEÑA', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(32, 'ATLAS', '10X15', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(33, 'MISTI', '10X15', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(34, 'INKA', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(35, 'INKA (VERDE)', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(36, 'INKA', '10X15', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(37, 'INKA (AZUL)', '10X15', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(38, 'INKA', '10X15', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(39, 'GORRIONCITO', '10X15', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(40, 'ESTRELLITA BELEN', '10X15', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(41, 'INKA', '10X15', 70, 'contiene 70 unidades', '2019-11-26', 0, 0),
(42, 'ESTRELLITA DE MAR', '10X15', 70, 'contiene 70 unidades', '2019-11-26', 0, 0),
(43, 'MISTIANO', '10X15', 70, 'contiene 70 unidades', '2019-11-26', 0, 0),
(44, 'CHALAN', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(45, 'SAN CARLOS', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(46, 'MISTI', '12X17', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(47, 'PAISANA', '12X17', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(48, 'PATITO', '12X17', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(49, 'MISTI', '12X17', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(50, 'MISTI (ARQ.)', '12X17', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(51, 'MISTI (CHIM.)', '12X17', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(52, 'MISTI', '12X17', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(53, 'ATLAS (JUL.)', '12X17', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(54, 'INKA (VERDE)', '12X17', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(55, 'INKA (AZUL)', '12X17', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(56, 'GORRIONCITO', '12X17', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(57, 'MISTI', '13X19', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(58, 'MISTI COLOR', '14X20', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(59, 'MISTI', '14X20', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(60, 'CISNE', '5X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(61, 'CISNE', '7X10', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(62, 'CISNE', '8X12', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(63, 'CISNE', '10X15', 100, 'contiene 100 unidades', '2019-11-26', 0, 0),
(64, 'CISNE', '12X17', 90, 'contiene 90 unidades', '2019-11-26', 0, 0),
(65, 'CISNE', '14X20', 80, 'contiene 80 unidades', '2019-11-26', 0, 0),
(67, 'movistar', '14x10', 1000, 'gddfhf', '2019-11-02', 4.5, 6.4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilegio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `user`, `password`, `privilegio`) VALUES
(1, 'anabel', '123456', '1'),
(2, 'manuel', '123456', '2'),
(3, 'juan', '123456', '2'),
(4, 'edison', '123456', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `costo` double NOT NULL,
  `precio` double NOT NULL,
  `utilidad` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `usuario`, `fecha`, `costo`, `precio`, `utilidad`) VALUES
(1, 'juan', '2019-11-24', 100.5, 80.9, 19.6),
(2, 'juan', '2019-11-24', 200, 350, 150),
(3, 'juan', '2019-11-24', 50, 60, 10),
(4, 'rodrigo', '2019-11-24', 500.36, 700.14, 199.78);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
