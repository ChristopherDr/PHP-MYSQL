CREATE DATABASE std_database;

CREATE TABLE alunos(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(80) NOT NULL,
    email varchar(50),
    sexo enum('M','F') NOT NULL,
    data_nas date NOT NULL
);

ALTER TABLE `alunos` ADD UNIQUE(`email`);