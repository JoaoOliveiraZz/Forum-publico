CREATE TABLE `Usuario` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Nome` varchar(255),
  `Email` varchar(255),
  `Senha` varchar(255),
  `Idade` int,
  `FavLinguagem` varchar(255),
  `Perfil` INT
);

INSERT INTO Usuario (Nome, Email, Senha, Idade, FavLinguagem, Perfil) VALUES ('Adm','adm@gmail.com','adm','18','Js', 1);

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
  `user_id` int NOT NULL,
  `post_id` int NOT NULL, 
  `Texto` varchar(255),
  `DataComent` datetime
);

INSERT INTO Comentarios (user_id, post_id, Texto, DataComent) VALUES (1,6,'alksdjflkajdlskfjlkajsdf','00-00-00 00:00:00')

CREATE TABLE `PostDeUser` (
  `usuario_id` int
);

CREATE TABLE `Contato`(
  `id_contato`int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `Titulo` VARCHAR(255),
  `Texto` VARCHAR(500)
);

SELECT * FROM Contato as c INNER JOIN usuario as u ON c.id_user = u.id;

CREATE TABLE `Log`(
  `id_log` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `login` DATETIME,
  `logoff` DATETIME
);
INSERT INTO Log (user_id, login, logoff) VALUES (1,'2022-11-25','0000-00-00 00:00:00');
UPDATE Log SET login = '2022-11-25 11:11:11', logoff = '0000-00-00 00:00:00' WHERE id_user = '1';
SELECT * FROM Log as l INNER JOIN usuario as u ON l.user_id = u.id;

INSERT INTO `Contato` (id_user, Titulo, Texto) VALUES (2, 'Teste', 'lkjsdlkfjalskdjflkjasdfl');

ALTER TABLE `PostDeUser` ADD FOREIGN KEY (`usuario_id`) REFERENCES `Usuario` (`id`);

ALTER TABLE `PostDeUser` ADD FOREIGN KEY (`usuario_id`) REFERENCES `Post` (`user_id`);

ALTER TABLE `Comentarios` ADD FOREIGN KEY (`user_id`) REFERENCES `Usuario` (`id`);

ALTER TABLE `Comentarios` ADD FOREIGN KEY (`id`) REFERENCES `Post` (`id`);
