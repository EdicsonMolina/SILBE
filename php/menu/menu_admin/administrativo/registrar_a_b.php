<?php

extract($_POST);

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=administrativo/registrar_a_a';
</script>
<?php
}

require_once('../../../conexion/conexion.php');
if (!$conexion) {
	echo 'No se pudo conectar'.mysqli_error();
	exit();
}

$sql="INSERT INTO administrativo (ced_a, nombre, apellido, sexo, edad, lugar_naci, f_naci, direc_hab, tele_hab, tele_mov, email, deno_cargo, cargo_fun, condicion_lab, codigo_cargo, tiempo_servicio, plantel_cobro, codigo_plantel, ingreso_minist, clave_talon, clave_constancia, est_bachi, est_bachi_fe, est_bachi_men, est_tsu, est_tsu_fe, est_tsu_men, est_pre, est_pre_fe, est_pre_men, cursos) VALUES ('$ced_a','$nombre', '$apellido', '$sexo', '$edad', '$lugar_naci', '$f_naci', '$direc_hab', '$tele_hab', '$tele_mov', '$email', '$deno_cargo', '$cargo_fun', '$condicion_lab', '$codigo_cargo', '$tiempo_servicio','$plantel_cobro', '$codigo_plantel','$ingreso_minist', '$clave_talon', '$clave_constancia','$est_bachi', '$est_bachi_fe', '$est_bachi_men', '$est_tsu', '$est_tsu_fe', '$est_tsu_men', '$est_pre', '$est_pre_fe', '$est_pre_men', '$cursos')";



$consulta = mysqli_query($conexion,$sql);

	
 if($consulta==0){ ?>

   	<script type='text/javascript'>
	alert('## LA CEDULA YA SE ENCUENTRA REGISTRADA ##');
	window.location='administrador.php?p=administrativo/registrar_a_a';
	</script>
			
<?php

}
	 
	 else 
 {?>

		
	<script type='text/javascript'>
	alert('## DATOS ALMACENADOS CON EXITO ##');
	window.location='administrador.php?p=administrativo/registrar_a_a';
	</script>
   

  <?php }

?>