<?php
require_once('../../../conexion/conexion.php');
extract($_POST);
 
 if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=estudiante/modificar_e_a';
</script>
<?php
}     
  
 $sql = "UPDATE estudiante SET ced_e='$ced_e', ced_r='$ced_r', tipo_doc='$tipo_doc', nombre='$nombre', apellido='$apellido', sexo='$sexo', f_naci='$f_naci', edo_civil='$edo_civil', lateralidad='$lateralidad', pais='$pais', edo='$edo', area_aten='$area_aten', progra_apoy='$progra_apoy', muni='$muni', parro='$parro', pobla='$pobla', urbani='$urbani', via='$via', direc='$direc', zona='$zona', tip_vivi='$tip_vivi', ubi_vivi='$ubi_vivi', esta_infra='$esta_infra', cond_vivi='$cond_vivi', canaima='$canaima', ser_canaima='$ser_canaima', beca='$beca', ingre_fami='$ingre_fami', tele_mov='$tele_mov', tele_hab='$tele_hab', email='$email', estatura='$estatura', peso='$peso', talla_cami='$talla_cami', talla_pant='$talla_pant', talla_zapa='$talla_zapa' WHERE ced_e='$cedula'";



    $resultado=mysqli_query($conexion, $sql) or die ("Error al realizar la consulta");
	
	
   if(mysqli_affected_rows($conexion)==0){ ?>

   	<script type='text/javascript'>
	alert('Es posible que los datos introducidos sean los mismos');
	window.location='administrador.php?p=estudiante/modificar_e_a';
	</script>
			
<?php

}
	
	else{	
	 ?>
	<script type='text/javascript'>
	alert('Datos Modificados con Exito');
	window.location='administrador.php?p=estudiante/modificar_e_a';
	</script>}
   <?php

}
		
	 ?>