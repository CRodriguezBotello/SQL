<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $sql= 'DELETE FROM alumnos WHERE idAlumno = '.$_POST["idAlumno"];
    echo $sql;
    // $resultado=$conexion->query($sql);

    if ($conexion->query($sql)) {
        echo '<br/><br/>Fila eliminada';
        echo '<br/><br/> <a href="inicio.html">Inicio</a>';
    }
    $conexion->close();