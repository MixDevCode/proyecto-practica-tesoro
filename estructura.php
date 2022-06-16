<?php
$stands = array(
    "SF1" => "Software",
    "INF07" => "Infraestructura",
    "TRSM072" => "Turismo",
    "TXL0509" => "Textil"
);

$preguntas = array(
    "SF1" => array(
        "Formato de imagen",
        "Formato de página web",
        "¿Qué significa la sigla S.O.?",
        "¿Qué es internet?",
        "¿Qué es YouTube?"
    ) ,
    "INF07" => array(
        "¿Qué es el Hardware?",
        "¿Qué es lo más esencial de una computadora?",
        "¿Qué es un CPU?",
        "¿Qué es un monitor?",
        "¿Quién arregla una computadora?"
    ) ,
    "TRSM072" => array(
        "¿Cuántas comparsas hay en Monte Caseros?",
        "¿Cuál de estas fiestas correntinas existen en Monte Caseros?",
        "¿Cuál de los siguientes eventos/acciones tiene relación con el turismo?",
        "Mínimamente, ¿qué lenguajes debe manejar un trabajador en turismo en Monte Caseros?",
        "¿Qué importancia tienen los carnavales para el turismo en Monte Caseros?"
    ),
    "TXL0509" => array(
        "¿Cuántas fábricas textiles existen en Monte Caseros?",
        "¿Cuál de estos productos comenzó a fabricar la Fábrica Textil en Monte Caseros por la pandemia?",
        "¿Qué fibras se usan en la industria textil?",
        "¿De qué ser vivo se extrae el algodón?",
        "¿De qué ser vivo de extrae la lana?"
    )
);

$respuestas = array(
    "SF1" => array(
        "Formato de imagen" => array(
            "correcta" => "jpg",
            "posibles" => array(
                "http",
                "php",
                "jgp",
                "peg",
                "jpg"
            )
        ),
        "Formato de página web" => array(
            "correcta" => "html",
            "posibles" => array(
                "jpg",
                "MIDI",
                "http",
                "python",
                "html"
            )
        ),
        "¿Qué significa la sigla S.O.?" => array(
            "correcta" => "Sistema Operativo",
            "posibles" => array(
                "Sincronización Óptima",
                "Sistema Operativo",
                "Standard Operation",
                "Sostén de Objeto",
                "Sintaxis.org"
            )
        ),
        "¿Qué es internet?" => array(
            "correcta" => "Una red mundial",
            "posibles" => array(
                "Una red mundial",
                "Es la Web",
                "WiFi",
                "Una red hogar",
                "Es un programa"
            )
        ),
        "¿Qué es YouTube?" => array(
            "correcta" => "Una página web de videos",
            "posibles" => array(
                "Una página web de videos",
                "Una red social",
                "Un videojuego",
                "Una canción",
                "Una foto"
            )
        )
    ),
    "INF07" => array(
        "¿Qué es el Hardware?" => array(
            "correcta" => "Todo lo que se toca de una computadora",
            "posibles" => array(
                "Un programa",
                "Todo lo que se toca de una computadora",
                "Un teclado",
                "La persona que trabaja con la PC",
                "Un procesador"
            )
        ),
        "¿Qué es lo más esencial de una computadora?" => array(
            "correcta" => "RAM",
            "posibles" => array(
                "Disco duro",
                "Google",
                "Memoria Caché",
                "Bios",
                "RAM"
            )
        ),
        "¿Qué es un CPU?" => array(
            "correcta" => "Procesador",
            "posibles" => array(
                "Un escritorio",
                "Una caja",
                "Procesador",
                "Una ONG",
                "Una herramienta"
            )
        ),
        "¿Qué es un monitor?" => array(
            "correcta" => "Una pantalla",
            "posibles" => array(
                "Una pantalla",
                "Una televisión",
                "Una computadora",
                "Un programa",
                "Un parlante"
            )
        ),
        "¿Quién arregla una computadora?" => array(
            "correcta" => "Un técnico",
            "posibles" => array(
                "Un electriciista",
                "Un técnico",
                "Un YouTuber",
                "Un programador",
                "Una maestra"
            )
        ),
    ),
    "TRSM072" => array(
        "¿Cuántas comparsas hay en Monte Caseros?" => array(
            "correcta" => "7",
            "posibles" => array(
                "1",
                "3",
                "4",
                "7",
                "8"
            )
        ),
        "¿Cuál de estas fiestas correntinas existen en Monte Caseros?" => array(
            "correcta" => "Ninguna de las anteriores",
            "posibles" => array(
                "Fiesta Nacional del Chamamé",
                "Fiesta NAcional del Surubí",
                "Fiesta Nacional de la Naranja",
                "Fiesta del Carnavaal de Frontera",
                "Ninguna de las anteriores"
            )
        ),
        "¿Cuál de los siguientes eventos/acciones tiene relación con el turismo?" => array(
            "correcta" => "Fiesta de la Sandía",
            "posibles" => array(
                "Campeonato de futbol local",
                "Fiesta de la Sandía",
                "Carreraas universitarias",
                "Pavimentación de calles",
                "Ninguna de las anteriores"
            )
        ),
        "Mínimamente, ¿qué lenguajes debe manejar un trabajador en turismo en Monte Caseros?" => array(
            "correcta" => "Inglés, Portugués, Español",
            "posibles" => array(
                "Inglés, Español, Guaraní",
                "Argentino, Inglés, Alemán",
                "Inglés, Portugués, Español",
                "Brasilero, Ingés, Chino",
                "Uruguayo, Brasilero, Inglés"
            )
        ),
        "¿Qué importancia tienen los carnavales para el turismo en Monte Caseros?" => array(
            "correcta" => "Mucha",
            "posibles" => array(
                "Extrema (es el único turismo que hay)",
                "Mucha",
                "Poca",
                "Casi nada",
                "Nada"
            )
        ),
    ),
    "TXL0509" => array(
        "¿Cuántas fábricas textiles existen en Monte Caseros?" => array(
            "correcta" => "1",
            "posibles" => array(
                "1",
                "3",
                "4",
                "Nunca existió ninguna",
                "Existía una, pero cerró"
            )
        ),
        "¿Cuál de estos productos comenzó a fabricar la Fábrica Textil en Monte Caseros por la pandemia?" => array(
            "correcta" => "Barbijos",
            "posibles" => array(
                "Zapatillas John Foos",
                "Productos Adidas",
                "Todo tipo de ropa",
                "Barbijos",
                "Ninguna de las anteriores"
            )
        ),
        "¿Qué fibras se usan en la industria textil?" => array(
            "correcta" => "Fibras naturales, artificiales y sintéticas",
            "posibles" => array(
                "Fibras naturales",
                "Fibras naturales y artificiales",
                "Fibras naturales, artificiales y sintéticas",
                "Fibras de hilo, lana y algodón",
                "Ellos no usan fibras, las producen"
            )
        ),
        "¿De qué ser vivo se extrae el algodón?" => array(
            "correcta" => "Planta de algodón",
            "posibles" => array(
                "Oveja",
                "Perros Caniche",
                "Dientes de león",
                "Planta de algodón",
                "No se extrae de ningún animal o planta"
            )
        ),
        "¿De qué ser vivo de extrae la lana?" => array(
            "correcta" => "Oveja",
            "posibles" => array(
                "Perros Caniche",
                "Oveja",
                "Abeja",
                "Oso polar",
                "Planta de algodón"
            )
        )
    )
);
?>