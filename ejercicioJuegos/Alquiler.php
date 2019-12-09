<?php

require_once 'Conexion.php';
class Alquiler {
    
       public static function alquilerDNI($DNI) {
        $conex = new Conexion();
        $consulta1 = $conex->query("SELECT Cod_juego FROM alquiler WHERE DNI_cliente = '$DNI' ");
        
        if ($conex->affected_rows) {
       
               while($registro=$consulta1->fetch_object()){
                   $juegos = array($registro->Cod_juego);
               }
              
           return $juegos;
        }
        return FALSE;
    }
}
