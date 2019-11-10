SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS Control_acceso;

USE Control_acceso;

DROP TABLE IF EXISTS beneficiario;

CREATE TABLE `beneficiario` (
  `Cedula_Beneficiario` int(10) NOT NULL,
  `Nombre_Beneficiario` varchar(15) NOT NULL,
  `Apellido_Beneficiario` varchar(15) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Tipo_Beneficiario` varchar(20) NOT NULL,
  `Carrera` varchar(30) NOT NULL,
  `Correo_Beneficiario` varchar(30) NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY (`Cedula_Beneficiario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO beneficiario VALUES("12345","","","FEMENINO","","","","1");
INSERT INTO beneficiario VALUES("123456","Santiago","Vargas","MASCULINO","DOCENTE","PNF en ConstrucciÃƒÂ³n Civil","santiago@gmail.com","1");
INSERT INTO beneficiario VALUES("123456789","Marcos","Carrero","MASCULINO","ESTUDIANTE","Manejo de Emergencias y AcciÃƒ","marcos@gmail.com","2");



DROP TABLE IF EXISTS estaciones;

CREATE TABLE `estaciones` (
  `Codigo` varchar(8) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  `Marca` varchar(15) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO estaciones VALUES("1234","FUERA DE SERVIC","Lenovo");
INSERT INTO estaciones VALUES("123456","FUNCIONAL","Hp");



DROP TABLE IF EXISTS registros;

CREATE TABLE `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Ingreso` date NOT NULL,
  `Hora_Entrada` time NOT NULL,
  `Hora_Salida` time NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `idEstacion` varchar(11) NOT NULL,
  `IdBeneficiario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_registros_usuarios` (`IdUsuario`),
  KEY `fk_registros_beneficiarios` (`IdBeneficiario`),
  KEY `fk_registros_estaciones` (`idEstacion`),
  CONSTRAINT `fk_registros_beneficiarios` FOREIGN KEY (`IdBeneficiario`) REFERENCES `beneficiario` (`Cedula_Beneficiario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_registros_estaciones` FOREIGN KEY (`idEstacion`) REFERENCES `estaciones` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_registros_usuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Cedula_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO registros VALUES("2","2019-11-10","07:11:55","07:41:55","1234","1234","123456");
INSERT INTO registros VALUES("3","2019-11-10","07:16:54","07:46:54","1234","1234","12345");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `Cedula_Usuario` int(10) NOT NULL,
  `Nombre_Usuario` varchar(15) NOT NULL,
  `Apellido_Usuario` varchar(15) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `Correo_Usuario` varchar(30) NOT NULL,
  `Contrasena` varchar(35) NOT NULL,
  PRIMARY KEY (`Cedula_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1234","","","1","","admin");
INSERT INTO usuario VALUES("123456","Maria","Vargas","2","maria@gmail.com","e10adc3949ba59abbe56e057f20f883e");
INSERT INTO usuario VALUES("27551010","Diego","Carrero","2","diego@gmail.com","123456");
INSERT INTO usuario VALUES("123456789","JJJJJJJJJJJJJJJ","SAJSSI","1","amd@dsclf","12345");



SET FOREIGN_KEY_CHECKS=1;