<?php 

    class usuarioController{
        
        public function index(){
            require_once  'views/login.php';
        }

        public function login(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['correo']) && isset($_POST['contrasena'])) {

                    // Creo variables y les asigno lo que me llega por el metodo 'post'
                    $correo = $_POST['correo'];
                    $password = $_POST['contrasena'];

                    // Creo mi objeto 
                    $usuario = new Usuario();
                    
                    $usuario->setEmail($correo);
                    $usuario->setPassword($password);

                    $result =$usuario->loguin();

                    if ($result == 'alumno') {

                        $_SESSION['user_type'] = 'alumno';
                        header("location:".base_url.'views/alumno/alumno.php');
                        exit;


                    } elseif ($result == 'profesor') {

                        $_SESSION['user_type'] = 'profesor';
                        header("location:".base_url.'views/profesor/profesor.php');
                    }
                }
            }
        }
    }
?>