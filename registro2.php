<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include("db.php");

$NOMBRE=$_POST['nombre'];
$APELLIDO=$_POST['apellido'];
$TIPO_VEHICULO=$_POST['tipo_vehiculo'];
$COLOR=$_POST['color'];
$PLACA=$_POST['placa'];
$TIPO_USUARIO=$_POST['tipo_usuario'];
$OBSERVACION=$_POST['observacion'];
date_default_timezone_set('Europe/Amsterdam');    
$HORA = date('m-d-Y h:i:s a', time());


$consulta1="INSERT INTO `registrovh` (`nombre`, `apellido`, `tipo_vehiculo`, `color`, `placa`, `tipo_usuario`, `observacion`, `hora`) 
VALUES ('$NOMBRE', '$APELLIDO', '$TIPO_VEHICULO', '$COLOR', '$PLACA', '$TIPO_USUARIO', '$OBSERVACION', '$HORA');";

//Verificar que la placa no se repita en la base de datos
$verificar_placa = mysqli_query($conexion, "SELECT * FROM registrovh WHERE placa='$PLACA'  ");

if(mysqli_num_rows($verificar_placa) >0 ){
  include("registrov2.html");

  ?>
 <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          Esta placa vehicular ya se encuentra registrada
          </div>
        </div>   
<?php
}
else{

$resultado = mysqli_query($conexion, $consulta1) or die("error de registro");
include("registrov2.html");

?>
 <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
          Registro exitoso
          </div>
        </div>   
<?php
}

mysqli_close($conexion);







?>