CREATE DATABASE prueba;

use prueba;

CREATE TABLE alumnos (
    idAlumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    edad int check (edad >= 0),
    correo varchar(200) UNIQUE
);

INSERT INTO alumnos(nombre, edad, correo) VALUES("Carlos", 21, "carlos@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("Pedro", 22, "pedro@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("David", 20, "david@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("Levi", 19, "levi@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("Fernando", 20, "fernando@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("JoseLuis", 20, "joseLuis@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("Angel", 24, "angel@gmail.com");
INSERT INTO alumnos(nombre, edad, correo)  VALUES("Joaquin", 23, "joaquin@gmail.com");
