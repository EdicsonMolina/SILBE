<?php
session_start();

if(isset($_SESSION['nombre']) && $_SESSION['nivel']==2){
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>SISTEMA DE INSCRIPCION</title>
    <link rel="shortcut icon" href="../../plugins/imagenes/favicon.jpg" />
    <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
    <script src="../../../plugins/js/jquery-3.1.1.js"></script>
    <script src="../../../plugins/bootstrap/js/bootstrap.min.js"></script>
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
              <li class="active"><a href="../../index.php">Inicio<span class="sr-only"></span></a></li>
            </ul>
           


            <ul class="nav navbar-nav navbar-right">
          
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Representantes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Consultar Representante</a></li>
                  </ul>
                </li>


                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Consultar Estudiante</a></li>
                  </ul>
                </li>

                
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar Secciones<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Septimo Año</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Octavo Año</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Noveno Año</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Cuarto Año</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">Quinto Año</a></li>
                  </ul>
                </li>

                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Docente<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Consultar Personal Docente</a></li>
                  </ul>
                </li>


               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Administrativo<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Consultar Personal Administrativo</a></li>
                  </ul>
                </li>

                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Obrero<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Consultar Personal Obrero</a></li>
                  </ul>
                </li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre']?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Manual</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../../../php/autenticar/logout.php">Cerrar Sesión</a></li>
                </ul>
              </li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <script>

      var timeoutID;
       
      function setup() {
          this.addEventListener("mousemove", resetTimer, false);
          this.addEventListener("mousedown", resetTimer, false);
          this.addEventListener("keypress", resetTimer, false);
          this.addEventListener("DOMMouseScroll", resetTimer, false);
          this.addEventListener("mousewheel", resetTimer, false);
          this.addEventListener("touchmove", resetTimer, false);
          this.addEventListener("MSPointerMove", resetTimer, false);
       
          startTimer();
      }

      setup();
       
      function startTimer() {
          
          timeoutID = window.setTimeout(goInactive, 60000); 
      }
       
      function resetTimer(e) {
          window.clearTimeout(timeoutID);
       
          goActive();
      }
       
      function goInactive() {
          window.location = "../autenticar/logout.php";

      }
       
      function goActive() {
                 
          startTimer(); //
      }

      </script>

      
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
