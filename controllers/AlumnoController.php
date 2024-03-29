<?php 

    require_once 'models/usuario.php';
    require_once 'models/alumno.php';

    class alumnoController extends usuarioController{
        
        public function index(){
            require_once 'views/alumno/alumno.php';
        } 
    }
    