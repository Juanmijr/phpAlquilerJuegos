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
        require_once './Alquiler.php';
        ?>
        <div class="row">
            <div class="col text-center">   
                <?php
                if ($cod = Alquiler::alquilerDNI($_SESSION['DNI'])) {
                    foreach ($cod as $codigo) {
                        if ($p = Juegos::recuperarProductosPorCod($codigo)) {

                            foreach ($p as $productos) {

                                foreach ($productos as $producto) {

                                    echo "$producto";
                                }
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
