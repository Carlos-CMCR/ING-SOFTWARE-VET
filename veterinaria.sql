-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 23:01:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombres_cl` varchar(250) NOT NULL,
  `apellidos_cl` varchar(250) NOT NULL,
  `num_documento` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombres_cl`, `apellidos_cl`, `num_documento`) VALUES
(1, 'Jose', 'Mirna', 70279545),
(2, 'Miriam', 'Larico', 78456598),
(11, 'Carmen', 'Lorenzo de la Cruz', 78986545),
(12, 'Cristian', 'Chipana Huaman', 45789865),
(13, 'Oriana', 'Ramos Salcedo', 70758684),
(14, 'Candiotty', 'Chavez Navarro', 45698745),
(15, 'Romani', 'Vasquez De la Cruz', 45789865),
(16, 'Carmen', 'Lima Tesla', 78456589),
(17, 'Lady Emilyn', 'Ayala Pfuturi', 70528965),
(18, 'Rosario', 'Paco Lindo', 45678945),
(19, 'Ricardo', 'Ayala Quispe', 78986545),
(20, 'Lucio', 'Quispe Chavez', 98785445),
(21, 'Luis', 'Flores Garcia', 75631498),
(22, 'Luis', 'Flores Garcia', 75631498),
(23, 'Rosa', 'Gonzales Palacios', 65212486),
(24, 'Miguel', 'Terrones Salazar', 95368564),
(25, 'Romani', 'Vasquez De la Cruz', 45789865),
(26, 'Juan', 'Fernandez Arango', 74259146),
(27, 'Gonzalo', 'Guerrero Palacios', 74125834),
(28, 'Feliciano', 'Requejo Rueda', 71429514),
(29, 'Sonia', 'Salvatierra Gomez', 74379504),
(1, 'Jose', 'Mirna', 70279545),
(2, 'Miriam', 'Larico', 78456598),
(11, 'Carmen', 'Lorenzo de la Cruz', 78986545),
(12, 'Cristian', 'Chipana Huaman', 45789865),
(13, 'Oriana', 'Ramos Salcedo', 70758684),
(14, 'Candiotty', 'Chavez Navarro', 45698745),
(15, 'Romani', 'Vasquez De la Cruz', 45789865),
(16, 'Carmen', 'Lima Tesla', 78456589),
(17, 'Lady Emilyn', 'Ayala Pfuturi', 70528965),
(18, 'Rosario', 'Paco Lindo', 45678945),
(19, 'Ricardo', 'Ayala Quispe', 78986545),
(20, 'Lucio', 'Quispe Chavez', 98785445),
(21, 'Luis', 'Flores Garcia', 75631498),
(22, 'Luis', 'Flores Garcia', 75631498),
(23, 'Rosa', 'Gonzales Palacios', 65212486),
(24, 'Miguel', 'Terrones Salazar', 95368564),
(25, 'Romani', 'Vasquez De la Cruz', 45789865),
(26, 'Juan', 'Fernandez Arango', 74259146),
(27, 'Gonzalo', 'Guerrero Palacios', 74125834),
(28, 'Feliciano', 'Requejo Rueda', 71429514),
(29, 'Sonia', 'Salvatierra Gomez', 74379504);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_rol`
--

CREATE TABLE `detalle_rol` (
  `iddet_rol` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_rol`
--

