<?php
    include "conexion.php";


    if(isset($_POST["crear"])){

    $usuario=$_POST["usuario"];
    $edad=$_POST["edad"];
    $rol=$_POST["rol"];
    $grado=$_POST["grado"];
    $grupo=$_POST["grupo"];
    $numero_documento=$_POST["numero_documento"];
    $tipo_documento=$_POST["tipo_documento"];

    $consulta= "INSERT INTO usuario(usuario, edad, rol, grado, grupo, numero_documento, tipo) VALUES ('$usuario','$edad','$rol','$grado','$grupo','$numero_documento','$tipo_documento')";
    $resultado = $con ->query($consulta);

    if($resultado){
        header ("location: inicio.php");
    }else{
        echo "Error al registrarse";
    }
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registrate</title>
  <link rel="stylesheet" href="css/registrate.css">
  <link rel="shortcut icon" href="img/logoA (1).png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(img/otrocuadro.JPG)">

<header>
   <a class="a" href="index.php"> <img src="img/icons/entrada.png" alt=""> volver a inicio</a>
</header>
     

   <!-- formulario de registro -->

  <form method=post>
    <a href="/Nosotros.html"><img class="boton" src="img/logocirculo.png" alt=""></a>
    <div class="formulario"> 
    <legend class="registro"> REGISTRO </legend>
      <div class="todo">
      <label class="contacto" for="usuario"> Usuario <em>*</em></label>
      <input name="usuario" placeholder="Documento de identidad">
 
      <label class="personal" for="edad">Edad<em>*</em></label>
      <input name="edad">
  
      <label class="personal" for="rol"> Rol <em>*</em></label>
      <select name="rol"> 
      <option value="directivo"> Directivo </option> 
      <option value="Profesor"> Profesor</option> 
      <option value="estudiante"> Estudiante</option>
      </select>

      <label class="personal" for="grado"> Grado <em>*</em></label>
      <input name="grado">

      <label class="personal" for="grupo"> Grupo <em>*</em></label> 
      <input name="grupo">

      <label class="personal" for="numero_documento"> Numero documento <em>*  -Esta sera tú contraseña</em></label>
      <input name="numero_documento">
 
      <label class="personal" for="tipo_documento"> Tipo Documento </label>
      <select name="tipo_documento"> 
      <option value="Tarjeta identidad"> Tarjeta de identidad </option> 
      <option value="Cedula"> Cedula de ciudadania </option> 
      </select>
      <button class= "botonn" name="crear"> Continuar </button> 
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