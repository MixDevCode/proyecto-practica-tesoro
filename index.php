<?php
require("estructura.php");

$valpregunta = 0;

if(isset($_GET['stand'])) {
    $stand = $_GET['stand'];
    $pregunta = $preguntas[$stand][$valpregunta];
} else {
    $stand = "";
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
        <h1 class="nombrejuego">Busqueda del Tesoro</h1>
        <?php if($stand == ""){
            echo "<h2 class='stand'>No se ha especificado el stand</h2>";
        } else {
        ?>
        <h2 class="stand"><?php echo $stands[$stand]; ?></h2>
        <div class="text-center"></div>
        <?php
        if(isset($_POST['respuesta'])){
        $respuesta = $_POST['respuesta'];
        if($respuesta == $respuestas[$stand][$pregunta]["correcta"]){
            echo "<p class='pregunta'>Correcto!</p>";
        } else {
            echo "<p class='pregunta'>Incorrecto! Vuelve a intentarlo más tarde!</p>";
        }
        } else {
        ?>
        <p class="pregunta">
            <?php echo $pregunta; ?>
        </p>
        
        <form action="index.php?stand=<? echo $stand; ?>" method="POST">
            <div class="mb-3">
                <?php foreach($respuestas[$stand][$pregunta]["posibles"] as $respuesta){
                    echo "<button class='btn btn-outline-secondary' type='submit' name='respuesta' value='{$respuesta}'>{$respuesta}</button><br><br>";
                } ?>
            </div>
        </form>
        <?php 
        }
        } ?>
    </div>
    <footer class="text-center text-white" id="footer" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f" style="font-size: 40pt; color: darkblue;"></i
            ></a>
                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram" style="font-size: 40pt; color: darkorchid;"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 30pt; color: darkred;">
            TECNICATURA SUPERIOR EN DESARROLLO DE SOFTWARE 2DO AÑO
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>