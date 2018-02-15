<?php
require_once('../../../conexion/conexion.php');
$countries      = mysqli_query($conexion, "SELECT * FROM pais ORDER BY paisnombre ASC");
$municipalities = mysqli_query($conexion, "SELECT * FROM municipio ORDER BY nombre ASC");
?>

<legend><h3 class="text-center"><b>REGISTRAR REPRESENTANTE</b></h3></legend>

<form action="administrador.php?p=representante/registrar_r_b" autocomplete="off" method="POST" >

  <div class="container">
    <div class="row">
      <fieldset>
        <legend><b>Datos del Representante</b></legend>
        <div class="col-xs-2">
          <label for="tipo_doc">Tipo de documento</label>
          <select name="tipo_doc" class="form-control input-sm" id="tipo_doc" title="Tipo de documento" required>
            <option value="" selected>--Seleccionar--</option>
            <option value="v">Cédula Venezolana</option>
            <option value="e">Cédula Extranjera</option>
            <option value="p">Pasaporte</option>
          </select>
        </div>

        <div class="col-xs-2">
          <label for="ced_r">N° de documento</label>
          <input name="ced_r" id="ced_r" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="8" type="text" class="form-control input-sm" placeholder="N° de documento" title="N° de documento" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);">
        </div>

        <div class="col-xs-3">
          <label for="nombre">Nombre</label>
          <input onkeypress="return sololetras(event)" onpaste="return false"  maxlength="50" name="nombre" id="nombre" type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);">

        </div>

        <div class="col-xs-3">
          <label for="apellido">Apellido</label>
          <input onkeypress="return sololetras(event)" onpaste="return false" maxlength="50" name="apellido" id="apellido" type="text" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);">
        </div>

        <div class="col-xs-2">
          <label for="sexo">Género</label>
          <select name="sexo" class="form-control input-sm" id="sexo" title="Seleccione Género" required>
            <option value="" selected>--Seleccionar--</option>
            <option value="m">Masculino</option>
            <option value="f">Femenino</option>
          </select>
        </div>

      </div>
    </div><br>

    <div class="container">
      <div class="row">

        <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input name="f_naci" id="f_naci" type="date" onpaste="return false" title="Fecha de Nacimiento" class="form-control input-sm"  required>
        </div>
      


        <div class="col-xs-2">
          <label for="edo_civil">Estado Civil</label>
          <select name="edo_civil" class="form-control input-sm" id="edo_civil" title="Seleccione Estado Civil" required>
            <option value="" selected>--Seleccionar--</option>
            <option value="s">Soltero(a)</option>
            <option value="c">Casado(a)</option>
            <option value="d">Divorciado(a)</option>
            <option value="v">Viudo(a)</option>
          </select>
        </div>

        <div class="col-xs-2">
          <label for="afinidad">Afinidad</label>
          <select name="afinidad" class="form-control input-sm" id="afinidad" title="sleccione Afinidad" required>
           <option value="" selected>--Selecionar--</option>
           <option value="p">Padre</option>
           <option value="m">Madre</option>
           <option value="a">Abuelo(a)</option>
           <option value="o">Otros</option>
         </select>
       </div>

       <div class="col-xs-2">
        <label for="pais">Pais</label>
        <select name="pais" id="pais" class="form-control input-sm" title="Seleccione Pais" required>
          <option value="">Selseccione un País</option>
          <?php while ( $conuntry = mysqli_fetch_assoc($countries) ): ?>
            <option value="<?= $conuntry['id'] ?>"><?= $conuntry['paisnombre'] ?></option>
          <?php endwhile?>
        </select>
      </div>

      <div class="col-xs-3">
       <label for="estado">Estado</label>
       <select name="edo" id="estado" class="form-control input-sm" title="Seleccione Estado" required>
         <option value="">--Selecione un Pais--</option>
       </select>
     </div>

   </div><br>
 </fieldset>

 <div class="row">
  <fieldset>
    <legend><b>Datos de Ubicación Domiliciaria del Representante</b></legend>

    <div class="col-xs-2">
      <label for="mun">Municipio</label>
      <select name="muni" id="municipio" class="form-control input-sm" title="Seleccione Municipio" required>
        <option value="">Selseccione un Municipio</option>
        <?php while ( $municipality = mysqli_fetch_assoc($municipalities) ): ?>
          <option value="<?= $municipality['id'] ?>"><?= $municipality['nombre'] ?></option>
        <?php endwhile?>
      </select>
    </div>

    <div class="col-xs-3">
     <label for="parro">Parroquia</label>
     <select name="parro" id="parroquia" class="form-control input-sm" title="Seleccione Parroquia" title="Seleccione Paroquia" required>
       <option value="">--Selecione un Municipio--</option>
     </select>
   </div>

   <div class="col-xs-2">
    <label for="población">Población</label>
    <input onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="pobla" id="pobla" type="text" class="form-control input-sm" placeholder="Población" title="Población" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required  oninput="check_pobla(this);">
  </div>

  <div class="col-xs-3">
    <label for="urbanización">Urbanización</label>
    <input onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="urbani" id="urbani" type="text" class="form-control input-sm" placeholder="Urbanización" title="Urbanización" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_urbani(this);">
  </div>

  <div class="col-xs-2">
    <label for="tipo de vía">Tipo de Vía</label>
    <input onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="via" id="via" type="text" class="form-control input-sm" placeholder="Tipo de Via" title="Tipo de Vía" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_via(this);">
  </div>
