<?php 

    class Usuario{
        private $id_alumno; 
        private $id_profesor;
        private $nombre;
        private $apellidos;	
        private $email;	
        private $password;	
        private $imagen;
        private $rol;
        private $db;

        public function __construct(){
            
            $this->db = Database::connect();

            if (!$this->db) {
                throw new Exception("Error de conexion");
            }
        }
        
        public function getId_alumno() {
            return $this->id_alumno;
        }

        public function getId_profesor() {
            return $this->id_profesor;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            // return password_hash($this->password, PASSWORD_BCRYPT, ['cost' =>  4]);
            return $this->password;
        }

        public function getImagen() {
            return $this->imagen;
        }

        public function getRol(){
            return $this->rol;
        }

        public function setId_alumno($id_alumno){
            $this->id_alumno = $id_alumno;
        }

        public function setId_profesor($id_profesor){
            $this->id_profesor = $id_profesor;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        public function register(){

            // Variables
            $nombre = $this->nombre;
            $apellidos = $this->apellidos;
            $email = $this->email;
            $password = $this->password;
            $rol = $this->rol;

            // consultar si es alumno o profesor y despues insertar los datos
            if ($rol == 'alumno') {
                $insert = "INSERT INTO alumno (nombre, apellidos, email, password) VALUES (:nombre, :apellidos, :email, :password)";
            } elseif ($rol == 'profesor') {
                $insert = "INSERT INTO profesor (nombre, apellidos, email, password) VALUES (:nombre, :apellidos, :email, :password)";
            } else {
                throw new Exception("Error Rol Invalido");
            } 

            // preparar la insersion de datos
            $sql = $this->db->prepare($insert);

            // Ejecutar sql con los parametros 
            $sql->execute([
                ':nombre' => $nombre ,
                ':apellidos' => $apellidos ,
                ':email' => $email ,
                ':password' => $password ,
            ]);

            return $sql->rowCount();
        }

        public function loguin(){
            // variables para correo y password
            $email = $this->email;
            $password = $this->password;
        
            // Consulta a la tabla alumno
            $consulta = "SELECT * FROM alumno WHERE email = :email";
            $sql = $this->db->prepare($consulta);
            $sql->bindParam(':email', $email);
            $sql->execute();
            $alumno = $sql->fetch(PDO::FETCH_ASSOC);
        
            // Consulta a la tabla profesor
            $consulta = "SELECT * FROM profesor WHERE email = :email";
            $sql = $this->db->prepare($consulta);
            $sql->bindParam(':email', $email);
            $sql->execute();
            $profesor = $sql->fetch(PDO::FETCH_ASSOC);
        
            // Verifica si el usuario es alumno
            if ($alumno && $alumno['password'] == $password) {
                return 'alumno';
            }
            // Verifica si el usuario es profesor
            elseif ($profesor && $profesor['password'] == $password) {
                return 'profesor';
            }
            else {
                return false;
            }
        }
        
    }

?>