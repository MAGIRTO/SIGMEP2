-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2015 a las 15:30:14
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sigmep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adiciones`
--

CREATE TABLE IF NOT EXISTS `adiciones` (
  `idAdiciones` int(11) NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `tiempo` varchar(45) DEFAULT NULL,
  `dinero` varchar(45) DEFAULT NULL,
  `estadoContrato` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `idAreas` int(11) NOT NULL,
  `nombreAreas` varchar(45) DEFAULT NULL,
  `jefe` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`idAreas`, `nombreAreas`, `jefe`) VALUES
(1, 'Sistemas MetroParques', 12234543),
(3, 'Mercadeo', 12344566),
(4, '<p>\r\n	fnfghgf</p>\r\n', 12234543),
(5, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE IF NOT EXISTS `contratos` (
  `idContratos` int(11) NOT NULL,
  `fechaElaboracion` date DEFAULT NULL,
  `tipoContrato` varchar(45) DEFAULT NULL,
  `valorContrato` float DEFAULT NULL,
  `plazoEjecucion` varchar(45) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `objetoContrato` mediumtext,
  `formaDePago` mediumtext,
  `alcance` mediumtext,
  `contratante` varchar(15) NOT NULL,
  `contratista` varchar(15) NOT NULL,
  `supervisor` int(11) NOT NULL,
  `usuarioQueRealiza` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos_has_informes`
--

