<legend><h3 class="text-center"><b>ELIMINAR USUARIO</b></h3></legend>
<form action="administrador.php?p=usuario/eliminar_usuario_a" autocomplete="off"  method="POST" >

	<div class="container">
      <div class="row">
           <div class="col-xs-2">
            <label for="nombre">Usuario</label>
            <input type="text" class="form-control input-sm" title="Usuario" pattern="[a-z]{5,10}$" name="username" maxlength="10" required>
          </div>
        </div>
    </div>
  <br>
	<div class="container">
      <div class="row">
          <div class="col-xs-5">
		<button type="submit" title="Buscar Usuario" class="btn btn-primary">Buscar Usuario</button>
	   	  </div>
      </div>
	</div>
 

</form>