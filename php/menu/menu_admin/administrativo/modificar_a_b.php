<?php 
extract($_POST);

require_once('../../../conexion/conexion.php');

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=administrativo/modificar_a_a';
</script>
<?php
} 

$sql            = "SELECT * FROM administrativo WHERE ced_a='$cedula'";
$consulta       = mysqli_query($conexion, $sql);

if(!$consulta){
    echo "No se pudo realizar la consulta".mysqli_error();
    exit();
}

$fila=mysqli_fetch_array($consulta);

if ($fila==0) { ?>
<script type='text/javascript'>
    alert('## CEDULA NO REGISTRADA ##');
    window.location='administrador.php?p=administrativo/modificar_a_a';
</script>
<?php
} 
else {
    ?>

<legend><h3 class="text-center"><b>MODIFICAR PERSONAL ADMINISTRATIVO</b></h3></legend>
<form action="administrador.php?p=administrativo/modificar_a_c" autocomplete="off" method="POST" >

    <div class="container">
      <div class="row">
        <div class="col-xs-2">
            <label for="cédula">Cédula</label>
            <input name="ced_a" id="ced_a" type="text" maxlength="8" class="form-control input-sm" placeholder="Cedula" title="Cedila" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);" value="<?=$fila[0]?>">
          </div>

          <div class="col-xs-3">
            <label for="nombre">Nombre</label>
            <input style="text-transform: capitalize" name="nombre" id="nombre" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);" value="<?=$fila[1]?>">
          </div>

          <div class="col-xs-3">
            <label for="apellido">Apellido</label>
            <input style="text-transform: capitalize" name="apellido" id="apellido" type="text" maxlength="50" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);" value="<?=$fila[2]?>">
          </div>

           <div class="col-xs-1">
            <label for="genero">Género</label>
            <select name="sexo" class="form-control input-sm" id="sexo"  title="Seleccione Género" required>
              <option value="m" <?php if($fila['sexo']=="m") echo "selected";?>>Masculino</option>
              <option value="f" <?php if($fila['sexo']=="f") echo "selected";?>>Femenino</option>
            </select>
          </div>

          <div class="col-xs-1">
            <label for="edad">Edad</label>
            <input name="edad" id="" type="text" maxlength="2" class="form-control input-sm" placeholder="00" title="Edad" pattern="[0-9]{1,2}$" required oninput="check_edad(this);" value="<?=$fila[4]?>">
          </div>

          <div class="col-xs-2">
            <label for="lugar de nacimiento">Lugar de Nacimiento</label>
            <input name="lugar_naci" id="lugar_naci" type="text" maxlength="100" class="form-control input-sm" placeholder="Lugar de Nacimiento" title="Lugar de Nacimiento" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[5]?>">
          </div>

      </div>
    </div><br>

  <div class="container">
      <div class="row">

          <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input name="f_naci" id="f_naci" type="date" title="Fecha de Nacimiento" class="form-control input-sm"  required value="<?=$fila[6]?>">
          </div>

          <div class="col-xs-6">
            <label for="dirección de habitación">Dirección de Habitación</label>
            <input  name="direc_hab" id="direc_hab" type="text" maxlength="100" class="form-control input-sm" placeholder="Dirección de Habitación" title="Dirección de Habitación" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[7]?>">
          </div>

          <div class="col-xs-2">
            <label for="teléfono de habitación">Teléfono de Habitación</label>
            <input name=" tele_hab" id="  tele_hab" type="text" maxlength="11" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);" value="<?=$fila[8]?>">
          </div>

          <div class="col-xs-2">
            <label for="télefono celular">Teléfono Movil</label>
            <input name="tele_mov" id="tele_mov" type="text" maxlength="11" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);" value="<?=$fila[9]?>">
          </div>
        </div> 
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-xs-2">
            <label for="emain">Email</label>
            <input  name="email" id="email" type="text" maxlength="30" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);" value="<?=$fila[10]?>">
          </div>

          <div class="col-xs-2">
            <label for="denominacion de cargo">Denominación de Cargo</label>
            <input name="deno_cargo" id="deno_cargo" type="text"  title="Denominación de Cargo" maxlength="50" class="form-control input-sm" placeholder="Dominación de Cargo" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[11]?>">
          </div>

          <div class="col-xs-2">
            <label for="cargo funcional">Cargo Funcional</label>
            <input name="cargo_fun" id="cargo_fun" type="text" title="Cargo Funcional" maxlength="50" class="form-control input-sm" placeholder="Cargo Funcional" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[12]?>">
          </div>

          <div class="col-xs-2">
            <label for="condición laboral">Condición Laboral</label>
            <select name="condicion_lab" class="form-control input-sm" id="condicion_lab" title="Condición Laboral" required>
              <option value="f" <?php if($fila['condicion_lab']=="f") echo "selected";?>>Fijo</option>
              <option value="c" <?php if($fila['condicion_lab']=="c") echo "selected";?>>Contratado</option>
              <option value="s" <?php if($fila['condicion_lab']=="s") echo "selected";?>>Suplente</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="codigo de cargo">Código de Cargo</label>
            <input  name="codigo_cargo" id="codigo_cargo" type="text"  title="Código de Cargo" maxlength="20" class="form-control input-sm" placeholder="Código de Cargo" pattern="[0-9]{1,20}$" required value="<?=$fila[14]?>">
          </div>

           <div class="col-xs-2">
            <label for="tiempo de servicio">Tiempo de Servicio</label>
            <input style="text-transform: capitalize" name="tiempo_servicio" id="tiempo_servicio" type="text" title="Tiempo de Servicio" maxlength="20" class="form-control input-sm" placeholder="Tiempo de Servicio" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[15]?>">
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">

         <div class="col-xs-3">
            <label for="plantel donde cobra">Plantel Donde Cobra</label>
            <input style="text-transform: capitalize" name="plantel_cobro" id="plantel_cobro" type="text" title="Plantel Donde Cobra" maxlength="100" class="form-control input-sm" placeholder="Plantel Donde Cobra" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[16]?>">
          </div>

        <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input style="text-transform: capitalize" name="codigo_plantel" id="codigo_plantel" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,2}$" required value="<?=$fila[17]?>">
          </div>

          <div class="col-xs-3">
            <label for="fecha ingreso al ministerio">Fecha Ingreso al Ministerio</label>
            <input name="ingreso_minist" id="ingreso_minist" type="date" title="Fecha Ingreso al Ministerio" class="form-control input-sm" required value="<?=$fila[18]?>">
          </div>

          <div class="col-xs-2">
            <label for="clave de talon de pago">Clave de Talon de Pago</label>
            <input style="text-transform: capitalize" name="clave_talon" id="clave_talon" type="text" title="Clave de Talon de Pago" maxlength="20" class="form-control input-sm" placeholder="Clave de Talon de Pago" pattern="[0-9]{1,2}$" required value="<?=$fila[19]?>">
          </div>

           <div class="col-xs-2">
            <label for="clave constancia electronica">Clave Constancia Electrónica</label>
            <input style="text-transform: capitalize" name="clave_constancia" id="clave_constancia" type="text" title="Clave Constancia Electrónica" maxlength="20" class="form-control input-sm" placeholder="Clave Constancia Electrónica" pattern="[0-9]{1,2}$" required value="<?=$fila[20]?>">
          </div>

      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <fieldset>
          <legend><b>Estudios</b></legend>
           <div class="col-xs-2">
            <label for="bachiller">Bachiller</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input name="est_bachi" id="est_bachi" type="text" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*"  value="<?=$fila[21]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_bachi_fe" id="est_bachi_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[22]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_bachi_men" id="est_bachi_men" type="text" title="Mención" maxlength="50" class="form-control input-sm" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[23]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="">T.S.U</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input name="est_tsu" id="est_tsu" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[24]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input  name="est_tsu_fe" id="est_tsu_fe" type="date"  title="Fecha" class="form-control input-sm" value="<?=$fila[25]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_tsu_men" id="est_tsu_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[26]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="tipo_doc_es">Pregrado</label>
          </div>
          
           <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input name="est_pre" id="est_pre" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[27]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_pre_fe" id="est_pre_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[28]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_pre_men" id="est_pre_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[29]?>">
          </div>
      </div>
    </div><br>
</fieldset>

<div class="container">
      <div class="row">
          <div class="col-xs-6">
            <label for="cursos">Cursos</label>
            <input  name="cursos" id="cursos" type="text"  title="Cursos" maxlength="100" class="form-control input-sm" placeholder="Cursos" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[30]?>">
          </div>
      </div>
</div><br>

	<input type="hidden" name="cedula" value="<?=$fila['ced_a']?>" />

     <div class="container">
     <div class="row">
          <div class="col-xs-5">
          <button type="submit" title="Guardar Modificación" class="btn btn-primary"><b>Guardar Modificación</b></button>
          <button type="reset" action="" title="Deshacer Cambios" class="btn btn-danger"><b>Deshacer Cambios</b></button>
        </div>
    </div>
    </div>
</form>

</body>
</html>

<?php
}
?>
