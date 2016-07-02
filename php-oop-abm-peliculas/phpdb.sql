-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.67-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

--
-- Table structure for table `phpdb`.`categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `cod_categoria` int(10) unsigned NOT NULL auto_increment,
  `descripcion` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`cod_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpdb`.`categorias`
--

/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`cod_categoria`,`descripcion`) VALUES 
 (1,'Televisores'),
 (2,'Computadoras'),
 (3,'Impresoras'),
 (4,'Notebooks'),
 (5,'Heladeras'),
 (6,'Telefonos'),
 (7,'Lavarropas'),
 (8,'Camaras digitales'),
 (9,'Video camaras'),
 (10,'Estufas'),
 (11,'Aire acondicionado'),
 (12,'Radio'),
 (13,'Home Theater');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


--
-- Table structure for table `phpdb`.`marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `cod_marca` int(10) unsigned NOT NULL auto_increment,
  `nombre_marca` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`cod_marca`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpdb`.`marcas`
--

/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`cod_marca`,`nombre_marca`) VALUES 
 (1,'SANYO'),
 (2,'SONY'),
 (3,'LG'),
 (4,'AOC'),
 (5,'SAMSUNG'),
 (6,'TOSHIBA'),
 (7,'HEWLETT PACKARD'),
 (8,'EPSON'),
 (9,'KODAK'),
 (10,'PHILCO'),
 (11,'HITACHI'),
 (12,'ADMIRAL'),
 (13,'NOBLEX'),
 (14,'PHILIPS'),
 (15,'COMPAQ PRESARIO'),
 (16,'X-VIEW'),
 (17,'KEN BROWN'),
 (18,'RANSER'),
 (19,'PATRICK'),
 (20,'SIGMA'),
 (21,'GAFA'),
 (22,'WESTINGHOUSE');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;


--
-- Table structure for table `phpdb`.`peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas` (
  `cod_pelicula` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL default '',
  `genero` varchar(45) NOT NULL default '',
  `descripcion` varchar(200) NOT NULL default '',
  `stock` int(10) unsigned NOT NULL default '0',
  `disponibles` int(10) unsigned NOT NULL default '0',
  `fecha` date NOT NULL default '0000-00-00',
  `precio` float NOT NULL default '0',
  PRIMARY KEY  (`cod_pelicula`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpdb`.`peliculas`
--

/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`cod_pelicula`,`nombre`,`genero`,`descripcion`,`stock`,`disponibles`,`fecha`,`precio`) VALUES 
 (1,'El paciente ingles','Drama','Durante la segunda Guerra Mundial, un piloto es rescatado de los...',4,4,'1996-11-17',14.9),
 (2,'Perfume de mujer','Drama','Charlie está becado en uno de los mejores colegios de Estados Unidos',5,5,'1992-12-23',20),
 (3,'El mercader de venecia','Drama','Situada en la Venecia del siglo XVI, esta eterna comedia... ',3,3,'2004-12-05',25.5),
 (4,'Atrapado sin salida','Accion','Para no entrar en la cárcel, Randle Patrick McMurphy convenció al juez que es...',4,4,'1976-02-12',19.9),
 (5,'Lo que el viento se llevo','Drama','Esta grandiosa superproduccion marco un hito en el mundo cinematografico... ',4,4,'1939-12-15',35),
 (6,'El Mago de Oz','Ficcion','Dorothy es una niña huérfana que se siente infeliz en la granja de sus...',5,5,'1939-08-12',34.9),
 (7,'King Kong','Ficcion','Carl Denham es un director de cine que busca desesperadamente una actriz... ',4,4,'1993-04-07',49.9),
 (8,'Casablanca','Drama','Durante la II Guerra Mundial, Rick Blaine dirige un exitoso local nocturno en Casablanca... ',5,5,'1942-11-26',14.9);
INSERT INTO `peliculas` (`cod_pelicula`,`nombre`,`genero`,`descripcion`,`stock`,`disponibles`,`fecha`,`precio`) VALUES 
 (9,'La mujer pantera','Accion','Irena, una muchacha serbia que vive en Nueva York, se halla en el zoologico... ',4,4,'1942-12-25',25),
 (10,'Cantando bajo la lluvia','Musical','Con el nacimiento del cine sonoro en 1927, la industria cinematográfica debe renovarse... ',3,3,'1952-04-11',29.9);
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;


