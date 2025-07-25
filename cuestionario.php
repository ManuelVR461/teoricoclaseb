<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'preguntas.php';
include 'funciones_comunes.php';

// Redirigir si no hay un usuario o un cuestionario en marcha
$iniciando_practica = isset($_GET['modo']) && (str_starts_with($_GET['modo'], 'practicar_'));
if (!isset($_SESSION['usuario']) || (!isset($_POST['start']) && !isset($_SESSION['preguntas_seleccionadas']) && !$iniciando_practica)) {
    header('Location: index.php');
    exit();
}


// --- INICIALIZACIÓN DEL CUESTIONARIO ---

// Modo: Cuestionario completo (35 preguntas)
if (isset($_POST['start'])) {
    $preguntas_ids = array_keys($preguntas);
    shuffle($preguntas_ids);
    $_SESSION['preguntas_seleccionadas'] = array_slice($preguntas_ids, 0, 35);
    $_SESSION['pregunta_actual_idx'] = 0;
    $_SESSION['respuestas_usuario'] = [];
    $_SESSION['resultados_parciales'] = [];
    $_SESSION['score'] = 0;
}
// Modo: Práctica por capítulo
elseif (isset($_GET['capitulo']) && !isset($_GET['modo'])) {
    $capitulo = $_GET['capitulo'];
    $preguntas_capitulo = [];
    foreach ($preguntas as $id => $pregunta) {
        // Extraer el número del capítulo usando la función común
        $capitulo_pregunta = extraer_numero_capitulo($pregunta['capitulo']);
        
        if (isset($pregunta['capitulo']) && $capitulo_pregunta == $capitulo) {
            $preguntas_capitulo[] = $id;
        }
    }
    shuffle($preguntas_capitulo);
    $_SESSION['preguntas_seleccionadas'] = $preguntas_capitulo;
    $_SESSION['pregunta_actual_idx'] = 0;
    $_SESSION['respuestas_usuario'] = [];
    $_SESSION['resultados_parciales'] = [];
    $_SESSION['score'] = 0;
    $_SESSION['modo_practica'] = true; // Indicar que es práctica para no guardar en historial
    // Limpiar el parámetro GET para que no interfiera en las recargas
    header("Location: cuestionario.php");
    exit();
}
// Modo: Practicar solo las incorrectas de un capítulo
elseif (isset($_GET['modo']) && $_GET['modo'] == 'practicar_incorrectas' && isset($_GET['capitulo'])) {
    $capitulo = $_GET['capitulo'];
    
    // Verificar si hay preguntas incorrectas en la sesión para este capítulo, si no, cargarlas desde el historial
    if (!isset($_SESSION['respuestas_incorrectas_por_capitulo'][$capitulo]) || empty($_SESSION['respuestas_incorrectas_por_capitulo'][$capitulo])) {
        if (!isset($_SESSION['respuestas_incorrectas_por_capitulo'])) {
            $_SESSION['respuestas_incorrectas_por_capitulo'] = [];
        }
        
        // Cargar historial de exámenes para reconstruir preguntas incorrectas
        $historial_file = 'examenes_historial.json';
        if (file_exists($historial_file)) {
            $historial_completo = json_decode(file_get_contents($historial_file), true);
            $usuario = $_SESSION['usuario'];
            
            if (isset($historial_completo[$usuario])) {
                // Procesar los últimos 3 exámenes para obtener preguntas incorrectas
                $examenes_recientes = array_slice($historial_completo[$usuario], 0, 3);
                
                foreach ($examenes_recientes as $examen) {
                    foreach ($examen['preguntas_seleccionadas'] as $id_pregunta) {
                        $respuesta_usuario = $examen['respuestas_usuario'][$id_pregunta] ?? null;
                        
                        if (isset($preguntas[$id_pregunta])) {
                            $pregunta_data = $preguntas[$id_pregunta];
                            $numero_capitulo = extraer_numero_capitulo($pregunta_data['capitulo']);
                            
                            // Si la respuesta es incorrecta y es del capítulo solicitado
                            if ($respuesta_usuario && $respuesta_usuario != $pregunta_data['correcta'] && $numero_capitulo == $capitulo) {
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
    
    $preguntas_incorrectas = $_SESSION['respuestas_incorrectas_por_capitulo'][$capitulo] ?? [];
    
    if (empty($preguntas_incorrectas)) {
        // Si no hay incorrectas, volver a estadísticas
        header('Location: estadisticas.php');
        exit();
    }

    shuffle($preguntas_incorrectas);
    $_SESSION['preguntas_seleccionadas'] = $preguntas_incorrectas;
    $_SESSION['pregunta_actual_idx'] = 0;
    $_SESSION['respuestas_usuario'] = [];
    $_SESSION['resultados_parciales'] = [];
    $_SESSION['score'] = 0;
    $_SESSION['modo_practica'] = true; // Indicar que es práctica para no guardar en historial
    header("Location: cuestionario.php");
    exit();
}
// Modo: Practicar TODAS las incorrectas
elseif (isset($_GET['modo']) && $_GET['modo'] == 'practicar_todas_incorrectas') {
    // Verificar si hay preguntas incorrectas en la sesión, si no, cargarlas desde el historial
    if (!isset($_SESSION['respuestas_incorrectas_por_capitulo']) || empty($_SESSION['respuestas_incorrectas_por_capitulo'])) {
        $_SESSION['respuestas_incorrectas_por_capitulo'] = [];
        
        // Cargar historial de exámenes para reconstruir preguntas incorrectas
        $historial_file = 'examenes_historial.json';
        if (file_exists($historial_file)) {
            $historial_completo = json_decode(file_get_contents($historial_file), true);
            $usuario = $_SESSION['usuario'];
            
            if (isset($historial_completo[$usuario])) {
                // Procesar los últimos 3 exámenes para obtener preguntas incorrectas
                $examenes_recientes = array_slice($historial_completo[$usuario], 0, 3);
                
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
    
    $todas_las_incorrectas = [];
    if (isset($_SESSION['respuestas_incorrectas_por_capitulo'])) {
        foreach ($_SESSION['respuestas_incorrectas_por_capitulo'] as $preguntas_incorrectas) {
            $todas_las_incorrectas = array_merge($todas_las_incorrectas, $preguntas_incorrectas);
        }
    }
    $todas_las_incorrectas = array_unique($todas_las_incorrectas);

    if (empty($todas_las_incorrectas)) {
        header('Location: estadisticas.php');
        exit();
    }

    shuffle($todas_las_incorrectas);
    $_SESSION['preguntas_seleccionadas'] = $todas_las_incorrectas;
    $_SESSION['pregunta_actual_idx'] = 0;
    $_SESSION['respuestas_usuario'] = [];
    $_SESSION['resultados_parciales'] = [];
    $_SESSION['score'] = 0;
    $_SESSION['modo_practica'] = true; // Indicar que es práctica para no guardar en historial
    header("Location: cuestionario.php");
    exit();
}

// --- PROCESAR RESPUESTA ANTERIOR ---
if (isset($_POST['respuesta'])) {
    $pregunta_anterior_idx = $_SESSION['pregunta_actual_idx'];
    $id_pregunta_anterior = $_SESSION['preguntas_seleccionadas'][$pregunta_anterior_idx];
    $respuesta_usuario = $_POST['respuesta'];
    $respuesta_correcta = $preguntas[$id_pregunta_anterior]['correcta'];

    // Guardar la respuesta del usuario
    $_SESSION['respuestas_usuario'][$id_pregunta_anterior] = $respuesta_usuario;
    
    // Verificar si es correcta, actualizar puntaje y guardar resultado parcial
    if ($respuesta_usuario == $respuesta_correcta) {
        $_SESSION['score']++;
        $_SESSION['resultados_parciales'][$pregunta_anterior_idx] = 'correcta';
    } else {
        $_SESSION['resultados_parciales'][$pregunta_anterior_idx] = 'incorrecta';
    }
    
    // Pasar a la siguiente pregunta
    $_SESSION['pregunta_actual_idx']++;
}

// --- VERIFICAR SI EL CUESTIONARIO TERMINÓ ---
if ($_SESSION['pregunta_actual_idx'] >= count($_SESSION['preguntas_seleccionadas'])) {
    header('Location: resultados.php');
    exit();
}

// --- MOSTRAR PREGUNTA ACTUAL ---
$pregunta_actual_idx = $_SESSION['pregunta_actual_idx'];
$id_pregunta_actual = $_SESSION['preguntas_seleccionadas'][$pregunta_actual_idx];
$pregunta_data = $preguntas[$id_pregunta_actual];
$numero_pregunta = $pregunta_actual_idx + 1;
$total_preguntas = count($_SESSION['preguntas_seleccionadas']);
$resultados_parciales = $_SESSION['resultados_parciales'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta <?php echo $numero_pregunta; ?> de <?php echo $total_preguntas; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .progress-indicator {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-bottom: 1rem;
        }
        .progress-number {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            border: 1px solid #ddd;
        }
        .progress-number.current {
            border: 3px solid #0d6efd; /* Borde azul para la actual */
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container mt-4">

        <!-- Barra de Progreso -->
        <div class="progress-indicator">
            <?php for ($i = 0; $i < $total_preguntas; $i++):
                $clase_fondo = 'bg-light text-dark'; // Default
                $clase_actual = ($i == $pregunta_actual_idx) ? 'current' : '';

                if (isset($resultados_parciales[$i])) {
                    if ($resultados_parciales[$i] == 'correcta') {
                        $clase_fondo = 'bg-success text-white';
                    } else {
                        $clase_fondo = 'bg-danger text-white';
                    }
                }
            ?>
                <div class="progress-number <?php echo $clase_fondo; ?> <?php echo $clase_actual; ?>">
                    <?php echo $i + 1; ?>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Fin Barra de Progreso -->

        <div class="card shadow">
            <div class="card-header">
                <h3>Pregunta <?php echo $numero_pregunta; ?> de <?php echo $total_preguntas; ?></h3>
            </div>
            <div class="card-body">
                <p class="lead"><?php echo $pregunta_data['pregunta']; ?></p>
                <hr>
                <form action="cuestionario.php" method="post">
                    <div class="list-group">
                        <?php foreach ($pregunta_data['alternativas'] as $key => $alternativa): ?>
                            <label class="list-group-item list-group-item-action">
                                <input class="form-check-input me-2" type="radio" name="respuesta" value="<?php echo $key; ?>" required>
                                <?php echo $alternativa; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-primary">Siguiente Pregunta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>