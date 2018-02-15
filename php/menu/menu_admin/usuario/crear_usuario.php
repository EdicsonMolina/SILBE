<legend><h3 class="text-center"><b>CREAR USUARIO</b></h3></legend>
<form action="administrador.php?p=usuario/registrar_usuario" autocomplete="off"  method="POST" >

	<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Usuario</label>
            <input type="text" class="form-control input-sm" title="Usuario" pattern="[a-z]{5,10}$" name="username" maxlength="10" required>
          </div>
        </div>
    </div>

	<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Password</label>
            <input type="password" name="password" class="form-control input-sm"  title="Password" pattern="[a-z0-9]{10}$" maxlength="10" required>
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
            <input type="text" name="nombre" class="form-control input-sm" title="Nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]{5,30}\s?)*" maxlength="30" required>
          </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Nivel de Usuario</label>
             <select name="nivel" class="form-control input-sm" id="nivel" title="Nivel" required>
            <option value="" selected>--Seleccionar--</option>
            <option value="1">Administrador</option>
            <option value="2">Usuario Basico</option>
    </select>
        </div>
    </div>






    <br>

	<div class="container">
      <div class="row">
          <div class="col-xs-5">
		
<button type="submit" title="Registrar Usuario" class="btn btn-primary">Registrar Usuario</button>
<button type="reset" title="Eliminar Usuario" class="btn btn-danger">Borrar Campos</button>

	   	  </div>
      </div>
	</div>
 

</form>
