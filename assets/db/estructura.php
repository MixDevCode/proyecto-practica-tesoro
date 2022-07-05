<?php
$stands = array(
    "SF1" => "Software",
    "INF07" => "Infraestructura",
    "TRSM072" => "Turismo",
    "TXL0509" => "Textil"
);

$preguntas = array(
    "SF1" => array(
        "¿Qué aplicación web se usó para diseñar las imágenes de este juego?",
        "Lenguaje que se usó para disñar páginas web",
        "¿Cuál es la función principal de un código QR?",
        "¿Cuántos años dura la carrera en desarrollo de software?",
        "¿Qué tipo de programas se pueden crear programado?"
    ) ,
    "INF07" => array(
        "¿De qué se trata la Tecnicatura Superior en Infraestructura Informática?",
        "¿¿Cómo está compuesta una PC?",
        "¿Qué es una placa madre?",
        "¿Cuáles de estas opciones son periféricos de entrada?",
        "¿Cuál de estas opciones es un Sistema Operativo?"
    ) ,
    "TRSM072" => array(
        "¿Qué atractivos turísticos de Monte Caseros viste en el stand de turismo?",
        "¿Qué importante atractivo de la provincia de Misiones se encuentra en el Mapa Argentino?",
        "¿Qué actividad realizaste en el Stand de Turismo?",
        "¿Entre que calles se encuentra la Plaza Colon? ",
        "¿Cuántas provincias hay en el mapa de Argentina?"
    ),
    "TXL0509" => array(
        "¿Qué industria es la segunda más contaminante en el mundo?",
        "¿Cuántos litros de agua se ocupan para la confección de un jean?",
        "¿En dónde se encuentra un gran basural de ropa?",
        "¿Qué río de Buenos Aires se encuentra contaminado por la industria textil, entre otros?",
        "¿Cómo podemos cuidar el medio ambiente en la industria textil?"
    )
);