--
-- Table structure for table `phpdb`.`productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `cod_producto` int(10) unsigned NOT NULL auto_increment,
  `cod_categoria` int(10) unsigned NOT NULL default '0',
  `nombre` varchar(45) NOT NULL default '',
  `precio` float NOT NULL default '0',
  `stock` int(10) unsigned NOT NULL default '0',
  `cod_marca` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cod_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpdb`.`productos`
--

/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`cod_producto`,`cod_categoria`,`nombre`,`precio`,`stock`,`cod_marca`) VALUES 
 (1,1,'TV LCD 19\" MODELO PFL3403',2199,40,14),
 (2,1,'TV LCD22\" MODELO LN22A450',2399,30,5),
 (3,1,'TV LCD 32\" MODELO LC813H ',2999,25,13),
 (4,1,'TV LCD 26\" MODELO 26LG30R',2999,25,3),
 (5,1,'TV LCD 26\" MODELO CDH-L26S02',3099,20,11),
 (6,1,'TV LCD 32\" MODELO PL3219 ',3399,20,10),
 (7,2,'CPU LE1250DVD2GB160VS',2199,15,12),
 (8,2,'CPU A64X246DV2G160VBOF ',2499,8,12),
 (9,2,'CPU E5200DVDR2GB320VB ',2699,5,12),
 (10,2,'CPU SG3308LA ',3099,5,15),
 (11,3,'IMPRESORA T23 ',219,18,8),
 (12,3,'IMPRESORA DJ-6940 ',349,20,7),
 (13,3,'IMPRESORA T33',399,12,8),
 (14,3,'IMPRESORA K5400  ',499,8,7),
 (15,13,'HOME CINEMA SPH70 ',319,0,10),
 (16,13,'HOME CINEMA AMX115 ',419,0,13),
 (17,13,'HOME CINEMA HT E 860 ',599,0,16),
 (18,13,'HOME CINEMA DC-T990 ',759,5,1),
 (19,13,'HOME CINEMA HT-1105U',829,18,13),
 (20,13,'HOME CINEMA HT304SL-A2 ',949,6,3),
 (21,13,'HOME CINEMA HT-Z110 ',999,22,5),
 (22,13,'HOME CINEMA HTS3011/55',1099,18,14),
 (23,13,'HOME CINEMA HT503SH',1299,15,3);
INSERT INTO `productos` (`cod_producto`,`cod_categoria`,`nombre`,`precio`,`stock`,`cod_marca`) VALUES 
 (24,13,'HOME CINEMA HT503SH-AM',1299,12,3),
 (25,13,'HOME CINEMA HT-IS10',1499,7,2),
 (26,13,'HOME CINEMA HTS3365/55',1599,5,14),
 (27,12,'RADIO PORT RP 299  ',49,5,13),
 (28,12,'RADIO DX-365',79,15,17),
 (29,12,'RADIO ICF-S10MK2/SCE',79,15,2),
 (30,12,'RADIO ICF-18  ',99,15,2),
 (31,12,'RADIO ICF-303/304 AM-FM ',129,8,2),
 (32,12,'RADIO SRF-59/SC E ',129,10,2),
 (33,4,'NOTEBOOK C2D2VB250WC14',3699,12,12),
 (34,4,'NOTEBOOK CQ40-300',2999,9,15),
 (35,4,'NOTEBOOK DV2-1010',3999,7,7),
 (36,4,'NOTEBOOK DV4-1212',4199,9,7),
 (37,4,'NOTEBOOK DV4-1212',4199,10,7),
 (38,6,'TELEFONO DECT1221S INALAMBRICO',169,15,14),
 (39,6,'TELEFONO CD1401B INALAMBRICO',169,8,14),
 (40,6,'TELEFONO CD2401S INALAMBRICO',239,8,14),
 (41,6,'TELEFONO CD1302S INALAMBRICO',249,8,14),
 (42,6,'TELEFONO SANYO HNS-3300 ',69,10,1),
 (43,7,'LAVARROPA GAFA 7000 DIG PROGR 7KG',1679,7,21),
 (44,7,'LAVARROPA GAFA 7500 T750 7,5K ',1839,4,21),
 (45,7,'LAVARROPA GAFA ACQ7500 GRAFT750 7,5K ',1939,12,21);
