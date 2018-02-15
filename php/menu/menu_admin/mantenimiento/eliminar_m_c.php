<?php 
	require_once('../../../conexion/conexion.php');
	
	extract($_POST);
	
	if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=mantenimiento/eliminar_m_a';
</script>
<?php
}

$sql = "DELETE FROM mantenimiento where ced_m = $cedula";
	mysqli_query($conexion, $sql);
?>
<script type='text/javascript'>
	alert('## ELIMINADO CON EXITO ##');
	window.location='administrador.php?p=mantenimiento/eliminar_m_a';
</script>