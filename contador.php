<?php
$con = mysqli_connect("localhost","root","","controlutb");
  
// SQL query to display row count
// in building table
$sqli = "SELECT * from registrovh WHERE tipo_usuario = 'Invitado'";
$sqla = "SELECT * from registrovh WHERE tipo_usuario = 'Administrador'";
$sqlp = "SELECT * from registrovh WHERE tipo_usuario = 'Profesor'";
$sqle = "SELECT * from registrovh WHERE tipo_usuario = 'Estudiante'";
if ($resulti = mysqli_query($con, $sqli)) {

// Return the number of rows in result set
$rowcounti = mysqli_num_rows( $resulti );
  

}

if ($resulta = mysqli_query($con, $sqla)) {

// Return the number of rows in result set
$rowcounta = mysqli_num_rows( $resulta );
  
}

if ($resultp = mysqli_query($con, $sqlp)) {

    // Return the number of rows in result set
    $rowcountp = mysqli_num_rows( $resultp );
      
    
}


if ($resulte = mysqli_query($con, $sqle)) {

    $rowcounte = mysqli_num_rows( $resulte );
      
}
    
mysqli_close($con);

?>


