<?php

extract($_POST);

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=representante/registrar_r_a';
</script>
<?php
}

require_once('../../../conexion/conexion.php');
if (!$conexion) {
	echo 'No se pudo conectar'.mysqli_error();
	exit();
}


  $nacimiento=$f_naci;
  $fnacimiento = explode("-", $nacimiento);
  $nYear = intval($fnacimiento[0]);
  $nMes  = intval($fnacimiento[1]);
  $nDia  = intval($fnacimiento[2]);
 
  $Year  = intval(date('Y'));
  $Mes   = intval(date('m'));
  $Dia   = intval(date('d'));
 
  $rMes  = 0;
  $rYear = 0;
 
  if ($Dia > $nDia) {
    $rMes = 1;
  }
 
  if ($Mes > $nMes) {
    $rYear = 1;
  } elseif ($Mes == $nMes) {
    if ($rMes == 1) {
    $rYear = 1;
    }
  }
 
  if ($Dia == $nDia and $Mes == $nMes) {
    $rYear = 1;
  }
 
  $edad = $Year - $nYear + $rYear - 1;
 






$sql="INSERT INTO representante (ced_r, tipo_doc, nombre, apellido, sexo, f_naci, edo_civil, afinidad, pais, edo, muni, parro, pobla, urbani, via, direc, tele_mov, tele_hab, tele_trab, email, direc_trab, nombre_empre, profesion) VALUES ('$ced_r', '$tipo_doc',  '$nombre', '$apellido', '$sexo', 'f_naci', '$edo_civil', '$afinidad', '$pais', '$edo', '$muni', '$parro', '$pobla', '$urbani', '$via', '$direc', '$tele_mov', '$tele_hab', '$tele_trab', '$email', '$direc_trab', '$nombre_empre', '$profesion')";



$consulta = mysqli_query($conexion,$sql);

	
 if($consulta==0){ ?>

   	<script type='text/javascript'>
	alert('## LA CEDULA YA SE ENCUENTRA REGISTRADA ##');
	window.location='administrador.php?p=representante/registrar_r_a';
	</script>
			
<?php

}
	 

	 else 
 {?>

		
	<script type='text/javascript'>
	alert('## DATOS ALMACENADOS CON EXITO ##');
	window.location='administrador.php?p=representante/registrar_r_a';
	</script>
   

  <?php }

?>