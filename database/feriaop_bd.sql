-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-09-2020 a las 03:09:40
-- Versión del servidor: 8.0.21
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
  `cod_auditoria` int NOT NULL AUTO_INCREMENT,
  `nom_tabla` varchar(20) DEFAULT NULL,
  `accion` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`cod_auditoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`cod_auditoria`, `nom_tabla`, `accion`, `fecha`) VALUES
(1, 'EMPRESA', 'ACTUALIZAR', '2020-09-15'),
(2, 'EMPRESA', 'INSERTAR', '2020-09-15'),
(3, 'EMPRESA', 'ACTUALIZAR', '2020-09-15'),
(4, 'ESTUDIANTE', 'INSERTAR', '2020-09-15'),
(5, 'OFERTA EN PROCESO', 'INSERTAR', '2020-09-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `cod_carrera` int NOT NULL AUTO_INCREMENT,
  `nom_carrera` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`cod_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`cod_carrera`, `nom_carrera`) VALUES
(1, 'Ingeniería de Sistemas'),
(2, 'Ingeniería Industrial'),
(3, 'Ingeniería Electrónica'),
(4, 'Ingeniería Ambiental'),
(5, 'Bioingeniería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

DROP TABLE IF EXISTS `certificacion`;
CREATE TABLE IF NOT EXISTS `certificacion` (
  `cod_certificacion` int NOT NULL AUTO_INCREMENT,
  `nom_certificacion` varchar(100) DEFAULT NULL,
  `inst_certificacion` varchar(250) DEFAULT NULL,
  `horas` varchar(250) DEFAULT NULL,
  `fecha_final_certificacion` date DEFAULT NULL,
  `cod_f_academica` int DEFAULT NULL,
  PRIMARY KEY (`cod_certificacion`),
  KEY `CERTIFICACION_EXP_LABORAL_FK` (`cod_f_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `cod_empresa` int NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(50) DEFAULT NULL,
  `nom_comercial` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `cod_t_empresa` int DEFAULT NULL,
  `estado_empresa` varchar(11) DEFAULT NULL,
  `logo` varchar(250) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `ingresos` int NOT NULL,
  `camara_comercio` varchar(200) DEFAULT NULL,
  `tipo_usuario` int DEFAULT NULL,
  PRIMARY KEY (`cod_empresa`),
  KEY `EMPRESA_TIPO_EMPRESA_FK` (`cod_t_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`cod_empresa`, `nom_empresa`, `nom_comercial`, `descripcion`, `cod_t_empresa`, `estado_empresa`, `logo`, `correo`, `contraseña`, `ingresos`, `camara_comercio`, `tipo_usuario`) VALUES
(1, 'das', 'dasd', 'dsadasd', 1, '1', '../dataEmpresa/logoEmpresa/feriaop_bd.sql', 'fe@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'Vigente', NULL),
(2, 'Pepsi', 'PP', 'Alternativa de cocacola', 4, '1', 'ruta', 'Pepsi@gmail.com', '1234', 1, 'Vigente', NULL);

--
-- Disparadores `empresa`
--
DROP TRIGGER IF EXISTS `D_auditar_empresas`;
DELIMITER $$
CREATE TRIGGER `D_auditar_empresas` AFTER DELETE ON `empresa` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('EMPRESA','ELIMINAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `I_auditar_empresas`;
DELIMITER $$
CREATE TRIGGER `I_auditar_empresas` AFTER INSERT ON `empresa` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('EMPRESA','INSERTAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `U_auditar_empresas`;
DELIMITER $$
CREATE TRIGGER `U_auditar_empresas` AFTER UPDATE ON `empresa` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('EMPRESA','ACTUALIZAR', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `cod_estado` int NOT NULL AUTO_INCREMENT,
  `nom_estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`cod_estado`, `nom_estado`) VALUES
(1, 'REVISADO'),
(2, 'VERIFICADO'),
(3, 'ACEPTADO'),
(4, 'DENEGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `cod_estudiante` int NOT NULL AUTO_INCREMENT,
  `nom_estudiante` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `lim_oferta` int DEFAULT NULL,
  `contrasenia` varchar(50) DEFAULT NULL,
  `cod_carrera` int DEFAULT NULL,
  `tipo_usuario` int DEFAULT NULL,
  PRIMARY KEY (`cod_estudiante`),
  KEY `ESTUDIANTE_CARRERA_FK` (`cod_carrera`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cod_estudiante`, `nom_estudiante`, `telefono`, `correo`, `direccion`, `lim_oferta`, `contrasenia`, `cod_carrera`, `tipo_usuario`) VALUES
(1, 'Daniel Chimbi', '3166271527', 'dachimbil@unbosque.edu.co', 'Cra 73 #71a-29', 2, '123456', 1, NULL);

--
-- Disparadores `estudiante`
--
DROP TRIGGER IF EXISTS `D_auditar_estudiantes`;
DELIMITER $$
CREATE TRIGGER `D_auditar_estudiantes` AFTER DELETE ON `estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('ESTUDIANTE','ELIMINAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `I_auditar_estudiantes`;
DELIMITER $$
CREATE TRIGGER `I_auditar_estudiantes` AFTER INSERT ON `estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('ESTUDIANTE','INSERTAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `U_auditar_estudiantes`;
DELIMITER $$
CREATE TRIGGER `U_auditar_estudiantes` AFTER UPDATE ON `estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('ESTUDIANTE','ACTUALIZAR', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_academica`
--

DROP TABLE IF EXISTS `exp_academica`;
CREATE TABLE IF NOT EXISTS `exp_academica` (
  `cod_exp_academica` int NOT NULL AUTO_INCREMENT,
  `nom_exp_academica` varchar(30) DEFAULT NULL,
  `con_aplicados` varchar(150) DEFAULT NULL,
  `materia` varchar(20) DEFAULT NULL,
  `cod_estudiante` int DEFAULT NULL,
  PRIMARY KEY (`cod_exp_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exp_laboral`
--

DROP TABLE IF EXISTS `exp_laboral`;
CREATE TABLE IF NOT EXISTS `exp_laboral` (
  `cod_exp` int NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `fun_principales` varchar(250) DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `cod_estudiante` int DEFAULT NULL,
  PRIMARY KEY (`cod_exp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion_academica`
--

DROP TABLE IF EXISTS `formacion_academica`;
CREATE TABLE IF NOT EXISTS `formacion_academica` (
  `cod_f_academica` int NOT NULL AUTO_INCREMENT,
  `ins_bachiller` varchar(100) DEFAULT NULL,
  `titulo_bachiller` varchar(30) DEFAULT NULL,
  `fec_fin_bachiller` date DEFAULT NULL,
  `idiomas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_f_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_tecnica`
--

DROP TABLE IF EXISTS `f_tecnica`;
CREATE TABLE IF NOT EXISTS `f_tecnica` (
  `cod_f_tecnica` int NOT NULL AUTO_INCREMENT,
  `nom_f_tecnica` varchar(30) DEFAULT NULL,
  `f_final_f_tecnica` date DEFAULT NULL,
  `ins_f_tecnica` varchar(50) DEFAULT NULL,
  `nivel` int DEFAULT NULL,
  `cod_f_academica` int DEFAULT NULL,
  PRIMARY KEY (`cod_f_tecnica`),
  KEY `FORMACION_ACADEMICA_F_TECNICA_FK` (`cod_f_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE IF NOT EXISTS `oferta` (
  `cod_oferta` int NOT NULL AUTO_INCREMENT,
  `nom_oferta` varchar(11) DEFAULT NULL,
  `salario` int DEFAULT NULL,
  `descripcion_oferta` varchar(50) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `cod_empresa` int DEFAULT NULL,
  `cod_t_contrato` int DEFAULT NULL,
  `oferta_carrera` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_oferta`),
  KEY `OFERTA_EMPRESA_FK` (`cod_empresa`),
  KEY `OFERTA_TIPO_CONTRATO_FK` (`cod_t_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`cod_oferta`, `nom_oferta`, `salario`, `descripcion_oferta`, `fecha_inicio`, `cod_empresa`, `cod_t_contrato`, `oferta_carrera`) VALUES
(1, 'Trabajo PHP', 1200000, 'Se necesita una persona que sepa php', '2020-09-15', 1, 1, 'Ingeniería de sistemas');

--
-- Disparadores `oferta`
--
DROP TRIGGER IF EXISTS `D_auditar_oferta`;
DELIMITER $$
CREATE TRIGGER `D_auditar_oferta` AFTER DELETE ON `oferta` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA','ELIMINAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `I_auditar_oferta`;
DELIMITER $$
CREATE TRIGGER `I_auditar_oferta` AFTER INSERT ON `oferta` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA','INSERTAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `U_auditar_oferta`;
DELIMITER $$
CREATE TRIGGER `U_auditar_oferta` AFTER UPDATE ON `oferta` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA','ACTUALIZAR', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_estudiante`
--

DROP TABLE IF EXISTS `oferta_estudiante`;
CREATE TABLE IF NOT EXISTS `oferta_estudiante` (
  `cod_oferta` int NOT NULL AUTO_INCREMENT,
  `cod_estudiante` int NOT NULL,
  `cod_estado` int DEFAULT NULL,
  PRIMARY KEY (`cod_oferta`,`cod_estudiante`),
  KEY `OFERTA_ESTUDIANTE_ESTUDIANTE_FK` (`cod_estudiante`),
  KEY `OFERTA_ESTUDIANTE_ESTADO_FK` (`cod_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oferta_estudiante`
--

INSERT INTO `oferta_estudiante` (`cod_oferta`, `cod_estudiante`, `cod_estado`) VALUES
(1, 1, 3);

--
-- Disparadores `oferta_estudiante`
--
DROP TRIGGER IF EXISTS `D_auditar_ofertaProceso`;
DELIMITER $$
CREATE TRIGGER `D_auditar_ofertaProceso` AFTER DELETE ON `oferta_estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA EN PROCESO','ELIMINAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `I_auditar_ofertaProceso`;
DELIMITER $$
CREATE TRIGGER `I_auditar_ofertaProceso` AFTER INSERT ON `oferta_estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA EN PROCESO','INSERTAR', NOW())
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `U_auditar_ofertaProceso`;
DELIMITER $$
CREATE TRIGGER `U_auditar_ofertaProceso` AFTER UPDATE ON `oferta_estudiante` FOR EACH ROW INSERT INTO auditoria (nom_tabla,accion,fecha) VALUES ('OFERTA EN PROCESO','ACTUALIZAR', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

DROP TABLE IF EXISTS `parametro`;
CREATE TABLE IF NOT EXISTS `parametro` (
  `cod_parametro` int NOT NULL AUTO_INCREMENT,
  `nom_parametro` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `valor` int DEFAULT NULL,
  PRIMARY KEY (`cod_parametro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `cod_perfil` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(1200) DEFAULT NULL,
  PRIMARY KEY (`cod_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

DROP TABLE IF EXISTS `referencia`;
CREATE TABLE IF NOT EXISTS `referencia` (
  `cod_ref` int NOT NULL AUTO_INCREMENT,
  `nom_ref` varchar(50) DEFAULT NULL,
  `cargo_ref` varchar(50) DEFAULT NULL,
  `tel_ref` int DEFAULT NULL,
  `cod_estudiante` int DEFAULT NULL,
  PRIMARY KEY (`cod_ref`),
  KEY `REFERENCIA_ESTUDIANTE_FK` (`cod_estudiante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

DROP TABLE IF EXISTS `tipo_contrato`;
CREATE TABLE IF NOT EXISTS `tipo_contrato` (
  `cod_t_contrato` int NOT NULL AUTO_INCREMENT,
  `nom_t_contrato` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_t_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_contrato`
--

INSERT INTO `tipo_contrato` (`cod_t_contrato`, `nom_t_contrato`, `descripcion`) VALUES
(1, 'Aprendizaje cuota SENA', 'Aprendizaje con el instituto cuota SENA'),
(2, 'Práticas profesionales', 'Realizar prácticas profesional para ganar experien'),
(3, 'Término fijo', 'La fecha de terminación del contrato está estipula'),
(4, 'Término indefinido', 'No existe fecha de finalización del contrato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empresa`
--

DROP TABLE IF EXISTS `tipo_empresa`;
CREATE TABLE IF NOT EXISTS `tipo_empresa` (
  `cod_t_empresa` int NOT NULL AUTO_INCREMENT,
  `nom_t_empresa` varchar(100) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_t_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_empresa`
--

INSERT INTO `tipo_empresa` (`cod_t_empresa`, `nom_t_empresa`, `descripcion`) VALUES
(1, 'Sector de servicios', 'Corresponde al sector terciario'),
(2, 'Sector industrial', 'Corresponde al sector secundario'),
(3, 'Sector de transporte', 'Transporte y servicio de transporte publico'),
(4, 'Sector de comercio', 'Hace parte del sector de la economía'),
(5, 'Sector financiero', 'Relacionado con entidades bancarias'),
(6, 'Sector de la construcción', 'Corresponde al sector de la construcción'),
(7, 'Sector de la minero', 'Empresas con actividad minera'),
(8, 'Sector solidario', 'Corresponde al cooperativo'),
(9, 'Sector de la comunicación', 'Comunicación entre empresas y organizaciones');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `CERTIFICACION_EXP_LABORAL_FK` FOREIGN KEY (`cod_f_academica`) REFERENCES `formacion_academica` (`cod_f_academica`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `EMPRESA_TIPO_EMPRESA_FK` FOREIGN KEY (`cod_t_empresa`) REFERENCES `tipo_empresa` (`cod_t_empresa`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `ESTUDIANTE_CARRERA_FK` FOREIGN KEY (`cod_carrera`) REFERENCES `carrera` (`cod_carrera`);

--
-- Filtros para la tabla `formacion_academica`
--
ALTER TABLE `formacion_academica`
  ADD CONSTRAINT `FORMACION_ACADEMICA_ESTUDIANTE_FK` FOREIGN KEY (`cod_f_academica`) REFERENCES `estudiante` (`cod_estudiante`);

--
-- Filtros para la tabla `f_tecnica`
--
ALTER TABLE `f_tecnica`
  ADD CONSTRAINT `F_TECNICA_FORMACION_ACADEMICA_FK` FOREIGN KEY (`cod_f_academica`) REFERENCES `formacion_academica` (`cod_f_academica`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `OFERTA_EMPRESA_FK` FOREIGN KEY (`cod_empresa`) REFERENCES `empresa` (`cod_empresa`),
  ADD CONSTRAINT `OFERTA_TIPO_CONTRATO_FK` FOREIGN KEY (`cod_t_contrato`) REFERENCES `tipo_contrato` (`cod_t_contrato`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `PERFIL_ESTUDIANTE_FK` FOREIGN KEY (`cod_perfil`) REFERENCES `estudiante` (`cod_estudiante`);

--
-- Filtros para la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD CONSTRAINT `REFERENCIA_ESTUDIANTE_FK` FOREIGN KEY (`cod_estudiante`) REFERENCES `estudiante` (`cod_estudiante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
