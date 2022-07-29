CREATE TABLE `Usuario` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Nome` varchar(255),
  `Email` varchar(255),
  `Senha` varchar(255),
  `Idade` int,
  `FavLinguagem` varchar(255)
);

CREATE TABLE `Post` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `Titulo` varchar(255),
  `Linguagem` varchar(255),
  `Texto` varchar(500),
  `DataPub` datetime
);

CREATE TABLE `Comentarios` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int UNIQUE NOT NULL,
  `post_id` int UNIQUE NOT NULL, 
  `Texto` varchar(255),
  `DataComent` datetime
);

CREATE TABLE `PostDeUser` (
  `usuario_id` int
);

ALTER TABLE `PostDeUser` ADD FOREIGN KEY (`usuario_id`) REFERENCES `Usuario` (`id`);

ALTER TABLE `PostDeUser` ADD FOREIGN KEY (`usuario_id`) REFERENCES `Post` (`user_id`);

ALTER TABLE `Comentarios` ADD FOREIGN KEY (`user_id`) REFERENCES `Usuario` (`id`);

ALTER TABLE `Comentarios` ADD FOREIGN KEY (`id`) REFERENCES `Post` (`id`);
