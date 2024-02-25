<?php 

    class Usuario{
        private $id_alumno; 
        private $id_profesor;
        private $nombre;
        private $apellidos;	
        private $email;	
        private $password;	
        private $imagen;
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

        public function loguin(){

            // variables para correo y password
            $email = $this->email;
            $password = $this->password;

            // Consutla a la tabla alumno
            $consulta = "SELECT * FROM alumno WHERE email = :email";
            $sql = $this->db->prepare($consulta);
            $sql->bindParam(':email', $email);
            $sql->execute();
            $alumno = $sql->fetch(PDO::FETCH_ASSOC);

            // Consutla a la tabla profesor
            $consulta = "SELECT * FROM profesor WHERE email = :email";
            $sql = $this->db->prepare($consulta);
            $sql->bindParam(':email', $email);
            $sql->execute();
            $profesor = $sql->fetch(PDO::FETCH_ASSOC);

            if ($alumno && password_verify($this->password, $alumno['password'])) {
                return 'alumno';
            }elseif ($profesor && password_verify($this->password, $profesor['password'])) {
                return 'profesor';
            }else {
                return false;
            }
            
        }
    }

?>