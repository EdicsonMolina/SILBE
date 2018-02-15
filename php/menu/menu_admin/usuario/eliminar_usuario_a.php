<?php
extract($_POST);

require_once('../../../conexion/conexion.php');

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## ELIJA UN USUARIO ##');
    window.location='administrador.php?p=usuario/eliminar_usuario';
</script>
<?php
} 



$sql            = "SELECT * FROM usuarios WHERE user='$username'";
$consulta       = mysqli_query($conexion, $sql);
$fila=mysqli_fetch_array($consulta);

if($_SESSION['nombre']==$fila[1]){ ?>
<script type='text/javascript'>
    alert('## USUARIO ACTIVO ##');
    window.location='administrador.php?p=usuario/eliminar_usuario';
</script>
<?php
} 

if ($fila==0) { ?>
<script type='text/javascript'>
    alert('## USUARIO NO REGISTRADO ##');
    window.location='administrador.php?p=usuario/eliminar_usuario';
</script>
<?php
} 
else {
    ?>




<legend><h3 class="text-center"><b>ELIMINAR USUARIO</b></h3></legend>
<form action="administrador.php?p=usuario/eliminar_usuario_b" autocomplete="off"  method="POST" >

	<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label  for="nombre">Usuario</label>
            <input disabled type="text" class="form-control input-sm" title="Usuario" pattern="[a-z]{5,10}$" name="username" maxlength="10" required value="<?=$fila[1]?>">
          </div>
        </div>
    </div>
	<br>

    <div class="container">
      <div class="row">
	<legend><b>Datos</b></legend>
 	</div>
	</div>

	<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Nombre</label>
            <input disabled type="text" name="nombre" class="form-control input-sm" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{5,30}\s?)*" maxlength="30" required value="<?=$fila[0]?>">
          </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Nivel de Usuario</label>
            <select disabled="" name="nivel" class="form-control input-sm" id="nivel" title="Nivel" required>
            <option value="1" <?php if($fila['nivel']=="1") echo "selected";?>>Administrador</option>
            <option value="2" <?php if($fila['nivel']=="1") echo "selected";?>>Usuario Basico</option>
    </select>
        </div>
    </div>

    <br>

    <input type="hidden" name="username" value="<?=$fila[1]?>">

	<div class="container">
      <div class="row">
          <div class="col-xs-5">
          <button type="submit" title="Eliminar Usuario" class="btn btn-danger">Eliminar</button>
	   	  </div>
      </div>
	</div>
 

</form>

 <?php
}
?>