<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);

    $sql= 'INSERT INTO alumnos (nombre, edad, correo) VALUES ("'.$_POST["nombre"].'",'.$_POST["edad"].',"'.$_POST["correo"].'")';
    echo $sql.'<br/><br/>';
    
    $controlador = new mysqli_driver();
    $controlador->report_mode = MYSQLI_REPORT_OFF;
    $enviar=$conexion->query($sql);
    // echo $conexion->errno;       Muestra el ultimo código de error.
    if ($conexion->errno === 1062) {    //Se activa solo cuando el error es de clave duplicada.
        echo "Esta correo ya ha sido usado.";
    }
    echo '<br/><br/> <a href="inicio.html">Inicio</a>';