</div><br>


<div class="row">
  <div class="col-xs-8">
    <label for="dirección">Dirección</label>
    <input maxlength="100" name="direc" id="direc" type="text" class="form-control input-sm" placeholder="Dirección" title="Dirección" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc(this);">
  </div>

  <div class="col-xs-2">
    <label for="tele_mov">Teléfono Movil</label>
    <input name="tele_mov" id="tele_mov" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);">
  </div>

  <div class="col-xs-2">
    <label for="tele_hab">Teléfono Habitación</label>
    <input name="tele_hab" id="tele_hab" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);">
  </div>
</div><br>

<div class="row">

  <div class="col-xs-4">
    <label for="direc_trab">Dirección laboral</label>
    <input  maxlength="50"  name="direc_trab" id="direc_trab" type="text" class="form-control input-sm" placeholder="Dirección Laboral" title="Dirección Laboral" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc_trab(this);">
  </div>

  <div class="col-xs-2">
    <label for="teléfono de trabajo">Teléfono de Trabajo</label>
    <input name="tele_trab" id="tele_trab" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="02740000000"  title="Teléfono de Trabajo"  pattern="[0-9]{11}$" required oninput="check_tele_trab(this);">
  </div>

  <div class="col-xs-2">
    <label for=" email">Email</label>
    <input name="email" id="email" type="email" maxlength="40" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);">
  </div>

  <div class="col-xs-2">
    <label for="nombre_empre">Nombre de la Empresa</label>
    <input name="nombre_empre" id="nombre_empre" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre de la Empresa" title="Nombre de la Empresa" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_nombre_empre(this);">
  </div>

  <div class="col-xs-2">
    <label for="profesion">Profesión</label>
    <input name="profesion" id="profesion" onkeypress="return sololetras(event)" onpaste="return false" maxlength="50" type="text" maxlength="30" class="form-control input-sm" placeholder="Profesión" title="Profesión" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_profesion(this);">
  </div>
</div>
</fieldset> <br>


<div class="row">
  <div class="col-xs-5">
    <button type="submit" title="Guardar Registro" class="btn btn-primary"><b>Guardar</b></button>
    <button type="reset" title="Borrar Informacion" class="btn btn-danger"><b>Borrar Campos</b></button>
  </div>
</div>

</form>