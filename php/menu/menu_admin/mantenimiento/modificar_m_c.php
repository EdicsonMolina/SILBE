<?php
require_once('../../../conexion/conexion.php');
extract($_POST);
      
 if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=mantenimiento/modificar_m_a';
</script>
<?php
}  	

 $sql = "UPDATE mantenimiento SET ced_m='$ced_m', nombre='$nombre', apellido='$apellido', sexo='$sexo', edad='$edad', lugar_naci='$lugar_naci', f_naci='$f_naci',  direc_hab='$direc_hab', tele_hab='$tele_hab', tele_mov='$tele_mov', email='$email', deno_cargo='$deno_cargo', cargo_fun='$cargo_fun', condicion_lab='$condicion_lab', codigo_cargo='$codigo_cargo', tiempo_servicio='$tiempo_servicio', plantel_cobro='$plantel_cobro', codigo_plantel='$codigo_plantel', ingreso_minist='$ingreso_minist', clave_talon='$clave_talon', clave_constancia='$clave_constancia', est_bachi='$est_bachi', est_bachi_fe='$est_bachi_fe', est_bachi_men='$est_bachi_men', est_tsu='$est_tsu', est_tsu_fe='$est_tsu_fe', est_tsu_men='$est_tsu_men', est_pre='$est_pre', est_pre_fe='$est_pre_fe', est_pre_men='$est_pre_men', cursos='$cursos' WHERE ced_m='$cedula'";  


    $resultado=mysqli_query($conexion, $sql) or die ("Error al realizar la consulta");
	
	
   if(mysqli_affected_rows($conexion)==0){ ?>

   	<script type='text/javascript'>
	alert('Es posible que los datos introducidos sean los mismos');
	window.location='administrador.php?p=mantenimiento/modificar_m_a';
	</script>
			
<?php

}
	
	else{	
	 ?>
	<script type='text/javascript'>
	alert('Datos Modificados con Exito');
	window.location='administrador.php?p=mantenimiento/modificar_m_a';
	</script>}
   <?php

}
		
	 ?>