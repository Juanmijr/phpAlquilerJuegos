<html>
    <head>
         <?php
        require_once './enlaces.php';
        ?>
    </head>
    <body>

  <?php
        require_once './menu.php';
        require_once './Juegos.php';
        ?>
        <div class="row">
            <div class="col text-center">   
                <?php
                if ($p = Juegos::recuperarProductosNoAlquiler()) {
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
