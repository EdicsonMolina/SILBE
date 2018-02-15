<?php 
extract($_POST);

require_once('../../../conexion/conexion.php');

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=docente/eliminar_d_a';
</script>
<?php
} 

$sql            = "SELECT * FROM docente WHERE ced_d='$cedula'";
$consulta       = mysqli_query($conexion, $sql);

if(!$consulta){
    echo "No se pudo realizar la consulta".mysqli_error();
    exit();
}

$fila=mysqli_fetch_array($consulta);

if ($fila==0) { ?>
<script type='text/javascript'>
    alert('## CEDULA NO REGISTRADA ##');
    window.location='administrador.php?p=docente/eliminar_d_a';
</script>
<?php
} 
else {
    ?>

<legend><h3 class="text-center"><b>MODIFICAR PERSONAL DOCENTE</b></h3></legend>
<form action="administrador.php?p=docente/eliminar_d_c" method="POST" >

		<div class="container">
      <div class="row">
        <div class="col-xs-2">
            <label for="cédula">Cédula</label>
            <input disabled name="ced_d" id="ced_d" type="text" maxlength="8" class="form-control input-sm" placeholder="Cedula" title="Cedila" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);" value="<?=$fila[0]?>">
          </div>

          <div class="col-xs-3">
            <label for="nombre">Nombre</label>
            <input disabled  name="nombre" id="nombre" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);" value="<?=$fila[1]?>">
          </div>

          <div class="col-xs-3">
            <label for="apellido">Apellido</label>
            <input disabled  name="apellido" id="apellido" type="text" maxlength="50" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);" value="<?=$fila[2]?>">
          </div>

           <div class="col-xs-1">
            <label for="">Género</label>
            <select disabled name="sexo" class="form-control input-sm" id="sexo"  title="Seleccione Género" required>
              <option value="m" <?php if($fila['sexo']=="m") echo "selected";?>>Masculino</option>
              <option value="f" <?php if($fila['sexo']=="f") echo "selected";?>>Femenino</option>
            </select>

          </div>

          <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input disabled name="f_naci" id="f_naci" type="date" title="Fecha de Nacimiento" class="form-control input-sm"  required value="<?=$fila[5]?>">
          </div>

      </div>
    </div><br>

  <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="lugar de nacimiento">Lugar de Nacimiento</label>
            <input disabled name="lugar_naci" id="lugar_naci" type="text" maxlength="100" class="form-control input-sm" placeholder="Lugar de Nacimiento" title="Lugar de Nacimiento" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[6]?>">
          </div>

           <div class="col-xs-3">
            <label for="dirección de habitación">Dirección de Habitación</label>
            <input disabled  name="direc_hab" id="direc_hab" type="text" maxlength="100" class="form-control input-sm" placeholder="Dirección de Habitación" title="Dirección de Habitación" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[7]?>">
          </div>

          <div class="col-xs-2">
            <label for="teléfono de habitación">Teléfono de Habitación</label>
            <input disabled name=" tele_hab" id="  tele_hab" type="text" maxlength="11" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);" value="<?=$fila[8]?>">
          </div>

          <div class="col-xs-2">
            <label for="télefono celular">Teléfono Movil</label>
            <input disabled name="tele_mov" id="tele_mov" type="text" maxlength="11" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);" value="<?=$fila[9]?>">
          </div>

          <div class="col-xs-2">
            <label for="emain">Email</label>
            <input disabled  name="email" id="email" type="text" maxlength="30" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);" value="<?=$fila[10]?>">
          </div>
        </div> 
    </div><br>

    <div class="container">
      <div class="row">
        <fieldset>
          <legend><b>Estudios</b></legend>
           <div class="col-xs-2">
            <label for="estudios bachiller">Estudios Bachiller</label>
              
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input disabled name="est_bachi" id="est_bachi" type="text" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[11]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled name="est_bachi_fe" id="est_bachi_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[12]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_bachi_men" id="est_bachi_men" type="text" title="Mención" maxlength="50" class="form-control input-sm" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[13]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="estudios T.S.U">Estudios T.S.U.</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input disabled name="est_tsu" id="est_tsu" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[14]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled  name="est_tsu_fe" id="est_tsu_fe" type="date"  title="Fecha" class="form-control input-sm" value="<?=$fila[15]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_tsu_men" id="est_tsu_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[16]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="estudios pregrado">Estudios Pregrado</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input disabled name="est_pre" id="est_pre" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[17]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled name="est_pre_fe" id="est_pre_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[18]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_pre_men" id="est_pre_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[19]?>">
          </div>
      </div>
    </div><br>
