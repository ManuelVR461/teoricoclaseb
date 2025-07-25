<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'capitulos.php'; // Cargar los títulos de los capítulos
require_once 'preguntas.php'; // Cargar las preguntas para buscar las incorrectas
require_once 'funciones_comunes.php'; // Cargar funciones comunes

// Si no hay estadísticas, redirigir al inicio
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

$usuario = $_SESSION['usuario'];

// Cargar estadísticas del archivo JSON
$stats_file = 'estadisticas.json';
$todas_estadisticas = [];
if (file_exists($stats_file)) {
    $todas_estadisticas = json_decode(file_get_contents($stats_file), true);
}

// Consolidar estadísticas del usuario usando la función común
$estadisticas_consolidadas = [];
if (isset($todas_estadisticas[$usuario])) {
    // Inicializar todos los capítulos
    for ($i = 0; $i <= 7; $i++) {
        $estadisticas_consolidadas[$i] = ['correctas' => 0, 'incorrectas' => 0];
    }
    
    // Consolidar datos existentes
    foreach ($todas_estadisticas[$usuario] as $capitulo => $datos) {
        $numero_capitulo = extraer_numero_capitulo($capitulo);
        $estadisticas_consolidadas[$numero_capitulo]['correctas'] += $datos['correctas'];
        $estadisticas_consolidadas[$numero_capitulo]['incorrectas'] += $datos['incorrectas'];
    }
    
    // Filtrar solo capítulos con datos
    $estadisticas = array_filter($estadisticas_consolidadas, function($datos) {
        return $datos['correctas'] > 0 || $datos['incorrectas'] > 0;
    });
    
    $no_stats = empty($estadisticas);
} else {
    $no_stats = true;
    $estadisticas = [];
}

// Reconstruir preguntas incorrectas desde el historial de exámenes
if (!isset($_SESSION['respuestas_incorrectas_por_capitulo']) || empty($_SESSION['respuestas_incorrectas_por_capitulo'])) {
    $_SESSION['respuestas_incorrectas_por_capitulo'] = [];
    
    // Cargar historial de exámenes
    $historial_file = 'examenes_historial.json';
    if (file_exists($historial_file)) {
        $historial_completo = json_decode(file_get_contents($historial_file), true);
        
        if (isset($historial_completo[$usuario])) {
            // Procesar los últimos 5 exámenes para obtener preguntas incorrectas
            $examenes_recientes = array_slice($historial_completo[$usuario], 0, 5);
            
            foreach ($examenes_recientes as $examen) {
                foreach ($examen['preguntas_seleccionadas'] as $id_pregunta) {
                    $respuesta_usuario = $examen['respuestas_usuario'][$id_pregunta] ?? null;
                    
                    if (isset($preguntas[$id_pregunta])) {
                        $pregunta_data = $preguntas[$id_pregunta];
                        $numero_capitulo = extraer_numero_capitulo($pregunta_data['capitulo']);
                        
                        // Si la respuesta es incorrecta
                        if ($respuesta_usuario && $respuesta_usuario != $pregunta_data['correcta']) {
                            if (!isset($_SESSION['respuestas_incorrectas_por_capitulo'][$numero_capitulo])) {
                                $_SESSION['respuestas_incorrectas_por_capitulo'][$numero_capitulo] = [];
                            }
                            
                            // Agregar solo si no está ya en la lista
                            if (!in_array($id_pregunta, $_SESSION['respuestas_incorrectas_por_capitulo'][$numero_capitulo])) {
                                $_SESSION['respuestas_incorrectas_por_capitulo'][$numero_capitulo][] = $id_pregunta;
                            }
                        }
                    }
                }
            }
        }
    }
}

