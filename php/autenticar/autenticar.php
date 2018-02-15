<?php
session_start();


if(!empty($_POST))
{

  include_once("../../conexion/conexion.php");
     
     $usuario=$_REQUEST['usuario'];
     $pass=$_REQUEST['password'];

    $datos= mysqli_query($conexion,"SELECT * FROM usuarios WHERE user='$usuario'");
    if (mysqli_num_rows($datos)>0){

      $data=mysqli_fetch_array($datos);



     if(password_verify($pass, $data[2])){ //se verifica la contraseña ingresada por el usuario con el hash guardado anteriormente
      $datos_user= mysqli_query($conexion,"SELECT user FROM usuarios WHERE user='$usuario'");
      $row = mysqli_fetch_array($datos_user);
      $user=$row[user];

      $datos_nivel= mysqli_query($conexion,"SELECT nivel FROM usuarios WHERE user='$usuario'");
      $row = mysqli_fetch_array($datos_nivel);
      $nivel=$row[nivel];

      $datos_nom_user= mysqli_query($conexion,"SELECT nom_user FROM usuarios WHERE user='$usuario'");
      $row = mysqli_fetch_array($datos_nom_user);
      $nom_user=$row[nom_user];

      $_SESSION['nombre']=$user;
      $_SESSION['nivel']=$nivel;
      $_SESSION['nom_user']=$nom_user;
    
    if($_SESSION['nivel']==1)
      header("location:../menu/menu_admin/administrador.php");
    
      else{
        if($_SESSION['nivel']==2)
        header("location:../menu/menu_user/usuario.php");
      }
    }else{
        echo '<script language = javascript>
  alert("Usuario o Password errados, por favor verifique")
  self.location = "../../index.php"
  </script>';
      }

  } else{
        echo '<script language = javascript>
  alert("Usuario o Password errados, por favor verifique")
  self.location = "../../index.php"
  </script>';
      }
}else{

if(!isset($_SESSION['nombre']) && !isset($_SESSION['nivel']))
  echo '<script language = javascript>
  alert("Debe Iniciar Sesion")
  self.location = "../../index.php"
  </script>';


  else{

if(isset($_SESSION['nombre']) && isset($_SESSION['nivel'])){

   if($_SESSION['nivel']==1)
      header("location:../menu/menu_admin/administrador.php");
    
      else{
        if($_SESSION['nivel']==2)
        header("location:../menu/menu_user/usuario.php");
    }
    }

}
}
?>

