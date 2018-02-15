<?php
 
require_once('../../../conexion/conexion.php');


if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE DE FORMA CORRECTA ##');
    window.location='administrador.php?p=usuario/crear_usuario';
</script>
<?php
}

  
 $form_pass = $_POST['password'];
	  
	 $hash = password_hash($form_pass, PASSWORD_BCRYPT); 
	 
	 
	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 
	 $buscarUsuario = "SELECT * FROM usuarios
	 WHERE user = '$_POST[username]' ";
	 
	 $result = $conexion->query($buscarUsuario);
	 
	 $count = mysqli_num_rows($result);
	 
	
	if($count == 1) { ?>
	<script type='text/javascript'>
	    alert('## EL USUARIO YA EXISTE ##');
	    window.location='administrador.php?p=usuario/crear_usuario';
	</script>
	<?php
	}

	 else{
	 
	 $query = "INSERT INTO usuarios (nom_user, user, pass, nivel) VALUES ('$_POST[nombre]', '$_POST[username]', '$hash', '$_POST[nivel]')";


	if ($conexion->query($query) === TRUE) { ?>
	<script type='text/javascript'>
	    alert('## USUARIO CREADO: ##');
	    window.location='administrador.php?p=usuario/config_usu';
	</script>
	<?php
	}

	 else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
	   }
	 }
	 mysqli_close($conexion);
	?>
