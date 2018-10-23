<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author Nicolle
 */

define("bd_h","localhost" );
define("bd_b","ACADEMIACEAD" );
define("bd_u","root" );
define("bd_p","" );

class basedatos {
    private $host = bd_h;
    private $basedatos = bd_b;
    private $usuario = bd_u;
    private $password = bd_p;
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


      
        
        
class conexion {
    //put your code here
}
