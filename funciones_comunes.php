<?php
/**
 * Funciones comunes para el proyecto de cuestionarios
 */

/**
 * Extrae el número de capítulo de un string que contiene "Capítulo X"
 * @param mixed $capitulo - Puede ser un número o un string
 * @return int - Número del capítulo
 */
function extraer_numero_capitulo($capitulo) {
    if (is_numeric($capitulo)) {
        return (int)$capitulo;
    }
    
    if (is_string($capitulo) && preg_match('/Capítulo (\d+)/', $capitulo, $matches)) {
        return (int)$matches[1];
    }
    
    // Casos especiales para capítulos con nombres diferentes
    if (is_string($capitulo)) {
        if (strpos($capitulo, 'Introducción') !== false) {
            return 0;
        }
        if (strpos($capitulo, 'siniestros') !== false || strpos($capitulo, 'Accidentes') !== false) {
            return 1;
        }
        if (strpos($capitulo, 'Señales') !== false || strpos($capitulo, 'reglas') !== false) {
            return 2;
        }
        if (strpos($capitulo, 'Condiciones del conductor') !== false || strpos($capitulo, 'condiciones especiales') !== false) {
            return 3;
        }
        if (strpos($capitulo, 'persona') !== false || strpos($capitulo, 'Usuarios') !== false) {
            return 4;
        }
        if (strpos($capitulo, 'técnicas') !== false || strpos($capitulo, 'mecánicos') !== false || strpos($capitulo, 'vehículo') !== false) {
            return 5;
        }
    }
    
    return 0; // Capítulo por defecto para casos no identificados
}

/**
 * Calcula la diferencia de tiempo en formato legible
 * @param int $from - Timestamp inicial
 * @param int $to - Timestamp final (por defecto el tiempo actual)
 * @return string - Diferencia de tiempo en formato legible
 */
function human_time_diff($from, $to = '') {
    if (empty($to)) {
        $to = time();
    }
    
    $diff = abs($to - $from);
    
    if ($diff < 60) {
        return 'menos de un minuto';
    } elseif ($diff < 3600) {
        $minutes = floor($diff / 60);
        return $minutes . ($minutes == 1 ? ' minuto' : ' minutos');
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return $hours . ($hours == 1 ? ' hora' : ' horas');
    } elseif ($diff < 2592000) {
        $days = floor($diff / 86400);
        return $days . ($days == 1 ? ' día' : ' días');
    } elseif ($diff < 31536000) {
        $months = floor($diff / 2592000);
        return $months . ($months == 1 ? ' mes' : ' meses');
    } else {
        $years = floor($diff / 31536000);
        return $years . ($years == 1 ? ' año' : ' años');
    }
}
?>
