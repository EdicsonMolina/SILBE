<?php 
if ($_POST['enviar']) 
{
	//Crear Nombre de Archivo
	$Date =date("Y-m-d");
	$filename = "sistema.sql";

	//Cabeceras para generar el archivo y activar el guardado del archivo (NO BORRAR)
	header("Pragma: no-cache");
	header("Expires: 0");
	header("Content-Transfer-Encoding: binary");
	header("Content-type: application/force-download");
	header("Content-Disposition: attachment; filename=$filename");

$usuario='root';
$passwd='root';
$bd='sistema';

	//Ejecutar el Mysqldump	
	$executa = "C:\\xampp\\mysql\\bin\\mysqldump -u $usuario --password=$passwd --opt $bd"; 
	system($executa, $resultado);	//Ejecutar el Mysqldump	
}
?>