</fieldset>

<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="estudios">Estudios Especialización</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input disabled name="est_espe" id="est_espe" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[20]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled name="est_espe_fe" id="est_espe_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[21]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_espe_men" id="est_espe_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[22]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="estudios maestria">Estudios Maestria</label>
           
          </div>
          
          <div class="col-xs-3">
            <label for="">Institución</label>
            <input disabled name="est_ma" id="est_ma" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[23]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled  name="  est_ma_fe" id=" est_ma_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[24]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_ma_men" id="est_ma_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[25]?>">
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="estudios doctorado">Estudios Doctorado</label>
          </div>
          
          <div class="col-xs-3">
            <label for="institución">Institución</label>
            <input disabled name=" est_doc" id=" est_doc" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[26]?>">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input disabled  name="est_doc_fe" id="est_doc_fe" type="date" title="Fecha" class="form-control input-sm" value="<?=$fila[27]?>">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input disabled  name="est_doc_men" id="est_doc_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[28]?>">
          </div>
      </div>
    </div><br>

<div class="container">
      <div class="row">
          <div class="col-xs-6">
            <label for="cursos">Cursos</label>
            <input disabled  name="cursos" id="cursos" type="text"  title="Cursos" maxlength="100" class="form-control input-sm" placeholder="Cursos" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" value="<?=$fila[29]?>">
          </div>
      </div>
</div><br>

