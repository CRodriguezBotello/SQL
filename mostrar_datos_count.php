<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    $sql= "SELECT nombre, count(*)FROM alumnos GROUP BY idAlumno";
    echo $sql.'<br/><br/>';
    $resultado=$conexion->query($sql);
    
    //Visualizar que devuelve el count()

    var_dump($resultado); 

    /*while ($fila=$resultado->fetch_array()) {     //Usando fetch_array para mostrar todo
        foreach ($fila as $indice => $valor) {
            echo "$indice: $valor<br/>";
        }
    }*/

    /*while ($fila=$resultado->fetch_assoc()) {   //Usando fetch_assoc para mostrar el array asociativo
        foreach ($fila as $indice => $valor) {
            echo "$indice: $valor<br/>";
        }
    }

    while ($fila=$resultado->fetch_row()) {       //Usando fetch_row para mostrar el array numerico
        foreach ($fila as $indice => $valor) {
            echo "$indice: $valor<br/>";
        }
    }*/

    $conexion->close();

    