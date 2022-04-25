<?php

include("db.php");
session_start();


$USUARIO=($_POST["usuario"]);
$PASSWORD=($_POST["password"]);
$_SESSION['miSesion']=($_POST["nombre"]);
$consulta = "SELECT* FROM usuario where usuario = '$USUARIO' and password = '$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_fetch_array($resultado);
$Nombre = $_POST["nombre"];       
   if($filas['rol_id']==1){
        //Admin
        header("location:index.php");

        }
    
    elseif($filas['rol_id']==2){
        //Miembro
        header("location:registrov.html");

    }
     
    elseif($filas['rol_id']==3){
        //Admin
        header("location:index.php");
    }
        
    else{
            include("login.html");
            ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
            Usuario o contraseña incorrecta
          </div>
        </div>
        
            <?php
        
        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
        



?>