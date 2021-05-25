-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-05-2021 a las 12:39:17
-- Versión del servidor: 8.0.23-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo_musical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembro`
--

CREATE TABLE `miembro` (
  `id_miembro` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `instrumento` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `miembro`
--

INSERT INTO `miembro` (`id_miembro`, `nombre`, `instrumento`, `fecha_nacimiento`, `ciudad`) VALUES
(1, 'asdasd', 'dasda', '2021-02-01', 'asdasd'),
(2, 'juan', 'guitarra', '2021-02-02', 'bilbao'),
(3, 'ho', 'ASDAS', '2021-02-09', 'ASSED');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id_tag` int NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id_tag`, `nombre`) VALUES
(1, 'concierto'),
(2, 'miembro\r\n'),
(3, 'gira'),
(4, 'entradas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_noticias`
--

CREATE TABLE `tags_noticias` (
  `id_tags_noticias` int NOT NULL,
  `id_noticias` int DEFAULT NULL,
  `id_tags` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tags_noticias`
--

INSERT INTO `tags_noticias` (`id_tags_noticias`, `id_noticias`, `id_tags`) VALUES
(3, 4, 3),
(8, 5, 2),
(10, 20, 3),
(4, 21, 2),
(6, 21, 3),
(5, 21, 4),
(1, 26, 1),
(2, 26, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ultimasNoticias`
--

CREATE TABLE `ultimasNoticias` (
  `id_noticia` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `texto` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `resumen` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_user` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ultimasNoticias`
--

INSERT INTO `ultimasNoticias` (`id_noticia`, `titulo`, `texto`, `imagen`, `fecha`, `resumen`, `id_user`) VALUES
(4, 'GENE SIMMONS PIDE 22 MILLONES DE DÓLARES POR SU MANSIÓN DE CALIFORNIA.', 'El bajista y cantante de KISS, Gene Simmons y su esposa Shannon Tweed Simmons, han puesto a la venta su casa             de la zona de Benedict Canyon en Los Angeles, CA por 22 millones de dólares después de casi cuatro décadas,             informa Katherine Clarke de The Wall Street Journal.             Gene y Shannon se trasladarán a una finca de 24 acres en Washington, cerca de Mount Rainier que el bajista posee.             Hablando con The Wall Street Journal sobre la razón que hay detrás de esta mudanza, Gene dijo que “California y             Beverly Hills han estado tratando a la gente que crea trabajos muy mal y los niveles de impuestos son inaceptables.             Yo trabajo duro y pago mis impuestos y no quiero llorar el blues de Beverly Hills, pero ya está bien”. A diferencia de California,             Washington no tiene impuesto estatal sobre los ingresos.', 'images/noticia1.jpg', '2021-02-04 16:56:17', 'El bajista y cantante de KISS, Gene Simmons y su esposa Shannon Tweed Simmons, han puesto a la venta su casa             de la zona de Benedict Canyon en Los Angeles, CA por 22 millones de dólares después de casi cuatro décadas,             informa Katherine Clarke de The Wall Street Journal.', 6),
(5, 'ACE FREHLEY: «MI PRIMER DISCO EN SOLITARIO ME ENSEÑÓ QUE ERA MÁS CREATIVO DE LO QUE PENSABA».', 'Ace Frehley está promocionando un disco de versiones, el segundo, mientras alaba la creatividad que             tuvo en su primer disco en solitario. Si bien es cierto que su trabajo, tras el de Paul Stanley, fue             uno de los más destacados, a nadie se le escapa que su música sonaba a Sweet por los cuatro costados             y que tampoco es que descubriera la gasolina. De hecho, fue el único que impuso tocar uno de los temas             de ese disco en los conciertos.             Ahora declara que «creo que mi mayor éxito fue «New York Groove», una sorpresa para los fans de Kiss que             se sorprendieron de que mi disco fuera el mejor de los cuatro. No era el cantante principal o el frontman             de la banda, la gente pensó que los discos de Gene o de Paul serían los mejores, pero mi disco fue superior             al de ellos en ventas y en popularidad».', 'images/noticia2.jpg', '2021-02-04 16:57:50', 'Ace Frehley está promocionando un disco de versiones, el segundo, mientras alaba la creatividad que             tuvo en su primer disco en solitario. ', 6),
(20, 'GENE SIMMONS: «LOS HOOLIGANS RACISTAS EN REDES SOCIALES DEBERÍAN SER MULTADOS».', 'Durante una aparición ayer, martes 2 de febrero, en «Good Morning Britain», el bajista y vocalista de KISS Gene Simmons comentó sobre la sugerencia del presentador Piers Morgan de que se impongan multas a los «gamberros y matones racistas» que abusan racialmente de las personas en las redes sociales.  «Creo que su idea es perfecta», dijo Gene (puedes ver el vídeo al final). «Lo único que estos hooligans entienden es el dinero y ser castigados. Y solo para que les den una palmada en las muñecas, ‘Oh, eso no es algo agradable’, eso no les importa».', 'images/noticia1.jpg', '2021-02-07 11:25:59', '  Durante una aparición ayer, martes 2 de febrero, en «Good Morning Britain», el bajista y vocalista de KISS Gene Simmons comentó sobre la sugerencia del presentador Piers Morgan de que se impongan multas a los «gamberros y matones racistas» que abusa  More...', 4),
(21, 'PAUL STANLEY: «PARA MÍ LA VIDA ES UN MILAGRO EN SU PEOR DÍA».', 'El líder de KISS, Paul Stanley, fue invitado recientemente a «Dennis Miller +1», un programa de entrevistas presentado por el actor, cómico, presentador de programas de entrevistas y cinco veces ganador del premio Emmy, Dennis Miller. Al final puedes escuchar la charla.  Hablando sobre las estrellas de rock que hacen del comportamiento autodestructivo parte de su marca, Paul dijo (escucha el audio al final): «Desafortunadamente, creo que la prensa, los medios de comunicación y los críticos son responsables de algo de eso', 'images/noticia1.jpg', '2021-02-07 11:28:08', 'El líder de KISS, Paul Stanley, fue invitado recientemente a «Dennis Miller +1», un programa de entrevistas presentado por el actor, cómico, presentador de programas de entrevistas y cinco veces ganador del premio Emmy, Dennis Miller. Al final puedes   More...', 4),
(22, 'PAUL STANLEY CUMPLE HOY 69 AÑOS. !KISS ARMY SPAIN TE DESEA UN MUY FELIZ CUMPLEAÑOS!', 'Hoy, miércoles 20 de enero de 2021, además de la investidura de Joe Biden como presidente de EEUU :-), otro acontecimiento muy importante tienen lugar en ese país. PAUL STANLEY, líder de KISS junto a su inseparable partner GENE SIMMONS, cumple el redondo número de 69 años.  Después de 47 años liderando la banda, Starchild se ha convertido en una leyenda del rock y en unos de los mejores frontman de todos los tiempos. Para los fans de KISS el mejor sin lugar a dudas. ', 'images/noticia2.jpg', '2021-02-07 11:41:57', 'Hoy, miércoles 20 de enero de 2021, además de la investidura de Joe Biden como presidente de EEUU :-), otro acontecimiento muy importante tienen lugar en ese país. PAUL STANLEY, líder de KISS junto a su inseparable partner GENE SIMMONS, cumple el redo  More...', 4),
(26, 'asdf', 'sdfa', 'asdf', '2021-02-19 10:47:23', 'asdf', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `user`, `password`, `email`) VALUES
(4, 'jona', 'jona', 'jona@gmail.com'),
(5, 'hola', 'hola', 'hola@gmail.com'),
(6, 'hhh', 'hhhh', 'hhh@gmail.com'),
(7, 'aaaaa', 'aaaaaa', 'aaaaa@gmail.com'),
(8, 'll', 'll', 'll@gmail.com'),
(9, 'ppp', 'pppp', 'ppp@gmail.com'),
(10, '<h1>hola</h1>', 'hola', 'hola@gmail.com'),
(11, 'Asdsds', 'ssss', 'a@gmail.com'),
(12, 'aaaaaa', 'fff', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `miembro`
--
ALTER TABLE `miembro`
  ADD PRIMARY KEY (`id_miembro`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indices de la tabla `tags_noticias`
--
ALTER TABLE `tags_noticias`
  ADD PRIMARY KEY (`id_tags_noticias`),
  ADD KEY `id_noticias` (`id_noticias`,`id_tags`),
  ADD KEY `id_tags` (`id_tags`);

--
-- Indices de la tabla `ultimasNoticias`
--
ALTER TABLE `ultimasNoticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `miembro`
--
ALTER TABLE `miembro`
  MODIFY `id_miembro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tags_noticias`
--
ALTER TABLE `tags_noticias`
  MODIFY `id_tags_noticias` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ultimasNoticias`
--
ALTER TABLE `ultimasNoticias`
  MODIFY `id_noticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tags_noticias`
--
ALTER TABLE `tags_noticias`
  ADD CONSTRAINT `tags_noticias_ibfk_1` FOREIGN KEY (`id_tags`) REFERENCES `tags` (`id_tag`),
  ADD CONSTRAINT `tags_noticias_ibfk_2` FOREIGN KEY (`id_noticias`) REFERENCES `ultimasNoticias` (`id_noticia`);

--
-- Filtros para la tabla `ultimasNoticias`
--
ALTER TABLE `ultimasNoticias`
  ADD CONSTRAINT `ultimasNoticias_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
