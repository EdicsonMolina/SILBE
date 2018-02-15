<?php
session_start();

if(isset($_SESSION['nombre']) && $_SESSION['nivel']==1){

	if(!empty($_POST)){

require_once('../../../../conexion/conexion.php');

extract($_POST);

$sql="INSERT INTO a_escolar (id_a, a) VALUES ('$id_a','$a')";

$consulta = mysqli_query($conexion,$sql);

	
 if($consulta==0){ ?>

   	<script type='text/javascript'>
	alert('El Año ya se encuentra registrado');
	window.location='admin_inscripcion.php?p=registrar_a_a';
	</script>
			
<?php

}
	 

	 else 
 {?>

		
	<script type='text/javascript'>
	alert('Datos almacenados con Éxito');
	window.location='admin_inscripcion.php?p=registrar_a_a';
	</script>
   

  <?php }
}else {
    echo '<script language = javascript>
  self.location = "admin_inscripcion.php?p=registrar_a_a"
  </script>';
   }
 } else {
    echo '<script language = javascript>
  alert("Debes iniciar Sesion o tener permisos")
  self.location = "../../../../index.php"
  </script>';
   }
?>