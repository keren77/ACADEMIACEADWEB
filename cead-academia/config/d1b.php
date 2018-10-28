<?php
/*Datos de conexion a la base de datos*/
define('DB_HOST', 'localhost');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root');//Usuario de tu base de datos
define('DB_PASS', '');//Contraseña del usuario de la base de datos
define('DB_NAME', 'academiacead');//Nombre de la base de datos

class basedatos {
    private $host = DB_HOST;
    private $basedatos = DB_NAME ;
    private $usuario = DB_USER;
    private $password = DB_PASS;
     private $conector;


     public function abrir_conexion(){
    $this->conector = new mysqli($this->host, $this->usuario, $this->password, $this->basedatos);
    $this->conector->set_charset("utf8");

    if($this->conector->connect_errno){
      echo 'fallo la conexion mysql: ('. $this->conexion->connect_errno . ');'. $this->conexion->connect_error;
        }
}

public function cerrar_connexion(){
       mysqli_close($this->conector);
        }

public function conectado(){
        echo 'se ha conectado con exito!!!';
        }

        public function CONECTOR(){
            return $this->conector;
        }
}
