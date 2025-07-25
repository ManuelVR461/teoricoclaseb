<?php
// Script para depurar el problema de las preguntas incorrectas
session_start();

echo "<h2>Debug: Preguntas Incorrectas por Capítulo</h2>\n";

if (isset($_SESSION['respuestas_incorrectas_por_capitulo'])) {
    echo "<h3>Contenido de \$_SESSION['respuestas_incorrectas_por_capitulo']:</h3>\n";
    foreach ($_SESSION['respuestas_incorrectas_por_capitulo'] as $cap => $preguntas) {
        echo "<strong>Capítulo $cap:</strong> ";
        if (empty($preguntas)) {
            echo "Sin preguntas incorrectas<br>\n";
        } else {
            echo implode(', ', $preguntas) . " (" . count($preguntas) . " preguntas)<br>\n";
        }
    }
    
    echo "<h3>Simulación de 'practicar todas las incorrectas':</h3>\n";
    $todas_las_incorrectas = [];
    foreach ($_SESSION['respuestas_incorrectas_por_capitulo'] as $preguntas_incorrectas) {
        $todas_las_incorrectas = array_merge($todas_las_incorrectas, $preguntas_incorrectas);
    }
    $todas_las_incorrectas = array_unique($todas_las_incorrectas);
    
    echo "Total de preguntas incorrectas únicas: " . count($todas_las_incorrectas) . "<br>\n";
    echo "IDs: " . implode(', ', $todas_las_incorrectas) . "<br>\n";
    
} else {
    echo "<p>No hay datos de preguntas incorrectas en la sesión.</p>\n";
}

echo "<h3>Estado actual de la sesión:</h3>\n";
echo "Usuario: " . ($_SESSION['usuario'] ?? 'No definido') . "<br>\n";
echo "Preguntas seleccionadas: " . (isset($_SESSION['preguntas_seleccionadas']) ? count($_SESSION['preguntas_seleccionadas']) : 'No definido') . "<br>\n";
echo "Pregunta actual índice: " . ($_SESSION['pregunta_actual_idx'] ?? 'No definido') . "<br>\n";
echo "Modo práctica: " . (isset($_SESSION['modo_practica']) ? 'Sí' : 'No') . "<br>\n";
?>