CREATE TABLE IF NOT EXISTS `contratos_has_informes` (
  `Contratos_idContratos` int(11) NOT NULL,
  `Informes_idInformes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecontratos`
--

CREATE TABLE IF NOT EXISTS `detallecontratos` (
  `idDetalleContratos` int(11) NOT NULL,
  `objetoContrato` longtext,
  `obligacionesContratista` longtext,
  `obligacionesContratante` longtext
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallecontratos`
--

INSERT INTO `detallecontratos` (`idDetalleContratos`, `objetoContrato`, `obligacionesContratista`, `obligacionesContratante`) VALUES
(1, 'hjkghjk', ',ghkghkgh', 'hjkjk'),
(2, NULL, NULL, NULL),
(3, '<h1>\r\n	sddgdzszggfzgzdzdsgd</h1>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	fbdfhdfhxfd</p>\r\n', '<p>\r\n	dfhdxfhdxf</p>\r\n', '<p>\r\n	dfhdfx</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallevalorcontratos`
--

CREATE TABLE IF NOT EXISTS `detallevalorcontratos` (
  `idDetalleValorContratos` int(11) NOT NULL,
  `valorContrato` float DEFAULT NULL,
  `iva` decimal(5,0) DEFAULT NULL,
  `formasPago` varchar(1024) DEFAULT NULL,
  `concepto` mediumtext
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallevalorcontratos`
--

INSERT INTO `detallevalorcontratos` (`idDetalleValorContratos`, `valorContrato`, `iva`, `formasPago`, `concepto`) VALUES
(1, 100, '150', 'dsfadsfsdaf', 'kdssdsa'),
(3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `idEmpresa` varchar(25) NOT NULL,
  `nombreEmpresa` varchar(45) DEFAULT NULL,
  `Representantes_cedulaRepresentantes` int(11) NOT NULL,
  `fax` varchar(32) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`idEmpresa`, `nombreEmpresa`, `Representantes_cedulaRepresentantes`, `fax`, `telefono`, `direccion`) VALUES
('172983933', 'Municipio De Medellin fdsf', 21312312, '23423423', '32422', 'djkdlkd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadotiempos`
--

CREATE TABLE IF NOT EXISTS `estadotiempos` (
  `idEstadoTiempos` int(11) NOT NULL,
  `estadoContrato` varchar(45) DEFAULT NULL,
  `tiempoTranscurrido` varchar(45) DEFAULT NULL,
  `porcentajeTT` float DEFAULT NULL,
  `tiempoPorTranscurrir` varchar(45) DEFAULT NULL,
  `porcentajeTPT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacionacumulada`
--

CREATE TABLE IF NOT EXISTS `informacionacumulada` (
  `idInformacionAcumulada` int(11) NOT NULL,
  `saldoFacturado` float DEFAULT NULL,
  `valorEjecutado` float DEFAULT NULL,
  `saldoPorFacturar` float DEFAULT NULL,
  `valorPorEjecutar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE IF NOT EXISTS `informes` (
  `idInformes` int(11) NOT NULL,
  `concepto` varchar(45) DEFAULT NULL,
  `fechaInforme` date DEFAULT NULL,
  `periodoInforme` varchar(45) DEFAULT NULL,
  `estadoFinanciero` varchar(45) DEFAULT NULL,
  `InformacionAcumulada_idInformacionAcumulada` int(11) NOT NULL,
  `id_EstadoTiempos` int(11) NOT NULL,
  `id_PagosSS` int(11) NOT NULL,
  `id_Adiciones` int(11) NOT NULL,
  `id_PagoFacturas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `justificaciones`
--

CREATE TABLE IF NOT EXISTS `justificaciones` (
  `idJustificaciones` int(11) NOT NULL,
  `fechaJustificacion` date DEFAULT NULL,
  `valorContrato` double DEFAULT NULL,
  `que` mediumtext,
  `porque` mediumtext,
  `paraque` mediumtext,
  `plazoContrato` varchar(45) DEFAULT NULL,
  `observaciones` mediumtext,
  `resultadoEsperado` mediumtext,
  `especificacionesContrato` mediumtext,
  `fechaAutorizacion` date DEFAULT NULL,
  `Areas_idAreas` int(11) NOT NULL,
  `Personas_cedula` int(11) NOT NULL,
  `usuarioQueRealiza` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `justificaciones`
--

INSERT INTO `justificaciones` (`idJustificaciones`, `fechaJustificacion`, `valorContrato`, `que`, `porque`, `paraque`, `plazoContrato`, `observaciones`, `resultadoEsperado`, `especificacionesContrato`, `fechaAutorizacion`, `Areas_idAreas`, `Personas_cedula`, `usuarioQueRealiza`) VALUES
(1, '2015-05-23', 36000, '<p>\r\n	Se requiere un muy buen producto</p>\r\n', '<p>\r\n	Porque se necesita demasiado</p>\r\n', '<h1>\r\n	para pdoer realizar bien nuestras labores</h1>\r\n', '87 dias', '<p>\r\n	Que rico este contrato</p>\r\n', '<p>\r\n	Se espera poder avanzar bastante</p>\r\n', '<p>\r\n	se especifican muchas cosas para este contrato</p>\r\n', '2015-05-31', 3, 12234543, 'maicol'),
(5, '2015-05-14', 0, 'rrtgtrgrtg', 'fdvfv ', 'f b gfb', 'gfbfgb', 'fgbfgbfg bgf', 'gfbfgb gfb', 'gfb gbg bgf ', '2015-05-24', 3, 1128478079, 'fgbgbfgbf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'TITULO 1', 'SLUG 1', 'TEXT 1'),
(2, 'TITULO 2', 'SLUG 2', 'TEXT 2'),
(3, 'TITULO 3', 'SLUG 3', 'TEXT 3'),
(4, 'TITULO 4', 'SLUG 4', 'TEXT 4'),
(5, 'Nueva Noticia', 'nueva-noticia', 'Esta es la nueva noticia creada'),
(6, 'Nueva Noticia', 'nueva-noticia', 'Esta es la nueva noticia creada'),
(7, 'UN TITULO MAS', 'un-titulo-mas', 'Esta es la noticia acerca de un titulo mas'),
(8, 'otro', 'otro', 'oelosnskskssks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagofacturas`
--

CREATE TABLE IF NOT EXISTS `pagofacturas` (
  `idPagoFacturas` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `fechaFactura` date DEFAULT NULL,
  `valorFactura` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosss`
--

CREATE TABLE IF NOT EXISTS `pagosss` (
  `idPagosSS` int(11) NOT NULL,
  `Mes` varchar(15) DEFAULT NULL,
  `Planilla` varchar(25) DEFAULT NULL,
  `IBC` varchar(25) DEFAULT NULL,
  `fechaPago` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `cedula` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`cedula`, `nombres`, `apellidos`, `email`, `direccion`, `telefono`) VALUES
(0, NULL, NULL, NULL, NULL, NULL),
(344, '5455', '53454', '535', '434543', 5345),
(345, NULL, NULL, NULL, NULL, NULL),
(123433, 'GRTGRT', 'TRGRTG', 'RGTRGG', 'RTGTR', 32434),
(12234543, 'Maicol Steeven', 'Giraldo Tobon', 'maicol@maicol', 'dsdfsdf', 2343),
(12344566, 'Maribel', 'Botero Perez', 'MARIBELSITA@KDLDIL', 'erferfe', 2343),
(1128478079, 'Maicol Steeven', 'Giraldo Tobon', 'maicol.giraldo@udea.edu.co', 'Calle 61a # 126B-37', 4274159);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
  `cedula` int(11) NOT NULL,
  `lugarExpedicion` varchar(15) DEFAULT NULL,
  `nombreRepresentantes` varchar(45) DEFAULT NULL,
  `apellidoRepresentantes` varchar(45) DEFAULT NULL,
  `cargoRepresentante` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`cedula`, `lugarExpedicion`, `nombreRepresentantes`, `apellidoRepresentantes`, `cargoRepresentante`) VALUES
(12343223, 'Envigado', 'Martha Azucena', 'Ramirez Bedoya', 'Gerente General'),
(12356776, 'Envigado', 'Marina ', 'Ortiz Marquez', 'Gerente'),
(21312312, 'bello', 'Anibal Gaviria', 'gallon', 'alcalde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudcontratos`
--

CREATE TABLE IF NOT EXISTS `solicitudcontratos` (
  `idSolicitudContratos` int(11) NOT NULL,
  `fechaSolicitud` date DEFAULT NULL,
  `tipoContrato` varchar(25) DEFAULT NULL,
  `referenciaSolicitud` varchar(45) DEFAULT NULL,
  `numeroCertificadoP` varchar(45) DEFAULT NULL,
  `fechaCertificadoP` date DEFAULT NULL,
  `numeroCompromisoP` varchar(45) DEFAULT NULL,
  `fechaCompromisoP` date DEFAULT NULL,
  `estadoSeguridadSocial` varchar(45) DEFAULT NULL,
  `observacionesSolicitud` mediumtext,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `contratista` varchar(15) NOT NULL,
  `cedulaEncargado` int(11) NOT NULL,
  `idAreaSolicitante` int(11) NOT NULL,
  `cedulaSupervisor` int(11) NOT NULL,
  `detalleContrato` int(11) DEFAULT NULL,
  `ValorContrato` int(11) DEFAULT NULL,
  `usuarioQueRealiza` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudcontratos`
--

INSERT INTO `solicitudcontratos` (`idSolicitudContratos`, `fechaSolicitud`, `tipoContrato`, `referenciaSolicitud`, `numeroCertificadoP`, `fechaCertificadoP`, `numeroCompromisoP`, `fechaCompromisoP`, `estadoSeguridadSocial`, `observacionesSolicitud`, `fechaInicio`, `fechaFin`, `contratista`, `cedulaEncargado`, `idAreaSolicitante`, `cedulaSupervisor`, `detalleContrato`, `ValorContrato`, `usuarioQueRealiza`) VALUES
(1, '2015-05-09', 'hjvjhjmhjjh', 'werqewrewqrew', '2323', '2015-05-20', '32141234', '2015-05-17', 'No Aplica', '23e23rr43r43r', '2015-05-02', '2015-05-17', '172983933', 12234543, 1, 12344566, 1, 1, 'maicol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `tipo_Usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `email`, `password`, `tipo_Usuario`) VALUES
('', '', '1234', ''),
('hfhret', 'hfdgdhg@erter', 'fjjfgjdsdfdfsdfdsfds', 'Jefe De Area'),
('mario', 'MAICOL@SSJD', 'sfssf', 'Abogado'),
('martin monsalve', 'Anita.bernal@metroparques.gov.co', 'ffgtrtrtrtrt', 'secretaria General'),
('mribera', 'mario.ribera@udea.edu.co', 'marito', 'Interventor'),
('pepito perez', 'pepegrillo@oeoeoee', 'fdvffdvfd', 'Jefe De Area'),
('pepito pereztyj', 'pepegrillo@oeoeoee', 'tyty', 'Jefe De Area'),
('rzuleta', 'ruben.zuleta@metroparques.gov.co', 'ruben%%&&', 'Jefe De Area');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adiciones`
--
ALTER TABLE `adiciones`
  ADD PRIMARY KEY (`idAdiciones`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idAreas`), ADD KEY `fk_Areas_Personas1_idx` (`jefe`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`idContratos`), ADD KEY `fk_Contratos_Empresas1_idx` (`contratante`), ADD KEY `fk_Contratos_Empresas2_idx` (`contratista`), ADD KEY `fk_Contratos_Personas1_idx` (`supervisor`);

--
-- Indices de la tabla `contratos_has_informes`
--
ALTER TABLE `contratos_has_informes`
  ADD PRIMARY KEY (`Contratos_idContratos`,`Informes_idInformes`), ADD KEY `fk_Contratos_has_Informes_Informes1_idx` (`Informes_idInformes`), ADD KEY `fk_Contratos_has_Informes_Contratos1_idx` (`Contratos_idContratos`);

--
-- Indices de la tabla `detallecontratos`
--
ALTER TABLE `detallecontratos`
  ADD PRIMARY KEY (`idDetalleContratos`);

--
-- Indices de la tabla `detallevalorcontratos`
--
ALTER TABLE `detallevalorcontratos`
  ADD PRIMARY KEY (`idDetalleValorContratos`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idEmpresa`), ADD KEY `fk_Empresas_Representantes1_idx` (`Representantes_cedulaRepresentantes`);

--
-- Indices de la tabla `estadotiempos`
--
ALTER TABLE `estadotiempos`
  ADD PRIMARY KEY (`idEstadoTiempos`);

--
-- Indices de la tabla `informacionacumulada`
--
ALTER TABLE `informacionacumulada`
  ADD PRIMARY KEY (`idInformacionAcumulada`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`idInformes`), ADD KEY `fk_Informes_InformacionAcumulada1_idx` (`InformacionAcumulada_idInformacionAcumulada`), ADD KEY `fk_Informes_EstadoTiempos1_idx` (`id_EstadoTiempos`), ADD KEY `fk_Informes_PagosSS1_idx` (`id_PagosSS`), ADD KEY `fk_Informes_Adiciones1_idx` (`id_Adiciones`), ADD KEY `fk_Informes_PagoFacturas1_idx` (`id_PagoFacturas`);

--
-- Indices de la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
  ADD PRIMARY KEY (`idJustificaciones`), ADD KEY `fk_Justificaciones_Areas1_idx` (`Areas_idAreas`), ADD KEY `fk_Justificaciones_Personas1_idx` (`Personas_cedula`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`), ADD KEY `slug` (`slug`);

--
-- Indices de la tabla `pagofacturas`
--
ALTER TABLE `pagofacturas`
  ADD PRIMARY KEY (`idPagoFacturas`);

--
-- Indices de la tabla `pagosss`
--
ALTER TABLE `pagosss`
  ADD PRIMARY KEY (`idPagosSS`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `representantes`
--
ALTER TABLE `representantes`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `solicitudcontratos`
--
ALTER TABLE `solicitudcontratos`
  ADD PRIMARY KEY (`idSolicitudContratos`), ADD KEY `fk_SolicitudContratos_Empresas1_idx` (`contratista`), ADD KEY `fk_SolicitudContratos_Personas1_idx` (`cedulaEncargado`), ADD KEY `fk_SolicitudContratos_Areas1_idx` (`idAreaSolicitante`), ADD KEY `fk_SolicitudContratos_Personas2_idx` (`cedulaSupervisor`), ADD KEY `fk_SolicitudContratos_DetalleContratos1_idx` (`detalleContrato`), ADD KEY `fk_SolicitudContratos_DetalleValorContratos1_idx` (`ValorContrato`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adiciones`
--
ALTER TABLE `adiciones`
  MODIFY `idAdiciones` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `idAreas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `detallecontratos`
--
ALTER TABLE `detallecontratos`
  MODIFY `idDetalleContratos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detallevalorcontratos`
--
ALTER TABLE `detallevalorcontratos`
  MODIFY `idDetalleValorContratos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estadotiempos`
--
ALTER TABLE `estadotiempos`
  MODIFY `idEstadoTiempos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informacionacumulada`
--
ALTER TABLE `informacionacumulada`
  MODIFY `idInformacionAcumulada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
  MODIFY `idJustificaciones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pagofacturas`
--
ALTER TABLE `pagofacturas`
  MODIFY `idPagoFacturas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagosss`
--
ALTER TABLE `pagosss`
  MODIFY `idPagosSS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitudcontratos`
--
ALTER TABLE `solicitudcontratos`
  MODIFY `idSolicitudContratos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
ADD CONSTRAINT `jefeArea` FOREIGN KEY (`jefe`) REFERENCES `personas` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
ADD CONSTRAINT `fk_Contratos_Empresas1` FOREIGN KEY (`contratante`) REFERENCES `empresas` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Contratos_Empresas2` FOREIGN KEY (`contratista`) REFERENCES `empresas` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Contratos_Personas1` FOREIGN KEY (`supervisor`) REFERENCES `personas` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `contratos_has_informes`
--
ALTER TABLE `contratos_has_informes`
ADD CONSTRAINT `fk_Contratos_has_Informes_Contratos1` FOREIGN KEY (`Contratos_idContratos`) REFERENCES `contratos` (`idContratos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Contratos_has_Informes_Informes1` FOREIGN KEY (`Informes_idInformes`) REFERENCES `informes` (`idInformes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
ADD CONSTRAINT `fk_Empresas_Representantes1` FOREIGN KEY (`Representantes_cedulaRepresentantes`) REFERENCES `representantes` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informes`
--
ALTER TABLE `informes`
ADD CONSTRAINT `fk_Informes_Adiciones1` FOREIGN KEY (`id_Adiciones`) REFERENCES `adiciones` (`idAdiciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Informes_EstadoTiempos1` FOREIGN KEY (`id_EstadoTiempos`) REFERENCES `estadotiempos` (`idEstadoTiempos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Informes_InformacionAcumulada1` FOREIGN KEY (`InformacionAcumulada_idInformacionAcumulada`) REFERENCES `informacionacumulada` (`idInformacionAcumulada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Informes_PagoFacturas1` FOREIGN KEY (`id_PagoFacturas`) REFERENCES `pagofacturas` (`idPagoFacturas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Informes_PagosSS1` FOREIGN KEY (`id_PagosSS`) REFERENCES `pagosss` (`idPagosSS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `justificaciones`
--
ALTER TABLE `justificaciones`
ADD CONSTRAINT `fk_Justificaciones_Areas1` FOREIGN KEY (`Areas_idAreas`) REFERENCES `areas` (`idAreas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Justificaciones_Personas1` FOREIGN KEY (`Personas_cedula`) REFERENCES `personas` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudcontratos`
--
ALTER TABLE `solicitudcontratos`
ADD CONSTRAINT `fk_SolicitudContratos_Areas1` FOREIGN KEY (`idAreaSolicitante`) REFERENCES `areas` (`idAreas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_SolicitudContratos_DetalleContratos1` FOREIGN KEY (`detalleContrato`) REFERENCES `detallecontratos` (`idDetalleContratos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_SolicitudContratos_DetalleValorContratos1` FOREIGN KEY (`ValorContrato`) REFERENCES `detallevalorcontratos` (`idDetalleValorContratos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_SolicitudContratos_Empresas1` FOREIGN KEY (`contratista`) REFERENCES `empresas` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_SolicitudContratos_Personas1` FOREIGN KEY (`cedulaEncargado`) REFERENCES `personas` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_SolicitudContratos_Personas2` FOREIGN KEY (`cedulaSupervisor`) REFERENCES `personas` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
