-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 25-02-2023 a las 07:10:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certamen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatas`
--

CREATE TABLE `candidatas` (
  `id_candidatas` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `Carrera` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `edad` varchar(50) NOT NULL,
  `nombre_traje` varchar(255) NOT NULL,
  `nombre_deporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candidatas`
--

INSERT INTO `candidatas` (`id_candidatas`, `nombre`, `Carrera`, `descripcion`, `edad`, `nombre_traje`, `nombre_deporte`) VALUES
(1, 'Shirley Mercedes Gabriel Coy', 'ELECTRONICA', '\"Siempre has lo que te haga feliz, nunca digas no puedo, ya que siempre hay un camino para avanzar\"', '16 ', 'El despertar de mi tierra', 'Voleibol'),
(2, 'Kristel Inirida Odeth Acaham Ba', 'MEDICINA JORNADA VESPERTINA', '\"Somos el futuro y es muy importante que tengamos la oportunidad de estudiar y trabajar en aquello que nos gusta.\"', '16 ', 'Lluvia de primavera', 'Gimnasia '),
(3, 'Glenda Lorena Choc Caal\r\n', 'ADMINISTRACION', '\"Invito a todos a que hagamos conciencia, y valoremos la vida ya que vivimos una etapa dificil en la humanidad y sobre todo nosotros, que vivimos en carne propia la perdida de algun familiar, procuremos siempre que nuestros actos, dejen una huella verde en nuestro camino.\"\r\n', '21', 'Colores de mi tierra\r\n', ''),
(4, 'Madelyn Rosario Caal Hernandez\r\n', 'DIBUJO', '\"Se siempre positivo, porque puedes hacer que un dia sea maravilloso.\"\r\n', '17', 'Abriendo las puertas al mundo Maya\r\n', 'Equitacion'),
(5, 'Allison Magaly Caal Choc\r\n', 'MECANICA', '\"A todos como personas los motivo a seguir en un camino de valores, ya que somos el cambio para una sociedad mejor\"\r\n', '16', 'Belleza tropical\r\n', 'Tenis'),
(6, 'Daniela Eunice Macario Caal\r\n', 'MERCADOTECNIA', '\"Como personas pasamos por momentos dificiles pero debemos recordar que tenemos metas por alcanzar y siendo asi luchemos por nosotros mismos cada dia\"\r\n', '17 ', 'Princesa de la costa Maya\r\n', 'Porrista'),
(7, 'Fatima Galilea Saraha Maas Calate\r\n', 'AGROFORESTAL', '\"Aprovechen el dia y vivan cada instante como si fuera la ultima vez, hagan cosas admirables y tengan vidas extraordinarias\"\r\n', '17 ', 'Princesa de la tribu Maya\r\n', 'Motocross'),
(8, 'Valeria Cristina Reyes Calel\r\n', 'COMPUTACION', '\"El acto mas valiente para una mujer es pensar por si misma y en voz alta\"\r\n', '17', 'Ave fenix\r\n', 'Boxeo'),
(9, 'Eybrin Julissa Holtmann Aguirre', 'CRIMINOLOGIA', '\"Visionar todos nuestros planes y desarrollarlos con autenticidad pero siempre priorizar los estudios\"', '15', 'Diosa de la luna y la fertilidad', 'Ciclismo'),
(10, 'Linda Daniela Gonzalez Pereira', 'MEDICINA JORNADA MATUTINA', '\"Que nadie te apague, deja de dudar de ti, no compares tus ideas con las de otros y tampoco dejes que apaguen tus sueños que no corresponden a la grandeza\"', '17', 'Valores de nuestra cultura', 'Taekwondo'),
(11, 'Kleily Yadira Barrientos Dias', 'CICLO BASICO', '\"Que todos los seres humanos somos capaces de alcanzar nuestras metas si somos capaces de pensarlas, creerlas, soñarlas y sobre todo atrevernos a ser creadores de nuestro propio futuro\"', '15', 'Diosa de la tierra de la eterna primavera', 'Torero'),
(12, 'Damary Adamary Buenafe Winter', 'PLAN FIN DE SEMANA', '\"Motivo a todos a emprender, somos parte de un cambio y el apoyo a los negocios locales son sinonimo de crecimiento economico en el pais\"', '19', 'Reina del oro', 'Futbol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deportes` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `proyeccion_escenica` float(10,2) DEFAULT NULL,
  `modelaje` float(10,2) DEFAULT NULL,
  `presentacion_traje` float(10,2) DEFAULT NULL,
  `expresion_facial` float(10,2) DEFAULT NULL,
  `promedio` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finalistas`
--

CREATE TABLE `finalistas` (
  `id_finalistas` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `edad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_final`
--

CREATE TABLE `pregunta_final` (
  `id_pregunta_final` int(11) NOT NULL,
  `espontaneidad` float(10,2) DEFAULT NULL,
  `calidad_respuesta` float(10,2) DEFAULT NULL,
  `coherencia_respuesta` float(10,2) NOT NULL,
  `promedio` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_secreta`
--

