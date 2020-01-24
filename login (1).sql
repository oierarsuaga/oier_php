
Create database login;

CREATE TABLE `blog` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(250) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `blog` (`id`, `title`, `info`, `img`) VALUES
(1, 'God Of War', 'God of War es una serie de videojuegos en 3Âª. persona', 'god.png'),
(2, 'FIFA 2005', 'FIFA es una saga de videojuegos de futbol', 'fifa.jpg'),
(11, 'League of Legends', 'League of Legends es un videojuego del gÃ©nero multijugador de arena de batalla en lÃ­nea', 'lol.jpg');


CREATE TABLE `datos` (
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `datos` (`usuario`, `password`) VALUES
('koxme', 'k1'),
('oier', 'arsu'),
('oier', 'arsu'),
('admin', 'Admin108'),
('admin', 'Admin108'),
('profe', '1234'),
('aitor', 'aitor');


ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `blog`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
