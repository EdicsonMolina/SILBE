<form action="consultar_a_b.php" method="POST" >

		<div class="container">
			<div class="row">
        <fieldset>
          <h1>Consultar datos del año escolar</h1>
          <hr>
          </div>
          <br>

          <div class="row">
          <div class="col-md-2"><label>Codigo del Año <input   type="radio" value="id_a" checked="checked" name="busqueda"></label></div>
          <div class="col-md-2"><label>Año Escolar <input   type="radio" value="a"  name="busqueda"></label></div>
          </div>
          <br>

          <div class="row">
          <div class="col-xs-3">
          <input name="palabra" type="text" class="form-control input-sm" autocomplete="off" placeholder="Busqueda" required>
          </div>
           </div>

          <br>
          <br>
          <div class="container">
          <div class="row">
          <div class="col-md-1"><button type="submit" name="buscador" value="buscar" class="btn btn-primary"><b>Buscar</b></button></div>
          <div class="col-md-1"><button type="reset" class="btn btn-danger"><b>Borrar Campos</b></button></div>
          </div>
          </div>
      </div>
      </fieldset>
          
</form>