<div class="container">
      <div class="row">
          <div class="col-xs-2">
            <label for="denominacion de cargo">Denominación de Cargo</label>
            <input disabled name="deno_cargo" id="deno_cargo" type="text"  title="Denominación de Cargo" maxlength="50" class="form-control input-sm" placeholder="Dominación de Cargo" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[30]?>">
          </div>

          <div class="col-xs-2">
            <label for="cargo funcional">Cargo Funcional</label>
            <input disabled name="cargo_fun" id="cargo_fun" type="text" title="Cargo Funcional" maxlength="50" class="form-control input-sm" placeholder="Cargo Funcional" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[31]?>">
          </div>

          <div class="col-xs-2">
            <label for="condición laboral">Condición Laboral</label>
            <select disabled name="condicion_lab" class="form-control input-sm" id="condicion_lab" title="Condición Laboral" required>
              <option value=""></option>
              <option value="f" <?php if($fila['condicion_lab']=="f") echo "selected";?>>Fijo</option>
              <option value="c" <?php if($fila['condicion_lab']=="c") echo "selected";?>>Contratado</option>
              <option value="s" <?php if($fila['condicion_lab']=="s") echo "selected";?>>Suplente</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="codigo de cargo">Código de Cargo</label>
            <input disabled  name="codigo_cargo" id="codigo_cargo" type="text"  title="Código de Cargo" maxlength="20" class="form-control input-sm" placeholder="Código de Cargo" pattern="[0-9]{1,20}$" required value="<?=$fila[33]?>">
          </div>

           <div class="col-xs-2">
            <label for="matricula">Matricula</label>
            <input disabled name="matricula" id="matricula" type="text" title="Matricula" maxlength="20" class="form-control input-sm" placeholder="Matricula" pattern="[0-9]{1,20}$" required value="<?=$fila[34]?>">
          </div>

           <div class="col-xs-2">
            <label for="secciones que atiende">Secciones que atiende</label>
            <input disabled name="secciones" id="secciones" type="text" title="Secciones que atiende" maxlength="20" class="form-control input-sm" placeholder="Secciones que atiende" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[35]?>">
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-2">
            <label for="tiempo de servicio">Tiempo de Servicio</label>
            <input disabled  name="tiempo_servicio" id="tiempo_servicio" type="text" title="Tiempo de Servicio" maxlength="20" class="form-control input-sm" placeholder="Tiempo de Servicio" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[36]?>">
          </div>

          <div class="col-xs-2">
            <label for="turno">Turno</label>
            <select disabled name="turno" class="form-control input-sm" title="Turno" id="turno" required value="<?=$fila[0]?>">
              <option value="m" <?php if($fila['turno']=="m") echo "selected";?>>Mañana</option>
              <option value="t" <?php if($fila['turno']=="t") echo "selected";?>>Tarde</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="numero de horas">N° de Horas</label>
            <input disabled  name="horas" id="horas" type="text" title="N° de Horas" maxlength="2" class="form-control input-sm" placeholder="N° de Horas" pattern="[0-9]{1,2}$" required value="<?=$fila[38]?>">
          </div>

          <div class="col-xs-2">
            <label for="plantel donde cobra">Plantel Donde Cobra</label>
            <input disabled  name="plantel_cobro" id="plantel_cobro" type="text" title="Plantel Donde Cobra" maxlength="100" class="form-control input-sm" placeholder="Plantel Donde Cobra" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required value="<?=$fila[39]?>">
          </div>

           <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input disabled  name="codigo_plantel" id="codigo_plantel" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,2}$" required value="<?=$fila[40]?>">
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="otro plantel donde trabaja">Otro Plantel Donde Trabaje</label>
            <input disabled  name="plantel_otro" id="plantel_otro" type="text" title="Otro Plantel Donde Trabaje" maxlength="100" class="form-control input-sm" placeholder="Otro Plantel Donde Trabaje" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*"  required value="<?=$fila[41]?>">
          </div>

          <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input disabled name="codigo_plantel_otro" id="codigo_plantel_otro" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,2}$" required required value="<?=$fila[42]?>">
          </div>

          <div class="col-xs-2">
            <label for="numero de horas">N° de Horas</label>
            <input disabled  name="horas_otro" id="horas_otro" type="text" title="N° de Horas"  maxlength="2" class="form-control input-sm" placeholder="N° de Horas" pattern="[0-9]{1,2}$" required value="<?=$fila[43]?>">
          </div>

          <div class="col-xs-3">
            <label for="fecha ingreso al ministerio">Fecha Ingreso al Ministerio</label>
            <input disabled name="ingreso_minist" id="ingreso_minist" type="date" title="Fecha Ingreso al Ministerio" class="form-control input-sm" required value="<?=$fila[44]?>">
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="clave de talon de pago">Clave de Talon de Pago</label>
            <input disabled  name="clave_talon" id="clave_talon" type="text" title="Clave de Talon de Pago" maxlength="20" class="form-control input-sm" placeholder="Clave de Talon de Pago" pattern="[0-9]{1,2}$" required value="<?=$fila[45]?>">
          </div>

          <div class="col-xs-3">
            <label for="clave constancia electronica">Clave Constancia Electrónica</label>
            <input disabled  name="clave_constancia" id="clave_constancia" type="text" title="Clave Constancia Electrónica" maxlength="20" class="form-control input-sm" placeholder="Clave Constancia Electrónica" pattern="[0-9]{1,2}$" required value="<?=$fila[46]?>">
          </div>
      </div>

    </div><br>

     <input type="hidden" name="cedula" value="<?=$fila['ced_d']?>" />

     <div class="container">
      <div class="row">
        <div class="col-xs-5">
          <button type="submit" title="Eliminar Representante" class="btn btn-primary"><b>Eliminar Representante</b></button>
          <a href="administrador.php"><button type="button" title="Salir" class="btn btn-danger">Salir</button></a>
        </div>
      </div>
    </div>   
    
</form>

<?php
}
?>
