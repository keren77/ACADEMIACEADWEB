<?php

/* Datos de conexion a la base de datos */
define('DB_HOST', 'localhost'); //DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', 'root'); //Usuario de tu base de datos
define('DB_PASS', ''); //Contraseña del usuario de la base de datos
define('DB_NAME', 'academiacead'); //Nombre de la base de datos

class basedatos {

    private $host = DB_HOST;
    private $basedatos = DB_NAME;
    private $usuario = DB_USER;
    private $password = DB_PASS;
    private $conector;

    public function abrir_conexion() {
        $this->conector = new mysqli($this->host, $this->usuario, $this->password, $this->basedatos);
        $this->conector->set_charset("utf8");

        if ($this->conector->connect_errno) {
            echo 'fallo la conexion mysql: (' . $this->conexion->connect_errno . ');' . $this->conexion->connect_error;
        }
    }

    public function cerrar_connexion() {
        mysqli_close($this->conector);
    }

    public function conectado() {
        echo 'se ha conectado con exito!!!';
    }

    public function CONECTOR() {
        return $this->conector;
    }
    
    public function insertausuario ($U,$NU, $C, $FV, $CO, $R, $IE, $CP, $conn, $P1, $P2, $P3, $R1, $R2, $R3) {
        
        $fecha = getdate();
        $fechaactual = $fecha['year'].'-'.$fecha['mon'].'-'.$fecha['mday'];
        
        try{
            //$sql = "insert into tbl_usuarios(Usuario, NombreUsuario, Contraseña, PreguntasContestadas, FechaVencimiento, Correo, Id_Estado, Id_Rol, Id_Empleado, FechaCreacion, FechaModificacion, CreadoPor) Values('".$U."', '".$NU."', '". password_hash($C, PASSWORD_DEFAULT)."', 3, '".$FV."', '".$CO."',1 ,".$R." , ".$IE." , '".$fechaactual."', '".$fechaactual."', '".$CP."')";
            
            $sql = "INSERT INTO tbl_usuarios(Usuario, NombreUsuario, Contrasena, PreguntasContestadas, FechaVencimiento, CorreoElectronico, Id_Estado, Id_Rol, Id_Empleado, FechaCreacion, FechaModificacion, CreadoPor) VALUES('".$U."','".$NU."','". password_hash($C, PASSWORD_DEFAULT)."',3,'".$FV."','".$CO."',1,".$R.",".$IE.",'".$fechaactual."','".$fechaactual."','admin');";
            $result=mysqli_query($conn, $sql);
            
            //QUerys para insertar las respuestas a las preguntas
            $cons = "SELECT * FROM tbl_usuarios;";
            $resultado = mysqli_query($conn, $cons);
            $nuevoID = $resultado->num_rows;
            
            $r1 = "INSERT INTO tbl_preguntasusuario(Respuesta, Id_usuario, Id_Pregunta, FechaCreacion) values('".$R1."' ,".$nuevoID.",".$P1.", '".$fechaactual."');";
            $r2 = "INSERT INTO tbl_preguntasusuario(Respuesta, Id_usuario, Id_Pregunta, FechaCreacion) values('".$R2."' ,".$nuevoID.",".$P2.", '".$fechaactual."');";
            $r3 = "INSERT INTO tbl_preguntasusuario(Respuesta, Id_usuario, Id_Pregunta, FechaCreacion) values('".$R3."' ,".$nuevoID.",".$P3.", '".$fechaactual."');";
            
            $resp1 = mysqli_query($conn, $r1);
            $resp2 = mysqli_query($conn, $r2);
            $resp3 = mysqli_query($conn, $r3);
            echo '<script>alert("Usuario agregado exitosamente!!");window.location="nuevousuario.php";</script>';
        }catch(Exception $e){
            echo '<script>alert("ERROR: '.$e->getMessage().' ");window.location="nuevousuario.php";</script>';
        }
        
        
    }
    
    
    

}
