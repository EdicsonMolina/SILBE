<legend><h3 class="text-center"><b>ELIMINAR ESTUDIANTE</b></h3></legend> 
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-4">        
      <form class="navbar-form navbar-left" role="search" name="formulario" method="POST" action="administrador.php?p=estudiante/eliminar_e_b">
        <div class="form-group">
            <input type="text" name="cedula" maxlength="8" autocomplete="off" onkeypress="return solonumeros(event)" onpaste="return false" class="form-control" placeholder="Introduzca N° de documento" pattern="[0-9]{7,8}\s?" title="Introduzca N° de documento" required oninput="check_buscar(this);">
          </div>
            <button type="submit" title="Buscar Estudiante" class="btn btn-default">Buscar</button>
      </form>
  </div>
</div>
</div>
