<?php
header('Content-Type: text/html; charset=UTF-8');

require_once('../../../conexion/conexion.php');
$parishes = mysqli_query($conexion, "SELECT * FROM parroquia WHERE id_municipio =". $_POST['municipalities']);

echo '<option value="">Seleccione una Parroquia</option>';
while($parish = mysqli_fetch_assoc($parishes)):
	echo '<option value="' . $parish['id']. '">' . $parish['nombre'] . '</option>' . "\n";
endwhile;

/*

echo '<option value="' . $parish['id_parroquia']. '">' . $parish['nombre'] . '</option>' . "\n";
endwhile;



$conexion = mysqli_connect("localhost","root","","sistema");

$el_municipio = $_POST['municipio'];

$query = $conexion->query("SELECT * FROM parroquia WHERE id_municipio = $el_municipio");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id_parroquia']. '">' . $row['nombre'] . '</option>' . "\n";
}
*/