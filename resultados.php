<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'preguntas.php';
include 'funciones_comunes.php';

// Redirigir si no hay un usuario o un cuestionario en marcha
if (!isset($_SESSION['usuario']) || !isset($_SESSION['preguntas_seleccionadas'])) {
    header('Location: index.php');
    exit();
}

// Verificar si ya se procesaron los resultados para evitar duplicados
if (isset($_SESSION['resultados_procesados']) && $_SESSION['resultados_procesados'] === true) {
    // Si ya se procesaron, solo mostrar la página sin procesar de nuevo
    $procesamiento_completo = true;
} else {
    $procesamiento_completo = false;
    $_SESSION['resultados_procesados'] = true;
}

$usuario = $_SESSION['usuario'];
$respuestas_usuario = $_SESSION['respuestas_usuario'];
$preguntas_seleccionadas = $_SESSION['preguntas_seleccionadas'];
$score = $_SESSION['score'];
$total_preguntas = count($preguntas_seleccionadas);

// --- GUARDAR ESTADÍSTICAS POR CAPÍTULO ---
// Solo si no es un modo de práctica y no se ha procesado ya
if (!isset($_SESSION['modo_practica']) && !$procesamiento_completo) {
    $stats_file = 'estadisticas.json';
    $todas_estadisticas = json_decode(file_get_contents($stats_file), true);
    $estadisticas_usuario = $todas_estadisticas[$usuario] ?? [];

    // Inicializar el array para guardar las incorrectas por capítulo en la sesión
    if (!isset($_SESSION['respuestas_incorrectas_por_capitulo'])) {
        $_SESSION['respuestas_incorrectas_por_capitulo'] = [];
    }

    foreach ($preguntas_seleccionadas as $id_pregunta) {
        $pregunta_data = $preguntas[$id_pregunta];
        $respuesta_dada = $respuestas_usuario[$id_pregunta] ?? null;
        
        // Extraer el número del capítulo usando la función común
        $capitulo = extraer_numero_capitulo($pregunta_data['capitulo']);

        if (!isset($estadisticas_usuario[(string)$capitulo])) {
            $estadisticas_usuario[(string)$capitulo] = ['correctas' => 0, 'incorrectas' => 0];
        }
        if (!isset($_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo])) {
            $_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo] = [];
        }

        if ($respuesta_dada && $respuesta_dada == $pregunta_data['correcta']) {
            $estadisticas_usuario[(string)$capitulo]['correctas']++;
            // Si estaba marcada como incorrecta, la eliminamos
            $key = array_search($id_pregunta, $_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo]);
            if ($key !== false) {
                unset($_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo][$key]);
            }
        } else {
            $estadisticas_usuario[(string)$capitulo]['incorrectas']++;
            // Añadimos la pregunta al listado de incorrectas de ese capítulo
            if (!in_array($id_pregunta, $_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo])) {
                $_SESSION['respuestas_incorrectas_por_capitulo'][(string)$capitulo][] = $id_pregunta;
            }
        }
    }
    $todas_estadisticas[$usuario] = $estadisticas_usuario;
    $_SESSION['estadisticas'] = $estadisticas_usuario; // Actualizar la sesión también
    file_put_contents($stats_file, json_encode($todas_estadisticas, JSON_PRETTY_PRINT));
}


// --- GUARDAR INSTANTÁNEA DEL EXAMEN EN EL HISTORIAL ---
// Solo si no es un modo de práctica y no se ha procesado ya
if (!isset($_SESSION['modo_practica']) && !$procesamiento_completo) {
    $historial_file = 'examenes_historial.json';
    if (!file_exists($historial_file)) {
        file_put_contents($historial_file, json_encode([]));
    }
    $historial_completo = json_decode(file_get_contents($historial_file), true);

    $examen_actual = [
        'fecha' => date('Y-m-d H:i:s'),
        'score' => $score,
        'total_preguntas' => $total_preguntas,
        'preguntas_seleccionadas' => $preguntas_seleccionadas,
        'respuestas_usuario' => $respuestas_usuario
    ];

    if (!isset($historial_completo[$usuario])) {
        $historial_completo[$usuario] = [];
    }
    // Añadir el examen más reciente al principio del array
    array_unshift($historial_completo[$usuario], $examen_actual);

    file_put_contents($historial_file, json_encode($historial_completo, JSON_PRETTY_PRINT));
}

