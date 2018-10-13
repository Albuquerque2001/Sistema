CREATE DATABASE sistema_arcondicionados;

CREATE TABLE cadastro(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
	senha VARCHAR(30) NOT NULL,
	cpf INT(11) NOT NULL,
	rg INT(13) NOT NULL);

CREATE TABLE horario_temperatura(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	horaLigar VARCHAR(5),
	horaDesligar VARCHAR(5),
	temperatura INT(2));