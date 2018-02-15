<?php
session_start();

if(isset($_SESSION['nombre']) && $_SESSION['nivel']==1){

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>SISTEMA DE INSCRIPCION</title>
    <link rel="shortcut icon" href="../../../../plugins/imagenes/favicon.jpg" />
    <link rel="stylesheet" href="../../../../plugins/bootstrap/css/bootstrap.min.css">
    <script src="../../../../../plugins/js/jquery-3.1.1.js"></script>
    <script src="../../../../../plugins/bootstrap/js/bootstrap.min.js"></script>



</head>
<body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SISTEMA SILBE</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           


            <ul class="nav navbar-nav">
              <li class="active"><a href="admin_inscripcion.php">Menu Inscripcion<span class="sr-only"></span></a></li>
            </ul>
           


            <ul class="nav navbar-nav navbar-right">
          

     

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre']?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin_inscripcion.php">Configurar Inscripcion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Manual</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../../../php/autenticar/logout.php">Cerrar Sesión</a></li>
                </ul>
              </li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>




</body>
</html>




<?php
 } else {
    echo '<script language = javascript>
  alert("Debe iniciar Sesion")
  self.location = "../../index.php"
  </script>';
    
   } 
?>


	<div class="container">
		<div class="row">
        <fieldset>
        <h1>Datos del año escolar</h1>
        </div>
        </div> 
        <br> 



<?php
extract($_POST);

require_once('../../../../conexion/conexion.php');

				
		if ($_POST['buscador'])
		{
			
		$buscar=$_POST['palabra'];
			
			if (empty($buscar))
			{
				echo "No se a ingresado una busqueda";}
			else
			{
			
			$sql="SELECT * FROM a_escolar WHERE $busqueda LIKE '%$buscar%'";
		    $resultado=mysqli_query($conexion, $sql) or die ("Error al realizar la consulta en la base de datos");
		 	
			$total=mysqli_num_rows($resultado);	
			
			if($row=mysqli_fetch_array($resultado)){


			echo  "<BR><table class=table > 
   			<tr><th>Codigo del año<th>Año</tr>";
			
			do{
			?>
            
             <tr>
                <td><?= $row[0]?></td>
				<td><?= $row[1]?></td>  					
		   	 </tr>
			<?php
			 echo "</table>";
			}
			
		   	while($row=mysqli_fetch_array($resultado)); 
			}
			else
			{
			echo "No se encontraron resultados para :$buscar";
			}
			}
		    }

			?>
			<div class="container">
			
			<div class="col-md-1"><button onclick="history.back()" class="btn btn-danger"><b>Atras</b></button></div>
			</div>
    </table>
  </div>
