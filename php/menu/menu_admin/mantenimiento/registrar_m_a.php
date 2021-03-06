<legend><h3 class="text-center"><b>REGISTRAR PERSONAL MANTENIMIENTO</b></h3></legend>
<form action="administrador.php?p=mantenimiento/registrar_m_b" autocomplete="off" method="POST" >

    <div class="container">
      <div class="row">
        <div class="col-xs-2">
            <label for="cédula">Cédula</label>
            <input name="ced_m" id="ced_m" type="text" maxlength="8" class="form-control input-sm" placeholder="Cedula" title="Cedila" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);">
          </div>

          <div class="col-xs-3">
            <label for="nombre">Nombre</label>
            <input style="text-transform: capitalize" name="nombre" id="nombre" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);">
          </div>

          <div class="col-xs-3">
            <label for="apellido">Apellido</label>
            <input style="text-transform: capitalize" name="apellido" id="apellido" type="text" maxlength="50" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);">
          </div>

           <div class="col-xs-1">
            <label for="genero">Género</label>
            <select name="sexo" class="form-control input-sm" id="sexo"  title="Seleccione Género" required>
              <option value=""></option>
              <option value="m">Masculino</option>
              <option value="f">Femenino</option>
            </select>
          </div>

          <div class="col-xs-1">
            <label for="edad">Edad</label>
            <input name="edad" id="" type="text" maxlength="2" class="form-control input-sm" placeholder="00" title="Edad" pattern="[0-9]{1,2}$" required oninput="check_edad(this);">
          </div>

          <div class="col-xs-2">
            <label for="lugar de nacimiento">Lugar de Nacimiento</label>
            <input name="lugar_naci" id="lugar_naci" type="text" maxlength="100" class="form-control input-sm" placeholder="Lugar de Nacimiento" title="Lugar de Nacimiento" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

      </div>
    </div><br>

  <div class="container">
      <div class="row">

          <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input name="f_naci" id="f_naci" type="date" title="Fecha de Nacimiento" class="form-control input-sm"  required>
          </div>

          <div class="col-xs-6">
            <label for="dirección de habitación">Dirección de Habitación</label>
            <input  name="direc_hab" id="direc_hab" type="text" maxlength="100" class="form-control input-sm" placeholder="Dirección de Habitación" title="Dirección de Habitación" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="teléfono de habitación">Teléfono de Habitación</label>
            <input name=" tele_hab" id="  tele_hab" type="text" maxlength="11" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);">
          </div>

          <div class="col-xs-2">
            <label for="télefono celular">Teléfono Movil</label>
            <input name="tele_mov" id="tele_mov" type="text" maxlength="11" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);">
          </div>
        </div> 
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-xs-2">
            <label for="emain">Email</label>
            <input  name="email" id="email" type="text" maxlength="30" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);">
          </div>

          <div class="col-xs-2">
            <label for="denominacion de cargo">Denominación de Cargo</label>
            <input name="deno_cargo" id="deno_cargo" type="text"  title="Denominación de Cargo" maxlength="50" class="form-control input-sm" placeholder="Dominación de Cargo" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="cargo funcional">Cargo Funcional</label>
            <input name="cargo_fun" id="cargo_fun" type="text" title="Cargo Funcional" maxlength="50" class="form-control input-sm" placeholder="Cargo Funcional" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="condición laboral">Condición Laboral</label>
            <select name="condicion_lab" class="form-control input-sm" id="condicion_lab" title="Condición Laboral" required>
              <option value=""></option>
              <option value="f">F</option>
              <option value="c">C</option>
              <option value="s">S</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="codigo de cargo">Código de Cargo</label>
            <input  name="codigo_cargo" id="codigo_cargo" type="text"  title="Código de Cargo" maxlength="20" class="form-control input-sm" placeholder="Código de Cargo" pattern="[0-9]{1,20}$" required>
          </div>

           <div class="col-xs-2">
            <label for="tiempo de servicio">Tiempo de Servicio</label>
            <input style="text-transform: capitalize" name="tiempo_servicio" id="tiempo_servicio" type="text" title="Tiempo de Servicio" maxlength="20" class="form-control input-sm" placeholder="Tiempo de Servicio" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">

         <div class="col-xs-3">
            <label for="plantel donde cobra">Plantel Donde Cobra</label>
            <input style="text-transform: capitalize" name="plantel_cobro" id="plantel_cobro" type="text" title="Plantel Donde Cobra" maxlength="100" class="form-control input-sm" placeholder="Plantel Donde Cobra" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

        <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input style="text-transform: capitalize" name="codigo_plantel" id="codigo_plantel" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,2}$" required>
          </div>

          <div class="col-xs-3">
            <label for="fecha ingreso al ministerio">Fecha Ingreso al Ministerio</label>
            <input name="ingreso_minist" id="ingreso_minist" type="date" title="Fecha Ingreso al Ministerio" class="form-control input-sm" required>
          </div>

          <div class="col-xs-2">
            <label for="clave de talon de pago">Clave de Talon de Pago</label>
            <input style="text-transform: capitalize" name="clave_talon" id="clave_talon" type="text" title="Clave de Talon de Pago" maxlength="20" class="form-control input-sm" placeholder="Clave de Talon de Pago" pattern="[0-9]{1,2}$" required>
          </div>

           <div class="col-xs-2">
            <label for="clave constancia electronica">Clave Constancia Electrónica</label>
            <input style="text-transform: capitalize" name="clave_constancia" id="clave_constancia" type="text" title="Clave Constancia Electrónica" maxlength="20" class="form-control input-sm" placeholder="Clave Constancia Electrónica" pattern="[0-9]{1,2}$" required>
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
            <input name="est_bachi" id="est_bachi" type="text" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" >
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_bachi_fe" id="est_bachi_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_bachi_men" id="est_bachi_men" type="text" title="Mención" maxlength="50" class="form-control input-sm" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_tsu" id="est_tsu" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input  name="est_tsu_fe" id="est_tsu_fe" type="date"  title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_tsu_men" id="est_tsu_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_pre" id="est_pre" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_pre_fe" id="est_pre_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input style="text-transform: capitalize" name="est_pre_men" id="est_pre_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>
      </div>
    </div><br>
</fieldset>

<div class="container">
      <div class="row">
          <div class="col-xs-6">
            <label for="cursos">Cursos</label>
            <input  name="cursos" id="cursos" type="text"  title="Cursos" maxlength="100" class="form-control input-sm" placeholder="Cursos" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>
      </div>
</div><br>

   <div class="container">
     <div class="row">
          <div class="col-xs-5">
          <button type="submit" title="Guardar Registro" class="btn btn-primary"><b>Guardar</b></button>
          <button type="reset" title="Borrar Informacion" class="btn btn-danger"><b>Borrar Campos</b></button>
        </div>
    </div>
    </div>
    
</form>

</body>
</html>