<?php
// Llamamos al archivo estructura.php que contiene las preguntas, respuestas y nombres de stands
require("assets/db/estructura.php");

// Creamos la variable puntos
$puntos = 0;

//Crear una cookie para cada stand
foreach ($stands as $nombre) {
    if (!isset($_COOKIE[$nombre])) {
        setcookie($nombre, 0, time() + 1 * 24 * 60 * 60);
    } else {
        if($_COOKIE[$nombre] == 1) {
            $puntos += 1;
            $_COOKIE[$nombre] = 2;
        }
    }
}
// Si los puntos son igual a la cantidad de stands, entonces ganó
if($puntos == count($stands)) {
    setcookie("ganador", 1, time() + 1 * 24 * 60 * 60);
    header("Location: ganador.php");
    exit();
}

// Generamos un número aleatorio entre 0 y 4 para las 5 preguntas posibles
$valpregunta = rand(0, 4); 

if(isset($_GET['stand']) && !($_GET['stand'] == "")) { //Si se ha elegido un stand y no está vacío
    //Se guarda el stand elegido en una variable
    $stand = $_GET['stand'];

    //Se guarda la pregunta seleccionada aleatoriamente en una variable
    $pregunta = $preguntas[$stand][$valpregunta]; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Búsqueda del tesoro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9604b60dc2.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Logo del Instituto -->
        <div class="text-center">
            <img class="img-fluid" src="assets/img/logo-instituto.png" />
            <hr>
        </div>
    </header>
    <div  class="text-center margen" id="content-wrap">
        <!-- Título del Juego --> 
        <h1 class="nombrejuego">Búsqueda del Tesoro</h1>
        <?php
        // Si la cookie tutorial está definida no mostrar imagen, si no, mostrar imagen
        if(!isset($_COOKIE['tutorial'])) {
            echo "<img class='img-fluid' src='assets/img/tutorial.jpeg' onclick='irAPregunta();' id='tutorial' />";
            // Establecer cookie tutorial para que no se muestre la imagen de nuevo, de duracion de 1 dia
            setcookie("tutorial", 1, time() + 1 * 24 * 60 * 60);
        }
        ?>
        <?php
        //Si no se ha elegido un stand
        if(!isset($_GET['stand']) || $_GET['stand'] == ""){ 
            //Se muestra un mensaje de error
            echo "<h2 class='stand'>No se ha especificado el stand</h2>"; 
        } else { //Si se ha elegido un stand mostrar la pregunta
        ?>
        <!-- Stand actual -->
        <h2 id="stand" <?php if(!isset($_COOKIE['tutorial'])) echo "style='display: none;'";?> class="stand"><?php echo $stands[$stand]; ?></h2>
        <?php
            //Si la cookie del stand está definida en 1 o en 2 entonces mostrar mensaje de error
            if (isset($_COOKIE[$stands[$stand]]) && ($_COOKIE[$stands[$stand]] == 1 || $_COOKIE[$stands[$stand]] == 2)) {
                echo "<p class='pregunta'>Ya visitaste este stand, busca otro!</p>";
                echo "<p class='pregunta'>Te faltan ".count($stands)-$puntos." stands para ganar!</p>";
            } else {
        ?>
        <?php
        //Si se ha enviado una respuesta
        if(isset($_POST['respuesta'])){ 
            //Se guarda la respuesta en una variable
            $respuesta = $_POST['respuesta'];

            //Se guarda la pregunta actual
            $preguntact = $_POST['pregunta']; 

            //Si la respuesta es correcta
            if($respuesta == $respuestas[$stand][$preguntact]["correcta"]){ 
                //Se muestra mensaje de correcto
                echo "<p class='pregunta'>Correcto! Busca otro código QR para seguir jugando!</p>";
                //Se cambia el valor de la cookie del stand a 1
                setcookie($stands[$stand], 1, time() + 1 * 24 * 60 * 60);
                echo "<p class='pregunta'>Te faltan ".count($stands)-($puntos+1)." stands para ganar!</p>";
                if($puntos+1 == count($stands)) {
                    setcookie("ganador", 1, time() + 1 * 24 * 60 * 60);
                    header("Location: ganador.php");
                    exit();
                }
            } else { // Si no es correcta
                //Se muestra un mensaje de incorrecto
                echo "<p class='pregunta'>Incorrecto! Vuelve a intentarlo dentro de 3 minutos!</p>"; 
                echo "<p class='pregunta'>Te faltan ".count($stands)-$puntos." stands para ganar!</p>";
                //Se establece una cookie llamada fallo de duracion de 3 minutos con el valor de 1
                setcookie("fallo{$stands[$stand]}", 1, time() + 3 * 60);
            }
        } else { //Si no se ha enviado una respuesta mostrar todo lo de abajo
            //Si la cookie fallo está definida, entonces mostrar error de volver a intentarlo en cuanto
            //se termine la cookie
            if(isset($_COOKIE["fallo{$stands[$stand]}"])) {
                echo "<p class='pregunta'>¡Fallaste al responder anteriormente.. Vuelve a intentarlo más tarde!</p>";
                echo "<p class='pregunta'>Te faltan ".count($stands)-$puntos." stands para ganar!</p>";
            } else {
        ?>
        <p class="pregunta" id="pregunta" <?php if(!isset($_COOKIE['tutorial'])) echo "style='display: none;'";?>>
            <?php echo $pregunta; ?> <!-- Se muestra la pregunta -->
        </p>
        
        <form action="index.php?stand=<?php echo $stand; ?>" method="POST" <?php if(!isset($_COOKIE['tutorial'])) echo "style='display: none;'";?> id="formulario">
            <div class="mb-3">
                <input type="hidden" name="pregunta" value="<?php echo $pregunta ?>" />
                <?php 
                //Para cada respuesta posible
                foreach ($respuestas[$stand][$pregunta]["posibles"] as $respuesta) {
                    //Crear un botón mostrando las respuestas posibles
                    echo "<button class='btn btn-outline-secondary' type='submit' name='respuesta' value='{$respuesta}'>{$respuesta}</button><br><br>";
                } 
                ?>
            </div>
        </form>
        <?php
            } //Fin del if si tiene un fallo
        } //Fin del if de si ya se ha respondido el stand
        } //Fin del if de si se ha enviado una respuesta
        } //Fin del if de si se ha elegido un stand
        ?>
    </div>
    <footer class="text-center text-white" id="footer" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <!-- Sitio Web -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://ifdcarcano-crr.infd.edu.ar/sitio/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fa-solid fa-school" style="font-size: 40pt; color: darkgreen;"></i
            ></a>
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/isfdcarcano" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f" style="font-size: 40pt; color: darkblue;"></i
            ></a>
                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/isfdcarcano/" role="button" target="_blank" data-mdb-ripple-color="dark"><i class="fab fa-instagram" style="font-size: 40pt; color: darkorchid;"></i
            ></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 30pt; color: darkred;">
            TECNICATURA SUPERIOR EN DESARROLLO DE SOFTWARE 2DO AÑO
        </div>
    </footer>
    <script type="text/javascript">
        function irAPregunta() {
            const tutorial = document.getElementById('tutorial');
            const pregunta = document.getElementById('pregunta');
            const formulario = document.getElementById('formulario');
            const stand = document.getElementById('stand');
            tutorial.style.display = 'none';
            stand.style.display = 'block';
            pregunta.style.display = 'block';
            formulario.style.display = 'block';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>