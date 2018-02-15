<?php

extract($_POST);

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=docente/registrar_d_a';
</script>
<?php
}

require_once('../../../conexion/conexion.php');
if (!$conexion) {
	echo 'No se pudo conectar'.mysqli_error();
	exit();
}


$sql="INSERT INTO docente (ced_d, nombre, apellido, sexo, f_naci, lugar_naci, direc_hab, tele_hab, tele_mov, email, est_bachi, est_bachi_fe, est_bachi_men, est_tsu, est_tsu_fe, est_tsu_men, est_pre, est_pre_fe, est_pre_men, est_espe, est_espe_fe, est_espe_men, est_ma, est_ma_fe, est_ma_men, est_doc, est_doc_fe, est_doc_men, cursos, deno_cargo, cargo_fun, condicion_lab, codigo_cargo, matricula, secciones, tiempo_servicio, turno, horas, plantel_cobro, codigo_plantel, plantel_otro, codigo_plantel_otro, horas_otro, ingreso_minist, clave_talon, clave_constancia) VALUES ('$ced_d', '$nombre', '$apellido', '$sexo', '$edad', '$f_naci', '$lugar_naci', '$direc_hab', '$tele_hab', '$tele_mov', '$email', '$est_bachi', '$est_bachi_fe', '$est_bachi_men', '$est_tsu', '$est_tsu_fe', '$est_tsu_men', '$est_pre', '$est_pre_fe', '$est_pre_men', '$est_espe', '$est_espe_fe', '$est_espe_men', '$est_ma', '$est_ma_fe', '$est_ma_men', '$est_doc', '$est_doc_fe', '$est_doc_men', '$cursos', '$deno_cargo', '$cargo_fun', '$condicion_lab', '$codigo_cargo', '$matricula', '$secciones', '$tiempo_servicio', '$turno', '$horas', '$plantel_cobro', '$codigo_plantel', '$plantel_otro', '$codigo_plantel_otro', '$horas_otro', '$ingreso_minist', '$clave_talon', '$clave_constancia')";



$consulta = mysqli_query($conexion,$sql);

	
 if($consulta==0){ ?>

   	<script type='text/javascript'>
	alert('## LA CEDULA YA SE ENCUENTRA REGISTRADA ##');
	window.location='administrador.php?p=docente/registrar_d_a';
	</script>
			
<?php

}
	 

	 else 
 {?>

		
	<script type='text/javascript'>
	alert('## DATOS ALMACENADOS CON EXITO ##');
	window.location='administrador.php?p=docente/registrar_d_a';
	</script>
   

  <?php }

?>