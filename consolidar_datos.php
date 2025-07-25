<?php
// Script para limpiar y consolidar los archivos JSON
include 'funciones_comunes.php';

echo "<h2>Limpiando archivos JSON...</h2>\n";

// Leer el archivo de estadísticas actual
$estadisticas_file = 'estadisticas.json';
$todas_estadisticas = json_decode(file_get_contents($estadisticas_file), true);

// Nuevo array consolidado
$estadisticas_limpio = [];

foreach ($todas_estadisticas as $usuario => $datos) {
    $estadisticas_limpio[$usuario] = [];
    
    // Inicializar todos los capítulos en 0
    for ($i = 0; $i <= 7; $i++) {
        $estadisticas_limpio[$usuario][(string)$i] = ['correctas' => 0, 'incorrectas' => 0];
    }
    
    // Consolidar datos existentes
    foreach ($datos as $capitulo => $stats) {
        $numero_capitulo = extraer_numero_capitulo($capitulo);
        
        // Sumar estadísticas al capítulo correspondiente
        $estadisticas_limpio[$usuario][(string)$numero_capitulo]['correctas'] += $stats['correctas'];
        $estadisticas_limpio[$usuario][(string)$numero_capitulo]['incorrectas'] += $stats['incorrectas'];
        
        echo "Consolidando: '$capitulo' -> Capítulo $numero_capitulo (Correctas: {$stats['correctas']}, Incorrectas: {$stats['incorrectas']})<br>\n";
    }
}

// Guardar estadísticas consolidadas
file_put_contents('estadisticas_consolidado.json', json_encode($estadisticas_limpio, JSON_PRETTY_PRINT));

echo "<h3>Estadísticas consolidadas guardadas en 'estadisticas_consolidado.json'</h3>\n";

// Mostrar resumen final
foreach ($estadisticas_limpio as $usuario => $datos) {
    echo "<h4>Usuario: $usuario</h4>\n";
    foreach ($datos as $cap => $stats) {
        if ($stats['correctas'] > 0 || $stats['incorrectas'] > 0) {
            echo "Capítulo $cap: {$stats['correctas']} correctas, {$stats['incorrectas']} incorrectas<br>\n";
        }
    }
}

echo "<br><strong>Para aplicar los cambios, renombra 'estadisticas_consolidado.json' a 'estadisticas.json'</strong>\n";
?>
