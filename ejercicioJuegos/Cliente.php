<?php

require_once 'Conexion.php';

class Cliente {

    public static function recuperarCliente($DNI, $pass) {
        $conex = new Conexion();
        $consulta1 = $conex->query("SELECT* FROM cliente WHERE DNI = '$DNI' && Clave = '$pass' ");
        if ($conex->affected_rows) {

            return TRUE;
        }
        return FALSE;
    }
    
     public static function esAdmin($DNI, $pass) {
        $conex = new Conexion();
        $consulta1 = $conex->query("SELECT Nombre FROM cliente WHERE DNI = '$DNI' && Clave = '$pass' ");
        if ($conex->affected_rows) {
            
               if ($registro=$consulta1->fetch_object()) {
                   if ($registro->DNI = "12121212A"){
                        return TRUE;
                   }
                }
           
        }
        return FALSE;
    }
    
    

}