// Recopilar todas las preguntas incorrectas de todos los capítulos
$todas_las_incorrectas = [];
if(isset($_SESSION['respuestas_incorrectas_por_capitulo'])) {
    foreach ($_SESSION['respuestas_incorrectas_por_capitulo'] as $cap => $preguntas_incorrectas) {
        // Convertir el capítulo a número si es necesario
        $numero_cap = extraer_numero_capitulo($cap);
        if (!empty($preguntas_incorrectas)) {
            $todas_las_incorrectas = array_merge($todas_las_incorrectas, $preguntas_incorrectas);
        }
    }
}
$todas_las_incorrectas = array_unique($todas_las_incorrectas);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Estadísticas de Práctica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h2>Mis Estadísticas</h2>
            </div>
            <div class="card-body">
                <?php if ($no_stats): ?>
                    <div class="alert alert-info text-center">
                        <p class="lead">Aún no has completado ningún cuestionario.</p>
                        <p>¡Realiza un test para ver tus estadísticas aquí!</p>
                        <a href="index.php" class="btn btn-primary mt-2">Comenzar un Test</a>
                    </div>
                <?php else: ?>
                    <p class="text-center lead mb-4">Aquí puedes ver tu rendimiento por capítulo. ¡Concéntrate en los que tienes más respuestas incorrectas!</p>
                    
                    <?php 
                    // Ordenar las estadísticas por número de capítulo
                    ksort($estadisticas);
                    ?>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Capítulo</th>
                                    <th>Correctas</th>
                                    <th>Incorrectas</th>
                                    <th>Rendimiento</th>
                                    <th>Punto de Enfoque</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($estadisticas as $capitulo => $datos):
                                    $total = $datos['correctas'] + $datos['incorrectas'];
                                    $rendimiento = ($total > 0) ? round(($datos['correctas'] / $total) * 100) : 0;
                                    $titulo_capitulo = $titulos_capitulos[$capitulo] ?? 'Capítulo Desconocido';

                                    $enfoque_clase = '';
                                    $enfoque_texto = 'Buen trabajo';
                                    if ($rendimiento < 50) {
                                        $enfoque_clase = 'table-danger';
                                        $enfoque_texto = 'Necesita mejorar';
                                    } elseif ($rendimiento < 75) {
                                        $enfoque_clase = 'table-warning';
                                        $enfoque_texto = 'Regular';
                                    }
                                ?>
                                <tr class="<?php echo $enfoque_clase; ?>">
                                    <td>
                                        <strong>Capítulo <?php echo $capitulo; ?></strong><br>
                                        <small><?php echo $titulo_capitulo; ?></small>
                                    </td>
                                    <td class="text-success fw-bold"><?php echo $datos['correctas']; ?></td>
                                    <td class="text-danger fw-bold"><?php echo $datos['incorrectas']; ?></td>
                                    <td>
                                        <div class="progress" style="height: 25px;">
                                            <div class="progress-bar <?php echo ($rendimiento < 50) ? 'bg-danger' : (($rendimiento < 75) ? 'bg-warning' : 'bg-success'); ?>" role="progressbar" style="width: <?php echo $rendimiento; ?>%;" aria-valuenow="<?php echo $rendimiento; ?>" aria-valuemin="0" aria-valuemax="100">
                                                <strong class="text-dark"><?php echo $rendimiento; ?>%</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong><?php echo $enfoque_texto; ?></strong></td>
                                    <td>
                                        <?php if ($datos['incorrectas'] > 0): ?>
                                            <a href="cuestionario.php?modo=practicar_incorrectas&capitulo=<?php echo $capitulo; ?>" class="btn btn-warning btn-sm" title="Practicar Incorrectas del Capítulo <?php echo $capitulo; ?>">
                                                <i class="bi bi-lightbulb"></i> Practicar
                                            </a>
                                        <?php else: ?>
                                            <span class="badge bg-success">¡Perfecto!</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-center">
                <a href="index.php" class="btn btn-primary"><i class="bi bi-house-door"></i> Volver al Inicio</a>
                <a href="historial.php" class="btn btn-secondary"><i class="bi bi-clock-history"></i> Ver Historial</a>
                <?php if (!$no_stats && !empty($todas_las_incorrectas)): ?>
                <a href="cuestionario.php?modo=practicar_todas_incorrectas" class="btn btn-danger"><i class="bi bi-exclamation-triangle"></i> Practicar todas las incorrectas</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
