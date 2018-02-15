<?php
require_once('../../../conexion/conexion.php');
extract($_POST);
 
if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=docente/modificar_d_a';
</script>
<?php
}  
 	

 $sql = "UPDATE docente SET ced_d='$ced_d', nombre='$nombre', apellido='$apellido', sexo='$sexo', f_naci='$f_naci', lugar_naci='$lugar_naci', direc_hab='$direc_hab', tele_hab='$tele_hab', tele_mov='$tele_mov', email='$email', est_bachi='$est_bachi', est_bachi_fe='$est_bachi_fe', est_bachi_men='$est_bachi_men', est_tsu='$est_tsu', est_tsu_fe='$est_tsu_fe', est_tsu_men='$est_tsu_men', est_pre='$est_pre', est_pre_fe='$est_pre_fe', est_pre_men='$est_pre_men', est_espe='$est_espe', est_espe_fe='$est_espe_fe', est_espe_men='$est_espe_men', est_ma='$est_ma', est_ma_fe='$est_ma_fe', est_ma_men='$est_ma_men', est_doc='$est_doc', est_doc_fe='$est_doc_fe', est_doc_men='$est_doc_men', cursos='$cursos', deno_cargo='$deno_cargo', cargo_fun='$cargo_fun', condicion_lab='$condicion_lab', codigo_cargo='$codigo_cargo', matricula='$matricula', secciones='$secciones', tiempo_servicio='$tiempo_servicio', turno='$turno', horas='$horas', plantel_cobro='$plantel_cobro', codigo_plantel='$codigo_plantel', plantel_otro='$plantel_otro', codigo_plantel_otro='$codigo_plantel_otro', horas_otro='$horas_otro', ingreso_minist='$ingreso_minist', clave_talon='$clave_talon', clave_constancia='$clave_constancia' WHERE ced_d='$cedula'";



    $resultado=mysqli_query($conexion, $sql) or die ("Error al realizar la consulta");
	
	
   if(mysqli_affected_rows($conexion)==0){ ?>

   	<script type='text/javascript'>
	alert('## LOS DATOS INTRODUCIDOS SON LOS MISMOS ##');
	window.location='administrador.php?p=docente/modificar_d_a';
	</script>
			
<?php

}
	
	else{	
	 ?>
	<script type='text/javascript'>
	alert('## DATOS MODIFICADOS CON EXITO ##');
	window.location='administrador.php?p=docente/modificar_d_a';
	</script>}
   <?php

}
		
	 ?>