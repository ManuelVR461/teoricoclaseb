<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'preguntas.php';
include 'funciones_comunes.php';

// Redirigir si no hay un usuario
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

$usuario = $_SESSION['usuario'];
$historial_file = 'examenes_historial.json';
$historial_completo = file_exists($historial_file) ? json_decode(file_get_contents($historial_file), true) : [];
$historial_usuario = $historial_completo[$usuario] ?? [];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Exámenes - <?php echo htmlspecialchars($usuario); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h2>Historial de Exámenes de <?php echo htmlspecialchars($usuario); ?></h2>
            </div>
            <div class="card-body">
                <?php if (empty($historial_usuario)): ?>
                    <div class="alert alert-info text-center">
                        <p class="lead">Aún no has completado ningún examen.</p>
                        <p>Tu historial aparecerá aquí después de que finalices tu primer cuestionario.</p>
                    </div>
                <?php else: ?>
                    <div class="list-group">
                        <?php foreach ($historial_usuario as $index => $examen): 
                            $fecha = new DateTime($examen['fecha']);
                            $porcentaje = round(($examen['score'] / $examen['total_preguntas']) * 100);
                            $clase_resultado = $porcentaje >= 85 ? 'text-success' : 'text-danger';
                        ?>
                            <a href="revision_examen.php?id=<?php echo $index; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Examen del <?php echo $fecha->format('d/m/Y \a \l\a\s H:i'); ?></h5>
                                    <small>Hace <?php echo human_time_diff(strtotime($examen['fecha']), time()); ?></small>
                                </div>
                                <p class="mb-1">Resultado: <strong><?php echo $examen['score']; ?> / <?php echo $examen['total_preguntas']; ?> correctas</strong></p>
                                <small class="<?php echo $clase_resultado; ?> fw-bold">Puntaje: <?php echo $porcentaje; ?>%</small>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-center">
                <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
            </div>
        </div>
    </div>
</body>
</html>
