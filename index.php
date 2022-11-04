<?php

  include "conexion.php";

  if(isset($_GET["login"])){
    $usuario=$_GET["usuario"];
    $contrasena=$_GET["contrasena"];

    $consulta="SELECT id FROM usuario WHERE usuario='$usuario' AND numero_documento='$contrasena'";
    $resultado = $con->query($consulta);

    if($resultado->num_rows==1){
      header ("location: inicio.php");
    }else{
      echo "Error al iniciar";
    }

  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aslie</title>
    <link rel="shortcut icon" href="img/logoA (1).png" type="image/x-icon">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

 <body>
        <header> 
            <nav class="menu">  
                <img src="img/logoAslie.jpg" alt=""class=logo>
                <a href="/">Inicio</a>
                <a href="https://aslieierh.wixsite.com/aslie">Introduccion</a>
                <a href="html/Nosotros.html">Nosotros</a>
                <a href="/registrate.php">Estudiantes</a>
            </nav>
        </header>
    

    <!-- Formulario de inicio de sesion  -->
    <form method="get">
    <div class="contenedor">
        <img class="cuadro" src="img/cuadroderegistro.png" alt="" >

        <div class="cuadroregistro">
            <a href="/html/Nosotros.html"><img class="boton" src="img/logocirculo.png" alt=""></a>
            <h1 legend class="ingresar">Ingresa</legend></h1>
            <input class="formu" type="text" placeholder="Usuario (Documento de identidad*)" required name="usuario">
            <input class="form" type="password" placeholder="Contraseña*" required name="contrasena">
            <p class="p">¿Aún no tienes cuenta? <a href="registrate.php">Registrate aquí</a></p>
            <a class="p" href="/html/contraseña.html">¿Olvidaste tú contraseña?</a>
            <button name="login"><img class="continuar" src="img/continuar.png" alt=""></button>
        </div>  

    </div>
</form>
<!-- Pie de pagina -->
<footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="img/logocirculo.png" >
          </a>
        </figure>
      </div>
      <div class="box">
        <h2>SOBRE NOSOTROS</h2>
        <p>Nuestra pagina busca compilar información de los estudiantes beneficiarios del restaurante escolar para posibilitar el acceso a esta de manera instantánea</p>
      </div>
      <div class="box">
        <h2>SIGUENOS</h2>
        <div class="red-social">
          <a href="#" class="fa fa-whatsapp"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
      </div>
    </div>
    <div class="grupo-2">
      <small>&copy; 2022 <b>Aslie</b> - Todos los Derechos Reservados.</small>
    </div>
  </footer>

</body>
</html>