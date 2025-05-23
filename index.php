<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-n5">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Iniciar Sesión</h4>
                </div>
                <div class="card-body">
                    <form action="procesar_login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label ">Usuario:</label>
                            <input type="text" name="usuario" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña:</label>
                            <input type="password" name="clave" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100 ">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>