INSERT INTO `productos` (`cod_producto`,`cod_categoria`,`nombre`,`precio`,`stock`,`cod_marca`) VALUES 
 (46,7,'LAVARROPA LG WF-T1202TP 12KG C/S',2449,10,3),
 (47,7,'LAVARROPA LG WF-T1205TP 12K TITANIUM',2499,10,3),
 (48,8,'CAMARA DIGITAL KODAK C813',549,10,9),
 (49,8,'CAMARA DIGITAL VPCS-870EX ',579,15,1),
 (50,8,'CAMARA DIGITAL C913',599,15,9),
 (51,8,'CAMARA DIGITAL 760+KIT',649,15,5),
 (52,8,'CAMARA DIGITAL ES10',749,20,5),
 (53,8,'CAMARA DIGITAL ES15 ',799,40,5),
 (54,9,'CAMARA VIDEO DCR-DVD650',2749,15,2),
 (55,9,'CAMARA VIDEO DCR-DVD810 ',2999,10,2),
 (56,10,'CALEFACTOR TB 2400 GN',459,12,20),
 (57,10,'CALEFACTOR TB 3000 GN',699,12,20),
 (58,10,'CALEFACTOR TB 5000 GN',1999,15,20),
 (59,11,'AIRE ACONDICIONADOR SP TS-C096EMAO 2200FS',1999,15,3),
 (60,11,'AIRE ACONDICIONADOR SP TS-C096EMAO 2200FS ',1999,10,3),
 (61,11,'AIRE ACONDICIONADOR SP TS-C126EMAO 3000FS',2249,10,3),
 (62,11,'AIRE ACONDICIONADOR SP TS-C1865DLO 4500FS',3049,20,3),
 (63,11,'AIRE ACONDICIONADOR SP LS-C1863RMO 4500FS',3349,20,3),
 (64,11,'AIRE ACONDICIONADOR SP WSX09CG5R 2500WFS',1599,15,22);
INSERT INTO `productos` (`cod_producto`,`cod_categoria`,`nombre`,`precio`,`stock`,`cod_marca`) VALUES 
 (65,0,'',2999,12,15);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


--
-- Table structure for table `phpdb`.`usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `usuario` varchar(20) character set utf8 NOT NULL,
  `password` varchar(50) character set utf8 NOT NULL,
  `nombre` varchar(50) character set utf8 NOT NULL,
  `apellido` varchar(50) character set utf8 NOT NULL,
  `mail` varchar(100) character set utf8 NOT NULL,
  `fecha_nac` date NOT NULL default '0000-00-00',
  `sexo` varchar(1) character set utf8 NOT NULL,
  `pais` varchar(3) character set utf8 NOT NULL,
  `imagen` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpdb`.`usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario`,`password`,`nombre`,`apellido`,`mail`,`fecha_nac`,`sexo`,`pais`,`imagen`) VALUES
 ('ariel75','aaa','Nahuelito','martinez','PEPE2@gmail.com','1975-12-15','m','BRA','chica.jpg'),
 ('pruebausuario3','prueba3','jose','prueba3','jose@hotmail.com','1986-10-14','m','CHI','lapices.jpg'),
 ('martin1','111','Martin','rodriguez','martin@mail.com','1982-07-30','m','URU','leon.jpg'),
 ('jorgeg','1234','jorge','gomez','nose@nose.com','1992-02-24','m','ARG','goku.jpg'),
 ('holahola','hola','Pablo','Marzulli','papapa@grassdasd.com','1989-05-06','m','ARG','tipo.png'),
 ('sabri6','sabri','Sabrinas','Merlo','sabrimerlo@gmail.com','1950-07-04','f','ARG','algo.jpg'),
 ('car','car','Carla','Gomez','cgomez@hotmail.com','1989-02-21','f','URU','capucha.gif');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
