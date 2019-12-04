<html>
    <?php
    
   session_start();
    
    if (!isset($_SESSION['correo'])){
        header("Location: index.php");
    }
    
      $conexion = new mysqli('localhost', 'dwes', 'abc123.', 'tema4_logueo');
        $correo = $_SESSION['correo'];
        $resultado1 = $conexion->query("SELECT nombre, color_letra, color_fondo, tipo_letra, tam_letra FROM usuario WHERE email = '$correo'");
        
        
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
        
        
        <p>Hola, <?php echo $array->nombre."." ; } ?></p>
         <h1>Bienvenido a la web</h1>
        <form method="POST">
            <input type="submit" name="salir" value="Salir">
            <input type="submit" name="verdatos" value="Ver mis datos">
        </form>
    </body>
    
    <?php
    if (isset($_POST['salir'])){
        header("Location:index.php");
    }
    if (isset($_POST['verdatos'])){
        header("Location:datos.php");
    }
    ?>
    
</html>