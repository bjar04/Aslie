<?php
    include "conexion.php";
    $id=$_GET["id"];
    $consulta="DELETE FROM usuario WHERE id=$id";
    if($con->query($consulta)){
        header ("location: inicio.php");
    }else{
        echo"Los datos no se han podido eliminar";
    }  

?>