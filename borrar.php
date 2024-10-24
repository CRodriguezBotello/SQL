<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);

    $sql= 'DELETE FROM alumnos WHERE ';