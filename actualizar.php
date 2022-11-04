<?php

    if(isset($_GET["actualizar"])){
        include "conexion.php";
        $id = $_GET["id"];
        $usuario= $_GET["usuario"];
        $edad = $_GET["edad"];
        $rol = $_GET["rol"]; 
        $grado = $_GET["grado"];
        $grupo = $_GET[ "grupo"];
        $numero_documento = $_GET["numero_documento"];
        $tipo_documento = $_GET["tipo_documento"];

        $consulta="INSERT usuario SET usuario = '$usuario', edad = '$edad', rol = '$rol', grado = '$grado', grupo = '$grupo', numero_documento = '$numero_documento', tipo_documento='$tipo_documento'  WHERE 'id = '$id'";

        if($con->query($consulta)){
            echo "Datos actualizados correctamente";
        }else{
            echo "Datos no actualizados";
        }
    }
?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Actualizar</title>
        <link rel="stylesheet" href="../Aslie_uptade/css/php.css">
    </head> 

    <body>
        <a href="inicio.php">Ir a casa</a>
        <br>
        <h1>Actualizar registro de usuarios</h1>
        <br>
        <form action="actualizar.php" method="get">

        <?php
            $id = $_GET["id"];
            $usuario = $_GET["usuario"];
            $edad = $_GET["edad"];
            $rol = $_GET["rol"];
            $grado = $_GET["grado"];
            $numero_documento = $_GET["numero_documento"];
            $tipo_documento = $_GET["tipo_documento"];
            $grupo = $_GET["grupo"];
            

            echo '
                <label for="">id</label> 
                <input type="text" name="id" value="'.$id.'" disable>
                <br>
                <br>
                <label for="">usuario</label>
                <input type="text" name="usuario" value="'.$usuario.'" disebled>
                <br>
                <br>
                <label for="">edad</label>
                <input type="number" name="edad" value="'.$edad.'" disebled>
                <br>
                <br>
                <label for="">rol</label>
                <input type="text" name="rol" value="'.$rol.'" disebled>
                <br>
                <br>
                <label for="">grado</label>
                <input type="number" name="grado" value="'.$grado.'" disebled>
                <br> 
                <br>
                <label for="">grupo</label>
                <input type="number" name="grupo" value="'.$grupo.'" disebled>
                <br> 
                <br>
                <label for="">numero_documento</label>
                <input type="number" name="numero_documento" value="'.$numero_documento.'" disebled>
                <br> 
                <br>
                <label for="">tipo_documento</label>
                <input type="text" name="tipo_documento" value="'.$tipo_documento.'" disebled>
                <br> 
                <br>
                <input type="submit" value="ACTUALIZAR DATOS" name="actualizar">
            ';
        ?>
        </form>
    </body>
</html>
