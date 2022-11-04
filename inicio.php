<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aslie</title>
    <link rel="shortcut icon" href="img/logoA (1).png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

 <body>
        <center>
            <header> 
                <nav class="menu">  
                    <img src="img/logoAslie.jpg" alt=""class=logo><br>
                    <img class="ierh" src="img/logoInstitucion.png" alt="">
                
                    <a href="/index.php">Inicio</a>
                    <a href="https://aslieierh.wixsite.com/aslie">Introduccion</a>
                    <a href="/Nosotros.html">Nosotros</a>
                    <a href="/registrate.php">Estudiantes</a>
                </nav>
            </header>
        </center>
    <center>
    <center>
    <table  border="1px">
        <tr>
            <td>ID</td>
            <td>Usuario</td>
            <td>Edad</td>
            <td>Rol</td>
            <td>Grado</td>
            <td>Grupo</td>
            <td>Numero_Documento</td>
            <td>Tipo</td>
            <td>Acciones</td>
        </tr>
            <?php
                include "conexion.php";
                $consulta="SELECT * FROM usuario";
                $resultado=$con->query($consulta);
                while($fila= $resultado->fetch_array()){
                    echo"
                   section 
                    <tr>
                        <td>".$fila[0]."</td>
                        <td>".$fila[1]."</td>
                        <td>".$fila[2]."</td>
                        <td>".$fila[3]."</td>
                        <td>".$fila[4]."</td>
                        <td>".$fila[5]."</td>
                        <td>".$fila[6]."</td>
                        <td>".$fila[7]."</td>
                        
                        <td>
                        <a href='actualizar.php?id=".$fila[0]."&usuario=".$fila[1]."&edad=".$fila[2]."&rol=".$fila[3]."&grado=".$fila[4]."&grupo=".$fila[5]. "&numero_documento=".$fila[6]."&tipo_documento=".$fila[7]."'>Actualizar</a>
                        <a href='eliminar.php? id=".$fila[0]."'>Eliminar</a>
                        
                        </td>
                    ";
                }
            ?>
        </tr>
            

    </table>
</center>
</body>
</html>