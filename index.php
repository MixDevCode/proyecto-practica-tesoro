<?php
// Llamamos al archivo estructura.php que contiene las preguntas, respuestas y nombres de stands
require("estructura.php");

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
    <div class="text-center margen" id="content-wrap">
        <h1 class="nombrejuego">Búsqueda del Tesoro</h1>
        <?php
        //Si no se ha elegido un stand
        if(!isset($_GET['stand']) || $_GET['stand'] == ""){ 
            //Se muestra un mensaje de error
            echo "<h2 class='stand'>No se ha especificado el stand</h2>"; 
        } else { //Si se ha elegido un stand mostrar la pregunta
        ?>
        <h2 class="stand"><?php echo $stands[$stand]; ?></h2>
        <div class="text-center"></div>
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
                echo "<p class='pregunta'>Correcto!</p>"; 
            } else { // Si no es correcta
                //Se muestra un mensaje de incorrecto
                echo "<p class='pregunta'>Incorrecto! Vuelve a intentarlo más tarde!</p>"; 
            }
        } else { //Si no se ha enviado una respuesta mostrar todo lo de abajo
        ?>
        <p class="pregunta">
            <?php echo $pregunta; ?> <!-- Se muestra la pregunta -->
        </p>
        
        <form action="index.php?stand=<?php echo $stand; ?>" method="POST">
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
        } //Fin del if de si se ha enviado una respuesta
        } //Fin del if de si se ha elegido un stand
        ?>
    </div>
    <footer class="text-center text-white" id="footer" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f" style="font-size: 40pt; color: darkblue;"></i
            ></a>
                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram" style="font-size: 40pt; color: darkorchid;"></i
            ></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 30pt; color: darkred;">
            TECNICATURA SUPERIOR EN DESARROLLO DE SOFTWARE 2DO AÑO
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>