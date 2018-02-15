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
    <script src="../../../../plugins/js/jquery-3.1.1.js"></script>
    <script src="../../../../plugins/bootstrap/js/bootstrap.min.js"></script>



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
              <li class="active"><a href="../administrador.php">Menu Principal<span class="sr-only"></span></a></li>
            </ul>
           


            <ul class="nav navbar-nav navbar-right">
          
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Año Escolar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php echo $pagina == 'registrar_a_a' ? 'active' : ''; ?>"><a href="?p=registrar_a_a">Registrar Año Escolar</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Modificar Año Escolar</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Eliminar Año Escolar</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_a_a' ? 'active' : ''; ?>"><a href="?p=consultar_a_a">Consultar Año Escolar</a></li>

                  </ul>
                </li>


                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grado<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Registrar Grado</a></li>
                     <li role="separator" class="divider"></li>
                    <li><a href="">Modificar Grado</a></li>
                     <li role="separator" class="divider"></li>
                    <li><a href="">Eliminar Grado</a></li>
                     <li role="separator" class="divider"></li>
                    <li><a href="">Consultar Grado</a></li>
                  </ul>
                </li>

                
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seccion<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Registrar Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Modificar Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Eliminar Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Consultar Seccion</a></li>
                  </ul>
                </li>

                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grado-Seccion<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Registrar Grado y Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Modificar Grado y Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Eliminar Grado y Seccion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Consultar Grado y Seccion</a></li>
                  </ul>
                </li>
     

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre']?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Configurar Inscripcion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Manual</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../../../../php/autenticar/logout.php">Cerrar Sesión</a></li>
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
  self.location = "../../../../index.php"
  </script>';
    
   } 
?>
