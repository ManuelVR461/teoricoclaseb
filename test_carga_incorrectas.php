<?php
// Script de prueba para verificar la carga de preguntas incorrectas desde el historial
include 'preguntas.php';
include 'funciones_comunes.php';

echo "<h2>Prueba de Carga de Preguntas Incorrectas desde Historial</h2>\n";

$usuario = 'manuel';
$historial_file = 'examenes_historial.json';

if (file_exists($historial_file)) {
    $historial_completo = json_decode(file_get_contents($historial_file), true);
    
    if (isset($historial_completo[$usuario])) {
        echo "<h3>Exámenes encontrados: " . count($historial_completo[$usuario]) . "</h3>\n";
        
        // Simular el proceso de reconstrucción
        $respuestas_incorrectas_por_capitulo = [];
        $examenes_recientes = array_slice($historial_completo[$usuario], 0, 3);
        
        echo "<h3>Procesando últimos " . count($examenes_recientes) . " exámenes:</h3>\n";
        
        foreach ($examenes_recientes as $idx => $examen) {
            echo "<h4>Examen " . ($idx + 1) . " - Fecha: {$examen['fecha']}</h4>\n";
            $incorrectas_examen = 0;
            
            foreach ($examen['preguntas_seleccionadas'] as $id_pregunta) {
                $respuesta_usuario = $examen['respuestas_usuario'][$id_pregunta] ?? null;
                
                if (isset($preguntas[$id_pregunta])) {
                    $pregunta_data = $preguntas[$id_pregunta];
                    $numero_capitulo = extraer_numero_capitulo($pregunta_data['capitulo']);
                    
                    // Si la respuesta es incorrecta
                    if ($respuesta_usuario && $respuesta_usuario != $pregunta_data['correcta']) {
                        if (!isset($respuestas_incorrectas_por_capitulo[$numero_capitulo])) {
                            $respuestas_incorrectas_por_capitulo[$numero_capitulo] = [];
                        }
                        
                        // Agregar solo si no está ya en la lista
                        if (!in_array($id_pregunta, $respuestas_incorrectas_por_capitulo[$numero_capitulo])) {
                            $respuestas_incorrectas_por_capitulo[$numero_capitulo][] = $id_pregunta;
                            $incorrectas_examen++;
                        }
                    }
                }
            }
            echo "Preguntas incorrectas encontradas en este examen: $incorrectas_examen<br>\n";
        }
        
        echo "<h3>Resumen final de preguntas incorrectas por capítulo:</h3>\n";
        $total_incorrectas = 0;
        
        foreach ($respuestas_incorrectas_por_capitulo as $cap => $preguntas_ids) {
            echo "<strong>Capítulo $cap:</strong> " . count($preguntas_ids) . " preguntas incorrectas (IDs: " . implode(', ', $preguntas_ids) . ")<br>\n";
            $total_incorrectas += count($preguntas_ids);
        }
        
        echo "<h3>Total de preguntas incorrectas únicas: $total_incorrectas</h3>\n";
        
        // Simular "todas las incorrectas"
        $todas_las_incorrectas = [];
        foreach ($respuestas_incorrectas_por_capitulo as $preguntas_incorrectas) {
            $todas_las_incorrectas = array_merge($todas_las_incorrectas, $preguntas_incorrectas);
        }
        $todas_las_incorrectas = array_unique($todas_las_incorrectas);
        
        echo "<h3>Para 'practicar todas las incorrectas': " . count($todas_las_incorrectas) . " preguntas</h3>\n";
        echo "IDs: " . implode(', ', $todas_las_incorrectas) . "<br>\n";
        
    } else {
        echo "<p>No se encontraron exámenes para el usuario '$usuario'</p>\n";
    }
} else {
    echo "<p>Archivo de historial no encontrado</p>\n";
}
?>
