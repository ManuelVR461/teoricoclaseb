<?php
// Banco de preguntas y respuestas extraídas del "Libro para la Conducción en Chile".
// La clave de cada pregunta (ej: 1, 2, 3...) es su identificador único.

$preguntas = [
    1 => [
        'pregunta' => 'Según la Ley Tolerancia Cero, se considera conducción bajo la influencia del alcohol cuando el nivel de alcohol en la sangre es de:',
        'alternativas' => [
            'a' => '0.8 g/l o superior.',
            'b' => '0.31 a 0.79 g/l.',
            'c' => 'Inferior a 0.3 g/l.',
            'd' => 'Más de 1.0 g/l.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 50,
        'capitulo' => 'Capítulo 4: La persona en el tránsito',
        'explicacion_id' => 1
    ],
    2 => [
        'pregunta' => '¿Cuál es el límite máximo de velocidad permitido en zonas urbanas en Chile, salvo señalización distinta?',
        'alternativas' => [
            'a' => '50 km/h.',
            'b' => '60 km/h.',
            'c' => '70 km/h.',
            'd' => '80 km/h.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 63,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
        'explicacion_id' => 2
    ],
    3 => [
        'pregunta' => '¿Qué debe hacer si un semáforo está apagado?',
        'alternativas' => [
            'a' => 'Pasar rápidamente sin detenerse.',
            'b' => 'Dar preferencia a los peatones y aplicar norma de ceda el paso.',
            'c' => 'Ignorarlo y seguir avanzando como si estuviera en verde.',
            'd' => 'Esperar hasta que vuelva a funcionar.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 78,
        'capitulo' => 'Capítulo 2: Señales y reglas del tránsito',
        'explicacion_id' => 3
    ],
    4 => [
        'pregunta' => '¿Cuál es el mínimo de profundidad que deben tener las ranuras de un neumático?',
        'alternativas' => [
            'a' => '1.0 mm.',
            'b' => '1.5 mm.',
            'c' => '2.0 mm.',
            'd' => '2.5 mm.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 107,
        'capitulo' => 'Capítulo 5: Condiciones técnicas del vehículo',
        'explicacion_id' => 4
    ],
    5 => [
        'pregunta' => '¿Qué tipo de visión disminuye durante la conducción nocturna?',
        'alternativas' => [
            'a' => 'Visión periférica.',
            'b' => 'Visión directa.',
            'c' => 'Visión cromática.',
            'd' => 'Visión lateral.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 74,
        'capitulo' => 'Capítulo 3: Condiciones del conductor',
        'explicacion_id' => 5
    ],
    6 => [
        'pregunta' => '¿Cuál es la principal razón por la que se debe mantener distancia con el vehículo que va adelante?',
        'alternativas' => [
            'a' => 'Para poder adelantarlo con facilidad.',
            'b' => 'Para tener mejor visibilidad.',
            'c' => 'Para reaccionar a tiempo y evitar colisiones.',
            'd' => 'Para evitar que el otro vehículo se moleste.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 69,
        'capitulo' => 'Capítulo 2: Señales y reglas del tránsito',
        'explicacion_id' => 6
    ],
    7 => [
        'pregunta' => '¿Qué debe hacer si un peatón comienza a cruzar en un paso peatonal sin semáforo?',
        'alternativas' => [
            'a' => 'Disminuir la velocidad y seguir.',
            'b' => 'Detenerse y ceder el paso al peatón.',
            'c' => 'Hacer sonar la bocina para advertir.',
            'd' => 'Acelerar para pasar antes que cruce.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 66,
        'capitulo' => 'Capítulo 2: Señales y reglas del tránsito',
        'explicacion_id' => 7
    ],
    8 => [
        'pregunta' => '¿Cuál es el efecto del alcohol en la conducción incluso en pequeñas cantidades?',
        'alternativas' => [
            'a' => 'Mejora la concentración.',
            'b' => 'No afecta si se ha comido bien.',
            'c' => 'Reduce la capacidad de reacción y juicio.',
            'd' => 'Solo afecta si se bebe en exceso.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 51,
        'capitulo' => 'Capítulo 4: La persona en el tránsito',
        'explicacion_id' => 8
    ],

    9 => [
        'pregunta' => '¿Cuál de los siguientes elementos es obligatorio para todos los ocupantes del vehículo?',
        'alternativas' => [
            'a' => 'Usar cinturón de seguridad.',
            'b' => 'Llevar gafas de sol.',
            'c' => 'Tener licencia de conducir.',
            'd' => 'Usar ropa reflectante.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 29,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
        'explicacion_id' => 9
    ],

    10 => [
        'pregunta' => '¿Qué debe hacer si su vehículo sufre una falla en medio de la vía?',
        'alternativas' => [
            'a' => 'Dejar el vehículo y esperar ayuda dentro.',
            'b' => 'Seguir conduciendo lentamente hasta llegar a casa.',
            'c' => 'Encender las luces de emergencia y señalizar adecuadamente.',
            'd' => 'Tocar la bocina constantemente para advertir.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 87,
        'capitulo' => 'Capítulo 4: La persona en el tránsito',
        'explicacion_id' => 10
    ],

    11 => [
        'pregunta' => '¿Qué significa una línea continua al centro de la calzada?',
        'alternativas' => [
            'a' => 'Prohibido adelantar.',
            'b' => 'Se puede adelantar con precaución.',
            'c' => 'Solo se usa en caminos rurales.',
            'd' => 'Prohíbe el viraje en U únicamente.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 62,
         'capitulo' => 'Capítulo 2: Señales y reglas del tránsito',
        'explicacion_id' => 11
    ],

    12 => [
        'pregunta' => '¿Qué debe considerar al conducir con niebla intensa?',
        'alternativas' => [
            'a' => 'Usar luces altas para mayor visibilidad.',
            'b' => 'Usar luces bajas y aumentar la distancia de seguridad.',
            'c' => 'Conducir rápido para salir de la niebla pronto.',
            'd' => 'Apagar las luces para evitar reflejos.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 80,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 12
    ],
    13 => [
        'pregunta' => '¿Cuál de las siguientes conductas NO contribuye a una conducción segura?',
        'alternativas' => [
            'a' => 'Mantener una distancia adecuada con el vehículo delantero.',
            'b' => 'Usar el cinturón de seguridad en todo momento.',
            'c' => 'Hablar por teléfono con manos libres constantemente.',
            'd' => 'Respetar los límites de velocidad.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 35,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
    'explicacion_id' => 13
    ],

    14 => [
        'pregunta' => '¿Qué acción NO es recomendable al aproximarse a un paso peatonal sin semáforo?',
        'alternativas' => [
            'a' => 'Reducir la velocidad.',
            'b' => 'Estar atento a los peatones.',
            'c' => 'Acelerar para pasar antes que el peatón.',
            'd' => 'Detenerse si hay peatones esperando cruzar.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 14,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 14
    ],

    15 => [
        'pregunta' => '¿Cuál de estas afirmaciones sobre el uso del cinturón de seguridad es FALSA?',
        'alternativas' => [
            'a' => 'Reduce el riesgo de muerte en un accidente.',
            'b' => 'Debe usarse solo en carretera, no en ciudad.',
            'c' => 'Es obligatorio para todos los ocupantes del vehículo.',
            'd' => 'Debe ir bien ajustado al cuerpo.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 28,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
    'explicacion_id' => 15
    ],

    16 => [
        'pregunta' => '¿Cuál de estas acciones NO corresponde a una conducción defensiva?',
        'alternativas' => [
            'a' => 'Estar preparado ante errores de otros conductores.',
            'b' => 'Hacer señales claras antes de virar.',
            'c' => 'Asumir que los demás siempre respetan las normas.',
            'd' => 'Evitar distracciones dentro del vehículo.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 38,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
    'explicacion_id' => 16
    ],

    17 => [
        'pregunta' => '¿Cuál de los siguientes NO es un factor de riesgo al conducir de noche?',
        'alternativas' => [
            'a' => 'Reducción del campo visual.',
            'b' => 'Mayor cantidad de vehículos en circulación.',
            'c' => 'Deslumbramiento por luces de otros vehículos.',
            'd' => 'Fatiga o somnolencia del conductor.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 76,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 17
    ],

    18 => [
        'pregunta' => '¿Cuál es la distancia mínima recomendada al adelantar bajo lluvia intensa?',
        'alternativas' => [
            'a' => 'La equivalente a contar "uno, dos".',
            'b' => 'La distancia real no importa si frenas rápido.',
            'c' => 'La distancia no mayor a un largo de auto.',
            'd' => 'Ninguna de las anteriores.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 119,
        'capitulo' => 'Capítulo 4: La persona en el tránsito',
    'explicacion_id' => 18
    ],
    19 => [
        'pregunta' => '¿En qué situación NO se debe ingresar a una pista exclusiva para buses?',
        'alternativas' => [
            'a' => 'En zonas marcadas con línea discontinua permitida.',
            'b' => 'Para virar a la izquierda.',
            'c' => 'Cuando la pista está despejada.',
            'd' => 'Para prestar auxilio a un pasajero.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 121,
        'capitulo' => 'Capítulo 2: Señales y reglas del tránsito',
    'explicacion_id' => 19
    ],
    20 => [
        'pregunta' => '¿Cuál de estas acciones NO es parte de un examen teórico correcto?',
        'alternativas' => [
            'a' => 'No ajustar espejos antes de la marcha.',
            'b' => 'Señalizar adelantamiento.',
            'c' => 'Mantener ambas manos en el volante.',
            'd' => 'Frenar antes de virar si es necesario.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 89,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 20
    ],
    21 => [
        'pregunta' => '¿Cuál es el objetivo principal de los amortiguadores?',
        'alternativas' => [
            'a' => 'Reducir consumo de combustible.',
            'b' => 'Evitar que el vehículo rebote.',
            'c' => 'Aumentar la altura del auto al terreno.',
            'd' => 'Hacer el viaje más ruidoso.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 116,
        'capitulo' => 'Capítulo 5: Aspectos mecánicos del vehículo',
    'explicacion_id' => 21
    ],
    22 => [
        'pregunta' => '¿Cuál es la forma segura de frenar en una situación normal?',
        'alternativas' => [
            'a' => 'Pisando fuerte todo de una vez.',
            'b' => 'Frenando suave primero, luego más fuerte y aflojando al final.',
            'c' => 'Frenando intermitentemente.',
            'd' => 'Deteniendo repentinamente sin aviso.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 115,
        'capitulo' => 'Capítulo 5: Aspectos mecánicos del vehículo',
    'explicacion_id' => 22
    ],
    23 => [
        'pregunta' => '¿Cuál de las siguientes afirmaciones sobre neumáticos es FALSA?',
        'alternativas' => [
            'a' => 'Se revisa presión cuando están fríos.',
            'b' => 'Se inflan más si están calientes.',
            'c' => 'Pueden usarse cuando están lisos.',
            'd' => 'Presión incorrecta aumenta riesgo de accidente.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 108,
         'capitulo' => 'Capítulo 5: Aspectos mecánicos del vehículo',
    'explicacion_id' => 23
    ],
    24 => [
        'pregunta' => '¿Qué debe hacer si siente olor a gasolina dentro del vehículo?',
        'alternativas' => [
            'a' => 'Seguir conduciendo lentamente.',
            'b' => 'Abrir ventanas y continuar igual.',
            'c' => 'Detenerse y revisar origen del olor.',
            'd' => 'Encender la calefacción para dispersar el olor.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 6,
        'capitulo' => 'Capítulo 5: Aspectos mecánicos del vehículo',
    'explicacion_id' => 24
    ],
    25 => [
        'pregunta' => '¿Cuál es el riesgo de frenar en una curva sin visibilidad?',
        'alternativas' => [
            'a' => 'El vehículo puede deslizarse lateralmente.',
            'b' => 'Frena mejor que en línea recta.',
            'c' => 'No produce ningún riesgo adicional.',
            'd' => 'Mejora la adherencia de neumáticos.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 77,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 25
    ],
    26 => [
        'pregunta' => '¿Quién tiene prioridad si vira con luz verde al cruzar una ciclovía?',
        'alternativas' => [
            'a' => 'El conductor del automóvil.',
            'b' => 'El ciclista.',
            'c' => 'Quien esté en la ciclovía normalmente.',
            'd' => 'El que va más rápido.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 118,
         'capitulo' => 'Capítulo 2: La persona en el tránsito',
    'explicacion_id' => 26
    ],
    27 => [
        'pregunta' => '¿Cuál de estas conductas NO es un error grave en examen práctico?',
        'alternativas' => [
            'a' => 'No señalizar al cambiar de pista.',
            'b' => 'Circulación sin luces cuando son necesarias.',
            'c' => 'No detener completamente en señal PARE.',
            'd' => 'No ajustar pañuelos o espejo retrovisor.',
        ],
        'correcta' => 'd',
        'pagina_pdf' => 92,
         'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 27
    ],
    28 => [
        'pregunta' => '¿Qué se debe revisar antes de un viaje largo?',
        'alternativas' => [
            'a' => 'Nivel de líquido de frenos y presión de neumáticos.',
            'b' => 'Radio encendida.',
            'c' => 'Color del tapiz interior.',
            'd' => 'Solo el nivel de aceite.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 87,
        'capitulo' => 'Capítulo 5: Aspectos mecánicos del vehículo',
    'explicacion_id' => 28
    ],
    29 => [
        'pregunta' => '¿En qué caso no se puede adelantar por la derecha?',
        'alternativas' => [
            'a' => 'Cuando la vía es de doble sentido.',
            'b' => 'En una autopista con tres pistas.',
            'c' => 'Cuando otro vehículo ya está adelantando.',
            'd' => 'Nunca permitido adelantar por derecha en ciudad.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 14,
        'capitulo' => 'Capítulo 2: La persona en el tránsito',
    'explicacion_id' => 29
    ],
    30 => [
        'pregunta' => '¿Cuál es la función del cinturón de seguridad y airbag frontal juntos?',
        'alternativas' => [
            'a' => 'Reduce lesiones graves en un 20 %.',
            'b' => 'No hay diferencia respecto a solo cinturón.',
            'c' => 'Reduce lesiones en un 70 %.',
            'd' => 'Solo sirve en colisiones traseras.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 30,
        'capitulo' => 'Capítulo 1: Los siniestros de tránsito',
    'explicacion_id' => 30
    ],
    31 => [
        'pregunta' => '¿Cuál NO es un factor de riesgo al conducir de noche?',
        'alternativas' => [
            'a' => 'Fatiga del conductor.',
            'b' => 'Mayor cantidad de vehículos en circulación.',
            'c' => 'Deslumbramiento.',
            'd' => 'Reducción del campo visual.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 76,
         'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 31
    ],
    32 => [
        'pregunta' => '¿Qué NO debes hacer si estás en una bajada y estacionas?',
        'alternativas' => [
            'a' => 'Girrar ruedas hacia la cuneta.',
            'b' => 'Dejar ruedas frontales rectas.',
            'c' => 'Poner freno de mano.',
            'd' => 'Apagar el motor.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 104,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 32
    ],
    33 => [
        'pregunta' => '¿Cuál distancia lateral mínima se debe dejar al adelantar a un ciclista?',
        'alternativas' => [
            'a' => '1 metro.',
            'b' => '1.5 metros.',
            'c' => 'Ancho de una puerta.',
            'd' => '2 metros.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 71,
        'capitulo' => 'Capítulo 2: La persona en el tránsito',
    'explicacion_id' => 33
    ],
    34 => [
        'pregunta' => '¿Qué indica una luz amarilla en un semáforo?',
        'alternativas' => [
            'a' => 'Puedes avanzar con precaución.',
            'b' => 'Se aproxima la luz roja.',
            'c' => 'Solo puedes girar.',
            'd' => 'La vía es exclusiva.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 78,
         'capitulo' => 'Capítulo 2: La persona en el tránsito',
    'explicacion_id' => 34
    ],
    35 => [
        'pregunta' => '¿Qué nivel de alcohol en sangre impone sanción según Ley Tolerancia Cero?',
        'alternativas' => [
            'a' => 'Inferior a 0.3 g/l.',
            'b' => 'Entre 0.31 y 0.79 g/l.',
            'c' => '0.8 g/l o más.',
            'd' => 'Ninguno de los anteriores.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 50,
        'capitulo' => 'Capítulo 0: Introducción',
    'explicacion_id' => 35
    ],
    36 => [
        'pregunta' => '¿Cuál es el probable resultado de atropellar a un peatón a 65 km/h?',
        'alternativas' => [
            'a' => 'Lesiones menores.',
            'b' => 'Supervivencia en 50 %.',
            'c' => 'Alta probabilidad de muerte.',
            'd' => 'Solo daño de vehículo.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 8,
        'capitulo' => 'Capítulo 0: Introducción',
    'explicacion_id' => 36
    ],
    37 => [
        'pregunta' => '¿Cuál NO contribuye a una conducción defensiva?',
        'alternativas' => [
            'a' => 'Asumir que otros respetarán las normas.',
            'b' => 'Anticiparse ante errores ajenos.',
            'c' => 'Evitar distracciones.',
            'd' => 'Señalizar adecuadamente.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 38,
        'capitulo' => 'Capítulo 1: La persona en el tránsito',
    'explicacion_id' => 37
    ],
    38 => [
        'pregunta' => '¿Cuándo usar luces de emergencia (warning)?',
        'alternativas' => [
            'a' => 'Cuando está en pana obstruyendo tránsito.',
            'b' => 'En semáforo en verde.',
            'c' => 'Al estacionar.',
            'd' => 'Cuando acelera en pendiente.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 12,
         'capitulo' => 'Capítulo 4: Señales y normas',
    'explicacion_id' => 38
    ],
    39 => [
        'pregunta' => '¿Cuál es la mejor forma de conducir con niebla densa?',
        'alternativas' => [
            'a' => 'Luces altas y velocidad moderada.',
            'b' => 'Luces bajas, reducir velocidad y mantener distancia.',
            'c' => 'Luces intermitentes y frenar bruscamente.',
            'd' => 'Apagar luces para no reflejar.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 80,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 39
    ],
    40 => [
        'pregunta' => '¿Cuál es la capacidad máxima de pasajeros excluido conductor para licencia Clase B?',
        'alternativas' => [
            'a' => '5 personas.',
            'b' => '7 personas.',
            'c' => '9 personas.',
            'd' => '11 personas.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 2,
         'capitulo' => 'Capítulo 0: Introducción',
    'explicacion_id' => 40
    ],
    41 => [
        'pregunta' => '¿Cuál NO es un factor de riesgo al conducir con cansancio?',
        'alternativas' => [
            'a' => 'Bostezar frecuentemente.',
            'b' => 'Mala concentración.',
            'c' => 'Reducción del tiempo de reacción.',
            'd' => 'Mayor atención del conductor.',
        ],
        'correcta' => 'd',
        'pagina_pdf' => 77,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 41
    ],
    42 => [
        'pregunta' => '¿Qué se considera un error leve en examen práctico?',
        'alternativas' => [
            'a' => 'No identificar mandos del vehículo.',
            'b' => 'No señalizar al cambiar de pista.',
            'c' => 'No detenerse en pare.',
            'd' => 'Circular sin luces cuando son necesarias.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 92,
        'capitulo' => 'Capítulo 3: Conducción en condiciones especiales',
    'explicacion_id' => 42
    ],


    43 => [
        'pregunta' => '¿Cuál es la forma correcta de actuar si un ciclista cruza repentinamente?',
        'alternativas' => [
            'a' => 'Tocar la bocina para que se apure.',
            'b' => 'Frenar lo más suavemente posible y estar atento.',
            'c' => 'Acelerar para pasar antes.',
            'd' => 'Virar bruscamente para evitarlo.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 71,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 43
    ],
    44 => [
        'pregunta' => '¿Cuál de estos documentos NO es obligatorio llevar al conducir?',
        'alternativas' => [
            'a' => 'Permiso de circulación.',
            'b' => 'Certificado de nacimiento.',
            'c' => 'Licencia de conducir.',
            'd' => 'Revisión técnica vigente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 5,
         'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 44
    ],
    45 => [
        'pregunta' => '¿Qué indica una luz roja intermitente?',
        'alternativas' => [
            'a' => 'Paso libre si no hay peatones.',
            'b' => 'Avanzar con precaución.',
            'c' => 'Obligación de detenerse completamente.',
            'd' => 'Prohibido estacionar.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 63,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 45
    ],
    46 => [
        'pregunta' => '¿Qué elemento es parte de la seguridad activa del vehículo?',
        'alternativas' => [
            'a' => 'Airbag.',
            'b' => 'Frenos ABS.',
            'c' => 'Cinturón de seguridad.',
            'd' => 'Apoyacabezas.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 27,
        'capitulo' => 'Capítulo 1: Conducción responsable y seguridad vial',
    'explicacion_id' => 46
    ],
    47 => [
        'pregunta' => '¿Cuál es la sanción por conducir con 0.9 g/l de alcohol en sangre?',
        'alternativas' => [
            'a' => 'Conducción bajo influencia del alcohol.',
            'b' => 'Multa leve.',
            'c' => 'Conducción en estado de ebriedad.',
            'd' => 'No hay sanción si no hay accidente.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 50,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 47
    ],
    48 => [
        'pregunta' => '¿Qué significa esta señal: triángulo rojo con borde rojo, fondo blanco?',
        'alternativas' => [
            'a' => 'PARE.',
            'b' => 'CEDA EL PASO.',
            'c' => 'ADVERTENCIA.',
            'd' => 'PROHIBIDO VIRAR.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 58,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 48
    ],
    49 => [
        'pregunta' => '¿Qué debe hacer si sufre aquaplaning?',
        'alternativas' => [
            'a' => 'Frenar bruscamente.',
            'b' => 'Soltar el acelerador y no girar bruscamente.',
            'c' => 'Virar rápidamente para recuperar el control.',
            'd' => 'Acelerar suavemente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 80,
        'capitulo' => 'Capítulo 4: Conducción en distintas vías',
    'explicacion_id' => 49
    ],
    50 => [
        'pregunta' => '¿Qué NO es una obligación del conductor?',
        'alternativas' => [
            'a' => 'Auxiliar a las víctimas de un accidente.',
            'b' => 'Conducir descalzo para mayor sensibilidad.',
            'c' => 'Usar cinturón de seguridad.',
            'd' => 'Respetar los límites de velocidad.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 7,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 50
    ],
    51 => [
        'pregunta' => '¿En qué situación está permitido el uso del teléfono celular al conducir?',
        'alternativas' => [
            'a' => 'Cuando el vehículo está detenido momentáneamente.',
            'b' => 'Cuando se usa un sistema manos libres.',
            'c' => 'Cuando hay poco tráfico.',
            'd' => 'Nunca está permitido.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 37,
        'capitulo' => 'Capítulo 1: Conducción responsable y seguridad vial',
    'explicacion_id' => 51
    ],
    52 => [
        'pregunta' => '¿Qué indica una línea discontinua en el centro de la calzada?',
        'alternativas' => [
            'a' => 'Se puede adelantar si es seguro.',
            'b' => 'Está prohibido adelantar.',
            'c' => 'Zona exclusiva para buses.',
            'd' => 'Fin de vía preferente.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 62,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 52
    ],
    53 => [
        'pregunta' => '¿Qué tipo de licencia permite conducir taxis, ambulancias y transporte escolar?',
        'alternativas' => [
            'a' => 'Clase B.',
            'b' => 'Clase A1.',
            'c' => 'Clase A2.',
            'd' => 'Clase C.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 2,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 53
    ],
    54 => [
        'pregunta' => '¿Cuándo se debe utilizar la bocina?',
        'alternativas' => [
            'a' => 'Para advertir un peligro inmediato.',
            'b' => 'Al saludar a un amigo.',
            'c' => 'En túneles para escuchar eco.',
            'd' => 'Para apurar al vehículo de adelante.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 69,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 54
    ],
    55 => [
        'pregunta' => '¿Qué hacer si un peatón cruza en un paso no habilitado?',
        'alternativas' => [
            'a' => 'Acelerar para evitar frenazos.',
            'b' => 'Detenerse y ceder el paso.',
            'c' => 'Ignorarlo si va distraído.',
            'd' => 'Hacer luces altas para advertirle.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 14,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 55
    ],
    56 => [
        'pregunta' => '¿Cuál es la mejor forma de enfrentar una curva cerrada?',
        'alternativas' => [
            'a' => 'Reducir velocidad antes de ingresar.',
            'b' => 'Frenar dentro de la curva.',
            'c' => 'Tomarla rápido para no desestabilizar el auto.',
            'd' => 'Usar luces de emergencia.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 77,
        'capitulo' => 'Capítulo 3: Técnicas de conducción',
    'explicacion_id' => 56
    ],
    57 => [
        'pregunta' => '¿Qué tipo de mantenimiento requiere revisar el nivel de aceite?',
        'alternativas' => [
            'a' => 'Correctivo.',
            'b' => 'Predictivo.',
            'c' => 'Preventivo.',
            'd' => 'De emergencia.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 108,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 57
    ],
    58 => [
        'pregunta' => '¿Qué significa una señal de color azul con una "P" blanca?',
        'alternativas' => [
            'a' => 'Zona de peligro.',
            'b' => 'Prohibido estacionar.',
            'c' => 'Estacionamiento permitido.',
            'd' => 'Zona de carga y descarga.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 56,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 58
    ],
    59 => [
        'pregunta' => '¿Cuál de los siguientes vehículos puede ser conducido con licencia Clase B?',
        'alternativas' => [
            'a' => 'Bus urbano.',
            'b' => 'Motocicleta.',
            'c' => 'Automóvil particular de hasta 9 asientos.',
            'd' => 'Camión de más de 3.500 kg.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 2,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 59
    ],
    60 => [
        'pregunta' => '¿Qué documento acredita que un vehículo cumple con normas de seguridad?',
        'alternativas' => [
            'a' => 'Certificado de nacimiento.',
            'b' => 'Permiso de circulación.',
            'c' => 'Revisión Técnica.',
            'd' => 'Padrón del vehículo.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 6,
         'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 60
    ],
    61 => [
        'pregunta' => '¿En qué momento debe detenerse ante un semáforo en amarillo fijo?',
        'alternativas' => [
            'a' => 'Cuando puede detenerse con seguridad.',
            'b' => 'Siempre debe pasar.',
            'c' => 'Solo si hay peatones.',
            'd' => 'Solo si es de noche.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 78,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 61
    ],
    62 => [
        'pregunta' => '¿Qué significa una señal con una flecha negra y fondo blanco en curva?',
        'alternativas' => [
            'a' => 'Advertencia de pendiente.',
            'b' => 'Indicación de dirección obligatoria.',
            'c' => 'Curva peligrosa.',
            'd' => 'Desvío obligatorio.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 58,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 62
    ],
    63 => [
        'pregunta' => '¿Qué acción es incorrecta durante un adelantamiento?',
        'alternativas' => [
            'a' => 'Señalizar antes de iniciar.',
            'b' => 'Aumentar velocidad para reducir tiempo de exposición.',
            'c' => 'Adelantar en curva sin visibilidad.',
            'd' => 'Volver a pista solo cuando vea el vehículo en el retrovisor.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 68,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 63
    ],
    64 => [
        'pregunta' => '¿Qué componente reduce la velocidad del vehículo al pisar el pedal de freno?',
        'alternativas' => [
            'a' => 'Caja de cambios.',
            'b' => 'Sistema de escape.',
            'c' => 'Sistema de frenos.',
            'd' => 'Transmisión.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 112,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 64
    ],
    65 => [
        'pregunta' => '¿Qué tipo de señal es una señal de "PARE"?',
        'alternativas' => [
            'a' => 'Informativa.',
            'b' => 'Preventiva.',
            'c' => 'Reglamentaria.',
            'd' => 'Transitoria.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 55,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 65
    ],
    66 => [
        'pregunta' => '¿Qué hacer si un vehículo de emergencia se aproxima con balizas y sirena?',
        'alternativas' => [
            'a' => 'Encender luces altas.',
            'b' => 'Disminuir velocidad pero continuar.',
            'c' => 'Detenerse y ceder el paso.',
            'd' => 'Aumentar velocidad para apartarse.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 90,
        'capitulo' => 'Capítulo 4: Conducción en condiciones especiales',
    'explicacion_id' => 66
    ],
    67 => [
        'pregunta' => '¿Qué pasa si los neumáticos tienen presión inferior a la recomendada?',
        'alternativas' => [
            'a' => 'Mejoran el frenado.',
            'b' => 'Disminuye consumo de combustible.',
            'c' => 'Aumenta el riesgo de reventón y desgaste.',
            'd' => 'Facilitan las curvas cerradas.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 108,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 67
    ],
    68 => [
        'pregunta' => '¿Qué es una detención obligatoria?',
        'alternativas' => [
            'a' => 'Una parada temporal voluntaria.',
            'b' => 'Frenar momentáneamente por congestión.',
            'c' => 'Detenerse completamente ante una señal o situación.',
            'd' => 'Parar por indicación de otro conductor.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 78,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 68
    ],
    69 => [
        'pregunta' => '¿Qué hacer si al conducir siente somnolencia?',
        'alternativas' => [
            'a' => 'Bajar la ventana y seguir.',
            'b' => 'Frenar bruscamente.',
            'c' => 'Buscar un lugar seguro y descansar.',
            'd' => 'Tomar café mientras conduce.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 76,
        'capitulo' => 'Capítulo 3: Factores de riesgo al conducir',
    'explicacion_id' => 69
    ],
    70 => [
        'pregunta' => '¿Cuál es el objetivo del ABS en el sistema de frenos?',
        'alternativas' => [
            'a' => 'Evitar bloqueo de ruedas.',
            'b' => 'Frenar más lentamente.',
            'c' => 'Mejorar rendimiento de motor.',
            'd' => 'Usar menos líquido de freno.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 112,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 70
    ],

    71 => [
        'pregunta' => '¿Qué documento acredita la propiedad de un vehículo?',
        'alternativas' => [
            'a' => 'Licencia de conducir.',
            'b' => 'Padrón del vehículo.',
            'c' => 'Permiso de circulación.',
            'd' => 'Revisión técnica.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 5,
        'capitulo' => 'Capítulo 0: Introducción a la conducción',
    'explicacion_id' => 71
    ],
    72 => [
        'pregunta' => '¿Qué significa una luz verde intermitente en un semáforo?',
        'alternativas' => [
            'a' => 'La luz verde está por terminar.',
            'b' => 'Puede avanzar sin precaución.',
            'c' => 'Debe detenerse inmediatamente.',
            'd' => 'Solo puede virar a la derecha.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 78,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 72
    ],
    73 => [
        'pregunta' => '¿Qué debe hacer al ingresar a una rotonda?',
        'alternativas' => [
            'a' => 'Entrar rápidamente sin mirar.',
            'b' => 'Ceder el paso a quienes vienen por la derecha.',
            'c' => 'Tener siempre la preferencia.',
            'd' => 'Dar paso a los vehículos que ya circulan en la rotonda.',
        ],
        'correcta' => 'd',
        'pagina_pdf' => 67,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 73
    ],
    74 => [
        'pregunta' => '¿Cuál de estos elementos forma parte de la seguridad pasiva?',
        'alternativas' => [
            'a' => 'Sistema de frenos ABS.',
            'b' => 'Airbags.',
            'c' => 'Dirección asistida.',
            'd' => 'Control de estabilidad.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 27,
        'capitulo' => 'Capítulo 1: Seguridad vial',
    'explicacion_id' => 74
    ],
    75 => [
        'pregunta' => '¿Qué NO se debe hacer en un paso ferroviario sin barrera?',
        'alternativas' => [
            'a' => 'Detenerse si se ve un tren acercándose.',
            'b' => 'Cruzar si hay espacio suficiente al otro lado.',
            'c' => 'Acelerar para pasar antes del tren.',
            'd' => 'Mirar a ambos lados antes de cruzar.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 68,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 75
    ],
    76 => [
        'pregunta' => '¿Qué indica una señal en forma de círculo rojo con una línea blanca horizontal?',
        'alternativas' => [
            'a' => 'Acceso permitido solo para vehículos pesados.',
            'b' => 'Acceso prohibido.',
            'c' => 'Zona escolar.',
            'd' => 'Estacionamiento permitido.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 56,
        'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 76
    ],
    77 => [
        'pregunta' => '¿Qué significa el término “punto ciego”?',
        'alternativas' => [
            'a' => 'Un lugar con poca luz.',
            'b' => 'Zona que no se ve con los espejos.',
            'c' => 'Lugar donde se permite estacionar.',
            'd' => 'Área exclusiva de ciclistas.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 39,
         'capitulo' => 'Capítulo 1: Seguridad vial',
    'explicacion_id' => 77
    ],
    78 => [
        'pregunta' => '¿Cuál es el efecto de circular con carga mal asegurada?',
        'alternativas' => [
            'a' => 'No hay riesgo si va despacio.',
            'b' => 'Puede caer y causar accidentes.',
            'c' => 'Reduce el consumo de combustible.',
            'd' => 'Aumenta la estabilidad del vehículo.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 91,
         'capitulo' => 'Capítulo 4: Conducción eficiente y responsable',
    'explicacion_id' => 78
    ],
    79 => [
        'pregunta' => '¿Qué hacer si al conducir el pedal del freno se siente muy blando?',
        'alternativas' => [
            'a' => 'Seguir conduciendo sin frenar.',
            'b' => 'Bombear el pedal varias veces y detenerse.',
            'c' => 'Usar freno de mano como freno principal.',
            'd' => 'Acelerar para evitar el frenado.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 113,
         'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 79
    ],
    80 => [
        'pregunta' => '¿Qué función cumple el líquido refrigerante?',
        'alternativas' => [
            'a' => 'Limpiar el motor.',
            'b' => 'Evitar sobrecalentamiento del motor.',
            'c' => 'Lubricar los frenos.',
            'd' => 'Aumentar la velocidad.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 109,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 80
    ],
    81 => [
        'pregunta' => '¿Cuál es la consecuencia de circular con luces quemadas en la noche?',
        'alternativas' => [
            'a' => 'Ninguna si se conduce despacio.',
            'b' => 'Mejor visibilidad lateral.',
            'c' => 'Mayor riesgo de accidente.',
            'd' => 'Reduce el consumo eléctrico.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 74,
        'capitulo' => 'Capítulo 3: Conducción segura',
    'explicacion_id' => 81
    ],
    82 => [
        'pregunta' => '¿Qué hacer si al circular un neumático revienta?',
        'alternativas' => [
            'a' => 'Frenar bruscamente.',
            'b' => 'Girar el volante rápidamente.',
            'c' => 'Sujetar el volante firmemente y frenar suavemente.',
            'd' => 'Acelerar para estabilizar.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 107,
       'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 82
    ],
    83 => [
        'pregunta' => '¿En qué situación está prohibido estacionar?',
        'alternativas' => [
            'a' => 'Frente a una señal de PARE.',
            'b' => 'En zonas habilitadas con línea blanca.',
            'c' => 'A 10 metros de un cruce.',
            'd' => 'A 20 metros de una curva.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 103,
        'capitulo' => 'Capítulo 3: Conducción segura',
    'explicacion_id' => 83
    ],
    84 => [
        'pregunta' => '¿Qué se recomienda hacer para prevenir microsueños al conducir?',
        'alternativas' => [
            'a' => 'Conducir con la ventana abierta.',
            'b' => 'Descansar cada 2 horas.',
            'c' => 'Tomar café cada 30 minutos.',
            'd' => 'Escuchar música fuerte.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 77,
         'capitulo' => 'Capítulo 3: Conducción segura',
    'explicacion_id' => 84
    ],
    85 => [
        'pregunta' => '¿Qué representa una señal con un niño y una mochila?',
        'alternativas' => [
            'a' => 'Ciclovía.',
            'b' => 'Zona escolar.',
            'c' => 'Jardín infantil.',
            'd' => 'Cruce ferroviario.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 56,
          'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 85
    ],
    86 => [
        'pregunta' => '¿Cuál es la sanción por no respetar una señal de tránsito?',
        'alternativas' => [
            'a' => 'Advertencia verbal.',
            'b' => 'Multa según gravedad.',
            'c' => 'Suspensión inmediata de la licencia.',
            'd' => 'No hay sanción.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 64,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 86
    ],
    87 => [
        'pregunta' => '¿Qué tipo de conducción es más segura?',
        'alternativas' => [
            'a' => 'Conducción agresiva.',
            'b' => 'Conducción defensiva.',
            'c' => 'Conducción competitiva.',
            'd' => 'Conducción veloz.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 38,
         'capitulo' => 'Capítulo 1: El conductor y su entorno',
    'explicacion_id' => 87
    ],
    88 => [
        'pregunta' => '¿Qué hacer si se enciende la luz de presión de aceite?',
        'alternativas' => [
            'a' => 'Acelerar el motor.',
            'b' => 'Seguir conduciendo lentamente.',
            'c' => 'Detener el vehículo y revisar el nivel de aceite.',
            'd' => 'Ignorarla si el motor funciona bien.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 109,
         'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 88
    ],
    89 => [
        'pregunta' => '¿Qué significa una señal de curva con doble flecha?',
        'alternativas' => [
            'a' => 'Curva en zigzag.',
            'b' => 'Curva con tránsito en ambos sentidos.',
            'c' => 'Curva doble o sucesiva.',
            'd' => 'Cruce peligroso.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 58,
       'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 89
    ],
    90 => [
        'pregunta' => '¿Qué hacer si el vehículo se queda sin frenos en bajada?',
        'alternativas' => [
            'a' => 'Usar freno de mano de inmediato.',
            'b' => 'Apagar el motor.',
            'c' => 'Reducir marchas y usar el motor para frenar.',
            'd' => 'Pisar el embrague y acelerar.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 113,
        'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 90
    ],
    91 => [
        'pregunta' => '¿Cuál es la principal causa de accidentes en Chile?',
        'alternativas' => [
            'a' => 'Falla mecánica.',
            'b' => 'Condiciones climáticas.',
            'c' => 'Imprudencia del conductor.',
            'd' => 'Falta de señalización.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 10,
          'capitulo' => 'Capítulo 0: Introducción y conceptos básicos',
    'explicacion_id' => 91
    ],
    92 => [
        'pregunta' => '¿Qué hacer al ver un lomo de toro (resalto) no señalizado?',
        'alternativas' => [
            'a' => 'Pasar a velocidad normal.',
            'b' => 'Frenar bruscamente sobre el lomo.',
            'c' => 'Reducir velocidad y pasar lentamente.',
            'd' => 'Evitarlo cruzando por la vereda.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 65,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 92
    ],
    93 => [
        'pregunta' => '¿Cuál de estos líquidos no debe faltar en el vehículo?',
        'alternativas' => [
            'a' => 'Líquido limpiaparabrisas.',
            'b' => 'Líquido de frenos.',
            'c' => 'Líquido de dirección hidráulica.',
            'd' => 'Líquido de batería.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 109,
         'capitulo' => 'Capítulo 5: Mecánica básica y mantenimiento',
    'explicacion_id' => 93
    ],
    94 => [
        'pregunta' => '¿Qué tipo de cruce se considera más riesgoso?',
        'alternativas' => [
            'a' => 'Rotondas.',
            'b' => 'Cruce sin semáforo.',
            'c' => 'Cruce con semáforo.',
            'd' => 'Pasos peatonales señalizados.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 65,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 94
    ],
    95 => [
        'pregunta' => '¿Cuándo está permitido conducir por la berma?',
        'alternativas' => [
            'a' => 'En todo momento en carretera.',
            'b' => 'Solo para adelantar vehículos lentos.',
            'c' => 'Nunca, salvo emergencia o instrucción de Carabineros.',
            'd' => 'Cuando se quiere detener para mirar el celular.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 70,
         'explicacion_id' => 95
    ],
    96 => [
        'pregunta' => '¿Qué hacer si un vehículo queda detenido sobre una vía férrea?',
        'alternativas' => [
            'a' => 'Intentar retroceder lentamente.',
            'b' => 'Abandonar el vehículo inmediatamente.',
            'c' => 'Usar el claxon para pedir ayuda.',
            'd' => 'Esperar a que pase el tren.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 68,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 96
    ],
    97 => [
        'pregunta' => '¿Cuál es la forma correcta de señalizar antes de virar?',
        'alternativas' => [
            'a' => 'Solo si hay autos cerca.',
            'b' => 'Siempre, con al menos 30 metros de anticipación.',
            'c' => 'Después de comenzar a girar.',
            'd' => 'No es necesario si se gira lentamente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 66,
         'capitulo' => 'Capítulo 2: Normas de circulación',
    'explicacion_id' => 97
    ],
    98 => [
        'pregunta' => '¿Qué indica un triángulo naranja reflectante detrás de un vehículo detenido?',
        'alternativas' => [
            'a' => 'Emergencia.',
            'b' => 'Zona escolar.',
            'c' => 'Control policial.',
            'd' => 'Carga peligrosa.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 91,
        'capitulo' => 'Capítulo 4: Seguridad y emergencias',
    'explicacion_id' => 98
    ],
    99 => [
        'pregunta' => '¿Cuál es la consecuencia de manejar con exceso de velocidad?',
        'alternativas' => [
            'a' => 'Mayor consumo de combustible solamente.',
            'b' => 'Reducción de visibilidad.',
            'c' => 'Mayor riesgo de accidentes y menor tiempo de reacción.',
            'd' => 'Nada si se domina bien el vehículo.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 12,
         'capitulo' => 'Capítulo 0: Introducción y conceptos básicos',
    'explicacion_id' => 99
    ],
    100 => [
        'pregunta' => '¿Qué hacer si una ambulancia se aproxima en una intersección con luz verde?',
        'alternativas' => [
            'a' => 'Acelerar para no estorbar.',
            'b' => 'Detenerse y permitirle el paso.',
            'c' => 'Ignorarla si no hay espacio.',
            'd' => 'Avanzar normalmente con precaución.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 90,
         'capitulo' => 'Capítulo 4: Seguridad y emergencias',
    'explicacion_id' => 100
    ],
];


$explicaciones = [
    1 => 'Según la Ley de Tolerancia Cero, se considera conducción bajo la influencia del alcohol cuando la alcoholemia está entre 0.3 y 0.79 g/l. Sobre 0.8 g/l ya se considera conducción en estado de ebriedad.',
    2 => 'El límite máximo de velocidad en zonas urbanas es de 50 km/h, salvo que la señalización indique otra cosa. Esta medida busca proteger a peatones y ciclistas.',
    3 => 'Cuando un semáforo está apagado o en mal funcionamiento, debe aplicarse la norma de ceda el paso y dar prioridad a los peatones y vehículos que ya están en la intersección.',
    4 => 'La profundidad mínima legal de las ranuras de los neumáticos es de 1.6 mm, aunque la recomendación es reemplazarlos desde 1.5 mm para mantener la adherencia.',
    5 => 'Durante la conducción nocturna, la visión periférica disminuye, lo que afecta la capacidad de detectar peligros en los laterales del campo visual.',
    6 => 'Mantener una distancia adecuada permite tener tiempo suficiente para reaccionar ante una frenada repentina del vehículo que va adelante, previniendo colisiones.',
    7 => 'Los peatones tienen prioridad en los pasos peatonales sin semáforo. La ley exige que el conductor se detenga completamente para permitir el cruce seguro.',
    8 => 'El alcohol, incluso en dosis bajas, disminuye reflejos, juicio y tiempo de reacción, aumentando el riesgo de siniestros viales.',
    9 => 'El uso del cinturón de seguridad es obligatorio para todos los ocupantes del vehículo, en cualquier tipo de vía, y reduce significativamente el riesgo de lesiones.',
    10 => 'Si su vehículo falla, debe encender las luces de emergencia, detenerse fuera de la calzada si es posible y colocar elementos de señalización para evitar accidentes.',
    11 => 'Una línea continua al centro de la calzada indica que está prohibido adelantar, ya que podría ser peligroso por visibilidad o condiciones del camino.',
    12 => 'En presencia de niebla se debe conducir con luces bajas, ya que las luces altas pueden reflejarse en la niebla y reducir aún más la visibilidad.',
    13 => 'Aunque el uso de manos libres es legal, usarlo constantemente puede distraer al conductor, afectando su atención y capacidad de respuesta.',
    14 => 'Acelerar frente a un paso peatonal pone en riesgo a los peatones y contradice la obligación legal de cederles el paso.',
    15 => 'El cinturón de seguridad debe usarse siempre, tanto en ciudad como en carretera. Pensar que solo es necesario en carretera es un error común y peligroso.',
     16 => 'La conducción defensiva implica anticiparse a posibles errores de otros conductores. Asumir que todos respetan las normas es una actitud peligrosa.',
    17 => 'Aunque de noche puede haber menos tráfico, el mayor riesgo no radica en la cantidad de vehículos, sino en la baja visibilidad, fatiga y deslumbramientos.',
    18 => 'En condiciones de lluvia intensa, se recomienda aumentar la distancia de seguimiento. Contar “uno, dos” asegura un margen de reacción ante frenadas repentinas.',
    19 => 'Las pistas exclusivas para buses no pueden usarse solo porque están vacías; solo se permite en casos específicos como virajes autorizados o auxilios.',
    20 => 'Un examen práctico correcto incluye preparación previa del vehículo, como ajustar espejos. No hacerlo refleja falta de hábitos de conducción segura.',
     21 => 'Los amortiguadores evitan que el vehículo rebote después de pasar por irregularidades, asegurando mayor estabilidad y control.',
    22 => 'La técnica correcta de frenado consiste en aplicar presión progresiva y constante, lo que permite detenerse de forma controlada.',
    23 => 'Un neumático liso pierde adherencia y aumenta el riesgo de accidentes. Nunca debe usarse en esas condiciones.',
    24 => 'Olor a gasolina puede indicar una fuga peligrosa. Detenerse y revisar es fundamental para evitar incendios.',
    25 => 'Frenar en curva reduce la adherencia de los neumáticos, lo que puede hacer que el vehículo derrape o pierda estabilidad.',
     26 => 'El ciclista tiene prioridad en la ciclovía, incluso si el conductor tiene luz verde para virar, para garantizar la seguridad de los usuarios vulnerables.',
    27 => 'No ajustar pañuelos o espejos no es considerado un error grave, aunque es importante para la seguridad, pero no invalida el examen.',
    28 => 'Antes de un viaje largo, revisar niveles de líquidos (frenos, aceite) y presión de neumáticos es esencial para evitar fallas mecánicas en ruta.',
    29 => 'Adelantar por la derecha no está permitido en vías de doble sentido, pues puede provocar accidentes por vehículos que vienen en sentido contrario.',
    30 => 'El cinturón de seguridad junto al airbag frontal reducen lesiones graves en un 20 %, mejorando significativamente la protección del conductor y pasajeros.',
     31 => 'La mayor cantidad de vehículos en circulación NO es un factor de riesgo específico de la conducción nocturna; en cambio, fatiga, deslumbramiento y reducción del campo visual sí lo son.',
    32 => 'Al estacionar en una bajada, NO debes dejar las ruedas frontales rectas, sino girarlas hacia la cuneta para evitar que el vehículo ruede.',
    33 => 'La distancia lateral mínima para adelantar a un ciclista debe ser 1.5 metros para garantizar la seguridad del ciclista.',
    34 => 'La luz amarilla indica que se aproxima la luz roja, por lo que debes prepararte para detenerte.',
    35 => 'Según la Ley Tolerancia Cero, se sanciona un nivel de alcohol en sangre entre 0.31 y 0.79 g/l, porque cualquier cantidad por encima de 0.3 g/l está prohibida para conductores.',
    36 => 'A 65 km/h, la probabilidad de muerte para un peatón atropellado es alta debido a la fuerza del impacto.',
    37 => 'Asumir que los demás siempre respetan las normas es un error, ya que la conducción defensiva requiere anticipar errores de otros.',
    38 => 'Las luces de emergencia se deben usar cuando el vehículo está detenido en una emergencia o avería que obstruye el tránsito.',
    39 => 'En niebla densa, es correcto usar luces bajas, reducir la velocidad y aumentar la distancia de seguridad para evitar accidentes.',
    40 => 'La licencia Clase B autoriza transportar hasta 9 pasajeros excluyendo al conductor, generalmente vehículos tipo van o minibús pequeño.',
     41 => 'El cansancio reduce la capacidad de concentración, genera somnolencia y afecta los reflejos. Una mayor atención no es un efecto típico del cansancio.',
    42 => 'No identificar los mandos se considera error leve porque no representa un riesgo inmediato en la conducción como sí lo son errores de señalización o detención.',
    43 => 'La reacción más segura ante un ciclista que aparece repentinamente es frenar suavemente y mantenerse alerta, para evitar siniestros.',
    44 => 'El certificado de nacimiento no es necesario para conducir. Los documentos obligatorios incluyen licencia, permiso de circulación y revisión técnica.',
    45 => 'Una luz roja intermitente funciona como una señal PARE: obliga a detenerse completamente antes de continuar.',
    46 => 'La seguridad activa incluye elementos que ayudan a evitar accidentes, como los frenos ABS, que evitan el bloqueo de ruedas al frenar.',
    47 => 'Una concentración de 0.9 g/l de alcohol en sangre supera el límite de 0.8 g/l y se considera conducción en estado de ebriedad, con sanciones severas.',
    48 => 'El triángulo con borde rojo y fondo blanco indica "CEDA EL PASO", lo que obliga al conductor a ceder prioridad si otro vehículo se aproxima.',
    49 => 'En caso de aquaplaning, debe soltarse el acelerador suavemente y mantener el volante firme sin movimientos bruscos para evitar perder el control.',
    50 => 'Conducir descalzo no es una obligación ni una recomendación; podría incluso disminuir el control sobre los pedales, lo que representa un riesgo.',
     51 => 'El uso del teléfono móvil solo está permitido mediante dispositivos de manos libres que no requieran manipulación manual, según la Ley de Tránsito.',
    52 => 'Una línea discontinua permite el adelantamiento siempre que sea seguro y esté permitido por la situación del tránsito y visibilidad.',
    53 => 'La licencia clase A2 permite conducir vehículos de transporte remunerado de personas, como taxis, ambulancias y transporte escolar.',
    54 => 'La bocina debe utilizarse únicamente para advertir un peligro inmediato, no para otros fines como apurar o saludar.',
    55 => 'Aunque el peatón cruce fuera del paso habilitado, la prioridad de proteger la vida obliga al conductor a detenerse y ceder el paso.',
     56 => 'Antes de ingresar a una curva cerrada se debe reducir la velocidad, para mantener el control del vehículo y evitar derrapes o salidas del camino.',
    57 => 'El mantenimiento preventivo implica revisar periódicamente elementos esenciales como el nivel de aceite para evitar fallas mecánicas.',
    58 => 'Una señal azul con una "P" blanca indica zona autorizada para estacionar según la normativa chilena.',
    59 => 'La licencia Clase B autoriza conducir vehículos motorizados de hasta 9 asientos, sin incluir buses, motocicletas ni camiones pesados.',
    60 => 'La Revisión Técnica certifica que el vehículo cumple con condiciones mínimas de seguridad y emisiones exigidas por ley.',
     61 => 'El semáforo en amarillo indica advertencia: si el conductor puede detenerse con seguridad antes de la línea de detención, debe hacerlo.',
    62 => 'Una señal con flecha negra en curva indica la dirección de una curva peligrosa y orienta al conductor a reducir la velocidad.',
    63 => 'Está prohibido adelantar en curvas sin visibilidad porque aumenta el riesgo de colisión frontal.',
    64 => 'El sistema de frenos actúa directamente al presionar el pedal, reduciendo la velocidad mediante fricción en las ruedas.',
    65 => 'La señal de "PARE" es una señal reglamentaria que impone obligación de detenerse completamente antes de continuar.',
     66 => 'Ante la proximidad de un vehículo de emergencia con balizas y sirena, el conductor debe detenerse y ceder el paso, permitiendo su libre tránsito.',
    67 => 'Una presión inferior en los neumáticos genera mayor fricción, calor y desgaste, aumentando el riesgo de reventón.',
    68 => 'Una detención obligatoria ocurre ante señales como "PARE" o semáforos en rojo, y debe ser total antes de continuar.',
    69 => 'La somnolencia disminuye la capacidad de reacción. Ante sus síntomas, se debe detener en un lugar seguro y descansar.',
    70 => 'El sistema ABS evita que las ruedas se bloqueen al frenar, permitiendo mantener el control del vehículo.',
      71 => 'El padrón del vehículo es el documento oficial que acredita la propiedad del mismo, incluyendo los datos del propietario y características del automóvil.',
    72 => 'Una luz verde intermitente indica que la fase verde está por terminar, por lo tanto, se debe estar preparado para detenerse si no ha ingresado aún al cruce.',
    73 => 'En las rotondas se debe dar preferencia a los vehículos que ya circulan dentro de ella, salvo señalización contraria.',
    74 => 'Los airbags forman parte de la seguridad pasiva, ya que su función es minimizar las lesiones una vez que ocurre un accidente.',
    75 => 'Acelerar para cruzar un paso ferroviario sin barrera es extremadamente peligroso. Se debe detener, observar y cruzar solo si es completamente seguro.',
    76 => 'La señal circular roja con una línea blanca horizontal indica "acceso prohibido", y se utiliza comúnmente en entradas restringidas o de sentido contrario.',
    77 => 'El "punto ciego" es el área lateral trasera del vehículo que no es visible directamente a través de los espejos retrovisores, lo que representa un riesgo durante cambios de pista.',
    78 => 'Una carga mal asegurada puede desplazarse o caer del vehículo, provocando accidentes graves en la vía.',
    79 => 'Un pedal de freno blando puede indicar una falla en el sistema. Bombear el pedal puede restablecer la presión temporalmente, pero se debe detener para una revisión urgente.',
    80 => 'El líquido refrigerante absorbe el calor del motor y lo disipa, manteniendo la temperatura adecuada y previniendo el sobrecalentamiento.',
      81 => 'Conducir con luces quemadas en la noche reduce severamente la visibilidad y hace que otros usuarios de la vía no puedan detectar el vehículo, aumentando el riesgo de accidentes.',
    82 => 'Si un neumático revienta, es crucial mantener el control del vehículo sujetando el volante firmemente y desacelerar suavemente hasta detenerse en un lugar seguro.',
    83 => 'Está prohibido estacionar frente a señales de PARE porque se obstruye la visibilidad de otros conductores y se compromete la seguridad vial.',
    84 => 'Descansar cada 2 horas reduce la fatiga y previene los microsueños, que pueden ocurrir sin que el conductor lo note y son altamente peligrosos.',
    85 => 'Una señal con un niño y mochila advierte la cercanía de una zona escolar, por lo que se debe reducir la velocidad y aumentar la atención por posible presencia de niños.',
     86 => 'No respetar una señal de tránsito es una infracción que puede ser sancionada con una multa, dependiendo de la gravedad y el tipo de señal infringida. En algunos casos puede ser una infracción grave o gravísima.',
    87 => 'La conducción defensiva busca anticipar peligros y minimizar riesgos, fomentando una actitud responsable y segura en la vía.',
    88 => 'La luz de presión de aceite indica un problema grave en la lubricación del motor. Se debe detener de inmediato y revisar el nivel de aceite para evitar daños mecánicos costosos.',
    89 => 'Una señal con curva doble o sucesiva indica que el conductor debe prepararse para enfrentar más de una curva consecutiva. Se recomienda reducir la velocidad.',
    90 => 'Cuando el vehículo se queda sin frenos en bajada, lo más seguro es reducir la marcha (bajar a una marcha menor) y dejar que el motor frene el vehículo (freno motor). Esto ayuda a controlar la velocidad sin depender del sistema de frenos fallido.',
     91 => 'La principal causa de accidentes en Chile es la imprudencia del conductor, incluyendo exceso de velocidad, distracciones y maniobras peligrosas.',
    92 => 'Ante un lomo de toro no señalizado, lo más seguro es reducir la velocidad y pasar lentamente para evitar daños al vehículo y mantener la seguridad.',
    93 => 'El líquido de frenos es esencial para el funcionamiento del sistema de frenos y la seguridad del vehículo, por lo que nunca debe faltar.',
    94 => 'Los cruces sin semáforo son más riesgosos porque no hay una señal que regule el paso, aumentando el riesgo de conflictos entre vehículos y peatones.',
    95 => 'Conducir por la berma está prohibido salvo en situaciones de emergencia o cuando lo indica Carabineros, para evitar accidentes y obstrucción del tránsito.',
       96 => 'Si un vehículo queda detenido sobre una vía férrea, es vital abandonarlo inmediatamente para evitar riesgos en caso de que se aproxime un tren.',
    97 => 'Siempre se debe señalizar antes de virar con al menos 30 metros de anticipación para avisar a otros conductores y peatones.',
    98 => 'El triángulo naranja reflectante indica una situación de emergencia y alerta a otros conductores para que tomen precaución.',
    99 => 'Conducir a exceso de velocidad aumenta el riesgo de accidentes y reduce el tiempo de reacción para evitar peligros.',
    100 => 'Al aproximarse una ambulancia en una intersección, se debe detener el vehículo para permitir su paso y evitar obstaculizar la emergencia.'
];