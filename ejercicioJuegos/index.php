<html>
    <head>
        <?php
        require_once './enlaces.php';
        ?>
    </head>

    <body>
        <header>
            <?php
            require_once './Juegos.php';
            require_once './menu.php';
                ?>
                </header>
            </div>
            <div class="row">
                <div class="col text-center">          
                    <?php
                    if ($p = Juegos::recuperarProductos()) {


                        foreach ($p as $productos) {

                            foreach ($productos as $producto) {

                                echo "$producto";
                            }
                        }
                    }
                    ?>
                </div> 
            </div>

    </body>






</html>




<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

