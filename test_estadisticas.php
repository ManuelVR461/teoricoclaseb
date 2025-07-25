<?php
// Script para probar las estadísticas consolidadas
include 'funciones_comunes.php';
include 'capitulos.php';

echo "<h2>Prueba de Estadísticas Consolidadas</h2>\n";

// Simular carga de datos
$stats_file = 'estadisticas.json';
$todas_estadisticas = json_decode(file_get_contents($stats_file), true);
$usuario = 'manuel';

echo "<h3>Datos originales del archivo JSON:</h3>\n";
if (isset($todas_estadisticas[$usuario])) {
    foreach ($todas_estadisticas[$usuario] as $cap => $datos) {
        echo "Capítulo '$cap': {$datos['correctas']} correctas, {$datos['incorrectas']} incorrectas<br>\n";
    }
}

echo "<h3>Datos consolidados:</h3>\n";
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
        echo "Consolidando '$capitulo' -> Capítulo $numero_capitulo<br>\n";
    }
    
    echo "<h3>Resultado final (solo capítulos con datos):</h3>\n";
    foreach ($estadisticas_consolidadas as $cap => $datos) {
        if ($datos['correctas'] > 0 || $datos['incorrectas'] > 0) {
            $titulo = $titulos_capitulos[$cap] ?? 'Capítulo Desconocido';
            $total = $datos['correctas'] + $datos['incorrectas'];
            $porcentaje = $total > 0 ? round(($datos['correctas'] / $total) * 100) : 0;
            echo "<strong>Capítulo $cap ($titulo):</strong> {$datos['correctas']} correctas, {$datos['incorrectas']} incorrectas ($porcentaje%)<br>\n";
        }
    }
}
?>
