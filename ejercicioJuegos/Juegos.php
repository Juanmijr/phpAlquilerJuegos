<?php

require_once 'Conexion.php';

class Juegos {
    
    public static function recuperarProductos(){
        $conex = new Conexion();
        $consulta = $conex->query("SELECT* FROM juegos");
        if ($conex->affected_rows){
            while($registro=$consulta->fetch_object()){
              $producto[] = array ($registro->Imagen, $registro->Nombre_juego, $registro->Nombre_consola, $registro->Anno, $registro->Precio);
                
            }
            return $producto;
        }
    }
}
