<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda del tesoro</title>
    <meta charset="UTF-8">
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
        //Si no está definida la cookie de ganador
        if(!isset($_COOKIE["ganador"])) {
            //Mostrar mensaje de que no se vale hacer trampa
            echo "<h2 class='stand'>No se vale hacer trampa!</h2>";
        } else { // Si está definida
            //Mostrar mensaje de ganador
            echo '<img class="img-fluid" src="assets/img/ganador.jpeg" />';
        }
        ?>
    </div>
    <footer class="text-center text-white" id="footer" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <!-- Sitio Web -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://ifdcarcano-crr.infd.edu.ar/sitio/" target="_blank" role="button" data-mdb-ripple-color="dark"><i class="fa-solid fa-globe" style="font-size: 40pt; color: darkgreen;"></i
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>