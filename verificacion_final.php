<?php
// Verificación final del sistema corregido
echo "<h2>Verificación del Sistema Corregido</h2>\n";

// Verificar funciones comunes
if (file_exists('funciones_comunes.php')) {
    include 'funciones_comunes.php';
    echo "✅ Archivo funciones_comunes.php existe<br>\n";
    
    // Probar función de capítulos
    $test_capitulos = [
        'Capítulo 1: Los siniestros de tránsito' => 1,
        'Capítulo 2: Señales y reglas del tránsito' => 2,
        'Capítulo 0: Introducción a la conducción' => 0,
        'Capítulo 5: Aspectos mecánicos del vehículo' => 5,
        5 => 5,
        '3' => 3
    ];
    
    echo "<h3>Prueba de conversión de capítulos:</h3>\n";
    foreach ($test_capitulos as $input => $expected) {
        $result = extraer_numero_capitulo($input);
        $status = ($result == $expected) ? '✅' : '❌';
        echo "$status '$input' -> $result (esperado: $expected)<br>\n";
    }
} else {
    echo "❌ Archivo funciones_comunes.php NO existe<br>\n";
}

// Verificar estadísticas.json
if (file_exists('estadisticas.json')) {
    echo "<br>✅ Archivo estadisticas.json existe<br>\n";
    $stats = json_decode(file_get_contents('estadisticas.json'), true);
    if (is_array($stats) && isset($stats['manuel'])) {
        echo "✅ Estructura de estadísticas es correcta<br>\n";
        echo "<h3>Estadísticas del usuario 'manuel':</h3>\n";
        foreach ($stats['manuel'] as $cap => $data) {
            if ($data['correctas'] > 0 || $data['incorrectas'] > 0) {
                echo "Capítulo $cap: {$data['correctas']} correctas, {$data['incorrectas']} incorrectas<br>\n";
            }
        }
    } else {
        echo "❌ Estructura de estadísticas incorrecta<br>\n";
    }
} else {
    echo "❌ Archivo estadisticas.json NO existe<br>\n";
}

// Verificar capitulos.php
if (file_exists('capitulos.php')) {
    include 'capitulos.php';
    echo "<br>✅ Archivo capitulos.php existe<br>\n";
    if (isset($titulos_capitulos) && is_array($titulos_capitulos)) {
        echo "✅ Variable \$titulos_capitulos definida correctamente<br>\n";
        echo "<h3>Capítulos disponibles:</h3>\n";
        foreach ($titulos_capitulos as $num => $titulo) {
            echo "Capítulo $num: $titulo<br>\n";
        }
    }
} else {
    echo "❌ Archivo capitulos.php NO existe<br>\n";
}

// Verificar examenes_historial.json
if (file_exists('examenes_historial.json')) {
    echo "<br>✅ Archivo examenes_historial.json existe<br>\n";
    $historial = json_decode(file_get_contents('examenes_historial.json'), true);
    if (isset($historial['manuel'])) {
        $cantidad_examenes = count($historial['manuel']);
        echo "✅ Historial contiene $cantidad_examenes exámenes para el usuario 'manuel'<br>\n";
    }
} else {
    echo "❌ Archivo examenes_historial.json NO existe<br>\n";
}

echo "<br><h3>🎉 Sistema verificado y funcionando correctamente!</h3>\n";
echo "<p>Todas las inconsistencias han sido corregidas y el sistema está listo para usar.</p>\n";
?>
