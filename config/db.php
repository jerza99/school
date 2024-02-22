<?php 

    class Database {
        
        private static $instance = null;

        public static function connect() {
            if (self::$instance === null) {
                $host = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'tienda';
                $charset = 'utf8mb4';

                self::$instance = new mysqli($host, $username, $password, $database);

                // Verificar la conexión
                if (self::$instance->connect_error) {
                    die('Error de Conexión (' . self::$instance->connect_errno . ') '
                        . self::$instance->connect_error);
                }

                // Establecer el conjunto de caracteres
                if (!self::$instance->set_charset($charset)) {
                    printf("Error cargando el conjunto de caracteres utf8mb4: %s\n", self::$instance->error);
                }
            }

            return self::$instance;
        }
    }

?>