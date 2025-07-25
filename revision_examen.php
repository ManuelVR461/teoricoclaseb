<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'preguntas.php';
include 'explicaciones.php'; // Incluir el nuevo archivo de explicaciones
include 'funciones_comunes.php'; // Incluir funciones comunes

// Redirigir si no hay un usuario o no se especifica un examen
if (!isset($_SESSION['usuario']) || !isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$usuario = $_SESSION['usuario'];
$examen_id = $_GET['id'];

$historial_file = 'examenes_historial.json';
$historial_completo = file_exists($historial_file) ? json_decode(file_get_contents($historial_file), true) : [];

// Verificar que el examen solicitado exista para el usuario
if (!isset($historial_completo[$usuario][$examen_id])) {
    die('El examen solicitado no existe o no tienes permiso para verlo.');
}

$examen = $historial_completo[$usuario][$examen_id];
$fecha = new DateTime($examen['fecha']);
$score = $examen['score'];
$total_preguntas = $examen['total_preguntas'];
$preguntas_seleccionadas = $examen['preguntas_seleccionadas'];
$respuestas_usuario = $examen['respuestas_usuario'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión del Examen - <?php echo $fecha->format('d/m/Y'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="card shadow text-center">
            <div class="card-header">
                <h2>Revisión del Examen</h2>
                <p class="lead">Realizado el <?php echo $fecha->format('d/m/Y \a \l\a\s H:i'); ?></p>
            </div>
            <div class="card-body">
                <h3 class="card-title">Obtuviste <?php echo $score; ?> de <?php echo $total_preguntas; ?> respuestas correctas.</h3>
                <p class="lead">Puntaje: <?php echo round(($score / $total_preguntas) * 100); ?>%</p>
            </div>
        </div>

        <hr class="my-4">

        <h2 class="mt-4 text-center">Detalle de Respuestas</h2>

        <?php foreach ($preguntas_seleccionadas as $index => $id_pregunta):
            $pregunta_data = $preguntas[$id_pregunta];
            $respuesta_usuario = $respuestas_usuario[$id_pregunta] ?? 'No respondida';
            $es_correcta = ($respuesta_usuario == $pregunta_data['correcta']);
            $explicacion_id = $pregunta_data['explicacion_id'] ?? null;
            $explicacion_data = ($explicacion_id && isset($explicaciones[$explicacion_id])) ? $explicaciones[$explicacion_id] : null;
        ?>
            <div class="card mt-3 shadow-sm <?php echo $es_correcta ? 'border-success' : 'border-danger'; ?>">
                 <div class="card-header">
                    <strong>Pregunta <?php echo $index + 1; ?>: <?php echo htmlspecialchars($pregunta_data['capitulo']); ?></strong>
                </div>
                <div class="card-body">
                    <p class="fw-bold"><?php echo htmlspecialchars($pregunta_data['pregunta']); ?></p>
                    
                    <?php if ($es_correcta): ?>
                        <p class="text-success"><strong>✓ Correcto.</strong> Tu respuesta: "<?php echo htmlspecialchars($pregunta_data['alternativas'][$respuesta_usuario]); ?>"</p>
                    <?php else: ?>
                        <p class="text-danger"><strong>✗ Incorrecto.</strong> Tu respuesta fue: "<?php echo htmlspecialchars($pregunta_data['alternativas'][$respuesta_usuario] ?? 'Ninguna'); ?>"</p>
                        <p class="text-info"><strong>Respuesta correcta:</strong> "<?php echo htmlspecialchars($pregunta_data['alternativas'][$pregunta_data['correcta']]); ?>"</p>
                        
                        <?php if ($explicacion_data): ?>
                        <div class="alert alert-warning mt-3">
                            <h5 class="alert-heading"><?php echo htmlspecialchars($explicacion_data['titulo']); ?></h5>
                            <p><?php echo htmlspecialchars($explicacion_data['texto']); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if (isset($pregunta_data['pagina_pdf'])): ?>
                            <p class="text-muted small"><strong>Puedes repasar este tema en la página <?php echo $pregunta_data['pagina_pdf']; ?> del manual.</strong></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
        <div class="text-center my-4">
             <a href="historial.php" class="btn btn-secondary btn-lg">Volver al Historial</a>
             <a href="index.php" class="btn btn-primary btn-lg">Ir al Inicio</a>
        </div>
    </div>
</body>
</html>
