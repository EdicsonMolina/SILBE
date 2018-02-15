<?php 
	require_once('../../../conexion/conexion.php');
	
	extract($_POST);
	
if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## ELIJA UN USUARIO ##');
    window.location='administrador.php?p=usuario/config_usu';
</script>
<?php
} 


$sql = "DELETE FROM estudiante where ced_e = $cedula";
	mysqli_query($conexion, $sql);
?>
<script type='text/javascript'>
	alert('## USUARIO ELIMINADO CON EXITO ##');
	window.location='administrador.php?p=estudiante/eliminar_e_a';
</script>