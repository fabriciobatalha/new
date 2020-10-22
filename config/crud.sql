CREATE DATABASE crud;

USE crud;

CREATE TABLE cliente (
    id INT AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    bairro VARCHAR (100) NOT NULL,

    PRIMARY KEY (id)
);