
<html>
    <body>
        <h1>Registro de usuario:</h1>
        <form method="POST" action="">
            Nombre: <input type="text" name="nombre" value=""><br><br>
            Apellido: <input type="text" name="apellido" value=""><br><br>
            Usuario: <input type="text" name="usuario" value=""><br><br>
            E-mail: <input type="text" name="correo" value="">
            
            <?php
            $email = TRUE;
            $conexion = new mysqli('localhost', 'dwes', 'abc123.', 'tema4_logueo');
            $conexion->set_charset('utf8');


            if (isset($_POST['boton'])) {
                $correo = $_POST['correo'];
                $conexion1 = $conexion->query("SELECT email FROM usuario WHERE email = $correo");
                if ($conexion->affected_rows > 0 || !preg_match("/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/", $correo)) {
                    echo "<span>Su email ya está en la BBDD o no tiene formato de email<span>";
                    $email = FALSE;
                }
            }
            ?>
            <br><br>
            Dirección: <input type="text" name="direccion" value=""><br><br>
            Localidad: <input type="text" name="localidad" value=""><br><br>
            Contraseña: <input type="password" name="pass" value=""><br><br>

            Color de letra: <select name="colorLetra">     
                <option  value="#ff0000">Rojo</option>
                <option  value="#008f39">Verde</option>
                <option  value="#e5be01">Amarillo</option>
                <option  value="#3b83bd">Azul</option>
            </select>
            Tipo de letra: <select name="tipoLetra">     
                <option  value="1">Comic-Sans</option>
                <option  value="2">Arial</option>
                <option  value="4">Georgia</option>
                <option  value="8">Lato</option>
            </select>
            Color de fondo: <select name="colorFondo">     
                <option  value="#ff0000">Rojo</option>
                <option  value="#008f39">Verde</option>
                <option  value="#e5be01">Amarillo</option>
                <option  value="#3b83bd">Azul</option>
            </select>
            Tamaño letra: <select name="tamanoLetra">     
                <option  value="10">10</option>
                <option  value="15">15</option>
                <option  value="20">20</option>
                <option  value="25">25</option>
                <option  value="30">30</option>

            </select>
            <br><br>
            <input type="submit" name="volver" value="Volver">
            <input type="submit" name="boton" value="Aceptar">

        </form>
    </body>
    <?php
    if (isset($_POST['boton']) && $email == TRUE) {
        $pass = md5($_POST['pass']);
        if (!$conexion->query("INSERT INTO usuario VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[localidad]','$_POST[usuario]','$_POST[correo]','$pass','$_POST[colorLetra]','$_POST[colorFondo]','$_POST[tipoLetra]','$_POST[tamanoLetra]')")){
            echo $conexion->error;
            								
        } 
        }


    if (isset($_POST['volver'])) {
        header("Location:index.php");
    }
    ?>

</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

