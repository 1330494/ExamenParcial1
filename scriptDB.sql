CREATE DATABASE practica8;

USE practica8;

CREATE TABLE carreras
(
	id int(11) PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(32) NOT NULL
);

CREATE TABLE tutores
(
	no_emp int(11) PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(32) NOT NULL,
	carrera int(11) NOT NULL REFERENCES carreras(id)
);

CREATE TABLE alumnos
(
	matricula int(11) PRIMARY KEY AUTO_INCREMENT,
	carrera int(11) NOT NULL REFERENCES carreras(id),
	nombre varchar(32) NOT NULL,
	tutor int(11) NOT NULL REFERENCES tutores(no_emp) 
);