<html>
    <?php
    session_start();
    
      $conexion = new mysqli('localhost', 'dwes', 'abc123.', 'tema4_logueo');
        $correo = $_SESSION['correo'];
        $resultado1 = $conexion->query("SELECT * FROM usuario WHERE email = '$correo'");
        
        
         while ($array = $resultado1->fetch_object()) {  
             
    ?> 
     <style>
        body{
            background-color: <?php echo $array->color_fondo?> ;
            color: <?php echo $array->color_letra?>;
            font-family: <?php echo $array->tipo_letra?>;
            font-size: <?php echo $array->tam_letra?>;
            
        }
    </style>
    <body>
        <p>Hola <?php echo $array->nombre."."; ?> </p>
        <h2>DATOS: </h2>
        
        <?php
            echo "<p>Nombre: $array->nombre</p>" ;
            echo "<p>Apellidos: $array->apellidos</p>" ;
            echo "<p>Localidad: $array->localidad</p>" ;
            echo "<p>Correo: $array->email</p>" ;
         }
        ?>
        
         <form method="POST">
            <input type="submit" name="salir" value="Salir">
            <input type="submit" name="volver" value="Volver">
        </form>
    </body>
    
     <?php
    if (isset($_POST['salir'])){
        header("Location:index.php");
    }
    if (isset($_POST['volver'])){
        header("Location:iniciar.php");
    }
    ?>
</html>

