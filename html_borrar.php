<?php
    require_once 'mostrar_datos_V2.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="2">Tabla de Alumnos</th>
        </tr>
        <?php
             $numfilas=count($fila);
             for($i=0; $i<=$numfilas; $i++){
                echo '<tr><td>'.$fila[$i].'</td></tr>';
             }
        ?>
    </table>
</body>
</html>