$respuestas = array(
    "SF1" => array(
        "¿Qué aplicación web se usó para diseñar las imágenes de este juego?" => array(
            "correcta" => "Canva",
            "posibles" => array(
                "Canva",
                "Paint",
                "Word",
                "Excel",
                "Facebook"
            )
        ),
        "Lenguaje que se usó para diseñar páginas web" => array(
            "correcta" => "HTML",
            "posibles" => array(
                "JVL",
                "HTML",
                "RCA",
                "Inglés",
                "Italiano"
            )
        ),
        "¿Cuál es la función principal de un código QR?" => array(
            "correcta" => "Guardar información digital en una imagen que puede ser escaneada con una cámara.",
            "posibles" => array(
                "Guardar información digital en una imagen que puede ser escaneada con una cámara.",}
                "Para pagar una deuda.",
                "Para comprar en línea.",
                "Para mejorar la velocidad de la computadora.",
                "Para cargar la batería del celular."
            )
        ),
        "¿Cuántos años dura la carrera en desarrollo de software?" => array(
            "correcta" => "3 años",
            "posibles" => array(
                "1 año",
                "2 años",
                "3 años",
                "5 años",
                "10 años"
            )
        ),
        "¿Qué tipo de programas se pueden crear programado?" => array(
            "correcta" => "Todas las anteriores",
            "posibles" => array(
                "Aplicaciones para Computadora",
                "Apps para Celulares",
                "Juegos",
                "Aplicaciones Web",
                "Todas las anteriores"
            )
        )
    ),
    "INF07" => array(
        "¿De qué se trata la Tecnicatura Superior en Infraestructura Informática?" => array(
            "correcta" => "Se trata de mantener, actualizar, analizar y resolver problemas derivados de la operación de productos tecnológicos.",
            "posibles" => array(
                "Se trata de asesoramiento de organización, constitución y administración de empresas de viaje.",
                "Se trata de programar, usar metodologías, desarrollo, animación 3D, mantenimiento y Desarrollo de Redes.",
                "Se trata de mantener, actualizar, analizar y resolver problemas derivados de la operación de productos tecnológicos.",
                "Desarrollar tareas de apoyo y asistencia técnica, supervisión de operaciones y procesos, gestión y control de la producción en las distintas áreas de la industria textil.",
                "Todas son correctas"
            )
        ),
        "¿Cómo está compuesta una PC?" => array(
            "correcta" => "Software y Hardware",
            "posibles" => array(
                "Programas informáticos.",
                "Solo por el Software.",
                "Solo por el Hardware",
                "Software y Hardware",
                "Todas son incorrectas"
            )
        ),
        "¿Qué es una placa madre?" => array(
            "correcta" => "Es la tarjeta de circuito integrado principal del sistema informático, a la que se acoplan los demás componentes que constituyen el computador.",
            "posibles" => array(
                "Es la tarjeta de circuito integrado principal del sistema informático, a la que se acoplan los demás componentes que constituyen el computador.",
                "Es el cerebro de la computadora",
                "Es un componente de hardware o software que guarda datos para que las solicitudes futuras de esos datos se puedan atender con mayor rapidez",
                " Proporciona una de las principales funciones de la computación moderna: el almacenamiento de información y conocimiento. ",
                "Todas son incorrectas"
            )
        ),
        "¿Cuáles de estas opciones son periféricos de entrada?" => array(
            "correcta" => "Todas las opciones son correctas",
            "posibles" => array(
                "Mouse",
                "Scanner",
                "Micrófono",
                "Teclado",
                "Todas las opciones son correctas"
            )
        ),
        "¿Cuál de estas opciones es un Sistema Operativo?" => array(
            "correcta" => "Windows",
            "posibles" => array(
                "Power Point",
                "Word",
                "Office",
                "Windows",
                "Firefox"
            )
        ),
    ),
    "TXL0509" => array(
        "¿Qué industria es la segunda más contaminante en el mundo?" => array(
            "correcta" => "La industria textil",
            "posibles" => array(
                "La industria textil",
                "La industria petrolera",
                "La industria automovilística",
                "La industria de la música ",
                "La industria eléctrica "
            )
        ),
        "¿Cuántos litros de agua se ocupan para la confección de un jean?" => array(
            "correcta" => "7500",
            "posibles" => array(
                "20.000",
                "15.000",
                "1.000",
                "7.500",
                "No se ocupa agua"
            )
        ),
        "¿En dónde se encuentra un gran basural de ropa?" => array(
            "correcta" => "Desierto de atacama",
            "posibles" => array(
                "Desierto patagónico",
                "Mendoza ",
                "Desierto de atacama",
                "Buenos Aires",
                "Córdoba"
            )
        ),
        "¿Qué río de Buenos Aires se encuentra contaminado por la industria textil, entre otros?" => array(
            "correcta" => "Riachuelo",
            "posibles" => array(
                "Riachuelo",
                "Río cuarto",
                "Río Uruguay",
                "Río Paraná ",
                "Río de La Plata"
            )
        ),
        "¿Cómo podemos cuidar el medio ambiente en la industria textil?" => array(
            "correcta" => "Reciclando ropa",
            "posibles" => array(
                "Comprando mucha ropa",
                "Reciclando ropa",
                "Guardando ropa sin usar",
                "Tirando ropa en desuso ",
                "Quemando la ropa"
            )
        ),
    ),
    "TRSM072" => array(
        "¿Qué atractivos turísticos de Monte Caseros viste en el stand de turismo?" => array(
            "correcta" => "Monumento a las lavanderas ",
            "posibles" => array(
                "Club progreso",
                "Monumento a las lavanderas",
                "Club Barrio Florida",
                "Mesa del indio",
                "Arco de entrada"
            )
        ),
        "¿Qué importante atractivo de la provincia de Misiones se encuentra en el Mapa Argentino?" => array(
            "correcta" => "Cataratas de Iguazú ",
            "posibles" => array(
                "Puna de Atacama",
                "Cataratas de Iguazú ",
                "Esteros del Ibera ",
                "Lago Nahuel Huapi",
                "Esteros de Iberá"
            )
        ),
        "¿Qué actividad realizaste en el Stand de Turismo?" => array(
            "correcta" => "Rompecabezas ",
            "posibles" => array(
                "Rompecabezas",
                "Ruleta",
                "Preguntados ",
                "Pasapalabras",
                "Autodefinido"
            )
        ),
        "¿Entre qué calles se encuentra la Plaza Colon? " => array(
            "correcta" => "Rivadavia, Vicente Mendoza, Bergamini y Colón ",
            "posibles" => array(
                "Alvear, Cristobal Colón, Pelegrini, Bergamini",
                "Eva Duarte de Peron y Pellegrini",
                "Colon, Tucumán, Salta y Juan Pujol ",
                "Rivadavia, Vicente Mendoza, Bergamini y Colón ",
                "Corrientes, Buenos Aires y Colón"
            )
        ),
        "¿Cuántas provincias hay en el mapa de Argentina?" => array(
            "correcta" => "23",
            "posibles" => array(
                "13",
                "20",
                "23",
                "19",
                "26"
            )
        )
    )
);
?>