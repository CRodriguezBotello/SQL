<?php
    require_once 'conexion.php';

    $conexion=new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion->set_charset("utf8");

    if (!empty($_POST["nombre"])) {
        $sql= 'UPDATE alumnos SET nombre = "'.$_POST["nombre"].'" WHERE idAlumno ='.$_POST["idAlumno"];
        echo $sql.'<br/><br/>';
        $conexion->query($sql);
    }
    if (!empty($_POST["edad"])) {
        $sql= 'UPDATE alumnos SET edad = '.$_POST["edad"].' WHERE idAlumno ='.$_POST["idAlumno"];
        echo $sql.'<br/><br/>';
        $conexion->query($sql);
    }
    if (!empty($_POST["correo"])) {
        $sql= 'UPDATE alumnos SET correo = "'.$_POST["correo"].'" WHERE idAlumno ='.$_POST["idAlumno"];
        echo $sql.'<br/><br/>';
        $conexion->query($sql);
    }

    echo '<br/><br/> <a href="inicio.html">Inicio</a>';
    echo '<br/><br/> <a href="mostrar_datos_V2.php">Mostrar Resultados</a>';
    