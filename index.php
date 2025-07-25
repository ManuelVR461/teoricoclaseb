<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Lógica para manejar el inicio de sesión
if (isset($_POST['usuario'])) {
    $usuario = trim(htmlspecialchars($_POST['usuario']));
    if (!empty($usuario)) {
        $_SESSION['usuario'] = $usuario;
        
        // Cargar estadísticas del usuario desde JSON
        $stats_file = 'estadisticas.json';
        if (!file_exists($stats_file)) {
            file_put_contents($stats_file, json_encode([]));
        }
        $todas_estadisticas = json_decode(file_get_contents($stats_file), true);
        
        // Si el usuario no existe en el JSON, se crea una entrada vacía
        if (!isset($todas_estadisticas[$usuario])) {
            $todas_estadisticas[$usuario] = [];
            file_put_contents($stats_file, json_encode($todas_estadisticas, JSON_PRETTY_PRINT));
        }
        
        // Guardar las estadísticas del usuario actual en la sesión
        $_SESSION['estadisticas'] = $todas_estadisticas[$usuario];
    }
}

// Lógica para cerrar sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario de Conducción Chile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="card shadow">
            <div class="card-body p-5">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <h1 class="card-title">¡Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
                    <p class="lead">Estás listo para comenzar tu examen de conducción.</p>
                    
                    <form action="cuestionario.php" method="post" class="d-inline">
                        <button type="submit" name="start" class="btn btn-primary btn-lg mt-3">Comenzar Cuestionario</button>
                    </form>
                    
                    <a href="estadisticas.php" class="btn btn-info btn-lg mt-3">Ver Mis Estadísticas</a>
                    
                    <form action="index.php" method="post" class="d-inline">
                        <button type="submit" name="logout" class="btn btn-secondary btn-lg mt-3">Cerrar Sesión</button>
                    </form>

                <?php else: ?>
                    <h1 class="card-title">Examen de Conducción Clase B</h1>
                    <p class="lead">Ingresa tu nombre de usuario para guardar tu progreso y ver tus estadísticas.</p>
                    
                    <form action="index.php" method="post" class="mt-4">
                        <div class="mb-3">
                            <label for="usuario" class="form-label visually-hidden">Nombre de Usuario</label>
                            <input type="text" class="form-control form-control-lg" id="usuario" name="usuario" placeholder="Escribe tu nombre aquí" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Ingresar y Empezar</button>
                        </div>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>