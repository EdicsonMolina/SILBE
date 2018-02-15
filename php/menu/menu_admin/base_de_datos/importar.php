
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Restaurar Base de datos</title>
  </head>
  <body bgcolor="aqua">
        <h3 align="center">
          Restaurar Base de datos
        </h3>
        <hr>
        <?php 
            $usuario='root';
            $passwd='root';
            $bd='sistema';

        if (isset($_POST['enviar'])) {
echo "0";
          ////// inicio de cargar archivo
          if ($_FILES['archivo']['name']) {
echo "1";
                if ($_FILES['archivo']['type']) {    
                  $destino='C:\xampp\htdocs\sistema_silbe\php\menu\menu_admin\base_de_datos\sistema.sql';
echo "2";
                  if (is_uploaded_file($_FILES['archivo']['tmp_name'])) { 
echo "3";
                    if (copy($_FILES['archivo']['tmp_name'], $destino)) {
                $subio = true;
echo "3,5";
              }
                  } 
                } else {
                  echo '<SCRIPT> alert ("El Archivo no pudo ser Subido"); </SCRIPT>';
              $subio = false; 
              }
            } else {
                echo '<SCRIPT> alert ("El Archivo no pudo ser Subido"); </SCRIPT>';
                $subio = false; 
            }
          // fin de cargar archivo
          ////// Inicio de la instalación de base de datos
          if ($subio == true) {
echo "4";
            $enlace = mysqli_connect("localhost", $usuario, $passwd);
            mysqli_query($enlace, "drop database ".$bd); 

            if (!mysqli_query($enlace, "create database ".$bd)) {
              echo '<script> alert ("La Base de Datos No pudo ser creada"); </script>';
              $mensaje_inicial='La Instalaci&oacute;n ya fue efectuada con anterioridad.<br>Contacte al Administrador del Sistema';
            } else {
echo "5";            
                $archivo = "sistema.sql";
                "C:\\xampp\\mysql\\bin\\mysqldump -u $usuario --password=$passwd --opt $bd < $archivo"; 
                $ejecuta = "mysql --user='$usuario' --password=$passwd $bd < $archivo"; 
                $mostrar=system($ejecuta, $resultado); 
echo $mostrar."qwerty";

                if ($resultado==0) { 
                    echo '<script> alert ("La Base de Datos fue Restaurada con Exito"); </script>';
                } else { 
                      mysqli_query($enlace, "drop database ".$bd); 
                      echo '<script> alert ("La Base de Datos no pudo ser Restaurada"); </script>';
                      $mensaje_inicial='La Instalaci&oacute;n NO pudo efectuarse.<br>Contacte al Administrador del Sistema';
                  }
              }
          }
           // fin de instalación de base de datos 
        }
        ?>

        <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="">
          <center><br>
          <p  ><?php if(isset($mensaje_inicial)) echo $mensaje_inicial; ?><br>
          <input type="file" name="archivo" class="btn btn-default"></p>
          <input type="submit" name="enviar" Value="Importar Base de Datos" class="btn btn-primary">
          </center>
        </form>
  </body>
</html>

