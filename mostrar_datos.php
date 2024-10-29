<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $resultado= "SELECT idAlumno, nombre, edad, correo FROM alumnos";
    $resultado=$conexion->query($resultado);
    $fila=$resultado->fetch_assoc();

    $idAlumno=$fila["idAlumno"];
    $nombre= $fila["nombre"];
    $edad= $fila["edad"];
    $correo= $fila["correo"];

    echo "$idAlumno, $nombre, $edad, $correo <br/>";

    $conexion->close();