<?php
require_once('../../../conexion/conexion.php');
extract($_POST);

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=representante/modificar_r_a';
</script>
<?php
} 	

 $sql = "UPDATE representante SET ced_r='$ced_r', tipo_doc='$tipo_doc', nombre='$nombre', apellido='$apellido', sexo='$sexo', f_naci='$f_naci', edo_civil='$edo_civil', afinidad='$afinidad', pais='$pais', edo='$edo', muni='$muni', parro='$parro', pobla='$pobla', urbani='$urbani', via='$via', direc='$direc', tele_mov='$tele_mov', tele_hab='$tele_hab', tele_trab='$tele_trab', email='$email', direc_trab='$direc_trab', nombre_empre='$nombre_empre', profesion='$profesion' WHERE ced_r='$cedula'";



    $resultado=mysqli_query($conexion, $sql) or die ("Error al realizar la consulta");
	
	
   if(mysqli_affected_rows($conexion)==0){ ?>

   	<script type='text/javascript'>
	alert('## LOS DATOS INTRODUCIDOS SON LOS MISMOS ##');

	window.location='administrador.php?p=representante/modificar_r_a';
	</script>
			
<?php

}
	
	else{	
	 ?>
	<script type='text/javascript'>
	alert('## DATOS MODIFICADOS CON EXITO ##');
	window.location='administrador.php?p=representante/modificar_r_a';
	</script>}
   <?php

}
		
	 ?>