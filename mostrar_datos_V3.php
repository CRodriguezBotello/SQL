<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $sql= "SELECT idAlumno, nombre, edad, correo FROM alumnos";
    echo $sql.'<br/><br/>';
    $recibir=$conexion->query($sql);
    
    //Visualizar con Fetch_array y con Foreach

    while ($fila=$recibir->fetch_array()) {
        foreach ($fila as $indice => $valor) {
            echo "$indice: $valor<br/>";
        }
    }

    $conexion->close();



    