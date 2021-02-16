-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2019 a las 07:58:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qatar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alineaciones`
--

CREATE TABLE `alineaciones` (
  `Id_Alineacion` decimal(4,0) NOT NULL,
  `Id_Jugador` decimal(4,0) NOT NULL,
  `Id_Formacion` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_grupo`
--

CREATE TABLE `asignacion_grupo` (
  `Id_Asignacion` int(11) NOT NULL,
  `Id_Grupo` decimal(4,0) NOT NULL,
  `Id_Seleccion` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_grupo`
--

INSERT INTO `asignacion_grupo` (`Id_Asignacion`, `Id_Grupo`, `Id_Seleccion`) VALUES
(1, '1', '7'),
(2, '2', '23'),
(3, '3', '4'),
(4, '4', '1'),
(5, '5', '18'),
(6, '6', '9'),
(7, '7', '5'),
(8, '8', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_jugador`
--

CREATE TABLE `asignacion_jugador` (
  `Id_asignacion` decimal(4,0) NOT NULL,
  `Id_Jugador` decimal(4,0) NOT NULL,
  `Id_Posicion` decimal(4,0) NOT NULL,
  `Id_Seleccion` decimal(4,0) NOT NULL,
  `Id_Club` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignacion_jugador`
--

INSERT INTO `asignacion_jugador` (`Id_asignacion`, `Id_Jugador`, `Id_Posicion`, `Id_Seleccion`, `Id_Club`) VALUES
('1', '1', '12', '1', '1'),
('2', '2', '11', '4', '15'),
('3', '3', '12', '3', '3'),
('4', '4', '6', '8', '6'),
('5', '5', '12', '8', '3'),
('6', '6', '2', '2', '2'),
('7', '7', '10', '4', '3'),
('8', '8', '1', '9', '1'),
('10', '10', '10', '11', '1'),
('11', '11', '1', '21', '8'),
('12', '12', '12', '5', '8'),
('13', '13', '3', '5', '3'),
('14', '14', '10', '5', '2'),
('15', '15', '12', '20', '2'),
('16', '16', '8', '6', '2'),
('17', '17', '4', '6', '2'),
('18', '18', '10', '11', '8'),
('19', '19', '11', '4', '8'),
('20', '20', '13', '4', '1'),
('21', '21', '12', '1', '4'),
('22', '22', '1', '9', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `Id_Calendario` decimal(4,0) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `Id_Club` decimal(4,0) NOT NULL,
  `Nombre_Club` varchar(50) NOT NULL,
  `Id_Pais` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`Id_Club`, `Nombre_Club`, `Id_Pais`) VALUES
('1', 'F.C. BARCELONA', '53'),
('2', 'LIVERPOOL', '67'),
('3', 'REAL MADRID F.C', '53'),
('4', 'JUVENTUS C.F', '71'),
('5', 'SEVILLA F.C', '53'),
('6', 'Manchaster City', '67'),
('7', 'Manchaster United', '67'),
('8', 'Paris Saint-Germain', '58'),
('9', 'Club Atletico de Madrid', '53'),
('10', 'Deportivo La CoruÃ±a', '53'),
('11', 'Chelsea F.C', '67'),
('12', 'Totenham', '67'),
('13', 'NORWITCH CITY', '67'),
('14', 'FIORENTINA', '71'),
('15', 'BAYERN MUNICH', '3'),
('16', 'PSV', '62'),
('17', 'AJAX', '62'),
('18', 'C.F VALENCIA', '53'),
('19', 'LILLE', '58'),
('20', 'TOLUCA', '75'),
('21', 'CLUB AMERICA', '75'),
('22', 'MONACO', '58'),
('23', 'NAPOLI', '71'),
('24', 'BORUSSIA DORMUND', '3'),
('25', 'BOCA JUNIORS', '9'),
('26', 'RIVER PLATE', '9'),
('27', 'HERTHA BERLIN', '3'),
('28', 'INTERNAZIONALE', '71'),
('29', 'A.C MILAN', '71'),
('30', 'TORINO', '71'),
('31', 'BENFICA F.C', '83'),
('32', 'F.C PORTO', '83'),
('33', 'SPORTING DE LISBOA', '83'),
('34', 'REAL BETIS', '53'),
('53', 'HOFFENHEIM', '3'),
('54', 'SOUTHAMPTON', '67'),
('55', 'STOKE CITY', '67'),
('56', 'SAMPDORIA', '71'),
('75', 'SCHALKE 04', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro`
--

CREATE TABLE `encuentro` (
  `Id_Encuentro` decimal(4,0) NOT NULL,
  `Id_Calendario` decimal(4,0) NOT NULL,
  `Id_Grupo` decimal(4,0) NOT NULL,
  `Id_Estadio` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadio`
--

CREATE TABLE `estadio` (
  `Id_Estadio` decimal(4,0) NOT NULL,
  `Nombre_Estadio` varchar(50) NOT NULL,
  `Capacidad` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadio`
--

INSERT INTO `estadio` (`Id_Estadio`, `Nombre_Estadio`, `Capacidad`) VALUES
('1', 'Doha Port', '44950'),
('2', 'Lusail Iconic', '86250'),
('3', 'Al-Shamal', '45120'),
('4', 'Al-Khor', '45330'),
('5', 'Al-Wakrah', '45120'),
('6', 'Al-Rayyan', '44740'),
('7', 'Qatar University', '43500'),
('8', 'Umm Slal', '45120'),
('9', 'Khalifa International', '70000'),
('10', 'Education City', '45350'),
('11', 'Sports City', '47500'),
('12', 'Al-Gharafa', '44740');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica_jugador`
--

CREATE TABLE `estadistica_jugador` (
  `Id_Jugador` decimal(4,0) NOT NULL,
  `Remates` decimal(4,0) DEFAULT NULL,
  `Goles` decimal(3,0) DEFAULT NULL,
  `Asistencias` decimal(4,0) DEFAULT NULL,
  `Km_Recorridos` decimal(4,0) DEFAULT NULL,
  `Pases_Completados` decimal(4,0) DEFAULT NULL,
  `Faltas` decimal(4,0) DEFAULT NULL,
  `T_Rojas` decimal(2,0) DEFAULT NULL,
  `T_Amarillas` decimal(2,0) DEFAULT NULL,
  `Off_Side` decimal(3,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE `formacion` (
  `Id_Formacion` decimal(4,0) NOT NULL,
  `Nombre_Formacion` varchar(50) NOT NULL,
  `Formacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `formacion`
--

INSERT INTO `formacion` (`Id_Formacion`, `Nombre_Formacion`, `Formacion`) VALUES
('1', 'Ataque', '4-3-3'),
('2', 'Defensa', '4-3-3'),
('3', 'Predeterminada', '4-3-3'),
('4', 'Ataque', '4-4-2'),
('5', 'Defensa', '4-4-2'),
('6', 'Predeterminada', '4-4-2'),
('7', 'Ataque', '5-4-1'),
('8', 'Defensa', '5-4-1'),
('9', 'Predeterminada', '5-4-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `Id_Grupo` decimal(4,0) NOT NULL,
  `Nombre_Grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Id_Grupo`, `Nombre_Grupo`) VALUES
('1', 'Grupo A'),
('2', 'Grupo B'),
('3', 'Grupo C'),
('4', 'Grupo D'),
('5', 'Grupo E'),
('6', 'Grupo F'),
('7', 'Grupo G'),
('8', 'Grupo H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `Id_Jugador` decimal(4,0) NOT NULL,
  `Nombre_Jugador` varchar(50) NOT NULL,
  `Edad` decimal(4,0) NOT NULL,
  `Dorsal` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`Id_Jugador`, `Nombre_Jugador`, `Edad`, `Dorsal`) VALUES
('1', 'LIONEL MESSI', '32', '10'),
('2', 'FRANK RIBERY', '36', '7'),
('3', 'CRISTIANO RONALDO', '33', '7'),
('4', 'KEVIN DE BRUYNE', '27', '8'),
('5', 'EDEN HAZARD', '28', '7'),
('6', 'VAN DIJK', '27', '4'),
('7', 'KARIM BENZEMA', '34', '9'),
('8', 'MARC ANDRE TER STEGEN', '27', '1'),
('10', 'LUIS SUAREZ', '33', '9'),
('11', 'KEYLOR NAVAS', '34', '1'),
('12', 'NEYMAR JR', '28', '10'),
('13', 'MARCELO VIEIRA', '33', '12'),
('14', 'ROBERTO FIRMINO', '28', '9'),
('15', 'SADIO MANE', '27', '10'),
('16', 'JAMES MILNER', '35', '7'),
('17', 'TRENT ALEXANDER ARDOLD', '23', '66'),
('18', 'EDISON CAVANI', '33', '9'),
('19', 'KILLIAN MBAPPE', '22', '7'),
('20', 'ANTONIE GRIEZMAN', '27', '17'),
('21', 'PAULO DYBALA', '26', '10'),
('22', 'MANUEL NEUER', '34', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Id_Pais` decimal(4,0) NOT NULL,
  `Nombre_Pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Id_Pais`, `Nombre_Pais`) VALUES
('1', 'Afganistan'),
('2', 'Albania'),
('3', 'Alemania'),
('4', 'Andorra'),
('5', 'Angola'),
('6', 'Antigua y Barbuda'),
('7', 'Arabia Sauita'),
('8', 'Argelia'),
('9', 'Argentina'),
('10', 'Armenia'),
('11', 'Australia'),
('12', 'Austria'),
('13', 'Azerbaiyan'),
('14', 'Bahamas'),
('15', 'Banglades'),
('16', 'Barbados'),
('17', 'Barein'),
('18', 'Belgica'),
('19', 'Belice'),
('20', 'Benin'),
('21', 'Bielorrusia'),
('22', 'Birmania'),
('23', 'Bolivia'),
('24', 'Bosnia y Herzegovina'),
('25', 'Botsuana'),
('26', 'Brasil'),
('27', 'Brunei'),
('28', 'Bulgaria'),
('29', 'Burkina Faso'),
('30', 'Burundi'),
('31', 'Butan'),
('32', 'Cabo Verde'),
('33', 'Camboya'),
('34', 'Camerun'),
('35', 'Canada'),
('36', 'Catar'),
('37', 'Chile'),
('38', 'China'),
('39', 'Chipre'),
('40', 'Colombia'),
('41', 'Corea del Norte'),
('42', 'Corea del Sur'),
('43', 'Costa de Marfil'),
('44', 'Costa Rica'),
('45', 'Croacia'),
('46', 'Cuba'),
('47', 'Dinamarca'),
('48', 'Ecuador'),
('49', 'Egipto'),
('50', 'El Salvador'),
('51', 'Eslovaquia'),
('52', 'Eslovenia'),
('53', 'España'),
('54', 'Estados Unidos'),
('55', 'Estonia'),
('56', 'Filipinas'),
('57', 'Finlandia'),
('58', 'Francia'),
('59', 'Ghana'),
('60', 'Grecia'),
('61', 'Guatemala'),
('62', 'Holanda'),
('63', 'Honduras'),
('64', 'Hungria'),
('65', 'India'),
('66', 'Indonesia'),
('67', 'Inglaterra'),
('68', 'Iran'),
('69', 'Irlanda'),
('70', 'Islandia'),
('71', 'Italia'),
('72', 'Jamaica'),
('73', 'Japon'),
('74', 'Marruecos'),
('75', 'Mexico'),
('76', 'Nigeria'),
('77', 'Noruega'),
('78', 'Nueva Zelanda'),
('79', 'Panama'),
('80', 'Paraguay'),
('81', 'Peru'),
('82', 'Polonia'),
('83', 'Portugal'),
('84', 'Republica Checa'),
('85', 'Rumania'),
('86', 'Rusia'),
('87', 'Senegal'),
('88', 'Serbia'),
('89', 'Suecia'),
('90', 'Suiza'),
('91', 'Tunez'),
('92', 'Turquia'),
('93', 'Uruguay'),
('94', 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `Id_Posicion` decimal(4,0) NOT NULL,
  `Descripcion_Posicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`Id_Posicion`, `Descripcion_Posicion`) VALUES
('1', 'Portero'),
('2', 'Defensa Central'),
('3', 'Defensa Izquierda'),
('4', 'Defensa Derecha'),
('5', 'Medio Defensivo'),
('6', 'Medio Ofensivo'),
('7', 'Medio Contencion'),
('8', 'Medio Derecha'),
('9', 'Medio Izquierda'),
('10', 'Delantero Centro'),
('11', 'Delantero Derecho'),
('12', 'Delantero Izquierdo'),
('13', 'Segundo Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE `ranking` (
  `Id_Ranking` decimal(4,0) NOT NULL,
  `Id_Seleccion` decimal(4,0) NOT NULL,
  `Puntos` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seleccion`
--

CREATE TABLE `seleccion` (
  `Id_Seleccion` decimal(4,0) NOT NULL,
  `Nombre_Seleccion` varchar(50) NOT NULL,
  `Id_DT` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seleccion`
--

INSERT INTO `seleccion` (`Id_Seleccion`, `Nombre_Seleccion`, `Id_DT`) VALUES
('1', 'Guatemala', '1'),
('2', 'Holanda', '2'),
('3', 'Portugal', '3'),
('4', 'Francia', '4'),
('5', 'Brasil', '5'),
('6', 'Inglaterra', '6'),
('7', 'Rusia', '7'),
('8', 'Belgica', '8'),
('9', 'Alemania', '9'),
('10', 'Croacia', '10'),
('11', 'Uruguay', '11'),
('13', 'JapÃ³n', '13'),
('14', 'Korea del Sur', '14'),
('15', 'Peru', '15'),
('16', 'Dinamarca', '16'),
('17', 'Arabia Saudita', '17'),
('18', 'Mexico', '18'),
('19', 'Suiza', '19'),
('20', 'Senegal', '20'),
('21', 'Colombia', '21'),
('22', 'Polonia', '22'),
('23', 'EspaÃ±a', '23'),
('24', 'Estados Unidos', '24'),
('25', 'PanamÃ¡', '25'),
('26', 'Egipto', '26'),
('27', 'Serbia', '27'),
('28', 'Nigeria', '28'),
('29', 'Tunez', '29'),
('30', 'Marruecos', '30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `Id_DT` decimal(4,0) NOT NULL,
  `Nombre_DT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`Id_DT`, `Nombre_DT`) VALUES
('1', 'Lionel Scaloni'),
('2', 'Johan Cruiff'),
('3', 'Fernando Santos '),
('4', 'Didier Deschamps'),
('5', 'Tite'),
('6', 'Gareth Southgate '),
('7', 'Stanislav CherchÃ©sov'),
('8', 'Roberto Martinez'),
('9', 'Joachim LÃ¶w '),
('10', 'Hector Cuper'),
('11', 'Washington Tabarez'),
('13', 'Shin Tae-Yong '),
('14', 'Salisu Yusuf '),
('15', 'Ricardo Gareca'),
('16', 'Slavoljub Muslin '),
('17', 'Juan Antonio Pizzi '),
('18', 'Juan Carlos Osorio'),
('19', 'Age Hareide'),
('20', 'Adam Nawalka'),
('21', 'Jose Pekerman'),
('22', 'Aliou CissÃ© '),
('23', 'Luis Enrique'),
('24', 'Ante Cacic '),
('25', 'Ange Postecoglou '),
('26', 'Nabil Maaloul'),
('27', 'Heimir HallgrÃ­msson '),
('28', 'HervÃ© Renard '),
('29', 'Salisu Yusuf '),
('30', 'Esteban Tadic');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alineaciones`
--
ALTER TABLE `alineaciones`
  ADD PRIMARY KEY (`Id_Alineacion`),
  ADD KEY `FK_Id_Jugador_Alineaciones` (`Id_Jugador`),
  ADD KEY `FK_Id_Formacion_Alineaciones` (`Id_Formacion`);

--
-- Indices de la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  ADD PRIMARY KEY (`Id_Asignacion`),
  ADD KEY `FK_Id_Grupo_asig` (`Id_Grupo`),
  ADD KEY `FK_Id_Seleccion_asig` (`Id_Seleccion`);

--
-- Indices de la tabla `asignacion_jugador`
--
ALTER TABLE `asignacion_jugador`
  ADD PRIMARY KEY (`Id_asignacion`),
  ADD KEY `FK_Id_Jugador_Asig_Jugador` (`Id_Jugador`),
  ADD KEY `FK_Id_Posicion_Asig_Jugador` (`Id_Posicion`),
  ADD KEY `FK_Id_Seleccion_Asig_Jugador` (`Id_Seleccion`),
  ADD KEY `FK_Id_Club_Asig_Jugador` (`Id_Club`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`Id_Calendario`);

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Id_Club`),
  ADD KEY `FK_Id_Pais_Club` (`Id_Pais`);

--
-- Indices de la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD PRIMARY KEY (`Id_Encuentro`),
  ADD KEY `FK_Id_Grupo_Encuentro` (`Id_Grupo`),
  ADD KEY `FK_Id_Estadio_Encuentro` (`Id_Estadio`),
  ADD KEY `FK_Id_Calendario` (`Id_Calendario`);

--
-- Indices de la tabla `estadio`
--
ALTER TABLE `estadio`
  ADD PRIMARY KEY (`Id_Estadio`);

--
-- Indices de la tabla `estadistica_jugador`
--
ALTER TABLE `estadistica_jugador`
  ADD KEY `FK_Id_Jugador_Estadist_Jugador` (`Id_Jugador`);

--
-- Indices de la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`Id_Formacion`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`Id_Grupo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`Id_Jugador`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Id_Pais`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`Id_Posicion`);

--
-- Indices de la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`Id_Ranking`),
  ADD KEY `FK_Id_Seleccion_Ranking` (`Id_Seleccion`);

--
-- Indices de la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD PRIMARY KEY (`Id_Seleccion`),
  ADD KEY `FK_Id_DT_Seleccion` (`Id_DT`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`Id_DT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  MODIFY `Id_Asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alineaciones`
--
ALTER TABLE `alineaciones`
  ADD CONSTRAINT `FK_Id_Formacion_Alineaciones` FOREIGN KEY (`Id_Formacion`) REFERENCES `formacion` (`Id_Formacion`),
  ADD CONSTRAINT `FK_Id_Jugador_Alineaciones` FOREIGN KEY (`Id_Jugador`) REFERENCES `jugador` (`Id_Jugador`);

--
-- Filtros para la tabla `asignacion_grupo`
--
ALTER TABLE `asignacion_grupo`
  ADD CONSTRAINT `FK_Id_Grupo_asig` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id_Grupo`),
  ADD CONSTRAINT `FK_Id_Seleccion_asig` FOREIGN KEY (`Id_Seleccion`) REFERENCES `seleccion` (`Id_Seleccion`);

--
-- Filtros para la tabla `asignacion_jugador`
--
ALTER TABLE `asignacion_jugador`
  ADD CONSTRAINT `FK_Id_Club_Asig_Jugador` FOREIGN KEY (`Id_Club`) REFERENCES `club` (`Id_Club`),
  ADD CONSTRAINT `FK_Id_Jugador_Asig_Jugador` FOREIGN KEY (`Id_Jugador`) REFERENCES `jugador` (`Id_Jugador`),
  ADD CONSTRAINT `FK_Id_Posicion_Asig_Jugador` FOREIGN KEY (`Id_Posicion`) REFERENCES `posicion` (`Id_Posicion`),
  ADD CONSTRAINT `FK_Id_Seleccion_Asig_Jugador` FOREIGN KEY (`Id_Seleccion`) REFERENCES `seleccion` (`Id_Seleccion`);

--
-- Filtros para la tabla `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `FK_Id_Pais_Club` FOREIGN KEY (`Id_Pais`) REFERENCES `pais` (`Id_Pais`);

--
-- Filtros para la tabla `encuentro`
--
ALTER TABLE `encuentro`
  ADD CONSTRAINT `FK_Id_Calendario` FOREIGN KEY (`Id_Calendario`) REFERENCES `calendario` (`Id_Calendario`),
  ADD CONSTRAINT `FK_Id_Estadio_Encuentro` FOREIGN KEY (`Id_Estadio`) REFERENCES `estadio` (`Id_Estadio`),
  ADD CONSTRAINT `FK_Id_Grupo_Encuentro` FOREIGN KEY (`Id_Grupo`) REFERENCES `grupo` (`Id_Grupo`);

--
-- Filtros para la tabla `estadistica_jugador`
--
ALTER TABLE `estadistica_jugador`
  ADD CONSTRAINT `FK_Id_Jugador_Estadist_Jugador` FOREIGN KEY (`Id_Jugador`) REFERENCES `jugador` (`Id_Jugador`),
  ADD CONSTRAINT `FK_Id_Jugador_estadistica` FOREIGN KEY (`Id_Jugador`) REFERENCES `jugador` (`Id_Jugador`);

--
-- Filtros para la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `FK_Id_Seleccion_Ranking` FOREIGN KEY (`Id_Seleccion`) REFERENCES `seleccion` (`Id_Seleccion`);

--
-- Filtros para la tabla `seleccion`
--
ALTER TABLE `seleccion`
  ADD CONSTRAINT `FK_Id_DT_Seleccion` FOREIGN KEY (`Id_DT`) REFERENCES `tecnico` (`Id_DT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
