<?php

require_once 'Conexion.php';

class Juegos {
    
    public static function recuperarProductos(){
        $conex = new Conexion();
        $consulta = $conex->query("SELECT* FROM juegos");
        if ($conex->affected_rows){
            $productos = array();
            while($registro=$consulta->fetch_object()){
              $productos[] = array ("<div class='picture left' style='width:220px;' > <a href='DescJuego.php?cod=$registro->Codigo'> <img width='100px' height='100px' title='$registro->Nombre_juego' src='$registro->Imagen' ></a> <br/> <a class='text-center' href='DescJuego.php?cod=$registro->Codigo'>$registro->Nombre_juego</a></div>");
                
            }
            return $productos;
        }
    }
  
    
    
    public static function recuperarJuego($cod){
        $conex = new Conexion();
        $consulta1 = $conex->query("SELECT* FROM juegos WHERE Codigo = '$cod'");
        if ($conex->affected_rows){
           
             while($registro=$consulta1->fetch_object()){
              $producto = array ("imagen"=>"<img width='200px' height='200px' src='$registro->Imagen'>", "nombre"=>$registro->Nombre_juego, "consola"=>$registro->Nombre_consola, "anno"=>$registro->Anno, "precio"=>$registro->Precio, "alquilado"=>$registro->Alguilado);
                
            }
            return $producto;
        }
    }
    
     public static function recuperarProductosAlquiler(){
        $conex = new Conexion();
        $consulta = $conex->query("SELECT* FROM juegos WHERE alguilado = 'Si'");
        if ($conex->affected_rows){
            $productos = array();
            while($registro=$consulta->fetch_object()){
              $productos[] = array ("<div class='picture left' style='width:220px;' > <a href='DescJuego.php?cod=$registro->Codigo'> <img width='100px' height='100px' title='$registro->Nombre_juego' src='$registro->Imagen' ></a> <br/> <a class='text-center' href='DescJuego.php?cod=$registro->Codigo'>$registro->Nombre_juego</a></div>");
                
            }
            return $productos;
        }
    }
    
         public static function recuperarProductosNoAlquiler(){
        $conex = new Conexion();
        $consulta = $conex->query("SELECT* FROM juegos WHERE alguilado = 'No'");
        if ($conex->affected_rows){
            $productos = array();
            while($registro=$consulta->fetch_object()){
              $productos[] = array ("<div class='picture left' style='width:220px;' > <a href='DescJuego.php?cod=$registro->Codigo'> <img width='100px' height='100px' title='$registro->Nombre_juego' src='$registro->Imagen' ></a> <br/> <a class='text-center' href='DescJuego.php?cod=$registro->Codigo'>$registro->Nombre_juego</a></div>");
                
            }
            return $productos;
        }
    }
    
      public static function recuperarProductosPorCod($cod){
        $conex = new Conexion();
        $consulta = $conex->query("SELECT* FROM juegos WHERE Codigo = '$cod'");
        if ($conex->affected_rows){
            $productos = array();
            while($registro=$consulta->fetch_object()){
              $productos[] = array ("<div class='picture left' style='width:220px;' > <a href='DescJuego.php?cod=$registro->Codigo'> <img width='100px' height='100px' title='$registro->Nombre_juego' src='$registro->Imagen' ></a> <br/> <a class='text-center' href='DescJuego.php?cod=$registro->Codigo'>$registro->Nombre_juego</a></div>");
                
            }
            return $productos;
        }
    }
  
    
    
    
}
