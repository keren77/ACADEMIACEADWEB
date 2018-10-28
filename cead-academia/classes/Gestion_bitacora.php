<?php

/* 
 * archivo que contiene la funcion para ,gestionar las operaciones que se guardan en la bitacora
 */

//include 'conexion.php';



class Bitacora{
    
    private $fecha_accion;
    private $accion;
    private $descripcion;
    private $id_usuario;
    private $id_objeto;
    
    
    
    public function usa_bitacora($a, $d, $iu, $io){
        
        $objeto_conector=new basedatos();  
        
        //aqui obtenemos la fecha actual del sistema
        $fecha_total = getdate();
        
        $fecha_actual=$fecha_total['year']."-".$fecha_total['mon']."-".$fecha_total['mday'];
        
        //se asignan los parametros a los campos de la clase
        $this->fecha_accion= $fecha_actual;
        $this->accion=$a;
        $this->descripcion=$d;
        $this->id_usuario=$iu;
        $this->id_objeto=$io;
        
        //query para insertar la data en la tabla bitacora
        
        $sql="insert into tbl_bitacora(Fecha, Accion, Descripcion, Id_usuario, Id_objeto) values('".$this->fecha_accion."', '".$this->accion."', '".$this->descripcion."',".$this->id_usuario.",".$this->id_objeto." );";
        
        try{
            $result= mysqli_query($objeto_conector->CONECTOR(), $sql);
            $objeto_conector->cerrar_connexion();
            
        } catch(Exception $e){
            echo 'error: '.$e;
        }
    }
}