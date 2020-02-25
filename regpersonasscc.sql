-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 01:15:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regpersonasscc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lugarexp` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nu` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`id`, `nombres`, `apellidos`, `cedula`, `lugarexp`, `tel`, `correo`, `nu`, `password`) VALUES
(2, 'Maria Luisa', 'Rodriguez Zapata', '12345678', 'Bogota', '321456789', 'marialu@hotmail.com', 'MALUROZA', 'maluroza2'),
(3, 'Luisa', 'Garcia', '13456765', 'Bogota', '323456786', 'luga@hotmail.com', 'LuGa', 'LuisaGarcia'),
(4, 'Cristhian Javier', 'Ruiz Leon', '1234567800', 'Bogota', '321345678', 'cruizleon@gmail.com', 'CruizLeon', 'cruleon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nu` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nu`, `password`) VALUES
(5, 'MALUROZA', 'maluroza2'),
(6, 'LuGa', 'LuisaGarcia'),
(7, 'CruizLeon', 'cruleon'),
(8, 'MALUROZA', 'maluroza2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regcarro`
--

CREATE TABLE `regcarro` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regcarro`
--

INSERT INTO `regcarro` (`id`, `marca`, `modelo`, `color`, `placa`, `ciudad`, `usuario`) VALUES
(5, 'Volkswagen TIIDA', '2019', 'Gris', 'CVY 009', 'Bogota', 'Cristhian Javier Ruiz'),
(6, 'Land Rover', 'Discovery', 'Blanco', 'UYH 409', 'Bogota', 'Luisa Garcia'),
(7, 'Audi', 'A4', 'Rojo', 'POU 657', 'NY', 'Maria Luisa Rodriguez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `regcarro`
--
ALTER TABLE `regcarro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `regcarro`
--
ALTER TABLE `regcarro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
