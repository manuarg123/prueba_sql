<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <?php
                    //Muestro resultados en pantalla
                    echo '<pre>';
                         print_r($stats);
                    echo '</pre>';                  
                ?>
                <div class="text-center">
                    <button  class="btn btn-primary"><a href="index.php" style="text-decoration: none; color: white;">Volver</a></button>
                </div>
            </div>
            <div class="col-4"></div>
        </div>      
    </div>

    <!-- Incluir los scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>