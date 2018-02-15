<legend><h3 class="text-center"><b>REGISTRAR PERSONAL DOCENTE</b></h3></legend>
<form action="administrador.php?p=docente/registrar_d_b" method="POST" >

		<div class="container">
			<div class="row">
        <div class="col-xs-2">
            <label for="cédula">Cédula</label>
            <input name="ced_d" id="ced_d" onkeypress="return solonumeros(event)" onpaste="return false" type="text" maxlength="8" class="form-control input-sm" placeholder="Cedula" title="Cedila" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);">
          </div>

          <div class="col-xs-3">
            <label for="nombre">Nombre</label>
            <input  name="nombre" id="nombre" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);">
          </div>

          <div class="col-xs-3">
            <label for="apellido">Apellido</label>
            <input  name="apellido" id="apellido" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);">
          </div>

           <div class="col-xs-1">
            <label for="">Género</label>
            <select name="sexo" class="form-control input-sm" id="sexo"  title="Seleccione Género" required>
              <option value=""></option>
              <option value="m">Masculino</option>
              <option value="f">Femenino</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input name="f_naci" id="f_naci" type="date" onpaste="return false" title="Fecha de Nacimiento" class="form-control input-sm"  required>
          </div>

      </div>
    </div><br>

  <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="lugar de nacimiento">Lugar de Nacimiento</label>
            <input name="lugar_naci" id="lugar_naci" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="100" class="form-control input-sm" placeholder="Lugar de Nacimiento" title="Lugar de Nacimiento" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

           <div class="col-xs-3">
            <label for="dirección de habitación">Dirección de Habitación</label>
            <input  name="direc_hab" id="direc_hab" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="100" class="form-control input-sm" placeholder="Dirección de Habitación" title="Dirección de Habitación" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="teléfono de habitación">Teléfono de Habitación</label>
            <input name=" tele_hab" id="tele_hab" onkeypress="return solonumeros(event)" onpaste="return false" type="text" maxlength="11" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);">
          </div>

          <div class="col-xs-2">
            <label for="télefono celular">Teléfono Movil</label>
            <input name="tele_mov" id="tele_mov" onkeypress="return solonumeros(event)" onpaste="return false" type="text" maxlength="11" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);">
          </div>

          <div class="col-xs-2">
            <label for="emain">Email</label>
            <input  name="email" id="email" type="text" maxlength="30" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);">
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
            <input name="est_bachi" id="est_bachi" type="text" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" >
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_bachi_fe" id="est_bachi_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_bachi_men" id="est_bachi_men" onkeypress="return sololetras(event)" onpaste="return false" type="text" title="Mención" maxlength="50" class="form-control input-sm" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_tsu" id="est_tsu" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input  name="est_tsu_fe" id="est_tsu_fe" type="date"  title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_tsu_men" id="est_tsu_men" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_pre" id="est_pre" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_pre_fe" id="est_pre_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_pre_men" id="est_pre_men" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_espe" id="est_espe" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input name="est_espe_fe" id="est_espe_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_espe_men" onkeypress="return sololetras(event)" onpaste="return false" id="est_espe_men" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name="est_ma" id="est_ma" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input  name="  est_ma_fe" id=" est_ma_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_ma_men" id="est_ma_men" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
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
            <input name=" est_doc" id=" est_doc" type="text" maxlength="100" class="form-control input-sm" title="Institución" maxlength="100" class="form-control input-sm" placeholder="Institución" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>

          <div class="col-xs-2">
            <label for="fecha">Fecha</label>
            <input  name="est_doc_fe" id="est_doc_fe" type="date" title="Fecha" class="form-control input-sm">
          </div>

          <div class="col-xs-3">
            <label for="mención">Mención</label>
            <input  name="est_doc_men" id="est_doc_men" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" title="Institución" placeholder="Mención" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>
      </div>
    </div><br>

<div class="container">
      <div class="row">
          <div class="col-xs-6">
            <label for="cursos">Cursos</label>
            <input  name="cursos" id="cursos" onkeypress="return sololetras(event)" onpaste="return false" type="text"  title="Cursos" maxlength="100" class="form-control input-sm" placeholder="Cursos" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*">
          </div>
      </div>
</div><br>

