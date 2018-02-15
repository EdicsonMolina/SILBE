<?php 
extract($_POST);

require_once('../../../conexion/conexion.php');

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=representante/eliminar_r_a';
</script>
<?php
} 


$sql = "SELECT * FROM representante WHERE ced_r='$cedula'";
$consulta = mysqli_query($conexion, $sql);

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
    window.location='administrador.php?p=representante/eliminar_r_a';
</script>
<?php
} 
else {
	?>

<legend><h3 class="text-center"><b>ELIMINAR REPRESENTANTE</b></h3></legend>
<form action="administrador.php?p=representante/eliminar_r_c"  method="POST" >

		<div class="container">
            <div class="row">
                <fieldset>
                    <legend><b>Datos del Representante</b></legend>
                    <div class="col-xs-2">
                        <label for="tipo_doc">Tipo de documento</label>
                        <select disabled name="tipo_doc" class="form-control input-sm" id="tipo_doc" title="Tipo de documento" required>
                            <option value="v" <?php if($fila['tipo_doc']=="v") echo "selected";?>>Cédula Venezolana</option> 
                            <option value="e" <?php if($fila['tipo_doc']=="e") echo "selected";?>>Cédula Extranjera</option> 
                            <option value="p" <?php if($fila['tipo_doc']=="p") echo "selected";?>>Pasaporte</option>
                        </select>
                    </div>

                    <div class="col-xs-2">
                        <label for="ced_r">Cédula</label>
                        <input disabled name="ced_r" id="ced_r" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="8" type="text" class="form-control input-sm" placeholder="N° de documento" title="N° de documento" pattern="[0-9]{7,8}$" required oninput="check_ced_r(this);" value="<?=$fila[0]?>">
                    </div>

                    <div class="col-xs-3">
                        <label for="nombre">Nombre</label>
                        <input disabled  onkeypress="return sololetras(event)" onpaste="return false"  maxlength="50" name="nombre" id="nombre" type="text" class="form-control input-sm" placeholder="Nombre" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_nombre(this);" value="<?=$fila[2]?>">
                    </div>

                    <div class="col-xs-3">
                        <label for="apellido">Apellido</label>
                        <input disabled  onkeypress="return sololetras(event)" onpaste="return false" maxlength="50" name="apellido" id="apellido" type="text" class="form-control input-sm" placeholder="Apellido" title="Apellido" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{2,15}\s?)*"  required oninput="check_apellido(this);" value="<?=$fila[3]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="sexo">Género</label>
                        <select disabled name="sexo" class="form-control input-sm" id="sexo" title="Seleccione Género" required>          
                            <option value="m" <?php if($fila['sexo']=="m") echo "selected";?>>Masculino</option> 
                            <option value="f" <?php if($fila['sexo']=="f") echo "selected";?>>Femenino</option> 
                        </select>
                    </div>

                </div>
            </div><br>

            <div class="container">
                <div class="row">


                <div class="col-xs-2">
                      <label for="fecha de nacimiento">Fecha de Nacimiento</label>
                      <input disabled name="f_naci" id="f_naci" type="date" title="Fecha de Nacimiento" class="form-control input-sm"  required value="<?=$fila[5]?>">
                </div>


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
                        <label for="afinidad">Afinidad</label>
                        <select disabled name="afinidad" class="form-control input-sm" id="afinidad" title="Afinidad" required>

                            <option value="p" <?php if($fila['afinidad']=="p") echo "selected";?>>Padre</option> 
                            <option value="m" <?php if($fila['afinidad']=="m") echo "selected";?>>Madre</option> 
                            <option value="a" <?php if($fila['afinidad']=="a") echo "selected";?>>Abuelo(a)</option> 
                            <option value="o" <?php if($fila['afinidad']=="o") echo "selected";?>>Otros</option> 
                        </select>
                    </div>


                    <div class="col-xs-2">
                        <label for="pais">País</label>
                        <select disabled name="pais" id="pais" title="Pais" class="form-control input-sm" required>
                            <option value="">Selseccione un País</option>
                            <?php while ( $conuntry = mysqli_fetch_assoc($countries) ): ?>
                                <option value="<?= $conuntry['id'] ?>" <?= ($fila['pais'] == $conuntry['id']) ? 'selected' : '' ?>><?= $conuntry['paisnombre'] ?></option>
                            <?php endwhile?>
                        </select>
                    </div>

                    <div class="col-xs-3">
                        <label for="estado">Estado</label>
                        <select disabled name="edo" id="estado" title="Estado" class="form-control input-sm" required>
                            <option value="">Selseccione un Estado</option>
                            <?php while ( $state = mysqli_fetch_assoc($states) ): ?>
                                <option value="<?= $state['id'] ?>" <?= ($fila['edo'] == $state['id']) ? 'selected' : '' ?>><?= $state['estadonombre'] ?></option>
                            <?php endwhile?>
                        </select>
                    </div>

                </div><br>
            </fieldset>

            <div class="row">
                <fieldset>
                    <legend><b>Datos de Ubicación Domiliciaria</b></legend>

                    <div class="col-xs-2">
                        <label for="mun">Municipio</label>
                        <select disabled name="muni" id="municipio" title="Seleccione Municipio" class="form-control input-sm" required>
                            <option value="">Selseccione un Municipio</option>
                            <?php while ( $municipality = mysqli_fetch_assoc($municipalities) ): ?>
                                <option value="<?= $municipality['id'] ?>" <?= ($fila['muni'] == $municipality['id']) ? 'selected' : '' ?>><?= $municipality['nombre'] ?></option>
                            <?php endwhile?>
                        </select>
                    </div>

                    <div class="col-xs-3">
                        <label for="parro">Parroquia</label>
                        <select disabled name="parro" id="parroquia" title="Seleccione Parroquia" class="form-control input-sm" required>
                            <option value="">Selseccione una Parroquia</option>
                            <?php while ( $parish = mysqli_fetch_assoc($parishes) ): ?>
                                <option value="<?= $parish['id_parroquia'] ?>" <?= ($fila['parro'] == $parish['id_parroquia']) ? 'selected' : '' ?>><?= $parish['nombre'] ?></option>
                            <?php endwhile?>
                        </select>
                    </div>

                    <div class="col-xs-2">
                        <label for="pobla">Poblacion</label>
                        <input disabled onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="pobla" id="pobla" type="text" class="form-control input-sm" placeholder="Población" title="Población" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#-]\s?)*" required  oninput="check_pobla(this);" value="<?=$fila[12]?>">
                    </div>

                    <div class="col-xs-3">
                        <label for="urbani">Urbanización</label>
                        <input disabled onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="urbani" id="urbani" type="text" class="form-control input-sm" placeholder="Urbanización" title="Urbanización" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_urbani(this);" value="<?=$fila[13]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="via">Tipo de Via</label>
                        <input disabled onkeypress="return sololetras(event)" onpaste="return false" maxlength="30" name="via" id="via" type="text" class="form-control input-sm" placeholder="Tipo de Via" title="Tipo de Vía" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_via(this);" value="<?=$fila[14]?>">
                    </div>
                </div><br>


                <div class="row">
                    <div class="col-xs-8">
                        <label for="direc">Dirección</label>
                        <input disabled maxlength="100" name="direc" id="direc" type="text" class="form-control input-sm" placeholder="Dirección" title="Dirección" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc(this);" value="<?=$fila[15]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="tele_mov">Teléfono Movil</label>
                        <input disabled name="tele_mov" id="tele_mov" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="04240000000" title="Teléfono Movil"  pattern="[0-9]{11}$" required oninput="check_tele_mov(this);" value="<?=$fila[16]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="tele_hab">Teléfono Habitación</label>
                        <input disabled name="tele_hab" id="tele_hab" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="02740000000" title="Teléfono Habitación"  pattern="[0-9]{11}$"  required oninput="check_tele_hab(this);" value="<?=$fila[17]?>">
                    </div>
                </div><br>

                <div class="row">

                    <div class="col-xs-4">
                        <label for="direc_trab">Dirección laboral</label>
                        <input disabled  maxlength="50"  name="direc_trab" id="direc_trab" type="text" class="form-control input-sm" placeholder="Dirección Laboral" title="Dirección Laboral" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_direc_trab(this);" value="<?=$fila[20]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="tele_trab">Telefono de Trabajo</label>
                        <input disabled name="tele_trab" id="tele_trab" onkeypress="return solonumeros(event)" onpaste="return false" maxlength="11" type="text" class="form-control input-sm" placeholder="02740000000"  title="Teléfono de Trabajo"  pattern="[0-9]{11}$" required oninput="check_tele_trab(this);" value="<?=$fila[18]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="email">Email</label>
                        <input disabled name="email" id="email" type="email" maxlength="40" class="form-control input-sm" placeholder="email@email.com" title="Email" pattern="([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})*" required oninput="check_email(this);" value="<?=$fila[19]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="nombre_empre">Nombre de la Empresa</label>
                        <input disabled name="nombre_empre" id="nombre_empre" onkeypress="return sololetras(event)" onpaste="return false" type="text" maxlength="50" class="form-control input-sm" placeholder="Nombre de la Empresa" title="Nombre de la Empresa" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_nombre_empre(this);" value="<?=$fila[21]?>">
                    </div>

                    <div class="col-xs-2">
                        <label for="profesion">Profesión</label>
                        <input disabled name="profesion" id="profesion" onkeypress="return sololetras(event)" onpaste="return false" maxlength="50" type="text" maxlength="30" class="form-control input-sm" placeholder="Profesión" title="Profesión" pattern="([0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#]\s?)*" required oninput="check_profesion(this);" value="<?=$fila[22]?>">
                    </div>
                </div>
            </fieldset> <br>

            <input type="hidden" name="cedula" value="<?=$fila['ced_r']?>" />
            <div class="container">
            <div class="row">
                <div class="col-xs-5">
                <button type="submit" title="Eliminar Representante" class="btn btn-primary"><b>Eliminar Representante</b></button>
                <a href="administrador.php"><button type="button" title="Deshacer Cambios" class="btn btn-danger">Salir</button></a>
                </div>
            </div>
            </div>    
        </form>

        <?php
    }
    ?>