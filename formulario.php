<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Numero Par o Impar</title>
</head>
<body>
    <form method="POST" action="insertar.php">
        <fieldset>
            <caption>Introduce alumnos</caption>
            <br/><br/>
            <label for="idAlumno">Nombre del alumno</label>
            <br/>
            <input type="text" name="nombre"/><br/><br/>
            <label for="idAlumno">Edad del alumno</label>
            <br/>
            <input type="number" name="edad"><br/><br/>
            <label for="idAlumno">Correo del alumno</label>
            <br/>
            <input type="text" name="correo"><br/><br/>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <div id="mensaje">
        <?php
            if(empty($_GET["mensaje"])){
                echo '';
            }else{
                echo $_GET["mensaje"];
            }
            
            
        ?>
    </div>
</body>
</html>