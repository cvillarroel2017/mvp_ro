<?php
    include_once("modulos/Enrutador.php");
    include_once("modulos/Controller.php");
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!–Con esto garantizamos que se vea bien en dispositivos móviles–>
        <title>Mantenedor MVPS</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen"> <!–Llamamos al archivo CSS a través de CDN –>
        <link rel="stylesheet" href="css/estilos.css"/>

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="?cargar=crear">Crear MVP</a></li>
                        <li><a href="#contact">Ver MVPS</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <br>
            <br>
            <br>

            <div class="starter-template">
                <section>
                    <?php
                    $enrutador = new Enrutador();
                    if($enrutador->validarGet($_GET['cargar'])){
                        $enrutador->cargarVista($_GET['cargar']);
                    }5

                    ?>

                </section>

                <footer>
                    Todos los derechos reservados Ancient Gears Guild
                </footer>
            </div>

        </div><!-- /.container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> <!– Llamamos al JavaScript  a través de CDN –>
    </body>

</html>