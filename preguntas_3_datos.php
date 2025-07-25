<?php
// Banco de preguntas y respuestas extraídas del "Libro para la Conducción en Chile".
// La clave de cada pregunta (ej: 1, 2, 3...) es su identificador único.

$preguntas_capitulo_0 = [
    1 => [
        'pregunta' => 'Según la Ley Tolerancia Cero, se considera conducción bajo la influencia del alcohol cuando el nivel de alcohol en la sangre es de:',
        'alternativas' => [
            'a' => '0.8 g/l o superior.',
            'b' => '0.31 a 0.79 g/l.',
            'c' => 'Inferior a 0.3 g/l.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 50,
        'capitulo' => 0
    ],
    2 => [
        'pregunta' => 'En caso de que un peatón sea atropellado a 65 km/h, ¿cuál es el resultado más probable?',
        'alternativas' => [
            'a' => 'Sobrevive con lesiones menores.',
            'b' => 'Tiene un 50% de probabilidades de sobrevivir.',
            'c' => 'Lo más probable es que muera.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 8,
        'capitulo' => 0
    ],
    3 => [
        'pregunta' => 'Al estacionar en una pendiente (bajada), ¿hacia dónde deben quedar apuntando las ruedas delanteras?',
        'alternativas' => [
            'a' => 'Hacia el centro de la calzada.',
            'b' => 'Rectas, sin girar.',
            'c' => 'Hacia la cuneta.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 104,
        'capitulo' => 0
    ],
    4 => [
        'pregunta' => '¿Cuál es la distancia lateral mínima que debe dejar al sobrepasar a un ciclista?',
        'alternativas' => [
            'a' => '1.0 metro.',
            'b' => 'Al menos 1.5 metros.',
            'c' => 'El ancho de una puerta.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 71,
        'capitulo' => 0
    ],
    5 => [
        'pregunta' => 'El uso combinado de airbag frontal y cinturón de seguridad puede reducir la probabilidad de lesiones mortales en un:',
        'alternativas' => [
            'a' => '10%',
            'b' => '50%',
            'c' => '20%',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 30,
        'capitulo' => 0
    ],
    6 => [
        'pregunta' => '¿Qué indica una luz amarilla en un semáforo?',
        'alternativas' => [
            'a' => 'Advierte peligro y se debe avanzar con precaución.',
            'b' => 'Indica prevención, advirtiendo que la luz roja aparecerá a continuación.',
            'c' => 'Permite virar si la vía está despejada.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 78,
        'capitulo' => 0
    ],
    7 => [
        'pregunta' => '¿En qué situación NO se debe virar en "U"?',
        'alternativas' => [
            'a' => 'En avenidas con bandejones centrales.',
            'b' => 'A menos de 200 metros de una curva, cima o gradiente.',
            'c' => 'Cuando la vía tiene doble sentido de tránsito.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 94,
        'capitulo' => 0
    ]
    // --- TU TAREA: AGREGA MÁS PREGUNTAS AQUÍ ---
];

$preguntas_capitulo_1 = [
    // La clave puede ser un número correlativo o un código único
    101 => [
        'pregunta' => '¿Por qué el manual prefiere el término "siniestro de tránsito" en lugar de "accidente de tránsito"?',
        'alternativas' => [
            'a' => 'Porque "accidente" implica un suceso casual e impredecible, y los siniestros son a menudo evitables.',
            'b' => 'Porque "siniestro" es un término legalmente más preciso para las aseguradoras.',
            'c' => 'Porque "accidente" solo se usa cuando hay fallecidos.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 6,
        'capitulo' => 1
    ],
    102 => [
        'pregunta' => 'En Chile, ¿qué porcentaje del PIB se estima como costo de los siniestros de tránsito?',
        'alternativas' => [
            'a' => 'Un 5%.',
            'b' => 'Un 2%.',
            'c' => 'Menos de un 1%.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 7,
        'capitulo' => 1
    ],
    103 => [
        'pregunta' => 'Aproximadamente, ¿qué porcentaje de los siniestros de tránsito ocurren en zonas urbanas?',
        'alternativas' => [
            'a' => '20%',
            'b' => '50%',
            'c' => '80%',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 8,
        'capitulo' => 1
    ],
    104 => [
        'pregunta' => '¿En qué tipo de vías se produce la mayor parte de las personas fallecidas por siniestros de tránsito?',
        'alternativas' => [
            'a' => 'En vías urbanas, principalmente en cruces e intersecciones.',
            'b' => 'En vías interurbanas o no urbanas (carreteras y autopistas).',
            'c' => 'La distribución es equitativa entre zonas urbanas y no urbanas.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 8,
        'capitulo' => 1
    ],
    105 => [
        'pregunta' => '¿Qué grupo de edad representa aproximadamente el 29% del total de conductores fallecidos?',
        'alternativas' => [
            'a' => 'Mayores de 65 años.',
            'b' => 'Entre 30 y 45 años.',
            'c' => 'Jóvenes entre 18 y 29 años.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 8,
        'capitulo' => 1
    ],
    106 => [
        'pregunta' => '¿Cuál es uno de los principios éticos del enfoque "Sistema Seguro" o "Visión Cero"?',
        'alternativas' => [
            'a' => 'Las muertes y lesiones graves en el tránsito son inaceptables y, por tanto, evitables.',
            'b' => 'El conductor es el único responsable de los siniestros viales.',
            'c' => 'Aceptar que un cierto número de siniestros es inevitable con el aumento de vehículos.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 9,
        'capitulo' => 1
    ],
];

$preguntas_capitulo_2 = [
    201 => [
        'pregunta' => 'En el panel de instrumentos, ¿qué indica un testigo de color rojo encendido?',
        'alternativas' => [
            'a' => 'Puesta en funcionamiento de un sistema (ej. luces).',
            'b' => 'Un problema que debe ser revisado próximamente.',
            'c' => 'Una avería grave que requiere atención inmediata.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 11,
        'capitulo' => 2
    ],
    202 => [
        'pregunta' => 'Si se enciende la luz de presión de aceite mientras conduce, ¿qué debe hacer?',
        'alternativas' => [
            'a' => 'Continuar hasta el taller más cercano para revisar el nivel de aceite.',
            'b' => 'Detener el motor de inmediato y no volver a ponerlo en marcha hasta repararlo.',
            'c' => 'Reducir la velocidad y seguir conduciendo con precaución.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 12,
        'capitulo' => 2
    ],
    203 => [
        'pregunta' => 'Al cargar combustible, ¿cuál de las siguientes acciones es una medida de seguridad obligatoria?',
        'alternativas' => [
            'a' => 'Apagar el motor del vehículo.',
            'b' => 'Pagar con tarjeta de crédito en vez de efectivo.',
            'c' => 'Mantener las luces de estacionamiento encendidas.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 13,
        'capitulo' => 2
    ],
    204 => [
        'pregunta' => '¿Cuál es uno de los principales riesgos de un sistema de escape en mal estado?',
        'alternativas' => [
            'a' => 'Aumento del consumo de combustible.',
            'b' => 'Que el gas venenoso monóxido de carbono penetre en el interior del vehículo.',
            'c' => 'Desgaste irregular de los neumáticos traseros.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 14,
        'capitulo' => 2
    ],
    205 => [
        'pregunta' => '¿Qué síntoma indica que los amortiguadores pueden estar en mal estado?',
        'alternativas' => [
            'a' => 'El vehículo se calienta en subidas pronunciadas.',
            'b' => 'El motor emite un ruido anormalmente alto.',
            'c' => 'El vehículo se balancea demasiado en carreteras en buen estado.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 15,
        'capitulo' => 2
    ],
    206 => [
        'pregunta' => '¿Cuál es la principal función del sistema de frenos ABS?',
        'alternativas' => [
            'a' => 'Reducir siempre la distancia de frenado en comparación con los frenos convencionales.',
            'b' => 'Evitar que las ruedas se bloqueen durante una frenada brusca, permitiendo mantener el control de la dirección.',
            'c' => 'Aumentar la fuerza de frenado para detener el vehículo en la mitad del tiempo.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 17,
        'capitulo' => 2
    ],
    207 => [
        'pregunta' => 'Un desgaste notorio solo en los extremos de la banda de rodamiento de un neumático indica que:',
        'alternativas' => [
            'a' => 'Se han usado con exceso de presión de aire.',
            'b' => 'Se han usado con menor presión de aire que la recomendada.',
            'c' => 'Los amortiguadores están en perfecto estado.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 19,
        'capitulo' => 2
    ],
    208 => [
        'pregunta' => '¿Qué es el "efecto submarino" relacionado con el cinturón de seguridad?',
        'alternativas' => [
            'a' => 'Cuando el cinturón se bloquea por la humedad.',
            'b' => 'El deslizamiento del cuerpo por debajo de la banda abdominal del cinturón durante un siniestro.',
            'c' => 'La sensación de mareo al usar el cinturón de forma incorrecta.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 28,
        'capitulo' => 2
    ],
    209 => [
        'pregunta' => 'Un choque a 70 km/h sin cinturón de seguridad equivale a una caída desde:',
        'alternativas' => [
            'a' => 'Un cuarto piso.',
            'b' => 'Un séptimo piso.',
            'c' => 'Un décimo piso.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 26,
        'capitulo' => 2
    ],
    210 => [
        'pregunta' => 'Para que los apoya cabezas prevengan eficazmente el "efecto latigazo", la separación entre la cabeza y el apoya cabezas debe ser:',
        'alternativas' => [
            'a' => 'La mínima posible y nunca superior a 4 cm.',
            'b' => 'De al menos 10 cm para mayor comodidad.',
            'c' => 'No importa la distancia, solo la altura.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 31,
        'capitulo' => 2
    ],
    211 => [
        'pregunta' => 'Al aumentar la velocidad al doble, la energía del movimiento aumenta:',
        'alternativas' => [
            'a' => '2 veces.',
            'b' => '4 veces.',
            'c' => '8 veces.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 23,
        'capitulo' => 2
    ],
];

$preguntas_capitulo_3 = [
    301 => [
        'pregunta' => '¿Cuál de los siguientes es considerado un principio fundamental para una buena Convivencia Vial?',
        'alternativas' => [
            'a' => 'La velocidad, para no obstaculizar el tránsito.',
            'b' => 'El principio de confianza, donde se espera que todos respeten las normas.',
            'c' => 'La habilidad del conductor para reaccionar ante los errores de los demás.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 34,
        'capitulo' => 3
    ],
    302 => [
        'pregunta' => 'Aproximadamente, ¿qué porcentaje de los siniestros de tránsito con víctimas son producto de fallas humanas?',
        'alternativas' => [
            'a' => 'Cerca del 50%.',
            'b' => 'Alrededor del 75%.',
            'c' => 'Cerca del 90%.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 33,
        'capitulo' => 3
    ],
    303 => [
        'pregunta' => '¿Cuál de los siguientes es uno de los principales factores de riesgo en la conducción?',
        'alternativas' => [
            'a' => 'Conducir un vehículo antiguo.',
            'b' => 'La velocidad inadecuada.',
            'c' => 'Escuchar música a volumen alto.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 34,
        'capitulo' => 3
    ],
    304 => [
        'pregunta' => '¿Cuál es la mejor virtud que se puede practicar en el Entorno Vial para una convivencia armónica?',
        'alternativas' => [
            'a' => 'La competitividad.',
            'b' => 'La solidaridad.',
            'c' => 'La rapidez.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 35,
        'capitulo' => 3
    ],
];


$preguntas_capitulo_4 = [
    401 => [
        'pregunta' => '¿Qué es el efecto de "percepción selectiva" en la conducción?',
        'alternativas' => [
            'a' => 'La capacidad de ver con gran detalle los objetos lejanos.',
            'b' => 'La tendencia a ver lo que esperamos ver, pudiendo pasar por alto imprevistos.',
            'c' => 'La mejora de la visión periférica durante la noche.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 41,
        'capitulo' => 4
    ],
    402 => [
        'pregunta' => 'El fenómeno de "visión de túnel" se produce principalmente cuando:',
        'alternativas' => [
            'a' => 'Se conduce con poca luz, como al amanecer.',
            'b' => 'La persona conductora se encuentra en estado de estrés o conduce a alta velocidad.',
            'c' => 'Se utilizan lentes de sol inadecuados para la conducción.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 44,
        'capitulo' => 4
    ],
    403 => [
        'pregunta' => 'En situaciones reales que requieren reacciones complejas, ¿qué grupo de conductores tiende a reaccionar más rápido?',
        'alternativas' => [
            'a' => 'Los conductores jóvenes, debido a sus reflejos más rápidos.',
            'b' => 'Los conductores con más experiencia, que interpretan mejor las situaciones.',
            'c' => 'No hay diferencia significativa entre conductores novatos y expertos.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 40,
        'capitulo' => 4
    ],
    404 => [
        'pregunta' => '¿Cuál es una de las razones por las que los conductores jóvenes tienen una mayor tendencia a sufrir siniestros?',
        'alternativas' => [
            'a' => 'Tienen una percepción del riesgo más objetiva y realista.',
            'b' => 'Tienen una excesiva necesidad de autoafirmación y sobrevaloran sus capacidades.',
            'c' => 'Son menos influenciados por la publicidad de automóviles.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 45,
        'capitulo' => 4
    ],
    405 => [
        'pregunta' => '¿Por qué es peligroso conducir mientras se experimentan problemas emocionales o discusiones?',
        'alternativas' => [
            'a' => 'Porque el vehículo consume más combustible.',
            'b' => 'Porque desvían la concentración del conductor, aumentando el riesgo de siniestros.',
            'c' => 'Porque puede causar fallas mecánicas en el sistema de dirección.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 39,
        'capitulo' => 4
    ],
    406 => [
        'pregunta' => 'La "ceguera real temporal" en la conducción nocturna se produce principalmente por:',
        'alternativas' => [
            'a' => 'La falta de iluminación en la carretera.',
            'b' => 'Mirar directamente los focos de un vehículo que viene en sentido contrario.',
            'c' => 'El cansancio acumulado después de varias horas de viaje.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 40,
        'capitulo' => 4
    ],
    407 => [
        'pregunta' => '¿Cuál de estos factores NO influye en la evaluación y aceptación del peligro en conductores jóvenes?',
        'alternativas' => [
            'a' => 'Su nivel de control sobre el vehículo.',
            'b' => 'Su experiencia en la conducción.',
            'c' => 'El conocimiento profundo de la mecánica del vehículo.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 45,
        'capitulo' => 4
    ],
];

$preguntas_capitulo_5 = [
    501 => [
        'pregunta' => '¿Cuál es una de las infracciones más comunes cometidas por los peatones?',
        'alternativas' => [
            'a' => 'Caminar muy lento por la acera.',
            'b' => 'Usar ropa de colores oscuros durante la noche.',
            'c' => 'Descender sorpresivamente a la calzada y cruzar en lugares no habilitados.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 68,
        'capitulo' => 5
    ],
    502 => [
        'pregunta' => '¿Cuánto tiempo más puede necesitar una persona mayor para cruzar una calle de 16 metros de ancho en comparación con un joven?',
        'alternativas' => [
            'a' => 'Aproximadamente 1 segundo más.',
            'b' => 'Aproximadamente 4 segundos más.',
            'c' => 'El mismo tiempo, no hay diferencia.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 69,
        'capitulo' => 5
    ],
    503 => [
        'pregunta' => '¿Por qué los niños son particularmente vulnerables en el tránsito?',
        'alternativas' => [
            'a' => 'Porque siempre respetan las señales de tránsito.',
            'b' => 'Porque actúan impulsivamente, su campo visual es limitado y no juzgan bien la distancia y velocidad.',
            'c' => 'Porque tienen una audición más desarrollada que los adultos.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 70,
        'capitulo' => 5
    ],
    504 => [
        'pregunta' => 'Al pasar cerca de un ciclista, la normativa indica que debe dejar un espacio lateral de:',
        'alternativas' => [
            'a' => 'Exactamente 1 metro.',
            'b' => 'Al menos 1.5 metros.',
            'c' => 'Al menos 2 metros.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 71,
        'capitulo' => 5
    ],
    505 => [
        'pregunta' => 'Según la Ley de Tránsito, ¿hasta qué edad los niños deben viajar en el asiento trasero?',
        'alternativas' => [
            'a' => 'Menores de 8 años.',
            'b' => 'Menores de 10 años.',
            'c' => 'Menores de 12 años.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 73,
        'capitulo' => 5
    ],
    506 => [
        'pregunta' => '¿Cuál es la sanción por no llevar a un niño de hasta 8 años (inclusive) en un Sistema de Retención Infantil (SRI)?',
        'alternativas' => [
            'a' => 'Una falta leve, con una multa de 0.5 UTM.',
            'b' => 'Una falta grave, con multa de 1 a 1.5 UTM.',
            'c' => 'Una falta gravísima, con multa de 1.5 a 3 UTM y suspensión de licencia.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 73,
        'capitulo' => 5
    ],
    507 => [
        'pregunta' => '¿Cuál es la recomendación principal para la instalación de un SRI para niños pequeños?',
        'alternativas' => [
            'a' => 'Instalarlo en el asiento del copiloto para una mejor supervisión.',
            'b' => 'Instalarlo mirando hacia adelante desde el nacimiento.',
            'c' => 'Instalarlo mirando hacia atrás (a contramarcha) el mayor tiempo posible.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 74,
        'capitulo' => 5
    ],
];

$preguntas_capitulo_6 = [
    601 => [
        'pregunta' => 'Al enfrentar una señal "CEDA EL PASO", ¿qué acción debe realizar?',
        'alternativas' => [
            'a' => 'Detenerse completamente y luego avanzar.',
            'b' => 'Reducir la velocidad, detenerse si es necesario, y ceder el paso a los vehículos de la otra vía.',
            'c' => 'Continuar a la misma velocidad si no ve vehículos cerca.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 84,
        'capitulo' => 6
    ],
    602 => [
        'pregunta' => 'Al incorporarse a una rotonda, ¿quién tiene la preferencia?',
        'alternativas' => [
            'a' => 'Usted, porque se está incorporando a la circulación.',
            'b' => 'Los vehículos que ya están circulando dentro de la rotonda.',
            'c' => 'El vehículo que circule por la pista exterior de la rotonda.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 84,
        'capitulo' => 6
    ],
    603 => [
        'pregunta' => '¿Con cuánta anticipación mínima debe señalizar su intención de virar?',
        'alternativas' => [
            'a' => 'Al menos 10 metros antes.',
            'b' => 'Al menos 30 metros antes.',
            'c' => 'Justo en el momento de iniciar el viraje.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 91,
        'capitulo' => 6
    ],
    604 => [
        'pregunta' => 'Si su brazo está extendido horizontalmente por la ventana, ¿qué maniobra está indicando?',
        'alternativas' => [
            'a' => 'Viraje a la derecha.',
            'b' => 'Detención o disminución de velocidad.',
            'c' => 'Viraje a la izquierda.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 86,
        'capitulo' => 6
    ],
    605 => [
        'pregunta' => 'La "Regla de los Tres Segundos" se utiliza para:',
        'alternativas' => [
            'a' => 'Calcular el tiempo necesario para frenar en una emergencia.',
            'b' => 'Mantener una distancia segura con el vehículo que va adelante en carreteras.',
            'c' => 'Saber cuánto tiempo se puede estar detenido en un cruce.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 88,
        'capitulo' => 6
    ],
    606 => [
        'pregunta' => 'Al pasar cerca de vehículos estacionados, debe dejar un espacio lateral suficiente, equivalente a:',
        'alternativas' => [
            'a' => 'Medio metro.',
            'b' => 'El ancho de una puerta.',
            'c' => 'Dos metros.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 89,
        'capitulo' => 6
    ],
    607 => [
        'pregunta' => 'Al prepararse para un viraje a la izquierda desde una vía de doble tránsito, ¿dónde debe posicionar su vehículo?',
        'alternativas' => [
            'a' => 'Lo más a la derecha posible de la calzada.',
            'b' => 'En el costado derecho del eje o de la línea central de la vía.',
            'c' => 'En cualquier pista, siempre que señalice correctamente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 92,
        'capitulo' => 6
    ],
    608 => [
        'pregunta' => '¿Cuál es la velocidad máxima permitida para vehículos livianos en zonas urbanas?',
        'alternativas' => [
            'a' => '40 km/h.',
            'b' => '50 km/h.',
            'c' => '60 km/h.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 96,
        'capitulo' => 6
    ],
    609 => [
        'pregunta' => 'En una zona no urbana con 2 o más pistas en el mismo sentido, el límite de velocidad para vehículos livianos es de:',
        'alternativas' => [
            'a' => '90 km/h.',
            'b' => '100 km/h.',
            'c' => '120 km/h.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 96,
        'capitulo' => 6
    ],
    610 => [
        'pregunta' => 'Al circular por las afueras de un colegio en horario de entrada o salida de clases, debe reducir su velocidad a:',
        'alternativas' => [
            'a' => 'No más de 30 km/h.',
            'b' => 'No más de 40 km/h.',
            'c' => 'No más de 50 km/h.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 97,
        'capitulo' => 6
    ],
    611 => [
        'pregunta' => '¿En cuál de los siguientes lugares está prohibido adelantar, incluso si no necesita traspasar el eje de la calzada?',
        'alternativas' => [
            'a' => 'En una recta larga con buena visibilidad.',
            'b' => 'En un paso para peatones.',
            'c' => 'Antes de llegar a una rotonda.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 103,
        'capitulo' => 6
    ],
    612 => [
        'pregunta' => 'La maniobra de "sobrepaso" se diferencia del "adelantamiento" en que:',
        'alternativas' => [
            'a' => 'El sobrepaso se realiza a una velocidad mayor.',
            'b' => 'El sobrepaso se realiza sin invadir la pista del sentido contrario.',
            'c' => 'El sobrepaso solo se puede hacer por la izquierda.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 103,
        'capitulo' => 6
    ],
    613 => [
        'pregunta' => 'Al estacionar de forma paralela a la cuneta, ¿cuál es la distancia máxima permitida entre la cuneta y su vehículo?',
        'alternativas' => [
            'a' => '10 centímetros.',
            'b' => '30 centímetros.',
            'c' => '50 centímetros.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 104,
        'capitulo' => 6
    ],
    614 => [
        'pregunta' => '¿A qué distancia mínima de un grifo para incendios se puede estacionar?',
        'alternativas' => [
            'a' => 'A menos de 5 metros.',
            'b' => 'A menos de 10 metros.',
            'c' => 'A menos de 3 metros.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 105,
        'capitulo' => 6
    ],
    615 => [
        'pregunta' => 'Al enfrentar una demarcación de "No bloquear cruce" (líneas amarillas diagonales), ¿cuándo puede usted ingresar al cruce?',
        'alternativas' => [
            'a' => 'Cuando tenga luz verde, sin importar el espacio al otro lado.',
            'b' => 'Solo si en la salida del cruce existe espacio suficiente para no quedar detenido en él.',
            'c' => 'Si no vienen vehículos por las otras vías.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 83,
        'capitulo' => 6
    ],
];

$preguntas_capitulo_7 = [
    701 => [
        'pregunta' => 'Al conducir de noche, ¿a qué distancia puede ver a un peatón con ropas oscuras si usted lleva las luces bajas?',
        'alternativas' => [
            'a' => 'Aproximadamente 25 metros.',
            'b' => 'Aproximadamente 60 metros.',
            'c' => 'Aproximadamente 125 metros.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 110,
        'capitulo' => 7
    ],
    702 => [
        'pregunta' => 'Al encontrarse de noche con un vehículo en sentido contrario, ¿qué debe hacer con sus luces?',
        'alternativas' => [
            'a' => 'Mantener las luces altas para ver mejor el borde de la calzada.',
            'b' => 'Apagar las luces brevemente para no encandilar.',
            'c' => 'Cambiar a luces bajas para no cegar al otro conductor.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 111,
        'capitulo' => 7
    ],
    703 => [
        'pregunta' => '¿Cómo afecta una carga pesada en la parte trasera del vehículo a la conducción?',
        'alternativas' => [
            'a' => 'El volante se siente más pesado y el vehículo tiende a girar menos.',
            'b' => 'No afecta la conducción si los neumáticos tienen la presión correcta.',
            'c' => 'El volante se siente más liviano y el vehículo tiende a girar más de lo esperado.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 113,
        'capitulo' => 7
    ],
    704 => [
        'pregunta' => 'Al ingresar a una autopista, ¿quién tiene la prioridad?',
        'alternativas' => [
            'a' => 'Usted, que va a ingresar desde la pista de aceleración.',
            'b' => 'Los vehículos que ya circulan por la autopista.',
            'c' => 'La prioridad se comparte, deben alternar el paso.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 116,
        'capitulo' => 7
    ],
    705 => [
        'pregunta' => '¿Cuál es el mayor riesgo al conducir con las primeras gotas de lluvia?',
        'alternativas' => [
            'a' => 'El agua puede dañar el motor del vehículo.',
            'b' => 'La calzada se torna muy resbaladiza al mezclarse el agua con polvo y aceite.',
            'c' => 'La visibilidad se reduce a cero instantáneamente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 120,
        'capitulo' => 7
    ],
    706 => [
        'pregunta' => 'El fenómeno de "aquaplaning" o "hidroplaning" ocurre cuando:',
        'alternativas' => [
            'a' => 'Los frenos se mojan y pierden eficacia.',
            'b' => 'El vehículo se sobrecalienta por falta de ventilación en la lluvia.',
            'c' => 'Los neumáticos pierden contacto con la calzada a causa de una capa de agua.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 121,
        'capitulo' => 7
    ],
    707 => [
        'pregunta' => 'Al conducir con nieve, se recomienda utilizar la marcha más alta posible. ¿Por qué?',
        'alternativas' => [
            'a' => 'Para que el vehículo avance más rápido y salga de la zona de nieve.',
            'b' => 'Para reducir el riesgo de que las ruedas motrices patinen.',
            'c' => 'Para que el motor consuma menos combustible.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 123,
        'capitulo' => 7
    ],
    708 => [
        'pregunta' => 'Cuando la calzada está helada, la distancia de frenado puede aumentar:',
        'alternativas' => [
            'a' => 'El doble de lo normal.',
            'b' => 'Hasta 5 veces por encima de lo normal.',
            'c' => 'Hasta 10 veces por encima de lo normal.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 124,
        'capitulo' => 7
    ],
    709 => [
        'pregunta' => '¿Por qué no es recomendable usar las luces altas al conducir con niebla espesa?',
        'alternativas' => [
            'a' => 'Porque las luces altas se reflejan en las gotas de agua y pueden deslumbrar al propio conductor.',
            'b' => 'Porque las luces altas consumen demasiada batería en condiciones de niebla.',
            'c' => 'Porque legalmente está prohibido usar luces altas con niebla, sin importar su densidad.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 125,
        'capitulo' => 7
    ],
    710 => [
        'pregunta' => 'Si su vehículo sufre un desperfecto en un túnel, ¿qué debe hacer?',
        'alternativas' => [
            'a' => 'Apagar todas las luces para ahorrar batería y esperar dentro del auto.',
            'b' => 'Encender las luces de emergencia y, si es posible, acercarse a la derecha o a un lugar de emergencia.',
            'c' => 'Salir del vehículo y caminar hacia la salida del túnel para buscar ayuda.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 119,
        'capitulo' => 7
    ],
];

$preguntas_capitulo_8 = [
    801 => [
        'pregunta' => 'Según estudios de la Agencia Chilena de Eficiencia Energética (AChEE), ¿cuánto combustible se puede reducir aplicando técnicas de conducción eficiente?',
        'alternativas' => [
            'a' => 'Entre un 1% y un 5%.',
            'b' => 'Entre un 10% y un 15%.',
            'c' => 'Más de un 20%.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 127,
        'capitulo' => 8
    ],
    802 => [
        'pregunta' => '¿Cómo afecta un portaequipajes o bulto en el techo al consumo de combustible en carretera?',
        'alternativas' => [
            'a' => 'No lo afecta si la carga es liviana.',
            'b' => 'Puede incrementarlo por sobre un 20% debido a la resistencia aerodinámica.',
            'c' => 'Lo reduce, ya que mejora la aerodinámica del vehículo.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 129,
        'capitulo' => 8
    ],
    803 => [
        'pregunta' => 'Una reducción de 5 PSI en la presión de los neumáticos puede incrementar el consumo de combustible en un:',
        'alternativas' => [
            'a' => '0.5%',
            'b' => '1%',
            'c' => '3%',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 129,
        'capitulo' => 8
    ],
    804 => [
        'pregunta' => 'Para una conducción eficiente, ¿en qué rango de revoluciones (RPM) se recomienda mantener el motor?',
        'alternativas' => [
            'a' => 'Siempre en el rango más alto posible para obtener máxima potencia.',
            'b' => 'En rangos relativamente bajos, utilizando las marchas más altas posibles.',
            'c' => 'Las revoluciones del motor no influyen en el consumo de combustible.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 131,
        'capitulo' => 8
    ],
    805 => [
        'pregunta' => '¿Cuándo es más económico apagar el motor en una detención?',
        'alternativas' => [
            'a' => 'En cualquier detención, incluso en semáforos de 30 segundos.',
            'b' => 'Únicamente si la detención supera los 5 minutos.',
            'c' => 'En cualquier detención que se estime durará más de un minuto.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 133,
        'capitulo' => 8
    ],
    806 => [
        'pregunta' => '¿Qué práctica de frenado ayuda a una conducción eficiente?',
        'alternativas' => [
            'a' => 'Frenar bruscamente y a último minuto para estar el menor tiempo posible a baja velocidad.',
            'b' => 'Anticipar la frenada y reducir la velocidad de forma paulatina, cortando la inyección de combustible.',
            'c' => 'Poner el vehículo en neutro para que se deslice libremente antes de frenar.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 132,
        'capitulo' => 8
    ],
];

$preguntas_capitulo_9 = [
    901 => [
        'pregunta' => 'Si participa en un siniestro donde resultan personas lesionadas, ¿cuál es su obligación legal?',
        'alternativas' => [
            'a' => 'Solo llamar a su seguro y esperar.',
            'b' => 'Detener la marcha, prestar la ayuda que fuese posible y dar cuenta a la autoridad policial.',
            'c' => 'Abandonar el lugar si usted no tuvo la culpa del siniestro.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 136,
        'capitulo' => 9
    ],
    902 => [
        'pregunta' => 'Darse a la fuga y no dar aviso a la autoridad tras un siniestro es un delito que puede ser sancionado con:',
        'alternativas' => [
            'a' => 'Solo una multa y la retención del vehículo.',
            'b' => 'Una citación al juzgado de policía local.',
            'c' => 'Inhabilidad de por vida para conducir y penas de cárcel efectiva de al menos un año.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 136,
        'capitulo' => 9
    ],
    903 => [
        'pregunta' => 'Si la persona lesionada en un siniestro es un motociclista con casco, ¿qué se debe hacer?',
        'alternativas' => [
            'a' => 'Quitarle el casco inmediatamente para que pueda respirar mejor.',
            'b' => 'Nunca quitarle el casco, ya que podría provocar una lesión grave en la columna cervical.',
            'c' => 'Solo quitarle el casco si la persona está inconsciente.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 137,
        'capitulo' => 9
    ],
    904 => [
        'pregunta' => '¿Qué documentos son obligatorios para que un vehículo motorizado pueda circular?',
        'alternativas' => [
            'a' => 'Placa patente, permiso de circulación y certificado de un Seguro Obligatorio (SOAP).',
            'b' => 'Solo la Licencia de Conducir y el padrón del vehículo.',
            'c' => 'El manual del vehículo y el certificado de revisión técnica.',
        ],
        'correcta' => 'a',
        'pagina_pdf' => 139,
        'capitulo' => 9
    ],
    905 => [
        'pregunta' => 'La "Ley No Chat" prohíbe manipular un dispositivo móvil mientras se conduce. ¿Esta prohibición incluye estar detenido en una luz roja?',
        'alternativas' => [
            'a' => 'No, en una luz roja se puede manipular el celular.',
            'b' => 'Sí, la prohibición se aplica incluso si el vehículo está detenido en una luz roja o un "PARE".',
            'c' => 'Solo prohíbe las llamadas, pero no el envío de mensajes de texto.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 141,
        'capitulo' => 9
    ],
    906 => [
        'pregunta' => 'Un conductor de 17 años con licencia Clase B debe conducir siempre acompañado por una persona que, entre otros requisitos, tenga una licencia por al menos:',
        'alternativas' => [
            'a' => '2 años de antigüedad.',
            'b' => '5 años de antigüedad.',
            'c' => '10 años de antigüedad.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 142,
        'capitulo' => 9
    ],
    907 => [
        'pregunta' => 'Exceder en más de 60 km/h un límite de velocidad máxima es una infracción que puede resultar en una suspensión de licencia de:',
        'alternativas' => [
            'a' => 'Entre 5 y 45 días.',
            'b' => '3 meses.',
            'c' => '6 meses.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 142,
        'capitulo' => 9
    ],
    908 => [
        'pregunta' => 'No detenerse ante una luz roja de semáforo o una señal "PARE" es considerado una infracción:',
        'alternativas' => [
            'a' => 'Leve.',
            'b' => 'Grave.',
            'c' => 'Gravísima.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 143,
        'capitulo' => 9
    ],
    909 => [
        'pregunta' => 'En una frenada de emergencia con un vehículo que tiene frenos ABS, ¿cuál es la técnica correcta?',
        'alternativas' => [
            'a' => 'Pisar y soltar el pedal de freno repetidamente (bombear).',
            'b' => 'Pisar enérgicamente el pedal de freno manteniendo la máxima presión hasta el final.',
            'c' => 'Pisar el freno suavemente para evitar que las ruedas se bloqueen.',
        ],
        'correcta' => 'b',
        'pagina_pdf' => 145,
        'capitulo' => 9
    ],
    910 => [
        'pregunta' => 'Si sufre una falla total de frenos mientras conduce, ¿cuál es una de las primeras acciones recomendadas?',
        'alternativas' => [
            'a' => 'Apagar el motor inmediatamente.',
            'b' => 'Poner la palanca de cambios en neutro.',
            'c' => 'Soltar el acelerador y reducir a cambios más bajos para usar el motor como freno.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 146,
        'capitulo' => 9
    ],
    911 => [
        'pregunta' => '¿Qué significa que una licencia de conducir tenga una restricción de "uso de lentes"?',
        'alternativas' => [
            'a' => 'Es una recomendación, pero no es obligatorio usarlos.',
            'b' => 'El conductor debe usar lentes de sol en días muy luminosos.',
            'c' => 'El conductor está obligado a usar sus lentes ópticos en todo momento mientras conduce.',
        ],
        'correcta' => 'c',
        'pagina_pdf' => 142,
        'capitulo' => 9
    ],
];


// Al final, los unes todos en el array principal $preguntas
$preguntas = $preguntas_capitulo_0 + 
             $preguntas_capitulo_1 +     
             $preguntas_capitulo_2 + 
             $preguntas_capitulo_3 + 
             $preguntas_capitulo_4 +
             $preguntas_capitulo_5 +
             $preguntas_capitulo_6 +
             $preguntas_capitulo_7 +
             $preguntas_capitulo_8 +
             $preguntas_capitulo_9;
?>