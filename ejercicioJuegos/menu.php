
<?php
require_once './Cliente.php';
 session_start();
 
    if (isset($_POST['login'])){
            $usuario  = Cliente::recuperarCliente($_POST['usuario'], $_POST['pass']);
            if ($usuario == TRUE){
               
                $_SESSION['DNI'] = $_POST['usuario'];
        
                if (Cliente::esAdmin($_POST['usuario'], $_POST['pass'])){
                        $_SESSION['Admin'] = TRUE;
                    }
                    else{
                        $_SESSION['Admin']=FALSE;
                    }
            }
            else{ 
                echo "<span>SE HA EQUIVOCADO EN LAS CREDENCIALES</span>";
            }
        }
        
 
 
if (!isset($_SESSION['DNI'])) {
    ?>
    <div class="text-center">
        <hr>
        <h1 class="text-center">Juegos Comares</h1><br><br>
        <form action="" method="POST">
            Usuario: <input type="text" name="usuario" value="">
            Contraseña: <input type="password" name="pass" value="">
            <input type="submit" name="login" value="Login"> 
        </form>
        <hr>

        <?php
        
     
        
    } else {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Todos los juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="juegosAlquilados.php">Juegos alquilados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="JuegosNoAlquilados.php">Juegos no alquilados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="misJuegos.php">Mis juegos</a>
                    </li>
                    <?php
                    if (($_SESSION['Admin']=TRUE)) {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="addJuegos.php">Añadir juegos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="modJuegos.php">Modificar juegos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eliminarJuegos.php">Eliminar juegos</a>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="salir.php">Salir</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

    <?php
} 


   
                
               