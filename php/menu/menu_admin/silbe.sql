-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2016 a las 05:02:26
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_escolar`
--

CREATE TABLE `a_escolar` (
  `id_a` varchar(10) NOT NULL,
  `a` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `ced_e` varchar(15) NOT NULL,
  `ced_r` varchar(15) NOT NULL,
  `tipo_doc` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `f_naci` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `edo_civil` varchar(1) NOT NULL,
  `lateralidad` varchar(1) NOT NULL,
  `pais` varchar(15) NOT NULL,
  `edo` varchar(15) NOT NULL,
  `area_aten` varchar(50) NOT NULL,
  `progra_apoy` varchar(50) NOT NULL,
  `mun` varchar(15) NOT NULL,
  `parr` varchar(15) NOT NULL,
  `pobla` varchar(30) NOT NULL,
  `urbani` varchar(30) NOT NULL,
  `via` varchar(30) NOT NULL,
  `direc` varchar(50) NOT NULL,
  `zona` varchar(1) NOT NULL,
  `tip_vivi` varchar(1) NOT NULL,
  `ubi_vivi` varchar(1) NOT NULL,
  `esta_infra` varchar(1) NOT NULL,
  `cond_vivi` varchar(1) NOT NULL,
  `canaima` varchar(1) NOT NULL,
  `beca` varchar(1) NOT NULL,
  `ingre_fami` float NOT NULL,
  `tele_mov` varchar(11) NOT NULL,
  `tele_hab` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `estatura` float NOT NULL,
  `peso` float NOT NULL,
  `talla_cami` varchar(3) NOT NULL,
  `talla_pant` varchar(3) NOT NULL,
  `talla_zapa` varchar(3) NOT NULL,
  `id_gs` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` varchar(2) NOT NULL,
  `nombre` varchar(7) NOT NULL,
  `cod` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_seccion`
--

CREATE TABLE `grado_seccion` (
  `id_gs` varchar(2) NOT NULL,
  `id_grado` varchar(2) NOT NULL,
  `id_seccion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id_matri` varchar(2) NOT NULL,
  `id_a` varchar(10) NOT NULL,
  `ced_e` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `ced_r` varchar(15) NOT NULL,
  `tipo_doc` varchar(1) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `edo_civil` varchar(1) NOT NULL,
  `afinidad` varchar(1) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `edo` varchar(30) NOT NULL,
  `muni` varchar(30) NOT NULL,
  `parro` varchar(30) NOT NULL,
  `pobla` varchar(30) NOT NULL,
  `urbani` varchar(30) NOT NULL,
  `via` varchar(30) NOT NULL,
  `direc` varchar(50) NOT NULL,
  `tele_mov` varchar(11) NOT NULL,
  `tele_hab` varchar(11) NOT NULL,
  `tele_trab` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direc_trab` varchar(50) NOT NULL,
  `nombre_empre` varchar(50) NOT NULL,
  `profesion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` varchar(2) NOT NULL,
  `nombre` varchar(1) NOT NULL,
  `cod` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nom_user` varchar(30) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nivel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nom_user`, `user`, `pass`, `nivel`) VALUES
('Edicson Molina', 'edicson', '$2y$12$HM.76aXh/SjQGxbIrJhIaeUvaSp3GBpZQKzk/xXSW5sGU3XASJR3q', '1'),
('Nelson Molina', 'nelson', 'afc0a762ff45348639901afc1ac3701c', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `a_escolar`
--
ALTER TABLE `a_escolar`
  ADD PRIMARY KEY (`id_a`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`ced_e`),
  ADD KEY `ced_r` (`ced_r`),
  ADD KEY `id_grado` (`id_gs`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `grado_seccion`
--
ALTER TABLE `grado_seccion`
  ADD PRIMARY KEY (`id_gs`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_seccion` (`id_seccion`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matri`),
  ADD KEY `id_año` (`id_a`),
  ADD KEY `ced_e` (`ced_e`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`ced_r`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`ced_r`) REFERENCES `representante` (`ced_r`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`id_gs`) REFERENCES `grado_seccion` (`id_gs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grado_seccion`
--
ALTER TABLE `grado_seccion`
  ADD CONSTRAINT `grado_seccion_ibfk_1` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_seccion_ibfk_2` FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `a_escolar` (`id_a`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`ced_e`) REFERENCES `estudiante` (`ced_e`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
