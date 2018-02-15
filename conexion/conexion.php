<?php 
$conexion = mysqli_connect("localhost", "root", "root", "sistema");

if (!$conexion)
{
  
   echo "<BR>No fue posible efectuar la conexión <BR>(", mysqli_connect_error(), ")";
   exit();
}

$acentos = $conexion->query("SET NAMES 'utf8'");


?>
