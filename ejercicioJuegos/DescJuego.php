<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <?php
        require_once './Juegos.php';
        require_once './menu.php';


        if ($p = Juegos::recuperarJuego($_GET['cod'])) {
            ?>

            <div class='container'>
                <div class="row mt-10">


                    <div class="col">
                        <h2><?php echo $p['nombre']; ?> <br></h2>
                        Consola: <?php echo $p['consola']; ?><br>
                        Año: <?php echo $p['anno']; ?><br>
                        Precio: <?php echo $p['precio']; ?><br>
                        Alquilado: <?php echo $p['alquilado']; ?><br>
                        <?php if ($p['alquilado']== "No" && isset($_SESSION['DNI'])){
                            ?>
                         <form method="POST">
                            <input type="submit" name="alquilar" value="Alquilar">
                        </form>
                        <?php
                        }
                        ?>
                       
                    </div>
                    <div class="col">
                        Carátula : <?php echo $p['imagen']; ?>
                    </div>
                </div>

            </div>

    <?php
}
?>   



    </body>




</html>

<?php


