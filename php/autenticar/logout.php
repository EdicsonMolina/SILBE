<?php
session_start();

//elimina elementos de la sesion.
session_unset(); 

//destruye la sesion
session_destroy();

header('Location:../../index.php');

?>