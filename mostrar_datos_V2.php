<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $sql= "SELECT idAlumno, nombre, edad, correo FROM alumnos";
    echo $sql.'<br/><br/>';
    $resultado=$conexion->query($sql);
    
    //Visualizar con while y Fetch_array

    while ($fila=$resultado->fetch_array()) {
        echo 'idAlumno: '.$fila["idAlumno"].'<br/>';
        echo 'Nombre: '.$fila["nombre"].'<br/>';
        echo 'Edad: '.$fila["edad"].'<br/>';
        echo 'Correo: '.$fila["correo"].'<br/><br/>';
    }

    $resultado->close();



    