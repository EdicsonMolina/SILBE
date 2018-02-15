<?php
header('Content-Type: text/html; charset=UTF-8');

require_once('../../../conexion/conexion.php');
$states = mysqli_query($conexion, "SELECT * FROM estado WHERE ubicacionpaisid =". $_POST['country']);

echo '<option value="">Seleccione un Estado</option>';
while($state = mysqli_fetch_assoc($states)):
	echo '<option value="' . $state['id']. '">' . $state['estadonombre'] . '</option>' . "\n";
endwhile;

/*
$conexion = mysqli_connect("localhost","root","","sistema");

$el_pais = $_POST['pais'];

$query = $conexion->query("SELECT * FROM estado WHERE ubicacionpaisid = $el_pais");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['estadonombre'] . '</option>' . "\n";
}
*/
