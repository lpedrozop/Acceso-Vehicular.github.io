<?php

include('db.php');

$PLACA = $_POST['placa'];
mysqli_query($conexion, "DELETE FROM registrovh where placa='$PLACA'") or die("Error al eliminar");

mysqli_close($conexion);
header("location:index.php");


?>