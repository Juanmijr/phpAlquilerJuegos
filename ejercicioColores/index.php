
<html>
    <style>
        fieldset {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 230px;
            margin-left: -115px;
            height: 300px;
            margin-top: -150px;
            padding:10px;
            border:1px solid #ccc;
            background-color: #eee;
        }

        legend {
            font-family : Arial, sans-serif;
            font-size: 1.3em;
            font-weight:bold;
            color:#333;
        }

        input[type="text"], input[type="password"] {
            font-family : Arial, Verdana, sans-serif;
            font-size: 0.8em;
            line-height:140%;
            color : #000; 
            padding : 3px; 
            border : 1px solid #999;
            height:18px;
            width:220px;
        }

        input[type="submit"] {
            width:160px;
            height:30px;
            padding-left:0px;
        }

        select {
            font-family : Arial, Verdana, sans-serif;
            font-size: 0.8em;
            line-height:140%;
            color : #000; 
            padding : 3px; 
            border : 1px solid #999;
            height:30px;
            width:220px;
        }

        a {
            font-family: Verdana, Arial, sans-serif; 
            font-size: 0.7em;
        }

        div.campo {
            margin-top:8px;
            margin-bottom: 10px;
        }

        span.mensaje {
            font-family: Verdana, Arial, sans-serif; 
            font-size: 0.7em;
            color: #009;
            background-color : #ffff00;
        }

        label.etiqueta {
            font-family : Arial, sans-serif;
            font-size:0.8em;
            font-weight: bold;
        }

        label.texto {
            font-family : Arial, Verdana, sans-serif;
            font-size: 1em;
            line-height:140%;
            color : #000; 
        }

    </style>

    <body>
        <?php
        session_start();





        echo "Has fallado " . ($_SESSION['intentos']) . " intentos";

        if ($_SESSION['intentos'] > 3) {
          
                header("Location:error.php");
          
        }
        ?>

        <form action="" method="POST">
            Usuario: <input type="text" name="usuario" value=""><br><br>
            Contraseña: <input type="password" name="pass" value=""><br><br>
            <input type="submit" name="entrar" value="Entrar">
            <input type="submit" name="registro" value="Registrar">

        </form>
<?php
if (!isset($_POST['entrar'])) {
    $_SESSION['fecha'] = time();
    $_SESSION['intentos'] = 0 ;
   
} else {
    $conexion = new mysqli('localhost', 'dwes', 'abc123.', 'tema4_logueo');

    $usuario = $_POST['usuario'];
    $psw = $_POST['pass'];
    $psw = md5($psw);

    $conexion1 = $conexion->query("SELECT * FROM usuario WHERE  usuario = '$usuario' AND pass = '$psw'");

    if (mysqli_affected_rows($conexion) > 0) {
        while ($array = $conexion1->fetch_object()) {
            $_SESSION['correo'] = $array->email;
        }

        header("Location:iniciar.php");
    } else {

        $_SESSION['intentos'] += 1;
        if ($_SESSION['intentos'] >= 3) {
            header("Location:error.php");
        }
    }
}
if (isset($_POST['registro'])) {
    header("Location: registro.php");
}
?>
    </body>
</html>








<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

