CREATE DATABASE nomedobancodedados;
USE nomedobancodedados;

CREATE TABLE usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL
);
