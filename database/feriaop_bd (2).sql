-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2020 a las 19:47:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `feriaop_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE IF NOT EXISTS `auditoria` (
  `cod_auditoria` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tabla` varchar(20) DEFAULT NULL,
  `accion` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`cod_auditoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `cod_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nom_carrea` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_tecnica`
--

DROP TABLE IF EXISTS `f_tecnica`;
CREATE TABLE IF NOT EXISTS `f_tecnica` (
  `cod_f_tecnica` int(11) NOT NULL AUTO_INCREMENT,
  `nom_f_tecnica` varchar(30) DEFAULT NULL,
  `f_inicio_f_tecnica` date DEFAULT NULL,
  `f_final_f_tecnica` date DEFAULT NULL,
  `ins_f_tecnica` varchar(50) DEFAULT NULL,
  `cod_exp` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_f_tecnica`),
  KEY `EXPERIENCIA_LABORAL_F_TECNICA_FK` (`cod_exp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

DROP TABLE IF EXISTS `certificacion`;
CREATE TABLE IF NOT EXISTS `certificacion` (
  `cod_certificacion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_certificacion` varchar(30) DEFAULT NULL,
  `f_inicio_f_tecnica` date DEFAULT NULL,
  `f_final_f_tecnica` date DEFAULT NULL,
  `ins_f_tecnica` varchar(50) DEFAULT NULL,
  `cant_horas` int(11) DEFAULT NULL,
  `cod_exp` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_certificacion`),
  KEY `EXPERIENCIA_LABORAL_CERTIFICACION_FK` (`cod_exp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `cod_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ciudad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `cod_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(50) DEFAULT NULL,
  `nom_comercial` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `cod_t_empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_empresa`),
  KEY `EMPRESA_TIPO_EMPRESA_FK` (`cod_t_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `cod_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nom_estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `cod_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nom_estudiante` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `lim_oferta` int(11) DEFAULT NULL,
  `contrasenia` varchar(50) DEFAULT NULL,
  `cod_ciudad` int(11) DEFAULT NULL,
  `cod_carrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_estudiante`),
  KEY `ESTUDIANTE_CIUDAD_FK` (`cod_ciudad`),
  KEY `ESTUDIANTE_CARRERA_FK` (`cod_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_laboral`
--

DROP TABLE IF EXISTS `exp_laboral`;
CREATE TABLE IF NOT EXISTS `exp_laboral` (
  `cod_exp` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `objetivo` varchar(250) DEFAULT NULL,
  `fun_principales` varchar(250) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`cod_exp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion_academica`
--

DROP TABLE IF EXISTS `formacion_academica`;
CREATE TABLE IF NOT EXISTS `formacion_academica` (
  `cod_f_academica` int(11) NOT NULL AUTO_INCREMENT,
  `ins_bachiller` varchar(100) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `f_tecnica` varchar(100) DEFAULT NULL,
  `certificaciones` varchar(100) DEFAULT NULL,
  `idiomas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_f_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE IF NOT EXISTS `oferta` (
  `cod_oferta` int(11) NOT NULL AUTO_INCREMENT,
  `salario` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  `cod_t_contrato` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_oferta`),
  KEY `OFERTA_EMPRESA_FK` (`cod_empresa`),
  KEY `OFERTA_TIPO_CONTRATO_FK` (`cod_t_contrato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_estudiante`
--

DROP TABLE IF EXISTS `oferta_estudiante`;
CREATE TABLE IF NOT EXISTS `oferta_estudiante` (
  `cod_oferta` int(11) NOT NULL,
  `cod_estudiante` int(11) NOT NULL,
  `cod_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_oferta`,`cod_estudiante`),
  KEY `OFERTA_ESTUDIANTE_ESTUDIANTE_FK` (`cod_estudiante`),
  KEY `OFERTA_ESTUDIANTE_ESTADO_FK` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

DROP TABLE IF EXISTS `parametro`;
CREATE TABLE IF NOT EXISTS `parametro` (
  `cod_parametro` int(11) NOT NULL AUTO_INCREMENT,
  `nom_parametro` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_parametro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `cod_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `experiencia` varchar(250) DEFAULT NULL,
  `formacion` varchar(250) DEFAULT NULL,
  `compe_basicas` varchar(250) DEFAULT NULL,
  `conocimento` varchar(250) DEFAULT NULL,
  `habilidades` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

DROP TABLE IF EXISTS `referencia`;
CREATE TABLE IF NOT EXISTS `referencia` (
  `cod_ref` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ref` varchar(50) DEFAULT NULL,
  `cargo_ref` varchar(50) DEFAULT NULL,
  `tel_ref` int(11) DEFAULT NULL,
  `cod_estudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

DROP TABLE IF EXISTS `tipo_contrato`;
CREATE TABLE IF NOT EXISTS `tipo_contrato` (
  `cod_t_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nom_t_contrato` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_t_contrato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empresa`
--

DROP TABLE IF EXISTS `tipo_empresa`;
CREATE TABLE IF NOT EXISTS `tipo_empresa` (
  `cod_t_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nom_t_empresa` varchar(100) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_t_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasenia` varchar(30) DEFAULT NULL,
  `cod_empresa` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `USUARIO_EMPRESA_FK` (`cod_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `EMPRESA_TIPO_EMPRESA_FK` FOREIGN KEY (`cod_t_empresa`) REFERENCES `tipo_empresa` (`cod_t_empresa`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `ESTUDIANTE_CARRERA_FK` FOREIGN KEY (`cod_carrera`) REFERENCES `carrera` (`cod_carrera`),
  ADD CONSTRAINT `ESTUDIANTE_CIUDAD_FK` FOREIGN KEY (`cod_ciudad`) REFERENCES `ciudad` (`cod_ciudad`),
  ADD CONSTRAINT `ESTUDIANTE_FORMACION_ACADEMICA_FK` FOREIGN KEY (`cod_estudiante`) REFERENCES `formacion_academica` (`cod_f_academica`),
  ADD CONSTRAINT `ESTUDIANTE_PERFIL_FK` FOREIGN KEY (`cod_estudiante`) REFERENCES `perfil` (`cod_perfil`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `OFERTA_EMPRESA_FK` FOREIGN KEY (`cod_empresa`) REFERENCES `empresa` (`cod_empresa`),
  ADD CONSTRAINT `OFERTA_TIPO_CONTRATO_FK` FOREIGN KEY (`cod_t_contrato`) REFERENCES `tipo_contrato` (`cod_t_contrato`);

--
-- Filtros para la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `REFERENCIA_ESTUDIANTE_FK` FOREIGN KEY (`cod_estudiante`) REFERENCES `ESTUDIANTE` (`cod_estudiante`);

--
-- Filtros para la tabla `f_tecnica`
--
ALTER TABLE `f_tecnica`
  ADD CONSTRAINT `F_TECNICA_EXP_LABORAL_FK` FOREIGN KEY (`cod_exp`) REFERENCES `exp_laboral` (`cod_exp`);

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `CERTIFICACION_EXP_LABORAL_FK` FOREIGN KEY (`cod_exp`) REFERENCES `exp_laboral` (`cod_exp`);

--
-- Filtros para la tabla `oferta_estudiante`
--
ALTER TABLE `oferta_estudiante`
  ADD CONSTRAINT `OFERTA_ESTUDIANTE_ESTADO_FK` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`cod_estado`),
  ADD CONSTRAINT `OFERTA_ESTUDIANTE_ESTUDIANTE_FK` FOREIGN KEY (`cod_estudiante`) REFERENCES `estudiante` (`cod_estudiante`),
  ADD CONSTRAINT `OFERTA_ESTUDIANTE_OFERTA_FK` FOREIGN KEY (`cod_oferta`) REFERENCES `oferta` (`cod_oferta`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `USUARIO_EMPRESA_FK` FOREIGN KEY (`cod_empresa`) REFERENCES `empresa` (`cod_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
