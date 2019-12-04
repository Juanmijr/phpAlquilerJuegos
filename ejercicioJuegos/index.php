<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <header>
          <?php
          require_once './Juegos.php';
          if (isset($_SESSION['DNI'])){
              
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
          }
                ?>
        </header>
    </div>
            
            
            <?php 
            
            if ($p = Juegos::recuperarProductos()){
             echo "<table>";
             
                foreach ($p as $productos){
                    echo "<tr>";
                    echo "<td>$productos</td>";
                    echo "</tr>";
                }
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

