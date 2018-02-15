<?php
require_once('../../../conexion/conexion.php');

$resultado = mysqli_query($conexion, "SELECT * FROM representante");
$countries      = mysqli_query($conexion, "SELECT * FROM pais ORDER BY paisnombre ASC");
$municipalities = mysqli_query($conexion, "SELECT * FROM municipio ORDER BY nombre ASC");
 ?>

<script>
 $(function() {
        $('.chosen-select').chosen();
      });
</script>


<legend><h3 class="text-center"><b>REGISTRAR ESTUDIANTE</b></h3></legend>
<form action="administrador.php?p=estudiante/registrar_e_b" autocomplete="off" method="POST">
  <div class="container">
      <div class="row">
           <div class="col-xs-4">
            <label for="tipo_doc">Representante</label>
            <select name="ced_r" data-placeholder="Representante" class="form-control input-sm chosen-select" id="ced_r" required>
              <option value=""></option>
              <?php while($list = mysqli_fetch_array($resultado)) echo "<option  value='".$list['ced_r']."'>".utf8_encode($list['ced_r'])."&nbsp &nbsp".utf8_encode($list['nombre'])." ".utf8_encode($list['apellido'])."</option>"; ?>
            </select>
          </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
          <legend><b>Datos del alumno</b></legend>
           <div class="col-xs-2">
            <label for="tipo_doc">Tipo de documento</label>
            <select name="tipo_doc" class="form-control input-sm" id="tipo_doc" required>
              <option value="">--Seleccionar--</option>
              <option value="v">Cédula Venezolana</option>
              <option value="e">Cédula Extranjera</option>
            </select>
          </div>
          
          <div class="col-xs-2">
            <label for="ced_e">Cédula</label>
            <input name="ced_e" maxlength="8" onkeypress="return solonumeros(event)" onpaste="return false" id="ced_e" type="text" class="form-control input-sm" placeholder="N° de documento" title="N° de documento" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);">
          </div>

          <div class="col-xs-2">
            <label for="nombre">Nombre</label>
            <input maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="nombre" id="nombre" type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*" required oninput="check_nombre(this);">
          </div>

          <div class="col-xs-2">
            <label for="apellido">Apellido</label>
            <input maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="apellido" id="apellido" type="text" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);">
          </div>

           <div class="col-xs-2">
            <label for="sexo">Género</label>
            <select name="sexo" class="form-control input-sm" id="sexo" title="Seleccione Género" required>
              <option value="">--Seleccionar--</option>
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
          <div class="col-xs-2">
            <label for="edo_civil">Estado Civil</label>
            <select name="edo_civil" class="form-control input-sm" id="edo_civil" title="Estado Civil" required>
              <option value="">--Seleccionar--</option>
              <option value="s">Soltero(a)</option>
              <option value="c">Casado(a)</option>
              <option value="d">Divorciado(a)</option>
              <option value="v">Viudo(a)</option>
            </select>
          </div>
          
          <div class="col-xs-2">
            <label for="lateralidad">Lateralidad</label>
            <select name="lateralidad" class="form-control input-sm" id="lateralidad" title="Lateralidad" required>
               <option value="">--Seleccionar--</option>
              <option value="i">Izquierdo</option>
              <option value="d">Derecho</option>
              <option value="a">Ambidiestro</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="pais de nacimiento">País de Nacimiento</label>
            <select name="pais" id="pais" title="País de nacimiento" class="form-control input-sm" required>
              <option value="">Selseccione un País</option>
                <?php while ( $conuntry = mysqli_fetch_assoc($countries) ): ?>
                    <option value="<?= $conuntry['id'] ?>"><?= $conuntry['paisnombre'] ?></option>
                <?php endwhile?>
              </select>
          </div>
          
          <div class="col-xs-2">
           <label for="estado">Estado de Nacimiento</label>
           <select name="edo" id="estado" title="Estado de Nacimiento" class="form-control input-sm" required>
           <option value="">--Selecione un Pais--</option>
           </select>
          </div>

          <div class="col-xs-2">
            <label for="area de atencion">Area de Atención</label>
            <input maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="area_aten" id="area_aten" title="area_aten" type="text" class="form-control input-sm" placeholder="Area de atención" title="Area de Atención" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required oninput="check_area_aten(this);">
          </div>

           <div class="col-xs-2">
            <label for="progra_apoy">Programa de Apoyo</label>
            <input maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="progra_apoy" id="progra_apoy" type="text" class="form-control input-sm" placeholder="Programa de Apoyo" title="Programa de Apoyo" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required oninput="check_progra_apoy(this);">
          </div>
    </div>
    </div><br>

    <div class="container">
      <div class="row">
        
          <legend><b>Datos de Ubicación Domiliciaria</b></legend>
           <div class="col-xs-3">
            <label for="mun">Municipio</label>
            <select name="muni" id="municipio" title="Municipio" class="form-control input-sm" required>
              <option value="">Selseccione un Municipio</option>
              <?php while ( $municipality = mysqli_fetch_assoc($municipalities) ): ?>
                  <option value="<?= $municipality['id'] ?>"><?= $municipality['nombre'] ?></option>
              <?php endwhile?>
            </select>
          </div>
          
          <div class="col-xs-2">
           <label for="parro">Parroquia</label>
           <select name="parro" id="parroquia" title="Parroquia" class="form-control input-sm" required>
           <option value="">--Selecione un Municipio--</option>
           </select>
          </div>

          <div class="col-xs-2">
            <label for="pobla">Poblacion</label>
            <input maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="pobla" id="pobla" type="text" class="form-control input-sm" placeholder="Población" title="Población" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required  oninput="check_pobla(this);">
          </div>

          <div class="col-xs-3">
            <label for="urbani">Urbanización</label>
            <input maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="urbani" id="urbani" type="text" class="form-control input-sm" placeholder="Urbanización" title="Urbanización" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_urbani(this);">
          </div>

          <div class="col-xs-2">
            <label for="via">Tipo de Via</label>
            <input maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="via" id="via" type="text" class="form-control input-sm" placeholder="Tipo de Via" title="Tipo de Vía" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_via(this);">
          </div>
      </div>

      </div><br>

      <div class="container">
        <div class="row">
          <div class="col-xs-8">
            <label for="direc">Dirección</label>
            <input maxlength="50" name="direc" id="direc" type="text" class="form-control input-sm" placeholder="Dirección" title="Dirección" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc(this);">
          </div>
      

            <div class="col-xs-2">
               <label for="zona">Zona Urbana</label>
               <select name="zona" class="form-control input-sm" id="zona" title="Zona Urbana" required>
                  <option value="">--Seleccionar--</option>
                  <option value="r">Rural</option>
                  <option value="u">Urbana</option>
               </select>
            </div>

            <div class="col-xs-2">
                <label for="tip_vivi">Tipo de vivienda</label>
                <select name="tip_vivi" class="form-control input-sm" title="Tipo de vivienda" tip_vivi" required>
                 <option value="">--Seleccionar--</option>
                 <option value="a">Apartamento</option>
                 <option value="c">Casa</option>
                 <option value="q">Quinta</option>
                 <option value="r">Rancho</option>
                 <option value="a">Anexo</option>
                 <option value="re">Refugio</option>
                </select>
            </div>
      </div>
      </div><br>

    <div class="container">
      <div class="row">
            <div class="col-xs-2">
               <label for="ubi_vivi">Ubicación de Vivienda</label>
               <select name="ubi_vivi" class="form-control input-sm" id="ubi_vivi" title="Ubicación de Vivienda" required>
                  <option value="">--Seleccionar--</option>
                  <option value="b">Barrio</option>
                  <option value="c">Caserio</option>
                  <option value="u">Urbanización</option>
                  <option value="z">Zona Residencial</option>
               </select>
            </div>

             <div class="col-xs-2">
               <label for="esta_infra">Estado Infraestructura</label>
               <select name="esta_infra" class="form-control input-sm" id="esta_infra" title="Estado Infraestructura" required>
                  <option value="">--Seleccionar--</option>
                  <option value="e">Exelente</option>
                  <option value="b">Buena</option>
                  <option value="r">Regular</option>
                  <option value="d">Deteriorada</option>
               </select>
            </div>

            <div class="col-xs-2">
                <label for="cond_vivi">Condicion de Vivienda</label>
                <select name="cond_vivi" class="form-control input-sm" id="cond_vivi" title="Condicion de Vivienda"  required>
                 <option value="">--Seleccionar--</option>
                 <option value="a">Alquilado</option>
                 <option value="p">Propia</option>
                 <option value="c">Cedida</option>
                 <option value="i">Invasión</option>
                 <option value="pr">Prestado</option>
                 <option value="r">Refugio</option>
                </select>
            </div>

            <div class="col-xs-1">
               <label for="canaima">Canaima</label>
               <select name="canaima" class="form-control input-sm" id="canaima" title="Canaima" required>
                  <option value="">--Seleccionar--</option>
                  <option value="s">Si</option>
                  <option value="n">No</option>
               </select>
            </div>

            <div class="col-xs-2">
            <label for="ser_canaima">Serial Canaima</label>
            <input name="ser_canaima" onkeypress="return solonumeros(event)" onpaste="return false" id="ser_canaima" type="text" class="form-control input-sm" placeholder="00" title="Serial Canaima"  pattern=[0-9.]* required oninput="">
          </div>

            <div class="col-xs-1">
               <label for="beca">Beca</label>
               <select name="beca" class="form-control input-sm" id="beca" title="Beca" required>
                  <option value="">--Seleccionar--</option>
                  <option value="s">Si</option>
                  <option value="n">No</option>
               </select>
            </div>

            <div class="col-xs-2">
            <label for="ingre_fami">Ingreso Familiar</label>
            <input name="ingre_fami" onkeypress="return solonumeros(event)" onpaste="return false" id="ingre_fami" type="text" class="form-control input-sm" placeholder="Ingreso Familiar" title="Ingreso Familiar" pattern="[0-9.]*" required oninput="check_ingre_fami(this);">
          </div>

          

      </div>
      </div><br>
    
    <div class="container">
      <div class="row">


          <div class="col-xs-2">
            <label for="tele_mov">Telefono Movil</label>
            <input name="tele_mov" maxlength="11" onkeypress="return solonumeros(event)" onpaste="return false" id="tele_mov" type="text" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);">
          </div>   

          <div class="col-xs-2">
            <label for="tele_hab">Telefono Habitación</label>
            <input name="tele_hab" maxlength="11" onkeypress="return solonumeros(event)" onpaste="return false" id="tele_hab" type="text" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);">
          </div>

          <div class="col-xs-2">
            <label for="email">Email</label>
            <input name="email" maxlength="30" id="email" type="email" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);">
          </div>

          <div class="col-xs-1">
            <label for="estatura">Estatura</label>
            <input name="estatura"  onpaste="return false" id="estatura" type="text" class="form-control input-sm" placeholder="0.00" maxlength="4" title="Estatura"  pattern=[0-9.]* required oninput="check_estatura(this);">
          </div>

          <div class="col-xs-1">
            <label for="peso">Peso</label>
            <input name="peso" onkeypress="return solonumeros(event)" onpaste="return false" id="peso" type="text" class="form-control input-sm" placeholder="00" maxlength="3" title="Peso"  required oninput="check_peso(this);">
          </div>

          <div class="col-xs-2">
            <label for="tallas de camisa">Tallas Camisa</label>
            <select name="talla_cami" class="form-control input-sm" id="talla_cami" title="Tallas Camisa" required>
              <option value="">--Seleccionar--</option>
              <option value="10">10</option>
              <option value="12">12</option>
              <option value="14">14</option>
              <option value="16">16</option>
              <option value="18">18</option>
              <option value="ss">SS</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
              <option value="xxl">XXL</option>
            </select>
          </div>

           <div class="col-xs-2">
              <label for="talla pantalon">Talla Pantalon</label>
              <select name="talla_pant" class="form-control input-sm" id="talla_pant" title="Tallas Pantalon" required>
              <option value="">--Seleccionar--</option>
              <option value="14">14</option>
              <option value="16">16</option>
              <option value="26">26</option>
              <option value="28">28</option>
              <option value="30">30</option>
              <option value="32">32</option>
              <option value="34">34</option>
              <option value="36">36</option>
              <option value="38">38</option>
              <option value="40">40</option>
              <option value="42">42</option>
            </select>
          </div>
          
          </div>
   
         </div><br>

        <div class="container">
          <div class="row">

           <div class="col-xs-2">
            <label for="talla zapato">Talla Zapato</label>
            <select name="talla_zapa" class="form-control input-sm" id="talla_zapa" title="Talla Zapato" required>
            <option value="">--Seleccionar--</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
            </select>



          </div>

        </div>
      </div>


      
   <br>

  
<div class="container">
    <div class="row">
          <div class="col-xs-5">
          <button type="submit" class="btn btn-primary"><b>Guardar</b></button>
          <button type="reset" class="btn btn-danger"><b>Borrar Campos</b></button>
        </div>
    </div>
</div>
</form>