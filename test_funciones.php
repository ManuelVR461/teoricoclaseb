<?php
// Archivo de prueba para verificar la función de conversión de capítulos
include 'funciones_comunes.php';

echo "<h2>Prueba de conversión de capítulos:</h2>\n";

$pruebas = [
    'Capítulo 1: Los siniestros de tránsito',
    'Capítulo 2: Señales y reglas del tránsito', 
    'Capítulo 3: Condiciones del conductor',
    'Capítulo 4: La persona en el tránsito',
    'Capítulo 5: Condiciones técnicas del vehículo',
    'Capítulo 0: Introducción a la conducción',
    'Capítulo 3: Conducción en condiciones especiales',
    'Capítulo 5: Aspectos mecánicos del vehículo',
    1,
    2,
    '3'
];

foreach ($pruebas as $prueba) {
    $resultado = extraer_numero_capitulo($prueba);
    echo "Input: '$prueba' -> Output: $resultado<br>\n";
}

echo "<h2>Prueba de human_time_diff:</h2>\n";
$tiempo_pasado = time() - 3661; // Hace más de una hora
echo "Hace " . human_time_diff($tiempo_pasado) . "<br>\n";

$tiempo_reciente = time() - 120; // Hace 2 minutos  
echo "Hace " . human_time_diff($tiempo_reciente) . "<br>\n";
?>