CREATE TABLE `pregunta_secreta` (
  `id_pregunta_secreta` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `espontaneidad` float DEFAULT NULL,
  `calidad_respuesta` float DEFAULT NULL,
  `promedio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `promedio_C1` float(10,2) DEFAULT NULL,
  `promedio_C2` float(10,2) DEFAULT NULL,
  `promedio_C3` float(10,2) DEFAULT NULL,
  `promedio_C4` float(10,2) DEFAULT NULL,
  `promedio_C5` float(10,2) DEFAULT NULL,
  `promedio_F` float(10,2) DEFAULT NULL,
  `id_candidatas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_final`
--

CREATE TABLE `reporte_final` (
  `id_finalistas` int(11) DEFAULT NULL,
  `promedio_f` float(10,2) DEFAULT NULL,
  `subtotal` float(10,2) DEFAULT NULL,
  `total` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `usuarios` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `usuarios`, `contraseña`, `rol`) VALUES
(0, 'admin', 'admin', 'administrador'),
(1, 'user', 'user', 'jurado'),
(3, 'tarde', 'tarde', 'juradoT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traje_fantasia`
--

CREATE TABLE `traje_fantasia` (
  `id_taje_fantasia` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `proyeccion` float(10,2) DEFAULT NULL,
  `carisma` float(10,2) DEFAULT NULL,
  `expresion_facial` float(10,2) DEFAULT NULL,
  `presentacion_traje` float(10,2) DEFAULT NULL,
  `promedio` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traje_noche`
--

CREATE TABLE `traje_noche` (
  `id_traje_noche` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `elegancia` float(10,2) DEFAULT NULL,
  `expresion_facial` float(10,2) DEFAULT NULL,
  `proyeccion_escenica` float(10,2) DEFAULT NULL,
  `modelaje` float(10,2) NOT NULL,
  `mensaje` float(10,2) DEFAULT NULL,
  `promedio` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vestuario_casual`
--

CREATE TABLE `vestuario_casual` (
  `id_vestuario_casual` int(11) NOT NULL,
  `id_candidatas` int(11) DEFAULT NULL,
  `proyeccion_escenica` float(10,2) DEFAULT NULL,
  `aceptacion_publico` float(10,2) DEFAULT NULL,
  `expresion_facial` float(10,2) DEFAULT NULL,
  `modelaje` float(10,2) DEFAULT NULL,
  `promedio` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatas`
--
ALTER TABLE `candidatas`
  ADD PRIMARY KEY (`id_candidatas`);

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deportes`),
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- Indices de la tabla `finalistas`
--
ALTER TABLE `finalistas`
  ADD PRIMARY KEY (`id_finalistas`);

--
-- Indices de la tabla `pregunta_final`
--
ALTER TABLE `pregunta_final`
  ADD PRIMARY KEY (`id_pregunta_final`);

--
-- Indices de la tabla `pregunta_secreta`
--
ALTER TABLE `pregunta_secreta`
  ADD PRIMARY KEY (`id_pregunta_secreta`),
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- Indices de la tabla `reporte_final`
--
ALTER TABLE `reporte_final`
  ADD KEY `id_finalistas` (`id_finalistas`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `traje_fantasia`
--
ALTER TABLE `traje_fantasia`
  ADD PRIMARY KEY (`id_taje_fantasia`),
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- Indices de la tabla `traje_noche`
--
ALTER TABLE `traje_noche`
  ADD PRIMARY KEY (`id_traje_noche`),
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- Indices de la tabla `vestuario_casual`
--
ALTER TABLE `vestuario_casual`
  ADD PRIMARY KEY (`id_vestuario_casual`),
  ADD KEY `id_candidatas` (`id_candidatas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deportes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `finalistas`
--
ALTER TABLE `finalistas`
  MODIFY `id_finalistas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pregunta_final`
--
ALTER TABLE `pregunta_final`
  MODIFY `id_pregunta_final` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pregunta_secreta`
--
ALTER TABLE `pregunta_secreta`
  MODIFY `id_pregunta_secreta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `traje_fantasia`
--
ALTER TABLE `traje_fantasia`
  MODIFY `id_taje_fantasia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `traje_noche`
--
ALTER TABLE `traje_noche`
  MODIFY `id_traje_noche` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vestuario_casual`
--
ALTER TABLE `vestuario_casual`
  MODIFY `id_vestuario_casual` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD CONSTRAINT `deportes_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `reporte` (`id_candidatas`);

--
-- Filtros para la tabla `pregunta_final`
--
ALTER TABLE `pregunta_final`
  ADD CONSTRAINT `pregunta_final_ibfk_1` FOREIGN KEY (`id_pregunta_final`) REFERENCES `reporte_final` (`id_finalistas`);

--
-- Filtros para la tabla `pregunta_secreta`
--
ALTER TABLE `pregunta_secreta`
  ADD CONSTRAINT `pregunta_secreta_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `reporte` (`id_candidatas`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `candidatas` (`id_candidatas`);

--
-- Filtros para la tabla `reporte_final`
--
ALTER TABLE `reporte_final`
  ADD CONSTRAINT `reporte_final_ibfk_1` FOREIGN KEY (`id_finalistas`) REFERENCES `finalistas` (`id_finalistas`);

--
-- Filtros para la tabla `traje_fantasia`
--
ALTER TABLE `traje_fantasia`
  ADD CONSTRAINT `traje_fantasia_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `reporte` (`id_candidatas`);

--
-- Filtros para la tabla `traje_noche`
--
ALTER TABLE `traje_noche`
  ADD CONSTRAINT `traje_noche_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `reporte` (`id_candidatas`);

--
-- Filtros para la tabla `vestuario_casual`
--
ALTER TABLE `vestuario_casual`
  ADD CONSTRAINT `vestuario_casual_ibfk_1` FOREIGN KEY (`id_candidatas`) REFERENCES `reporte` (`id_candidatas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
