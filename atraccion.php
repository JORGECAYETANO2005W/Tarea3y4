<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Montaña Rusa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Validador de Montaña Rusa
            </div><br>
            <div class="card-body">
                <form action="atraccion2.php" method="post">
                    <div class="mb-3">
                        <label for="altura" class="form-label">Altura (cm)</label>
                        <input type="number" class="form-control" id="altura" name="altura" min="0" required>
                    </div><br>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" min="0" required>
                    </div><br>
                    <div class="mb-3">
                        <label class="form-label">¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="juicio" id="juicio_si" value="si" required>
                            <label class="form-check-label" for="juicio_si">Sí</label>
                        </div><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="juicio" id="juicio_no" value="no">
                            <label class="form-check-label" for="juicio_no">No</label>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary w-100">Validar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
