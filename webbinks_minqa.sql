-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2018 a las 20:18:24
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webbinks_minqa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mp_emprendimiento`
--

CREATE TABLE IF NOT EXISTS `mp_emprendimiento` (
  `emd_id` int(11) NOT NULL,
  `emd_emp_id` int(11) DEFAULT NULL,
  `emd_cli_id` int(11) DEFAULT NULL,
  `emd_nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emd_descripcion` text COLLATE utf8_unicode_ci,
  `emd_tipo_moneda` int(11) DEFAULT NULL,
  `emd_monto` decimal(20,4) DEFAULT NULL,
  `emd_fecha_registro` date DEFAULT NULL,
  `emd_hora_registro` time DEFAULT NULL,
  `emd_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mp_emprendimiento`
--

INSERT INTO `mp_emprendimiento` (`emd_id`, `emd_emp_id`, `emd_cli_id`, `emd_nombre`, `emd_descripcion`, `emd_tipo_moneda`, `emd_monto`, `emd_fecha_registro`, `emd_hora_registro`, `emd_estado`) VALUES
(1, 1, 1, 'Laboratorios digitales', 'Nulla sed ante at leo feugiat interdum at eu diam. Nunc convallis laoreet purus vitae maximus. Morbi consequat purus non mi cursus, et sodales libero porttitor.', 1, '50000.0000', '2018-05-26', NULL, 1),
(2, 2, 2, 'Baños Portatiles', 'Nulla sed ante at leo feugiat interdum at eu diam. Nunc convallis laoreet purus vitae maximus. Morbi consequat purus non mi cursus, et sodales libero porttitor.', 1, '30200.0000', '2018-05-26', NULL, 1),
(3, 2, 2, 'Hospedaje para mascotas', 'Nulla sed ante at leo feugiat interdum at eu diam. Nunc convallis laoreet purus vitae maximus. Morbi consequat purus non mi cursus, et sodales libero porttitor.', 1, '10000.0000', '2018-05-26', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mq_cliente`
--

CREATE TABLE IF NOT EXISTS `mq_cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_tdc_id` int(11) DEFAULT NULL,
  `cli_dni` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_apellido_paterno` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_apellido_materno` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_fecha_nacimiento` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cli_sexo` tinyint(1) DEFAULT NULL,
  `cli_estado` tinyint(1) DEFAULT NULL,
  `cli_fecha_registro` date DEFAULT NULL,
  `cli_hora_registro` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mq_cliente`
--

INSERT INTO `mq_cliente` (`cli_id`, `cli_tdc_id`, `cli_dni`, `cli_nombre`, `cli_apellido_paterno`, `cli_apellido_materno`, `cli_fecha_nacimiento`, `cli_sexo`, `cli_estado`, `cli_fecha_registro`, `cli_hora_registro`) VALUES
(1, 1, '28394837', 'Juan', 'Perez', 'Tello', NULL, 1, 1, NULL, NULL),
(2, 1, '34567402', 'Luisa', 'Vargas', 'Tello', NULL, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mq_empresa`
--

CREATE TABLE IF NOT EXISTS `mq_empresa` (
  `emp_id` int(11) NOT NULL,
  `emp_ruc` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_razon_social` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emp_descripcion` text COLLATE utf8_unicode_ci,
  `emp_estado` tinyint(1) DEFAULT NULL,
  `emp_fecha_registro` date DEFAULT NULL,
  `emp_hora_registro` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mq_empresa`
--

INSERT INTO `mq_empresa` (`emp_id`, `emp_ruc`, `emp_razon_social`, `emp_descripcion`, `emp_estado`, `emp_fecha_registro`, `emp_hora_registro`) VALUES
(1, '3455632345643', 'Qode SAC', 'Nulla sed ante at leo feugiat interdum at eu diam. Nunc convallis laoreet purus vitae maximus. Morbi consequat purus non mi cursus, et sodales libero porttitor.', 1, '2018-05-26', NULL),
(2, '3234454546564', 'Minqa SAC', 'Nulla sed ante at leo feugiat interdum at eu diam. Nunc convallis laoreet purus vitae maximus. Morbi consequat purus non mi cursus, et sodales libero porttitor.', 1, '2018-05-26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mq_inversion`
--

CREATE TABLE IF NOT EXISTS `mq_inversion` (
  `inv_id` int(11) NOT NULL,
  `inv_cli_id` int(11) DEFAULT NULL,
  `inv_emp_id` int(11) DEFAULT NULL,
  `inv_emd_id` int(11) DEFAULT NULL,
  `inv_tipo_moneda` int(11) DEFAULT NULL,
  `inv_inversion` decimal(20,2) DEFAULT NULL,
  `inv_ganancia` decimal(20,2) DEFAULT NULL,
  `inv_capital_actual` decimal(20,2) DEFAULT NULL,
  `inv_diferencia` decimal(20,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mq_inversion`
--

INSERT INTO `mq_inversion` (`inv_id`, `inv_cli_id`, `inv_emp_id`, `inv_emd_id`, `inv_tipo_moneda`, `inv_inversion`, `inv_ganancia`, `inv_capital_actual`, `inv_diferencia`) VALUES
(1, 1, 1, 1, 1, '1500.00', '350.00', '1850.00', '20.00'),
(2, 1, 1, 3, 1, '3000.00', '200.00', '800.00', '29.00'),
(3, 1, 1, 2, 1, '24000.00', '250.00', '780.00', '30.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mq_modulo`
--

CREATE TABLE IF NOT EXISTS `mq_modulo` (
  `mod_id` int(11) NOT NULL,
  `mod_nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_key` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_icon` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_padre` int(11) DEFAULT '0',
  `mod_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mq_usuario`
--

CREATE TABLE IF NOT EXISTS `mq_usuario` (
  `usr_id` int(11) NOT NULL,
  `usr_nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_apellido_paterno` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_usuario` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_clave` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usr_estado` tinyint(1) DEFAULT NULL,
  `usr_fecha_registro` date DEFAULT NULL,
  `usr_hora_registro` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mp_emprendimiento`
--
ALTER TABLE `mp_emprendimiento`
  ADD PRIMARY KEY (`emd_id`);

--
-- Indices de la tabla `mq_cliente`
--
ALTER TABLE `mq_cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indices de la tabla `mq_empresa`
--
ALTER TABLE `mq_empresa`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indices de la tabla `mq_inversion`
--
ALTER TABLE `mq_inversion`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indices de la tabla `mq_modulo`
--
ALTER TABLE `mq_modulo`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `mq_usuario`
--
ALTER TABLE `mq_usuario`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mp_emprendimiento`
--
ALTER TABLE `mp_emprendimiento`
  MODIFY `emd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mq_cliente`
--
ALTER TABLE `mq_cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mq_empresa`
--
ALTER TABLE `mq_empresa`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mq_inversion`
--
ALTER TABLE `mq_inversion`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `mq_modulo`
--
ALTER TABLE `mq_modulo`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mq_usuario`
--
ALTER TABLE `mq_usuario`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
