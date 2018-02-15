<?php
extract($_POST);

if(empty($_POST)){ ?>
<script type='text/javascript'>
    alert('## INGRESE UN N° DE DOCUMENTO ##');
    window.location='administrador.php?p=estudiante/registrar_e_a';
</script>
<?php
}

require_once('../../../conexion/conexion.php');
if (!$conexion) {
  echo 'No se pudo conectar'.mysqli_error();
  exit();
}


$sql="INSERT INTO estudiante (ced_e, ced_r, tipo_doc, nombre, apellido, sexo, f_naci, edo_civil, lateralidad , pais, edo, area_aten, progra_apoy, muni, parro, pobla, urbani, via, direc, zona, tip_vivi, ubi_vivi, esta_infra, cond_vivi, canaima, ser_canaima, beca, ingre_fami, tele_mov, tele_hab, email, estatura, peso, talla_cami, talla_pant, talla_zapa) VALUES ('$ced_e', '$ced_r', '$tipo_doc', '$nombre', '$apellido', '$sexo','$f_naci', '$edo_civil', '$lateralidad' , '$pais', '$edo', '$area_aten', '$progra_apoy', '$muni', '$parro', '$pobla', '$urbani', '$via', '$direc', '$zona', '$tip_vivi', '$ubi_vivi', '$esta_infra', '$cond_vivi', '$canaima', '$ser_canaima', '$beca', '$ingre_fami', '$tele_mov', '$tele_hab', '$email', '$estatura', '$peso', '$talla_cami', '$talla_pant', '$talla_zapa')";



$consulta = mysqli_query($conexion,$sql);

  
 if($consulta==0){ ?>

    <script type='text/javascript'>
  alert('## LA CEDULA YA SE ENCUENTRA REGISTRADA ##');
  window.location='administrador.php?p=estudiante/registrar_e_a';
  </script>
      
<?php

}
   

   else 
 {?>

    
  <script type='text/javascript'>
  alert('## DATOS ALMACENADOS CON EXITO ##');
  window.location='administrador.php?p=estudiante/registrar_e_a';
  </script>
   

  <?php }

?>
