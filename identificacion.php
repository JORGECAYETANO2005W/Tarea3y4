<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilo CSS -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Identificación</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" pattern="[a-zA-Z0-9_-]+" id="password1" name="password1" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Confirmar Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" pattern="[a-zA-Z0-9_-]+" id="password2" name="password2" required>
                        </div>
                    </div><br>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];
                        $password1 = $_POST['password1'];
                        $password2 = $_POST['password2'];
                        
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo '<div class="alert alert-danger mt-3" role="alert">Correo electrónico no válido.</div>';
                        } elseif ($password1 !== $password2) {
                            echo '<div class="alert alert-danger mt-3" role="alert">Las contraseñas no coinciden.</div>';
                        } else {
                            echo '<div class="alert alert-success mt-3" role="alert">Identificación correcta.</div>';
                        }
                    }
                ?><br>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
                
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
