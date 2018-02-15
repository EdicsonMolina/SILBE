<?php 
	require_once('../../../conexion/conexion.php');
	
	extract($_POST);
	
	if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=administrativo/eliminar_a_a';
</script>
<?php
}

$sql = "DELETE FROM administrativo where ced_a = $cedula";
	mysqli_query($conexion, $sql);
?>
<script type='text/javascript'>
	alert('## ELIMINADO CON EXITO ##');
	window.location='administrador.php?p=administrativo/eliminar_a_a';
</script>