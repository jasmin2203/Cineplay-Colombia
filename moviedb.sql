-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 18:36:50
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moviedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movielist`
--

CREATE TABLE `movielist` (
  `movieId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Director` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movielist`
--

INSERT INTO `movielist` (`movieId`, `Name`, `Genre`, `Director`, `Description`, `image`, `imdb`) VALUES
(29, 'El Guason', 'Crime', 'Carlos', 'El guason', 'Guason.jpg', '9'),
(30, 'SPIDERMAN', 'Action', 'SEBASTIAN', 'EL BUEN VECINO', 'spiderman.jpg', '9'),
(31, 'STAR WARS', 'Action', 'SEBASTIAN', 'GUERRA GALACTICA', 'starwars.png', '8'),
(32, 'BATMAN', 'Action', 'Carlos', 'CABALLERO DE LA NOCHE', 'batman.jpg', '9'),
(33, 'GLADIADOR', 'Action', 'Dafes', 'PELEAS', 'gladiator.jpg', '2'),
(36, 'Nerve: Un Juego Sin Reglas', 'Drama', 'Henry Joost, Ariel Schulman', 'Presionada por sus amigos, una adolescente participa en un juego de realidad virtual, pero el cariz de lo que se presuponÃ­a un divertimiento, cambia y se torna primero inquietante, despuÃ©s siniestro.', 'images.jpg', '7'),
(38, 'Hobbs and shaw', 'Action', 'David Leitch', 'Spin-off de la franquicia cinematogrÃ¡fica \"A todo gas\", que sigue al policÃ­a estadounidense Hobbs y al mercenario britÃ¡nico Shaw. En el pasado, Hobbs encarcelÃ³ a Shaw despuÃ©s de que este intentara matarlo. Ahora deben aliarse para combatir al terrori', 'fastd.webp', '4'),
(39, 'El Rey Leon', 'Adventure', 'Jon Favreau', 'Tras el asesinato de su padre, Simba, un joven leÃ³n es apartado su reino y tendrÃ¡ que descubrir con ayuda de amigos de la sabana africana el significado de la responsabilidad y la valentÃ­a. MÃ¡s tarde volverÃ¡ para recuperar el control de su reino.', 'latest.webp', '8'),
(40, 'Avengers End Game', 'Action', 'Anthony Russo, Joe Russo', 'Los Vengadores restantes deben encontrar una manera de recuperar a sus aliados para un enfrentamiento Ã©pico con Thanos, el malvado que diezmÃ³ el planeta y el universo.', '81+Nup8-8NL._SY445_.jpg', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id_sala` int(20) NOT NULL,
  `nom_teatro` varchar(80) NOT NULL,
  `filas` int(20) NOT NULL,
  `col` int(20) NOT NULL,
  `espacio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id_sala`, `nom_teatro`, `filas`, `col`, `espacio`) VALUES
(1, 'Centro Mayor', 5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `showorder`
--

CREATE TABLE `showorder` (
  `showOrderId` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `showorder`
--

INSERT INTO `showorder` (`showOrderId`, `date`, `timeslot`, `theater`, `movieName`, `seat`) VALUES
(1, '2017-07-30', '11.00', 'Basundhara Cineplex', 'Batman Begins', '49'),
(2, '2017-07-31', '5.00', 'BlockBluster', 'Gladiator', '49'),
(3, '2017-08-01', '2.00', 'Balaka Cineplex', 'Spider-Man: Homecoming (2017)', '48'),
(4, '2017-08-16', '8.00', 'Balaka Cineplex', 'Batman Begins', '49'),
(5, '2017-08-23', '11.00', 'Basundhara Cineplex', 'Batman Begins', '50'),
(6, '2017-08-17', '2.00', 'Basundhara Cineplex', 'Batman Begins', '48'),
(7, '2017-11-16', '11.00', 'Shamoly Cineplex', 'Batman Begins', '50'),
(8, '', '11.00', 'Basundhara Cineplex', 'Batman Begins', '46'),
(9, '2019-10-31', '8.00', 'The Wocher', 'A Todo Gas', '49'),
(10, '', '11.00', 'Basundhara Cineplex', 'El Guason', '50'),
(11, '2019-10-31', '11.00', 'Basundhara Cineplex', 'El Guason', '49'),
(12, '2019-10-31', '12:00', 'Centro Mayor', 'El Guason', '49'),
(13, '2019-10-31', '5.00', 'Centro Mayor', 'Avengers End Game', '49'),
(14, '2019-10-31', '5.00', 'Centro Mayor', 'El Guason', '49'),
(15, '2019-10-31', '11.00', 'Centro Mayor', 'El Guason', '49'),
(16, '', '11.00', 'Centro Mayor', 'El Guason', '48'),
(17, '2019-10-31', '8.00', 'Centro Mayor', 'STAR WARS', '49'),
(18, '', '11.00', 'Basundhara Cineplex', 'STAR WARS', '49'),
(19, '2019-11-03', '11.00', 'Basundhara Cineplex', 'Hobbs and shaw', '49'),
(20, '', '11.00', 'Basundhara Cineplex', 'SPIDERMAN', '50'),
(21, '2019-11-13', '5.00', 'Centro Mayor', 'El Guason', '49'),
(22, '2019-11-20', '12:00', 'BlockBluster', 'El Guason', '50'),
(23, '2019-11-21', '11.00', 'Basundhara Cineplex', 'SPIDERMAN', '50'),
(24, '2019-11-20', '11.00', 'Basundhara Cineplex', 'El Guason', '43'),
(25, '2019-11-20', '11.00', 'Basundhara Cineplex', 'SPIDERMAN', '50'),
(26, '2019-11-20', '11.00', 'Basundhara Cineplex', 'STAR WARS', '49'),
(27, '2019-11-20', '11.00', 'Basundhara Cineplex', 'BATMAN', '49'),
(28, '2019-11-21', '11.00', 'Basundhara Cineplex', 'STAR WARS', '49'),
(29, '2019-11-27', '11.00', 'Basundhara Cineplex', 'BATMAN', '49'),
(30, '2019-11-21', '11.00', 'Basundhara Cineplex', 'BATMAN', '49'),
(31, '2019-11-13', '11.00', 'Basundhara Cineplex', 'STAR WARS', '50'),
(32, '2019-11-14', '11.00', 'Basundhara Cineplex', 'STAR WARS', '49'),
(33, '', '5.00', 'Basundhara Cineplex', 'SPIDERMAN', '50'),
(34, '2019-11-28', '11.00', 'Basundhara Cineplex', 'STAR WARS', '50'),
(35, '2019-11-21', '11.00', 'Basundhara Cineplex', 'El Guason', '49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

CREATE TABLE `sillas` (
  `id_sala_sillas` int(50) NOT NULL,
  `id_sala` int(20) NOT NULL,
  `numero_silla` int(50) NOT NULL,
  `filas_silla` int(50) NOT NULL,
  `columna_silla` int(50) NOT NULL,
  `reserva_silla` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sillas`
--

INSERT INTO `sillas` (`id_sala_sillas`, `id_sala`, `numero_silla`, `filas_silla`, `columna_silla`, `reserva_silla`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 1, 2, 1, 2, 1),
(3, 1, 3, 1, 3, 1),
(4, 1, 4, 1, 4, 1),
(5, 1, 5, 1, 5, 1),
(6, 1, 6, 2, 1, 1),
(7, 1, 7, 2, 2, 1),
(8, 1, 8, 2, 3, 0),
(9, 1, 9, 2, 4, 1),
(10, 1, 10, 2, 5, 1),
(11, 1, 11, 3, 1, 1),
(12, 1, 12, 3, 2, 1),
(13, 1, 13, 3, 3, 1),
(14, 1, 14, 3, 4, 1),
(15, 1, 15, 3, 5, 1),
(16, 1, 16, 4, 1, 1),
(17, 1, 17, 4, 2, 1),
(18, 1, 18, 4, 3, 1),
(19, 1, 19, 4, 4, 1),
(20, 1, 20, 4, 5, 1),
(21, 1, 21, 5, 1, 1),
(22, 1, 22, 5, 2, 1),
(23, 1, 23, 5, 3, 1),
(24, 1, 24, 5, 4, 1),
(25, 1, 25, 5, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `theater`
--

CREATE TABLE `theater` (
  `theaterId` int(11) NOT NULL,
  `theaterName` varchar(255) DEFAULT NULL,
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `theater`
--

INSERT INTO `theater` (`theaterId`, `theaterName`, `seat`) VALUES
(1, 'Basundhara Cineplex', 50),
(2, 'BlockBluster', 45),
(3, 'Balaka Cineplex', 60),
(4, 'Shamoly Cineplex', 70),
(5, 'The Wocher', 0),
(6, 'Centro Mayor', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `timeslot`
--

CREATE TABLE `timeslot` (
  `timeslotId` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `timeslot`
--

INSERT INTO `timeslot` (`timeslotId`, `time`) VALUES
(1, '11.00'),
(2, '2.00'),
(3, '5.00'),
(4, '8.00'),
(5, '9.00'),
(6, '120'),
(7, '12:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `status`) VALUES
(1, 'admin', 'admin', 101),
(3, 'user', 'user', 202),
(6, 'carcox', '123', 202),
(7, 'drex', '123', 202),
(8, 'diegito', '123', 202),
(9, 'cristancho', '1234', 202),
(10, 'user1', '123', 202);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo_video` varchar(250) DEFAULT NULL,
  `id_video` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo_video`, `id_video`) VALUES
(2, 'Spider-Man: Far From Home Trailer Oficial', 'wRpIINuQ3aI'),
(3, 'GUASÓN - Trailer Final', 'TobNCFMK_bs'),
(4, 'Trailer Nerve: Un juego sin reglas', 'z6khd6myjT0'),
(5, 'Trailer Hobbs and Shaw', 'HZ7PAyCDwEg'),
(6, 'Trailer El Rey leon', 'mb79ctR-E-c'),
(7, 'Trailer Avengers End Game', 'PyakRSni-c0'),
(8, 'Trailer Batman Begins', 'neY2xVmOfUM'),
(9, 'Trailer Star Wars', '8Qn_spdM5Zg'),
(10, 'Trailer Gladiator', 'owK1qxDselE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`movieId`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `showorder`
--
ALTER TABLE `showorder`
  ADD PRIMARY KEY (`showOrderId`);

--
-- Indices de la tabla `sillas`
--
ALTER TABLE `sillas`
  ADD PRIMARY KEY (`id_sala_sillas`);

--
-- Indices de la tabla `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`theaterId`);

--
-- Indices de la tabla `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`timeslotId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movielist`
--
ALTER TABLE `movielist`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `showorder`
--
ALTER TABLE `showorder`
  MODIFY `showOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `theater`
--
ALTER TABLE `theater`
  MODIFY `theaterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `timeslotId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
