<?php
session_start();
if(!isset($_SESSION['nombre']) && !isset($_SESSION['nivel'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>SISTEMA DE INSCRIPCION</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="/plugins/imagenes/favicon.jpg" />
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/menu/login/css/login.css">
    <script type="text/javascript" src="plugins/java_script/validaciones/validaciones.js"></script> 

</head>
<body>

  <div class="cintillo"></div>
        
     <div class="titulo"></div>   
            
       
       
        
              <div class="container">
              
                    <div class="card card-container">
                        <img id="profile-img" class="profile-img-card" src="plugins/imagenes/logo.jpg" />
                        <p id="profile-name" class="profile-name-card"></p>

                        <form class="form-signin" action="php/autenticar/autenticar.php" method="POST" autocomplete="off">
                            <span id="reauth-email" class="reauth-email"></span>

                            <input type="text" onkeypress="return sololetras(event)" onpaste="return false" maxlength="10"  class="form-control" placeholder="Usuario" title="Usuario" required autofocus name="usuario" pattern="[a-z]{5,10}$" required">

                        <input type="password" maxlength="10" class="form-control" placeholder="Contraseña" required name="password" pattern="[a-z0-9]{5-10}$" title="Contraseña" required >
                           
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>


<footer class="footer">
    <div class="container"></div>
      <p class="text-center">Grupo de Proyecto copyright ©</p>
  </footer>

</body>
</html>

<?php
 } else
    @include('php/autenticar/logout.php');
      
?>
