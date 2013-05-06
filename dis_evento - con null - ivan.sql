-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2013 a las 22:14:54
-- Versión del servidor: 5.1.53
-- Versión de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dis_evento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE IF NOT EXISTS `ambiente` (
  `id_amb` int(11) NOT NULL COMMENT 'id del ambiente',
  `tip_amb` varchar(50) DEFAULT NULL COMMENT 'tipo de ambiente:\\n1) Aula\\n2) Laboratorio\\n3) Coliseo',
  `cod_fia_amb` varchar(5) DEFAULT NULL COMMENT 'Codigo interno de los ambientes asignados por la FIA\\nEj. \\nAula 01-0102\\nLaboratorio  02-0D-1',
  `capac_amb` int(11) DEFAULT NULL COMMENT 'capacidad del ambiente',
  `usu_crea_amb` int(11) DEFAULT NULL COMMENT 'usuario que creo el ambiente',
  `usu_mod_amb` int(11) DEFAULT NULL COMMENT 'usuario que modifico el ambiente',
  `fech_crea_amb` datetime DEFAULT NULL COMMENT 'fech de creacion del ambiente',
  `fech_mod_amb` datetime DEFAULT NULL COMMENT 'fecha de modificación',
  PRIMARY KEY (`id_amb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_amb`, `tip_amb`, `cod_fia_amb`, `capac_amb`, `usu_crea_amb`, `usu_mod_amb`, `fech_crea_amb`, `fech_mod_amb`) VALUES
(1, '1', '1', 10, NULL, NULL, NULL, NULL),
(2, '1', '1', 14, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auspicio`
--

CREATE TABLE IF NOT EXISTS `auspicio` (
  `id_aus` int(11) NOT NULL COMMENT 'id del auspiciador',
  `id_emp_aus` int(11) NOT NULL COMMENT 'id del la empresa auspiciador',
  `id_eve_aus` int(11) NOT NULL COMMENT 'id del evento auspiciado',
  `monto_aus` int(11) DEFAULT '0' COMMENT 'Expresion en dinero del Auspicio',
  `detalle_aus` varchar(100) DEFAULT NULL COMMENT 'Detalles del auspicio, no necesariamente se auspicia con dinero, las empresas pueden auspiciar con materiales',
  `usu_crea_aus` int(11) DEFAULT NULL COMMENT 'usuario que creo al auspiciador',
  `usu_mod_aus` int(11) DEFAULT NULL COMMENT 'usuario que modifico el registro',
  `fech_crea_aus` datetime DEFAULT NULL COMMENT 'fecha de creación del auspiciador',
  `fech_mod_aus` datetime DEFAULT NULL COMMENT 'fecha de modificaciond el registro',
  PRIMARY KEY (`id_aus`,`id_emp_aus`,`id_eve_aus`),
  KEY `fk_EMPRESA_has_EVENTO_EVENTO1_idx` (`id_eve_aus`),
  KEY `fk_EMPRESA_has_EVENTO_EMPRESA1_idx` (`id_emp_aus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `auspicio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `RUC` varchar(11) DEFAULT NULL COMMENT 'RUC de la empresa',
  `nom_emp` varchar(100) DEFAULT NULL COMMENT 'Nombre de la empresa + razon juridica\\nEj. Gloria S.A.',
  `dir_emp` varchar(100) DEFAULT NULL COMMENT 'Direccion de la empresa',
  `sec_ind_emp` char(1) DEFAULT NULL COMMENT 'Sector industrial al que pertenece la empresa',
  `usu_crea_emp` int(11) DEFAULT NULL,
  `usu_mod_emp` int(11) DEFAULT NULL,
  `fech_crea_emp` datetime DEFAULT NULL,
  `fech_mod_emp` datetime DEFAULT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_emp`, `RUC`, `nom_emp`, `dir_emp`, `sec_ind_emp`, `usu_crea_emp`, `usu_mod_emp`, `fech_crea_emp`, `fech_mod_emp`) VALUES
(1, '56144515', 'sociedad anonima', NULL, '4', NULL, NULL, NULL, NULL),
(4, '88888888888', 'jaajajajaj', NULL, '5', NULL, NULL, NULL, NULL),
(5, '88888888888', 'jaajajajaj', NULL, '5', NULL, NULL, NULL, NULL),
(6, '88888888888', 'jaajajajaj', NULL, '5', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_eve` int(11) NOT NULL AUTO_INCREMENT,
  `nom_eve` varchar(100) DEFAULT NULL COMMENT 'Titulo o nombre del evento',
  `fech_ini_eve` date DEFAULT NULL COMMENT 'Fecha de inicio del evento',
  `fech_fin_eve` date DEFAULT NULL COMMENT 'Fecha de fin del evento',
  `est_eve` char(1) DEFAULT NULL COMMENT 'Estado del evento:\\n1) Abierto\\n2) Cerrado',
  `usu_crea_eve` int(11) DEFAULT NULL,
  `usu_mod_eve` int(11) DEFAULT NULL,
  `fech_crea_eve` datetime DEFAULT NULL,
  `fech_mod_eve` datetime DEFAULT NULL,
  PRIMARY KEY (`id_eve`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_eve`, `nom_eve`, `fech_ini_eve`, `fech_fin_eve`, `est_eve`, `usu_crea_eve`, `usu_mod_eve`, `fech_crea_eve`, `fech_mod_eve`) VALUES
(1, 'Vision 2013', '2013-08-12', '2013-08-14', '1', NULL, NULL, NULL, NULL),
(2, 'Cloud Google', '2013-10-08', '2013-10-09', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expositor`
--

CREATE TABLE IF NOT EXISTS `expositor` (
  `cod_exp` int(11) NOT NULL,
  `tip_doc` varchar(1) DEFAULT NULL COMMENT 'Tipo de documento de identidad:\\n1) DNI  --- 8 digitos\\n2) Visa  --- 16 digitos\\n3) Pasaporte --- 1 letra + 8 digitos',
  `num_doc` varchar(16) DEFAULT NULL COMMENT 'Numero del documento seleccionado',
  `nom_exp` varchar(100) DEFAULT NULL COMMENT 'Nombre del expositor',
  `ape_pat_exp` varchar(50) DEFAULT NULL COMMENT 'Apellido paterno del expositor',
  `ape_mat_exp` varchar(50) DEFAULT NULL COMMENT 'Apellido paterno del expositor',
  `pais_exp` varchar(20) DEFAULT NULL COMMENT 'Pais natal del expositor',
  `fot_exp` binary(1) DEFAULT NULL COMMENT 'Fotografia',
  `usu_crea_exp` int(11) DEFAULT NULL,
  `usu_mod_exp` int(11) DEFAULT NULL,
  `fech_crea_exp` datetime DEFAULT NULL,
  `fech_mod_exp` datetime DEFAULT NULL,
  PRIMARY KEY (`cod_exp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `expositor`
--

INSERT INTO `expositor` (`cod_exp`, `tip_doc`, `num_doc`, `nom_exp`, `ape_pat_exp`, `ape_mat_exp`, `pais_exp`, `fot_exp`, `usu_crea_exp`, `usu_mod_exp`, `fech_crea_exp`, `fech_mod_exp`) VALUES
(1, '1', '45545454', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponencia`
--

CREATE TABLE IF NOT EXISTS `ponencia` (
  `id_pon` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador que mantiene una relacion 1 a 1 con \\"cod_exp_pon\\" y \\"cod_eve_pon\\", es en realidad un artificio para no tener que referenciar a dos campos sino a uno solo al momento de realizar alguna consulta en la tabla.',
  `cod_eve_pon` int(11) NOT NULL COMMENT 'PK y FK proveniente de la tabla EVENTO para formar la tabla asociativa PONENCIA',
  `cod_exp_pon` int(11) DEFAULT NULL COMMENT 'PK y FK proveniente de la tabla EXPOSITOR para formar la tabla asociativa PONENCIA',
  `fech_ini_pon` datetime DEFAULT NULL COMMENT 'Fecha de inicio de la Ponencia',
  `fech_fin_pon` datetime DEFAULT NULL COMMENT 'Fecha de fin de la Ponencia',
  `nom_pon` varchar(50) DEFAULT NULL COMMENT 'Nombre de la Ponencia',
  `desc_pon` varchar(200) DEFAULT NULL COMMENT 'Descripcion de la Ponencia',
  `tipo_pon` char(1) DEFAULT NULL COMMENT 'Tipo de  Ponencia:\\n1) Conferencia\\n2) Taller',
  `dirigido_a_pon` char(1) DEFAULT NULL COMMENT 'Solo consideramos las especialidades de la FIA, es decir:\\n1) Arquitectura\\n2) Ing. Sistemas\\n3) Ing. Insdustrial\\n4) Ing. Electrónica\\n5) Ing. Civil\\n6) Ing. En Industrias Alimentarias',
  `est_pon` char(1) DEFAULT NULL COMMENT 'Estado de la Ponencia:\\n1) Sin contratiempos\\n2) Cancelada',
  `id_amb_pon` int(11) DEFAULT NULL COMMENT 'FK proveniente de la tabla AMBIENTE',
  `id_req_pon` int(11) DEFAULT NULL COMMENT 'FK proveniente de la tabla REQUERIMIENTOS',
  `usu_crea_pon` int(11) DEFAULT NULL,
  `usu_mod_pon` int(11) DEFAULT NULL,
  `fech_crea_pon` datetime DEFAULT NULL,
  `fech_mod_pon` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pon`),
  KEY `fk_EXPOSITOR_has_EVENTO_EVENTO1_idx` (`cod_eve_pon`),
  KEY `fk_PONENCIA_ambiente1_idx` (`id_amb_pon`),
  KEY `fk_PONENCIA_requerimientos1_idx` (`id_req_pon`),
  KEY `fk_EXPOSITOR_has_EVENTO_EXPOSITOR1_idx` (`cod_exp_pon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `ponencia`
--

INSERT INTO `ponencia` (`id_pon`, `cod_eve_pon`, `cod_exp_pon`, `fech_ini_pon`, `fech_fin_pon`, `nom_pon`, `desc_pon`, `tipo_pon`, `dirigido_a_pon`, `est_pon`, `id_amb_pon`, `id_req_pon`, `usu_crea_pon`, `usu_mod_pon`, `fech_crea_pon`, `fech_mod_pon`) VALUES
(1, 1, 1, '2013-04-17 00:00:00', '2013-04-24 00:00:00', 'Nueva', 'asdasdas', '1', '2', NULL, 2, 1, NULL, NULL, NULL, NULL),
(5, 1, NULL, '2013-04-10 00:00:00', '2013-05-11 00:00:00', 'asdasdas', 'asdasd', '0', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(6, 1, NULL, '2013-10-04 00:00:00', '2013-11-04 00:00:00', 'asdasdas', 'asdasd', '2', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(7, 1, NULL, '2013-10-04 00:00:00', '2013-11-04 00:00:00', 'asdasdasuuuuuuuuuuu', 'asdasd', '1', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(8, 1, NULL, '2013-12-04 00:00:00', '2013-12-04 00:00:00', 'Conferencia de Arquitectura', 'UNa nueva conferencia estara genial', '1', '2', NULL, 2, NULL, NULL, NULL, NULL, NULL),
(9, 1, NULL, '2013-10-04 00:00:00', '2013-11-04 00:00:00', 'asdasdas', 'asdasd', '2', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(10, 1, NULL, '2013-08-05 00:00:00', '2013-12-05 00:00:00', 'asdasdas', 'asdasd', '0', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(11, 1, NULL, '2013-04-10 00:00:00', '2013-04-25 00:00:00', 'asdasdas', 'asdasd', '0', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(12, 1, NULL, '2013-10-04 00:00:00', '2013-11-04 00:00:00', 'asdasdas', 'asdasd', '1', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(13, 1, NULL, '2013-10-04 00:00:00', '2013-11-04 00:00:00', 'asdasdas', 'asdasd', '1', '3', NULL, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE IF NOT EXISTS `recibo` (
  `id_eve_rec` int(11) NOT NULL,
  `cod_user_rec` int(11) NOT NULL,
  `voucher` varchar(45) DEFAULT NULL COMMENT 'Voucher de cada participante por evento (RECIBO=USUARIOxEVENTO)',
  `nro_inscripcion` int(11) NOT NULL,
  `mod_pago` char(1) DEFAULT NULL,
  `nro_cuotas` char(1) DEFAULT NULL,
  `monto` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_eve_rec`,`cod_user_rec`),
  KEY `fk_evento_has_usuario_usuario1_idx` (`cod_user_rec`),
  KEY `fk_evento_has_usuario_evento1_idx` (`id_eve_rec`),
  KEY `nro_inscripcion` (`nro_inscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`id_eve_rec`, `cod_user_rec`, `voucher`, `nro_inscripcion`, `mod_pago`, `nro_cuotas`, `monto`) VALUES
(1, 24, 'pendiente', 38662780, '1', '1', '0'),
(2, 24, 'pendiente', 80479766, '1', '1', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos`
--

CREATE TABLE IF NOT EXISTS `requerimientos` (
  `id_req` int(11) NOT NULL COMMENT 'id de la ponencia, eredado de la tabla PONENCIA',
  `piz_acr_req` tinyint(1) DEFAULT NULL COMMENT 'Campo para validar si se requiere una pizarra acrilica',
  `pers_apoyo_req` tinyint(1) DEFAULT NULL COMMENT 'Campo para validar si se requiere un personal de apoyo',
  `parlant_req` tinyint(1) DEFAULT NULL COMMENT 'Campo para validar si se requiere parlantes. Generalmente cuando se desea mostrar un video.',
  `lap_req` tinyint(1) DEFAULT NULL COMMENT 'Campo para validar si se requiere laptop',
  `micro_req` tinyint(1) DEFAULT NULL COMMENT 'Campo para validar si se requiere microfono.',
  `software_req` varchar(200) DEFAULT NULL COMMENT 'campo para detallar que software requiere la ponencia',
  `usu_crea_req` int(11) DEFAULT NULL COMMENT 'usuario de creación del requerimientos',
  `usu_mod_req` int(11) DEFAULT NULL COMMENT 'usuario de modificacion del requerimiento',
  `fech_crea_req` datetime DEFAULT NULL COMMENT 'fech de creación de requerimientos',
  `fech_mod_req` datetime DEFAULT NULL COMMENT 'fecha de modificacion del requerimiento',
  PRIMARY KEY (`id_req`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `requerimientos`
--

INSERT INTO `requerimientos` (`id_req`, `piz_acr_req`, `pers_apoyo_req`, `parlant_req`, `lap_req`, `micro_req`, `software_req`, `usu_crea_req`, `usu_mod_req`, `fech_crea_req`, `fech_mod_req`) VALUES
(1, 2, 4, 5, 6, 4, NULL, NULL, NULL, NULL, NULL),
(2, 4, 44, 4, 4, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sicat`
--

CREATE TABLE IF NOT EXISTS `sicat` (
  `codigo_interno` int(10) NOT NULL COMMENT 'codigo interno del SICAT',
  `nombres` varchar(100) NOT NULL COMMENT 'nombres sacado del SICAT',
  `apePat` varchar(50) NOT NULL COMMENT 'apellido paterno del SICAT',
  `apeMat` varchar(50) NOT NULL COMMENT 'Apellido materno del SICAT',
  `direccion` varchar(100) NOT NULL COMMENT 'dirección de SICAT',
  `escuela` varchar(20) NOT NULL COMMENT 'escuela perteneciente Del SICAT',
  `fecha_nac` date NOT NULL COMMENT 'fecha de nacimiento del SICAT',
  `genero` char(1) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telf_fijo` int(9) NOT NULL,
  `telf_celular` int(9) NOT NULL,
  `estado` char(1) NOT NULL COMMENT 'Estado del alumno:\\n1) Estudiante\\n2) Egresado\\n\\nEn el caso que haya sido expulsado, el ex alumno no aparecera en la busqueda.',
  `usuario` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `dni` int(8) NOT NULL,
  PRIMARY KEY (`codigo_interno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `sicat`
--

INSERT INTO `sicat` (`codigo_interno`, `nombres`, `apePat`, `apeMat`, `direccion`, `escuela`, `fecha_nac`, `genero`, `correo`, `telf_fijo`, `telf_celular`, `estado`, `usuario`, `password`, `dni`) VALUES
(2009221199, 'Jonathan Renatto', 'Vilcarromero', 'Giraldo', 'santa Lucia 191', 'Sistemas', '1992-07-08', 'M', 'r.vilcarromero@gmail.com', 3488461, 955753952, '1', 'a09221199', '77d8989c0d9e7ae711e15afc13561d15', 47264135);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_user` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del Usuario',
  `usuario_user` varchar(20) DEFAULT NULL COMMENT 'Es el sobrenombre con que el usuario desea loguearse al sistema',
  `pas_user` varchar(60) DEFAULT NULL COMMENT 'contrasena del usuario',
  `tip_doc_user` char(1) DEFAULT NULL COMMENT 'Tipo de documento de identidad del usuario:\\n1) DNI  --- 8 digitos\\n2) Visa  --- 16 digitos\\n3) Pasaporte --- 1 letra + 8 digitos\\n',
  `num_doc_user` varchar(16) DEFAULT NULL,
  `nom_user` varchar(100) DEFAULT NULL COMMENT 'Nombre real del usuario',
  `ape_pat_user` varchar(50) DEFAULT NULL COMMENT 'apellido paterno',
  `ape_mat_user` varchar(50) DEFAULT NULL COMMENT 'apellido materno',
  `dir_user` varchar(100) DEFAULT NULL COMMENT 'direccion del domicilio',
  `email_user` varchar(100) DEFAULT NULL COMMENT 'Correo electronico que el usuario ha decidido declarar para que se le envie informacion',
  `USUARIO_cod_user` int(11) DEFAULT NULL COMMENT 'Campo para registrar la relacion reflexiva, es decir, cuando un representante registre a un empleado de la misma empresa.',
  `tip_usu` char(1) DEFAULT NULL COMMENT 'Tipos de usuario:\\n0) Administrador\\n1) Estudiante\\n2) Egresado\\n3) Externo_Independiente\\n4) Externo_Corporativo_Representante\\n5) Externo_Corporativo_Empleado\\n\\nLos tipos \\"Estudiante\\" o \\"Egresado\\" son el estado de un alumno de la FIA, son obtenidos',
  `telf_cel` varchar(9) DEFAULT NULL COMMENT 'Telefono celular',
  `telf_fijo` varchar(9) DEFAULT NULL COMMENT 'Telefono fijo',
  `cargo_emp_user` varchar(100) DEFAULT NULL COMMENT 'Cargo del Externo_Corporativo_Representante en la empresa a la que pertenece. Se asume que el cargo Representante propiamente dicho no existe, sino que el Gerente General designa a un empleado para que sea el representante de la empresa.',
  `dpto_emp_user` char(2) DEFAULT NULL COMMENT 'Departamento al que pertenece el usuario\\n1) Administración\\n2) Area tecnica\\n3) Asesoria \\n4) Comercio electronico\\n5) Compras\\n6) Controlling\\n7) Derecho \\n8) Finanzas y Contabilidad\\n9) Capacitación \\n10) Gerencia \\n11) Gestión de riesgos \\n12) Ingenie',
  `cod_estud` varchar(10) DEFAULT NULL COMMENT 'Codigo del estudiante o egresado, este dato es obtenido del SICAT',
  `esc_estud` varchar(20) DEFAULT NULL COMMENT 'Escuela a la que pertenece el estudiante o egresado, este dato es obtenido del SICAT',
  `info_acerca_evento` char(1) DEFAULT NULL COMMENT 'Responde a la pregunta: Como se entero del Evento?\\n1) Facebook\\n2) Twitter\\n3) YouTube\\n4) Yahoo respuestas\\n',
  `id_emp_user` int(11) DEFAULT NULL COMMENT 'Llave foranea que viene de EMPRESA',
  `usu_crea_user` int(11) DEFAULT NULL COMMENT 'Atributo de control que archiva al usuario que crea este registro,  casos:\\na) Administrador registra usuario\\nb) Representante registra usuario\\nc) Usuario se registra a si mismo',
  `usu_mod_user` int(11) DEFAULT NULL COMMENT 'Atributo de control que archiva al usuario que modifica este registro, casos:\\na) Administrador modifica registro de usuario\\nc) Usuario actualiza sus datos',
  `fech_crea_user` datetime DEFAULT NULL COMMENT 'Atributo de control que registra la fecha y hora de creacion de usuario',
  `fech_mod_user` datetime DEFAULT NULL COMMENT 'Atributo de control que registra la fecha y hora de la ultima modificacion de usuario',
  PRIMARY KEY (`cod_user`),
  KEY `fk_USUARIO_USUARIO1_idx` (`USUARIO_cod_user`),
  KEY `fk_usuario_empresa1_idx` (`id_emp_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_user`, `usuario_user`, `pas_user`, `tip_doc_user`, `num_doc_user`, `nom_user`, `ape_pat_user`, `ape_mat_user`, `dir_user`, `email_user`, `USUARIO_cod_user`, `tip_usu`, `telf_cel`, `telf_fijo`, `cargo_emp_user`, `dpto_emp_user`, `cod_estud`, `esc_estud`, `info_acerca_evento`, `id_emp_user`, `usu_crea_user`, `usu_mod_user`, `fech_crea_user`, `fech_mod_user`) VALUES
(4, 'a09221199', '77d8989c0d9e7ae711e15afc13561d15', '1', '47264135', 'Jonathan Renatto', 'Vilcarromero', 'Giraldo', '0', 'r.vilcarromero@gmail.com', NULL, '1', '955753952', '3488461', NULL, NULL, NULL, 'Sistemas', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'admin', '08486939dd716c7f86e078c85177b245', '1', '07512658', 'juan', 'rios', 'roverano', 'los alamos 123', 'admin@gmail.com', NULL, '0', '965326688', '4562587', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'pedrito', '14c9d9645bf3170f8f6252523f124cce', '1', '47264136', 'pedro', 'navaja', 'garcia', 'los albaricoques 122', 'pedrito@gmail.com', NULL, '3', '99653258', '7852365', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `auspicio`
--
ALTER TABLE `auspicio`
  ADD CONSTRAINT `fk_EMPRESA_has_EVENTO_EMPRESA1` FOREIGN KEY (`id_emp_aus`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EMPRESA_has_EVENTO_EVENTO1` FOREIGN KEY (`id_eve_aus`) REFERENCES `evento` (`id_eve`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ponencia`
--
ALTER TABLE `ponencia`
  ADD CONSTRAINT `fk_EXPOSITOR_has_EVENTO_EVENTO1` FOREIGN KEY (`cod_eve_pon`) REFERENCES `evento` (`id_eve`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EXPOSITOR_has_EVENTO_EXPOSITOR1` FOREIGN KEY (`cod_exp_pon`) REFERENCES `expositor` (`cod_exp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_amb_pon` FOREIGN KEY (`id_amb_pon`) REFERENCES `ambiente` (`id_amb`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_req_pon` FOREIGN KEY (`id_req_pon`) REFERENCES `requerimientos` (`id_req`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD CONSTRAINT `cod_user_rec` FOREIGN KEY (`cod_user_rec`) REFERENCES `usuario` (`cod_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_eve_rec` FOREIGN KEY (`id_eve_rec`) REFERENCES `evento` (`id_eve`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_emp_user` FOREIGN KEY (`id_emp_user`) REFERENCES `empresa` (`id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USUARIO_USUARIO1` FOREIGN KEY (`USUARIO_cod_user`) REFERENCES `usuario` (`cod_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
