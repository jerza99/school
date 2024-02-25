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

            $dsn = "mysql:host=$host;dbname=$database;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$instance = new PDO($dsn, $username, $password, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        return self::$instance;
    }
}
?>