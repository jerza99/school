<?php 
// Autoloader para controladores
function controllers_autoload($classname) {
    $directory = __DIR__ . '/controllers/';  
    $name = $directory . $classname . '.php';

    if (file_exists($name)) {
        require_once $name;
    } else {
        throw new Exception("Archivo no encontrado: {$name}");
    }
}

// Autoloader para modelos
function models_autoload($classname) {
    $directory = __DIR__ . '/models/';   
    $name = $directory . strtolower($classname) . '.php';

    if (file_exists($name)) {
        require_once $name;
    } else {
        throw new Exception("Archivo no encontrado: {$name}");
    }
}

// Registrar ambos autoloaders
spl_autoload_register('controllers_autoload');
spl_autoload_register('models_autoload');
