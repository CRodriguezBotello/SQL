<?php
    require_once 'conexion.php';
    $conexion= new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
    $conexion-> set_charset("utf8");

    $sql= 'SELECT idAlumno, nombre from alumnos ORDER BY idAlumno';
    $resultado=$conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Modificar alumnos</title>
</head>
<body>
<form method="POST" action="borrar.php">
        <fieldset>
            <caption>Elige el alumno a modificar</caption>
            <br/><br/>
            <select name="alumnos">
                <?php
                    foreach ($resultado as $alumno) {
                        echo '<option value="'.$alumno["idAlumno"].'">'.$alumno["nombre"].'</option>';
                    }
                ?>
            </select><br/><br/>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>