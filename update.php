<?php
include('db.php');
$idRegistros = $_REQUEST['ID'];
$OBSERVACION      = $_REQUEST['observacion'];

$update = ("UPDATE registrovh 
	SET 
	observacion  ='" .$OBSERVACION. "' WHERE ID ='" .$idRegistros. "'");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>