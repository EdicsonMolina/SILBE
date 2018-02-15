<?php
session_start();

if(isset($_SESSION['nombre']) && $_SESSION['nivel']==1){

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>SISTEMA DE INSCRIPCION SILBE</title>
    <link rel="shortcut icon" href="../../../plugins/imagenes/favicon.jpg" />
    <link rel="stylesheet" href="../../../plugins/bootstrap/css/bootstrap.min.css">
    <script src="../../../plugins/java_script/jquery-3.2.1.js"></script>
    <script src="../../../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../plugins/java_script/validaciones/validaciones.js"></script>



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
              <li class="active"><a href="administrador.php">Inicio<span class="sr-only"></span></a></li>
            </ul>
           


            <ul class="nav navbar-nav navbar-right">
          
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Representantes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php echo $pagina == 'registrar_r_a' ? 'active' : ''; ?>"><a href="?p=representante/registrar_r_a">Registrar Representante</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'modificar_r_a' ? 'active' : ''; ?>"><a href="?p=representante/modificar_r_a">Modificar Representante</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'eliminar_r_a' ? 'active' : ''; ?>"><a href="?p=representante/eliminar_r_a">Eliminar Representante</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_r_a' ? 'active' : ''; ?>"><a href="?p=representante/consultar_r_a">Consultar Representante</a></li>

                  </ul>
                </li>


                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php echo $pagina == 'registrar_e_a' ? 'active' : ''; ?>"><a href="?p=estudiante/registrar_e_a">Registrar Estudiante</a></li>
                     <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'modificar_e_a' ? 'active' : ''; ?>"><a href="?p=estudiante/modificar_e_a">Modificar Estudiante</a></li>
                     <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'eliminar_e_a' ? 'active' : ''; ?>"><a href="?p=estudiante/eliminar_e_a">Eliminar Estudiante</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_e_a' ? 'active' : ''; ?>"><a href="?p=estudiante/consultar_e_a">Consultar Estudiante</a></li>
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
                    <li class="<?php echo $pagina == 'registrar_d_a' ? 'active' : ''; ?>"><a href="?p=docente/registrar_d_a">Registrar Personal Docente</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'modificar_d_a' ? 'active' : ''; ?>"><a href="?p=docente/modificar_d_a">Modificar Personal Docente</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'eliminar_d_a' ? 'active' : ''; ?>"><a href="?p=docente/eliminar_d_a">Eliminar Personal Docente</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_d_a' ? 'active' : ''; ?>"><a href="?p=docente/consultar_d_a">Consultar Personal Docente</a></li>
                  </ul>
                </li>

               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Administrativo<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php echo $pagina == 'registrar_a_a' ? 'active' : ''; ?>"><a href="?p=administrativo/registrar_a_a">Registar Personal Administrativo</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'modificar_a_a' ? 'active' : ''; ?>"><a href="?p=administrativo/modificar_a_a">Modificar Personal Administrativo</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'eliminar_a_a' ? 'active' : ''; ?>"><a href="?p=administrativo/eliminar_a_a">Eliminar Personal Administrativo</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_a_a' ? 'active' : ''; ?>"><a href="?p=administrativo/consultar_a_a">Consultar Personal Administrativo</a></li>
                  </ul>
                </li>

                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal Mantenimiento<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php echo $pagina == 'registrar_m_a' ? 'active' : ''; ?>"><a href="?p=mantenimiento/registrar_m_a">Registar Personal Mantenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'modificar_m_a' ? 'active' : ''; ?>"><a href="?p=mantenimiento/modificar_m_a">Modificar Personal Mantenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'eliminar_m_a' ? 'active' : ''; ?>"><a href="?p=mantenimiento/eliminar_m_a">Eliminar Personal Mantenimiento</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php echo $pagina == 'consultar_m_a' ? 'active' : ''; ?>"><a href="?p=mantenimiento/consultar_m_a">Consultar Personal Mantenimiento</a></li>
                  </ul>
                </li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nom_user']?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin_inscripcion/admin_inscripcion.php">Configurar Inscripcion</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../../../manual/manual.pdf" target="_blank">Manual</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="<?php echo $pagina == 'config_usu' ? 'active' : ''; ?>"><a href="?p=usuario/config_usu">Usuarios</a></li>
                  <li role="separator" class="divider"></li>
                   <li class="<?php echo $pagina == 'config_bd' ? 'active' : ''; ?>"><a href="?p=base_de_datos/config_bd">Base de Datos</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../../../php/autenticar/logout.php">Cerrar Sesión</a></li>
                </ul>
              </li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<script>

      /*var timeoutID;
       
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
          
          timeoutID = window.setTimeout(goInactive, 6000); 
      }
       
      function resetTimer(e) {
          window.clearTimeout(timeoutID);
       
          goActive();
      }
       
      function goInactive() {
          window.location = "../../autenticar/logout.php";

      }
       
      function goActive() {
                 
          startTimer(); //
      }

      */

</script>
  

</body>
</html>

<?php
 } else {
    echo '<script language = javascript>
  alert("Debe iniciar Sesion")
  self.location = "../../../index.php"
  </script>';
    
   } 
?>
