<?php   

    class ViewController{
        public function index(){
            require_once  'views/login.php';
        }

        public function register(){
            require_once 'config/parameters.php';
            require_once 'views/registro.php';
        }

        public function alumno(){
            require_once 'config/parameters.php';
            header("Location: " . base_url ."views/alumno/alumno.php");
        }

        public function profesor(){
            require_once 'config/parameters.php';
            header("Location: " . base_url ."views/profesor/profesor.php");
        }
        
    }

?>