<div class="container">
      <div class="row">
          <div class="col-xs-2">
            <label for="denominacion de cargo">Denominación de Cargo</label>
            <input name="deno_cargo" id="deno_cargo" onkeypress="return sololetras(event)" onpaste="return false" type="text"  title="Denominación de Cargo" maxlength="50" class="form-control input-sm" placeholder="Dominación de Cargo" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="cargo funcional">Cargo Funcional</label>
            <input name="cargo_fun" id="cargo_fun" onkeypress="return sololetras(event)" onpaste="return false" type="text" title="Cargo Funcional" maxlength="50" class="form-control input-sm" placeholder="Cargo Funcional" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
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
            <input  name="codigo_cargo" id="codigo_cargo" onkeypress="return solonumeros(event)" onpaste="return false" type="text"  title="Código de Cargo" maxlength="20" class="form-control input-sm" placeholder="Código de Cargo" pattern="[0-9]{1,20}$" required>
          </div>

           <div class="col-xs-2">
            <label for="matricula">Matricula</label>
            <input name="matricula" id="matricula" type="text" title="Matricula" maxlength="20" class="form-control input-sm" placeholder="Matricula" pattern="[0-9]{1,20}$" required>
          </div>

           <div class="col-xs-2">
            <label for="secciones que atiende">Secciones que atiende</label>
            <input name="secciones" id="secciones" type="text" title="Secciones que atiende" maxlength="20" class="form-control input-sm" placeholder="Secciones que atiende" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-2">
            <label for="tiempo de servicio">Tiempo de Servicio</label>
            <input  name="tiempo_servicio" id="tiempo_servicio" type="text" title="Tiempo de Servicio" maxlength="20" class="form-control input-sm" placeholder="Tiempo de Servicio" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

          <div class="col-xs-2">
            <label for="turno">Turno</label>
            <select name="turno" class="form-control input-sm" title="Turno" id="turno" required>
              <option value=""></option>
              <option value="m">Mañana</option>
              <option value="t">Tarde</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="numero de horas">N° de Horas</label>
            <input  name="horas" id="horas" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="N° de Horas" maxlength="2" class="form-control input-sm" placeholder="N° de Horas" pattern="[0-9]{1,2}$" required>
          </div>

          <div class="col-xs-2">
            <label for="plantel donde cobra">Plantel Donde Cobra</label>
            <input  name="plantel_cobro" id="plantel_cobro" type="text" title="Plantel Donde Cobra" maxlength="100" class="form-control input-sm" placeholder="Plantel Donde Cobra" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required>
          </div>

           <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input  name="codigo_plantel" id="codigo_plantel" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,10}$" required>
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="otro plantel donde trabaja">Otro Plantel Donde Trabaje</label>
            <input  name="plantel_otro" id="plantel_otro" type="text" title="Otro Plantel Donde Trabaje" maxlength="100" class="form-control input-sm" placeholder="Otro Plantel Donde Trabaje" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*"  required>
          </div>

          <div class="col-xs-2">
            <label for="codigo plantel">Codigo Plantel</label>
            <input name="codigo_plantel_otro" id="codigo_plantel_otro" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="Codigo Plantel" maxlength="20" class="form-control input-sm" placeholder="Codigo Plantel" pattern="[0-9]{1,10}$" required>
          </div>

          <div class="col-xs-2">
            <label for="numero de horas">N° de Horas</label>
            <input  name="horas_otro" id="horas_otro" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="N° de Horas"  maxlength="2" class="form-control input-sm" placeholder="N° de Horas" pattern="[0-9]{1,2}$" required>
          </div>

          <div class="col-xs-3">
            <label for="fecha ingreso al ministerio">Fecha Ingreso al Ministerio</label>
            <input name="ingreso_minist" id="ingreso_minist" type="date" title="Fecha Ingreso al Ministerio" class="form-control input-sm" required>
          </div>

      </div>

    </div><br>

    <div class="container">
      <div class="row">
          <div class="col-xs-3">
            <label for="clave de talon de pago">Clave de Talon de Pago</label>
            <input  name="clave_talon" id="clave_talon" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="Clave de Talon de Pago" maxlength="20" class="form-control input-sm" placeholder="Clave de Talon de Pago" pattern="[0-9]{1,2}$" required>
          </div>

          <div class="col-xs-3">
            <label for="clave constancia electronica">Clave Constancia Electrónica</label>
            <input  name="clave_constancia" id="clave_constancia" onkeypress="return solonumeros(event)" onpaste="return false" type="text" title="Clave Constancia Electrónica" maxlength="20" class="form-control input-sm" placeholder="Clave Constancia Electrónica" pattern="[0-9]{1,2}$" required>
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

