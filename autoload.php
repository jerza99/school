<?php 
// Autoloader para controladores
function controllers_autoload($classname) {

    $directories = [
        __DIR__ . '/controllers/',
        __DIR__ . '/models/'
    ];


    foreach ($directories as $directory) {
        $name = $directory . $classname . '.php';
        echo "Intentando cargar: {$name}<br>"; // Debug

        if (file_exists($name)) {
            require_once $name;
            return;
        }else {
            throw new Exception("Archivo no encontrado: {$name}");
        }
    }
}

spl_autoload_register('controllers_autoload');

