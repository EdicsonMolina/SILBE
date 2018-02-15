<?php
extract($_POST);

require_once('../../../conexion/conexion.php');

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=estudiante/eliminar_e_a';
</script>
<?php
} 


$sql            = "SELECT * FROM estudiante WHERE ced_e='$cedula'";
$consulta       = mysqli_query($conexion, $sql);

$result = mysqli_query($conexion,"SELECT * FROM representante");

if(!$consulta){
    echo "No se pudo realizar la consulta".mysqli_error();
    exit();
}

$fila=mysqli_fetch_array($consulta);

$countries      = mysqli_query($conexion, "SELECT * FROM pais ORDER BY paisnombre ASC");
$states         = mysqli_query($conexion, "SELECT * FROM estado WHERE ubicacionpaisid = ". $fila['pais']);
$municipalities = mysqli_query($conexion, "SELECT * FROM municipio ORDER BY nombre ASC");
$parishes       = mysqli_query($conexion, "SELECT * FROM parroquia WHERE id_municipio = ". $fila['muni']);


if ($fila==0) { ?>
<script type='text/javascript'>
    alert('## N° DE DOCUMENTO NO REGISTRADO ##');
    window.location='administrador.php?p=estudiante/eliminar_e_a';
</script>
<?php
} 
else {
    ?>

<script>
 $(function() {
        $('.chosen-select').chosen();
      });
</script>


<legend><h3 class="text-center"><b>ELIMINAR ESTUDIANTE</b></h3></legend>
<form action="administrador.php?p=estudiante/eliminar_e_c" method="POST">


       <div class="container">
      <div class="row">
           <div class="col-xs-4">
            <label for="tipo_doc">Representante</label>
            <select disabled name="ced_r" data-placeholder="Representante" class="form-control input-sm chosen-select" id="ced_r" required>
              <?php while($row = mysqli_fetch_array($result)){ echo "<option value='".$row['ced_r']."'  "; if($fila['ced_r']==$row[            'ced_r']){ echo "selected"; } echo ">".utf8_encode($row['ced_r'])."&nbsp &nbsp".utf8_encode($row['nombre'])." ".utf8_encode($row['apellido'])."</option>"; } ?>
            </select>
          </div>              
      </div>
    </div><br>

    <div class="container">
      <div class="row">
          <legend><b>Datos del alumno</b></legend>
           <div class="col-xs-2">
            <label for="tipo_doc">Tipo de documento</label>
            <select disabled name="tipo_doc" class="form-control input-sm" id="tipo_doc" required>
              <option value="v" <?php if($fila['tipo_doc']=="v") echo "selected";?>>Cédula Venezolana</option> 
              <option value="e" <?php if($fila['tipo_doc']=="e") echo "selected";?>>Cédula Extranjera</option> 
            </select>
          </div>
          
          <div class="col-xs-2">
            <label for="ced_e">Cédula</label>
            <input disabled name="ced_e" maxlength="8" onkeypress="return solonumeros(event)" onpaste="return false" id="ced_e" type="text" class="form-control input-sm" placeholder="N° de documento" title="N° de documento" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);" value="<?=$fila[0]?>">
          </div>

          <div class="col-xs-2">
            <label for="nombre">Nombre</label>
            <input disabled  maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="nombre" id="nombre" type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*" required oninput="check_nombre(this);" value="<?=$fila[3]?>">
          </div>

          <div class="col-xs-2">
            <label for="apellido">Apellido</label>
            <input disabled  maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="apellido" id="apellido" type="text" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);" value="<?=$fila[4]?>">
          </div>

           <div class="col-xs-2">
            <label for="sexo">Género</label>
            <select disabled name="sexo" class="form-control input-sm" id="sexo" title="Seleccione Género" required>
              <option value="m" <?php if($fila['sexo']=="m") echo "selected";?>>Masculino</option> 
              <option value="f" <?php if($fila['sexo']=="f") echo "selected";?>>Femenino</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="fecha de nacimiento">Fecha de Nacimiento</label>
            <input disabled name="f_naci" id="f_naci" type="date" onpaste="return false" title="Fecha de Nacimiento" class="form-control input-sm" required value="<?=$fila[7]?>">
          </div>
        
      </div>
    </div><br>

  <div class="container">
      <div class="row">
          <div class="col-xs-2">
            <label for="edo_civil">Estado Civil</label>
            <select disabled name="edo_civil" class="form-control input-sm" id="edo_civil" title="Estado Civil" required>
             <option value="s" <?php if($fila['edo_civil']=="s") echo "selected";?>>Soltero(a)</option> 
             <option value="c" <?php if($fila['edo_civil']=="c") echo "selected";?>>Casado(a)</option> 
             <option value="d" <?php if($fila['edo_civil']=="d") echo "selected";?>>Divorciado(a)</option> 
             <option value="v" <?php if($fila['edo_civil']=="v") echo "selected";?>>Viudo(a)</option> 
            </select>
          </div>
          
          <div class="col-xs-2">
            <label for="lateralidad">Lateralidad</label>
            <select disabled name="lateralidad" class="form-control input-sm" id="lateralidad" title="Lateralidad" required>
              <option value="i" <?php if($fila['lateralidad']=="i") echo "selected";?>>Izquierd@</option>
              <option value="d" <?php if($fila['lateralidad']=="d") echo "selected";?>>Derech@</option>
              <option value="a" <?php if($fila['lateralidad']=="a") echo "selected";?>>Ambidiestr@</option>
            </select>
          </div>

          <div class="col-xs-2">
            <label for="pais de nacimiento">País de Nacimiento</label>
            <select disabled name="pais" id="pais" title="País de nacimiento" class="form-control input-sm" required>
                <?php while ( $conuntry = mysqli_fetch_assoc($countries) ): ?>
                    <option value="<?= $conuntry['id'] ?>"><?= $conuntry['paisnombre'] ?></option>
                <?php endwhile?>
              </select>
          </div>
          
          <div class="col-xs-2">
           <label for="estado">Estado de Nacimiento</label>
           <select disabled name="edo" id="estado" title="Estado de Nacimiento" class="form-control input-sm" required>
           <?php while ( $state = mysqli_fetch_assoc($states) ): ?>
            <option value="<?= $state['id'] ?>" <?= ($fila['edo'] == $state['id']) ? 'selected' : '' ?>><?= $state['estadonombre'] ?></option>
            <?php endwhile?>
           </select>
          </div>

          <div class="col-xs-2">
            <label for="area de atencion">Area de Atención</label>
            <input disabled  maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="area_aten" id="area_aten" title="area_aten" type="text" class="form-control input-sm" placeholder="Area de atención" title="Area de Atención" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required oninput="check_area_aten(this);" value="<?=$fila[12]?>">
          </div>

           <div class="col-xs-2">
            <label for="progra_apoy">Programa de Apoyo</label>
            <input disabled  maxlength="50" onkeypress="return sololetras(event)" onpaste="return false" name="progra_apoy" id="progra_apoy" type="text" class="form-control input-sm" placeholder="Programa de Apoyo" title="Programa de Apoyo" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required oninput="check_progra_apoy(this);" value="<?=$fila[13]?>">
          </div>
    </div>
    </div><br>

    <div class="container">
      <div class="row">
        
          <legend><b>Datos de Ubicación Domiliciaria</b></legend>
           <div class="col-xs-3">
            <label for="mun">Municipio</label>
            <select disabled name="muni" id="municipio" title="Municipio" class="form-control input-sm" required>
              <?php while ( $municipality = mysqli_fetch_assoc($municipalities) ): ?>
                  <option value="<?= $municipality['id'] ?>"><?= $municipality['nombre'] ?></option>
              <?php endwhile?>
            </select>
          </div>
          
          <div class="col-xs-2">
            <label for="parro">Parroquia</label>
            <select disabled name="parro" id="parroquia" title="Seleccione Parroquia" class="form-control input-sm" required>
            <option value="">Selseccione una Parroquia</option>
            <?php while ( $parish = mysqli_fetch_assoc($parishes) ): ?>
            <option value="<?= $parish['id'] ?>" <?= ($fila['parro'] == $parish['id']) ? 'selected' : '' ?>><?= $parish['nombre'] ?></option>
            <?php endwhile?>
            </select>
            </div>

          <div class="col-xs-2">
            <label for="pobla">Poblacion</label>
            <input disabled  maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="pobla" id="pobla" type="text" class="form-control input-sm" placeholder="Población" title="Población" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required  oninput="check_pobla(this);" value="<?=$fila[16]?>">
          </div>

          <div class="col-xs-3">
            <label for="urbani">Urbanización</label>
            <input disabled  maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="urbani" id="urbani" type="text" class="form-control input-sm" placeholder="Urbanización" title="Urbanización" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_urbani(this);" value="<?=$fila[17]?>">
          </div>

          <div class="col-xs-2">
            <label for="via">Tipo de Via</label>
            <input disabled  maxlength="30" onkeypress="return sololetras(event)" onpaste="return false" name="via" id="via" type="text" class="form-control input-sm" placeholder="Tipo de Via" title="Tipo de Vía" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_via(this);" value="<?=$fila[18]?>">
          </div>
      </div>

      </div><br>

      <div class="container">
        <div class="row">
          <div class="col-xs-8">
            <label for="direc">Dirección</label>
            <input disabled  maxlength="50" name="direc" id="direc" type="text" class="form-control input-sm" placeholder="Dirección" title="Dirección" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc(this);" value="<?=$fila[19]?>">
          </div>
      

            <div class="col-xs-2">
               <label for="zona">Zona Urbana</label>
               <select disabled name="zona" class="form-control input-sm" id="zona" title="Zona Urbana" required>
                  <option value="r" <?php if($fila['zona']=="r") echo "selected";?>>Rural</option>
                  <option value="u" <?php if($fila['zona']=="u") echo "selected";?>>Urbana</option>
               </select>
            </div>

            <div class="col-xs-2">
                <label for="tip_vivi">Tipo de vivienda</label>
                <select disabled name="tip_vivi" class="form-control input-sm" title="Tipo de vivienda" tip_vivi" required>
                 <option value="a" <?php if($fila['tip_vivi']=="a") echo "selected";?>>Apartamento</option>
                 <option value="c" <?php if($fila['tip_vivi']=="c") echo "selected";?>>Casa</option>
                 <option value="q" <?php if($fila['tip_vivi']=="q") echo "selected";?>>Quinta</option>
                 <option value="r" <?php if($fila['tip_vivi']=="r") echo "selected";?>>Rancho</option>
                 <option value="a" <?php if($fila['tip_vivi']=="a") echo "selected";?>>Anexo</option>
                 <option value="re" <?php if($fila['tip_vivi']=="re") echo "selected";?>>Refugio</option>
                </select>
            </div>
      </div>
      </div><br>

    <div class="container">
      <div class="row">
            <div class="col-xs-2">
               <label for="ubi_vivi">Ubicación de Vivienda</label>
               <select disabled name="ubi_vivi" class="form-control input-sm" id="ubi_vivi" title="Ubicación de Vivienda" required>
                  <option value="b" <?php if($fila['ubi_vivi']=="b") echo "selected";?>>Barrio</option>
                  <option value="c" <?php if($fila['ubi_vivi']=="c") echo "selected";?>>Caserio</option>
                  <option value="u" <?php if($fila['ubi_vivi']=="u") echo "selected";?>>Urbanización</option>
                  <option value="z" <?php if($fila['ubi_vivi']=="z") echo "selected";?>>Zona Residencial</option>
               </select>
            </div>

             <div class="col-xs-2">
               <label for="esta_infra">Estado Infraestructura</label>
               <select disabled name="esta_infra" class="form-control input-sm" id="esta_infra" title="Estado Infraestructura" required>
                  <option value="e" <?php if($fila['esta_infra']=="e") echo "selected";?>>Exelente</option>
                  <option value="b" <?php if($fila['esta_infra']=="b") echo "selected";?>>Buena</option>
                  <option value="r" <?php if($fila['esta_infra']=="r") echo "selected";?>>Regular</option>
                  <option value="d" <?php if($fila['esta_infra']=="d") echo "selected";?>>Deteriorada</option>
               </select>
            </div>

            <div class="col-xs-2">
                <label for="cond_vivi">Condicion de Vivienda</label>
                <select disabled name="cond_vivi" class="form-control input-sm" id="cond_vivi" title="Condicion de Vivienda"  required>
                 <option value="a" <?php if($fila['cond_vivi']=="a") echo "selected";?>>Alquilado</option>
                 <option value="p" <?php if($fila['cond_vivi']=="p") echo "selected";?>>Propia</option>
                 <option value="c" <?php if($fila['cond_vivi']=="c") echo "selected";?>>Cedida</option>
                 <option value="i" <?php if($fila['cond_vivi']=="i") echo "selected";?>>Invasión</option>
                 <option value="pr" <?php if($fila['cond_vivi']=="pr") echo "selected";?>>Prestado</option>
                 <option value="r" <?php if($fila['cond_vivi']=="r") echo "selected";?>>Refugio</option>
                </select>
            </div>

            <div class="col-xs-1">
               <label for="canaima">Canaima</label>
               <select disabled name="canaima" class="form-control input-sm" id="canaima" title=">Canaima" required>
                  <option value="s" <?php if($fila['canaima']=="s") echo "selected";?>>Si</option>
                  <option value="n" <?php if($fila['canaima']=="n") echo "selected";?>>No</option>
               </select>
            </div>

            <div class="col-xs-2">
            <label for="ser_canaima">Serial Canaima</label>
            <input disabled name="ser_canaima" onkeypress="return solonumeros(event)" onpaste="return false" id="ser_canaima" type="text" class="form-control input-sm" placeholder="00" title="Serial Canaima"  pattern=[0-9.]* required oninput="" value="<?=$fila[26]?>">
          </div>

            <div class="col-xs-1">
               <label for="beca">Beca</label>
               <select disabled name="beca" class="form-control input-sm" id="beca" title="Beca" required>
                  <option value="s" <?php if($fila['beca']=="s") echo "selected";?>>Si</option>
                  <option value="n" <?php if($fila['beca']=="n") echo "selected";?>>No</option>
               </select>
            </div>

            <div class="col-xs-2">
            <label for="ingre_fami">Ingreso Familiar</label>
            <input disabled name="ingre_fami" onkeypress="return solonumeros(event)" onpaste="return false" id="ingre_fami" type="text" class="form-control input-sm" placeholder="Ingreso Familiar" title="Ingreso Familiar" pattern="[0-9.]*" required oninput="check_ingre_fami(this);" value="<?=$fila[28]?>">
          </div>

          

      </div>
      </div><br>
    
    <div class="container">
      <div class="row">

            
          <div class="col-xs-2">
            <label for="tele_mov">Telefono Movil</label>
            <input disabled name="tele_mov" maxlength="11" onkeypress="return solonumeros(event)" onpaste="return false" id="tele_mov" type="text" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);" value="<?=$fila[29]?>">
          </div>

          <div class="col-xs-2">
            <label for="tele_hab">Telefono Habitación</label>
            <input disabled name="tele_hab" maxlength="11" onkeypress="return solonumeros(event)" onpaste="return false" id="tele_hab" type="text" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);" value="<?=$fila[30]?>">
          </div>

          <div class="col-xs-2">
            <label for="email">Email</label>
            <input disabled name="email" maxlength="30" id="email" type="email" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);" value="<?=$fila[31]?>">
          </div>

          <div class="col-xs-1">
            <label for="estatura">Estatura</label>
            <input disabled name="estatura" onkeypress="return solonumeros(event)" onpaste="return false" id="estatura" type="text" class="form-control input-sm" placeholder="0.00" title="Estatura"  pattern=[0-9.]* required oninput="check_estatura(this);" value="<?=$fila[32]?>">
          </div>

          <div class="col-xs-1">
            <label for="peso">Peso</label>
            <input disabled name="peso" onkeypress="return solonumeros(event)" onpaste="return false" id="peso" type="text" class="form-control input-sm" placeholder="00" title="Peso"  pattern=[0-9.]* required oninput="check_peso(this);" value="<?=$fila[33]?>">
          </div>

          <div class="col-xs-2">
            <label for="tallas de camisa">Tallas Camisa</label>
            <select disabled name="talla_cami" class="form-control input-sm" id="talla_cami" title="Tallas Camisa" required>
              <option value="10"<?php if($fila['talla_cami']=="10") echo "selected";?>>10</option>
              <option value="12"<?php if($fila['talla_cami']=="12") echo "selected";?>>12</option>
              <option value="14"<?php if($fila['talla_cami']=="14") echo "selected";?>>14</option>
              <option value="16"<?php if($fila['talla_cami']=="16") echo "selected";?>>16</option>
              <option value="18"<?php if($fila['talla_cami']=="18") echo "selected";?>>18</option>
              <option value="ss"<?php if($fila['talla_cami']=="ss") echo "selected";?>>SS</option>
              <option value="s"<?php if($fila['talla_cami']=="s") echo "selected";?>>S</option>
              <option value="m"<?php if($fila['talla_cami']=="m") echo "selected";?>>M</option>
              <option value="l"<?php if($fila['talla_cami']=="l") echo "selected";?>>L</option>
              <option value="xl"<?php if($fila['talla_cami']=="xl") echo "selected";?>>XL</option>
              <option value="xxl"<?php if($fila['talla_cami']=="xxl") echo "selected";?>>XXL</option>
            </select>
          </div>

           <div class="col-xs-2">
              <label for="talla pantalon">Talla Pantalon</label>
              <select disabled name="talla_pant" class="form-control input-sm" id="talla_pant" title="Tallas Pantalon" required>
               <option value="14"<?php if($fila['talla_pant']=="14") echo "selected";?>>14</option>
               <option value="16"<?php if($fila['talla_pant']=="16") echo "selected";?>>16</option>
               <option value="26"<?php if($fila['talla_pant']=="26") echo "selected";?>>26</option>
               <option value="28"<?php if($fila['talla_pant']=="28") echo "selected";?>>28</option>
               <option value="30"<?php if($fila['talla_pant']=="30") echo "selected";?>>30</option>
               <option value="32"<?php if($fila['talla_pant']=="32") echo "selected";?>>32</option>
               <option value="34"<?php if($fila['talla_pant']=="34") echo "selected";?>>34</option>
               <option value="36"<?php if($fila['talla_pant']=="36") echo "selected";?>>36</option>
               <option value="38"<?php if($fila['talla_pant']=="38") echo "selected";?>>38</option>
               <option value="40"<?php if($fila['talla_pant']=="40") echo "selected";?>>40</option>
               <option value="42"<?php if($fila['talla_pant']=="42") echo "selected";?>>42</option>
            </select>
          </div>
      </div>



    
    <input type="hidden" name="cedula" value="<?=$fila['ced_e']?>">

   </div> <br>

   <div class="container">
      <div class="row">

      <div class="col-xs-2">
            <label for="talla zapato">Talla Zapato</label>
            <select disabled name="talla_zapa" class="form-control input-sm" id="talla_zapa" title="Talla Zapato" required>
              <option value="35"<?php if($fila['talla_zapa']=="35") echo "selected";?>>35</option>
              <option value="36"<?php if($fila['talla_zapa']=="36") echo "selected";?>>36</option>
              <option value="37"<?php if($fila['talla_zapa']=="37") echo "selected";?>>37</option>
              <option value="38"<?php if($fila['talla_zapa']=="38") echo "selected";?>>38</option>
              <option value="39"<?php if($fila['talla_zapa']=="39") echo "selected";?>>39</option>
              <option value="40"<?php if($fila['talla_zapa']=="40") echo "selected";?>>40</option>
              <option value="41"<?php if($fila['talla_zapa']=="41") echo "selected";?>>41</option>
              <option value="42"<?php if($fila['talla_zapa']=="42") echo "selected";?>>42</option>
              <option value="43"<?php if($fila['talla_zapa']=="43") echo "selected";?>>43</option>
              <option value="44"<?php if($fila['talla_zapa']=="44") echo "selected";?>>44</option>
              <option value="45"<?php if($fila['talla_zapa']=="45") echo "selected";?>>45</option>
            </select>

          </div>
        </div>
      </div> <br>

            <input type="hidden" name="cedula" value="<?=$fila['ced_e']?>" />
            <div class="container">
            <div class="row">
                <div class="col-xs-5">
                    <button type="submit" title="Eliminar Representante" class="btn btn-primary"><b>Eliminar Estudiante</b></button>

                    <a href="administrador.php"><button type="button" title="Deshacer Cambios" class="btn btn-danger">Salir</button></a>
                </div>
            </div>
            </div>
</form>
 <?php
}
?>