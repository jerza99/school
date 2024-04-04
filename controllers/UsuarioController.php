<?php 

    require_once 'models/usuario.php';

    class usuarioController{

        public function register(){
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['nombre']) && isset($_POST['apellidos']) && 
                    isset($_POST['correo']) && isset($_POST['contrasena']) && 
                    isset($_POST['rol'])) {
                        
                        // Creo variables y les asigno lo que me llega por el metodo 'post'
                        $nombre = $_POST['nombre'];
                        $apellidos = $_POST['apellidos'];
                        $correo = $_POST['correo'];
                        $password = $_POST['contrasena'];
                        $rol = $_POST['rol'];

                        // Creo mi objeto 
                        $usuario = new Usuario();

                        $usuario->setNombre($nombre);
                        $usuario->setApellidos($apellidos);
                        $usuario->setEmail($correo);
                        $usuario->setPassword($password);
                        $usuario->setRol($rol);

                        $result = $usuario->register();

                        if ($result > 0) {
                            echo 'Registro exitoso';
                        }else {
                            echo 'No se pudo registrar';
                        }
                }
            }
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

                    $result = $usuario->loguin();

                    // Iniciar la sesión si no está iniciada
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }

                    if ($result == 'alumno') {
                        $_SESSION['user_type'] = 'alumno';
                        header("Location: " . base_url ."views/alumno/alumno.php");
                        exit;
                    } elseif ($result == 'profesor') {
                        $_SESSION['user_type'] = 'profesor';
                        header("Location: " . base_url ."views/profesor/profesor.php");
                        exit;
                    }else {
                        header("Location: " . base_url ."views/login.php");
                        exit;
                    }
                }
            }
        }
        public function destroySession(){
            session_destroy();
            header("Location: " . base_url ."views/login.php");
            exit;
        }

        public function updatePass(){
            $actualizar = new Usuario();

            $result = $actualizar->updatePassword();

            if ($result) {
                echo 'Actualizacion exitosa';
            }else {
                echo 'No se pudo actualizar';
            }
        }
    }
?>