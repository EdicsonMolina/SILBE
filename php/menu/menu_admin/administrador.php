<?php
    // Pequeña lógica para capturar la pagina que queremos abrir
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'menu';

    // El fragmento de html que contiene la cabecera de nuestra web
    require_once 'menu.php';


    /* Estamos considerando que el parámetro enviando tiene el mismo nombre del archivo a cargar, si este no fuera así
    se produciría un error de archivo no encontrado */
    require_once  $pagina . '.php';

    // Otra opción es validar usando un switch, de esta manera para el valor esperado le indicamos que página cargar


    // El fragmento de html que contiene el pie de página de nuestra web
  //  require_once 'paginas/footer.php';




























