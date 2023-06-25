<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 300px">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form method="POST" action="UserStatsController.php">
                    <div class="form-group">
                        <label for="dateFrom">Date From:</label>
                        <input type="date" class="form-control" id="dateFrom"  name="dateFrom" required=true>
                    </div>
                    <div class="form-group">
                        <label for="dateTo">Date To:</label>
                        <input type="date" class="form-control" id="dateTo" name="dateTo" required=true>
                    </div>
                    <div class="form-group">
                        <label for="totalClicks">Total Clicks:</label>
                        <input type="number" class="form-control" id="totalClicks" name="totalClicks">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
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