INSERT INTO `detalle_rol` (`iddet_rol`, `idusuario`, `idrol`, `estado`) VALUES
(1, 1, 4, 'activo'),
(4, 4, 4, 'activo'),
(54, 61, 1, ''),
(55, 62, 1, ''),
(61, 68, 1, ''),
(62, 77, 1, ''),
(63, 78, 1, ''),
(64, 78, 1, ''),
(65, 78, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `foto_producto` varchar(250) NOT NULL,
  `nom_producto` varchar(250) NOT NULL,
  `prec_uni_producto` float NOT NULL,
  `prec_promo_producto` float NOT NULL,
  `tot_cant_producto` varchar(300) NOT NULL,
  `estado_producto` varchar(20) NOT NULL,
  `descrip_producto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `foto_producto`, `nom_producto`, `prec_uni_producto`, `prec_promo_producto`, `tot_cant_producto`, `estado_producto`, `descrip_producto`) VALUES
(47, 'listaDeTareas.png', 'hueso', 100, 2200, '50', '0', 'ertertert'),
(48, '', 'Consulta Veterinaria', 0, 0, 'En Vet-Spa, contamos con el personal médico más completo para la consulta veterinaria de su mascota, siempre estará en manos de los mejores profesionales.', '1', ''),
(49, 'consulta.jpg', 'Consulta Veterinaria', 40, 50, 'En Vet-Spa, contamos con el personal médico más completo para la consulta veterinaria de su mascota, siempre estará en manos de los mejores profesionales.', '1', 'asfsadfasf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cambios`
--

CREATE TABLE `registro_cambios` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_cambios`
--

INSERT INTO `registro_cambios` (`id`, `idusuario`, `accion`, `fecha`, `descripcion`) VALUES
(1, 1, 'editar', '2021-07-26 11:30:12', 'a a'),
(2, 1, 'editar', '2021-07-26 18:52:44', 'Cajero a Dispensador'),
(3, 1, 'editar', '2021-07-26 18:54:20', 'Cajero a Dispensador'),
(4, 1, 'editar', '2021-07-26 18:54:33', 'Cajero a Vendedor'),
(5, 1, 'editar', '2021-07-26 18:54:37', 'Cajero a Vendedor'),
(6, 1, 'editar', '2021-07-26 18:55:01', 'Cajero a Vendedor'),
(7, 1, 'editar', '2021-07-26 18:55:05', 'Cajero a Dispensador'),
(8, 1, 'editar', '2021-07-26 19:03:24', 'Cajero a Operador Logistico'),
(9, 1, 'editar', '2021-07-26 19:03:29', 'Cajero a Operador Logistico'),
(10, 3, 'editar', '2021-07-26 19:03:36', 'Dispensador a Recepcionista'),
(11, 3, 'editar', '2021-07-26 10:06:03', 'Dispensador a Recepcionista'),
(12, 3, 'editar', '2021-07-26 10:06:17', 'Dispensador a Recepcionista'),
(13, 1, 'editar', '2021-07-26 10:06:20', 'Cajero a Dispensador'),
(14, 1, 'editar', '2021-07-26 12:06:51', 'Cajero a Dispensador'),
(15, 1, 'editar', '2021-07-26 12:06:54', 'Cajero a Operador Logistico'),
(16, 1, 'editar', '2021-07-26 12:07:27', 'Cajero a Operador Logistico'),
(17, 5, 'editar', '2021-07-26 12:07:31', 'Operador Logistico a Vendedor'),
(18, 5, 'editar', '2021-07-26 12:13:27', 'Operador Logistico a Vendedor'),
(19, 1, 'editar', '2021-07-26 12:13:33', 'Cajero a Dispensador'),
(20, 1, 'editar', '2021-07-26 12:14:35', 'Cajero a Dispensador'),
(21, 1, 'editar', '2021-07-26 12:15:28', 'Cajero a Dispensador'),
(22, 1, 'editar', '2021-07-26 12:20:31', 'Cajero a Vendedor'),
(23, 17, 'editar', '2021-07-26 13:30:14', 'Administrador a Cajero'),
(24, 17, 'editar', '2021-07-26 13:37:58', 'Cajero a Administrador'),
(25, 1, 'editar', '2021-07-26 14:09:54', 'Vendedor a Cajero'),
(26, 6, 'editar', '2021-07-26 14:29:11', 'Dispensador a Cajero'),
(27, 1, 'editar', '2021-07-26 14:54:06', 'Cajero a Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`, `estado`) VALUES
(1, 'Cliente', 'activo'),
(4, 'Administrador', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `num_doc` varchar(12) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `estado_cuenta` varchar(10) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `pass_user`, `nombres`, `apellidos`, `num_doc`, `celular`, `correo`, `respuesta`, `estado_cuenta`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, 'ingenieria', 'Jorgee', 'Chavez Candiotty', '11111111', '995335449', 'jorgechavez_199524@gmail.com', 'peluza', 'activo', '2021-11-18 21:58:10', '2021-07-13 03:18:54'),
(4, 'cliente123123', 'Oriana', 'Ramos Salcedo', '44444444', '981234567', 'oriana@gmail.com', 'Lapadula', 'inactivo', '2021-11-16 07:00:13', '2021-07-13 03:19:56'),
(61, 'cliente123', 'Paul Kevin', 'Del Aguila Caute', '22222222', '999999999', 'PaulKevin@gmail.com', 'coliflor', 'activo', '2021-11-18 17:15:11', '2021-10-29 01:11:38'),
(62, 'cliente123', 'Jairoo', 'Villacrizz', '33333333', '983476541', 'jairo@gmail.com', 'fresa', 'activo', '2021-11-03 10:23:21', '2021-10-29 01:12:40'),
(68, 'ingenieria123', 'Carlos', 'Carbajal', '55555555', '987654321', 'carlos@gmail.com', 'pollito', 'activo', '2021-11-18 21:56:06', '2021-11-16 02:22:43'),
(77, '123123', 'Jorgee', 'Chavez', '71722521', '999999999', 'jorgechavez199524@gmail.com', '', 'activo', '2021-11-16 08:52:22', '2021-11-16 07:00:56'),
(78, '234', 'Jorge', 'Chavez', '71722527', '995335449', 'jorgechavez199524@gmail.com', '', 'activo', '2021-11-17 02:35:43', '2021-11-17 02:35:43'),
(79, 'lapadula', 'Jorge 2', 'Chavez', '71722527', '999999999', 'correo@hotmail.com', '', 'activo', '2021-11-18 01:30:19', '2021-11-18 01:30:19'),
(80, '234', 'Jorge', 'Chavez', '71722527', '995335449', 'jorgechavez199524@gmail.com', '', 'activo', '2021-11-18 03:26:28', '2021-11-18 03:26:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `cliente` (`idcliente`);

--
-- Indices de la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  ADD PRIMARY KEY (`iddet_rol`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD KEY `producto` (`idproducto`);

--
-- Indices de la tabla `registro_cambios`
--
ALTER TABLE `registro_cambios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`),
  ADD KEY `rol` (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario_2` (`idusuario`),
  ADD UNIQUE KEY `idusuario_3` (`idusuario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  MODIFY `iddet_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `registro_cambios`
--
ALTER TABLE `registro_cambios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  ADD CONSTRAINT `detalle_rol_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_rol_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
