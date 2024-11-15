CREATE DATABASE sesiones;

use sesiones;

CREATE TABLE administracion (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nombreU varchar(100) NOT NULL,
    contra varchar(100) NOT NULL
);

INSERT INTO administracion(nombreU, contra) VALUES("user1","user1");
INSERT INTO administracion(nombreU, contra)  VALUES("user2","contrasena");
