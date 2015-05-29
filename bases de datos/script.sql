SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sigmep` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sigmep` ;

-- -----------------------------------------------------
-- Table `sigmep`.`Representantes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Representantes` (
  `cedula` INT NOT NULL ,
  `lugarExpedicion` VARCHAR(15) NULL ,
  `nombreRepresentantes` VARCHAR(45) NULL ,
  `apellidoRepresentantes` VARCHAR(45) NULL ,
  `cargoRepresentante` VARCHAR(10) NULL ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Empresas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Empresas` (
  `idEmpresa` VARCHAR(15) NOT NULL ,
  `nombreEmpresa` VARCHAR(45) NULL ,
  `Representantes_cedulaRepresentantes` INT NOT NULL ,
  PRIMARY KEY (`idEmpresa`) ,
  INDEX `fk_Empresas_Representantes1_idx` (`Representantes_cedulaRepresentantes` ASC) ,
  CONSTRAINT `fk_Empresas_Representantes1`
    FOREIGN KEY (`Representantes_cedulaRepresentantes` )
    REFERENCES `sigmep`.`Representantes` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Personas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Personas` (
  `cedula` INT NOT NULL ,
  `nombres` VARCHAR(45) NULL ,
  `apellidos` VARCHAR(45) NULL ,
  `email` VARCHAR(15) NULL ,
  `direccion` VARCHAR(20) NULL ,
  `telefono` VARCHAR(45) NULL ,
  PRIMARY KEY (`cedula`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Areas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Areas` (
  `idAreas` INT NOT NULL ,
  `nombreAreas` VARCHAR(45) NULL ,
  `Personas_cedula` INT NOT NULL ,
  PRIMARY KEY (`idAreas`) ,
  INDEX `fk_Areas_Personas1_idx` (`Personas_cedula` ASC) ,
  CONSTRAINT `jefeArea`
    FOREIGN KEY (`Personas_cedula` )
    REFERENCES `sigmep`.`Personas` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`DetalleContratos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`DetalleContratos` (
  `idDetalleContratos` INT NOT NULL ,
  `objetoContrato` LONGTEXT NULL ,
  `obligacionesContratista` LONGTEXT NULL ,
  `obligacionesContratante` LONGTEXT NULL ,
  PRIMARY KEY (`idDetalleContratos`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Justificaciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Justificaciones` (
  `idJustificaciones` INT NOT NULL ,
  `fechaJustificacion` DATETIME NULL ,
  `valorContrato` FLOAT NULL ,
  `que` MEDIUMTEXT NULL ,
  `porque` MEDIUMTEXT NULL ,
  `paraque` MEDIUMTEXT NULL ,
  `plazoContrato` VARCHAR(45) NULL ,
  `observaciones` MEDIUMTEXT NULL ,
  `resultadoEsperado` MEDIUMTEXT NULL ,
  `especificacionesContrato` MEDIUMTEXT NULL ,
  `fechaAutorizacion` DATETIME NULL ,
  `Areas_idAreas` INT NOT NULL ,
  `Personas_cedula` INT NOT NULL ,
  PRIMARY KEY (`idJustificaciones`) ,
  INDEX `fk_Justificaciones_Areas1_idx` (`Areas_idAreas` ASC) ,
  INDEX `fk_Justificaciones_Personas1_idx` (`Personas_cedula` ASC) ,
  CONSTRAINT `fk_Justificaciones_Areas1`
    FOREIGN KEY (`Areas_idAreas` )
    REFERENCES `sigmep`.`Areas` (`idAreas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Justificaciones_Personas1`
    FOREIGN KEY (`Personas_cedula` )
    REFERENCES `sigmep`.`Personas` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`DetalleValorContratos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`DetalleValorContratos` (
  `idDetalleValorContratos` INT NOT NULL ,
  `valorContrato` FLOAT NULL ,
  `iva` DECIMAL(5) NULL ,
  `formasPago` LONGTEXT NULL ,
  PRIMARY KEY (`idDetalleValorContratos`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`InformacionAcumulada`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`InformacionAcumulada` (
  `idInformacionAcumulada` INT NOT NULL ,
  `saldoFacturado` FLOAT NULL ,
  `valorEjecutado` FLOAT NULL ,
  `saldoPorFacturar` FLOAT NULL ,
  `valorPorEjecutar` FLOAT NULL ,
  PRIMARY KEY (`idInformacionAcumulada`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`EstadoTiempos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`EstadoTiempos` (
  `idEstadoTiempos` INT NOT NULL ,
  `estadoContrato` VARCHAR(45) NULL ,
  `tiempoTranscurrido` VARCHAR(45) NULL ,
  `porcentajeTT` VARCHAR(5) NULL ,
  `tiempoPorTranscurrir` VARCHAR(45) NULL ,
  `porcentajeTPT` VARCHAR(5) NULL ,
  PRIMARY KEY (`idEstadoTiempos`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`PagosSS`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`PagosSS` (
  `idPagosSS` INT NOT NULL ,
  `Mes` VARCHAR(15) NULL ,
  `Planilla` VARCHAR(25) NULL ,
  `IBC` VARCHAR(25) NULL ,
  `fechaPago` DATETIME NULL ,
  PRIMARY KEY (`idPagosSS`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Adiciones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Adiciones` (
  `idAdiciones` INT NOT NULL AUTO_INCREMENT ,
  `observaciones` VARCHAR(45) NULL ,
  `tiempo` VARCHAR(45) NULL ,
  `dinero` VARCHAR(45) NULL ,
  `estadoContrato` VARCHAR(45) NULL ,
  PRIMARY KEY (`idAdiciones`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`PagoFacturas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`PagoFacturas` (
  `idPagoFacturas` INT NOT NULL AUTO_INCREMENT ,
  `numero` VARCHAR(45) NULL ,
  `fechaFactura` DATETIME NULL ,
  `valorFactura` FLOAT NULL ,
  PRIMARY KEY (`idPagoFacturas`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Informes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Informes` (
  `idInformes` INT NOT NULL ,
  `concepto` VARCHAR(45) NULL ,
  `fechaInforme` DATETIME NULL ,
  `periodoInforme` VARCHAR(45) NULL ,
  `estadoFinanciero` VARCHAR(45) NULL ,
  `Informescol` VARCHAR(45) NULL ,
  `InformacionAcumulada_idInformacionAcumulada` INT NOT NULL ,
  `EstadoTiempos_idEstadoTiempos` INT NOT NULL ,
  `PagosSS_idPagosSS` INT NOT NULL ,
  `Adiciones_idAdiciones` INT NOT NULL ,
  `PagoFacturas_idPagoFacturas` INT NOT NULL ,
  PRIMARY KEY (`idInformes`) ,
  INDEX `fk_Informes_InformacionAcumulada1_idx` (`InformacionAcumulada_idInformacionAcumulada` ASC) ,
  INDEX `fk_Informes_EstadoTiempos1_idx` (`EstadoTiempos_idEstadoTiempos` ASC) ,
  INDEX `fk_Informes_PagosSS1_idx` (`PagosSS_idPagosSS` ASC) ,
  INDEX `fk_Informes_Adiciones1_idx` (`Adiciones_idAdiciones` ASC) ,
  INDEX `fk_Informes_PagoFacturas1_idx` (`PagoFacturas_idPagoFacturas` ASC) ,
  CONSTRAINT `fk_Informes_InformacionAcumulada1`
    FOREIGN KEY (`InformacionAcumulada_idInformacionAcumulada` )
    REFERENCES `sigmep`.`InformacionAcumulada` (`idInformacionAcumulada` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informes_EstadoTiempos1`
    FOREIGN KEY (`EstadoTiempos_idEstadoTiempos` )
    REFERENCES `sigmep`.`EstadoTiempos` (`idEstadoTiempos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informes_PagosSS1`
    FOREIGN KEY (`PagosSS_idPagosSS` )
    REFERENCES `sigmep`.`PagosSS` (`idPagosSS` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informes_Adiciones1`
    FOREIGN KEY (`Adiciones_idAdiciones` )
    REFERENCES `sigmep`.`Adiciones` (`idAdiciones` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informes_PagoFacturas1`
    FOREIGN KEY (`PagoFacturas_idPagoFacturas` )
    REFERENCES `sigmep`.`PagoFacturas` (`idPagoFacturas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`SolicitudContratos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`SolicitudContratos` (
  `idSolicitudContratos` INT NOT NULL ,
  `fechaSolicitud` DATETIME NULL ,
  `tipoContrato` VARCHAR(25) NULL ,
  `referenciaSolicitud` VARCHAR(45) NULL ,
  `numeroCertificadoP` VARCHAR(45) NULL ,
  `fechaCertificadoP` DATETIME NULL ,
  `numeroCompromisoP` VARCHAR(45) NULL ,
  `fechaCompromisoP` VARCHAR(45) NULL ,
  `estadoSeguridadSocial` VARCHAR(45) NULL ,
  `observacionesSolicitud` MEDIUMTEXT NULL ,
  `fechaInicio` DATETIME NULL ,
  `fechaFin` DATETIME NULL ,
  `Empresas_idEmpresa` VARCHAR(15) NOT NULL ,
  `Personas_cedula` INT NOT NULL ,
  `Areas_idAreas` INT NOT NULL ,
  `Personas_cedula1` INT NOT NULL ,
  `DetalleContratos_idDetalleContratos` INT NOT NULL ,
  `DetalleValorContratos_idDetalleValorContratos` INT NOT NULL ,
  `Informes_idInformes` INT NOT NULL ,
  PRIMARY KEY (`idSolicitudContratos`) ,
  INDEX `fk_SolicitudContratos_Empresas1_idx` (`Empresas_idEmpresa` ASC) ,
  INDEX `fk_SolicitudContratos_Personas1_idx` (`Personas_cedula` ASC) ,
  INDEX `fk_SolicitudContratos_Areas1_idx` (`Areas_idAreas` ASC) ,
  INDEX `fk_SolicitudContratos_Personas2_idx` (`Personas_cedula1` ASC) ,
  INDEX `fk_SolicitudContratos_DetalleContratos1_idx` (`DetalleContratos_idDetalleContratos` ASC) ,
  INDEX `fk_SolicitudContratos_DetalleValorContratos1_idx` (`DetalleValorContratos_idDetalleValorContratos` ASC) ,
  INDEX `fk_SolicitudContratos_Informes1_idx` (`Informes_idInformes` ASC) ,
  CONSTRAINT `fk_SolicitudContratos_Empresas1`
    FOREIGN KEY (`Empresas_idEmpresa` )
    REFERENCES `sigmep`.`Empresas` (`idEmpresa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_Personas1`
    FOREIGN KEY (`Personas_cedula` )
    REFERENCES `sigmep`.`Personas` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_Areas1`
    FOREIGN KEY (`Areas_idAreas` )
    REFERENCES `sigmep`.`Areas` (`idAreas` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_Personas2`
    FOREIGN KEY (`Personas_cedula1` )
    REFERENCES `sigmep`.`Personas` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_DetalleContratos1`
    FOREIGN KEY (`DetalleContratos_idDetalleContratos` )
    REFERENCES `sigmep`.`DetalleContratos` (`idDetalleContratos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_DetalleValorContratos1`
    FOREIGN KEY (`DetalleValorContratos_idDetalleValorContratos` )
    REFERENCES `sigmep`.`DetalleValorContratos` (`idDetalleValorContratos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SolicitudContratos_Informes1`
    FOREIGN KEY (`Informes_idInformes` )
    REFERENCES `sigmep`.`Informes` (`idInformes` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmep`.`Contratos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sigmep`.`Contratos` (
  `idContratos` INT NOT NULL ,
  `fechaElaboracion` DATETIME NULL ,
  `tipoContrato` VARCHAR(45) NULL ,
  `valorContrato` FLOAT NULL ,
  `plazoEjecucion` VARCHAR(45) NULL ,
  `fechaInicio` DATETIME NULL ,
  `fechaFin` DATETIME NULL ,
  `objetoContrato` MEDIUMTEXT NULL ,
  `formaDePago` MEDIUMTEXT NULL ,
  `alcance` MEDIUMTEXT NULL ,
  `Empresas_idEmpresa` VARCHAR(15) NOT NULL ,
  `Empresas_idEmpresa1` VARCHAR(15) NOT NULL ,
  `Personas_cedula` INT NOT NULL ,
  PRIMARY KEY (`idContratos`) ,
  INDEX `fk_Contratos_Empresas1_idx` (`Empresas_idEmpresa` ASC) ,
  INDEX `fk_Contratos_Empresas2_idx` (`Empresas_idEmpresa1` ASC) ,
  INDEX `fk_Contratos_Personas1_idx` (`Personas_cedula` ASC) ,
  CONSTRAINT `fk_Contratos_Empresas1`
    FOREIGN KEY (`Empresas_idEmpresa` )
    REFERENCES `sigmep`.`Empresas` (`idEmpresa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contratos_Empresas2`
    FOREIGN KEY (`Empresas_idEmpresa1` )
    REFERENCES `sigmep`.`Empresas` (`idEmpresa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contratos_Personas1`
    FOREIGN KEY (`Personas_cedula` )
    REFERENCES `sigmep`.`Personas` (`cedula` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `sigmep` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