// Limpiar la variable de modo práctica al finalizar
if (isset($_SESSION['modo_practica'])) {
    unset($_SESSION['modo_practica']);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Cuestionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="card shadow text-center">
            <div class="card-header">
                <h2>Resultados Finales</h2>
            </div>
            <div class="card-body">
                <h3 class="card-title">Obtuviste <?php echo $score; ?> de <?php echo $total_preguntas; ?> respuestas correctas.</h3>
                <p class="lead">Puntaje: <?php echo round(($score / $total_preguntas) * 100); ?>%</p>
                <a href="index.php" class="btn btn-primary mt-3">Volver al Inicio</a>
                <a href="historial.php" class="btn btn-info mt-3">Ver Historial de Exámenes</a>
            </div>
        </div>

        <hr class="my-4">

        <h2 class="mt-4 text-center">Revisión de Respuestas</h2>

        <?php foreach ($_SESSION['preguntas_seleccionadas'] as $index => $id_pregunta):
            $pregunta_data = $preguntas[$id_pregunta];
            $respuesta_usuario = $respuestas_usuario[$id_pregunta] ?? 'No respondida';
            $es_correcta = ($respuesta_usuario == $pregunta_data['correcta']);
        ?>
            <div class="card mt-3 shadow-sm <?php echo $es_correcta ? 'border-success' : 'border-danger'; ?>">
                <div class="card-header">
                    <strong>Pregunta <?php echo $index + 1; ?></strong>
                </div>
                <div class="card-body">
                    <p class="fw-bold"><?php echo $pregunta_data['pregunta']; ?></p>
                    
                    <?php if ($es_correcta): ?>
                        <p class="text-success"><strong>✓ Correcto.</strong> Tu respuesta: "<?php echo htmlspecialchars($pregunta_data['alternativas'][$respuesta_usuario]); ?>"</p>
                    <?php else: ?>
                        <p class="text-danger"><strong>✗ Incorrecto.</strong> Tu respuesta fue: "<?php echo htmlspecialchars($pregunta_data['alternativas'][$respuesta_usuario] ?? 'Ninguna'); ?>"</p>
                        <p class="text-info"><strong>Respuesta correcta:</strong> "<?php echo htmlspecialchars($pregunta_data['alternativas'][$pregunta_data['correcta']]); ?>"</p>
                        <?php if (isset($pregunta_data['pagina_pdf'])): ?>
                            <p class="text-muted small"><strong>Puedes repasar este tema en la página <?php echo $pregunta_data['pagina_pdf']; ?> del manual (Capítulo <?php echo $pregunta_data['capitulo']; ?>).</strong></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
        <div class="text-center my-4">
             <a href="index.php" class="btn btn-primary btn-lg" onclick="limpiarSesion()">Volver al Inicio</a>
             <a href="historial.php" class="btn btn-info btn-lg">Ver Historial de Exámenes</a>
        </div>
    </div>

    <script>
    function limpiarSesion() {
        // Hacer una llamada AJAX para limpiar la sesión antes de redirigir
        fetch('<?php echo $_SERVER['PHP_SELF']; ?>?limpiar=1')
        .then(() => {
            window.location.href = 'index.php';
        });
    }
    </script>
</body>
</html>
<?php
// Solo limpiar si se solicita específicamente
if (isset($_GET['limpiar']) && $_GET['limpiar'] == '1') {
    unset($_SESSION['preguntas_seleccionadas'], $_SESSION['respuestas_usuario'], $_SESSION['score'], $_SESSION['pregunta_actual_idx'], $_SESSION['resultados_parciales'], $_SESSION['resultados_procesados']);
    exit('OK');
}
?>